<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>blue</title>

  <!-- CSS -->
  <link rel="stylesheet" href="./style.css">
</head>
<body style="background-color:#1C3A50; margin:0">
    <img class="blue" src='https://ifh.cc/g/dL2CYp.jpg' alt="방 이미지"  />

</body>
<script>
    setTimeout('move_page()', 5000); //7초후에 안내문구를 보여주고 해당 화면에서 move_page로 이동하는 함수실행
    
    function move_page(){
    location.href="green.php"  // 페이지 이동
    }
    
</script>
<?php 
    shell_exec("cd /Users/yubin/Bsonalcolor/Bsonalcolor_web/pylsl/examples && python3.10 ReceiveData.py 'blue'");
    ?>



</html>

