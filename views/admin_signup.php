<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="icon" href="../public/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../public/assets/css/admin_signup.css">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <div class="logo">
                <img src="../public/images/logo.png" alt="Logo">
            </div>
            <h2>Admin Signup Form</h2>
            <p>Provide your details correctly to create an account</p>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="error"><?= htmlspecialchars($_SESSION['error']) ?></div>
                <?php unset($_SESSION['error']); ?>
            <?php endif; ?>

            <form action="<?= route("admin.signup") ?>" method="post">
                <div class="input-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>

                <div class="input-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>

                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="input-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>

                <div class="input-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>

                <div class="input-group">
                    <label for="contactNo">Contact Number:</label>
                    <input type="tel" id="contactNo" name="contactNo">
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="../public/assets/js/admin_signup.js"></script>
</body>

</html>