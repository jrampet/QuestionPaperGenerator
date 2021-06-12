<?php
// Initialize the session
require_once 'config.php';
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: index.php");
  exit;
}

$user_check = $_SESSION['username']; 
$ses_sql=mysqli_query($link, "select * from users where username='$user_check'");
$uinfo=mysqli_fetch_assoc($ses_sql);


?>

<html> 
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<title>Download Question Paper</title>

</head>
<body>
  <div class='container'>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Main.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid" style="background-image:url('header.jpg'); background-repeat: no-repeat;">
  <div class="container">
    <h1 class="display-4">PSG College of Arts & Science</h1>
    <p class="lead">Question Generation System </p>
  </div>
</div>



  <div class="row">
  <div class="col-4">


<ul class="list-group">

  <li class="list-group-item"><a href="addQuestion.php">Add Question to DB</a></li>
  <li class="list-group-item"><a href="generatePaper.php">Generate Paper</a></li>
  <li class="list-group-item"><a href="addCourse.php">Add Course</a></li>
 
  <li class="list-group-item">Download Question by ID</li>

</ul>
    


  </div>

  <?php
  $ques_array=array(); 
  $errorMsg = ""; 
  $successMsg = "";
  //adding course
  if(!empty($_POST['searchBox'])){
  $searchString=$_POST['searchBox']; 
  
  //$addCourse = "INSERT INTO questions(question, difficulty, courseName) VALUES ('$question', '$difficulty', '$courseName')";
  //mysqli_query($link, $addCourse);  

  //$successMsg = "Successfully Generated Question Paper :"; 

  $id=$searchString; 
  //printf($id); 
  $fetchpaper=mysqli_query($link, "select * from generatedquestion where ID='$id'");
  $printQues=mysqli_fetch_row($fetchpaper);
  if(!empty($printQues)){

     $successMsg = "Found!";
     // PRINT QUESTION;
        
  }

  else {
    $successMsg = "Could not find!"; 
  }
  
}


  ?>

 

  <div class="col-8">
    
<form method="POST">
  
   <div class="form-group">
    <label for="exampleFormControlInput1">Question Paper ID</label>
    <input name="searchBox" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Type unique ID">
  </div>
   

    

 
 <input value="Find" type="submit" class="btn btn-primary"><br/><br/>
  <div class="alert alert-success" role="alert">
   <?php echo $errorMsg; ?> 
   <?php echo $successMsg; ?> 
  </div>
</form>

<input type="button" onclick="printDiv('questionBox')" value="PRINT!" />



<?php 
if(!empty($printQues)){

     $successMsg = "Found!";
     // PRINT QUESTION;
     $sh1="";
     $sh2="";
     $sh3="";
     $sh4="";
     $sh5="";
     $sh6="";
      
      if($printQues[3]) $sh1=$printQues[5];
      if($printQues[4]) $sh2=$printQues[6];
      if($printQues[5]) $sh3=$printQues[7];
      if($printQues[6]) $sh4=$printQues[8];
      if($printQues[7]) $sh5=$printQues[9];
      if($printQues[8]) $sh6=$printQues[10];


     echo '

     <div id="questionBox" style="border:1px solid black;"> 

     <center> 
     <img src="header.jpg" width=450">
     <h2>PSG College of Arts & Science</h2>
     <h5>Department of Computer Science & Engineering</h5> 
     
     <p><b> Subject: '.$printQues[1].' </b></p>
    Total Marks: '.$printQues[4].' 
      </center>
      &emsp;&emsp;Date: '.$printQues[2].'
      <br>&emsp;&emsp;Time: '.$printQues[3].'
     <br/><br/><hr/><br/><br/><br/>
     
     <font size="3">
     <div style="margin-left:80px;">
     '.$sh1.'<br>'.$sh2.'<br>'.$sh3.'<br>'.$sh4.'<br>'.$sh5.'<br>'.$sh6.'
     </div>
     <br/><br/><br/><br/><br/><br/><br/><br/><br/>
     <center>===== THE END ====</center>
     </div></font>
     

     ';
     //print_r($printQues);
        
  }

?>

  
  <script>
    function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}</script>
  </div>

 






</div>



<?php include('footer.php'); ?> 


</div>

   

       


</body>
</html> 