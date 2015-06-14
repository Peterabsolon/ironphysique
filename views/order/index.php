<h1>Order</h1>

<form action="<?php echo URL; ?>order/place" method="post">

    <label for="item">Item</label>
    <select name="item">
        <option value="Dog">Dog</option>
        <option value="Cat">Cat</option>
        <option value="Lizard">Lizard</option>
    </select>
    <br><br>

    <label for="name">Meno</label><input type="text" name="name"><br>
    <label for="phoneNum">Telefónne číslo</label><input type="text" name="phoneNum"><br>
    <label for="email">Email</label><input type="text" name="email"><br>
    <label for="address">Adresa</label><input type="text" name="address"><br>
    <label for="note">Poznámka</label><textarea name="note"></textarea><br>

    <label></label><input type="submit">
</form>