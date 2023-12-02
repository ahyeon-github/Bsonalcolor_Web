<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>green</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">

</head>
<body style="background-color:#2C3A23; margin:0">
  <img class="green" src='https://ifh.cc/g/gKynBG.jpg' alt="방 이미지" />

</body>
<script>
    setTimeout('move_page()', 5000); //20초후에 안내문구를 보여주고 해당 화면에서 move_page로 이동하는 함수실행
  
    function move_page(){
    location.href="yellow.php"  // 페이지 이동
    }
  
  </script>
  <?php 
    shell_exec("cd /Users/ahyeonlim/Desktop/Bsonalcolor_web/pylsl/examples && python3.10 ReceiveData.py 'green'");
    ?>



</html>

