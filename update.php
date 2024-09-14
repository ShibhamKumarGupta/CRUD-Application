<?php
include('./db_conn.php');

if ($_SERVER['REQUEST_METHOD'] == "GET") 
{
    $id = $_GET['id'];
    // echo $id;

   $selectQuery = mysqli_query($conn, "SELECT * FROM `exam_form` WHERE id=$id");
   $row=mysqli_fetch_assoc($selectQuery);
//    echo "<pre>";
//    print_r($row);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4 topic">CRUD Application</h2>


        <form method="post">
            <div class="main_form">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="username" value="<?php echo $row['name']; ?>"
                            id="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="contact">Contact</label>
                        <input type="text" class="form-control" name="contact" value="<?php echo $row['contact']; ?>"
                            id="contact" placeholder="Enter your contact number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>"
                            id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" value="<?php echo $row['city']; ?>"
                            id="city" placeholder="Enter your city">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" value="<?php echo $row['country']; ?>"
                            id="country" placeholder="Enter your country">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pin">Pin</label>
                        <input type="text" class="form-control" name="pin" value="<?php echo $row['pin_code']; ?>"
                            id="pin" placeholder="Enter your pin code">
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4"
                        placeholder="Enter your message"><?php echo $row['message']; ?></textarea>
                </div>
                <div class="_btn">
                    <button type="submit" class="submit_btn">Update Data</button>
                </div>
                
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php

}
?>

<?php
$id=$_GET['id'];
if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["username"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $country = $_POST["country"];
    $city = $_POST["city"];
    $pin = $_POST["pin"];
    $message = $_POST["message"];
    
    

    if($name=="" || $email=="" || $contact="" || $message=="" || $pin=="" || $city=="" || $country==""){
        echo "some fields are blank";
    }else{
        $updateQuery = mysqli_query($conn, "UPDATE `exam_form` SET `name`='$name',`contact`='$contact',`email`='$email',`city`='$city',`country`='$country',`pin_code`='$pin',`message`='$message' WHERE id = $id");
        if($updateQuery){
            echo "data successully Updated";
        }else {
            echo "data not update, try again........";
        }
    }

}
?>