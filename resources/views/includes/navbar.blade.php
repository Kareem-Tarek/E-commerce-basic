<nav class="navbar navbar-expand-md navbar-light bg-dark text-light fixed-top py-2" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{ route('index') }}">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/#masthead">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="http://localhost:8000/#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("categories.index") }}">Categories</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("products.index") }}">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route("contact") }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>