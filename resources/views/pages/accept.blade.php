@extends ('layouts.app')

@section('title', 'ForwarderOne-request page. Only desktop version')
@section('description', 'ForwarderOne-request page -description')
@section('og')

@endsection
@section('style')

@endsection
@section('scripts')
<!-- <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
@endsection

@section('content')
<header class="header">
<img class="header__banner" src="{{$banner_src}}" srcset="{{$banner_src}}">
    @include('layouts.partials.topmenu', $menu)

    <div class="header__content request-header-content">
        <p class="header__content-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habes, inquam, Cato, formam eorum, de quibus
            loquor praecepta dantur.
        </p>
        <p class="header__content-title">
            Reliable Amazon FBA
        </p>
        <p class="header__content-subtitle">
            Freight Forwarding
        </p>
    </div>

</header>
<main class=" grid main request">
    <section class="main__people-blocks padding-both-vertical">

        <div class="grid">

        <div class="accept__block_2_column">
                    <div class="accept-block">
                        <img class="accept-img" src="{{asset('/img/main/accept.png')}}" srcset="{{asset('/img/main/accept@2x.png')}}" >
                    </div>
                    <div>
                        <p class="h2">Your Requested <span class="red">#12758927</span></p>
                        <p class="h2">Was Successfully Accepted</p>
                        <p class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scio enim esse quosdam,
                            qui quavis lingua philosophari possint; Duo Reges: constructio interrete. Quos quidem tibi
                            studiose et diligenter tractandos magnopere censeo. At, si voluptas esset bonum,
                            desideraret.
                        </p><p class="text">
                            Iam id ipsum absurdum, maximum malum neglegi. Quae cum dixisset paulumque institisset, Quid
                            est? An hoc usque quaque, aliter in vita?</p>
                    </div>

                </div>

        </div>
    </section>
</main>
@include('layouts.partials.footer')

@endsection
