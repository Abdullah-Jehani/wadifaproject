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
    <nav class="bg-primary h-24 flex items-center justify-center text-white">
        <h1 class="text-3xl font-regular">Wadifa-وظيفة</h1>
    </nav>

    <!-- Search Bar -->
    <div class="px-24 pt-12">
        <form action="{{ route('post.index') }}" method="GET" class="flex justify-center mb-8">
            <input type="text" name="search" placeholder="ابحث عن وظيفة..." class="border border-grey rounded-l-lg p-2 w-full">
            <button type="submit" class="bg-primary text-white px-4 rounded-r-lg">ابحث</button>
        </form>
    </div>

    <div class="px-24 py-6">
        <a href="{{ route('post.create') }}" class="bg-primary text-white px-4 py-2 rounded-md hover:bg-blue-700">Create Post</a>
    </div>


    <div class="px-24 py-12 grid grid-cols-2 gap-x-[24px] gap-y-[48px]">
        @foreach ($posts as $post)

        <div class="bg-white rounded-[4px] border border-grey p-8 w-full">
            <div class="flex justify-between items-center mb-[24px]">
                <div>
                    <h1 class="text-2xl font-bold">{{ $post->company->company_name }}</h1>
                    <h1 class="text-md font-regular">{{ $post->job_title }}</h1>
                </div>
                <div class="text-greyish text-sm">
                    <!-- <p><i class="fas fa-clock"></i> {{ $post->created_at->diffForHumans() ?? '23/3/2024' }}</p> -->
                    <p><i class="fas fa-map-marker-alt"></i> {{ $post->location }}</p>
                </div>
            </div>
            <div class="border-b border-grey"></div>
            <div class="mt-[24px] text-greyish">
                <h1 class="text-md mb-[24px]">{{ $post->content }}</h1>
                <a href="{{ route('post.show', ['post' => $post->id]) }}" class="bg-transparent hover:bg-primary text-blue-700 font-semibold hover:text-white py-2 px-12 border border-primary hover:border-transparent rounded-xl">
                    المزيد
                </a>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>