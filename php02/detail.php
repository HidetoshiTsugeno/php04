<?php
//済
session_start();
require_once('funcs.php');
loginCheck();

$id = $_GET['id']; //?id~**を受け取る
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_osteo WHERE id = :id;');
$stmt->bindValue(':id', $id, PDO::PARAM_INT); //PARAM_INTなので注意
$status = $stmt->execute(); //実行

//３．データ表示
if ($status == false) {
    sql_error($stmt);
} else {
    $row = $stmt->fetch();
}
?>

<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
(入力項目は「登録/更新」はほぼ同じになるから)
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bone navi</title>
</head>
<body>
<!-- Main[Start] -->
<form method="post" action="update.php">
    <div class="jumbotron">
        <fieldset>
            <legend>骨粗鬆症診断・患者データ登録</legend>
            <label>名前：<input type="text" name="name" value="<?= $result['name'] ?>"></label><br>
            <label>生年月日：<input type="date" name="birthday" value="<?= $result['birthday'] ?>"></label><br>
            <label>性別：
                <input type="radio" id="male" name="sex" value="男性" <?= ($result['sex'] == '男性') ? 'checked' : '' ?>>
                <label for="male">男</label>
                <input type="radio" id="female" name="sex" value="女性" <?= ($result['sex'] == '女性') ? 'checked' : '' ?>>
                <label for="female">女</label>
            </label><br>
            <label>既往歴：<textArea name="pmh" rows="4" cols="40"><?= $result['pmh'] ?></textArea></label><br>
            <label>過去の骨折歴：<textArea name="pfx" rows="4" cols="40"><?= $result['pfx'] ?></textArea></label><br>
            <label>過去の骨粗鬆症治療歴：<textArea name="posteo" rows="4" cols="40"><?= $result['posteo'] ?></textArea></label><br>
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" value="更新">
        </fieldset>
    </div>
</form>
<!-- Main[End] -->
</body>
</html>
