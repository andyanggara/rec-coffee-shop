 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>

 <style>
     .img-preview {
         width: 150px;
         height: 150px;
     }
 </style>

 <!-- Daftar Coffee Shop -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Coffee Shop List</h1>
 </div>
 <!-- /Daftar Coffee Shop -->

 <!-- Tabel -->
 <div class="card shadow mb-4">
     <div class="card-body">
         <div class="table-responsive">
             <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 <div class="mb-3">
                     <div class="btn-actions-pane-left">
                         <div role="group" class="btn-group-sm btn-group">
                             <a class="btn btn-primary" href="<?php echo site_url('coffeeshop/Add') ?>"><i class="fa fa-plus"></i> Add</a>
                         </div>
                     </div>
                 </div>

                 <div class="d-block">
                     <div class="table-responsive">
                         <table class="mb-0 table table-bordered table-striped" id="datatable">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Name</th>
                                     <th>Address</th>
                                     <th>Flat Rate</th>
                                     <th>Photo</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($coffeeshopList as $coffeeshop) {
                                    ?>
                                     <tr>
                                         <td class="text-center"><?php echo $no ?></td>
                                         <td><?php echo $coffeeshop->name ?></td>
                                         <td><?php echo $coffeeshop->address ?></td>
                                         <td class="text-right"><?php echo $coffeeshop->flat_rate ?></td>
                                         <td class="text-center"><img class="img-preview" src="<?php echo $coffeeshop->photo ?>"></td>
                                         <td class="text-center"><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>coffeeshop/edit/<?php echo $coffeeshop->id; ?>">Edit</a>
                                             <a class="mb-2 mr-2 btn btn-danger" href="#deleteCoffeeShop<?php echo $coffeeshop->id; ?>" data-toggle="modal">Delete</a></td>
                                     </tr>
                                 <?php
                                        $no++;
                                    }
                                    ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- /Tabel -->

 <!-- Modal delete Coffee Shop -->
 <?php foreach ($coffeeshopList as $coffeeshop) { ?>
     <div id="deleteCoffeeShop<?php echo $coffeeshop->id; ?>" class="modal fade" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Delete <?= $coffeeshop->name ?> ?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">Select "Yes" below if you want to delete the coffeeshop data.</div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                     <a class="btn btn-danger" href="<?php echo base_url(); ?>coffeeshop/delete/<?php echo $coffeeshop->id; ?>">Yes</a>
                 </div>
             </div>
         </div>
     </div>
 <?php } ?>
 <!-- /Modal delete Coffee Shop -->