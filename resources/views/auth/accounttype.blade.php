<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="">
    <nav class="bg-primary h-24 flex items-center justify-center text-white">
        <h1 class="text-3xl font-regular">Wadifa-وظيفة</h1>
    </nav>

    <div class="flex flex-col justify-center items-center mt-12 ">
        <h1 class="text-3xl font-regular mb-4">مرحبا بك في منصة <span class="text-primary">وظيفة</span></h1>
        <p class="text-lg">يرجي اختيار نوع الحساب الذي تريد ان تواصل به في المنصة</p>
    </div>


    <div class="flex justify-center items-center mt-16 gap-5">
        <a href="{{ route('personal-account') }}" class="h-64 w-64 bg-white flex flex-col items-center justify-center border border-primary">
            <img class="w-3/4" src="assets/ebae7110-a894-4f95-ac2b-52751162e09f 1.png" alt="Description of the first image">
        </a>

        <a href="{{ route('business-account') }}" class="h-64 w-64 bg-white flex flex-col items-center justify-center border border-primary">
            <img class="" src="assets/f26a503a-f31e-435e-a180-e362a0bfe792 1.png" alt="Description of the second image">
        </a>
    </div>

    <div class="flex justify-center items-center  mt-4 gap-5">
        <div class="w-64 flex flex-col justify-center ">
            <h1 class="text-2xl font-bold text-primary">شخصي</h1>
            <p class="text-md ">تبحث عن عمل</p>
        </div>
        <div class="">
            <h1 class="text-2xl font-bold text-primary m-0">مؤسسة</h1>
            <p class="text-md">تقوم بالتوظيف</p>
        </div>
    </div>
    </div>

    <div class="flex justify-center items-center  mt-20 text-xl">
        <h1>يرجى ملاحظة أنه بمجرد اختيار نوع الحساب، لا يمكنك تغييره في المستقبل</h1>
    </div>
</body>

</html>