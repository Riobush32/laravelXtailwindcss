<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>

    {{-- header strart  --}}
    <header class="bg-transparent w-full absolute top-0 left-0 flex intems-center z-10">
        <div class="container">
            <div class="flex justify-between items-center relative">
                <div class="px-4 flex">
                    <div class="width-{70px} pt-4">
                        <img src="{{ asset('img/Group_1-removebg-preview.png') }}" alt="" width="70">
                    </div>

                    <a href="#home" class="font-bold text-lg text-primary block py-6">Snack.Id</a>
                </div>
                <div class="flex items-center px-4 mr-2">
                    <button id="humberger" name="humberger" class="block absolute right-4:button lg:hidden">
                        <span class="hamberger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamberger-line transition duration-300 ease-in-out"></span>
                        <span class="hamberger-line transition duration-300 ease-in-out origin-top-left"></span>
                    </button>

                    <nav id="nav-menu"
                        class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="blok lg:flex">
                            <li class="group">
                                <a href="#home"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#about"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Tentang Saya</a>
                            </li>
                            <li class="group">
                                <a href="#portfolio"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="#cliens"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Cliens</a>
                            </li>
                            <li class="group">
                                <a href="#blog"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#contact"
                                    class="text-base flex text-dark py-2 mx-8 group-hover:text-primary">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    {{-- header end --}}

    {{-- banner start  --}}
    <div class="container realtive mt-[200px]">
        <div class="w-full">
            <img src="{{ asset('img/Group_1-removebg-preview.png') }}" alt="">
        </div>
        <div class="w-full">
            <h1 class="font-bold text-4xl text-primary">Lorem ipsum dolor sit amet.</h1>
            <div class="flex mt-3">
                <div class="flex flex-wrap h-[100px] w-1/2 items-center">
                    <div class="w-full">
                        <hr class="h-2 border-5 border-slate-300 block w-[70%] ">
                    </div>
                    
                    <h3 class="font-semibold text-xl block text-dark">#1</h3>
                </div>
                <div class="w-1/2">
                    <p class="font-base text-sm text-secondary mb-5 mt-[15px]">Lorem, ipsum dolor sit amet consectetur adipisicing
                        elit. Sequi quae, </p>

                    <a href="#"
                        class="text-base font-semibold mt-5 text-white bg-primary py-3 px-8 rounded-md hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Mulai
                        Belanja</a>
                </div>
            </div>

        </div>
    </div>
    {{-- banner end  --}}


    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
