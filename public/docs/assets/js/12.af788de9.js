(window.webpackJsonp=window.webpackJsonp||[]).push([[12],{410:function(t,s,a){"use strict";a.r(s);var n=a(56),e=Object(n.a)({},(function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[a("h1",{attrs:{id:"usage-guide"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#usage-guide"}},[t._v("#")]),t._v(" Usage Guide")]),t._v(" "),a("h2",{attrs:{id:"creating-users"}},[a("a",{staticClass:"header-anchor",attrs:{href:"#creating-users"}},[t._v("#")]),t._v(" Creating Users")]),t._v(" "),a("p",[t._v("Users are "),a("code",[t._v("event-sourced")]),t._v(" using "),a("a",{attrs:{href:"https://github.com/spatie/laravel-event-sourcing",target:"_blank",rel:"noopener noreferrer"}},[t._v("spatie/laravel-event-sourcing"),a("OutboundLink")],1),t._v(" and created using the User Aggregate defined in "),a("code",[t._v("app/Aggregates/UserAggregate.php")])]),t._v(" "),a("blockquote",[a("p",[t._v("See the "),a("a",{attrs:{href:"https://spatie.be/docs/laravel-event-sourcing/v7/introduction",target:"_blank",rel:"noopener noreferrer"}},[t._v("Spatie Docs"),a("OutboundLink")],1),t._v(" for more information on event sourcing.")])]),t._v(" "),a("p",[t._v("The following method is available for creating users:")]),t._v(" "),a("div",{staticClass:"language-php extra-class"},[a("pre",{pre:!0,attrs:{class:"language-php"}},[a("code",[a("span",{pre:!0,attrs:{class:"token function"}},[t._v("createUser")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token keyword type-hint"}},[t._v("string")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$name")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token keyword type-hint"}},[t._v("string")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$email")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token keyword type-hint"}},[t._v("string")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$password")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("?")]),a("span",{pre:!0,attrs:{class:"token keyword type-hint"}},[t._v("bool")]),t._v("  "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$withPersonalTeam")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token constant boolean"}},[t._v("false")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("?")]),a("span",{pre:!0,attrs:{class:"token keyword type-hint"}},[t._v("string")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$teamUuid")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token constant"}},[t._v("null")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n        "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("?")]),a("span",{pre:!0,attrs:{class:"token keyword type-hint"}},[t._v("string")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$teamName")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token constant"}},[t._v("null")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),t._v("\n")])])]),a("p",[t._v("Users must be identified prior to creation, a  "),a("code",[t._v("uuid")]),t._v(" must first be generated.")]),t._v(" "),a("p",[t._v("Example:")]),t._v(" "),a("div",{staticClass:"language-php extra-class"},[a("pre",{pre:!0,attrs:{class:"language-php"}},[a("code",[a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$uuid")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token keyword type-casting"}},[t._v("string")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token class-name class-name-fully-qualified static-context"}},[a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("\\")]),t._v("Illuminate"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("\\")]),t._v("Support"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("\\")]),t._v("Str")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("::")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("uuid")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n\n"),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$userAggregate")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("=")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token class-name class-name-fully-qualified static-context"}},[a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("\\")]),t._v("App"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("\\")]),t._v("Aggregates"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("\\")]),t._v("UserAggregate")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("::")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("retrieve")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$uuid")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n\n"),a("span",{pre:!0,attrs:{class:"token variable"}},[t._v("$userAggregate")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("->")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("createUser")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token argument-name"}},[t._v("name")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(":")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[t._v("'inmanturbo'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token argument-name"}},[t._v("email")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(":")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[t._v("'inmanturbo@mailinator.com'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token argument-name"}},[t._v("password")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(":")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token string single-quoted-string"}},[t._v("'secret'")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n    "),a("span",{pre:!0,attrs:{class:"token argument-name"}},[t._v("withPersonalTeam")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(":")]),t._v(" "),a("span",{pre:!0,attrs:{class:"token constant boolean"}},[t._v("true")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(",")]),t._v("\n"),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token operator"}},[t._v("->")]),a("span",{pre:!0,attrs:{class:"token function"}},[t._v("persist")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("(")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(")")]),a("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(";")]),t._v("\n")])])])])}),[],!1,null,null,null);s.default=e.exports}}]);