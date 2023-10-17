@extends('layouts.base')

@section('title', 'Suits')


@section('content')
    <!-- Le contenu de la page Suits ici -->
    <section class="suits">
        <div class="suitss">
            <div class="titre">
                <h1>Suits en Chalkidique</h1>
            </div>
            <div class="suits-text">
                <p>


                    This luxury resort on the beach, is the ideal choice so as for a family vacation, as well as honeymoons
                    or a romantic escape. Enjoy the combination of high class luxury private suites with the amenities and
                    services of a leading five-star hotel.
                    <br> <br>
                    Our suites obtain private pools as well as shared pool. Bask in the sun sipping a chilling cocktail
                    against the marvelous sea view or indulge your body with a soothing massage under a pergola. Pamper
                    yourself with the undivided attention from our staff.
                    <br> <br>
                    Our resort comprises standard suites of three different types (1, 2 or 3 bedrooms) with private pool, as
                    well panorama 2-bedroom suites & executive 1-bedroom suites with sea view (shared pools).
                </p>
            </div>
        </div>


        <div class="low">
            <div class="babidi">
                <div class="card">
                    <a href="{{ route('suites.london') }}">
                        <img src=" {{ asset('images/suits-london/London-Skylines.jpg') }}" alt="" srcset=""
                            class="card-img">
                    </a>

                    <div class="card-body">
                        <h1>
                            <a href="{{ route('suites.london') }}" class="p___description"
                                data-text=" Exclusive Three Bedroom Suite ">Exclusive Three Bedroom Suite
                            </a>
                        </h1>
                        <p class="p__name">with private pool</p>

                        <div class="grr">
                            <div class="a ab">
                                <i class='bx bx-home'></i>
                                <i class='bx bx-swim'></i>
                                <i class='bx bxs-bed'></i>
                            </div>
                            <div class="b bc">
                                <p>110m²

                                </p>
                                <p> 30m²</p>
                                <p> to 6 guests</p>

                            </div>

                        </div>

                        <button class="card-btn"> <a href="{{ route('suites.london') }}">
                                See more
                                <span><i class='bx bx-right-arrow-alt'></i>
                                </span></a>
                        </button>
                    </div>

                </div>
                <div class="card">
                    <a href="{{ route('suites.bali') }}">
                        <img src="{{ asset('images/Bali-Villa.jpg') }}" alt="" srcset="" class="card-img">
                    </a>

                    <div class="card-body">
                        <h1>
                            <a href="{{ route('suites.bali') }}"class="p___description"
                                data-text=" Three Bedroom Suite ">Three Bedroom Suite
                            </a>
                        </h1>
                        <p class="p__name">with private pool</p>

                        <div class="grr">
                            <div class="a ab">
                                <i class='bx bx-home'></i>
                                <i class='bx bx-swim'></i>
                                <i class='bx bxs-bed'></i>
                            </div>
                            <div class="b bc">
                                <p>90m²

                                </p>
                                <p> 35m²</p>
                                <p> to 5 guests</p>

                            </div>

                        </div>

                        <button class="card-btn"> <a href="{{ route('suites.bali') }}">
                                See more
                                <span><i class='bx bx-right-arrow-alt'></i>
                                </span></a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="babidi">
                <div class="card">
                    <a href="{{ route('suites.tokyo') }}">
                        <img src="{{ asset('images/suits-tokyo\tokyo8.webp') }}" alt="" srcset=""
                            class="card-img">
                    </a>

                    <div class="card-body">
                        <h1>
                            <a href="{{ route('suites.tokyo') }}" class="p___description"
                                data-text=" Two Bedroom Suite ">Two Bedroom Suite
                            </a>
                        </h1>
                        <p class="p__name">with private pool</p>

                        <div class="grr">
                            <div class="a ab">
                                <i class='bx bx-home'></i>
                                <i class='bx bx-swim'></i>
                                <i class='bx bxs-bed'></i>
                            </div>
                            <div class="b bc">
                                <p>125m²

                                </p>
                                <p> 40m²</p>
                                <p> to 6 guests</p>

                            </div>

                        </div>

                        <button class="card-btn"> <a href="{{ route('suites.tokyo') }}">
                                See more
                                <span><i class='bx bx-right-arrow-alt'></i>
                                </span></a>
                        </button>
                    </div>

                </div>
                <div class="card">
                    <a href="{{ route('suites.nottingham') }}">
                        <img src="{{ asset('images/suits-nottingham/nott12.webp') }}" alt="" srcset=""
                            class="card-img">
                    </a>

                    <div class="card-body">
                        <h1>
                            <a href="{{ route('suites.nottingham') }}" class="p___description"
                                data-text=" One Bedroom Suite ">One Bedroom Suite
                            </a>
                        </h1>
                        <p class="p__name">with private pool</p>

                        <div class="grr">
                            <div class="a ab">
                                <i class='bx bx-home'></i>
                                <i class='bx bx-swim'></i>
                                <i class='bx bxs-bed'></i>
                            </div>
                            <div class="b bc">
                                <p>55m²

                                </p>
                                <p> 40m²</p>
                                <p> to 3 guests</p>

                            </div>

                        </div>

                        <button class="card-btn"> <a href="{{ route('suites.nottingham') }}">
                                See more
                                <span><i class='bx bx-right-arrow-alt'></i>
                                </span></a>
                        </button>
                    </div>

                </div>
            </div>
            <div class="babidi">
                <div class="card">
                    <a href="{{ route('suites.marrakech') }}">
                        <img src="{{ asset('images/suits-marrakech/marrakech11.jpg') }}" alt="" srcset=""
                            class="card-img">
                    </a>

                    <div class="card-body">
                        <h1>
                            <a href="{{ route('suites.marrakech') }}" class="p___description"
                                data-text="Panamora Two-Bedroom Suites ">Panorama Two-Bedroom Suites
                            </a>
                        </h1>
                        <p class="p__name">with private pool</p>

                        <div class="grr">
                            <div class="a ab">
                                <i class='bx bx-home'></i>
                                <i class='bx bx-swim'></i>
                                <i class='bx bxs-bed'></i>
                            </div>
                            <div class="b bc">
                                <p>100m²

                                </p>
                                <p> 80m²</p>
                                <p> to 5 guests</p>

                            </div>

                        </div>

                        <button class="card-btn"> <a href="{{ route('suites.marrakech') }}">
                                See more
                                <span><i class='bx bx-right-arrow-alt'></i>
                                </span></a>
                        </button>
                    </div>

                </div>
                <div class="card">
                    <a href="{{ route('suites.phuket') }}">
                        <img src="{{ asset('images/suits-phuket/phuket11.jpg') }}" alt="" srcset=""
                            class="card-img">
                    </a>

                    <div class="card-body">
                        <h1>
                            <a href="{{ route('suites.phuket') }}" class="p___description">Executive One-Bedroom Suites
                                sea view
                            </a>
                        </h1>

                        <div class="grr">
                            <div class="a ab">
                                <i class='bx bx-home'></i>
                                <i class='bx bx-swim'></i>
                                <i class='bx bxs-bed'></i>
                            </div>
                            <div class="b bc">
                                <p>45m²

                                </p>
                                <p> 30m²</p>
                                <p> to 2 guests</p>

                            </div>

                        </div>

                        <button class="card-btn"> <a href="{{ route('suites.phuket') }}">
                                See more
                                <span><i class='bx bx-right-arrow-alt'></i>
                                </span></a>
                        </button>
                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection
