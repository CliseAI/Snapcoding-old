<!doctype html>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col text-center text-md-start">
            <h1 class="mb-4">Email Us</h1>
            <p class="motto">
                Send a message and feedback to us !
            </p>
        </div>
    </div>
    <hr>
</div>
<div class="content">
    <div class="container">
        <div class="row mx-auto align-items-center">
            <form id="contact-form" method="post" action="contact.php" role="form">
                <div class="messages"></div>
                <div class="controls">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_name">Firstname *</label>
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname" required="required" data-error="Firstname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_lastname">Lastname *</label>
                                <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname" required="required" data-error="Lastname is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_email">Email *</label>
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Valid email is required.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_message">Message *</label>
                                <textarea id="form_message" name="message" class="form-control" placeholder="Message for me" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="text-muted">
                                <strong>*</strong> These fields are required.
                            </p>
                            <input type="submit" class="btn btn-success btn-send" value="Send message">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="my-5"></div>
</div>
<?= $this->endSection(); ?>