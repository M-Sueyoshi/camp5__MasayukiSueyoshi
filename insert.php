<?php
//1. POSTデータ取得

//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）

$id = $_POST["id"];
$pw = $_POST["pw"];
$lname = $_POST["lname"];
$fname = $_POST["fname"];
  $name = $lname.$fname;
$lkana = $_POST["lkana"];
$fkana = $_POST["fkana"];
  $kana = $lkana.$fkana;
$yob = $_POST["yob"];
$mob = $_POST["mob"];
$dob = $_POST["dob"];

//年齢自動計算
  $baseY=date('Y');
  $basem=date('m');
  $based=date('j');
    echo $today=$baseY. $basem. $based;
    $byob = $yob*10000;
    $bmob = $mob*100;
    $birth=$byob+$bmob+$dob;
  $age = intval(($today - $birth)/10000);

  //
$sex = $_POST["sex"];
$email = $_POST["email"];
$pn = $_POST["pn"];
$eng = $_POST["english"];
$ol = $_POST["ol"];
$oll = $_POST["oll"];
$skill = $_POST["skill"];
$naiyou = $_POST["naiyou"];
if (isset($_POST['skill'])) {
  $skill = implode(", ", $_POST["skill"]);
} 


//2. DB接続します xxxにDB名を入力する
//ここから作成したDBに接続をしてデータを登録します xxxxに作成したデータベース名を書きます
try {
  $pdo = new PDO('mysql:dbname=a_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}



//３．データ登録SQL作成 //ここにカラム名を入力する
//xxx_table(テーブル名)はテーブル名を入力します
$stmt = $pdo->prepare("INSERT INTO ml_list(num, id, pw, name, kana, yob, mob, dob, age, sex, email, pn, eng, ol, oll, skill, naiyou, indate )VALUES(NULL,:id, :pw, :name, :kana, :yob, :mob, :dob, :age, :sex, :email, :pn, :eng, :ol, :oll, :skill, :naiyou, sysdate())");
$stmt->bindValue(':id', $id, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':pw', $pw, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':kana', $kana, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':yob', $yob, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':mob', $mob, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':dob', $dob, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':age', $age, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':pn', $pn, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':eng', $eng, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':ol', $ol, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':oll', $oll, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':skill', $skill, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT):
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト 書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
  header("Location: select.php");
  exit;

}
?>
