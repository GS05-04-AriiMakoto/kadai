<?php
//1.  DB接続します
try {
  $pdo = new
  PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//２．データ登録SQL作成

$stmt = $pdo->prepare("SELECT * FROM gs_cn_table ORDER BY indate DESC LIMIT 5");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>'.'<span class="bookname">'.$result["book"].'</span>'.'<span class="datetime">'.$result["indate"].'</span>'."<br>"."</p>"; // .=は追加した後に更に追加という意味
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
<link rel="stylesheet" href="../css/range.css">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<style>
    nav {padding: 20px 10px;}
    div{font-size:16px;line-height: 1.8;}   
    span.bookname{background:#000;display:inline-block;color:#FFF;padding:10px;width:200px;text-align:center;margin-left:20px;}
    span.datetime{display:inline-block;color:#000;padding:10px;width:200px;text-align:center;margin-left:20px;}
    p{font-size: 16px !important; letter-spacing:0.05em;}
</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="../bm_insert_view.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>