<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="card shadow mb-4">
    <div class="card-header font-weight-bold"><?= strtoupper($coffeeshopById->name) ?></div>
    <img class="card-img-top px-4 pt-4" src="<?php echo $coffeeshopById->photo; ?>" alt="Card image cap">
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Name</th>
                <td><?php echo $coffeeshopById->name; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $coffeeshopById->address; ?></td>
            </tr>
            <tr>
                <th>Flat Rate</th>
                <td><?php echo 'Rp. ' . number_format($coffeeshopById->flat_rate, 2, ',', '.'); ?></td>
            </tr>
            <tr>
                <th>Open In</th>
                <td><?php echo $coffeeshopById->open_in; ?></td>
            </tr>
            <tr>
                <th>Close In</th>
                <td><?php echo $coffeeshopById->close_in; ?></td>
            </tr>
        </table>
    </div>
</div>