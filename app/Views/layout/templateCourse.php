<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Snapcoding CSS -->
  <link rel="stylesheet" href="/css/snapcodingcss.css">
  <!-- Sidebar CSS -->
  <link rel="stylesheet" href="/css/sidebars.css">
  <!--- BoxIcon CSS -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $("#sidebtn").on('click', function() {
        $(".sidebar").animate({
          "width": "toggle"
        }, {
          duration: 250,
          easing: "linear"
        });
        $(".sidebar").css("display", "flex");
        $(".overlay").animate({
          "opacity": "toggle"
        }, {
          duration: 250,
          easing: "linear"
        });
        $(".overlay").css("display", "block");
      });
      $(".overlay").on('click', function() {
        $(".sidebar").animate({
          "width": "toggle"
        });
        $(".sidebar").css("display", "none");
        $(".overlay").fadeOut(200);
        $(".overlay").css("display", "none");
      });
      $("#exitsidebar").on('click', function() {
        $(".sidebar").animate({
          "width": "toggle"
        });
        $(".sidebar").css("display", "none");
        $(".overlay").fadeOut(200);
        $(".overlay").css("display", "none");
      })
    });
  </script>
  <title><?= $title; ?></title>
</head>

<body>
  <nav class="sidebar shadow" style="left: 0;">
    <div class="d-flex flex-column p-3 text-white bg-dark" style="width: 280px;">
      <div class="d-flex flex-column justify-content-center">
        <div>
          <strong class="fs-4 p-3"><?= $coursename; ?></strong>
          <i class="bx bx-exit fs-3 position-absolute" id="exitsidebar" style="right: 20px; top: 20px;"></i>
        </div>
      </div>
      <hr>
      <ul class="nav nav-pills flex-column mb-auto" id="sidecontent">
        <?php print_r($sidecontent); ?>

      </ul>
      <!-- <ul class="nav nav-pills flex-column mb-auto" id="sidecontent">
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
        <li>
          <a href="#" class="nav-link text-white">
          </a>
        </li>
      </ul> -->
      <hr>
    </div>
  </nav>
  <div class="overlay" id="overlay"></div>
  <header>
    <nav class="navbar navbar-expand-lg shadow bg-white fixed-top" style="opacity: 0.9;">
      <div class=" container">
        <button type="button" id="sidebtn" class="btn btn-dark">
          <i class='bx bx-menu-alt-left '></i>
          <span>Course Menu</span>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <i class="bx bx-menu" style="color: black; font-size: 2em;"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
                  <a class="nav-link" style="color: #0C3555;" data-bs-toggle="modal" data-bs-target="#Login">Login</a>
                </li> -->
            <li class="nav-item">
              <a class="nav-link" style="color: #0C3555;" aria-current="page" href="/">Home</a>
            </li>
            <!-- <li class="nav-item">
                  <a class="nav-link" style="color: #0C3555;" href="/pages/forum">Forum</a>
                </li> -->
            <li class="nav-item">
              <a class="nav-link active" style="color: #0C3555;" href="<?= $courseurl; ?>"><?= $course; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color: #0C3555;" href="/pages/contact">Contact</a>
            </li>
          </ul>
          <hr>
        </div>
      </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  </header>
  <main>
    <?= $this->renderSection('content'); ?>
  </main>
  <footer class="snapfooter py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mb-3">
          <div class="d-flex align-items-center mb-4">
            <img src="/image/logo.png" width="15%" height="15%;">
            <h1 class="text-weight-bold px-3">
              SnapCoding
            </h1>
          </div>
          <ul class="list-unstyled text-muted small px-2">
            <li>
              <p>
                Designed and build with all the love in the community<br>
                and by the SnapCoding team.
                Thank you for participating to our site
              </p>
            </li>
            <li>
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All rights reserved | by Snapcoding
            </li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 px-5">
          <h5>Links</h5>
          <ul class="list-unstyled link-unstyled">
            <li>
              <a href="/" class="unstyled-link">Home</a>
            </li>
            <li>
              <a href="/pages/forum" class="unstyled-link">Forum</a>
            </li>
            <li>
              <a href="/pages/course" class="unstyled-link">Course</a>
            </li>
            <li>
              <a href="/pages/contact" class="unstyled-link">Contact</a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-lg-2">
          <h5>Course</h5>
          <ul class="list-unstyled link-unstyled">
            <li>
              <a href="course/python" class="unstyled-link">Python</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>