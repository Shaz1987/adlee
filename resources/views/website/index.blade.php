<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{ asset('css/website/style.css') }}">
    <link rel="stylesheet" id="wp-block-navigation-css" href="{{ asset('css/website/wp_style.min.css') }}"
        media="all" />
    <link rel="stylesheet" id="wp-block-cover-css" href="{{ asset('css/website/cover.min.css') }}" media="all" />
    <link rel="stylesheet" href="{{ asset('css/website/editor-frontend.css') }}" media="all" />
    <link rel="stylesheet" id="jet-engine-frontend-css" href="{{ asset('css/website/frontend.css') }}" media="all" />
    <link rel="stylesheet" id="jet-engine-frontend-css" href="{{ asset('css/website/global.css') }}" media="all" />
    <link rel="stylesheet" id="jet-engine-frontend-css" href="{{ asset('css/website/core.css') }}" media="all" />
    <link rel="stylesheet" id="jet-engine-frontend-css" href="{{ asset('css/website/inline.css') }}" media="all" />
    <link rel="stylesheet" id="jet-engine-frontend-css" href="{{ asset('css/website/index.css') }}" media="all" />
    <link rel="stylesheet" id="pmpro_frontend-css" href="{{ asset('css/website/frontend2.css') }}" media="screen" />
    <link rel="stylesheet" id="pmpro_print-css" href="{{ asset('css/website/print.css') }}" media="print" />
    <link rel="stylesheet" id="variations-frontend-style-css" href="{{ asset('css/website/frontend3.css') }}"
        media="all" />
    <link rel="stylesheet" id="variations-frontend-style-css" href="{{ asset('css/website/local.css') }}"
        media="all" />
</head>

