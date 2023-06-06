<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>Room All</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative overflow-x-auto m-4">
        <span class="text-xl font-medium ml-2">{{trans_choice('room.page',$roomPage)}}</span>
        <a href="/room/create">
            <button class="btn bg-red-500 py-1 px-6 rounded-lg text-white my-3 ml-2 float-right">{{ __("room.Add") }}</button>
        </a>
        <a href="/home">
            <button class="btn bg-red-500 py-1 px-6 rounded-lg text-white my-3 float-right">{{ __("hospital.Back") }}</button>
        </a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-red-500 text-white text-lg capitalize flex items-center">
                        <span class="iconify" style="font-size: 1.5rem;" data-icon="mdi:bed-queen-outline"></span>
                        <span class="ml-2 font-normal-100">{{ __("room.title") }}</span>
                    </th>
                    <th scope="col" class="px-6 py-3 bg-red-500"></th>
                    <th scope="col" class="px-6 py-3 bg-red-500"></th>
                    <th scope="col" class="px-6 py-3 bg-red-500"></th>
                    <th scope="col" class="px-6 py-3 bg-red-500" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rooms as $rm)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row"
                            class="px-6 py-4 font-bold text-blue-900 whitespace-nowrap underline dark:text-white">
                            <img src="{{ asset('storage/'.$rm->r_photo) }}" class="w-20 my-5 max-w-xl rounded-lg">
                            <a href="/room/{{ $rm->id }}">
                                {{ $rm->roomNumber }}
                            </a>
                        </td>
                        <td class="px-6 py-4">
                            {{ $rm->status }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $rm->total }}
                        </td>
                        <td class="px-6 py-4">
                            <span class="font-black">${{ $rm->price }}</span>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="/room/{{ $rm->id }}/edit">
                                <span class="text-blue-900 underline font-bold">
                                    {{ __("hospital.edit") }}
                                </span>
                            </a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <form action="/room/{{ $rm->id }}/" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="ml-4 text-red-800 underline font-bold">
                                    {{ __("hospital.delete") }}
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse


            </tbody>

        </table>
        <div class="mt-4">
            {{ $rooms->links() }}
        </div>
    </div>


</body>

</html>
