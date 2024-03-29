<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","hms");
    if($conn->connect_error)
    {
        die("Connection Failed : ".$conn->connect_error);
    }
    $id = $_SESSION['doc_id'];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Doctor</title>
</head>
<body>
    <div class="jumbotron">
        <h1 align="center">List of Patients</h1>
        <form action="" method="POST">
            <button style="position:absolute;right:10%" class="btn btn-danger" name="logout">Logout</button>
        </form>
        <?php
            if(isset($_POST['logout']))
            {
                session_abort();
                header("location:../../index.php");
            }
        ?>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Disease</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $q = "SELECT * FROM patient WHERE pat_doc_id=$id;";
                    $res = mysqli_query($conn, $q);
                    while($row = mysqli_fetch_assoc($res))
                    {
                        ?>

                            <tr>
                                <td><?php echo $row['pat_name']; ?></td>
                                <td><?php echo $row['pat_disease']; ?></td>
                                <td><?php echo $row['pat_status']; ?></td>
                            </tr>

                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>