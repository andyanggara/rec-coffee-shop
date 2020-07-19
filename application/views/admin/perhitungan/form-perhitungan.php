<?php
$review_length = count($kriteriaList);
$id = "";
$admin_id = "";
$coffeeshop_id = "";
if ($content == "Edit") {
    $id = (isset($account->id) ? $account->id : 0);
    $admin_id = (isset($account->admin_id) ? $account->admin_id : '');
    $coffeeshop_id = (isset($account->coffeeshop_id) ? $account->coffeeshop_id : '');
    $review = (isset($account->review) ? explode(",", $account->review) : array_fill(0, $review_length, array('code' => '', 'value_weight' => '')));
} else {
    $review = array_fill(0, $review_length, array('code' => '', 'value_weight' => ''));
}
// var_dump($account);
// echo '</br>';
// $account->review = explode(",", $account->review);
// var_dump($account->review);
// echo '</br>';
// var_dump($coffeeshop);
// echo '</br>';
?>

<style>
    #invalid-images {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545;
    }

    .img-preview {
        width: 150px;
        height: 150px;
    }
</style>

<!-- Daftar Penilaian -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $content ?> Penilaian</h1>
</div>
<!-- /Daftar Penilaian -->

<div class="app-main__inner">
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card shadow">
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
                                <label for="admin_id">Admin Name</label>
                                <select class="form-control" name="admin_id">\
                                    <option value="" selected disabled>Select Admin</option>
                                    <?php foreach ($adminList as $admin) { ?>
                                        <option value="<?= $admin->id ?>" <?php if ($admin_id === $admin->id) echo 'selected'; ?>><?= $admin->name; ?></option>
                                    <?php } ?>
                                </select>
                                <?php echo form_error('admin_id') ?>
                                <div class="invalid-feedback">
                                    Please choose a admin name.
                                </div>
                            </div>

                            <div class="col-md-12 mb-3">
                                <label for="coffeeshop_id">Coffee Shop Name</label>
                                <select class="form-control" name="coffeeshop_id">\
                                    <option value="" selected disabled>Select Coffee Shop</option>
                                    <?php foreach ($coffeeshopList as $coffeeshop) { ?>
                                        <option value="<?= $coffeeshop->id ?>" <?php if ($coffeeshop_id === $coffeeshop->id) echo 'selected'; ?>><?= $coffeeshop->name; ?></option>
                                    <?php } ?>
                                </select>
                                <?php echo form_error('coffeeshop_id') ?>
                                <div class="invalid-feedback">
                                    Please choose a coffee shop name.
                                </div>
                            </div>

                            <?php
                            foreach ($kriteriaList as $index => $kriteria) { ?>
                                <div class="col-md-12 mb-3">
                                    <label for="<?= $kriteria->code ?>"><?= $kriteria->name ?></label><br />
                                    <?php foreach ($kriteriaOption as $option) {
                                        if ($option->cr_id === $kriteria->id) { ?>
                                            <input type="radio" name="review[<?= $kriteria->code ?>]" id="<?= $option->id ?>" value="<?= $option->value_weight ?>" <?php if ($option->value_weight === $review[$index] && $content === 'Edit') echo 'checked'; ?>> <?= $option->name ?><br />
                                    <?php }
                                    } ?>
                                </div>
                            <?php }
                            ?>

                        </div>
                        <a href="<?php echo site_url('perhitungan') ?>" class="btn btn-light">Back</a>
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
</script>