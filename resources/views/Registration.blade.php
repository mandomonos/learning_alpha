<x-header></x-header>
<x-navbar></x-navbar>
<!-- Section: Design Block -->
<style>
    .background-radial-gradient {
        background: linear-gradient(to top, rgba(219, 219, 219, 0.5)0%, rgba(227, 226, 226, 0.327)0%), url("assets/img/3974104.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        height: 752px;
    }


    .bg-glass {
        background: rgba(46, 45, 45, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(65, 62, 62, 0.3);
        display: flex;

    }

    .card {
        margin: 10% 10%;
    }
</style>
{{-- < class="container"> --}}


<section class="background-radial-gradient overflow-hidden">
    {{-- <x-nav></x-nav> --}}
    {{-- @if ($message = Session::get('success'))
            <div class="alert alert-info">
                {{ $message }}
            </div>
            @endif --}}



    <div class="card bg-glass ">
        <div class="card-body px-5 py-5 px-md-5  ">
            <form class="row g-3 mt-5">
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">الاسم</label>
                    <input type="text" class="form-control" id="validationDefault01"  required placeholder="الاسم">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">عنوان البريد الالكتروني</label>
                    <input type="email" class="form-control" id="validationDefault02" required
                        placeholder="عنوان البريد">
                </div>
                <div class="col-md-2">
                    <label for="validationDefaultUsername" class="form-label">كلمة المرور</label>
                    <div class="input-group">
                        {{-- <span class="input-group-text" id="inputGroupPrepend2">@</span> --}}
                        <input type="password" class="form-control" id="validationDefaultUsername"
                            aria-describedby="inputGroupPrepend2" placeholder="******" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="validationDefault03" class="form-label">رقم الهاتف</label>
                    <input type="number" class="form-control" id="validationDefault03" required placeholder="+20">
                </div>
                <div class="col-md-3">
                    <label for="stage" class="form-label">المرحلة</label>
                    <select class="form-select" name="stage" id="stage" required >
                        <option selected  value="اعدادى">اعدادى</option>
                        <option selected  value="ثانوى">ثانوى</option>
                        <option selected disabled value="اختيارك">اختيارك...</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">التخصص</label>
                    <select class="form-select" id="validationDefault04" required>
                        <option selected  value="">علمى علوم</option>
                        <option selected  value="">علمى رياضة</option>
                        <option selected  value="">ادبي</option>
                        <option selected disabled value="">اختيارك...</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault04" class="form-label">السنة الدراسية</label>
                    <select class="form-select" id="validationDefault04" required>
                        <option selected  value="">اولى</option>
                        <option selected  value="">الثانية</option>
                        <option selected  value="">الثالثة</option>
                        <option selected disabled value="">اختيارك...</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">رقم هاتف الوالد</label>
                    <input type="number" class="form-control" id="validationDefault05" required placeholder="+20">
                </div>
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">عنوان بريد الوالد</label>
                    <input type="email" class="form-control" id="validationDefault05" required
                        placeholder="عنوان البريد">
                </div>
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">الدولة</label>
                    <input type="text" class="form-control" id="validationDefault05" required placeholder="الدولة">
                </div>
                <div class="col-md-3">
                    <label for="validationDefault05" class="form-label">المدينة</label>
                    <input type="text" class="form-control" id="validationDefault05" required placeholder="المدينة">
                </div>
                <div class="col-12">
                    <a href="login"><button class="btn btn-primary" type="submit">تسجيل</button> </a>
                </div>
            </form>
        </div>
    </div>

</section>
