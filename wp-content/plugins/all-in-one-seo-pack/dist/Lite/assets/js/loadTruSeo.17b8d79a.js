import{z as m,b as f,f as v,d as E,u as y,q as S,v as g,w as x}from"./links.3e8e8c78.js";import{s as C}from"./metabox.28a7781e.js";import{m as t,d as b,t as _,e as k,f as h}from"./postSlug.bc0ca969.js";const I=()=>{let e=!1;if(document.querySelector("#wp-content-wrap.tmce-active")){const r=window.setInterval(()=>{!window.tinyMCE||!window.tinyMCE.activeEditor||(window.clearInterval(r),t(),window.tinyMCE.get("content").on("keyup",()=>{t(500)}),window.tinyMCE.get("content").on("paste",()=>{t(500)}))},50)}else{const r=document.querySelector("textarea#content");r&&(r.addEventListener("keyup",()=>{t(500)}),r.addEventListener("paste",()=>{t(500)}))}const n=document.querySelector("#post input#title");n&&n.addEventListener("input",()=>{t(500)}),w();const o=document.querySelector("#post_name");o&&o.addEventListener("change",()=>{t(500)});const c=document.querySelector("#edit-slug-buttons");c&&c.addEventListener("click",r=>{r.target===c.querySelector("#edit-slug-buttons button.save")&&t()});const s=document.querySelector("#categorychecklist");s&&s.addEventListener("change",function(){b()});const l=function(r){r.forEach(p=>{if(p.attributeName==="class"){if(document.querySelector("#wp-content-wrap.tmce-active")){if(!window.tinyMCE)return;window.tinyMCE.get("content").on("keyup",()=>{t(500)}),window.tinyMCE.get("content").on("paste",()=>{t(500)})}const i=document.querySelector("#content");i&&(i.addEventListener("keyup",()=>{t(500)}),i.addEventListener("paste",()=>{t(500)})),w()}})},a=new MutationObserver(l),u=document.querySelector("#wp-content-wrap");u&&a.observe(u,{attributes:!0});const d=document.querySelector("#wp-excerpt-wrap");d&&a.observe(d,{attributes:!0}),setInterval(()=>{e&&(e=!1)},500),_()&&!m()&&(e=!0,setInterval(()=>{window.tinyMCE&&window.tinyMCE.activeEditor&&window.tinyMCE.activeEditor.isDirty()&&!e&&(e=!0,t())},500))},w=()=>{if(document.querySelector("#wp-excerpt-wrap.tmce-active")){const n=window.setInterval(()=>{window.tinyMCE&&(window.clearInterval(n),t(),window.tinyMCE.get("excerpt").on("keyup",()=>{t(500)}),window.tinyMCE.get("excerpt").on("paste",()=>{t(500)}))},50)}const e=document.querySelector("#post textarea#excerpt");e&&(e.addEventListener("keyup",()=>{t(500)}),e.addEventListener("paste",()=>{t(500)}))},P=()=>{t(),window.wp.data.subscribe(()=>{t(500);const e=window.wp.data.select("core/editor").isSavingPost(),n=window.wp.data.select("core/editor").isAutosavingPost();if(e&&!n){const o=f();o.isDirty=!1,t()}})},q=()=>{if(v().isUnlicensed)return;let n="",o="",c="";const s=E();window.addEventListener("change",l=>{if(l.target.tagName!=="INPUT")return;const a=document.getElementById("_sku");a&&(n=a.value),s.updateWooCommerceSku(n);const u=document.getElementById("_sale_price"),d=document.getElementById("_regular_price");u&&(o=u.value),!o&&d&&(o=d.value);const p=y().aioseo.data.wooCommerce.currencySymbol+parseFloat(o||0).toFixed(2);s.updateWooCommercePrice(p);let i=document.querySelectorAll('#post input[name="tax_input[product_brand][]"]:checked');i.length||(i=document.querySelectorAll('#post input[name="tax_input[pwb-brand][]"]:checked')),i.length?c!==i[0].parentNode.innerText&&(c=i[0].parentNode.innerText,s.updateWooCommerceBrand(i[0].parentNode.innerText)):c!==""&&(c="",s.updateWooCommerceBrand(""))})},B=(e,n=!0)=>{if(!C())return;t();const o=f();if(o.currentPost.context==="term")k();else if(y().ping(),n&&o.savePostState(),S()){const s=window.setInterval(()=>{window.wp.data.select("core/editor").getCurrentPost().id&&(window.clearInterval(s),P())},50)}else m()&&q(),(g()||x())&&I(),h()};export{B as l};
