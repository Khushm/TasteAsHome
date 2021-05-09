<?php require_once 'authController2.php'; ?>
<html>
<head>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <header>
            <div class="overlay">
            <nav style ="width:auto; height:120px; background-color: skyblue; padding-top: 35px;">
              <h2 style="color: black;">Owner Login Page</h2>
                <ul>
                    <li><a href="homepage.php" class="cool-link" style="color: black">Home</a></li>
                    <li><a href="userrole.html" class="cool-link" style="color: black">User Roles</a></li>
                </ul>
            </nav>
            </div>
    </header>
    <style>
    body {
    overflow-y: hidden; /* Hide scrollbars */
    }
    </style>
<body style="background-color: lavender">
<img src="image/owner.png"  style=" background-color: transparent; position:fixed; right:755px;  height:170px; width:200px; height:200px; border:none;">
<img src="image/cat3.gif" style="position:fixed; right:1200px; bottom:180px; width:280px; height:280px; border:none;">
<img src="image/cake1.gif" style="position:fixed; right:250px; bottom:195px; width:300px; height:320px; border:none;">  
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div login">
                <form action="ownerlogin.php" method="post">
                    <h3 class="text-center">Owner Login</h3>

                    <?php if(count($errors) >0): ?>
                        <div class="alert alert-danger">
                            <?php foreach($errors as $error): ?>
                                <li><?php echo $error; ?> </li>
                            <?php endforeach; ?> 
                        </div>
                    <?php endif; ?> 


                    <div class="form-group">
                        <label for="username">Username or Email</label>
                        <input type="text" name="username" value="<?php echo $username; ?>"  class="form-control form-control-lg">
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" value="" id="myInput">
                        <input type="checkbox" onclick="myFunction()">Show Password
                        <script>
                            function myFunction() {
                                var x = document.getElementById("myInput");
                                    if (x.type === "password") {
                                        x.type = "text";
                                    } else {
                                        x.type = "password";
                                            }
                                    }
                        </script>
                    </div>
                    
            
                    <div class="form-group">
                        <button type="submit" name="login-btn" class="btn btn-primary btn-block btn-lg">Login</button>
                    </div>
                    <p class="text-center">Not yet a member? <a href="ownersignup.php">Sign Up</a></p>
                    <div style="font-size 0.8em; text-align: center;">
                    <a href="forgot_password2.php">Forgot/ Change your password?</a></div>
                
        </form>
    </div>
    </div>
    </div>
</body>
</html>