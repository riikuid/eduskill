@extends('layouts.frontend')

@section('content')

    <body class="font-Inter bg-Solitude">
        <section class="md:section container mx-auto pt-12 pb-24 px-6" id="home">
            <div class="md:flex items-center justify-center relative">
                <!-- {/* First Column */} -->
                <div class="md:w-1/2 mt-28 md:mb-32 relative z-10">
                    <img data-aos="zoom-in" src="{{ url('/frontend/images/bg_text_hero_eduskill_1.png') }}" alt=""
                        class="absolute bg-no-repeat z-0 bottom-0 w-[20rem] -left-16 -top-28 lg:w-[25rem] lg:top-0 lg:-left-28 md:w-[25rem] md:-top-32 md:-left-24" />
                    <div data-aos="fade-right" data-aos-delay="300" class="sm:text-[2.5rem] text-[1.825rem] font-bold">
                        Upgrade <span class="text-Orange_Primary">Skillmu</span> <br />
                        Bersama <span class="text-Orange_Primary">EDUSKILL</span>
                    </div>
                    <p data-aos="fade-right" data-aos-delay="500" class="text-sm leading-7 text-gray max-w-md">
                        Eduskill menyediakan kelas pemrograman yang di dukung dengan codereview dan di dukung dengan
                        Mentorbot
                    </p>
                    <div class="mt-6">
                        <button data-aos="zoom-in" data-aos-delay="600"
                            class="px-6 py-3 font-bold text-white bg-Orange_Primary rounded-lg text-sm">
                            <a href="https://eduskill.mayar.link/pl/basic-web-development"></a>
                            Daftar
                        </button>
                        <button data-aos="zoom-in" data-aos-delay="700"
                            class="px-6 py-3 font-bold text-Orange_Teritiary bg-[#F4EBFF] rounded-lg text-sm ml-4">
                            <a href="https://wa.me/6281553546308?text=Saya%20memiliki%20kendala,%20yaitu...">
                                CS Admin
                            </a>
                        </button>
                        <div class="mt-10 relative z-10">
                            <div class="grid grid-cols-3 md:grid md:grid-cols-3 gap-2 md:gap-4">
                                <div data-aos="flip-down" class="md:flex md:items-center md:justify-start gap-2 md:gap-2">
                                    <img src="{{ url('/frontend/images/focus_public_speaking.svg') }}"
                                        alt="focus_public_speaking" class="md:w-5 md:mx-0 md:h-auto w-5 mx-auto" />
                                    <div>
                                        <p
                                            class="md:text-mini md:mt-0 md:text-left text-center text-extra-mini mt-2 font-normal">
                                            Public Speaking
                                        </p>
                                    </div>
                                </div>
                                <div data-aos="flip-down" class="md:flex md:items-center md:justify-start gap-2 md:gap-2">
                                    <img src="{{ url('/frontend/images/focus_career_oriented.svg') }}"
                                        alt="focus_public_speaking" class="md:w-5 md:mx-0 md:h-auto w-5 mx-auto" />
                                    <div>
                                        <p
                                            class="md:text-mini md:mt-0 md:text-left text-center text-extra-mini mt-2 font-normal">
                                            Career Oriented
                                        </p>
                                    </div>
                                </div>
                                <div data-aos="flip-down" class="md:flex md:items-center md:justify-start gap-2 md:gap-2">
                                    <img src="{{ url('/frontend/images/focus_creative_thinking.svg') }}"
                                        alt="focus_public_speaking" class="md:w-5 md:mx-0 md:h-auto w-5 mx-auto" />
                                    <div>
                                        <p
                                            class="md:text-mini md:mt-0 md:text-left text-center text-extra-mini mt-2 font-normal">
                                            Creative Thinking
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- {/* Second Column */} -->

                <div class="md:flex items-center justify-center relative">
                    <!-- {/* First Div */} -->
                    <div data-aos="zoom-in-up" data-aos-delay="200" class="relative  ">
                        <img src="{{ url('/frontend/images/hero_eduskill.png') }}" alt=""
                            class="w-52 mx-auto mt-8 md:w-full md:h-auto z-10" />
                    </div>
                    <div class="md:w-full absolute">
                        <img data-aos="zoom-in" data-aos-delay="600"
                            src="{{ url('/frontend/images/bg_text_hero_eduskill_2.png') }}" alt=""
                            class="md:w-4/6 absolute top-4 -right-16 z-10" />
                        <img data-aos="zoom-in-left" data-aos-delay="600"
                            src="{{ url('/frontend/images/first_hero_layer.png') }}" alt=""
                            class="md:w-5/12 absolute -bottom-0 -right-10 z-10" />
                        <img data-aos="zoom-in-right" data-aos-delay="600"
                            src="{{ url('/frontend/images/second_hero_layer.png') }}" alt=""
                            class="md:w-6/12 absolute -bottom-14 -left-20 z-10" />
                        <img data-aos="zoom-in-left" data-aos-delay="500"
                            src="{{ url('/frontend/images/third_hero_layer.png') }}" alt=""
                            class="md:w-5/12 absolute top-32 -right-0 z-10" />
                    </div>
                </div>
            </div>

            <div class="flex flex-col pt-6 md:flex-row items-center justify-center md:justify-start">
                <div data-aos="fade-down" class="md:mt-0 mr-0 md:mr-16 text-center md:text-left mb-4 md:mb-0">
                    <p class="font-bold text-2xl md:text-xl text-Orange_Primary">
                        10+
                    </p>
                    <p class="text-2xl md:text-xl">Collaborations</p>
                </div>
                <div class="flex items-center justify-center md:justify-center flex-wrap gap-16 pt-4 md:pt-0">
                    <div data-aos="flip-left" data-aos-delay="200" class="w-9">
                        <img src="{{ url('/frontend/images/logo1.png') }}" alt="" class="w-full object-cover" />
                    </div>
                    <div data-aos="flip-left" data-aos-delay="200" class="w-9">
                        <img src="{{ url('/frontend/images/logo2.png') }}" alt="" class="w-full object-cover" />
                    </div>
                    <div data-aos="flip-left" data-aos-delay="200" class="w-9">
                        <img src="{{ url('/frontend/images/logo3.png') }}" alt="" class="w-full object-cover" />
                    </div>
                    <div data-aos="flip-left" data-aos-delay="200" class="w-9">
                        <img src="{{ url('/frontend/images/logo4.png') }}" alt="" class="w-full object-cover" />
                    </div>
                </div>
                <div data-aos="flip-left" data-aos-delay="200" class="w-9">
                    <img src="{{ url('/frontend/images/logo5.png') }}" alt="" class="w-full object-cover" />
                </div>
            </div>
        </section>

        <section class="md:section container mx-auto pt-0 pb-20 md:pt-8" id="services">

            <div class="relative">
                <p class="font-semibold text-sm mb-2 text-center md:text-sm md:mb-2 text-Orange_Primary">
                    Pelayanan Kami
                </p>
                <h1 class="font-semibold text-xl mb-10 text-center md:text-3xl md:mb-10 md:mx-56">
                    Membina lingkungan belajar yang menyenangkan & menarik
                </h1>

                <div class="mt-4 grid lg:grid-cols-3 md:grid-cols-3 grid-cols-2 gap-2 md:gap-8">
                    <div class="flex items-center p-2 rounded-md md:p-4 bg-Orange_Primary text-white">
                        <div class="flex flex-col">
                            <div class="flex items-center mb-2">
                                <img src="{{ url('/frontend/images/icon_1_eduskill.svg') }}" alt="Icon"
                                    class="hidden w-4 h-6 mr-2 md:w-6 md:inline md:h-6 md:mr-2" />
                                <h2
                                    class="md:text-lg md:mr-0 md:font-semibold text-extra-mini mr-20 leading-tight text-white">
                                    Pengalaman Pengguna
                                </h2>
                            </div>
                            <p class="text-white md:text-extra-mini md:mr-12
                            text-tiny mr-3">
                                Pelajaran tentang desain yang mencakup perkembangan terbaru.
                            </p>
                            <div class="flex items-center pt-4 text-white" }>
                                <a href={slide.link}
                                    class="text-xs mr-1 font-medium text-white
                                md:text-extra-mini md:mr-2 text-extra-mini">
                                    Selengkapnya
                                </a>
                                <img src="/frontend/images/pages/Services/next-white.svg" class="w-3" />
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center p-2 rounded-md md:p-4 bg-white border border-black border-opacity-20">
                        <div class="flex flex-col">
                            <div class="flex items-center mb-2">
                                <img src="{{ url('/frontend/images/icon_2_eduskill.svg') }}" alt="Icon"
                                    class="hidden w-4 h-6 mr-2 md:w-6 md:inline md:h-6 md:mr-2" />
                                <h2
                                    class="md:text-lg md:mr-0 md:font-semibold text-extra-mini mr-20 leading-tight text-black">
                                    Pengalaman Pengguna
                                </h2>
                            </div>
                            <p class="text-black md:text-extra-mini md:mr-12
                            text-tiny mr-3">
                                Kelas dalam pengembangan yang mencakup kemajuan terbaru dalam web.
                            </p>
                            <div class="flex items-center pt-4 text-black">
                                <a href={slide.link}
                                    class="text-xs mr-1 font-medium text-black
                                md:text-extra-mini md:mr-2 text-extra-mini">
                                    Selengkapnya
                                </a>
                                <img src="{{ url('/frontend/images/pages/Services/next-black.svg') }}" class="w-3" />
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center p-2 rounded-md md:p-4 bg-white border border-black border-opacity-20">
                        <div class="flex flex-col">
                            <div class="flex items-center mb-2">
                                <img src="{{ url('/frontend/images/icon_3_eduskill.svg') }}" alt="Icon"
                                    class="hidden w-4 h-6 mr-2 md:w-6 md:inline md:h-6 md:mr-2" />
                                <h2
                                    class="md:text-lg md:mr-0 md:font-semibold text-extra-mini mr-20 leading-tight text-black">
                                    Pemasaran
                                </h2>
                            </div>
                            <p class="text-black md:text-extra-mini md:mr-12
                            text-tiny mr-3">
                                Kursus pemasaran yang mencakup tren pemasaran terbaru.
                            </p>
                            <div class="flex items-center pt-4 text-black">
                                <a href={slide.link}
                                    class="text-xs mr-1 font-medium text-black
                                md:text-extra-mini md:mr-2 text-extra-mini">
                                    Selengkapnya
                                </a>
                                <img src="{{ url('/frontend/images/pages/Services/next-black.svg') }}" class="w-3" />
                            </div>
                        </div>
                    </div>

                </div>
                <div class="flex justify-center items-center mt-4 cursor-pointer gap-1">
                    <div class="w-12 h-3 bg-orange-500 rounded-md"></div>
                    <div class="w-3 h-3 bg-zinc-300 rounded-full"></div>
                    <div class="w-3 h-3 bg-zinc-300 rounded-full"></div>
                    <div class="w-3 h-3 bg-zinc-300 rounded-full"></div>
                </div>
            </div>
            <div class="flex flex-col justify-center items-center mt-20">
                <p class="font-semibold text-sm mb-2 text-center md:text-sm md:mb-2 text-Orange_Primary">
                    Pelayanan Kami
                </p>
                <h1 class="font-semibold text-xl md:mb-10 mb-4 text-center md:text-3xl">
                    Masih binggung ingin mempelajari apa??
                </h1>
                <p class="text-md mb-2 md:mt-6 md:mx-48 text-center text-Black_Primary font-light">
                    Ikuti
                    <span class="text-Orange_Primary font-semibold">
                        Tes Minat Bakat
                    </span>
                    untuk membantu anda dalam menemukan jalur yang sesuai dengan potensi,
                    serta memberikan arahan dalam memilih pendidikan atau pekerjaan yang
                    sesuai dengan minat dan bakat yang dimiliki.
                </p>
                <div class="mt-6">
                    <button
                        class="bg-Orange_Primary text-white py-2 px-6 text-extra-mini font-semibold border rounded-md border-opacity-30 hover:bg-white hover:text-black hover:border-Orange_Primary transition-all">
                        Ikuti Test!
                    </button>
                </div>
            </div>
            </div>

        </section>
        @if ($courses)
            <section class="container mx-auto pt-8 pb-0 " id="classes">
                <div class="text-start">
                    <p class="font-semibold text-sm mb-2 md:text-sm md:mb-2 text-Orange_Primary">
                        Jelajahi Kelas
                    </p>
                    <h1 class="font-semibold text-xl md:text-3xl md:mb-2 ">
                        Kelas Popular Kami
                    </h1>
                    <p class="font-normal text-sm text-[#667085] ">
                        Mari bergabung dengan kelas terkenal kami, ilmu yang diberikan pasti
                        akan bermanfaat bagi Anda.
                    </p>
                </div>
                @foreach ($courses as $course)
                    <div class="mt-10 overflow-x-hidden w-full relative">
                        <div id="slider" class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-2">
                            <div id="courses-1">
                                <div class="p-3 m-1 shadow-xl min-w-[15rem] bg-white rounded-md">
                                    <img src="{{ $course->thumbnail ? Storage::url($course->thumbnail) : 'data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==' }}"
                                        alt="" style="width: 320px; height:180px; object-fit:cover" />
                                    <div class="mt-3 text-xs text-Orange_Primary">{{ $course->category->name }}</div>
                                    <div class="flex text-xl font-bold justify-between items-center">
                                        <a class="truncate items-center"
                                            href="{{ route('course.details', $course->slug) }}">{{ $course->title }}</a>

                                    </div>
                                    <p class="text-sm text-gray-600 mt-2 line-clamp-2">
                                        {{ implode(' ', array_slice(str_word_count($course->description, 2), 0, 15)) }}
                                    </p>
                                    <div class="flex justify-between items-center mt-3">
                                        @if ($currentUser)
                                            @if ($currentUser->hasCourse($course->id))
                                                <div class="text-2xl text-Orange_Primary font-bold">
                                                    Sudah Dimiliki</div>
                                            @else
                                                <div class="text-2xl text-Orange_Primary font-bold">
                                                    Rp{{ number_format($course->price_after) }}</div>
                                            @endif
                                        @else
                                            <div class="text-2xl text-Orange_Primary font-bold">
                                                Rp{{ number_format($course->price_after) }}</div>
                                        @endif

                                        {{-- @if ($currentUser && !$currentUser->hasCourse($course->id))
                                            <div class="text-2xl text-Orange_Primary font-bold">
                                                Rp{{ number_format($course->price_after) }}</div>
                                        @endif --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                <!-- button slider-->
                <div class="flex justify-center items-center mt-4 cursor-pointer gap-1" onclick="toggleSlider()">
                    <div class="w-12 h-3 bg-orange-500 rounded-md" onclick="showCourse('courses-1')"></div>
                    <div class="w-3 h-3 bg-zinc-300 rounded-full" onclick="showCourse('courses-2')"></div>
                    <div class="w-3 h-3 bg-zinc-300 rounded-full"></div>
                    <div class="w-3 h-3 bg-zinc-300 rounded-full"></div>
                </div>

                <!-- button kelas -->
                <div class="flex justify-center items-center mt-6">
                    <button
                        class="bg-[#F9FAFB] text-black py-2 px-4 text-extra-mini font-semibold rounded-md border border-[#D0D5DD] border-opacity-30 hover:bg-Orange_Primary hover:text-white hover:border-none transition-all">
                        Jelajahi Kelas Lainnya
                    </button>
                </div>
                </div>

            </section>
        @else
        @endif
        <section class="section mx-auto pt-0 md:pb-24 pb-2" id="teacher">
            <div class="flex flex-col justify-center items-center mt-20">
                <p class="font-semibold text-sm mb-2 text-center md:text-sm md:mb-2 text-Orange_Primary">
                    Tutor
                </p>
                <h1 class="font-semibold text-xl text-center md:text-3xl">
                    Para Mentor
                </h1>
                <p class="md:text-base md:mx-48 text-xs text-[#667085] text-md mb-2 mt-3 text-center  font-light">
                    Di EDUSKILL, instruktur dari seluruh dunia mengajar jutaan siswa. Kami
                    menawarkan pengetahuan dan kemampuan.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4 gap-4 items-center mt-4">

                    <div class="grid grid-cols-1 md:gap-4 gap-2 items-center">
                        <div class="relative mx-auto">
                            <img src="{{ url('/frontend/images/pages/Teacher/circular_teacher1.svg') }}"
                                class="object-cover rounded-full w-24 h-24" alt="Hariz Izuddin" />
                        </div>
                        <div class="text-center">
                            <p class="font-semibold md:text-base text-sm">Moh Hariz Izuddin</p>
                            <p class="text-Orange_Teritiary md:text-base text-sm">
                                Leader
                            </p>
                            <p class="text-[#667085] md:mx-3 md:text-sm text-xs">
                                CEO Eduskill
                            </p>
                        </div>
                        <div class="flex gap-2 text-[#667085] justify-center">
                            <img src="{{ url('/frontend/images/pages/Teacher/twitter.svg') }}" class="w-5"
                                alt="" srcset="">
                            <img src="{{ url('/frontend/images/pages/Teacher/linkedin.svg') }}" class="w-5"
                                alt="" srcset="">
                        </div>
                    </div>

                    <div class="flex flex-col md:gap-4 gap-2 items-center">
                        <div class="relative mx-auto">
                            <img src="{{ url('/frontend/images/pages/Teacher/circular_teacher3.svg') }}"
                                class="object-cover rounded-full w-24 h-24" alt="Fahmi Wahyu" />

                        </div>
                        <div class="text-center">
                            <p class="font-semibold md:text-base text-sm">Fahmi Wahyu Alifian kun</p>
                            <p class="text-Orange_Teritiary md:text-base text-sm">
                                Developer
                            </p>
                            <p class="text-[#667085] md:mx-3 md:text-sm text-xs">
                                Back-End Web Developer
                            </p>
                        </div>
                        <div class="flex gap-2 text-[#667085] justify-center">
                            <img src="{{ url('/frontend/images/pages/Teacher/twitter.svg') }}" alt=""
                                srcset="">
                            <img src="{{ url('/frontend/images/pages/Teacher/linkedin.svg') }}" alt=""
                                srcset="">
                        </div>
                    </div>

                    <div class="flex flex-col md:gap-4 gap-2 items-center">
                        <div class="relative mx-auto">
                            <img src="{{ url('/frontend/images/pages/Teacher/circular_teacher2.svg') }}"
                                alt="Halim Putra" class="object-cover rounded-full w-24 h-24" />
                        </div>
                        <div class="text-center">
                            <p class="font-semibold md:text-base text-sm">Daniel Krisnaa Halim Putra</p>
                            <p class="text-Orange_Teritiary md:text-base text-sm">
                                Developer
                            </p>
                            <p class="text-[#667085] md:mx-3 md:text-sm text-xs">
                                Front-End Web Developer
                            </p>
                        </div>
                        <div class="flex gap-2 text-[#667085] justify-center">
                            <img src="{{ url('/frontend/images/pages/Teacher/twitter.svg') }}" alt=""
                                srcset="">
                            <img src="{{ url('/frontend/images/pages/Teacher/linkedin.svg') }}" alt=""
                                srcset="">
                        </div>
                    </div>
                    <!-- End of block -->
                </div>



            </div>
        </section>


    </body>
@endsection
