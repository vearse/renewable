<!DOCTYPE html>
<html lang="{{ locale() }}">

<head>
    <base href="{{ config('app.url') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>
        @hasSection('title')
            @yield('title') - {{ setting('store_name') }}
        @else
            {{ setting('store_name') }}
        @endif
    </title>

    @stack('meta')

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500&display=swap" rel="stylesheet">

    @if (is_rtl())
        <link rel="stylesheet" href="{{ v(Theme::url('public/css/app.rtl.css')) }}">
    @else
        <link rel="stylesheet" href="{{ v(Theme::url('public/css/app.css')) }}">
    @endif
    <link rel="stylesheet" href="{{ v(Theme::url('public/css/energy.css')) }}">

    <link rel="shortcut icon" href="{{ $favicon }}" type="image/x-icon">

    @stack('styles')

    {!! setting('custom_header_assets') !!}

    <script>
        window.FleetCart = {
            baseUrl: '{{ config('app.url') }}',
            rtl: {{ is_rtl() ? 'true' : 'false' }},
            storeName: '{{ setting('store_name') }}',
            storeLogo: '{{ $logo }}',
            loggedIn: {{ auth()->check() ? 'true' : 'false' }},
            csrfToken: '{{ csrf_token() }}',
            stripePublishableKey: '{{ setting('stripe_publishable_key') }}',
            razorpayKeyId: '{{ setting('razorpay_key_id') }}',
            cart: {!! $cart !!},
            wishlist: {!! $wishlist !!},
            compareList: {!! $compareList !!},
            langs: {
                'storefront::layout.next': '{{ trans('storefront::layout.next') }}',
                'storefront::layout.prev': '{{ trans('storefront::layout.prev') }}',
                'storefront::layout.search_for_products': '{{ trans('storefront::layout.search_for_products') }}',
                'storefront::layout.all_categories': '{{ trans('storefront::layout.all_categories') }}',
                'storefront::layout.most_searched': '{{ trans('storefront::layout.most_searched') }}',
                'storefront::layout.search_for_products': '{{ trans('storefront::layout.search_for_products') }}',
                'storefront::layout.category_suggestions': '{{ trans('storefront::layout.category_suggestions') }}',
                'storefront::layout.product_suggestions': '{{ trans('storefront::layout.product_suggestions') }}',
                'storefront::layout.product_suggestions': '{{ trans('storefront::layout.product_suggestions') }}',
                'storefront::layout.more_results': '{{ trans('storefront::layout.more_results') }}',
                'storefront::product_card.out_of_stock': '{{ trans('storefront::product_card.out_of_stock') }}',
                'storefront::product_card.new': '{{ trans('storefront::product_card.new') }}',
                'storefront::product_card.add_to_cart': '{{ trans('storefront::product_card.add_to_cart') }}',
                'storefront::product_card.view_options': '{{ trans('storefront::product_card.view_options') }}',
                'storefront::product_card.compare': '{{ trans('storefront::product_card.compare') }}',
                'storefront::product_card.wishlist': '{{ trans('storefront::product_card.wishlist') }}',
                'storefront::product_card.available': '{{ trans('storefront::product_card.available') }}',
                'storefront::product_card.sold': '{{ trans('storefront::product_card.sold') }}',
                'storefront::product_card.years': '{{ trans('storefront::product_card.years') }}',
                'storefront::product_card.months': '{{ trans('storefront::product_card.months') }}',
                'storefront::product_card.weeks': '{{ trans('storefront::product_card.weeks') }}',
                'storefront::product_card.days': '{{ trans('storefront::product_card.days') }}',
                'storefront::product_card.hours': '{{ trans('storefront::product_card.hours') }}',
                'storefront::product_card.minutes': '{{ trans('storefront::product_card.minutes') }}',
                'storefront::product_card.seconds': '{{ trans('storefront::product_card.seconds') }}'
            },
        };


    </script>

    {!! $schemaMarkup->toScript() !!}

    @stack('globals')

    @yield('style')
    <style>
        .home-slider{
            max-height: 450px;
        }
        .home-section-inner {
            display: flex;
            width: calc(100% - 0px);
            margin-left: 0px;
        }

        .home-section-inner .home-slider-wrap {
            width: 100%;
            padding: 0 15px;
        }
        .home-section-inner .home-banner-wrap {
            display: none;
        }
        @media screen and (min-width: 1650px) {
            .home-section-inner .home-slider-wrap {
                width: 100%;
        }
            .home-section-inner .home-banner-wrap {
                display: none;
        }
        }
        @media screen and (max-width: 1255px) {
            .home-section-inner .home-slider-wrap {
                width: 100%;
            }
                .home-section-inner .home-banner-wrap {
                    display: none;
            }
        }

        ._13sFCC ._2jr1F_ {
            -webkit-flex-basis: 16.66%;
            -ms-flex-preferred-size: 16.66%;
            flex-basis: 16.66%;
            list-style: none;
        }

        ._13sFCC ._28Xb_u {
            padding: 1px 0 0;
            height: 20px;
        }

        ._13sFCC ._2Plkj9 {
            -webkit-flex-basis: 58.33%;
            -ms-flex-preferred-size: 58.33%;
            flex-basis: 58.33%;
            list-style: none;
        }

        ._13sFCC ._28Xb_u {
            padding: 1px 0 0;
            height: 20px;
        }

        ._3UaKsS, ._3UaKsS .EkB-Xt {
            height: 5px;
            border-radius: 100px;
        }

        ._3UaKsS {
            position: relative;
            background: #f0f0f0;
            margin-top: 7px;
            margin-left: 7px;
        }

        ._3UaKsS ._1ia31G, ._3UaKsS ._1z2lGe, ._3UaKsS ._2fGXyl {
            background-color: #388e3c;
        }

        ._3UaKsS .EkB-Xt {
            left: 0;
            position: absolute;
            width: 0;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transform-origin: left center;
            transform-origin: left center;
            transition: -webkit-transform .4s cubic-bezier(0,0,.3,1) .3s;
            transition: transform .4s cubic-bezier(0,0,.3,1) .3s;
            transition: transform .4s cubic-bezier(0,0,.3,1) .3s,-webkit-transform .4s cubic-bezier(0,0,.3,1) .3s;
        }

        ._3UaKsS ._1ia31G, ._3UaKsS ._1z2lGe, ._3UaKsS ._2fGXyl {
            background-color: #388e3c;
        }

        ._3UaKsS .EkB-Xt {
            left: 0;
            position: absolute;
            width: 0;
            -webkit-transform: scaleX(1);
            transform: scaleX(1);
            -webkit-transform-origin: left center;
            transform-origin: left center;
            transition: -webkit-transform .4s cubic-bezier(0,0,.3,1) .3s;
            transition: transform .4s cubic-bezier(0,0,.3,1) .3s;
            transition: transform .4s cubic-bezier(0,0,.3,1) .3s,-webkit-transform .4s cubic-bezier(0,0,.3,1) .3s;
        }

        ._13sFCC ._36LmXx {
            -webkit-flex-basis: 25%;
            -ms-flex-preferred-size: 25%;
            flex-basis: 25%;
            list-style: none;
        }

        ._13sFCC ._28Xb_u {
            padding: 1px 0 0;
            height: 20px;
        }

        ._13sFCC ._1uJVNT {
            font-size: 12px;
            color: #878787;
            padding: 0 5px 0 12px;
        }

        ._2afbiS {
            font-size: 14px;
            color: #878787;
            width: 100%;
            text-align: center;
            white-space: normal;
            overflow-wrap: break-word;
        }

        #heading {
            text-transform: uppercase;
            color: var(--color-primary);
            font-weight: normal
        }

        #msform {
            text-align: center;
            position: relative;
            margin-top: 20px
        }

        #msform fieldset {
            background: white;
            border: 0 none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            width: 100%;
            margin: 0;
            padding-bottom: 20px;
            position: relative
        }

        .form-card {
            text-align: left
        }

        #msform fieldset:not(:first-of-type) {
            display: none
        }

        #msform input,
        #msform textarea {
            padding: 8px 15px 8px 15px;
            border: 1px solid #ccc;
            border-radius: 0px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: montserrat;
            color: #2C3E50;
            background-color: #ECEFF1;
            font-size: 16px;
            letter-spacing: 1px
        }

        #msform input:focus,
        #msform textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid var(--color-primary);
            outline-width: 0
        }

        #msform .action-button {
            width: 100px;
            background: var(--color-primary);
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 0px 10px 5px;
            float: right
        }

        #msform .action-button:hover,
        #msform .action-button:focus {
            background-color: #311B92
        }

        #msform .action-button-previous {
            width: 100px;
            background: #616161;
            font-weight: bold;
            color: white;
            border: 0 none;
            border-radius: 0px;
            cursor: pointer;
            padding: 10px 5px;
            margin: 10px 5px 10px 0px;
            float: right
        }

        #msform .action-button-previous:hover,
        #msform .action-button-previous:focus {
            background-color: #000000
        }

        .card {
            z-index: 0;
            border: none;
            position: relative
        }

        .fs-title {
            font-size: 25px;
            color: var(--color-primary);
            margin-bottom: 15px;
            font-weight: normal;
            text-align: left
        }

        .purple-text {
            color: var(--color-primary);
            font-weight: normal
        }

        .steps {
            font-size: 25px;
            color: gray;
            margin-bottom: 10px;
            font-weight: normal;
            text-align: right
        }

        .fieldlabels {
            color: gray;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: lightgrey
        }

        #progressbar .active {
            color: var(--color-primary)
        }

        #progressbar li {
            list-style-type: none;
            font-size: 15px;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #account:before {
            font-family: FontAwesome;
            content: "\f13e"
        }

        #progressbar #personal:before {
            font-family: FontAwesome;
            content: "\f007"
        }

        #progressbar #payment:before {
            font-family: FontAwesome;
            content: "\f030"
        }

        #progressbar #confirm:before {
            font-family: FontAwesome;
            content: "\f00c"
        }

        #progressbar li:before {
            width: 50px;
            height: 50px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            color: #ffffff;
            background: lightgray;
            border-radius: 50%;
            margin: 0 auto 10px auto;
            padding: 2px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: lightgray;
            position: absolute;
            left: 0;
            top: 25px;
            z-index: -1
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: var(--color-primary)
        }

        .progress {
            height: 20px
        }

        .progress-bar {
            background-color: var(--color-primary)
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

    </style>
    @routes
</head>

<body class="page-template {{ is_rtl() ? 'rtl' : 'ltr' }}" data-theme-color="#{{ $themeColor->getHex() }}"
    style="--color-primary: #{{ $themeColor->getHex() }};
            --color-primary-hover: #{{ $themeColor->darken(8) }};
            --color-primary-transparent: {{ color2rgba($themeColor, 0.8) }};
            --color-primary-transparent-lite: {{ color2rgba($themeColor, 0.3) }};">
    <div class="wrapper" id="app">
        @include('public.layout.top_nav')
        @include('public.layout.header')
        @include('public.layout.navigation')
        @include('public.layout.breadcrumb')

        @yield('content')

        @include('public.home.sections.subscribe')
        @include('public.layout.footer')

        <div class="overlay"></div>

        @include('public.layout.sidebar_menu')
        @include('public.layout.sidebar_cart')
        @include('public.layout.alert')
        @include('public.layout.newsletter_popup')
        @include('public.layout.cookie_bar')
    </div>

    @stack('pre-scripts')

    <script src="{{ v(Theme::url('public/js/app.js')) }}"></script>

    @stack('scripts')

    {!! setting('custom_footer_assets') !!}

    <script>
        $(document).ready(function(){

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function(){

            current_fs = $(this).parent();
            next_fs = $(this).parent().next();

            //Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            //show the next fieldset
            next_fs.show();
            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
            'display': 'none',
            'position': 'relative'
            });
            next_fs.css({'opacity': opacity});
            },
            duration: 500
            });
            setProgressBar(++current);
            });

            $(".previous").click(function(){

            current_fs = $(this).parent();
            previous_fs = $(this).parent().prev();

            //Remove class active
            $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

            //show the previous fieldset
            previous_fs.show();

            //hide the current fieldset with style
            current_fs.animate({opacity: 0}, {
            step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
            'display': 'none',
            'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
            },
            duration: 500
            });
            setProgressBar(--current);
            });

            function setProgressBar(curStep){
            var percent = parseFloat(100 / steps) * curStep;
            percent = percent.toFixed();
            $(".progress-bar")
            .css("width",percent+"%")
            }

            $(".submit").click(function(){
            return false;
            })
        });
    </script>
</body>

</html>
