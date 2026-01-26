<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第５回課題</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php include("header.php"); ?>
    <p class="confirm_title">お問い合わせ内容確認</p>
        <div class="confirm_wrapper">   
            <div class="confirm">
                    <div class="confirm_content">
                        <p>
                        <span class="label">お名前</span>
                        <span class="value" id="name"></span>
                        </p>
                        <p>
                        <span class="label">席の場所</span>
                        <span class="value" id="seat"></span>
                        </p>
                        <p>
                        <span class="label">メールアドレス</span>
                        <span class="value" id="email"></span>
                        </p>
                        <p>
                        <span class="label">電話番号</span>
                        <span class="value" id="tel"></span>
                        </p>
                    </div>
            </div>
        </div>     

<div class="confirm_btn_area">
  <form action="thanks.php" method="post">
    <input type="hidden" name="name" id="hidden_name">
    <input type="hidden" name="seat" id="hidden_seat">
    <input type="hidden" name="email" id="hidden_email">
    <input type="hidden" name="tel" id="hidden_tel">
    <button type="button" onclick="history.back()">戻る</button>
    <button type="submit">送信</button>
  </form>
</div>

<?php include("footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>       
<script src= "./js/confirm.js"></script>
<script src= "./js/hamburger.js"></script>
</body>
</html>