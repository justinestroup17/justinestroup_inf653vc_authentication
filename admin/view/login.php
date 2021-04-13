<?php
if(isset($login_message)) {
    echo($login_message);
}
?>
<form action="." method="GET" class="register_form">
    <input type="hidden" name="action" value="login">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" maxlength="50" required>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password" maxlength="50" required>
    <input type="submit" value="Login" class="button blue">
</form>