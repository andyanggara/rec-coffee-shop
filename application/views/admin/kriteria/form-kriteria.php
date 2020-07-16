<?php
$option_length = 5;
$id = "";
$name = "";
$value_weight = "";

if ($content == "Edit") {
    $id = (isset($account->id) ? $account->id : 0);
    $name = (isset($account->name) ? $account->name : '');
    $value_weight = (isset($account->value_weight) ? $account->value_weight : '');
    $option = (isset($option) ? $option : array_fill(0, $option_length, array('id' => '', 'cr_id' => '', 'name' => '', 'value_weight' => '')));
} else {
    $option = array_fill(0, $option_length, array('id' => '', 'cr_id' => '', 'name' => '', 'value_weight' => ''));
}
?>

<!-- Daftar Kriteria -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $content ?> Kriteria</h1>
</div>
<!-- /Daftar Kriteria -->

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
                                <label for="value_weight">Value Weight</label>
                                <input type="number" class="form-control" name="value_weight" placeholder="Value Weight" value="<?php echo $value_weight; ?>" required>
                                <?php echo form_error('value_weight') ?>
                                <div class="invalid-feedback">
                                    Please fill in the value weight.
                                </div>
                            </div>
                            <?php for ($i = 0; $i < 5; $i++) { ?>
                                <div class="col-md-12">
                                    <div class="row" style="width: 100%;">
                                        <input type="hidden" name="option[<?= $i ?>][id]" value="<?php echo ($content === 'Edit') ? $option[$i]->id : $option[$i]['id']; ?>">
                                        <div class="col-lg-6 col-sm-12 mb-3">
                                            <label for="option[<?= $i ?>][name]">Option Name <?= $i + 1 ?></label>
                                            <input type="text" class="form-control" name="option[<?= $i ?>][name]" placeholder="Option Name <?= $i + 1 ?>" value="<?php echo ($content === 'Edit') ? $option[$i]->name : $option[$i]['name']; ?>" required maxlength="50">
                                            <?php echo form_error('option[' . $i . '][name]') ?>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                            <div class="invalid-feedback">
                                                Please fill in the option name <?= $i ?>.
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 mb-3">
                                            <label for="option[<?= $i ?>][value_weight]">Option Weight <?= $i + 1 ?></label>
                                            <input type="number" class="form-control" name="option[<?= $i ?>][value_weight]" placeholder="Option Weight <?= $i + 1 ?>" value="<?php echo $content === 'Edit' ? $option[$i]->value_weight : $option[$i]['value_weight']; ?>" required>
                                            <?php echo form_error('option[' . $i . '][value_weight]') ?>
                                            <div class="invalid-feedback">
                                                Please fill in the option weight <?= $i ?>.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }  ?>
                        </div>
                        <a href="<?php echo site_url('kriteria') ?>" class="btn btn-light">Back</a>
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