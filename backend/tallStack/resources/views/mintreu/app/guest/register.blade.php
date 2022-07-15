@extends('mintreu.themes.guest-panel.guest')
@section('content')

    <div class="relative flex text-gray-700 antialiased min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <!-- <img src="/img/beams.jpg" alt="" class="absolute top-1/2 left-1/2 max-w-none -translate-x-1/2 -translate-y-1/2" width="1308" /> -->
        <div class="absolute inset-0 bg-[url(/img/grid.svg)] bg-center [mask-image:linear-gradient(180deg,white,rgba(255,255,255,0))]"></div>
        <div class="relative bg-white px-6 pt-10 pb-8 text-center shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
            <span class="text-2xl font-semibold">Register To Your Account</span>
            <div class="mt-4 bg-white shadow-md rounded-lg text-left">
                <div class="h-2 bg-indigo-400 rounded-md"></div>
                <div class="px-8 py-6">
                    <label class="Block font-semibold">Username or Email</label>
                    <input type="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-400 rounded-md">


                    <label class="Block mt-3 font-semibold">Password</label>
                    <input type="password" placeholder="Password" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-400 rounded-md">

                    <label class="Block mt-3 font-semibold">Confirm Password</label>
                    <input type="password" placeholder="confirmPassword" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-400 rounded-md">


                    <div class="flex justify-between items-center">
                        <button type="submit" class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-md hover:bg-indigo-600 ">Register</button>
                        <a  href="#" class="text-sm hover:underline">Already Have An Account</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
