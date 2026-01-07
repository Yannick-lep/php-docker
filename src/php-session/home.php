<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>Vus estes loggé en tant que : <strong><?= isset($_SESSION['user']) ? $_SESSION['user'] : ''  ?></strong></p>
</body>
</html>