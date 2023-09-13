<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- SEO tags -->
        <meta name='robots' content='none' />
        {{-- <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' /> --}}
        <meta name="description" lang="ja-jp" content="日本語メタデスクリプション">
        {{-- <link rel="canonical" href="https://efct.sakura.ne.jp/site/" />
        <meta property="og:locale" content="ja_JP" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="立川福音自由教会 - 立川の正統的なプロテスタントのキリスト教会" />
        <meta property="og:description" content="立川福音自由教会は、正統的なプロテスタントのキリスト教会です。｢福音」とは、聖書を誤りなき神のことばと信じるという意味です。｢自由」とは、政治権力や組織的な強制からの自由を意味します。私たちの教会は、1989年から東京武蔵野福音自由教会の一会堂として礼拝を始め、1997年に独立しました。組織的には新しくても、教えにおいては、キリスト教会二千年来の伝統を大切にしており、安心していただけます。" />
        <meta property="og:url" content="https://efct.sakura.ne.jp/site/" />
        <meta property="og:site_name" content="立川福音自由教会" />
        <meta property="article:modified_time" content="2023-09-03T10:55:50+00:00" />
        <meta property="og:image" content="http://efct.sakura.ne.jp/site/wp-content/uploads/2018/10/stg_with_credit2-126x300.jpg" /> --}}

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>suzuki satomi | まだ見たことのない景色</title>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.12.3/dist/cdn.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400&M+PLUS+1p:wght@100&display=swap" rel="stylesheet">
        {{-- <script type="text/javascript" src="//webfonts.sakura.ne.jp/js/sakurav3.js"></script> --}}
        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/322d36de0e.js" crossorigin="anonymous"></script>
        <!-- tailwind vite -->
        @vite('resources/css/app.css') 
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-JMJRRL035H"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-JMJRRL035H');
        </script>

  
    </head>
    <body class="antialiased "> <!-- bg-slate-300 text-slate-500 dark:text-white -->

      @php
        $showmessage = 0;
        $notification_url = App\Models\Notification::checkForNotifications();
        if(strlen($notification_url) > 0) {
          $showmessage = 1;
        }

        $locale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
        // Config::set('global.locales', substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2));
        // echo "--".Config::get('global.locales')."--";
      @endphp

      <nav>
        <div class="fixed z-[100] opacity-100 w-full mb-10 bg-base-100">
          {{-- <section>
            <div x-data="{info: {{ $showmessage }}}" class="block">
              <p x-cloak x-show="info" class="text-center my-3 text-red-400 text-xl ">

                  <span x-show="$store.locale == 'ja'" class="text-center mb-6 font-['Zen_Maru_Gothic'] text-lg">お知らせ</span>
                <span x-show="$store.locale != 'ja'" class="text-center mb-6 font-['Montserrat'] text-lg font-[300]">notification</span>

                
                <a href="{{ $notification_url }}" target="_blank">
                  <span class="animate-pulse text-red-600"><i class="fa-solid fa-up-right-from-square pl-[10px]"></i></span>
                </a>
              </p>
            </div>
          </section> --}}
        <div class="navbar bg-base-100 "> <!-- bg-slate-400 -->
          <div class="navbar-start">
            <div class="dropdown">
              <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h22M4 13h22M4 20h22" /></svg>
              </label>
              <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="/" class="text-2xl font-[200]">portfolio</a></li>
                <li><a href="/about" class="text-2xl font-[200]">about</a></li>
                <li><a href="/books" class="text-2xl font-[200]">books</a></li>
                <li><a href="/contact" class="text-2xl font-[200]">contact</a></li>
                <li><a class="text-2xl font-[200]">blog</a></li>
              </ul>
            </div>
            <a class="btn btn-ghost normal-case text-xl hidden">daisyUI</a>
          </div>
          <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1  font-['Montserrat'] font-[300] text-xl">
              <li><a href="/" class="text-2xl font-[300] hover:animate-pulse">portfolio</a></li>
              <li><a href="/about" class="text-2xl font-[300] hover:animate-pulse">about</a></li>
              <li><a href="/books" class="text-2xl font-[300] hover:animate-pulse">books</a></li>
              <li><a href="/contact" class="text-2xl font-[300] hover:animate-pulse">contact</a></li>
              {{-- <li><a onclick="my_modal_1.showModal()" class="text-2xl font-[300] hover:animate-pulse">contact</a></li> --}}
              <li><a class="text-2xl font-[300] hover:animate-pulse">blog</a></li>
            </ul>
          </div>
          <div class="navbar-end hidden">
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      </nav>
 
      {{-- <main x-data="{info: {{ $showmessage }}}" class="fade-in">
        <div x-show="info" class="pt-[200px]">
          <h1 class="text-center text-5xl md:text-7xl font-['Montserrat'] font-[200]">{{ $title }}</h1>
          {{ $slot }}
        </div>
        <div x-show="!info" class="pt-[100px]">
          <h1 class="mb-8 text-center text-5xl md:text-7xl font-['Montserrat'] font-[200]">{{ $title }}</h1>
          {{ $slot }}
        </div>
      </main> --}}
      
      <main class="pt-[100px] fade-in">
        <h1 class="text-center text-5xl md:text-7xl font-en font-[200]">{{ $title }}</h1>
        {{ $slot }}
      </main>
      

      <footer class="footer footer-center pt-10 pb-10 fade-in">
        <div>
          <p class="text-lg font-en font-[200]">© 2023 suzuki satomi</p>
          <a href="https://www.instagram.com/satomi_szk/" target="_blank"><i class="fa-brands fa-instagram text-4xl hover:animate-pulse"></i></a>
        </div> 
       </footer>

      {{-- <dialog id="my_modal_1" class="modal">
        <form method="dialog" class="modal-box w-auto lg:w-[60%] max-w-5xl">
          <h3 class="font-['Montserrat'] text-2xl text-center mb-10 font-[300]">
            <div x-data>
              <i class="fa-regular fa-envelope"></i>
              <span x-show="$store.locale == 'ja'" class="pl-4 font-['Zen_Maru_Gothic']" >お問い合わせ</span>
              <span x-show="$store.locale != 'ja'" class="pl-4 font-['Montserrat']" >contact me</span>
            </div>
          </h3>

          <x-modal />
          {{-- <p class="py-4">Press ESC key or click the button below to close</p> --}}
          {{-- <div class="modal-action">
            <!-- if there is a button in form, it will close the modal -->
            <button class="btn">Close</button> --}}
          {{-- </div>
        </form>
      </dialog> --}}

      <script>
        document.addEventListener('alpine:init', () => {
          Alpine.store('locale', window.navigator.language)
        })
        document.head.querySelector('meta[name="description"]').content = `${window.navigator.language.substring(0,2) == 'ja' ? "日本語メタデスクリプション" : "English meta description"}`
      </script>

      <style type="text/css">
        [x-cloak] { 
          display: none !important; 
        }
        .fade-in {
          animation: fadeIn ease 4s;
          -webkit-animation: fadeIn ease 4s;
          -moz-animation: fadeIn ease 4s;
          -o-animation: fadeIn ease 4s;
          -ms-animation: fadeIn ease 4s;
        }
        @keyframes fadeIn {
          0% {
            opacity:0;
          }
          100% {
            opacity:1;
          }
        }
        @-moz-keyframes fadeIn {
          0% {
            opacity:0;
          }
          100% {
            opacity:1;
          }
        }
        @-webkit-keyframes fadeIn {
          0% {
            opacity:0;
          }
          100% {
            opacity:1;
          }
        }
        @-o-keyframes fadeIn {
          0% {
            opacity:0;
          }
          100% {
            opacity:1;
          }
        }
      </style>
    </body>
    
</html>