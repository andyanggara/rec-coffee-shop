        <nav id="sidebar" class="mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" style="overflow: visible;">
            <div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0">
                <div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position:relative; top:0; left:0;" dir="ltr">
                    <div class="sidebar-header">
                        <h3>Rekomendasi Coffee Shop</h3>
                    </div>

                    <ul class="list-unstyled components">
                        <li class="nav-item <?php if ($this->uri->segment(1) == "admin") {
                                                echo 'active';
                                            } ?>">
                            <a href="<?php echo site_url('admin') ?>"><i class="fas fa-home"></i> Dashboard</a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == "adminlist") {
                                                echo 'active';
                                            } ?>">
                            <a href="<?php echo site_url('adminlist') ?>"><i class="fas fa-user"></i> Admin</a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == "coffeeshop") {
                                                echo 'active';
                                            } ?>">
                            <a href="<?php echo site_url('coffeeshop') ?>"><i class="fas fa-database"></i> Data Coffe Shop</a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == "kriteria") {
                                                echo 'active';
                                            } ?>">
                            <a href="<?php echo site_url('kriteria') ?>"><i class="fas fa-list-alt"></i> Kriteria</a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == "perhitungan") {
                                                echo 'active';
                                            } ?>">
                            <a href="<?php echo site_url('perhitungan') ?>"><i class="fas fa-calculator"></i> Perhitungan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>