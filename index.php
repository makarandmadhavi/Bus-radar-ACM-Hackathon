<?php include 'templates/header.php' ?>

    <div class="form-signin">
        <img class="mb-4" src="busicon.png" alt="" width="150" height="150">
        <h1 class="h3 mb-3 font-weight-normal">Please Log In</h1>
        <label for="inputId" class="sr-only">Conductor Id</label>
        <input type="number" id="username" class="form-control" placeholder="Conductor Id" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" class="form-control" placeholder="Password" required>
        <br>
        <br>
        <button class="btn btn-lg btn-primary btn-block" onclick="login()">Log in</button>
    </div>

    
<?php include 'templates/footer.php' ?>