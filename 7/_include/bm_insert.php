<?php
//1. POSTデータ取得
$book = $_POST["book"];
$url = $_POST["url"];

//2. DB接続します
try {
  $pdo = new
  PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_cn_table(id, book, url,
indate )VALUES(NULL, :a1, :a2, sysdate())");
$stmt->bindValue(':a1', $book, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':a2', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: ../bm_insert_view.php"); //半角スペースを空ける
  exit;

}
?>