<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDGs 画像投稿フォーム</title>
</head>
<style>
    body {
        text-align: center;
        background-color: #FFFFCC;
    }
    
    .up {
        margin-top: 20px;
    }
</style>
<body>
    <h1>SDGs色紙画像アップロード</h1>
        <form action="multipart/form-data" method="post">
            <p>アップロード画像</p>
            <input type="file" name="image">
            <div>
                <input type="submit" class="up" name="upload" vakue="送信">
            </div>
</form>
</body>
</html>