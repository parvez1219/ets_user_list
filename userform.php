<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>User Entry</title>
    </head>
    <body>
        <form action="" method="post">
            <br>Enter Name</br>
            <input type="text" name="name" required>
            <br>Enter Email</br>
            <input type="text" name="email" required>
            <br>Enter Phone Number</br>
            <input type="text" name="phone" required>
            <br>Enter Service Type</br>
            <input type="text" name="service">
            <br>Enter Address</br>
            <textarea name="address" id="" cols="50" rows="5"></textarea>
            <br>Enter any comments/queries</br>
            <textarea name="queries" id="" cols="50" rows="3"></textarea>
            <p><input type="submit" name="submit" value="Enter"></p>
        </form>
    </body>
</html>
<?php
    include 'config.php';

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $service=$_POST['service'];
        $address=$_POST['address'];
        $queries=$_POST['queries'];

        $sql="INSERT INTO userlist(name,email,phone,service,address,queries) VALUES('$name','$email','$phone','$service','$address','$queries')";
        $result = mysqli_query($con,$sql);
    }
?>