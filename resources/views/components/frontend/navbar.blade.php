<nav class="shadow-lg bg-Solitude fixed w-full top-0 left-0 z-20">
    <div>
        <div
            class="py-2 transition-all duration-300 container mx-auto flex
            items-center justify-between px-2">
            <div class="flex items-center gap-4">
                <a href="{{ route('index') }}">
                    <img src="{{ url('/frontend/images/logo_eduskill.png') }}" alt="EduSkill Logo"
                        class="w-48 h-12 sm:w-28 sm:h-10 md:w-44 md:h-14 lg:w-44 lg:h-14" />
                </a>
            </div>

            <div class="container mx-auto flex items-center justify-end">
                <div class="sm:flex hidden font-normal text-sm mr-4">
                    <li class="list-none cursor-pointer mx-4">
                        <a href="#">
                            <div class="font-bold transition-all duration-300 text-Orange_Primary">
                                Home
                            </div>
                        </a>
                    </li>

                    <li class="list-none cursor-pointer mx-4">
                        <a href="./pages/courses.html">
                            <div class="font-bold transition-all duration-300 text-black">
                                Courses
                            </div>
                        </a>

                    </li>
                </div>
                <div class="flex items-center gap-2">
                    <!-- {/* <button class="py-3 px-6 font-bold text-Black_Primary text-sm">
                        Masuk
                    </button> */} -->
                    <button
                        class="py-2 px-3 md:py-3 md:px-6 font-bold text-white text-extra-mini md:text-sm border border-solid rounded-md md:rounded-lg border-Orange_Secondary bg-Orange_Primary">
                        <a href="https://eduskill.mayar.link/pl/basic-web-development">
                            Daftar Kelas
                        </a>
                    </button>
                </div>

            </div>
            <!-- <div class="fixed h-full w-full top-0 left-0 z-20 bg-Orange_Primary flex flex-col justify-center items-center shadow-lg gap-8 py-8">
                <MobileNavLinks />
                <div class="absolute right-12 top-12 text-white text-3xl cursor-pointer" >
                </div>
                </div>
            </div> -->
        </div>
</nav>
