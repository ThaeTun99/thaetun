@extends('Room.app')
@section('title', 'Home')
@section('header', '---Everyone wants Peace---')


@section('guide')
    <div class="mb-5">
        <p class="text-gray-700">The username <span class="text-red-800 font-bold">must end</span> with 4 digits.</p>
        <p>The username of <span class="text-red-800 font-bold"> first 2 letter must be Uppercase.</span></p>
        <p><span class="text-2xl font-semibold">*</span> means <span  class="text-red-800 font-bold" >require.</span></p>
    </div>
@endsection

@section('body')
    <form action="/signup" method="post">
        @csrf

        <div class="mb-6">
            <label for="username" class="block mb-2 text-sm font-bold dark:text-white">Your
                Name *</label>
            <input type="text" id="username"
                class="bg-gray-100 border rounded-lg text-xl font-bold border-gray-200 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white focus:outline-none"
                name="username">
            @error('username')
                <li class="text-red-800 font-bold text-xl">{{ $message }}</li>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password" class="block mb-2 text-sm font-bold dark:text-white">Your
                password *</label>
            <input type="password" id="password"
                class="bg-gray-100 border rounded-lg text-xl font-bold border-gray-200 text-gray-900 text-sm block w-full p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white focus:outline-none"
                name="password">
            @error('password')
                <li class="text-red-800 font-bold text-xl">{{ $message }}</li>
            @enderror
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-bold rounded-lg text-sm w-full sm:w-auto px-10 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Sign Up
        </button>
    </form>


    </div>
@endsection
