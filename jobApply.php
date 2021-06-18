
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
<?php include("includes/nav.php");
    ?>
    <?php
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = '$user_id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

?>
<div class="containerrrr">


    <div class="file-upload">
        <h2 style="font-weight: bold;"> Easy Apply</h2>
    <h5>Choose an option to autocomplete your application. You can still fill your profile manually.</h5>
        <div class="image-upload-wrap">
          <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
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
      <hr size="1" width="90%" color="#d4d4d4" style="margin-left: 120px;">  
      <h2 style="font-weight: bold; margin-left: 190px;">Personal Information</h2>
      <div class="container" style="margin-right: 930px;">
        <div class="avatar-upload">
            
            
            <img style="width:300px;height:300px; margin-left:20px;  border-radius:50%;" src="layouts/img/Users/<?php echo $user['image']; ?>">

            
        </div>
    </div>
      <form  style=" margin-left: 160px; margin-top: -5px;">
      </div>
        <div class="col-md-8">
          <div class="panel panel-default">      
            <div class="panel-body">
              <div class="form-group form-group-inline">
                <label class="label-block">Name</label>
                <input class="form-control form-control-inline form-control-medium" value="<?php echo $user['name']; ?>" disabled/>
              </div>
              
              <div class="panel-body">
                <div class="form-group form-group-inline">
                  <label class="label-block">Email</Label>
                  <input type="email" class="form-control form-control-inline form-control-medium" value="<?php echo $user['email']; ?>" disabled/>
                </div>
        
                <div class="panel-body">
                  <div class="form-group form-group-inline">
                    <label class="label-block">Mobile</label>
                    <input class="form-control form-control-inline" value="<?php echo $user['phone']; ?>" disabled/>
                  </div>
            </div>
          </div>
        </div>
      </form>
   

<hr size="1" width="90%" color="#d4d4d4" style="margin-left:80px; margin-top:20px">  
<div class="experience">
        <h1 style="font-weight: bold; margin-left: 190px; margin-top:35px;">Experience</h1>
        <button type="button" class="exbutton" onclick="openForm2()" style="font-weight: bold;margin-left:865px;">+  Add</button>
      </div>
        <div class="form-popup" id="myForm2" style="display: none; width: 1050px;margin-left: 100px;">
          <form action="job apply.html"  style="background-color:whitesmoke; margin-left: 30px;" >
            <div class="panel-body">
              <div class="form-group form-group-inline">
                <label class="label-block" required>Title <span style="color:red;">*</Label>
                <input class="form-control form-control-inline form-control-medium"  />
              </div>
              <div class="form-group form-group-inline">
                <label class="label-block">Company</label>
                <input class="form-control form-control-inline"  />
              </div>
              
              <div class="panel-body">
                <div class="form-group form-group-inline" style=" margin-bottom:11px;">
                  <label class="label-block">Office location</Label>
                  <input class="form-control form-control-inline form-control-medium" style="width: 940px; margin-bottom: 2px;"  />
                </div>
                <div class="panel-body">
                  <div class="form-group form-group-inline">
                    <label class="label-block">place your resdience</Label>
                      <textarea name="message" class="text-box" rows="1" style="margin-left: 38px;"></textarea>
                  </div>
                  <div class="panel-body">
                    <div class="form-group form-group-inline">
                  <label class="label-block">From:<span style="color:red;">*</label>
                  <input type="date"  class="form-control form-control-inline form-control-medium" >
                </div>
                <div class="form-group form-group-inline">
                  <label class="label-block">To: <span style="color:red;">*</label>
                  <input type="date"  class="form-control form-control-inline form-control-medium" >
                </div>
                </div>
            </div>
          </div>
        </div>
        <button type="button" class="exbutton3"  onclick="closeForm2()">Save</button>
        </div>     
      </form>
      <hr size="1" width="90%" color="#d4d4d4" style="margin-left: 80px; margin-top:20px">  
      <div class="experience">
        <h1 style="font-weight: bold; margin-left: 190px; margin-top:35px;">Education</h1>
        <button type="button" class="exbutton" onclick="openForm()" style="font-weight: bold;margin-left:881px;">+  Add</button>
      </div>
        <div class="form-popup" id="myForm" style="display: none; width: 1050px;margin-left: 100px;">
        <form action="job apply.html"  style="background-color:whitesmoke; margin-left: 30px;" >
            <div class="panel-body">
                <div class="form-group form-group-inline" style=" margin-bottom:11px;">
                  <label class="label-block">Institution</Label>
                  <input class="form-control form-control-inline form-control-medium" style="width: 940px; margin-bottom: 2px;"  />
                </div>
                <div class="form-group form-group-inline">
                <label class="label-block">Major</Label>
                <input class="form-control form-control-inline form-control-medium"  />
              </div>
              <div class="form-group form-group-inline">
                <label class="label-block">Degree</label>
                <input class="form-control form-control-inline"  />
              </div>
              <div class="panel-body">
                <div class="form-group form-group-inline" style=" margin-bottom:11px;">
                  <label class="label-block">School location</Label>
                  <input class="form-control form-control-inline form-control-medium" style="width: 940px; margin-bottom: 2px;"  />
                </div>
                <div class="panel-body">
                  <div class="form-group form-group-inline">
                    <label class="label-block">Description</Label>
                      <textarea name="message" class="text-box" rows="1" style="margin-left: 38px;"></textarea>
                  </div>
                  <div class="panel-body">
                    <div class="form-group form-group-inline">
                  <label class="label-block">From:</label>
                  <input type="date"  class="form-control form-control-inline form-control-medium" >
                </div>
                <div class="form-group form-group-inline">
                  <label class="label-block">To:</label>
                  <input type="date"  class="form-control form-control-inline form-control-medium" >
                </div>
                </div> 
          </div>
        </div>
            </div>
        <button type="button" class="exbutton3"  onclick="closeForm()">Save</button>       
        </div>     
      </form>
      <hr size="1" width="90%" color="#d4d4d4" style="margin-left: 80px; margin-top:20px">  
      
 
<h2 style="font-weight: bold; margin-left: 190px;">Message to Hiring Manager</h2> 
<h5 style="margin-left: 190px; margin-top:8px;">Let the company know about your interest working there.</h5>
    <textarea name="message" class="text-box" rows="12" style="margin-left: 190px;"></textarea>
    <hr size="1" width="90%" color="#d4d4d4" style="margin-left: 80px;"> 
    <div>
      <button class="exbutton2" style="font-weight: bold;">Next</button> 
    </div>
    </div>
  <?php include("includes/footer.php");
    ?>  
</body>
</html>