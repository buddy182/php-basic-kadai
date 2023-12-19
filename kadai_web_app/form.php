<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web_APP課題</title>
</head>
<body>
  <h2>社員情報入力フォーム</h2>
  <form action="kadai_confirm.php" method="post">
  <table>
    <!--社員名-->
    <tr>
      <td>社員名</td>
      <td>
        <input type="text" name="employee_name">
      </td>
    </tr>
    <!--年齢-->   
    <tr>
      <td>年齢</td>
      <td>
        <input type="text" name="employee_age">
      </td>
    </tr>
    <!--所属部署-->
    <tr>
      <td>所属部署</td>
      <td>
        <input type="radio" name="department" value="開発部" checked>開発部
        <input type="radio" name="department" value="営業部" checked>営業部
        <input type="radio" name="department" value="人事部" checked>人事部
      </td>
    </tr>
  </table>
     <!--送信ボタン-->
     <input type="submit" value="送信">
  </form>
</body>
</html>