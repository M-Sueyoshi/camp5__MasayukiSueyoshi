<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <style>div{padding: 10px;font-size:16px;}</style>
<link rel="stylesheet" href="regist.css">
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div><br><br>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php" onsubmit="return check()">
  <div class="jumbotron">
   <fieldset>
    <legend>会員登録</legend>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
    <!-- データベース用作成 -->
     <label>ID：<input type="text" name="id" class="must"required></label><br>
     <label>パスワード：<input type="password" name="pw" class="must"required></label><br>
     <label>姓：<input type="text" name="lname" class="must"required></label>
     <label>名：<input type="text" name="fname" class="must"required></label><br>
     <label>セイ：<input type="text" name="lkana" class="must"required></label>
     <label>メイ:<input type="text" name="fkana" class="must"required></label><br>
     <div class="date" class="must">
     <label>生年月日：</label>

<!-- 年txt box -->
<p><select name="yob"  class="must"required>
<option value="$y">-select-</label>
<?php
for ($y=1900;$y<=2019;$y++){
echo "<option value=\"$y\">" . $y . "</option>\n";
}
?>
</select>
<span>年</span>
</P>
<!-- 月のプルダウン -->
<p><select name="mob"  class="must"required>
<option value="$m">-select-</label>
<?php
for ($m=01;$m<=12;$m++){
echo "<option value=\"$m\">" . $m . "</option>\n";
}
?>
</select>
<span>月</span>
</P>

<!-- 日のプルダウン -->
<p><select name="dob"  class="must"required>
<option value="$d">-select-</label><br>
<?php
for ($d=01;$d<=31;$d++){
echo "<option value=\"$d\">" . $d . "</option>\n";
}
?>
</select>
<span>日</span>
</P>
</div>



     <div class="sex"><label>性別：</label><br>
     <P>男性<input type="radio" name="sex" value="male" class="must"required></label></P>
     <P>女性<input type="radio" name="sex" value="female" class="must"required></label></P><br>
     </div>
     <label>Email：<input type="email" name="email" class="must"required></label><br>
     <label>電話番号：<input type="text" name="pn" class="must"required></label><br>
     <div class="ls">
     <label>Languistic Skill：</label><br>  </div>

        <P>【English Skill Level】</P>
        <p>
            <select name="english" class="must"required>
            <option>-Select-</option>
            <option value="level5e">Advanced Fluency</option>
            <option value="level4e">Intermediate Fluency</option>
            <option value="level3e">Speech Emergence</option>
            <option value="level2e">Early Production</option>
            <option value="level1e">Pre production</option>
            </select>
        </p>
        <P>【Other Language】</P>
        <p>
        <select name="ol" class="ol" class="must"required>
            <option>-Select-</option>
            <option value="Chinese">Chinese</option>
            <option value="Spanish">Spanish</option>
            <option value="French">French</option>
            <option value="Germany">Germany</option>
            <option value="Korean">Korean</option>
            <option value="None">None</option>

          </select>
          </p>
          <P>【Other Language Skill Level】</P>
          <p>
            <select name="oll" class="must"required>
            <option>-Select-</option>
            <option value="level5e">Advanced Fluency</option>
            <option value="level4e">Intermediate Fluency</option>
            <option value="level3e">Speech Emergence</option>
            <option value="level2e">Early Production</option>
            <option value="level1e">Pre production</option>
            </select>
        </p>
      


        <?php
        // if("otherlang"=="None")   {
        // }
        // else{
        //   // <!-- Otherが-select-でない場合のみ表示 てのはJAVAじゃないとできないみたい-->
        //   '<p>';
        //   '<select name="english">';
        //   '<option>-Select-</option>';
        //   '<option value="level5e">Advanced Fluency</option>';
        //   '<option value="level4e">Intermediate Fluency</option>';
        //   '<option value="level3e">Speech Emergence</option>';
        //   '<option value="level2e">Early Production</option>';
        //   '<option value="level1e">Pre production</option>';
        //   '</select>';
        //   '</p>';
        // }
        ?>


<div class="bs">
<label>Business Skills：</label> </div>
     <p><input type="checkbox" name="skill[]" value="Marketing" class="must">Marketing</p><p>
     <input type="checkbox" name="skill[]" value="Business Planning">Business Planning</p><p>
     <input type="checkbox" name="skill[]" value="Programing">Programing</p><p>
     <input type="checkbox" name="skill[]" value="Sales">Sales</p><p>
     <input type="checkbox" name="skill[]" value="Accounting">Accounting<br></p><p>
     <input type="checkbox" name="skill[]" value="Other">Other<br></p>
     <input type="checkbox" name="skill[]" value="None">None<br></p>
 
     <p>【お問い合わせ・その他】</p><br>
     <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>

<input type="submit" value="送信" />
</fieldset>
  </div>
</form>

<!-- Main[End] -->

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="regist.js"></script>
</body>
</html>