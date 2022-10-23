<template>
    <main class="main home">
        <div class="container">
            <div class="row row-sm">
                <div class="col-lg-9">
                    <owl-carousel-component
                        class="home-slider slide-animate"
                        v-animate
                        :options="{
                            items: 1,
                            margin: 0,
                            loop: false,
                            nav: true,
                            dots: false,
                        }"
                    >
                        <div class="home-slide">
                            <figure>
                                <img
                                    :src="
                                        $root.getUrl(
                                            'client/images/slider/home_slide1.jpg'
                                        )
                                    "
                                    alt="slide"
                                />
                            </figure>
                            <div
                                class="slide-content appear-animate"
                                data-animation-name="rotateInUpLeft"
                            >
                                <h2 class="text-right">
                                    electronic<br />deals
                                </h2>
                                <div class="skew-box-group">
                                    <span class="skew-box"
                                        >Exclusive COUPON</span
                                    >
                                    <h3 class="sale-off skew-box">
                                        <span>$100</span>off
                                    </h3>
                                </div>
                                <button class="btn">View All Now</button>
                            </div>
                            <p>* Only 200 Available</p>
                        </div>
                        <div class="home-slide">
                            <figure>
                                <img
                                    :src="
                                        $root.getUrl(
                                            'client/images/slider/home_slide2.jpg'
                                        )
                                    "
                                    alt="slide"
                                />
                            </figure>
                            <div
                                class="slide-content content-left appear-animate"
                                data-animation-name="rotateInUpLeft"
                                v-animate
                            >
                                <h2 class="text-left">
                                    Top brands<br />smartphones
                                </h2>
                                <div class="skew-box-group">
                                    <span class="skew-box">STARTING FROM</span>
                                    <span class="skew-box">$199</span>
                                </div>
                                <button class="btn">View All Now</button>
                            </div>
                        </div>
                    </owl-carousel-component>
                </div>
                <div class="col-lg-3">
                    <owl-carousel-component
                        class="product-slider"
                        v-if="dealProducts.length > 0"
                    >
                        <div
                            class="product-slide"
                            v-for="(product, index) in dealProducts"
                            :key="'deal-' + index"
                        >
                            <h3>Flash Deals</h3>
                            <product-nine-component
                                :product="product"
                            ></product-nine-component>
                            <count-down-component
                                class="text-center"
                                :sale-end="product.sale_end"
                            ></count-down-component>
                        </div>
                    </owl-carousel-component>
                </div>
            </div>

            <section class="service-section appear-animate" v-animate>
                <div class="col-md-6 col-xl-3">
                    <div class="service-widget">
                        <i class="service-icon icon-shipping"></i>
                        <div class="service-content">
                            <h3 class="service-title">
                                free shipping & return
                            </h3>
                            <p>Free shipping on all orders over $99.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-widget">
                        <i class="service-icon icon-money"></i>
                        <div class="service-content">
                            <h3 class="service-title">money back guarantee</h3>
                            <p>100% money back guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-widget">
                        <i class="service-icon icon-support"></i>
                        <div class="service-content">
                            <h3 class="service-title">online support 24/7</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="service-widget">
                        <i class="service-icon icon-secure-payment"></i>
                        <div class="service-content">
                            <h3 class="service-title">Secure Payment</h3>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="product-panel appear-animate" v-animate>
                <div class="section-title">
                    <h2>Featured Products</h2>
                </div>

                <div class="row row-sm">
                    <owl-carousel-component
                        v-if="featuredProducts.length > 0"
                        class="show-nav-hover"
                        :options="{
                            margin: 0,
                            items: 2,
                            autoplayTimeout: 5000,
                            dots: false,
                            nav: false,
                            responsive: {
                                576: {
                                    items: 3,
                                },
                                992: {
                                    items: 4,
                                },
                                1200: {
                                    items: 5,
                                },
                            },
                        }"
                        key="featured-products"
                    >
                        <product-three-component
                            :product="product"
                            v-for="(product, index) in featuredProducts"
                            :key="'featured-' + index"
                        ></product-three-component>
                    </owl-carousel-component>

                    <owl-carousel-component
                        class="show-nav-hover"
                        v-else
                        :options="{
                            margin: 0,
                            items: 2,
                            autoplayTimeout: 5000,
                            dots: false,
                            nav: false,
                            responsive: {
                                576: {
                                    items: 3,
                                },
                                992: {
                                    items: 4,
                                },
                                1200: {
                                    items: 5,
                                },
                            },
                        }"
                    >
                        <div
                            class="product-loading-overlay"
                            v-for="item in [1, 2, 3, 4, 5]"
                            :key="'featured-skel-' + item"
                        ></div>
                    </owl-carousel-component>
                </div>
            </section>

            <div class="row row-sm">
                <div
                    class="col-lg-6 appear-animate"
                    v-animate
                    data-animation-name="fadeInLeftShorter"
                >
                    <div
                        class="banner-product bg-grey"
                        v-lazy:background-image="
                            $root.getUrl('client/images/banners/banner-1.jpg')
                        "
                        style="background-position: 50%;"
                    >
                        <h2>ACTION <br />CAMERAS</h2>
                        <div class="ml-3 primary-background">
                            <h3 class="skew-box">Starting from</h3>
                            <h4 class="skew-box">
                                <span class="product-price">$399</span
                                ><span class="old-price">$499</span>
                            </h4>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-6 appear-animate"
                    v-animate
                    data-animation-name="fadeInRightShorter"
                >
                    <div
                        class="banner-product bg-grey"
                        v-lazy:background-image="
                            $root.getUrl('client/images/banners/banner-2.jpg')
                        "
                        style="background-position: 48% 50%;"
                    >
                        <h2>FOR ALL <br />STYLES</h2>
                        <div class="ml-3 secondary-background">
                            <h3 class="skew-box">Starting from</h3>
                            <h4 class="skew-box">
                                <span class="product-price">$399</span
                                ><span class="old-price">$499</span>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            <section
                class="product-category-panel mb-7 appear-animate"
                data-animation-name="fadeInUpShorter"
                v-animate
            >
                <div class="section-title mb-4">
                    <h2>Top Categories</h2>
                </div>

                <div class="row row-sm">
                    <owl-carousel-component
                        v-if="topCategories.length > 0"
                        class="product-category-intro text-center"
                        :options="{
                            margin: 0,
                            items: 2,
                            autoplayTimeout: 5000,
                            dots: false,
                            nav: false,
                            responsive: {
                                480: {
                                    items: 3,
                                },
                                576: {
                                    items: 4,
                                },
                                768: {
                                    items: 5,
                                },
                                992: {
                                    items: 6,
                                },
                                1200: {
                                    items: 7,
                                },
                            },
                        }"
                    >
                        <router-link
                            :to="{
                                path: '/shop/default',
                                query: {
                                    category: category.slug,
                                },
                            }"
                            v-for="category in topCategories"
                            :key="'top-' + category.slug"
                            ><i :class="category.icon"></i
                            >{{ category.name }}</router-link
                        >
                    </owl-carousel-component>
                </div>
            </section>
        </div>

        <section class="bg-grey pt-3 pb-3 appear-animate" v-animate>
            <div class="container">
                <section class="product-panel mt-5 mb-6">
                    <div class="section-title">
                        <h2>Best Sellers on Electronics</h2>
                    </div>

                    <isotope
                        class="grid margin-2"
                        :list="bestSellings"
                        :options="isotopeOptions"
                    >
                        <div
                            class="grid-item"
                            :class="{
                                'height-x2 col-md-8 col-lg-9 col-xl-5col-2': !index,
                                'height-x1 col-md-4 col-6 col-lg-3 col-xl-5col': index,
                            }"
                            v-for="(product, index) in bestSellings"
                            :key="'best-' + index"
                        >
                            <product-three-component
                                :class="{ 'd-flex flex-column': !index }"
                                :full-image="!index"
                                :product="product"
                            ></product-three-component>
                        </div>
                        <div
                            class="grid-sizer col-1 col-xl-5col"
                            v-if="bestSellings.length > 0"
                            key="best-sizer"
                        ></div>
                    </isotope>
                </section>
            </div>
        </section>

        <div class="container">
            <section class="product-panel mt-6 mb-3 appear-animate" v-animate>
                <div class="section-title">
                    <h2>Recent Products</h2>
                </div>

                <div class="row row-sm">
                    <owl-carousel-component
                        v-if="newArrivals.length > 0"
                        key="recent-products"
                        :options="{
                            margin: 0,
                            items: 2,
                            autoplayTimeout: 5000,
                            dots: false,
                            nav: false,
                            responsive: {
                                576: {
                                    items: 3,
                                },
                                975: {
                                    items: 4,
                                },
                                1200: {
                                    items: 5,
                                },
                            },
                        }"
                    >
                        <product-three-component
                            :product="product"
                            v-for="(product, index) in newArrivals"
                            :key="'recent-' + index"
                        ></product-three-component>
                    </owl-carousel-component>

                    <owl-carousel-component
                        v-else
                        :options="{
                            margin: 0,
                            items: 2,
                            autoplayTimeout: 5000,
                            dots: false,
                            nav: false,
                            responsive: {
                                576: {
                                    items: 3,
                                },
                                975: {
                                    items: 4,
                                },
                                1200: {
                                    items: 5,
                                },
                            },
                        }"
                    >
                        <div
                            class="product-loading-overlay"
                            v-for="item in [1, 2, 3, 4, 5]"
                            :key="'recent-skel-' + item"
                        ></div>
                    </owl-carousel-component>
                </div>
            </section>

            <div
                class="home-banner row no-gutters align-items-center m-0 appear-animate"
                v-animate
            >
                <div
                    class="image-container align-self-stretch col-md-6 col-lg-3"
                >
                    <img
                        v-lazy="
                            $root.getUrl('client/images/banners/banner-3.jpg')
                        "
                        alt="banner"
                        width="380"
                        height="136"
                    />
                </div>
                <div class="col-md-6 col-lg-4">
                    <p>check new arrivals</p>
                    <h2>Explore Smartphones</h2>
                </div>
                <div
                    class="skew-box-group col-md-6 col-lg-3 d-flex align-items-lg-center"
                >
                    <div>
                        <span class="skew-box">Exclusive COUPON</span>
                        <h3 class="sale-off skew-box"><span>$200</span>off</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <router-link to="/shop/default" class="btn btn-dark"
                        >view all now</router-link
                    >
                </div>
                <!-- <div class="info-group"> -->
                <!-- </div> -->
            </div>

            <section
                class="detailed-category mt-5 mb-5 appear-animate"
                v-animate
            >
                <div class="section-title mb-1 no-border">
                    <h2>Electronics</h2>
                </div>

                <div class="row no-gutters m-0">
                    <div class="col-md-5 col-lg-2">
                        <div class="category-lists">
                            <a
                                href="javascript:;"
                                @click="getProducts(subCat.slug)"
                                v-for="(subCat, index) in elecSubCats"
                                :key="'electronics-' + index"
                                :class="{ active: subCat.slug === elecCur }"
                            >
                                {{ subCat.name }}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-3 order-first order-md-0">
                        <div
                            class="home-slide"
                            v-lazy:background-image="
                                $root.getUrl(
                                    'client/images/slider/home_slide3.jpg'
                                )
                            "
                        >
                            <div class="slide-content">
                                <h2 class="text-center">
                                    electronic<br />deals
                                </h2>
                                <div class="skew-box-group">
                                    <span class="skew-box"
                                        >Exclusive COUPON</span
                                    >
                                    <h3 class="sale-off skew-box">
                                        <span>$100</span>off
                                    </h3>
                                </div>
                                <button class="btn">View All Now</button>
                            </div>
                        </div>
                    </div>

                    <isotope
                        class="col-lg-7 grid"
                        v-if="electronics.length > 0"
                        ref="electronics"
                        :options="isotopeOptions"
                        :list="electronics"
                    >
                        <div
                            class="col-12 col-md-8 col-lg-8 grid-item height-x1"
                            :key="'electronic-1-' + elecIndex"
                        >
                            <product-three-component
                                :full-image="true"
                                :product="electronics[0]"
                            ></product-three-component>
                        </div>
                        <div
                            class="col-6 col-md-4 col-lg-4 grid-item height-x2"
                            :key="'electornic-2-' + elecIndex"
                        >
                            <product-three-component
                                class="d-flex flex-column"
                                :full-image="true"
                                :product="electronics[1]"
                            ></product-three-component>
                        </div>
                        <div
                            class="col-6 col-md-4 col-lg-4 grid-item height-x1"
                            :key="'electornic-3-' + elecIndex"
                        >
                            <product-three-component
                                :product="electronics[2]"
                            ></product-three-component>
                        </div>
                        <div
                            class="col-6 col-md-4 col-lg-4 grid-item height-x1"
                            :key="'electornic-4-' + elecIndex"
                        >
                            <product-three-component
                                :product="electronics[3]"
                            ></product-three-component>
                        </div>
                        <div
                            class="col-1 grid-sizer"
                            key="electronics-sizer"
                        ></div>
                    </isotope>
                </div>
            </section>

            <section
                class="detailed-category mt-5 mb-5 appear-animate"
                v-animate
            >
                <div class="section-title mb-1 no-border">
                    <h2>Mobile Phones & Accessories</h2>
                </div>

                <div class="row no-gutters m-0">
                    <div class="col-md-5 col-lg-2">
                        <div class="category-lists">
                            <a
                                href="javascript:;"
                                @click="getProducts(subCat.slug, 'phones')"
                                v-for="(subCat, index) in phoneSubCats"
                                :key="'electronics-' + index"
                                :class="{ active: subCat.slug === phoneCur }"
                            >
                                {{ subCat.name }}
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-3 order-first order-md-0">
                        <div
                            class="home-slide"
                            v-lazy:background-image="
                                $root.getUrl(
                                    'client/images/slider/home_slide4.jpg'
                                )
                            "
                        >
                            <div class="slide-content content-left">
                                <h2 class="text-center">
                                    Top brands <br />smartphones
                                </h2>
                                <div class="skew-box-group">
                                    <span class="skew-box">STARTING FROM</span>
                                    <span class="skew-box">$199</span>
                                </div>
                                <button class="btn btn-primary">
                                    View All Now
                                </button>
                            </div>
                        </div>
                    </div>

                    <isotope
                        class="col-lg-7 grid"
                        v-if="phones.length > 0"
                        ref="phones"
                        :options="isotopeOptions"
                        :list="phones"
                    >
                        <div
                            class="col-12 col-md-8 col-lg-8 grid-item height-x1"
                            :key="'phone-1-' + phoneIndex"
                        >
                            <product-three-component
                                :product="phones[0]"
                                :full-image="true"
                            ></product-three-component>
                        </div>
                        <div
                            class="col-6 col-md-4 col-lg-4 grid-item height-x2"
                            :key="'electornic-2-' + phoneIndex"
                        >
                            <product-three-component
                                class="d-flex flex-column"
                                :product="phones[1]"
                                :full-image="true"
                            ></product-three-component>
                        </div>
                        <div
                            class="col-6 col-md-4 col-lg-4 grid-item height-x1"
                            :key="'electornic-3-' + phoneIndex"
                        >
                            <product-three-component
                                :product="phones[2]"
                            ></product-three-component>
                        </div>
                        <div
                            class="col-6 col-md-4 col-lg-4 grid-item height-x1"
                            :key="'electornic-4-' + phoneIndex"
                        >
                            <product-three-component
                                :product="phones[3]"
                            ></product-three-component>
                        </div>
                        <div class="col-1 grid-sizer" key="phones-sizer"></div>
                    </isotope>
                </div>
            </section>

            <section class="product-panel mt-6 appear-animate" v-animate>
                <div class="section-title">
                    <h2>Top Rated Products</h2>
                </div>

                <div class="row row-sm">
                    <owl-carousel-component
                        v-if="topRates.length > 0"
                        key="top-rated-products"
                        :options="{
                            margin: 0,
                            items: 2,
                            autoplayTimeout: 5000,
                            dots: false,
                            nav: false,
                            responsive: {
                                559: {
                                    items: 3,
                                },
                                975: {
                                    items: 4,
                                },
                                1200: {
                                    items: 5,
                                },
                            },
                        }"
                    >
                        <product-three-component
                            :product="product"
                            v-for="(product, index) in topRates"
                            :key="'top-rates-' + index"
                        ></product-three-component>
                    </owl-carousel-component>

                    <owl-carousel-component
                        v-else
                        :options="{
                            margin: 0,
                            items: 2,
                            autoplayTimeout: 5000,
                            dots: false,
                            nav: false,
                            responsive: {
                                559: {
                                    items: 3,
                                },
                                975: {
                                    items: 4,
                                },
                                1200: {
                                    items: 5,
                                },
                            },
                        }"
                    >
                        <div
                            class="product-loading-overlay"
                            v-for="item in [1, 2, 3, 4, 5]"
                            :key="'top-rates-skel-' + item"
                        ></div>
                    </owl-carousel-component>
                </div>
            </section>
        </div>

        <section
            class="product-panel container mt-3 mb-5 appear-animate"
            v-animate
            id="topBrands"
        >
            <div class="section-title mb-5">
                <h2>Top Brands</h2>
            </div>

            <owl-carousel-component
                class="partners-carousel text-center"
                :options="{
                    nav: false,
                    dots: false,
                    margin: 30,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: {
                            items: 2,
                            margin: 0,
                        },
                        480: {
                            items: 3,
                        },
                        768: {
                            items: 4,
                        },
                        992: {
                            items: 5,
                        },
                    },
                }"
            >
                <img
                    v-lazy="$root.getUrl('client/images/logos/1.png')"
                    width="200"
                    height="50"
                    alt="logo"
                />
                <img
                    v-lazy="$root.getUrl('client/images/logos/2.png')"
                    width="200"
                    height="50"
                    alt="logo"
                />
                <img
                    v-lazy="$root.getUrl('client/images/logos/3.png')"
                    width="200"
                    height="50"
                    alt="logo"
                />
                <img
                    v-lazy="$root.getUrl('client/images/logos/4.png')"
                    width="200"
                    height="50"
                    alt="logo"
                />
                <img
                    v-lazy="$root.getUrl('client/images/logos/5.png')"
                    width="200"
                    height="50"
                    alt="logo"
                />
            </owl-carousel-component>
        </section>
    </main>
