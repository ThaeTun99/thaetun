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
    <title>{{ __('hospital.Dr.list') }}</title>
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
                <li class="my-8">
                    <a href="/home"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3 text-white  hover:text-black">{{ __('hospital.dashboard') }}</span>
                    </a>
                </li>
                <li class="mt-10 bg-gray-100  rounded-lg">
                    <a href="/doctor/create"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                            </path>
                        </svg>
                        <span class="flex-1 ml-3 whitespace-nowrap text-black hover:text-black">{{ __('hospital.Dr.list') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64">

        <div class="relative overflow-x-auto">
            <a href="/doctor/create">
                <button class="bg-blue-800 rounded-lg px-8 py-1 text-white mb-5 float-right">{{ __('appoint.add') }}</button>
            </a>

            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tr class="text-lg text-white bg-gray-900 dark:bg-gray-700 dark:text-gray-400">
                    <td scope="col" class="px-6 py-3">
                        {{ __('appoint.Drname') }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ __('hospital.age') }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ __('hospital.address') }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ __('hospital.phone') }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ __('hospital.special') }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ __('hospital.experience') }}
                    </td>
                    <td scope="col" class="px-6 py-3">
                        {{ __('hospital.liscen') }}
                    </td>
                    <td scope="col" class="px-6 py-3" colspan="2">
                    </td>
                </tr>
                <tbody>
                    @forelse ($doctor as $dr)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">
                                Dr.{{ $dr->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $dr->age }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $dr->address }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $dr->phone }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $dr->doctorInfo->special }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $dr->doctorInfo->experience }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $dr->doctorInfo->Liscen }}
                            </td>
                            <td class="px-6 py-4 text-green-700 underline font-bold">
                                <a href="/doctor/{{ $dr->id }}/edit">
                                    {{ __('hospital.edit') }}
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form action="/doctor/{{ $dr->id }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="ml-4 text-red-800 underline font-bold">
                                        {{ __('hospital.delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
    </div>

    <div class="mt-4 mr-5">
        {{ $doctor->links()}}
    </div>
</body>

</html>
