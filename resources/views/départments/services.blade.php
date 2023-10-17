@extends('layouts.base')

@section('title', 'Services')


@section('content')

    <section id="services">
        <div class="services">

            <div class="entete">
                <h2>Agency</h2>
                <span>Services</span>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="column">
                    <div class="effect">
                        <div class="effect-img">
                            <img src="{{ asset('images/massage.jpg') }}" alt="">
                        </div>
                        <div class="effect-text">
                            <div class="inner">
                                <h2>Massage</h2>
                                <span>Get eady for the utlimate relaxation </span>
                                <div class="effect-btn">
                                    <a href="{{ route('massage')}}" class="btn">Read more<i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="effect">
                        <div class="effect-img">
                            <img src="{{ asset('images/family_1.jpg') }}" alt="">
                        </div>
                        <div class="effect-text">
                            <div class="inner">
                                <h2>Boat</h2>
                                <span>Explore the hidden beauties. </span>
                                <div class="effect-btn">
                                    <a href=" {{ route('boat')}}" class="btn">Read more<i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="effect">
                        <div class="effect-img">
                            <img src="{{ asset('images/restau-piscine.jpg') }}" alt="">
                        </div>
                        <div class="effect-text">
                            <div class="inner">
                                <h2>Restaurant</h2>
                                <span>Unique gastronomic experience</span>
                                <div class="effect-btn">
                                    <a href=" {{ route ('restaurants')}}" class="btn">Read more<i class='bx bx-right-arrow-alt'></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="div-services">
            <div class="text-services">

                <h2>WEDDING</h2>
                <span>and other receptions</span>
                <p>
                    Kappa Resort is the perfect choice for your wedding reception. We are firm believers that your
                    wedding should be as fabulous as you are, That is why we are here to listen to your thoughts, dreams
                    and desires and to organize everything together</p>
              <a href="{{ route ('wedding')}}">
                 <button id="servicesbtn1">More infos <i class='bx bx-right-arrow-alt'></i></button>
            </a>

            </div>
            <div class="img-services">
                <img src="{{ asset('images/w7.jpg') }}" alt="" class="s1">

            </div>



        </div>
        <div class="div-services ahbon">
            <div class="img-services afoizo">
                <img src="{{ asset('images/chat.jpg') }}" alt="" class="s1 ">

            </div>
            <div class="text-services">

                <h2>PETS</h2>
                <span>for our little friends</span>
                <p>
                    Pets are welcome in Kappa Resort (up to one pet per booking). Surprises and gifts await our little ones.
                    Croquettes, food bowls, etc.

                    ***Pets are not allowed in villa Ariadne</p>

            </div>




        </div>


        <div class="div-services">
            <div class="text-services">

                <h2>CAR RENTALS</h2>
                <span>for your tours</span>
                <p>
                    Our reception staff is willing to assist you for the best car rental choice. Our expertized partners can
                    offer you a wide selection of cars to choose the one that fits you. You also have the posibillity to
                    pick up/return the car wherever it suits you (SKG Airport or Kappa Resort).</p>

            </div>
            <div class="img-services lakey">
                <img src="{{ asset('images/clé-loc.jpg') }}" alt="" class="s1">

            </div>



        </div>

        <div class="div-services ahbon">
            <div class="img-services afoizo vl">
                <img src="{{ asset('images/velo.jpg') }}" alt="" class="s1 ">

            </div>
            <div class="text-services">

                <h2>ELECTRIC BIKE RENTALS</h2>
                <span>for your nearby explorations</span>
                <p>
                    After a hearty breakfast to our restaurant, it’s high time you explored the local nature. The wooded
                    area around the resort is appropriate for hours of endless hiking and mapping around. If you wish to
                    combine sport activities with entertainment, there is always the possibility to rent a bike from our
                    resort. </p>

            </div>




        </div>



        <div class="div-services">
            <div class="text-services">

                <h2>VIP TRANSFERS</h2>
                <span>Safe and luxurious transport</span>
                <p>
                    Contact us and reserve a safe transfer from/to Thessaloniki Airport (SKG) upon your arrival/departure at
                    our resort. Take advantage of the daily excursions we organize and explore the surrounding area,, as
                    well as all Halkidiki’s and Thessaloniki’s sights.</p>

            </div>
            <div class="img-services van">
                <img src="{{ asset('images/van-luxe.jpg') }}" alt="" class="s1">

            </div>



        </div>

        <div class="div-services ahbon">
            <div class="img-services afoizo">
                <img src="{{ asset('images/hall-chicago.jpg') }}" alt="" class="s1 ">

            </div>
            <div class="text-services">

                <h2> RECEPTION</h2>
                <span>always at your service</span>
                <p>
                    Our reception’s multilingual staff is always at your disposal, 24 hours a day. Enjoy unique personalized
                    services such as express check in/check out, luggage transfer to your villa/suite, as well as day trip
                    suggestions. </p>

            </div>




        </div>

        <div class="div-services">
            <div class="text-services">

                <h2>TECHNOLOGY</h2>
                <span>Access always & everywhere FREE</span>
                <p>
                    Kappa Resort gives you free Wi-Fi access in all accommodations and all public areas, offering constant internet connection. Request a Pioneer sound system and listen to your favorite music. Give your children the chance to spend some pleasant time with the Playstation gaming console.</p>

            </div>
            <div class="img-services tech">
                <img src="{{ asset('images/technologie-hotel.jpg') }}" alt="" class="s1">

            </div>



        </div>

        <div class="div-services ahbon">
            <div class="img-services afoizo pers">
                <img src="{{ asset('images/personnel.jpg') }}" alt="" class="s1 ">

            </div>
            <div class="text-services">

                <h2> HOUSEKEEPING</h2>
                <span>With personalized services</span>
                <p>
                    Kappa Resort offers daily housekeeping. Your towels are changed on a daily basis, while the sheets every three days (upon request we can offer you extra afternoon cleaning). Do not hesitate to ask for various personalized services, such as further towel and sheet change (upon request), ironing and dry cleaning, babysitting, flower arrangements, as well as room service. </p>

            </div>




        </div>


        <div class="div-services play">
            <div class="text-services">

                <h2>PLAYGROUND</h2>
                <span>Fun & game</span>
                <p>
                    Kappa Resort obtains a playground area where kids are able to spend several hours of endless fun and play. From time to time we organize special events for our little friends held by experienced animateur, while parents can enjoy their afternoon coffee carefree.</p>

            </div>
            <div class="img-services play">
                <img src="{{ asset('images/playground.jpg') }}" alt="" class="s1">

            </div>



        </div>
    </section>



@endsection
