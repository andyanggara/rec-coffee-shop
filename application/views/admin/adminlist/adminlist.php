 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>

 <!-- Daftar Admin -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Daftar Admin</h1>
 </div>
 <!-- /Daftar Admin -->

 <!-- Tabel -->
 <div class="card shadow mb-4">
     <div class="card-body">
         <div class="table-responsive">
             <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 <div class="mb-3">
                     <div class="btn-actions-pane-left">
                         <div role="group" class="btn-group-sm btn-group">
                             <a class="btn btn-primary" href="<?php echo site_url('adminlist/Add') ?>"><i class="fa fa-plus"></i> Tambah</a>
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
                                     <th>Username</th>
                                     <th>Last Login</th>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($adminList as $admin) {
                                    ?>
                                     <tr>
                                         <td class="text-center"><?php echo $no ?></td>
                                         <td><?php echo $admin->name ?></td>
                                         <td><?php echo $admin->username ?></td>
                                         <td class="text-center"><?php echo $admin->last_login ?></td>
                                         <td class="text-center"><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>adminlist/edit/<?php echo $admin->id; ?>">Edit</a>
                                             <a class="mb-2 mr-2 btn btn-danger" href="#deleteAdmin<?php echo $admin->id; ?>" data-toggle="modal">Delete</a></td>
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

 <!-- Modal delete Admin -->
 <?php foreach ($adminList as $admin) { ?>
     <div id="deleteAdmin<?php echo $admin->id; ?>" class="modal fade" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Delete <?= $admin->name ?> ?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">Select "Yes" below if you want to delete the admin data.</div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                     <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/adminlist/delete/<?php echo $admin->id; ?>">Yes</a>
                 </div>
             </div>
         </div>
     </div>
 <?php } ?>
 <!-- /Modal delete Admin -->