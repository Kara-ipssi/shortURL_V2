@extends('layouts.guest')

@section('title', 'Home : ShortURL')


@section('header')
    {{-- header --}}
    <header class="text-center shadow bg-white">
        <div class="min-h-[120px] flex justify-center items-center">
            <a href="{{route('link.index')}}" class="text-[49px] font-black text-blue-500 tracking-[-1px] drop-shadow-lg break-words">
                Shortme.biz
            </a>
        </div>
    </header>
@endsection

@section('content')
    {{-- main --}}
    @if (session()->has('success') && session('success'))
        <div class="container mx-auto bg-gray-100"> 
            <div class="max-w-[750px] mx-auto">
                <div class="my-5">
                    <h1 class=" px-auto font-bold text-[30px] text-[#555] tracking-[-1px]">
                        Your shortened URL
                    </h1>
                    <h2>
                        Copy the short link and share it in messages, texts, posts, websites and other locations.
                    </h2>
                    {{-- ballon section --}}
                    <div id="balloon-box" class="hidden bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-4" role="alert">
                        <strong class="font-bold">Copied!</strong>
                        <span class="block sm:inline">The URL has been copied to your clipboard.</span>
                    </div>
                </div>
                
                <div class="flex flex-col justify-center items-center relative">
                    <section id="urlbox" class="w-full">
                        <div class="bg-white shadow-lg rounded px-8 mb-4 flex flex-col h-[270px] items-center justify-center">
                            <div class="flex w-[620px]">
                                <input id="urlInput" class="shadow appearance-none border rounded-l w-full h-[58px] py-2 px-3 text-gray-700 leading-tight" value="{{session('short_url')}}" id="url" name="url" type="text" placeholder="Enter the url text here..." required>
                                
                                <div class="flex items">
                                    <button id="copyBtn" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r h-[58px] w-[150px]" type="submit">
                                        Copy URL
                                    </button>
                                </div>
                            </div>
                        
                            
                            <div class="max-w-[620px] mt-[10px] mx-auto text-left w-full">
                                <p class="mb-2">Long URL : 
                                    <a class="text-blue-600 hover:text-blue-900" target="_blank" href="{{session('link')->url}}">{{session('link')->url}}</a>
                                </p>
                                <div class="flex flex-col items-start gap-2">
                                    <a href="#" class="p-3 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">Total of clicks of your short URL</a>
                                    <a href="#" class="p-3 bg-blue-500 text-white font-bold rounded hover:bg-blue-700">Shorten another URL</a>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
                
            </div>
        </div>
    @else
        <div class="container mx-auto bg-gray-100"> 
            <div class="max-w-[750px] mx-auto">
                <div class="my-5 flex flex-col gap-5">
                    <div>
                        <h1 class=" px-auto font-bold text-[30px] text-[#555] tracking-[-1px]">
                            An error occurred creating the short URL
                        </h1>
                        <h2>
                            The URL has not been shortened, possible errors:
                        </h2>
                    </div>
                    @include('partials.error-list')
                </div>
                <div class="mt-10">
                    <a class="p-3 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-md" href="{{route('link.index')}}">
                        Go back and try again
                    </a>
                </div>
            </div>
        </div>
    @endif

    
    {{-- ned main --}}

    <script>
        // Copy URL
        const copyBtn = document.querySelector('#copyBtn');
        const balloon = document.getElementById('balloon-box');
        const url = document.querySelector('#urlInput');
        copyBtn.addEventListener('click', () => {
            url.select();
            document.execCommand('copy');
            balloon.classList.remove('hidden');
            setTimeout(() => {
                balloon.classList.add('hidden');
            }, 3000);
        });
    </script>
@endsection

@section('footer')
    {{-- footer --}}
    <div class="absolute bottom-0 w-full">
        @include('partials.footer')
    </div>
@endsection