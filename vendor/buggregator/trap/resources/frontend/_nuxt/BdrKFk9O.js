import{T as z,a as c,C as P,u as F,_ as R}from"./Cuqdu9nB.js";import{h as E}from"./BefdN0MI.js";import{d as f,c as S,o as s,a as v,b as t,t as a,g as n,F as w,r as B,p as I,i as q,_ as k,e as d,h as l,w as i,u as r,f as b,s as H,j,k as O,l as N,m as U,n as G}from"./BqbMuE7y.js";import{u as J}from"./DU45Wy3H.js";import{S as K,u as W}from"./BCrvxhm1.js";import{u as X}from"./CF6J2D0o.js";import"./BBk2F9bR.js";import{u as Q,P as Y}from"./k1uqWTyJ.js";const h=_=>(I("data-v-68f12795"),_=_(),q(),_),Z={class:"sentry-page-tags"},x={class:"sentry-page-tags__boxes"},ee={key:0,class:"sentry-page-tags__box"},se=h(()=>t("span",{class:"sentry-page-tags__box-title"},"runtime",-1)),te={class:"sentry-page-tags__box-name"},ae={class:"sentry-page-tags__box-value"},ne={key:1,class:"sentry-page-tags__box"},re=h(()=>t("span",{class:"sentry-page-tags__box-title"},"os",-1)),oe={class:"sentry-page-tags__box-name"},le={class:"sentry-page-tags__box-value"},ie={key:2,class:"sentry-page-tags__box"},de=h(()=>t("span",{class:"sentry-page-tags__box-title"},"sdk",-1)),ce={class:"sentry-page-tags__box-name"},_e={class:"sentry-page-tags__box-value"},pe={class:"sentry-page-tags__labels-wrapper"},ue=h(()=>t("h3",{class:"sentry-page-tags__title"},"tags",-1)),ve={class:"sentry-page-tags__labels"},ye={class:"sentry-page-tags__label"},ge=h(()=>t("div",{class:"sentry-page-tags__label-name"},"env",-1)),me={class:"sentry-page-tags__label-value"},he={key:0,class:"sentry-page-tags__label"},be=h(()=>t("div",{class:"sentry-page-tags__label-name"},"release",-1)),fe={class:"sentry-page-tags__label-value"},ke={key:1,class:"sentry-page-tags__label"},$e=h(()=>t("div",{class:"sentry-page-tags__label-name"},"logger",-1)),Se={class:"sentry-page-tags__label-value"},Ie={key:2,class:"sentry-page-tags__label"},qe=h(()=>t("div",{class:"sentry-page-tags__label-name"},"os",-1)),we={class:"sentry-page-tags__label-value"},Be={key:3,class:"sentry-page-tags__label"},Le=h(()=>t("div",{class:"sentry-page-tags__label-name"},"runtime",-1)),Te={class:"sentry-page-tags__label-value"},ze={key:4,class:"sentry-page-tags__label"},Pe=h(()=>t("div",{class:"sentry-page-tags__label-name"},"server name",-1)),Ee={class:"sentry-page-tags__label-value"},De={class:"sentry-page-tags__label-name"},Ce={class:"sentry-page-tags__label-value"},Me=f({__name:"sentry-page-tags",props:{payload:{}},setup(_){const p=_,y=S(()=>{var g;const{name:e="",version:o=""}=((g=p.payload.contexts)==null?void 0:g.runtime)||{};return{name:e,version:o}}),u=S(()=>{var g;const{name:e="",version:o=""}=((g=p.payload.contexts)==null?void 0:g.os)||{};return{name:e,version:o}});return(e,o)=>(s(),v("section",Z,[t("div",x,[y.value.name?(s(),v("div",ee,[se,t("h4",te,a(y.value.name),1),t("p",ae," Version: "+a(y.value.version),1)])):n("",!0),u.value.name?(s(),v("div",ne,[re,t("h4",oe,a(u.value.name),1),t("p",le," Version: "+a(u.value.version),1)])):n("",!0),e.payload.sdk&&e.payload.sdk.name?(s(),v("div",ie,[de,t("h4",ce,a(e.payload.sdk.name),1),t("p",_e," Version: "+a(e.payload.sdk.version),1)])):n("",!0)]),t("div",pe,[ue,t("div",ve,[t("div",ye,[ge,t("div",me,a(e.payload.environment),1)]),e.payload.release?(s(),v("div",he,[be,t("div",fe,a(e.payload.release),1)])):n("",!0),e.payload.logger?(s(),v("div",ke,[$e,t("div",Se,a(e.payload.logger),1)])):n("",!0),u.value.name?(s(),v("div",Ie,[qe,t("div",we,a(u.value.name)+" "+a(u.value.version),1)])):n("",!0),y.value.name?(s(),v("div",Be,[Le,t("div",Te,a(y.value.name)+" "+a(y.value.version),1)])):n("",!0),e.payload.server_name?(s(),v("div",ze,[Pe,t("div",Ee,a(e.payload.server_name),1)])):n("",!0),e.payload.tags?(s(!0),v(w,{key:5},B(e.payload.tags,(g,m)=>(s(),v("div",{key:m,class:"sentry-page-tags__label"},[t("div",De,a(m),1),t("div",Ce,a(g||" - "),1)]))),128)):n("",!0)])])]))}}),Ne=k(Me,[["__scopeId","data-v-68f12795"]]),V=_=>(I("data-v-6acf38e5"),_=_(),q(),_),Ve={class:"sentry-page-request"},Ae=V(()=>t("h3",{class:"sentry-page-request__title"},"request",-1)),Fe={class:"sentry-page-request__wrapper"},Re={key:0,class:"sentry-page-request__url"},He=V(()=>t("h3",{class:"sentry-page-request__title sentry-page-request__title--sub"}," headers ",-1)),je=f({__name:"sentry-page-request",props:{request:{}},setup(_){const p=y=>Array.isArray(y)&&y[0]||y;return(y,u)=>(s(),v("section",Ve,[Ae,t("div",Fe,[y.request?(s(),v("code",Re,[t("strong",null,a(y.request.method||"GET")+":",1),d(" "+a(y.request.url),1)])):n("",!0),He,y.request&&y.request.headers?(s(),l(r(z),{key:1},{default:i(()=>[(s(!0),v(w,null,B(y.request.headers,(e,o)=>(s(),l(r(c),{key:o,title:o},{default:i(()=>[d(a(p(e)),1)]),_:2},1032,["title"]))),128))]),_:1})):n("",!0)])]))}}),Oe=k(je,[["__scopeId","data-v-6acf38e5"]]),Ue=_=>(I("data-v-dd467ea0"),_=_(),q(),_),Ge={class:"sentry-page-device"},Je=Ue(()=>t("h3",{class:"sentry-page-device__title"},"device",-1)),Ke=f({__name:"sentry-page-device",props:{device:{}},setup(_){const{formatFileSize:p}=X(),y=e=>E(e).toLocaleString(),u=e=>`${parseInt(String(e),10)}%`;return(e,o)=>(s(),v("section",Ge,[Je,b(r(z),null,{default:i(()=>[e.device&&e.device.arch?(s(),l(r(c),{key:0,title:"Architectures"},{default:i(()=>[b(r(P),{class:"mt-3",language:"json",code:e.device.arch},null,8,["code"])]),_:1})):n("",!0),e.device&&e.device.battery_level?(s(),l(r(c),{key:1,title:"Battery Level"},{default:i(()=>[d(a(u(e.device.battery_level)),1)]),_:1})):n("",!0),e.device&&e.device.boot_time?(s(),l(r(c),{key:2,title:"Boot Time"},{default:i(()=>[d(a(y(e.device.boot_time)),1)]),_:1})):n("",!0),e.device&&e.device.brand?(s(),l(r(c),{key:3,title:"Brand"},{default:i(()=>[d(a(e.device.brand),1)]),_:1})):n("",!0),e.device&&e.device.charging?(s(),l(r(c),{key:4,title:"Charging"},{default:i(()=>[d(a(e.device.charging),1)]),_:1})):n("",!0),e.device&&e.device.family?(s(),l(r(c),{key:5,title:"Family"},{default:i(()=>[d(a(e.device.family),1)]),_:1})):n("",!0),e.device&&e.device.free_memory?(s(),l(r(c),{key:6,title:"Free Memory"},{default:i(()=>[d(a(r(p)(e.device.free_memory)),1)]),_:1})):n("",!0),e.device&&e.device.free_storage?(s(),l(r(c),{key:7,title:"Free Storage"},{default:i(()=>[d(a(r(p)(e.device.free_storage)),1)]),_:1})):n("",!0),e.device&&e.device.id?(s(),l(r(c),{key:8,title:"Id"},{default:i(()=>[d(a(e.device.id),1)]),_:1})):n("",!0),e.device&&e.device.language?(s(),l(r(c),{key:9,title:"Language"},{default:i(()=>[d(a(e.device.language),1)]),_:1})):n("",!0),e.device&&e.device.low_memory?(s(),l(r(c),{key:10,title:"Low Memory"},{default:i(()=>[d(a(e.device.low_memory),1)]),_:1})):n("",!0),e.device&&e.device.manufacturer?(s(),l(r(c),{key:11,title:"Manufacturer"},{default:i(()=>[d(a(e.device.manufacturer),1)]),_:1})):n("",!0),e.device&&e.device.memory_size?(s(),l(r(c),{key:12,title:"Memory Size"},{default:i(()=>[d(a(r(p)(e.device.memory_size)),1)]),_:1})):n("",!0),e.device&&e.device.model?(s(),l(r(c),{key:13,title:"Model"},{default:i(()=>[d(a(e.device.model),1)]),_:1})):n("",!0),e.device&&e.device.model_id?(s(),l(r(c),{key:14,title:"Model Id"},{default:i(()=>[d(a(e.device.model_id),1)]),_:1})):n("",!0),e.device&&e.device.name?(s(),l(r(c),{key:15,title:"Name"},{default:i(()=>[d(a(e.device.name),1)]),_:1})):n("",!0),e.device&&e.device.orientation?(s(),l(r(c),{key:16,title:"Orientation"},{default:i(()=>[d(a(e.device.orientation),1)]),_:1})):n("",!0),e.device&&e.device.screen_density?(s(),l(r(c),{key:17,title:"Screen Density"},{default:i(()=>[d(a(parseInt(String(e.device.screen_density))),1)]),_:1})):n("",!0),e.device&&e.device.screen_dpi?(s(),l(r(c),{key:18,title:"Screen DPI"},{default:i(()=>[d(a(e.device.screen_dpi),1)]),_:1})):n("",!0),e.device&&e.device.screen_height_pixels?(s(),l(r(c),{key:19,title:"Screen Height Pixels"},{default:i(()=>[d(a(e.device.screen_height_pixels),1)]),_:1})):n("",!0),e.device&&e.device.screen_width_pixels?(s(),l(r(c),{key:20,title:"Screen Width Pixels"},{default:i(()=>[d(a(e.device.screen_width_pixels),1)]),_:1})):n("",!0),e.device&&e.device.simulator?(s(),l(r(c),{key:21,title:"Simulator"},{default:i(()=>[d(a(e.device.simulator),1)]),_:1})):n("",!0),e.device&&e.device.storage_size?(s(),l(r(c),{key:22,title:"Storage Size"},{default:i(()=>[d(a(r(p)(e.device.storage_size)),1)]),_:1})):n("",!0),e.device&&e.device.timezone?(s(),l(r(c),{key:23,title:"Timezone"},{default:i(()=>[d(a(e.device.timezone),1)]),_:1})):n("",!0),e.device&&e.device.battery_temperature?(s(),l(r(c),{key:24,title:"Battery Temperature"},{default:i(()=>[d(a(e.device.battery_temperature),1)]),_:1})):n("",!0),e.device&&e.device.locale?(s(),l(r(c),{key:25,title:"Locale"},{default:i(()=>[d(a(e.device.locale),1)]),_:1})):n("",!0)]),_:1})]))}}),We=k(Ke,[["__scopeId","data-v-dd467ea0"]]),D=_=>(I("data-v-1fdff995"),_=_(),q(),_),Xe={class:"sentry-page-breadcrumbs"},Qe={class:"sentry-page-breadcrumbs__title"},Ye={key:0,class:"sentry-page-breadcrumbs__counter"},Ze={class:"sentry-page-breadcrumbs__in"},xe=D(()=>t("nav",{style:{"grid-template-columns":"1fr 100px 200px 17px"},class:"sentry-page-breadcrumbs__nav"},[t("div",{class:"sentry-page-breadcrumbs__nav-col-title"},"description"),t("div",{class:"sentry-page-breadcrumbs__nav-col-title"},"level"),t("div",{class:"sentry-page-breadcrumbs__nav-col-title"},"time")],-1)),es={key:0,class:"sentry-page-breadcrumbs__cols-wr"},ss={class:"sentry-page-breadcrumbs__col"},ts={class:"sentry-page-breadcrumbs__col-message"},as={class:"sentry-page-breadcrumbs__col-details"},ns={class:"sentry-page-breadcrumbs__col-detail"},rs=D(()=>t("div",{class:"sentry-page-breadcrumbs__col-detail-title"}," type ",-1)),os={class:"sentry-page-breadcrumbs__col-detail-value"},ls={class:"sentry-page-breadcrumbs__col-detail"},is=D(()=>t("div",{class:"sentry-page-breadcrumbs__col-detail-title"}," category ",-1)),ds={class:"sentry-page-breadcrumbs__col-detail-value"},cs={class:"sentry-page-breadcrumbs__col"},_s={class:"sentry-page-breadcrumbs__col"},ps=f({__name:"sentry-page-breadcrumbs",props:{breadcrumbs:{default:()=>[]}},setup(_){const p=u=>u?E.unix(u).fromNow():"",y=u=>{var e;return(e=u.level)==null?void 0:e.toLowerCase()};return(u,e)=>(s(),v("section",Xe,[t("h3",Qe,[d(" breadcrumbs "),u.breadcrumbs.length>0?(s(),v("span",Ye,a(u.breadcrumbs.length),1)):n("",!0)]),t("div",Ze,[xe,u.breadcrumbs?(s(),v("div",es,[(s(!0),v(w,null,B(u.breadcrumbs,o=>(s(),v("div",{key:o.toString(),class:"sentry-page-breadcrumbs__cols"},[t("div",ss,[t("p",ts,a(o.message),1),o.data?(s(),l(r(P),{key:0,class:"sentry-page-breadcrumbs__col-data",language:"json",code:o.data},null,8,["code"])):n("",!0),t("div",as,[t("div",ns,[rs,t("div",os,a(o.type),1)]),t("div",ls,[is,t("div",ds,a(o.category),1)])])]),t("div",cs,[t("span",{class:H(["sentry-page-breadcrumbs__col-level-badge",y(o)])},a(o.level),3)]),t("div",_s,a(p(o.timestamp)),1)]))),128))])):n("",!0)])]))}}),us=k(ps,[["__scopeId","data-v-1fdff995"]]),vs=_=>(I("data-v-0e2691c6"),_=_(),q(),_),ys={class:"sentry-page-app"},gs=vs(()=>t("h3",{class:"sentry-page-app__title"},"app",-1)),ms=f({__name:"sentry-page-app",props:{app:{}},setup(_){return(p,y)=>(s(),v("section",ys,[gs,b(r(z),null,{default:i(()=>[p.app.type?(s(),l(r(c),{key:0,title:"App type"},{default:i(()=>[d(a(p.app.type),1)]),_:1})):n("",!0),p.app.app_build?(s(),l(r(c),{key:1,title:"App Build"},{default:i(()=>[d(a(p.app.app_build),1)]),_:1})):n("",!0),p.app.app_identifier?(s(),l(r(c),{key:2,title:"Build ID"},{default:i(()=>[d(a(p.app.app_identifier),1)]),_:1})):n("",!0),p.app.app_id?(s(),l(r(c),{key:3,title:"ID"},{default:i(()=>[d(a(p.app.app_id),1)]),_:1})):n("",!0),p.app.app_name?(s(),l(r(c),{key:4,title:"Build Name"},{default:i(()=>[d(a(p.app.app_name),1)]),_:1})):n("",!0),p.app.app_version?(s(),l(r(c),{key:5,title:"Version"},{default:i(()=>[d(a(p.app.app_version),1)]),_:1})):n("",!0),p.app.permissions?(s(),l(r(c),{key:6,title:"Permissions"},{default:i(()=>[b(r(P),{class:"mt-3",language:"json",code:p.app.permissions},null,8,["code"])]),_:1})):n("",!0)]),_:1})]))}}),hs=k(ms,[["__scopeId","data-v-0e2691c6"]]),bs={class:"sentry-page"},fs={class:"sentry-page__main"},ks={key:0,class:"sentry-page__main-header"},$s={class:"sentry-page__main-exception"},Ss=["innerHTML"],Is={class:"sentry-page__main-date"},qs={key:1,class:"sentry-page__section"},ws={class:"sentry-page__section-title"},Bs={key:0,class:"sentry-page__section-title__counter"},Ls={class:"sentry-page__section-exceptions"},Ts=f({__name:"sentry-page",props:{event:{}},setup(_){const p=_,y=S(()=>E(p.event.payload.timestamp).toLocaleString()),u=S(()=>{var o,g,m;return(m=(g=(o=p.event.payload)==null?void 0:o.exception)==null?void 0:g.values)==null?void 0:m[0]}),e=S(()=>{var o,g,m,$;return(($=(m=(g=(o=p.event)==null?void 0:o.payload)==null?void 0:g.exception)==null?void 0:m.values)==null?void 0:$.length)||0});return(o,g)=>(s(),v("div",bs,[t("main",fs,[u.value?(s(),v("header",ks,[t("h1",$s,a(u.value.type),1),t("pre",{class:"sentry-page__main-exception-message",innerHTML:u.value.value},null,8,Ss),t("p",Is,a(y.value),1)])):n("",!0),b(r(Ne),{payload:o.event.payload,class:"sentry-page__section"},null,8,["payload"]),u.value?(s(),v("section",qs,[t("h3",ws,[d(" exceptions "),e.value>0?(s(),v("span",Bs,a(e.value),1)):n("",!0)]),t("div",Ls,[o.event.payload.exception&&o.event.payload.exception.values&&o.event.payload.exception.values.length>0?(s(!0),v(w,{key:0},B(o.event.payload.exception.values,m=>(s(),l(r(K),{key:`exception-${m.value}-${m.type}`,exception:m,"max-frames":null,class:"sentry-page__section-exceptions__exception"},null,8,["exception"]))),128)):n("",!0)])])):n("",!0),o.event.payload.breadcrumbs&&o.event.payload.breadcrumbs.values&&o.event.payload.breadcrumbs.values.length>0?(s(),l(r(us),{key:2,breadcrumbs:o.event.payload.breadcrumbs.values,class:"sentry-page__section"},null,8,["breadcrumbs"])):n("",!0),o.event.payload.request?(s(),l(r(Oe),{key:3,request:o.event.payload.request,class:"sentry-page__section"},null,8,["request"])):n("",!0),o.event.payload.contexts&&o.event.payload.contexts.app?(s(),l(r(hs),{key:4,app:o.event.payload.contexts.app,class:"sentry-page__section"},null,8,["app"])):n("",!0),o.event.payload.contexts&&o.event.payload.contexts.device?(s(),l(r(We),{key:5,device:o.event.payload.contexts.device,class:"sentry-page__section"},null,8,["device"])):n("",!0)])]))}}),zs=k(Ts,[["__scopeId","data-v-50f1f883"]]),C=_=>(I("data-v-4206cc43"),_=_(),q(),_),Ps={class:"sentry-event"},Es={key:0,class:"sentry-event__loading"},Ds=C(()=>t("div",null,null,-1)),Cs=C(()=>t("div",null,null,-1)),Ms=C(()=>t("div",null,null,-1)),Ns=[Ds,Cs,Ms],Vs=f({__name:"[id]",setup(_){const{normalizeSentryEvent:p}=W(),{params:y}=j(),u=O(),e=y.id;Q({title:`Sentry > ${e} | Buggregator`});const{events:o}=F(),{$authToken:g}=G(),m=N(!1),$=N(null),L=S(()=>$.value?p($.value):null),A=()=>{o.removeById(e),u.push("/")};return U(async()=>{m.value=!0,await J(o.getUrl(e),{headers:{"X-Auth-Token":g.token||""},onResponse({response:{_data:M}}){$.value=M,m.value=!1},onResponseError(){u.push("/404")},onRequestError(){u.push("/404")}},"$2Ki7gJsB6U")}),(M,Fs)=>{const T=R;return s(),v("main",Ps,[b(r(Y),{class:"sentry-event__head","button-title":"Delete event",onDelete:A},{default:i(()=>[b(T,{to:"/"},{default:i(()=>[d("Home")]),_:1}),d(" /  "),b(T,{to:"/sentry"},{default:i(()=>[d("Sentry")]),_:1}),d(" /  "),b(T,{disabled:!0},{default:i(()=>[d(a(r(e)),1)]),_:1})]),_:1}),m.value&&!L.value?(s(),v("div",Es,Ns)):n("",!0),L.value?(s(),l(r(zs),{key:1,event:L.value,class:"sentry-event__body"},null,8,["event"])):n("",!0)])}}}),Ws=k(Vs,[["__scopeId","data-v-4206cc43"]]);export{Ws as default};
