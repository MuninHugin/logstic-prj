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

<create-request :urldata="{{json_encode(
        [
        'menuList' => $menu,
        'bannerSrc'=>[
            'banner_src_request'=>$banner_src_request,
            'banner_src_check'=>$banner_src_check
            ],
        'home'=>route('home'),
        'logo'=>asset('/img/header/LogoE3PL@2x.png')
        ])}}"></create-request>

@include('layouts.partials.footer_request')

@endsection
