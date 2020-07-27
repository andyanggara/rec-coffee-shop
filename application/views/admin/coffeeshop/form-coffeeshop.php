<?php
$id = "";
$name = "";
$address = "";
$flat_rate = "";
$photo = "";
$review_rate = "";
$vector_s = 0;
$vector_v = 0;
$open_in = '';
$close_in = '';
if ($content == "Edit") {
    $id = (isset($account->id) ? $account->id : 0);
    $name = (isset($account->name) ? $account->name : '');
    $address = (isset($account->address) ? $account->address : '');
    $flat_rate = (isset($account->flat_rate) ? $account->flat_rate : 0);
    $photo = (isset($account->photo) ? $account->photo : '');
    $review_rate = (isset($account->review_rate) ? $account->review_rate : '');
    $vector_s = (isset($account->vector_s) ? $account->vector_s : 0);
    $vector_v = (isset($account->vector_v) ? $account->vector_v : 0);
    $open_in = (isset($account->open_in) ? $account->open_in : 0);
    $close_in = (isset($account->close_in) ? $account->close_in : 0);
}
?>

<!-- Daftar Coffee Shop -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $content ?> Coffee Shop</h1>
</div>
<!-- /Daftar Coffee Shop -->

<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form id="formCoffee" class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="mb-2 mr-2 badge badge-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <input type="hidden" name="content" value="<?php echo $content; ?>">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="review_rate" value="<?php echo $review_rate; ?>">
                            <input type="hidden" name="vector_s" value="<?php echo $vector_s; ?>">
                            <input type="hidden" name="vector_v" value="<?php echo $vector_v; ?>">

                            <div class="col-md-12 mb-3">
                                <label for="Name">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $name; ?>" required maxlength="50">
                                <?php echo form_error('name') ?>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please fill in the name.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="flat_rate">Flat Rate</label>
                                <input type="number" class="form-control" name="flat_rate" placeholder="Flat Rate" value="<?php echo $flat_rate; ?>" required>
                                <?php echo form_error('flat_rate') ?>
                                <div class="invalid-feedback">
                                    Please fill in the flat rate.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="open_in">Open In</label>
                                <input type="time" class="form-control" name="open_in" placeholder="Open In" value="<?php echo $open_in; ?>" required>
                                <?php echo form_error('open_in') ?>
                                <div class="invalid-feedback">
                                    Please fill in the open in.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="close_in">Close In</label>
                                <input type="time" class="form-control" name="close_in" placeholder="Close In" value="<?php echo $close_in; ?>" required>
                                <?php echo form_error('close_in') ?>
                                <div class="invalid-feedback">
                                    Please fill in the close in.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address" placeholder="Address" value="<?php echo $address; ?>" required maxlength="100">
                                <?php echo form_error('address') ?>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                                <div class="invalid-feedback">
                                    Please fill in the address.
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="upload-photo">Photo</label>
                                <input type="file" id="upload-photo" class="form-control" name="upload-photo" placeholder="Photo">
                                <input type="text" id="photo" class="form-control" name="photo" required hidden value="<?php echo $photo; ?>">
                                <?php echo form_error('photo') ?>
                                <div class="invalid-feedback">
                                    Please choose a photo.
                                </div>
                                <div id="invalid-images">
                                    Image size exceeds 2MB
                                </div>
                                <img id="view_photo" class="<?= $photo !== '' ? 'img-preview' : '' ?> mt-3" src="<?php echo $photo; ?>" />
                                <br>
                            </div>
                        </div>
                        <input id="submit" class="btn btn-primary" type="submit" value="Submit form">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            var images = $("#view_photo");
            images.addClass("img-preview");
            reader.onload = function(e) {
                if (input.files[0].size <= 2000000) {
                    images.show();
                    images.attr('src', e.target.result);
                    $('#invalid-images').hide();
                    $('#photo').val(e.target.result)
                } else {
                    images.hide();
                    images.attr('src', null);
                    $('#invalid-images').show();
                    $("#images").val('');
                }
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#upload-photo").change(function() {
        readURL(this);
    });

    $("#submit").click(function() {
        if (!$("#upload-photo").val()) {
            console.log($("#upload-photo").val())
            $("#upload-photo").addClass('invalid-input')
        }
    });
</script>