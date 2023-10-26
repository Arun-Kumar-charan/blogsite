"use strict";(globalThis.webpackChunk=globalThis.webpackChunk||[]).push([[736],{57528:(e,r,n)=>{var a=n(88525),i=n.n(a);i().registerHelper("concat",(function(){var e,r=arguments.length-1,n="";for(e=0;e<r;e+=1)n+=arguments[e];return n})),i().registerHelper("number_format",(function(e){return Number(e).toLocaleString()})),i().registerHelper("date_format",(function(e,r){var n;if(window.moment){if(void 0===e||Number.isNaN(e)||e<=0)return;return n=r.hash.format||"MMM Do, YYYY",/^\s*\d+\s*$/.test(e)?window.moment.unix(e).format(n):window.moment.utc(e).format(n)}return e})),i().registerHelper("cycle",(function(e,r){var n=e.split(" ");return n[r.data.index%(n.length+1)]})),i().registerHelper("ifCond",(function(e,r,n,a){switch(r){case"==":return e==n?a.fn(this):a.inverse(this);case"===":return e===n?a.fn(this):a.inverse(this);case"!=":return e!=n?a.fn(this):a.inverse(this);case"!==":return e!==n?a.fn(this):a.inverse(this);case"<":return e<n?a.fn(this):a.inverse(this);case"<=":return e<=n?a.fn(this):a.inverse(this);case">":return e>n?a.fn(this):a.inverse(this);case">=":return e>=n?a.fn(this):a.inverse(this);case"&&":return e&&n?a.fn(this):a.inverse(this);case"||":return e||n?a.fn(this):a.inverse(this);case"in":return-1!==n.indexOf(e)?a.fn(this):a.inverse(this);default:return a.inverse(this)}})),i().registerHelper("nl2br",(function(e){return e.gsub("\n","<br />")})),i().registerHelper("json_encode",(function(e){return JSON.stringify(e)})),i().registerHelper("json_decode",(function(e){return JSON.parse(e)})),i().registerHelper("url",(function(e){return window.location.protocol+"//"+window.location.host+window.location.pathname+e})),i().registerHelper("emailFromMailto",(function(e){var r=/^mailto:/i;return"string"==typeof e&&e.match(r)?e.replace(r,""):e})),i().registerHelper("lookup",(function(e,r){return e&&e[r]})),i().registerHelper("rsa_key",(function(e){var r;return void 0===e?"":((r=e.trim().split("\n")).shift(),r.pop(),r.join(""))})),i().registerHelper("trim",(function(e){return null==e?"":e.trim()})),i().registerHelper("ellipsis",(function(e,r,n){var a=n,i=e.replace(/(<([^>]+)>)/g,"");return void 0===a&&(a=""),i.length>r?i.substr(0,r-a.length)+a:i})),i().registerHelper("getNumber",(function(e){return parseInt(e,10)})),i().registerHelper("escapeURL",(function(e){if(!e)return"";try{const r=new URL(e);return"javascript:"===r.protocol||"vbscript:"===r.protocol||"data:"===r.protocol?"":r.href}catch(e){return""}})),i().registerHelper("fontWithFallback",(function(e){switch(e){case"Arial":return new(i().SafeString)("Arial, 'Helvetica Neue', Helvetica, sans-serif");case"Comic Sans MS":return new(i().SafeString)("'Comic Sans MS', 'Marker Felt-Thin', Arial, sans-serif");case"Courier New":return new(i().SafeString)("'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace");case"Georgia":return new(i().SafeString)("Georgia, Times, 'Times New Roman', serif");case"Lucida":return new(i().SafeString)("'Lucida Sans Unicode', 'Lucida Grande', sans-serif");case"Tahoma":return new(i().SafeString)("Tahoma, Verdana, Segoe, sans-serif");case"Times New Roman":return new(i().SafeString)("'Times New Roman', Times, Baskerville, Georgia, serif");case"Trebuchet MS":return new(i().SafeString)("'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif");case"Verdana":return new(i().SafeString)("Verdana, Geneva, sans-serif");case"Arvo":return new(i().SafeString)("arvo, courier, georgia, serif");case"Lato":return new(i().SafeString)("lato, 'helvetica neue', helvetica, arial, sans-serif");case"Lora":return new(i().SafeString)("lora, georgia, 'times new roman', serif");case"Merriweather":return new(i().SafeString)("merriweather, georgia, 'times new roman', serif");case"Merriweather Sans":return new(i().SafeString)("'merriweather sans', 'helvetica neue', helvetica, arial, sans-serif");case"Noticia Text":return new(i().SafeString)("'noticia text', georgia, 'times new roman', serif");case"Open Sans":return new(i().SafeString)("'open sans', 'helvetica neue', helvetica, arial, sans-serif");case"Playfair Display":return new(i().SafeString)("playfair display, georgia, 'times new roman', serif");case"Roboto":return new(i().SafeString)("roboto, 'helvetica neue', helvetica, arial, sans-serif");case"Source Sans Pro":return new(i().SafeString)("'source sans pro', 'helvetica neue', helvetica, arial, sans-serif");case"Oswald":return new(i().SafeString)("Oswald, 'Trebuchet MS', 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Tahoma, sans-serif");case"Raleway":return new(i().SafeString)("Raleway, 'Century Gothic', CenturyGothic, AppleGothic, sans-serif");case"Permanent Marker":return new(i().SafeString)("'Permanent Marker', Tahoma, Verdana, Segoe, sans-serif");case"Pacifico":return new(i().SafeString)("Pacifico, 'Arial Narrow', Arial, sans-serif");default:return e}})),window.Handlebars=i(),n(97442)}},e=>{e.O(0,[351],(()=>(57528,e(e.s=57528)))),e.O()}]);