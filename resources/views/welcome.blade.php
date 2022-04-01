@extends ('layouts.app')

@section('title', 'ForwarderOne-index. Only desktop version')
@section('description', 'ForwarderOne -description')
@section('og')

@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/slider/slick/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('/slider/slick/slick-theme.css')}}">
@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slider/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
<script>
$('.main__testimonials-slider').slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slideToScroll: 1,
    centerMode: true,
    variableWidth: true,
});
</script>
@endsection

@section('content')
<header class="header">
    <img class="header__banner" src="{{$banner_src}}"
        srcset="{{$banner_src}}">
    @include('layouts.partials.topmenu', $menu)
    <div class="header__content">
        <p class="header__content-title">
            Reliable Amazon FBA
        </p>
        <p class="header__content-subtitle">
            Freight Forwarding
        </p>

    </div>
</header>
<div class="header__footer">
        <div class="header__block">

            <div class="header__block-list">
                <p class="header__block-list-link">
                    <img class="header__block-list-image" src="{{asset('/img/header/layer-24.png')}}"
                        srcset="{{asset('/img/header/layer-24@2x.png')}}">
                    <span class="h3">Shipping</span>
                    <span class="text">An hoc usque quaque</span>
                </p><img class="head_block_stripe" src="{{asset('/img/header/layer-38.png')}}">
                <p class="header__block-list-link">
                    <img class="header__block-list-image" src="{{asset('/img/header/layer-28.png')}}"
                        srcset="{{asset('/img/header/layer-28@2x.png')}}">
                    <span class="h3">Tracking</span>
                    <span class="text">An hoc usque quaque</span>
                </p><img class="head_block_stripe" src="{{asset('/img/header/layer-38.png')}}">
                <p class="header__block-list-link">
                    <img class="header__block-list-image" src="{{asset('/img/header/layer-37.png')}}"
                        srcset="{{asset('/img/header/layer-37@2x.png')}}">
                    <span class="h3">Train</span>
                    <span class="text">An hoc usque quaque</span>
                </p><img class="head_block_stripe" src="{{asset('/img/header/layer-38.png')}}">
                <p class="header__block-list-link">
                    <img class="header__block-list-image" src="{{asset('/img/header/layer-29.png')}}"
                        srcset="{{asset('/img/header/layer-29@2x.png')}}">
                    <span class="h3">Plane</span>
                    <span class="text">An hoc usque quaque</span>
                </p>
            </div>
            <a class="button-link" href="{{route('request')}}">Get a quote</a>
        </div>
    </div>
