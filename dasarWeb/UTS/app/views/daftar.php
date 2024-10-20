<!DOCTYPE html>
<html>

<head>
    <title>daftar</title>
    <link rel="stylesheet" href="../styles/loginDaftar.css">
</head>

<body>
    <div class="container">
        <h2>daftar</h2>
        <form class="form-login" action="../../public/index.php?action=daftar" method="post">
            <label for="nama">nama : </label>
            <br>
            <input type="text" name="nama" id="nama" required>
            <br>
            <br>
            <label for="telepon">telepon : </label>
            <br>
            <input type="tel" name="telepon" id="telepon" required>
            <br>
            <br>
            <label for="password">password :</label>
            <br>
            <input type="password" name="password" id="password" required>
            <br>
            <br>
            <input type="submit" value="kirim" class="submit">
        </form>
    </div>
</body>

</html>