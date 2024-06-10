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
    <div class="flex justify-center align-middle items-center">
        @if (auth()->guard('company')->check())
        <p class="text-3xl"> {{ auth()->guard('company')->user()->company_name }} مرحبا </p>
        @elseif (auth()->guard('employee')->check())
        <p class="text-4xl"> مرحبا، {{ auth()->guard('employee')->user()->name }} (موظف)</p>
        @endif
    </div>

</body>

</html>

</html>