(window.webpackJsonp=window.webpackJsonp||[]).push([[84],{39:function(t,n,e){"use strict";e.r(n);var s={props:{saleEnd:String},data:function(){return{interval:null}},mounted:function(){var t=this.$el,n=new Date(this.saleEnd);this.interval=window.setInterval((function(){var e=new Date,s=(n-e)/1e3,a=parseInt(s/86400).toString(),o=parseInt(s%86400/3600).toString(),r=parseInt(s%3600/60).toString(),i=parseInt(s%60).toString();t.querySelector(".countdown .days .font-weight-extra-bold").innerHTML=a,t.querySelector(".countdown .hours .font-weight-extra-bold").innerHTML=(10>o?"0":"")+o+":",t.querySelector(".countdown .minutes .font-weight-extra-bold").innerHTML=(10>r?"0":"")+r+":",t.querySelector(".countdown .seconds .font-weight-extra-bold").innerHTML=(10>i?"0":"")+i}),1e3)},beforeDestroy:function(){window.clearInterval(this.interval)}},a=e(1),o=Object(a.a)(s,(function(){var t=this.$createElement;this._self._c;return this._m(0)}),[function(){var t=this,n=t.$createElement,e=t._self._c||n;return e("div",{staticClass:"count-down-panel"},[e("h4",[e("span",[t._v("OFFER ENDS IN:")]),t._v(" "),e("span",{staticClass:"countdown"},[e("span",{staticClass:"days"},[e("span",{staticClass:"font-weight-extra-bold"},[t._v("237")]),t._v("\n\t\t\t\tDAYS\n\t\t\t")]),t._v(" "),e("span",{staticClass:"hours"},[e("span",{staticClass:"font-weight-extra-bold"},[t._v("20:")])]),t._v(" "),e("span",{staticClass:"minutes"},[e("span",{staticClass:"font-weight-extra-bold"},[t._v("26:")])]),t._v(" "),e("span",{staticClass:"seconds"},[e("span",{staticClass:"font-weight-extra-bold"},[t._v("06")])])])])])}],!1,null,null,null);n.default=o.exports}}]);