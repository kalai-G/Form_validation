<?php
include('dbconnection.php');



    $fnameErr = $lnameErr = $emailErr = $numberErr = $cityErr = $codeErr= "";
    $fname = $lname = $email = $number = $city = $code ="";
//    print_r($_POST);exit();
    //variables
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $text_fname=$_POST["fname"];
        if(empty($text_fname))
        {
            $fnameErr="fname is required";
            echo $fnameErr;
           
        }
        else {
            $fname = test_input($_POST["fname"]);
        }
        
        if(empty($_POST["lname"]))
        {
            $lnameErr="lName is required";
            echo $lnameErr;

        }
        else {
             $lname = test_input($_POST["lname"]);
        }
        
        if(empty($_POST["email"]))
        {
            $emailErr="email is required";
            echo $emailErr;

        }
        else {
            $email = test_input($_POST["email"]);
                
            
        }
        
        if(empty($_POST["number"]))
        {
            $numberErr="Number is required";
            echo $numberErr;

        }
        else {
            $number = test_input($_POST["number"]);
        }
        
        if(empty($_POST["city"]))
        {
            $cityErr="Name is required";
            echo $cityErr;

        }
        else {
            $city=test_input($_POST["city"]);
        }
        
        if(empty($_POST["code"]))
        {
            $codeErr="code is required";
            // echo $codeErr;

        }
        else {
            $code=test_input($_POST["code"]);
        }
    }
 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
     }


$sql="INSERT INTO student_form (fname, lname , email, number, city ,code) VALUES ('".$fname."','".$lname."','".$email."', '".$number."', '".$city."', '".$code."')";

// If the connection is successful, run the query
if ($conn->query($sql) === TRUE) {
    // echo "record inserted successfully";

// If the query is not successful, display the error message
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .container{
    border: solid 2px;
    font-size: 20px;
    text-align: center;
    background-color: #00ffff17;
    /* padding-top: 0px; */

 
     }
     label{
        display: inline-block;
        text-align:left;
        margin: right 10px;
        width:140px;
     }
       
    body{
        overflow:hidden; 
        padding:;
        background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(20).jpg");

    } 
        .button {
            background-color: #b222224a;
            border: none;
            color: white;
            padding: 7px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius:44%;
            }
    form{
        padding-top: 0rem;
    box-sizing: border-box;
    padding-left: 15rem;
    padding-right: 15rem;
    
    }a:hover {
  background-color: #b22222;
 }
 .button:hover{
    background-color: #b22222; 
 }

         
        
    </style>
    
</head>
<body>
  
  
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class=
"resgister_form">
    <p><span class = "error">* required field.</span></p>
        <div class="container">
            <h1>Form</h1>
            <label >First name</label>
            <input type="text"  name="fname" value=" ">
            <span class="error">*<?php  echo $fnameErr;?></span><br>
            <label >Last name</label>
            <input type="text" id="lname" name="lname"  value=" ">
            <span class="error">*<?php  echo $lnameErr;?></span><br>
            <label for="email">Email</label>
            <input type="text" id="email" name="email"  value=" ">
            <span class="error">*<?php  echo $emailErr;?></span><br>
            <label for="number">Mobile Number</label>
            <input type="number" id="number" name="number"  value=" ">
            <span class="error">*<?php  echo $numberErr;?></span><br>
            <label for="address">City</label>
            <input type="text" id="address" name="city"  value=" ">
            <span class="error">*<?php  echo $cityErr;?></span><br>
            <label for="code">Pincode</label>
            <input type="number" id="code" name="code" value=" ">
            <span class="error">*<?php  echo $codeErr;?>  </span><br>
            <input class="button" type="submit"  name="submit" value="submit">
        </div>  
       
          <a href="http://localhost/connection/form/view.php" class="button">View</a> 
        

</form>
</body>
          