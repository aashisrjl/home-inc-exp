<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 main">
                <div class="card">
                
                    <h3>SignUp Form</h3>
                
                <div class="card-body">
                    <?php include('../msg/errmsg.php') ?>
    
                 <form action="../process/signuprocess.php" method="post">
                            
                    <label for="email" class="from-label">Email :</label>
                    <input type="email" name="email" class="form-control" required>
    
                    <label for="fullname" class="from-label">FullName :</label>
                    <input type="text" name="fullname" class="form-control" required>
    
                    <label for="password" class="from-label">Password :</label>
                    <input type="password" name="password" class="form-control" required>

                    <label for="password" class="from-label">Password Confirmation :</label>
                    <input type="password" name="passwordC" class="form-control" required>
    </hr>
    <button type="submit" class="btn btn-success">signup</button>
    <p id="conf">Alredy have an Account ? <a href="login.html">login</a></p>

    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    
</body>
<script src="../js/bootstrap.min.js"></script>
</html>