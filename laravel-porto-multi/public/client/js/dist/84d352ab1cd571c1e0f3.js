(window.webpackJsonp=window.webpackJsonp||[]).push([[74],{88:function(t,a,s){"use strict";s.r(a);var e={components:{BlogSidebarComponent:s(61).default},computed:{blogTag:function(){return this.$route.query&&this.$route.query.tag},blogCategory:function(){return this.$route.query&&this.$route.query.category},blogMeta:function(){return this.blogTag||this.blogCategory}}},o=s(1),i=Object(o.a)(e,(function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("main",{staticClass:"main"},[s("nav",{staticClass:"breadcrumb-nav",attrs:{"aria-label":"breadcrumb"}},[s("div",{staticClass:"container"},[s("ol",{staticClass:"breadcrumb"},[s("li",{staticClass:"breadcrumb-item"},[s("router-link",{attrs:{to:"/"}},[s("i",{staticClass:"icon-home"})])],1),t._v(" "),s("li",{staticClass:"breadcrumb-item",class:{active:t.blogMeta}},[t.blogMeta?s("router-link",{attrs:{to:"/pages/blog"}},[t._v("Blog")]):[t._v("\n                        Blog\n                    ")]],2),t._v(" "),t.blogMeta?s("li",{staticClass:"breadcrumb-item active"},[t._v("\n                    "+t._s(t.blogMeta)+"\n                ")]):t._e()])])]),t._v(" "),s("div",{staticClass:"container skeleton-body skel-shop-products"},[s("div",{staticClass:"row"},[s("div",{staticClass:"col-lg-9"},[s("router-view")],1),t._v(" "),s("blog-sidebar-component",{staticClass:"col-lg-3"})],1)]),t._v(" "),s("div",{staticClass:"mb-4"})])}),[],!1,null,null,null);a.default=i.exports}}]);