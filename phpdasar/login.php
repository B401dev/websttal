<?php
// php script
include("logincontroller.php");

// html
include("header.php");
?>
<div data-alert class="alert-box" style="display:none;">
    Ini standard error
    <a href="#" class="close">&times;</a>
</div>
<form action="login.php" method="POST">
    <div class="row column">
        <h4 class="text-center">Login</h4>
        <label>Username
            <input type="text" name="username" placeholder="Username">
        </label>
        <label>Password
            <input type="password" name="password" placeholder="Password">
        </label>
        <input id="show-password" type="checkbox"><label for="show-password">Show password</label>
        <p><input type="submit" name="submit" class="button expanded" value="MASUK" /></p>
    </div>
</form>

<?php
include("footer.php");
?>