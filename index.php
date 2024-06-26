<?php
            // Include the database connection file
            require_once '../db_connect.php';

            // Fetch data from the database
            $sql = "SELECT * FROM hotelbooking";
            $result = mysqli_query($connect, $sql);
            $layout = "";
            // Check if records exist
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                   $layout .= "<div class='card' style='width: 18rem;'>
                <img src='...' class='card-img-top' alt='...'>
                <div class='card-body'>
                <h5 class='card-title'>Location:   $row["hotel_name"]</h5>
                <p class='card-text'>Room Type:  $row["room_type"]</p>
                <p class='card-text'>Check-In Date:  $row["check_in_date"]</p>
                <p class='card-text'>Check-Out Date:  $row["check_out_date"]</p>
                <p class='card-text'>Customer Name:  $row["customer_name"]</p>
                <p class='card-text'>Customer Email:  $row["customer_email"]</p>
                <p class='card-text'>Customer Phone:  $row["customer_phone"]</p>
                <p class='card-text'>Total Price:  $row["total_price"]</p>
                <p class='card-text'>Status:  $row["status"]</p>
                <a href='details.php?id= $row["id"]' class='btn btn-warning'>Details</a>
                <a href='update.php?id= $row["id"]' class='btn btn-primary'>Update</a>
                <a href='delete.php?id= $row["id"]' class='btn btn-danger ms-1'>Delete</a>
                <a href='#' class='btn btn-primary'>Go somewhere</a>
                </div>
                </div>";
            }
        } else {
            $layout = "<p>No bookings found</p>";
        }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking System</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
       body {
            background-image: url('https://cdn.pixabay.com/photo/2022/10/09/14/52/windows-7509369_1280.jpg');
            background-size: cover;
            background-attachment: fixed;
        }


        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 30px 0;
        }

        .social-icons a {
            color: #fff;
            margin-right: 15px;
        }

        .card {
            height: 100%;
        }

        .card-body {
            height: 200px; /* Adjust as needed */
            overflow-y: auto; /* Add scroll if content exceeds height */
        }
    
        

       
    </style>
    

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">frankBooks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php">Create Booking</a>
                    </li>
                 
                </ul>
            </div>
        </div>
    </nav>
    

        </div>

    <div class="container">
        <h1 class="my-4">Hotel Booking System</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
           

                


                 
            <?php
                
            ?>
        </div>
        <div class="my-4">
            <a href="create.php" class="btn btn-primary">Create New Booking</a>
        </div>
    </div>

    
    <footer class="footer">
        <div class="container text-center">
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
               
            </div>
            <p>&copy; 2024 FrankView System. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>