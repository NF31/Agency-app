@extends('layouts.base')

@section('title', 'Gallery')

@section('content')
    <section class="gallery">
        <h1>PHOTO GALLERY !</h1>
        <div class="mainContent grid">
            <div class="singleDestination">
                <div class="destImage">
                    <a href="{{ route('gallery.villas') }}">
                        <img src="{{ asset('images/algarve-villa.jpg') }}" alt="">
                    </a>

                    <div class="overlayInfo">
                        <a href="{{ route('gallery.villas') }}">
                            <h3>The VILLAS</h3>
                        </a>
                        <a href="{{ route('gallery.villas') }}">
                            <p>Come Visit</p>
                        </a>
                        <div class="icon">
                            <a href="{{ route('gallery.villas') }}">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="destFooter">
                    <div class="number">O1</div>
                    <div class="desText flex">
                        <h4>Villas</h4>
                        <span class="flex">.</span>
                    </div>
                </div>
            </div>
            <div class="singleDestination">
                <div class="destImage">
                    <img src="{{ asset('images/plage.jpg') }}" alt="">
                    <div class="overlayInfo">
                        <a href="{{ route('private-beach') }}">
                            <h3>Private Beach</h3>
                        </a>
                        <a href="{{ route('private-beach') }}">
                            <p>Come see private beach</p>
                        </a>
                        <div class="icon">
                            <a href="{{ route('private-beach') }}">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="destFooter">
                    <div class="number">O2</div>
                    <div class="desText flex">
                        <h4>Private Beach</h4>
                        <span class="flex">.</span>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres éléments ici selon votre besoin -->
            <div class="singleDestination">
                <div class="destImage">
                    <img src="{{ asset('images/villa-complexe.jpg') }}" alt="">
                    <div class="overlayInfo">
                        <a href="{{ route('gallery.suits') }}">
                            <h3>The SUITS</h3>
                        </a>
                        <a href="{{ route('gallery.suits') }}">
                            <p>Come SUITS</p>
                        </a>
                        <div class="icon">
                            <a href="{{ route('gallery.suits') }}">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="destFooter">
                    <div class="number">O3</div>
                    <div class="desText flex">
                        <h4>SUITS</h4>
                        <span class="flex">.</span>
                    </div>
                </div>
            </div>
            <div class="singleDestination">
                <div class="destImage">
                    <img src="{{ asset('images/restau-marbe.jpeg') }}" alt="">
                    <div class="overlayInfo">
                        <a href="{{ route('gallery.restaurants') }}">
                            <h3>RESTAURANTS</h3>
                        </a>
                        <a href="{{ route('gallery.restaurants') }}">
                            <p>Come see restaurants</p>
                        </a>
                        <div class="icon">
                            <a href="{{ route('gallery.restaurants') }}">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="destFooter">
                    <div class="number">O4</div>
                    <div class="desText flex">
                        <h4> Restaurants</h4>
                        <span class="flex">.</span>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres éléments ici selon votre besoin -->
            <div class="singleDestination">
                <div class="destImage">
                    <img src="{{ asset('images/experiencev.jpg') }}" alt="">
                    <div class="overlayInfo">
                        <a href="{{ route('experiences') }}">
                            <h3>Experience</h3>
                        </a>
                        <a href="{{ route('experiences') }}">
                            <p>Come Experience</p>
                        </a>
                        <div class="icon">
                            <a href="{{ route('experiences') }}">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="destFooter">
                    <div class="number">O5</div>
                    <div class="desText flex">
                        <h4>Experience</h4>
                        <span class="flex">.</span>
                    </div>
                </div>
            </div>
            <div class="singleDestination">
                <div class="destImage">
                    <img src="{{ asset('images/etatsunis.png') }}" alt="">
                    <div class="overlayInfo">
                        <a href="{{ route('suites-panoramiques-et-suites-executives') }}">
                            <h3>Panorama Suites & Executive Suites</h3>
                        </a>
                        <a href="{{ route('suites-panoramiques-et-suites-executives') }}">
                            <p>Come see Panorama Suites & Executive Suites</p>
                        </a>
                        <div class="icon">
                            <a href="{{ route('suites-panoramiques-et-suites-executives') }}">
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="destFooter">
                    <div class="number">O6</div>
                    <div class="desText flex">
                        <h4> Panorama Suites & Executive Suites</h4>
                        <span class="flex">.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
