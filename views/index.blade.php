<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Tiket Online</title>

    <!-- Connect to Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <!-- Connect to CSS -->
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
  </head>
  <body>
    <!-- Awalan Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">Bioskop Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="menu.html">Film</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Contact Us
              </a>
              <ul
                class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="https://api.whatsapp.com/send/?phone=085697153180&text&app_absent=0">Whatsapp</a>
                </li>
                <li>
                  <a class="dropdown-item" href="https://www.instagram.com/mhmd.wildnn/">Instagram
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href='/register'>Sign up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href='/login'>Log in</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhiran Navbar -->

    <!-- Awalan Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <h1 class="display-4">
              BISKOP ID,<br />
              Referensi film terbaru.
            </h1>
            <p>Selalu Update Seputar Dunia Perfilman.</p>
            <a class="btn btn-primary btn-lg" href="PesanSekarang.html" role="button">Pesan Tiket
              </a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Akhiran Carousel -->

<br><br><br>

<!-- Awalan Card -->
      <div class="row">
      <div class="card" style="width: 18rem;">
  <img src="img/spiderman.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Spider-Man: No Way Home (IMAX 2D)</h5>
    <br><br>
    <a href='/flexbox' class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/sing2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Sing 2</h5>
    <br><br>
    <a href='/flexbox2' class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/kings man.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">The King's Man</h5>
    <br><br>
    <a href='/flexbox3' class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="img/ice road.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">The Ice Road</h5>
    <br><br>
    <a href='/flexbox4' class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<!-- Akhiran Card -->

<!-- Awalan Feature -->


    <!-- Awalan Footer -->
    <div class="bg-dark footer-bottom">
        <p>BISKOP ID is the leading movie ticket booking application from Indonesia. 
          Book your movie tickets, read the latest movie news at ease, quick & secure without any hassle.</p>
    </div>
    <!-- Akhiran Footer -->

    <!-- Connect to Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </body>
</html>
