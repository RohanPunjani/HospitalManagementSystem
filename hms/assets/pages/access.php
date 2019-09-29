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
    <title>Hospital Management System</title>
    <style>
        .card{
            height: 40vh;
            color: white;
            cursor: pointer;
            margin: 2.5vh 0;
            justify-content:center;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <h1 align="center" style="font-size : 10vh;">Admin Access</h1>
    </div>
    <div class="container">
        <form action="" method="POST">
            <h1>
                ADDING
                <hr>
            </h1>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <a class="card bg-dark d-flex justify-content-center align-items-center" href="add_doc.php">
                        <h1 style="font-size:7vh;color:white">
                            Add Doctor
                        </h1>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a class="card bg-dark d-flex justify-content-center align-items-center" href="add_pat.php">
                        <h1 style="font-size:7vh;color:white">
                            Add Patient
                        </h1>
                    </a>
                </div>
                <div class="col-md-4 col-sm-12">
                    <a class="card bg-dark d-flex justify-content-center align-items-center" href="add_emp.php">
                        <h1 style="font-size:7vh;color:white">
                            Add Employee
                        </h1>
                    </a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>