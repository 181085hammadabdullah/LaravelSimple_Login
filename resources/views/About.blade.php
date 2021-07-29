<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('links')
    <title>Document</title>
    <style>
        html,
body,
header,
.view {
  height: 100%;
}

@media (max-width: 740px) {
  html,
  body,
  header,
  .view {
    height: 1000px;
  }
}
@media (min-width: 800px) and (max-width: 850px) {
  html,
  body,
  header,
  .view {
    height: 600px;
  }
}

.btn .fa {
  margin-left: 3px;
}

.top-nav-collapse {
  background-color: #424f95 !important;
}

.navbar:not(.top-nav-collapse) {
  background: transparent !important;
}

@media (max-width: 991px) {
  .navbar:not(.top-nav-collapse) {
    background: #424f95 !important;
  }
}

.btn-white {
  color: black !important;
}

h6 {
  line-height: 1.7;
}

.rgba-gradient {
  background: -moz-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: -webkit-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: -webkit-gradient(linear, 45deg, from(rgba(42, 27, 161, 0.7)), to(rgba(29, 210, 177, 0.7)));
  background: -o-linear-gradient(45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
  background: linear-gradient(to 45deg, rgba(42, 27, 161, 0.7), rgba(29, 210, 177, 0.7) 100%);
}
    </style>
</head>
<body>
    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
          <div class="container">
            <a class="navbar-brand" href="#">
              <strong>MDB</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="About">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
                </li>
              </ul>
              <form class="form-inline">
                <div class="md-form my-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
              </form>
            </div>
          </div>
        </nav>
        <!-- Full Page Intro -->
        <div class="view" style="background-image: url('https://scriptly.org/wp-content/uploads/2016/09/OURSTORY.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
          <!-- Mask & flexbox options-->
          <div class="mask rgba-gradient align-items-center">
            <!-- Content -->
            <div class="container">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
               
              </div>
              <!--Grid row-->
            </div>
            <!-- Content -->
          </div>
          <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
      </header>
     <main>
         <div class="container col-lg-4">
            
         </div>

     </main>
     
</body>
</html>