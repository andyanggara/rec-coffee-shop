<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->load->view('admin/head'); ?>
    <title>Daftar Coffee Shop</title>
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
            <!-- Daftar User -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Daftar Coffee Shop</h1>
            </div>
            <!-- /Daftar User -->
            <!-- Tabel -->
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="dataTable_length">
                                        <label>Show 
                                            <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="dataTable_filter" class="dataTables_filter">
                                        <label>Search:
                                            <input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                                        </label>
                                    </div>
                                </div>
                            </div>
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
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label="Start date: activate to sort column ascending">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">1</td>
                                                <td class="sorting_1">Shareloc Coffee</td>
                                                <td>Jl. Terusan Punclut No. 98 Ciumbuleuit Bandung</td>
                                                <td>$162,700</td>
                                                <td>33</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">2</td>
                                                <td class="sorting_1">Kopi Toko Djawa</td>
                                                <td>Jl. Braga No. 79 Bandung</td>
                                                <td>$1,200,000</td>
                                                <td>47</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">3</td>
                                                <td class="sorting_1">5758 Coffee Lab</td>
                                                <td>Jl. Rusa Pinus Raya Blok E No. 1D Bandung</td>
                                                <td>$86,000</td>
                                                <td>66</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">4</td>
                                                <td class="sorting_1">Ssst Coffee</td>
                                                <td>Jl. Kliningan II No. 1 Bandung</td>
                                                <td>$132,000</td>
                                                <td>41</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">5</td>
                                                <td class="sorting_1">Custom Coffee Garage</td>
                                                <td>Jl. Aceh No. 24A</td>
                                                <td>$206,850</td>
                                                <td>28</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">6</td>
                                                <td class="sorting_1">Sudut Kopi</td>
                                                <td>Jl. Pendawa No. 2 Pasir Kaliki Bandung</td>
                                                <td>$372,000</td>
                                                <td>61</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">7</td>
                                                <td class="sorting_1">Kopi Warga</td>
                                                <td>Jl. Ir. H. Juanda No. 48 Dago Bawah</td>
                                                <td>$163,500</td>
                                                <td>38</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">8</td>
                                                <td class="sorting_1">Mimiti Coffee & Space</td>
                                                <td>Jl. Sumur Bandung No. 14</td>
                                                <td>$106,450</td>
                                                <td>21</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td style="text-align: center">9</td>
                                                <td class="sorting_1">Dreezel Coffee</td>
                                                <td>Jl. Cisangkuy No. 56 Bandung</td>
                                                <td>$145,600</td>
                                                <td>46</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr role="row" class="even">
                                                <td style="text-align: center">10</td>
                                                <td class="sorting_1">Sawo Coffee</td>
                                                <td>Jl. Braga No. 76 Bandung</td>
                                                <td>$433,060</td>
                                                <td>22</td>
                                                <td style="text-align: center">
                                                    <button class="btn btn-info">Edit</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a>
                                            </li>
                                            <li class="paginate_button page-item ">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a>
                                            </li>
                                            <li class="paginate_button page-item next" id="dataTable_next">
                                                <a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Tabel -->
        </div>
        <!-- /Page Content  -->
    </div>
    <!-- /Wrapper -->
</body>
</html>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar, #content').toggleClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>