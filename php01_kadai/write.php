<?php

$name = $_POST['name'];
$kana = $_POST['kana'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$address = $_POST['address'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $time . '/' . $name . '/' . $kana . '/' .  $sex . '/' .  $age . '/' .  $address . '/' .  $mail . '/' .  $phone . "\n");
fclose($file);
//文字作成
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>登録確認</title>
</head>

<body>

    <h1>登録を完了しました。</h1>
    <h2>次の画面で登録内容を確認できます。</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="post.php">戻る</a></li>
    </ul>
</body>

</html>
