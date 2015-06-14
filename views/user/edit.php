<h1>User: Edit</h1>

<?php
    print_r($this->user);
?>

<?php echo $this->user['userid']; ?>

<form action="<?php echo URL; ?>user/editSave/<?php echo $this->user['userid']; ?>" method="post">
    <label for="Login">Login</label><input type="text" name="login" value="<?php echo $this->user['login']; ?>"><br>
    <label for="Password">Password</label><input type="text" name="password"><br>
    <label for="Role">Role</label>
        <select name="role">
            <option value="default" <?php if($this->user['role'] == 'default') echo 'selected'; ?>>default</option>
            <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>admin</option>
        </select><br>
    <label>&nbsp;</label><input type="submit">
</form>