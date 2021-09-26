<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register System</title>
</head>
<body>
    <div class="form">
        <!-- Login Form -->
        <form action="" class="login">
            <h2>Login</h2>
            <input type="email" name="email" placeholder="Enter Your Email...">
            <input type="password" name="pass" placeholder="Enter Your Password...">
            <div class="rem">
                <input type="checkbox" name="re-check" id="re-check">
                <label for="re-check">Remember Me</label>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>

        <!-- Register Form -->
        <form action="" class="login">
            <h2>Register</h2>
            <input type="text" name="name" placeholder="Enter Your Name...">
            <input type="number" name="phone" placeholder="Enter Your Mobile...">
            <input type="email" name="email" placeholder="Enter Your Email...">
            <input type="password" name="pass" placeholder="Enter Your Password...">
            <input type="password" name="re-pass" placeholder="Enter Your Password Again..."> 
            <button type="submit" name="submit">Register</button>
        </form>
    </div>
</body>
</html>