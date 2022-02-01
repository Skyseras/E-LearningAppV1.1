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
                            <img class="py-3  m-0 px-4" src="icons/doublearrows.svg" alt="">
                        </div>
                    </div>
                    <hr class="m-0"/>
                    <div class="row bg-transparent" id="titles">
                        <div class="col-sm-3 col-lg-1 m-auto">
                            <p class="m-0">Name</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto">
                            <p class="text-nowrap m-0">Payment Schedule</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto" id="date">
                            <p class="text-nowrap m-0">Bill Number</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto" id="num">
                            <p class="text-nowrap m-0 text-nowrap">Amount Paid</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto" >
                            <p class="text-nowrap m-0 text-nowrap">Balance amount</p>
                        </div>
                        <div class="col-sm-3 col-lg-2 m-auto" id="date">
                            <p class="m-0 text-nowrap">Date</p>
                        </div>
                        <div class="col-sm-2 col-lg-1 m-auto">
                        </div>
                    </div>

                    <?php

                        $data = file_get_contents('payment.json');
                        $payments = json_decode($data,true);
                        foreach($payments AS $payment){ 
                    ?>

                    <div class="row bg-white py-2 my-1" id="info">
                        <div class="col-1">
                            <p class="m-0"><?php echo $payment['name'] ?></p>
                        </div>
                        <div class="col-2">
                            <p class="m-0"><?php echo $payment['payment_schedule'] ?></p>
                        </div>
                        <div class="col-2" id="num">
                            <p class="m-0"><?php echo $payment['bill_number'] ?></p>
                        </div>
                        <div class="col-2" id="num">
                            <p class="text-nowrap m-0"><?php echo $payment['amount_paid'] ?></p>
                        </div>
                        <div class="col-2" >
                            <p class="text-nowrap m-0"><?php echo $payment['balance_amount'] ?></p>
                        </div>
                        <div class="col-2" id="date">
                            <p class="text-nowrap m-0"><?php echo $payment['date'] ?></p>
                        </div>
                        <div class="col-1" id="editer2">
                            <img class="m-auto px-2" src="icons/eye.svg" alt="">
                        </div>
                    </div>
                    
                    <?php } ?>
                </div>
        </div>
    </div>
<?php 
    include_once "footer.php"
?>