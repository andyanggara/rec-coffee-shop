<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row mb-4">
    <h4 class="col">REKOMENDASI</h4>
</div>

<div class="row">
    <?php foreach ($coffeeshopList as $row) { ?>
        <div class="col-sm-4 mb-4">
            <div class="card shadow">
                <img class="card-img-top" src="<?php echo $row["photo"]; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                    <p class="card-text"><?php echo 'Rp. ' . number_format($row["flat_rate"], 2, ',', '.'); ?></p>
                    <a href="<?php echo base_url(); ?>detail/coffee/<?php echo $row["id"] ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>