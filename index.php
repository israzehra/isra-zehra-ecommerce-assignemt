<!DOCTYPE html>
    <head>    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <?php
      $conn=mysqli_connect('localhost','root','','2nd_aassignment');
      if(isset($_POST['submit'])){
      $sql_query = "SELECT * FROM 1st_table WHERE username = '$_POST[username]' AND passwords = '$_POST[password]'";
      $query = mysqli_query($conn, $sql_query);
        if($check= mysqli_fetch_assoc($query)){
          header('Location: admin_panel.php');
        }
      }
    ?>
      <div class="container">
	      <div class="row">
          <div class="container">
            <div class="card"></div>
            <div class="card">
              <h1 class="title">Login</h1>
              <form action="" method="POST">
                <div class="input-container">
                  <input name="username" type="text" id="Username" required="required"/>
                    <label for="Username">Username</label>
                    <div class="bar"></div>
                </div>
                <div class="input-container">
                  <input name="password" type="password" id="Password" required="required"/>
                    <label for="Password">Password</label>
                    <div class="bar"></div>
                </div>
                <span>
                  <?php 
                  if(isset($_POST['submit'])){ 
                    if(!$check= mysqli_fetch_assoc($query)){
                      echo "<div class=\"error\">Username or Password is incorrect.</div>";
                    }
                  }
                  ?></span>
                <div class="button-container">
                  <button name="submit"><span>Go</span></button>
                </div>
              </form>
            </div>
          </div>
  	    </div>
    </div>

    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>