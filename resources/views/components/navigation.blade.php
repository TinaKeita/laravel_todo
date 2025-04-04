<header>
<nav>
    <ul>
        @guest
        <li><a href="/">Sākums</a></li>
        <li><a href="/why">Kādēļ nepieciešams</a></li>
        @endguest
        <li><a href="/todos">Visi uzdevumi</a></li>
        @auth
        <li><a href="/todos/create">Izveido uzdevumu</a></li>
        @endauth
        <li><a href="/diary">Dienasgrāmata</a></li>
        @auth
        <li><a href="/diary/create">Izveido dienasgrāmatas ierakstu</a></li>
        @endauth
        <li>|</li>
        @guest
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
        @endguest
        
        @auth
        <form method="POST" action="/logout">
            @csrf
            @method("DELETE")
            <li><button>Logout</button></li>
        </form> 
        @endauth
    
        
    </ul>
</nav>
</header>