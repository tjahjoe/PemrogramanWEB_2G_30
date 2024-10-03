<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="array_2.css">
    <title></title>
</head>
<body>
    <div class="box">
        <img src="image.png" class="image">   
        <table>
        <?php
        $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
    foreach($Dosen as $x => $y){
        $temporary = ucfirst(preg_replace('/[^A-Za-z0-9\-]/', ' ', $x)); 
        echo "<tr><td>$temporary</td><td>: $y</td></tr>";
    }
    ?>
    </table>
    </div>
</body>
</html>