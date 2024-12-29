import{d as $,L as C,x as N,c as y,l as V,o as d,a as _,b as n,f as e,w as l,s as u,u as t,t as S,e as A,g as v,n as B,k as D,j as E,_ as I,m as L,B as P,a8 as R}from"./BqbMuE7y.js";import"./BBk2F9bR.js";import{_ as W,S as H,u as M}from"./Cuqdu9nB.js";import{a as j,I as a,u as q}from"./BefdN0MI.js";const z={class:"layout-sidebar"},F={class:"layout-sidebar__nav"},G={key:0,class:"layout-sidebar__profile"},J={key:0,class:"layout-sidebar__profile-dropdown"},K={class:"profile-dropdown-item profile-dropdown-item--email"},O=["src"],Q={class:"layout-sidebar__connection"},U={class:"layout-sidebar__versions"},X=["title"],Y=["title"],Z=$({__name:"layout-sidebar",props:{apiVersion:{},clientVersion:{},profile:{}},setup(w){const r=w,k=B(),m=j(),{isConnectedWS:b}=C(m),g=N(),s=y(()=>b.value?"connected":"disconnected"),p=y(()=>{var o;return!r.profile||!((o=r.profile)!=null&&o.avatar)?null:r.profile.avatar.startsWith("<svg")?`data:image/svg+xml;base64,${btoa(r.profile.avatar.replace(/&quot;/g,'"'))}`:r.profile.avatar}),f=y(()=>`WS connection is ${s.value}`),h=V(!0),T=()=>{h.value=!h.value},x=()=>{g.removeToken(),D().push("/login")},c=y(()=>E().path);return(o,oe)=>{const i=W;return d(),_("aside",z,[n("nav",F,[e(i,{to:"/",title:"Events",class:"layout-sidebar__link layout-sidebar__link--logo"},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"logo-short"})]),_:1}),e(i,{to:"/",title:"Events",class:"layout-sidebar__link"},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"events"})]),_:1}),e(i,{to:"/sentry",title:"Sentry logs",class:u(["layout-sidebar__link",{"router-link-active":c.value.includes("/sentry")}])},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"sentry"})]),_:1},8,["class"]),e(i,{to:"/profiler",title:"Profiler",class:u(["layout-sidebar__link",{"router-link-active":c.value.includes("/profiler")}])},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"profiler"})]),_:1},8,["class"]),e(i,{to:"/smtp",title:"SMTP mails",class:u(["layout-sidebar__link",{"router-link-active":c.value.includes("/smtp")}])},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"smtp"})]),_:1},8,["class"]),e(i,{to:"/http-dumps",title:"Http dumps",class:u(["layout-sidebar__link",{"router-link-active":c.value.includes("/http-dumps")}])},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"http-dumps"})]),_:1},8,["class"]),e(i,{to:"/inspector",title:"Inspector logs",class:u(["layout-sidebar__link",{"router-link-active":c.value.includes("/inspector")}])},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"inspector"})]),_:1},8,["class"]),e(i,{to:"/var-dump",title:"Var Dump logs",class:u(["layout-sidebar__link",{"router-link-active":c.value.includes("/var-dump")}])},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"var-dump"})]),_:1},8,["class"]),e(i,{to:"/ray",title:"Ray Dump logs",class:u(["layout-sidebar__link",{"router-link-active":c.value.includes("/ray")}])},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"ray"})]),_:1},8,["class"]),e(i,{to:"/settings",title:"Settings",class:"layout-sidebar__link"},{default:l(()=>[e(t(a),{class:"layout-sidebar__link-icon",name:"settings"})]),_:1})]),n("div",null,[t(k).$appSettings.auth.enabled?(d(),_("div",G,[h.value?v("",!0):(d(),_("div",J,[n("div",K,S(o.profile.email),1),n("div",{class:"profile-dropdown-item profile-dropdown-item--logout",onClick:x},[e(t(a),{class:"profile-dropdown-item--logout-icon",name:"logout"}),A(" Logout ")])])),p.value?(d(),_("div",{key:1,class:"layout-sidebar__profile-avatar",onClick:T},[n("img",{src:p.value},null,8,O)])):v("",!0)])):v("",!0),n("div",Q,[e(t(a),{class:"layout-sidebar__connection-icon",name:s.value,title:f.value},null,8,["name","title"])]),n("div",U,[o.apiVersion?(d(),_("div",{key:0,class:"layout-sidebar__nav-version",title:`Api version: ${o.apiVersion}`},S(o.apiVersion),9,X)):v("",!0),o.clientVersion?(d(),_("div",{key:1,class:"layout-sidebar__nav-version",title:`Client version: ${o.clientVersion}`},S(o.clientVersion),9,Y)):v("",!0)])])])}}}),ee=I(Z,[["__scopeId","data-v-e7c16260"]]),te={class:"main-layout"},se={class:"main-layout__content"},ae=$({__name:"default",setup(w){q(),H(window.document);const{profile:r}=C(N()),{api:{getVersion:k}}=R(),m=V(""),b=V("@dev"),g=async()=>{const s=await k();m.value=String(s).match(/^[0-9.]+.*$/)?`v${s}`:`@${s}`};return L(()=>{var p,f;g();const{events:s}=M();(f=(p=s==null?void 0:s.items)==null?void 0:p.value)!=null&&f.length||s.getAll()}),(s,p)=>(d(),_("div",te,[e(t(ee),{class:"main-layout__sidebar","api-version":m.value,"client-version":b.value,profile:t(r)},null,8,["api-version","client-version","profile"]),n("div",se,[P(s.$slots,"default",{},void 0,!0)])]))}}),ce=I(ae,[["__scopeId","data-v-8c9b1ead"]]);export{ce as default};