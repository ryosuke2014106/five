<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第５回課題</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="./img/slide_2.jpg" alt=""> </div>
        <div class="swiper-slide"><img src="./img/slide_1.jpg" alt=""></div>
        <div class="swiper-slide"><img src="./img/slide_3.jpg" alt=""></div>
      </div>     
        <div class="swiper-button-prev">
            <img src="./img/slide-btn-prev.svg" alt="">
        </div>
        <div class="swiper-button-next">
            <img src="./img/slide-btn-next.svg" alt="">
        </div>
        <div class="swiper-pagination"></div>
    </div>    

    <div class="summer">
        <p class="black">今年も始まる<span class="red">夏祭り</span></p>
    </div>
    <div class="schedule" id="schedule"> 
        <p>スケジュール</p>
            <div class="schedule_content">
                <div class="day_flex">
                    <p class="day">9月1日</p>
                    <p class="day">9月2日</p>
                    <p class="day">9月3日</p>
                </div>
            
                <div class="schedule_description" id="September_1">
                    <p class="day_description">9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容9月1日の内容</p>
                </div>
                <div class="schedule_description" id="September_2">
                    <p class="day_description">9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容9月2日の内容</p>
                </div>
                <div class="schedule_description"id="September_3">
                    <p class="day_description">9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容9月3日の内容</p>
                </div>
            </div>    
    </div>

    <div class="google" id="google">
        <div class="google_title">
            <p>アクセス</p>
          <div class="google_address">
            <p>〒771-1154 徳島県徳島市応神町東貞方南川淵</p>
          </div>   
        </div>
        <div class="google_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13214.135395214935!2d134.5232573!3d34.107080350000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553725a43298fb3%3A0x1bc47188f8f9226a!2z44CSNzcxLTExNTQg5b6z5bO255yM5b6z5bO25biC5b-c56We55S65p2x6LKe5pa55Y2X5bed5re1!5e0!3m2!1sja!2sjp!4v1764496639388!5m2!1sja!2sjp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>

        <div class="inquiry" id="inquiry">
        <p>席予約</p>
        <div class="inquiry_content">
            <form method="get" action="./confirm.php">
                <div class="inquiry_name">
                    <label for="name" class="label_title">お名前 <span class="required">(必須)</span></label>
                    <input type="text" id="name" name="name" placeholder= "例）田中 太郎" required="">
                </div>
                <div>
                    <label for="seat" class="label_title">席の場所 <span class="required">(必須)</span></label>
                      <select name="seat" id="seat" class="label_title">
                        <option value="">---</option>
                        <option value="">SS席</option>
                        <option value="">S席</option>
                        <option value="">A席</option>
                        <option value="">B席</option>
                        <option value="">C席</option>
                      </select>  
                </div>
                <div class="email_form">
                    <label for="email" class=label_title>メールアドレス <span class="required">(必須)</span></label>
                      <input type="email" name="email" placeholder="例）abcd123@example.com" required>
                </div>
                <div> 
                     <label for="tel" class="label_title">電話番号<span class="tel_span">(任意)</span></label>
                       <input type="tel" name="tel" placeholder="例）09012345678" pattern="\d{10,11}" maxlength="11" inputmode="numeric" >
                </div>
                <div>
                     <input type="submit" name="submit" value="送信" disabled>
                </div>
            </form>
        </div>
    </div>

<?php include("footer.php"); ?>
<?php include("header.php"); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/7.4.1/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>       
<script src= "./js/index.js"></script>
</body>
</html>