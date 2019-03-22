@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>تسجيل دخول جهات التدريب</h2>
        <form action="{{ route('register',$user) }}" method="post">
            @csrf
            <div class="form-group">
                <input name="center" class="form-control" type="text" placeholder="إسم مركز التدريب" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="about" class="form-control" type="text" placeholder="عن المركز" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="responsible" class="form-control" type="text" placeholder="الشخص المسؤل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="job" class="form-control" type="text" placeholder="المسمي الوظيفي" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="email" class="form-control" type="email" placeholder="البريد الإلكتروني" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="phone" class="form-control" type="number" placeholder="رقم التليفون" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                            <span class="dropdown-el">
                                <input type="radio" name="type" checked="checked" id="sort-relevance">
                                <label for="sort-relevance">نوع مركز التدريب</label>
                                <input type="radio" name="type" value="price" id="price">
                                <label for="price">ربحي</label>
                                <input type="radio" name="type" value="no-price" id="no-price">
                                <label for="no-price">غير ربحي</label>
                          </span>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="provided_training" class="form-control" type="text" placeholder="التدريبات المقدمة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="location" class="form-control" type="text" placeholder="الموقع" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input name="available_trainings" class="form-control" type="text" placeholder="التدريبات المتاحة" required>
            </div> <!-- end form-group -->

            <div class="text-center">
                <button class="custom-btn">
                    تسجيل
                </button> <!-- end custom-btn -->
            </div> <!-- end text-center -->
        </form>
    </div> <!-- end container -->

@endsection
