<h1>Note</h1>

<form action="<?php echo URL; ?>note/create" method="post">
    <label for="Title">Title</label><input type="text" name="title"><br>
    <label for="Content">Content</label><textarea name="content"></textarea><br>
    <label>&nbsp;</label><input type="submit">
</form>
<br><hr>
<table>

<?php
    foreach($this->noteList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td>' . $value['date_added'] . '</td>';
        echo '<td><a href="' . URL . 'note/edit/' . $value['noteid'] .'">Edit</td>';
        echo '<td><a class="delete" href="' . URL . 'note/delete/' . $value['noteid'] .'">Delete</td>';
        echo '</tr>';
    }
?>
</table>