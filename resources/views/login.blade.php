<x-header></x-header>
<x-navbar></x-navbar>


    <link rel="stylesheet" href="assets/css/login.css?">




<div class="container">
    <div class="container1">
        <h2>تسجيل دخول</h2>
        <form action="" method="post">
            {{-- @csrf --}}
            <!-- Email input -->
            <div class="form-outline mb-3">
                <label class="form-label" for="email">عنوان البريد الالكترونى</label>
                <input  pa type="email" name="email" id="email" class="form-control px-5"placeholder="عنوان البريد الالكترونى..." />
                {{-- @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif --}}
            </div>
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">كلمة المرور</label>
                <input type="password" name="password" id="password"
                    class="form-control px-5"placeholder="ادخل كلمة المرور..." />
                {{-- @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif --}}
            </div>
            <a href="landingpage"> <button type="submit" class="btn btn-primary ">دخول</button></a>
            <div class="mb-4 mt-3">
                <a href="Registration"> انشاء حساب جديد</button></a>

            </div>
            {{-- @if ($message = Session::get('success'))
                    <div class="alert alert-info">
                        {{ $message }}
                    </div>
                @endif --}}
        </form>
    </div>

</div>
