 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>

 <!-- Daftar Kriteria -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Kriteria List</h1>
 </div>
 <!-- /Daftar Kriteria -->

 <!-- Tabel -->
 <div class="card shadow mb-4">
     <div class="card-body">
         <div class="table-responsive">
             <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 <div class="mb-3">
                     <div class="btn-actions-pane-left">
                         <div role="group" class="btn-group-sm btn-group">
                             <a class="btn btn-primary" href="<?php echo site_url('kriteria/Add') ?>"><i class="fa fa-plus"></i> Add</a>
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
                                     <th>Value Weight</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($kriteriaList as $kriteria) {
                                    ?>
                                     <tr>
                                         <td class="text-center"><?php echo $no ?></td>
                                         <td><?php echo $kriteria->name ?></td>
                                         <td><?php echo $kriteria->value_weight ?></td>
                                         <td class="text-center"><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>kriteria/edit/<?php echo $kriteria->id; ?>">Edit</a>
                                             <a class="mb-2 mr-2 btn btn-danger" href="#deletekriteria<?php echo $kriteria->id; ?>" data-toggle="modal">Delete</a></td>
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

 <!-- Modal delete Kriteria -->
 <?php foreach ($kriteriaList as $kriteria) { ?>
     <div id="deletekriteria<?php echo $kriteria->id; ?>" class="modal fade" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Delete <?= $kriteria->name ?> ?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">Select "Yes" below if you want to delete the kriteria data.</div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                     <a class="btn btn-danger" href="<?php echo base_url(); ?>kriteria/delete/<?php echo $kriteria->id; ?>">Yes</a>
                 </div>
             </div>
         </div>
     </div>
 <?php } ?>
 <!-- /Modal delete Kriteria -->