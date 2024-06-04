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

    <form action="{{route('personal-account.register')}}" method="post">
        @method('post')
        @csrf
        <div class="flex justify-center items-center">
            <div class="container flex-col  bg-white rounded-3xl my-12 pr-8">
                <h2 class="text-xl font-bold text-center mt-2">بيانات حساب الموظف </h2>
                <div class="container flex  bg-white rounded-3xl py-12 pr-24">
                    <div class="flex flex-col items-end space-y-4 w-[80%]">
                        <label for="field1" class="block text-gray-700 text-sm font-bold mb-2">اسم العائلة</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="field1" id="field1" placeholder="دو" dir="rtl" style="outline:none">

                        <label for="field2" class="block text-gray-700 text-sm font-bold mb-2">العنوان</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="field2" id="field2" placeholder="بنغازي" dir="rtl" style="outline:none">

                        <label for="field3" class="block text-gray-700 text-sm font-bold mb-2">التخصص</label>
                        <select class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] font-bold" name="field3" id="field3" dir="rtl" style=" color: #6B7980; outline:none">
                            <option value="" disabled selected>اختر من القائمة</option>
                            <option class="font-bold" value="option1">التخصص 1</option>
                            <option class="font-bold" value="option2">التخصص 2</option>
                            <option class="font-bold" value="option3">التخصص 3</option>
                            <!-- Add more options as needed -->
                        </select>

                        <label for="field4" class="block text-gray-700 text-sm font-bold mb-2">رقم الهاتف</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] " type="text" name="field4" id="field4" dir="rtl" placeholder="09XXXXXXXX" style="outline:none">

                        <label for="field5" class="block text-gray-700 text-sm font-bold mb-2">تاكيد كلمة المرور</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="password" name="field5" id="field5" dir="rtl" placeholder="********" dir="rtl" style="outline:none">
                    </div>

                    <div class="flex flex-col items-end space-y-4 w-3/4 mr-12">
                        <label for="field6" class="block text-gray-700 text-sm font-bold mb-2">الاسم الاول</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="field6" id="field6" placeholder="جون" dir="rtl" style="outline:none">

                        <label for="field7" class="block text-gray-700 text-sm font-bold mb-2">البريد الالكتروني</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="field7" id="field7" placeholder="user@gmail.com" dir="rtl" style="outline:none">

                        <label for="field8" class="block text-gray-700 text-sm font-bold mb-2">المؤهل العلمي</label>
                        <select class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px] font-bold" name="field8" id="field8" dir="rtl" style="color: #6B7980; outline: none;">
                            <option value="" disabled selected>اختر من القائمة</option>
                            <option class="font-bold" value="option1">بكالوريوس</option>
                            <option class="font-bold" value="option2">ماجستير</option>
                            <option class="font-bold" value="option3">طالب جامعي</option>
                            <!-- Add more options as needed -->
                        </select>

                        <label for="field9" class="block text-gray-700 text-sm font-bold mb-2">المسمي الوظيفي</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="text" name="field9" id="field9" placeholder="مطور واجهات امامية" dir="rtl" style="outline:none">

                        <label for="field10" class="block text-gray-700 text-sm font-bold mb-2">كلمة المرور</label>
                        <input class="bg-inputfield rounded-md px-3 py-2 w-[80%] h-[60px]" type="password" name="field10" id="field10" placeholder="********" dir="rtl" style="outline:none;">
                        <div class="flex justify-between gap-2 pt-2">
                            <a class="px-8 py-3 bg-white  rounded-md text-primary border font-bold" href="{{route('auth.index')}}">

                                تسجيل الدخول
                            </a>
                            <form action="{{route('personal-account.register')}}" method="post" method="post">
                                @method('post')

                                <a class=" px-8 py-3 bg-primary rounded-md text-white border font-bold" href="">


                                    انشاء حساب
                                </a>
                            </form>


                        </div>



                    </div>
                </div>
            </div>

        </div>


    </form>
    </div>
</body>

</html>