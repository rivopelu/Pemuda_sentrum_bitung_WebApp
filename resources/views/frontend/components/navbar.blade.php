<!-- navbar -->
<nav id="nav"
    class=" bg-black/60
        to-purple-900 
        from-purple-500 
        text-white flex 
        shadow-lg z-50
        
        justify-between flex-col lg:flex-row fixed w-full ease-in duration-300 rounded-b-lg lg:rounded-none ">
    <div class=" flex flex-col lg:flex-row lg:w-full lg:justify-between lg:items-center  py-2 px-10">
        <div class="flex items-center justify-between ">
            <a href="" id="brand" class="flex gap-2 items-center">
                <img src="img/logo.png" class="rounded-full w-8 lg:w-9" alt="">
                <div class="text-sm lg:text-2xl">Pemuda Sentrum Bitung</div>
            </a>
            <div>
                <button
                    class="togle flex lg:hidden active:border-2 active:bg-black/20 h-8 w-8 rounded-md items-center justify-center focus:outline-none focus:ring focus:ring-violet-300 nav-togller"
                    id="nav-toggler">
                    <i class="uil uil-apps " style="font-size: 25px; margin-bottom: 4px;" id="btn-toggle"></i>
                </button>
            </div>
        </div>
        <div class=" flex flex-col-reverse lg:flex-row gap-3  mt-2 lg:mt-0 pt-3 lg:p-0 border-t-2 border-white/20   lg:border-none  buka "
            id="navigation">
            <ul class="lg:items-center flex gap-1   flex-col lg:flex-row">
                <li class="w-full lg:w-fit flex "><a
                        class="text-white hover:text-gray-200 navlink hover:bg-black/60 px-3 py-1 rounded-sm w-full navbar-active"
                        href="/"><i class="uil uil-estate lg:hidden"></i></i> Home</a></li>
                <li class="w-full lg:w-fit flex "><a
                        class="text-white hover:text-gray-200 navlink hover:bg-black/60 px-3 py-1 rounded-sm w-full "
                        href="#"><i class="uil uil-question-circle lg:hidden"></i> About</a></li>
                <li class="w-full lg:w-fit flex "><a
                        class="text-white hover:text-gray-200 navlink hover:bg-black/60 px-3 py-1 rounded-sm w-full 
                    "
                        href="#"><i class="uil uil-equal-circle lg:hidden"></i> Post</a></li>
                <li class="w-full lg:w-fit flex "><a
                        class="text-white hover:text-gray-200 navlink hover:bg-black/60 px-3 py-1 rounded-sm w-full 
                    "
                        href="/info"><i class="uil uil-comment-alt-exclamation lg:hidden"></i> Info</a></li>
                <li class="w-full lg:w-fit flex "><a
                        class="text-white hover:text-gray-200 navlink hover:bg-black/60 px-3 py-1 rounded-sm w-full 
                    "
                        href="#"><i class="uil uil-message lg:hidden"></i> Contact</a></li>
            </ul>
            <ul class="lg:items-center flex gap-5   flex-col lg:flex-row">
                <li class="flex items-center gap-3"><i class="uil uil-search"></i><input type="email" name="email"
                        class="bg-black/20 mt-1 px-3 py-2  border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500   rounded-md sm:text-sm focus:ring-1 w-72 lg:w-fit flex"
                        placeholder="Search" /></li>
                @auth

                    <li class="w-full lg:w-fit flex flex-col"><button id="drop-1"
                            class="text-white hover:text-gray-200 navlink hover:bg-black/60 px-3 py-2 rounded-sm w-full bg-black/40 flex gap-3 lg:gap-2 "><img
                                src="{{ auth()->user()->avatar }}" class="w-6 rounded-full" alt="">
                            <span>{{ auth()->user()->username }}</span>
                        </button>
                        <div class=" bg-white shadow-lg text-black dark:text-white dark:bg-gray-900 rounded-lg mt-[55px] right-[-520px] flex flex-col absolute "
                            id="item-drop">
                            <a href="#" class=" px-4 py-2 hover:bg-black/30 rounded-t-lg"><i
                                    class="uil uil-user-circle"></i> Profile</a>
                            <a href="/dashboard" class=" px-4 py-2 hover:bg-black/30"><i class="uil uil-grid"></i>
                                Dashboard</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button
                                    class=" px-4 py-2  bg-red-400 rounded-b-lg hover:bg-black/50 cursor-pointer w-full text-left"
                                    type="submit"> <i class="uil uil-sign-out-alt  "></i> logout</button>

                            </form>

                        </div>
                    </li>
                @else

                    <li class="w-full lg:w-fit flex "><a
                            class="text-white hover:text-gray-200 navlink hover:bg-black/60 px-3 py-1 rounded-sm w-full bg-black/40"
                            href="/login"><i class="uil uil-sign-in-alt"></i> Login</a></li>
                @endauth

            </ul>
        </div>
    </div>


</nav>

<script>
    /*==================== CHANGE BACKGROUND HEADER ====================*/
    function scrollHeader() {
        const header = document.getElementById('nav')
        // When the scroll is greater than 100 viewport height, add the scroll-header class to the header tag
        if (this.scrollY >= 100) header.classList.add('bg-gradient-to-br');
        else header.classList.remove('bg-black/60')
    }
    window.addEventListener('scroll', scrollHeader);
</script>
