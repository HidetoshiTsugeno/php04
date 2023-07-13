<?php
//済
//1. POSTデータ取得
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$pmh = $_POST['pmh'];
$pfx = $_POST['pfx'];
$posteo = $_POST['posteo'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare(
    'INSERT INTO
                        gs_osteo(
                            name, birthday, sex, pmh, pfx, posteo
                            )
                        VALUES (
                            :name, :birthday, :sex, :pmh, :pfx, :posteo
                            );'
);

//  2. バインド変数を用意
// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':pmh', $pmh, PDO::PARAM_STR);
$stmt->bindValue(':pfx', $pfx, PDO::PARAM_STR);
$stmt->bindValue(':posteo', $posteo, PDO::PARAM_STR);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status == false) {
    sql_error($stmt);
} else {
    redirect('index.php');
}
