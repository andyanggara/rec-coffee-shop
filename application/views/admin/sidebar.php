        <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="overflow: visible;">
            <div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <div class="sidebar-header">
                        <h3>Rekomendasi Coffee Shop</h3>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="nav-item <?php if ( $this->uri->segment(2) == "dashboard" ) {
                            echo 'active';
                            } ?>">
                            <a href="<?php echo base_url().'index.php/admin/controller/dashboard'; ?>"><i class="fas fa-home"></i> Dashboard</a>
                        </li>
                        <li class="nav-item <?php if ( $this->uri->segment(2) == "list_user" ) {
                            echo 'active';
                            } ?>">
                            <a href="<?php echo base_url().'index.php/admin/controller/list_user'; ?>"><i class="fas fa-user"></i> Admin</a>
                        </li>
                        <li class="nav-item <?php if ( $this->uri->segment(2) == "data_coffee" ) {
                            echo 'active';
                            } ?>">
                            <a href="<?php echo base_url().'index.php/admin/controller/data_coffee'; ?>"><i class="fas fa-database"></i> Data Coffe Shop</a>
                        </li>
                        <li class="nav-item <?php if ( $this->uri->segment(2) == "kriteria" ) {
                            echo 'active';
                            } ?>">
                            <a href="#"><i class="fas fa-list-alt"></i> Kriteria</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>