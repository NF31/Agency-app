@extends('layouts.base')

@section('title', 'Madrid')

@section('content')

    <section class="madrid">

        <div class="house-m fade-in">
        </div>

        <div class="madrid-titre">
            <div class="left">
                <h1>Madrid</h1>
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

        <div class="madrid-description">
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
                    Capacity: up to 6 guests
                    <br>
                    View: panoramic sea view
                    <br>
                    Levels: 2, with upper floors accessed via an internal staircase
                    <br>
                    Distance from the beach: 350m.
                    <br>
                    GROUND LEVEL
                    <br>
                    Parking area
                    <br>
                    Furnished terrace and sunbathing deck
                    <br>
                    Private pool (3,5 X 12) with sun beds
                    <br>
                    Open plan Living room-Kitchen
                    <br>
                    One double bedroom
                    br
                    One bathroom
                </p>
                <p>
                    UPPER LEVEL
                    <br>
                    Two bedrooms
                    <br>
                    One bathroom
                </p>


            </div>
        </div>


        <div class="madrid-gallery">
            <h2>Gallery</h2>
            <div class="grid-wrapper">
                <div class=""><img src="{{ asset('images/villas.madrid/m1.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m2.webp') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m3.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m4.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m5.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m6.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m7.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m8.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m9.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m10.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m11.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m12.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m12.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m13.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m14.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m15.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m16.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m17.webp') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m18.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m19.jpg') }}" alt=""></div>
                <div class=""><img src="{{ asset('images/villas.madrid/m21.jpg') }}" alt=""></div>
            </div>
        </div>


        <div class="madrid-see">
            <h2>See also</h2>

            <div class="slider">
                <div class="slider-track">
                    <div class=" slide">
                        <a href="{{ route('villas.afdusud') }}">
                            <img src="{{ asset('images/villa-afsud.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.afdusud') }}">
                                        Afrique du sud
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.afdusud') }}" class="private-pool">
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
                        <a href="{{ route('villas.ottawa') }}">
                            <img src="{{ asset('images/villas.ottawa/o22.png') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.ottawa') }}">
                                        Ottawa
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.ottawa') }}" class="private-pool">
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
                        <a href="{{ route('villas.miami') }}">
                            <img src="{{ asset('images/villas.miami/miami-piscine.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.miami') }}">
                                        Miami
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.miami') }}" class="private-pool">
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
                        <a href="{{ route('villas.lagos') }}">
                            <img src="{{ asset('images/villas.lagos/appart-lagos.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.lagos') }}">
                                        Lagos
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.lagos') }}" class="private-pool">
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
                        <a href="{{ route('villas.birmingham') }}">
                            <img src="{{ asset('images/villas.birmingham/b22.jpeg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.birmingham') }}">
                                        Birmingham
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.birmingham') }}" class="private-pool">
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
                        <a href="{{ route('villas.cannes') }}">
                            <img src="{{ asset('images/villas.cannes/c22.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.cannes') }}">
                                        Cannes
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.cannes') }}" class="private-pool">
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
                        <a href="{{ route('villas.madrid') }}">
                            <img src="{{ asset('images/villas.madrid/m22.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.madrid') }}">
                                        Madrid
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.madrid') }}" class="private-pool">
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
                        <a href="{{ route('villas.hongkong') }}">
                            <img src="{{ asset('images/villas.hongkong/h22.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.hongkong') }}">
                                        Hong Kong
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.hongkong') }}" class="private-pool">
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
                        <a href="{{ route('villas.afdusud') }}">
                            <img src="{{ asset('images/villa-afsud.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.afdusud') }}">
                                        Afrique du sud
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.afdusud') }}" class="private-pool">
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
                        <a href="{{ route('villas.ottawa') }}">
                            <img src="{{ asset('images/villas.ottawa/o22.png') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.ottawa') }}">
                                        Ottawa
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.ottawa') }}" class="private-pool">
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
                        <a href="{{ route('villas.miami') }}">
                            <img src="{{ asset('images/villas.miami/miami-piscine.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.miami') }}">
                                        Miami
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.miami') }}" class="private-pool">
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
                        <a href="{{ route('villas.lagos') }}">
                            <img src="{{ asset('images/villas.lagos/appart-lagos.jpg') }}" alt=""
                                srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.lagos') }}">
                                        Lagos
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.lagos') }}" class="private-pool">
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
                        <a href="{{ route('villas.birmingham') }}">
                            <img src="{{ asset('images/villas.birmingham/b22.jpeg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.birmingham') }}">
                                        Birmingham
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.birmingham') }}" class="private-pool">
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
                        <a href="{{ route('villas.cannes') }}">
                            <img src="{{ asset('images/villas.cannes/c22.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.cannes') }}">
                                        Cannes
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.cannes') }}" class="private-pool">
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
                        <a href="{{ route('villas.madrid') }}">
                            <img src="{{ asset('images/villas.madrid/m22.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.madrid') }}">
                                        Madrid
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.madrid') }}" class="private-pool">
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
                        <a href="{{ route('villas.hongkong') }}">
                            <img src="{{ asset('images/villas.hongkong/h22.jpg') }}" alt="" srcset="">
                        </a>
                        <div class="villas-contenu">
                            <div class="text">
                                <p> <a href="{{ route('villas.hongkong') }}">
                                        Hong Kong
                                    </a>
                                </p>
                                <span> <a href="{{ route('villas.hongkong') }}" class="private-pool">
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
