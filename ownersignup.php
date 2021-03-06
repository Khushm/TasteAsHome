<?php require_once 'authController2.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">

    <title>Register</title>
</head>

<header>
            <div class="overlay"></div>
            <nav style ="width:auto; height:150px; background-color: skyblue; padding-top: 45px;">
              <h2 style="color: black;">Signup Page</h2>
                <ul>
                    <li><a href="homepage.php" class="cool-link" style="color: black;">Home</a></li>
                    <li><a href="userrole.html" class="cool-link" style="color: black;">User Roles</a></li>
                </ul>
            </nav>
    
</header>

<body>
       
        <a>
        <div style="background-image: url('img/bg2.jpg'); background-repeat: no-repeat; background-size: cover;">  
        </a>
    <div class="container">
        <div class="row">
        <img src="image/avatar.jpg" class="avatar">
            <div class="col-md-4 offset-md-4 form-div signup">
                <form action="ownersignup.php" method="post">
                    <h3 class="text-center">Register</h3>

                    <?php if(count($errors) >0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                                <li><?php echo $error; ?> </li>
                            <?php endforeach; ?> 
                        </div>
                    <?php endif; ?> 


                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="email">Contact No</label>
                        <input type="contact" name="contact"  class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="email">Address</label>
                        <input type="address" name="address"  class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender</label><br>
                        <input type="radio" name="gender" value="Male">Male&nbsp;&nbsp;
                        <input type="radio" name="gender" value="Female">Female
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="passwordConf">Confirm Password</label>
                        <input type="password" name="passwordConf" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                    </div>
                    <p class="text-center">Already a member? <a href="ownerlogin.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>