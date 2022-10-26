<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-100 text-gray-800">
<nav class="flex py-5 bg-indigo-500 text-white">
    <div class="w-1/2 px-12 mr-auto">
        <p class="text-2xl font-bold">
            Riba Login
        </p>
    </div>

    <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        @if(auth()->check())
            <li class="mx-6">
                <p class="">Hello, <b>{{auth()->user()->username}}</b></p>
            </li>
            <li>
                <a href="{{ route('login.destroy') }}" class="font-bold py-2 px-4 rounded-md bg-red-500 hover:bg-red-600 hover:text-white">Log Out</a>
            </li>
        @else
            <li class="mx-6">
                <a href="{{ route('login.index') }}" class="font-semibold
                hover:bg-indigo-700 py-3 px-4 rounded-md">Log In</a>
            </li>
            <li>
                <a href="{{ route('register.index') }}" class="font-semibold border-2 border-white py-2 px-4 rounded-md
                hover:bg-white hover:text-indigo-600">Register</a>
            </li>
        @endif
    </ul>

</nav>


@yield('content')
</body>
</html>
