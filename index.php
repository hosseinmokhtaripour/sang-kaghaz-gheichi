<html dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>سنگ کاغذ قیچی</title>
    <style>
      @font-face {
          font-family: homa;
          src: url(font/Bhoma.ttf);
      }
      body{
        font-family: 'homa';
      }
    </style>
  </head>
  <body bgcolor="#e6ebe7" align="center">
    <h1>بازی سنگ کاغذ قیچی</h1><hr>
    <div style="display: flex;flex-direction: column;align-items: center;">
      <img style="width: 600px;" src="img/full.png">
      <form action="index.php" method="post">
        <input style="font-size:14pt;font-family:homa;text-align:center;height:40px;width:60px;border-radius:30px;
           border:1px solid black;" type="number" name="player">
        <input style="font-size:12pt;height:40px;width:60px;border-radius:30px;font-family:homa;border:1px solid black;"
          type="submit" name="submit" value="شروع">
      </form>
      <div>
        <?php
          if(isset($_POST['submit'])){
            $player = $_POST['player'];
            $computer = rand(1,3);
            if(($player == 1 && $computer == 1) || ($player == 2 && $computer == 2) || ($player == 3 && $computer == 3)){
              if($player == 1 && $computer == 1){
                echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                      <span>کامپیوتر</span><span>بازیکن</span></div>
                      <div><img src='img/gheichi2.png' /><img src='img/gheichi1.png' /></div>
                      <div><h2 style='color:gray;text-align:center;'>مساوی</h2></div>";
              }else if($player == 2 && $computer == 2){
                echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                      <span>کامپیوتر</span><span>بازیکن</span></div>
                      <div><img src='img/kaghaz2.png' /><img src='img/kaghaz1.png' /></div>
                      <div><h2 style='color:gray;text-align:center;'>مساوی</h2></div>";
              }else {
                echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                      <span>کامپیوتر</span><span>بازیکن</span></div>
                      <div><img src='img/sang2.png' /><img src='img/sang1.png' /></div>
                      <div><h2 style='color:gray;text-align:center;'>مساوی</h2></div>";
              }
            }else if($player == 1 && $computer == 2){
              echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                    <span>کامپیوتر</span><span>بازیکن</span></div>
                    <div><img src='img/kaghaz2.png' /><img src='img/gheichi1.png' /></div>
                    <div><h2 style='color:green;text-align:center;'>بردی</h2></div>";
            }else if($player == 1 && $computer == 3){
              echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                    <span>کامپیوتر</span><span>بازیکن</span></div>
                    <div><img src='img/sang2.png' /><img src='img/gheichi1.png' /></div>
                    <div><h2 style='color:red;text-align:center;'>باختی</h2></div>";
            }else if($player == 2 && $computer == 1){
              echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                    <span>کامپیوتر</span><span>بازیکن</span></div>
                    <div><img src='img/gheichi2.png' /><img src='img/kaghaz1.png' /></div>
                    <div><h2 style='color:red;text-align:center;'>باختی</h2></div>";
            }else if($player == 2 && $computer == 3){
              echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                    <span>کامپیوتر</span><span>بازیکن</span></div>
                    <div><img src='img/sang2.png' /><img src='img/kaghaz1.png' /></div>
                    <div><h2 style='color:green;text-align:center;'>بردی</h2></div>";
            }else if($player == 3 && $computer == 1){
              echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                    <span>کامپیوتر</span><span>بازیکن</span></div>
                    <div><img src='img/gheichi2.png' /><img src='img/sang1.png' /></div>
                    <div><h2 style='color:green;text-align:center;'>بردی</h2></div>";
            }else if($player == 3 && $computer == 2){
              echo "<div style='margin-top:10px;height:20px;display:flex;justify-content:space-around;align-items:center;'>
                    <span>کامپیوتر</span><span>بازیکن</span></div>
                    <div><img src='img/kaghaz2.png' /><img src='img/sang1.png' /></div>
                    <div><h2 style='color:red;text-align:center;'>باختی</h2></div>";
            }else{
              echo "از بین اعداد 1-2-3 یکی را انتخاب کنید.";
            }
          }
         ?>
      </div>      
    </div>
  </body>
</html>
