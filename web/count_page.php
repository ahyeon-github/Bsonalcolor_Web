<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS -->
  <link rel="stylesheet" href="./style.css">
  <img class="timer_vector" src='https://ifh.cc/g/V03ldD.png' alt="벡터 이미지" title="배경" />

  <!-- Pyscript -->
  <link rel="stylesheet" href="https://pyscript.net/latest/pyscript.css" />
  <script defer src="https://pyscript.net/latest/pyscript.js"></script>

</head>
<body style="margin:0">
    <div class="container">
        <div class ="countdown">
            <div id="countdowntimer">3</div>
        </div>
    </div>
    <img class="timer_layer" src='https://ifh.cc/g/Qk2hSQ.png' alt="레이어 이미지" title="배경" />
    <script>
        var counter = 3;
        var sec = setInterval(function(){
            counter --;
            document.getElementById("countdowntimer").textContent = counter;
            if (counter <= 1 )
            {
                clearInterval(sec ); 
            }
        },1000);
        setTimeout('move_page()', 3000); //3초 카운트 후 해당 화면에서 방 색깔 보여주는 (RED) 화면 전환
        function move_page(){
        location.href="red.php"  // 페이지 이동
        }
    </script>
</body>

</html>
