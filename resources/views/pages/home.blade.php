@extends('layouts.app')

@section('title')
Taqwa Travels
@endsection


@section('content')
<!-- header -->
<header class="text-center">
    <p>WELCOME TO</p>
    <h1>
        Musafir Mate
    </h1>
    <p class="mt-3">
        Halal Travel Made Easy
    </p>
    <a href="{{ route('login') }}" class="btn btn-get-started px-4 mt-4">
        Get Started
    </a>
</header>

<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3K</h2>
                <p>hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>partners</p>
            </div>

        </section>
    </div>

    <section class="section-popular" id="popular">
        <div class="container">
            <div class="row">
                <div class="col text-center section-popular-heading">
                    <h2>Halal Adventures</h2>
                    <p>
                        Explore the Unseen,
                        <br>
                        the Halal Way.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-popular-content" id="popular-content">
        <div class="container">
            <div class="section-popular-travel row justify-content-center">
                @foreach($items as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->description ? Storage::url($item->description) : 'header 2.jpg' }}');">
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-network" id="network">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2>Our Networks</h2>
                    <p>
                        Trusted Partners for
                        <br>
                        Your Halal Journey
                    </p>
                </div>
                <div class="col-md-8 text-center">
                    <img src="frontend/images/partner/Group 7.png" alt="Logo partner" class="img-partner">
                </div>
            </div>
        </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Why Guests Love Us</h2>
                    <p>
                        Experiences That Embrace
                        <br>
                        The Halal Way
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
                            <img src="frontend/images/testimonial/user_pic1.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4"> Aminah Zakaria </h3>
                            <p class="testimonial">
                                “ It was a peaceful journey, and I felt so at ease knowing every aspect was thoughtfully arranged to follow Islamic values. “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip to Istanbul
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial/user_pic2.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4"> Shayna </h3>
                            <p class="testimonial">
                                “ This trip was incredible! From the halal meals to the prayer-friendly itineraries, everything made me feel right at home. “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip to Marrakech
                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="card card-testimonial text-center">
                        <div class="testimonial-content">
                            <img src="frontend/images/testimonial/user_pic3.png" alt="user" class="mb-4 rounded-circle">
                            <h3 class="mb-4"> Shabrina </h3>
                            <p class="testimonial">
                                “ The breathtaking views and Shariah-compliant arrangements ensured my family could relax and enjoy without worry. Thank you! “
                            </p>
                        </div>
                        <hr />
                        <p class="trip-to mt-2">
                            Trip to Kuala Lumpur
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-help px-4 mt-4 mx-1">
                        I Need Help
                    </a>
                    <a href=" {{ route('destinations.index') }} " class="btn btn-get-started px-4 mt-4 mx-1">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
