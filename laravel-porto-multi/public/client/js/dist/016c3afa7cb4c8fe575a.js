(window.webpackJsonp=window.webpackJsonp||[]).push([[11],{182:function(t,e,a){var s=a(187);"string"==typeof s&&(s=[[t.i,s,""]]);var n={hmr:!0,transform:void 0,insertInto:void 0};a(58)(s,n);s.locals&&(t.exports=s.locals)},186:function(t,e,a){"use strict";a(182)},187:function(t,e,a){(t.exports=a(21)(!1)).push([t.i,".slide-appear-active {\n  transition: all 0.5s ease;\n}\n.slide-appear {\n  transform: translateY(10px);\n  opacity: 0;\n  visibility: hidden;\n}",""])},22:function(t,e,a){"use strict";a.r(e);var s=a(3),n=a(11),r=a(10),i=a(9),o=a(5);function c(t,e){var a=Object.keys(t);if(Object.getOwnPropertySymbols){var s=Object.getOwnPropertySymbols(t);e&&(s=s.filter((function(e){return Object.getOwnPropertyDescriptor(t,e).enumerable}))),a.push.apply(a,s)}return a}function l(t){for(var e=1;e<arguments.length;e++){var a=null!=arguments[e]?arguments[e]:{};e%2?c(Object(a),!0).forEach((function(e){d(t,e,a[e])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(a)):c(Object(a)).forEach((function(e){Object.defineProperty(t,e,Object.getOwnPropertyDescriptor(a,e))}))}return t}function d(t,e,a){return e in t?Object.defineProperty(t,e,{value:a,enumerable:!0,configurable:!0,writable:!0}):t[e]=a,t}var u={components:{HeaderSearchOneComponent:n.default,MainMenuComponent:r.default,StickyHeaderComponent:i.default,LoginModalComponent:o.default},props:{categories:Array},data:function(){return{topNoticeShow:!0}},computed:l(l(l({},Object(s.c)("user",["isCustomer"])),Object(s.c)("setting",["getHeaderSettings"])),{},{cartMenuComponent:function(){return this.getHeaderSettings.cartMenuType&&(t=this.getHeaderSettings.cartMenuType,function(){return a(131)("./".concat(t,".vue")).then((function(t){return t.default||t}))});var t},topCategories:function(){return this.categories.filter((function(t){return t.icon})).slice(0,7).map((function(t){return l(l({},t),{},{name:t.name.replace(/^[-, ]*/gi,"")})}))}}),methods:{showLoginModal:function(){this.$modal.show(o.default,{},{width:"872",height:"auto",adaptive:!0})},showMobileMenu:function(){document.querySelector("body").classList.add("mmenu-active")}}},g=(a(186),a(1)),h=Object(g.a)(u,(function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("header",{staticClass:"header header-two"},[a("sticky-header-component",[a("div",{staticClass:"header-middle sticky-header"},[a("div",{staticClass:"container"},[a("div",{staticClass:"header-left"},[a("div",{staticClass:"header-contact phone"},[a("span",[t._v("CALL US NOW")]),t._v(" "),a("a",{staticClass:"text-primary",attrs:{href:"#"}},[t._v("1-888-123-456")])]),t._v(" "),a("div",{staticClass:"header-contact"},[a("router-link",{attrs:{to:"/pages/wishlist"}},[t._v("Wishlist")])],1),t._v(" "),a("div",{staticClass:"header-contact"},[a("router-link",{attrs:{to:"/pages/contact-us"}},[t._v("Contact Us")])],1)]),t._v(" "),a("div",{staticClass:"header-center"},[a("button",{staticClass:"mobile-menu-toggler mr-4",class:t.getHeaderSettings.mmenuTogglerStyle,attrs:{type:"button"},on:{click:t.showMobileMenu}},[a("i",{staticClass:"icon-menu"}),t._v(" "),a("label",{staticClass:"sr-only"},[t._v("Wishlist")])]),t._v(" "),a("router-link",{staticClass:"logo",attrs:{to:"/"}},[a("img",{attrs:{src:t.$root.getUrl("client/images/logo-black.png"),alt:t.getHeaderSettings.siteTitle+" Logo",width:t.getHeaderSettings.logoImageWidth,height:t.getHeaderSettings.logoImageHeight}})])],1),t._v(" "),a("div",{staticClass:"header-right"},[a("router-link",{staticClass:"header-icon login-link d-flex align-items-center mr-4",class:t.getHeaderSettings.accountIconStyle,attrs:{to:"/pages/account"}},[a("i",{staticClass:"icon-user-2"}),t._v(" "),a("div",{staticClass:"header-userinfo d-none d-lg-block"},[a("span",[t._v("Hello!")]),t._v(" "),a("h4",{staticClass:"text-primary"},[t._v("My Account")])])]),t._v(" "),a("router-link",{staticClass:"header-icon wish-link",attrs:{to:"/pages/wishlist",title:"Wishlist"}},[a("i",{staticClass:"icon-wishlist-2"})]),t._v(" "),a("transition",{attrs:{name:"fade",mode:"out-in"}},[a("keep-alive",[a(t.cartMenuComponent,{tag:"component"})],1)],1)],1)])])]),t._v(" "),a("sticky-header-component",{attrs:{top:"/"===t.$route.path?600:300}},[a("div",{staticClass:"header-bottom sticky-header"},[a("div",{staticClass:"container"},[a("div",{staticClass:"header-left"},[a("main-menu-component",{staticClass:"d-none d-lg-flex align-items-center flex-wrap",attrs:{"is-short":!0,"top-categories":t.topCategories}})],1),t._v(" "),a("div",{staticClass:"header-right"},[a("header-search-one-component",{staticClass:"header-search-inline header-search-category w-100",class:t.getHeaderSettings.searchFormStyle,attrs:{categories:t.categories,"show-category":t.getHeaderSettings.searchFormCategory}})],1)])])])],1)}),[],!1,null,null,null);e.default=h.exports}}]);