<!-- Sanaa Jamil Dahlawi
     Umm-Al-Qura university 
	 +966558922571
	 snadhlwy@gmail.com 
	 -->
 
<!DOCTYPE html>

<html>
	
	<head>
		<title>Arm Controller</title> <!-- page name-->
		<meta charset="utf-8">
		<link rel="stylesheet" href="CSS/arm.css" media="screen">
		
	</head>
	
	<body>
	

		<header id=site-header ></header>
		
		<form  method="post" action="connection.php" class="slidecontainer">

		<!-- create a range slider1 -->
		<div class="slidecontainer"> 
		<text> <strong> Base: </strong></text>
		<input type="range" min="0" max="180" value="90" class="slider" name="base"> <label>You chose <span class="limit"></span></label> 
		</div>
		
		
		<!-- create a range slider2 -->
		<div class="slidecontainer"> 
		<text><strong>Shoulder:</strong></text>
		<input type="range" min="0" max="180" value="90" class="slider" name="shoulder"> <label>You chose <span class="limit"></span></label>
		</div>
		
		<!-- create a range slider3 -->
		<div class="slidecontainer"> 
		<text><strong>Elbow:</strong></text>
		<input type="range" min="0" max="180" value="90" class="slider" name="elbow"> <label>You chose <span class="limit"> </span></label>
		</div>
		
		<!-- create a range slider4 -->
		
		<div class="slidecontainer"> 
		<text><strong>Wrist:</strong></text>
		<input type="range" min="0" max="180" value="90" class="slider" name="wrist"> <label>You chose <span class="limit"></span></label>
		</div>
		
		<!-- create a range slider5 -->
		<div class="slidecontainer"> 
		<text><strong>Gripper:</strong></text>
		<input type="range" min="0" max="180" value="0" class="slider" name="gripper"> <label>You chose <span class="limit"></span></label>
		</div>
		<!-- create a range slider6 -->
		<div class="slidecontainer"> 
		<text><strong>motor6:</strong></text>
		<input type="range" min="0" max="180" value="0" class="slider" name="motor6"> <label>You chose <span class="limit"></span></label>
		</div>
		
		<!-- save and submit button -->
		<div class="slidecontainer">
		<input value="save" type="submit" name="save">
		</div>
		
		<div class="slidecontainer">
		<input value="on" type="submit"  name="on">
		</div>
		
		<div class="slidecontainer">
		<input value="off" type="submit"  name="off">
		</div> 


		</form>

		<footer id="site-footer"></footer>
		
		
		
		<!-- java script -->
		
	<script>//to change the value acconrding to the slider
		function updateLabel() { 
		var limit = this.parentElement.getElementsByClassName("limit")[0];
		limit.innerHTML = this.value;
		}

		var slideContainers = document.getElementsByClassName("slidecontainer");

		for (var i = 0; i < slideContainers.length; i++) {
		var slider = slideContainers[i].getElementsByClassName("slider")[0];
		updateLabel.call(slider);
		slider.oninput = updateLabel;
		}
	</script>
		
		</form>

	</body>
</html>
