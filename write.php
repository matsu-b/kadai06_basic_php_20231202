<?php

// アンケート結果取得
$name = $_POST['name'];
$iraira = $_POST['iraira'];
$harahara = $_POST['harahara'];
$monmon = $_POST['monmon'];
$shimijimi = $_POST['shimijimi'];
$shikushiku = $_POST['shikushiku'];

// 配列に変換
$data = array($iraira,$harahara,$monmon,$shimijimi,$shikushiku);

// チャート用の連想配列を作成
$dataset = array([
    'label' => $name,
    'data' => $data,
    'borderColor' => 'green', // データセットの境界線の色
    'borderWidth' => 2, // 境界線の幅
]);

// 連想配列をJSONに変換
$jsonString = json_encode($dataset);

// 保存
file_put_contents('data/data.txt',$jsonString);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>
    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>    
</body>

</html>