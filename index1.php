<!DOCTYPE html>
<html>
<head>
    
    <title> Online Channelling </title>

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
        @keyframes slider{
        0%{
        left :0;
        }
        20%{
        left :0;
        }
        25%{
        left :-100%;
        }
        45%{
        left :-100%;
        }
        50%{
        left :-200%;
        }
        70%{
        left :-200%;
        }
        75%{
        left :-300%;
        }
        95%{
        left :-300%;
        }
        100%{
        left :-400%;
        }
        }
        #slider{
        overflow:hidden;
        }
        
        #slider figure img{
        width:20%;
        float:left;
        }
        #slider figure{
        position:relative;
        width:500%;
        margin:0;
        left:0;
        text-align:left;
        font-size:0;
        animation:20s slider infinite;
        } 
        
        .body{
            background-image:url("Aurora-Soft-Blue-abstract-wallpapers-illusions-polish-shape-abstract-aurora-1920x1080.jpg");
            height:400px;
            background-position:center; 
            border-radius: 25px 25px 25px 25px;
            width:100%;
            border-radius: 0px 0px 25px 25px;
            
        }
        
        .header{
            background-color:  #d5dbdb;
            text-decoration: none;
            font-family:Algerian;
            color:#0b8276;
            font-size:25px;
            text-align:center;
        }
        
        .contact{
            background-color:   #d5dbdb ;
            padding:0.1%;
            border-radius: 15px;
            margin-bottom:10px;
            font-size:20px;
            line-height:45px;
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
    </style>

</head>
<body>

    <div>
    
        <h1>This is home page</h1>
        
       
    </div>
   
</body>
</html>
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