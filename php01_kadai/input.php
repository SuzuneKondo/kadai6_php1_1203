<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>入力画面</title>
</head>

<body>
    <header>

    </header>
    <form action="write.php" method="post">
        <h1>お客様情報をご入力ください</h1>
        <div class="box-flame">
            <table class="form-wrapper">
                <tr>
                    <th>
                        <div class="form-name">お名前：</div> 
                    </th>   
                    <td><input type="text" name="name" placeholder="例）岩戸すずめ"></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">お名前（カタカナ）：</div>
                    </th>   
                    <td><input type="text" name="kana" placeholder="例）イワトスズメ"></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">性別：</div>
                    </th>   
                    <td><input type="text" name="sex" placeholder=""></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">生年月日：</div>
                    </th>
                    <td><input type="text" name="age" placeholder="2月1日"></td>
                </tr>
            </table>
            <table class="form-wrapper">
                <tr>
                    <th>
                        <div class="form-name">お住まいの都道府県：</div>
                    </th>    
                    <td><input type="text" name="address" placeholder=""></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">メールアドレス：</div>
                    </th>   
                    <td><input type="text" name="mail" placeholder="xxxxx@xxx.com"></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">電話番号：</div>
                    </th>  
                    <td><input type="text" name="phone" placeholder="000-0000-0000"></td>
                </tr>
            </table>
            <input type="submit" value="送信">
        </div>
    </form>
</body>
</html>
