<!-- Sanaa Jamil Dahlawi
     Umm-Al-Qura university 
	 +966558922571
	 snadhlwy@gmail.com 
	 -->
<?php
//to display errors
 error_reporting(E_ALL);
 ini_set('display_errors', 1);

//get the values 
$Base = $_POST["base"];
$Shoulder = $_POST["shoulder"];
$Elbow = $_POST["elbow"];
$Wrist = $_POST["wrist"];
$Gripper= $_POST["gripper"];
$Motor6=$_POST["motor6"];

//connect and check connection
$con = mysqli_connect("localhost","root","","roboticarm") or die("Error: Can't Connect to Server");
$db = mysqli_select_db($con,"roboticarm") or die("Error: Can't Connect to DB");

if(isset($_POST["save"])){
        $stmt=$con->prepare("INSERT INTO sliders (base,shoulder,elbow,wrist,gripper,motor6) VALUES (?,?,?,?,?,?)");
        $stmt -> bind_param("iiiiii",$Base,$Shoulder,$Elbow,$Wrist,$Gripper,$Motor6);
        $stmt->execute();
        echo "Saved successfully";
        echo "<br/>";
        }
       
         if(isset($_POST["on"])){
             $stmt=$con->prepare("INSERT INTO sliders (base,shoulder,elbow,wrist,gripper,motor6,play) VALUES (?,?,?,?,?,?,1)");
        $stmt -> bind_param("iiiiii",$Base,$Shoulder,$Elbow,$Wrist,$Gripper,$Motor6);
        $stmt->execute();
       
         echo "on successfully";
         echo "<br/>";
    }
     if(isset($_POST["off"])){
  $stmt=$con->prepare("INSERT INTO sliders (base,shoulder,elbow,wrist,gripper,motor6) VALUES (?,?,?,?,?,?)");
        $stmt -> bind_param("iiiiii",$Base,$Shoulder,$Elbow,$Wrist,$Gripper,$Motor6);
        $stmt->execute();
         echo "off successfully";
                  echo "<br/>";

    }

?>
