<!DOCTYPE html>
<html>

<head>
    <title>masuk</title>
    <link rel="stylesheet" href="../styles/loginDaftar.css">
</head>

<body>
    <div class="container">
        <h2>masuk</h2>
        <form class="form-login" action="../../public/index.php?action=login" method="post">
            <label for="telepon">telepon : </label>
            <br>
            <input type="tel" name="telepon" id="telepon" required >
            <br>
            <br>
            <label for="password">password :</label>
            <br>
            <input type="password" name="password" id="password" required >
            <br>
            <br>
            <input type="submit" value="masuk" class="submit">
        </form>
        <br>

        <br>
        <a href="../../public/index.php?action=daftar">
            <div class="daftar">
                <h3>daftar</h3>
            </div>
        </a>
    </div>
</body>

</html>