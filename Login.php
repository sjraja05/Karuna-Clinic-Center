
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Online Channeling</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
* {
			box-sizing: border-box;
		}
		.header::after {
			content: "";
			clear: both;
			display: table;
		}
		
		.bottom type::after {
			content: "";
			clear: both;
			display: table;
		}
		
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
	
		.title{
						height:200px;
			background-image:url("Aurora-Soft-Blue-abstract-wallpapers-illusions-polish-shape-abstract-aurora-1920x1080.jpg");
			height:200px;
			border-radius: 25px 25px 0px 0px;
			font-family:Brush Script MT;
			font-size:60px;
			color: white;
			padding:5px;
			line-height:0.5px;
			}
		
		.header{
			background-color:  #d5dbdb;
			text-decoration: none;
			font-family:Algerian;
			color:#0b8276;
			font-size:25px;
			text-align:center;
		}
					legend {
				color: #002080;
				font-size: 18px;
				font-weight:bold;
			}
			.field input,textarea,select {
		
				margin-left: 150px;
			}

/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
.contact{
			background-color:   #d5dbdb ;
			padding:0.1%;
			border-radius: 15px;
			margin-bottom:10px;
			font-size:20px;
			line-height:45px;
		}
		
		.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
a:visited{
		color:blue;
		}
		a:active{
		color:white;
		}
		a:link{
		text-decoration:none;
		}


/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}
.option{
	
	 width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
	
}
.button{
	background-color: #4CAF50;
    color: white;
	 width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}

</style>
</head>
<body>

<div class="title col-12">
		<h1>Karuna Clinic Center</h1>
		<h2 style="font-family:Agency FB;font-size:30px;">You Can Trust Us</h2>
	</div>
	
	<div class="header col-12">
	
		<div  class="Home col-4">
			<a href="Home.php">Home</a>
		</div>
		
		<div class="Customer col-4">
			<a href="Services.php">Services</a>
		</div>
		
		<div class="Contact col-4">
			<a href="Contact.php">Contact Us</a>
		</div>
		</div>
		</br>
		<div class = "xy col-12">
		<div class= "x col-3"></div>

<div class="container col-6">
  <form action="Login.php" method="post">

  <image src ="images\default_medium_avatar-57d58da4fc778fbd688dcbc4cbc47e14ac79839a9801187e42a796cbd6569847.png" width="30%" height="30%" class="center"></br>
  
  </br>
 
  
								
		 
								<div class="container">
									<label for="uname"><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="uname" required>

									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>
										
									<button type="submit" name="submit" class="button" id="submit">Login</button>
									
									<p><a href="enter_email.php">Forgot your password?</a></p>
								</div>
						
								<div class="container" style="background-color:#f1f1f1">			   				
									<a href="Register.php" ><span> <button type="button" class="button"   >Register Now</button></span></a>
								</div>
						</form>
  
  </div>
  </div>
  
  
  
  
  
  
  
  
  <div class="contact col-12">
		<div class="img col-3">
		<img src="images\logo-right.png" width="70%" height="150px">
		</div>
		<div class="address col-3">
		<p style="align:center"><address >No-212/5,</br> Chankannai North,</br> Jaffna,</br> Sri Lanka.</address></p><br/>
		</div>
		<div class="phone col-3">
		<p> &#9742 +944658352464</p>
		<p> &#9742 +946789765432</p>
		</div>
		<div class="time col-3">
		<p style="font-family:Agency FB";>Week days</p>
		<p style="font-family:Agency FB";>7.30am to 8.30am</p>
		<p style="font-family:Agency FB";>Weekend</p>
		<p style="font-family:Agency FB";>7.30am to 10.30am</p>
		</div>
	</div>
	<?php
	session_start();
    if (isset($_POST["submit"])) {
    	$con = mysqli_connect("localhost", "root", "", "karuna_clinic_center");
        mysqli_select_db($con, "karuna_clinic_center");

		$UN = $con->real_escape_string($_POST['uname']);
		$Pwd = $con->real_escape_string($_POST['psw']);
		
		
		
        
        
        
        	$sql = $con->query("SELECT Patient_id, Password, isEmailConfirmed FROM patient WHERE Username='$UN'");
        	 $Q3 = "select * from patient where Username='$UN' and Password='$Pwd'";
        $result = mysqli_query($con, $Q3);
			if ($sql->num_rows > 0) {
                $data = $sql->fetch_array();
                if ($data['isEmailConfirmed'] == 0) {
	                    echo "<script type='text/javascript'>alert('Please verify your email for Login!!!!');</script>";
	                   
	                }


                    else{
	              if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['Patient_id']=$row['Patient_id'];
              	$_SESSION['Username']=$row['Username'];
                $_SESSION['Password']=$row['Password'];
                $_SESSION['Firstname']=$row['Firstname'];
                
				
                header("location:./patient_details.php");
			  //$_SESSION['Last_Name']=$row['Last_Name'];
              
        } 
		else {
           echo"<script>alert('Invalid user name and password');</script>";
           break;
        }  
                
			} 
			
        	/*  $Q2 = "select * from patient where Username='$UN' and Password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            $_SESSION['Patient_id']=$row['Patient_id'];
              	$_SESSION['Username']=$row['Username'];
                $_SESSION['Password']=$row['Password'];
                $_SESSION['Firstname']=$row['Firstname'];
                
				
                header("location:./doctorsdetails.php");
			  //$_SESSION['Last_Name']=$row['Last_Name'];
              
        } 
		else {
            echo "Invalid user name and password";
        }
        */
    }
    

        $Q2 = "select * from doctor where Username='$UN' and Password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            header("location:doctor.php");
                        $_SESSION['Doctor_id']=$row['Doctor_id'];
            $_SESSION['Username']=$row['Username'];
              $_SESSION['Password']=$row['Password'];
              $_SESSION['First_Name']=$row['First_Name'];
			  //$_SESSION['Last_Name']=$row['Last_Name'];
              
        } 
		else {
            echo"<script>alert('Invalid user name and password');</script>";
            
        }
        
		
		

        $Q4= "select * from admin where Username='$UN' and Password='$Pwd'";
        $result = mysqli_query($con, $Q4);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
            $_SESSION['Admin_id']=$row['Admin_id'];
            $_SESSION['Username']=$row['Username'];
              $_SESSION['Password']=$row['Password'];
              $_SESSION['First_Name']=$row['First_Name'];
              header("location:Admin.php");
              
        } 
		else {
            echo"<script>alert('Invalid user name and password');</script>";
            
        }
		
		

        $Q5 = "select * from lab_assistant where Username='$UN' and Password='$Pwd'";
        $result = mysqli_query($con, $Q5);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
        $_SESSION['Labassistant_id']=$row['Labassistant_id'];
        $_SESSION['Username']=$row['Username'];
        $_SESSION['Password']=$row['Password'];
        $_SESSION['First_Name']=$row['First_Name'];
        header("location:./labassistant.php");
              
        } 
		else {
        	echo"<script>alert('Invalid user name and password');</script>";
        	
		}
    }
	
    ?> 
</body>
</html>
