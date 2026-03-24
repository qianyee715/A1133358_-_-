<html>
<head>
    <meta charset="utf-8" />
    <title>資管系夏令營報名表單</title>
    <script>
        function alertMessage() {
            alert("報名完成！");
        }
    </script>
</head>
<body><center>
    <h1>資管系夏令營報名表單</h1>
    <form onsubmit="alertMessage()">   
        <p>姓名：<input type="text" name="name" required></p>
        <p>學號：<input type="text" name="number" required></p>
        <p>出生年月日：<input type="date" name="birthday" required></p>
        <p>電話：<input type="tel" name="phone" required></p>
        <p>Email：<input type="email" name="email" required></p>
        <p>
            性別：
            <input type="radio" name="gender" value="男">男
            <input type="radio" name="gender" value="女">女
        </p>
        <p>
            便當：
            <input type="radio" name="food" value="葷">葷
            <input type="radio" name="food" value="素">素
        </p>
        <p>緊急聯絡人：<input type="text" name="emergency_name" required></p>
        <p>緊急聯絡人電話：<input type="text" name="emergency_phone" required></p>
        <p>
            繳費方式<br>
            <input type="radio" name="pay" value="1">交現金給班代<br>
            <input type="radio" name="pay" value="2">匯款至(700)123456789000<br>
            <label for="account_number">請輸入您的匯款帳號後五碼：</label>
            <input type="text" name="account_number" maxlength="5" placeholder="例如: 12345">
        </p>
        <p>
            <input type="submit" value="繳交報名表">
            <input type="reset" value="重填"></center>
        </p>
    </form>
    <br>
</body>
</html>