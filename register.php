<?php
if (isset($_POST['loginButton'])) {
    //echo "Login button was pressed";
}

if (isset($_POST['registerButton'])) {
    //echo "Register button was pressed";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Slotify!</title>
</head>

<body>

    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="post">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. bartSimpson" required>
            </p>
            <p>
                <label for="loginPassword">Password</label>
                <input id="loginPassword" name="loginPassword" type="password" placeholder="********" required>
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>

        <form id="registerForm" action="register.php" method="post">
            <h2>Create your free account</h2>
            <p>
                <label for="firstName">First Name</label>
                <input id="firstName" name="firstName" type="text" placeholder="Bart" required>
            </p>
            <p>
                <label for="lastName">Last name</label>
                <input id="lastName" name="lastName" type="text" placeholder="Simpson" required>
            </p>
            <p>
                <label for="email">E-mail</label>
                <input id="email" name="email" type="email" placeholder="bart@mail.com" required>
            </p>
            <p>
                <label for="confirmEmail">Confirm E-mail</label>
                <input id="confirmEmail" name="confirmEmail" type="email" placeholder="bart@mail.com" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="********" required>
            </p>
            <p>
                <label for="confirmPassword">Confirm Password</label>
                <input id="confirmPassword" name="confirmPassword" type="password" placeholder="********" required>
            </p>
            <button type="submit" name="registerButton">Sign Up</button>
        </form>
    </div>

</body>

</html>