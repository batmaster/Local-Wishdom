@extends('master')

@section('title')
    ผู้ดูแลระบบ
@endsection

@section('menu')
<ul class="nav nav-sidebar">
    <li><a>ชื่อผู้เข้าใช้ระบบ</a></li>
</ul>

<ul class="nav nav-pills nav-stacked">
    <li {{ ($sub == 'search' ? 'class=active' : '') }}><a href="{{ URL::to('/admin?sub=search') }}">ค้นหา</a></li>
    <li {{ ($sub == 'add' ? 'class=active' : '') }}><a href="{{ URL::to('/admin?sub=add') }}">เพิ่มผู้ดูแลระบบ</a></li>
</ul>
@endsection

@section('content')


    @if (Request::input('sub') == 'add')
        @include('admin-add')
    @else
        @include('admin-search')
    @endif

@endsection
