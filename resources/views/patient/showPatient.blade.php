<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Patients' Datas</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-300">

    <div class="max-w-sm mx-auto  mt-10 p-6 bg-white
    text-gray-700 border justify-center  border-gray-200 
    rounded-lg justify shadow dark:bg-gray-800 dark:border-gray-700">
        <div class="my-auto mb-10">
            <p> Name : <span class="text-black font-bold">{{ $patients->p_name }}</span></p>
            <p class="py-5"> Age : <span class="text-black font-bold">{{ $patients->p_age }}</span>
            </p>
            <p> Address : <span class="text-black font-bold">{{ $patients->p_address }}</span></p>
            <p class="py-5"> Phone : <span class="text-black font-bold">{{ $patients->p_phone }}</span></p>
            <p> Gender : <span class="text-black font-bold">{{ $patients->gender }}</span></p>
    
            <p class="py-5 mt-10"> Selected Doctors
                @foreach ($patients->doctors as $doctor)
                <p class="text-black font-bold">{{ $doctor->name }}</p><br>
                @endforeach
            </p>
        </div>
        <a href="/patient" class="text-center mt-10">
            <button class="bg-blue-700 px-8 py-2 text-white rounded hover:bg-blue-900 mb-10 text-center">
                {{ __('hospital.Back') }}
            </button>
        </a>
    </div>


</body>

</html>
