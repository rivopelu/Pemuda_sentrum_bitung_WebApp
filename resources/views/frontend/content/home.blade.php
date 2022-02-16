@extends('../../frontend')

@include('frontend/components/togledark')
@section('content')
    <!----------------------------home Section  -------------------------------------------->
    <section class="min-h-screen bg-cover bg-center home_section" style="background: url(img/elevation-worship-christian-music\ \(1\).gif) fixed;background-repeat: repeat;
    margin-left: auto;
    margin-right: auto;
    background-size: 100%; ">
        <div
            class="min-h-screen bg-white dark:bg-slate-800 lg:bg-black/50 dark:lg:bg-black/50 lg:w-full flex justify-center">
            <div class="container   flex flex-col w-full items-center justify-center ">
                <h1 class="text-center text-4xl mx-auto font-bold lg:text-5xl  lg:text-white uppercase dark:text-white">
                    Pemuda Gmim
                    Sentrum Bitung</h1>
                <h3 class="text-center text-2xl mx-auto font-bold  lg:text-white uppercase dark:text-white">Wil. Bitung
                    Satu</h3>
                <img src="img/logo-besar.png" alt="" class="w-40 pt-3 mb-3">
                <p class="text-center  mx-8 lg:mx-28   lg:text-white  dark:text-white">Lorem ipsum dolor sit amet
                    consectetur, adipisicing elit. Aut quo sapiente dicta nesciunt. Similique, asperiores maiores sit
                    alias aliquam sunt molestiae necessitatibus natus delectus rerum quos officia, architecto temporibus
                    obcaecati neque atque iste. Et unde neque rerum atque natus </p>


                <a href="#"
                    class="bg-purple-600 py-1 px-3 rounded-full text-white hover:bg-purple-900 mt-3 dark:bg-black/20 border-2 dark:hover:bg-black/40 lg:bg-black/20 lg:hover:bg-black/40">Informasi
                    Pelayanan</a>

            </div>
        </div>
    </section>
@endsection