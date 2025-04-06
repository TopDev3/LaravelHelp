<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Title&Favicon -->
    <title>Laravel Help</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Instrument Sans',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yellow-500:oklch(.795 .184 86.047);--color-yellow-600:oklch(.681 .162 75.834);--color-yellow-700:oklch(.554 .135 66.442);--color-yellow-800:oklch(.476 .114 61.907);--color-yellow-900:oklch(.421 .095 57.708);--color-yellow-950:oklch(.286 .066 53.813);--color-lime-50:oklch(.986 .031 120.757);--color-lime-100:oklch(.967 .067 122.328);--color-lime-200:oklch(.938 .127 124.321);--color-lime-300:oklch(.897 .196 126.665);--color-lime-400:oklch(.841 .238 128.85);--color-lime-500:oklch(.768 .233 130.85);--color-lime-600:oklch(.648 .2 131.684);--color-lime-700:oklch(.532 .157 131.589);--color-lime-800:oklch(.453 .124 130.933);--color-lime-900:oklch(.405 .101 131.063);--color-lime-950:oklch(.274 .072 132.109);--color-green-50:oklch(.982 .018 155.826);--color-green-100:oklch(.962 .044 156.743);--color-green-200:oklch(.925 .084 155.995);--color-green-300:oklch(.871 .15 154.449);--color-green-400:oklch(.792 .209 151.711);--color-green-500:oklch(.723 .219 149.579);--color-green-600:oklch(.627 .194 149.214);--color-green-700:oklch(.527 .154 150.069);--color-green-800:oklch(.448 .119 151.328);--color-green-900:oklch(.393 .095 152.535);--color-green-950:oklch(.266 .065 152.934);--color-emerald-50:oklch(.979 .021 166.113);--color-emerald-100:oklch(.95 .052 163.051);--color-emerald-200:oklch(.905 .093 164.15);--color-emerald-300:oklch(.845 .143 164.978);--color-emerald-400:oklch(.765 .177 163.223);--color-emerald-500:oklch(.696 .17 162.48);--color-emerald-600:oklch(.596 .145 163.225);--color-emerald-700:oklch(.508 .118 165.612);--color-emerald-800:oklch(.432 .095 166.913);--color-emerald-900:oklch(.378 .077 168.94);--color-emerald-950:oklch(.262 .051 172.552);--color-teal-50:oklch(.984 .014 180.72);--color-teal-100:oklch(.953 .051 180.801);--color-teal-200:oklch(.91 .096 180.426);--color-teal-300:oklch(.855 .138 181.071);--color-teal-400:oklch(.777 .152 181.912);--color-teal-500:oklch(.704 .14 182.503);--color-teal-600:oklch(.6 .118 184.704);--color-teal-700:oklch(.511 .096 186.391);--color-teal-800:oklch(.437 .078 188.216);--color-teal-900:oklch(.386 .063 188.416);--color-teal-950:oklch(.277 .046 192.524);--color-cyan-50:oklch(.984 .019 200.873);--color-cyan-100:oklch(.956 .045 203.388);--color-cyan-200:oklch(.917 .08 205.041);--color-cyan-300:oklch(.865 .127 207.078);--color-cyan-400:oklch(.789 .154 211.53);--color-cyan-500:oklch(.715 .143 215.221);--color-cyan-600:oklch(.609 .126 221.723);--color-cyan-700:oklch(.52 .105 223.128);--color-cyan-800:oklch(.45 .085 224.283);--color-cyan-900:oklch(.398 .07 227.392);--color-cyan-950:oklch(.302 .056 229.695);--color-sky-50:oklch(.977 .013 236.62);--color-sky-100:oklch(.951 .026 236.824);--color-sky-200:oklch(.901 .058 230.902);--color-sky-300:oklch(.828 .111 230.318);--color-sky-400:oklch(.746 .16 232.661);--color-sky-500:oklch(.685 .169 237.323);--color-sky-600:oklch(.588 .158 241.966);--color-sky-700:oklch(.5 .134 242.749);--color-sky-800:oklch(.443 .11 240.79);--color-sky-900:oklch(.391 .09 240.876);--color-sky-950:oklch(.293 .066 243.157);--color-blue-50:oklch(.97 .014 254.604);--color-blue-100:oklch(.932 .032 255.585);--color-blue-200:oklch(.882 .059 254.128);--color-blue-300:oklch(.809 .105 251.813);--color-blue-400:oklch(.707 .165 254.624);--color-blue-500:oklch(.623 .214 259.815);--color-blue-600:oklch(.546 .245 262.881);--color-blue-700:oklch(.488 .243 264.376);--color-blue-800:oklch(.424 .199 265.638);--color-blue-900:oklch(.379 .146 265.522);--color-blue-950:oklch(.282 .091 267.935);--color-indigo-50:oklch(.962 .018 272.314);--color-indigo-100:oklch(.93 .034 272.788);--color-indigo-200:oklch(.87 .065 274.039);--color-indigo-300:oklch(.785 .115 274.713);--color-indigo-400:oklch(.673 .182 276.935);--color-indigo-500:oklch(.585 .233 277.117);--color-indigo-600:oklch(.511 .262 276.966);--color-indigo-700:oklch(.457 .24 277.023);--color-indigo-800:oklch(.398 .195 277.366);--color-indigo-900:oklch(.359 .144 278.697);--color-indigo-950:oklch(.257 .09 281.288);--color-violet-50:oklch(.969 .016 293.756);--color-violet-100:oklch(.943 .029 294.588);--color-violet-200:oklch(.894 .057 293.283);--color-violet-300:oklch(.811 .111 293.571);--color-violet-400:oklch(.702 .183 293.541);--color-violet-500:oklch(.606 .25 292.717);--color-violet-600:oklch(.541 .281 293.009);--color-violet-700:oklch(.491 .27 292.581);--color-violet-800:oklch(.432 .232 292.759);--color-violet-900:oklch(.38 .189 293.745);--color-violet-950:oklch(.283 .141 291.089);--color-purple-50:oklch(.977 .014 308.299);--color-purple-100:oklch(.946 .033 307.174);--color-purple-200:oklch(.902 .063 306.703);--color-purple-300:oklch(.827 .119 306.383);--color-purple-400:oklch(.714 .203 305.504);--color-purple-500:oklch(.627 .265 303.9);--color-purple-600:oklch(.558 .288 302.321);--color-purple-700:oklch(.496 .265 301.924);--color-purple-800:oklch(.438 .218 303.724);--color-purple-900:oklch(.381 .176 304.987);--color-purple-950:oklch(.291 .149 302.717);--color-fuchsia-50:oklch(.977 .017 320.058);--color-fuchsia-100:oklch(.952 .037 318.852);--color-fuchsia-200:oklch(.903 .076 319.62);--color-fuchsia-300:oklch(.833 .145 321.434);--color-fuchsia-400:oklch(.74 .238 322.16);--color-fuchsia-500:oklch(.667 .295 322.15);--color-fuchsia-600:oklch(.591 .293 322.896);--color-fuchsia-700:oklch(.518 .253 323.949);--color-fuchsia-800:oklch(.452 .211 324.591);--color-fuchsia-900:oklch(.401 .17 325.612);--color-fuchsia-950:oklch(.293 .136 325.661);--color-pink-50:oklch(.971 .014 343.198);--color-pink-100:oklch(.948 .028 342.258);--color-pink-200:oklch(.899 .061 343.231);--color-pink-300:oklch(.823 .12 346.018);--color-pink-400:oklch(.718 .202 349.761);--color-pink-500:oklch(.656 .241 354.308);--color-pink-600:oklch(.592 .249 .584);--color-pink-700:oklch(.525 .223 3.958);--color-pink-800:oklch(.459 .187 3.815);--color-pink-900:oklch(.408 .153 2.432);--color-pink-950:oklch(.284 .109 3.907);--color-rose-50:oklch(.969 .015 12.422);--color-rose-100:oklch(.941 .03 12.58);--color-rose-200:oklch(.892 .058 10.001);--color-rose-300:oklch(.81 .117 11.638);--color-rose-400:oklch(.712 .194 13.428);--color-rose-500:oklch(.645 .246 16.439);--color-rose-600:oklch(.586 .253 17.585);--color-rose-700:oklch(.514 .222 16.935);--color-rose-800:oklch(.455 .188 13.697);--color-rose-900:oklch(.41 .159 10.272);--color-rose-950:oklch(.271 .105 12.094);--color-slate-50:oklch(.984 .003 247.858);--color-slate-100:oklch(.968 .007 247.896);--color-slate-200:oklch(.929 .013 255.508);--color-slate-300:oklch(.869 .022 252.894);--color-slate-400:oklch(.704 .04 256.788);--color-slate-500:oklch(.554 .046 257.417);--color-slate-600:oklch(.446 .043 257.281);--color-slate-700:oklch(.372 .044 257.287);--color-slate-800:oklch(.279 .041 260.031);--color-slate-900:oklch(.208 .042 265.755);--color-slate-950:oklch(.129 .042 264.695);--color-gray-50:oklch(.985 .002 247.839);--color-gray-100:oklch(.967 .003 264.542);--color-gray-200:oklch(.928 .006 264.531);--color-gray-300:oklch(.872 .01 258.338);--color-gray-400:oklch(.707 .022 261.325);--color-gray-500:oklch(.551 .027 264.364);--color-gray-600:oklch(.446 .03 256.802);--color-gray-700:oklch(.373 .034 259.733);--color-gray-800:oklch(.278 .033 256.848);--color-gray-900:oklch(.21 .034 264.665);--color-gray-950:oklch(.13 .028 261.692);--color-zinc-50:oklch(.985 0 0);--color-zinc-100:oklch(.967 .001 286.375);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-300:oklch(.871 .006 286.286);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-zinc-950:oklch(.141 .005 285.823);--color-neutral-50:oklch(.985 0 0);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-300:oklch(.87 0 0);--color-neutral-400:oklch(.708 0 0);--color-neutral-500:oklch(.556 0 0);--color-neutral-600:oklch(.439 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-50:oklch(.985 .001 106.423);--color-stone-100:oklch(.97 .001 106.424);--color-stone-200:oklch(.923 .003 48.717);--color-stone-300:oklch(.869 .005 56.366);--color-stone-400:oklch(.709 .01 56.259);--color-stone-500:oklch(.553 .013 58.071);--color-stone-600:oklch(.444 .011 73.639);--color-stone-700:oklch(.374 .01 67.558);--color-stone-800:oklch(.268 .007 34.298);--color-stone-900:oklch(.216 .006 56.043);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--breakpoint-sm:40rem;--breakpoint-md:48rem;--breakpoint-lg:64rem;--breakpoint-xl:80rem;--breakpoint-2xl:96rem;--container-3xs:16rem;--container-2xs:18rem;--container-xs:20rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-xl:36rem;--container-2xl:42rem;--container-3xl:48rem;--container-4xl:56rem;--container-5xl:64rem;--container-6xl:72rem;--container-7xl:80rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-base:1rem;--text-base--line-height: 1.5 ;--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--text-xl:1.25rem;--text-xl--line-height:calc(1.75/1.25);--text-2xl:1.5rem;--text-2xl--line-height:calc(2/1.5);--text-3xl:1.875rem;--text-3xl--line-height: 1.2 ;--text-4xl:2.25rem;--text-4xl--line-height:calc(2.5/2.25);--text-5xl:3rem;--text-5xl--line-height:1;--text-6xl:3.75rem;--text-6xl--line-height:1;--text-7xl:4.5rem;--text-7xl--line-height:1;--text-8xl:6rem;--text-8xl--line-height:1;--text-9xl:8rem;--text-9xl--line-height:1;--font-weight-thin:100;--font-weight-extralight:200;--font-weight-light:300;--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--font-weight-bold:700;--font-weight-extrabold:800;--font-weight-black:900;--tracking-tighter:-.05em;--tracking-tight:-.025em;--tracking-normal:0em;--tracking-wide:.025em;--tracking-wider:.05em;--tracking-widest:.1em;--leading-tight:1.25;--leading-snug:1.375;--leading-normal:1.5;--leading-relaxed:1.625;--leading-loose:2;--radius-xs:.125rem;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--radius-2xl:1rem;--radius-3xl:1.5rem;--radius-4xl:2rem;--shadow-2xs:0 1px #0000000d;--shadow-xs:0 1px 2px 0 #0000000d;--shadow-sm:0 1px 3px 0 #0000001a,0 1px 2px -1px #0000001a;--shadow-md:0 4px 6px -1px #0000001a,0 2px 4px -2px #0000001a;--shadow-lg:0 10px 15px -3px #0000001a,0 4px 6px -4px #0000001a;--shadow-xl:0 20px 25px -5px #0000001a,0 8px 10px -6px #0000001a;--shadow-2xl:0 25px 50px -12px #00000040;--inset-shadow-2xs:inset 0 1px #0000000d;--inset-shadow-xs:inset 0 1px 1px #0000000d;--inset-shadow-sm:inset 0 2px 4px #0000000d;--drop-shadow-xs:0 1px 1px #0000000d;--drop-shadow-sm:0 1px 2px #00000026;--drop-shadow-md:0 3px 3px #0000001f;--drop-shadow-lg:0 4px 4px #00000026;--drop-shadow-xl:0 9px 7px #0000001a;--drop-shadow-2xl:0 25px 25px #00000026;--ease-in:cubic-bezier(.4,0,1,1);--ease-out:cubic-bezier(0,0,.2,1);--ease-in-out:cubic-bezier(.4,0,.2,1);--animate-spin:spin 1s linear infinite;--animate-ping:ping 1s cubic-bezier(0,0,.2,1)infinite;--animate-pulse:pulse 2s cubic-bezier(.4,0,.6,1)infinite;--animate-bounce:bounce 1s infinite;--blur-xs:4px;--blur-sm:8px;--blur-md:12px;--blur-lg:16px;--blur-xl:24px;--blur-2xl:40px;--blur-3xl:64px;--perspective-dramatic:100px;--perspective-near:300px;--perspective-normal:500px;--perspective-midrange:800px;--perspective-distant:1200px;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){-webkit-appearance:button;-moz-appearance:button;appearance:button}::file-selector-button{-webkit-appearance:button;-moz-appearance:button;appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.absolute{position:absolute}.relative{position:relative}.static{position:static}.inset-0{inset:calc(var(--spacing)*0)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.-mb-px{margin-bottom:-1px}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.-ml-8{margin-left:calc(var(--spacing)*-8)}.flex{display:flex}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.h-1{height:calc(var(--spacing)*1)}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2{height:calc(var(--spacing)*2)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3{height:calc(var(--spacing)*3)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-14{height:calc(var(--spacing)*14)}.h-14\.5{height:calc(var(--spacing)*14.5)}.min-h-screen{min-height:100vh}.w-1{width:calc(var(--spacing)*1)}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2{width:calc(var(--spacing)*2)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3{width:calc(var(--spacing)*3)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-\[448px\]{width:448px}.w-full{width:100%}.max-w-\[335px\]{max-width:335px}.max-w-none{max-width:none}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.transform{transform:var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-sm{border-radius:var(--radius-sm)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.rounded-br-lg{border-bottom-right-radius:var(--radius-lg)}.rounded-bl-lg{border-bottom-left-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-transparent{border-color:#0000}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-white{background-color:var(--color-white)}.p-6{padding:calc(var(--spacing)*6)}.px-5{padding-inline:calc(var(--spacing)*5)}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-white{color:var(--color-white)}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.\!filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)!important}.filter{filter:var(--tw-blur,)var(--tw-brightness,)var(--tw-contrast,)var(--tw-grayscale,)var(--tw-hue-rotate,)var(--tw-invert,)var(--tw-saturate,)var(--tw-sepia,)var(--tw-drop-shadow,)}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}}@media (width>=64rem){.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:-ml-px{margin-left:-1px}.lg\:ml-0{margin-left:calc(var(--spacing)*0)}.lg\:block{display:block}.lg\:aspect-auto{aspect-ratio:auto}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:grow{flex-grow:1}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:rounded-tl-lg{border-top-left-radius:var(--radius-lg)}.lg\:rounded-r-lg{border-top-right-radius:var(--radius-lg);border-bottom-right-radius:var(--radius-lg)}.lg\:rounded-br-none{border-bottom-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}}@keyframes spin{to{transform:rotate(360deg)}}@keyframes ping{75%,to{opacity:0;transform:scale(2)}}@keyframes pulse{50%{opacity:.5}}@keyframes bounce{0%,to{animation-timing-function:cubic-bezier(.8,0,1,1);transform:translateY(-25%)}50%{animation-timing-function:cubic-bezier(0,0,.2,1);transform:none}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-rotate-x{syntax:"*";inherits:false;initial-value:rotateX(0)}@property --tw-rotate-y{syntax:"*";inherits:false;initial-value:rotateY(0)}@property --tw-rotate-z{syntax:"*";inherits:false;initial-value:rotateZ(0)}@property --tw-skew-x{syntax:"*";inherits:false;initial-value:skewX(0)}@property --tw-skew-y{syntax:"*";inherits:false;initial-value:skewY(0)}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-blur{syntax:"*";inherits:false}@property --tw-brightness{syntax:"*";inherits:false}@property --tw-contrast{syntax:"*";inherits:false}@property --tw-grayscale{syntax:"*";inherits:false}@property --tw-hue-rotate{syntax:"*";inherits:false}@property --tw-invert{syntax:"*";inherits:false}@property --tw-opacity{syntax:"*";inherits:false}@property --tw-saturate{syntax:"*";inherits:false}@property --tw-sepia{syntax:"*";inherits:false}@property --tw-drop-shadow{syntax:"*";inherits:false}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}
        </style>
    @endif

    <!-- === CSS CDNs & StyleSheets === -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet"/>

    <!-- Odometer -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/themes/odometer-theme-default.min.css"/>


    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="assets/css/responsive.css"/>
