<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/main.css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<style>
    div{font-size:16px;line-height: 1.8;}   
    .jumbotron{padding-left:20px;}  
    input{height:44px;margin-left:20px;}
    button[type="submit"] {border:none!important;background:#FFA500;width:190px;margin-top:20px;margin-left:170px;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;font-weight:bold;letter-spacing:0.5em;}
    button[type="submit"]:hover {background:#FF6347;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;}
    input,textarea{border:1px solid #ccc;padding:10px;}fieldset{width:600px;margin:0 auto;margin-top: -28px;background:#fff;padding:40px;border-radius:4px;}legend{padding-top:60px;}
  </style>  
<title>ログイン</title>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
          <div class="navbar-brand">ログイン画面</div>　
            <a class="navbar-brand" href="user_insert.php">ユーザー登録</a> 
          <p class="ab-item">ようこそ ゲスト さん</p>          
      </div>
    </div>
  </nav>
</header>

<!-- lLOGINogin_act.php は認証処理用のPHPです。 -->
<form name="form1" action="login_act.php" method="post">
    <div class="jumbotron">
        <fieldset>
            <legend><p class="ribbon"><span>ID・パスワードを入力してログインしてください。</span></p></legend>
            <label>ID:<input type="text" name="lid" style="margin-left:30px;" /></label><br>
            <label>PW:<input type="password" name="lpw" /></label><br>
            <button type="submit" name="action" value="send">ログイン</button>
        </fieldset>
    </div>
</form>


</body>
</html>