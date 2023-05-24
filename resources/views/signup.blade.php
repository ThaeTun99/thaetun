<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup Form</title>
    @vite('resources/css/app.css')
</head>

<body class="flex justify-center items-center bg-gray-900 h-screen">
    <div class="box relative bg-gray-600 p-10 w-1/2 rounded-lg border-gray-900 border-4">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
        <form action="/signup" method="post">
            @csrf
            <h1 class="text-center font-semibold text-xl text-white pb-10">Sign Up</h1>
            <div class="mb-6">
                <label for="username" class="block mb-2 text-sm font-bold text-white dark:text-white">Your
                    Name</label>
                    <input type="text" id="username"
                    class="bg-gray-400 border rounded-lg text-xl font-bold border-gray-400 border-b-black text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white focus:outline-none"
                    name="username">
                    @error('username')
                        <li class="text-black font-bold text-xl">{{ $message }}</li>
                    @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-bold text-white dark:text-white">Your
                    password</label>
                <input type="password" id="password"
                    class="bg-gray-400 border rounded-lg text-xl font-bold border-gray-400 border-b-black text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white focus:outline-none"
                    name="password">
                    @error('password')
                        <li class="text-black font-bold text-xl">{{ $message }}</li>
                    @enderror
            </div>
            <div class="mb-6">
                <label for="age" class="block mb-2 text-sm font-bold text-white dark:text-white">Your
                    age</label>
                <input type="text" id="age"
                    class="bg-gray-400 border rounded-lg text-xl font-bold border-gray-400 border-b-black text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white focus:outline-none"
                    name="age">
                    @error('age')
                        <li class="text-black font-bold text-xl">{{ $message }}</li>
                    @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Sign Up
            </button>
        </form>


    </div>
</body>

</html>
