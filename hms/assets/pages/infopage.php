<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Hospital Management System</title>
</head>
<body>
    <div class="jumbotron">
        <h1 align="center">DETAILS</h1>
    </div>
    <div class="container">
    <?php
        session_start();
        $conn = mysqli_connect("localhost","root","","hms");
        $sql = "SELECT * FROM patient WHERE pat_id=$_SESSION[pat_id];";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result))
        {
            ?>

            <table class="table table-hover">
                <tr>
                    <th>PATIENT NAME : </th>
                    <td><?php echo $row['pat_name']; ?></td>
                </tr>
                <tr>
                    <th>PATIENT MOBILE : </th>
                    <td><?php echo $row['pat_mobile']; ?></td>
                </tr>
                <tr>
                    <th>PATIENT EMAIL : </th>
                    <td><?php echo $row['pat_email']; ?></td>
                </tr>
                <tr>
                    <th>PATIENT ADDRESS : </th>
                    <td><?php echo $row['pat_address']; ?></td>
                </tr>
                <tr>
                    <th>PATIENT DISEASE : </th>
                    <td><?php echo $row['pat_disease']; ?></td>
                </tr>
                <tr>
                    <th>PATIENT STATUS : </th>
                    <td><?php echo $row['pat_status']; ?></td>
                </tr>
            </table>

            <?php
        }
    ?>
    </div>
</body>
</html>