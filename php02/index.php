<!DOCTYPE html>
<html lang="ja">
<!-- 済 -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bone navi</title>
</head>
<body>
    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="login.php">ログイン</a></div>
                <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
    <div class="jumbotron">
        <fieldset>
            <legend>骨粗鬆症診断・患者データ登録</legend>
            <label>名前：<input type="text" name="name"></label><br>
            <label>生年月日：<input type="date" name="birthday"></label><br>
            <label>性別：
                <input type="radio" id="male" name="sex" value="男性">
                <label for="male">男</label>
                <input type="radio" id="female" name="sex" value="女性">
                <label for="female">女</label>
            </label><br>
            <label>既往歴：<textArea name="pmh" rows="4" cols="40"></textArea></label><br>
            <label>過去の骨折歴：<textArea name="pfx" rows="4" cols="40"></textArea></label><br>
            <label>過去の骨粗鬆症治療歴：<textArea name="posteo" rows="4" cols="40"></textArea></label><br>
            <input type="submit" value="送信">
        </fieldset>
    </div>
</form>
<!-- Main[End] -->
</body>
</html>



