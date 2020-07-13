<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('admin/head'); ?>
    <title>Perhitungan</title>
</head>
<body>
    <!-- Wrapper -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <?php $this->load->view('admin/sidebar'); ?>
        <!-- /Sidebar  -->

        <!-- Page Content  -->
        <div id="content" class="">
            <!-- Navbar -->
            <?php $this->load->view('admin/navbar'); ?>
            <!-- /Navbar -->
            <!-- Judul Halaman -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Perhitungan</h1>
            </div>
            <!-- /Judul Halaman -->
            <!-- Main Content -->
            <div class="card shadow">
                <div class="card-header">Data Coffee Shop</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                 <div class="col-sm-12">
                                    <table class="table table-bordered dataTable" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 100%;" width="100%" cellspacing="0">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Position: activate to sort column ascending">Nama Tempat</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Office: activate to sort column ascending">Alamat</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Age: activate to sort column ascending">Rata-rata Harga</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Start date: activate to sort column ascending">Foto Tempat</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Start date: activate to sort column ascending">C1</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Start date: activate to sort column ascending">C2</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Start date: activate to sort column ascending">C3</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Start date: activate to sort column ascending">C4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">1</td>
                                                <td class="sorting_1">Shareloc Coffee</td>
                                                <td>Jl. Terusan Punclut No. 98 Ciumbuleuit Bandung</td>
                                                <td>$162,700</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">2</td>
                                                <td class="sorting_1">Kopi Toko Djawa</td>
                                                <td>Jl. Braga No. 79 Bandung</td>
                                                <td>$1,200,000</td>
                                                <td>47</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">3</td>
                                                <td class="sorting_1">5758 Coffee Lab</td>
                                                <td>Jl. Rusa Pinus Raya Blok E No. 1D Bandung</td>
                                                <td>$86,000</td>
                                                <td>66</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">4</td>
                                                <td class="sorting_1">Ssst Coffee</td>
                                                <td>Jl. Kliningan II No. 1 Bandung</td>
                                                <td>$132,000</td>
                                                <td>41</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">5</td>
                                                <td class="sorting_1">Custom Coffee Garage</td>
                                                <td>Jl. Aceh No. 24A</td>
                                                <td>$206,850</td>
                                                <td>28</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">6</td>
                                                <td class="sorting_1">Sudut Kopi</td>
                                                <td>Jl. Pendawa No. 2 Pasir Kaliki Bandung</td>
                                                <td>$372,000</td>
                                                <td>61</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">7</td>
                                                <td class="sorting_1">Kopi Warga</td>
                                                <td>Jl. Ir. H. Juanda No. 48 Dago Bawah</td>
                                                <td>$163,500</td>
                                                <td>38</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">8</td>
                                                <td class="sorting_1">Mimiti Coffee & Space</td>
                                                <td>Jl. Sumur Bandung No. 14</td>
                                                <td>$106,450</td>
                                                <td>21</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">9</td>
                                                <td class="sorting_1">Dreezel Coffee</td>
                                                <td>Jl. Cisangkuy No. 56 Bandung</td>
                                                <td>$145,600</td>
                                                <td>46</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">10</td>
                                                <td class="sorting_1">Sawo Coffee</td>
                                                <td>Jl. Braga No. 76 Bandung</td>
                                                <td>$433,060</td>
                                                <td>22</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                                <td>33</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="btn btn-primary float-right" href="#">Hitung</a>
                </div>
            </div>
            <!-- /Main Content -->
        </div>
        <!-- /Page Content  -->
    </div>
    <!-- /Wrapper -->
</body>
</html>