<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website made by NF. | Réalisé par NF.">
    <meta name="description" content="Web site created using create-laravel-app" />
    <meta name="author" content="NFdev21" />
    <meta name="robots" content="index,follow" /> <!-- Autoriser l'indexation -->
    <!-- Ou -->
    <meta name="robots" content="noindex,nofollow" /> <!-- Interdire l'indexation -->
    <meta property="og:title" content="Titre pour Facebook" />
    <meta property="og:description" content="Description pour Facebook" />
    <meta property="og:image" content="URL de l'image pour Facebook" />
<meta name="keywords" content="hotel, reservation, accommodation, stay, travel, vacation, hotel rooms, luxury accommodation, special offers, rates, discounts, online booking, availability, hotel booking, business travel, romantic getaway, budget hotel, suites, customer service, amenities, central location, inn, hostel, single room, double room, family suite, breakfast included, pool, spa, restaurant, fitness center, airport shuttle, tourist attraction, downtown, special rates, last-minute deals, free cancellation, cancellation policy, guest reviews, hotel reviews, ratings, comments, group reservations, special events, weddings, business meetings, conferences, conventions, group rates, group accommodation, nightly rates, weekend rates, extended stay, weekly rates, long-term reservations, promotions, seasonal offers, transportation, shuttle service, free parking, guaranteed booking, hassle-free stay, travel experience, customer satisfaction, secure booking, comfortable stay, budget-friendly accommodation, quick booking, flexible booking, secure online booking, beachfront accommodation, mountain accommodation, downtown accommodation, countryside accommodation, family getaway, solo travel, business travel, romantic getaway, special events, parties, weddings, meetings, conferences, relaxation, adventure, culture, history, gastronomy, entertainment, leisure, exploration, discoveries, urban escape, outdoor escape, holiday booking, all-inclusive stay, vacation package, luxury stay, budget stay, comfortable stay, accommodation for all budgets, best hotel choice, room selection, direct booking, unforgettable experience, hospitality excellence, outstanding service, member special rates, member benefits, loyalty program, satisfaction guarantee, explore our hotel, book now, online special offers, easy online booking, fast online booking, best rates online, secure online booking, hassle-free booking, book today, save on your stay, save with us, customer satisfaction guaranteed, easy online booking, fast online booking, secure online booking, worry-free booking, book now and save, quality accommodation, online special rates, direct online booking, real-time availability, book now for an unforgettable experience, quick and easy online booking, explore our selection of hotels, direct booking with satisfaction guarantee, plan your trip, explore our special offers, discover our competitive rates, book with us for an exceptional travel experience, book online today for our best rates, customer satisfaction guarantee, book directly for exclusive offers, book online with confidence, discover our selection of quality hotels, book directly with additional benefits">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <title> {{ config('app.name') }} - @yield('title')</title>

</head>

<body>
    <!-- Inclure le header -->
    @include('partials.header')

    <main>
        <!-- Contenu spécifique à chaque page -->
        @yield('content')
    </main>

    <!-- Inclure le footer -->
    @include('partials.footer')




    <!-- Inclure le script JavaScript -->
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>

</html>
