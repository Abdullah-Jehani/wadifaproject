<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="bg-background flex justify-center items-center h-screen">
    <div class="bg-white flex flex-col items-center py-16 rounded-2xl w-1/3">
        <h1 class="mb-20 text-xl font-bold">تسجيل الدخول</h1>
        <form action="{{ route('auth.login')}}" method="POST" class="w-[80%] flex flex-col items-end">
            @method('POST')
            @csrf

            <div class="w-full flex flex-col items-end mb-6">
                <label for="accountType" class="block text-gray-700 text-sm font-bold mb-2">نوع الحساب</label>
                <select class="bg-inputfield rounded-md px-3 py-2 w-full h-[75px] mb-6" name="accountType" id="accountType" dir="rtl" style="outline:none;">
                    <option value="company">شركة</option>
                    <option value="employee">موظف</option>
                </select>
                @error('accountType')
                <h1 class="text-danger">{{ $message }}</h1>
                @enderror
            </div>

            <div class="w-full flex flex-col items-end">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">البريد الالكتروني</label>
                <input class="bg-inputfield rounded-md px-3 py-2 w-full h-[75px] mb-6" value="{{ old('email') }}" type="text" name="email" id="email" placeholder="user@gmail.com" dir="rtl" style="outline:none">
                @error('email')
                <h1 class="text-danger">{{ $message }}</h1>
                @enderror
            </div>
            <div class="w-full flex flex-col items-end mt-12">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">كلمة المرور</label>
                <input class="bg-inputfield rounded-md px-3 py-2 w-full h-[75px] mb-6" type="password" name="password" id="password" placeholder="********" dir="rtl" style="outline:none;">
                @error('password')
                <h1 class="text-danger">{{ $message }}</h1>
                @enderror
            </div>
            <div class="flex justify-end gap-2 pt-2 mt-8 w-full">
                <a class="px-8 py-3 bg-white rounded-md text-primary border font-bold" href="{{route('auth.accountType')}}">
                    انشاء حساب
                </a>
                <button class="px-8 py-3 bg-primary rounded-md text-white border font-bold" type="submit">
                    تسجيل الدخول
                </button>
            </div>
        </form>
    </div>
</body>

</html>