<template>
	<div class="header header-one">
		<transition name="fade">
			<div
				class="top-notice d-none d-lg-flex justify-content-center"
				v-if="topNoticeShow"
			>
				<a href="#">
					<img
						:src="
							$root.getUrl(
								'client/images/banners/header_item.png'
							)
						"
						alt="Top Ads"
						width="237"
						height="49"
					/>

					<h3 class="text-secondary">PortoPlus X Pro Only</h3>
					<span class="skew-box product-price">$199</span>
					<span class="old-price mr-0">$299</span>
					<span class="round-box"
						>code: <strong>portoplusx</strong></span
					>
				</a>

				<button
					title="Close (Esc)"
					type="button"
					class="mfp-close"
					@click.prevent="topNoticeShow = !topNoticeShow"
				>
					×
				</button>
			</div>
		</transition>
		<header>
			<sticky-header-component>
				<div class="header-middle bg-primary sticky-header">
					<div class="container">
						<div class="header-left flex-fill pl-0">
							<button
								class="mobile-menu-toggler mr-2 text-white"
								:class="getHeaderSettings.mmenuTogglerStyle"
								type="button"
								@click="showMobileMenu"
							>
								<i class="icon-menu"></i>
								<label class="sr-only">Wishlist</label>
							</button>
							<router-link to="/" class="logo d-inline-block">
								<img
									:src="
										$root.getUrl(
											getHeaderSettings.logoImage
										)
									"
									:alt="`${getHeaderSettings.siteTitle} Logo`"
									:width="getHeaderSettings.logoImageWidth"
									:height="getHeaderSettings.logoImageHeight"
									class="w-100 header-logo"
								/>
							</router-link>
							<div class="header-search-col">
								<header-search-one-component
									:categories="categories"
									class="header-icon header-search-inline header-search-category d-lg-inline-block"
									:class="getHeaderSettings.searchFormStyle"
									:show-category="getHeaderSettings.searchFormCategory"
								></header-search-one-component>

								<div class="tagcloud">
									<router-link
										:to="{
											path: '/shop/default',
											query: { tag: tag.slug },
										}"
										v-for="tag in tags"
										:key="tag.id"
										>{{ tag.name }}</router-link
									>
								</div>
							</div>
						</div>

						<div class="header-right">
							<router-link
								to="/pages/account"
								class="header-icon login-link d-flex align-items-center mr-4"
								:class="getHeaderSettings.accountIconStyle"
							>
								<i class="icon-user-2"></i>
								<div class="header-userinfo">
									<span>Hello!</span>
									<h4>My Account</h4>
								</div>
							</router-link>

							<router-link
								to="/pages/wishlist"
								class="header-icon wish-link"
								title="Wishlist"
							>
								<i class="icon-wishlist-2"></i>
							</router-link>
							<transition name="fade" mode="out-in">
								<keep-alive>
									<component
										:is="cartMenuComponent"
									></component>
								</keep-alive>
							</transition>
						</div>
					</div>
				</div>
			</sticky-header-component>
			<sticky-header-component :top="$route.path === '/' ? 600 : 300">
				<div class="header-bottom sticky-header">
					<div class="container">
						<button
							class="mobile-menu-toggler mr-4"
							:class="getHeaderSettings.mmenuTogglerStyle"
							type="button"
							@click="showMobileMenu"
						>
							<i class="icon-menu"></i>
							<label class="sr-only">Wishlist</label>
						</button>
						<main-menu-component
							class="d-none d-lg-flex align-items-center"
							:top-categories="topCategories"
						></main-menu-component>

						<div class="header-dropdowns">
							<div class="header-dropdown">
								<a href="#" class="link-seller"
									>Become a Seller</a
								>
							</div>
							<div class="header-dropdown">
								<a href="#">USD</a>
								<div class="header-menu">
									<ul>
										<li><a href="#">EUR</a></li>
										<li><a href="#">USD</a></li>
									</ul>
								</div>
							</div>

							<div class="header-dropdown">
								<a href="#">
									<i
										class="flag-us flags"
										v-lazy:background-image="
											$root.getUrl(
												'client/images/flags/flags.png'
											)
										"
									></i>
									ENG
								</a>
								<div class="header-menu">
									<ul>
										<li>
											<a href="#">
												<i
													class="flag-us flags"
													v-lazy:background-image="
														$root.getUrl(
															'client/images/flags/flags.png'
														)
													"
												></i
												>Eng
											</a>
										</li>
										<li>
											<a href="#">
												<i
													class="flag-fr flags"
													v-lazy:background-image="
														$root.getUrl(
															'client/images/flags/flags.png'
														)
													"
												></i
												>Fra
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</sticky-header-component>
		</header>
	</div>
</template>

<script>
import { mapGetters } from "vuex";

import HeaderSearchOneComponent from "./shared/header-search/HeaderSearchOneComponent";
import MainMenuComponent from "./shared/main-menu/MainMenuComponent";
import StickyHeaderComponent from "./shared/StickyHeaderComponent";

import LoginModalComponent from "../modals/LoginModalComponent";

function loadComponent(name) {
    return () =>
        import(`./shared/cart-menu/${name}.vue`).then((m) => m.default || m);
}

export default {
	components: {
		HeaderSearchOneComponent,
		MainMenuComponent,
		StickyHeaderComponent,

		LoginModalComponent,
	},
	props: {
		categories: Array,
		tags: Array
	},
	data: function () {
		return {
			topNoticeShow: true,
		};
	},
	computed: {
		...mapGetters("user", ["isCustomer"]),
		...mapGetters("setting", ["getHeaderSettings"]),
		cartMenuComponent: function () {
            return (
                this.getHeaderSettings.cartMenuType &&
                loadComponent(this.getHeaderSettings.cartMenuType)
            );
        },
		topCategories: function () {
			let withIcons = this.categories.filter( category => { return category.icon } ).slice(0, 7);
			return withIcons.map( category => {
				return {
					...category,
					name: category.name.replace(/^[-, ]*/gi, '')
				}
			} );
		}
	},
	methods: {
		showLoginModal: function () {
			this.$modal.show(
				LoginModalComponent,
				{},
				{
					width: "525",
					height: "auto",
					adaptive: true,
				}
			);
		},

		showMobileMenu: function () {
			document.querySelector("body").classList.add("mmenu-active");
		},
	},
};
</script>