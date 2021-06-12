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

<title>Generate Question Paper</title>

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

  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">PSG College of Arts & Science</h1>
    <p class="lead">Question Generation System </p>
  </div>
</div>



  <div class="row">
  <div class="col-4">


<ul class="list-group">

  <li class="list-group-item"><a href="addQuestion.php">Add Question to DB</a></li>
  <li class="list-group-item">Generate Paper</li>
  <li class="list-group-item"><a href="addCourse.php">Add Course</a></li>
 
  <li class="list-group-item"><a href='findPaper.php'>Download Question by ID</a></li>

</ul>
    


  </div>

  <?php
  $ques_array=array(); 
  $errorMsg = ""; 
  $successMsg = "";
  //adding course
  if(isset($_POST['submit'])){
    
    if(!empty($_POST['courseSelect']) && isset($_POST['examdate']) && isset($_POST['examtime'])){
      $examdate=$_POST['examdate'];
      $examtime=$_POST['examtime'];
      $courseName=$_POST['courseSelect']; 
      $cn=mysqli_query($link, "select * from courses where courseTitle='$courseName'");
      while($cnr=mysqli_fetch_array($cn)){    
              $course=$cnr['courseName'];
       
      }
      
      $sec1qn=NULL;
      $sec2qn=NULL;
      $sec3qn=NULL;
      $sec4qn=NULL;
      $sec5qn=NULL;
      $sec6qn=NULL;

      
      $s1 = $_POST['sec1']; 
      $s2 = $_POST['sec2']; 
      $s3 = $_POST['sec3']; 
      $s4 = $_POST['sec4']; 
      $s5 = $_POST['sec5']; 
      $s6 = $_POST['sec6']; 
      $marks=0;
      $marks+=$s1;
      $marks+=$s2*2;
      $marks+=$s3*3;
      $marks+=$s4*5;
      $marks+=$s5*10;
      $marks+=$s6*15;

      if($s1>0){
        $sec1qn="";
        $fetchques=mysqli_query($link, "select * from questions where courseName='$courseName' and difficulty=1 ORDER BY RAND() LIMIT $s1");
        $num=mysqli_num_rows($fetchques);
        // $errorMsg=$errorMsg.$num;
        if($s1>$num){
            $errorMsg=$errorMsg.$s1.' questions are not available at Section 1'.$courseName;
        }else{
          $i=1;
          $sec1qn='&emsp;&emsp;<b><h3>1 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1*'.$s1.'='.$s1.'</b></h3><br>';
          while($ques=mysqli_fetch_array($fetchques)){    
              
            $sec1qn=$sec1qn.$i.'.&ensp;'.$ques['question'].'<br/><br/>';
            $successMsg=$successMsg.$ques['question'].'<br/><br/>';
            $i++;
          }
          
        }
       
      }
      if($s2>0){
        $s2*=2;
        $sec2qn="";
        $fetchques=mysqli_query($link, "select * from questions where courseName='$courseName' and difficulty=2 ORDER BY RAND() LIMIT $s2");
        $num=mysqli_num_rows($fetchques);
        // $errorMsg=$errorMsg.$num;
        if($s2>$num){
            $errorMsg=$errorMsg.$s2.' questions are not available at Section 2'.$courseName;
        }else{
          $s2/=2;
          $i=1;
          $mark=2*$s2;
          $k=1;
         $sec2qn='&emsp;&emsp;<b><h3>2 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2*'.$s2.'='.$mark.'</h3></b><br>Answer all the Questions from the following<br><br>';
          while($ques=mysqli_fetch_array($fetchques)){    
            
            if($i%2){
              $sec2qn=$sec2qn.$k.'a) .&ensp;'.$ques['question'].'<br/><br/>';
              $sec2qn.='<center>(or)</center>';           
            }else{
              $sec2qn=$sec2qn.$k.'b) .&ensp;'.$ques['question'].'<br/><br/>';
              $k++;
            }
           
            $successMsg=$successMsg.$ques['question'].'<br/><br/>';
            $i++;
          }
        }
       
      }
      if($s3>0){
        $s3*=2;
        $sec3qn="";
        $fetchques=mysqli_query($link, "select * from questions where courseName='$courseName' and difficulty=3 ORDER BY RAND() LIMIT $s3");
        $num=mysqli_num_rows($fetchques);
        // $errorMsg=$errorMsg.$num;
        if($s3>$num){
            $errorMsg=$errorMsg.$s3.' questions are not available at Section 3'.$courseName;
        }else{
          $s3/=2;
          $i=1;
          $mark=3*$s3;
          $k=1;
          $sec3qn='&emsp;&emsp;<b><h3>3 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3*'.$s3.'='.$mark.'</h3></b><br>Answer all the Questions from the following<br><br>';
          while($ques=mysqli_fetch_array($fetchques)){    
                 
            if($i%2){
              $sec3qn=$sec3qn.$k.'a) .&ensp;'.$ques['question'].'<br/><br/>';
              $sec3qn.='<center>(or)</center>';           
            }else{
              $sec3qn=$sec3qn.$k.'b) .&ensp;'.$ques['question'].'<br/><br/>';
              $k++;
            }
            $successMsg=$successMsg.$ques['question'].'<br/><br/>';
            $i++;
          }
        }
       
      }
      if($s4>0){
        $s4*=2;
        $sec4qn="";
       
        $fetchques=mysqli_query($link, "select * from questions where courseName='$courseName' and difficulty=5 ORDER BY RAND() LIMIT $s4");
        $num=mysqli_num_rows($fetchques);
        // $errorMsg=$errorMsg.$num;
        if($s4>$num){
            $errorMsg=$errorMsg.$s4.' questions are not available at Section 4'.$courseName;
        }else{
          $s4/=2;
          $i=1;
          $mark=5*$s4;
          $k=1;
          $sec4qn='&emsp;&emsp;<b><h3>5 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;5*'.$s4.'='.$mark.'</h3></b><br>Answer all the Questions from the following<br><br>';
          while($ques=mysqli_fetch_array($fetchques)){    
                 
            if($i%2){
              $sec4qn=$sec4qn.$k.'a) .&ensp;'.$ques['question'].'<br/><br/>';
              $sec4qn.='<center>(or)</center>';           
            }else{
              $sec4qn=$sec4qn.$k.'b) .&ensp;'.$ques['question'].'<br/><br/>';
              $k++;
            }
            $successMsg=$successMsg.$ques['question'].'<br/><br/>';
            $i++;
          }
        }
       
      }
      if($s5>0){
        $s5*=2;
        $sec5qn="";
        
        $fetchques=mysqli_query($link, "select * from questions where courseName='$courseName' and difficulty=10 ORDER BY RAND() LIMIT $s5");
        $num=mysqli_num_rows($fetchques);
        // $errorMsg=$errorMsg.$num;
        if($s5>$num){
            $errorMsg=$errorMsg.$s5.' questions are not available at Section 5'.$courseName;
        }else{
          $s5/=2;
          $i=1;
          $mark=10*$s5;
          $k=1;
        $sec5qn='&emsp;&emsp;<b><h3>10 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;10*'.$s5.'='.$mark.'</h3></b><br>Answer all the Questions from the following<br><br>';
          while($ques=mysqli_fetch_array($fetchques)){    
                 
            if($i%2){
              $sec5qn=$sec5qn.$k.'a) .&ensp;'.$ques['question'].'<br/><br/>';
              $sec5qn.='<center>(or)</center>';           
            }else{
              $sec5qn=$sec5qn.$k.'b) .&ensp;'.$ques['question'].'<br/><br/>';
              $k++;
            }
            $successMsg=$successMsg.$ques['question'].'<br/><br/>';

            $i++;
          }
        }
       
      }
      if($s6>0){
        $s6*=2;
        $sec6qn="";
        
        $fetchques=mysqli_query($link, "select * from questions where courseName='$courseName' and difficulty=15 ORDER BY RAND() LIMIT $s6");
        $num=mysqli_num_rows($fetchques);
        // $errorMsg=$errorMsg.$num;
        if($s6>$num){
            $errorMsg=$errorMsg.$s6.' questions are not available at Section 6'.$courseName;
        }else{
          $s6/=2;
          $i=1;
          $mark=15*$s6;
          $k=1;
        $sec6qn='&emsp;&emsp;<b><h3>15 Mark Questions&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;15*'.$s6.'='.$mark.'</h3></b><br>Answer all the Questions from the following<br><br>';
          while($ques=mysqli_fetch_array($fetchques)){    
                 
            if($i%2){
              $sec6qn=$sec6qn.$k.'a) .&ensp;'.$ques['question'].'<br/><br/>';
              $sec6qn.='<center>(or)</center>';           
            }else{
              $sec6qn=$sec6qn.$k.'b) .&ensp;'.$ques['question'].'<br/><br/>';
              $k++;
            }
            $successMsg=$successMsg.$ques['question'].'<br/><br/>';
            $i++;
          }
        }
       
      }
      $id='Qn_'.getTimestamp();
      $addPaper = "INSERT INTO generatedquestion(ID,Sub,Date,Time,TotalMarks,Sec1,Sec2,Sec3,Sec4,Sec5,Sec6                                                                                                       ) 
      VALUES ('$id','$course','$examdate','$examtime','$marks','$sec1qn','$sec2qn','$sec3qn','$sec4qn','$sec5qn','$sec6qn')";
            if(mysqli_query($link, $addPaper)){
              printf("Successfully Generated Question Paper<br>Qn Paper ID: ".$id."<br>Please Note down the Question paper Id for download");
            }
            else{
              printf("Error in Question Generation!");
            }
      
      
    
      $successMsg = "Successfully Generated Question Paper<br>Qn Paper ID: ".$id."<br>Please Note down the Question paper Id for download"; 
    
    
   
      
    
      }
      else{
        $errorMsg="Select Options";
      }
  }



  $fetchlist=mysqli_query($link, "select * from courses");

  



  ?>

  <div class="col-1">
  </div>


  <div class="col-4">
    
