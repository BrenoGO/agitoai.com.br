<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Home PHP MVC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1>Welcome <?php echo htmlspecialchars($name); ?></h1>
    <ul>
        <?php foreach($colours as $color):?>
        <li><?php echo htmlspecialchars($color); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>