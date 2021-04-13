<?php
require_once('C:\xampp\htdocs\justine_stroup_inf653vc_authentication\model\admin_db.php');
require_once('C:\xampp\htdocs\justine_stroup_inf653vc_authentication\admin\util\valid_register.php');
include('header.php');
// Display errors from $errors array if they exist
valid_registration($username, $password, $confirm_password);
?>
<form action="." method="GET" class="register_form">
    <input type="hidden" name="action" value="register">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" maxlength="50" required>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password" maxlength="50" required>
    <label for="confirm_password">Confirm password:</label>
    <input type="text" id="confirm_password" name="confirm_password" maxlength="50" required>
    <input type="submit" value="Register" class="button blue">
</form>
<?php
include('footer.php');