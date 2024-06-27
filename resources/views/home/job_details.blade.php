<!doctype html>

<html dir="rtl">

<head>
    <!-- rtl -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="">
    <nav class="bg-primary h-24 flex items-center justify-between text-white px-24">
        <div class="flex items-center">
            <h1 class="text-3xl font-regular">Wadifa-وظيفة</h1>
        </div>
        <div class="flex items-center justify-end flex-grow"> <!-- Adjusted classes here -->
            <a href="{{ route('auth.logout') }}" class="text-white px-4">تسجيل الخروج</a>
        </div>
    </nav>
    <div class="py-24 px-48">
        <div class="bg-white rounded-lg  py-12 px-4 flex flex-col justify-center  border">
            <div class="flex flex-col justify-center items-center mb-[24px]">
                <h1>تفاصيل الوظيفة</h1>
                <h1 class="font-bold text-4xl mt-6 mb-12">{{$post->company->company_name}}</h1>
            </div>
            <div class="px-96">
                <div class="bg-white border border-primary rounded-lg px-6 py-4 flex justify-between items-center">
                    <h1>{{$post->phone_number}}</h1>
                    <div class="border border-primary rounded-lg px-4 py-2">
                        <button>اتصل بنا</button>
                    </div>
                </div>
            </div>
            <div class="mt-24 ">
                <h1 class="mb-8"><span class="font-bold mb-4">المسمى الوظيفي:</span> {{ $post->job_title }}</h1>
                <h1 class="mb-8"><span class="font-bold"> الموقع:</span> {{ $post->location }}</h1>
                <h1 class="mb-8"><span class="font-bold"> نوع الوظيفة :</span> {{ $post->work_type }}</h1>
                <h1 class="mb-8"><span class="font-bold"> وصف الوظيفة:</span> {{ $post->content }}</h1>
            </div>
            @if (!auth()->guard('company')->check())
            <div class="flex items-center justify-center">
                <form action="{{route('post.apply' , ['post' => $post , 'employee' => auth()->guard('employee')->user()->id] )}} " method="POST">
                    @csrf
                    <button class="text-white border border-primary px-8 py-2 rounded-md bg-primary">قدم الآن</button>
                </form>
            </div>
            @endif

        </div>
    </div>
</body>

</html>