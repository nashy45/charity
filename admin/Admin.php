<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="admin-page">
    <div class="login-container">
        <h2>Admin Register</h2>
        <form action="ad.php" method="POST">
           
            <div class="input-group">
                <label for="username">Username</label>
                <input type="username" id="username" name="username"placeholder="Enter your username">
                <small class="error"></small>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email"name="email" placeholder="Enter your email">
                <small class="error"></small>
            </div>

            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"placeholder="Enter your password">
                <small class="error"></small>
            </div>
            <div class="input-group">
                <label for="role">Role</label>
                <input type="role" id="role"name="role" placeholder="Enter your role">
                <small class="error"></small>
            </div>
 
            

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
