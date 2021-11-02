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
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Enter Your Full Name</label>
                <input type="name" class="form-control" name="name" id="exampleFormControlInput1" placeholder="FirstName LastName ">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Enter Your Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Enter Phone Number</label>
                <input type="phone" class="form-control" name="phone" id="exampleFormControlInput1" placeholder="(00)0123456789">
            </div>
            <label for="exampleDataList" class="form-label">Select your service</label>
            <input class="form-control" list="datalistOptions" name="service" id="exampleDataList" placeholder="Select Your Service Type">
            <datalist id="datalistOptions">
                <option value="Web Development">
                <option value="Mobile Development">
                <option value="Digital Marketing">
                <option value="Analytics">
                <option value="Graphic Designing">
            </datalist>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter Address</label>
                <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Enter any comments/queries</label>
                <textarea class="form-control" name="queries" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Submit</button>
            </div>
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
