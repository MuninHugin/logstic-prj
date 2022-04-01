@extends ('layouts.app')

@section('title', 'ForwarderOne-check1 page. Only desktop version')
@section('description', 'ForwarderOne-check1 page -description')
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
            <p class="h2">Ensure That Everything's Correct</p>
            <div class="grid margin-top">

                <div class="check__block_2_column">
                    <div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Your Name</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">John S. DOE</p>
                        </div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Means of Transport</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">Transport BY Plane</p>
                        </div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Incoterm</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">EXW</p>
                        </div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Manufacturer Location</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">Yuejiang W Rd, Haizhu District,<br>
                                Guangzhou, Guangdong Province</p>
                        </div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Associated Location</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">Yuejiang W Rd, Haizhu District,<br>
                                Guangzhou, Guangdong Province</p>
                        </div>
                    </div>
                    <div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Destination</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">To our warehouse for
                                tempoorary storage</p>
                        </div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Goods Value</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">$20,000 USD</p>
                        </div>
                        <div class="check_block ">
                            <div class="row-between2">
                                <p class="text">Your Email</p>
                                <p class="text">:</p>
                            </div>
                            <p class="h3">johnDOE@gmail.com</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <section class="main__description-gray-block padding-both-vertical">
            <div class="grid">
                <div class="check__cards">
                    <div class="check-product-card">
                        <p class="h2-smaller">Product #1</p>
                        <p class="text">1) No. of Cartons </p>
                        <p class="h3">10</p>

                        <p class="text">2) Single Carton Dimension </p>
                        <p class="h3">30cm <span></span> 50cm <span></span> 90cm</p>

                        <p class="text">3) Carton Weight</p>
                        <p class="h3">500kg</p>
                    </div>
                    <div class="check-product-card">
                        <p class="h2-smaller">Product #2</p>
                        <p class="text">1) No. of Cartons </p>
                        <p class="h3">10</p>

                        <p class="text">2) Single Carton Dimension </p>
                        <p class="h3">30cm <span></span> 50cm <span></span> 90cm</p>

                        <p class="text">3) Carton Weight</p>
                        <p class="h3">500kg</p>
                    </div>
                    <div class="check-product-card">
                        <p class="h2-smaller">Product #3</p>
                        <p class="text">1) No. of Cartons </p>
                        <p class="h3">10</p>

                        <p class="text">2) Single Carton Dimension </p>
                        <p class="h3">30cm <span></span> 50cm <span></span> 90cm</p>

                        <p class="text">3) Carton Weight</p>
                        <p class="h3">500kg</p>
                    </div>
                    <div class="check-product-card">
                        <p class="h2-smaller">Product #4</p>
                        <p class="text">1) No. of Cartons </p>
                        <p class="h3">10</p>

                        <p class="text">2) Single Carton Dimension </p>
                        <p class="h3">30cm <span></span> 50cm <span></span> 90cm</p>

                        <p class="text">3) Carton Weight</p>
                        <p class="h3">500kg</p>
                    </div>


                    <!-- <p class="h2 blue" id="add_product">+ Add another product</p> -->
                </div>
            </div>
        </section>
        <section class="main__description-white-block padding-both-vertical">
            <div class="grid">
                <div class="price-block">
                    <div class="price-inner-block">
                        <p class="h2">Price for your delivery</p>
                    </div>
                    <div class="price-inner-block">
                        <div class="price-column">
                            <p class="text border-red" > Means of Transport</p>
                            <p class="h3-dark">Plane</p>
                            <p class="h3-dark">Ship</p>
                            <p class="h3-dark">Truck</p>
                            <p class="h3-dark">Train</p>
                        </div>
                        <div class="price-column">
                            <p class="text border-red" >Price</p>
                            <p class="h3-dark">$5,000 USD</p>
                            <p class="h3-dark">$5,000 USD</p>
                            <p class="h3-dark">$5,000 USD</p>
                            <p class="h3-dark">$5,000 USD</p>
                        </div>
                        <div class="price-column">
                            <p class="text border-red" >Days</p>
                            <p class="h3-dark">10 D</p>
                            <p class="h3-dark">40 D</p>
                            <p class="h3-dark">80 D</p>
                            <p class="h3-dark">30 D</p>
                        </div>
                    </div>
                </div>
                <div class="left-right margin-top">
                    <a class="arrow-left" href="request-page.html">Make another Request</a>
                    <a class="arrow-right" href="accept-page.html">Accept Offer</a>
                </div>
            </div>
        </section>

    </main>
    @include('layouts.partials.footer')

@endsection