<main class="grid main">
    <section class="main__people-blocks padding-both-vertical">
        <p class="h2">Testimonial Belt</p>
        <div class="grid">
            <div class="main__blocks ">
                <div class="main__people-block">
                    <img class="main__people-image" src="{{asset('/img/main/layer-34.jpg')}}"
                        srcset="{{asset('/img/main/layer-34@2x.jpg')}}">
                    <p class="h3">JOHN DOE</p>
                    <p class="small-text">
                        Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Sed tamen omne, quod de.
                    </p>
                </div>
                <div class="main__people-block ">
                    <img class="main__people-image" src="{{asset('/img/main/layer-36.jpg')}}"
                        srcset="{{asset('/img/main/layer-36@2x.jpg')}}">
                    <p class="h3">Jenelyn Doe</p>
                    <p class="small-text">
                        Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Sed tamen omne, quod de.
                    </p>
                </div>
                <div class="main__people-block">
                    <img class="main__people-image" src="{{asset('/img/main/layer-35.jpg')}}"
                        srcset="{{asset('/img/main/layer-35@2x.jpg')}}">
                    <p class="h3">Alex DOE</p>
                    <p class="small-text">
                        Deinde prima illa, quae in congressu solemus: Quid tu, inquit, huc? Sed tamen omne, quod de.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="main__description-gray-block padding-both-vertical">
        <div class="grid">
            <div class="main__description-block-right ">
                <div class="main__description-block">
                    <p class="h3 red">Unlimited opportunities for your business</p>
                    <p class="h2">One simple platform</p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur. Urgent tamen
                        et nihil remittunt.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor.
                    </p>
                </div>
                <div class="main__image-block-right">
                    <img class="main__description-image" src="{{asset('/img/main/main-description-image.png')}}"
                        srcset="{{asset('/img/main/main-description-image.png')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="main__description-white-block padding-both-vertical">
        <div class="grid">
            <div class="main__description-block-left ">
                <div class="main__image-block-left">
                    <img class="main__description-image" src="{{asset('/img/main/main-description-image.png')}}"
                        srcset="{{asset('/img/main/main-description-image.png')}}">
                </div>
                <div class="main__description-block">
                    <p class="h3 red">Unlimited opportunities for your business</p>
                    <p class="h2">One simple platform</p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum. Ad eas enim res ab Epicuro praecepta dantur. Urgent tamen
                        et nihil remittunt.
                    </p>
                    <p class="text text-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="main__testimonials-block padding-both-vertical">
        <div class="main__testimonials-wrapper">
            <testimonals-slider></testimonals-slider>
        </div>
    </section>
    <section class="main__advantages padding-both-vertical">
        <p class="h3">Our ADvantages</p>
        <p class="h2">Why Choose Us</p>
        <div class="grid">
            <div class="main__advantages-area">
                <div class="main__advantages-block">
                    <img class="advantages-block-image" src="{{asset('/img/main/layer-59.png')}}"
                        srcset="{{asset('/img/main/layer-59@2x.png')}}">
                    <p class="h2">Advantage title</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum.
                        Ad eas enim res ab Epicuro
                    </p>
                    <a class="small-button-link" href="#">Learn more</a>
                </div>
                <img class="advantages-block-stripe" src="{{asset('/img/main/layer-45.png')}}"
                    srcset="{{asset('/img/main/layer-45@2x.png')}}">
                <div class="main__advantages-block">
                    <img class="advantages-block-image" src="{{asset('/img/main/layer-60.png')}}"
                        srcset="{{asset('/img/main/layer-60@2x.png')}}">
                    <p class="h2">Advantage title</p>
                    <p class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum,
                        de quibus loquor, philosophorum.
                        Ad eas enim res ab Epicuro
                    </p>
                    <a class="small-button-link" href="#">Learn more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="main__inquire inquire-background padding-both-vertical">
        <p class="h2 white">How to Inquire</p>
        <div class="grid">
            <div class="main__inquire-area">
                <div class="main__inquire-block">
                    <img class="red-circle" src="{{asset('/img/main/red-circle.png')}}"
                        srcset="{{asset('/img/main/red-circle@2x.png')}}">
                    <div class="white-circle">
                        <p class="h3">1</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>
                <div class="main__inquire-block">
                    <img class="red-circle" src="{{asset('/img/main/red-circle.png')}}"
                        srcset="{{asset('/img/main/red-circle@2x.png')}}">
                    <div class="white-circle">
                        <p class="h3">2</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>
                <div class="main__inquire-block">
                    <img class="red-circle" src="{{asset('/img/main/red-circle.png')}}"
                        srcset="{{asset('/img/main/red-circle@2x.png')}}">
                    <div class="white-circle">
                        <p class="h3">3</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>
                <div class="main__inquire-block">
                    <img class="red-circle" src="{{asset('/img/main/red-circle.png')}}"
                        srcset="{{asset('/img/main/red-circle@2x.png')}}">
                    <div class="white-circle">
                        <p class="h3">4</p>
                    </div>
                    <p class="text white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et ille ridens: Video, inquit,
                        quid.
                    </p>
                </div>

            </div>
        </div>

    </section>

</main>
@include('layouts.partials.footer')

@endsection
