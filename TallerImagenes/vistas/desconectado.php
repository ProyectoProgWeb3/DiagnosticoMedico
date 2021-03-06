<?php
// show potential errores / feedback (from login object)
if (isset($inicio)) {
    if ($inicio->errors) {
        foreach ($inicio->errors as $error) {
            echo $error;
        }
    }
    if ($inicio->messages) {
        foreach ($inicio->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<form method="post" action="index.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <input type="submit"  name="login" value="Log in" />

</form>

<a href="registrar.php">Register new account</a>
