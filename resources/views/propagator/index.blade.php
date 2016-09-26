<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link href="/oxygen/css/bootstrap.min.css" rel="stylesheet">
    <link href="/oxygen/css/animate.min.css" rel="stylesheet">
    <link href="/oxygen/css/font-awesome.min.css" rel="stylesheet">
    <link href="/oxygen/css/lightbox.css" rel="stylesheet">
    <link href="/oxygen/css/main.css" rel="stylesheet">
    <link id="css-preset" href="/oxygen/css/presets/preset1.css" rel="stylesheet">
    <link href="/oxygen/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/oxygen/js/html5shiv.js"></script>
    <script src="/oxygen/js/respond.min.js"></script>
    <![endif]-->

    <!---<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>--->
    <link rel="shortcut icon" href="/oxygen/images/favicon.ico">
    <style>
        .grayborder{
            border:1px #c3c3c3 solid;
        }

        .error{
            margin-top: 6px;
            color:#e04141;
        }
    </style>
    @versionfile('/js/plugin/LCalendar-master/src/css/LCalendar.css')
</head><!--/head-->

<body>

<!--.preloader-->
<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
<!--/.preloader-->

<header id="home">
    {{--<div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">--}}
        {{--<div class="carousel-inner">--}}
            {{--<div class="item active" style="background-image: url(/oxygen/images/slider/1.jpg)">--}}
                {{--<div class="caption">--}}
                    {{--<h1 class="animated fadeInLeftBig">Welcome to <span>Oxygen</span></h1>--}}
                    {{--<p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>--}}
                    {{--<a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item" style="background-image: url(/oxygen/images/slider/2.jpg)">--}}
                {{--<div class="caption">--}}
                    {{--<h1 class="animated fadeInLeftBig">Say Hello to <span>Oxygen</span></h1>--}}
                    {{--<p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>--}}
                    {{--<a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="item" style="background-image: url(/oxygen/images/slider/3.jpg)">--}}
                {{--<div class="caption">--}}
                    {{--<h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>--}}
                    {{--<p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>--}}
                    {{--<a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>--}}
        {{--<a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>--}}

        {{--<a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>--}}

    {{--</div><!--/#home-slider-->--}}
    <div class="main-nav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                    {{--<h1><img class="img-responsive" src="/oxygen/images/logo.png" alt="logo"></h1>--}}
                </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="scroll active" href="#believer">录入祷告者</a></li>
                    <li><a class="scroll " href="#">签到</a></li>
                    {{--<li class="scroll active"><a href="#home">Home</a></li>--}}
                    {{--<li class="scroll"><a href="#services">Service</a></li>--}}
                    {{--<li class="scroll"><a href="#about-us">About Us</a></li>--}}
                    {{--<li class="scroll"><a href="#portfolio">Portfolio</a></li>--}}
                    {{--<li class="scroll"><a href="#team">Team</a></li>--}}
                    {{--<li class="scroll"><a href="#blog">Blog</a></li>--}}
                    {{--<li class="scroll"><a href="#contact">Contact</a></li>--}}
                </ul>
            </div>
        </div>
    </div><!--/#main-nav-->
</header><!--/#home-->
<section id="believer">
    <div class="container">
        <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="row">
                <div class="text-center col-sm-8 col-sm-offset-2">
                    <h2>录入信息</h2>
                    <form role="form" id="data-form">
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="姓名" name="name"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="性别" name="sex"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="年龄" name="age"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="籍贯" name="nativeplace"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="手机" name="mobile"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="联系地址" name="address"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="布道者" name="propagator"/>
                        </div>
                        <div class="form-group">
                            {!!\App\Util\Selects::yesOrNo('status')!!}
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="信教时间" name="time"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="微信号" name="wechat"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="问题一答案" name="answer_one"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control grayborder" placeholder="问题二答案" name="answer_two"/>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary" id="save-believer">提交</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!--/#services-->
<!--/#about-us-->

<!--/#portfolio-->

<!--/#team-->

<!--/#features-->

<!--/#pricing-->

<!--/#twitter-->

<!--/#blog-->

<!--/#contact-->


<script type="text/javascript" src="/oxygen/js/jquery.js"></script>
<script type="text/javascript" src="/oxygen/js/bootstrap.min.js"></script>
<!---<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>--->
<script type="text/javascript" src="/oxygen/js/jquery.inview.min.js"></script>
<script type="text/javascript" src="/oxygen/js/wow.min.js"></script>
<script type="text/javascript" src="/oxygen/js/mousescroll.js"></script>
<script type="text/javascript" src="/oxygen/js/smoothscroll.js"></script>
<script type="text/javascript" src="/oxygen/js/jquery.countTo.js"></script>
<script type="text/javascript" src="/oxygen/js/lightbox.min.js"></script>
@versionfile('/js/plugin/jquery.validate.js')
@versionfile('/js/function.js')
@versionfile('/js/plugin/LCalendar-master/src/js/LCalendar.js')
<script type="text/javascript" src="/oxygen/js/main.js"></script>
<script>
    $(function(){
        /*日期插件*/
        var calendar = new LCalendar();
        calendar.init({
            'trigger': 'input[name="time"]',//标签id
            'type': 'date',//date 调出日期选择 datetime 调出日期时间选择 time 调出时间选择 ym 调出年月选择
            'minDate':'1900-1-1',//最小日期 注意：该值会覆盖标签内定义的日期范围
        });

        $('#data-form').validate({
            rules: {
                name: {
                    required: true,
                }
            },
            messages:{
                name:{
                    required:'用户名不能为空',
                }
            }
        });


        new SubmitBtn({
            prepositionJudge:function(){
                if(!$('#data-form').valid()){
                    if(document.documentElement.scrollTop==0){
                        document.body.scrollTop = 60;
                    }else{
                        document.documentElement.scrollTop=60;
                    }
                    return false;
                }
                return true;
            },
            error:function(){
                alert('网络异常！');
            },
            url:'/propagator/login',
            data:function(){
                return $('#data-form').serialize();
            },
            selectorStr:'#save-believer',
            redirectTo:'/propagator/index'
        });
    });
</script>

</body>
</html>