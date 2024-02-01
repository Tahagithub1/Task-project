<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
{{-- ---- --}}
    <style type="text/tailwindcss">
             .btn{
                @apply transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800
             }

             .link{
              @apply no-underline hover:underline text-sky-600
             }
             label{
                @apply block uppercase text-slate-700 mb-2
             }
             input,textarea{
                @apply bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full focus:outline-none bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white  dark:border-gray-700 rounded-lg
             }
             .error{
                @apply text-sm text-red-500 border-red-500
             }
             /* <div id="sec-search" class="my-10">
                        <input name="search" class="bg-white py-2 px-5 w-[300px] rounded-2xl  wow rubberBand" type="text" placeholder="دنبال چی میگردی ؟">
                        <button name="search_btn" class="bg-[#0E91E3] text-white py-2 px-7 rounded-2xl wow rubberBand" id="search">برو</button>
                   </div> */
    </style>
{{-- ---- --}}
</head>
<body class=" container mx-auto mt-10 mb-10 max-w-lg h-14 bg-gradient-to-r from-cyan-200 to-blue-400">

{{-- <h1 class="text-2xl">@yield('title')</h1> --}}
<div class="mb-4 text-2xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">@yield('title')</span> </div>

{{-- <div>
    @if(session()->has('success'))
<div>{{ session('success') }}</div>
    @endif
</div> --}}

<div>
    @if (session()->has('success'))
      <div id="show"
      class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-2  text-green-500   hover:bg-green-100"
      role="alert">
        <strong class="font-bold">Success!</strong>
        <div>{{ session('success') }}</div>

                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3" id="hide">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor" class="h-6 w-6 cursor-pointer">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                    </span>

      </div>
    @endif

    {{-- <div x-data="{ flash: true }" >
        @if (session()->has('success'))
          <div x-show="flash"
          class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-2  text-green-500   hover:bg-green-100"
          role="alert">
            <strong class="font-bold">Success!</strong>
            <div>{{ session('success') }}</div>
                                        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" @click="flash = false"
                                            stroke="currentColor" class="h-6 w-6 cursor-pointer">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                        </span>

          </div>
        @endif --}}




<p>@yield('content')</p>

</body>
</html>

<script>
    $("#hide").click(function(){
        $("#show").hide(500);
    });

    // function dropdown() {
    //     return {
    //         show: false,
    //         open() { this.hide = true },
    //     }
    // }
</script>
