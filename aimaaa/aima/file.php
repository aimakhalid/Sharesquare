

<!DOCTYPE html>
<html>
<head>
    <title>ShareSquare - Profile</title>

</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0;">
    <header style=" background-color: #C4A484; padding: 10px; color: #fff; text-align: center;" >
        <div style="max-width: 960px; margin: 0 auto; padding: 20px;">
            <div style="text-align: center;">
                <h1>ShareSquare</h1>
            </div>
            
        </div>
    </header>

    <div style="max-width: 960px; margin: 0 auto; padding: 20px;">
    <div style="display: flex;">
        <div style="margin-right: 20px;">
            <img src="profile-picture.jpg" alt="Profile Picture" width="200">
        </div>
        <div style="flex-grow: 1;">
            <h2 style="margin-top: 0;">Profile</h2>
            <p><strong>Email:</strong> aimakhalid2553@gmail.com</p>
            <p><strong>Password:</strong> aima2553</p>
            <div style="margin-top: 20px;">
                <h3>Reset Password</h3>
                <form id="reset-password-form">
                    <div>
                        <label for="current-password">Current Password:</label>
                        <input type="password" id="current-password" name="current-password" required>
                    </div>
                    <div>
                        <label for="new-password">New Password:</label>
                        <input type="password" id="new-password" name="new-password" required>
                    </div>
                    <div>
                        <label for="confirm-password">Confirm Password:</label>
                        <input type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <button type="submit">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer style="background-color: #C4A484; padding: 10px; color: #fff; text-align: center; position: fixed; bottom: 0; left: 0; width: 100%;">
    <div style="max-width: 960px; margin: 0 auto; padding: 20px;">
        &copy; 2023 ShareSquare. All rights reserved.
    </div>
</footer>
</body>
</html>