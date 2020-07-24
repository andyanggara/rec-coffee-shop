 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    // Normalisasi Bobot
    foreach ($kriteriaList as $kriteria) {
        $kriteria->normalize_value_weight = $kriteria->value_weight / $sumVW;
    }

    // Rata-Rata Nilai
    $averageValueTmp = $penilaianList;
    $averageValue = array();
    foreach ($averageValueTmp as $avvtmp) {
        $avvtmp["review"] = explode(',', $avvtmp["review"]);
        if (count($averageValue) === 0) {
            array_push($averageValue, $avvtmp);
        } else {
            $pushAble = 0;
            foreach ($averageValue as $avvindex => $avv) {
                if ($avvtmp["coffeeshop_id"] === $avv["coffeeshop_id"]) {
                    foreach ($avv["review"] as $index => $avvReview) {
                        $averageValue[$avvindex]["review"][$index] = ($avvReview + $avvtmp["review"][$index]) / 2;
                    }
                    $pushAble++;
                }
            }

            if ($pushAble === 0) {
                array_push($averageValue, $avvtmp);
            }
        }
    }

    // Hitung Vektor S
    $vector_s = $averageValue;
    foreach ($averageValue as $avvindex => $avv) {
        $vector_s[$avvindex]["vector_s"] = 1;
        foreach ($avv["review"] as $reviewIndex => $review) {
            $type = $kriteriaList[$reviewIndex]->type === '1' ? 1 : -1;
            $vector_s[$avvindex]["review"][$reviewIndex] = pow($review, ($kriteriaList[$reviewIndex]->normalize_value_weight * $type));
            $vector_s[$avvindex]["vector_s"] = $vector_s[$avvindex]["vector_s"] * $vector_s[$avvindex]["review"][$reviewIndex];
        }
    }

    // Hitung Vektor V
    $vector_v = $vector_s;
    $sum_s = 0;
    foreach ($vector_s as $vsindex => $vs) {
        $sum_s += $vs["vector_s"];
    }
    foreach ($vector_s as $vsindex => $vs) {
        $vector_v[$vsindex]["vector_v"] = $vs["vector_s"] / $sum_s;
    }


    // Calculate
    $_POST['vector'] = $vector_v;
    if (isset($_POST['submit'])) {
        $this->ref->calculateWP();
        redirect('perhitungan/calculateWP');
    }
    ?>

 <!-- Penilaian -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Penilaian</h1>
 </div>
 <!-- /Penilaian -->

 <!-- Tabel Penilaian -->
 <div class="card shadow mb-4">
     <div class="card-body">
         <div class="table-responsive">
             <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                 <div class="mb-3">
                     <div class="btn-actions-pane-left">
                         <div role="group" class="btn-group-sm btn-group">
                             <a class="btn btn-primary" href="<?php echo site_url('perhitungan/Add') ?>"><i class="fa fa-plus"></i> Add Review</a>
                         </div>
                     </div>
                 </div>

                 <div class="d-block">
                     <div class="table-responsive">
                         <table class="mb-0 table table-bordered table-striped" id="datatable">
                             <thead>
                                 <tr>
                                     <th>No</th>
                                     <th>Admin</th>
                                     <th>Coffee Shop</th>
                                     <?php
                                        foreach ($kriteriaList as $index => $kriteria) {
                                            $no = $index + 1; ?>
                                         <th><?= 'C' . $no ?></th>
                                     <?php
                                        } ?>
                                     <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                    $no = 1;
                                    foreach ($penilaianList as $penilaian) {
                                    ?>
                                     <tr>
                                         <td class="text-center"><?php echo $no ?></td>
                                         <td><?php echo $penilaian["admin_name"] ?></td>
                                         <td><?php echo $penilaian["coffeeshop_name"] ?></td>

                                         <?php
                                            $penilaian["review"] = explode(',', $penilaian["review"]);
                                            foreach ($penilaian["review"] as $value) { ?>
                                             <td class="text-center"><?= $value ?></td>
                                         <?php }
                                            ?>


                                         <td class="text-center"><a class="mb-2 mr-2 btn btn-warning" href="<?php echo base_url(); ?>perhitungan/edit/<?php echo $penilaian["id"]; ?>">Edit</a>
                                             <a class="mb-2 mr-2 btn btn-danger" href="#deleteperhitungan<?php echo $penilaian["id"]; ?>" data-toggle="modal">Delete</a></td>
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
 <!-- /Tabel Penilaian -->

 <?php if ($penilaianList) { ?>
     <!-- Perhitungan -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Perhitungan</h1>
     </div>
     <!-- /Perhitungan -->

     <!-- Tabel Normalisasi Bobot -->
     <div class="card shadow mb-4">
         <div class="card-body">
             <div class="table-responsive">
                 <div id="dataTable_wrapper1" class="dataTables_wrapper dt-bootstrap4">
                     <div class="mb-3">
                         <div class="btn-actions-pane-left">
                             <div class="font-weight-bold">Normalisasi Bobot</div>
                         </div>
                     </div>

                     <div class="d-block">
                         <div class="table-responsive">
                             <table class="mb-0 table table-bordered table-striped" id="datatable1">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Criteria</th>
                                         <th>Value Weight</th>
                                         <th>Normalize Value Weight</th>
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
                                             <td class="text-center"><?php echo $kriteria->value_weight ?></td>
                                             <td><?php echo $kriteria->normalize_value_weight ?></td>
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
     <!-- /Tabel Normalisasi Bobot -->

     <!-- Tabel Rata-rata Nilai -->
     <div class="card shadow mb-4">
         <div class="card-body">
             <div class="table-responsive">
                 <div id="dataTable_wrapper1" class="dataTables_wrapper dt-bootstrap4">
                     <div class="mb-3">
                         <div class="btn-actions-pane-left">
                             <div class="font-weight-bold">Rata-Rata Nilai</div>
                         </div>
                     </div>

                     <div class="d-block">
                         <div class="table-responsive">
                             <table class="mb-0 table table-bordered table-striped" id="datatable1">
                                 <thead>
                                     <tr>
                                         <th>No</th>
                                         <th>Coffee Shop</th>
                                         <?php foreach ($kriteriaList as $index => $kriteria) {
                                                $no = $index + 1; ?>
                                             <th><?= 'C' . $no ?></th>
                                         <?php } ?>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <?php
                                        $no = 1;
                                        foreach ($averageValue as $average) {
                                        ?>
                                         <tr>
                                             <td class="text-center"><?php echo $no ?></td>
                                             <td><?php echo $average["coffeeshop_name"] ?></td>

                                             <?php
                                                foreach ($average["review"] as $value) { ?>
                                                 <td class="text-center"><?= $value ?></td>
                                             <?php }
                                                ?>
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
     <!-- /Tabel Rata-rata Nilai -->

     <!-- Perhitungan -->
     <div class="col-md-12 text-center">
         <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate>
             <input type="hidden" name="content" value="Calculate">
             <a href="<?php echo site_url('perhitungan/calculateWP') ?>" class="btn btn-light">Result</a>
             <input class="btn btn-primary" type="submit" name="submit" value="Calculate">
         </form>
     </div>
     <!-- /Perhitungan -->
 <?php } else { ?>
     <div class="col-sm-12 text-center mt-5">
         <h6 class="mb-0 text-gray-800">Fitur Perhitungan Belum Tersedia</br>Silahkan Isi Penilaian Terlebih Dahulu</h6>
     </div>
 <?php } ?>


 <!-- Modal delete penilaian -->
 <?php foreach ($penilaianList as $penilaian) { ?>
     <div id="deleteperhitungan<?php echo $penilaian["id"]; ?>" class="modal fade" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title">Delete Penilaian ?</h5>
                     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                     </button>
                 </div>
                 <div class="modal-body">Select "Yes" below if you want to delete the review data.</div>
                 <div class="modal-footer">
                     <button class="btn btn-secondary" type="button" data-dismiss="modal">No</button>
                     <a class="btn btn-danger" href="<?php echo base_url(); ?>perhitungan/delete/<?php echo $penilaian["id"]; ?>">Yes</a>
                 </div>
             </div>
         </div>
     </div>
 <?php } ?>
 <!-- /Modal delete penilaian -->

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