<?php include 'templates/header.php' ?>

<?php
include 'backend/getdata.php';


//print_r($stops);
$flag=0;
?>
<?php $stops = getstops($_GET['busno']); ?>
<button onload="show()" onclick="mock(<?=$_GET['busno']?>)" class="btn btn-lg btn-primary btn-block">Start Journey</button>


<div class="timeline">
    <br>
    
    <h5>Bus no - <span id="busno"><?=$_GET['busno']?></span> </h5>
    
    <br>
    <div class="updown">
        <button onclick="descajax(<?=$_GET['busno']?>)" class="btn btn-lg btn-info ">Up</button>
        <button onclick="ascajax(<?=$_GET['busno']?>)" class="btn btn-lg btn-info ">Down</button>
    </div>
   
    
    <div id="loc">

    </div>
    <div id="ref">
        
        <?php foreach($stops as $stop){ ?>
        <?php if($stop['time']>=0 && $flag==0){ ?>
        <img src="assets/busicon.png" style="height:20px" alt="">
        <?php $flag++; } ?>
        <div class="container right">
            <div class="content <?php if($stop['time']<0){ echo 'red'; } ?>">
                <h5><?=$stop['StopName']?></h5>


                <?php if($stop['time']>=0){ ?>
                <p>Arriving in <?=$stop['time']?> mins</p>

                <?php } ?>
            </div>

        </div>
        <?php } ?>
    </div>
    <button onclick="busfull(<?=$_GET['busno']?>,1)" class="btn btn-lg btn-sm btn-danger ">Bus full</button>
    <button onclick="busfull(<?=$_GET['busno']?>,0)" class="btn btn-lg btn-sm btn-success ">Reset Bus full status</button>
    
    <br>
    <br>
    <?php $bus = getbusdetails($_GET['busno']); ?>
    <p>Status : <?php if($bus['isfull']){
        echo 'Buss full';
    }else{
        echo 'Bus not full';
    } ?></p>
    
</div>

<a href="bussreach.php" class="btn btn-lg btn-primary btn-block">End Journey</a>
<script src="mock.js"></script>

<?php include 'templates/footer.php' ?>