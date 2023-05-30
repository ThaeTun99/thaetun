<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>{{ __('hospital.edit') }}</title>
    @vite('resources/css/app.css')
    {{-- @vite('resources/js/historyTemplate.js') --}}
</head>

<body>
    <div class="m-10">
        <h1 class="text-xl underline decoration-green-500 mb-4">{{ __('hospital.edit') }}</h1>
        <form action="/doctor/{{ $doctorInfo->id }}" method="POST" onsubmit="return validateForm()">
            @method('PUT')
            @csrf
            <div class="relative z-0 w-full my-8 group">
                <input type="text" name="name" id="name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $doctorInfo->name }}" />
                <label for="name"
                    class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('appoint.Drname') }}
                </label>
            </div>


            <div class="relative z-0 w-full my-8 group">
                <input type="text" name="age" id="age"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $doctorInfo->age }}" />
                <label for="age"
                    class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('hospital.age') }}
                </label>
            </div>

            <div class="relative z-0 w-full my-8 group">
                <input type="text" name="address" id="address"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $doctorInfo->address }}" />
                <label for="address"
                    class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('hospital.address') }}
                </label>
            </div>

            <div class="relative z-0 w-full my-8 group">
                <input type="text" name="phone" id="phone"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $doctorInfo->phone }}" />
                <label for="phone"
                    class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('hospital.phone') }}
                </label>
            </div>

            <div class="relative z-0 w-full my-8 group">
                <input type="text" name="special" id="special"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $doctorInfo->doctorInfo->special }}" />
                <label for="special"
                    class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('hospital.special') }}
                </label>
            </div>

            <div class="relative z-0 w-full my-8 group">
                <input type="text" name="experience" id="experience"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $doctorInfo->doctorInfo->experience }}" />
                <label for="experience"
                    class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('hospital.experience') }}
                </label>
            </div>

            <div class="relative z-0 w-full my-8 group">
                <input type="text" name="liscen" id="liscen"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $doctorInfo->doctorInfo->Liscen }}" />
                <label for="liscen"
                    class="peer-focus:font-medium absolute text-sm text-gray-800 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{ __('hospital.liscen') }}
                </label>
            </div>

            {{-- History --}}
            <h4 class="underline decoration-blue-800 text-xl"> {{ __('hospital.editHistory') }}</h4>
            @foreach ($doctorInfo->histories as $history)
                <div class="md:grid-cols-2 flex text-center my-10">
                    <div class="flex">
                        <div>
                            <input type="text" id="hospitalName"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="hospitalName[]" value="{{ $history->hospitalName }}">
                        </div>
                        <div class="mx-6">
                            <input type="text" id="level"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="level[]" value="{{ $history->level }}">
                        </div>
                        <div>
                            <input type="date" id="startDate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm start-date  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="startDate[]" value="{{ $history->startDate }}">
                        </div>
                        <div class="mx-6">
                            <input type="date" id="endDate"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm end-date rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="endDate[]" value="{{ $history->endDate }}">
                        </div>
                        <div>
                            <input type="text" id="result"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm experience-div rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                name="exper[]" value="{{ $history->exper }}">
                        </div>
                    </div>
                </div>
            @endforeach
            
    </div>

    <a href="/doctor"
        class="text-white py-3 px-6  ml-10 mr-3 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{ __('hospital.Back') }}
    </a>


    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 mb-10 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{ __('room.save') }}
    </button>
    </div>
    </form>

    </div>
    {{-- <script>
        const startDateInput = document.getElementById('startDate');
        const endDateInput = document.getElementById('endDate');
        const experInput = document.getElementById('result');
        endDateInput.addEventListener('input', calculateDifference);

        function calculateDifference() {

            const startDate = new Date(startDateInput.value);
            const endDate = new Date(endDateInput.value);

            var startYear = startDate.getFullYear();
            var endYear = endDate.getFullYear();
            var differenceInYears = endYear - startYear;

            experInput.value = differenceInYears;
        }
    </script> --}}
</body>

</html>
