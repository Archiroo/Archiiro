<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <title>Archiiro Website</title>
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>SIGN IN</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Phone number</label>
                        <input type="text" placeholder="Enter your phone">
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Enter password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field input">
                        <label>Password</label>
                        <input type="password" placeholder="Confirm password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Register">
                    </div>
            </form>
            <div class="link">You have account? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="js/showPass.js"></script>
</body>
</html>