@extends('layouts.base')

@section('title', 'Destinations')


@section('content')

    <section class="destinations">
        <div class="desti">
            <h2>Agency</h2>
            <span>DESTINATIONS</span>
        </div>

        <div class="desti-heading">
            <h2>DESTINATION</h2>
            <span> Paliouri, Halkidiki </span>
        </div>
        <div class="desti-service">
            <p>
                At the southern end of Kassandra peninsula, only 120 km from Thessaloniki Aiport (SKG), lies Paliouri, a
                quiet and traditional village. It is built on a hill, amphitheatrically towards Toroneos bay and it is
                surrounded by pine forest. Paliouri is know for its deep blue sandy beaches. It remains a stable attraction
                for tourists, especially during summer season.
                <br> <br>
                History
                <br> <br>
                An old legend claims that today Paliouri was an ancient city named Theramvos, which is confirmed by
                archaeological finds from the area, while the city is also mentioned by Herodotus. According to Herodotus,
                the city recruited forcibly by Xerxes and speculated that this is why there are no reports of later writers.
                During the period of Turkish rule, Paliouri was one of the 12 villages that formed the foundation of
                Gkazanfer Aga and villagers participated in the Revolution of 1821. The name of the village is due to
                “paliouria”, thorny shrubs used previously for fencing houses. It belongs to the Municipality of Kassandra
                and obtains all modern hospitality facilities and services. There are a lot of foreign visitors, mainly
                during summer months. The village still retains its traditional character consisting of narrow streets and
                many houses with 19th-century architecture. Finally, if you get there, do not forget to buy honey and olive
                oil, products for which Paliouri is famous for.
                <br>
                Finally, apart from Paliouri, we would suggest you to visit the other picturesque and traditional villages
                of Kassandra and the enchanting beaches.
            </p>
        </div>

        <div class="desti-gallery">
            <h2>#Halkidikidestination</h2>

            <div class="desti-main">
                <img src="{{ asset ('images/internet.jpg')}}" alt="">
                <img src="{{ asset ('images/maison-ilemaurice.png')}}" alt="">
                <img src="{{ asset ('images/internet.jpg')}}" alt="">
                <img src="{{ asset ('images/experience.png')}}" alt="">
                <img src="{{ asset ('images/maison-ilemaurice.png')}}" alt="">
                <img src="{{ asset ('images/experience.png')}}" alt="">
                <img src="{{ asset ('images/maison-ilemaurice.png')}}" alt="">
                <img src="{{ asset ('images/internet.jpg')}}" alt="">
                <img src="{{ asset ('images/maison-ilemaurice.png')}}" alt="">
                <img src="{{ asset ('images/internet.jpg')}}" alt="">
                <img src="{{ asset ('images/maison-ilemaurice.png')}}" alt="">
                <img src="{{ asset ('images/internet.jpg')}}" alt="">
            </div>
        </div>
    </section>
@endsection
