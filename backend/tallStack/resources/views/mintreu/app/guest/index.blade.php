@extends('mintreu.themes.guest-panel.guest')
@section('content')

    <div class="flex  h-screen">

       <div class="m-auto your-element">
           <h1 class="text-orange-600 text-8xl text-center"> Mintreu</h1>

           <div class="mt-8 text-center">
               <button type="button" data-mdb-ripple="true"  data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">{{ trans('Get Started') }}</button>
               <button type="button" data-mdb-ripple="true"  data-mdb-ripple-color="light" class="inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out">Know More</button>
           </div>
       </div>

    </div>

@endsection
