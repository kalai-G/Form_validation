<?php 

include "dbconnection.php";

    if (isset($_POST['update']))
     {
       // $id = $_POST['id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $city = $_POST['city']; 
        $code = $_POST['code'];

        $sql = "UPDATE `STUDENT_FORM` SET `fname`='$fname',`lname`='$lname',`email`='$email',`number`='$number',`city`='$city' WHERE `id`='1'"; 
    

        $result = $conn->query($sql); 
        if ($result == TRUE) {
            echo "Record updated successfully.";
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }

    } 

if (isset($_GET['id'])){
 
    $id = $_GET['id']; 
    $sql = "SELECT * FROM `student_form` WHERE `id`='$id'";
    $result = $conn->query($sql); 
    if ($result->num_rows > 0) {        

        foreach ($result as $row )
        {

            $fname = $row['fname'];
            $lname = $row['lname'];
            $email = $row['email'];
            $number  = $row['number'];
            $city = $row['city'];
            $code = $row['code'];
            $id = $row['id'];

        } 

    ?><html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="style.css">
        <style>
            
    form{
        padding-top: 0rem;
    box-sizing: border-box;
    padding-left: 15rem;
    padding-right: 15rem;
    
    }
    .container{
    border: solid 2px;
    font-size: 20px;
    text-align: center;
    background-color: #00ffff17;
    /* padding-top: 0px; */

 
     }
     .button:hover{
        background:#e90d0d;
     }
     
            
            .button {
                background-color: #b2222275;
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
        label{
            display:inline-block;
            width:10rem;
        }  
        h2{
            padding-left: 33rem;
        } 
        body{
     background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(20).jpg");}      
        </style>       
    </head>

        <h2 style=" text-align:center:" > Update Form</h2>
        
     <form action=" " method="post" class=
      "resgister_form">
        <div class="container">
            <h1>Form</h1>
            <label >First name</label>
            <input type="text"  name="fname" value=" "><br>
            <label >Last name</label>
            <input type="text" id="lname" name="lname"  value=" "><br>
            <label for="email">Email</label>
            <input type="text" id="email" name="email"  value=" "><br>
            <label for="number">Mobile Number</label>
            <input type="number" id="number" name="number"  value=" "><br>
            <label for="address">City</label>
            <input type="text" id="address" name="city"  value=""><br>
            <label for="code">Pincode</label>
            <input type="number" id="code" name="code" value=" "><br>
            <input class="button" type="submit"  name="update" value="update">
        </div>  

        

          </fieldset>

        </form> 

        </body>

        </html> 

    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?> 