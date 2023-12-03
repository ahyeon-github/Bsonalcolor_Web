<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>브스널컬러</title>
    <link rel="stylesheet" href="result.css">
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
</head>
<body>
    <a href="main.php"><div class="go-home"><img src="https://ifh.cc/g/Vdk9Nx.png" id="home"/> 첫 화면으로</div></a>
    <div style="width: fit-content;">
        <div class="username">
            <div id=user></div>님의 브스널컬러는
        </div>
        <div class="color" id="result_color"></div>
    </div>
    <div class="backcolor">
        <svg preserveAspectRatio="xMaxYMax slice" xmlns="http://www.w3.org/2000/svg" width="1550" height="673" viewBox="0 0 1550 673" >
            <path class="back-fill" d="M0 222L101.611 186L517.241 345.5L1191.2 0L1221.06 476L1550 673H0V222Z" fill="red"/>
        </svg>
    </div>
    <!-- <script>
        window.onload=function updateLED() {
        // 바뀌는 색상
          var color=document.getElementById("result_color").textContent.toLowerCase();
          console.log(color);
          
          var xhr = new XMLHttpRequest();
          xhr.open("GET", "http://172.20.10.5/result.html?color=" + color, true);
          xhr.send();

          // 텍스트에 따른 배경 색상 제어
          var backfill = document.querySelector('.back-fill');
          console.log(backfill);
          var backcolor = '#fff';
          switch (color) {
            case 'red': backcolor = '#D24544'; break;
            case 'blue': backcolor = '#3D98DA'; break;
            case 'green': backcolor = '#408D0F'; break;
            case 'yellow': backcolor = '#EBBB41'; break;
            case 'orange': backcolor = '#E76C24'; break;
            case 'pink': backcolor = '#FEA8BA'; break;
            case 'purple': backcolor = '#C17ADE'; break;
            case 'white': backcolor = '#EAEAEA'; break;
            default: backcolor = '#000';
          }
          const backstyle = backfill.setAttribute('fill', backcolor);

          // 텍스트에 따른 텍스트 색상 제어
            var element = document.getElementById("result_color");
            element.style.color = backcolor;
            console.log(element.style.color);

          // 차트 그리기 
          let myChart = echarts.init(document.getElementById('graph-wrapper'))
          let xAxisData = ['red', 'blue', 'green', 'yellow', 'orange', 'pink', 'purple', 'white']; // x축 데이터 배열 생성
    
          let option = {
            // 범례명
            legend: {
              data: ['집중도'],
              top: 20,
              right: 50,
              itemStyle:{color:'black'}
            },
            tooltip: {
                show: true,
                trigger: 'item'
            },
            // x축 라벨
            xAxis: {
              data: xAxisData,
            },
            yAxis: {},
            series: [
              {
                name: '집중도',
                type: 'line', // 막대 그래프
                data: [
                {value: 5, itemStyle:{color:'#D24544'}},
                {value: 3, itemStyle:{color:'#3D98DA'}},
                {value: 10, itemStyle:{color:'#408D0F'}},
                {value: 7, itemStyle:{color:'#EBBB41'}},
                {value: 6, itemStyle:{color:'#E76C24'}},
                {value: 5, itemStyle:{color:'#FEA8BA'}},
                {value: 2, itemStyle:{color:'#C17ADE'}},
                {value: 8, itemStyle:{color:'#EAEAEA'}}
                ],
                markPoint : {
                    data : [
                        {type : 'max', name: 'Max', itemStyle:{color:'black'}},
                    ]
                },
                lineStyle: {color: '#d9d9d9'},
                symbol: 'circle',
                symbolSize: 15,
              }
            ],
          }
          // 3-3. 차트 옵션 설정하기
          myChart.setOption(option)
        }
    </script> -->
    <img src="https://ifh.cc/g/BcZjXA.png" class="character"/>
    <input type='radio' name='charttype' value='line' checked id="line" onclick="selectType(event)"/>
    <label for="line" id="label_line">LineChart</label>
    <input type='radio' name='charttype' value='bar' id="bar" onclick="selectType(event)"/>
    <label for="bar" id="label_bar">BarChart</label>
    <div class="chart-title">
        <div id=username></div>님의 색상에 따른 뇌파 집중도 분석 결과
    </div>
    <div id="graph-wrapper"></div>
        <!-- 3단계: 초기화 및 차트 옵션 설정하기 -->
        <script type="text/javascript">
        function selectType(event) {
            const type = event.target.value;
            console.log(type);
          // 3-1. 준비한 DOM 컨테이너에서 echarts 초기화하기
          let myChart = echarts.init(document.getElementById('graph-wrapper'))
          let xAxisData = ['red', 'blue', 'green', 'yellow', 'orange', 'pink', 'purple', 'white']; // x축 데이터 배열 생성
          //let seriesData = [5, 3, 10, 7, 6, 5, 2, 8]; // 값 데이터 배열 생성 여기에 집중도 값 넣기

          var red = localStorage.getItem('red');
          var blue = localStorage.getItem('blue');
          var green = localStorage.getItem('green');
          var yellow = localStorage.getItem('yellow');
          var orange = localStorage.getItem('orange');
          var pink = localStorage.getItem('pink');
          var purple = localStorage.getItem('purple');
          var white = localStorage.getItem('white');
          
          // 3-2. 차트 옵션 작성하기
          let option = {
            // 범례명
            legend: {
              data: ['집중도'],
              top: 20,
              itemStyle:{color:'black'}
            },
            tooltip: {
                show: true,
                trigger: 'item'
            },
            toolbox: {
                show: true,
                orient: 'horizontal' ,
                itemSize: 15 ,
                itemGap: 8 ,
                showTitle: true ,
            },
            // x축 라벨
            xAxis: {
              data: xAxisData,
            },
            yAxis: {},
            series: [
              {
                name: '집중도',
                type: type, // 막대 그래프
                data: [
                {value: red, itemStyle:{color:'#D24544'}},
                {value: blue, itemStyle:{color:'#3D98DA'}},
                {value: green, itemStyle:{color:'#408D0F'}},
                {value: yellow, itemStyle:{color:'#EBBB41'}},
                {value: orange, itemStyle:{color:'#E76C24'}},
                {value: pink, itemStyle:{color:'#FEA8BA'}},
                {value: purple, itemStyle:{color:'#C17ADE'}},
                {value: white, itemStyle:{color:'#262626'}}
                ],
                markPoint : {
                    data : [
                        {type : 'max', name: 'Max', itemStyle:{color:'black'}},
                    ]
                },
                lineStyle: {color: '#d9d9d9'},
                symbol: 'circle',
                symbolSize: 15,
              }
            ],
          }

    
          // 3-3. 차트 옵션 설정하기
          myChart.setOption(option)
        }
        </script>
    <script>
        document.getElementById("user").innerHTML=localStorage.getItem('name');
        document.getElementById("username").innerHTML=localStorage.getItem('name');
    </script>

  <script>
  <?php 

  $pydata = shell_exec("cd /Users/yubin/Bsonalcolor/Bsonalcolor_web/pylsl && python3.10 bsonalcolor_real.py");
  $sub_pydata = substr($pydata, 1, -1);
  $data=explode(",", $sub_pydata);
  $arr = array((float) $data[0], (float) $data[1], (float) $data[2], (float) $data[3], (float) $data[4], (float) $data[5], (float) $data[6], (float) $data[7]);
  $max = array_search(max($arr), $arr);
  $color_arr = array('red', 'blue', 'green', 'yellow', 'orange', 'pink', 'purple', 'white');
  $color = $color_arr[$max];
  echo "localStorage.setItem('max_color','". "$color" . "');";
  echo "localStorage.setItem('red','". $arr[0] . "');";
  echo "localStorage.setItem('blue','". $arr[1] . "');";
  echo "localStorage.setItem('green','". $arr[2] . "');";
  echo "localStorage.setItem('yellow','". $arr[3] . "');";
  echo "localStorage.setItem('orange','". $arr[4] . "');";
  echo "localStorage.setItem('pink','". $arr[5] . "');";
  echo "localStorage.setItem('purple','". $arr[6] . "');";
  echo "localStorage.setItem('white','". $arr[7] . "');";
  ?>
    window.onload = function updateLED() {
      document.getElementById("result_color").innerHTML=localStorage.getItem('max_color');
    // 바뀌는 색상
    var color = document.getElementById('result_color').textContent.toLowerCase();
    console.log(color);
  
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'http://172.20.10.5/result.html?color=' + color, true);
    xhr.send();
  
    // 텍스트에 따른 배경 색상 제어
    var backfill = document.querySelector('.back-fill');
    console.log(backfill);
    var backcolor = '#fff';
    switch (color) {
      case 'red':
        backcolor = '#D24544';
        break;
      case 'blue':
        backcolor = '#3D98DA';
        break;
      case 'green':
        backcolor = '#408D0F';
        break;
      case 'yellow':
        backcolor = '#EBBB41';
        break;
      case 'orange':
        backcolor = '#E76C24';
        break;
      case 'pink':
        backcolor = '#FEA8BA';
        break;
      case 'purple':
        backcolor = '#C17ADE';
        break;
      case 'white':
        backcolor = '#262626';
        break;
      default:
        backcolor = '#000';
    }
    const backstyle = backfill.setAttribute('fill', backcolor);
  
    // 텍스트에 따른 텍스트 색상 제어
    var element = document.getElementById('result_color');
    element.style.color = backcolor;
    console.log(element.style.color);
  
    // 차트 그리기
    let myChart = echarts.init(document.getElementById('graph-wrapper'));
    let xAxisData = ['red', 'blue', 'green', 'yellow', 'orange', 'pink', 'purple', 'white']; // x축 데이터 배열 생성

    var red = localStorage.getItem('red');
    var blue = localStorage.getItem('blue');
    var green = localStorage.getItem('green');
    var yellow = localStorage.getItem('yellow');
    var orange = localStorage.getItem('orange');
    var pink = localStorage.getItem('pink');
    var purple = localStorage.getItem('purple');
    var white = localStorage.getItem('white');

    

  
    let option = {
      // 범례명
      legend: {
        data: ['집중도'],
        top: 20,
        right: 50,
        itemStyle: { color: 'black' }
      },
      tooltip: {
        show: true,
        trigger: 'item'
      },
      // x축 라벨
      xAxis: {
        data: xAxisData,
      },
      yAxis: {},
      series: [{
        name: '집중도',
        type: 'line', // 막대 그래프
        data: [{
          value: red,
            itemStyle: { color: '#D24544' }
          },
          {
            value:blue,
            itemStyle: { color: '#3D98DA' }
          },
          {
            value:green,
            itemStyle: { color: '#408D0F' }
          },
          {
            value:yellow,
            itemStyle: { color: '#EBBB41' }
          },
          {
            value:orange,
            itemStyle: { color: '#E76C24' }
          },
          {
            value:pink,
            itemStyle: { color: '#FEA8BA' }
          },
          {
            value:purple,
            itemStyle: { color: '#C17ADE' }
          },
          {
            value:white,
            itemStyle: { color: '#262626' }
          }
        ],
        markPoint: {
          data: [{
            type: 'max',
            name: 'Max',
            itemStyle: { color: 'black' }
          }]
        },
        lineStyle: {
          color: '#d9d9d9'
        },
        symbol: 'circle',
        symbolSize: 15,
      }],
    };
    // 3-3. 차트 옵션 설정하기
    myChart.setOption(option);
  }    

  </script>


</body>
</html>