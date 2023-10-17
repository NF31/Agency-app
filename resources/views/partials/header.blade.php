<header>
    <!-- Contenu du header ici -->
    <nav class="navbar">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="#" alt="AgencyResorts"></a>
    </div>
    <div class="navlinks-container">
        <ul class="links">
            <li><a href="{{ route('home') }}" aria-current="page">Home</a></li>
            <li>
                <a href="{{ route ('villas.villas')}}">Villas</a>
                <i class="bx bxs-chevron-down arrow gazo"></i>
                <ul class="htmlCss-sub-menu sub-menu">
                    <li><a href="{{ route ('villas.suits')}}">Suites</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route ('services')}}">Services</a>
                <i class="bx bxs-chevron-down arrow freeze"></i>
                <ul class="htmlCss-sub-menu sub-menu">
                    <li><a href="{{ route ('restaurants')}}">Restaurants</a></li>
                    <li><a href=" {{ route ('activities')}}">Activities</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ route ('destinations')}}">Destination</a>
                <i class="bx bxs-chevron-down arrow freeze"></i>
                <ul class="htmlCss-sub-menu sub-menu">
                    <li><a href="{{ route ('gallery')}}">Gallery</a></li>
                </ul>
            </li>
            <li><a href="#">Reservations</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
    <div class="auth-links">
        <a href="#">Login</a>
        <a href="#">Register</a>
    </div>
</nav>

</header>