</head>

<body>


<!-- ===== offcanvas Area Start ===== -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <div class="ofcanvus__logo">
            <img src="./assets/img/logo/logo.png" alt="">
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>

    <div class="offcanvas-body flex-column d-flex justify-content-between">
        <div class="offcanvas__menu w-100">
            <div class="offcanvas__nav w-100 mb-5">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Problems</a></li>
                    <li><a href="">Benefits</a></li>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Schedule</a></li>
                    <li><a href="">Contact Us</a></li>
                </ul>
            </div>
        </div>

        <div class="d-block w-100 offcanvas__bottom">
            <button type="button" class="btn btn-main w-100">
                Help me now!
            </button>
        </div>
    </div>
</div>
<!-- ===== offcanvas Area End ===== -->


<!-- ===== Header Area Start ===== -->
<header class="header sticky-header">
    <div class="container">
        <div class="header__wrapper d-flex align-items-center justify-content-between">
            <!-- header-logo -->
            <div class="header__logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo.png" alt="logo"/>
                </a>
            </div>
            <!-- header-logo--end -->

            <!-- header-end -->
            <div class="header__end d-flex align-items-center justify-content-center">
                <!-- header__nav -->
                <div class="header__nav d-none d-xl-block">
                    <ul class="d-flex gap-4 mx-auto header__nav-menu">
                        <li><a class="p-3" href="">Home</a></li>
                        <li><a class="p-3" href="">Problems</a></li>
                        <li><a class="p-3" href="">Benefits</a></li>
                        <li><a class="p-3" href="">About Us</a></li>
                        <li><a class="p-3" href="">Schedule</a></li>
                        <li><a class="p-3" href="">Contact Us</a></li>
                    </ul>
                </div>
                <!-- header__nav--end -->


            </div>
            <!-- header-end--end -->


            <!-- header-links -->
            <div class="header__links d-flex align-items-center">

                <button type="button"
                        class="btn btn-main btn-header d-none d-xl-inline-block fs-16"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                >
                    Help me now!
                </button>

                <button type="button" class="header__menuBar d-xl-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <i class="ri-menu-2-line"></i>

                </button>

            </div>
            <!-- header-links--end -->
        </div>
    </div>
</header>
<!-- ===== Header Area End ===== -->


