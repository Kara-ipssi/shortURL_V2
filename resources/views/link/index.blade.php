@extends('layouts.guest')

@section('title', 'Home : ShortURL') 

@section('header')
    <div class="text-center">
        <div class="min-h-[120px] flex justify-center items-center">
            <a href="{{route('link.index')}}" class="text-[49px] font-black text-blue-500 tracking-[-1px] drop-shadow-lg break-words">
                Shortme.biz
            </a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container mx-auto">
        <div class="max-w-[900px] mx-auto pb-20">
            <div class="flex flex-col justify-center items-center">
                <section id="urlbox" class="w-full">
                    <div class="bg-white shadow-lg rounded px-8 mb-4 flex flex-col h-[270px] items-center justify-center ">
                        <h1 class=" px-auto pb-[15px] font-bold text-[30px] text-[#555] tracking-[-1px]">
                            Paste the URL to be shortened
                        </h1>
                        <form action="{{route('link.new')}}" method="post">
                            @csrf
                            @method('POST')
                            <div class="flex w-[620px]">
                                <input class="shadow appearance-none border rounded-l w-full h-[58px] py-2 px-3 text-gray-700 leading-tight" value="{{old('url')}}" id="url" name="url" type="text" placeholder="Enter the url text here..." required>
                                
                                <div class="flex items">
                                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r h-[58px] w-[150px]" type="submit">
                                        Shorten URL
                                    </button>
                                </div>
                            </div>
                            @if ($errors->has('url'))
                                @foreach ($errors->get('url') as $error)
                                    <div class="text-red-500 text-sm pl-1">{{ $error }}</div>
                                @endforeach            
                            @endif
                        </form>
                        <p class="max-w-[620px] mt-[10px] mx-auto text-center">
                            ShortURL, a free tool for optimizing links. Easily create concise URLs with our <br/>
                            advanced shortener, enhancing accessibility and boosting SEO performance for seamless sharing.
                        </p>

                    </div>
                </section>
                <section id="create-account" class="w-full">
                    <div class="bg-white shadow-lg rounded px-8 mb-4 gap-4 flex flex-col justify-center items-center h-[270px]">
                        <h2 class="px-auto font-bold text-[26px] text-[#555] tracking-[-1px] text-center">
                            Looking for advanced functionality? Discover premium features!
                        </h2>
                        
                        <p class="max-w-[620px] mx-auto text-center">
                            Enhance your online presence with custom short links, a powerful dashboard, detailed analytics, API access, UTM builder, seamless app integrations, and dedicated support.
                        </p>

                        {{-- <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold text-center py-[18px] rounded w-[150px]"> --}}
                        <a title="comming soon" class="bg-gray-300 cursor-not-allowed text-white font-bold text-center py-[18px] rounded w-[150px]">
                            Create Account
                        </a>
                    </div>
                </section>
                <section id="infos" class="w-full">
                    <h2 class="font-bold text-[26px] mt-0 mx-0 mb-[10px]">
                        Streamline and accelerate your links with our quick and easy URL shortener for optimal efficiency!
                    </h2>
                    <p class="text-[17px] text-left py-0 pr-0 pl-[2px]"> 
                        <a class="text-indigo-500 font-bold" href="https://www.instagram.com/" target="_blank">Instagram</a>,
                        <a class="text-indigo-500 font-bold" href="https://www.facebook.com/" target="_blank">Facebook</a>, 
                        <a class="text-indigo-500 font-bold" href="https://www.youtube.com/" target="_blank">YouTube</a>,
                        <a class="text-indigo-500 font-bold" href="https://www.twitter.com/" target="_blank">Twitter</a>,
                        <a class="text-indigo-500 font-bold" href="https://www.linkedin.com/" target="_blank">LinkedIn</a>,
                        <a class="text-indigo-500 font-bold" href="https://whatsapp.com" target="_blank">WhatsApp</a>,
                        <a class="text-indigo-500 font-bold" href="https://www.tiktok.com/" target="_blank">TikTok</a>,
                        blogs, 
                        and websites. Easily paste your long URL, click 'Shorten URL,' 
                        and share the concise link across platforms, chats, and emails. Monitor 
                        its performance by <a href="#" class="link" target="_blank">tracking the number of clicks post-shortening</a>.
                    </p>
                    <h2 class="font-bold text-[26px] mt-10 mx-0">
                        Condense, distribute, and monitor your links efficiently!
                    </h2>
                    <p class="text-[17px] text-left py-0 pr-0 pl-[2px]">
                        Leverage your concise URLs across publications, documents, ads, blogs, forums, instant messages, and more. Gain valuable insights into your business and projects by tracking hit statistics through our advanced click counter for URLs.
                    </p>
                </section>
                <section id="picto" class="grid grid-rows-2 grid-cols-3 max-sm:grid-cols-2 gap-[30px] max-w-full mt-[50px] mx-auto">
                    <div class="flex flex-col text-center">
                        <img src="{{ asset('icons/good.png') }}" alt="Shorten" class="w-[100px] h-[100px] mx-auto">
                        <h3 class="font-bold text-[20px] mt-[10px]">Easy</h3>
                        <p class="text-[17px] mt-[10px]">Effortlessly shorten your links with ShortURL by entering your long URL to swiftly receive a concise and optimized link.</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img src="{{ asset('icons/link.png') }}" alt="Shorten" class="w-[100px] h-[100px] mx-auto">
                        <h3 class="font-bold text-[20px] mt-[10px]">Shortened</h3>
                        <p class="text-[17px] mt-[10px]">ShortURL effortlessly shortens any link, regardless of its size.</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img src="{{ asset('icons/lock.png') }}" alt="Shorten" class="w-[100px] h-[100px] mx-auto">
                        <h3 class="font-bold text-[20px] mt-[10px]">Secure</h3>
                        <p class="text-[17px] mt-[10px]">Swift and secure, our service employs the HTTPS protocol and data encryption for enhanced protection.</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img src="{{ asset('icons/chart.png') }}" alt="Shorten" class="w-[100px] h-[100px] mx-auto">
                        <h3 class="font-bold text-[20px] mt-[10px]">Statistics</h3>
                        <p class="text-[17px] mt-[10px]">Monitor the click count for your shortened URL.</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img src="{{ asset('icons/remove.png') }}" alt="Shorten" class="w-[100px] h-[100px] mx-auto">
                        <h3 class="font-bold text-[20px] mt-[10px]">Reliable</h3>
                        <p class="text-[17px] mt-[10px]">Any links attempting to spread spam, viruses, or malware will be promptly deleted.</p>
                    </div>
                    <div class="flex flex-col text-center">
                        <img src="{{ asset('icons/device.png') }}" alt="Shorten" class="w-[100px] h-[100px] mx-auto">
                        <h3 class="font-bold text-[20px] mt-[10px]">Devices</h3>
                        <p class="text-[17px] mt-[10px]">Compatible across smartphones, tablets, and desktop devices.</p>
                    </div>
                    <div class="flex flex-col text-center"></div>
                    <div class="flex flex-col text-center"></div>
                    <div class="flex flex-col text-center"></div>
                    <div class="flex flex-col text-center"></div>
                    <div class="flex flex-col text-center"></div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="absolute bottom-0 w-full">
        @include('partials.footer')
    </div>
@endsection
