(window.webpackJsonp=window.webpackJsonp||[]).push([[73],{85:function(s,t,e){"use strict";e.r(t);var i=e(3),r=e(20);function n(s,t){var e=Object.keys(s);if(Object.getOwnPropertySymbols){var i=Object.getOwnPropertySymbols(s);t&&(i=i.filter((function(t){return Object.getOwnPropertyDescriptor(s,t).enumerable}))),e.push.apply(e,i)}return e}function d(s){for(var t=1;t<arguments.length;t++){var e=null!=arguments[t]?arguments[t]:{};t%2?n(Object(e),!0).forEach((function(t){a(s,t,e[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(s,Object.getOwnPropertyDescriptors(e)):n(Object(e)).forEach((function(t){Object.defineProperty(s,t,Object.getOwnPropertyDescriptor(e,t))}))}return s}function a(s,t,e){return t in s?Object.defineProperty(s,t,{value:e,enumerable:!0,configurable:!0,writable:!0}):s[t]=e,s}var l={computed:d(d({},Object(i.c)("user",["getUser","billingAddressExists","shippingAddressExists"])),{},{billingAddress:function(){if(!this.billingAddressExists)return"You have not set up this type of address yet. <br />";var s=this.getUser.billing_first_name+" "+this.getUser.billing_last_name+"<br />";return this.getUser.billing_company&&(s+=this.getUser.billing_company+"<br />"),s+=this.getUser.billing_address_1,this.getUser.billing_address_2&&(s+=", "+this.getUser.billing_address_2),s+="<br />",s+=this.getUser.billing_city+", "+this.getUser.billing_state+" "+this.getUser.billing_postcode+"<br />",s+=this.countryFullName(this.getUser.billing_country)+"<br />",s+="<p>"+this.getUser.billing_phone+"</p>",s+="<p>"+this.getUser.billing_email+"</p>"},shippingAddress:function(){if(!this.shippingAddressExists)return"You have not set this type of address yet. <br />";var s=this.getUser.shipping_first_name+" "+this.getUser.shipping_last_name+"<br />";return this.getUser.shipping_company&&(s+=this.getUser.shipping_company+"<br />"),s+=this.getUser.shipping_address_1,this.getUser.shipping_address_2&&(s+=", "+this.getUser.shipping_address_2),s+="<br />",s+=this.getUser.shipping_city+", "+this.getUser.shipping_state+" "+this.getUser.shipping_postcode+"<br />",s+=this.countryFullName(this.getUser.shipping_country)+"<br />"}}),methods:{countryFullName:function(s){return r.a.filter((function(t){return t.id===s}))[0].text}}},c=e(1),o=Object(c.a)(l,(function(){var s=this,t=s.$createElement,e=s._self._c||t;return e("div",{staticClass:"addresses-content"},[e("p",{staticClass:"mb-3"},[s._v("\n\t\tThe following addresses will be used on the checkout page by\n\t\tdefault.\n\t")]),s._v(" "),e("div",{staticClass:"row"},[e("div",{staticClass:"address col-md-6"},[s._m(0),s._v(" "),e("div",{staticClass:"address-box mb-2"},[e("address",{domProps:{innerHTML:s._s(s.billingAddress)}})]),s._v(" "),e("router-link",{staticClass:"btn btn-default address-action",attrs:{to:"/pages/account/addresses/billing"}},[s._v(s._s(s.billingAddressExists?"Edit Address":"Add Address"))])],1),s._v(" "),e("div",{staticClass:"address col-md-6"},[s._m(1),s._v(" "),e("div",{staticClass:"address-box mb-2"},[e("address",{domProps:{innerHTML:s._s(s.shippingAddress)}})]),s._v(" "),e("router-link",{staticClass:"btn btn-default address-action",attrs:{to:"/pages/account/addresses/shipping"}},[s._v(s._s(s.shippingAddressExists?"Edit Address":"Add Address"))])],1)])])}),[function(){var s=this.$createElement,t=this._self._c||s;return t("div",{staticClass:"heading d-flex mb-1"},[t("h4",{staticClass:"text-dark mb-0"},[this._v("Billing address")])])},function(){var s=this.$createElement,t=this._self._c||s;return t("div",{staticClass:"heading d-flex mb-1"},[t("h4",{staticClass:"text-dark mb-0"},[this._v("\n\t\t\t\t\tShipping address\n\t\t\t\t")])])}],!1,null,null,null);t.default=o.exports}}]);