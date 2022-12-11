<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="style.css">

    <!-- <?php include 'style.css'?> -->

    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <script src='main.js'></script>
</head>
<body>
    <br><br>
    <h2 style="text-align: center; color:green">Apply Web Developer Post</h2>
    <br>
    <br>
   
    


<div class="container">
  <form  method="POST">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Enter your Qualification</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="qualification" placeholder="Qualification">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Enter your Mobile Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="mobile" placeholder="Mobile number">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Reference</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="reference" placeholder="Any reference">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="email" placeholder="Enter your email">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Job</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="job" placeholder="Web developer">
      </div>
    </div>
    <br>
    <br>
    
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>




</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $degree = $_POST['qualification'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $mobile = $_POST['mobile'];
    $refer = $_POST['reference'];

   

    $insertQuery1 = "INSERT INTO job_registration(name, degree, mobile, email, refer, jobpost) VALUES ('$name','$degree','$mobile','$email','$refer','$job')";

    $res = mysqli_query($con, $insertQuery1);
        if($res){
                ?>
                <script>
                    alert("Data inserted properly");
                </script>
                
                <?php
        }else{
            ?>
            <script>
                alert("Data not inserted");
            </script>
            
            <?php
        }
}

?>