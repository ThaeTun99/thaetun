<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Message Detail</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div
        class="max-w-sm mx-auto  mt-10 p-6 bg-white text-gray-600 border justify-center  border-gray-200 rounded-lg justify shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="ml-14">
            <p>{{ __('message.urMessage') }}  : <span class="text-black font-bold">{{ $messageInfo->texts }}</span></p>
            <p class="py-5">{{ __('message.type') }}   : <span class="text-black font-bold">{{ $messageInfo->type }} Message</span></p>
            <p>{{ __('message.time') }}   : <span class="text-black font-bold">{{ date('g:i A', strtotime($messageInfo->created_at)) }}</span></p>
        </div>
        <a href="/message">
            <button class="bg-blue-700 px-8 py-2 text-white rounded hover:bg-blue-900 mt-5 ml-14">
                {{ __('hospital.Back') }}  
            </button>
        </a>
    </div>


</body>

</html>
