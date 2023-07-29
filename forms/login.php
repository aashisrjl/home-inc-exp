<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<style>
    button{
        margin-top: 30px !important;
        margin-bottom: 20px;
    }
    label{
        margin-top: 20px !important;
    }
    h3{
        margin-top: 40px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6 main">
                <div class="card">
                
                    <h3>login Form</h3>
                
                <div class="card-body">

                <?php include('../msg/successmsg.php')?>
                <?php include('../msg/errmsg.php') ?>

    
                 <form action="../process/loginprocess.php" method="post">
                            
                    <label for="email" class="from-label">Email :</label>
                    <input type="text" name="email" class="form-control">
    
    
                    <label for="password" class="from-label">Password :</label>
                    <input type="text" name="password" class="form-control">
    </hr>
    <button type="submit" class="btn btn-success">Login</button>

    <p id="conf">Don't have an Account ? <a href="signup.html">signup</a></p>

    </form>
        </div>
    </div>
    </div>
    </div>
    </div>
    
</body>
<script src="../js/bootstrap.min.js"></script>
</html>