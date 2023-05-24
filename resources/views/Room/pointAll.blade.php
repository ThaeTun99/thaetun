<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <title>{{ __("room.see") }}</title>
    @vite('resources/css/app.css')
</head>

<body>
        {{-- appointment --}}
        <div class="relative overflow-x-auto pt-5 mx-8">
            <span class="text-xl font-medium ml-2">{{trans_choice('appoint.page',$pointPage)}}</span>
            <a href="/point/create" class="mb-20">
                <button class="bg-gray-900 text-white flex items-center px-5 py-1 rounded-lg mt-3 m-5 mt-3 float-right">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-white" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M2 11.999c0-5.523 4.477-10 10-10s10 4.477 10 10s-4.477 10-10 10s-10-4.477-10-10ZM12 8a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2H9a1 1 0 1 1 0-2h2V9a1 1 0 0 1 1-1Z" clip-rule="evenodd"/></svg>
                    {{ __("appoint.add") }}
                </button>
            </a>
            <a href="home" class="mb-20">
                <button class="bg-gray-900 text-white flex items-center px-5 py-1 rounded-lg mt-3 mt-3 float-right">
                    {{ __("hospital.Back") }}
                </button>
            </a>
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3" colspan="5">
                            <span class="font-normal-100 text-lg font-normal capitalize flex items-center">
                                <span class="iconify mr-2" style="font-size: 1.5rem;"
                                    data-icon="material-symbols:date-range"></span>
                                    {{ __("appoint.title") }}

                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($points as $point)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <a href="/point/{{ $point->id }}" class="underline text-blue-900 font-bold">
                                Dr.{{ $point->docName }}
                            </a>
                        </th>
                        <td class="px-6 py-4">
                            {{ $point->roomNo }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $point->date }}
                        </td>
                        
                        <td class="px-6 py-4 text-center">
                            <a href="/point/{{ $point->id }}/edit">
                                <span class="text-green-500 underline font-bold">{{ __("hospital.edit") }}
                                </span>
                            </a>
                        </td>
                        <td class="py-4 text-center">
                            <form action="/point/{{ $point->id }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="ml-4 text-red-600 underline font-bold">
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
                {{ $points->links() }}
            </div>
        </div>
    </div>
</body>

</html>
