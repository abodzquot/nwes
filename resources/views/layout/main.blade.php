
<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">



<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>مشروع اخبار</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<style>
    .b{
        margin: 9px 35px 0px 2px;

    }
    #footer{
        background-color: #272727;
    }


</style>

<body>
@include('layout.header')
@include('layout.rightside')
<!-- Main content -->
<main class="main">

@include('layout.nav')
    <div>
        <div class="topnav">
            <nav>
                <img  class="ee" src="{{asset('img/oo.png')}}" alt="ereo" width="180px" height="60px">
                <a class="Myclass" href="#">حول</a>
                <a class="Myclass" href="#">سياسية</a>
                <a class="Myclass" href="#">اسعار الدهب</a>
                <a class="Myclass" href="#">رياضة </a>
                <a class="Myclass" href="#">التواصل معنا</a>
                <a class="Myclass" href="#">الصفحة الريئسية</a>

            </nav>
        </div>
    </div>
    <div style="width: 100%;">
        <div class="slideer">


                    <img src="{{asset('img/cc.jpg')}}" alt="slideer" width="100%" height="900">


    </div>


        <marquee behavior="alternate" bgcolor="red" direction="right" height="70px" style="padding: 30px" scrollamount="5" onMouseOver="stop ();" onMouseOut="start ();">
            <font size="+2.1" color="#FFFFFF" >خبر عاجل؟ يوجه السؤال إلى تشيبريكوف رئيس لجنة كي جي بي (أمن الدولة ). و إننا نصطدم بهذه المشكلة على مدى عشرين عامًا. أعتقد بضرورة بناء منطقة ذات حكم ذاتي في القرم</font>
        </marquee>
        e>



@yield('main1')

    <div class="clearfix">
        @foreach($data as $row)
        <div class="box" style="background-color:#ddd">
            <img  src="{{asset('img/bb.jpg')}}" alt="slideer" width="200" height="170">
            <p class="oo"><u>{{ $row['title_name'] }}</u></p>
            <h1 class="zz">{{ $row['news_body'] }}</h1>
        </div>
        @endforeach

    </div>

    <br>
    <br>


    <marquee behavior="alternate" bgcolor="#000" direction="right" height="70px" style="padding: 20px" scrollamount="5" onMouseOver="stop ();" onMouseOut="start ();">
        <font size="+2.1" color="#FFFFFF" >ما رأيك قي بوتين ؟ يوجه السؤال إلى تشيبريكوف رئيس لجنة كي جي بي (أمن الدولة ). و إننا نصطدم بهذه المشكلة على مدى عشرين عامًا. أعتقد بضرورة بناء منطقة ذات حكم ذاتي في القرم ..</font>
    </marquee>

    <br>
    <br>



@include('layout.footer')

    <footer id="footer">
        <div class="side">
            <b>الموقع</b>
            <p><a href="#">Terms and Conditions</a></p>
            <p><a href="#">Copyright Policy</a></p>

        </div>

        <div class="side">
            <b class="b">الخدمات</b>
            <p><a class="a" href="">Help & Support</a></p>
            <p><a class="a" href="">Writing & Translation</a></p>


        </div>
        <div class="side">
            <b class="b">الصور</b>
            <p><a class="a" href="">Events</a></p>
            <p><a class="a" href="">Blog</a></p>

        </div>
        <div class="side">
            <b class="b">اتصل بنا</b>
            <p><a class="a" href="">Graphics & Design</a></p>
            <p><a class="a" href="">Digital Marketing</a></p>

        </div>
    </footer>

</body>

</html>
