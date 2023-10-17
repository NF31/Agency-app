@extends('layouts.base')

@section('title', 'Restaurants')


@section('content')

    <section class="restaurants">
        <div class="rest">
            <h2>Agency</h2>
            <span>Experiences</span>
        </div>



        <div class="restau">

            <div class="left">


                <h2>ACTIVITIES</h2>
                <span>in Paliouri</span>
                <p>

                    Get your day started with a hearty breakfast at our restaurant’s buffet. Afterwards, feel free to visit
                    the bar to taste our wide range of coffees, fresh juices, soft drinks, and later on cocktails, and the
                    excellent wine variety from our cellar.
                    <br> <br>
                    During the day have a light snack at the beach or enjoy a fresh fruit salad from the comfort of your
                    villa or suite right by your pool (room service is provided 15 hours a day). Reserve your dinner table
                    and get ready to explore our creative gourmet dishes, inspired by the Mediterranean cuisine. Our
                    friendly staff is always ready to assist you and our chef will satisfy the most discerning of guests.
                    Kappa Resort’s team share the same philosophy: “Don’t hesitate… just name it!”
                    <br> <br>
                    For the most memorable culinary experience just choose our Exceptional Half Board option and indulge in
                    the local cuisine, specialties and culture through delicious and authentic meals with a rich breakfast
                    buffet and specially designed a la carte menu for your dinner.
                </p>
            </div>

            <div class="right">
                <img src="{{ asset('images/restaudbx.jpg') }}" alt="">
            </div>
        </div>


        <div class="restau-photo">
            <h3>#Agencyrestaurant</h3>
            <div class="wrapper">
                <div class="gallery">
                    <div class="image"><span><img src="{{ asset('images/restau-paris.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-paris1.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-paris2.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-personne.png') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-piscine.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restaudbx.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restaurant-antibes.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/Restaurant-Manager.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restaurant-marseille.png') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/Restaurant-The-Bazaar-by-José-Andrés-au-SLS-Hotel-à-Los-Angeles.png') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro1.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro2.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro3.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro4.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro5.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro6.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro7.png') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro8.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-gastro9.jpg') }}" alt=""></span></div>
                    <div class="image"><span><img src="{{ asset('images/restau-marbe.jpeg') }}" alt=""></span></div>
                </div>
            </div>
            <div class="preview-box">
                <div class="details">
                    <span class="title">
                        Images <p class="current-img"></p>
                        of <p class="total-img"></p>
                    </span>
                    <span class="icon fas fa-times">  </span>
                </div>
                <div class="img-box">
                    <div class="slide prev svg">
                        <i class='bx bx-left-arrow-alt'></i>
                    </div>
                    <div class="slide next lakd">
                        <i class='bx bx-right-arrow-alt'></i>
                    </div>
                    <img src=""  class="dress">
                </div>
            </div>
        </div>


    </section>
@endsection
