<template>
	<header class="header header-two">
		<sticky-header-component>
			<div class="header-middle sticky-header">
				<div class="container">
					<div class="header-left">
						<div class="header-contact phone">
							<span>CALL US NOW</span>
							<a href="#" class="text-primary">1-888-123-456</a>
						</div>
						<div class="header-contact">
							<router-link to="/pages/wishlist"
								>Wishlist</router-link
							>
						</div>
						<div class="header-contact">
							<router-link to="/pages/contact-us"
								>Contact Us</router-link
							>
						</div>
					</div>
					<div class="header-center">
						<button
							class="mobile-menu-toggler mr-4"
							:class="getHeaderSettings.mmenuTogglerStyle"
							type="button"
							@click="showMobileMenu"
						>
							<i class="icon-menu"></i>
							<label class="sr-only">Wishlist</label>
						</button>
						<router-link to="/" class="logo">
							<img
								:src="
									$root.getUrl('client/images/logo-black.png')
								"
								:alt="`${getHeaderSettings.siteTitle} Logo`"
								:width="getHeaderSettings.logoImageWidth"
								:height="getHeaderSettings.logoImageHeight"
							/>
						</router-link>
					</div>
					<div class="header-right">
						<router-link
							to="/pages/account"
							class="header-icon login-link d-flex align-items-center mr-4"
							:class="getHeaderSettings.accountIconStyle"
						>
							<i class="icon-user-2"></i>
							<div class="header-userinfo d-none d-lg-block">
								<span>Hello!</span>
								<h4 class="text-primary">My Account</h4>
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
					<div class="header-left">
						<main-menu-component
							class="d-none d-lg-flex align-items-center flex-wrap"
							:is-short="true"
							:top-categories="topCategories"
						></main-menu-component>
					</div>

					<div class="header-right">
						<header-search-one-component
							:categories="categories"
							class="header-search-inline header-search-category w-100"
							:class="getHeaderSettings.searchFormStyle"
							:show-category="getHeaderSettings.searchFormCategory"
						></header-search-one-component>
					</div>
				</div>
			</div>
		</sticky-header-component>
	</header>
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
					width: "872",
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
<style lang="scss">
.slide-appear-active {
	transition: all 0.5s ease;
}

.slide-appear {
	transform: translateY(10px);
	opacity: 0;
	visibility: hidden;
}
</style>