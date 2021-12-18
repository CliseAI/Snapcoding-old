<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- Snapcoding CSS -->
  <link rel="stylesheet" href="/css/snapcodingcss.css">
  <!-- BoxIcons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <title><?= $title; ?></title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/">SnapCoding</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-distribute-vertical" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 1.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5zm0 13a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5z" />
            <path d="M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z" />
          </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="modal" data-bs-target="#Login">Login</a>
                </li> -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <!-- <li class="nav-item">
                  <a class="nav-link" href="/pages/forum">Forum</a>
                </li> -->
            <li class="nav-item">
              <a class="nav-link" href="/pages/course">Course</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/pages/contact">Contact</a>
            </li>
          </ul>
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
    <div class="py-4"></div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>