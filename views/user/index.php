<h1>Users</h1>

<form action="<?php echo URL; ?>user/create" method="post">
    <label for="Login">Login</label><input type="text" name="login"><br>
    <label for="Password">Password</label><input type="text" name="password"><br>
    <label for="Role">Role</label>
        <select name="role">
            <option value="default">default</option>
            <option value="admin">admin</option>
        </select><br>
    <label>&nbsp;</label><input type="submit">
</form>
<br><hr>
<table>

<?php
    foreach($this->userList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['userid'] . '</td>';
        echo '<td>' . $value['login'] . '</td>';
        echo '<td>' . $value['role'] . '</td>';
        echo '<td>
            <a href="'. URL . 'user/edit/'.$value['userid'].'">Edit</a>
            <a href="'. URL . 'user/delete/'. $value['userid'] .'">Delete</a></td>';
        echo '</tr>';
    }
?>
</table>