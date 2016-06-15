<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
    Wpisz tekst:
    <input type="text" name="text">
    <input type="submit" value="Wyslij" name="submit">
</form>

</body>
</html>

<?php

if (filter_has_var(INPUT_SERVER, 'REQUEST_METHOD') && filter_input(INPUT_SERVER, 'REQUEST_METHOD', FILTER_SANITIZE_STRING) === 'POST') {
    if (filter_has_var(INPUT_POST, 'text')) {
        $file = filter_input(INPUT_POST, 'text', FILTER_SANITIZE_STRING);
    }
    echo $file;
}