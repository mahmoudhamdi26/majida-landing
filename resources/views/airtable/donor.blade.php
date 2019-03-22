@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>تسجيل دخول الجهات المانحة</h2>
        <form action="{{ route('register',$user) }}" method="post">
            <div class="form-group">
                <input class="form-control" name="name" type="text" placeholder="إسم المنظمة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" name="about" type="text" placeholder="عن المنظمة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" name="contact" type="text" placeholder="الشخص المسؤل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" name="job" type="text" placeholder="المسمي الوظيفي" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" name="phone" type="number" placeholder="رقم التليفون" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" name="email" type="email" placeholder="البريد الإلكتروني" required>
            </div> <!-- end form-group -->
            <div class="text-center">
                <button class="custom-btn">
                    تسجيل
                </button> <!-- end custom-btn -->
            </div> <!-- end text-center -->
        </form>
    </div> <!-- end container -->

@endsection
