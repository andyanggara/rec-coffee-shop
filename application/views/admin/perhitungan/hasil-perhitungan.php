 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    // var_dump($ranking);
    // die();
    ?>

 <style>
     .img-preview {
         width: 150px;
         height: 150px;
     }
 </style>

 <!-- Daftar Hasil Perhitungan -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Hasil Perhitungan Weighted Product</h1>
 </div>
 <!-- /Daftar Hasil Perhitungan -->

 <!-- Tabel Vektor -->
 <div class="card shadow mb-4">
     <div class="card-body">
         <div class="table-responsive">
             <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 <div class="mb-3">
                     <div class="btn-actions-pane-left">
                         <div class="font-weight-bold">Ranking</div>
                     </div>
                 </div>

                 <div class="d-block">
                     <div class="table-responsive">
                         <table class="mb-0 table table-bordered table-striped" id="datatable">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Coffee Shop</th>
                                     <th>Vector S</th>
                                     <th>Vector V</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($ranking as $rank) {
                                    ?>
                                     <tr>
                                         <td class="text-center"><?php echo $no ?></td>
                                         <td><?php echo $rank["name"] ?></td>
                                         <td><?php echo round($rank["vector_s"], 4) ?></td>
                                         <td><?php echo round($rank["vector_v"], 4) ?></td>
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
 <!-- /Tabel Vektor -->