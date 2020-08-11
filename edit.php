<?php
$con=mysqli_connect('sql309.byethost7.com','b7_25814993','5f0v8wpz','b7_25814993_smanagement');
$edit_records=$_GET['edit'];
$query="select * from s_info where s_id='$edit_records'";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_array($run))
{
	$edit_id=$row['s_id'];
	$name=$row[1];
	$father=$row[2];
	$institute=$row[3];
	$degree_name=$row[5];
	$roll_no=$row[4];	
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>

    <section class="form">
        <div class="container mt-4">   
            <div class="form-div">
              <div id="form-wrapper" style="max-width:500px;margin:auto;">
              <div class="formv">
              <h1 class="display-4 text-center">
                Data Update<span class="text-danger"> FORM
              </h1>
                <form id="book-form" class="mt-4 mb-4" method="post" action="edit.php?edit_form=<?php echo $edit_id; ?>">
                    <div class="form-group text-center">
                        <label>Student's name</label>
                        <input type="text" name="user_name" class="form-control" value="<?php echo $name; ?>">
                    </div>
                    <div class="form-group text-center">
                        <label>Ftahers's name</label>
                        <input type="text" name="father_name" class="form-control" value="<?php echo $father; ?>">
                    </div>
                    <div class="form-group text-center">
                        <label>Institution</label>
                        <input type="text" name="institute_name" class="form-control" value="<?php echo $institute; ?>">
                    </div>
                    <div class="form-group text-center">
                        <label>Roll no.</label>
                        <input type="text" name="roll_no" class="form-control" value="<?php echo $roll_no; ?>" >
                    </div>
                    <div class="form-group text-center">
                        
                        <select name="degree" class="mt-2">
                            <option value="<?php echo $degree_name; ?>"><?php echo $degree_name; ?></option>
                            <option value="BSCS">BSCS</option>
                            <option value="BSSE">BSSE</option>
                            <option value="BSIT">BSIT</option>
                            <option value="BSDS">BSDS</option>
                            <option value="BBA">BBA</option>
                            </select>
                    </div>                   
                    <input type="submit" name="update" value="update" class="btn btn-danger btn-block mt-4">
                </form>
                <center><button class="btn-block mb-5"><a href="view.php">View record</a></button></center>
              </div>
            </div>
            </div>
        </div>
    </section>
    
</body>
</html>
<?php
$con=mysqli_connect('sql309.byethost7.com','b7_25814993','5f0v8wpz','b7_25814993_smanagement');

if(isset($_POST['update']))
{
	$record=$_GET['edit_form'];
	$user_name1=$_POST['user_name'];
	$father_name1=$_POST['father_name'];
	$institute_name1=$_POST['institute_name'];
	$roll_no1=$_POST['roll_no'];
	$degree_name1=$_POST['degree'];
	
	$query1="update registers set s_name='$user_name1',s_father='$father_name1',s_institute='$institute_name1',
	s_roll='$roll_no1',s_degree='$degree_name1' where s_id='$record'";
	
	if(mysqli_query($con,$query1))
	{
		echo "<script>alert('Record updated sucessfully !')</script>";		
	}
}
?>

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