<!-- ====== Main Area Start ======= -->
<main>

    <!-- === Hero Section Start === -->
    <section class="section hero overflow-hidden">

        <div class="hero__ingradient hero__ingradient-1"></div>
        <div class="hero__ingradient hero__ingradient-2"></div>
        <div class="container position-relative z-1">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__content text-center flex-column d-flex align-items-center">
                        <h1 class="fs-1 fw-bold pb-1 hero__title position-relative">
                            Is your Laravel app <span class="text-primary">slow,</span> <br
                                    class="d-none d-md-inline-block">
                            <span class="text-primary d-inline-block ms-0 ms-lg-5 ps-0 ps-lg-3">outdated</span> or
                            full of bugs?
                        </h1>

                        <p class="hero__desc fs-5 mt-3 mt-lg-5 mb-2 mb-lg-3 pb-1">
                            Book a free Laravel code audit and get actionable insights in just 30 minutes.
                        </p>


                        <!-- Hero Form -->
                        <div class="hero__form-wrapper mt-4 ps-0 ps-lg-5 ms-0 ms-lg-5 mb-1 mb-lg-3">
                            <form action="" class="hero__form">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <input class="email px-4 py-3 bg-white" type="email" placeholder="Enter your email">
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="button" class="btn btn-main hero__form-btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Schedule Free
                                            Consultation
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <div class="d-flex align-items-center my-4">
                                <div class="w-100 border-top border-dark"></div>
                                <span class="px-3 text-secondary fs-6">or</span>
                                <div class="w-100 border-top border-dark"></div>
                            </div>
                            <div class="mt-3 d-flex flex-column flex-md-row align-items-center justify-content-center gap-3">
                                <p class="fs-6 mb-0">contact us at <a href="mailto:contact@laravelhelp.com" class="text-primary">contact@laravelhelp.com</a></p>
                                <span> | </span>
                                <button
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal-send-question"
                                        type="button"
                                        class="btn btn-outline btn-sm d-flex align-items-center gap-2 mx-auto"
                                        style="padding: 0.3rem 0.75rem; font-size: 0.875rem;">
                                    <i class="ri-question-line"></i> Send us a question
                                </button>
                            </div>
                        </div>


                        <!-- Time Block -->
                        <div
                                class="hero__time-wrapper d-md-flex flex-wrap gap-4 justify-content-center align-items-center mt-3 mt-5">


                            <div class="time__block d-flex px-1 align-items-center gap-3">
                                    <span class="time__block-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#F8F9FA" stroke-width="2"/>
                                            <path d="M8 12L11 15L16 9" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>
                                <p class="text-secondary fs-16">
                                    30-minute free consultation
                                </p>
                            </div>

                            <div class="date__block d-flex px-1 align-items-center gap-3 mt-2 mt-sm-3 mt-md-0">
                                    <span class="time__block-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                             viewBox="0 0 24 24" fill="none">
                                            <path
                                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                                    stroke="#F8F9FA" stroke-width="2"/>
                                            <path d="M12 6V12L16 14" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </span>

                                <p class="text-secondary fs-16">
                                    Actionable insights guaranteed
                                </p>
                            </div>
                        </div>


                        <!-- Hero Buttons -->
                        <div
                                class="hero__btn-wrapper d-flex gap-1 justify-content-center align-items-center flex-wrap">
                            <button class="btn btn-outline">
                                Hire My Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- === Hero Section End === -->


    <!-- ========= Fact Section Start ========== -->
    <section class="section achievement bg-primary">

        <h3
                class="section__subtitle fw-semibold mx-auto position-absolute d-flex align-items-center justify-content-center fs-4 text-primary bg-white animated-border">
            <div class="border-effect"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                <path
                        d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                        fill="#DC3545"/>
            </svg>

            <span>
                    Our Achievements
                </span>
        </h3>


        <div class="container">
            <div
                    class="achivement__wrapper mx-auto d-flex justify-content-center justify-content-lg-between align-items-center flex-wrap gap-4 gap-sm-5">

                <div
                        class="achivement__counts d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center row-gap-3 column-gap-5 gap-sm-5 odometer-trigger">

                    <div class="achivement__count-item text-center mb-3 mb-sm-0">
                        <h2 class="fs-2 fw-bold text-white">
                            <span class="odometer" data-target="12">0</span> +
                        </h2>

                        <p class="text-white fs-20 fw-medium">Years Experience</p>
                    </div>

                    <div class="achivement__count-item text-center mb-3 mb-sm-0">
                        <h2 class="fs-2 fw-bold text-white">
                            <span class="odometer" data-target="150">0</span> +
                        </h2>

                        <p class="text-white fs-20 fw-medium">Projects Built</p>
                    </div>


                    <div class="achivement__count-item text-center mb-3 mb-sm-0">
                        <h2 class="fs-2 fw-bold text-white">
                            <span class="odometer" data-target="2.5">0</span> k
                        </h2>

                        <p class="text-white fs-20 fw-medium">Github Stars</p>
                    </div>
                </div>


                <button class="btn bg-white arrow__btn-anim"><span>Our Case studies</span> <span
                            class="overflow-hidden"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="16"
                                                         viewBox="0 0 18 16" fill="none">
                                <path
                                        d="M9.06581 0L7.65581 1.41L13.2358 7H1.06581V9H13.2358L7.65581 14.59L9.06581 16L17.0658 8L9.06581 0Z"
                                        fill="#212529"/>
                            </svg></span></button>


            </div>
        </div>
    </section>
    <!-- ========= Fact Section End ========== -->


    <!-- ======== Challenges Section Start ========= -->
    <section class="section challenges overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">


                <div class="border-effect"></div>


                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        Your Challenges
                    </span>


            </h3>


            <h2 class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-3 bottom-to-top-anim">
                Are you struggling with any of these?
            </h2>


            <!-- Challenges -->
            <div class="challenges__items mt-3 mt-lg-5 pt-3">

                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-1.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Upgrading PHP / Laravel
                        </h4>
                        <p class="fs-16">
                            Stuck on an old version? We can help with safe, tested upgrades.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-2.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            No automated tests
                        </h4>
                        <p class="fs-16">
                            Ship with confidence using proper test coverage.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-3.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Recurring bugs
                        </h4>
                        <p class="fs-16">
                            Eliminate those frustrating issues that keep coming back.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-4.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Security issues
                        </h4>
                        <p class="fs-16">
                            Protect your application and user data with security best practices.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-5.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Slow performance
                        </h4>
                        <p class="fs-16">
                            Speed up your app with performance optimization.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-6.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Messy architecture
                        </h4>
                        <p class="fs-16">
                            Implement clean, maintainable code structure.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


                <div class="challenges__item d-flex align-items-center radius-8 stacky__card end-card">

                    <div class="challenges__item-img">
                        <img src="./assets/img/icons-img/problem-icon-7.png" alt="image" class="img-fluid">
                    </div>

                    <div>
                        <h4 class="fs-5 fw-bold text-secondary challenges__item-title">
                            Outdated dependencies
                        </h4>
                        <p class="fs-16">
                            Update safely with compatibility checks.
                        </p>
                    </div>

                    <div class="challenges__item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6" fill="none">
                            <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                    </div>

                </div>


            </div>


            <div
                    class="btn-group d-flex justify-content-center align-items-center gap-3 mt-4 mt-lg-5 pt-2 pt-lg-3 ">

                <button class="btn btn-main mx-auto">
                    Fix These Issues Now
                </button>
            </div>
        </div>
    </section>
    <!-- ======== Challenges Section End ========= -->


    <!-- ======= Offer Section Start ========== -->
    <section class="section offer-section overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        What We Offer
                    </span>
            </h3>


            <h2
                    class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-1 pt-lg-2 bottom-to-top-anim">
                What You Get With a Free Audit
            </h2>

            <p class="fs-20 text-center mt-2 mt-lg-3">Schedule your free 30-minute consultation and receive expert
                insights tailored <br class="d-none d-md-flex"> to your application.</p>


            <div class="offers__wrapper mt-3 mt-lg-5 pt-lg-2">
                <div class="row g-3 g-lg-4">
                    <div class="col-lg-12">

                        <div class="offer__item bottom-to-top-anim align-items-center radius-8 d-none d-lg-flex">

                            <div class="offer__item-img flex-shrink-0">
                                <img src="./assets/img/icons-img/offer-icon-1.png" alt="image" class="img-fluid">
                            </div>

                            <div>
                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2 pb-2">
                                    Personalized Code Review
                                </h4>
                                <p class="fs-16 text-secondary">
                                    Get a detailed analysis of your specific codebase and architecture
                                </p>
                            </div>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>


                        <div class="offer__item offer__item-padding d-lg-none  radius-8">


                            <div class="d-flex align-items-center gap-3">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-1.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    Personalized Code Review
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary">
                                Get a detailed analysis of your specific codebase and architecture
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>


                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item offer__item-padding  radius-8 left-to-right-anim">


                            <div class="d-flex align-items-center gap-3">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-2.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    Performance Insights
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary">
                                Discover bottlenecks and optimization opportunities in<br
                                        class="d-none d-lg-inline-block"> your system
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item right-to-left-anim  radius-8">


                            <div class="d-flex gap-3 align-items-center">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-3.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    No Commitment
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary mt-1">
                                Zero obligation and no spam - just actionable insights
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item  left-to-right-anim radius-8">


                            <div class="d-flex gap-3 align-items-center">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-4.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    12+ Years Experience
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary mt-1">
                                Benefit from over a decade of Laravel expertise
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="offer__item right-to-left-anim radius-8">


                            <div class="d-flex gap-3 align-items-center">

                                <div class="offer__item-img">
                                    <img src="./assets/img/icons-img/offer-icon-5.png" alt="image"
                                         class="img-fluid">
                                </div>

                                <h4 class="fs-5 fw-bold text-secondary offer__item-title mb-2">
                                    Flexible Delivery
                                </h4>

                            </div>

                            <p class="fs-16 ms-3 pl-2 text-secondary mt-1">
                                Choose between a video call or detailed written feedback
                            </p>

                            <div class="offer__item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="6" viewBox="0 0 8 6"
                                     fill="none">
                                    <path d="M1 3L3 5L6.33333 1" stroke="white" stroke-width="2"
                                          stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>

                        </div>
                    </div>


                </div>
            </div>


            <div class="btn-group d-flex justify-content-center align-items-center gap-3 mt-4 mt-lg-5 pt-3 pt-lg-3">

                <button class="btn btn-main mx-auto">
                    Book Your Free Audit
                </button>
            </div>


        </div>
    </section>
    <!-- ======= Offer Section End ========== -->


    <!-- ========= Why Choose Us Section Start ========== -->
    <section class="section choose-us overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        Why Choose Us?
                    </span>
            </h3>


            <div class="row choose__content gx-0 gy-5 align-items-center">
                <div class="col-lg-3 ">
                    <div class="left__part text-center text-lg-start left-to-right-anim">
                        <div class="img pb-1">
                            <img class="img-fluid radius-8 choose__us-img" src="./assets/img/office.png" alt="">
                        </div>


                        <div
                                class="developer border-card radius-16 shadow-1 py-4 px-2  d-flex gap-3 align-items-center mt-4">
                            <div class="">
                                <img class="developer-img img-fluid" src="./assets/img/office.png" alt="img">
                            </div>

                            <div class="developer__details">
                                <h4 class="fs-20 fw-bold text-secondary text-start">
                                    John Smith
                                </h4>

                                <p class="text-secondary fs-14">
                                    Senior Laravel Developer
                                </p>
                            </div>

                        </div>


                        <div class="developer__socials-group pt-2">

                            <a href="#" class="developer__social-link">
                                <div
                                        class="developer__social border-card radius-16 shadow-1  d-flex gap-3 align-items-center mt-3">
                                    <div class="developer__social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                                             viewBox="0 0 20 16" fill="none">
                                            <path
                                                    d="M20.01 1.89C19.27 2.21 18.47 2.42 17.65 2.53C18.5 2.03 19.15 1.24 19.45 0.3C18.65 0.77 17.77 1.09 16.84 1.28C16.1 0.49 15.03 0 13.86 0C11.59 0 9.76001 1.81 9.76001 4.04C9.76001 4.36 9.79001 4.67 9.85001 4.96C6.45 4.79 3.43 3.19 1.4 0.74C1.05 1.34 0.84 2.03 0.84 2.77C0.84 4.18 1.57 5.42 2.66 6.13C2 6.12 1.35 5.93 0.81 5.63V5.67C0.81 7.63 2.23 9.26 4.09 9.64C3.76 9.73 3.39 9.77 3.01 9.77C2.75 9.77 2.48 9.76 2.23 9.7C2.76 11.3 4.27 12.48 6.06 12.51C4.67 13.59 2.89 14.23 0.98 14.23C0.64 14.23 0.32 14.21 0 14.17C1.83 15.34 3.98 16 6.3 16C13.85 16 17.97 9.85 17.97 4.51C17.97 4.33 17.96 4.16 17.95 3.99C18.77 3.42 19.45 2.71 20.01 1.89Z"
                                                    fill="#212529"/>
                                        </svg>
                                    </div>

                                    <div class="developer__social-username">

                                        <p class="text-secondary fs-16">
                                            @johnsmith
                                        </p>

                                    </div>

                                </div>
                            </a>


                            <a href="#" class="developer__social-link">
                                <div
                                        class="developer__social border-card radius-16 shadow-1  d-flex gap-3 align-items-center mt-3">
                                    <div class="developer__social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20" fill="none">
                                            <path
                                                    d="M10 0.246582C4.475 0.246582 0 4.72158 0 10.2466C0 14.6716 2.8625 18.4091 6.8375 19.7341C7.3375 19.8216 7.525 19.5216 7.525 19.2591C7.525 19.0216 7.5125 18.2341 7.5125 17.3966C5 17.8591 4.35 16.7841 4.15 16.2216C4.0375 15.9341 3.55 15.0466 3.125 14.8091C2.775 14.6216 2.275 14.1591 3.1125 14.1466C3.9 14.1341 4.4625 14.8716 4.65 15.1716C5.55 16.6841 6.9875 16.2591 7.5625 15.9966C7.65 15.3466 7.9125 14.9091 8.2 14.6591C5.975 14.4091 3.65 13.5466 3.65 9.72158C3.65 8.63408 4.0375 7.73408 4.675 7.03408C4.575 6.78408 4.225 5.75908 4.775 4.38408C4.775 4.38408 5.6125 4.12158 7.525 5.40908C8.325 5.18408 9.175 5.07158 10.025 5.07158C10.875 5.07158 11.725 5.18408 12.525 5.40908C14.4375 4.10908 15.275 4.38408 15.275 4.38408C15.825 5.75908 15.475 6.78408 15.375 7.03408C16.0125 7.73408 16.4 8.62158 16.4 9.72158C16.4 13.5591 14.0625 14.4091 11.8375 14.6591C12.2 14.9716 12.5125 15.5716 12.5125 16.5091C12.5125 17.8466 12.5 18.9216 12.5 19.2591C12.5 19.5216 12.6875 19.8341 13.1875 19.7341C17.1375 18.4091 20 14.6591 20 10.2466C20 4.72158 15.525 0.246582 10 0.246582Z"
                                                    fill="#212529"/>
                                        </svg>
                                    </div>

                                    <div class="developer__social-username">

                                        <p class="text-secondary fs-16">
                                            github.com/johnsmith
                                        </p>

                                    </div>

                                </div>
                            </a>


                            <a href="#" class="developer__social-link">

                                <div
                                        class="developer__social border-card radius-16 shadow-1  d-flex gap-3 align-items-center mt-3">
                                    <div class="developer__social-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                             viewBox="0 0 20 20" fill="none">
                                            <path
                                                    d="M10 0.246582C4.475 0.246582 0 4.72158 0 10.2466C0 14.6716 2.8625 18.4091 6.8375 19.7341C7.3375 19.8216 7.525 19.5216 7.525 19.2591C7.525 19.0216 7.5125 18.2341 7.5125 17.3966C5 17.8591 4.35 16.7841 4.15 16.2216C4.0375 15.9341 3.55 15.0466 3.125 14.8091C2.775 14.6216 2.275 14.1591 3.1125 14.1466C3.9 14.1341 4.4625 14.8716 4.65 15.1716C5.55 16.6841 6.9875 16.2591 7.5625 15.9966C7.65 15.3466 7.9125 14.9091 8.2 14.6591C5.975 14.4091 3.65 13.5466 3.65 9.72158C3.65 8.63408 4.0375 7.73408 4.675 7.03408C4.575 6.78408 4.225 5.75908 4.775 4.38408C4.775 4.38408 5.6125 4.12158 7.525 5.40908C8.325 5.18408 9.175 5.07158 10.025 5.07158C10.875 5.07158 11.725 5.18408 12.525 5.40908C14.4375 4.10908 15.275 4.38408 15.275 4.38408C15.825 5.75908 15.475 6.78408 15.375 7.03408C16.0125 7.73408 16.4 8.62158 16.4 9.72158C16.4 13.5591 14.0625 14.4091 11.8375 14.6591C12.2 14.9716 12.5125 15.5716 12.5125 16.5091C12.5125 17.8466 12.5 18.9216 12.5 19.2591C12.5 19.5216 12.6875 19.8341 13.1875 19.7341C17.1375 18.4091 20 14.6591 20 10.2466C20 4.72158 15.525 0.246582 10 0.246582Z"
                                                    fill="#212529"/>
                                        </svg>
                                    </div>

                                    <div class="developer__social-username">

                                        <p class="text-secondary fs-16">
                                            github.com/johnsmith
                                        </p>

                                    </div>

                                </div>

                            </a>


                        </div>

                    </div>

                </div>

                <div class="col-lg-9">
                    <div class="right__part ps-0 ps-lg-5 right-to-left-anim">
                        <h2 class="text-secondary fs-3 fw-bold">
                            Transforming Laravel Applications for Over a Decade
                        </h2>

                        <p class="fs-20 mt-2 mt-lg-4">
                            I help companies build scalable, maintainable Laravel applications that stand the test
                            of time. My approach combines technical excellence with practical business
                            understanding.
                        </p>

                        <div class="mt-4">
                            <div class="row g-3 g-lg-4 align-items-stretch">
                                <div class="col-lg-6">
                                    <div class="border-card h-100 choose__card shadow-1 radius-16">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="choose__card-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50"
                                                     viewBox="0 0 50 50" fill="none">
                                                    <path
                                                            d="M10.6453 3.75928L8.44531 5.95615L11.7188 9.22803L13.9156 7.03115L10.6453 3.75928ZM39.3563 3.75928L36.0828 7.03115L38.2812 9.22803L41.5531 5.95772L39.3563 3.75928ZM25 4.73428C24.4844 4.73844 23.9635 4.77178 23.4375 4.83428H23.3906C17.0531 5.56084 12.0094 10.6812 11.1328 16.9905C10.4328 22.0687 12.5266 26.6733 16.0156 29.639C17.4426 30.8572 18.4079 32.5285 18.75 34.3733V43.7483H22.3125C22.8562 44.6812 23.8484 45.3108 25 45.3108C26.1516 45.3108 27.1437 44.6812 27.6875 43.7483H31.25V37.4983H31.3969V35.6421C31.3969 33.3515 32.5875 31.0421 34.5219 29.2468C37.1094 26.6562 39.0625 22.9765 39.0625 18.7499C39.0625 11.0312 32.7094 4.6624 25 4.73428ZM25 7.85928C31.0391 7.7749 35.9375 12.7187 35.9375 18.7499C35.9375 22.0218 34.4219 24.903 32.3234 26.9999L32.3734 27.0499C30.2889 28.9735 28.9407 31.564 28.5609 34.3749H21.7266C21.3828 31.6968 20.2344 29.1046 18.0641 27.2452C15.3031 24.9015 13.6578 21.3702 14.2078 17.3827C14.8906 12.4608 18.8844 8.50303 23.7781 7.96084C24.1822 7.9048 24.5891 7.87142 24.9969 7.86084L25 7.85928ZM3.125 18.7499V21.8749H7.8125V18.7499H3.125ZM42.1875 18.7499V21.8749H46.875V18.7499H42.1875ZM11.7188 31.3968L8.44688 34.6671L10.6453 36.8655L13.9141 33.5937L11.7188 31.3968ZM38.2812 31.3968L36.0844 33.5937L39.3547 36.8655L41.5531 34.6671L38.2812 31.3968ZM21.875 37.4999H28.125V40.6249H21.875V37.4999Z"
                                                            fill="#212529"/>
                                                </svg>
                                            </div>

                                            <h3 class="fs-32 fw-bold text-secondary">
                                                <span>12</span>+
                                            </h3>
                                        </div>

                                        <h4 class="fs-20 fw-bold text-secondary mt-3">
                                            Years Experience
                                        </h4>

                                        <p class="fs-16 mt-2">
                                            Deep expertise in Laravel and PHP ecosystem
                                        </p>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="border-card h-100 choose__card shadow-1 radius-16">
                                        <div class="d-flex gap-3 align-items-center">
                                            <div class="choose__card-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="43"
                                                     viewBox="0 0 34 43" fill="none">
                                                    <path
                                                            d="M9.485 37.29C8.94 35.665 8.47417 34.0108 8.0875 32.3275C7.7025 30.6441 7.42167 28.9375 7.245 27.2075L3.97 29.3975C3.74667 29.5591 3.57834 29.7441 3.465 29.9525C3.35167 30.1608 3.29584 30.3925 3.2975 30.6475V39.24C3.2975 39.4 3.35334 39.5125 3.465 39.5775C3.57667 39.6425 3.6975 39.6425 3.8275 39.5775L9.485 37.29ZM16.51 3.85248C13.9967 6.74581 12.2 9.73165 11.12 12.81C10.04 15.8883 9.5 19.2483 9.5 22.89C9.5 25.4866 9.72917 27.9825 10.1875 30.3775C10.6458 32.7725 11.25 34.98 12 37H22C22.75 34.9816 23.3542 32.7741 23.8125 30.3775C24.2708 27.9808 24.5 25.485 24.5 22.89C24.5 19.2483 23.96 15.8883 22.88 12.81C21.8 9.73165 20.0033 6.74498 17.49 3.84998C17.3967 3.75665 17.3175 3.68748 17.2525 3.64248C17.1858 3.59581 17.1017 3.57248 17 3.57248C16.8983 3.57248 16.8142 3.59581 16.7475 3.64248C16.6808 3.68915 16.6017 3.75831 16.51 3.84998M17 23.25C15.945 23.25 15.0567 22.8883 14.335 22.165C13.6117 21.4433 13.25 20.555 13.25 19.5C13.25 18.445 13.6117 17.5566 14.335 16.835C15.0583 16.1133 15.9467 15.7516 17 15.75C18.0533 15.7483 18.9417 16.11 19.665 16.835C20.3883 17.5566 20.75 18.445 20.75 19.5C20.75 20.555 20.3883 21.4433 19.665 22.165C18.9417 22.8866 18.0533 23.2483 17 23.25ZM24.515 37.3375L30.1725 39.625C30.3008 39.69 30.4217 39.6816 30.535 39.6C30.6467 39.52 30.7025 39.4 30.7025 39.24V30.7C30.7025 30.4433 30.6458 30.2033 30.5325 29.98C30.4208 29.755 30.2525 29.5625 30.0275 29.4025L26.755 27.21C26.5783 28.94 26.2967 30.655 25.91 32.355C25.525 34.0533 25.06 35.7125 24.515 37.3375ZM18.4575 1.38498C21.3792 4.32165 23.5333 7.59248 24.92 11.1975C26.3067 14.8025 27 18.7883 27 23.155C27 23.3466 27.0083 23.5466 27.025 23.755C27.0417 23.9633 27.0333 24.18 27 24.405L31.3375 27.3275C31.9175 27.6891 32.3733 28.1725 32.705 28.7775C33.0367 29.3825 33.2025 30.0225 33.2025 30.6975V40.5225C33.2025 41.2391 32.9025 41.7991 32.3025 42.2025C31.7008 42.6058 31.0633 42.6725 30.39 42.4025L23.265 39.5H10.6875L3.5625 42.355C2.88917 42.625 2.26 42.5583 1.675 42.155C1.09 41.7516 0.798336 41.1925 0.800003 40.4775V30.65C0.800003 29.9766 0.957503 29.3366 1.2725 28.73C1.5875 28.125 2.035 27.6416 2.615 27.28L7 24.355V23.155C7 18.7883 7.69334 14.8025 9.08 11.1975C10.465 7.59248 12.6192 4.32165 15.5425 1.38498C15.7375 1.17665 15.9625 1.02581 16.2175 0.93248C16.4725 0.839147 16.7333 0.79248 17 0.79248C17.2667 0.79248 17.5275 0.839147 17.7825 0.93248C18.0375 1.02581 18.2625 1.17831 18.4575 1.38498Z"
                                                            fill="#212529"/>
                                                </svg>
                                            </div>

                                            <h3 class="fs-32 fw-bold text-secondary">
                                                <span>150</span>+
                                            </h3>
                                        </div>

                                        <h4 class="fs-20 fw-bold text-secondary mt-3">
                                            Projects Launched
                                        </h4>

                                        <p class="fs-16 mt-2">
                                            From startups to enterprise solutions
                                        </p>

                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="radius-16 shadow-1 border-card p-3 text-center">
                                        <img src="./assets/img/choose-banner.png" class="img-fluid" alt="">

                                        <h4 class="text-center fs-20 fw-bold text-secondary my-3">
                                            Follow industries best practices/standards
                                        </h4>

                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- ========= Why Choose Us Section End ========== -->


    <!-- ======== Work Together Section Start =========== -->
    <section class="section work-together bg-primary">

        <h3
                class="section__subtitle fw-semibold mx-auto position-absolute d-flex align-items-center justify-content-center fs-4 text-primary bg-white animated-border">

            <div class="border-effect"></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                <path
                        d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                        fill="#DC3545"/>
            </svg>

            <span>
                    Let’s Work Together
                </span>
        </h3>


        <div class="container">
            <div class="container-mini mx-auto" style="margin-top: 50px !important; margin-bottom: 50px !important;">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="work__content">
                            <h2 class="fs-3 fw-bold text-secondary">
                                Let's fix your Laravel headaches together — <span class="text-primary">for
                                        free.</span>
                            </h2>

                            <div class="work__content-list mt-3">

                                <div class="d-flex work__content-list-item mb-3 gap-3">
                                    <div class="work__content-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7"
                                             viewBox="0 0 8 7" fill="none">
                                            <path d="M1 3.5L3 5.5L6.33333 1.5" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>

                                    <p class="fs-18">
                                        30-minute consultation call
                                    </p>
                                </div>

                                <div class="d-flex work__content-list-item mb-3 gap-3">
                                    <div class="work__content-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7"
                                             viewBox="0 0 8 7" fill="none">
                                            <path d="M1 3.5L3 5.5L6.33333 1.5" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>

                                    <p class="fs-18">
                                        Actionable recommendations
                                    </p>
                                </div>


                                <div class="d-flex work__content-list-item mb-3 gap-3">
                                    <div class="work__content-item-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7"
                                             viewBox="0 0 8 7" fill="none">
                                            <path d="M1 3.5L3 5.5L6.33333 1.5" stroke="#F8F9FA" stroke-width="2"
                                                  stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>

                                    <p class="fs-18">
                                        No strings attached
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-6 pe-lg-5">

                        <div class="book__card p-4 border-card radius-16 shadow-1">
                            <h3 class="fs-5 fw-bold text-secondary">
                                Book Your Free Call
                            </h3>
                            <form action="" class="book__form mt-4">
                                <input type="email" placeholder="Enter your email">

                                <button type="submit" class="btn btn-main mt-3">Book My Free Call</button>

                            </form>

                        </div>
                    </div>
                </div>


                <div
                        class="fact bottom-to-top-anim d-md-flex gap-2 gap-lg-4 mt-3 mt-5 pt-1 pt-lg-3 flex-wrap flex-md-nowrap justify-content-center">

                    <div class="fact__item d-flex align-items-center gap-2 gap-lg-3 pe-3 pe-lg-4">
                        <div class="fact__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                 fill="none">
                                <path
                                        d="M10.6453 3.75928L8.44531 5.95615L11.7188 9.22803L13.9156 7.03115L10.6453 3.75928ZM39.3563 3.75928L36.0828 7.03115L38.2812 9.22803L41.5531 5.95772L39.3563 3.75928ZM25 4.73428C24.4844 4.73844 23.9635 4.77178 23.4375 4.83428H23.3906C17.0531 5.56084 12.0094 10.6812 11.1328 16.9905C10.4328 22.0687 12.5266 26.6733 16.0156 29.639C17.4426 30.8572 18.4079 32.5285 18.75 34.3733V43.7483H22.3125C22.8562 44.6812 23.8484 45.3108 25 45.3108C26.1516 45.3108 27.1437 44.6812 27.6875 43.7483H31.25V37.4983H31.3969V35.6421C31.3969 33.3515 32.5875 31.0421 34.5219 29.2468C37.1094 26.6562 39.0625 22.9765 39.0625 18.7499C39.0625 11.0312 32.7094 4.6624 25 4.73428ZM25 7.85928C31.0391 7.7749 35.9375 12.7187 35.9375 18.7499C35.9375 22.0218 34.4219 24.903 32.3234 26.9999L32.3734 27.0499C30.2889 28.9735 28.9407 31.564 28.5609 34.3749H21.7266C21.3828 31.6968 20.2344 29.1046 18.0641 27.2452C15.3031 24.9015 13.6578 21.3702 14.2078 17.3827C14.8906 12.4608 18.8844 8.50303 23.7781 7.96084C24.1822 7.9048 24.5891 7.87142 24.9969 7.86084L25 7.85928ZM3.125 18.7499V21.8749H7.8125V18.7499H3.125ZM42.1875 18.7499V21.8749H46.875V18.7499H42.1875ZM11.7188 31.3968L8.44688 34.6671L10.6453 36.8655L13.9141 33.5937L11.7188 31.3968ZM38.2812 31.3968L36.0844 33.5937L39.3547 36.8655L41.5531 34.6671L38.2812 31.3968ZM21.875 37.4999H28.125V40.6249H21.875V37.4999Z"
                                        fill="#212529"/>
                            </svg>
                        </div>

                        <div class="fact__item-content">
                            <h3 class="fs-5 fw-bold text-secondary">
                                <span>12</span>+
                            </h3>
                            <p>
                                Years Experience
                            </p>
                        </div>

                    </div>


                    <div class="fact__item d-flex align-items-center gap-2 gap-lg-3 pe-3 pe-lg-4">
                        <div class="fact__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60"
                                 fill="none">
                                <path
                                        d="M22.485 45.29C21.94 43.665 21.4742 42.0108 21.0875 40.3275C20.7025 38.6441 20.4217 36.9375 20.245 35.2075L16.97 37.3975C16.7467 37.5591 16.5783 37.7441 16.465 37.9525C16.3517 38.1608 16.2958 38.3925 16.2975 38.6475V47.24C16.2975 47.4 16.3533 47.5125 16.465 47.5775C16.5767 47.6425 16.6975 47.6425 16.8275 47.5775L22.485 45.29ZM29.51 11.8525C26.9967 14.7458 25.2 17.7316 24.12 20.81C23.04 23.8883 22.5 27.2483 22.5 30.89C22.5 33.4866 22.7292 35.9825 23.1875 38.3775C23.6458 40.7725 24.25 42.98 25 45H35C35.75 42.9816 36.3542 40.7741 36.8125 38.3775C37.2708 35.9808 37.5 33.485 37.5 30.89C37.5 27.2483 36.96 23.8883 35.88 20.81C34.8 17.7316 33.0033 14.745 30.49 11.85C30.3967 11.7566 30.3175 11.6875 30.2525 11.6425C30.1858 11.5958 30.1017 11.5725 30 11.5725C29.8983 11.5725 29.8142 11.5958 29.7475 11.6425C29.6808 11.6891 29.6017 11.7583 29.51 11.85M30 31.25C28.945 31.25 28.0567 30.8883 27.335 30.165C26.6117 29.4433 26.25 28.555 26.25 27.5C26.25 26.445 26.6117 25.5566 27.335 24.835C28.0583 24.1133 28.9467 23.7516 30 23.75C31.0533 23.7483 31.9417 24.11 32.665 24.835C33.3883 25.5566 33.75 26.445 33.75 27.5C33.75 28.555 33.3883 29.4433 32.665 30.165C31.9417 30.8866 31.0533 31.2483 30 31.25ZM37.515 45.3375L43.1725 47.625C43.3008 47.69 43.4217 47.6816 43.535 47.6C43.6467 47.52 43.7025 47.4 43.7025 47.24V38.7C43.7025 38.4433 43.6458 38.2033 43.5325 37.98C43.4208 37.755 43.2525 37.5625 43.0275 37.4025L39.755 35.21C39.5783 36.94 39.2967 38.655 38.91 40.355C38.525 42.0533 38.06 43.7125 37.515 45.3375ZM31.4575 9.38498C34.3792 12.3216 36.5333 15.5925 37.92 19.1975C39.3067 22.8025 40 26.7883 40 31.155C40 31.3466 40.0083 31.5466 40.025 31.755C40.0417 31.9633 40.0333 32.18 40 32.405L44.3375 35.3275C44.9175 35.6891 45.3733 36.1725 45.705 36.7775C46.0367 37.3825 46.2025 38.0225 46.2025 38.6975V48.5225C46.2025 49.2391 45.9025 49.7991 45.3025 50.2025C44.7008 50.6058 44.0633 50.6725 43.39 50.4025L36.265 47.5H23.6875L16.5625 50.355C15.8892 50.625 15.26 50.5583 14.675 50.155C14.09 49.7516 13.7983 49.1925 13.8 48.4775V38.65C13.8 37.9766 13.9575 37.3366 14.2725 36.73C14.5875 36.125 15.035 35.6416 15.615 35.28L20 32.355V31.155C20 26.7883 20.6933 22.8025 22.08 19.1975C23.465 15.5925 25.6192 12.3216 28.5425 9.38498C28.7375 9.17665 28.9625 9.02581 29.2175 8.93248C29.4725 8.83915 29.7333 8.79248 30 8.79248C30.2667 8.79248 30.5275 8.83915 30.7825 8.93248C31.0375 9.02581 31.2625 9.17831 31.4575 9.38498Z"
                                        fill="#212529"/>
                            </svg>
                        </div>

                        <div class="fact__item-content">
                            <h3 class="fs-5 fw-bold text-secondary">
                                <span>150</span>+
                            </h3>
                            <p>
                                Projects Delivered
                            </p>
                        </div>

                    </div>


                    <div class="fact__item d-flex align-items-center gap-2 gap-lg-3 pe-3 pe-lg-4">
                        <div class="fact__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
                                 fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                      d="M11.4167 3.96441C11.3691 3.72793 11.241 3.51528 11.0542 3.36273C10.8674 3.21018 10.6334 3.1272 10.3922 3.12793C10.151 3.12867 9.91755 3.21309 9.73166 3.36678C9.54577 3.52046 9.41897 3.7339 9.3729 3.97066V3.97482L9.36665 3.99566C9.339 4.13602 9.30774 4.27565 9.2729 4.4144C9.18131 4.78791 9.07498 5.15764 8.95415 5.52274C8.65207 6.4269 8.24165 7.3144 7.77082 7.78941C7.29999 8.26232 6.41665 8.67899 5.51249 8.98732C5.01218 9.15579 4.5031 9.29697 3.98749 9.41024L3.96665 9.4144C3.72898 9.46062 3.51482 9.58819 3.36101 9.77518C3.20719 9.96218 3.12332 10.1969 3.12381 10.439C3.12431 10.6812 3.20913 10.9156 3.36371 11.1019C3.51829 11.2883 3.73296 11.415 3.97082 11.4602H3.97499L3.99582 11.4665C4.13619 11.4941 4.27581 11.5254 4.41457 11.5602C4.69999 11.6311 5.09374 11.7352 5.5229 11.879C6.42707 12.1811 7.31457 12.5915 7.78957 13.0623C8.26249 13.5332 8.67915 14.4165 8.98749 15.3207C9.15596 15.821 9.29714 16.33 9.4104 16.8457L9.41457 16.8665C9.46079 17.1042 9.58836 17.3183 9.77535 17.4721C9.96234 17.626 10.1971 17.7098 10.4392 17.7093C10.6813 17.7088 10.9157 17.624 11.1021 17.4694C11.2885 17.3149 11.4152 17.1002 11.4604 16.8623V16.8582L11.4667 16.8373C11.4943 16.697 11.5256 16.5573 11.5604 16.4186C11.6312 16.1332 11.7354 15.7394 11.8792 15.3102C12.1812 14.4061 12.5917 13.5186 13.0625 13.0436C13.5333 12.5707 14.4167 12.154 15.3208 11.8457C15.8211 11.6772 16.3302 11.536 16.8458 11.4227L16.8667 11.4186C17.1043 11.3724 17.3185 11.2448 17.4723 11.0578C17.6261 10.8708 17.71 10.6361 17.7095 10.3939C17.709 10.1518 17.6242 9.91741 17.4696 9.73105C17.315 9.54468 17.1004 9.41798 16.8625 9.37274H16.8583L16.8375 9.36649C16.6971 9.33884 16.5575 9.30758 16.4187 9.27274C16.0452 9.18114 15.6755 9.07481 15.3104 8.95399C14.4062 8.6519 13.5187 8.24149 13.0437 7.77066C12.5708 7.29982 12.1542 6.41649 11.8458 5.51232C11.6774 5.01202 11.5362 4.50294 11.4229 3.98732L11.4167 3.96441ZM13.325 10.4061C12.6937 10.1102 12.0604 9.72899 11.575 9.24774C11.0917 8.76857 10.7083 8.13732 10.4083 7.50816C10.1104 8.13941 9.72915 8.77274 9.2479 9.25815C8.76874 9.74149 8.13749 10.1248 7.50832 10.4248C8.13957 10.7227 8.7729 11.104 9.25832 11.5852C9.74165 12.0644 10.125 12.6957 10.425 13.3248C10.7229 12.6936 11.1042 12.0602 11.5854 11.5748C12.0646 11.0915 12.6958 10.7061 13.325 10.4061ZM39.5833 6.77065C39.9977 6.77065 40.3952 6.93527 40.6882 7.2283C40.9812 7.52133 41.1458 7.91875 41.1458 8.33316V8.85399H41.6667C42.0811 8.85399 42.4785 9.01861 42.7715 9.31163C43.0645 9.60466 43.2292 10.0021 43.2292 10.4165C43.2292 10.8309 43.0645 11.2283 42.7715 11.5213C42.4785 11.8144 42.0811 11.979 41.6667 11.979H41.1458V12.4998C41.1458 12.9142 40.9812 13.3117 40.6882 13.6047C40.3952 13.8977 39.9977 14.0623 39.5833 14.0623C39.1689 14.0623 38.7715 13.8977 38.4785 13.6047C38.1854 13.3117 38.0208 12.9142 38.0208 12.4998V11.979H37.5C37.0856 11.979 36.6882 11.8144 36.3951 11.5213C36.1021 11.2283 35.9375 10.8309 35.9375 10.4165C35.9375 10.0021 36.1021 9.60466 36.3951 9.31163C36.6882 9.01861 37.0856 8.85399 37.5 8.85399H38.0208V8.33316C38.0208 7.91875 38.1854 7.52133 38.4785 7.2283C38.7715 6.93527 39.1689 6.77065 39.5833 6.77065ZM24.975 12.8748C24.2896 13.7707 23.5125 15.1561 22.3646 17.2123L21.7854 18.254L21.6729 18.454C21.1521 19.3977 20.6771 20.2498 19.9125 20.829C19.1375 21.4186 18.1958 21.629 17.175 21.8582L16.9583 21.9061L15.8333 22.1623C13.6 22.6665 12.1104 23.0082 11.0937 23.4082C10.1083 23.7977 9.97707 24.0852 9.92707 24.2457C9.87082 24.4248 9.82707 24.7707 10.4167 25.7102C11.0208 26.6665 12.0417 27.8665 13.5583 29.6415L14.3271 30.5394L14.4687 30.7061C15.1729 31.5248 15.7979 32.2561 16.0875 33.1811C16.3729 34.1019 16.2771 35.0644 16.1708 36.1602L16.15 36.3811L16.0312 37.5811C15.8021 39.9457 15.6521 41.5519 15.7021 42.6998C15.7542 43.8457 15.9937 44.079 16.1042 44.1644C16.1896 44.229 16.4208 44.3977 17.4458 44.1019C18.4917 43.804 19.8917 43.1644 21.9812 42.2019L23.0354 41.7165L23.2437 41.6207C24.1917 41.1832 25.075 40.7727 26.0417 40.7727C27.0083 40.7727 27.8917 41.1811 28.8417 41.6207L29.0479 41.7165L30.1021 42.2019C32.1917 43.1644 33.5917 43.804 34.6375 44.104C35.6625 44.3957 35.8937 44.229 35.9792 44.1644C36.0896 44.0811 36.3292 43.8477 36.3812 42.6998C36.4333 41.5519 36.2812 39.9457 36.05 37.5811L35.9354 36.3811L35.9146 36.1582C35.8062 35.0644 35.7104 34.1019 35.9979 33.1811C36.2854 32.2561 36.9104 31.5248 37.6146 30.7061L37.7562 30.5394L38.525 29.6415C40.0437 27.8665 41.0646 26.6665 41.6667 25.7102C42.2583 24.7707 42.2125 24.4248 42.1562 24.2457C42.1062 24.0852 41.975 23.7977 40.9896 23.4082C39.9729 23.0082 38.4833 22.6665 36.2521 22.1623L35.125 21.9061L34.9083 21.8582C33.8875 21.629 32.9458 21.4186 32.1708 20.8311C31.4062 20.2477 30.9333 19.3977 30.4104 18.4561L30.2979 18.254L29.7187 17.2123C28.5729 15.1561 27.7937 13.7686 27.1083 12.8748C26.4229 11.9811 26.1292 11.979 26.0417 11.979C25.9542 11.979 25.6583 11.9832 24.975 12.8748ZM22.4937 10.9748C23.35 9.85607 24.4521 8.85399 26.0417 8.85399C27.6292 8.85399 28.7333 9.85607 29.5896 10.9748C30.4312 12.0727 31.3187 13.6623 32.3854 15.579L33.0271 16.7332C33.7333 17.9977 33.8854 18.2082 34.0604 18.3415C34.2271 18.4665 34.4417 18.5498 35.8146 18.8582L37.0708 19.1436C39.1375 19.6102 40.8687 20.0019 42.1333 20.5019C43.4562 21.0227 44.6729 21.8144 45.1396 23.3186C45.6042 24.8061 45.075 26.1602 44.3104 27.3748C43.5708 28.5477 42.3979 29.9227 40.9833 31.5748L40.1312 32.5707C39.2042 33.6561 39.0521 33.8769 38.9812 34.1102C38.9062 34.3477 38.9042 34.6332 39.0437 36.0811L39.1729 37.404C39.3875 39.6123 39.5646 41.4415 39.5021 42.8415C39.4396 44.2665 39.1125 45.7082 37.8687 46.654C36.5979 47.6186 35.1292 47.4957 33.7771 47.1082C32.4708 46.7332 30.8521 45.9873 28.9167 45.0977L27.7417 44.5561C26.45 43.9623 26.2333 43.8977 26.0417 43.8977C25.85 43.8977 25.6333 43.9602 24.3417 44.5561L23.1667 45.0977C21.2292 45.9873 19.6125 46.7332 18.3062 47.1082C16.9542 47.4957 15.4854 47.6186 14.2146 46.654C12.9708 45.7082 12.6437 44.2665 12.5812 42.8415C12.5187 41.4415 12.6958 39.6123 12.9104 37.404L13.0375 36.0811C13.1792 34.6332 13.1771 34.3498 13.1021 34.1102C13.0312 33.8769 12.8792 33.6561 11.9521 32.5707L11.1 31.5748C9.68749 29.9227 8.51249 28.5477 7.7729 27.3748C7.00832 26.1602 6.48124 24.8061 6.94374 23.3186C7.4104 21.8123 8.62707 21.0227 9.9479 20.5019C11.2146 20.0019 12.9458 19.6102 15.0125 19.1436L16.2687 18.8582C17.6417 18.5477 17.8583 18.4665 18.0229 18.3415C18.1979 18.2082 18.35 17.9977 19.0562 16.7332L19.6979 15.579C20.7667 13.6623 21.6521 12.0727 22.4937 10.9748Z"
                                      fill="#212529"/>
                            </svg>
                        </div>

                        <div class="fact__item-content">
                            <h3 class="fs-5 fw-bold text-secondary">
                                <span>25</span>k
                            </h3>
                            <p>
                                GitHub Stars
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- ======== Work Together Section End =========== -->


    <!-- ========= Testimonial Section Start ======== -->
    <section class="testimonial section">
        <div class="container">
            <div class="testimonial-container">
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->

                        <div class="swiper-slide">

                            <div class="testimonial__slide shadow-1 border-card m-3 m-lg-4">
                                <div class="d-flex align-items-start testimonial__content">
                                    <div>
                                        <span class="testimonial__icon">"</span>
                                    </div>

                                    <p class="p-3 fs-32">
                                        “John transformed our Laravel app from a <span
                                                class="fw-bold text-secondary">slow, buggy mess</span> into a <span
                                                class="fw-bold text-secondary">high-performance system</span> in just
                                        weeks.”
                                    </p>
                                </div>


                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <div>
                                        <h4 class="fw-bold testimonial__author-title text-secondary">
                                            Sarah Chen
                                        </h4>

                                        <p class="testimonial__author-tag">
                                            CTO, TechFlow
                                        </p>
                                    </div>

                                    <div class="p-2">
                                        <button class="fs-5 fw-bold testimonial__btn">
                                            5x faster
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="swiper-slide">

                            <div class="testimonial__slide shadow-1 border-card m-3 m-lg-4">
                                <div class="d-flex align-items-start testimonial__content">
                                    <div>
                                        <span class="testimonial__icon">"</span>
                                    </div>

                                    <p class="p-3 fs-32">
                                        “John transformed our Laravel app from a <span
                                                class="fw-bold text-secondary">slow, buggy mess</span> into a <span
                                                class="fw-bold text-secondary">high-performance system</span> in just
                                        weeks.”
                                    </p>
                                </div>


                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <div>
                                        <h4 class="fw-bold text-secondary">
                                            Sarah Chen
                                        </h4>

                                        <p>
                                            CTO, TechFlow
                                        </p>
                                    </div>

                                    <div class="p-2">
                                        <button class="fs-5 fw-bold testimonial__btn">
                                            5x faster
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>


                        <div class="swiper-slide">

                            <div class="testimonial__slide shadow-1 border-card m-3 m-lg-4">
                                <div class="d-flex align-items-start testimonial__content">
                                    <div>
                                        <span class="testimonial__icon">"</span>
                                    </div>

                                    <p class="p-3 fs-32">
                                        “John transformed our Laravel app from a <span
                                                class="fw-bold text-secondary">slow, buggy mess</span> into a <span
                                                class="fw-bold text-secondary">high-performance system</span> in just
                                        weeks.”
                                    </p>
                                </div>


                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <div>
                                        <h4 class="fw-bold text-secondary">
                                            Sarah Chen
                                        </h4>

                                        <p>
                                            CTO, TechFlow
                                        </p>
                                    </div>

                                    <div class="p-2">
                                        <button class="fs-5 fw-bold testimonial__btn">
                                            5x faster
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>


                    <div
                            class="testimonial__control mt-4 mt-lg-5 d-flex align-items-center justify-content-center gap-2">

                        <div class="testimonial__prev  d-flex align-items-center justify-content-center">
                            <i class="ri-arrow-left-line"></i>

                        </div>

                        <div>
                            <div class="swiper-pagination position-relative"></div>
                        </div>

                        <div class="testimonial__next active d-flex align-items-center justify-content-center">
                            <i class="ri-arrow-right-line"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row text-center px-3">
                <div
                        class="cta d-lg-flex mx-auto align-items-center justify-content-center border-card radius-16 flex-wrap bottom-to-top-anim">
                    <img src="./assets/img/office.png" alt="" class="cta__img">

                    <p class="mt-3 mt-lg-0">
                        join <span class="text-secondary fw-bold">50+ companies</span> who improved their Laravel
                        applications
                    </p>

                    <button class="btn btn-main cta__btn mt-3 mt-lg-0">Book Your Free Call</button>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Testimonial Section End ======== -->


    <!-- ========= Faq Section Start ========== -->
    <section class="section faq faq--section position-relative overflow-hidden">
        <div class="container">
            <h3
                    class="section__subtitle section__subtitle-2 fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        Still Have Questions?
                    </span>
            </h3>

            <div class="faq__title">
                <h2
                        class="section__title fs-3 fw-bold text-hea text-center mt-3 mt-lg-5 pt-2 pt-lg-3 mb-2 mb-lg-3 bottom-to-top-anim">
                    Common Questions
                </h2>
                <p>Everything you need to know about the free consultation</p>
            </div>

            <div class="faq__wrapper position-relative">

                <div class="faq__content mb-4 mb-lg-5">
                    <div class="accordion faq" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header ">
                                <button class="accordion-button fs-5 text-secondary fw-bold" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                    What happens after I submit my email?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        After you submit your email, Laravel processes your request depending on the
                                        context: <br>
                                        1. Email Verification – You'll receive a confirmation link to activate your
                                        account. <br>
                                        2. Password Reset – You'll get an email with a reset link that expires after
                                        a
                                        certain time. <br>
                                        3. Notifications – Your message will be sent to the designated recipient.
                                        <br>
                                        If you don’t receive an email, check your spam folder or ensure your email
                                        is correct.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                    Is the consultancy really free?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        After you submit your email, Laravel processes your request depending on the
                                        context: <br>
                                        1. Email Verification – You'll receive a confirmation link to activate your
                                        account. <br>
                                        2. Password Reset – You'll get an email with a reset link that expires after
                                        a
                                        certain time. <br>
                                        3. Notifications – Your message will be sent to the designated recipient.
                                        <br>
                                        If you don’t receive an email, check your spam folder or ensure your email
                                        is correct.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    What kind of projects do you work with?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        After you submit your email, Laravel processes your request depending on the
                                        context: <br>
                                        1. Email Verification – You'll receive a confirmation link to activate your
                                        account. <br>
                                        2. Password Reset – You'll get an email with a reset link that expires after
                                        a
                                        certain time. <br>
                                        3. Notifications – Your message will be sent to the designated recipient.
                                        <br>
                                        If you don’t receive an email, check your spam folder or ensure your email
                                        is correct.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                    How long does the call last?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        After you submit your email, Laravel processes your request depending on the
                                        context: <br>
                                        1. Email Verification – You'll receive a confirmation link to activate your
                                        account. <br>
                                        2. Password Reset – You'll get an email with a reset link that expires after
                                        a
                                        certain time. <br>
                                        3. Notifications – Your message will be sent to the designated recipient.
                                        <br>
                                        If you don’t receive an email, check your spam folder or ensure your email
                                        is correct.
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-5 text-secondary fw-bold collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                    Do you sign NDAs?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        After you submit your email, Laravel processes your request depending on the
                                        context: <br>
                                        1. Email Verification – You'll receive a confirmation link to activate your
                                        account. <br>
                                        2. Password Reset – You'll get an email with a reset link that expires after
                                        a
                                        certain time. <br>
                                        3. Notifications – Your message will be sent to the designated recipient.
                                        <br>
                                        If you don’t receive an email, check your spam folder or ensure your email
                                        is correct.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="faq__bottom text-center">
                    <div class="cardBox d-sm-flex">
                        <div class="cardBox__content">
                            <p>Can't find what you're looking for?</p>
                        </div>
                        <a href="#" class="btn btn-main btn--sm mt-3 mt-sm-0">
                            Ask Your Question
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= Faq Section End ========== -->

    <!-- ========= News letter Section Start ========== -->
    <section class="section newsletter newsletter--section bg-primary ">
        <div class="container">
            <h3
                    class="section__subtitle fw-semibold mx-auto position-relative d-flex align-items-center justify-content-center  mx-auto fs-4 text-primary bg-white animated-border">

                <div class="border-effect"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="37" viewBox="0 0 35 37" fill="none">
                    <path
                            d="M34.2745 8.67189C34.2873 8.7197 34.2938 8.76901 34.2938 8.81859V16.5241C34.2938 16.7255 34.188 16.9114 34.0161 17.0115L27.6561 20.7353V28.1155C27.6561 28.2143 27.6306 28.3114 27.5821 28.3969C27.5337 28.4824 27.4639 28.5536 27.3799 28.6031L14.1033 36.3747C14.0729 36.3921 14.0398 36.4033 14.0066 36.4154C13.9942 36.4195 13.9825 36.4272 13.9694 36.4308C13.8766 36.4556 13.779 36.4556 13.6862 36.4308C13.6709 36.4267 13.6571 36.4181 13.6427 36.4126C13.6122 36.4012 13.5805 36.3915 13.5516 36.3747L0.2777 28.6029C0.19335 28.5537 0.123262 28.4827 0.0745061 28.3972C0.0257499 28.3116 5.028e-05 28.2144 0 28.1155V4.99892C0 4.94825 0.00696594 4.89908 0.0192903 4.8514C0.0234431 4.8352 0.0330882 4.82048 0.0387145 4.80427C0.0490295 4.77485 0.0588086 4.7446 0.0739461 4.71723C0.084261 4.69897 0.0993985 4.68426 0.111857 4.66737C0.127798 4.64489 0.142266 4.62174 0.160886 4.60199C0.176828 4.58592 0.197591 4.57393 0.215542 4.5599C0.235636 4.54301 0.253453 4.52475 0.276226 4.5114L6.91409 0.625668C6.99814 0.576484 7.09341 0.550598 7.19039 0.550598C7.28736 0.550598 7.38263 0.576484 7.46668 0.625668L14.1039 4.5114H14.1052C14.1273 4.52557 14.1461 4.54301 14.166 4.55921C14.184 4.57324 14.2041 4.58592 14.2199 4.60144C14.2393 4.62174 14.2531 4.64503 14.2696 4.66737C14.2814 4.68426 14.2973 4.69897 14.307 4.71723C14.3228 4.74529 14.3317 4.77485 14.3429 4.8044C14.3484 4.82048 14.358 4.8352 14.3622 4.85209C14.3749 4.8999 14.3814 4.94935 14.3816 4.99892V19.4371L19.9123 16.1988V8.81791C19.9123 8.76888 19.9192 8.71888 19.9317 8.67189C19.9365 8.65499 19.9455 8.64029 19.951 8.62421C19.9621 8.59466 19.9717 8.56427 19.9869 8.53704C19.9972 8.51878 20.0123 8.50407 20.0243 8.48718C20.0407 8.4647 20.0545 8.44154 20.0738 8.42179C20.0899 8.40572 20.1099 8.39373 20.1278 8.3797C20.1486 8.36281 20.1665 8.34456 20.1886 8.33121L26.8272 4.44547C26.9112 4.39622 27.0065 4.3703 27.1035 4.3703C27.2004 4.3703 27.2957 4.39622 27.3797 4.44547L34.0169 8.33121C34.0404 8.34524 34.0583 8.36281 34.0791 8.37888C34.0962 8.39305 34.1163 8.40572 34.1323 8.42111C34.1516 8.44154 34.1654 8.4647 34.1818 8.48718C34.1944 8.50407 34.2096 8.51878 34.2194 8.53704C34.2352 8.56427 34.2441 8.59466 34.2551 8.62421C34.2614 8.64029 34.2704 8.65499 34.2745 8.67189ZM33.1875 16.199V9.79133L30.8647 11.1509L27.656 13.0296V19.4372L33.1875 16.199ZM26.5503 27.7904V21.3782L23.3939 23.2113L14.3809 28.4421V34.9143L26.5503 27.7904ZM1.10638 5.97152V27.7904L13.2744 34.9137V28.4428L6.91771 24.7845L6.9157 24.7831L6.91302 24.7817C6.89159 24.7691 6.8735 24.7509 6.85354 24.7355C6.83613 24.7213 6.81617 24.7101 6.80103 24.6945L6.79969 24.6925C6.78174 24.6749 6.76928 24.6532 6.75414 24.6335C6.74021 24.6145 6.72374 24.5984 6.71262 24.5788L6.71195 24.5766C6.69949 24.5556 6.69185 24.5303 6.68288 24.5065C6.6739 24.4853 6.66225 24.4656 6.65662 24.4432C6.64979 24.4166 6.64845 24.3877 6.64564 24.3603C6.64296 24.3394 6.63733 24.3182 6.63733 24.2971V9.20994L3.42912 7.33042L1.10638 5.97152ZM7.19112 1.76199L1.66097 4.99892L7.18978 8.23572L12.7191 4.99811L7.18978 1.76199H7.19112ZM10.067 21.9627L13.2751 20.0848V5.97152L10.9526 7.33124L7.74358 9.20981V23.323L10.067 21.9627ZM27.1034 5.5818L21.574 8.81859L27.1034 12.0555L32.6321 8.81791L27.1034 5.5818ZM26.5501 13.0296L23.3414 11.1509L21.0188 9.79133V16.199L24.2269 18.077L26.5503 19.4372L26.5501 13.0296ZM13.827 27.4695L21.9373 22.7613L25.9915 20.4085L20.4662 17.1738L14.1045 20.8979L8.30648 24.2922L13.827 27.4695Z"
                            fill="#DC3545"/>
                </svg>

                <span>
                        Ready to Get Started?
                    </span>
            </h3>

            <div class="newsletter__wrapper position-relative">
                <img src="assets/img/icons-img/newsletter-obj.svg" class="newsletter-obj-1 position-absolute"
                     alt="">
                <img src="assets/img/icons-img/newsletter-obj.svg" class="newsletter-obj-2 position-absolute"
                     alt="">
                <div class="newsletter__content">
                    <h2 class="bottom-to-top-anim">These problems are common for you:</h2>
                    <p>Slow database queries</p>
                    <a href="" class="btn btn-main">Get Your Free Laravel Audit</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ========= News letter Section End ========== -->

