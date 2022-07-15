@extends('mintreu.themes.guest-panel.guest')
@section('content')

    <div class="flex  h-screen">


        <div class="m-auto your-element">

            <h1 class="text-orange-600 text-2xl font-bold text-center"> Forget Password</h1>
            <label class="Block font-semibold">Email</label>
            <input type="email" placeholder="Email" class="border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-400 rounded-md">


            <div class="mt-8 text-center">
                <button type="button" data-mdb-ripple="true"  data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 w-full bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">Send Code</button>

            </div>
        </div>

    </div>

@endsection
