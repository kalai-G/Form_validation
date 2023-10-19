<?php
include("dbconnection.php");
$sql="SELECT * FROM student_form";
$result = $conn->query($sql);
?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<style>
    body{
     background-image: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img(20).jpg");}



</style>
<body>

    <div class="container">
        <h2>student_form</h2>
       <table class="table">
        <thead>
              <tr>

                <th>fname</th>
                <th>lame</th>
                <th>Email</th>
                <th>Number</th>
                <th>City</th>
                <th>Code</th>

            </tr>
        </thead>
    <tbody> 
        <?php
            if ($result->num_rows > 0)
             {

                // while ($row = $result->fetch_assoc())
                foreach( $result as $row)
                {

        ?>

                    <tr>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['number']; ?></td>
                    <td><?php echo $row['city']; ?></td>
                    <td><?php echo $row['code']; ?></td>
                    <td><a class="btn btn-info" href="http://localhost/connection/form/update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a   class="btn btn-danger" href="http://localhost/connection/form/delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>