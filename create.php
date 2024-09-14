<?php
include("./db_conn.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4 topic">CRUD Application</h2>

        <!-- Form for adding/updating records -->
        <form method="post">
            <div class="main_form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="username" id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" name="contact" id="contact"
                            placeholder="Enter your contact number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Enter your city">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" id="country"
                            placeholder="Enter your country">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pin">Pin</label>
                        <input type="text" class="form-control" name="pin" id="pin" placeholder="Enter your pin code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4"
                        placeholder="Enter your message"></textarea>
                </div>
                <div class="_btn">
                    <button type="submit" class="submit_btn">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["username"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $city = $_POST["city"];
    $country = $_POST["country"];
    $pin=$_POST["pin"];
    $message = $_POST["message"];
    
    

    if($name=="" || $email=="" || $contact="" || $message=="" || $city=="" || $country=="" || $pin=="" ){
        echo "some fields are blank";
    }else{
        $insertQuery = mysqli_query($conn, "INSERT INTO `exam_form`(`name`, `contact`, `email`, `city`, `country`, `pin_code`, `message`) VALUES ('$name','$contact','$email','$city','$country','$pin','$message')");
        if($insertQuery){
            echo "data sucessully iserted";
        }else {
            echo "data not submit, try again........";
        }
    }

}
?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>