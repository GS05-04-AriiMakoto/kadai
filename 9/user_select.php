<?php
session_start(); 
//0.外部ファイル読み込み
include("functions.php");

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_user_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  queryError($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="detail.php?id='.$result["id"].'">';
    $view .= '<span class="name">'.h($result["name"]).'</span>'.'<span class="datetime">'."[".h($result["email"])."]</span>";
    $view .= '</a>　';
    $view .= '<a style="margin-left:20px;" href="delete.php?id='.$result["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
    $view .= '</p>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/fixed.js"></script>
<style>
    div{font-size:16px;line-height: 1.8;}   
    span.name{background:#000;display:inline-block;color:#FFF;padding:10px;width:300px;text-align:center;margin-left:20px;}
    span.datetime{display:inline-block;color:#000;padding:10px;width:300px;text-align:center;margin-left:20px;}
    p{font-size: 16px !important; letter-spacing:0.05em;}
</style>
</head>
<body id="main">
<!-- Head[Start] -->
<?php
  if($_SESSION["kanri_flg"]=="1"){
    include("admenu.html"); //会員登録者はこのメニュー
  }else{
    include("menu.html"); //非会員者はこのメニュー
  }
?>
<!-- Head[End] -->

<!-- Main[Start] -->
<div class="mt70">
    <div class="container jumbotron">
        <?=$view?>
    </div>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>