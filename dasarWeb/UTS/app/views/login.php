<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="../styles/loginDaftar.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form class="form-login" action="../../public/index.php?action=login" method="post">
            <label for="telepon">Telepon : </label>
            <br>
            <input type="tel" name="telepon" id="telepon" required >
            <br>
            <br>
            <label for="password">Password :</label>
            <br>
            <input type="password" name="password" id="password" required >
            <br>
            <br>
            <input type="submit" value="Submit" class="submit">
        </form>
        <br>

        <br>
        <a href="../../public/index.php?action=daftar">
            <div class="daftar">
                <h5>daftar</h5>
            </div>
        </a>
    </div>
</body>

</html>