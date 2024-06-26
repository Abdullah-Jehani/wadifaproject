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
    <div class="mt-12">
        <a href="{{ route('post.show', ['post' => $post->id]) }}" class=" bg-primary hover:bg-white text-white font-semibold hover:text-primary py-2 px-12 border border-primary hover:border-primary rounded-xl">
            قدم الآن
        </a>
    </div>

    <h1>{{ $post->job_title }}</h1>
    <h1>{{ $post->company->company_name }}</h1>
    <p>{{ $post->content }}</p>


</body>

</html>