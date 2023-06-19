<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>

        .form-group button:hover {
            background-color: #555;
        }
    </style>
</head>
<body style="background:#C4A484; font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <div style="max-width: 500px; margin: 0 auto; padding: 20px;">
        <h2>Login</h2>
        <form>
            <div style="margin-bottom: 20px;">
                <label style=" display: block; margin-bottom: 5px;" for="username">Username:</label>
                <input [type="text"] [type="password"]  type="text" id="username" name="user" placeholder="Enter your username">
            </div>
            <div style="margin-bottom: 20px;">
                <label style=" display: block; margin-bottom: 5px;" for="password">Password:</label>
                <input [type="text"] [type="password"]  type="password" id="password" name="pass" placeholder="Enter your password">
            </div>
            <div style="margin-bottom: 20px;">
                <button style="padding: 10px 20px; font-size: 16px; background-color: #333; color: #fff; border: none; cursor: pointer;
  " type="submit"> <a href="home.php">Login</a></button>
            </div>
        </form>
    </div>
</body>
</html>
