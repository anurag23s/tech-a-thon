<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funda of Web IT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="indexAG.css" >
    
</head>
<body>

   <style>
body{
    background-image:url("https://images.unsplash.com/photo-1536009190979-329b94ad4d57?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
    bacground-repeat:no repeat;
    background-size:100% 400%;
}
    </style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <?php 
                    if(isset($_SESSION['sub']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['sub']);
                    }
                ?>

               

<h2><a class="meet" href="">Scheduled Meetings</a></h2>
  <form action="ssAG.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="first">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>

                            <form action="ssAG.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="second">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>

                            <form action="ssAG.php" method="POST">
                            <div class="form-group mb-3">
                                <label for="" class="third">Note</label>
                                <input type="text" name="note" class="form-control">
                            </div>

                           
                            <div class="form-group mb-3">
                                <button type="submit" class="button" name="sub" class="btn btn-primary">Save Event</button>
                            </div>

                
                        </form>

                   
        </div>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>