<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>로딩페이지</title>
  <h1>로딩페이지</h1>

  <!-- CSS -->
  <link rel="stylesheet" href="./style.css">
</head>
<body style="background-color:white; margin:0">
</body>
<script>
    setTimeout('move_page()', 5000); //20초후에 안내문구를 보여주고 해당 화면에서 move_page로 이동하는 함수실행
  
    function move_page(){
    location.href="result.php"  // 페이지 이동
    }
  
  </script>




</html>
