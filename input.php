<html>

<head>
    <meta charset="utf-8">
    <title>アンケート</title>
</head>

<body>
    <form action="write.php" method="post">
        お名前：<input type="text" name="name"><br>
        
        <label for="iraira">イライラ度：</label>
        <select id="iraira" name="iraira" required>
        <option value="">選択してください</option>
        <option value="50">超イライラしている</option>
        <option value="40">イライラしてる</option>
        <option value="30">ちょっとだけイライラしている</option>
        <option value="20">普通</option>
        <option value="10">無心</option>
        </select>
        <br>

        <label for="harahara">ハラハラ度：</label>
        <select id="harahara" name="harahara" required>
        <option value="">選択してください</option>
        <option value="50">超ハラハラしている</option>
        <option value="40">ハラハラしている</option>
        <option value="30">ちょっとだけハラハラしてる</option>
        <option value="20">普通</option>
        <option value="10">無心</option>
        </select>
        <br>
        
        <label for="monmon">もんもん度：</label>
        <select id="monmon" name="monmon" required>
        <option value="">選択してください</option>
        <option value="50">超もんもんしている</option>
        <option value="40">もんもんしてる</option>
        <option value="30">ちょっとだけもんもんしてる</option>
        <option value="20">普通</option>
        <option value="10">無心</option>
        </select>
        <br>

        <label for="shimijimi">しみじみ度：</label>
        <select id="shimijimi" name="shimijimi" required>
        <option value="">選択してください</option>
        <option value="50">超しみじみしている</option>
        <option value="40">しみじみしてる</option>
        <option value="30">ちょっとだけしみじみしてる</option>
        <option value="20">普通</option>
        <option value="10">無心</option>
        </select>
        <br>

        <label for="shikushiku">しくしく度：</label>
        <select id="shikushiku" name="shikushiku" required>
        <option value="">選択してください</option>
        <option value="50">超しくしくしている</option>
        <option value="40">しくしくしてる</option>
        <option value="30">ちょっとだけしくしくしてる</option>
        <option value="20">普通</option>
        <option value="10">無心</option>
        </select>
        <br>
        
        <input type="submit" value="送信">
    </form>
</body>

</html>