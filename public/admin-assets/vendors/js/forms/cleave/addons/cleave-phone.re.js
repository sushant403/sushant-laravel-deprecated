(function(){function n(n,l){var t,e=n.split("."),u=G;e[0]in u||!u.execScript||u.execScript("var "+e[0]);for(;e.length&&(t=e.shift());)e.length||void 0===l?u=u[t]?u[t]:u[t]={}:u[t]=l}function l(n,l){function t(){}t.prototype=l.prototype,n.M=l.prototype,n.prototype=new t,n.prototype.constructor=n,n.N=function(n,t,e){for(var u=Array(arguments.length-2),r=2;r<arguments.length;r++)u[r-2]=arguments[r];return l.prototype[t].apply(n,u)}}function t(n,l){null!=n&&this.a.apply(this,arguments)}function e(n){n.b=""}function u(n,l){return n>l?1:n<l?-1:0}function r(n,l){this.b=n,this.a={};for(var t=0;t<l.length;t++){var e=l[t];this.a[e.b]=e}}function i(n){return function(n,l){n.sort(l||u)}(n=function(n){var l,t=[],e=0;for(l in n)t[e++]=n[l];return t}(n.a),(function(n,l){return n.b-l.b})),n}function a(n,l){switch(this.b=n,this.g=!!l.v,this.a=l.c,this.i=l.type,this.h=!1,this.a){case q:case U:case k:case J:case K:case P:case H:this.h=!0}this.f=l.defaultValue}function o(){this.a={},this.f=this.j().a,this.b=this.g=null}function s(n,l){for(var t=i(n.j()),e=0;e<t.length;e++){var u=(a=t[e]).b;if(null!=l.a[u]){n.b&&delete n.b[a.b];var r=11==a.a||10==a.a;if(a.g)for(var a=f(l,u)||[],o=0;o<a.length;o++){var p=n,c=u,h=r?a[o].clone():a[o];p.a[c]||(p.a[c]=[]),p.a[c].push(h),p.b&&delete p.b[c]}else a=f(l,u),r?(r=f(n,u))?s(r,a):g(n,u,a.clone()):g(n,u,a)}}}function f(n,l){var t=n.a[l];if(null==t)return null;if(n.g){if(!(l in n.b)){var e=n.g,u=n.f[l];if(null!=t)if(u.g){for(var r=[],i=0;i<t.length;i++)r[i]=e.b(u,t[i]);t=r}else t=e.b(u,t);return n.b[l]=t}return n.b[l]}return t}function p(n,l,t){var e=f(n,l);return n.f[l].g?e[t||0]:e}function c(n,l){var t;if(null!=n.a[l])t=p(n,l,void 0);else n:{if(void 0===(t=n.f[l]).f){var e=t.i;if(e===Boolean)t.f=!1;else if(e===Number)t.f=0;else{if(e!==String){t=new e;break n}t.f=t.h?"0":""}}t=t.f}return t}function h(n,l){return n.f[l].g?null!=n.a[l]?n.a[l].length:0:null!=n.a[l]?1:0}function g(n,l,t){n.a[l]=t,n.b&&(n.b[l]=t)}function m(n,l){var t,e=[];for(t in l)0!=t&&e.push(new a(t,l[t]));return new r(n,e)}function b(){o.call(this)}function y(){o.call(this)}function v(){o.call(this)}function d(){}function _(){}function S(){}function w(){this.a={}}function x(n){return 0==n.length||tn.test(n)}function A(n,l){if(null==l)return null;l=l.toUpperCase();var t=n.a[l];if(null==t){if(null==(t=W[l]))return null;t=(new S).a(v.j(),t),n.a[l]=t}return t}function N(n){return null==(n=Q[n])?"ZZ":n[0]}function E(n){this.H=RegExp(" "),this.C="",this.m=new t,this.w="",this.i=new t,this.u=new t,this.l=!0,this.A=this.o=this.F=!1,this.G=w.b(),this.s=0,this.b=new t,this.B=!1,this.h="",this.a=new t,this.f=[],this.D=n,this.J=this.g=j(this,this.D)}function j(n,l){var t;if(null!=l&&isNaN(l)&&l.toUpperCase()in W){if(null==(t=A(n.G,l)))throw Error("Invalid region code: "+l);t=c(t,10)}else t=0;return null!=(t=A(n.G,N(t)))?t:en}function R(n){for(var l=n.f.length,t=0;t<l;++t){var u,r=n.f[t],i=c(r,1);if(n.w==i)return!1;u=n;var a=c(s=r,1);if(-1!=a.indexOf("|"))u=!1;else{var o;a=(a=a.replace(un,"\\d")).replace(rn,"\\d"),e(u.m),o=u;var s=c(s,2),f="999999999999999".match(a)[0];f.length<o.a.b.length?o="":o=(o=f.replace(new RegExp(a,"g"),s)).replace(RegExp("9","g")," "),0<o.length?(u.m.a(o),u=!0):u=!1}if(u)return n.w=i,n.B=on.test(p(r,4)),n.s=0,!0}return n.l=!1}function $(n,l){for(var t=[],e=l.length-3,u=n.f.length,r=0;r<u;++r){var i=n.f[r];0==h(i,3)?t.push(n.f[r]):(i=p(i,3,Math.min(e,h(i,3)-1)),0==l.search(i)&&t.push(n.f[r]))}n.f=t}function B(n){return n.l=!0,n.A=!1,n.f=[],n.s=0,e(n.m),n.w="",I(n)}function F(n){for(var l=n.a.toString(),t=n.f.length,e=0;e<t;++e){var u=n.f[e],r=c(u,1);if(new RegExp("^(?:"+r+")$").test(l))return n.B=on.test(p(u,4)),C(n,l=l.replace(new RegExp(r,"g"),p(u,2)))}return""}function C(n,l){var t=n.b.b.length;return n.B&&0<t&&" "!=n.b.toString().charAt(t-1)?n.b+" "+l:n.b+l}function I(n){var l=n.a.toString();if(3<=l.length){for(var t=n.o&&0==n.h.length&&0<h(n.g,20)?f(n.g,20)||[]:f(n.g,19)||[],e=t.length,u=0;u<e;++u){var r=t[u];0<n.h.length&&x(c(r,4))&&!p(r,6)&&null==r.a[5]||(0!=n.h.length||n.o||x(c(r,4))||p(r,6))&&an.test(c(r,2))&&n.f.push(r)}return $(n,l),0<(l=F(n)).length?l:R(n)?D(n):n.i.toString()}return C(n,l)}function D(n){var l=n.a.toString(),t=l.length;if(0<t){for(var e="",u=0;u<t;u++)e=V(n,l.charAt(u));return n.l?C(n,e):n.i.toString()}return n.b.toString()}function T(n){var l,t=n.a.toString(),u=0;return 1!=p(n.g,10)?l=!1:l="1"==(l=n.a.toString()).charAt(0)&&"0"!=l.charAt(1)&&"1"!=l.charAt(1),l?(u=1,n.b.a("1").a(" "),n.o=!0):null!=n.g.a[15]&&(l=new RegExp("^(?:"+p(n.g,15)+")"),null!=(l=t.match(l))&&null!=l[0]&&0<l[0].length&&(n.o=!0,u=l[0].length,n.b.a(t.substring(0,u)))),e(n.a),n.a.a(t.substring(u)),t.substring(0,u)}function Y(n){var l=n.u.toString(),t=new RegExp("^(?:\\+|"+p(n.g,11)+")");return null!=(t=l.match(t))&&null!=t[0]&&0<t[0].length&&(n.o=!0,t=t[0].length,e(n.a),n.a.a(l.substring(t)),e(n.b),n.b.a(l.substring(0,t)),"+"!=l.charAt(0)&&n.b.a(" "),!0)}function M(n){if(0==n.a.b.length)return!1;var l,u=new t;n:{if(0!=(l=n.a.toString()).length&&"0"!=l.charAt(0))for(var r,i=l.length,a=1;3>=a&&a<=i;++a)if((r=parseInt(l.substring(0,a),10))in Q){u.a(l.substring(a)),l=r;break n}l=0}return 0!=l&&(e(n.a),n.a.a(u.toString()),"001"==(u=N(l))?n.g=A(n.G,""+l):u!=n.D&&(n.g=j(n,u)),n.b.a(""+l).a(" "),n.h="",!0)}function V(n,l){if(0<=(u=n.m.toString()).substring(n.s).search(n.H)){var t=u.search(n.H),u=u.replace(n.H,l);return e(n.m),n.m.a(u),n.s=t,u.substring(0,n.s+1)}return 1==n.f.length&&(n.l=!1),n.w="",n.i.toString()}var G=this;t.prototype.b="",t.prototype.set=function(n){this.b=""+n},t.prototype.a=function(n,l,t){if(this.b+=String(n),null!=l)for(var e=1;e<arguments.length;e++)this.b+=arguments[e];return this},t.prototype.toString=function(){return this.b};var H=1,P=2,q=3,U=4,k=6,J=16,K=18;o.prototype.set=function(n,l){g(this,n.b,l)},o.prototype.clone=function(){var n=new this.constructor;return n!=this&&(n.a={},n.b&&(n.b={}),s(n,this)),n},l(b,o);var L=null;l(y,o);var O=null;l(v,o);var Z=null;b.prototype.j=function(){var n=L;return n||(L=n=m(b,{0:{name:"NumberFormat",I:"i18n.phonenumbers.NumberFormat"},1:{name:"pattern",required:!0,c:9,type:String},2:{name:"format",required:!0,c:9,type:String},3:{name:"leading_digits_pattern",v:!0,c:9,type:String},4:{name:"national_prefix_formatting_rule",c:9,type:String},6:{name:"national_prefix_optional_when_formatting",c:8,defaultValue:!1,type:Boolean},5:{name:"domestic_carrier_code_formatting_rule",c:9,type:String}})),n},b.j=b.prototype.j,y.prototype.j=function(){var n=O;return n||(O=n=m(y,{0:{name:"PhoneNumberDesc",I:"i18n.phonenumbers.PhoneNumberDesc"},2:{name:"national_number_pattern",c:9,type:String},9:{name:"possible_length",v:!0,c:5,type:Number},10:{name:"possible_length_local_only",v:!0,c:5,type:Number},6:{name:"example_number",c:9,type:String}})),n},y.j=y.prototype.j,v.prototype.j=function(){var n=Z;return n||(Z=n=m(v,{0:{name:"PhoneMetadata",I:"i18n.phonenumbers.PhoneMetadata"},1:{name:"general_desc",c:11,type:y},2:{name:"fixed_line",c:11,type:y},3:{name:"mobile",c:11,type:y},4:{name:"toll_free",c:11,type:y},5:{name:"premium_rate",c:11,type:y},6:{name:"shared_cost",c:11,type:y},7:{name:"personal_number",c:11,type:y},8:{name:"voip",c:11,type:y},21:{name:"pager",c:11,type:y},25:{name:"uan",c:11,type:y},27:{name:"emergency",c:11,type:y},28:{name:"voicemail",c:11,type:y},29:{name:"short_code",c:11,type:y},30:{name:"standard_rate",c:11,type:y},31:{name:"carrier_specific",c:11,type:y},33:{name:"sms_services",c:11,type:y},24:{name:"no_international_dialling",c:11,type:y},9:{name:"id",required:!0,c:9,type:String},10:{name:"country_code",c:5,type:Number},11:{name:"international_prefix",c:9,type:String},17:{name:"preferred_international_prefix",c:9,type:String},12:{name:"national_prefix",c:9,type:String},13:{name:"preferred_extn_prefix",c:9,type:String},15:{name:"national_prefix_for_parsing",c:9,type:String},16:{name:"national_prefix_transform_rule",c:9,type:String},18:{name:"same_mobile_and_fixed_line_pattern",c:8,defaultValue:!1,type:Boolean},19:{name:"number_format",v:!0,c:11,type:b},20:{name:"intl_number_format",v:!0,c:11,type:b},22:{name:"main_country_for_code",c:8,defaultValue:!1,type:Boolean},23:{name:"leading_digits",c:9,type:String},26:{name:"leading_zero_possible",c:8,defaultValue:!1,type:Boolean}})),n},v.j=v.prototype.j,d.prototype.a=function(n){throw new n.b,Error("Unimplemented")},d.prototype.b=function(n,l){if(11==n.a||10==n.a)return l instanceof o?l:this.a(n.i.prototype.j(),l);if(14==n.a){if("string"==typeof l&&z.test(l)){var t=Number(l);if(0<t)return t}return l}if(!n.h)return l;if((t=n.i)===String){if("number"==typeof l)return String(l)}else if(t===Number&&"string"==typeof l&&("Infinity"===l||"-Infinity"===l||"NaN"===l||z.test(l)))return Number(l);return l};var z=/^-?[0-9]+$/;l(_,d),_.prototype.a=function(n,l){var t=new n.b;return t.g=this,t.a=l,t.b={},t},l(S,_),S.prototype.b=function(n,l){return 8==n.a?!!l:d.prototype.b.apply(this,arguments)},S.prototype.a=function(n,l){return S.M.a.call(this,n,l)};var Q={262:["RE","YT"]},W={RE:[null,[null,null,"(?:26|[68]\\d)\\d{7}",null,null,null,null,null,null,[9]],[null,null,"262\\d{6}",null,null,null,"262161234"],[null,null,"69(?:2\\d\\d|3(?:0[0-46]|1[013]|2[0-2]|3[0-39]|4\\d|5[05]|6[0-26]|7[0-27]|8[0-38]|9[0-479]))\\d{4}",null,null,null,"692123456"],[null,null,"80\\d{7}",null,null,null,"801234567"],[null,null,"89[1-37-9]\\d{6}",null,null,null,"891123456"],[null,null,"8(?:1[019]|2[0156]|84|90)\\d{6}",null,null,null,"810123456"],[null,null,null,null,null,null,null,null,null,[-1]],[null,null,null,null,null,null,null,null,null,[-1]],"RE",262,"00","0",null,null,"0",null,null,null,[[null,"(\\d{3})(\\d{2})(\\d{2})(\\d{2})","$1 $2 $3 $4",["[268]"],"0$1"]],null,[null,null,null,null,null,null,null,null,null,[-1]],1,"262|69|8",[null,null,null,null,null,null,null,null,null,[-1]],[null,null,null,null,null,null,null,null,null,[-1]],null,null,[null,null,null,null,null,null,null,null,null,[-1]]],YT:[null,[null,null,"(?:(?:26|63)9|80\\d)\\d{6}",null,null,null,null,null,null,[9]],[null,null,"269(?:0[67]|5[01]|6\\d|[78]0)\\d{4}",null,null,null,"269601234"],[null,null,"639(?:0[0-79]|1[019]|[267]\\d|3[09]|[45]0|9[04-79])\\d{4}",null,null,null,"639012345"],[null,null,"80\\d{7}",null,null,null,"801234567"],[null,null,null,null,null,null,null,null,null,[-1]],[null,null,null,null,null,null,null,null,null,[-1]],[null,null,null,null,null,null,null,null,null,[-1]],[null,null,null,null,null,null,null,null,null,[-1]],"YT",262,"00","0",null,null,"0",null,null,null,null,null,[null,null,null,null,null,null,null,null,null,[-1]],null,"269|63",[null,null,null,null,null,null,null,null,null,[-1]],[null,null,null,null,null,null,null,null,null,[-1]],null,null,[null,null,null,null,null,null,null,null,null,[-1]]]};w.b=function(){return w.a?w.a:w.a=new w};var X={0:"0",1:"1",2:"2",3:"3",4:"4",5:"5",6:"6",7:"7",8:"8",9:"9","０":"0","１":"1","２":"2","３":"3","４":"4","５":"5","６":"6","７":"7","８":"8","９":"9","٠":"0","١":"1","٢":"2","٣":"3","٤":"4","٥":"5","٦":"6","٧":"7","٨":"8","٩":"9","۰":"0","۱":"1","۲":"2","۳":"3","۴":"4","۵":"5","۶":"6","۷":"7","۸":"8","۹":"9"},nn=RegExp("[+＋]+"),ln=RegExp("([0-9０-９٠-٩۰-۹])"),tn=/^\(?\$1\)?$/,en=new v;g(en,11,"NA");var un=/\[([^\[\]])*\]/g,rn=/\d(?=[^,}][^,}])/g,an=RegExp("^[-x‐-―−ー－-／  ­​⁠　()（）［］.\\[\\]/~⁓∼～]*(\\$\\d[-x‐-―−ー－-／  ­​⁠　()（）［］.\\[\\]/~⁓∼～]*)+$"),on=/[- ]/;E.prototype.K=function(){this.C="",e(this.i),e(this.u),e(this.m),this.s=0,this.w="",e(this.b),this.h="",e(this.a),this.l=!0,this.A=this.o=this.F=!1,this.f=[],this.B=!1,this.g!=this.J&&(this.g=j(this,this.D))},E.prototype.L=function(n){return this.C=function(n,l){n.i.a(l);var t,u=l;if(ln.test(u)||1==n.i.b.length&&nn.test(u)?("+"==(u=l)?(t=u,n.u.a(u)):(t=X[u],n.u.a(t),n.a.a(t)),l=t):(n.l=!1,n.F=!0),!n.l){if(!n.F)if(Y(n)){if(M(n))return B(n)}else if(0<n.h.length&&(u=n.a.toString(),e(n.a),n.a.a(n.h),n.a.a(u),t=(u=n.b.toString()).lastIndexOf(n.h),e(n.b),n.b.a(u.substring(0,t))),n.h!=T(n))return n.b.a(" "),B(n);return n.i.toString()}switch(n.u.b.length){case 0:case 1:case 2:return n.i.toString();case 3:if(!Y(n))return n.h=T(n),I(n);n.A=!0;default:return n.A?(M(n)&&(n.A=!1),n.b.toString()+n.a.toString()):0<n.f.length?(u=V(n,l),0<(t=F(n)).length?t:($(n,n.a.toString()),R(n)?D(n):n.l?C(n,u):n.i.toString())):I(n)}}(this,n)},n("Cleave.AsYouTypeFormatter",E),n("Cleave.AsYouTypeFormatter.prototype.inputDigit",E.prototype.L),n("Cleave.AsYouTypeFormatter.prototype.clear",E.prototype.K)}).call("object"==typeof global&&global?global:window);
