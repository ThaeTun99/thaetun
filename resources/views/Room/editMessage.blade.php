<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>{{ __("hospital.edit") }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="m-10">
        <h1 class="text-xl underline decoration-green-500 mb-6">{{ __("hospital.edit") }}</h1>
        <form action="/message/{{ $messageInfo->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="texts" id="texts"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required 
                    value="{{ $messageInfo->texts }}"/>
                <label for="texts"
                    class="peer-focus:font-medium absolute text-sm text-gray-600 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __("message.urMessage") }}
                </label>
            </div>
            
            <div class="relative z-0 w-full mb-6 group">
                <input type="radio" name="type" id="VIP" value="VIP"
                @checked($messageInfo->type == "VIP")>
                <label for="VIP">{{ __("message.VIP") }}</label>

                <span class="mx-10">
                    <input type="radio" name="type" id="Normal" value="Normal"
                    @checked($messageInfo->type == "Normal")>
                    <label for="Normal">{{ __("message.normal") }}</label>
                </span>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{ __("room.save") }}
            </button>
        </form>

    </div>
</body>

</html>
