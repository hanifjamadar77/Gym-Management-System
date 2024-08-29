<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="sign-in-page.css">
    <title>FITNESSXIA</title>

    <style>
        #reset{
        padding: 1rem 3rem;
        background-color: #e1a59c;
        border: 1xx solid;
        border: 1px solid red;
        border-radius: 14px;
        cursor: pointer;
        }
        .poster >img{
            height: 30rem;
            width: 22rem;
}

    </style>
</head>

<body>
    <section>
        <div class="sign-in">
            <div class="out" onclick="window.location.href='index.php'">
                <img src="log-out_5269565.png" alt="">
            </div>
            <form class="register" id="form" action="connect.php" method="post">
                <label for="">Registration Form</label>
                <!-- <input type="text" id="fname" placeholder="First Name" name="firstName"> -->
                <input type="text" id="username" placeholder="User Name" name="username">
                <input type="email" id="email" placeholder="Email address" name="email">
                <select name="gender" id="gender" aria-placeholder="Gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
                <input id="pass" type="password" placeholder="Password" name="password">
                <input id="con_pass" type="password" placeholder="Confirm Password" name="conform_pass">
                <div class="buttons">
                    <button type="Submit" onclick="register()">Register</button>
                    <a id="reset" onclick="reset()">Reset</a>
                </div>
            </form>
            <div class="poster">
                <img src="sign-in-poster.jpg" alt="">
            </div>
        </div>
    </section>
    <script src="logic.js"></script>
</body>

</html>