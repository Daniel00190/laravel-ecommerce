<link rel="stylesheet" href="{{ secure_asset('css/nav.css') }}">




<nav>
    <div class="logo">
        <a href="/">Hullirtong</a>
    </div>
    <ul class="nav-links">

        @auth
        <li><a href="/">Home</a></li>
        <li><a href="/shop">Products</a></li>
        <li>Hello, {{ auth()->user()->name }}</li>
        <form action="/logout" method="POST" class="logout">
            @csrf    
            <li> <button type="submit">Logout</button></li>
        </form>
        <li><a href="/cart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg>{{ $orderCount }}</a></li>
        @endauth

        @guest
        <li><a href="/">Home</a></li>
        <li><a href="/shop">Products</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/cart"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                </svg> 0</a></li>

        @endguest

        
    </ul>
    <div class="menu-icon">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>


</nav>

<script src="{{ secure_asset('js/nav.js') }}"></script>



