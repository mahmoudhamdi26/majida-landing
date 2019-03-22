@extends('layouts.app')

@section('content')

<div class="container">
    <h2>إضافة وظيفة جديدة</h2>
    <form>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="المسمي الوظيفي" required>
        </div> <!-- end form-group -->
        <div class="form-group">
            <input class="form-control" type="text" placeholder="الموقع" required>
        </div> <!-- end form-group -->
        <div class="form-group">
            <textarea class="form-control" placeholder="شرح الوظيفة" rows="4" required></textarea>
        </div> <!-- end form-group -->
        <label class="d-block w-100 custom-la">النوع</label>
        <div class="row">
            <div class="col-6">
                <div class="custom-control form-group custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="customRadio" name="example" value="customEx">
                    <label class="custom-control-label w-100 d-block" for="customRadio">ذكر</label>
                </div>

            </div> <!-- end col -->
            <div class="col-6">

                <div class="custom-control form-group custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="example" value="customEx">
                    <label class="custom-control-label w-100 d-block" for="customRadio2">أنثي</label>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

        <div class="form-group">
            <input class="form-control" type="number" placeholder=" عدد الفرص المتاحة " required>
        </div> <!-- end form-group -->

        <label class="d-block w-100 custom-la">متوفر سكن ومواصلات؟</label>
        <div class="row">
            <div class="col-6">
                <div class="custom-control form-group custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="buliding" name="example">
                    <label class="custom-control-label w-100 d-block" for="buliding">سكن</label>
                </div>

            </div> <!-- end col -->
            <div class="col-6">

                <div class="custom-control form-group custom-checkbox custom-control-inline">
                    <input type="checkbox" class="custom-control-input" id="transport" name="example">
                    <label class="custom-control-label w-100 d-block" for="transport">موصلات</label>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



        <div class="text-center">
            <!-- change type to submit ,I change it to button to play sweetalert by js use ajax here to send data thanks. -->
            <button class="custom-btn addjob" type="button">
                تسجيل
            </button> <!-- end custom-btn -->
        </div> <!-- end text-center -->
    </form>
    <!--
                        <button class="type-2">+ إضافة وظيفة أخري</button>

    -->
</div> <!-- end container -->

    @endsection
