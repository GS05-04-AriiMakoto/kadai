<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>
    div{padding: 10px;font-size:16px;}
    .jumbotron{padding-left:20px;}  
    input{height:44px;margin-left:20px;}
    input[type="submit"] {border:none!important;background:#FFA500;width:190px;margin-top:20px;margin-left:220px;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;font-weight:bold;letter-spacing:0.5em;}
    input[type="submit"]:hover {background:#FF6347;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;}
    span{display:inline-block;width:200px;background:#000;color:#FFF;padding:10px;text-align:center;}
  </style>
</head>
<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="_include/bm_select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<form method="post" action="_include/bm_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label><span>書籍名：</span><input type="text" name="book"></label><br>
     <label><span>URL：</span><input type="text" name="url"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
