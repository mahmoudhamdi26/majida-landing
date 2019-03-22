@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>تسجيل دخول جهات التدريب</h2>
        <form>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="إسم مركز التدريب" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="عن المركز" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="الشخص المسؤل" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="المسمي الوظيفي" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="email" placeholder="البريد الإلكتروني" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="number" placeholder="رقم التليفون" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                            <span class="dropdown-el">
                                <input type="radio" name="sortType" value="Relevance" checked="checked" id="sort-relevance">
                                <label for="sort-relevance">نوع مركز التدريب</label>
                                <input type="radio" name="sortType" value="price" id="price">
                                <label for="price">ربحي</label>
                                <input type="radio" name="sortType" value="no-price" id="no-price">
                                <label for="no-price">غير ربحي</label>
                          </span>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="التدريبات المقدمة" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="الموقع" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="التدريبات المتاحة" required>
            </div> <!-- end form-group -->

            <div class="text-center">
                <button class="custom-btn">
                    تسجيل
                </button> <!-- end custom-btn -->
            </div> <!-- end text-center -->
        </form>
    </div> <!-- end container -->

@endsection
