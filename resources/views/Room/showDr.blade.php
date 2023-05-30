<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Doctors' Datas</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-300">

    <div
        class="max-w-sm mx-auto  mt-10 p-6 bg-white
    text-gray-700 border justify-center  border-gray-200 
    rounded-lg justify shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="my-auto">
            <p>{{ __('appoint.Drname') }} : <span class="text-black font-bold">{{ $drData->name }}</span></p>
            <p class="py-5">{{ __('hospital.age') }} : <span class="text-black font-bold">{{ $drData->age }}</span></p>
            <p>{{ __('hospital.address') }} : <span class="text-black font-bold">{{ $drData->address }}</span></p>
            <p class="py-5">{{ __('hospital.phone') }} : <span class="text-black font-bold">{{ $drData->phone }}</span></p>
            <p>{{ __('hospital.special') }} : <span class="text-black font-bold">{{ $drData->special }}</span></p>
            <p class="py-5">{{ __('hospital.experience') }} : <span class="text-black font-bold">{{ $drData->experience }}</span></p>
            <p>{{ __('hospital.liscen') }} : <span class="text-black font-bold">{{ $drData->liscen }}</span></p>
        </div>

    </div>
    <h4 class="text-center font-bold text-xl mt-10">History</h4>
    @foreach ($doctorInfo->histories as $history)
        <div class="md:grid-cols-2 flex text-center my-10 justify-center">
            <div class="flex">
                <div>
                    <input type="text" id="hospitalName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Hospital Name" name="hospitalName[]" value="{{ $history->hospitalName }}" readonly>
                </div>
                <div class="mx-6">
                    <input type="text" id="level"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="level" name="level[]" value="{{ $history->level }}" readonly>
                </div>
                <div>
                    <input type="date" id="startDate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Start Date" name="startDate[]" value="{{ $history->startDate }}" readonly>
                </div>
                <div class="mx-6">
                    <input type="date" id="restDate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rest Date" name="endDate[]" value="{{ $history->endDate }}" readonly>
                </div>
                <div>
                    <input type="text" id="exp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Experience" name="exper[]" value="{{ $history->exper }}" readonly>
                </div>
            </div>
        </div>
    @endforeach
    <a href="/doctor" class="text-center ml-96">
        <button class="bg-blue-700 px-8 py-2 text-white rounded hover:bg-blue-900 ml-64 mb-10 text-center">
            {{ __('hospital.Back') }}
        </button>
    </a>
    </div>


</body>

</html>
