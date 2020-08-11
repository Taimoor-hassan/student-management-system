<?php
session_start();
if(!$_SESSION['a_name'])
{
	header('location:login.php?error=You are not administration');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View data</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/view.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">
                        <h2>Insert record</h2> <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <h2>Logout</h2>
                    </a>
                </li>
            </ul>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" name="search" placeholder="Enter Name OR Roll no">
                <button class="btn btn-outline-success my-2 my-sm-0" name="submit" type="submit">Search</button>
            </form>
        </div>
    </nav>

<body>


    <center>
        <tr>
            <td>
                <h2 class="inf">Welcome <font color="orange"><?php echo $_SESSION['a_name']; ?></label></font> you are
                    viewing all records</h2>
            </td>
        </tr>
    </center>

    <div id="form-wrapper" style="max-width:980px;margin:auto;">
        <div class="formv">
            <table class="table">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Serial no</td>
                        <th scope="col">Student's name</td>
                        <th scope="col">Father's name</td>
                        <th scope="col">Roll no</td>
                        <th scope="col">Edit</td>
                        <th scope="col">Delete</td>
                        <th scope="col">Details</td>
                    </tr>
                </thead>
                <?php
$con=mysqli_connect('sql309.byethost7.com','b7_25814993','5f0v8wpz','b7_25814993_smanagement');	

	$query="select * from s_info";
	$run=mysqli_query($con,$query);
	$i=1;
	while($row=mysqli_fetch_array($run))
	{
	  $s_id=$row['s_id'];
      $s_name=$row[1];
      $s_father=$row[2];
      $s_roll=$row[4];	  
		?>

                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $s_name; ?></td>
                    <td><?php echo $s_father; ?></td>
                    <td><?php echo $s_roll; ?></td>
                    <td><a href="edit.php?edit=<?php echo $s_id; ?>">Edit</a></td>
                    <td><a href="delete.php?del=<?php echo $s_id; ?>">Delete</a></td>
                    <td><a href="view.php?details=<?php echo $s_id; ?>">Details</a></td>
                </tr>

                <?php } ?>
            </table></br>
        </div>
    </div>

    <?php
$con=mysqli_connect('sql309.byethost7.com','b7_25814993','5f0v8wpz','b7_25814993_smanagement');	
	

$s_details=@$_GET['details'];
	
$query="select * from s_info where s_id='$s_details'";
$run1=mysqli_query($con,$query);
while($row1=mysqli_fetch_array($run1))
{   

	$name=$row1[1];
	$father=$row1[2];
	$institution=$row1[3];
	$roll=$row1[4];
	$degree=$row1[5];	
?>

    <center>
        <tr>
            <th>
                <h2>Details of student name <font color="orange"><?php echo $name; ?></font>
                </h2>
            </th>
        </tr>
    </center>
    <div id="form-wrapper" style="max-width:980px;margin:auto;">
        <div class="formv">
            <table class="table">
                <thead class="thead-dark">

                    <tr>
                        <th scope="col">Student's name</td>
                        <th scope="col">Father's name</td>
                        <th scope="col">Institute</td>
                        <th scope="col">Roll no</td>
                        <th scope="col">Degree</td>
                    </tr>

                    <tr>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $father; ?></td>
                        <td><?php echo $institution; ?></td>
                        <td><?php echo $roll; ?></td>
                        <td><?php echo $degree; ?></td>
                    </tr>
                </thead>
            </table></br>
        </div>
    </div>

    <?php }	?>

</body>
</html>



<?php
	 
	 if(isset($_GET['submit']))
	 {
		 $s_search=$_GET['search'];
		 
		 $query3="select * from s_info where s_name='$s_search' OR s_roll='$s_search'";
		 
		 $run3=mysqli_query($con,$query3);
         while($row2=mysqli_fetch_assoc($run3)){
			 
			 $name22=$row2['s_name'];
			 $father22=$row2['s_father'];
			 $institution22=$row2['s_institute']; 
		    $roll22=$row2['s_roll'];
		    $degree22=$row2['s_degree'];
		    ?>
<tr>
    <td>
        <center><h2>Your searched record of student <font color="orange"><?php echo $name22; ?></font> or roll <font color="orange"><?php echo $roll22; ?></font></center>
        </h2>
    </td>
</tr>
<div id="form-wrapper" style="max-width:980px;margin:auto;">
    <div class="formv">
        <table class="table">
            <thead class="thead-dark">

                <tr>
                    <th scope="col">Student's name</td>
                    <th scope="col">Father's name</td>
                    <th scope="col">Institute</td>
                    <th scope="col">Roll no</td>
                    <th scope="col">Degree</td>
                </tr>

                <tr>
                    <td><?php echo $name22; ?></td>
                    <td><?php echo $father22; ?></td>
                    <td><?php echo $institution22; ?></td>
                    <td><?php echo $roll22; ?></td>
                    <td><?php echo $degree22; ?></td>
                </tr></br>
            </thead>
        </table>
    </div>
</div>
<?php }} ?>

<footer>
    <div class="container">
        <center><h2>Contributers of project</h2></center><br>
        <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
                <center><img src="./img/my-pic.jpg" width="80" height="80" style="border-radius: 3rem">
                <h4>Taimoor hassan</h4></center>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
        <center><img src="./img/awais.jpeg" width="80" height="80" style="border-radius: 3rem">
                <h4>Awais ikram</h4></center>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
        <center> <img src="./img/sagar1.jpg" width="80" height="80" style="border-radius: 3rem">
                <h4>Sagar hussain</h4></center>
            </div>
        <div class="col-lg-3 col-md-3 col-sm-3">
        <center> <img src="./img/my-pic.jpg" width="80" height="80" style="border-radius: 3rem">
                <h4>Tariq ishaq</h4></center>
        </div>
</div>
    </div>
</footer>
