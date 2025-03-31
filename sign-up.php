<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- 3rd Party Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Reset -->
    <link rel="stylesheet" href="css/reset.css">

    <!-- Main --> 
    <link rel="stylesheet" href="css/main.css">

    <title>Sign Up</title>
</head>
<body>

    <div class="form-container">
        <H1 class="form-title">Sign Up Here!</H1>
        <!-- Login Form -->
        <form action="sign-up.php" method="post" class="form login-form">
            <Label for="uid">Name</Label>
            <div class="form-cntrl">                 
                <i class="input-icon fa-solid fa-user"></i>
                <input type="text" name="uid" placeholder="Please Enter Your Name"/>
            </div>    
            <Label for="uemail">Email</Label>
            <div class="form-cntrl">                 
                <i class="input-icon fa-solid fa-user"></i>
                <input type="text" name="uemail" placeholder="Please Enter Email"/>
            </div>  
            <Label for="pwd">Password</Label>
            <div class="form-cntrl">                 
                <i class="input-icon fa-solid fa-user"></i>
                <input type="text" name="pwd" placeholder="Please Enter Your Password"/>
            </div>  
            <Label for="pwdrepeat">Repeat Password</Label>
            <div class="form-cntrl">                
                <i class="input-icon fa-solid fa-lock"></i>
                <input type="text" name="pwdrepeat" placeholder="Please Repeat Password"/>
            </div>
            <button class="form-btn" type="submit" name="submit">Sign Up</button>
        </form>
    </div>    
    
</body>
</html>
    


