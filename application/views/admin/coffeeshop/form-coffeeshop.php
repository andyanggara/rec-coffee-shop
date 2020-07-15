<?php
$id = "";
$name = "";
$address = "";
$flat_rate = "";
$photo = "";
if ($content == "Edit") {
    $id = $account->id;
    $name = $account->name;
    $address = $account->address;
    $flat_rate = $account->$flat_rate;
    $photo = $account->photo;
}
?>

<style>
    #invalid-images {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }
</style>

<!-- Daftar Admin -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $content ?> Coffee Shop</h1>
</div>
<!-- /Daftar Admin -->

<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <form class="needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                        <div class="form-row">
                            <?php if ($this->session->flashdata('success')) : ?>
                                <div class="mb-2 mr-2 badge badge-success">
                                    <?php echo $this->session->flashdata('success'); ?>
                                </div>
                            <?php endif; ?>

                            <input type="hidden" name="content" value="<?php echo $content; ?>">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">

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
                                <label for="photo">Photo</label>
                                <input type="file" id="photo" class="form-control" name="photo" placeholder="Photo" value="<?php echo $photo; ?>" accept="image/*">
                                <img id="view_photo" src="" class="mt-3" />
                                <br>
                                <?php echo form_error('photo') ?>
                                <div class="invalid-feedback">
                                    Please choose a photo.
                                </div>
                                <div id="invalid-images">
                                    Image size exceeds 2MB
                                </div>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" value="Submit form">
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
            images.css({
                "width": 150,
                "height": 150
            });
            reader.onload = function(e) {
                if (input.files[0].size <= 2000000) {
                    images.show();
                    images.attr('src', e.target.result);
                    $('#invalid-images').hide();
                    console.log('Image : ', input.files[0])
                    console.log('Photo : ', $('#photo').val())
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

    $("#photo").change(function() {
        readURL(this);
    });
</script>