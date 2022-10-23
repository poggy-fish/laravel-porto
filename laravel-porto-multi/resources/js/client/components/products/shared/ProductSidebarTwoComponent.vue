<template>
    <div>
        <div class="sidebar-overlay" @click="toggleSidebar"></div>
        <a class="sidebar-toggle" @click.prevent="toggleSidebar">
            <i class="fas fa-sliders-h"></i>
        </a>
        <aside class="mobile-sidebar h-100" sticky-container>
            <div class="sidebar-wrapper" v-sticky="shouldSticky" sticky-offset="{ top: 69 }">
                <div class="widget widget-info">
                    <ul>
                        <li>
                            <i class="icon-shipping"></i>
                            <h4>
                                FREE
                                <br />SHIPPING
                            </h4>
                        </li>
                        <li>
                            <i class="icon-us-dollar"></i>
                            <h4>
                                100% MONEY
                                <br />BACK GUARANTEE
                            </h4>
                        </li>
                        <li>
                            <i class="icon-online-support"></i>
                            <h4>
                                ONLINE
                                <br />SUPPORT 24/7
                            </h4>
                        </li>
                    </ul>
                </div>
                <template v-if="loaded">
                    <div class="widget widget-info" v-if="user.vendor" key="vendor">
                        <h3 class="widget-title">Sold By</h3>
                        <div class="widget-body">
                            <div class="store" :class="{ 'no-banner': !user.vendor.banner }">
                                <div class="store-info">
                                    <figure>
                                        <img
                                            v-lazy="
												$root.getUrl(
													user.vendor.banner.copy_link,
													true
												)
											"
                                            :ratio="220 / 380"
                                            v-if="user.vendor.banner"
                                            alt="Store"
                                            :width="user.vendor.banner.width"
                                            :height="user.vendor.banner.height"
                                        />
                                        <img
                                            v-lazy="
												$root.getUrl(
													'client/images/vendors/banner-3.png'
												)
											"
                                            v-else
                                            alt="Store"
                                            width="453"
                                            height="220"
                                        />
                                    </figure>
                                    <div class="store-content">
                                        <h3 class="store-title">{{ user.vendor.store_name }}</h3>
                                        <div class="ratings-container">
                                            <div
                                                class="store-ratings"
                                                :title="
													'Rated ' +
													user.rating +
													'out of 5'
												"
                                            >
                                                <span
                                                    class="ratings"
                                                    :style="{
														width: setRating(
															user.rating
														),
													}"
                                                ></span>
                                            </div>
                                        </div>
                                        <p
                                            class="store-address"
                                            :class="{'text-white': user.vendor.banner}"
                                        >{{ getLocation( user.vendor.country, user.vendor.state ) }}</p>
                                    </div>
                                </div>
                                <div class="store-footer">
                                    <div class="seller-avatar">
                                        <img
                                            v-lazy="
												$root.getUrl(
													user.vendor.profile.copy_link,
													true,
													100
												)
											"
                                            v-if="user.vendor.profile"
                                            alt="vendor"
                                            width="100"
                                            height="100"
                                        />
                                        <img
                                            v-lazy="
												$root.getUrl(
													'server/images/placeholder-img-100x100.png'
												)
											"
                                            v-else
                                            alt="vendor"
                                            width="100"
                                            height="100"
                                        />
                                    </div>
                                    <router-link
                                        :to="'/vendors/' + user.id"
                                        class="btn btn-primary btn-round"
                                    ></router-link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget" v-else key="admin">
                        <div class="maga-sale-container">
                            <figure class="mega-image">
                                <img
                                    v-lazy="
										$root.getUrl(
											'client/images/banners/banner_sidebar_right.jpg'
										)
									"
                                    width="768"
                                    height="462"
                                    :ratio="220 / 340"
                                    class="w-100"
                                    alt="Banner Desc"
                                />
                            </figure>
                            <div class="mega-content">
                                <div class="mega-price-box">
                                    <span class="price-big">50</span>
                                    <span class="price-desc">
                                        <em>%</em>OFF
                                    </span>
                                </div>
                                <div class="mega-desc">
                                    <h3 class="mega-title mb-0">MEGA SALE</h3>
                                    <span class="mega-subtitle">MANY ITEM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                <div class="widget widget-featured mb-5">
                    <h3 class="widget-title">Featured Product</h3>

                    <div class="widget-body">
                        <product-two-component
                            v-for="product in featuredProducts.slice(0, 3)"
                            :key="product.id"
                            :product="product"
                        ></product-two-component>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</template>
<script>
import Sticky from "vue-sticky-directive";

import ProductTwoComponent from "../../shared/products/ProductTwoComponent";
import { COUNTIRES, STATES, COUNTRIES } from "../../../../data/constant";

export default {
    components: {
        ProductTwoComponent,
    },
    directives: {
        Sticky,
    },
    props: {
        featuredProducts: Array,
        user: Object,
        loaded: {
            type: Boolean,
            default: function () {
                return false;
            },
        },
    },
    data() {
        return {
            shouldSticky: window.innerWidth >= 992,
        };
    },
    created: function () {
        window.addEventListener("resize", this.resizeHandler, {
            passive: true,
        });
    },
    beforeDestroy: function () {
        window.removeEventListener("resize", this.resizeHandler);
    },
    methods: {
        resizeHandler: function () {
            this.shouldSticky = window.innerWidth >= 992;
        },
        toggleSidebar: function () {
            document.querySelector("body").classList.toggle("sidebar-opened");
        },
        getLocation: function (country, state) {
            let tempCountry = COUNTRIES.find((item) => item.id == country);

            let tempState = { text: "Unknown" };
            if (!tempCountry) {
                tempCountry = { text: "Unknown" };
            } else {
                tempState = STATES[country].find((item) => item.id == state);

                if (!tempState) {
                    tempState = { text: "Unknown" };
                }
            }

            return tempState.text + ", " + tempCountry.text;
        },
        setRating: function (rating) {
            return rating * 20 + "%";
        },
    },
};
</script>