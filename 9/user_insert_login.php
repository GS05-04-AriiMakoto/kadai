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
  <script src="jquery-2.1.3.min.js"></script>
  <script src="js/kariname.js"></script>
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
<form method="post" action="user_insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>フリーアンケート</legend>
     <label>name：<input type="text" name="name"></label><br>
     <label>ID：<input type="text" name="lid"></label><br>
     <label>PASS：<input type="text" name="lpw"></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form><!-- Main[End] -->

</body>
</html>