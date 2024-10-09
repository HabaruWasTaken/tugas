<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-size: 30px;
        }
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            height: 100vh;
        }

        .input  input{
            height: 40px;
            max-width: 60px;
        }

        .operator input {
            height: 40px;
            width: 40px;
        }

        .hasil {
            padding: 10px;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <div class="input">
            <input type="number" name="n1" id="" required>
            <input type="number" name="n2" id="" required>
        </div>
        <div class="operator">
            <div class="row-1">
                <input type="submit" value="+" name="plus">
                <input type="submit" value="-" name="min">
            </div>
            <div class="row-2">
                <input type="submit" value="*" name="kali">
                <input type="submit" value="/" name="bagi">
            </div>
        </div>
    </form>
    <div class="hasil">
        <?php
            $hasil = 'Masukkan angka yang valid';
            if (isset($_POST["plus"])) {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $hasil = $n1 + $n2;
            } else if (isset($_POST["min"])) {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $hasil = $n1 - $n2;
            } else if (isset($_POST["kali"])) {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $hasil = $n1 * $n2;
            } else if (isset($_POST["bagi"])) {
                $n1 = $_POST["n1"];
                $n2 = $_POST["n2"];
                $hasil = $n1 / $n2;
            }
            echo $hasil;
        ?>
    </div>
</body>
</html>