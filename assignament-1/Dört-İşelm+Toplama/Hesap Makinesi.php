<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dört işlem</title>
    <style type="text/css">
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            font-family: 'Roboto', sans-serif;
            background-color: #708090;
        }
        form{
            width: 400px;

            border: 2px solid #ccc;
            padding: 30px;
            background: #9c9c9c;
            border-radius: 15px;          
        }
        button{
            float: right;
            background: #555;
            padding: 8px 15px;
            color: #fff;
            border-radius: 20px;
            margin-right: ;
            border: none;
            font-size:20px;
        }
        input{
            display:block;
            border: 10px;
            width: 83% ;
            padding: 10px;
            margin: 10px auto;
            border-radius: 5px;
        }        
        select{
            display: flex;
            width: 100%;
            max-width: 320px;
            float: center;
            height: 8%;            
            margin: 5px 0px;
            padding: 0px 24px;
            font-size: 26px;            
            line-height: 1.75;
            border-radius:10px;
            border: 2px;
            margin-bottom: 40px;
        }
        h3{
            font-size:30px;
            text-align: center;
            margin-bottom:30px;
            color: #000000;
        }
        table{
            margin-left: 55px;
        }
        td{
            font-size: 26px;
        }
        
    </style>
</head>
<body>
    <form method="post" action="">
    <h3>Dört İşem</h3>
        <table>
            <tr>
                <td>Sayı 1:</td>
                <td><input type="number" name="sayi1" placeholder="Sayı gir"></td>
            </tr>
            <tr>
                <td>Sayı 2 :</td>
                <td><input type="number" name="sayi2" placeholder="Sayı gir"></td>
            </tr>
            <tr>
                <td>İşlem :</td>
                <td><br/>
                    <select name="islem">
                        <option value="topla" name="topla">Toplama</option>
                        <option value="cikar">Çıkarma</option>
                        <option value="carp">Çarpma</option>
                        <option value="bol">Bölme</option>
                    </select>
                </td>
                <tr>
                <td colspan="2  "><button type="submit" value="hesapla">Hesapla </td>
                </tr>
            
            </tr>

        </table>
        
    <?php 
    if (isset($_POST['sayi1']) and isset($_POST['sayi2'])){
        $sayi1 = $_POST["sayi1"];
        $sayi2 = $_POST["sayi2"];
        $islem = $_POST["islem"];
        
        switch($islem){
            case 'topla':
                echo"Toplama: ".($sayi1+$sayi2);
            break;
            case 'cikar':
                echo"Çıkarma: ".($sayi1-$sayi2);
            break;
            case 'carp':
                echo"çarpma: ".($sayi1*$sayi2);
            break;
            case'bol':
                echo"Bölme: ".($sayi1/$sayi2);
            break;
            default:
                echo"Hata oluştu lütfen tekrar deneyin";
            break;
        }
    }
    ?>
    </form>
</body>
</html>