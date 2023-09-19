<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- link css index.css --}}
{{--    bootstrap4--}}
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    {{--    bootstrap5--}}
    {{-- link js index.js --}}
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm display-3 text-center text-white font-weight-bold pr-4 pl-0 pad-4" >
                <div id="clock">

                </div>
                <div class="display-4 ">
                    {{$date1}}
                </div>
            </div>
            <div class="col-sm  text-center circle" >
                <div class="row d-flex align-items-center justify-content-lg-center pt-4"><img src="../img/Logo.png" width="70rem" style="padding-bottom:1rem"></div>
                <h4 >浙江财经大学东方学院</h4><hr>
                <h2 >体育中心</h2>
            </div>

            <div class="col-sm h2 d-flex align-items-center text-white font-weight-bold pl-5 pr-0" >

                生命不息，运动不止
            </div>
        </div>





    </div>
    <div class="top-half"></div>

    <div class="row bg-white pt-5 mt-5 pb-5 h-50 shadow p-3 mb-5 bg-white rounded">

        <div class="col-2 text-center">

            <img src="../svg/fangdichan.svg" width="150rem" height="150rem">
            <div class="font-weight-bold">部门概况</div>
        </div>

        <div class="col-3 text-center">
            <img src="../svg/jishiben.svg" width="150rem" height="150rem">
            <div class="font-weight-bold">体育教学</div>
        </div>
        <div class="col-2 text-center">

            <img src="../svg/dingweiweizhi.svg" width="150rem" height="150rem">
            <div class="font-weight-bold">体质测试</div>
        </div>
        <div class="col-3 text-center">

            <img src="../svg/tiyu.svg" width="150rem" height="150rem">
            <div class="font-weight-bold">群体竞赛</div>
        </div>
        <div class="col-2 text-center">

            <a href="{{route('gym.index')}}"><img src="../svg/guanlishezhi.svg" width="150rem" height="150rem">
                <div class="font-weight-bold">场馆管理</div></a>

        </div>
    </div>

    <footer class="blog-footer text-center text-white font-weight-bolder fixed-bottom " id="footer">
        <ul style="opacity: 1;">
            <li><p style="opacity: 1;">版权所有©<a href="https://tyzx.zufedfc.edu.cn/">浙江财经大学东方学院体育中心</a></p>
            </li>

            <li><p style="opacity: 1;">地址：浙江省海宁市长安镇仰山路2号
                </p>
            </li>
        </ul>

    </footer>
    <script>
        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();
            if(seconds < 10)
                seconds = '0' + seconds;
            if(minutes < 10)
                minutes = '0' + minutes;
            if(hours < 10)
                hours = '0' + hours;
            var timeString = hours + ':' + minutes + ':' + seconds;
            document.getElementById('clock').textContent = timeString;
        }

        setInterval(updateTime, 1000);
    </script>
</body>
</html>
