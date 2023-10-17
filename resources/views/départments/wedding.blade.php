@extends('layouts.base')

@section('title', 'Wedding')


@section('content')

<section class="wedding">
    <div class="wedd">
        <h2>Agency</h2>
        <span>Wedding</span>

    </div>

     <div class="centered-div">
        <h2>Kappa Resort Wedding</h2>
        <p>Kappa Resort is the perfect choice for your wedding reception. We are firm believers that your wedding should be as fabulous as you are. That is why we are here to listen to your thoughts, dreams, and desires and to organize everything together, taking into account every last detail. Our goal is to make this special day of your life unforgettable without having to go beyond your budget. At our facilities, we can serve wedding receptions up to 30 people.</p>
        <h3>6 + 1 reasons to choose us:</h3>
        <ul>
            <li>We have great knowledge of planning a wedding reception and local specialization in Paliouri</li>
            <li>We have the most romantic landscape and setting that you could find in Paliouri</li>
            <li>We do not use packages and forms, as we believe that every wedding should be unique and different</li>
            <li>We will give you all the attention you deserve, providing you with the best service</li>
            <li>You combine your ceremony, your stay, and your reception in the same place. This means that your dreams can come true without a huge budget</li>
            <li>We are flexible, and our proposals are value for money</li>
            <li>We are proud to have one of the best Chefs in northern Greece.</li>
        </ul>
    </div>




        <div class="wedding-photo">
            <h3>#Agencyrestaurant</h3>
            <div class="wedding-wrapper">
                <div class="wedding-gallery">
                    <div class="wedding-image"><span><img src="{{ asset('images/w1.jpeg') }}" alt=""></span></div>
                    <div class="wedding-image"><span><img src="{{ asset('images/w2.jpg') }}" alt=""></span></div>
                    <div class="wedding-image"><span><img src="{{ asset('images/w4.jpg') }}" alt=""></span></div>
                    <div class="wedding-image"><span><img src="{{ asset('images/w5.jpeg') }}" alt=""></span></div>
                    <div class="wedding-image"><span><img src="{{ asset('images/w6.jpg') }}" alt=""></span></div>
                    <div class="wedding-image"><span><img src="{{ asset('images/w8.jpg') }}" alt=""></span></div>
                    <div class="wedding-image"><span><img src="{{ asset('images/w9.jpg') }}" alt=""></span></div>

                </div>
            </div>
            <div class="wedding-box">
                <div class="wedding-details">
                    <span class="wedding-title">
                        Images <p class="wedding-current-img"></p>
                        of <p class="wedding-total-img"></p>
                    </span>
                    <span class="wedding-icon fas fa-times">  </span>
                </div>
                <div class="wedding-img-box">
                    <div class="wedding-slide prev beats">
                        <i class='bx bx-left-arrow-alt'></i>
                    </div>
                    <div class="wedding-slide next afro">
                        <i class='bx bx-right-arrow-alt'></i>
                    </div>
                    <img src="" alt="" class="ring">
                </div>
            </div>
        </div>

</section>
@endsection
