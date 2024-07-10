<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title></title>
</head>
<body>
    <form action="login.php" method="post">
        <h1>Login to MyWeb</h1>
        <input required type="email" placeholder="Email" name="email">
        <input required type="password" placeholder="Password" name="password">
        <input type="submit" value="Login" name="submit">
        <p><?php echo $_GET['error']; ?></p>
    </form>
</body>
</html>