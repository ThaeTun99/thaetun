<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Room Detail</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">

    <div
        class="max-w-sm mx-auto  mt-10 p-6 bg-white text-gray-700 border justify-center  border-gray-200 rounded-lg justify shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="my-auto">
            <img src="{{ asset('storage/'.$roomInfo->r_photo) }}" class="w-auto my-5 rounded-lg" alt="image description" id="preview">
            <p>{{ __('room.roomNo') }} : <span class="text-black font-bold">{{ $roomInfo->roomNumber }}</span></p>
            <p class="py-5">{{ __('room.title') }}  : <span class="text-black font-bold">{{ $roomInfo->status }}</span></p>
            <p>{{ __('room.total') }} : <span class="text-black font-bold">{{ $roomInfo->total }}</span></p>
            <p class="py-5">{{ __('room.price') }}  : <span class="text-black font-bold">{{ $roomInfo->price }}</span></p>
        </div>
        <a href="/room">
            <button class="bg-blue-700 px-8 py-2 text-white rounded hover:bg-blue-900">
                {{ __('hospital.Back') }} 
            </button>
        </a>
    </div>


</body>

</html>
