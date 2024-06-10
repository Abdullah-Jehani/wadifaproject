<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>

</head>

<body class="bg-background">
    <nav class="bg-primary h-24 flex items-center justify-center text-white">
        <h1 class="text-3xl font-regular">Wadifa-وظيفة</h1>
    </nav>

    <form id="registrationForm" action="{{ route('business-account.register') }}" method="POST">
        @csrf
        @method('POST')
        <div class="flex justify-center items-center">
            <div class="container flex-col  bg-white rounded-3xl my-12 pr-8 py-6">
                <h2 class="text-xl font-bold text-center mt-2"> بيانات حساب الشركة </h2>
                <div class="flex items-end justify-center mt-2">
                    <div class="w-[80%] mx-auto">
                        <label for="field1" class="block text-gray-700 text-sm font-bold mb-2" dir="rtl">اسم الشركة</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-full h-[60px]" type="text" name="company_name" id="company_name" placeholder="شركة المدار الجديد" dir="rtl" style="outline:none" value="{{ old('company_name') }}">

                        @error('company_name')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror
                    </div>
                </div>
                <div class="container flex  bg-white rounded-3xl py-8 pr-24">
                    <div class="flex flex-col items-end space-y-4 w-[80%]">

                        <label for="field2" class="block text-gray-700 text-sm font-bold mb-2">العنوان</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="location" id="location" placeholder="طرابلس - طريق السكه" dir="rtl" style="outline:none" value="{{old('location')}}">
                        @error('location')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror

                        <label for="field3" class="block text-gray-700 text-sm font-bold mb-2">تاريخ التأسيس</label>
                        <div class="input-container flex items-center w-[80%] h-[60px] rounded-md bg-inputfield">

                            <input class="flex-1 px-3 py-2 font-bold rounded-md bg-inputfield" type="date" name="establishment_date" id="establishment_date" style="color: #6B7980; outline: none;" value="{{old('establishment_date')}}">

                        </div>
                        @error('establishment_date')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror
                        <label for="field4" class="block text-gray-700 text-sm font-bold mb-2">رقم الهاتف</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] " type="text" name="phone_number" id="phone_number" dir="rtl" placeholder="09XXXXXXXX" style="outline:none" value="{{old('phone_number')}}">
                        @error('phone_number')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror
                        <label for="field5" class="block text-gray-700 text-sm font-bold mb-2">تاكيد كلمة المرور</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="password" name="confirm_password" id="confirm_password" dir="rtl" placeholder="********" dir="rtl" style="outline:none">

                        @error('confirm_password')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror
                    </div>

                    <div class="flex flex-col items-end space-y-4 w-3/4 mr-12">
                        <label for="field7" class="block text-gray-700 text-sm font-bold mb-2">البريد الالكتروني</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="email" id="email" placeholder="user@gmail.com" dir="rtl" style="outline:none" value="{{old('email')}}">
                        @error('email')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror

                        <label for="field8" class="block text-gray-700 text-sm font-bold mb-2">تخصص الشركة</label>
                        <select class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] font-bold" name="specialization" id="specialization" dir="rtl" style="color: #6B7980; outline: none;">
                            <option value="" disabled selected>اختر من القائمة</option>
                            <option class="font-bold" value="علم البيانات">علم البيانات</option>
                            <option class="font-bold" value="تطوير البرمجيات">تطوير البرمجيات</option>
                            <option class="font-bold" value="التسويق الرقمي">التسويق الرقمي</option>
                            <option class="font-bold" value="الهندسة">الهندسة</option>
                            <option class="font-bold" value="إدارة الأعمال">إدارة الأعمال</option>
                            <option class="font-bold" value="المالية">المالية</option>
                            <option class="font-bold" value="التصميم الجرافيكي">التصميم الجرافيكي</option>
                            <option class="font-bold" value="التسويق">التسويق</option>
                        </select>

                        @error('specialization')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror

                        <label for="field9" class="block text-gray-700 text-sm font-bold mb-2"> رقم الترخيص</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="registration_number" id="registration_number" placeholder="120920192093" dir="rtl" style="outline:none" value="{{old('registration_number')}}">
                        @error('registration_number')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror
                        <label for="field10" class="block text-gray-700 text-sm font-bold mb-2">كلمة المرور</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="password" name="password" id="password" placeholder="********" dir="rtl" style="outline:none;">
                        @error('password')
                        <h1 class="text-danger">{{ $message }}</h1>
                        @enderror
                        <div class="flex justify-between gap-2 pt-2">
                            <a class="px-8 py-3 bg-white  rounded-md text-primary border font-bold" href="{{ route('auth.index') }}">
                                تسجيل الدخول
                            </a>

                            <button type="submit" class="px-8 py-3 bg-primary rounded-md text-white border font-bold">
                                انشاء حساب
                            </button>
                        </div>


                    </div>



                </div>
            </div>
        </div>

        </div>


    </form>
    </div>
</body>

</html>