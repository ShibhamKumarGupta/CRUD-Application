<?php
    include('./db_conn.php');
?>

<html>
<head>
    <title>
        Display
    </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container text-center mt-4">
        <h2 class="topic">CRUD APPLICATION DISPLAY</h2>
    </div>
   <div class="container mt-3">
    <button type="button" class="btn_newdata"><a href="./create.php">Add New Data</a></button>
   </div>
            
      
    <div class="container my-3">
        <div class="col-lg-12 mx-auto">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Pin</th>
                <th scope="col">Message</th>
                
                <th class="text-center" scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $selectQuery = mysqli_query($conn, "SELECT * FROM `exam_form` WHERE 1");
                if ($selectQuery) {
                    if(mysqli_num_rows($selectQuery) > 0){
                        while ($row = mysqli_fetch_assoc($selectQuery)) {
                            ?>
                            <tr>
                            <th scope="row"><?php echo $row['id']; ?></th>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['contact']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['country']; ?></td>
                            <td><?php echo $row['pin_code']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><a href="update.php?id=<?php echo $row['id'];?>" 
                            class="btn btn-success btn-sm">Edit</a></td>
                            <td>
                                <a href="delete.php?id=<?php echo $row['id'];?>" 
                                    class="btn btn-danger btn-sm">Delete</a></td>
                            </tr>
                            <?php

                        }
                    }
                }
                
                ?>
                
            </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js
"></script>
</body>
</html>


