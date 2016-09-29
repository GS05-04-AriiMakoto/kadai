<?php
session_start();
include("functions.php");
ssidCheck();

//1.GETでidを取得
$id = $_GET["id"];

//2.DB接続など
$pdo = db_con();

//3.SELECT * FROM gs_an_table WHERE id=***; を取得（bindValueを使用！）
$stmt = $pdo->prepare("SELECT * FROM gs_cn_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  $row = $stmt->fetch();
}



?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍情報登録変更</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
<style>
    div{font-size:16px;}
    .jumbotron{padding-left:40px;}  
    input{height:44px;margin-left:20px;}
    input[type="submit"] {border:none!important;background:#FFA500;width:190px;margin-top:20px;margin-left:210px;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;font-weight:bold;letter-spacing:0.5em;}
    input[type="submit"]:hover {background:#FF6347;-webkit-transition: background-color 0.35s,color 0.35s;transition: background-color 0.35s,color 0.35s;}
    span{display:inline-block;width:200px;background:#000;color:#FFF;padding:10px;text-align:center;}div.comment {display:block;margin-top:10px;}input,textarea{border:none;padding:10px;}
  </style>  
</head>
<body>

<!-- Head[Start] -->
<?php include("menu.php"); ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>書籍情報</legend>
     <label>書籍名：<input type="text" name="name" value="<?=$row["book"]?>"></label><br>
     <label>URL：<input style="margin-left:37px;" type="text" name="email" value="<?=$row["url"]?>"></label><br>
     <label><div class="comment">レビュー：</div><textArea name="naiyou" rows="4" cols="40"><?=$row["naiyou"]?></textArea></label><br>
     <input type="hidden" name="id" value="<?=$id?>">
     <input type="submit" value="変更">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>