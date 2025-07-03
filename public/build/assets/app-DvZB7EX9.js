function Vr(e,t){return function(){return e.apply(t,arguments)}}const{toString:fo}=Object.prototype,{getPrototypeOf:yn}=Object,ot=(e=>t=>{const n=fo.call(t);return e[n]||(e[n]=n.slice(8,-1).toLowerCase())})(Object.create(null)),L=e=>(e=e.toLowerCase(),t=>ot(t)===e),at=e=>t=>typeof t===e,{isArray:_e}=Array,De=at("undefined");function po(e){return e!==null&&!De(e)&&e.constructor!==null&&!De(e.constructor)&&P(e.constructor.isBuffer)&&e.constructor.isBuffer(e)}const zr=L("ArrayBuffer");function ho(e){let t;return typeof ArrayBuffer<"u"&&ArrayBuffer.isView?t=ArrayBuffer.isView(e):t=e&&e.buffer&&zr(e.buffer),t}const go=at("string"),P=at("function"),Wr=at("number"),ct=e=>e!==null&&typeof e=="object",mo=e=>e===!0||e===!1,Je=e=>{if(ot(e)!=="object")return!1;const t=yn(e);return(t===null||t===Object.prototype||Object.getPrototypeOf(t)===null)&&!(Symbol.toStringTag in e)&&!(Symbol.iterator in e)},bo=L("Date"),_o=L("File"),yo=L("Blob"),wo=L("FileList"),Eo=e=>ct(e)&&P(e.pipe),So=e=>{let t;return e&&(typeof FormData=="function"&&e instanceof FormData||P(e.append)&&((t=ot(e))==="formdata"||t==="object"&&P(e.toString)&&e.toString()==="[object FormData]"))},vo=L("URLSearchParams"),[Ao,xo,To,Oo]=["ReadableStream","Request","Response","Headers"].map(L),Io=e=>e.trim?e.trim():e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,"");function Be(e,t,{allOwnKeys:n=!1}={}){if(e===null||typeof e>"u")return;let r,i;if(typeof e!="object"&&(e=[e]),_e(e))for(r=0,i=e.length;r<i;r++)t.call(null,e[r],r,e);else{const s=n?Object.getOwnPropertyNames(e):Object.keys(e),o=s.length;let a;for(r=0;r<o;r++)a=s[r],t.call(null,e[a],a,e)}}function Jr(e,t){t=t.toLowerCase();const n=Object.keys(e);let r=n.length,i;for(;r-- >0;)if(i=n[r],t===i.toLowerCase())return i;return null}const ne=typeof globalThis<"u"?globalThis:typeof self<"u"?self:typeof window<"u"?window:global,Gr=e=>!De(e)&&e!==ne;function Ht(){const{caseless:e}=Gr(this)&&this||{},t={},n=(r,i)=>{const s=e&&Jr(t,i)||i;Je(t[s])&&Je(r)?t[s]=Ht(t[s],r):Je(r)?t[s]=Ht({},r):_e(r)?t[s]=r.slice():t[s]=r};for(let r=0,i=arguments.length;r<i;r++)arguments[r]&&Be(arguments[r],n);return t}const Co=(e,t,n,{allOwnKeys:r}={})=>(Be(t,(i,s)=>{n&&P(i)?e[s]=Vr(i,n):e[s]=i},{allOwnKeys:r}),e),Ro=e=>(e.charCodeAt(0)===65279&&(e=e.slice(1)),e),Do=(e,t,n,r)=>{e.prototype=Object.create(t.prototype,r),e.prototype.constructor=e,Object.defineProperty(e,"super",{value:t.prototype}),n&&Object.assign(e.prototype,n)},No=(e,t,n,r)=>{let i,s,o;const a={};if(t=t||{},e==null)return t;do{for(i=Object.getOwnPropertyNames(e),s=i.length;s-- >0;)o=i[s],(!r||r(o,e,t))&&!a[o]&&(t[o]=e[o],a[o]=!0);e=n!==!1&&yn(e)}while(e&&(!n||n(e,t))&&e!==Object.prototype);return t},ko=(e,t,n)=>{e=String(e),(n===void 0||n>e.length)&&(n=e.length),n-=t.length;const r=e.indexOf(t,n);return r!==-1&&r===n},Po=e=>{if(!e)return null;if(_e(e))return e;let t=e.length;if(!Wr(t))return null;const n=new Array(t);for(;t-- >0;)n[t]=e[t];return n},Mo=(e=>t=>e&&t instanceof e)(typeof Uint8Array<"u"&&yn(Uint8Array)),Bo=(e,t)=>{const r=(e&&e[Symbol.iterator]).call(e);let i;for(;(i=r.next())&&!i.done;){const s=i.value;t.call(e,s[0],s[1])}},Lo=(e,t)=>{let n;const r=[];for(;(n=e.exec(t))!==null;)r.push(n);return r},Fo=L("HTMLFormElement"),$o=e=>e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,function(n,r,i){return r.toUpperCase()+i}),Qn=(({hasOwnProperty:e})=>(t,n)=>e.call(t,n))(Object.prototype),jo=L("RegExp"),Yr=(e,t)=>{const n=Object.getOwnPropertyDescriptors(e),r={};Be(n,(i,s)=>{let o;(o=t(i,s,e))!==!1&&(r[s]=o||i)}),Object.defineProperties(e,r)},Ho=e=>{Yr(e,(t,n)=>{if(P(e)&&["arguments","caller","callee"].indexOf(n)!==-1)return!1;const r=e[n];if(P(r)){if(t.enumerable=!1,"writable"in t){t.writable=!1;return}t.set||(t.set=()=>{throw Error("Can not rewrite read-only method '"+n+"'")})}})},Uo=(e,t)=>{const n={},r=i=>{i.forEach(s=>{n[s]=!0})};return _e(e)?r(e):r(String(e).split(t)),n},qo=()=>{},Ko=(e,t)=>e!=null&&Number.isFinite(e=+e)?e:t,St="abcdefghijklmnopqrstuvwxyz",er="0123456789",Xr={DIGIT:er,ALPHA:St,ALPHA_DIGIT:St+St.toUpperCase()+er},Vo=(e=16,t=Xr.ALPHA_DIGIT)=>{let n="";const{length:r}=t;for(;e--;)n+=t[Math.random()*r|0];return n};function zo(e){return!!(e&&P(e.append)&&e[Symbol.toStringTag]==="FormData"&&e[Symbol.iterator])}const Wo=e=>{const t=new Array(10),n=(r,i)=>{if(ct(r)){if(t.indexOf(r)>=0)return;if(!("toJSON"in r)){t[i]=r;const s=_e(r)?[]:{};return Be(r,(o,a)=>{const c=n(o,i+1);!De(c)&&(s[a]=c)}),t[i]=void 0,s}}return r};return n(e,0)},Jo=L("AsyncFunction"),Go=e=>e&&(ct(e)||P(e))&&P(e.then)&&P(e.catch),Zr=((e,t)=>e?setImmediate:t?((n,r)=>(ne.addEventListener("message",({source:i,data:s})=>{i===ne&&s===n&&r.length&&r.shift()()},!1),i=>{r.push(i),ne.postMessage(n,"*")}))(`axios@${Math.random()}`,[]):n=>setTimeout(n))(typeof setImmediate=="function",P(ne.postMessage)),Yo=typeof queueMicrotask<"u"?queueMicrotask.bind(ne):typeof process<"u"&&process.nextTick||Zr,f={isArray:_e,isArrayBuffer:zr,isBuffer:po,isFormData:So,isArrayBufferView:ho,isString:go,isNumber:Wr,isBoolean:mo,isObject:ct,isPlainObject:Je,isReadableStream:Ao,isRequest:xo,isResponse:To,isHeaders:Oo,isUndefined:De,isDate:bo,isFile:_o,isBlob:yo,isRegExp:jo,isFunction:P,isStream:Eo,isURLSearchParams:vo,isTypedArray:Mo,isFileList:wo,forEach:Be,merge:Ht,extend:Co,trim:Io,stripBOM:Ro,inherits:Do,toFlatObject:No,kindOf:ot,kindOfTest:L,endsWith:ko,toArray:Po,forEachEntry:Bo,matchAll:Lo,isHTMLForm:Fo,hasOwnProperty:Qn,hasOwnProp:Qn,reduceDescriptors:Yr,freezeMethods:Ho,toObjectSet:Uo,toCamelCase:$o,noop:qo,toFiniteNumber:Ko,findKey:Jr,global:ne,isContextDefined:Gr,ALPHABET:Xr,generateString:Vo,isSpecCompliantForm:zo,toJSONObject:Wo,isAsyncFn:Jo,isThenable:Go,setImmediate:Zr,asap:Yo};function y(e,t,n,r,i){Error.call(this),Error.captureStackTrace?Error.captureStackTrace(this,this.constructor):this.stack=new Error().stack,this.message=e,this.name="AxiosError",t&&(this.code=t),n&&(this.config=n),r&&(this.request=r),i&&(this.response=i,this.status=i.status?i.status:null)}f.inherits(y,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:f.toJSONObject(this.config),code:this.code,status:this.status}}});const Qr=y.prototype,ei={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED","ERR_NOT_SUPPORT","ERR_INVALID_URL"].forEach(e=>{ei[e]={value:e}});Object.defineProperties(y,ei);Object.defineProperty(Qr,"isAxiosError",{value:!0});y.from=(e,t,n,r,i,s)=>{const o=Object.create(Qr);return f.toFlatObject(e,o,function(c){return c!==Error.prototype},a=>a!=="isAxiosError"),y.call(o,e.message,t,n,r,i),o.cause=e,o.name=e.name,s&&Object.assign(o,s),o};const Xo=null;function Ut(e){return f.isPlainObject(e)||f.isArray(e)}function ti(e){return f.endsWith(e,"[]")?e.slice(0,-2):e}function tr(e,t,n){return e?e.concat(t).map(function(i,s){return i=ti(i),!n&&s?"["+i+"]":i}).join(n?".":""):t}function Zo(e){return f.isArray(e)&&!e.some(Ut)}const Qo=f.toFlatObject(f,{},null,function(t){return/^is[A-Z]/.test(t)});function ut(e,t,n){if(!f.isObject(e))throw new TypeError("target must be an object");t=t||new FormData,n=f.toFlatObject(n,{metaTokens:!0,dots:!1,indexes:!1},!1,function(b,d){return!f.isUndefined(d[b])});const r=n.metaTokens,i=n.visitor||l,s=n.dots,o=n.indexes,c=(n.Blob||typeof Blob<"u"&&Blob)&&f.isSpecCompliantForm(t);if(!f.isFunction(i))throw new TypeError("visitor must be a function");function u(h){if(h===null)return"";if(f.isDate(h))return h.toISOString();if(!c&&f.isBlob(h))throw new y("Blob is not supported. Use a Buffer instead.");return f.isArrayBuffer(h)||f.isTypedArray(h)?c&&typeof Blob=="function"?new Blob([h]):Buffer.from(h):h}function l(h,b,d){let m=h;if(h&&!d&&typeof h=="object"){if(f.endsWith(b,"{}"))b=r?b:b.slice(0,-2),h=JSON.stringify(h);else if(f.isArray(h)&&Zo(h)||(f.isFileList(h)||f.endsWith(b,"[]"))&&(m=f.toArray(h)))return b=ti(b),m.forEach(function(E,A){!(f.isUndefined(E)||E===null)&&t.append(o===!0?tr([b],A,s):o===null?b:b+"[]",u(E))}),!1}return Ut(h)?!0:(t.append(tr(d,b,s),u(h)),!1)}const p=[],g=Object.assign(Qo,{defaultVisitor:l,convertValue:u,isVisitable:Ut});function _(h,b){if(!f.isUndefined(h)){if(p.indexOf(h)!==-1)throw Error("Circular reference detected in "+b.join("."));p.push(h),f.forEach(h,function(m,w){(!(f.isUndefined(m)||m===null)&&i.call(t,m,f.isString(w)?w.trim():w,b,g))===!0&&_(m,b?b.concat(w):[w])}),p.pop()}}if(!f.isObject(e))throw new TypeError("data must be an object");return _(e),t}function nr(e){const t={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+","%00":"\0"};return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g,function(r){return t[r]})}function wn(e,t){this._pairs=[],e&&ut(e,this,t)}const ni=wn.prototype;ni.append=function(t,n){this._pairs.push([t,n])};ni.toString=function(t){const n=t?function(r){return t.call(this,r,nr)}:nr;return this._pairs.map(function(i){return n(i[0])+"="+n(i[1])},"").join("&")};function ea(e){return encodeURIComponent(e).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}function ri(e,t,n){if(!t)return e;const r=n&&n.encode||ea,i=n&&n.serialize;let s;if(i?s=i(t,n):s=f.isURLSearchParams(t)?t.toString():new wn(t,n).toString(r),s){const o=e.indexOf("#");o!==-1&&(e=e.slice(0,o)),e+=(e.indexOf("?")===-1?"?":"&")+s}return e}class rr{constructor(){this.handlers=[]}use(t,n,r){return this.handlers.push({fulfilled:t,rejected:n,synchronous:r?r.synchronous:!1,runWhen:r?r.runWhen:null}),this.handlers.length-1}eject(t){this.handlers[t]&&(this.handlers[t]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(t){f.forEach(this.handlers,function(r){r!==null&&t(r)})}}const ii={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},ta=typeof URLSearchParams<"u"?URLSearchParams:wn,na=typeof FormData<"u"?FormData:null,ra=typeof Blob<"u"?Blob:null,ia={isBrowser:!0,classes:{URLSearchParams:ta,FormData:na,Blob:ra},protocols:["http","https","file","blob","url","data"]},En=typeof window<"u"&&typeof document<"u",qt=typeof navigator=="object"&&navigator||void 0,sa=En&&(!qt||["ReactNative","NativeScript","NS"].indexOf(qt.product)<0),oa=typeof WorkerGlobalScope<"u"&&self instanceof WorkerGlobalScope&&typeof self.importScripts=="function",aa=En&&window.location.href||"http://localhost",ca=Object.freeze(Object.defineProperty({__proto__:null,hasBrowserEnv:En,hasStandardBrowserEnv:sa,hasStandardBrowserWebWorkerEnv:oa,navigator:qt,origin:aa},Symbol.toStringTag,{value:"Module"})),N={...ca,...ia};function ua(e,t){return ut(e,new N.classes.URLSearchParams,Object.assign({visitor:function(n,r,i,s){return N.isNode&&f.isBuffer(n)?(this.append(r,n.toString("base64")),!1):s.defaultVisitor.apply(this,arguments)}},t))}function la(e){return f.matchAll(/\w+|\[(\w*)]/g,e).map(t=>t[0]==="[]"?"":t[1]||t[0])}function fa(e){const t={},n=Object.keys(e);let r;const i=n.length;let s;for(r=0;r<i;r++)s=n[r],t[s]=e[s];return t}function si(e){function t(n,r,i,s){let o=n[s++];if(o==="__proto__")return!0;const a=Number.isFinite(+o),c=s>=n.length;return o=!o&&f.isArray(i)?i.length:o,c?(f.hasOwnProp(i,o)?i[o]=[i[o],r]:i[o]=r,!a):((!i[o]||!f.isObject(i[o]))&&(i[o]=[]),t(n,r,i[o],s)&&f.isArray(i[o])&&(i[o]=fa(i[o])),!a)}if(f.isFormData(e)&&f.isFunction(e.entries)){const n={};return f.forEachEntry(e,(r,i)=>{t(la(r),i,n,0)}),n}return null}function da(e,t,n){if(f.isString(e))try{return(t||JSON.parse)(e),f.trim(e)}catch(r){if(r.name!=="SyntaxError")throw r}return(0,JSON.stringify)(e)}const Le={transitional:ii,adapter:["xhr","http","fetch"],transformRequest:[function(t,n){const r=n.getContentType()||"",i=r.indexOf("application/json")>-1,s=f.isObject(t);if(s&&f.isHTMLForm(t)&&(t=new FormData(t)),f.isFormData(t))return i?JSON.stringify(si(t)):t;if(f.isArrayBuffer(t)||f.isBuffer(t)||f.isStream(t)||f.isFile(t)||f.isBlob(t)||f.isReadableStream(t))return t;if(f.isArrayBufferView(t))return t.buffer;if(f.isURLSearchParams(t))return n.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),t.toString();let a;if(s){if(r.indexOf("application/x-www-form-urlencoded")>-1)return ua(t,this.formSerializer).toString();if((a=f.isFileList(t))||r.indexOf("multipart/form-data")>-1){const c=this.env&&this.env.FormData;return ut(a?{"files[]":t}:t,c&&new c,this.formSerializer)}}return s||i?(n.setContentType("application/json",!1),da(t)):t}],transformResponse:[function(t){const n=this.transitional||Le.transitional,r=n&&n.forcedJSONParsing,i=this.responseType==="json";if(f.isResponse(t)||f.isReadableStream(t))return t;if(t&&f.isString(t)&&(r&&!this.responseType||i)){const o=!(n&&n.silentJSONParsing)&&i;try{return JSON.parse(t)}catch(a){if(o)throw a.name==="SyntaxError"?y.from(a,y.ERR_BAD_RESPONSE,this,null,this.response):a}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:N.classes.FormData,Blob:N.classes.Blob},validateStatus:function(t){return t>=200&&t<300},headers:{common:{Accept:"application/json, text/plain, */*","Content-Type":void 0}}};f.forEach(["delete","get","head","post","put","patch"],e=>{Le.headers[e]={}});const pa=f.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),ha=e=>{const t={};let n,r,i;return e&&e.split(`
`).forEach(function(o){i=o.indexOf(":"),n=o.substring(0,i).trim().toLowerCase(),r=o.substring(i+1).trim(),!(!n||t[n]&&pa[n])&&(n==="set-cookie"?t[n]?t[n].push(r):t[n]=[r]:t[n]=t[n]?t[n]+", "+r:r)}),t},ir=Symbol("internals");function Ae(e){return e&&String(e).trim().toLowerCase()}function Ge(e){return e===!1||e==null?e:f.isArray(e)?e.map(Ge):String(e)}function ga(e){const t=Object.create(null),n=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;let r;for(;r=n.exec(e);)t[r[1]]=r[2];return t}const ma=e=>/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim());function vt(e,t,n,r,i){if(f.isFunction(r))return r.call(this,t,n);if(i&&(t=n),!!f.isString(t)){if(f.isString(r))return t.indexOf(r)!==-1;if(f.isRegExp(r))return r.test(t)}}function ba(e){return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,(t,n,r)=>n.toUpperCase()+r)}function _a(e,t){const n=f.toCamelCase(" "+t);["get","set","has"].forEach(r=>{Object.defineProperty(e,r+n,{value:function(i,s,o){return this[r].call(this,t,i,s,o)},configurable:!0})})}class k{constructor(t){t&&this.set(t)}set(t,n,r){const i=this;function s(a,c,u){const l=Ae(c);if(!l)throw new Error("header name must be a non-empty string");const p=f.findKey(i,l);(!p||i[p]===void 0||u===!0||u===void 0&&i[p]!==!1)&&(i[p||c]=Ge(a))}const o=(a,c)=>f.forEach(a,(u,l)=>s(u,l,c));if(f.isPlainObject(t)||t instanceof this.constructor)o(t,n);else if(f.isString(t)&&(t=t.trim())&&!ma(t))o(ha(t),n);else if(f.isHeaders(t))for(const[a,c]of t.entries())s(c,a,r);else t!=null&&s(n,t,r);return this}get(t,n){if(t=Ae(t),t){const r=f.findKey(this,t);if(r){const i=this[r];if(!n)return i;if(n===!0)return ga(i);if(f.isFunction(n))return n.call(this,i,r);if(f.isRegExp(n))return n.exec(i);throw new TypeError("parser must be boolean|regexp|function")}}}has(t,n){if(t=Ae(t),t){const r=f.findKey(this,t);return!!(r&&this[r]!==void 0&&(!n||vt(this,this[r],r,n)))}return!1}delete(t,n){const r=this;let i=!1;function s(o){if(o=Ae(o),o){const a=f.findKey(r,o);a&&(!n||vt(r,r[a],a,n))&&(delete r[a],i=!0)}}return f.isArray(t)?t.forEach(s):s(t),i}clear(t){const n=Object.keys(this);let r=n.length,i=!1;for(;r--;){const s=n[r];(!t||vt(this,this[s],s,t,!0))&&(delete this[s],i=!0)}return i}normalize(t){const n=this,r={};return f.forEach(this,(i,s)=>{const o=f.findKey(r,s);if(o){n[o]=Ge(i),delete n[s];return}const a=t?ba(s):String(s).trim();a!==s&&delete n[s],n[a]=Ge(i),r[a]=!0}),this}concat(...t){return this.constructor.concat(this,...t)}toJSON(t){const n=Object.create(null);return f.forEach(this,(r,i)=>{r!=null&&r!==!1&&(n[i]=t&&f.isArray(r)?r.join(", "):r)}),n}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map(([t,n])=>t+": "+n).join(`
`)}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(t){return t instanceof this?t:new this(t)}static concat(t,...n){const r=new this(t);return n.forEach(i=>r.set(i)),r}static accessor(t){const r=(this[ir]=this[ir]={accessors:{}}).accessors,i=this.prototype;function s(o){const a=Ae(o);r[a]||(_a(i,o),r[a]=!0)}return f.isArray(t)?t.forEach(s):s(t),this}}k.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]);f.reduceDescriptors(k.prototype,({value:e},t)=>{let n=t[0].toUpperCase()+t.slice(1);return{get:()=>e,set(r){this[n]=r}}});f.freezeMethods(k);function At(e,t){const n=this||Le,r=t||n,i=k.from(r.headers);let s=r.data;return f.forEach(e,function(a){s=a.call(n,s,i.normalize(),t?t.status:void 0)}),i.normalize(),s}function oi(e){return!!(e&&e.__CANCEL__)}function ye(e,t,n){y.call(this,e??"canceled",y.ERR_CANCELED,t,n),this.name="CanceledError"}f.inherits(ye,y,{__CANCEL__:!0});function ai(e,t,n){const r=n.config.validateStatus;!n.status||!r||r(n.status)?e(n):t(new y("Request failed with status code "+n.status,[y.ERR_BAD_REQUEST,y.ERR_BAD_RESPONSE][Math.floor(n.status/100)-4],n.config,n.request,n))}function ya(e){const t=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return t&&t[1]||""}function wa(e,t){e=e||10;const n=new Array(e),r=new Array(e);let i=0,s=0,o;return t=t!==void 0?t:1e3,function(c){const u=Date.now(),l=r[s];o||(o=u),n[i]=c,r[i]=u;let p=s,g=0;for(;p!==i;)g+=n[p++],p=p%e;if(i=(i+1)%e,i===s&&(s=(s+1)%e),u-o<t)return;const _=l&&u-l;return _?Math.round(g*1e3/_):void 0}}function Ea(e,t){let n=0,r=1e3/t,i,s;const o=(u,l=Date.now())=>{n=l,i=null,s&&(clearTimeout(s),s=null),e.apply(null,u)};return[(...u)=>{const l=Date.now(),p=l-n;p>=r?o(u,l):(i=u,s||(s=setTimeout(()=>{s=null,o(i)},r-p)))},()=>i&&o(i)]}const Ze=(e,t,n=3)=>{let r=0;const i=wa(50,250);return Ea(s=>{const o=s.loaded,a=s.lengthComputable?s.total:void 0,c=o-r,u=i(c),l=o<=a;r=o;const p={loaded:o,total:a,progress:a?o/a:void 0,bytes:c,rate:u||void 0,estimated:u&&a&&l?(a-o)/u:void 0,event:s,lengthComputable:a!=null,[t?"download":"upload"]:!0};e(p)},n)},sr=(e,t)=>{const n=e!=null;return[r=>t[0]({lengthComputable:n,total:e,loaded:r}),t[1]]},or=e=>(...t)=>f.asap(()=>e(...t)),Sa=N.hasStandardBrowserEnv?function(){const t=N.navigator&&/(msie|trident)/i.test(N.navigator.userAgent),n=document.createElement("a");let r;function i(s){let o=s;return t&&(n.setAttribute("href",o),o=n.href),n.setAttribute("href",o),{href:n.href,protocol:n.protocol?n.protocol.replace(/:$/,""):"",host:n.host,search:n.search?n.search.replace(/^\?/,""):"",hash:n.hash?n.hash.replace(/^#/,""):"",hostname:n.hostname,port:n.port,pathname:n.pathname.charAt(0)==="/"?n.pathname:"/"+n.pathname}}return r=i(window.location.href),function(o){const a=f.isString(o)?i(o):o;return a.protocol===r.protocol&&a.host===r.host}}():function(){return function(){return!0}}(),va=N.hasStandardBrowserEnv?{write(e,t,n,r,i,s){const o=[e+"="+encodeURIComponent(t)];f.isNumber(n)&&o.push("expires="+new Date(n).toGMTString()),f.isString(r)&&o.push("path="+r),f.isString(i)&&o.push("domain="+i),s===!0&&o.push("secure"),document.cookie=o.join("; ")},read(e){const t=document.cookie.match(new RegExp("(^|;\\s*)("+e+")=([^;]*)"));return t?decodeURIComponent(t[3]):null},remove(e){this.write(e,"",Date.now()-864e5)}}:{write(){},read(){return null},remove(){}};function Aa(e){return/^([a-z][a-z\d+\-.]*:)?\/\//i.test(e)}function xa(e,t){return t?e.replace(/\/?\/$/,"")+"/"+t.replace(/^\/+/,""):e}function ci(e,t){return e&&!Aa(t)?xa(e,t):t}const ar=e=>e instanceof k?{...e}:e;function le(e,t){t=t||{};const n={};function r(u,l,p){return f.isPlainObject(u)&&f.isPlainObject(l)?f.merge.call({caseless:p},u,l):f.isPlainObject(l)?f.merge({},l):f.isArray(l)?l.slice():l}function i(u,l,p){if(f.isUndefined(l)){if(!f.isUndefined(u))return r(void 0,u,p)}else return r(u,l,p)}function s(u,l){if(!f.isUndefined(l))return r(void 0,l)}function o(u,l){if(f.isUndefined(l)){if(!f.isUndefined(u))return r(void 0,u)}else return r(void 0,l)}function a(u,l,p){if(p in t)return r(u,l);if(p in e)return r(void 0,u)}const c={url:s,method:s,data:s,baseURL:o,transformRequest:o,transformResponse:o,paramsSerializer:o,timeout:o,timeoutMessage:o,withCredentials:o,withXSRFToken:o,adapter:o,responseType:o,xsrfCookieName:o,xsrfHeaderName:o,onUploadProgress:o,onDownloadProgress:o,decompress:o,maxContentLength:o,maxBodyLength:o,beforeRedirect:o,transport:o,httpAgent:o,httpsAgent:o,cancelToken:o,socketPath:o,responseEncoding:o,validateStatus:a,headers:(u,l)=>i(ar(u),ar(l),!0)};return f.forEach(Object.keys(Object.assign({},e,t)),function(l){const p=c[l]||i,g=p(e[l],t[l],l);f.isUndefined(g)&&p!==a||(n[l]=g)}),n}const ui=e=>{const t=le({},e);let{data:n,withXSRFToken:r,xsrfHeaderName:i,xsrfCookieName:s,headers:o,auth:a}=t;t.headers=o=k.from(o),t.url=ri(ci(t.baseURL,t.url),e.params,e.paramsSerializer),a&&o.set("Authorization","Basic "+btoa((a.username||"")+":"+(a.password?unescape(encodeURIComponent(a.password)):"")));let c;if(f.isFormData(n)){if(N.hasStandardBrowserEnv||N.hasStandardBrowserWebWorkerEnv)o.setContentType(void 0);else if((c=o.getContentType())!==!1){const[u,...l]=c?c.split(";").map(p=>p.trim()).filter(Boolean):[];o.setContentType([u||"multipart/form-data",...l].join("; "))}}if(N.hasStandardBrowserEnv&&(r&&f.isFunction(r)&&(r=r(t)),r||r!==!1&&Sa(t.url))){const u=i&&s&&va.read(s);u&&o.set(i,u)}return t},Ta=typeof XMLHttpRequest<"u",Oa=Ta&&function(e){return new Promise(function(n,r){const i=ui(e);let s=i.data;const o=k.from(i.headers).normalize();let{responseType:a,onUploadProgress:c,onDownloadProgress:u}=i,l,p,g,_,h;function b(){_&&_(),h&&h(),i.cancelToken&&i.cancelToken.unsubscribe(l),i.signal&&i.signal.removeEventListener("abort",l)}let d=new XMLHttpRequest;d.open(i.method.toUpperCase(),i.url,!0),d.timeout=i.timeout;function m(){if(!d)return;const E=k.from("getAllResponseHeaders"in d&&d.getAllResponseHeaders()),x={data:!a||a==="text"||a==="json"?d.responseText:d.response,status:d.status,statusText:d.statusText,headers:E,config:e,request:d};ai(function($){n($),b()},function($){r($),b()},x),d=null}"onloadend"in d?d.onloadend=m:d.onreadystatechange=function(){!d||d.readyState!==4||d.status===0&&!(d.responseURL&&d.responseURL.indexOf("file:")===0)||setTimeout(m)},d.onabort=function(){d&&(r(new y("Request aborted",y.ECONNABORTED,e,d)),d=null)},d.onerror=function(){r(new y("Network Error",y.ERR_NETWORK,e,d)),d=null},d.ontimeout=function(){let A=i.timeout?"timeout of "+i.timeout+"ms exceeded":"timeout exceeded";const x=i.transitional||ii;i.timeoutErrorMessage&&(A=i.timeoutErrorMessage),r(new y(A,x.clarifyTimeoutError?y.ETIMEDOUT:y.ECONNABORTED,e,d)),d=null},s===void 0&&o.setContentType(null),"setRequestHeader"in d&&f.forEach(o.toJSON(),function(A,x){d.setRequestHeader(x,A)}),f.isUndefined(i.withCredentials)||(d.withCredentials=!!i.withCredentials),a&&a!=="json"&&(d.responseType=i.responseType),u&&([g,h]=Ze(u,!0),d.addEventListener("progress",g)),c&&d.upload&&([p,_]=Ze(c),d.upload.addEventListener("progress",p),d.upload.addEventListener("loadend",_)),(i.cancelToken||i.signal)&&(l=E=>{d&&(r(!E||E.type?new ye(null,e,d):E),d.abort(),d=null)},i.cancelToken&&i.cancelToken.subscribe(l),i.signal&&(i.signal.aborted?l():i.signal.addEventListener("abort",l)));const w=ya(i.url);if(w&&N.protocols.indexOf(w)===-1){r(new y("Unsupported protocol "+w+":",y.ERR_BAD_REQUEST,e));return}d.send(s||null)})},Ia=(e,t)=>{const{length:n}=e=e?e.filter(Boolean):[];if(t||n){let r=new AbortController,i;const s=function(u){if(!i){i=!0,a();const l=u instanceof Error?u:this.reason;r.abort(l instanceof y?l:new ye(l instanceof Error?l.message:l))}};let o=t&&setTimeout(()=>{o=null,s(new y(`timeout ${t} of ms exceeded`,y.ETIMEDOUT))},t);const a=()=>{e&&(o&&clearTimeout(o),o=null,e.forEach(u=>{u.unsubscribe?u.unsubscribe(s):u.removeEventListener("abort",s)}),e=null)};e.forEach(u=>u.addEventListener("abort",s));const{signal:c}=r;return c.unsubscribe=()=>f.asap(a),c}},Ca=function*(e,t){let n=e.byteLength;if(n<t){yield e;return}let r=0,i;for(;r<n;)i=r+t,yield e.slice(r,i),r=i},Ra=async function*(e,t){for await(const n of Da(e))yield*Ca(n,t)},Da=async function*(e){if(e[Symbol.asyncIterator]){yield*e;return}const t=e.getReader();try{for(;;){const{done:n,value:r}=await t.read();if(n)break;yield r}}finally{await t.cancel()}},cr=(e,t,n,r)=>{const i=Ra(e,t);let s=0,o,a=c=>{o||(o=!0,r&&r(c))};return new ReadableStream({async pull(c){try{const{done:u,value:l}=await i.next();if(u){a(),c.close();return}let p=l.byteLength;if(n){let g=s+=p;n(g)}c.enqueue(new Uint8Array(l))}catch(u){throw a(u),u}},cancel(c){return a(c),i.return()}},{highWaterMark:2})},lt=typeof fetch=="function"&&typeof Request=="function"&&typeof Response=="function",li=lt&&typeof ReadableStream=="function",Na=lt&&(typeof TextEncoder=="function"?(e=>t=>e.encode(t))(new TextEncoder):async e=>new Uint8Array(await new Response(e).arrayBuffer())),fi=(e,...t)=>{try{return!!e(...t)}catch{return!1}},ka=li&&fi(()=>{let e=!1;const t=new Request(N.origin,{body:new ReadableStream,method:"POST",get duplex(){return e=!0,"half"}}).headers.has("Content-Type");return e&&!t}),ur=64*1024,Kt=li&&fi(()=>f.isReadableStream(new Response("").body)),Qe={stream:Kt&&(e=>e.body)};lt&&(e=>{["text","arrayBuffer","blob","formData","stream"].forEach(t=>{!Qe[t]&&(Qe[t]=f.isFunction(e[t])?n=>n[t]():(n,r)=>{throw new y(`Response type '${t}' is not supported`,y.ERR_NOT_SUPPORT,r)})})})(new Response);const Pa=async e=>{if(e==null)return 0;if(f.isBlob(e))return e.size;if(f.isSpecCompliantForm(e))return(await new Request(N.origin,{method:"POST",body:e}).arrayBuffer()).byteLength;if(f.isArrayBufferView(e)||f.isArrayBuffer(e))return e.byteLength;if(f.isURLSearchParams(e)&&(e=e+""),f.isString(e))return(await Na(e)).byteLength},Ma=async(e,t)=>{const n=f.toFiniteNumber(e.getContentLength());return n??Pa(t)},Ba=lt&&(async e=>{let{url:t,method:n,data:r,signal:i,cancelToken:s,timeout:o,onDownloadProgress:a,onUploadProgress:c,responseType:u,headers:l,withCredentials:p="same-origin",fetchOptions:g}=ui(e);u=u?(u+"").toLowerCase():"text";let _=Ia([i,s&&s.toAbortSignal()],o),h;const b=_&&_.unsubscribe&&(()=>{_.unsubscribe()});let d;try{if(c&&ka&&n!=="get"&&n!=="head"&&(d=await Ma(l,r))!==0){let x=new Request(t,{method:"POST",body:r,duplex:"half"}),D;if(f.isFormData(r)&&(D=x.headers.get("content-type"))&&l.setContentType(D),x.body){const[$,ge]=sr(d,Ze(or(c)));r=cr(x.body,ur,$,ge)}}f.isString(p)||(p=p?"include":"omit");const m="credentials"in Request.prototype;h=new Request(t,{...g,signal:_,method:n.toUpperCase(),headers:l.normalize().toJSON(),body:r,duplex:"half",credentials:m?p:void 0});let w=await fetch(h);const E=Kt&&(u==="stream"||u==="response");if(Kt&&(a||E&&b)){const x={};["status","statusText","headers"].forEach(Ue=>{x[Ue]=w[Ue]});const D=f.toFiniteNumber(w.headers.get("content-length")),[$,ge]=a&&sr(D,Ze(or(a),!0))||[];w=new Response(cr(w.body,ur,$,()=>{ge&&ge(),b&&b()}),x)}u=u||"text";let A=await Qe[f.findKey(Qe,u)||"text"](w,e);return!E&&b&&b(),await new Promise((x,D)=>{ai(x,D,{data:A,headers:k.from(w.headers),status:w.status,statusText:w.statusText,config:e,request:h})})}catch(m){throw b&&b(),m&&m.name==="TypeError"&&/fetch/i.test(m.message)?Object.assign(new y("Network Error",y.ERR_NETWORK,e,h),{cause:m.cause||m}):y.from(m,m&&m.code,e,h)}}),Vt={http:Xo,xhr:Oa,fetch:Ba};f.forEach(Vt,(e,t)=>{if(e){try{Object.defineProperty(e,"name",{value:t})}catch{}Object.defineProperty(e,"adapterName",{value:t})}});const lr=e=>`- ${e}`,La=e=>f.isFunction(e)||e===null||e===!1,di={getAdapter:e=>{e=f.isArray(e)?e:[e];const{length:t}=e;let n,r;const i={};for(let s=0;s<t;s++){n=e[s];let o;if(r=n,!La(n)&&(r=Vt[(o=String(n)).toLowerCase()],r===void 0))throw new y(`Unknown adapter '${o}'`);if(r)break;i[o||"#"+s]=r}if(!r){const s=Object.entries(i).map(([a,c])=>`adapter ${a} `+(c===!1?"is not supported by the environment":"is not available in the build"));let o=t?s.length>1?`since :
`+s.map(lr).join(`
`):" "+lr(s[0]):"as no adapter specified";throw new y("There is no suitable adapter to dispatch the request "+o,"ERR_NOT_SUPPORT")}return r},adapters:Vt};function xt(e){if(e.cancelToken&&e.cancelToken.throwIfRequested(),e.signal&&e.signal.aborted)throw new ye(null,e)}function fr(e){return xt(e),e.headers=k.from(e.headers),e.data=At.call(e,e.transformRequest),["post","put","patch"].indexOf(e.method)!==-1&&e.headers.setContentType("application/x-www-form-urlencoded",!1),di.getAdapter(e.adapter||Le.adapter)(e).then(function(r){return xt(e),r.data=At.call(e,e.transformResponse,r),r.headers=k.from(r.headers),r},function(r){return oi(r)||(xt(e),r&&r.response&&(r.response.data=At.call(e,e.transformResponse,r.response),r.response.headers=k.from(r.response.headers))),Promise.reject(r)})}const pi="1.7.7",Sn={};["object","boolean","number","function","string","symbol"].forEach((e,t)=>{Sn[e]=function(r){return typeof r===e||"a"+(t<1?"n ":" ")+e}});const dr={};Sn.transitional=function(t,n,r){function i(s,o){return"[Axios v"+pi+"] Transitional option '"+s+"'"+o+(r?". "+r:"")}return(s,o,a)=>{if(t===!1)throw new y(i(o," has been removed"+(n?" in "+n:"")),y.ERR_DEPRECATED);return n&&!dr[o]&&(dr[o]=!0,console.warn(i(o," has been deprecated since v"+n+" and will be removed in the near future"))),t?t(s,o,a):!0}};function Fa(e,t,n){if(typeof e!="object")throw new y("options must be an object",y.ERR_BAD_OPTION_VALUE);const r=Object.keys(e);let i=r.length;for(;i-- >0;){const s=r[i],o=t[s];if(o){const a=e[s],c=a===void 0||o(a,s,e);if(c!==!0)throw new y("option "+s+" must be "+c,y.ERR_BAD_OPTION_VALUE);continue}if(n!==!0)throw new y("Unknown option "+s,y.ERR_BAD_OPTION)}}const zt={assertOptions:Fa,validators:Sn},V=zt.validators;class se{constructor(t){this.defaults=t,this.interceptors={request:new rr,response:new rr}}async request(t,n){try{return await this._request(t,n)}catch(r){if(r instanceof Error){let i;Error.captureStackTrace?Error.captureStackTrace(i={}):i=new Error;const s=i.stack?i.stack.replace(/^.+\n/,""):"";try{r.stack?s&&!String(r.stack).endsWith(s.replace(/^.+\n.+\n/,""))&&(r.stack+=`
`+s):r.stack=s}catch{}}throw r}}_request(t,n){typeof t=="string"?(n=n||{},n.url=t):n=t||{},n=le(this.defaults,n);const{transitional:r,paramsSerializer:i,headers:s}=n;r!==void 0&&zt.assertOptions(r,{silentJSONParsing:V.transitional(V.boolean),forcedJSONParsing:V.transitional(V.boolean),clarifyTimeoutError:V.transitional(V.boolean)},!1),i!=null&&(f.isFunction(i)?n.paramsSerializer={serialize:i}:zt.assertOptions(i,{encode:V.function,serialize:V.function},!0)),n.method=(n.method||this.defaults.method||"get").toLowerCase();let o=s&&f.merge(s.common,s[n.method]);s&&f.forEach(["delete","get","head","post","put","patch","common"],h=>{delete s[h]}),n.headers=k.concat(o,s);const a=[];let c=!0;this.interceptors.request.forEach(function(b){typeof b.runWhen=="function"&&b.runWhen(n)===!1||(c=c&&b.synchronous,a.unshift(b.fulfilled,b.rejected))});const u=[];this.interceptors.response.forEach(function(b){u.push(b.fulfilled,b.rejected)});let l,p=0,g;if(!c){const h=[fr.bind(this),void 0];for(h.unshift.apply(h,a),h.push.apply(h,u),g=h.length,l=Promise.resolve(n);p<g;)l=l.then(h[p++],h[p++]);return l}g=a.length;let _=n;for(p=0;p<g;){const h=a[p++],b=a[p++];try{_=h(_)}catch(d){b.call(this,d);break}}try{l=fr.call(this,_)}catch(h){return Promise.reject(h)}for(p=0,g=u.length;p<g;)l=l.then(u[p++],u[p++]);return l}getUri(t){t=le(this.defaults,t);const n=ci(t.baseURL,t.url);return ri(n,t.params,t.paramsSerializer)}}f.forEach(["delete","get","head","options"],function(t){se.prototype[t]=function(n,r){return this.request(le(r||{},{method:t,url:n,data:(r||{}).data}))}});f.forEach(["post","put","patch"],function(t){function n(r){return function(s,o,a){return this.request(le(a||{},{method:t,headers:r?{"Content-Type":"multipart/form-data"}:{},url:s,data:o}))}}se.prototype[t]=n(),se.prototype[t+"Form"]=n(!0)});class vn{constructor(t){if(typeof t!="function")throw new TypeError("executor must be a function.");let n;this.promise=new Promise(function(s){n=s});const r=this;this.promise.then(i=>{if(!r._listeners)return;let s=r._listeners.length;for(;s-- >0;)r._listeners[s](i);r._listeners=null}),this.promise.then=i=>{let s;const o=new Promise(a=>{r.subscribe(a),s=a}).then(i);return o.cancel=function(){r.unsubscribe(s)},o},t(function(s,o,a){r.reason||(r.reason=new ye(s,o,a),n(r.reason))})}throwIfRequested(){if(this.reason)throw this.reason}subscribe(t){if(this.reason){t(this.reason);return}this._listeners?this._listeners.push(t):this._listeners=[t]}unsubscribe(t){if(!this._listeners)return;const n=this._listeners.indexOf(t);n!==-1&&this._listeners.splice(n,1)}toAbortSignal(){const t=new AbortController,n=r=>{t.abort(r)};return this.subscribe(n),t.signal.unsubscribe=()=>this.unsubscribe(n),t.signal}static source(){let t;return{token:new vn(function(i){t=i}),cancel:t}}}function $a(e){return function(n){return e.apply(null,n)}}function ja(e){return f.isObject(e)&&e.isAxiosError===!0}const Wt={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511};Object.entries(Wt).forEach(([e,t])=>{Wt[t]=e});function hi(e){const t=new se(e),n=Vr(se.prototype.request,t);return f.extend(n,se.prototype,t,{allOwnKeys:!0}),f.extend(n,t,null,{allOwnKeys:!0}),n.create=function(i){return hi(le(e,i))},n}const T=hi(Le);T.Axios=se;T.CanceledError=ye;T.CancelToken=vn;T.isCancel=oi;T.VERSION=pi;T.toFormData=ut;T.AxiosError=y;T.Cancel=T.CanceledError;T.all=function(t){return Promise.all(t)};T.spread=$a;T.isAxiosError=ja;T.mergeConfig=le;T.AxiosHeaders=k;T.formToJSON=e=>si(f.isHTMLForm(e)?new FormData(e):e);T.getAdapter=di.getAdapter;T.HttpStatusCode=Wt;T.default=T;window.axios=T;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";var Jt=!1,Gt=!1,oe=[],Yt=-1;function Ha(e){Ua(e)}function Ua(e){oe.includes(e)||oe.push(e),qa()}function gi(e){let t=oe.indexOf(e);t!==-1&&t>Yt&&oe.splice(t,1)}function qa(){!Gt&&!Jt&&(Jt=!0,queueMicrotask(Ka))}function Ka(){Jt=!1,Gt=!0;for(let e=0;e<oe.length;e++)oe[e](),Yt=e;oe.length=0,Yt=-1,Gt=!1}var we,he,Ee,mi,Xt=!0;function Va(e){Xt=!1,e(),Xt=!0}function za(e){we=e.reactive,Ee=e.release,he=t=>e.effect(t,{scheduler:n=>{Xt?Ha(n):n()}}),mi=e.raw}function pr(e){he=e}function Wa(e){let t=()=>{};return[r=>{let i=he(r);return e._x_effects||(e._x_effects=new Set,e._x_runEffects=()=>{e._x_effects.forEach(s=>s())}),e._x_effects.add(i),t=()=>{i!==void 0&&(e._x_effects.delete(i),Ee(i))},i},()=>{t()}]}function bi(e,t){let n=!0,r,i=he(()=>{let s=e();JSON.stringify(s),n?r=s:queueMicrotask(()=>{t(s,r),r=s}),n=!1});return()=>Ee(i)}var _i=[],yi=[],wi=[];function Ja(e){wi.push(e)}function An(e,t){typeof t=="function"?(e._x_cleanups||(e._x_cleanups=[]),e._x_cleanups.push(t)):(t=e,yi.push(t))}function Ei(e){_i.push(e)}function Si(e,t,n){e._x_attributeCleanups||(e._x_attributeCleanups={}),e._x_attributeCleanups[t]||(e._x_attributeCleanups[t]=[]),e._x_attributeCleanups[t].push(n)}function vi(e,t){e._x_attributeCleanups&&Object.entries(e._x_attributeCleanups).forEach(([n,r])=>{(t===void 0||t.includes(n))&&(r.forEach(i=>i()),delete e._x_attributeCleanups[n])})}function Ga(e){if(e._x_cleanups)for(;e._x_cleanups.length;)e._x_cleanups.pop()()}var xn=new MutationObserver(Cn),Tn=!1;function On(){xn.observe(document,{subtree:!0,childList:!0,attributes:!0,attributeOldValue:!0}),Tn=!0}function Ai(){Ya(),xn.disconnect(),Tn=!1}var xe=[];function Ya(){let e=xn.takeRecords();xe.push(()=>e.length>0&&Cn(e));let t=xe.length;queueMicrotask(()=>{if(xe.length===t)for(;xe.length>0;)xe.shift()()})}function I(e){if(!Tn)return e();Ai();let t=e();return On(),t}var In=!1,et=[];function Xa(){In=!0}function Za(){In=!1,Cn(et),et=[]}function Cn(e){if(In){et=et.concat(e);return}let t=new Set,n=new Set,r=new Map,i=new Map;for(let s=0;s<e.length;s++)if(!e[s].target._x_ignoreMutationObserver&&(e[s].type==="childList"&&(e[s].addedNodes.forEach(o=>o.nodeType===1&&t.add(o)),e[s].removedNodes.forEach(o=>o.nodeType===1&&n.add(o))),e[s].type==="attributes")){let o=e[s].target,a=e[s].attributeName,c=e[s].oldValue,u=()=>{r.has(o)||r.set(o,[]),r.get(o).push({name:a,value:o.getAttribute(a)})},l=()=>{i.has(o)||i.set(o,[]),i.get(o).push(a)};o.hasAttribute(a)&&c===null?u():o.hasAttribute(a)?(l(),u()):l()}i.forEach((s,o)=>{vi(o,s)}),r.forEach((s,o)=>{_i.forEach(a=>a(o,s))});for(let s of n)t.has(s)||yi.forEach(o=>o(s));t.forEach(s=>{s._x_ignoreSelf=!0,s._x_ignore=!0});for(let s of t)n.has(s)||s.isConnected&&(delete s._x_ignoreSelf,delete s._x_ignore,wi.forEach(o=>o(s)),s._x_ignore=!0,s._x_ignoreSelf=!0);t.forEach(s=>{delete s._x_ignoreSelf,delete s._x_ignore}),t=null,n=null,r=null,i=null}function xi(e){return $e(me(e))}function Fe(e,t,n){return e._x_dataStack=[t,...me(n||e)],()=>{e._x_dataStack=e._x_dataStack.filter(r=>r!==t)}}function me(e){return e._x_dataStack?e._x_dataStack:typeof ShadowRoot=="function"&&e instanceof ShadowRoot?me(e.host):e.parentNode?me(e.parentNode):[]}function $e(e){return new Proxy({objects:e},Qa)}var Qa={ownKeys({objects:e}){return Array.from(new Set(e.flatMap(t=>Object.keys(t))))},has({objects:e},t){return t==Symbol.unscopables?!1:e.some(n=>Object.prototype.hasOwnProperty.call(n,t)||Reflect.has(n,t))},get({objects:e},t,n){return t=="toJSON"?ec:Reflect.get(e.find(r=>Reflect.has(r,t))||{},t,n)},set({objects:e},t,n,r){const i=e.find(o=>Object.prototype.hasOwnProperty.call(o,t))||e[e.length-1],s=Object.getOwnPropertyDescriptor(i,t);return s!=null&&s.set&&(s!=null&&s.get)?s.set.call(r,n)||!0:Reflect.set(i,t,n)}};function ec(){return Reflect.ownKeys(this).reduce((t,n)=>(t[n]=Reflect.get(this,n),t),{})}function Ti(e){let t=r=>typeof r=="object"&&!Array.isArray(r)&&r!==null,n=(r,i="")=>{Object.entries(Object.getOwnPropertyDescriptors(r)).forEach(([s,{value:o,enumerable:a}])=>{if(a===!1||o===void 0||typeof o=="object"&&o!==null&&o.__v_skip)return;let c=i===""?s:`${i}.${s}`;typeof o=="object"&&o!==null&&o._x_interceptor?r[s]=o.initialize(e,c,s):t(o)&&o!==r&&!(o instanceof Element)&&n(o,c)})};return n(e)}function Oi(e,t=()=>{}){let n={initialValue:void 0,_x_interceptor:!0,initialize(r,i,s){return e(this.initialValue,()=>tc(r,i),o=>Zt(r,i,o),i,s)}};return t(n),r=>{if(typeof r=="object"&&r!==null&&r._x_interceptor){let i=n.initialize.bind(n);n.initialize=(s,o,a)=>{let c=r.initialize(s,o,a);return n.initialValue=c,i(s,o,a)}}else n.initialValue=r;return n}}function tc(e,t){return t.split(".").reduce((n,r)=>n[r],e)}function Zt(e,t,n){if(typeof t=="string"&&(t=t.split(".")),t.length===1)e[t[0]]=n;else{if(t.length===0)throw error;return e[t[0]]||(e[t[0]]={}),Zt(e[t[0]],t.slice(1),n)}}var Ii={};function F(e,t){Ii[e]=t}function Qt(e,t){return Object.entries(Ii).forEach(([n,r])=>{let i=null;function s(){if(i)return i;{let[o,a]=Pi(t);return i={interceptor:Oi,...o},An(t,a),i}}Object.defineProperty(e,`$${n}`,{get(){return r(t,s())},enumerable:!1})}),e}function nc(e,t,n,...r){try{return n(...r)}catch(i){Ne(i,e,t)}}function Ne(e,t,n=void 0){e=Object.assign(e??{message:"No error message given."},{el:t,expression:n}),console.warn(`Alpine Expression Error: ${e.message}

${n?'Expression: "'+n+`"

`:""}`,t),setTimeout(()=>{throw e},0)}var Ye=!0;function Ci(e){let t=Ye;Ye=!1;let n=e();return Ye=t,n}function ae(e,t,n={}){let r;return C(e,t)(i=>r=i,n),r}function C(...e){return Ri(...e)}var Ri=Di;function rc(e){Ri=e}function Di(e,t){let n={};Qt(n,e);let r=[n,...me(e)],i=typeof t=="function"?ic(r,t):oc(r,t,e);return nc.bind(null,e,t,i)}function ic(e,t){return(n=()=>{},{scope:r={},params:i=[]}={})=>{let s=t.apply($e([r,...e]),i);tt(n,s)}}var Tt={};function sc(e,t){if(Tt[e])return Tt[e];let n=Object.getPrototypeOf(async function(){}).constructor,r=/^[\n\s]*if.*\(.*\)/.test(e.trim())||/^(let|const)\s/.test(e.trim())?`(async()=>{ ${e} })()`:e,s=(()=>{try{let o=new n(["__self","scope"],`with (scope) { __self.result = ${r} }; __self.finished = true; return __self.result;`);return Object.defineProperty(o,"name",{value:`[Alpine] ${e}`}),o}catch(o){return Ne(o,t,e),Promise.resolve()}})();return Tt[e]=s,s}function oc(e,t,n){let r=sc(t,n);return(i=()=>{},{scope:s={},params:o=[]}={})=>{r.result=void 0,r.finished=!1;let a=$e([s,...e]);if(typeof r=="function"){let c=r(r,a).catch(u=>Ne(u,n,t));r.finished?(tt(i,r.result,a,o,n),r.result=void 0):c.then(u=>{tt(i,u,a,o,n)}).catch(u=>Ne(u,n,t)).finally(()=>r.result=void 0)}}}function tt(e,t,n,r,i){if(Ye&&typeof t=="function"){let s=t.apply(n,r);s instanceof Promise?s.then(o=>tt(e,o,n,r)).catch(o=>Ne(o,i,t)):e(s)}else typeof t=="object"&&t instanceof Promise?t.then(s=>e(s)):e(t)}var Rn="x-";function Se(e=""){return Rn+e}function ac(e){Rn=e}var nt={};function O(e,t){return nt[e]=t,{before(n){if(!nt[n]){console.warn(String.raw`Cannot find directive \`${n}\`. \`${e}\` will use the default order of execution`);return}const r=re.indexOf(n);re.splice(r>=0?r:re.indexOf("DEFAULT"),0,e)}}}function cc(e){return Object.keys(nt).includes(e)}function Dn(e,t,n){if(t=Array.from(t),e._x_virtualDirectives){let s=Object.entries(e._x_virtualDirectives).map(([a,c])=>({name:a,value:c})),o=Ni(s);s=s.map(a=>o.find(c=>c.name===a.name)?{name:`x-bind:${a.name}`,value:`"${a.value}"`}:a),t=t.concat(s)}let r={};return t.map(Li((s,o)=>r[s]=o)).filter($i).map(fc(r,n)).sort(dc).map(s=>lc(e,s))}function Ni(e){return Array.from(e).map(Li()).filter(t=>!$i(t))}var en=!1,Ie=new Map,ki=Symbol();function uc(e){en=!0;let t=Symbol();ki=t,Ie.set(t,[]);let n=()=>{for(;Ie.get(t).length;)Ie.get(t).shift()();Ie.delete(t)},r=()=>{en=!1,n()};e(n),r()}function Pi(e){let t=[],n=a=>t.push(a),[r,i]=Wa(e);return t.push(i),[{Alpine:He,effect:r,cleanup:n,evaluateLater:C.bind(C,e),evaluate:ae.bind(ae,e)},()=>t.forEach(a=>a())]}function lc(e,t){let n=()=>{},r=nt[t.type]||n,[i,s]=Pi(e);Si(e,t.original,s);let o=()=>{e._x_ignore||e._x_ignoreSelf||(r.inline&&r.inline(e,t,i),r=r.bind(r,e,t,i),en?Ie.get(ki).push(r):r())};return o.runCleanups=s,o}var Mi=(e,t)=>({name:n,value:r})=>(n.startsWith(e)&&(n=n.replace(e,t)),{name:n,value:r}),Bi=e=>e;function Li(e=()=>{}){return({name:t,value:n})=>{let{name:r,value:i}=Fi.reduce((s,o)=>o(s),{name:t,value:n});return r!==t&&e(r,t),{name:r,value:i}}}var Fi=[];function Nn(e){Fi.push(e)}function $i({name:e}){return ji().test(e)}var ji=()=>new RegExp(`^${Rn}([^:^.]+)\\b`);function fc(e,t){return({name:n,value:r})=>{let i=n.match(ji()),s=n.match(/:([a-zA-Z0-9\-_:]+)/),o=n.match(/\.[^.\]]+(?=[^\]]*$)/g)||[],a=t||e[n]||n;return{type:i?i[1]:null,value:s?s[1]:null,modifiers:o.map(c=>c.replace(".","")),expression:r,original:a}}}var tn="DEFAULT",re=["ignore","ref","data","id","anchor","bind","init","for","model","modelable","transition","show","if",tn,"teleport"];function dc(e,t){let n=re.indexOf(e.type)===-1?tn:e.type,r=re.indexOf(t.type)===-1?tn:t.type;return re.indexOf(n)-re.indexOf(r)}function Ce(e,t,n={}){e.dispatchEvent(new CustomEvent(t,{detail:n,bubbles:!0,composed:!0,cancelable:!0}))}function G(e,t){if(typeof ShadowRoot=="function"&&e instanceof ShadowRoot){Array.from(e.children).forEach(i=>G(i,t));return}let n=!1;if(t(e,()=>n=!0),n)return;let r=e.firstElementChild;for(;r;)G(r,t),r=r.nextElementSibling}function M(e,...t){console.warn(`Alpine Warning: ${e}`,...t)}var hr=!1;function pc(){hr&&M("Alpine has already been initialized on this page. Calling Alpine.start() more than once can cause problems."),hr=!0,document.body||M("Unable to initialize. Trying to load Alpine before `<body>` is available. Did you forget to add `defer` in Alpine's `<script>` tag?"),Ce(document,"alpine:init"),Ce(document,"alpine:initializing"),On(),Ja(t=>q(t,G)),An(t=>Wi(t)),Ei((t,n)=>{Dn(t,n).forEach(r=>r())});let e=t=>!ft(t.parentElement,!0);Array.from(document.querySelectorAll(qi().join(","))).filter(e).forEach(t=>{q(t)}),Ce(document,"alpine:initialized"),setTimeout(()=>{mc()})}var kn=[],Hi=[];function Ui(){return kn.map(e=>e())}function qi(){return kn.concat(Hi).map(e=>e())}function Ki(e){kn.push(e)}function Vi(e){Hi.push(e)}function ft(e,t=!1){return je(e,n=>{if((t?qi():Ui()).some(i=>n.matches(i)))return!0})}function je(e,t){if(e){if(t(e))return e;if(e._x_teleportBack&&(e=e._x_teleportBack),!!e.parentElement)return je(e.parentElement,t)}}function hc(e){return Ui().some(t=>e.matches(t))}var zi=[];function gc(e){zi.push(e)}function q(e,t=G,n=()=>{}){uc(()=>{t(e,(r,i)=>{n(r,i),zi.forEach(s=>s(r,i)),Dn(r,r.attributes).forEach(s=>s()),r._x_ignore&&i()})})}function Wi(e,t=G){t(e,n=>{vi(n),Ga(n)})}function mc(){[["ui","dialog",["[x-dialog], [x-popover]"]],["anchor","anchor",["[x-anchor]"]],["sort","sort",["[x-sort]"]]].forEach(([t,n,r])=>{cc(n)||r.some(i=>{if(document.querySelector(i))return M(`found "${i}", but missing ${t} plugin`),!0})})}var nn=[],Pn=!1;function Mn(e=()=>{}){return queueMicrotask(()=>{Pn||setTimeout(()=>{rn()})}),new Promise(t=>{nn.push(()=>{e(),t()})})}function rn(){for(Pn=!1;nn.length;)nn.shift()()}function bc(){Pn=!0}function Bn(e,t){return Array.isArray(t)?gr(e,t.join(" ")):typeof t=="object"&&t!==null?_c(e,t):typeof t=="function"?Bn(e,t()):gr(e,t)}function gr(e,t){let n=i=>i.split(" ").filter(s=>!e.classList.contains(s)).filter(Boolean),r=i=>(e.classList.add(...i),()=>{e.classList.remove(...i)});return t=t===!0?t="":t||"",r(n(t))}function _c(e,t){let n=a=>a.split(" ").filter(Boolean),r=Object.entries(t).flatMap(([a,c])=>c?n(a):!1).filter(Boolean),i=Object.entries(t).flatMap(([a,c])=>c?!1:n(a)).filter(Boolean),s=[],o=[];return i.forEach(a=>{e.classList.contains(a)&&(e.classList.remove(a),o.push(a))}),r.forEach(a=>{e.classList.contains(a)||(e.classList.add(a),s.push(a))}),()=>{o.forEach(a=>e.classList.add(a)),s.forEach(a=>e.classList.remove(a))}}function dt(e,t){return typeof t=="object"&&t!==null?yc(e,t):wc(e,t)}function yc(e,t){let n={};return Object.entries(t).forEach(([r,i])=>{n[r]=e.style[r],r.startsWith("--")||(r=Ec(r)),e.style.setProperty(r,i)}),setTimeout(()=>{e.style.length===0&&e.removeAttribute("style")}),()=>{dt(e,n)}}function wc(e,t){let n=e.getAttribute("style",t);return e.setAttribute("style",t),()=>{e.setAttribute("style",n||"")}}function Ec(e){return e.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase()}function sn(e,t=()=>{}){let n=!1;return function(){n?t.apply(this,arguments):(n=!0,e.apply(this,arguments))}}O("transition",(e,{value:t,modifiers:n,expression:r},{evaluate:i})=>{typeof r=="function"&&(r=i(r)),r!==!1&&(!r||typeof r=="boolean"?vc(e,n,t):Sc(e,r,t))});function Sc(e,t,n){Ji(e,Bn,""),{enter:i=>{e._x_transition.enter.during=i},"enter-start":i=>{e._x_transition.enter.start=i},"enter-end":i=>{e._x_transition.enter.end=i},leave:i=>{e._x_transition.leave.during=i},"leave-start":i=>{e._x_transition.leave.start=i},"leave-end":i=>{e._x_transition.leave.end=i}}[n](t)}function vc(e,t,n){Ji(e,dt);let r=!t.includes("in")&&!t.includes("out")&&!n,i=r||t.includes("in")||["enter"].includes(n),s=r||t.includes("out")||["leave"].includes(n);t.includes("in")&&!r&&(t=t.filter((m,w)=>w<t.indexOf("out"))),t.includes("out")&&!r&&(t=t.filter((m,w)=>w>t.indexOf("out")));let o=!t.includes("opacity")&&!t.includes("scale"),a=o||t.includes("opacity"),c=o||t.includes("scale"),u=a?0:1,l=c?Te(t,"scale",95)/100:1,p=Te(t,"delay",0)/1e3,g=Te(t,"origin","center"),_="opacity, transform",h=Te(t,"duration",150)/1e3,b=Te(t,"duration",75)/1e3,d="cubic-bezier(0.4, 0.0, 0.2, 1)";i&&(e._x_transition.enter.during={transformOrigin:g,transitionDelay:`${p}s`,transitionProperty:_,transitionDuration:`${h}s`,transitionTimingFunction:d},e._x_transition.enter.start={opacity:u,transform:`scale(${l})`},e._x_transition.enter.end={opacity:1,transform:"scale(1)"}),s&&(e._x_transition.leave.during={transformOrigin:g,transitionDelay:`${p}s`,transitionProperty:_,transitionDuration:`${b}s`,transitionTimingFunction:d},e._x_transition.leave.start={opacity:1,transform:"scale(1)"},e._x_transition.leave.end={opacity:u,transform:`scale(${l})`})}function Ji(e,t,n={}){e._x_transition||(e._x_transition={enter:{during:n,start:n,end:n},leave:{during:n,start:n,end:n},in(r=()=>{},i=()=>{}){on(e,t,{during:this.enter.during,start:this.enter.start,end:this.enter.end},r,i)},out(r=()=>{},i=()=>{}){on(e,t,{during:this.leave.during,start:this.leave.start,end:this.leave.end},r,i)}})}window.Element.prototype._x_toggleAndCascadeWithTransitions=function(e,t,n,r){const i=document.visibilityState==="visible"?requestAnimationFrame:setTimeout;let s=()=>i(n);if(t){e._x_transition&&(e._x_transition.enter||e._x_transition.leave)?e._x_transition.enter&&(Object.entries(e._x_transition.enter.during).length||Object.entries(e._x_transition.enter.start).length||Object.entries(e._x_transition.enter.end).length)?e._x_transition.in(n):s():e._x_transition?e._x_transition.in(n):s();return}e._x_hidePromise=e._x_transition?new Promise((o,a)=>{e._x_transition.out(()=>{},()=>o(r)),e._x_transitioning&&e._x_transitioning.beforeCancel(()=>a({isFromCancelledTransition:!0}))}):Promise.resolve(r),queueMicrotask(()=>{let o=Gi(e);o?(o._x_hideChildren||(o._x_hideChildren=[]),o._x_hideChildren.push(e)):i(()=>{let a=c=>{let u=Promise.all([c._x_hidePromise,...(c._x_hideChildren||[]).map(a)]).then(([l])=>l==null?void 0:l());return delete c._x_hidePromise,delete c._x_hideChildren,u};a(e).catch(c=>{if(!c.isFromCancelledTransition)throw c})})})};function Gi(e){let t=e.parentNode;if(t)return t._x_hidePromise?t:Gi(t)}function on(e,t,{during:n,start:r,end:i}={},s=()=>{},o=()=>{}){if(e._x_transitioning&&e._x_transitioning.cancel(),Object.keys(n).length===0&&Object.keys(r).length===0&&Object.keys(i).length===0){s(),o();return}let a,c,u;Ac(e,{start(){a=t(e,r)},during(){c=t(e,n)},before:s,end(){a(),u=t(e,i)},after:o,cleanup(){c(),u()}})}function Ac(e,t){let n,r,i,s=sn(()=>{I(()=>{n=!0,r||t.before(),i||(t.end(),rn()),t.after(),e.isConnected&&t.cleanup(),delete e._x_transitioning})});e._x_transitioning={beforeCancels:[],beforeCancel(o){this.beforeCancels.push(o)},cancel:sn(function(){for(;this.beforeCancels.length;)this.beforeCancels.shift()();s()}),finish:s},I(()=>{t.start(),t.during()}),bc(),requestAnimationFrame(()=>{if(n)return;let o=Number(getComputedStyle(e).transitionDuration.replace(/,.*/,"").replace("s",""))*1e3,a=Number(getComputedStyle(e).transitionDelay.replace(/,.*/,"").replace("s",""))*1e3;o===0&&(o=Number(getComputedStyle(e).animationDuration.replace("s",""))*1e3),I(()=>{t.before()}),r=!0,requestAnimationFrame(()=>{n||(I(()=>{t.end()}),rn(),setTimeout(e._x_transitioning.finish,o+a),i=!0)})})}function Te(e,t,n){if(e.indexOf(t)===-1)return n;const r=e[e.indexOf(t)+1];if(!r||t==="scale"&&isNaN(r))return n;if(t==="duration"||t==="delay"){let i=r.match(/([0-9]+)ms/);if(i)return i[1]}return t==="origin"&&["top","right","left","center","bottom"].includes(e[e.indexOf(t)+2])?[r,e[e.indexOf(t)+2]].join(" "):r}var Y=!1;function Q(e,t=()=>{}){return(...n)=>Y?t(...n):e(...n)}function xc(e){return(...t)=>Y&&e(...t)}var Yi=[];function pt(e){Yi.push(e)}function Tc(e,t){Yi.forEach(n=>n(e,t)),Y=!0,Xi(()=>{q(t,(n,r)=>{r(n,()=>{})})}),Y=!1}var an=!1;function Oc(e,t){t._x_dataStack||(t._x_dataStack=e._x_dataStack),Y=!0,an=!0,Xi(()=>{Ic(t)}),Y=!1,an=!1}function Ic(e){let t=!1;q(e,(r,i)=>{G(r,(s,o)=>{if(t&&hc(s))return o();t=!0,i(s,o)})})}function Xi(e){let t=he;pr((n,r)=>{let i=t(n);return Ee(i),()=>{}}),e(),pr(t)}function Zi(e,t,n,r=[]){switch(e._x_bindings||(e._x_bindings=we({})),e._x_bindings[t]=n,t=r.includes("camel")?Bc(t):t,t){case"value":Cc(e,n);break;case"style":Dc(e,n);break;case"class":Rc(e,n);break;case"selected":case"checked":Nc(e,t,n);break;default:Qi(e,t,n);break}}function Cc(e,t){if(e.type==="radio")e.attributes.value===void 0&&(e.value=t),window.fromModel&&(typeof t=="boolean"?e.checked=Xe(e.value)===t:e.checked=mr(e.value,t));else if(e.type==="checkbox")Number.isInteger(t)?e.value=t:!Array.isArray(t)&&typeof t!="boolean"&&![null,void 0].includes(t)?e.value=String(t):Array.isArray(t)?e.checked=t.some(n=>mr(n,e.value)):e.checked=!!t;else if(e.tagName==="SELECT")Mc(e,t);else{if(e.value===t)return;e.value=t===void 0?"":t}}function Rc(e,t){e._x_undoAddedClasses&&e._x_undoAddedClasses(),e._x_undoAddedClasses=Bn(e,t)}function Dc(e,t){e._x_undoAddedStyles&&e._x_undoAddedStyles(),e._x_undoAddedStyles=dt(e,t)}function Nc(e,t,n){Qi(e,t,n),Pc(e,t,n)}function Qi(e,t,n){[null,void 0,!1].includes(n)&&Lc(t)?e.removeAttribute(t):(es(t)&&(n=t),kc(e,t,n))}function kc(e,t,n){e.getAttribute(t)!=n&&e.setAttribute(t,n)}function Pc(e,t,n){e[t]!==n&&(e[t]=n)}function Mc(e,t){const n=[].concat(t).map(r=>r+"");Array.from(e.options).forEach(r=>{r.selected=n.includes(r.value)})}function Bc(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=>n.toUpperCase())}function mr(e,t){return e==t}function Xe(e){return[1,"1","true","on","yes",!0].includes(e)?!0:[0,"0","false","off","no",!1].includes(e)?!1:e?!!e:null}function es(e){return["disabled","checked","required","readonly","open","selected","autofocus","itemscope","multiple","novalidate","allowfullscreen","allowpaymentrequest","formnovalidate","autoplay","controls","loop","muted","playsinline","default","ismap","reversed","async","defer","nomodule"].includes(e)}function Lc(e){return!["aria-pressed","aria-checked","aria-expanded","aria-selected"].includes(e)}function Fc(e,t,n){return e._x_bindings&&e._x_bindings[t]!==void 0?e._x_bindings[t]:ts(e,t,n)}function $c(e,t,n,r=!0){if(e._x_bindings&&e._x_bindings[t]!==void 0)return e._x_bindings[t];if(e._x_inlineBindings&&e._x_inlineBindings[t]!==void 0){let i=e._x_inlineBindings[t];return i.extract=r,Ci(()=>ae(e,i.expression))}return ts(e,t,n)}function ts(e,t,n){let r=e.getAttribute(t);return r===null?typeof n=="function"?n():n:r===""?!0:es(t)?!![t,"true"].includes(r):r}function ns(e,t){var n;return function(){var r=this,i=arguments,s=function(){n=null,e.apply(r,i)};clearTimeout(n),n=setTimeout(s,t)}}function rs(e,t){let n;return function(){let r=this,i=arguments;n||(e.apply(r,i),n=!0,setTimeout(()=>n=!1,t))}}function is({get:e,set:t},{get:n,set:r}){let i=!0,s,o=he(()=>{let a=e(),c=n();if(i)r(Ot(a)),i=!1;else{let u=JSON.stringify(a),l=JSON.stringify(c);u!==s?r(Ot(a)):u!==l&&t(Ot(c))}s=JSON.stringify(e()),JSON.stringify(n())});return()=>{Ee(o)}}function Ot(e){return typeof e=="object"?JSON.parse(JSON.stringify(e)):e}function jc(e){(Array.isArray(e)?e:[e]).forEach(n=>n(He))}var ee={},br=!1;function Hc(e,t){if(br||(ee=we(ee),br=!0),t===void 0)return ee[e];ee[e]=t,typeof t=="object"&&t!==null&&t.hasOwnProperty("init")&&typeof t.init=="function"&&ee[e].init(),Ti(ee[e])}function Uc(){return ee}var ss={};function qc(e,t){let n=typeof t!="function"?()=>t:t;return e instanceof Element?os(e,n()):(ss[e]=n,()=>{})}function Kc(e){return Object.entries(ss).forEach(([t,n])=>{Object.defineProperty(e,t,{get(){return(...r)=>n(...r)}})}),e}function os(e,t,n){let r=[];for(;r.length;)r.pop()();let i=Object.entries(t).map(([o,a])=>({name:o,value:a})),s=Ni(i);return i=i.map(o=>s.find(a=>a.name===o.name)?{name:`x-bind:${o.name}`,value:`"${o.value}"`}:o),Dn(e,i,n).map(o=>{r.push(o.runCleanups),o()}),()=>{for(;r.length;)r.pop()()}}var as={};function Vc(e,t){as[e]=t}function zc(e,t){return Object.entries(as).forEach(([n,r])=>{Object.defineProperty(e,n,{get(){return(...i)=>r.bind(t)(...i)},enumerable:!1})}),e}var Wc={get reactive(){return we},get release(){return Ee},get effect(){return he},get raw(){return mi},version:"3.14.1",flushAndStopDeferringMutations:Za,dontAutoEvaluateFunctions:Ci,disableEffectScheduling:Va,startObservingMutations:On,stopObservingMutations:Ai,setReactivityEngine:za,onAttributeRemoved:Si,onAttributesAdded:Ei,closestDataStack:me,skipDuringClone:Q,onlyDuringClone:xc,addRootSelector:Ki,addInitSelector:Vi,interceptClone:pt,addScopeToNode:Fe,deferMutations:Xa,mapAttributes:Nn,evaluateLater:C,interceptInit:gc,setEvaluator:rc,mergeProxies:$e,extractProp:$c,findClosest:je,onElRemoved:An,closestRoot:ft,destroyTree:Wi,interceptor:Oi,transition:on,setStyles:dt,mutateDom:I,directive:O,entangle:is,throttle:rs,debounce:ns,evaluate:ae,initTree:q,nextTick:Mn,prefixed:Se,prefix:ac,plugin:jc,magic:F,store:Hc,start:pc,clone:Oc,cloneNode:Tc,bound:Fc,$data:xi,watch:bi,walk:G,data:Vc,bind:qc},He=Wc;function Jc(e,t){const n=Object.create(null),r=e.split(",");for(let i=0;i<r.length;i++)n[r[i]]=!0;return i=>!!n[i]}var Gc=Object.freeze({}),Yc=Object.prototype.hasOwnProperty,ht=(e,t)=>Yc.call(e,t),ce=Array.isArray,Re=e=>cs(e)==="[object Map]",Xc=e=>typeof e=="string",Ln=e=>typeof e=="symbol",gt=e=>e!==null&&typeof e=="object",Zc=Object.prototype.toString,cs=e=>Zc.call(e),us=e=>cs(e).slice(8,-1),Fn=e=>Xc(e)&&e!=="NaN"&&e[0]!=="-"&&""+parseInt(e,10)===e,Qc=e=>{const t=Object.create(null);return n=>t[n]||(t[n]=e(n))},eu=Qc(e=>e.charAt(0).toUpperCase()+e.slice(1)),ls=(e,t)=>e!==t&&(e===e||t===t),cn=new WeakMap,Oe=[],j,ue=Symbol("iterate"),un=Symbol("Map key iterate");function tu(e){return e&&e._isEffect===!0}function nu(e,t=Gc){tu(e)&&(e=e.raw);const n=su(e,t);return t.lazy||n(),n}function ru(e){e.active&&(fs(e),e.options.onStop&&e.options.onStop(),e.active=!1)}var iu=0;function su(e,t){const n=function(){if(!n.active)return e();if(!Oe.includes(n)){fs(n);try{return au(),Oe.push(n),j=n,e()}finally{Oe.pop(),ds(),j=Oe[Oe.length-1]}}};return n.id=iu++,n.allowRecurse=!!t.allowRecurse,n._isEffect=!0,n.active=!0,n.raw=e,n.deps=[],n.options=t,n}function fs(e){const{deps:t}=e;if(t.length){for(let n=0;n<t.length;n++)t[n].delete(e);t.length=0}}var be=!0,$n=[];function ou(){$n.push(be),be=!1}function au(){$n.push(be),be=!0}function ds(){const e=$n.pop();be=e===void 0?!0:e}function B(e,t,n){if(!be||j===void 0)return;let r=cn.get(e);r||cn.set(e,r=new Map);let i=r.get(n);i||r.set(n,i=new Set),i.has(j)||(i.add(j),j.deps.push(i),j.options.onTrack&&j.options.onTrack({effect:j,target:e,type:t,key:n}))}function X(e,t,n,r,i,s){const o=cn.get(e);if(!o)return;const a=new Set,c=l=>{l&&l.forEach(p=>{(p!==j||p.allowRecurse)&&a.add(p)})};if(t==="clear")o.forEach(c);else if(n==="length"&&ce(e))o.forEach((l,p)=>{(p==="length"||p>=r)&&c(l)});else switch(n!==void 0&&c(o.get(n)),t){case"add":ce(e)?Fn(n)&&c(o.get("length")):(c(o.get(ue)),Re(e)&&c(o.get(un)));break;case"delete":ce(e)||(c(o.get(ue)),Re(e)&&c(o.get(un)));break;case"set":Re(e)&&c(o.get(ue));break}const u=l=>{l.options.onTrigger&&l.options.onTrigger({effect:l,target:e,key:n,type:t,newValue:r,oldValue:i,oldTarget:s}),l.options.scheduler?l.options.scheduler(l):l()};a.forEach(u)}var cu=Jc("__proto__,__v_isRef,__isVue"),ps=new Set(Object.getOwnPropertyNames(Symbol).map(e=>Symbol[e]).filter(Ln)),uu=hs(),lu=hs(!0),_r=fu();function fu(){const e={};return["includes","indexOf","lastIndexOf"].forEach(t=>{e[t]=function(...n){const r=v(this);for(let s=0,o=this.length;s<o;s++)B(r,"get",s+"");const i=r[t](...n);return i===-1||i===!1?r[t](...n.map(v)):i}}),["push","pop","shift","unshift","splice"].forEach(t=>{e[t]=function(...n){ou();const r=v(this)[t].apply(this,n);return ds(),r}}),e}function hs(e=!1,t=!1){return function(r,i,s){if(i==="__v_isReactive")return!e;if(i==="__v_isReadonly")return e;if(i==="__v_raw"&&s===(e?t?xu:_s:t?Au:bs).get(r))return r;const o=ce(r);if(!e&&o&&ht(_r,i))return Reflect.get(_r,i,s);const a=Reflect.get(r,i,s);return(Ln(i)?ps.has(i):cu(i))||(e||B(r,"get",i),t)?a:ln(a)?!o||!Fn(i)?a.value:a:gt(a)?e?ys(a):qn(a):a}}var du=pu();function pu(e=!1){return function(n,r,i,s){let o=n[r];if(!e&&(i=v(i),o=v(o),!ce(n)&&ln(o)&&!ln(i)))return o.value=i,!0;const a=ce(n)&&Fn(r)?Number(r)<n.length:ht(n,r),c=Reflect.set(n,r,i,s);return n===v(s)&&(a?ls(i,o)&&X(n,"set",r,i,o):X(n,"add",r,i)),c}}function hu(e,t){const n=ht(e,t),r=e[t],i=Reflect.deleteProperty(e,t);return i&&n&&X(e,"delete",t,void 0,r),i}function gu(e,t){const n=Reflect.has(e,t);return(!Ln(t)||!ps.has(t))&&B(e,"has",t),n}function mu(e){return B(e,"iterate",ce(e)?"length":ue),Reflect.ownKeys(e)}var bu={get:uu,set:du,deleteProperty:hu,has:gu,ownKeys:mu},_u={get:lu,set(e,t){return console.warn(`Set operation on key "${String(t)}" failed: target is readonly.`,e),!0},deleteProperty(e,t){return console.warn(`Delete operation on key "${String(t)}" failed: target is readonly.`,e),!0}},jn=e=>gt(e)?qn(e):e,Hn=e=>gt(e)?ys(e):e,Un=e=>e,mt=e=>Reflect.getPrototypeOf(e);function qe(e,t,n=!1,r=!1){e=e.__v_raw;const i=v(e),s=v(t);t!==s&&!n&&B(i,"get",t),!n&&B(i,"get",s);const{has:o}=mt(i),a=r?Un:n?Hn:jn;if(o.call(i,t))return a(e.get(t));if(o.call(i,s))return a(e.get(s));e!==i&&e.get(t)}function Ke(e,t=!1){const n=this.__v_raw,r=v(n),i=v(e);return e!==i&&!t&&B(r,"has",e),!t&&B(r,"has",i),e===i?n.has(e):n.has(e)||n.has(i)}function Ve(e,t=!1){return e=e.__v_raw,!t&&B(v(e),"iterate",ue),Reflect.get(e,"size",e)}function yr(e){e=v(e);const t=v(this);return mt(t).has.call(t,e)||(t.add(e),X(t,"add",e,e)),this}function wr(e,t){t=v(t);const n=v(this),{has:r,get:i}=mt(n);let s=r.call(n,e);s?ms(n,r,e):(e=v(e),s=r.call(n,e));const o=i.call(n,e);return n.set(e,t),s?ls(t,o)&&X(n,"set",e,t,o):X(n,"add",e,t),this}function Er(e){const t=v(this),{has:n,get:r}=mt(t);let i=n.call(t,e);i?ms(t,n,e):(e=v(e),i=n.call(t,e));const s=r?r.call(t,e):void 0,o=t.delete(e);return i&&X(t,"delete",e,void 0,s),o}function Sr(){const e=v(this),t=e.size!==0,n=Re(e)?new Map(e):new Set(e),r=e.clear();return t&&X(e,"clear",void 0,void 0,n),r}function ze(e,t){return function(r,i){const s=this,o=s.__v_raw,a=v(o),c=t?Un:e?Hn:jn;return!e&&B(a,"iterate",ue),o.forEach((u,l)=>r.call(i,c(u),c(l),s))}}function We(e,t,n){return function(...r){const i=this.__v_raw,s=v(i),o=Re(s),a=e==="entries"||e===Symbol.iterator&&o,c=e==="keys"&&o,u=i[e](...r),l=n?Un:t?Hn:jn;return!t&&B(s,"iterate",c?un:ue),{next(){const{value:p,done:g}=u.next();return g?{value:p,done:g}:{value:a?[l(p[0]),l(p[1])]:l(p),done:g}},[Symbol.iterator](){return this}}}}function z(e){return function(...t){{const n=t[0]?`on key "${t[0]}" `:"";console.warn(`${eu(e)} operation ${n}failed: target is readonly.`,v(this))}return e==="delete"?!1:this}}function yu(){const e={get(s){return qe(this,s)},get size(){return Ve(this)},has:Ke,add:yr,set:wr,delete:Er,clear:Sr,forEach:ze(!1,!1)},t={get(s){return qe(this,s,!1,!0)},get size(){return Ve(this)},has:Ke,add:yr,set:wr,delete:Er,clear:Sr,forEach:ze(!1,!0)},n={get(s){return qe(this,s,!0)},get size(){return Ve(this,!0)},has(s){return Ke.call(this,s,!0)},add:z("add"),set:z("set"),delete:z("delete"),clear:z("clear"),forEach:ze(!0,!1)},r={get(s){return qe(this,s,!0,!0)},get size(){return Ve(this,!0)},has(s){return Ke.call(this,s,!0)},add:z("add"),set:z("set"),delete:z("delete"),clear:z("clear"),forEach:ze(!0,!0)};return["keys","values","entries",Symbol.iterator].forEach(s=>{e[s]=We(s,!1,!1),n[s]=We(s,!0,!1),t[s]=We(s,!1,!0),r[s]=We(s,!0,!0)}),[e,n,t,r]}var[wu,Eu,Wd,Jd]=yu();function gs(e,t){const n=e?Eu:wu;return(r,i,s)=>i==="__v_isReactive"?!e:i==="__v_isReadonly"?e:i==="__v_raw"?r:Reflect.get(ht(n,i)&&i in r?n:r,i,s)}var Su={get:gs(!1)},vu={get:gs(!0)};function ms(e,t,n){const r=v(n);if(r!==n&&t.call(e,r)){const i=us(e);console.warn(`Reactive ${i} contains both the raw and reactive versions of the same object${i==="Map"?" as keys":""}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`)}}var bs=new WeakMap,Au=new WeakMap,_s=new WeakMap,xu=new WeakMap;function Tu(e){switch(e){case"Object":case"Array":return 1;case"Map":case"Set":case"WeakMap":case"WeakSet":return 2;default:return 0}}function Ou(e){return e.__v_skip||!Object.isExtensible(e)?0:Tu(us(e))}function qn(e){return e&&e.__v_isReadonly?e:ws(e,!1,bu,Su,bs)}function ys(e){return ws(e,!0,_u,vu,_s)}function ws(e,t,n,r,i){if(!gt(e))return console.warn(`value cannot be made reactive: ${String(e)}`),e;if(e.__v_raw&&!(t&&e.__v_isReactive))return e;const s=i.get(e);if(s)return s;const o=Ou(e);if(o===0)return e;const a=new Proxy(e,o===2?r:n);return i.set(e,a),a}function v(e){return e&&v(e.__v_raw)||e}function ln(e){return!!(e&&e.__v_isRef===!0)}F("nextTick",()=>Mn);F("dispatch",e=>Ce.bind(Ce,e));F("watch",(e,{evaluateLater:t,cleanup:n})=>(r,i)=>{let s=t(r),a=bi(()=>{let c;return s(u=>c=u),c},i);n(a)});F("store",Uc);F("data",e=>xi(e));F("root",e=>ft(e));F("refs",e=>(e._x_refs_proxy||(e._x_refs_proxy=$e(Iu(e))),e._x_refs_proxy));function Iu(e){let t=[];return je(e,n=>{n._x_refs&&t.push(n._x_refs)}),t}var It={};function Es(e){return It[e]||(It[e]=0),++It[e]}function Cu(e,t){return je(e,n=>{if(n._x_ids&&n._x_ids[t])return!0})}function Ru(e,t){e._x_ids||(e._x_ids={}),e._x_ids[t]||(e._x_ids[t]=Es(t))}F("id",(e,{cleanup:t})=>(n,r=null)=>{let i=`${n}${r?`-${r}`:""}`;return Du(e,i,t,()=>{let s=Cu(e,n),o=s?s._x_ids[n]:Es(n);return r?`${n}-${o}-${r}`:`${n}-${o}`})});pt((e,t)=>{e._x_id&&(t._x_id=e._x_id)});function Du(e,t,n,r){if(e._x_id||(e._x_id={}),e._x_id[t])return e._x_id[t];let i=r();return e._x_id[t]=i,n(()=>{delete e._x_id[t]}),i}F("el",e=>e);Ss("Focus","focus","focus");Ss("Persist","persist","persist");function Ss(e,t,n){F(t,r=>M(`You can't use [$${t}] without first installing the "${e}" plugin here: https://alpinejs.dev/plugins/${n}`,r))}O("modelable",(e,{expression:t},{effect:n,evaluateLater:r,cleanup:i})=>{let s=r(t),o=()=>{let l;return s(p=>l=p),l},a=r(`${t} = __placeholder`),c=l=>a(()=>{},{scope:{__placeholder:l}}),u=o();c(u),queueMicrotask(()=>{if(!e._x_model)return;e._x_removeModelListeners.default();let l=e._x_model.get,p=e._x_model.set,g=is({get(){return l()},set(_){p(_)}},{get(){return o()},set(_){c(_)}});i(g)})});O("teleport",(e,{modifiers:t,expression:n},{cleanup:r})=>{e.tagName.toLowerCase()!=="template"&&M("x-teleport can only be used on a <template> tag",e);let i=vr(n),s=e.content.cloneNode(!0).firstElementChild;e._x_teleport=s,s._x_teleportBack=e,e.setAttribute("data-teleport-template",!0),s.setAttribute("data-teleport-target",!0),e._x_forwardEvents&&e._x_forwardEvents.forEach(a=>{s.addEventListener(a,c=>{c.stopPropagation(),e.dispatchEvent(new c.constructor(c.type,c))})}),Fe(s,{},e);let o=(a,c,u)=>{u.includes("prepend")?c.parentNode.insertBefore(a,c):u.includes("append")?c.parentNode.insertBefore(a,c.nextSibling):c.appendChild(a)};I(()=>{o(s,i,t),Q(()=>{q(s),s._x_ignore=!0})()}),e._x_teleportPutBack=()=>{let a=vr(n);I(()=>{o(e._x_teleport,a,t)})},r(()=>s.remove())});var Nu=document.createElement("div");function vr(e){let t=Q(()=>document.querySelector(e),()=>Nu)();return t||M(`Cannot find x-teleport element for selector: "${e}"`),t}var vs=()=>{};vs.inline=(e,{modifiers:t},{cleanup:n})=>{t.includes("self")?e._x_ignoreSelf=!0:e._x_ignore=!0,n(()=>{t.includes("self")?delete e._x_ignoreSelf:delete e._x_ignore})};O("ignore",vs);O("effect",Q((e,{expression:t},{effect:n})=>{n(C(e,t))}));function fn(e,t,n,r){let i=e,s=c=>r(c),o={},a=(c,u)=>l=>u(c,l);if(n.includes("dot")&&(t=ku(t)),n.includes("camel")&&(t=Pu(t)),n.includes("passive")&&(o.passive=!0),n.includes("capture")&&(o.capture=!0),n.includes("window")&&(i=window),n.includes("document")&&(i=document),n.includes("debounce")){let c=n[n.indexOf("debounce")+1]||"invalid-wait",u=rt(c.split("ms")[0])?Number(c.split("ms")[0]):250;s=ns(s,u)}if(n.includes("throttle")){let c=n[n.indexOf("throttle")+1]||"invalid-wait",u=rt(c.split("ms")[0])?Number(c.split("ms")[0]):250;s=rs(s,u)}return n.includes("prevent")&&(s=a(s,(c,u)=>{u.preventDefault(),c(u)})),n.includes("stop")&&(s=a(s,(c,u)=>{u.stopPropagation(),c(u)})),n.includes("once")&&(s=a(s,(c,u)=>{c(u),i.removeEventListener(t,s,o)})),(n.includes("away")||n.includes("outside"))&&(i=document,s=a(s,(c,u)=>{e.contains(u.target)||u.target.isConnected!==!1&&(e.offsetWidth<1&&e.offsetHeight<1||e._x_isShown!==!1&&c(u))})),n.includes("self")&&(s=a(s,(c,u)=>{u.target===e&&c(u)})),(Bu(t)||As(t))&&(s=a(s,(c,u)=>{Lu(u,n)||c(u)})),i.addEventListener(t,s,o),()=>{i.removeEventListener(t,s,o)}}function ku(e){return e.replace(/-/g,".")}function Pu(e){return e.toLowerCase().replace(/-(\w)/g,(t,n)=>n.toUpperCase())}function rt(e){return!Array.isArray(e)&&!isNaN(e)}function Mu(e){return[" ","_"].includes(e)?e:e.replace(/([a-z])([A-Z])/g,"$1-$2").replace(/[_\s]/,"-").toLowerCase()}function Bu(e){return["keydown","keyup"].includes(e)}function As(e){return["contextmenu","click","mouse"].some(t=>e.includes(t))}function Lu(e,t){let n=t.filter(s=>!["window","document","prevent","stop","once","capture","self","away","outside","passive"].includes(s));if(n.includes("debounce")){let s=n.indexOf("debounce");n.splice(s,rt((n[s+1]||"invalid-wait").split("ms")[0])?2:1)}if(n.includes("throttle")){let s=n.indexOf("throttle");n.splice(s,rt((n[s+1]||"invalid-wait").split("ms")[0])?2:1)}if(n.length===0||n.length===1&&Ar(e.key).includes(n[0]))return!1;const i=["ctrl","shift","alt","meta","cmd","super"].filter(s=>n.includes(s));return n=n.filter(s=>!i.includes(s)),!(i.length>0&&i.filter(o=>((o==="cmd"||o==="super")&&(o="meta"),e[`${o}Key`])).length===i.length&&(As(e.type)||Ar(e.key).includes(n[0])))}function Ar(e){if(!e)return[];e=Mu(e);let t={ctrl:"control",slash:"/",space:" ",spacebar:" ",cmd:"meta",esc:"escape",up:"arrow-up",down:"arrow-down",left:"arrow-left",right:"arrow-right",period:".",comma:",",equal:"=",minus:"-",underscore:"_"};return t[e]=e,Object.keys(t).map(n=>{if(t[n]===e)return n}).filter(n=>n)}O("model",(e,{modifiers:t,expression:n},{effect:r,cleanup:i})=>{let s=e;t.includes("parent")&&(s=e.parentNode);let o=C(s,n),a;typeof n=="string"?a=C(s,`${n} = __placeholder`):typeof n=="function"&&typeof n()=="string"?a=C(s,`${n()} = __placeholder`):a=()=>{};let c=()=>{let g;return o(_=>g=_),xr(g)?g.get():g},u=g=>{let _;o(h=>_=h),xr(_)?_.set(g):a(()=>{},{scope:{__placeholder:g}})};typeof n=="string"&&e.type==="radio"&&I(()=>{e.hasAttribute("name")||e.setAttribute("name",n)});var l=e.tagName.toLowerCase()==="select"||["checkbox","radio"].includes(e.type)||t.includes("lazy")?"change":"input";let p=Y?()=>{}:fn(e,l,t,g=>{u(Ct(e,t,g,c()))});if(t.includes("fill")&&([void 0,null,""].includes(c())||e.type==="checkbox"&&Array.isArray(c())||e.tagName.toLowerCase()==="select"&&e.multiple)&&u(Ct(e,t,{target:e},c())),e._x_removeModelListeners||(e._x_removeModelListeners={}),e._x_removeModelListeners.default=p,i(()=>e._x_removeModelListeners.default()),e.form){let g=fn(e.form,"reset",[],_=>{Mn(()=>e._x_model&&e._x_model.set(Ct(e,t,{target:e},c())))});i(()=>g())}e._x_model={get(){return c()},set(g){u(g)}},e._x_forceModelUpdate=g=>{g===void 0&&typeof n=="string"&&n.match(/\./)&&(g=""),window.fromModel=!0,I(()=>Zi(e,"value",g)),delete window.fromModel},r(()=>{let g=c();t.includes("unintrusive")&&document.activeElement.isSameNode(e)||e._x_forceModelUpdate(g)})});function Ct(e,t,n,r){return I(()=>{if(n instanceof CustomEvent&&n.detail!==void 0)return n.detail!==null&&n.detail!==void 0?n.detail:n.target.value;if(e.type==="checkbox")if(Array.isArray(r)){let i=null;return t.includes("number")?i=Rt(n.target.value):t.includes("boolean")?i=Xe(n.target.value):i=n.target.value,n.target.checked?r.includes(i)?r:r.concat([i]):r.filter(s=>!Fu(s,i))}else return n.target.checked;else{if(e.tagName.toLowerCase()==="select"&&e.multiple)return t.includes("number")?Array.from(n.target.selectedOptions).map(i=>{let s=i.value||i.text;return Rt(s)}):t.includes("boolean")?Array.from(n.target.selectedOptions).map(i=>{let s=i.value||i.text;return Xe(s)}):Array.from(n.target.selectedOptions).map(i=>i.value||i.text);{let i;return e.type==="radio"?n.target.checked?i=n.target.value:i=r:i=n.target.value,t.includes("number")?Rt(i):t.includes("boolean")?Xe(i):t.includes("trim")?i.trim():i}}})}function Rt(e){let t=e?parseFloat(e):null;return $u(t)?t:e}function Fu(e,t){return e==t}function $u(e){return!Array.isArray(e)&&!isNaN(e)}function xr(e){return e!==null&&typeof e=="object"&&typeof e.get=="function"&&typeof e.set=="function"}O("cloak",e=>queueMicrotask(()=>I(()=>e.removeAttribute(Se("cloak")))));Vi(()=>`[${Se("init")}]`);O("init",Q((e,{expression:t},{evaluate:n})=>typeof t=="string"?!!t.trim()&&n(t,{},!1):n(t,{},!1)));O("text",(e,{expression:t},{effect:n,evaluateLater:r})=>{let i=r(t);n(()=>{i(s=>{I(()=>{e.textContent=s})})})});O("html",(e,{expression:t},{effect:n,evaluateLater:r})=>{let i=r(t);n(()=>{i(s=>{I(()=>{e.innerHTML=s,e._x_ignoreSelf=!0,q(e),delete e._x_ignoreSelf})})})});Nn(Mi(":",Bi(Se("bind:"))));var xs=(e,{value:t,modifiers:n,expression:r,original:i},{effect:s,cleanup:o})=>{if(!t){let c={};Kc(c),C(e,r)(l=>{os(e,l,i)},{scope:c});return}if(t==="key")return ju(e,r);if(e._x_inlineBindings&&e._x_inlineBindings[t]&&e._x_inlineBindings[t].extract)return;let a=C(e,r);s(()=>a(c=>{c===void 0&&typeof r=="string"&&r.match(/\./)&&(c=""),I(()=>Zi(e,t,c,n))})),o(()=>{e._x_undoAddedClasses&&e._x_undoAddedClasses(),e._x_undoAddedStyles&&e._x_undoAddedStyles()})};xs.inline=(e,{value:t,modifiers:n,expression:r})=>{t&&(e._x_inlineBindings||(e._x_inlineBindings={}),e._x_inlineBindings[t]={expression:r,extract:!1})};O("bind",xs);function ju(e,t){e._x_keyExpression=t}Ki(()=>`[${Se("data")}]`);O("data",(e,{expression:t},{cleanup:n})=>{if(Hu(e))return;t=t===""?"{}":t;let r={};Qt(r,e);let i={};zc(i,r);let s=ae(e,t,{scope:i});(s===void 0||s===!0)&&(s={}),Qt(s,e);let o=we(s);Ti(o);let a=Fe(e,o);o.init&&ae(e,o.init),n(()=>{o.destroy&&ae(e,o.destroy),a()})});pt((e,t)=>{e._x_dataStack&&(t._x_dataStack=e._x_dataStack,t.setAttribute("data-has-alpine-state",!0))});function Hu(e){return Y?an?!0:e.hasAttribute("data-has-alpine-state"):!1}O("show",(e,{modifiers:t,expression:n},{effect:r})=>{let i=C(e,n);e._x_doHide||(e._x_doHide=()=>{I(()=>{e.style.setProperty("display","none",t.includes("important")?"important":void 0)})}),e._x_doShow||(e._x_doShow=()=>{I(()=>{e.style.length===1&&e.style.display==="none"?e.removeAttribute("style"):e.style.removeProperty("display")})});let s=()=>{e._x_doHide(),e._x_isShown=!1},o=()=>{e._x_doShow(),e._x_isShown=!0},a=()=>setTimeout(o),c=sn(p=>p?o():s(),p=>{typeof e._x_toggleAndCascadeWithTransitions=="function"?e._x_toggleAndCascadeWithTransitions(e,p,o,s):p?a():s()}),u,l=!0;r(()=>i(p=>{!l&&p===u||(t.includes("immediate")&&(p?a():s()),c(p),u=p,l=!1)}))});O("for",(e,{expression:t},{effect:n,cleanup:r})=>{let i=qu(t),s=C(e,i.items),o=C(e,e._x_keyExpression||"index");e._x_prevKeys=[],e._x_lookup={},n(()=>Uu(e,i,s,o)),r(()=>{Object.values(e._x_lookup).forEach(a=>a.remove()),delete e._x_prevKeys,delete e._x_lookup})});function Uu(e,t,n,r){let i=o=>typeof o=="object"&&!Array.isArray(o),s=e;n(o=>{Ku(o)&&o>=0&&(o=Array.from(Array(o).keys(),d=>d+1)),o===void 0&&(o=[]);let a=e._x_lookup,c=e._x_prevKeys,u=[],l=[];if(i(o))o=Object.entries(o).map(([d,m])=>{let w=Tr(t,m,d,o);r(E=>{l.includes(E)&&M("Duplicate key on x-for",e),l.push(E)},{scope:{index:d,...w}}),u.push(w)});else for(let d=0;d<o.length;d++){let m=Tr(t,o[d],d,o);r(w=>{l.includes(w)&&M("Duplicate key on x-for",e),l.push(w)},{scope:{index:d,...m}}),u.push(m)}let p=[],g=[],_=[],h=[];for(let d=0;d<c.length;d++){let m=c[d];l.indexOf(m)===-1&&_.push(m)}c=c.filter(d=>!_.includes(d));let b="template";for(let d=0;d<l.length;d++){let m=l[d],w=c.indexOf(m);if(w===-1)c.splice(d,0,m),p.push([b,d]);else if(w!==d){let E=c.splice(d,1)[0],A=c.splice(w-1,1)[0];c.splice(d,0,A),c.splice(w,0,E),g.push([E,A])}else h.push(m);b=m}for(let d=0;d<_.length;d++){let m=_[d];a[m]._x_effects&&a[m]._x_effects.forEach(gi),a[m].remove(),a[m]=null,delete a[m]}for(let d=0;d<g.length;d++){let[m,w]=g[d],E=a[m],A=a[w],x=document.createElement("div");I(()=>{A||M('x-for ":key" is undefined or invalid',s,w,a),A.after(x),E.after(A),A._x_currentIfEl&&A.after(A._x_currentIfEl),x.before(E),E._x_currentIfEl&&E.after(E._x_currentIfEl),x.remove()}),A._x_refreshXForScope(u[l.indexOf(w)])}for(let d=0;d<p.length;d++){let[m,w]=p[d],E=m==="template"?s:a[m];E._x_currentIfEl&&(E=E._x_currentIfEl);let A=u[w],x=l[w],D=document.importNode(s.content,!0).firstElementChild,$=we(A);Fe(D,$,s),D._x_refreshXForScope=ge=>{Object.entries(ge).forEach(([Ue,lo])=>{$[Ue]=lo})},I(()=>{E.after(D),Q(()=>q(D))()}),typeof x=="object"&&M("x-for key cannot be an object, it must be a string or an integer",s),a[x]=D}for(let d=0;d<h.length;d++)a[h[d]]._x_refreshXForScope(u[l.indexOf(h[d])]);s._x_prevKeys=l})}function qu(e){let t=/,([^,\}\]]*)(?:,([^,\}\]]*))?$/,n=/^\s*\(|\)\s*$/g,r=/([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/,i=e.match(r);if(!i)return;let s={};s.items=i[2].trim();let o=i[1].replace(n,"").trim(),a=o.match(t);return a?(s.item=o.replace(t,"").trim(),s.index=a[1].trim(),a[2]&&(s.collection=a[2].trim())):s.item=o,s}function Tr(e,t,n,r){let i={};return/^\[.*\]$/.test(e.item)&&Array.isArray(t)?e.item.replace("[","").replace("]","").split(",").map(o=>o.trim()).forEach((o,a)=>{i[o]=t[a]}):/^\{.*\}$/.test(e.item)&&!Array.isArray(t)&&typeof t=="object"?e.item.replace("{","").replace("}","").split(",").map(o=>o.trim()).forEach(o=>{i[o]=t[o]}):i[e.item]=t,e.index&&(i[e.index]=n),e.collection&&(i[e.collection]=r),i}function Ku(e){return!Array.isArray(e)&&!isNaN(e)}function Ts(){}Ts.inline=(e,{expression:t},{cleanup:n})=>{let r=ft(e);r._x_refs||(r._x_refs={}),r._x_refs[t]=e,n(()=>delete r._x_refs[t])};O("ref",Ts);O("if",(e,{expression:t},{effect:n,cleanup:r})=>{e.tagName.toLowerCase()!=="template"&&M("x-if can only be used on a <template> tag",e);let i=C(e,t),s=()=>{if(e._x_currentIfEl)return e._x_currentIfEl;let a=e.content.cloneNode(!0).firstElementChild;return Fe(a,{},e),I(()=>{e.after(a),Q(()=>q(a))()}),e._x_currentIfEl=a,e._x_undoIf=()=>{G(a,c=>{c._x_effects&&c._x_effects.forEach(gi)}),a.remove(),delete e._x_currentIfEl},a},o=()=>{e._x_undoIf&&(e._x_undoIf(),delete e._x_undoIf)};n(()=>i(a=>{a?s():o()})),r(()=>e._x_undoIf&&e._x_undoIf())});O("id",(e,{expression:t},{evaluate:n})=>{n(t).forEach(i=>Ru(e,i))});pt((e,t)=>{e._x_ids&&(t._x_ids=e._x_ids)});Nn(Mi("@",Bi(Se("on:"))));O("on",Q((e,{value:t,modifiers:n,expression:r},{cleanup:i})=>{let s=r?C(e,r):()=>{};e.tagName.toLowerCase()==="template"&&(e._x_forwardEvents||(e._x_forwardEvents=[]),e._x_forwardEvents.includes(t)||e._x_forwardEvents.push(t));let o=fn(e,t,n,a=>{s(()=>{},{scope:{$event:a},params:[a]})});i(()=>o())}));bt("Collapse","collapse","collapse");bt("Intersect","intersect","intersect");bt("Focus","trap","focus");bt("Mask","mask","mask");function bt(e,t,n){O(t,r=>M(`You can't use [x-${t}] without first installing the "${e}" plugin here: https://alpinejs.dev/plugins/${n}`,r))}He.setEvaluator(Di);He.setReactivityEngine({reactive:qn,effect:nu,release:ru,raw:v});var Vu=He,Os=Vu,Or={};/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Is=function(e){const t=[];let n=0;for(let r=0;r<e.length;r++){let i=e.charCodeAt(r);i<128?t[n++]=i:i<2048?(t[n++]=i>>6|192,t[n++]=i&63|128):(i&64512)===55296&&r+1<e.length&&(e.charCodeAt(r+1)&64512)===56320?(i=65536+((i&1023)<<10)+(e.charCodeAt(++r)&1023),t[n++]=i>>18|240,t[n++]=i>>12&63|128,t[n++]=i>>6&63|128,t[n++]=i&63|128):(t[n++]=i>>12|224,t[n++]=i>>6&63|128,t[n++]=i&63|128)}return t},zu=function(e){const t=[];let n=0,r=0;for(;n<e.length;){const i=e[n++];if(i<128)t[r++]=String.fromCharCode(i);else if(i>191&&i<224){const s=e[n++];t[r++]=String.fromCharCode((i&31)<<6|s&63)}else if(i>239&&i<365){const s=e[n++],o=e[n++],a=e[n++],c=((i&7)<<18|(s&63)<<12|(o&63)<<6|a&63)-65536;t[r++]=String.fromCharCode(55296+(c>>10)),t[r++]=String.fromCharCode(56320+(c&1023))}else{const s=e[n++],o=e[n++];t[r++]=String.fromCharCode((i&15)<<12|(s&63)<<6|o&63)}}return t.join("")},Cs={byteToCharMap_:null,charToByteMap_:null,byteToCharMapWebSafe_:null,charToByteMapWebSafe_:null,ENCODED_VALS_BASE:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789",get ENCODED_VALS(){return this.ENCODED_VALS_BASE+"+/="},get ENCODED_VALS_WEBSAFE(){return this.ENCODED_VALS_BASE+"-_."},HAS_NATIVE_SUPPORT:typeof atob=="function",encodeByteArray(e,t){if(!Array.isArray(e))throw Error("encodeByteArray takes an array as a parameter");this.init_();const n=t?this.byteToCharMapWebSafe_:this.byteToCharMap_,r=[];for(let i=0;i<e.length;i+=3){const s=e[i],o=i+1<e.length,a=o?e[i+1]:0,c=i+2<e.length,u=c?e[i+2]:0,l=s>>2,p=(s&3)<<4|a>>4;let g=(a&15)<<2|u>>6,_=u&63;c||(_=64,o||(g=64)),r.push(n[l],n[p],n[g],n[_])}return r.join("")},encodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?btoa(e):this.encodeByteArray(Is(e),t)},decodeString(e,t){return this.HAS_NATIVE_SUPPORT&&!t?atob(e):zu(this.decodeStringToByteArray(e,t))},decodeStringToByteArray(e,t){this.init_();const n=t?this.charToByteMapWebSafe_:this.charToByteMap_,r=[];for(let i=0;i<e.length;){const s=n[e.charAt(i++)],a=i<e.length?n[e.charAt(i)]:0;++i;const u=i<e.length?n[e.charAt(i)]:64;++i;const p=i<e.length?n[e.charAt(i)]:64;if(++i,s==null||a==null||u==null||p==null)throw new Wu;const g=s<<2|a>>4;if(r.push(g),u!==64){const _=a<<4&240|u>>2;if(r.push(_),p!==64){const h=u<<6&192|p;r.push(h)}}}return r},init_(){if(!this.byteToCharMap_){this.byteToCharMap_={},this.charToByteMap_={},this.byteToCharMapWebSafe_={},this.charToByteMapWebSafe_={};for(let e=0;e<this.ENCODED_VALS.length;e++)this.byteToCharMap_[e]=this.ENCODED_VALS.charAt(e),this.charToByteMap_[this.byteToCharMap_[e]]=e,this.byteToCharMapWebSafe_[e]=this.ENCODED_VALS_WEBSAFE.charAt(e),this.charToByteMapWebSafe_[this.byteToCharMapWebSafe_[e]]=e,e>=this.ENCODED_VALS_BASE.length&&(this.charToByteMap_[this.ENCODED_VALS_WEBSAFE.charAt(e)]=e,this.charToByteMapWebSafe_[this.ENCODED_VALS.charAt(e)]=e)}}};class Wu extends Error{constructor(){super(...arguments),this.name="DecodeBase64StringError"}}const Ju=function(e){const t=Is(e);return Cs.encodeByteArray(t,!0)},Rs=function(e){return Ju(e).replace(/\./g,"")},Gu=function(e){try{return Cs.decodeString(e,!0)}catch(t){console.error("base64Decode failed: ",t)}return null};/**
 * @license
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Yu(){if(typeof self<"u")return self;if(typeof window<"u")return window;if(typeof global<"u")return global;throw new Error("Unable to locate global object.")}/**
 * @license
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Xu=()=>Yu().__FIREBASE_DEFAULTS__,Zu=()=>{if(typeof process>"u"||typeof Or>"u")return;const e=Or.__FIREBASE_DEFAULTS__;if(e)return JSON.parse(e)},Qu=()=>{if(typeof document>"u")return;let e;try{e=document.cookie.match(/__FIREBASE_DEFAULTS__=([^;]+)/)}catch{return}const t=e&&Gu(e[1]);return t&&JSON.parse(t)},el=()=>{try{return Xu()||Zu()||Qu()}catch(e){console.info(`Unable to get __FIREBASE_DEFAULTS__ due to: ${e}`);return}},Ds=()=>{var e;return(e=el())===null||e===void 0?void 0:e.config};/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class tl{constructor(){this.reject=()=>{},this.resolve=()=>{},this.promise=new Promise((t,n)=>{this.resolve=t,this.reject=n})}wrapCallback(t){return(n,r)=>{n?this.reject(n):this.resolve(r),typeof t=="function"&&(this.promise.catch(()=>{}),t.length===1?t(n):t(n,r))}}}function Ns(){try{return typeof indexedDB=="object"}catch{return!1}}function ks(){return new Promise((e,t)=>{try{let n=!0;const r="validate-browser-context-for-indexeddb-analytics-module",i=self.indexedDB.open(r);i.onsuccess=()=>{i.result.close(),n||self.indexedDB.deleteDatabase(r),e(!0)},i.onupgradeneeded=()=>{n=!1},i.onerror=()=>{var s;t(((s=i.error)===null||s===void 0?void 0:s.message)||"")}}catch(n){t(n)}})}function nl(){return!(typeof navigator>"u"||!navigator.cookieEnabled)}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const rl="FirebaseError";class ve extends Error{constructor(t,n,r){super(n),this.code=t,this.customData=r,this.name=rl,Object.setPrototypeOf(this,ve.prototype),Error.captureStackTrace&&Error.captureStackTrace(this,_t.prototype.create)}}class _t{constructor(t,n,r){this.service=t,this.serviceName=n,this.errors=r}create(t,...n){const r=n[0]||{},i=`${this.service}/${t}`,s=this.errors[t],o=s?il(s,r):"Error",a=`${this.serviceName}: ${o} (${i}).`;return new ve(i,a,r)}}function il(e,t){return e.replace(sl,(n,r)=>{const i=t[r];return i!=null?String(i):`<${r}?>`})}const sl=/\{\$([^}]+)}/g;function dn(e,t){if(e===t)return!0;const n=Object.keys(e),r=Object.keys(t);for(const i of n){if(!r.includes(i))return!1;const s=e[i],o=t[i];if(Ir(s)&&Ir(o)){if(!dn(s,o))return!1}else if(s!==o)return!1}for(const i of r)if(!n.includes(i))return!1;return!0}function Ir(e){return e!==null&&typeof e=="object"}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Ps(e){return e&&e._delegate?e._delegate:e}class Z{constructor(t,n,r){this.name=t,this.instanceFactory=n,this.type=r,this.multipleInstances=!1,this.serviceProps={},this.instantiationMode="LAZY",this.onInstanceCreated=null}setInstantiationMode(t){return this.instantiationMode=t,this}setMultipleInstances(t){return this.multipleInstances=t,this}setServiceProps(t){return this.serviceProps=t,this}setInstanceCreatedCallback(t){return this.onInstanceCreated=t,this}}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const te="[DEFAULT]";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class ol{constructor(t,n){this.name=t,this.container=n,this.component=null,this.instances=new Map,this.instancesDeferred=new Map,this.instancesOptions=new Map,this.onInitCallbacks=new Map}get(t){const n=this.normalizeInstanceIdentifier(t);if(!this.instancesDeferred.has(n)){const r=new tl;if(this.instancesDeferred.set(n,r),this.isInitialized(n)||this.shouldAutoInitialize())try{const i=this.getOrInitializeService({instanceIdentifier:n});i&&r.resolve(i)}catch{}}return this.instancesDeferred.get(n).promise}getImmediate(t){var n;const r=this.normalizeInstanceIdentifier(t==null?void 0:t.identifier),i=(n=t==null?void 0:t.optional)!==null&&n!==void 0?n:!1;if(this.isInitialized(r)||this.shouldAutoInitialize())try{return this.getOrInitializeService({instanceIdentifier:r})}catch(s){if(i)return null;throw s}else{if(i)return null;throw Error(`Service ${this.name} is not available`)}}getComponent(){return this.component}setComponent(t){if(t.name!==this.name)throw Error(`Mismatching Component ${t.name} for Provider ${this.name}.`);if(this.component)throw Error(`Component for ${this.name} has already been provided`);if(this.component=t,!!this.shouldAutoInitialize()){if(cl(t))try{this.getOrInitializeService({instanceIdentifier:te})}catch{}for(const[n,r]of this.instancesDeferred.entries()){const i=this.normalizeInstanceIdentifier(n);try{const s=this.getOrInitializeService({instanceIdentifier:i});r.resolve(s)}catch{}}}}clearInstance(t=te){this.instancesDeferred.delete(t),this.instancesOptions.delete(t),this.instances.delete(t)}async delete(){const t=Array.from(this.instances.values());await Promise.all([...t.filter(n=>"INTERNAL"in n).map(n=>n.INTERNAL.delete()),...t.filter(n=>"_delete"in n).map(n=>n._delete())])}isComponentSet(){return this.component!=null}isInitialized(t=te){return this.instances.has(t)}getOptions(t=te){return this.instancesOptions.get(t)||{}}initialize(t={}){const{options:n={}}=t,r=this.normalizeInstanceIdentifier(t.instanceIdentifier);if(this.isInitialized(r))throw Error(`${this.name}(${r}) has already been initialized`);if(!this.isComponentSet())throw Error(`Component ${this.name} has not been registered yet`);const i=this.getOrInitializeService({instanceIdentifier:r,options:n});for(const[s,o]of this.instancesDeferred.entries()){const a=this.normalizeInstanceIdentifier(s);r===a&&o.resolve(i)}return i}onInit(t,n){var r;const i=this.normalizeInstanceIdentifier(n),s=(r=this.onInitCallbacks.get(i))!==null&&r!==void 0?r:new Set;s.add(t),this.onInitCallbacks.set(i,s);const o=this.instances.get(i);return o&&t(o,i),()=>{s.delete(t)}}invokeOnInitCallbacks(t,n){const r=this.onInitCallbacks.get(n);if(r)for(const i of r)try{i(t,n)}catch{}}getOrInitializeService({instanceIdentifier:t,options:n={}}){let r=this.instances.get(t);if(!r&&this.component&&(r=this.component.instanceFactory(this.container,{instanceIdentifier:al(t),options:n}),this.instances.set(t,r),this.instancesOptions.set(t,n),this.invokeOnInitCallbacks(r,t),this.component.onInstanceCreated))try{this.component.onInstanceCreated(this.container,t,r)}catch{}return r||null}normalizeInstanceIdentifier(t=te){return this.component?this.component.multipleInstances?t:te:t}shouldAutoInitialize(){return!!this.component&&this.component.instantiationMode!=="EXPLICIT"}}function al(e){return e===te?void 0:e}function cl(e){return e.instantiationMode==="EAGER"}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class ul{constructor(t){this.name=t,this.providers=new Map}addComponent(t){const n=this.getProvider(t.name);if(n.isComponentSet())throw new Error(`Component ${t.name} has already been registered with ${this.name}`);n.setComponent(t)}addOrOverwriteComponent(t){this.getProvider(t.name).isComponentSet()&&this.providers.delete(t.name),this.addComponent(t)}getProvider(t){if(this.providers.has(t))return this.providers.get(t);const n=new ol(t,this);return this.providers.set(t,n),n}getProviders(){return Array.from(this.providers.values())}}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */var S;(function(e){e[e.DEBUG=0]="DEBUG",e[e.VERBOSE=1]="VERBOSE",e[e.INFO=2]="INFO",e[e.WARN=3]="WARN",e[e.ERROR=4]="ERROR",e[e.SILENT=5]="SILENT"})(S||(S={}));const ll={debug:S.DEBUG,verbose:S.VERBOSE,info:S.INFO,warn:S.WARN,error:S.ERROR,silent:S.SILENT},fl=S.INFO,dl={[S.DEBUG]:"log",[S.VERBOSE]:"log",[S.INFO]:"info",[S.WARN]:"warn",[S.ERROR]:"error"},pl=(e,t,...n)=>{if(t<e.logLevel)return;const r=new Date().toISOString(),i=dl[t];if(i)console[i](`[${r}]  ${e.name}:`,...n);else throw new Error(`Attempted to log a message with an invalid logType (value: ${t})`)};class hl{constructor(t){this.name=t,this._logLevel=fl,this._logHandler=pl,this._userLogHandler=null}get logLevel(){return this._logLevel}set logLevel(t){if(!(t in S))throw new TypeError(`Invalid value "${t}" assigned to \`logLevel\``);this._logLevel=t}setLogLevel(t){this._logLevel=typeof t=="string"?ll[t]:t}get logHandler(){return this._logHandler}set logHandler(t){if(typeof t!="function")throw new TypeError("Value assigned to `logHandler` must be a function");this._logHandler=t}get userLogHandler(){return this._userLogHandler}set userLogHandler(t){this._userLogHandler=t}debug(...t){this._userLogHandler&&this._userLogHandler(this,S.DEBUG,...t),this._logHandler(this,S.DEBUG,...t)}log(...t){this._userLogHandler&&this._userLogHandler(this,S.VERBOSE,...t),this._logHandler(this,S.VERBOSE,...t)}info(...t){this._userLogHandler&&this._userLogHandler(this,S.INFO,...t),this._logHandler(this,S.INFO,...t)}warn(...t){this._userLogHandler&&this._userLogHandler(this,S.WARN,...t),this._logHandler(this,S.WARN,...t)}error(...t){this._userLogHandler&&this._userLogHandler(this,S.ERROR,...t),this._logHandler(this,S.ERROR,...t)}}const gl=(e,t)=>t.some(n=>e instanceof n);let Cr,Rr;function ml(){return Cr||(Cr=[IDBDatabase,IDBObjectStore,IDBIndex,IDBCursor,IDBTransaction])}function bl(){return Rr||(Rr=[IDBCursor.prototype.advance,IDBCursor.prototype.continue,IDBCursor.prototype.continuePrimaryKey])}const Ms=new WeakMap,pn=new WeakMap,Bs=new WeakMap,Dt=new WeakMap,Kn=new WeakMap;function _l(e){const t=new Promise((n,r)=>{const i=()=>{e.removeEventListener("success",s),e.removeEventListener("error",o)},s=()=>{n(U(e.result)),i()},o=()=>{r(e.error),i()};e.addEventListener("success",s),e.addEventListener("error",o)});return t.then(n=>{n instanceof IDBCursor&&Ms.set(n,e)}).catch(()=>{}),Kn.set(t,e),t}function yl(e){if(pn.has(e))return;const t=new Promise((n,r)=>{const i=()=>{e.removeEventListener("complete",s),e.removeEventListener("error",o),e.removeEventListener("abort",o)},s=()=>{n(),i()},o=()=>{r(e.error||new DOMException("AbortError","AbortError")),i()};e.addEventListener("complete",s),e.addEventListener("error",o),e.addEventListener("abort",o)});pn.set(e,t)}let hn={get(e,t,n){if(e instanceof IDBTransaction){if(t==="done")return pn.get(e);if(t==="objectStoreNames")return e.objectStoreNames||Bs.get(e);if(t==="store")return n.objectStoreNames[1]?void 0:n.objectStore(n.objectStoreNames[0])}return U(e[t])},set(e,t,n){return e[t]=n,!0},has(e,t){return e instanceof IDBTransaction&&(t==="done"||t==="store")?!0:t in e}};function wl(e){hn=e(hn)}function El(e){return e===IDBDatabase.prototype.transaction&&!("objectStoreNames"in IDBTransaction.prototype)?function(t,...n){const r=e.call(Nt(this),t,...n);return Bs.set(r,t.sort?t.sort():[t]),U(r)}:bl().includes(e)?function(...t){return e.apply(Nt(this),t),U(Ms.get(this))}:function(...t){return U(e.apply(Nt(this),t))}}function Sl(e){return typeof e=="function"?El(e):(e instanceof IDBTransaction&&yl(e),gl(e,ml())?new Proxy(e,hn):e)}function U(e){if(e instanceof IDBRequest)return _l(e);if(Dt.has(e))return Dt.get(e);const t=Sl(e);return t!==e&&(Dt.set(e,t),Kn.set(t,e)),t}const Nt=e=>Kn.get(e);function yt(e,t,{blocked:n,upgrade:r,blocking:i,terminated:s}={}){const o=indexedDB.open(e,t),a=U(o);return r&&o.addEventListener("upgradeneeded",c=>{r(U(o.result),c.oldVersion,c.newVersion,U(o.transaction),c)}),n&&o.addEventListener("blocked",c=>n(c.oldVersion,c.newVersion,c)),a.then(c=>{s&&c.addEventListener("close",()=>s()),i&&c.addEventListener("versionchange",u=>i(u.oldVersion,u.newVersion,u))}).catch(()=>{}),a}function kt(e,{blocked:t}={}){const n=indexedDB.deleteDatabase(e);return t&&n.addEventListener("blocked",r=>t(r.oldVersion,r)),U(n).then(()=>{})}const vl=["get","getKey","getAll","getAllKeys","count"],Al=["put","add","delete","clear"],Pt=new Map;function Dr(e,t){if(!(e instanceof IDBDatabase&&!(t in e)&&typeof t=="string"))return;if(Pt.get(t))return Pt.get(t);const n=t.replace(/FromIndex$/,""),r=t!==n,i=Al.includes(n);if(!(n in(r?IDBIndex:IDBObjectStore).prototype)||!(i||vl.includes(n)))return;const s=async function(o,...a){const c=this.transaction(o,i?"readwrite":"readonly");let u=c.store;return r&&(u=u.index(a.shift())),(await Promise.all([u[n](...a),i&&c.done]))[0]};return Pt.set(t,s),s}wl(e=>({...e,get:(t,n,r)=>Dr(t,n)||e.get(t,n,r),has:(t,n)=>!!Dr(t,n)||e.has(t,n)}));/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class xl{constructor(t){this.container=t}getPlatformInfoString(){return this.container.getProviders().map(n=>{if(Tl(n)){const r=n.getImmediate();return`${r.library}/${r.version}`}else return null}).filter(n=>n).join(" ")}}function Tl(e){const t=e.getComponent();return(t==null?void 0:t.type)==="VERSION"}const gn="@firebase/app",Nr="0.10.15";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const K=new hl("@firebase/app"),Ol="@firebase/app-compat",Il="@firebase/analytics-compat",Cl="@firebase/analytics",Rl="@firebase/app-check-compat",Dl="@firebase/app-check",Nl="@firebase/auth",kl="@firebase/auth-compat",Pl="@firebase/database",Ml="@firebase/data-connect",Bl="@firebase/database-compat",Ll="@firebase/functions",Fl="@firebase/functions-compat",$l="@firebase/installations",jl="@firebase/installations-compat",Hl="@firebase/messaging",Ul="@firebase/messaging-compat",ql="@firebase/performance",Kl="@firebase/performance-compat",Vl="@firebase/remote-config",zl="@firebase/remote-config-compat",Wl="@firebase/storage",Jl="@firebase/storage-compat",Gl="@firebase/firestore",Yl="@firebase/vertexai",Xl="@firebase/firestore-compat",Zl="firebase";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const mn="[DEFAULT]",Ql={[gn]:"fire-core",[Ol]:"fire-core-compat",[Cl]:"fire-analytics",[Il]:"fire-analytics-compat",[Dl]:"fire-app-check",[Rl]:"fire-app-check-compat",[Nl]:"fire-auth",[kl]:"fire-auth-compat",[Pl]:"fire-rtdb",[Ml]:"fire-data-connect",[Bl]:"fire-rtdb-compat",[Ll]:"fire-fn",[Fl]:"fire-fn-compat",[$l]:"fire-iid",[jl]:"fire-iid-compat",[Hl]:"fire-fcm",[Ul]:"fire-fcm-compat",[ql]:"fire-perf",[Kl]:"fire-perf-compat",[Vl]:"fire-rc",[zl]:"fire-rc-compat",[Wl]:"fire-gcs",[Jl]:"fire-gcs-compat",[Gl]:"fire-fst",[Xl]:"fire-fst-compat",[Yl]:"fire-vertex","fire-js":"fire-js",[Zl]:"fire-js-all"};/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const it=new Map,ef=new Map,bn=new Map;function kr(e,t){try{e.container.addComponent(t)}catch(n){K.debug(`Component ${t.name} failed to register with FirebaseApp ${e.name}`,n)}}function fe(e){const t=e.name;if(bn.has(t))return K.debug(`There were multiple attempts to register component ${t}.`),!1;bn.set(t,e);for(const n of it.values())kr(n,e);for(const n of ef.values())kr(n,e);return!0}function Vn(e,t){const n=e.container.getProvider("heartbeat").getImmediate({optional:!0});return n&&n.triggerHeartbeat(),e.container.getProvider(t)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const tf={"no-app":"No Firebase App '{$appName}' has been created - call initializeApp() first","bad-app-name":"Illegal App name: '{$appName}'","duplicate-app":"Firebase App named '{$appName}' already exists with different options or config","app-deleted":"Firebase App named '{$appName}' already deleted","server-app-deleted":"Firebase Server App has been deleted","no-options":"Need to provide options, when not being deployed to hosting via source.","invalid-app-argument":"firebase.{$appName}() takes either no argument or a Firebase App instance.","invalid-log-argument":"First argument to `onLog` must be null or a function.","idb-open":"Error thrown when opening IndexedDB. Original error: {$originalErrorMessage}.","idb-get":"Error thrown when reading from IndexedDB. Original error: {$originalErrorMessage}.","idb-set":"Error thrown when writing to IndexedDB. Original error: {$originalErrorMessage}.","idb-delete":"Error thrown when deleting from IndexedDB. Original error: {$originalErrorMessage}.","finalization-registry-not-supported":"FirebaseServerApp deleteOnDeref field defined but the JS runtime does not support FinalizationRegistry.","invalid-server-app-environment":"FirebaseServerApp is not for use in browser environments."},W=new _t("app","Firebase",tf);/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class nf{constructor(t,n,r){this._isDeleted=!1,this._options=Object.assign({},t),this._config=Object.assign({},n),this._name=n.name,this._automaticDataCollectionEnabled=n.automaticDataCollectionEnabled,this._container=r,this.container.addComponent(new Z("app",()=>this,"PUBLIC"))}get automaticDataCollectionEnabled(){return this.checkDestroyed(),this._automaticDataCollectionEnabled}set automaticDataCollectionEnabled(t){this.checkDestroyed(),this._automaticDataCollectionEnabled=t}get name(){return this.checkDestroyed(),this._name}get options(){return this.checkDestroyed(),this._options}get config(){return this.checkDestroyed(),this._config}get container(){return this._container}get isDeleted(){return this._isDeleted}set isDeleted(t){this._isDeleted=t}checkDestroyed(){if(this.isDeleted)throw W.create("app-deleted",{appName:this._name})}}function Ls(e,t={}){let n=e;typeof t!="object"&&(t={name:t});const r=Object.assign({name:mn,automaticDataCollectionEnabled:!1},t),i=r.name;if(typeof i!="string"||!i)throw W.create("bad-app-name",{appName:String(i)});if(n||(n=Ds()),!n)throw W.create("no-options");const s=it.get(i);if(s){if(dn(n,s.options)&&dn(r,s.config))return s;throw W.create("duplicate-app",{appName:i})}const o=new ul(i);for(const c of bn.values())o.addComponent(c);const a=new nf(n,r,o);return it.set(i,a),a}function rf(e=mn){const t=it.get(e);if(!t&&e===mn&&Ds())return Ls();if(!t)throw W.create("no-app",{appName:e});return t}function J(e,t,n){var r;let i=(r=Ql[e])!==null&&r!==void 0?r:e;n&&(i+=`-${n}`);const s=i.match(/\s|\//),o=t.match(/\s|\//);if(s||o){const a=[`Unable to register library "${i}" with version "${t}":`];s&&a.push(`library name "${i}" contains illegal characters (whitespace or "/")`),s&&o&&a.push("and"),o&&a.push(`version name "${t}" contains illegal characters (whitespace or "/")`),K.warn(a.join(" "));return}fe(new Z(`${i}-version`,()=>({library:i,version:t}),"VERSION"))}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const sf="firebase-heartbeat-database",of=1,ke="firebase-heartbeat-store";let Mt=null;function Fs(){return Mt||(Mt=yt(sf,of,{upgrade:(e,t)=>{switch(t){case 0:try{e.createObjectStore(ke)}catch(n){console.warn(n)}}}}).catch(e=>{throw W.create("idb-open",{originalErrorMessage:e.message})})),Mt}async function af(e){try{const n=(await Fs()).transaction(ke),r=await n.objectStore(ke).get($s(e));return await n.done,r}catch(t){if(t instanceof ve)K.warn(t.message);else{const n=W.create("idb-get",{originalErrorMessage:t==null?void 0:t.message});K.warn(n.message)}}}async function Pr(e,t){try{const r=(await Fs()).transaction(ke,"readwrite");await r.objectStore(ke).put(t,$s(e)),await r.done}catch(n){if(n instanceof ve)K.warn(n.message);else{const r=W.create("idb-set",{originalErrorMessage:n==null?void 0:n.message});K.warn(r.message)}}}function $s(e){return`${e.name}!${e.options.appId}`}/**
 * @license
 * Copyright 2021 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const cf=1024,uf=30*24*60*60*1e3;class lf{constructor(t){this.container=t,this._heartbeatsCache=null;const n=this.container.getProvider("app").getImmediate();this._storage=new df(n),this._heartbeatsCachePromise=this._storage.read().then(r=>(this._heartbeatsCache=r,r))}async triggerHeartbeat(){var t,n;try{const i=this.container.getProvider("platform-logger").getImmediate().getPlatformInfoString(),s=Mr();return((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null&&(this._heartbeatsCache=await this._heartbeatsCachePromise,((n=this._heartbeatsCache)===null||n===void 0?void 0:n.heartbeats)==null)||this._heartbeatsCache.lastSentHeartbeatDate===s||this._heartbeatsCache.heartbeats.some(o=>o.date===s)?void 0:(this._heartbeatsCache.heartbeats.push({date:s,agent:i}),this._heartbeatsCache.heartbeats=this._heartbeatsCache.heartbeats.filter(o=>{const a=new Date(o.date).valueOf();return Date.now()-a<=uf}),this._storage.overwrite(this._heartbeatsCache))}catch(r){K.warn(r)}}async getHeartbeatsHeader(){var t;try{if(this._heartbeatsCache===null&&await this._heartbeatsCachePromise,((t=this._heartbeatsCache)===null||t===void 0?void 0:t.heartbeats)==null||this._heartbeatsCache.heartbeats.length===0)return"";const n=Mr(),{heartbeatsToSend:r,unsentEntries:i}=ff(this._heartbeatsCache.heartbeats),s=Rs(JSON.stringify({version:2,heartbeats:r}));return this._heartbeatsCache.lastSentHeartbeatDate=n,i.length>0?(this._heartbeatsCache.heartbeats=i,await this._storage.overwrite(this._heartbeatsCache)):(this._heartbeatsCache.heartbeats=[],this._storage.overwrite(this._heartbeatsCache)),s}catch(n){return K.warn(n),""}}}function Mr(){return new Date().toISOString().substring(0,10)}function ff(e,t=cf){const n=[];let r=e.slice();for(const i of e){const s=n.find(o=>o.agent===i.agent);if(s){if(s.dates.push(i.date),Br(n)>t){s.dates.pop();break}}else if(n.push({agent:i.agent,dates:[i.date]}),Br(n)>t){n.pop();break}r=r.slice(1)}return{heartbeatsToSend:n,unsentEntries:r}}class df{constructor(t){this.app=t,this._canUseIndexedDBPromise=this.runIndexedDBEnvironmentCheck()}async runIndexedDBEnvironmentCheck(){return Ns()?ks().then(()=>!0).catch(()=>!1):!1}async read(){if(await this._canUseIndexedDBPromise){const n=await af(this.app);return n!=null&&n.heartbeats?n:{heartbeats:[]}}else return{heartbeats:[]}}async overwrite(t){var n;if(await this._canUseIndexedDBPromise){const i=await this.read();return Pr(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:i.lastSentHeartbeatDate,heartbeats:t.heartbeats})}else return}async add(t){var n;if(await this._canUseIndexedDBPromise){const i=await this.read();return Pr(this.app,{lastSentHeartbeatDate:(n=t.lastSentHeartbeatDate)!==null&&n!==void 0?n:i.lastSentHeartbeatDate,heartbeats:[...i.heartbeats,...t.heartbeats]})}else return}}function Br(e){return Rs(JSON.stringify({version:2,heartbeats:e})).length}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function pf(e){fe(new Z("platform-logger",t=>new xl(t),"PRIVATE")),fe(new Z("heartbeat",t=>new lf(t),"PRIVATE")),J(gn,Nr,e),J(gn,Nr,"esm2017"),J("fire-js","")}pf("");var hf="firebase",gf="11.0.1";/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */J(hf,gf,"app");const js="@firebase/installations",zn="0.6.10";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Hs=1e4,Us=`w:${zn}`,qs="FIS_v2",mf="https://firebaseinstallations.googleapis.com/v1",bf=60*60*1e3,_f="installations",yf="Installations";/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const wf={"missing-app-config-values":'Missing App configuration value: "{$valueName}"',"not-registered":"Firebase Installation is not registered.","installation-not-found":"Firebase Installation not found.","request-failed":'{$requestName} request failed with error "{$serverCode} {$serverStatus}: {$serverMessage}"',"app-offline":"Could not process request. Application offline.","delete-pending-registration":"Can't delete installation while there is a pending registration request."},de=new _t(_f,yf,wf);function Ks(e){return e instanceof ve&&e.code.includes("request-failed")}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Vs({projectId:e}){return`${mf}/projects/${e}/installations`}function zs(e){return{token:e.token,requestStatus:2,expiresIn:Sf(e.expiresIn),creationTime:Date.now()}}async function Ws(e,t){const r=(await t.json()).error;return de.create("request-failed",{requestName:e,serverCode:r.code,serverMessage:r.message,serverStatus:r.status})}function Js({apiKey:e}){return new Headers({"Content-Type":"application/json",Accept:"application/json","x-goog-api-key":e})}function Ef(e,{refreshToken:t}){const n=Js(e);return n.append("Authorization",vf(t)),n}async function Gs(e){const t=await e();return t.status>=500&&t.status<600?e():t}function Sf(e){return Number(e.replace("s","000"))}function vf(e){return`${qs} ${e}`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Af({appConfig:e,heartbeatServiceProvider:t},{fid:n}){const r=Vs(e),i=Js(e),s=t.getImmediate({optional:!0});if(s){const u=await s.getHeartbeatsHeader();u&&i.append("x-firebase-client",u)}const o={fid:n,authVersion:qs,appId:e.appId,sdkVersion:Us},a={method:"POST",headers:i,body:JSON.stringify(o)},c=await Gs(()=>fetch(r,a));if(c.ok){const u=await c.json();return{fid:u.fid||n,registrationStatus:2,refreshToken:u.refreshToken,authToken:zs(u.authToken)}}else throw await Ws("Create Installation",c)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Ys(e){return new Promise(t=>{setTimeout(t,e)})}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function xf(e){return btoa(String.fromCharCode(...e)).replace(/\+/g,"-").replace(/\//g,"_")}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Tf=/^[cdef][\w-]{21}$/,_n="";function Of(){try{const e=new Uint8Array(17);(self.crypto||self.msCrypto).getRandomValues(e),e[0]=112+e[0]%16;const n=If(e);return Tf.test(n)?n:_n}catch{return _n}}function If(e){return xf(e).substr(0,22)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function wt(e){return`${e.appName}!${e.appId}`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Xs=new Map;function Zs(e,t){const n=wt(e);Qs(n,t),Cf(n,t)}function Qs(e,t){const n=Xs.get(e);if(n)for(const r of n)r(t)}function Cf(e,t){const n=Rf();n&&n.postMessage({key:e,fid:t}),Df()}let ie=null;function Rf(){return!ie&&"BroadcastChannel"in self&&(ie=new BroadcastChannel("[Firebase] FID Change"),ie.onmessage=e=>{Qs(e.data.key,e.data.fid)}),ie}function Df(){Xs.size===0&&ie&&(ie.close(),ie=null)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Nf="firebase-installations-database",kf=1,pe="firebase-installations-store";let Bt=null;function Wn(){return Bt||(Bt=yt(Nf,kf,{upgrade:(e,t)=>{switch(t){case 0:e.createObjectStore(pe)}}})),Bt}async function st(e,t){const n=wt(e),i=(await Wn()).transaction(pe,"readwrite"),s=i.objectStore(pe),o=await s.get(n);return await s.put(t,n),await i.done,(!o||o.fid!==t.fid)&&Zs(e,t.fid),t}async function eo(e){const t=wt(e),r=(await Wn()).transaction(pe,"readwrite");await r.objectStore(pe).delete(t),await r.done}async function Et(e,t){const n=wt(e),i=(await Wn()).transaction(pe,"readwrite"),s=i.objectStore(pe),o=await s.get(n),a=t(o);return a===void 0?await s.delete(n):await s.put(a,n),await i.done,a&&(!o||o.fid!==a.fid)&&Zs(e,a.fid),a}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Jn(e){let t;const n=await Et(e.appConfig,r=>{const i=Pf(r),s=Mf(e,i);return t=s.registrationPromise,s.installationEntry});return n.fid===_n?{installationEntry:await t}:{installationEntry:n,registrationPromise:t}}function Pf(e){const t=e||{fid:Of(),registrationStatus:0};return to(t)}function Mf(e,t){if(t.registrationStatus===0){if(!navigator.onLine){const i=Promise.reject(de.create("app-offline"));return{installationEntry:t,registrationPromise:i}}const n={fid:t.fid,registrationStatus:1,registrationTime:Date.now()},r=Bf(e,n);return{installationEntry:n,registrationPromise:r}}else return t.registrationStatus===1?{installationEntry:t,registrationPromise:Lf(e)}:{installationEntry:t}}async function Bf(e,t){try{const n=await Af(e,t);return st(e.appConfig,n)}catch(n){throw Ks(n)&&n.customData.serverCode===409?await eo(e.appConfig):await st(e.appConfig,{fid:t.fid,registrationStatus:0}),n}}async function Lf(e){let t=await Lr(e.appConfig);for(;t.registrationStatus===1;)await Ys(100),t=await Lr(e.appConfig);if(t.registrationStatus===0){const{installationEntry:n,registrationPromise:r}=await Jn(e);return r||n}return t}function Lr(e){return Et(e,t=>{if(!t)throw de.create("installation-not-found");return to(t)})}function to(e){return Ff(e)?{fid:e.fid,registrationStatus:0}:e}function Ff(e){return e.registrationStatus===1&&e.registrationTime+Hs<Date.now()}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function $f({appConfig:e,heartbeatServiceProvider:t},n){const r=jf(e,n),i=Ef(e,n),s=t.getImmediate({optional:!0});if(s){const u=await s.getHeartbeatsHeader();u&&i.append("x-firebase-client",u)}const o={installation:{sdkVersion:Us,appId:e.appId}},a={method:"POST",headers:i,body:JSON.stringify(o)},c=await Gs(()=>fetch(r,a));if(c.ok){const u=await c.json();return zs(u)}else throw await Ws("Generate Auth Token",c)}function jf(e,{fid:t}){return`${Vs(e)}/${t}/authTokens:generate`}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Gn(e,t=!1){let n;const r=await Et(e.appConfig,s=>{if(!no(s))throw de.create("not-registered");const o=s.authToken;if(!t&&qf(o))return s;if(o.requestStatus===1)return n=Hf(e,t),s;{if(!navigator.onLine)throw de.create("app-offline");const a=Vf(s);return n=Uf(e,a),a}});return n?await n:r.authToken}async function Hf(e,t){let n=await Fr(e.appConfig);for(;n.authToken.requestStatus===1;)await Ys(100),n=await Fr(e.appConfig);const r=n.authToken;return r.requestStatus===0?Gn(e,t):r}function Fr(e){return Et(e,t=>{if(!no(t))throw de.create("not-registered");const n=t.authToken;return zf(n)?Object.assign(Object.assign({},t),{authToken:{requestStatus:0}}):t})}async function Uf(e,t){try{const n=await $f(e,t),r=Object.assign(Object.assign({},t),{authToken:n});return await st(e.appConfig,r),n}catch(n){if(Ks(n)&&(n.customData.serverCode===401||n.customData.serverCode===404))await eo(e.appConfig);else{const r=Object.assign(Object.assign({},t),{authToken:{requestStatus:0}});await st(e.appConfig,r)}throw n}}function no(e){return e!==void 0&&e.registrationStatus===2}function qf(e){return e.requestStatus===2&&!Kf(e)}function Kf(e){const t=Date.now();return t<e.creationTime||e.creationTime+e.expiresIn<t+bf}function Vf(e){const t={requestStatus:1,requestTime:Date.now()};return Object.assign(Object.assign({},e),{authToken:t})}function zf(e){return e.requestStatus===1&&e.requestTime+Hs<Date.now()}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Wf(e){const t=e,{installationEntry:n,registrationPromise:r}=await Jn(t);return r?r.catch(console.error):Gn(t).catch(console.error),n.fid}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Jf(e,t=!1){const n=e;return await Gf(n),(await Gn(n,t)).token}async function Gf(e){const{registrationPromise:t}=await Jn(e);t&&await t}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Yf(e){if(!e||!e.options)throw Lt("App Configuration");if(!e.name)throw Lt("App Name");const t=["projectId","apiKey","appId"];for(const n of t)if(!e.options[n])throw Lt(n);return{appName:e.name,projectId:e.options.projectId,apiKey:e.options.apiKey,appId:e.options.appId}}function Lt(e){return de.create("missing-app-config-values",{valueName:e})}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const ro="installations",Xf="installations-internal",Zf=e=>{const t=e.getProvider("app").getImmediate(),n=Yf(t),r=Vn(t,"heartbeat");return{app:t,appConfig:n,heartbeatServiceProvider:r,_delete:()=>Promise.resolve()}},Qf=e=>{const t=e.getProvider("app").getImmediate(),n=Vn(t,ro).getImmediate();return{getId:()=>Wf(n),getToken:i=>Jf(n,i)}};function ed(){fe(new Z(ro,Zf,"PUBLIC")),fe(new Z(Xf,Qf,"PRIVATE"))}ed();J(js,zn);J(js,zn,"esm2017");/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const td="/firebase-messaging-sw.js",nd="/firebase-cloud-messaging-push-scope",io="BDOU99-h67HcA6JeFXHbSNMu7e2yNNu3RzoMj8TM4W88jITfq7ZmPvIM1Iv-4_l2LxQcYwhqby2xGpWwzjfAnG4",rd="https://fcmregistrations.googleapis.com/v1",so="google.c.a.c_id",id="google.c.a.c_l",sd="google.c.a.ts",od="google.c.a.e";var $r;(function(e){e[e.DATA_MESSAGE=1]="DATA_MESSAGE",e[e.DISPLAY_NOTIFICATION=3]="DISPLAY_NOTIFICATION"})($r||($r={}));/**
 * @license
 * Copyright 2018 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except
 * in compliance with the License. You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed under the License
 * is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
 * or implied. See the License for the specific language governing permissions and limitations under
 * the License.
 */var Pe;(function(e){e.PUSH_RECEIVED="push-received",e.NOTIFICATION_CLICKED="notification-clicked"})(Pe||(Pe={}));/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function H(e){const t=new Uint8Array(e);return btoa(String.fromCharCode(...t)).replace(/=/g,"").replace(/\+/g,"-").replace(/\//g,"_")}function ad(e){const t="=".repeat((4-e.length%4)%4),n=(e+t).replace(/\-/g,"+").replace(/_/g,"/"),r=atob(n),i=new Uint8Array(r.length);for(let s=0;s<r.length;++s)i[s]=r.charCodeAt(s);return i}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Ft="fcm_token_details_db",cd=5,jr="fcm_token_object_Store";async function ud(e){if("databases"in indexedDB&&!(await indexedDB.databases()).map(s=>s.name).includes(Ft))return null;let t=null;return(await yt(Ft,cd,{upgrade:async(r,i,s,o)=>{var a;if(i<2||!r.objectStoreNames.contains(jr))return;const c=o.objectStore(jr),u=await c.index("fcmSenderId").get(e);if(await c.clear(),!!u){if(i===2){const l=u;if(!l.auth||!l.p256dh||!l.endpoint)return;t={token:l.fcmToken,createTime:(a=l.createTime)!==null&&a!==void 0?a:Date.now(),subscriptionOptions:{auth:l.auth,p256dh:l.p256dh,endpoint:l.endpoint,swScope:l.swScope,vapidKey:typeof l.vapidKey=="string"?l.vapidKey:H(l.vapidKey)}}}else if(i===3){const l=u;t={token:l.fcmToken,createTime:l.createTime,subscriptionOptions:{auth:H(l.auth),p256dh:H(l.p256dh),endpoint:l.endpoint,swScope:l.swScope,vapidKey:H(l.vapidKey)}}}else if(i===4){const l=u;t={token:l.fcmToken,createTime:l.createTime,subscriptionOptions:{auth:H(l.auth),p256dh:H(l.p256dh),endpoint:l.endpoint,swScope:l.swScope,vapidKey:H(l.vapidKey)}}}}}})).close(),await kt(Ft),await kt("fcm_vapid_details_db"),await kt("undefined"),ld(t)?t:null}function ld(e){if(!e||!e.subscriptionOptions)return!1;const{subscriptionOptions:t}=e;return typeof e.createTime=="number"&&e.createTime>0&&typeof e.token=="string"&&e.token.length>0&&typeof t.auth=="string"&&t.auth.length>0&&typeof t.p256dh=="string"&&t.p256dh.length>0&&typeof t.endpoint=="string"&&t.endpoint.length>0&&typeof t.swScope=="string"&&t.swScope.length>0&&typeof t.vapidKey=="string"&&t.vapidKey.length>0}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const fd="firebase-messaging-database",dd=1,Me="firebase-messaging-store";let $t=null;function oo(){return $t||($t=yt(fd,dd,{upgrade:(e,t)=>{switch(t){case 0:e.createObjectStore(Me)}}})),$t}async function pd(e){const t=ao(e),r=await(await oo()).transaction(Me).objectStore(Me).get(t);if(r)return r;{const i=await ud(e.appConfig.senderId);if(i)return await Yn(e,i),i}}async function Yn(e,t){const n=ao(e),i=(await oo()).transaction(Me,"readwrite");return await i.objectStore(Me).put(t,n),await i.done,t}function ao({appConfig:e}){return e.appId}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const hd={"missing-app-config-values":'Missing App configuration value: "{$valueName}"',"only-available-in-window":"This method is available in a Window context.","only-available-in-sw":"This method is available in a service worker context.","permission-default":"The notification permission was not granted and dismissed instead.","permission-blocked":"The notification permission was not granted and blocked instead.","unsupported-browser":"This browser doesn't support the API's required to use the Firebase SDK.","indexed-db-unsupported":"This browser doesn't support indexedDb.open() (ex. Safari iFrame, Firefox Private Browsing, etc)","failed-service-worker-registration":"We are unable to register the default service worker. {$browserErrorMessage}","token-subscribe-failed":"A problem occurred while subscribing the user to FCM: {$errorInfo}","token-subscribe-no-token":"FCM returned no token when subscribing the user to push.","token-unsubscribe-failed":"A problem occurred while unsubscribing the user from FCM: {$errorInfo}","token-update-failed":"A problem occurred while updating the user from FCM: {$errorInfo}","token-update-no-token":"FCM returned no token when updating the user to push.","use-sw-after-get-token":"The useServiceWorker() method may only be called once and must be called before calling getToken() to ensure your service worker is used.","invalid-sw-registration":"The input to useServiceWorker() must be a ServiceWorkerRegistration.","invalid-bg-handler":"The input to setBackgroundMessageHandler() must be a function.","invalid-vapid-key":"The public VAPID key must be a string.","use-vapid-key-after-get-token":"The usePublicVapidKey() method may only be called once and must be called before calling getToken() to ensure your VAPID key is used."},R=new _t("messaging","Messaging",hd);/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function gd(e,t){const n=await Zn(e),r=co(t),i={method:"POST",headers:n,body:JSON.stringify(r)};let s;try{s=await(await fetch(Xn(e.appConfig),i)).json()}catch(o){throw R.create("token-subscribe-failed",{errorInfo:o==null?void 0:o.toString()})}if(s.error){const o=s.error.message;throw R.create("token-subscribe-failed",{errorInfo:o})}if(!s.token)throw R.create("token-subscribe-no-token");return s.token}async function md(e,t){const n=await Zn(e),r=co(t.subscriptionOptions),i={method:"PATCH",headers:n,body:JSON.stringify(r)};let s;try{s=await(await fetch(`${Xn(e.appConfig)}/${t.token}`,i)).json()}catch(o){throw R.create("token-update-failed",{errorInfo:o==null?void 0:o.toString()})}if(s.error){const o=s.error.message;throw R.create("token-update-failed",{errorInfo:o})}if(!s.token)throw R.create("token-update-no-token");return s.token}async function bd(e,t){const r={method:"DELETE",headers:await Zn(e)};try{const s=await(await fetch(`${Xn(e.appConfig)}/${t}`,r)).json();if(s.error){const o=s.error.message;throw R.create("token-unsubscribe-failed",{errorInfo:o})}}catch(i){throw R.create("token-unsubscribe-failed",{errorInfo:i==null?void 0:i.toString()})}}function Xn({projectId:e}){return`${rd}/projects/${e}/registrations`}async function Zn({appConfig:e,installations:t}){const n=await t.getToken();return new Headers({"Content-Type":"application/json",Accept:"application/json","x-goog-api-key":e.apiKey,"x-goog-firebase-installations-auth":`FIS ${n}`})}function co({p256dh:e,auth:t,endpoint:n,vapidKey:r}){const i={web:{endpoint:n,auth:t,p256dh:e}};return r!==io&&(i.web.applicationPubKey=r),i}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const _d=7*24*60*60*1e3;async function yd(e){const t=await Ed(e.swRegistration,e.vapidKey),n={vapidKey:e.vapidKey,swScope:e.swRegistration.scope,endpoint:t.endpoint,auth:H(t.getKey("auth")),p256dh:H(t.getKey("p256dh"))},r=await pd(e.firebaseDependencies);if(r){if(Sd(r.subscriptionOptions,n))return Date.now()>=r.createTime+_d?wd(e,{token:r.token,createTime:Date.now(),subscriptionOptions:n}):r.token;try{await bd(e.firebaseDependencies,r.token)}catch(i){console.warn(i)}return Hr(e.firebaseDependencies,n)}else return Hr(e.firebaseDependencies,n)}async function wd(e,t){try{const n=await md(e.firebaseDependencies,t),r=Object.assign(Object.assign({},t),{token:n,createTime:Date.now()});return await Yn(e.firebaseDependencies,r),n}catch(n){throw n}}async function Hr(e,t){const r={token:await gd(e,t),createTime:Date.now(),subscriptionOptions:t};return await Yn(e,r),r.token}async function Ed(e,t){const n=await e.pushManager.getSubscription();return n||e.pushManager.subscribe({userVisibleOnly:!0,applicationServerKey:ad(t)})}function Sd(e,t){const n=t.vapidKey===e.vapidKey,r=t.endpoint===e.endpoint,i=t.auth===e.auth,s=t.p256dh===e.p256dh;return n&&r&&i&&s}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Ur(e){const t={from:e.from,collapseKey:e.collapse_key,messageId:e.fcmMessageId};return vd(t,e),Ad(t,e),xd(t,e),t}function vd(e,t){if(!t.notification)return;e.notification={};const n=t.notification.title;n&&(e.notification.title=n);const r=t.notification.body;r&&(e.notification.body=r);const i=t.notification.image;i&&(e.notification.image=i);const s=t.notification.icon;s&&(e.notification.icon=s)}function Ad(e,t){t.data&&(e.data=t.data)}function xd(e,t){var n,r,i,s,o;if(!t.fcmOptions&&!(!((n=t.notification)===null||n===void 0)&&n.click_action))return;e.fcmOptions={};const a=(i=(r=t.fcmOptions)===null||r===void 0?void 0:r.link)!==null&&i!==void 0?i:(s=t.notification)===null||s===void 0?void 0:s.click_action;a&&(e.fcmOptions.link=a);const c=(o=t.fcmOptions)===null||o===void 0?void 0:o.analytics_label;c&&(e.fcmOptions.analyticsLabel=c)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Td(e){return typeof e=="object"&&!!e&&so in e}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function Od(e){if(!e||!e.options)throw jt("App Configuration Object");if(!e.name)throw jt("App Name");const t=["projectId","apiKey","appId","messagingSenderId"],{options:n}=e;for(const r of t)if(!n[r])throw jt(r);return{appName:e.name,projectId:n.projectId,apiKey:n.apiKey,appId:n.appId,senderId:n.messagingSenderId}}function jt(e){return R.create("missing-app-config-values",{valueName:e})}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */class Id{constructor(t,n,r){this.deliveryMetricsExportedToBigQueryEnabled=!1,this.onBackgroundMessageHandler=null,this.onMessageHandler=null,this.logEvents=[],this.isLogServiceStarted=!1;const i=Od(t);this.firebaseDependencies={app:t,appConfig:i,installations:n,analyticsProvider:r}}_delete(){return Promise.resolve()}}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Cd(e){try{e.swRegistration=await navigator.serviceWorker.register(td,{scope:nd}),e.swRegistration.update().catch(()=>{})}catch(t){throw R.create("failed-service-worker-registration",{browserErrorMessage:t==null?void 0:t.message})}}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Rd(e,t){if(!t&&!e.swRegistration&&await Cd(e),!(!t&&e.swRegistration)){if(!(t instanceof ServiceWorkerRegistration))throw R.create("invalid-sw-registration");e.swRegistration=t}}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Dd(e,t){t?e.vapidKey=t:e.vapidKey||(e.vapidKey=io)}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function uo(e,t){if(!navigator)throw R.create("only-available-in-window");if(Notification.permission==="default"&&await Notification.requestPermission(),Notification.permission!=="granted")throw R.create("permission-blocked");return await Dd(e,t==null?void 0:t.vapidKey),await Rd(e,t==null?void 0:t.serviceWorkerRegistration),yd(e)}/**
 * @license
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Nd(e,t,n){const r=kd(t);(await e.firebaseDependencies.analyticsProvider.get()).logEvent(r,{message_id:n[so],message_name:n[id],message_time:n[sd],message_device_time:Math.floor(Date.now()/1e3)})}function kd(e){switch(e){case Pe.NOTIFICATION_CLICKED:return"notification_open";case Pe.PUSH_RECEIVED:return"notification_foreground";default:throw new Error}}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Pd(e,t){const n=t.data;if(!n.isFirebaseMessaging)return;e.onMessageHandler&&n.messageType===Pe.PUSH_RECEIVED&&(typeof e.onMessageHandler=="function"?e.onMessageHandler(Ur(n)):e.onMessageHandler.next(Ur(n)));const r=n.data;Td(r)&&r[od]==="1"&&await Nd(e,n.messageType,r)}const qr="@firebase/messaging",Kr="0.12.13";/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */const Md=e=>{const t=new Id(e.getProvider("app").getImmediate(),e.getProvider("installations-internal").getImmediate(),e.getProvider("analytics-internal"));return navigator.serviceWorker.addEventListener("message",n=>Pd(t,n)),t},Bd=e=>{const t=e.getProvider("messaging").getImmediate();return{getToken:r=>uo(t,r)}};function Ld(){fe(new Z("messaging",Md,"PUBLIC")),fe(new Z("messaging-internal",Bd,"PRIVATE")),J(qr,Kr),J(qr,Kr,"esm2017")}/**
 * @license
 * Copyright 2020 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */async function Fd(){try{await ks()}catch{return!1}return typeof window<"u"&&Ns()&&nl()&&"serviceWorker"in navigator&&"PushManager"in window&&"Notification"in window&&"fetch"in window&&ServiceWorkerRegistration.prototype.hasOwnProperty("showNotification")&&PushSubscription.prototype.hasOwnProperty("getKey")}/**
 * @license
 * Copyright 2017 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */function $d(e=rf()){return Fd().then(t=>{if(!t)throw R.create("unsupported-browser")},t=>{throw R.create("indexed-db-unsupported")}),Vn(Ps(e),"messaging").getImmediate()}async function jd(e,t){return e=Ps(e),uo(e,t)}Ld();const Hd={apiKey:"AIzaSyB4yDFNi4Jd8b9YMTHqLEqFaO-Hma5_wEc",authDomain:"davaktivmi-fd913.firebaseapp.com",projectId:"davaktivmi-fd913",storageBucket:"davaktivmi-fd913.firebasestorage.app",messagingSenderId:"30996396175",appId:"1:30996396175:web:e48b7b13167bc11e7658fa",measurementId:"G-Q1XGDRH3CT"},Ud=Ls(Hd),qd=$d(Ud),Kd="BH0GhQVdOiZqynQYLn5_Of1RZ50o2JhrdJa9zFrO9BJTcLNTZ9tKnpbxHNUhDPto0u4ucIZlm2xC_WSiDpKZNYc";localStorage.getItem("firebase_token");function Vd(e){localStorage.setItem("firebase_token",e)}function zd(){Notification.requestPermission().then(e=>{e==="granted"?jd(qd,{vapidKey:Kd}).then(t=>{t?Vd(t):console.log("Token olinmadi.")}).catch(t=>{console.log("Token olishda xatolik:",t)}):console.log("Ruxsat berilmadi.")})}zd();window.Alpine=Os;Os.start();
