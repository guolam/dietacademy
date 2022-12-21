<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Document</title>

</head>

<body>
    <form method="POST" action="data_create.php" name="text">

        <th>
            <h1>あなたに適するダイエット方法</h1>

            <div id="q_p1">

                <p>1. あなたは</p>
                <div class="outer_box">
                    <div class="box"><br><br><br><br>
                        <input type="radio" name="Q1" value="8" id="Q1A">
                        <label for="Q1A" class="label" required>朝型</label>
                        <input type="radio" name="Q1" value="4" id="Q1B">
                        <label for="Q1B" class="label">夜型</label>
                    </div>
                </div>


                <p>2. あなたは仕事終わってからの時間、何をされますか？</p>
                <div class="outer_box">
                    <div class="box"><br><br><br><br>
                        <input type="radio" name="Q2" value="2" id="Q2A">
                        <label for="Q2A" class="label" required>ジム、運動</label>
                        <input type="radio" name="Q2" value="4" id="Q2B">
                        <label for="Q2B" class="label">家でのんびりする</label>
                    </div>
                </div>


                <p>3. あなたは</p>
                <div class="outer_box">
                    <div class="box"><br><br><br><br>
                        <input type="radio" name="Q3" value="1" id="Q3A">
                        <label for="Q3A" class="label" required>インドア派</label>
                        <input type="radio" name="Q3" value="5" id="Q3B">
                        <label for="Q3B" class="label">アウトドア派</label>
                        <p></p>
                    </div>
                </div>


                <p>4. あなたの理想体重は今の体重と比べて、どれくらい差がありますか？</p>
                <div class="outer_box">
                    <div class="box"><br><br><br><br>
                        <input type="radio" name="Q4" value="3" id="Q4A">
                        <label for="Q4A" class="label" required>5kg以上</label>
                        <input type="radio" name="Q4" value="5" id="Q4B">
                        <label for="Q4B" class="label">5kg以下</label>
                        <p></p>
                    </div>
                </div>


                <p>5. あなたはどれくらいでダイエット成功したいですか？</p>
                <div class="outer_box">
                    <div class="box"><br><br><br><br>
                        <input type="radio" name="Q5" value="5" id="Q5A">
                        <label for="Q5A" class="label" required>一年以内</label>
                        <input type="radio" name="Q5" value="8" id="Q5B">
                        <label for="Q5B" class="label">3ヶ月以内</label>
                        <p></p>
                    </div>
                </div>
            </div>
            <br><br>
            <input type="submit" class="button" href="data_customer.php" value="送信">
            <br><br><br><br><br><br><br><br>
        </th>

    </form>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="index.js"></script>

</body>

</html>