<form method="POST">
  <div class="form-group">
   

    <div class="form-group">
    <label for="exampleFormControlSelect1">Select Course</label>
    <select name="courseSelect" class="form-control" id="exampleFormControlSelect1">
      <?php 
      while($row=mysqli_fetch_array($fetchlist)){

          echo '<option>'.$row['courseTitle'].'</option>'; 
    
      }
      ?> 
    
    </select>
    </div>


   <div class="form-group">
   <label>Select Date and Time of the Exam</label>
   <input type="date" name="examdate">
   <input type="time" name="examtime">
    <label for="exampleFormControlSelect1">Number of Questions on section 1(1 Marks)</label>
    <select name="sec1" class="form-control" id="exampleFormControlSelect1">
    <option>0</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     <option>6</option>
     <option>7</option>
     <option>8</option>
     <option>9</option>
     <option>10</option>
     <option>11</option>
     <option>11</option>
     <option>12</option>
     <option>13</option>
     <option>14</option>
     <option>15</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Number of Questions on section 2(2 Marks)</label>
    <select name="sec2" class="form-control" id="exampleFormControlSelect1">
    <option>0</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     <option>6</option>
     <option>7</option>
     <option>8</option>
     <option>9</option>
     <option>10</option>
     <option>11</option>
     <option>11</option>
     <option>12</option>
     <option>13</option>
     <option>14</option>
     <option>15</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Number of Questions on section 3(3 Marks)</label>
    <select name="sec3" class="form-control" id="exampleFormControlSelect1">
    <option>0</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     <option>6</option>
     <option>7</option>
     <option>8</option>
     <option>9</option>
     <option>10</option>
     <option>11</option>
     <option>11</option>
     <option>12</option>
     <option>13</option>
     <option>14</option>
     <option>15</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Number of Questions on section 4(5 Marks)</label>
    <select name="sec4" class="form-control" id="exampleFormControlSelect1">
    <option>0</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     <option>6</option>
     <option>7</option>
     <option>8</option>
     <option>9</option>
     <option>10</option>
    
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Number of Questions on section 5(10 Marks)</label>
    <select name="sec5" class="form-control" id="exampleFormControlSelect1">
    <option>0</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     <option>6</option>
     <option>7</option>
     <option>8</option>
     <option>9</option>
     <option>10</option>
    
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Number of Questions on section 6(15 Marks)</label>
    <select name="sec6" class="form-control" id="exampleFormControlSelect1">
    <option>0</option>
     <option>1</option>
     <option>2</option>
     <option>3</option>
     <option>4</option>
     <option>5</option>
     
    </select>
  </div>

 
 <input value="Generate" name='submit' type="submit" class="btn btn-primary"><br/><br/>
  <div class="alert alert-success" role="alert">
   <?php echo $errorMsg; ?> 
   <?php echo $successMsg; ?> 
  </div>
</form>





  </div>







</div>



<?php include('footer.php'); ?> 


</div>

   

       
    

</body>
</html> 