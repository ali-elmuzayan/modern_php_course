<form action="<?= route('/admin/login/store') ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" value="<?= old("username") ?>">

    <label for="password">Password</label>
    <input type="password" name="password" id="password" >

    <div>

    <input type="submit" value="login">
    </div>
</form>