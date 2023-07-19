<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            body{
                background-color: rgb(128,128,128,0.6);
            }

        form {
            margin: auto;
            margin-top: 10vh;
            text-align: center;
            background-color: gray;
            width: 30%;
            height:180px;
            border-radius: 20px;
        }
        h1{
       padding-top: 20px;
        }
        #o {
            font-size: 20px;
        }  
        p{
            text-align: center;
            margin: 20px;
            font-size: 20px;
        }

    </style>
</head>

<body>
    <form  method="post">
        <h1> 3 ile bölüm </h1><br>
        <input type="text" name="say1" id="o"><br>
        <button type="sumbit" id="o">Gönder</button>
    </form>
    <?php
error_reporting(0);
$say1 = $_POST['say1'];

function divide($say1)
{
    if ($say1 == '') {
        echo '<p> Boş bir değer veremezsiniz </p>';
    } else {
        if ($say1 % 3 == 0) {
            echo '<p>'.$say1 . " sayısının 3'e bölümünün sonucu: " . $say1 / 3 .'</p>';
        } else {
            if ($say1 + 1 % 3 == 0)  echo '<p>'.$say1 . " sayısı 3'e bölünemez. 3'e bölünebilecek en yakın sayı: " . $say1 / 2 * 3 .'</p>'; 
            else  echo '<p>'.$say1 . " sayısı 3'e bölünemez. 3'e bölünebilecek en yakın sayı: " . $say1 / 2 * 3 .'</p>';
        }

    }


}

echo divide($say1);
?>
</body>

</html>
