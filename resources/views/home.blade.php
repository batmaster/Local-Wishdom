@extends('master')

@section('title')
หน้าหลัก
@endsection

@section('menu')
<ul class="nav nav-sidebar">
    <li><a>ชื่อผู้เข้าใช้ระบบ</a></li>
</ul>

<ul class="nav nav-sidebar">
    <li><a>แนะนำความรู้ภูมิปัญญา</a></li>
    <li><a>แผนที่ภูมิปัญญา</a></li>
    <li><a>แสดงความคิดเห็น</a></li>
</ul>
@endsection

@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner con" role="listbox">
        <div class="item active">
            <img src="http://sites.psu.edu/siowfa15/wp-content/uploads/sites/29639/2015/09/04_Apples.jpg" alt="Chania">
        </div>

        <div class="item">
            <img src="http://www.bbcgoodfood.com/sites/default/files/glossary/banana-crop.jpg" alt="Chania" height="widthSet" width="heightSet">
        </div>

        <div class="item">
            <img src="http://www.pitara.com/wordpress/wp-content/uploads/2002/09/dromedary-camel.jpg" alt="Flower" height="widthSet" width="heightSet">
        </div>

        <div class="item">
            <img src="http://hxcorp.com.vn/public/userupload/images/durian%20(1).jpg" alt="Flower" height="widthSet" width="heightSet">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>
This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>
This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>
This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>
This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>
This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>This is home.<br>
@endsection
