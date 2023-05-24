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
    <title>{{ __('drug.check') }}  </title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="">
        {{-- drug --}}
        <div class="relative overflow-x-auto pt-5 mx-10 m-5">
            <span class="text-xl font-medium ml-2">{{trans_choice('drug.page',$drugPage)}}</span>
            <a href="/drug/create" class="mb-20">
                <button class="bg-teal-800 text-white flex items-center px-4 py-1 rounded-lg mt-3 mb-3 float-right">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2 text-white" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M2 11.999c0-5.523 4.477-10 10-10s10 4.477 10 10s-4.477 10-10 10s-10-4.477-10-10ZM12 8a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0v-2H9a1 1 0 1 1 0-2h2V9a1 1 0 0 1 1-1Z" clip-rule="evenodd"/></svg>
                    {{ __('drug.addDrug') }}
                </button>
            </a>
            <a href="/home">
                <button class="border bg-teal-800 text-white px-4 py-1 rounded-lg mt-3 mr-3 float-right">
                    {{ __('hospital.Back') }}
                </button>
            </a>
            <table class="w-full text-sm text-left text-white-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-teal-800 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3" colspan="6">
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
                                class="px-6 py-4 underline text-blue-900 font-bold whitespace-nowrap dark:text-white">
                                <a href="/drug/{{ $dg->id }}">
                                {{ $dg->drugName }}
                            </a>
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

                            <td class="px-6 py-4 text-center">
                                <a href="/drug/{{ $dg->id }}/edit">
                                    <span class="text-blue-900 underline font-bold">{{ __('hospital.edit') }}</span>
                                </a>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form action="/drug/{{ $dg->id }}" method="post">
                                    @method("DELETE")
                                    @csrf
                                    <button type="submit" class="ml-4 text-red-800 underline font-bold">
                                        {{ __('hospital.delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                        
                    @empty
                    @endforelse
                </tbody>
            </table>
            
            <div class="mt-4">
                {{ $drugs->links() }}
            </div>
        </div>

        
</body>

</html>
