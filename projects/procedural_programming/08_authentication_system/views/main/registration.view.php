<h2 class="mb_10">Registration</h2>
<?php
display_all_flash_messages();
?>

<form action="" method="post">
    <table class="t2">
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="name" autocomplete="off" value="<?= old('name') ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" autocomplete="off" value="<?= old('email') ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" autocomplete="off" value="<?= old('phone') ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" autocomplete="off"></td>
        </tr>
        <tr>
            <td>Retype Password</td>
            <td><input type="password" name="password_confirmation" autocomplete="off"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" name="form1"></td>
        </tr>
    </table>
</form>
