@extends('layouts.base')

@section('title', 'Villas')


@section('content')

    <!-- Le contenu de la page Villa ici -->
    <section class="villas">

        <div class="villa">
            <div class="titre">
                <h1>Villas en Chalkidique</h1>
            </div>
            <div class="villas-text">
                <p>

                    Le Kappa Resort est situé sur une plage pittoresque en Chalkidique. Il combine le luxe et le confort
                    d’une villa avec les équipements et les services d’un hôtel cinq étoiles.
                    <br> <br>
                    Chaque villa dispose d’une piscine privée, d’une cuisine équipée, d’un jardin exclusif et offre des vues
                    panoramiques sur le golfe de Toroneos. Profitez donc du soleil en sirotant des cocktails rafraîchissants
                    et en contemplant le bleu infini dans le confort de votre piscine privée.
                    <br> <br>
                    Notre Resort comprend des villas de luxe de quatre types différents (1, 2, 3 ou 4 chambres)..
                </p>
            </div>
        </div>

        <div class="lesvillas">
            <div class="ville">
                <a href="{{ route('villas.miami') }}">
                    <img src="{{ asset('images/villas.miami/miami-piscine.jpg') }}" alt="" srcset="">
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
            <div class="ville">
                <a href="{{ route('villas.lagos') }}">
                    <img src="{{ asset('images/villas.lagos/appart-lagos.jpg') }}" alt="" srcset="">
                </a>
                <div class="villas-contenu">
                    <div class="text">
                        <a href="{{ route('villas.lagos') }}">
                            <p>
                                <span>
                                    La
                                </span>

                                <span>
                                    Gos
                                </span>


                            </p>
                        </a>
                        <span> <a href="{{ route('villas.lagos') }}"class="private-pool">
                                with private pool
                            </a>
                        </span>
                    </div>
                    <div class="icons">
                        <div>
                            <img src="{{ asset('images/plan-icon.png') }}" alt="">
                            <span>200m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                            <span>48m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/bed.png') }}" alt="">
                            <span>to 8 guests</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lesvillas">
            <div class="ville">
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
            <div class="ville">
                <a href="{{ route('villas.ottawa') }}">
                    <img src="{{ asset('images/villas.ottawa/o22.png') }}" alt="" srcset="">
                </a>
                <div class="villas-contenu">
                    <div class="text">
                        <a href="{{ route('villas.ottawa') }}">
                            <p>
                                <span>
                                    Otta
                                </span>

                                <span>
                                    Wa
                                </span>


                            </p>
                        </a>
                        <span> <a href="{{ route('villas.ottawa') }}"class="private-pool">
                                with private pool
                            </a>
                        </span>
                    </div>
                    <div class="icons">
                        <div>
                            <img src="{{ asset('images/plan-icon.png') }}" alt="">
                            <span>200m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                            <span>48m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/bed.png') }}" alt="">
                            <span>to 8 guests</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lesvillas">
            <div class="ville">
                <a href="{{ route('villas.birmingham') }}">
                    <img src="{{ asset('images/villas.birmingham/b22.jpeg') }}" alt="" srcset="">
                </a>
                <div class="villas-contenu">
                    <div class="text">
                        <p> <a href="{{ route('villas.birmingham') }}">
                                Villa Birmingham
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
            <div class="ville">
                <a href="{{ route('villas.cannes') }}">
                    <img src="{{ asset('images/villas.cannes/c22.jpg') }}" alt="" srcset="">
                </a>
                <div class="villas-contenu">
                    <div class="text">
                        <a href="{{ route('villas.cannes') }}">
                            <p>
                                <span>
                                    Villa
                                </span>

                                <span>
                                    Cannes
                                </span>


                            </p>
                        </a>
                        <span> <a href="{{ route('villas.cannes') }}"class="private-pool">
                                with private pool
                            </a>
                        </span>
                    </div>
                    <div class="icons">
                        <div>
                            <img src="{{ asset('images/plan-icon.png') }}" alt="">
                            <span>200m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                            <span>48m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/bed.png') }}" alt="">
                            <span>to 8 guests</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lesvillas">
            <div class="ville">
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
            <div class="ville">
                <a href="{{ route('villas.hongkong') }}">
                    <img src="{{ asset('images/villas.hongkong/h22.jpg') }}" alt="" srcset="">
                </a>
                <div class="villas-contenu">
                    <div class="text">
                        <a href="{{ route('villas.hongkong') }}">
                            <p>
                                <span>
                                    Villa
                                </span>

                                <span>
                                    Hong Kong
                                </span>


                            </p>
                        </a>
                        <span> <a href="{{ route('villas.hongkong') }}"class="private-pool">
                                with private pool
                            </a>
                        </span>
                    </div>
                    <div class="icons">
                        <div>
                            <img src="{{ asset('images/plan-icon.png') }}" alt="">
                            <span>200m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/plan-piscine.png') }}" alt="">
                            <span>48m²</span>
                        </div>
                        <div>
                            <img src="{{ asset('images/bed.png') }}" alt="">
                            <span>to 8 guests</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

@endsection
