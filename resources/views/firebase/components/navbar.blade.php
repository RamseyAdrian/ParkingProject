{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="home">Parking Website Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('home') }}">Login</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav> --}}

  <section class="header">
    {{-- <nav>
      <div class="nav-logo">
        <h1>Parking App</h1>
      </div>
      <div class="nav-links" id="navLinks">
        <ul>
          <li class="nav-item"><a href="{{ url('home') }}">HOME</a></li>
          <li class="nav-item"><a href="{{ url('login') }}">LOGIN</a></li>
        </ul>
      </div>
    </nav> --}}
    <div class="navbar">
      <div class="logo">
        <h2>Parking APP</h2>
      </div>
      <div class="nav-routes">
        <ul>
          <li><a href="{{ url('home') }}">HOME</a></li>
          <li><a href="{{ url('login') }}">LOGIN</a></li>
        </ul>
      </div>
    </div>

    <div class="text-box">
      <h1>UPer's Smart Parking Website</h1>
      <h3>Solution to secure your vehicle</h3>
      <a class="button" href="">Become a Member Now !</a>
    </div>
  </section>