</main>
<!-- ====== Main Area End ======= -->


<!-- ========= Footer Section Start ========== -->
<footer class="footer footer--section">
    <div class="footer__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Quick Links</h4>
                        <ul class="footer__menu">
                            <li>
                                <a href="">Schedule Consultation</a>
                            </li>
                            <li>
                                <a href="">Hire My Services</a>
                            </li>
                            <li>
                                <a href="">View Success Stories</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-4 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Services</h4>
                        <ul class="footer__menu">
                            <li>
                                <a href="">Code Audit</a>
                            </li>
                            <li>
                                <a href="">Performance Optimization</a>
                            </li>
                            <li>
                                <a href="">Architecture Review</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-4 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Connect</h4>
                        <ul class="footer__menu">
                            <li>
                                <a href="">hello@example.com</a>
                            </li>
                            <li>
                                <a href="">GitHub</a>
                            </li>
                            <li>
                                <a href="">Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                    <div class="footer__widget">
                        <h4>Newsletter</h4>
                        <div class="footer__newsletter">
                            <p>Get Laravel tips and insights directly to your inbox</p>
                            <form action="">
                                <input type="text" placeholder="Enter your email">
                                <button type="submit" class="submit" data-toggle="tooltip" data-placement="top"
                                        title="Send">
                                    <svg width="23" height="18" viewBox="0 0 23 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 9L8.875 17L22 1" stroke="#F8F9FA" stroke-width="2"
                                              stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>

                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                            class="footer__bottom-wrapper d-sm-flex align-items-center justify-content-between text-center text-md-start">
                        <p>© 2025 Laravel Expert. All rights reserved.</p>
                        <ul
                                class="footer__bottom-menu mt-1 mt-lg-0 d-flex align-items-center justify-content-center justify-content-md-start">
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Terms of Service</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ========= Footer Section End ========== -->


<!-- ============  Vertically centered modal ==============-->

<x-modal-help-me-now/>
<x-modal-send-question/>

<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/plugin.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"
        integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"
        integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Odometer -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js"></script>

<!-- <script src="assets/js/split-type.js"></script> -->
<script src="assets/js/mygsap.js"></script>

</body>

</html>