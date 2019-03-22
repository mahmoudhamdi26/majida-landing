@extends('layouts.app')

@section('content')

    <div class="container">
        <h2>تسجيل دخول طالب العمل</h2>
        <form>
            <div class="form-group">
                <input class="form-control" type="text" placeholder="الإسم" required>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="email" placeholder="البريد الإلكتروني" required>
            </div> <!-- end form-group -->



            <label class="d-block w-100 custom-la">تاريخ ميلادك</label>
            <div class="row">
                <div class="col-sm-4 col-6">
                    <div class="form-group">
                        <input class="form-control" type="number" placeholder="اليوم" required>
                    </div> <!-- end form-group -->
                </div> <!-- end col -->
                <div class="col-sm-4 col-6">
                    <div class="form-group">
                        <input class="form-control" type="number" placeholder="الشهر" required>
                    </div> <!-- end form-group -->
                </div> <!-- end col -->
                <div class="col-sm-4">
                    <div class="form-group">
                        <input class="form-control" type="number" placeholder="السنة" required>
                    </div> <!-- end form-group -->
                </div> <!-- end col -->
            </div> <!-- end row -->
            <div class="form-group">
                            <span class="dropdown-el">
                                <input type="radio" name="sortType" value="0" checked="checked" id="0">
                                <label for="0">نوع  الإعاقة</label>
                                <input type="radio" name="sortType" value="1" id="1">
                                <label for="1">ذهني</label>
                                <input type="radio" name="sortType" value="2" id="2">
                                <label for="2">سمعي</label>
                                <input type="radio" name="sortType" value="3" id="3">
                                <label for="3">حركي</label>
                                <input type="radio" name="sortType" value="4" id="4">
                                <label for="4">بصري</label>
                                <input type="radio" name="sortType" value="5" id="5">
                                <label for="5">أخري</label>
                                <input type="radio" name="sortType" value="6" id="6">
                                <label for="6">لا يوجد</label>
                          </span>
            </div> <!-- end form-group -->
            <div class="form-group">
                <input class="form-control" type="text" placeholder="المحافظة" required>
            </div> <!-- end form-group -->

            <div class="form-group">
                            <span class="dropdown-el ">
                                <input type="radio" name="sortType1" value="s0" checked="checked" id="s0">
                                <label for="s0">المؤهل الدراسي</label>
                                <input type="radio" name="sortType1" value="s1" id="s1">
                                <label for="s1">إبتدائي</label>
                                <input type="radio" name="sortType1" value="s2" id="s2">
                                <label for="s2">إعدادي</label>
                                <input type="radio" name="sortType1" value="s3" id="s3">
                                <label for="s3">ثانوي</label>
                                <input type="radio" name="sortType1" value="s4" id="s4">
                                <label for="s4">ثانوي فني</label>
                                <input type="radio" name="sortType1" value="s5" id="s5">
                                <label for="s5">بكالوريوس</label>
                                <input type="radio" name="sortType1" value="s6" id="s6">
                                <label for="s6">غير ذلك</label>
                          </span>
            </div> <!-- end form-group -->
            <div class="form-group">
                            <span class="dropdown-el ">
                                <input type="radio" name="sortType3" value="emp0" checked="checked" id="emp0">
                                <label for="emp0">الوظيفة</label>
                                <input type="radio" name="sortType3" value="emp1" id="emp1">
                                <label for="emp1">وظيفة 1</label>
                                <input type="radio" name="sortType3" value="emp2" id="emp2">
                                <label for="emp2">وظيفة 2</label>
                                <input type="radio" name="sortType3" value="emp3" id="emp3">
                                <label for="emp3">وظيفة 3</label>
                                <input type="radio" name="sortType3" value="emp4" id="emp4">
                                <label for="emp4">وظيفة 4</label>
                                <input type="radio" name="sortType3" value="emp5" id="emp5">
                                <label for="emp5">وظيفة 5</label>
                                <input type="radio" name="sortType3" value="emp6" id="emp6">
                                <label for="emp6">غير ذلك</label>
                          </span>
            </div> <!-- end form-group -->

            <div class="text-center">
                <button class="custom-btn">
                    تسجيل
                </button> <!-- end custom-btn -->
            </div> <!-- end text-center -->
        </form>
    </div> <!-- end container -->

@endsection