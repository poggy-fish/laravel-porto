<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\Category;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\ProductReview;
use App\Models\User;
use App\Models\Vendor;
use Arr;
use Helper;

class ProductController extends Controller
{
    /**
     * Get single product
     *
     * @param \Iluuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getProduct(Request $request, $slug) {
        $author_email = $request->input('author_email');
        $product = Product::with([
                    'media',
                    'categories',
                    'attributes',
                    'tags',
                    'reviews' => function ($query) use ($author_email) {
                        $query->where('approved', true)->orWhere('author_email', $author_email);
                    }
            ])
            ->withCount('approvedReviews')
            ->where('slug', $slug)
            ->first();

        if (empty($product) || $product->parent > 0) {
            return abort(500, 'MODEL_NOT_FOUND');
        }

        $variations = array();
        $attributes = array();
        if ($product->type == 'variable') {
            $variations = Product::with(['media'])
                                    ->where('parent', $product->id)
                                    ->get();
            $attributes = Attribute::with('terms')->get();
        }

        $categories = $product->categories->pluck('id');
        $related_products = Product::with(['media:copy_link,width,height', 'categories'])
                                ->where('id', '!=', $product->id)
                                ->whereHas('categories', function ($query) use ($categories) {
                                    $query->whereIn('category_id', $categories);
                                })
                                ->orderBy('id', 'asc')
                                ->latest()
                                ->take(5)
                                ->get();
        $upsells = Product::with('media:copy_link,width,height')->find($product->upsells);
        
        $featured_products = Product::with(['media', 'categories'])
                                    ->where('parent', 0)
                                    ->withCount('approvedReviews')
                                    ->where('featured', true)
                                    ->has('media')
                                    ->take(3)
                                    ->get();
        $new_arrivals = Product::with(['media', 'categories'])
                                ->where('parent', 0)
                                ->withCount('approvedReviews')
                                ->where('created_at', '>', date(strtotime('last month')))
                                ->has('media')
                                ->latest()
                                ->take(3)
                                ->get();

        $top_rates_products = Product::leftJoinSub('select product_id, avg(rating) as average_rating from product_reviews group by product_id', 'reviews', function ($join) {
                                            $join->on('id', '=', 'reviews.product_id');
                                        })
                                        ->with(['media', 'categories'])
                                        ->where('parent', 0)
                                        ->orderByDesc('average_rating')
                                        ->take(3)
                                        ->get();

        $order_items = OrderItem::selectRaw('sum(qty) as amount, product_id')
                                    ->groupBy('product_id');

        $best_sellings = Product::with(['media'])
                                    ->where('type', 'simple')
                                    ->leftJoinSub($order_items, 'items', function ($join) {
                                            $join->on('id', '=', 'items.product_id');
                                    })
                                    ->orderByDesc('items.amount')
                                    ->limit(3)
                                    ->get()->toArray();

        foreach ($best_sellings as &$best) {
            if ((count($best['media']) == 0) && $best['parent'] != 0) {
                $best['media'] = Product::with(['media'])->findOrFail($best['parent'])->media;
            }
        }

        $vendor = User::with(['vendor:user_id,banner_image,profile_image,country,state,store_name', 'vendor.banner:id,copy_link,width,height', 'vendor.profile:id,copy_link,width,height'])
                        ->where('id', $product->author_id)
                        ->select(['created_at', 'id', 'role_id'])
                        ->first();
        if ($vendor) {
            $vendor_products = Product::where('author_id', $vendor->id)
                                ->where('parent', 0)
                                ->get()
                                ->toArray();
            
            $vendor->rating = array_column($vendor_products, 'average_rating');
        }

        if (count($vendor->rating) > 0) {
            $vendor->rating = round(array_sum($vendor->rating) / count($vendor->rating), 2);
        } else {
            $vendor->rating = 0;
        }

        $results = [
            'product' => $product,
            'variations' => $variations,
            'attributes' => $attributes,
            'relatedProducts' => $related_products,
            'upsells' => $upsells,
            'featuredProducts' => $featured_products,
            'newArrivals' => $new_arrivals,
            'topRates' => $top_rates_products,
            'bestSellings' => $best_sellings,
            'vendor' => $vendor
        ];

        if ($request->has('sidebar')) {
            $category_controller = new CategoryController();
            $categories = $category_controller->categoryTreeForVue('product');
            $results = Arr::add($results, 'categories', $categories);
        }
                            

        return $results;
    }

    /**
     * Get single product for quick view
     *
     * @param \Iluuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function getQuickViewProduct($slug) {
        $product = Product::with(['media', 'categories', 'attributes', 'tags'])
                            ->where('slug', $slug)
                            ->withCount('reviews')
                            ->first();
        $variations = array();
        $attributes = array();
        if ($product->type == 'variable') {
            $variations = Product::with(['media'])
                                    ->where('parent', $product->id)
                                    ->get();
            $attributes = Attribute::with('terms')->get();
        }
        
        return [
            'product' => $product,
            'variations' => $variations,
            'attributes' => $attributes,
        ];
    }

    /**
     * store reviews for a product
     *
     * @param \Iluuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function productReview(Request $request) {
        $request->validate([
            'content' => 'max:1000'
        ]);
        $review = new ProductReview();
        $review->product_id = $request->input('product_id');
        $review->author_name = $request->input('author_name');
        $review->author_email = $request->input('author_email');
        $review->content = Helper::stripAllTags($request->input('content'));
        $review->rating = $request->input('rating');

        $user = User::where('email', $request->input('author_email'))
                        ->first();
        if ($user && $user->role_id == 7) {
            $review->approved = true;
        } else {
            $review->approved = false;
        }

        $review->save();

        return array('review' => $review);
    }
}
