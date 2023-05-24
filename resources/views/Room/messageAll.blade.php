<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <title>{{ __('message.read') }}  </title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative overflow-x-auto m-5">
        <span class="text-xl font-medium ml-2">{{trans_choice('message.page',$messagePage)}}</span>
        <a href="/message/create">
            <button class="border bg-gray-400 text-black-400 px-4 py-1 rounded-sm mr-2 my-3 float-right">
                {{ __("message.addMessage") }}
            </button>
        </a>
        <a href="/home">
            <button class="border bg-gray-400 text-black-700 px-4 py-1 rounded-sm mt-3 my-3 mr-2 float-right">
                {{ __("hospital.Back") }}
            </button>
        </a>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 mt-3">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-2" colspan="4">
                        <span class="font-normal-100 text-lg font-normal-100 capitalize flex items-center">
                            <span class="iconify mr-2" style="font-size: 1.5rem;" data-icon="ion:mail-unread-outline"></span>
                            {{ __("message.title") }}
                        </span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($messages as $meg)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 py-2">
                        <td class="py-3 px-6">
                            <a href="/message/{{ $meg->id }}" class="underline text-blue-900 font-bold">
                            <span>
                                {{ $meg->texts }}
                            </span>
                            </a>
                            <div class="flex items-center">
                                @if ($meg->type === 'VIP')
                                    <span class="mr-2 flex items-center mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"class="w-6 h-6 text-orange-500" viewBox="0 0 512 512"><path fill="currentColor" d="M80 480a16 16 0 0 1-16-16V68.13a24 24 0 0 1 11.9-20.72C88 40.38 112.38 32 160 32c37.21 0 78.83 14.71 115.55 27.68C305.12 70.13 333.05 80 352 80a183.84 183.84 0 0 0 71-14.5a18 18 0 0 1 25 16.58v219.36a20 20 0 0 1-12 18.31c-8.71 3.81-40.51 16.25-84 16.25c-24.14 0-54.38-7.14-86.39-14.71C229.63 312.79 192.43 304 160 304c-36.87 0-55.74 5.58-64 9.11V464a16 16 0 0 1-16 16Z"/></svg>
                                        <span class="text-warning fw-bold">{{ __('message.VIPmessage') }}</span>
                                    </span>
                                @endif
                            </div>
                        </td>
                        <td class="">
                            <span class="float-right">
                                {{ date('g:i A', strtotime($meg->created_at)) }}
                            </span>
                        </td>

                        <td class="px-6 py-4 text-center">
                            <a href="/message/{{ $meg->id }}/edit">
                                <span class="text-blue-900 underline font-bold">{{ __("hospital.edit") }}</span>
                            </a>
                        </td>
                        <td class="py-4 text-center">
                            <form action="/message/{{ $meg->id }}" method="post">
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
            {{ $messages->links() }}
        </div>
    </div>


</body>

</html>
