(window.webpackJsonp=window.webpackJsonp||[]).push([[62],{72:function(t,e,a){"use strict";a.r(e);var s={components:{VueSlideToggle:a(42).a},data:function(){return{faqToggle1:!1,faqToggle2:!1,faqToggle3:!1,faqToggle4:!1,faqToggle5:!1,baseUrl:window.baseUrl,contactName:"",contactEmail:"",contactMessage:""}},methods:{submitContactForm:function(){var t=this;window.axios.post("/web/contact",{contact_name:this.contactName,contact_email:this.contactEmail,contact_message:this.contactMessage}).then((function(e){t.$vToastify.setSettings({withBackdrop:!1,position:"top-right",successDuration:1500}),t.$vToastify.success("Send Mail Successfully")})).catch((function(e){t.$vToastify.error(e.response.data.message)}))}}},i=a(1),n=Object(i.a)(s,(function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("main",{staticClass:"main"},[a("nav",{staticClass:"breadcrumb-nav",attrs:{"aria-label":"breadcrumb"}},[a("div",{staticClass:"container"},[a("ol",{staticClass:"breadcrumb"},[a("li",{staticClass:"breadcrumb-item"},[a("router-link",{attrs:{to:"/"}},[a("i",{staticClass:"icon-home"})])],1),t._v(" "),a("li",{staticClass:"breadcrumb-item active",attrs:{"aria-current":"page"}},[t._v("\n\t\t\t\t\tContact Us\n\t\t\t\t")])])])]),t._v(" "),a("div",{attrs:{id:"map"}}),t._v(" "),a("div",{staticClass:"container contact-us-container"},[t._m(0),t._v(" "),a("div",{staticClass:"row"},[a("div",{staticClass:"col-lg-6"},[a("h2",{staticClass:"mt-6 mb-2"},[t._v("Send Us a Message")]),t._v(" "),a("form",{staticClass:"mb-0",attrs:{action:"#",method:"post"},on:{submit:function(e){return e.preventDefault(),t.submitContactForm.apply(null,arguments)}}},[a("div",{staticClass:"form-group"},[t._m(1),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.contactName,expression:"contactName"}],staticClass:"form-control",attrs:{type:"text",id:"contact-name",name:"contact-name",required:""},domProps:{value:t.contactName},on:{input:function(e){e.target.composing||(t.contactName=e.target.value)}}})]),t._v(" "),a("div",{staticClass:"form-group"},[t._m(2),t._v(" "),a("input",{directives:[{name:"model",rawName:"v-model",value:t.contactEmail,expression:"contactEmail"}],staticClass:"form-control",attrs:{type:"email",id:"contact-email",name:"contact-email",required:""},domProps:{value:t.contactEmail},on:{input:function(e){e.target.composing||(t.contactEmail=e.target.value)}}})]),t._v(" "),a("div",{staticClass:"form-group"},[t._m(3),t._v(" "),a("textarea",{directives:[{name:"model",rawName:"v-model",value:t.contactMessage,expression:"contactMessage"}],staticClass:"form-control",attrs:{cols:"30",rows:"1",id:"contact-message",name:"contact-message",required:""},domProps:{value:t.contactMessage},on:{input:function(e){e.target.composing||(t.contactMessage=e.target.value)}}})]),t._v(" "),t._m(4)])]),t._v(" "),a("div",{staticClass:"col-lg-6"},[a("h2",{staticClass:"mt-6 mb-1"},[t._v("Frequently Asked Questions")]),t._v(" "),a("div",[a("div",{staticClass:"card card-accordion"},[a("div",{staticClass:"card-header",on:{click:function(e){t.faqToggle1=!t.faqToggle1}}},[t._v("\n\t\t\t\t\t\t\tCurabitur eget leo at velit imperdiet viaculis\n\t\t\t\t\t\t\tvitaes?\n\t\t\t\t\t\t")]),t._v(" "),a("vue-slide-toggle",{staticClass:"card-body",attrs:{open:t.faqToggle1,duration:400}},[a("p",[t._v("\n\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur\n\t\t\t\t\t\t\t\tadipiscing elit. Curabitur eget leo at velit\n\t\t\t\t\t\t\t\timperdiet varius. In eu ipsum vitae velit\n\t\t\t\t\t\t\t\tcongue iaculis vitae at risus. Nullam tortor\n\t\t\t\t\t\t\t\tnunc, bibendum vitae semper a, volutpat eget\n\t\t\t\t\t\t\t\tmassa.\n\t\t\t\t\t\t\t")])])],1),t._v(" "),a("div",{staticClass:"card card-accordion"},[a("div",{staticClass:"card-header",on:{click:function(e){t.faqToggle2=!t.faqToggle2}}},[t._v("\n\t\t\t\t\t\t\tCurabitur eget leo at velit imperdiet vague\n\t\t\t\t\t\t\tiaculis vitaes?\n\t\t\t\t\t\t")]),t._v(" "),a("vue-slide-toggle",{staticClass:"card-body",attrs:{open:t.faqToggle2,duration:400}},[a("p",[t._v("\n\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur\n\t\t\t\t\t\t\t\tadipiscing elit. Curabitur eget leo at velit\n\t\t\t\t\t\t\t\timperdiet varius. In eu ipsum vitae velit\n\t\t\t\t\t\t\t\tcongue iaculis vitae at risus. Nullam tortor\n\t\t\t\t\t\t\t\tnunc, bibendum vitae semper a, volutpat eget\n\t\t\t\t\t\t\t\tmassa. Lorem ipsum dolor sit amet,\n\t\t\t\t\t\t\t\tconsectetur adipiscing elit. Integer\n\t\t\t\t\t\t\t\tfringilla, orci sit amet posuere auctor,\n\t\t\t\t\t\t\t\torci eros pellentesque odio, nec\n\t\t\t\t\t\t\t\tpellentesque erat ligula nec massa. Aenean\n\t\t\t\t\t\t\t\tconsequat lorem ut felis ullamcorper posuere\n\t\t\t\t\t\t\t\tgravida tellus faucibus. Maecenas dolor\n\t\t\t\t\t\t\t\telit, pulvinar eu vehicula eu, consequat et\n\t\t\t\t\t\t\t\tlacus. Duis et purus ipsum. In auctor mattis\n\t\t\t\t\t\t\t\tipsum id molestie. Donec risus nulla,\n\t\t\t\t\t\t\t\tfringilla a rhoncus vitae, semper a massa.\n\t\t\t\t\t\t\t\tVivamus ullamcorper, enim sit amet consequat\n\t\t\t\t\t\t\t\tlaoreet, tortor tortor dictum urna, ut\n\t\t\t\t\t\t\t\tegestas urna ipsum nec libero. Nulla justo\n\t\t\t\t\t\t\t\tleo, molestie vel tempor nec, egestas at\n\t\t\t\t\t\t\t\tmassa. Aenean pulvinar, felis porttitor\n\t\t\t\t\t\t\t\tiaculis pulvinar, odio orci sodales odio, ac\n\t\t\t\t\t\t\t\tpulvinar felis quam sit.\n\t\t\t\t\t\t\t")])])],1),t._v(" "),a("div",{staticClass:"card card-accordion"},[a("div",{staticClass:"card-header",on:{click:function(e){t.faqToggle3=!t.faqToggle3}}},[t._v("\n\t\t\t\t\t\t\tCurabitur eget leo at velit imperdiet viaculis\n\t\t\t\t\t\t\tvitaes?\n\t\t\t\t\t\t")]),t._v(" "),a("vue-slide-toggle",{staticClass:"card-body",attrs:{open:t.faqToggle3,duration:400}},[a("p",[t._v("\n\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur\n\t\t\t\t\t\t\t\tadipiscing elit. Curabitur eget leo at velit\n\t\t\t\t\t\t\t\timperdiet varius. In eu ipsum vitae velit\n\t\t\t\t\t\t\t\tcongue iaculis vitae at risus. Nullam tortor\n\t\t\t\t\t\t\t\tnunc, bibendum vitae semper a, volutpat eget\n\t\t\t\t\t\t\t\tmassa.\n\t\t\t\t\t\t\t")])])],1),t._v(" "),a("div",{staticClass:"card card-accordion"},[a("div",{staticClass:"card-header",on:{click:function(e){t.faqToggle4=!t.faqToggle4}}},[t._v("\n\t\t\t\t\t\t\tCurabitur eget leo at velit imperdiet vague\n\t\t\t\t\t\t\tiaculis vitaes?\n\t\t\t\t\t\t")]),t._v(" "),a("vue-slide-toggle",{staticClass:"card-body",attrs:{open:t.faqToggle4,duration:400}},[a("p",[t._v("\n\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur\n\t\t\t\t\t\t\t\tadipiscing elit. Curabitur eget leo at velit\n\t\t\t\t\t\t\t\timperdiet varius. In eu ipsum vitae velit\n\t\t\t\t\t\t\t\tcongue iaculis vitae at risus. Nullam tortor\n\t\t\t\t\t\t\t\tnunc, bibendum vitae semper a, volutpat eget\n\t\t\t\t\t\t\t\tmassa. Lorem ipsum dolor sit amet,\n\t\t\t\t\t\t\t\tconsectetur adipiscing elit. Integer\n\t\t\t\t\t\t\t\tfringilla, orci sit amet posuere auctor,\n\t\t\t\t\t\t\t\torci eros pellentesque odio, nec\n\t\t\t\t\t\t\t\tpellentesque erat ligula nec massa. Aenean\n\t\t\t\t\t\t\t\tconsequat lorem ut felis ullamcorper posuere\n\t\t\t\t\t\t\t\tgravida tellus faucibus. Maecenas dolor\n\t\t\t\t\t\t\t\telit, pulvinar eu vehicula eu, consequat et\n\t\t\t\t\t\t\t\tlacus. Duis et purus ipsum. In auctor mattis\n\t\t\t\t\t\t\t\tipsum id molestie. Donec risus nulla,\n\t\t\t\t\t\t\t\tfringilla a rhoncus vitae, semper a massa.\n\t\t\t\t\t\t\t\tVivamus ullamcorper, enim sit amet consequat\n\t\t\t\t\t\t\t\tlaoreet, tortor tortor dictum urna, ut\n\t\t\t\t\t\t\t\tegestas urna ipsum nec libero. Nulla justo\n\t\t\t\t\t\t\t\tleo, molestie vel tempor nec, egestas at\n\t\t\t\t\t\t\t\tmassa. Aenean pulvinar, felis porttitor\n\t\t\t\t\t\t\t\tiaculis pulvinar, odio orci sodales odio, ac\n\t\t\t\t\t\t\t\tpulvinar felis quam sit.\n\t\t\t\t\t\t\t")])])],1),t._v(" "),a("div",{staticClass:"card card-accordion"},[a("div",{staticClass:"card-header",on:{click:function(e){t.faqToggle5=!t.faqToggle5}}},[t._v("\n\t\t\t\t\t\t\tCurabitur eget leo at velit imperdiet vague\n\t\t\t\t\t\t\tiaculis vitaes?\n\t\t\t\t\t\t")]),t._v(" "),a("vue-slide-toggle",{staticClass:"card-body",attrs:{open:t.faqToggle5,duration:400}},[a("p",[t._v("\n\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur\n\t\t\t\t\t\t\t\tadipiscing elit. Curabitur eget leo at velit\n\t\t\t\t\t\t\t\timperdiet varius. In eu ipsum vitae velit\n\t\t\t\t\t\t\t\tcongue iaculis vitae at risus. Nullam tortor\n\t\t\t\t\t\t\t\tnunc, bibendum vitae semper a, volutpat eget\n\t\t\t\t\t\t\t\tmassa. Lorem ipsum dolor sit amet,\n\t\t\t\t\t\t\t\tconsectetur adipiscing elit. Integer\n\t\t\t\t\t\t\t\tfringilla, orci sit amet posuere auctor,\n\t\t\t\t\t\t\t\torci eros pellentesque odio, nec\n\t\t\t\t\t\t\t\tpellentesque erat ligula nec massa. Aenean\n\t\t\t\t\t\t\t\tconsequat lorem ut felis ullamcorper posuere\n\t\t\t\t\t\t\t\tgravida tellus faucibus. Maecenas dolor\n\t\t\t\t\t\t\t\telit, pulvinar eu vehicula eu, consequat et\n\t\t\t\t\t\t\t\tlacus. Duis et purus ipsum. In auctor mattis\n\t\t\t\t\t\t\t\tipsum id molestie. Donec risus nulla,\n\t\t\t\t\t\t\t\tfringilla a rhoncus vitae, semper a massa.\n\t\t\t\t\t\t\t\tVivamus ullamcorper, enim sit amet consequat\n\t\t\t\t\t\t\t\tlaoreet, tortor tortor dictum urna, ut\n\t\t\t\t\t\t\t\tegestas urna ipsum nec libero. Nulla justo\n\t\t\t\t\t\t\t\tleo, molestie vel tempor nec, egestas at\n\t\t\t\t\t\t\t\tmassa. Aenean pulvinar, felis porttitor\n\t\t\t\t\t\t\t\tiaculis pulvinar, odio orci sodales odio, ac\n\t\t\t\t\t\t\t\tpulvinar felis quam sit.\n\t\t\t\t\t\t\t")])])],1)])])])]),t._v(" "),a("div",{staticClass:"mb-8"})])}),[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"contact-info"},[a("div",{staticClass:"row"},[a("div",{staticClass:"col-12"},[a("h2",{staticClass:"ls-n-25 m-b-1"},[t._v("\n\t\t\t\t\t\tContact Info\n\t\t\t\t\t")]),t._v(" "),a("p",[t._v("\n\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing\n\t\t\t\t\t\telit. Sed imperdiet libero id nisi euismod, sed\n\t\t\t\t\t\tporta est consectetur. Vestibulum auctor felis eget\n\t\t\t\t\t\torci semper vestibulum. Pellentesque ultricies nibh\n\t\t\t\t\t\tgravida, accumsan libero luctus, molestie nunc.L\n\t\t\t\t\t\torem ipsum dolor sit amet, consectetur adipiscing\n\t\t\t\t\t\telit.\n\t\t\t\t\t")])]),t._v(" "),a("div",{staticClass:"col-md-6 col-lg-3"},[a("div",{staticClass:"feature-box text-center"},[a("i",{staticClass:"fa fa-map-marker-alt"}),t._v(" "),a("div",{staticClass:"feature-box-content"},[a("h3",[t._v("Address")]),t._v(" "),a("h5",[t._v("123 Wall Street, New York / NY")])])])]),t._v(" "),a("div",{staticClass:"col-md-6 col-lg-3"},[a("div",{staticClass:"feature-box text-center"},[a("i",{staticClass:"fa fa-mobile-alt"}),t._v(" "),a("div",{staticClass:"feature-box-content"},[a("h3",[t._v("Phone Number")]),t._v(" "),a("h5",[t._v("(800) 123-4567")])])])]),t._v(" "),a("div",{staticClass:"col-md-6 col-lg-3"},[a("div",{staticClass:"feature-box text-center"},[a("i",{staticClass:"far fa-envelope"}),t._v(" "),a("div",{staticClass:"feature-box-content"},[a("h3",[t._v("E-mail Address")]),t._v(" "),a("h5",[t._v("porto@portotheme.com")])])])]),t._v(" "),a("div",{staticClass:"col-md-6 col-lg-3"},[a("div",{staticClass:"feature-box text-center"},[a("i",{staticClass:"far fa-calendar-alt"}),t._v(" "),a("div",{staticClass:"feature-box-content"},[a("h3",[t._v("Working Days/Hours")]),t._v(" "),a("h5",[t._v("Mon - Sun / 9:00AM - 8:00PM")])])])])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{staticClass:"mb-1",attrs:{for:"contact-name"}},[this._v("Your Name\n\t\t\t\t\t\t\t"),e("span",{staticClass:"required"},[this._v("*")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{staticClass:"mb-1",attrs:{for:"contact-email"}},[this._v("Your E-mail\n\t\t\t\t\t\t\t"),e("span",{staticClass:"required"},[this._v("*")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("label",{staticClass:"mb-1",attrs:{for:"contact-message"}},[this._v("Your Message\n\t\t\t\t\t\t\t"),e("span",{staticClass:"required"},[this._v("*")])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"form-footer my-0"},[e("button",{staticClass:"btn btn-dark font-weight-normal",attrs:{type:"submit"}},[this._v("\n\t\t\t\t\t\t\tSend Message\n\t\t\t\t\t\t")])])}],!1,null,null,null);e.default=n.exports}}]);