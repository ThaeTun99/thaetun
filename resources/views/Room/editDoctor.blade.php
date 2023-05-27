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
</head>

<body>
    <div class="m-10">
        <h1 class="text-xl underline decoration-green-500 mb-4">{{ __('hospital.edit') }}</h1>
        <form action="/doctor/{{ $doctorInfo->id }}" method="POST">

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
            <h4 class="underline decoration-blue-800 text-xl">History</h4>
            <div class=" md:grid-cols-2 flex text-center my-10">
                <div>
                    <input type="text" id="hospitalName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Hospital Name" name="hospitalName"
                        value="{{ $doctorInfo->histories[0]->hospitalName }}">
                </div>
                <div class="mx-6">
                    <input type="text" id="level"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="level" name="level" value="{{ $doctorInfo->histories[0]->level }}">
                </div>
                <div>
                    <input type="date" id="startDate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Start Date" name="startDate" value="{{ $doctorInfo->histories[0]->startDate }}">
                </div>
                <div class="mx-6">
                    <input type="date" id="restDate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rest Date" name="endDate" value="{{ $doctorInfo->histories[0]->endDate }}">
                </div>
                <div>
                    <input type="text" id="exp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Experience" name="exper" value="{{ $doctorInfo->histories[0]->exper }}">
                </div>

                <a href="" class="ml-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-10 h-10 text-blue-900">
                        <path fill="currentColor"
                            d="M208 32H48a16 16 0 0 0-16 16v160a16 16 0 0 0 16 16h160a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16Zm-24 104h-48v48a8 8 0 0 1-16 0v-48H72a8 8 0 0 1 0-16h48V72a8 8 0 0 1 16 0v48h48a8 8 0 0 1 0 16Z" />
                    </svg>
                </a>

                <div class="ml-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="w-10 h-10 text-blue-900">
                        <path fill="currentColor"
                            d="M208 32H48a16 16 0 0 0-16 16v160a16 16 0 0 0 16 16h160a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16Zm-24 104H72a8 8 0 0 1 0-16h112a8 8 0 0 1 0 16Z" />
                    </svg>
                </div>
            </div>

            {{-- 2 --}}
            <div class="md:grid-cols-2 flex mt-10">
                <div class="">
                    <input type="text" id="hospitalName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Hospital Name" name="hospitalName2"
                        value="{{ $doctorInfo->histories[1]->hospitalName }}">
                </div>
                <div class="mx-6">
                    <input type="text" id="level"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="level" name="level2" value="{{ $doctorInfo->histories[1]->level }}">
                </div>
                <div>
                    <input type="date" id="startDate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Start Date" name="startDate2"
                        value="{{ $doctorInfo->histories[1]->startDate }}">
                </div>
                <div class="mx-6">
                    <input type="date" id="restDate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Rest Date" name="endDate2" value="{{ $doctorInfo->histories[1]->endDate }}">
                </div>
                <div>
                    <input type="text" id="exp"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Experience" name="exper2" value="{{ $doctorInfo->histories[1]->exper }}">
                </div>
            </div>

    <a href="/doctor"
        class="text-white py-3 px-6  ml-10 mr-3 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{ __('hospital.Back') }}
    </a>


    <button type="submit"
        class="text-white bg-blue-700 hover:bg-blue-800 mb-10 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        {{ __('room.save') }}
    </button>
    </form>

    </div>

</body>

</html>
