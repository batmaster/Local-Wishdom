@extends('master')

@section('title')
    สมาชิก
@endsection

@section('menu')
<ul class="nav nav-sidebar">
    <li><a>ชื่อผู้เข้าใช้ระบบ</a></li>
</ul>

<ul class="nav nav-pills nav-stacked">
    <li {{ ($sub == 'search' ? 'class=active' : '') }}><a href="{{ URL::to('/member?sub=search') }}">ค้นหา</a></li>
    <li {{ ($sub == 'add' ? 'class=active' : '') }}><a href="{{ URL::to('/member?sub=add') }}">เพิ่มสมาชิก</a></li>
</ul>
@endsection

@section('content')


    @if (Request::input('sub') == 'add')
        @include('member-add')
    @else
        @include('member-search')
    @endif

@endsection
