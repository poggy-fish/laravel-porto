<template>
	<div class="product-default">
		<figure>
			<div
				class="d-loading-container"
				:class="{ 'd-none': !modalLoading }"
			>
				<div class="d-loading small"></div>
			</div>
			<router-link
				:to="'/product/default/' + product.slug"
				v-if="product.media.length > 0"
				:key="'media-0'"
			>
				<img
					v-for="(medium, index) in media"
					v-lazy="$root.getUrl(medium.copy_link, true)"
					:key="index"
					width="300"
					height="300"
					:alt="medium.alt_text ? medium.alt_text : 'product'"
				/>
			</router-link>
			<router-link
				:to="'/product/default/' + product.slug"
				v-else
				:key="'media-1'"
			>
				<img
					v-lazy="
						$root.getUrl(
							'server/images/placeholder-img-300x300.png'
						)
					"
					width="300"
					height="300"
					alt="product"
				/>
			</router-link>
			<div class="label-group">
				<div class="product-label label-hot" v-if="product.featured">
					HOT
				</div>
				<div
					class="product-label label-new"
					v-if="showNewBadge(product)"
				>
					NEW
				</div>
				<div
					class="product-label label-sale"
					v-if="
						product.type == 'simple' &&
						product.min_max_price[0] != product.min_max_price[1]
					"
				>
					-{{
						getSaleRate(
							product.min_max_price[0],
							product.min_max_price[1]
						)
					}}%
				</div>
			</div>

			<div
				class="out-of-stock-label"
				v-if="product.stock_status == 'out-of-stock'"
			>
				OUT OF STOCK
			</div>
		</figure>
		<div class="product-details">
			<h3 class="product-title">
				<router-link :to="'/product/default/' + product.slug">
					{{ product.name }}
				</router-link>
			</h3>
			<div
				class="ratings-container"
				v-if="getProductSettings.showRatings"
			>
				<div class="product-ratings">
					<span
						class="ratings"
						:style="'width:' + 20 * product.average_rating + '%'"
					></span>
					<span class="tooltiptext tooltip-top">{{
						product.average_rating.toFixed(2)
					}}</span>
				</div>
			</div>

			<div class="price-box" v-if="product.type == 'simple'">
				<del
					class="old-price"
					v-if="product.min_max_price[0] != product.min_max_price[1]"
				>
					<span
						v-html="
							formatPrice(product.min_max_price[1]) + priceSuffix
						"
					>
					</span>
				</del>
				<span
					class="product-price"
					v-html="formatPrice(product.min_max_price[0]) + priceSuffix"
				></span>
			</div>
			<div class="price-box" v-if="product.type == 'variable'">
				<span
					class="product-price"
					v-html="formatPrice(product.min_max_price[0]) + priceSuffix"
				></span>
				<span
					class="product-price"
					v-if="product.min_max_price[0] !== product.min_max_price[1]"
				>
					–
					<span
						v-html="
							formatPrice(product.min_max_price[1]) + priceSuffix
						"
					></span>
				</span>
			</div>
		</div>
	</div>
</template>

<script>
import { mapGetters, mapMutations } from "vuex";

export default {
	props: {
		product: {
			type: Object,
			default: function () {
				return {
					type: "simple",
					sale_schedule: false,
					virtual: false,
					downloadable: false,
					tax_status: "taxable",
					tax_type_id: 1,
					allow_backorder: "no",
					stock_status: "in-stock",
					manage_stock: false,
					media: [],
					tags: [],
					files: [],
				};
			},
		},
	},
	data: function () {
		return {
			wishLoading: false,
			modalLoading: false,
		};
	},
	computed: {
		...mapGetters("wishlist", ["isInWishlist"]),
		...mapGetters("cart", ["canAddToCart"]),
		...mapGetters("setting", [
			"getProductSettings",
			"priceSuffix",
			"formatPrice",
			"showNewBadge",
		]),
		media: function () {
			return this.product.media.slice(0, 2);
		},
		isCountdown: function () {
			return (
				this.getProductSettings.showProductCountDown &&
				this.product.type == "simple" &&
				this.product.sale_price &&
				this.product.sale_schedule &&
				new Date(this.product.sale_end) > new Date()
			);
		},
	},
	methods: {
		getSaleRate: function (salePrice, price) {
			return ((1 - salePrice / price) * 100).toFixed();
		}
	},
};
</script>