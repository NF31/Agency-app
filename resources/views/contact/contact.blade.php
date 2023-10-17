@extends('layouts.base')

@section('title', 'Contact')

@section('content')
    <section class="contact">

        <h1> Contactez-nous </h1>


        <div class="contacteme">
            <h3> nous <br> </h3>

            <div class="cont">

                <div class="left">
                    <h2>Prendre contact</h2>
                    <p>N’hésitez pas à nous
                        <br>contacter, quels que
                        <br> soient vos besoins.
                        <br>
                        Nous sommes toujours heureux de
                        <br> vous
                        aider.
                    </p>


                </div>
                <div class="center">

                    <h2>Notre emplacement</h2>
                    <p>
                        Île de Siladen, parc marin de Bunaken, Manado.
                        <br>
                        Sulawesi du Nord – Indonésie
                        <br>
                        Markou Botsari str. 20
                        <br>
                        54643 Thessaloniki, Greece
                        <br>
                        Tel: +30 2310 825385
                        <br>
                        Fax: +30 2310 855642
                        <br>
                        General information: info@kateth.gr
                        <br>
                        Url: www.kateth.gr
                    </p>
                </div>
                <div class="right">
                    <h2> Téléphone/Email</h2>
                    <p>Téléphone : +62 811 4300 +62 811 4300 641
                        <br>
                        Courriel : info@siladen.com
                        <br>
                        Paliouri, 63085 Halkidiki, Greece
                        <br>
                        Tel: +30 23743 00713
                        <br>
                        Reservations: +30 2310 825385
                        <br>
                        Fax: +30 2310 855642
                        <br>
                        General information: info@kapparesort.com
                        <br>
                        Reservations: reservations@kapparesort.com
                        <br>
                        Manager: manager@kapparesort.com
                    </p>
                </div>
            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83928.92248610323!2d2.18077311027925!3d48.90055209797865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6650e2ac7a89f%3A0x275cffe2dfdbdb6b!2sMeli%C3%A1%20Paris%20La%20D%C3%A9fense!5e0!3m2!1sfr!2sfr!4v1695518372163!5m2!1sfr!2sfr"
                    style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


            <div class="contact-form">
                <div class="left">
                    <img src="{{ asset('images/a1.jpg') }}" alt="" srcset="">

                </div>
                <div class="right">
                    <h2>Pour plus d'informations</h2>

                    <p>Veuillez remplir le formulaire ci-dessous et nous
                        <br> prendrons contact avec vous dans les plus brefs délais.
                    </p>
                    {{--    @if ($errors)
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach



                        @error('firstname')
                            <p>The firtname is required!</p>
                        @enderror
                        @error('laststname')
                            <p>The lastname is required!</p>
                        @enderror
                        @error('email')
                            <p>The email is required!</p>
                        @enderror
                        @error('phone')
                            <p>The phone number is required!</p>
                        @enderror
                        @error('subject')
                            <p>The subject is required!</p>
                        @enderror
                        @error('message')
                            <p>The message is required!</p>
                        @enderror
                        @endif --}}
                    <form action="/contact" class="formBox" method="POST">
                        @csrf
                        <div class="inputBox w50">
                            <input type="text" name="firstname" id="firstname" placeholder="Enter your firstname"
                                autocomplete="given-name" value="{{ old('firstname') }}"
                                class="@if (!$errors->has('firstname') && old('firstname') !== null) valid-field @endif">
                            <label for="firstname">Firstname</label>
                            @error('firstname')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="inputBox w50">
                            <input type="text" name="lastname" id="lastname" placeholder="Enter your lastname"
                                autocomplete="family-name" value="{{ old('lastname') }}"
                                class="@if (!$errors->has('lastname') && old('lastname') !== null) valid-field @endif">
                            <label for="lastname">Lastname</label>
                            @error('lastname')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="inputBox w50">
                            <input type="text" name="email" id="email" placeholder="Enter your Email"
                                autocomplete="email" value="{{ old('email') }}"
                                class="@if (!$errors->has('email') && old('email') !== null) valid-field @endif">
                            <label for="email">Email</label>
                            @error('email')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="inputBox w50">
                            <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                                autocomplete="tel" value="{{ old('phone') }}"
                                class="@if (!$errors->has('phone') && old('phone') !== null) valid-field @endif">
                            <label for="phone">Phone number</label>
                            @error('phone')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="inputBox w50">
                            <input type="text" name="subject" id="subject" placeholder="What you talk in about?"
                                autocomplete="off" value="{{ old('subject') }}"
                                class="@if (!$errors->has('subject') && old('subject') !== null) valid-field @endif">
                            <label for="subject">Subject</label>
                            @error('subject')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="inputBox w100 erreur">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"
                                autocomplete="off" class="@if (!$errors->has('message') && old('message') !== null) valid-field @endif">{{ old('message') }}</textarea>
                            <label for="message"> Write your message here...</label>
                            @error('message')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="inputBox w100">
                            <button type="submit" class="msg">Envoyer votre msg</button>
                        </div>
                    </form>



                    @if (session('success'))
                        <div class="toast"> <!-- Classe "toast" sans "active" -->
                            <div class="toast-content">
                                <div class="icon check">
                                    <i class="fas fa-check-circle"></i> <!-- Icône de vérification -->
                                </div>
                                <div class="message">
                                    {{ session('success') }}
                                </div>
                            </div>
                            <span class="close">X</span>
                            <div class="progress"></div>
                        </div>
                    @endif



                </div>
            </div>


        </div>
          <div class="faq">
                <div class="left">
                    <h2>Voir nos FAQ</h2>
                    <p>
                        Les questions les plus fréquentes que nous recevons de nos clients
                        <br> sont traitées dans notre section FAQ. Jetez-y un coup d’œil pour
                        <br> obtenir une réponse immédiate à votre question.
                    </p>
                </div>
                <div class="right">
                    <div>
                        <a href="{{ route('faq') }}">
                        <button class="w100">
                            Aller à FAQ'S
                        </button>
                    </a>
                    </div>

                </div>
            </div>
    </section>



@endsection
