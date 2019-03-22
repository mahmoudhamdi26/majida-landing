@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>تسجيل دخول صاحب العمل</h2>
        <form>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="صاحب العمل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="إسم الشركة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="مجال العمل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="عنوان الشركة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="الشخص المسؤل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="number" placeholder="رقم التليفون" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="email" placeholder="البريد الإلكتروني" required>
            </div> <!-- end form-group -->
            <div class="text-center">
                <button class="custom-btn">
                    تسجيل
                </button> <!-- end custom-btn -->
            </div> <!-- end text-center -->
        </form>
    </div> <!-- end container -->

@endsection
