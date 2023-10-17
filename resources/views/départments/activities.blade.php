@extends('layouts.base')

@section('title', 'Activities')


@section('content')

<section class="activities">
    <div class="acti">
        <h2>Agency</h2>
        <span>Experiences</span>
    </div>
    <div class="head">
            <h2>ACTIVITIES</h2>
            <span>in Paliouri</span>
        </div>



    <div class="activ">

        <div class="left">
            <h2>ELECTRIC BIKE  <br> RENTAL</h2>
            <p>After a hearty breakfast to our restaurant, it’s high time you explored the local nature. The wooded area around the resort is appropriate for hours of endless hiking and mapping around. If you wish to combine sport activities with entertainment, there is always the possibility to rent a bike from our resort.</p>
        </div>

        <div class="right">
            <img src="{{ asset ('images/bike1.jpg')}}" alt="">
        </div>
    </div>

    <div class="activ inazuma">
        <div class="right">
            <img src="{{ asset ('images/PortadaYoga.jpg')}}" alt="">
        </div>
        <div class="left">
            <h2>FITNESS/YOGA   <br>INSTRUCTOR  </h2>
            <p>
                For those of you who are willing to maintain a good shape even on your vacation, all you must do is let us know! We will provide you with an aerobic or yoga instructor, who will train you exclusively. This way you will be able to taste our delicious Mediterranean cuisine fearlessly, without worrying about gaining extra weight!
            </p>
        </div>


    </div>

    <div class="activ inazuma">

        <div class="left">
            <h2>SUGGESTED HIKING  <br> ROUTES</h2>
            <p>
                Explore the unique combination of the green nature and blue sea. Halkidiki’s first peninsula hides plenty secret routes for you to discover. Feel free to ask our reception for further details n and suggested hiking trails.
            </p>
        </div>

        <div class="right">
            <img src="{{ asset ('images/SUGGESTED HIKING ROUTES-2.jpg')}}" alt="">
        </div>
    </div>

    <div class="activ inazuma">
        <div class="right">
            <img src="{{ asset ('images/SCUBA DIVING.jpg')}}" alt="">
        </div>
        <div class="left">
            <h2>SCUBA DIVING
            </h2>
            <p>
                If you are looking for a totally new experience, scuba diving could definitely be the one! Within a wide range of programs (for either beginners or advanced, kids or adults) you will have the chance to choose what better fits you. Feel free to explore Halkidiki’s deep blue waters with the proper equipment provided to you and being supervised by a diving professional.
            </p>
        </div>


    </div>

    <div class="activ inazuma">

        <div class="left">
            <h2>SNORKELING</h2>
            <p>
                For those of you who are not ready to scuba dive yet, snorkeling might be a good alternative option. Contact reception for snorkeling equipment and further information.
            </p>
        </div>

        <div class="right">
            <img src="{{ asset ('images/SNORKELING.jpg')}}" alt="">
        </div>
    </div>


    <div class="activ inazuma">
        <div class="right">
            <img src="{{ asset ('images/fishing.jpg')}}" alt="">
        </div>
        <div class="left">
            <h2>FISHING
            </h2>
            <p>
                Halkidiki is known for its fresh delicious fish. Therefore, we give all fishing lovers the chance to live a unique experience with our own sailing boat. Ask our skipper to provide you with the proper equipment.
            </p>
        </div>


    </div>


    <div class="activ inazuma">

        <div class="left">
            <h2>WINE TASTING</h2>
            <p>
                Wine tasting is for sure a particularly charming procedure for wine lovers. From time to time we organize wine tasting nights in our restaurant, where local producers have the chance to present their own best produced wines. They explain the differences between the varieties and answer to all related questions. Taste Halkidiki’s most exquisite wines in the comfort of our restaurant.
            </p>
        </div>

        <div class="right">
            <img src="{{ asset ('images/wine-tasting.jpg')}}" alt="">
        </div>
    </div>
</section>
@endsection
