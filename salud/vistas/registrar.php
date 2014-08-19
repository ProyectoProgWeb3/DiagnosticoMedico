<?php
// show potential errores / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errores) {
        foreach ($registration->errores as $error) {
            echo $error;
        }
    }
    if ($registration->mensajes) {
        foreach ($registration->mensajes as $message) {
            echo $message;
        }
    }
}
?>

<!-- register form -->
<form method="post" action="registrar.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check -->
    <label for="usuarioId">Username (only letters and numbers, 2 to 64 characters)</label>
    <input id="usuarioId" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="usuarioId" required />

    <!-- the email input field uses a HTML5 email type check -->
    <label for="email">User's email</label>
    <input id="email" class="login_input" type="email" name="email" required />

    <label for="clave">Password (min. 6 characters)</label>
    <input id="clave" class="login_input" type="password" name="clave" pattern=".{6,}" required autocomplete="off" />

    <label for="claveRepetir">Repeat password</label>
    <input id="claveRepetir" class="login_input" type="password" name="claveRepetir" pattern=".{6,}" required autocomplete="off" />
    <input type="submit"  name="registro" value="Register" />

</form>

<!-- backlink -->
<a href="index.php">Back to Login Page</a>
