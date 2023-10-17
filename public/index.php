<?php
require __DIR__ . '/../src/hello.php';
$message = new Hello();


?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>

<body>
        <div class="hello">
                <?= $message->speak() ?>
        </div>
</body>

</html>