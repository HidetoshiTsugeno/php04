<?php
//済
//PHP:コード記述/修正の流れ
//1. insert.phpの処理をマルっとコピー。
//2. $id = $_POST["id"]を追加
//3. SQL修正
//   "UPDATE テーブル名 SET 変更したいカラムを並べる WHERE 条件"
//   bindValueにも「id」の項目を追加
//4. header関数"Location"を「select.php」に変更
$name = $_POST['name'];
$birthday = $_POST['birthday'];
$sex = $_POST['sex'];
$pmh = $_POST['pmh'];
$pfx = $_POST['pfx'];
$posteo = $_POST['posteo'];
$id = $_POST['id'];

//2. DB接続します
require_once('funcs.php');
$pdo = db_conn();

//３．データ登録SQL作成
// UPDATE テーブル名 SET カラム1 = 1に保存したいもの、カラム2 = 2に保存したいもの,,,, WHERE 条件 id = 送られてきたid
$stmt = $pdo->prepare('UPDATE gs_osteo
                        SET name = :name,
                            birthday = :birthday,
                            sex = :sex, 
                            pmh = :pmh, 
                            pfx = :pfx, 
                            posteo = :posteo
                            WHERE id = :id;');

$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':birthday', $birthday, PDO::PARAM_STR);
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);
$stmt->bindValue(':pmh', $pmh, PDO::PARAM_STR);
$stmt->bindValue(':pfx', $pfx, PDO::PARAM_STR);
$stmt->bindValue(':posteo', $posteo, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}

