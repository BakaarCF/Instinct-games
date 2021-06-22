<?php
include("DB.php");
class User {

    

    private $username;
    private $fullname;
    private $email;
    private $password;
    private $phone;
    private $image;

    public function __construct() {
        
    }

    public static function addUser($POST) {
        $usernamee = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $passwordd = $_POST['password'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "instinct_games";

        

        $conn = mysqli_connect($servername,$username,$password,$dbname);
        
        $sql = "INSERT INTO users (id,user_name,name,email,phone,password,type) VALUES (NULL,'$usernamee', '$name', '$email','$phone','$passwordd','0')";
        if (mysqli_query($conn, $sql)) {
            header("Location:signin.php");
        } else {
            echo "<P color:RED>Error</p> deleting record: " . $conn->error;
        }
    }

    public static function viewSpecficUser($id) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "instinct_games";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

        $user_id = $id;
        $sql = "SELECT * FROM users WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    }

    public static function viewAllUsers() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "instinct_games";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);
        $users = mysqli_fetch_assoc($result);
        return $users;
    }

    public static function removeUser($id) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "instinct_games";

        $conn = mysqli_connect($servername,$username,$password,$dbname);

        $sql = "DELETE FROM users WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        mysqli_fetch_assoc($result);
    }

    public static function updateUser($POST,$id,$image) {
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phoneno'];

        $servername = "localhost";
        $usernamee = "root";
        $passwordd = "";
        $dbname = "instinct_games";

        // $filename = $image["image"]["name"];
        // $tempname = $image["image"]["tmp_name"]; 
	    // $folder = "../layouts/img/Users/".$filename;

        

        $conn = mysqli_connect($servername,$usernamee,$passwordd,$dbname);
        
        $sql = "UPDATE users SET user_name='$username', name='$name', email='$email' , password='$password' , phone='$phone' , image='$image' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("Location: MyProfile.php?id=".$id);
        } else {
            echo "<P color:RED>Error</p> deleting record: " . $conn->error;
        }
    }


    

    /**
     * Get the value of fullname
     */ 
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set the value of fullname
     *
     * @return  self
     */ 
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
}
?>