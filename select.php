
<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=a_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ登録SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM ml_list");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<table>";
    $view .= "<tr>";
    $view .= "<td Width='30%'>";
    $view .= "名前";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["name"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "フリガナ";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["kana"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "メールアドレス";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["email"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "生年月日";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["yob"];
    $view .= $result["mob"];
    $view .= $result["dob"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "年齢";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["age"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "性別";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["sex"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "Email";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["email"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "Tel";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["pn"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "英語スキル";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["eng"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "その他言語";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["ol"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "その他原語スキル";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["oll"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "ビジネススキル";
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["skill"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "<tr>";
    $view .= "<td>";
    $view .= "特記事項";
    $view .= '<div class="tokki">';
    $view .= "</td>";
    $view .= "<td>";
    $view .= $result["naiyou"];
    $view .= "</td>";
    $view .= "</tr>";
    $view .= "</div>";
    $view .= "</table>";
    
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
<link rel="stylesheet" href="select.css">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] $view-->
<div>
          <!-- [$view] この箇所にphpを埋め込んでいる -->

<div class="hyou">
    <div class="container jumbotron"><?=$view?></div>
</div>

  
</div>
<!-- Main[End] -->


<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="style.js"></script>
</body>
</html>
