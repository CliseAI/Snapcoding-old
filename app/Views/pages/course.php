<!doctype html>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="home">
    <div class="container">
        <div class="row">
            <div class="col-md-6 px-5">
                <h1 class="mb-4">SnapCoding Course</h1>
                <p class="motto">
                    Our group designed a
                    coding site as simple as possible so that people who already
                    know coding or never know coding can learn and understand.
                    It also has a forum that makes it easier for users to ask each other questions.
                    With this forum, it will allow everyone who has never known code to familiarize
                    themselves with the encoding environment.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row px-5">
            <hr class="my-2">
            <h2>
                Available Course
            </h2>
        </div>
        <div class="row mx-auto align-items-center my-5">
            <div class="col-md-5 px-5">
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