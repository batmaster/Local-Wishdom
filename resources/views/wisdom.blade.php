@extends('master')

@section('title')
    ข้อมูลภูมิปัญญาชาวบ้าน
@endsection

@section('menu')
<ul class="nav nav-sidebar">
    <li><a>ชื่อผู้เข้าใช้ระบบ</a></li>
</ul>

<ul class="nav nav-pills nav-stacked">
    <li {{ ($sub == 'search' ? 'class=active' : '') }}><a href="{{ URL::to('/wisdom?sub=search') }}">ค้นหา</a></li>
    <li {{ ($sub == 'add' ? 'class=active' : '') }}><a href="{{ URL::to('/wisdom?sub=add') }}">เพิ่มข้อมูลภูมิปัญญาชาวบ้าน</a></li>
    <li {{ ($sub == 'category' ? 'class=active' : '') }}><a href="{{ URL::to('/wisdom?sub=category') }}">ประเภทภูมิปัญญาชาวบ้าน</a></li>
    <li {{ ($sub == 'otop' ? 'class=active' : '') }}><a href="{{ URL::to('/wisdom?sub=otop') }}">ราคาสินค้าภูมิปัญญา OTOP</a></li>
    <li {{ ($sub == 'picture' ? 'class=active' : '') }}><a href="{{ URL::to('/wisdom?sub=picture') }}">กิจกรรมรูปภาพภูมิปัญญา</a></li>
</ul>
@endsection

@section('content')


    @if (Request::input('sub') == 'add')
        @include('wisdom-add')
    @elseif (Request::input('sub') == 'category')
        @include('wisdom-category')
    @elseif (Request::input('sub') == 'otop')
        @include('wisdom-otop')
    @elseif (Request::input('sub') == 'picture')
        @include('wisdom-picture')
    @else
        @include('wisdom-search')
    @endif

@endsection
