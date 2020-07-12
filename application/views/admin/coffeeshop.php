 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    ?>

 <!-- Daftar Coffee Shop -->
 <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Daftar Coffee Shop</h1>
 </div>
 <!-- /Daftar Coffee Shop -->

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
                                     <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-sort=" ascending" aria-label="Name: activate to sort column descending">No</th>
                                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label=" Position: activate to sort column ascending">Username</th>
                                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label=" Office: activate to sort column ascending">Alamat</th>
                                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label=" Age: activate to sort column ascending">Rata-rata Harga</th>
                                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label=" Start date: activate to sort column ascending">Foto Tempat</th>
                                     <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" style="aria-label=" Start date: activate to sort column ascending">Aksi</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr role="row" class="odd">
                                     <td style="text-align: center">1</td>
                                     <td class="sorting_1">Airi Satou</td>
                                     <td>Tokyo</td>
                                     <td>$162,700</td>
                                     <td>33</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="even">
                                     <td style="text-align: center">2</td>
                                     <td class="sorting_1">Angelica Ramos</td>
                                     <td>London</td>
                                     <td>$1,200,000</td>
                                     <td>47</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                     <td style="text-align: center">3</td>
                                     <td class="sorting_1">Ashton Cox</td>
                                     <td>San Francisco</td>
                                     <td>$86,000</td>
                                     <td>66</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="even">
                                     <td style="text-align: center">4</td>
                                     <td class="sorting_1">Bradley Greer</td>
                                     <td>London</td>
                                     <td>$132,000</td>
                                     <td>41</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                     <td style="text-align: center">5</td>
                                     <td class="sorting_1">Brenden Wagner</td>
                                     <td>San Francisco</td>
                                     <td>$206,850</td>
                                     <td>28</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="even">
                                     <td style="text-align: center">6</td>
                                     <td class="sorting_1">Brielle Williamson</td>
                                     <td>New York</td>
                                     <td>$372,000</td>
                                     <td>61</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                     <td style="text-align: center">7</td>
                                     <td class="sorting_1">Bruno Nash</td>
                                     <td>London</td>
                                     <td>$163,500</td>
                                     <td>38</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="even">
                                     <td style="text-align: center">8</td>
                                     <td class="sorting_1">Caesar Vance</td>
                                     <td>New York</td>
                                     <td>$106,450</td>
                                     <td>21</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="odd">
                                     <td style="text-align: center">9</td>
                                     <td class="sorting_1">Cara Stevens</td>
                                     <td>New York</td>
                                     <td>$145,600</td>
                                     <td>46</td>
                                     <td style="text-align: center">
                                         <button class="btn btn-info">Edit</button>
                                         <button class="btn btn-danger">Hapus</button>
                                     </td>
                                 </tr>
                                 <tr role="row" class="even">
                                     <td style="text-align: center">10</td>
                                     <td class="sorting_1">Cedric Kelly</td>
                                     <td>Edinburgh</td>
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