<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- For font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,900;1,100;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/style.css">

    <!-- for bootstrap -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="main-container">
        <div class="navBar">
            <span class="gradient">KANIKA LIBRARY</span>
        </div>
        <div class="main-content">
           <div class="main-login-page">
                <div class="heading">
                    <span>Welcome to<span class="gradient"> Kanika Library</span></span>
                </div>
                <div class="login-content">
                    <div class="student-login">
                       <form action="login-student-page.php" method="get">
                           <h3>Student/Teacher Login</h3>
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="xyz@gmail.com">
                            <p class="fw-light fs-8">We'll never share your email with anyone else.</p> 
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                            <button class="btn-general">Login</button>
                        </form>
                    </div>
                    <div class="admin-login">
                            <form action="login-admin-page.php" method="get">
                                <h3>Admin Login</h3>
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="xyz@gmail.com">
                                <p class="fw-light fs-8">We'll never share your email with anyone else.</p> 
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
                                <button class="btn-general">Login</button>
                            </form>
        
                    </div>
                </div>
                <div class="main-error">
                        
                </div>
           </div>
        </div>
    </div>
</body>
</html>