@extends('partials.default')
@section('title')
Danh sách bản án được công bố
@endsection

@section('content')
<h1 align="center">CHÀO MỪNG ĐẾN VỚI HỆ THỐNG QUẢN LÝ BẢN ÁN</h1>
<b>Danh sách bản án được công bố</b>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr class="row">
            <th class="col-md-2">Số bản án</th> 
            <th class="col-md-2">Ngày lập bản án</th>
            <th class="col-md-2">Toà án</th>
            <th class="col-md-1">Cấp xét xử</th>
            <th class="col-md-4">Thông tin bản án</th>
            <th class="col-md-1"></th> 
        </tr>
        @foreach ($judgements as $key => $row)
        <tr class="row">
            <td class="col-md-2"><?=$row["judgement_no"]?></td> 
            <td class="col-md-2"><?=$row["date_created"]?></td>
            <td class="col-md-2"><?=$row["court"]?></td>
            <td class="col-md-1"><?=$row["type"]?></td>
            <th class="col-md-4">
            @if (strlen($row["happenings"])<=100)
                <td>{{$row["happenings"]}}</td>
            @else {{substr($row["happenings"], 0 ,100) + "..."}}
            @endif
            </th>
            <td class="col-md-1">
                <a href="#">Chi tiết</a>
            </td>
        </tr>
        @endforeach 
    </table>
</div>
@endsection