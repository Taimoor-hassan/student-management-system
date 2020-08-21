<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/login.css">
</head>

<body>

    <section class="form">
        <div class="container mt-5">   
            <div class="form-div">
              <div id="form-wrapper" style="max-width:450px;margin:auto;">
              <div class="formv">
              <h1 class="display-4 text-center">
                Admin login
              </h1>
                <form id="book-form" class="mt-5 mb-5" action="login.php" method="post">
                    <div class="form-group text-center">
                        <label>Username</label>
                        <input type="text" name="a_name" class="form-control">
                    </div>
                    <div class="form-group text-center">
                        <label>Password</label>
                        <input type="password" name="pass" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn btn-danger btn-block mt-5">
                </form>
                <center><button><a href="index.php">BACK to student entry form</a></button></center>
              </div>
            </div>
            </div>
        </div>
    </section>
</body>

</html>

<?php
$con=mysqli_connect('sql309.byethost7.com','b7_25814993','5f0v8wpz','b7_25814993_smanagement');if(isset($_POST['submit']))
{
	$admin_name=$_SESSION['a_name']=$_POST['a_name'];
	$admin_pass=$_POST['pass'];
	$query="select * from login where admin_name='$admin_name' AND admin_pass='$admin_pass'";
	
	$run=mysqli_query($con,$query);
	if(mysqli_num_rows($run)>0)
	{
		echo "<script>window.open('view.php?logged=Login succesfull..!', '_self')</script>";
	}
	else
	{
		echo "<script>alert('Incorrect username or password')</script>";
	}
}

?>

<footer>
    <div class="container">
    <br><br>
        <center><h2>Contributers of project</h2></center><br>
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
                <center><img src="./img/my-pic.jpg" width="80" height="80" style="border-radius: 3rem">
                <h4>Taimoor hassan</h4></center>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
        <center><img src="./img/awais.jpeg" width="80" height="80" style="border-radius: 3rem">
                <h4>Awais ikram</h4></center>
        </div>
        
</div>
    </div>
</footer>