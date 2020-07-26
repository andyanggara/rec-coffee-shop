<?php
defined('BASEPATH') or exit('No direct script access allowed');

$searchValue = '';

if (isset($_POST['search'])) {
    $searchValue = $_POST["searchValue"];
    $coffeeshopList = $this->ref->search($searchValue);
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pagination.css" />

<div class="row mb-4">
    <h4 class="col">LIST COFFEE SHOP</h4>
</div>
<div class="row mb-4">
    <div class="col-sm-12 col-md-6">
        <div class="dropdown">
            <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <form class="form-inline my-2 my-lg-0 float-md-right" action="" method="post" enctype="multipart/form-data" novalidate>
            <input id="searchValue" name="searchValue" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" value="<?= $searchValue ?>">
            <input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="Search">
        </form>
    </div>
</div>
<?php if (count($coffeeshopList) > 0) { ?>
    <div class="row paginate">
        <?php foreach ($coffeeshopList as $row) { ?>
            <div class="col-sm-4 mb-4 product">
                <div class="card shadow">
                    <img class="card-img-top thumbnail-img" src="<?php echo $row->photo; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row->name; ?></h5>
                        <p class="card-text"><?php echo 'Rp. ' . number_format($row->flat_rate, 2, ',', '.'); ?></p>
                        <p class="card-text"><?php echo 'Open : '.$row->open_in . '-' . $row->close_in; ?></p>
                        <a href="<?php echo base_url(); ?>detail/coffee/<?php echo $row->id ?>" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="col-sm-12 text-center mt-5">
        <h6 class="text-gray-800">Coffee Shop Tidak Ditemukan</h6>
    </div>
<?php } ?>
<!-- Pagination -->
<div id="pagination-container"></div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.simplePagination.js"></script>

<script>
    var items = $(".paginate .product");
    var numItems = items.length;
    var perPage = 9;
    var totalPages = Math.ceil(numItems / perPage);

    items.slice(perPage).hide();

    if (totalPages > 1) {
        $('#pagination-container').pagination({
            items: numItems,
            itemsOnPage: perPage,
            prevText: "&laquo;",
            nextText: "&raquo;",
            onPageClick: function(pageNumber) {
                var showFrom = perPage * (pageNumber - 1);
                var showTo = showFrom + perPage;
                items.hide().slice(showFrom, showTo).show();
                $('html, body').animate({
                    scrollTop: 0
                }, 500);
            }
        });
    }
</script>