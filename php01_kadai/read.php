<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <title>登録内容一覧</title>
    </head>

    <body>
        <main>
            <h1>登録一覧</h1>
            <div class="result-box-flame">
                <table border="1" class="result-flame">
                    <tr>
                        <th class="ttt">登録日時</th>
                        <th class="ttt">名前</th>
                        <th class="ttt">名前カナ</th>
                        <th class="ttt">性別</th>
                        <th class="ttt">生年月日</th>
                        <th class="ttt">都道府県</th>
                        <th class="ttt">メールアドレス</th>
                        <th class="ttt">電話番号</th>
                    </tr>
                
            </div>
        
    <?php

    // ファイルを開く
    $openFile = fopen('./data/data.txt', 'r');

    // ファイル内容を1行ずつ読み込んで出力
    // fgets($openFile)で、1行を読み込み、それを$strに代入
    // 何も読み込むものがなくなると、while文が終了する

    while ($str = fgets($openFile)) {
        $ary = explode("/", $str); //文字列を配列に変換
            echo '<tr>';
            for($i = 0; $i < sizeof($ary); $i++){
                echo "<td class=result-data> {$ary[$i]} </td>";
            };
            echo '</tr>';
        // nl2br ... textファイルの改行を<br>に変換する関数
        // echo nl2br($str);
    };

    fclose($openFile);
    ?>
    </table>
    </main>
    </body>
</html>