<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="row mb-4">
    <h4 class="col">LIST COFFEE SHOP</h4>
</div>
<div class="row mb-4">
    <form class="form-inline my-2 my-lg-0 ml-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</div>
<div class="row">
    <?php foreach ($coffeeshopList as $row) { ?>
        <div class="col-sm-4 mb-4">
            <div class="card shadow">
                <img class="card-img-top" src="<?php echo $row->photo; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row->name; ?></h5>
                    <p class="card-text"><?php echo $row->flat_rate; ?></p>
                    <a href="<?php echo base_url(); ?>detail/coffee/<?php echo $row->id ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>
<div class="row justify-content-center mb-4">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>
</div>