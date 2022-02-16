@extends('../../frontend')



@section('content')

    @include('frontend/components/togledark')
    <section class="min-h-screen pt-16 " id="info">
        <!-- title -->
        <h1 class="title text-2xl  md:text-4xl uppercase font-bold mb-5 text-center mx-3 lg:mx-0 lg:text-4xl">
            <span class="dark:text-white">Informasi</span> <span class="text-purple-600">Pelayanan</span>
        </h1>

        <!-- post looping -->
        <!-- swiper js -->
        <!-- Slider main container -->

        <div
            class="container  flex flex-col items-center justify-center lg:flex-row md:flex-row mx-auto lg:flex-wrap md:flex-wrap mt-1 bg-b">
            <!-- post atas -->
            <div class="carousel relative ">
                <div class="carousel-inner relative overflow-hidden w-full">
                    <!--Slide 1-->
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden=""
                        checked="checked">
                    <div class="carousel-item absolute opacity-0 " style="height:65vh; ">
                        <div class="block h-full lg:w-[700px] w-fit mx-4 rounded-lg shadow-lg bg-indigo-500 text-white text-5xl text-center"
                            style="background: url(img/image_1.jpg); background-position: center ; background-size: cover">
                            <div class="bg-black/40 flex rounded-lg flex-col justify-center items-center h-full w-full">
                                <div class="font-bold text-2xl px-10 w-full">ini adlah judul titsdfgle postingan</div>
                                <div class="text-base mt-3">laskdfj lasdkjf jklsadjf jlsadjf j jlkjsadf ljasdf jlasdf </div>
                                <a href="#"
                                    class=" py-1 px-3 rounded-full text-white   bg-black/20 border-2 hover:bg-black/40  w-fit text-base mt-7 ">Baca
                                    selengkapnya
                                </a>
                                <p class="font-thin italic text-[12px] mr-5 mb-2 mt-12">2 hour ago</p>
                            </div>
                        </div>
                    </div>
                    <label for="carousel-3"
                        class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-2"
                        class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!--Slide 2-->
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:65vh;">
                        <div class="block h-full  lg:w-[700px] w-fit mx-4 rounded-lg shadow-lg bg-orange-500 text-white text-5xl text-center"
                            style="background: url(img/image_2.jpg); background-position: center ; background-size: cover">
                            <div class="bg-black/40 flex rounded-lg flex-col justify-center items-center h-full w-full">
                                <div class="bg-black/40 flex rounded-lg flex-col justify-center items-center h-full w-full">
                                    <div class="font-bold text-2xl px-10 w-full">ini adlah judul titsdfgle postingan</div>
                                    <div class="text-base mt-3">laskdfj lasdkjf jklsadjf jlsadjf j jlkjsadf ljasdf jlasdf </div>
                                    <a href="#"
                                        class=" py-1 px-3 rounded-full text-white   bg-black/20 border-2 hover:bg-black/40  w-fit text-base mt-7 ">Baca
                                        selengkapnya
                                    </a>
                                    <p class="font-thin italic text-[12px] mr-5 mb-2 mt-12">2 hour ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="carousel-1"
                        class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-3"
                        class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!--Slide 3-->
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item absolute opacity-0" style="height:65vh;">
                        <div class="block h-full  lg:w-[700px] w-fit mx-4 rounded-lg shadow-lg bg-green-500 text-white text-5xl text-center"
                            style="background: url(img/logo-besar.png); background-position: center ; background-size: cover">
                            <div class="bg-black/40 flex rounded-lg flex-col justify-center items-center h-full w-full">
                                <div class="bg-black/40 flex rounded-lg flex-col justify-center items-center h-full w-full">
                                    <div class="font-bold text-2xl px-10 w-full">ini adlah judue postingan</div>
                                    <div class="text-base mt-3">laskdfj lasdkjf jklsadjf jlsjsadf ljasdf jlasdf </div>
                                    <a href="#"
                                        class=" py-1 px-3 rounded-full text-white   bg-black/20 border-2 hover:bg-black/40  w-fit text-base mt-7 ">Baca
                                        selengkapnya
                                    </a>
                                    <p class="font-thin italic text-[12px] mr-5 mb-2 mt-12">2 hour ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <label for="carousel-2"
                        class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                    <label for="carousel-1"
                        class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                    <!-- Add additional indicators for each slide-->
                    <ol class="carousel-indicators">
                        <li class="inline-block mr-3">
                            <label for="carousel-1"
                                class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-2"
                                class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                        <li class="inline-block mr-3">
                            <label for="carousel-3"
                                class="carousel-bullet cursor-pointer block text-4xl text-white hover:text-blue-700">•</label>
                        </li>
                    </ol>

                </div>
            </div>

            <div class="w-full lg:w-1/2 md:w-1/2 p-3 mx-auto ">
                <div
                    class="flex flex-col lg:flex-row rounded-lg overflow-hidden h-auto lg:h-40 border  shadow-lg dark:border-2 dark:border-black/20 dark:text-white">
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover" src="img/image_1.jpg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal dark:bg-slate-700 ">
                        <div class="text-black font-bold text-lg mb-2 leading-tight dark:text-white">Can
                            cffffffffffffffoffee make you a
                            bitter developer?</div>

                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque enim
                            aliquid
                            consequuntur tempora, repudiandae beatae explicabo.</p>
                        <div class="flex items-center mt-2 justify-between">

                            <a href="#"
                                class="bg-purple-600 py-1 px-3 rounded-full text-white hover:bg-purple-900  dark:bg-black/20 border-2 dark:hover:bg-black/40  w-fit text-[11px] mb-4">Informasi
                                Pelayanan</a>

                            <p class="font-thin italic text-[12px] mr-5 mb-2">2 hour ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 md:w-1/2 p-3 mx-auto ">
                <div
                    class="flex flex-col lg:flex-row rounded-lg overflow-hidden h-auto lg:h-40 border  shadow-lg dark:border-2 dark:border-black/20 dark:text-white">
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover" src="img/image_1.jpg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal dark:bg-slate-700 ">
                        <div class="text-black font-bold text-lg mb-2 leading-tight dark:text-white">Can
                            cffffffffffffffoffee make you a
                            bitter developer?</div>

                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque enim
                            aliquid
                            consequuntur tempora, repudiandae beatae explicabo.</p>
                        <div class="flex items-center mt-2 justify-between">

                            <a href="#"
                                class="bg-purple-600 py-1 px-3 rounded-full text-white hover:bg-purple-900  dark:bg-black/20 border-2 dark:hover:bg-black/40  w-fit text-[11px] mb-4">Informasi
                                Pelayanan</a>

                            <p class="font-thin italic text-[12px] mr-5 mb-2">2 hour ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 md:w-1/2 p-3 mx-auto ">
                <div
                    class="flex flex-col lg:flex-row rounded-lg overflow-hidden h-auto lg:h-40 border  shadow-lg dark:border-2 dark:border-black/20 dark:text-white">
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover" src="img/image_1.jpg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal dark:bg-slate-700 ">
                        <div class="text-black font-bold text-lg mb-2 leading-tight dark:text-white">Can
                            cffffffffffffffoffee make you a
                            bitter developer?</div>

                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque enim
                            aliquid
                            consequuntur tempora, repudiandae beatae explicabo.</p>
                        <div class="flex items-center mt-2 justify-between">

                            <a href="#"
                                class="bg-purple-600 py-1 px-3 rounded-full text-white hover:bg-purple-900  dark:bg-black/20 border-2 dark:hover:bg-black/40  w-fit text-[11px] mb-4">Informasi
                                Pelayanan</a>

                            <p class="font-thin italic text-[12px] mr-5 mb-2">2 hour ago</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 md:w-1/2 p-3 mx-auto ">
                <div
                    class="flex flex-col lg:flex-row rounded-lg overflow-hidden h-auto lg:h-40 border  shadow-lg dark:border-2 dark:border-black/20 dark:text-white">
                    <img class="block h-auto w-full lg:w-48 flex-none bg-cover" src="img/image_1.jpg">
                    <div
                        class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal dark:bg-slate-700 ">
                        <div class="text-black font-bold text-lg mb-2 leading-tight dark:text-white">Can
                            cffffffffffffffoffee make you a
                            bitter developer?</div>

                        <p class="text-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque enim
                            aliquid
                            consequuntur tempora, repudiandae beatae explicabo.</p>
                        <div class="flex items-center mt-2 justify-between">

                            <a href="#"
                                class="bg-purple-600 py-1 px-3 rounded-full text-white hover:bg-purple-900  dark:bg-black/20 border-2 dark:hover:bg-black/40  w-fit text-[11px] mb-4">Informasi
                                Pelayanan</a>

                            <p class="font-thin italic text-[12px] mr-5 mb-2">2 hour ago</p>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </section>
@endsection
