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
            <a href="{{ route('post.index') }}" class="text-white px-4">تسجيل الخروج</a>
        </div>
    </nav>

    <div class="py-24 px-48">
        <div class="bg-white rounded-lg py-12 px-4 flex flex-col justify-center border">
            <div class="flex flex-col justify-center items-center mb-[24px]">
                <h1>تقديم طلب وظيفة جديد</h1>
            </div>

            <form action="{{ route('post.store') }}" method="POST" class="px-96">
                @csrf


                <div class="mb-4">
                    <label for="phone_number" class="block mb-2 font-bold">رقم الهاتف:</label>
                    <input type="text" name="phone_number" id="phone_number" class="w-full border rounded-lg px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="job_title" class="block mb-2 font-bold">المسمى الوظيفي:</label>
                    <input type="text" name="job_title" id="job_title" class="w-full border rounded-lg px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="location" class="block mb-2 font-bold">الموقع:</label>
                    <input type="text" name="location" id="location" class="w-full border rounded-lg px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="work_type" class="block mb-2 font-bold">نوع الوظيفة:</label>
                    <input type="text" name="work_type" id="work_type" class="w-full border rounded-lg px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label for="content" class="block mb-2 font-bold">وصف الوظيفة:</label>
                    <textarea name="content" id="content" class="w-full border rounded-lg px-3 py-2" rows="4" required></textarea>
                </div>

                <div class="flex items-center justify-center">
                    <button type="submit" class="text-white border border-primary px-8 py-2 rounded-md bg-primary">نشر الوظيفة</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>