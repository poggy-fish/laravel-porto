<template>
    <nav class="main-nav">
        <div class="menu-depart">
            <a
                href="javascript:;"
                @click.prevent="toggleSubmenu = !toggleSubmenu"
            >
                <i class="icon-menu"></i>Shop by Category
            </a>
            <div class="menu-depart-overlay"></div>
            <div
                class="submenu"
                :class="{ opened: menuDepartOpen }"
            >
                <router-link to="/">
                    <i class="icon-category-home"></i>Home
                </router-link>
                <router-link
                    :to="{
						path: '/shop/default',
						query: {
							category: category.slug,
						},
					}"
                    v-for="category in topCategories"
                    :key="category.slug"
                >
                    <i :class="category.icon"></i>
                    {{ category.name }}
                </router-link>
                <router-link to="/shop/default">
                    VIEW ALL
                    <i class="icon-angle-right"></i>
                </router-link>
            </div>
        </div>
        <ul class="menu sf-arrows">
            <li :class="{active: (parent.url == $route.path)
             || (parent.url.includes('shop') && $route.path.includes('shop')) || (parent.url.includes('shop') && $route.path.includes('product') 
             || (parent.url.includes('pages') && $route.path.includes('pages') && $route.path !== '/pages/blog' && $route.path !== '/pages/about-us' && $route.path !== '/pages/contact-us'))}"
             v-for="(parent, index) in mainMenu" :key="index">
                <router-link :to="parent.url" :class="{'sf-with-ul': parent.children.length >0}">{{ parent.name }}</router-link>
                <template v-if="parent.children.length > 0">
                    <template v-if="parent.megamenu">
                        <div class="megamenu megamenu-fixed-width megamenu-3cols">
                            <div class="row">
                                <div class="col-lg-4" v-for="(child1, index1) in parent.children" :key="index1">
                                    <router-link :to="child1.url" v-if="child1.url">{{ child1.name }}</router-link>
                                    <a href="#" class="nolink" v-else>{{ child1.name }}</a>
                                    <ul class="submenu">
                                        <li v-for="(child2, index2) in child1.children" :key="index2">
                                            <router-link :to="child2.url" v-if="child2.url">{{ child2.name }}</router-link>
                                            <a href="#" class="nolink" v-else>{{ child2.name }}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-4 p-0" v-if="parent.url.includes('shop')">
                                    <div class="menu-banner h-100">
                                        <figure class="h-100">
                                            <img
                                                v-lazy="
                                            $root.getUrl(
                                                'client/images/menu-banner.jpg'
                                            )
                                        "
                                                alt="Menu banner"
                                                ratio="159.6%"
                                            />
                                        </figure>

                                        <div class="banner-content position-absolute banner-layer-middle">
                                            <h4>
                                                <span class>UP TO</span>
                                                <br />
                                                <b class>50%</b>
                                                <i>OFF</i>
                                            </h4>
                                            <router-link
                                                to="/shop/default"
                                                class="btn btn-sm btn-dark"
                                            >SHOP NOW</router-link>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 p-0" v-if="parent.url.includes('product')">
                                    <img
                                        v-lazy="
                                            $root.getUrl('client/images/menu-bg.jpg')
                                        "
                                        alt="Menu banner"
                                        ratio="161.1%"
                                        class="product-promo"
                                    />
                                </div>
                            </div>
                        </div>
                    </template>
                    <template v-else>
                        <ul class="border-top-0 submenu">
                            <li v-for="(child1, index1) in parent.children" :key="index1">
                                <router-link :to="child1.url">{{ child1.name }}</router-link>
                            </li>
                        </ul>
                    </template>
                </template>
             </li>
        </ul>
    </nav>
</template>
<script>
import { mainMenu } from '../../../../../../data/menu';
export default {
    props: {
        isShort: {
            type: Boolean,
            default: false,
        },
        alignStretch: {
            type: Boolean,
            default: true,
        },
        topCategories: Array,
    },
    data: function () {
        return {
            toggleSubmenu: false,
            mainMenu: mainMenu
        };
    },
    computed: {
        menuDepartOpen: function () {
            let stickyHeader = this.$parent.isSticky;
            return (
                ( this.$route.path === "/" && !stickyHeader ) ||
                this.toggleSubmenu
            );
        },
    },
};
</script>