<body class="home blog wp-embed-responsive elementor-default elementor-kit-135">
    <div class="wp-site-blocks">

        <header class="wp-block-template-part">

            <div class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-2 wp-block-group-is-layout-constrained"
                style="margin-top:0;margin-bottom:0;padding-top:2rem;padding-right:1rem;padding-bottom:2rem;padding-left:1rem">

                <div class="wp-block-columns is-not-stacked-on-mobile is-layout-flex wp-container-core-columns-is-layout-1 wp-block-columns-is-layout-flex"
                    style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">

                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow"
                        style="flex-basis:30%">

                        <figure class="wp-block-image size-large is-resized">
                            <a href="{{ route('homepage') }}">
                                <img fetchpriority="high" fetchpriority="high" decoding="async" width="1024"
                                    height="239" src="images/ADLEE-LOGO-1-1024x239.png" alt=""
                                    class="wp-image-40" style="width:auto;height:50px"
                                    srcset="images/ADLEE-LOGO-1-1024x239.png 1024w, images/ADLEE-LOGO-1-1024x239.png 300w, images/ADLEE-LOGO-1-1024x239.png 1024w, images/ADLEE-LOGO-1-1024x239.png 768w, images/ADLEE-LOGO-1-1024x239.png 1024w, images/ADLEE-LOGO-1-1024x239.png 1250w"
                                    sizes="(max-width: 1024px) 100vw, 1024px" /></a>
                        </figure>
                    </div>



                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-container-core-column-is-layout-2 wp-block-column-is-layout-flow"
                        style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;flex-basis:70%">

                        <div
                            class="wp-block-group is-content-justification-right is-nowrap is-layout-flex wp-container-core-group-is-layout-1 wp-block-group-is-layout-flex">
                            <nav style="color: #03081e; font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);font-style:normal;font-weight:400;"
                                class="has-text-color is-responsive items-justified-center wp-block-navigation is-content-justification-center is-layout-flex wp-container-core-navigation-is-layout-1 wp-block-navigation-is-layout-flex"
                                aria-label="Navigation" data-wp-interactive="core/navigation"
                                data-wp-context="{&quot;overlayOpenedBy&quot;:{&quot;click&quot;:false,&quot;hover&quot;:false,&quot;focus&quot;:false},&quot;type&quot;:&quot;overlay&quot;,&quot;roleAttribute&quot;:&quot;&quot;,&quot;ariaLabel&quot;:&quot;Menu&quot;}">

                                <button aria-haspopup="dialog" aria-label="Open menu"
                                    class="wp-block-navigation__responsive-container-open "
                                    data-wp-on--click="actions.openMenuOnClick"
                                    data-wp-on--keydown="actions.handleMenuKeydown"><svg width="24" height="24"
                                        xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                        <path d="M5 5v1.5h14V5H5zm0 7.8h14v-1.5H5v1.5zM5 19h14v-1.5H5V19z" />
                                    </svg></button>

                                <div class="wp-block-navigation__responsive-container  has-text-color has-background has-white-background-color"
                                    style="color: #03081e" id="modal-1"
                                    data-wp-class--has-modal-open="state.isMenuOpen"
                                    data-wp-class--is-menu-open="state.isMenuOpen" data-wp-watch="callbacks.initMenu"
                                    data-wp-on--keydown="actions.handleMenuKeydown"
                                    data-wp-on--focusout="actions.handleMenuFocusout" tabindex="-1">
                                    <div class="wp-block-navigation__responsive-close" tabindex="-1">
                                        <div class="wp-block-navigation__responsive-dialog"
                                            data-wp-bind--aria-modal="state.ariaModal"
                                            data-wp-bind--aria-label="state.ariaLabel"
                                            data-wp-bind--role="state.roleAttribute">
                                            <button aria-label="Close menu"
                                                class="wp-block-navigation__responsive-container-close"
                                                data-wp-on--click="actions.closeMenuOnClick"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24"
                                                    width="24" height="24" aria-hidden="true"
                                                    focusable="false">
                                                    <path
                                                        d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z">
                                                    </path>
                                                </svg></button>
                                            <div class="wp-block-navigation__responsive-container-content"
                                                data-wp-watch="callbacks.focusFirstElement" id="modal-1-content">
                                                <ul style="color: #03081e; font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);font-style:normal;font-weight:400;"
                                                    class="wp-block-navigation__container has-text-color is-responsive items-justified-center wp-block-navigation">
                                                    <li data-wp-context="{ &quot;submenuOpenedBy&quot;: { &quot;click&quot;: false, &quot;hover&quot;: false, &quot;focus&quot;: false }, &quot;type&quot;: &quot;submenu&quot; }"
                                                        data-wp-interactive="core/navigation"
                                                        data-wp-on--focusout="actions.handleMenuFocusout"
                                                        data-wp-on--keydown="actions.handleMenuKeydown"
                                                        data-wp-on--mouseenter="actions.openMenuOnHover"
                                                        data-wp-on--mouseleave="actions.closeMenuOnHover"
                                                        data-wp-watch="callbacks.initMenu" tabindex="-1"
                                                        style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                        class=" wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu">
                                                        <a class="wp-block-navigation-item__content"
                                                            href="adlee.io/login/">Log In</a><button
                                                            data-wp-bind--aria-expanded="state.isMenuOpen"
                                                            data-wp-on--click="actions.toggleMenuOnClick"
                                                            aria-label="Log In submenu"
                                                            class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" viewbox="0 0 12 12" fill="none"
                                                                aria-hidden="true" focusable="false">
                                                                <path d="M1.50002 4L6.00002 8L10.5 4"
                                                                    stroke-width="1.5"></path>
                                                            </svg></button>
                                                        <ul data-wp-on--focus="actions.openMenuOnFocus"
                                                            style="color:#03081e;"
                                                            class="wp-block-navigation__submenu-container has-text-color has-background has-white-background-color wp-block-navigation-submenu">
                                                            <li style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                                class=" wp-block-navigation-item wp-block-navigation-link">
                                                                <a class="wp-block-navigation-item__content"
                                                                    href="{{ route('login') }}"><span
                                                                        class="wp-block-navigation-item__label">Sponsor
                                                                        Login</span></a>
                                                            </li>
                                                            <li style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                                class=" wp-block-navigation-item wp-block-navigation-link">
                                                                <a class="wp-block-navigation-item__content"
                                                                    href="{{ route('login') }}"><span
                                                                        class="wp-block-navigation-item__label">Ad
                                                                        Space Owner Login</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li data-wp-context="{ &quot;submenuOpenedBy&quot;: { &quot;click&quot;: false, &quot;hover&quot;: false, &quot;focus&quot;: false }, &quot;type&quot;: &quot;submenu&quot; }"
                                                        data-wp-interactive="core/navigation"
                                                        data-wp-on--focusout="actions.handleMenuFocusout"
                                                        data-wp-on--keydown="actions.handleMenuKeydown"
                                                        data-wp-on--mouseenter="actions.openMenuOnHover"
                                                        data-wp-on--mouseleave="actions.closeMenuOnHover"
                                                        data-wp-watch="callbacks.initMenu" tabindex="-1"
                                                        style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                        class=" wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu">
                                                        <a class="wp-block-navigation-item__content"
                                                            href="https://adlee.io/membership-account/">Memberships</a><button
                                                            data-wp-bind--aria-expanded="state.isMenuOpen"
                                                            data-wp-on--click="actions.toggleMenuOnClick"
                                                            aria-label="Memberships submenu"
                                                            class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="12"
                                                                height="12" viewbox="0 0 12 12" fill="none"
                                                                aria-hidden="true" focusable="false">
                                                                <path d="M1.50002 4L6.00002 8L10.5 4"
                                                                    stroke-width="1.5"></path>
                                                            </svg></button>
                                                        <ul data-wp-on--focus="actions.openMenuOnFocus"
                                                            style="color:#03081e;"
                                                            class="wp-block-navigation__submenu-container has-text-color has-background has-white-background-color wp-block-navigation-submenu">
                                                            <li style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                                class=" wp-block-navigation-item wp-block-navigation-link">
                                                                <a class="wp-block-navigation-item__content"
                                                                    href="https://adlee.io/membership-account/membership-checkout/?level=2"><span
                                                                        class="wp-block-navigation-item__label">Sponsor</span></a>
                                                            </li>
                                                            <li style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                                class=" wp-block-navigation-item wp-block-navigation-link">
                                                                <a class="wp-block-navigation-item__content"
                                                                    href="{{ route('pricing') }}"><span
                                                                        class="wp-block-navigation-item__label">Pricing</span></a>
                                                            </li>
                                                            <li style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                                class=" wp-block-navigation-item wp-block-navigation-link">
                                                                <a class="wp-block-navigation-item__content"
                                                                    href="https://adlee.io/membership-account/membership-checkout/?level=1"><span
                                                                        class="wp-block-navigation-item__label">Ad
                                                                        Space Owners</span></a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li style="font-size: clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.409), 1.1rem);"
                                                        class=" wp-block-navigation-item wp-block-navigation-link"><a
                                                            class="wp-block-navigation-item__content"
                                                            href="https://technologysuite.tapfiliate.com/"><span
                                                                class="wp-block-navigation-item__label">Sign Up –
                                                                Affiliates</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <div class="wp-block-cover alignfull is-light" style="padding-top:2%;min-height:691px;aspect-ratio:unset;">
            <span aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img width="1800"
                height="900" class="wp-block-cover__image-background wp-image-473" alt=""
                src="images/Adlee-Banner-08.png" data-object-fit="cover"
                srcset="images/Adlee-Banner-08.png 1800w, images/Adlee-Banner-08.png 300w, images/Adlee-Banner-08.png 1024w, images/Adlee-Banner-08.png 768w, images/Adlee-Banner-08.png 1536w"
                sizes="(max-width: 1800px) 100vw, 1800px" />
            <div
                class="wp-block-cover__inner-container has-global-padding is-layout-constrained wp-container-core-cover-is-layout-1 wp-block-cover-is-layout-constrained">
                <div class="wp-block-group alignwide is-vertical is-content-justification-center is-layout-flex wp-container-core-group-is-layout-4 wp-block-group-is-layout-flex"
                    style="min-height:35rem">
                    <div
                        class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-3 wp-block-group-is-layout-constrained">
                        <div style="height:198px" aria-hidden="true" class="wp-block-spacer"></div>



                        <h3 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                            style="color:#07277c;margin-bottom:1rem;font-size:clamp(2.071rem, 2.071rem + ((1vw - 0.2rem) * 2.98), 3.71rem);font-style:normal;font-weight:400;line-height:1">
                            <strong><mark style="background-color:rgba(0, 0, 0, 0)"
                                    class="has-inline-color has-white-color">Sponsor With Ease</mark></strong>
                        </h3>
                    </div>
                </div>
            </div>
        </div>



        <div class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-5 wp-block-group-is-layout-constrained"
            style="padding-top:5.01rem;padding-bottom:4.01rem">
            <div
                class="wp-block-columns is-not-stacked-on-mobile is-layout-flex wp-container-core-columns-is-layout-2 wp-block-columns-is-layout-flex">
                <div class="wp-block-column has-global-padding is-layout-constrained wp-container-core-column-is-layout-3 wp-block-column-is-layout-constrained"
                    style="border-right-color:#7b90bd;border-right-width:2px;padding-right:1rem;padding-left:1rem">
                    <h6 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                        style="color:#07277c;margin-bottom:0.51rem;font-size:clamp(1.517rem, 1.517rem + ((1vw - 0.2rem) * 1.842), 2.53rem);font-style:normal;font-weight:600;line-height:1.3;text-transform:capitalize">
                        75%</h6>



                    <p class="has-text-align-center has-text-color has-work-sans-regular-font-family"
                        style="color:#212121;margin-top:0px;margin-bottom:1.77rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.064), 0.91rem);font-style:normal;font-weight:500;line-height:1.5">
                        of surveyed Sponsors shared dissatisfaction with timely invoices for their paid sponsorships and
                        advertisements.</p>
                </div>



                <div class="wp-block-column has-global-padding is-layout-constrained wp-container-core-column-is-layout-4 wp-block-column-is-layout-constrained"
                    style="border-right-color:#7b90bd;border-right-width:2px;padding-right:1rem;padding-left:1rem">
                    <h6 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                        style="color:#07277c;margin-bottom:0.51rem;font-size:clamp(1.517rem, 1.517rem + ((1vw - 0.2rem) * 1.842), 2.53rem);font-style:normal;font-weight:600;line-height:1.3;text-transform:capitalize">
                        82%</h6>



                    <p class="has-text-align-center has-text-color has-work-sans-regular-font-family"
                        style="color:#212121;margin-top:0px;margin-bottom:1.77rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.064), 0.91rem);font-style:normal;font-weight:500;line-height:1.5">
                        of surveyed Sponsors shared frustration with not having control of their payout timelines.</p>
                </div>



                <div class="wp-block-column has-global-padding is-layout-constrained wp-container-core-column-is-layout-5 wp-block-column-is-layout-constrained"
                    style="padding-right:1rem;padding-left:1rem">
                    <h6 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                        style="color:#07277c;margin-bottom:0.51rem;font-size:clamp(1.517rem, 1.517rem + ((1vw - 0.2rem) * 1.842), 2.53rem);font-style:normal;font-weight:600;line-height:1.3;text-transform:capitalize">
                        52%</h6>



                    <p class="has-text-align-center has-text-color has-work-sans-regular-font-family"
                        style="color:#212121;margin-top:0px;margin-bottom:1.77rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.064), 0.91rem);font-style:normal;font-weight:500;line-height:1.5">
                        of Ad Space Owners don&#8217;t have any system in place for invoicing, record keeping or
                        advertising templates.</p>
                </div>
            </div>
        </div>



        <section
            class="wp-block-group alignfull has-text-color has-background has-global-padding is-layout-constrained wp-container-core-group-is-layout-6 wp-block-group-is-layout-constrained"
            style="color:#03081e;background-color:#eff9ff;margin-top:0px;padding-top:5.01rem;padding-right:1rem;padding-bottom:5.5rem;padding-left:1rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.464), 1.13rem);font-style:normal;font-weight:400;line-height:1.4">
            <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-3 wp-block-columns-is-layout-flex"
                style="margin-bottom:0px">
                <div
                    class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow">
                    <h2 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                        style="color:#07277c;font-size:clamp(1.556rem, 1.556rem + ((1vw - 0.2rem) * 1.916), 2.61rem);font-style:normal;font-weight:600;line-height:1.5">
                        How it Works</h2>



                    <p>dsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsj
                    </p>



                    <div class="wp-block-pb-accordion-item c-accordion__item js-accordion-item no-js"
                        data-initially-open="false" data-click-to-close="true" data-auto-close="true"
                        data-scroll="false" data-scroll-offset="0"><button id="at-NaN"
                            class="c-accordion__title js-accordion-controller c-accordion__title--button"
                            role="button">Read more&#8230;</button>
                        <div id="ac-NaN" class="c-accordion__content">

                            <p>bfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasg
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <div class="wp-block-group alignfull has-global-padding is-layout-constrained wp-container-core-group-is-layout-15 wp-block-group-is-layout-constrained"
            style="margin-top:0;margin-bottom:0;padding-top:5.51rem;padding-right:1rem;padding-bottom:3rem;padding-left:1rem">
            <div class="wp-block-group alignwide has-global-padding is-layout-constrained wp-block-group-is-layout-constrained"
                style="padding-bottom:1rem">
                <h2 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                    style="color:#07277c;font-size:clamp(1.556rem, 1.556rem + ((1vw - 0.2rem) * 1.916), 2.61rem);font-style:normal;font-weight:600;line-height:1.5">
                    Our Services</h2>
            </div>



            <div class="wp-block-group alignwide has-global-padding is-layout-constrained wp-container-core-group-is-layout-14 wp-block-group-is-layout-constrained"
                style="margin-top:1.01rem">
                <div
                    class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-4 wp-block-columns-is-layout-flex">
                    <div class="wp-block-column has-global-padding is-content-justification-center is-layout-constrained wp-container-core-column-is-layout-7 wp-block-column-is-layout-constrained"
                        style="padding-bottom:2rem">
                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-8 wp-block-group-is-layout-constrained">
                            <figure class="wp-block-image aligncenter size-full"><img loading="lazy" width="512"
                                    height="512" src="images/Campaign-Design2.png" alt=""
                                    class="wp-image-122"
                                    srcset="images/Campaign-Design2.png 512w, images/Campaign-Design2.png 300w, images/Campaign-Design2.png 150w"
                                    sizes="(max-width: 512px) 100vw, 512px" /></figure>



                            <h5 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                                style="color:#07277c;font-size:clamp(1.044rem, 1.044rem + ((1vw - 0.2rem) * 1.029), 1.61rem);font-style:normal;font-weight:600;line-height:1.4;text-transform:none">
                                Campaign &amp; Template Design</h5>
                        </div>



                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-9 wp-block-group-is-layout-constrained">
                            <p class="has-text-align-center has-text-color has-work-sans-regular-font-family"
                                style="color:#252525;margin-top:0rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.064), 0.91rem);font-style:normal;font-weight:400;line-height:1.5">
                                Focus on how you can help and benefit your user. Use simple word to avoid confusion.</p>
                        </div>

                        <div class="wp-block-pb-accordion-item c-accordion__item js-accordion-item no-js"
                            data-initially-open="false" data-click-to-close="true" data-auto-close="true"
                            data-scroll="false" data-scroll-offset="0"><button id="at-service1"
                                class="c-accordion__title js-accordion-controller c-accordion__title--button"
                                role="button">Read more&#8230;</button>
                            <div id="ac-service1" class="c-accordion__content">
                                <p>bfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasg
                                </p>

                            </div>
                        </div>
                    </div>



                    <div class="wp-block-column has-global-padding is-layout-constrained wp-container-core-column-is-layout-8 wp-block-column-is-layout-constrained"
                        style="padding-bottom:2rem">
                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-10 wp-block-group-is-layout-constrained">

                            <figure class="wp-block-image aligncenter size-full is-resized">
                                <img loading="lazy" width="512" height="512" src="images/Sponsor-Banner-1.png"
                                    alt="" class="wp-image-111" style="width:302px;height:auto"
                                    srcset="images/Sponsor-Banner-1.png 512w, images/Sponsor-Banner-1.png 300w, images/Sponsor-Banner-1.png 150w"
                                    sizes="(max-width: 512px) 100vw, 512px" />
                            </figure>

                            <h5 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                                style="color:#07277c;font-size:clamp(1.044rem, 1.044rem + ((1vw - 0.2rem) * 1.029), 1.61rem);font-style:normal;font-weight:600;line-height:1.4;text-transform:none">
                                Sponsors</h5>
                        </div>

                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-11 wp-block-group-is-layout-constrained">
                            <p class="has-text-align-center has-text-color has-work-sans-regular-font-family"
                                style="color:#252525;margin-top:0rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.064), 0.91rem);font-style:normal;font-weight:400;line-height:1.5">
                                Focus on how you can help and benefit your user. Use simple word to aviod confusion.</p>
                        </div>

                        <div class="wp-block-pb-accordion-item c-accordion__item js-accordion-item no-js"
                            data-initially-open="false" data-click-to-close="true" data-auto-close="true"
                            data-scroll="false" data-scroll-offset="0"><button id="at-service2"
                                class="c-accordion__title js-accordion-controller c-accordion__title--button"
                                role="button">Read more&#8230;</button>
                            <div id="ac-service2" class="c-accordion__content">
                                <p>bfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasg
                                </p>

                            </div>
                        </div>
                    </div>



                    <div class="wp-block-column has-global-padding is-content-justification-center is-layout-constrained wp-container-core-column-is-layout-9 wp-block-column-is-layout-constrained"
                        style="padding-bottom:2rem">
                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-12 wp-block-group-is-layout-constrained">
                            <figure class="wp-block-image aligncenter size-full is-resized">
                                <img loading="lazy" width="512" height="512" src="images/Ad-Space-Owner1.png"
                                    alt="" class="wp-image-116" style="width:300px;height:auto"
                                    srcset="images/Ad-Space-Owner1.png 512w, images/Ad-Space-Owner1.png 300w, images/Ad-Space-Owner1.png 150w"
                                    sizes="(max-width: 512px) 100vw, 512px" />
                            </figure>



                            <h5 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                                style="color:#07277c;font-size:clamp(1.044rem, 1.044rem + ((1vw - 0.2rem) * 1.029), 1.61rem);font-style:normal;font-weight:600;line-height:1.4;text-transform:none">
                                Ad Space Owner</h5>
                        </div>



                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-13 wp-block-group-is-layout-constrained">
                            <p class="has-text-align-center has-text-color has-work-sans-regular-font-family"
                                style="color:#252525;margin-top:0rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.064), 0.91rem);font-style:normal;font-weight:400;line-height:1.5">
                                Focus on how you can help and benefit your user. Use simple word to aviod confusion.</p>
                        </div>

                        <div class="wp-block-pb-accordion-item c-accordion__item js-accordion-item no-js"
                            data-initially-open="false" data-click-to-close="true" data-auto-close="true"
                            data-scroll="false" data-scroll-offset="0"><button id="at-service3"
                                class="c-accordion__title js-accordion-controller c-accordion__title--button"
                                role="button">Read more&#8230;</button>
                            <div id="ac-service3" class="c-accordion__content">
                                <p>bfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasg
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <section
            class="wp-block-group alignfull has-text-color has-background has-global-padding is-layout-constrained wp-container-core-group-is-layout-18 wp-block-group-is-layout-constrained"
            style="color:#03081e;background-color:#eff9ff;margin-top:0px;padding-top:5.01rem;padding-right:1rem;padding-bottom:5.5rem;padding-left:1rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.464), 1.13rem);font-style:normal;font-weight:400;line-height:1.4">
            <div class="wp-block-columns is-layout-flex wp-container-core-columns-is-layout-5 wp-block-columns-is-layout-flex"
                style="margin-bottom:0px">
                <div class="wp-block-column has-global-padding is-content-justification-left is-layout-constrained wp-container-core-column-is-layout-10 wp-block-column-is-layout-constrained"
                    style="flex-basis:45%">
                    <figure class="wp-block-image aligncenter size-full is-resized"><img loading="lazy"
                            width="900" height="1000" src="images/Why-Choose-Us1.png" alt=""
                            class="wp-image-125" style="width:446px"
                            srcset="images/Why-Choose-Us1.png 900w, images/Why-Choose-Us1-270x300.png 270w, images/Why-Choose-Us1-270x300.png 768w"
                            sizes="(max-width: 900px) 100vw, 900px" /></figure>
                </div>



                <div class="wp-block-column is-layout-flow wp-block-column-is-layout-flow">
                    <div class="wp-block-group is-vertical is-content-justification-left is-layout-flex wp-container-core-group-is-layout-17 wp-block-group-is-layout-flex"
                        style="min-height:100%">
                        <div
                            class="wp-block-group has-global-padding is-content-justification-center is-layout-constrained wp-container-core-group-is-layout-16 wp-block-group-is-layout-constrained">
                            <h3 class="wp-block-heading has-text-align-left has-text-color has-prata-regular-font-family"
                                style="color:#07277c;margin-top:0.5rem;margin-bottom:1.01rem;font-size:clamp(1.556rem, 1.556rem + ((1vw - 0.2rem) * 1.916), 2.61rem);font-style:normal;font-weight:500;letter-spacing:0px;line-height:1.3">
                                Why Choose Us?</h3>



                            <p class="has-text-align-left has-text-color has-work-sans-regular-font-family"
                                style="color:#03081e;margin-top:0rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.609), 1.21rem);font-style:normal;font-weight:400;line-height:1.6">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries.</p>

                            <div class="wp-block-pb-accordion-item c-accordion__item js-accordion-item no-js"
                                data-initially-open="false" data-click-to-close="true" data-auto-close="true"
                                data-scroll="false" data-scroll-offset="0"><button id="at-choose"
                                    class="c-accordion__title js-accordion-controller c-accordion__title--button"
                                    role="button">Read more&#8230;</button>
                                <div id="ac-choose" class="c-accordion__content">
                                    <p>bfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasgdsjbfjdsbjfgbdjskabgjksabgasg
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="wp-block-cover alignfull is-light"
            style="margin-top:0px;padding-bottom:12.51rem;min-height:548px;aspect-ratio:unset;"><span
                aria-hidden="true"
                class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img loading="lazy"
                width="1626" height="916" class="wp-block-cover__image-background wp-image-145" alt=""
                src="images/vectors2.png" data-object-fit="cover"
                srcset="images/vectors2.png 1626w, images/vectors2.png 300w, images/vectors2.png 1024w, images/vectors2.png 768w, images/vectors2.png 1536w"
                sizes="(max-width: 1626px) 100vw, 1626px" />
            <div
                class="wp-block-cover__inner-container has-global-padding is-layout-constrained wp-container-core-cover-is-layout-2 wp-block-cover-is-layout-constrained">
                <div style="height:159px" aria-hidden="true" class="wp-block-spacer"></div>



                <div class="wp-block-group alignfull has-text-color has-global-padding is-layout-constrained wp-container-core-group-is-layout-21 wp-block-group-is-layout-constrained"
                    style="color:#252525;margin-top:0px;padding-top:0rem;padding-right:1rem;padding-bottom:0rem;padding-left:1rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.464), 1.13rem);font-style:normal;font-weight:400;line-height:1.4">
                    <div
                        class="wp-block-group is-vertical is-content-justification-center is-layout-flex wp-container-core-group-is-layout-20 wp-block-group-is-layout-flex">
                        <div
                            class="wp-block-group has-global-padding is-layout-constrained wp-container-core-group-is-layout-19 wp-block-group-is-layout-constrained">
                            <h1 class="wp-block-heading has-text-align-center has-text-color has-prata-regular-font-family"
                                style="color:#07277c;margin-bottom:1.11rem;font-size:clamp(1.556rem, 1.556rem + ((1vw - 0.2rem) * 1.916), 2.61rem);font-style:normal;font-weight:500;line-height:1.2">
                                <strong>Chat With Us</strong>
                            </h1>



                            <p class="has-text-align-center has-text-color has-work-sans-regular-font-family"
                                style="color:#03081e;margin-top:0rem;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.427), 1.11rem);font-style:normal;font-weight:400;line-height:1.6">
                                <strong>Our representatives are waiting to answer all your questions, just click on our
                                    chat bubble on the bottom right corner of your screen.</strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer class="wp-block-template-part">
            <div class="wp-block-group has-base-color has-text-color has-inter-font-family has-global-padding is-layout-constrained wp-container-core-group-is-layout-23 wp-block-group-is-layout-constrained"
                style="padding-top:2rem;padding-right:1rem;padding-bottom:2rem;padding-left:1rem;font-style:normal;font-weight:400">
                <div class="wp-block-columns alignwide is-layout-flex wp-container-core-columns-is-layout-6 wp-block-columns-is-layout-flex"
                    style="margin-top:0;margin-bottom:0">
                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow"
                        style="padding-top:0px;padding-right:0;padding-bottom:0px;padding-left:0">
                        <figure class="wp-block-image size-large"><img decoding="async" width="1024"
                                height="239" src="images/ADLEE-LOGO-1-1024x239.png" alt=""
                                class="wp-image-40"
                                srcset="images/ADLEE-LOGO-1-1024x239.png 1024w, images/ADLEE-LOGO-1-1024x239.png 300w, images/ADLEE-LOGO-1-1024x239.png 768w, images/ADLEE-LOGO-1-1024x239.png 1250w"
                                sizes="(max-width: 1024px) 100vw, 1024px" /></figure>
                    </div>



                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-container-core-column-is-layout-13 wp-block-column-is-layout-flow"
                        style="border-style:none;border-width:0px;padding-top:1rem;padding-bottom:1rem;flex-basis:55%">
                        <div class="wp-block-group is-layout-flex wp-block-group-is-layout-flex">
                            <p class="has-text-align-right has-text-color has-link-color has-work-sans-regular-font-family wp-elements-ee40993c763e3380291c5a785745da89"
                                style="color:#03081e;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.227), 1rem);text-decoration:none">
                            </p>
                        </div>
                    </div>



                    <div class="wp-block-column is-vertically-aligned-center is-layout-flow wp-block-column-is-layout-flow"
                        style="flex-basis:25%">
                        <p class="has-text-align-left has-text-color has-link-color has-work-sans-regular-font-family wp-elements-1d54c42caf3b00c6bdc213b330f6d403"
                            style="color:#03081e;font-size:clamp(0.875rem, 0.875rem + ((1vw - 0.2rem) * 0.227), 1rem);text-decoration:none">
                            2024 Adlee. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate.min.js') }}"></script>
    <script type="module" src="{{ asset('js/view.min.js') }}"></script>
    <link rel="modulepreload" href="{{ asset('js/interactivity.min.js?ver=6.5.2') }}">
    <script src="{{ asset('js/util.js?ver=1') }}" id="adlee-dragon-utils-js"></script>
    <script id="wp-block-template-skip-link-js-after">
        (function() {
            var skipLinkTarget = document.querySelector('main'),
                sibling,
                skipLinkTargetID,
                skipLink;

            // Early exit if a skip-link target can't be located.
            if (!skipLinkTarget) {
                return;
            }

            /*
             * Get the site wrapper.
             * The skip-link will be injected in the beginning of it.
             */
            sibling = document.querySelector('.wp-site-blocks');

            // Early exit if the root element was not found.
            if (!sibling) {
                return;
            }

            // Get the skip-link target's ID, and generate one if it doesn't exist.
            skipLinkTargetID = skipLinkTarget.id;
            if (!skipLinkTargetID) {
                skipLinkTargetID = 'wp--skip-link--target';
                skipLinkTarget.id = skipLinkTargetID;
            }

            // Create the skip link.
            skipLink = document.createElement('a');
            skipLink.classList.add('skip-link', 'screen-reader-text');
            skipLink.href = '#' + skipLinkTargetID;
            skipLink.innerHTML = 'Skip to content';

            // Inject the skip link.
            sibling.parentElement.insertBefore(skipLink, sibling);
        }());
    </script>
    <script src="{{ asset('js/accordion-blocks.min.js?ver=1.5.0') }}" id="pb-accordion-blocks-frontend-script-js"></script>
    <script src="{{ asset('js/register-sw.js') }}" id="superpwa-register-sw-js"></script>
    <script src="{{ asset('js/frontend.js?ver=1712425082') }}" id="variations-frontend-script-js"></script>
</body>

</html>
