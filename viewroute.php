<?php include 'templates/header.php' ?>

<?php
include 'backend/getdata.php';
if(isset($_GET['desc'])){
    $desc = $_GET['desc'];
}
else{
    $desc = " ";
}

$stops = getstops($_GET['busno'],$desc);
//print_r($stops);
$flag=0;

$busdetails = getbusdetails($_GET['busno']);
//print_r($busdetails);
?>


<div class="timeline">
    <br>
    <a href="public.php"><button class="btn btn-success">Back</button></a>
    <h5>Bus no - <span id="busno"><?=$_GET['busno']?></span> </h5>
    
    <div id="ref">
    <?php if($busdetails['isfull']){ ?>
    <p style="color:red">This Buss is Crowded</p>
    <?php } ?>
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
</div>
<script src="mock.js"></script>
<script type="text/javascript">
    console.log("Hello");
     a=1; 
     b=2;
     setInterval(function () {
         a=a+1;
         b=b+1;
         console.log("update");
         $("#ref").load("viewroute.php?busno=<?=$_GET['busno']?> #ref");
     },3000);
</script>

<?php include 'templates/footer.php' ?>