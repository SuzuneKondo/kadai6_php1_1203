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
                    <td><input type="text" name="name" id="txt-box" placeholder="例）岩戸すずめ"></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">お名前（カタカナ）：</div>
                    </th>   
                    <td><input type="text" name="kana" id="txt-box" placeholder="例）イワトスズメ"></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">性別：</div>
                    </th>
                    <td>
                        <label><input type="radio" name="sex" id="radio" value="男性">男性</label><br>
                        <label><input type="radio" name="sex" id="radio" value="女性">女性</label><br>
                        <!-- <select name="sex">
                                <option value="">選択してください</option>
                                <option value="男性">男性</option>
                                <option value="女性">女性</option>
                        </select> -->
                    </td>
                    <!-- <td><input type="text" name="sex" placeholder=""></td> -->
                </tr>
                <tr>
                    <th>
                        <div class="form-name">生年月日：</div>
                    </th>
                    <td><input type="text" name="age" id="txt-box" placeholder="2月1日"></td>
                </tr>
            </table>
            <table class="form-wrapper">
                <tr>
                    <th>
                        <div class="form-name">お住まいの都道府県：</div>
                    </th>    
                    <td>
                        <select name="address">
                            <option value="">選択してください</option>
                            <option value="北海道">北海道</option>
                            <option value="東北">東北</option>
                            <option value="関東">関東</option>
                            <option value="中部">中部</option>
                            <option value="近畿">近畿</option>
                            <option value="中国">中国</option>
                            <option value="四国">四国</option>
                            <option value="九州">九州</option>
                            <option value="沖縄">沖縄</option>
                        </select>
                    </td>
                    <!-- <td><input type="text" name="address" placeholder=""></td> -->
                </tr>
                <tr>
                    <th>
                        <div class="form-name">メールアドレス：</div>
                    </th>   
                    <td><input type="text" name="mail" id="txt-box" placeholder="xxxxx@xxx.com"></td>
                </tr>
                <tr>
                    <th>
                        <div class="form-name">電話番号：</div>
                    </th>  
                    <td><input type="text" name="phone" id="txt-box" placeholder="000-0000-0000"></td>
                </tr>
            </table>
            <input type="submit" value="送信" class="btn-submit">
            <input type="reset" value="リセット" class="btn-reset">
        </div>
    </form>
</body>
</html>