</template>

<script>
import { mapGetters, mapMutations } from "vuex";
import isotope from "vueisotope";

import { NEWSLETTER_NOT_SHOW } from "../store/modules/setting/mutation-types";

import ProductThreeComponent from "./shared/products/ProductThreeComponent";
import ProductTwoComponent from "./shared/products/ProductTwoComponent";
import ProductNineComponent from "./shared/products/ProductNineComponent";
import PostOneComponent from "./shared/posts/PostOneComponent";
import CountDownComponent from "./shared/CountDownComponent";
import OwlCarouselComponent from "./shared/OwlCarouselComponent";
import ParallaxComponent from "./shared/ParallaxComponent";

export default {
    components: {
        isotope,

        ProductThreeComponent,
        ProductTwoComponent,
        ProductNineComponent,
        PostOneComponent,
        CountDownComponent,
        OwlCarouselComponent,
        ParallaxComponent,
    },
    data: function () {
        return {
            dealProducts: [],
            featuredProducts: [],
            topCategories: [],
            newArrivals: [],
            topRates: [],
            bestSellings: [],
            categories: [],
            posts: [],
            newsLetter: null,
            isotopeOptions: {
                itemSelector: '.grid-item',
                layoutMode: 'masonry',
                percentPosition: false,
                masonry: {
                    columnWidth: '.grid-sizer',
                }
            },
            electronics: [],
            elecSubCats: [],
            elecCur: '',
            phones: [],
            phoneSubCats: [],
            phoneCur: '',
            elecIndex: 0,
            phoneIndex: 0
        };
    },
    computed: {
        ...mapGetters( "setting", [ "getNewsletterStatus" ] ),
    },
    beforeCreate: function () {
        window.axios
            .get( "/web" )
            .then( ( response ) => {
                this.dealProducts = [ ...response.data.dealProducts ];
                this.featuredProducts = [ ...response.data.featuredProducts ];
                this.topCategories = [ ...response.data.topCategories ];
                this.newArrivals = [ ...response.data.newArrivals ];
                this.topRates = [ ...response.data.topRates ];
                this.bestSellings = [ ...response.data.bestSellings ];
                this.electronics = response.data.electronics;
                this.elecSubCats = response.data.subCats1;
                this.phones = response.data.phones;
                this.phoneSubCats = response.data.subCats2;
            } )
            .catch( ( error ) => { } );
    },
    mounted: function () {
        if ( this.getNewsletterStatus ) {
            this.newsLetter = setTimeout( () => {
                this.$modal.show(
                    () => import( "./shared/modals/NewsletterModalComponent" ),
                    {},
                    {
                        width: "740",
                        height: "auto",
                        adaptive: true,
                    },
                    {
                        "before-close": this.beforeNewsletterClose,
                    }
                );
            }, 5000 );
        }
    },
    destroyed: function () {
        window.clearTimeout( this.newsLetter );
    },
    methods: {
        ...mapMutations( "cart", [ "increment" ] ),
        ...mapMutations( "setting", {
            notShowAgain: NEWSLETTER_NOT_SHOW,
        } ),
        beforeNewsletterClose: function ( event ) {
            if ( event.ref.querySelector( "#show-again" ) && event.ref.querySelector( "#show-again" ).checked ) {
                this.notShowAgain();
            }
        },
        getProducts: async function ( slug, parent = 'electronics' ) {
            let isotope = this.$refs[ parent ];

            parent === 'electronics' ? this.elecCur = slug : this.phoneCur = slug;

            let previousItems = isotope.iso.element.querySelectorAll( '.grid-item' );
            isotope.iso.remove( previousItems );
            await window.axios.get( '/web/category-search', {
                params: {
                    category: slug
                }
            } ).then( response => {
                if ( parent === 'electronics' ) {
                    this.electronics = response.data.products;
                    this.elecIndex++;
                } else {
                    this.phones = response.data.products;
                    this.phoneIndex++;
                }
            } ).catch( error => { } );
        }
    }
};
</script>