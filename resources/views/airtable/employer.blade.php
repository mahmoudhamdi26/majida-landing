@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>تسجيل دخول صاحب العمل</h2>
        <form action="{{ route('register',$user) }}" method="post">
            @csrf

            <div class="form-group">
                <input name="owner" class="form-control" type="text" placeholder="صاحب العمل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="company" class="form-control" type="text" placeholder="إسم الشركة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="field" class="form-control" type="text" placeholder="مجال العمل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="address" class="form-control" type="text" placeholder="عنوان الشركة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="responsible" class="form-control" type="text" placeholder="الشخص المسؤل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="phone" class="form-control" type="number" placeholder="رقم التليفون" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="email" class="form-control" type="email" placeholder="البريد الإلكتروني" required>
            </div> <!-- end form-group -->
            <div class="text-center">
                <button class="custom-btn">
                    تسجيل
                </button> <!-- end custom-btn -->
            </div> <!-- end text-center -->
        </form>
    </div> <!-- end container -->

@endsection
