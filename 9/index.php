<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>お気に入り書籍登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
   <style>
    div{font-size:16px;}
    .jumbotron{padding-left:20px;}  
    button{height:44px;margin-left:20px;}
    button[type="submit"] {border:none!important;background:#FFA500;width:190px;margin-top:20px;margin-left:210px;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;font-weight:bold;letter-spacing:0.5em;}
    button[type="submit"]:hover {background:#FF6347;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;}div.comment {display:block;margin-top:10px;}input,textarea{border:1px solid #ccc;padding:10px;}
    fieldset {width:600px;margin:0 auto;margin-top: -28px;background:#fff;padding:40px;border-radius:4px;}legend{padding-top:60px;}
  </style>  
</head>
<body>

<!-- Head[Start] -->
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="login.php">会員の方はこちらからログイン</a>　
                <a class="navbar-brand" href="user_insert.php">ユーザー登録</a> 
                <p class="ab-item">ようこそ ゲスト さん</p>
            </div>
        </div>
    </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend><p class="ribbon"><span>お気に入り書籍登録</span></p></legend>
     <label>書籍名：<input type="text" name="name" style="margin-left:10px;"></label><br>
     <label>URL：<input type="text" name="email" style="margin-left:28px;"></label><br>
     <label><div class="comment">レビュー：</div><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <button type="submit" name="action" value="send">送信</button>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
