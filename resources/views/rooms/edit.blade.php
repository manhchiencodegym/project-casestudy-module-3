@extends('layout/home')
@section('content')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Rooms</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 ml-10">
        <form method="post" action="{{route('rooms.update', $room->id)}}">
            @csrf
            <div class="form-group">
                <label>Tên</label>
                <input type="text" class="form-control" name="name" placeholder="Name Room" value="{{$room->name}}" readonly>
            </div>
            <div class="form-group">
                <label>Loại Phòng</label>
                <select name="type"  class="form-control">
                    <option>Phòng đơn</option>
                    <option>Phòng đôi</option>
                </select>
            </div>
            <div class="form-group">
                <label>Giá Phòng</label>
                <select name="price"  class="form-control">
                    <option>100.000/2h</option>
                    <option>400.000/12h</option>
                    <option>700.000/Ngày</option>
                </select>
            </div>
            <div class="form-group">
                <label>Tình Trạng</label>
                <select name="status" class="form-control">
                    <option>Đang trống</option>
                    <option>Đang sửa chữa</option>
                    <option>Đang vệ sinh</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>
@endsection
