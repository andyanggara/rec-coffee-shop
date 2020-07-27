<?php
defined('BASEPATH') or exit('No direct script access allowed');

$coffeeshopList = $this->ref->getRank();
$sortBy = '0';
if (isset($_POST['sort'])) {
    $sortBy = $_POST['sort'];
    if ($sortBy == '0') {
        $coffeeshopList = $this->ref->getRank();
    } else {
        $coffeeshopListTemp = $this->ref->getSort();

        foreach ($coffeeshopListTemp as $key => $coffeeTemp) {
            $coffeeTemp["review_rate"] = explode(',', $coffeeTemp["review_rate"]);
            $coffeeshopListTemp[$key]['review_rate'] = $coffeeTemp["review_rate"][$sortBy - 1];
        }

        usort($coffeeshopListTemp, "cmp");
        $coffeeshopList = $coffeeshopListTemp;
    }
}

function cmp($a, $b)
{
    return strcmp($b["review_rate"], $a["review_rate"]);
}
?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/pagination.css" />

<div class="row mb-4">
    <h4 class="col">REKOMENDASI</h4>
</div>

<div class="row mb-4">
    <div class="col-md-4 col-sm-12">
        <form name="sortRekomendasi" action="" method="post">
            <select class="form-control" name="sort" onchange="this.form.submit()">
                <option value='0' selected <?php if ($sortBy == '0') echo 'selected'; ?>>Rekomendasi</option>
                <?php foreach ($kriteriaList as $kriteria) { ?>
                    <option value=<?= $kriteria->id ?> <?php if ($sortBy == $kriteria->id) echo 'selected'; ?>><?= $kriteria->name ?></option>
                <?php } ?>
            </select>
        </form>
    </div>
</div>

<?php if (isset($coffeeshopList) && count($coffeeshopList) > 0) { ?>
    <div class="row paginate">
        <?php foreach ($coffeeshopList as $row) { ?>
            <div class="col-sm-4 mb-4 product">
                <div class="card shadow">
                    <img class="card-img-top thumbnail-img" src="<?php echo $row["photo"]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                        <p class="card-text"><?php echo 'Rp. ' . number_format($row["flat_rate"], 2, ',', '.'); ?></p>
                        <p class="card-text"><?php echo 'Open : ' . $row["open_in"] . '-' . $row["close_in"]; ?></p>

                        <?php if ($sortBy != 0) {
                            echo '<p class="card-text"><i class="fa fa-star" aria-hidden="true"></i> ' . $row["review_rate"] . '</p>';
                        } ?>

                        <a href="<?php echo base_url(); ?>detail/coffee/<?php echo $row["id"] ?>" class="btn btn-primary">Detail</a>
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