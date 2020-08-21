<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data entry form</title>
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
                Data Entry<span class="text-danger"> FORM
              </h1>
                <form id="book-form" class="mt-4 mb-4" action="index.php" method="post">
                    <div class="form-group text-center">
                        <label>Student's name</label>
                        <input type="text" name="name" class="form-control">
                        <?php echo @$_GET['name']; ?>
                    </div>
                    <div class="form-group text-center">
                        <label>Ftahers's name</label>
                        <input type="text" name="f_name" class="form-control">
                        <?php echo @$_GET['father']; ?>
                    </div>
                    <div class="form-group text-center">
                        <label>Institution</label>
                        <input type="text" name="i_name" class="form-control">
                        <?php echo @$_GET['institute']; ?>
                    </div>
                    <div class="form-group text-center">
                        <label>Roll no.</label>
                        <input type="text" name="roll" class="form-control">
                        <?php echo @$_GET['roll']; ?>
                    </div>
                    <div class="form-group text-center">
                        
                        <select name="degree" class="mt-2">
                            <option name="null">Select degree</option>
                            <option value="BSCS">BSCS</option>
                            <option value="BSSE">BSSE</option>
                            <option value="BSIT">BSIT</option>
                            <option value="BSDS">BSDS</option>
                            <option value="BBA">BBA</option>
                            </select>
                            <?php echo @$_GET['degree']; ?>
                    </div>                   
                    <input type="submit" name="submit" value="submit" class="btn btn-danger btn-block mt-4">
                </form>
                <center><button class="btn-block mb-5"><a href="view.php">Admin Login/View record</a></button></center>
              </div>
            </div>
            </div>
        </div>
    </section>
</body>

</html>
<?php

$con=mysqli_connect('sql309.byethost7.com','b7_25814993','5f0v8wpz','b7_25814993_smanagement');

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$father=$_POST['f_name'];
	$institute=$_POST['i_name'];
	$roll=$_POST['roll'];
	$degree=$_POST['degree'];

	
	if($name=='')
	{
		echo "<script>alert('Enter student name')</script>";
	}
	if($father=='')
	{
		echo "<script>alert('Enter student Father name')</script>";
	}
	if($institute=='')
	{
		echo "<script>alert('Enter student institution')</script>";
	}
	if($roll=='')
	{
		echo "<script>alert('Enter student roll no')</script>";
	}
	if($degree=='')
	{
		echo "<script>alert('Select student degree')</script>";
	}
	
	$que="insert into s_info(s_name,s_father,s_institute,s_roll,s_degree 
	)values('$name','$father','$institute','$roll','$degree')";
	if(mysqli_query($con,$que))
	{
		echo "<script>alert('Data has been inserted sucessfully')</script>";
		
	}
}


?>

<footer>
    <div class="container">
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