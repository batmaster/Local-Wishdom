@extends('master')

@section('title')
    สมาชิก
@endsection

@section('menu')
<ul class="nav nav-sidebar">
    <li><a>ชื่อผู้เข้าใช้ระบบ</a></li>
</ul>

<ul class="nav nav-sidebar">
    <li><a>ค้นหา</a></li>
    <li><a>เพิ่มสมาชิก</a></li>
</ul>
@endsection

@section('content')
    @if ($sub == 'add')
        @include('member-add')
    @else
        @include('member-search')
    @endif

    {{ $sub }}
@endsection
