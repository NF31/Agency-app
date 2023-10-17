@extends('layouts.base')

@section('title', 'London')

@section('content')

    <section class="london">

        <div class="london-m fade-in">
        </div>

        <div class="london-titre">
            <div class="left">
                <h1>London</h1>
            </div>
            <div class="center">
                <div class="axe">
                    <img src="{{ asset('/images/architecture.webp') }}" alt="">
                    <span> 120m²</span>
                </div>
                <div class="axe">
                    <img src="{{ asset('/images/plan-piscine.png') }}" alt="">
                    <span> 120m²</span>
                </div>
                <div class="axe">
                    <img src="{{ asset('/images/bed.png') }}" alt="">
                    <span> 120m²</span>
                </div>
            </div>
            <div class="right">
                <a href="">Reservation</a>
            </div>
        </div>

        <div class="london-description">
            <div class="left">
                <h1>TOP VIEW</h1>
            </div>
            <div class="center">

                <h1> VILLA AMENITIES</h1>
                <p>
                    Free Wi-Fi Internet access
                    <br>
                    "43" LED SMART flat screen satellite TV
                    <br>
                    Bang & Olufsen Audiosystem
                    <br>
                    Equipped kitchen
                    <br>
                    Dining room
                    <br>
                    Coffee and tea making facilities
                    <br>
                    Air conditioning/heating
                    <br>
                    Direct telephone line
                    <br>
                    Safety box
                    <br>
                    Hairdryer
                    <br>
                    Iron/ironing board
                    <br>
                    Bathrobes & towels
                    <br>
                    Beach & pool towels
                    <br>
                    Deluxe toiletries
                </p>

            </div>
            <div class="right">
                <p class="bottom">
                    LAYOUT
                    <br>
                    Interior: 120m²
                    <br>
                    Exterior garden area: 150m²
                    <br>
                    Capacity: up to 6 guests
                    <br>
                    View: panoramic sea view
                    <br>
                    Levels: two, with upper floor accessed via an internal
                    <br>
                    staircase
                    <br>
                    Distance from the sea: 200m.
                    <br> <br>
                    FIRST LEVEL
                    <br>
                    Parking area
                    <br>
                    Furnished terrace and sunbathing deck
                    <br>
                    Private pool (3.5 X 8), children’s pool
                    br
                    with sun beds (3 x 2)
                    Extensive private lawn and garden
                    <br>
                    One double bedroom
                    <br>
                    One bathroom
                    <br>
                    Living room
                </p>
                <p>
                    SECOND LEVEL
                    <br>
                    Two double bedrooms
                    <br>
                    Two bathrooms
                </p>


            </div>
        </div>

        <div class="london-gallery">
            <h2>Gallery</h2>
            <div class="grid-wrapper">
                <div class=""><img src="{{ asset('images/suits-london/Executive-Studio-Apartment-2.webp') }}"
                        alt=""></div>
                <div class=""><img src="{{ asset('images/suits-london/4-Bedroom-Penthouse-6-1.webp') }}"
                        alt=""></div>
                <div class=""><img src="{{ asset('images/suits-london/Apartment Marylebone Station2.jpg') }}"
                        alt=""></div>
                <div class=""><img src="{{ asset('images/suits-london/3-Bedroom-Penthouse.webp') }}" alt="">
                </div>
                <div class=""><img src="{{ asset('images/suits-london/3-Bedroom-Penthouse-1-1.webp') }}"
                        alt=""></div>
                <div class=""><img src="{{ asset('images/suits-london/4-Bedroom-Penthouse-4-1.webp') }}"
                        alt=""></div>
                <div class=""><img src="{{ asset('images/suits-london/hotel-pisicne.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/suits-london/4-Bedroom-Penthouse-7-1.webp') }}"
                        alt=""></div>
                <div class=""><img src="{{ asset('images/suits-london/3-Bedroom-Penthouse-7-1.webp') }}"
                        alt=""></div>


            </div>
        </div>

        <div class="london-see">
            <h2>See also</h2>

            <div class="slider">
                <div class="slider-track">
                    <div class=" slide">
                        <a href="{{ route('suites.london') }}">
                            <img src="{{ asset('images/suits-london/London-Skylines.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.london') }}">
                                        London
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.london') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.tokyo') }}">
                            <img src="{{ asset('images/suits-tokyo\tokyo8.webp') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.tokyo') }}">
                                        Tokyo
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.tokyo') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.marrakech') }}" alt="" srcset="">
                            <img src="{{ asset('images/suits-marrakech/marrakech11.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.marrakech') }}">
                                        Marrakech
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.marrakech') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.bali') }}">
                            <img src="{{ asset('images/Bali-Villa.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.bali') }}">
                                        Bali
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.bali') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.nottingham') }}">
                            <img src="{{ asset('images/suits-nottingham/nott12.webp') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.nottingham') }}">
                                        Nottingham
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.nottingham') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.phuket') }}">
                            <img src="{{ asset('images/suits-phuket/phuket11.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.phuket') }}">
                                        Phuket
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.phuket') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" slide">
                        <a href="{{ route('suites.london') }}">
                            <img src="{{ asset('images/suits-london/London-Skylines.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.london') }}">
                                        London
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.london') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.tokyo') }}">
                            <img src="{{ asset('images/suits-tokyo\tokyo8.webp') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.tokyo') }}">
                                        Tokyo
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.tokyo') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.marrakech') }}" alt="" srcset="">
                            <img src="{{ asset('images/suits-marrakech/marrakech11.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.marrakech') }}">
                                        Marrakech
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.marrakech') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.bali') }}">
                            <img src="{{ asset('images/Bali-Villa.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.bali') }}">
                                        Bali
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.bali') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.nottingham') }}">
                            <img src="{{ asset('images/suits-nottingham/nott12.webp') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.nottingham') }}">
                                        Nottingham
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.nottingham') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.phuket') }}">
                            <img src="{{ asset('images/suits-phuket/phuket11.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.phuket') }}">
                                        Phuket
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.phuket') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class=" slide">
                        <a href="{{ route('suites.london') }}">
                            <img src="{{ asset('images/suits-london/London-Skylines.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.london') }}">
                                        London
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.london') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.tokyo') }}">
                            <img src="{{ asset('images/suits-tokyo\tokyo8.webp') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.tokyo') }}">
                                        Tokyo
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.tokyo') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.marrakech') }}" alt="" srcset="">
                            <img src="{{ asset('images/suits-marrakech/marrakech11.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.marrakech') }}">
                                        Marrakech
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.marrakech') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.bali') }}">
                            <img src="{{ asset('images/Bali-Villa.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.bali') }}">
                                        Bali
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.bali') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.nottingham') }}">
                            <img src="{{ asset('images/suits-nottingham/nott12.webp') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.nottingham') }}">
                                        Nottingham
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.nottingham') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" slide">
                        <a href="{{ route('suites.phuket') }}">
                            <img src="{{ asset('images/suits-phuket/phuket11.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('suites.phuket') }}">
                                        Phuket
                                    </a>
                                </p>
                                <span> <a href="{{ route('suites.phuket') }}" class="private-pool">
                                        with private pool
                                    </a>
                                </span>
                            </div>
                            <div class="icons">
                                <div>
                                    <img src="{{ asset('images/plan-icon.png') }}" alt="">
                                    <span>120m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                                    <span>42m²</span>
                                </div>
                                <div>
                                    <img src="{{ asset('images/bed.png') }}" alt="">
                                    <span>to 6 guests</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
