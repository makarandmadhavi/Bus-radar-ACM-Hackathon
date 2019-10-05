<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bus Radar</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <!-- Bootstrap core CSS -->
    <!-- <link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="text-center">

    <?php
session_start();
include 'backend/getdata.php';
$busses = getbussesbystop($_SESSION['busstop']);
//print_r($busses);
?>
    <br>
    <br>
    <br>

    <div class="container">

        <h5><?=$_SESSION['busstop']?></h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Bus No</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Arriving in</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($busses as $bus){ ?>

                <tr>
                    <?php
                    $data = getbusdetails($bus['BusNo']);
                    //print_r($data);
                ?>

                    <th scope="row"><?=$bus['BusNo']?> </th>

                    <td><a href="viewroute.php?busno=<?=$bus['BusNo']?>"><?=$data['destination']?></a></td>
                    <td><?=$bus['time']?> mins</td>


                </tr>

                <?php } ?>
                <!-- <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
            
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
               
            </tr> -->
            </tbody>
        </table>
        <a href="public.php"><button class="btn btn-success">Back</button></a>
        <br>
        <br>
        <h1 class="h3 mb-3 font-weight-normal">Add destination</h1>
        <label for="inputId" class="sr-only">Destination</label>
        <input type="text" id="busstop" class="form-control" placeholder="Bus stop">
        <br>
        <button class="btn btn-lg btn-primary btn-block" onclick="gotostop()">GO!</i></button>
    </div>
    <script type="text/javascript">
        console.log("Hello");
        a = 1;
        b = 2;
        setInterval(function () {
            a = a + 1;
            b = b + 1;
            console.log("update");
            $(".table").load("incomming.php .table");
        }, 3000);
    </script>
    <?php include 'templates/footer.php' ?>