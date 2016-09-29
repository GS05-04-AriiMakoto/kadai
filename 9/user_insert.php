<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
<style>
    div{font-size:16px;}
    .jumbotron{padding-left:20px;}  
    button{height:44px;margin-left:20px;}
    button[type="submit"] {border:none!important;background:#FFA500;width:190px;margin-top:20px;margin-left:210px;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;font-weight:bold;letter-spacing:0.5em;}
    button[type="submit"]:hover {background:#FF6347;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;}
    div.comment {display:block;margin-top:20px;}input,textarea{border:1px solid #ccc;padding:10px;}
    fieldset {width:600px;margin:0 auto;background:#fff;padding:40px;border-radius:4px;margin-top:-28px;}legend{padding-top:60px;}
  </style>  
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
          <div class="navbar-brand">ユーザー登録</div>　
            <a class="navbar-brand" href="select.php">書籍一覧</a>
          <a class="pencil" href="index.php"><i class="fa fa-edit"></i></a>
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
    <legend><p class="ribbon"><span>アカウント登録画面</span></p></legend>
     <label>性：<input type="text" name="name" style="margin-left:15px;margin-right:10px;">
         名：<input type="text" name="name" style="margin-left:10px;"></label><br>
     <label style="margin-top:10px;">Mail：<input type="text" name="email"></label><br>
     <label><div class="comment">コメント：</div><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <button type="submit" name="action" value="send">登録</button>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
