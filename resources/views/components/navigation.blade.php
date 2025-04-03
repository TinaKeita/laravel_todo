<header>
<nav>
    <ul>
        <li><a href="/">Sākums</a></li>
        <li><a href="/why">Kādēļ nepieciešams</a></li>
        <li><a href="/todos">Visi uzdevumi</a></li>
        <li><a href="/todos/create">Izveido uzdevumu</a></li>
        <li><a href="/diary">Dienasgrāmata</a></li>
        <li><a href="/diary/create">Izveido dienasgrāmatas ierakstu</a></li>
        <li>|</li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
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