<?php 
    include_once "header.php"
?>
    <div class="d-flex" id="wrapper">
        <?php 
            include_once "sidebar.php"
        ?>
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <?php 
                include_once "wrapperheader.php"
            ?>
            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="p-3 bg1card shadow-sm rounded">
                            <div>
                                <img style="height: 30px;" src="icons/St.svg" alt="">
                                <p class="mb-0 py-2 ps">Students</p>
                            </div>
                            <div>
                                <h2 class="fw-bold mb-0 text-end">243</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="p-3 bg2card shadow-sm rounded">
                            <div>
                                <img style="height: 30px;" src="icons/Co.svg" alt="">
                                <p class="mb-0 py-2 ps">Course</p>
                            </div>
                            <div>
                                <h2 class="fw-bold mb-0 text-end">13</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="p-3 bg3card shadow-sm rounded">
                            <div>
                                <img style="height: 30px;" src="icons/Pay.svg" alt="">
                                <p class="mb-0 py-2 ps">Payments</p>
                            </div>
                            <div class="fw-bold d-flex align-text-bottom justify-content-end align-items-center ">
                                <h6 class="mb-1 mt-3 px-1 fw-bold">DHS</h6><h2 class="fw-bold mb-0">556,000</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="p-3 bg4card shadow-sm rounded">
                            <div>
                                <img style="height: 30px;" src="icons/Pro.svg" alt="">
                                <p class="text-white mb-0 py-2 ps">Users</p>
                            </div>
                            <div>
                                <h2 class="fw-bold mb-0 text-end">3</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    include_once "footer.php"
?>