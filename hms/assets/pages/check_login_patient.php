<?php
    session_start();
    $conn = mysqli_connect("localhost","root","","hms");
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM patient WHERE pat_email='$email' and pat_pass='$pwd';";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res) == 1)
    {
        $row = mysqli_fetch_assoc($res);
        $_SESSION['pat_id'] = $row['pat_id'];
        header("Location:infopage.php");
    }
    else
    {
        header("Location:patient_login.php");
    }
 ?>