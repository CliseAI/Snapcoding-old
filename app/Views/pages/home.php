<!doctype html>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="home">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto col-md-4 order-md-2 col-lg-5 d-flex justify-content-center">
                <img src="/image/logo.png" width="60%" height="60%" class="img-fluid mb-4" role="img">
            </div>
            <div class="col-md-8 order-md-1 col-lg-7 text-center text-md-start">
                <h1 class="mb-4">Learning Faster with SnapCoding</h1>
                <p class="motto">
                    Learn to code with our beginner-friendly tutorials and examples. Read tutorials, try examples, write programs, and learn to code with SnapCoding.
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
                    <img src="https://img.icons8.com/color/48/000000/python--v1.png" class="image-fluid" />
                    <h2 class="text-weight-bold">Python</h2>
                </div>
                <div>
                    <p class="lead">
                        Python is an interpreted high-level general-purpose programming language.
                        Its design philosophy emphasizes code readability with its use of significant indentation.
                        Its language constructs as well as its object-oriented approach aim to help programmers write clear,
                        logical code for small and large-scale projects.
                    </p>
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
                <a class="btn btn-lg btn-outline-primary" href="/python">
                    Learn !
                </a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>