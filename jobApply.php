<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "instinct_games";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(isset($_GET['id']) && isset($_GET['user'])) {
  $user_id = $_GET['user'];
  $job_id = $_GET['id'];
}

if(isset($_POST['apply'])) {
  $user_id = $_GET['user'];
  $job_id = $_GET['id'];

  // File

  $target_dir = "resumes/";
  $target_file = $target_dir . basename($_FILES["resume"]["name"]);
  $filename = $_FILES["resume"]["name"];
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if($check !== false) {
    echo "File is an image";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


  $title = $_POST['title'];
  $company = $_POST['company'];
  $description = $_POST['description'];
  $exp_from = $_POST['exp_from'];
  $exp_to = $_POST['exp_to'];
  $institution = $_POST['institution'];
  $major = $_POST['major'];
  $educ_desc = $_POST['educ_desc'];
  $educ_from = $_POST['educ_from'];
  $educ_to = $_POST['educ_to'];
  $message = $_POST['message'];
  $degree = $_POST['degree'];

  $sql = "INSERT INTO `applied_jobs` (`id`, `user_id`, `resume`, `title`, `company`, `exper_description`, `exper_from`, `exper_to`, `institution`, `major`, `degree`, `educ_description`, `educ_from`, `educ_to`, `message`, `role_id`) VALUES (NULL,'$user_id', '$filename','$title', '$company ', '$description', '$exp_from', '$exp_to', '$institution', '$major', '$degree','$educ_desc', '$educ_from', '$educ_to', '$message', '$job_id')";
  if (mysqli_query($conn, $sql)) {
      header("Location: index.php");
  } else {
      echo "<P color:RED>Error</p> deleting record: " . $conn->error;
  }



}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="layouts/css/style.css">
    
    <title>Job_apply</title>
</head>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openForm2() {
  document.getElementById("myForm2").style.display = "block";
}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
</script>
<body id="jobApply" style="  background-color: white;
  color: black;">
<?php 

include("includes/nav.php");

  if(empty($_SESSION['user_id'])) {
    // die("Not Requested");
    header("location: signin.php");
  }
    ?>
    <?php
      $user_id = $_SESSION['user_id'];
      $sql = "SELECT * FROM users WHERE id = '$user_id'";
      $result = mysqli_query($conn, $sql);
      $user = mysqli_fetch_assoc($result);

      ?>
<div class="containerrrr">
  <form action="jobApply.php?id=<?php echo $job_id; ?>&user=<?php echo $user_id; ?>" method="POST" enctype="multipart/form-data">
      <div class="file-upload">
        <h2 style="font-weight: bold;"> Easy Apply</h2>
        <h5>Choose an option to autocomplete your application. You can still fill your profile manually.</h5>
        <div class="image-upload-wrap">
          <input class="file-upload-input" type='file' onchange="readURL(this);" name="resume" accept="image/*" />
          <div class="drag-text">
            <h3>Drag and drop a file or select add A File</h3>
          </div>
        </div>
        <div class="file-upload-content">
          <img class="file-upload-image" src="#" alt="your image" />
          <div class="image-title-wrap">
            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
          </div>
        </div>
      </div>
      <hr size="1" width="115%" color="#d4d4d4" style="margin-left:-80px;margin-bottom:20px;">  
      <h2 style="font-weight: bold; margin-left:5px;">Personal Information</h2>
      <div class="container" style="margin-right: 930px;">
      
        <img style="width:160px;height:140px; margin-left:20px; margin-bottom:30px; border-radius:90%;" src="layouts/img/Users/<?php echo $user['image']; ?>">
            
          
            <div  style=" margin-left: 210px; margin-top: -180px;">
                <div class="col-md-8" style="margin-bottom:22px">
                  <div class="panel panel-default">      
                    <div class="panel-body">
                          <div class="form-group form-group-inline">
                            <label class="label-block">Name</label>
                            <input class="form-control form-control-inline form-control-medium" name="name" value="<?php echo $user['name']; ?>" disabled/>
                          </div>
                      
                          <div class="panel-body">
                            <div class="form-group form-group-inline">
                            <label class="label-block">Email</Label>
                            <input type="email" class="form-control form-control-inline form-control-medium" name="email" value="<?php echo $user['email']; ?>" disabled/>
                          </div>
                
                          <div class="panel-body" >
                            <div class="form-group form-group-inline">
                            <label class="label-block">Mobile</label>
                            <input class="form-control form-control-inline" name="mobile" value="<?php echo $user['phone']; ?>" disabled/>
                          </div>
                          
                    </div>
                  </div>
                </div>
            </div>
            </div>
            </div> 
      </div>
      <hr size="1" width="115%" color="#d4d4d4" style="margin-left:-80px;margin-top:10px;">    
      <div class="experience" style="margin-top:20px;">
        <h1 style="font-weight: bold; margin-top:10px; margin-left:4px">Experience</h1>
         <button type="button" class="exbutton4" onclick="openForm2()" style="font-weight: bold;">+ Add</button>
      </div>
     
        <div class="form-popup" id="myForm2" style="display: none; width: 100%;margin: 0 auto;">
          <div  style="background-color:whitesmoke; margin-left: 30px;  border-radius:25px;" >
              <div class="panel-body">
                <div class="form-group form-group-inline">
                  <label class="label-block" required>Title </Label>
                  <input class="form-control form-control-inline form-control-medium" name="title"  />
                </div>
                <div class="form-group form-group-inline">
                  <label class="label-block">Company</label>
                  <input class="form-control form-control-inline"  name="company"/>
                </div>
              
                <div class="panel-body">
                  
                  <div class="panel-body">
                    <div class="form-group form-group-inline">
                      <label class="label-block">Description</Label>
                        <textarea name="description" class="text-box" rows="1" style="margin-left: 38px;"></textarea>
                    </div>
                    <div class="panel-body">
                      <div class="form-group form-group-inline">
                          <label class="label-block">From:</label>
                          <input type="date" name="exp_from"  class="form-control form-control-inline form-control-medium" >
                      </div>
                      <div class="form-group form-group-inline">
                        <label class="label-block">To:</label>
                        <input type="date" name="exp_to"  class="form-control form-control-inline form-control-medium" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
                <button type="button" class="exbutton2"  onclick="closeForm2()">Save</button>
            </div>
        </div>  

        <hr size="1" width="115%" color="#d4d4d4" style="margin-left:-80px;margin-top:35px;">  
      <div class="experience">
        <h1 style="font-weight: bold; margin-top:30px;margin-left:4px">Education</h1>
        <button type="button" class="exbutton4" onclick="openForm()" style="font-weight: bold;">+ Add</button>
      </div>
        <div class="form-popup" id="myForm" style="display: none; width: 102%;margin: 0 auto;">
          <div style="background-color:whitesmoke; margin-left: 30px;border-radius:25px; " >
              <div class="panel-body">
                  <div class="form-group form-group-inline" style=" margin-bottom:11px;">
                    <label class="label-block">Institution</Label>
                    <input class="form-control form-control-inline form-control-medium" name="institution" style="width: 940px; margin-bottom: 2px;"  />
                  </div>
                  <div class="form-group form-group-inline">
                    <label class="label-block">Major</Label>
                    <input name="major" class="form-control form-control-inline form-control-medium"  />
                  </div>
                  <div class="form-group form-group-inline">
                    <label class="label-block">Degree</label>
                    <input name="degree" class="form-control form-control-inline"  />
                  </div>

                <div class="panel-body">
                  
                  <div class="panel-body">
                    <div class="form-group form-group-inline">
                      <label class="label-block">Description</Label>
                        <textarea name="educ_desc" class="text-box" rows="1" style="margin-left: 38px;"></textarea>
                    </div>
                    <div class="panel-body">
                      <div class="form-group form-group-inline">
                        <label class="label-block">From:</label>
                        <input type="date" name="educ_from"  class="form-control form-control-inline form-control-medium" >
                      </div>
                      <div class="form-group form-group-inline">
                        <label class="label-block">To:</label>
                        <input type="date" name="educ_to" class="form-control form-control-inline form-control-medium" >
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
              <button type="button" class="exbutton2"  onclick="closeForm()">Save</button>       
          </div>
        </div>    
      <div>
      <hr size="1" width="115%" color="#d4d4d4" style="margin-left:-80px; margin-top:5px;">  
      </div>
    <div>
    <div style="margin-top:15px;width: 70%;">
        <h2 style="font-weight: bold; margin-bottom:10px;">Message to Hiring Manager</h2> 
        <h5 style="margin-top:-2px;">Let the company know about your interest working there.</h5>
        <textarea name="message" class="text-box" rows="12"></textarea>
      </div>
      <hr size="1" width="125%" color="#d4d4d4" style="margin-left:-80px;margin-bottom:10px;">  
      <button class="exbutton3" name="apply" type="submit" style="font-weight: bold;">APPLY</button>    
  </form>
</div>
</div>
</div>
  <?php include("includes/footer.php");
    ?>  
</body>
</html>