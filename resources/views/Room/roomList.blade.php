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
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>


    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>

    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-900 dark:bg-gray-800">
            <h3 class="text-2xl text-white text-center mt-8">{{ __('hospital.title') }}</h3>
            <ul class="space-y-2 font-medium">
                <li class="my-8 bg-gray-100 rounded-lg">
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3 text-black">{{ __('hospital.dashboard') }}</span>
                    </a>
                </li>
                <li class="mt-10">
                    <a href="/doctor"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap text-white hover:text-black">{{ __('hospital.Dr.list') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">
        <div class="flex flex-col">

            <div class="flex flex-row">
                {{-- room table --}}
                <div class="relative overflow-x-auto pt-10 w-1/2 mx-10">
    
                    <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 bg-red-500 text-white text-lg capitalize flex items-center">
                                    <span class="iconify" style="font-size: 1.5rem;"
                                        data-icon="mdi:bed-queen-outline"></span>
                                    <span class="ml-2 font-normal">{{ __('room.title') }}</span>
                                </th>
                                <th scope="col" class="px-6 py-3 bg-red-500"></th>
                                <th scope="col" class="px-6 py-3 bg-red-500"></th>
                                <th scope="col" class="px-6 py-3 bg-red-500"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rooms as $rm)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $rm->roomNumber }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $rm->status }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $rm->total }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-black">${{ $rm->price }}</span>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    <a href="/room">
                        <button
                            class="btn bg-red-500 py-1 px-6 rounded-sm text-white mt-3 m-5 float-right">{{ __('room.see') }}</button>
                    </a>
                </div>
    
                {{-- message Table --}}
                <div class="relative overflow-x-auto w-1/2 mx-8 mt-5">
                    <span class="float-right mb-5 underline">
                        <a href="/lang/mm" class="">{{ __('hospital.Myanmar') }}</a>
                        <a href="/lang/en" class="mx-10">{{ __('hospital.English') }}</a>
                        <a href="/lang/jp">{{ __('hospital.Japan') }}</a>
                    </span>
                    <table class="table-auto w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-900 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3" colspan="2">
                                    <span class="font-normal-100 text-lg capitalize flex items-center">
                                        <span class="iconify mr-2" style="font-size: 1.5rem;"
                                            data-icon="ion:mail-unread-outline"></span>
                                        {{ __('message.title') }}
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($messages as $meg)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        <span>
                                            {{ $meg->texts }}
                                        </span>
                                        <span class="float-right">
                                            {{ date('g:i A', strtotime($meg->created_at)) }}
                                        </span>
    
                                        <div class="flex items-center">
                                            @if ($meg->type === 'VIP')
                                                <span class="mr-2 flex items-center mt-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg"class="w-6 h-6 text-orange-500"
                                                        viewBox="0 0 512 512">
                                                        <path fill="currentColor"
                                                            d="M80 480a16 16 0 0 1-16-16V68.13a24 24 0 0 1 11.9-20.72C88 40.38 112.38 32 160 32c37.21 0 78.83 14.71 115.55 27.68C305.12 70.13 333.05 80 352 80a183.84 183.84 0 0 0 71-14.5a18 18 0 0 1 25 16.58v219.36a20 20 0 0 1-12 18.31c-8.71 3.81-40.51 16.25-84 16.25c-24.14 0-54.38-7.14-86.39-14.71C229.63 312.79 192.43 304 160 304c-36.87 0-55.74 5.58-64 9.11V464a16 16 0 0 1-16 16Z" />
                                                    </svg>
                                                    <span class="text-warning fw-bold">{{ __('message.VIPmessage') }}</span>
                                                </span>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
    
                        </tbody>
                    </table>
                    <a href="/message">
                        <button class="border border-gray-700 text-black-400 px-4 py-1 rounded-sm mt-3 float-right">
                            {{ __('message.read') }}
                        </button>
                    </a>
                </div>
            </div>
    
            <div class="flex flex-row">
                {{-- drug --}}
                <div class="relative overflow-x-auto w-1/2 pt-5 mx-10 mb-10">
                    <table class="w-full text-sm text-left text-white-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-teal-800 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3" colspan="4">
                                    <span class="font-normal-100 text-lg font-normal capitalize flex items-center">
                                        <span class="iconify mr-2" style="font-size: 1.5rem;"
                                            data-icon="ant-design:medicine-box-filled"></span>
                                        {{ __('drug.title') }}
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($drugs as $dg)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $dg->drugName }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $dg->amount }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $dg->stock }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span class="font-black">${{ $dg->eachPrice }}/per item</span>
                                    </td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                    <a href="/drug">
                        <button class="bg-teal-800 text-white px-4 py-1 rounded-sm mt-3 float-right">
                            {{ __('drug.check') }}
                        </button>
                    </a>
                </div>
    
                {{-- appointment --}}
                <div class="relative overflow-x-auto w-1/2 pt-5 mx-8">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-white uppercase bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3" colspan="3">
                                    <span class="font-normal-100 text-lg font-normal capitalize flex items-center">
                                        <span class="iconify mr-2" style="font-size: 1.5rem;"
                                            data-icon="material-symbols:date-range"></span>
                                        {{ __('appoint.title') }}
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($points as $point)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        Dr.{{ $point->docName }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $point->roomNo }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $point->date }}
                                    </td>
    
    
                                </tr>
                            @empty
                            @endforelse
    
                        </tbody>
                    </table>
                    <a href="/point">
                        <button class="bg-gray-900 text-white px-5 py-1 rounded-sm mt-3 float-right">
                            {{ __('room.see') }}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>

    
</body>

</html>
