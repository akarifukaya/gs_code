<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>id：<input type="text" name="lid"></label><br>
     <label>pass：<input type="text" name="lpw"></label><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
     <input type="button" onClick="location.href='http://www.localhost/php04/PHP04/php04/select.php'" value="一覧">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>