<?php include 'templates/header.php' ?>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
      <a href="logout.php" class="btn btn-outline-danger my-2 my-sm-0">Logout</a>
  </form>
</nav>

<div class="form-signin">
  <h5>Conductor ID- <?=$_SESSION['username']?></h5>
  <img class="mb-4" src="busicon.png" alt="" width="150" height="150">
  <h1 class="h3 mb-3 font-weight-normal">Enter Bus Number</h1>
  <label for="inputId" class="sr-only">Bus Number</label>
  <input type="number" id="busno" class="form-control" placeholder="Bus Number">
  <br>
  <button class="btn btn-lg btn-primary btn-block" onclick="gotobus()" >GO!</i></button>
</div>

<?php include 'templates/footer.php' ?>