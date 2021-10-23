<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Snapcoding CSS -->
    <link rel="stylesheet" href="snapcodingcss.css">
    <title>SnapCoding</title>
  </head>
  <body>
      <header>
        <nav class="navbar navbar-expand-lg">
          <div class="container">
            <a class="navbar-brand" href="#">SnapCoding</a>           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-distribute-vertical" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M1 1.5a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5zm0 13a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 0-1h-13a.5.5 0 0 0-.5.5z"/>
                  <path d="M2 7a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7z"/>
                </svg>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
              <ul class="navbar-nav">               
                <li class="nav-item">
                  <a class="nav-link" data-bs-toggle="modal" data-bs-target="#Login" href="#">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Forum</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Course
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Python</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
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
          <div class="home">
              <div class="container">
                  <div class="row">                     
                      <div class="col-8 mx-auto my-auto col-md-4 order-md-2 col-lg-5 d-flex justify-content-center">
                          <img src="image/logo.png" width="70%" height="70%" class="img-fluid mb-3" role="img">
                      </div>
                      <div class="col-md-8 order-md-1 col-lg-7 text-center text-md-start">
                        <h1 class="mb-3">Learning Faster with SnapCoding</h1>
                        <p class="motto">                          
                            Our group designed a
                            coding site as simple as possible so that people who already
                            know coding or never know coding can learn and understand.
                            It also has a forum that makes it easier for users to ask each other questions.
                            With this forum, it will allow everyone who has never known code to familiarize
                            themselves with the encoding environment.
                        </p>
                        <div class="d-flex flex-column flex-md-row">
                          <a href="#" class="btn btn-lg btn-outline-secondary mb-3">SignUp !</a>
                        </div>
                      </div>                                         
                  </div>         
              </div>             
          </div>
          <div class="content">
              <div class="container">
                  <div class="row mx-auto my-5 align-items-center">
                      <div class="col-md-5 px-0">
                          <div class="d-flex align-items-center">
                              <img src="https://img.icons8.com/color/48/000000/python--v1.png" class="image-fluid"/>
                              <h2 class="text-weight-bold">Python</h2>
                          </div>                             
                          <div>
                              <p class="lead"> 
                                  Python is an interpreted high-level general-purpose programming language. 
                                  Its design philosophy emphasizes code readability with its use of significant indentation. 
                                  Its language constructs as well as its object-oriented approach aim to help programmers write clear, 
                                  logical code for small and large-scale projects.
                              </p>
                              <a class="btn btn-lg btn-outline-primary">
                                  Learn !
                              </a>
                          </div>
                      </div>
                      <div class="col-md-7 py-5" style="padding: 0 10% 0 10%">
                          <p class="code-example">
                              print("Hello World!")
                          </p>
                          <p class="code-example">
                              a = "hello world"<br>
                              print(a)
                          </p>
                      </div>
                  </div>
              </div>
          </div>         
      </main>
      <footer class="snapfooter py-5">
          <div class="container">
              <div class="row">
                  <div class="col-lg-4 mb-3">
                      <div class="d-flex align-items-center mb-4">
                          <img src="image/logo.png" width="15%" height="15%;">
                          <h1 class="text-weight-bold">
                              SnapCoding
                          </h1>
                      </div>
                      <ul class="list-unstyled text-muted small px-2">
                          <li>
                              <p>
                                  Designed and build with all the love in the community
                                  by the SnapCoding team
                                  Thank you for participating to our site
                              </p>
                          </li>
                          <li>
                              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by Snapcoding
                          </li>
                      </ul>
                  </div>
                  <div class="col-6 col-lg-2 px-5">
                      <h5>Links</h5>
                      <ul class="list-unstyled link-unstyled">
                          <li>
                              <a href="#" class="unstyled-link">Home</a>
                          </li>
                          <li>
                              <a href="#" class="unstyled-link">Forum</a>
                          </li>
                          <li>
                              <a href="#" class="unstyled-link">Course</a>
                          </li>
                          <li>
                              <a href="#" class="unstyled-link">About</a>
                          </li>
                      </ul>
                  </div>
                  <div class="col-6 col-lg-2">
                      <h5>Course</h5>
                      <ul class="list-unstyled link-unstyled">
                          <li>
                              <a href="#" class="unstyled-link">Python</a>
                          </li>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>