<!doctype html>
<html lang="en">
  <head>
    <title>KASIR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>  
  
      <div class="container"> 
        <div class="content">
            <did class="card mt-5">
                <div class="row">
                  <div class="col-6"> 
                    <div class="card-body">
                      <h1><p class="text-center mt-5">Silahkan Login</p>   </h1>
                      <form method="post" action="cek_login.php"> 
                      <div class="form-group" >
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" required autofocus>
                        </div>
                        <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" required autofocus>
                        </div>
                        <div class="form-group mt-3">
                         <button class="btn btn-primary form-control" type="submit">login</button>
                        </div>
                        </div>                      
                      </form>
                      <a href="register.php" class="btn btn-primary form-control">Register</a>
                      </div>  
                      <div class="col-6">
                    <div class="card-body">
                      <img src="assets/img/logo.png" width="400">
                    </div>            
                    </div>
                  </div>
                  </div>                   
                </div>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>