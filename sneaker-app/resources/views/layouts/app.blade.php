<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT ZONA KARYA NUSANTARA</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/LOGOJEZ.png') }}" alt="jezlogo">
            </div>
            <nav>
                <div class="button">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm">
                <div class="footer-section location">
                    <h4>Location</h4>
                    <img src="{{ asset('images/malang2.jpeg') }}" alt="Map">
                </div>
              </div>

              <div class="col-sm">
                <div class="footer-section company">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Work</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
              </div>
              <div class="col-sm">
                <div class="footer-section contact">
                    <h4>Contact Us</h4>
                    <ul>
                    <li><a href="https://www.instagram.com/">@instagram</a></li>
                    <li><a href="mailto:hr@jez.co.id">hr@jez.co.id</a></li>
                </ul>
                </div>
              </div>
            </div>
          </div>
                 
        <div class="footer-bottom">
            <div class="row justify-content-center">
            <p>Jez Sport. | PT. Zona Karya Nusantara</p>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>
