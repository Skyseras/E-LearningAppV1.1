<?php 
    include_once "header.php";
?>
    <div class="d-flex" id="wrapper">
            <?php 
                include_once "sidebar.php"
            ?>
            <div id="page-content-wrapper">
                <?php 
                    include_once "wrapperheader.php"
                ?>    
            <div class="bgstudent container-fluid px-4 bodyh">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="m-0 fw-bold">Students List</h4>
                    <div class="d-flex justify-content-center align-items-center">
                        <img class="m-0 px-4" src="icons/doublearrows.svg" alt="">
                        <button class="my-2 w-100 btn btn-lg rounded-4 standard text-white ps" type="submit">ADD NEW STUDENT</button>
                    </div>
                </div>
                <hr class="m-0"/>
                <div class="row bg-transparent" id="titles">
                    <div class="col-sm-2 col-lg-1 m-auto">
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto">
                        <p class="m-0">Name</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto">
                        <p class="m-0">Email</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto">
                        <p class="m-0">Phone</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" id="num">
                        <p class="m-0 text-nowrap">Enroll Number</p>
                    </div>
                    <div class="col-sm-3 col-lg-2 m-auto" id="date">
                        <p class="m-0 text-nowrap">Date of admission</p>
                    </div>
                    <div class="col-sm-1 col-lg-1 m-auto">
                    </div>
                </div>
                <?php
                    $data = file_get_contents('students.json');
                    $payments = json_decode($data,true);
                    foreach($payments AS $payment){ 
                ?>
                
                <div class="row bg-white br py-2 my-1" id="info">
                    <div class="col-1" id="imger">
                        <img src="visuals/userpic.svg" alt="">
                    </div>
                    <div class="col-2">
                        <p class="m-0"><?php echo $payment['name'] ?></p>
                    </div>
                    <div class="col-2">
                        <p class="m-0"><?php echo $payment['email'] ?></p>
                    </div>
                    <div class="col-2">
                        <p class="m-0"><?php echo $payment['phone'] ?></p>
                    </div>
                    <div class="col-2" id="num">
                        <p class="m-0"><?php echo $payment['enroll_number'] ?></p>
                    </div>
                    <div class="col-2" id="date">
                        <p class="text-nowrap m-0"><?php echo $payment['date_of_admission'] ?></p>
                    </div>
                    <div class="col-1 d-flex justify-content-center align-items-center" id="editer">
                        <img class="px-2" src="icons/pen.svg" alt="">
                        <img class="px-2" src="icons/can.svg" alt="">
                    </div>
                </div>
                
                <?php } ?>
            </div>
        </div>
    </div>
<?php 
    include_once "footer.php"
?>