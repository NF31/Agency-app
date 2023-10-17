@extends('layouts.base')

@section('title', 'Home')

@section('content')
    <!-- Section d'accueil -->
    <section class="home">

        <div class="container-home">
            <div class="slide-home">
                <!-- Carrousel d'images -->
                <div class="item-home">
                    <img src="{{ asset('images/a1.jpg') }}" class="a">
                    <div class="content-home">
                        <h1 class="name-home">Privacy is the new luxury</h1>
                        <button><a href="">Check Avaibility</a></button>
                    </div>
                </div>
                <!-- Fin du premier élément du carrousel -->

                <!-- Deuxième élément du carrousel -->
                <div class="item-home">
                    <img src="{{ asset('images/a2.jpg') }}" class="b">
                    <div class="content-home">
                        <h1 class="name-home">Live your dream in Halkidiki</h1>
                        <button><a href="">Check Avaibility</a></button>
                    </div>
                </div>
                <!-- Fin du deuxième élément du carrousel -->

                <!-- Troisième élément du carrousel -->
                <div class="item-home">
                    <img src="{{ asset('images/a3.jpg') }}" class="c">
                    <div class="content-home">
                        <h1 class="name-home">Hotel services, House comfort</h1>
                        <button><a href="">Check Avaibility</a></button>
                    </div>
                </div>
                <!-- Fin du troisième élément du carrousel -->

                <!-- Quatrième élément du carrousel -->
                <div class="item-home">
                    <img src="{{ asset('images/appart.jpg') }}" class="d">
                    <div class="content-home">
                        <h1 class="name-home">Enjoy your private beach</h1>
                        <button><a href="">Check Avaibility</a></button>
                    </div>
                </div>
                <!-- Fin du quatrième élément du carrousel -->

                <!-- Cinquième élément du carrousel -->
                <div class="item-home">
                    <img src="{{ asset('images/appart-floride.jpg') }}" class="e">
                    <div class="content-home">
                        <h1 class="name-home">Taste our creative cuisine</h1>
                        <button><a href="">Check Avaibility</a></button>
                    </div>
                </div>
                <!-- Fin du cinquième élément du carrousel -->

                <!-- Sixième élément du carrousel -->
                <div class="item-home">
                    <img src="{{ asset('images/appart-cannes.jpg') }}" class="e">
                    <div class="content-home">
                        <h1 class="name-home">Relax by your pool</h1>
                        <button><a href="">Check Avaibility</a></button>
                    </div>
                </div>
                <!-- Fin du sixième élément du carrousel -->

            </div>
            <div class="buttons-home">
                <button id="maz"><i class='bx bx-left-arrow-alt'></i></button>
                <button id="corle"><i class='bx bx-right-arrow-alt'></i></button>
            </div>
        </div>

        <div class="div-home">
            <div class="text-home">
                <h1>WELCOME</h1>
                <span>to Kappa Resort</span>
                <p>
                    Located right above Toroneos Bay, these luxury villas and suites in Halkidiki combine elegance and
                    minimalist design with the typically Greek blue-green background. The amphitheatrical position, modern
                    amenities, and the gourmet restaurant make Kappa Resort an ideal choice for both family and romantic
                    getaways.
                </p>
            </div>
            <div class="img-home">
                <img src="{{ asset('images/appart-libreville.jpg') }}">
                <img src="{{ asset('images/appart-cannes.jpg') }}">
            </div>
        </div>

        <!-- Section d'accommodation -->
        <div class="div-home acco">
            <div class="img-home">
                <img src="{{ asset('images/appart-libreville.jpg') }}">
                <img src="{{ asset('images/appart-cannes.jpg') }}">
            </div>
            <div class="text-home">
                <h1>ACCOMMODATION</h1>
                <span>to Kappa Resort</span>
                <p>
                    Our resort comprises luxurious villas of four different types (1, 2, 3, or 4 bedrooms), all with private
                    pools. Furthermore, it has standard suites (1, 2, or 3 bedrooms) with a private pool, as well as
                    apartments (junior suites, 1 or 2 bedrooms) with a shared pool. All accommodations come with a
                    magnificent sea view.
                </p>

                <div class="uno">
                    <!-- Boutons pour voir les options d'hébergement -->
                    <a href="{{ route('villas.villas') }}" class="btn">See the Villas</a>
                    <a href="{{ route('villas.suits') }}" class="btn">See the Suites</a>
                </div>

            </div>
        </div>

        <!-- Section "WHY CHOOSE US" -->
        <div class="div-home why">
            <div class="text-home">
                <h1>WHY CHOOSE US</h1>
                <span>House comfort. Hotel services.</span>
                <p>
                    Kappa Resort is a luxury resort with villas and suites in Halkidiki. Designed to offer privacy and
                    complete relaxation to guests seeking a secret getaway with exclusive amenities.
                </p>
                <div class="uno">

                    <!-- Bouton pour voir les services -->
                    <a href="{{ route('services') }}" class="btn">View Services</a>
                </div>
            </div>
            <div class="img-home">
                <img src="{{ asset('images/appart-libreville.jpg') }}">
                <img src="{{ asset('images/appart-cannes.jpg') }}">
            </div>
        </div>

        <!-- Section "Discover More" -->
        <div class="bonbon">
            <div class="cards">
                <div class="slide-track">
                    <!-- Premier élément-->
                    <div class="slidere">
                        <img src="{{ asset('images/appart-newyork.jpg') }}" alt="Luxury Accommodation in New York">
                        <div class="cell">
                            <h1>Privacy</h1>
                            <i class='bx bx-key'></i>
                        </div>
                    </div>

                    <!-- Deuxième élément-->
                    <div class="slidere">
                        <img src="{{ asset('images/appart-miami.jpg') }}" alt="Luxury Accommodation in Miami">
                        <div class="cell">
                            <h1>Space</h1>
                            <i class='bx bx-home-circle'></i>
                        </div>
                    </div>

                    <!-- Troisième élément-->
                    <div class="slidere">
                        <img src="{{ asset('images/villa-dubai.jpg') }}" alt="Luxury Villa in Dubai">
                        <div class="cell">
                            <h1>Pool</h1>
                            <i class='bx bx-swim'></i>
                        </div>
                    </div>

                    <!-- Quatrième élément-->
                    <div class="slidere">
                        <img src="{{ asset('images/appart-toulouse.png') }}" alt="Luxury Accommodation in Toulouse">
                        <div class="cell">
                            <h1>Seaview</h1>
                            <i class='bx bx-sun'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section "RESTAURANT" -->
        <div class="div-home">
            <div class="img-home">
                <img src="{{ asset('images/appart-libreville.jpg') }}">
                <img src="{{ asset('images/appart-cannes.jpg') }}">
            </div>
            <div class="text-home">
                <h1>RESTAURANT</h1>
                <span>Kappa Restaurant</span>
                <p>
                    During the day have a light snack at the beach or enjoy a fresh fruit salad at the comfort of your
                    villa/suite, right by your pool (room service provided 15 hours a day). Reserve your dinner table and
                    get ready to explore our creative gourmet dishes, inspired by the Mediterranean cuisine. Our friendly
                    staff with the outstanding service is always ready to assist you.
                </p>
                <div class="uno">
                    <!-- Bouton pour découvrir le restaurant -->
                    <a href="{{ route('restaurants') }}" class="btn">Discover it</a>
                </div>

            </div>
        </div>

        <!-- Section "PRIVATE BEACH" -->
        <div class="div-home priv">
            <div class="text-home">
                <h1>PRIVATE BEACH</h1>
                <p>
                    In the luxurious villas and suites of Kappa Resort in Halkidiki, you will have the opportunity to enjoy
                    the sea on the private beach that lays in front of you.
                </p>
                <div class="uno">
                    <!-- Bouton pour découvrir la plage privée -->
                    <a href="#" class="btn">Discover it</a>
                </div>

            </div>
            <div class="img-home">
                <img src="{{ asset('images/appart-libreville.jpg') }}">
                <img src="{{ asset('images/appart-cannes.jpg') }}">
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
