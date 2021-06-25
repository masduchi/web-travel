
@extends('layouts.app')

@section('title')
  MUMAZA
@endsection



@section('content')
    <!-- Header -->
    <header class="text-center">
        <h1>Explore The Beautiful Word
            <br>
            As Easy One Click</h1>
        <p class="mt-3">Explore The Beatutiful Word
            <br>
            As Easy One Click</p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center">
                <div class="col-3 col-md-2 stats-detail">
                    <h1>20K</h1>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h1>12</h1>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h1>3K</h1>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h1>72</h1>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>WISATA POPULAR</h2>
                        <p>Something that you never try
                            <br>
                            before in this world</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    @foreach ($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('{{ $item->galleries->count() ? Storage::url ($item->galleries->first()->image) : '' }}');">
                            <div class="travel-country">{{ $item->location }}</div>
                            <div class="travel-location">{{ $item->title }}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail', $item->slug ) }}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section-networks" id="networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br />
                            more than just a trip
                        </p>
                    </div>

                    <col-md-8 class="text-center">
                        <img src="frontend/images/logos_partner.png" alt="Logo partner" class="img-partner">
                    </col-md-8>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>
                            They Are Loving Us
                        </h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="testimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/pic_checkout-2@2x.png" alt="user" class="mb-4 rounded-circel">
                                <h3 class="mb-4">
                                    Kevin
                                </h3>
                                <p class="testimonial">
                                    " It was glorious and i could
                                    non stop to say wohooo for
                                    every single moment
                                    Dankeeeeeee "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic-2.png" alt="user" class="mb-4 rounded-circel">
                                <h3 class="mb-4">
                                    Zahra
                                </h3>
                                <p class="testimonial">
                                    " The trip was amazing and
                                    i saw something beautiful in
                                    that island that makes me
                                    want to learn more "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Nusa Penida, Indonesia
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/images/user_pic-3.png" alt="user" class="mb-4 rounded-circel">
                                <h3 class="mb-4">
                                    Sabrina
                                </h3>
                                <p class="testimonial">
                                    " I loved it when the waves
                                    was shaking harder - I was
                                    scared too "
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Karimun Jawa, Indonesia
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>

            </div>
        </section>
    </main>
@stop
