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
    <form id="registrationForm" action="{{ route('personal-account.register') }}" method="post">
        @csrf
        @method('post')

        <div class="flex justify-center items-center">
            <div class="container flex-col  bg-white rounded-3xl my-12 pr-8 py-4">
                <h2 class="text-xl font-bold text-center mt-2">بيانات حساب الموظف </h2>
                <div class="container flex  bg-white rounded-3xl py-12 pr-24">
                    <div class="flex flex-col items-end space-y-4 w-[80%]">
                        <label for="field1" class="block text-gray-700 text-sm font-bold mb-2">اسم العائلة</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="titlename" id="titlename" placeholder="دو" dir="rtl" style="outline:none">
                        @error('titlename')
                        <h1 class="">{{ $message }}</h1>
                        @enderror

                        <label for="field2" class="block text-gray-700 text-sm font-bold mb-2">العنوان</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="location" id="location" placeholder="بنغازي" dir="rtl" style="outline:none">
                        @error('location')
                        <h1 class="">{{ $message }}</h1>

                        @enderror

                        <label for="field3" class="block text-gray-700 text-sm font-bold mb-2">التخصص</label>
                        <select class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] font-bold" name="specialization" id="specialization" dir="rtl" style=" color: #6B7980; outline:none">
                            <option value="" disabled selected>اختر من القائمة</option>
                            <option class="font-bold" value="option1">التخصص 1</option>
                            <option class="font-bold" value="option2">التخصص 2</option>
                            <option class="font-bold" value="option3">التخصص 3</option>
                            <!-- Add more options as needed -->
                        </select>
                        @error('specialization')
                        <h1 class="">{{ $message }}</h1>

                        @enderror

                        <label for="field4" class="block text-gray-700 text-sm font-bold mb-2">رقم الهاتف</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] " type="text" name="phone_number" id="phone_number" dir="rtl" placeholder="09XXXXXXXX" style="outline:none">
                        @error('phonenumber')
                        <h1 class="">{{ $message }}</h1>

                        @enderror

                        <label for="field5" class="block text-gray-700 text-sm font-bold mb-2">تاكيد كلمة المرور</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="password" name="confirmpassword" id="confirmpassword" dir="rtl" placeholder="********" dir="rtl" style="outline:none">
                        @error('confirmpassword')
                        <h1 class="">{{ $message }}</h1>

                        @enderror
                    </div>

                    <div class="flex flex-col items-end space-y-4 w-3/4 mr-12">
                        <label for="field6" class="block text-gray-700 text-sm font-bold mb-2">الاسم الاول</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="username" id="username" placeholder="جون" dir="rtl" style="outline:none">
                        @error('username')
                        <h1 class="">{{ $message }}</h1>

                        @enderror

                        <label for="field7" class="block text-gray-700 text-sm font-bold mb-2">البريد الالكتروني</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="email" id="email" placeholder="user@gmail.com" dir="rtl" style="outline:none">
                        @error('email')
                        <h1 class="">{{ $message }}</h1>

                        @enderror

                        <label for="field8" class="block text-gray-700 text-sm font-bold mb-2">المؤهل العلمي</label>
                        <select class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] font-bold" name="education" id="education" dir="rtl" style="color: #6B7980; outline: none;">
                            <option value="" disabled selected>اختر من القائمة</option>
                            <option class="font-bold" value="option1">بكالوريوس</option>
                            <option class="font-bold" value="option2">ماجستير</option>
                            <option class="font-bold" value="option3">طالب جامعي</option>
                            <!-- Add more options as needed -->
                        </select>

                        @error('education')
                        <h1 class="">{{ $message }}</h1>

                        @enderror

                        <label for="field9" class="block text-gray-700 text-sm font-bold mb-2">المسمي الوظيفي</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="jobtitle" id="jobtitle" placeholder="مطور واجهات امامية" dir="rtl" style="outline:none">

                        @error('jobtitle')
                        <h1 class="">{{ $message }}</h1>

                        @enderror

                        <label for="field10" class="block text-gray-700 text-sm font-bold mb-2">كلمة المرور</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="password" name="password" id="password" placeholder="********" dir="rtl" style="outline:none;">

                        @error('password')
                        <h1 class="">{{ $message }}</h1>

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


    </form>
    </div>



</body>

</html>