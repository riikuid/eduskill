@extends('layouts.frontend')

@section('content')
    {{-- <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $course->title }}</title>
        <!-- <link rel="stylesheet" href="css/style.css"> -->



    </head> --}}


    <body>
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Content Page -->
        <div class="container mx-auto justify-center items-center flex-col mt-20">
            <!-- Section Title Online -->
            <div class="justify-center items-stretch self-stretch flex flex-col">
                <div
                    class="text-gray-700 text-center text-3xl font-bold leading-[51px] w-full max-md:max-w-full max-sm:text-xl max-sm:leading-8">
                    {{ $course->title }}
                </div>
                <div
                    class="text-gray-700 text-center text-base font-light leading-6 self-center whitespace-nowrap mt-2 max-sm:text-sm max-sm:leading-5">
                    Build a better streaming website from scratch
                </div>
            </div>
            <!-- End of Section Title Online -->

            <!-- Section Realesed -->
            <div class="flex justify-center md:mt-10 mt-5">
                <div
                    class="justify-between items-stretch content-start flex-wrap flex w-full max-w-[734px] gap-5 px-20 max-md:max-w-full max-md:px-5">
                    <div class="max-w-[880px] justify-between items-stretch flex gap-2 max-sm:mx-auto">
                        <img loading="lazy" src="/src/images/content/release.svg"
                            class="aspect-square object-contain object-center w-6 overflow-hidden shrink-0 max-w-full" />
                        <div class="text-neutral-800 text-base leading-5 self-center grow whitespace-nowrap my-auto">
                            Release date June 2022
                        </div>
                    </div>



                </div>
            </div>
            <!-- End of Section Realesed -->

            <!-- Video Not Responsive -->
            <div class="content-start self-stretch flex-wrap mt-16 max-md:max-w-full max-md:mt-10 ">
                <div class="gap-5 flex max-md:flex-row max-md:items-stretch max-md:gap-0 justify-center items-center">
                    <div class="flex flex-col items-stretch w-[60%] max-md:w-full">
                        <div
                            style="border-radius: 5px; overflow: hidden; width: 100%; height: 100%; padding-bottom: 56.25%; position: relative;">
                            {{-- <iframe style="border: 0; height: 100%; width: 100%; position: absolute;"
                                src="https://www.youtube.com/embed/7940nuwCEYA?si=xONlvItE5IBmJd9j"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen>
                            </iframe> --}}
                            <img src="{{ $thumbnail }}"
                                style="border: 0; height: 100%; width: 100%; position: absolute;">
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch w-[40%] ml-5 max-md:w-full max-md:ml-0">

                        <div
                            class="justify-end items-stretch self-stretch bg-white flex grow flex-col w-full mx-auto pt-8 rounded-2xl max-md:mt-6">
                            <div class="flex flex-col items-stretch px-8 max-md:px-5">
                                <div class="text-gray-700 text-base font-bold leading-6 whitespace-nowrap">
                                    83 lessons (7.5 hours)
                                </div>

                                <button
                                    class="justify-between items-stretch bg-slate-200 flex w-full gap-5 mt-5 pl-5 pr-6 py-3 rounded-[100px] max-md:pr-5">
                                    <div class="flex justify-between gap-2.5 items-center">
                                        <div class="text-gray-700 text-2xl leading-6">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0.165649C11.375 0.165649 12.6562 0.431274 13.8438 0.962524C15.0625 1.46252 16.125 2.18127 17.0312 3.11877C17.9688 4.02502 18.6875 5.08752 19.1875 6.30627C19.7188 7.49377 19.9844 8.77502 19.9844 10.15C19.9844 11.525 19.7188 12.8219 19.1875 14.0406C18.6875 15.2281 17.9688 16.2906 17.0312 17.2281C16.125 18.1344 15.0625 18.8531 13.8438 19.3844C12.6562 19.8844 11.375 20.1344 10 20.1344C8.625 20.1344 7.32812 19.8844 6.10938 19.3844C4.92188 18.8531 3.85938 18.1344 2.92188 17.2281C2.01562 16.2906 1.29688 15.2281 0.765625 14.0406C0.265625 12.8219 0.015625 11.525 0.015625 10.15C0.015625 8.77502 0.265625 7.49377 0.765625 6.30627C1.29688 5.08752 2.01562 4.02502 2.92188 3.11877C3.85938 2.18127 4.92188 1.46252 6.10938 0.962524C7.32812 0.431274 8.625 0.165649 10 0.165649ZM7.51562 14.65L14.5 10.15L7.51562 5.65002V14.65Z"
                                                    fill="#34364A" />
                                            </svg>
                                        </div>
                                        <div class="text-gray-700 text-base text-right leading-6 justify-end">
                                            Intro Mentor
                                        </div>
                                    </div>
                                    <div class="text-gray-700 text-base leading-6 self-end whitespace-nowrap">
                                        1 mins
                                    </div>
                                </button>

                                <button
                                    class="justify-between items-stretch bg-slate-200 flex w-full gap-5 mt-5 pl-5 pr-6 py-3 rounded-[100px] max-md:pr-5">
                                    <div class="flex justify-between gap-2.5 items-center">
                                        <div class="text-gray-700 text-2xl leading-6">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0.165649C11.375 0.165649 12.6562 0.431274 13.8438 0.962524C15.0625 1.46252 16.125 2.18127 17.0312 3.11877C17.9688 4.02502 18.6875 5.08752 19.1875 6.30627C19.7188 7.49377 19.9844 8.77502 19.9844 10.15C19.9844 11.525 19.7188 12.8219 19.1875 14.0406C18.6875 15.2281 17.9688 16.2906 17.0312 17.2281C16.125 18.1344 15.0625 18.8531 13.8438 19.3844C12.6562 19.8844 11.375 20.1344 10 20.1344C8.625 20.1344 7.32812 19.8844 6.10938 19.3844C4.92188 18.8531 3.85938 18.1344 2.92188 17.2281C2.01562 16.2906 1.29688 15.2281 0.765625 14.0406C0.265625 12.8219 0.015625 11.525 0.015625 10.15C0.015625 8.77502 0.265625 7.49377 0.765625 6.30627C1.29688 5.08752 2.01562 4.02502 2.92188 3.11877C3.85938 2.18127 4.92188 1.46252 6.10938 0.962524C7.32812 0.431274 8.625 0.165649 10 0.165649ZM7.51562 14.65L14.5 10.15L7.51562 5.65002V14.65Z"
                                                    fill="#34364A" />
                                            </svg>
                                        </div>
                                        <div class="text-gray-700 text-base text-right leading-6 justify-end">
                                            Intro Mentor
                                        </div>
                                    </div>
                                    <div class="text-gray-700 text-base leading-6 self-end whitespace-nowrap">
                                        1 mins
                                    </div>
                                </button>

                                <button
                                    class="justify-between items-stretch bg-slate-200 flex w-full gap-5 mt-5 pl-5 pr-6 py-3 rounded-[100px] max-md:pr-5">
                                    <div class="flex justify-between gap-2.5 items-center">
                                        <div class="text-gray-700 text-2xl leading-6">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0.165649C11.375 0.165649 12.6562 0.431274 13.8438 0.962524C15.0625 1.46252 16.125 2.18127 17.0312 3.11877C17.9688 4.02502 18.6875 5.08752 19.1875 6.30627C19.7188 7.49377 19.9844 8.77502 19.9844 10.15C19.9844 11.525 19.7188 12.8219 19.1875 14.0406C18.6875 15.2281 17.9688 16.2906 17.0312 17.2281C16.125 18.1344 15.0625 18.8531 13.8438 19.3844C12.6562 19.8844 11.375 20.1344 10 20.1344C8.625 20.1344 7.32812 19.8844 6.10938 19.3844C4.92188 18.8531 3.85938 18.1344 2.92188 17.2281C2.01562 16.2906 1.29688 15.2281 0.765625 14.0406C0.265625 12.8219 0.015625 11.525 0.015625 10.15C0.015625 8.77502 0.265625 7.49377 0.765625 6.30627C1.29688 5.08752 2.01562 4.02502 2.92188 3.11877C3.85938 2.18127 4.92188 1.46252 6.10938 0.962524C7.32812 0.431274 8.625 0.165649 10 0.165649ZM7.51562 14.65L14.5 10.15L7.51562 5.65002V14.65Z"
                                                    fill="#34364A" />
                                            </svg>
                                        </div>
                                        <div class="text-gray-700 text-base text-right leading-6 justify-end">
                                            Intro Mentor
                                        </div>
                                    </div>
                                    <div class="text-gray-700 text-base leading-6 self-end whitespace-nowrap">
                                        1 mins
                                    </div>
                                </button>


                                <button
                                    class="justify-between items-stretch bg-slate-200 flex w-full gap-5 mt-5 pl-5 pr-6 py-3 rounded-[100px] max-md:pr-5">
                                    <div class="flex justify-between gap-2.5 items-center">
                                        <div class="text-gray-700 text-2xl leading-6">
                                            <svg width="20" height="21" viewBox="0 0 20 21" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10 0.165649C11.375 0.165649 12.6562 0.431274 13.8438 0.962524C15.0625 1.46252 16.125 2.18127 17.0312 3.11877C17.9688 4.02502 18.6875 5.08752 19.1875 6.30627C19.7188 7.49377 19.9844 8.77502 19.9844 10.15C19.9844 11.525 19.7188 12.8219 19.1875 14.0406C18.6875 15.2281 17.9688 16.2906 17.0312 17.2281C16.125 18.1344 15.0625 18.8531 13.8438 19.3844C12.6562 19.8844 11.375 20.1344 10 20.1344C8.625 20.1344 7.32812 19.8844 6.10938 19.3844C4.92188 18.8531 3.85938 18.1344 2.92188 17.2281C2.01562 16.2906 1.29688 15.2281 0.765625 14.0406C0.265625 12.8219 0.015625 11.525 0.015625 10.15C0.015625 8.77502 0.265625 7.49377 0.765625 6.30627C1.29688 5.08752 2.01562 4.02502 2.92188 3.11877C3.85938 2.18127 4.92188 1.46252 6.10938 0.962524C7.32812 0.431274 8.625 0.165649 10 0.165649ZM7.51562 14.65L14.5 10.15L7.51562 5.65002V14.65Z"
                                                    fill="#34364A" />
                                            </svg>
                                        </div>
                                        <div class="text-gray-700 text-base text-right leading-6 justify-end">
                                            83 video lainnya
                                        </div>
                                    </div>

                                </button>


                            </div>
                            <form method="post" action="{{ route('checkout') }}">
                                @csrf
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <button type="submit"
                                    class="text-white text-center text-xl leading-8 whitespace-nowrap justify-center items-center bg-blue-600 mt-24 px-5 py-5 rounded-b-xl max-md:mt-10">
                                    Gabung Kelas
                                </button>
                            </form>
                            {{-- <a href="{{ route('courses.buy', $course->slug) }}"> --}}
                            {{-- <button
                                    class="text-white text-center text-xl leading-8 whitespace-nowrap justify-center items-center bg-blue-600 mt-24 px-5 py-5 rounded-b-xl max-md:mt-10">
                                    Gabung Kelas
                                </button> --}}
                            {{-- </a> --}}
                        </div>

                    </div>

                </div>
            </div>
            <!-- End of Video -->

            <!-- Details -->
            <div class="items-start self-stretch flex flex-col mt-5">
                <!-- List: remove px-5 -->
                <div
                    class="items-stretch content-start flex-wrap flex w-[608px] max-w-full gap-4 self-start max-md:justify-center">
                    <button
                        class="text-slate-200 text-center text-base font-medium leading-6 capitalize whitespace-nowrap justify-center items-center bg-gray-700 grow px-5 py-3 rounded-[100px]">
                        <a href="">
                            about
                        </a>
                    </button>
                    <button
                        class="text-gray-700 text-center text-base font-medium leading-6 capitalize whitespace-nowrap justify-center items-center bg-slate-200 grow px-5 py-3 rounded-[100px]">
                        lessons
                    </button>
                    <button
                        class="text-gray-700 text-center text-base font-medium leading-6 capitalize whitespace-nowrap justify-center items-center bg-slate-200 grow px-5 py-3 rounded-[100px]">
                        tools
                    </button>
                    <button
                        class="text-gray-700 text-center text-base font-medium leading-6 capitalize whitespace-nowrap justify-center items-center bg-slate-200 grow px-5 py-3 rounded-[100px]">
                        reviews
                    </button>
                </div>
                <!-- End of List -->
                <!-- Details Class -->
                <div>
                    <div class="text-gray-700 text-2xl font-bold leading-7 self-stretch w-full mt-7 max-md:max-w-full">
                        Develop Your Skills
                    </div>
                    <div class="text-neutral-800 text-base leading-9 self-stretch w-full max-md:max-w-full">
                        <div class="mt-4">
                            Belajar membangun website streaming untuk membantu masyarakat menikmati film
                            <br />
                            terbaik secara online dengan kualitas gambar yang bagus menggunakan
                            techstack terbaru
                            <br />
                            yaitu Laravel 9xx, Tailwind 3 CSS, dan Framework JavaScript yang sedang
                            popular yakni
                            <br />
                            React JS.
                        </div>
                        <div class="mt-4">
                            Projek yang kita bangun akan diintegrasikan dengan third-party yaitu
                            Midtrans Snap
                            <br />
                            sebagai Payment Gateway, sehingga nantinya pengguna dapat melakukan
                            pembayaran
                            <br />
                            dan website kita dapat menghasilkan uang dari setiap transaksi.
                        </div>
                        <div class="mt-4">
                            Kelas ini sangat cocok sekali apabila kita ingin berkarir sebagai Full-Stack
                            Developer yang
                            <br />
                            memiliki skills yang kuat terutama di bidang website development, belajar
                            langsung secara
                            <br />
                            efektif bersama dengan mentor yang sudah berpengalaman.
                        </div>
                        <div class="mt-4">
                            <span class="">
                                Mari kita belajar dari awal untuk membangun portfolio yang hebat yang akan
                                digunakan
                                <br />
                                sebagai modal mencari pekerjaan
                            </span>
                            <span class="font-bold">Full-Stack Developer</span>
                            <span class="">
                                . Kelas ini menggunakan tools PHP 8,
                                <br />
                                MySQL 5.8, NodeJS 14 dan Laravel 8.
                            </span>
                        </div>
                        <div class="mt-4">
                            Perfect place to begin your career development.
                        </div>
                        <div class="mt-4">
                            BuildWith Angga.
                        </div>
                    </div>
                    <!-- Sneak Peak -->
                    <div class="text-gray-700 text-2xl font-bold leading-7 self-stretch w-full mt-9 max-md:max-w-full">
                        Sneak Peek
                        <div class="flex">
                            <a href=""
                                class="w-[16.66666667%] object-contain object-center items-start self-stretch overflow-hidden mt-4">
                                <img loading="lazy" src="/src/images/content/img1.png" />
                            </a>

                            <a href=""
                                class="w-[16.66666667%] object-contain object-center items-start self-stretch overflow-hidden mt-4">
                                <img loading="lazy" src="/src/images/content/img2.png" />
                            </a>

                            <a href=""
                                class="w-[16.66666667%] object-contain object-center items-start self-stretch overflow-hidden mt-4">
                                <img loading="lazy" src="/src/images/content/img3.png" />
                            </a>

                            <a href=""
                                class="w-[16.66666667%] object-contain object-center items-start self-stretch overflow-hidden mt-4">
                                <img loading="lazy" src="/src/images/content/img4.png" />
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="max-w-full w-[758px] mt-12 pr-5 pb-4 self-start max-md:mt-10">
                    <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                        <div class="flex flex-col items-stretch w-[49%] max-md:w-full max-md:ml-0">
                            <div class="flex flex-col items-stretch max-md:mt-10">
                                <div class="text-gray-700 text-2xl font-bold leading-7 whitespace-nowrap">
                                    Designed For
                                </div>
                                <div class="max-w-[770px] flex justify-between items-start gap-3 mt-4">
                                    <img loading="lazy" src="/src/images/content/check.svg"
                                        class="aspect-square object-contain object-center w-6 overflow-hidden shrink-0 max-w-full" />
                                    <div class="text-gray-700 text-base leading-7 self-stretch grow shrink basis-auto">
                                        Anda yang ingin belajar menjadi Full-
                                        <br />
                                        Stack Developer
                                    </div>
                                </div>
                                <div class="max-w-[770px] flex justify-between items-start gap-3 mt-4">
                                    <img loading="lazy" src="/src/images/content/check.svg"
                                        class="aspect-square object-contain object-center w-6 overflow-hidden shrink-0 max-w-full" />
                                    <div class="text-gray-700 text-base leading-7 self-stretch grow shrink basis-auto">
                                        Anda yang ingin belajar dari mentor
                                        <br />
                                        berpengalaman
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- section 2 Design -->
                        <div class="flex flex-col items-stretch w-[51%] ml-5 max-md:w-full max-md:ml-0">
                            <div class="flex flex-col items-stretch mt-0 md:mt-7">
                                <div class="max-w-[770px] flex justify-between items-start gap-3 mt-4">
                                    <img loading="lazy" src="/src/images/content/check.svg"
                                        class="aspect-square object-contain object-center w-6 overflow-hidden shrink-0 max-w-full" />
                                    <div class="text-gray-700 text-base leading-7 self-stretch grow shrink basis-auto">
                                        Anda yang ingin memperdalam
                                        <br />
                                        Payment Gateway
                                    </div>
                                </div>
                                <div class="max-w-[770px] flex justify-between items-start gap-3 mt-4">
                                    <img loading="lazy" src="/src/images/content/check.svg"
                                        class="aspect-square object-contain object-center w-6 overflow-hidden shrink-0 max-w-full" />
                                    <div class="text-gray-700 text-base leading-7 self-stretch grow shrink basis-auto">
                                        Anda yang ingin memiliki portfolio yang
                                        <br />
                                        menjual
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- End of Details Class -->
                <div
                    class="text-gray-700 text-2xl font-bold leading-7 whitespace-nowrap mt-11 self-start max-md:max-w-full max-md:mt-10">
                    Course Lessons
                </div>
                <button
                    class="text-gray-700 text-center text-base font-semibold leading-6 whitespace-nowrap justify-center items-center bg-slate-200 w-[210px] max-w-full ml-64 mt-4 px-5 py-3 rounded-[100px] self-start max-md:ml-2.5">
                    Load More Lessons
                </button>
                <!-- Teacher -->
                <div>
                    <div class="text-gray-700 text-2xl font-bold leading-7 whitespace-nowrap mt-9 self-start">
                        Learn With Expert
                    </div>
                    <div
                        class="items-stretch bg-white flex w-[343px] max-w-full flex-col mt-4 p-8 rounded-2xl self-start max-md:px-5">
                        <div class="items-center flex justify-between gap-4">
                            <img loading="lazy" src="/src/images/content/teacher.png"
                                class="aspect-square object-contain object-center w-[78px] overflow-hidden shrink-0 max-w-full my-auto" />
                            <div class="items-stretch self-stretch flex grow basis-[0%] flex-col">
                                <div class="text-gray-700 text-xl font-bold leading-6">
                                    Taufan Fadhilah
                                    <br />
                                    Iskandar
                                </div>
                                <div class="text-zinc-400 text-base font-light leading-9 mt-1">
                                    Front-End Developer
                                </div>
                            </div>
                        </div>
                        <div class="items-start flex gap-1 mt-6 max-md:justify-center">
                            <img loading="lazy" src="/src/images/content/star.svg"
                                class="aspect-[1.05] object-contain object-center w-[22px] overflow-hidden self-center shrink-0 max-w-full my-auto" />
                            <img loading="lazy" src="/src/images/content/star.svg"
                                class="aspect-[1.05] object-contain object-center w-[22px] overflow-hidden self-center shrink-0 max-w-full my-auto" />
                            <img loading="lazy" src="/src/images/content/star.svg"
                                class="aspect-[1.05] object-contain object-center w-[22px] overflow-hidden self-center shrink-0 max-w-full my-auto" />
                            <img loading="lazy" src="/src/images/content/star.svg"
                                class="aspect-[1.05] object-contain object-center w-[22px] overflow-hidden self-center shrink-0 max-w-full my-auto" />
                            <img loading="lazy" src="/src/images/content/star.svg"
                                class="aspect-[1.05] object-contain object-center w-[22px] overflow-hidden self-center shrink-0 max-w-full my-auto" />
                            <div class="text-neutral-800 text-base font-medium leading-9 self-stretch">
                                (8.3K)
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- newwwwwwwwwwwwwwwwww -->
            <div
                class="text-gray-700 text-2xl font-bold leading-7 whitespace-nowrap mt-16 self-start max-md:max-w-full max-md:mt-10">
                Our Happy Students
            </div>
            <div class="text-gray-700 text-base leading-9 max-w-[732px] mt-1.5 self-start max-md:max-w-full">
                Review setelah bergabung di kelas Full-Stack Laravel React JS: Build
                Streaming Website Like
                <br />
                Netflix
            </div>
            <!-- Rating -->
            <div
                class="items-stretch flex w-[586px] max-w-full gap-4 mt-5 self-start max-md:flex-wrap max-md:justify-center">
                <button
                    class="text-white text-center text-sm font-semibold leading-6 whitespace-nowrap justify-center items-center bg-gray-700 grow px-5 py-3 rounded-[100px]">
                    All Rating
                </button>
                <button
                    class="items-center bg-slate-200 flex justify-between gap-1 pl-6 pr-6 py-3.5 rounded-[100px] max-md:px-5">
                    <img loading="lazy" src="/src/images/content/star.svg"
                        class="aspect-[1.06] object-contain object-center w-[18px] overflow-hidden shrink-0 max-w-full my-auto" />
                    <div
                        class="text-gray-700 text-center text-sm font-semibold leading-6 self-stretch grow whitespace-nowrap">
                        5
                    </div>
                </button>
                <button
                    class="items-center bg-slate-200 flex justify-between gap-1 pl-6 pr-6 py-3.5 rounded-[100px] max-md:px-5">
                    <img loading="lazy" src="/src/images/content/star.svg"
                        class="aspect-[1.06] object-contain object-center w-[18px] overflow-hidden shrink-0 max-w-full my-auto" />
                    <div
                        class="text-gray-700 text-center text-sm font-semibold leading-6 self-stretch grow whitespace-nowrap">
                        4
                    </div>
                </button>
                <button
                    class="items-center bg-slate-200 flex justify-between gap-1 px-6 py-3.5 rounded-[100px] max-md:px-5">
                    <img loading="lazy" src="/src/images/content/star.svg"
                        class="aspect-[1.06] object-contain object-center w-[18px] overflow-hidden shrink-0 max-w-full my-auto" />
                    <div
                        class="text-gray-700 text-center text-sm font-semibold leading-6 self-stretch grow whitespace-nowrap">
                        3
                    </div>
                </button>
                <button
                    class="items-center bg-slate-200 flex justify-between gap-1 pl-6 pr-6 py-3.5 rounded-[100px] max-md:px-5">
                    <img loading="lazy" src="/src/images/content/star.svg"
                        class="aspect-[1.06] object-contain object-center w-[18px] overflow-hidden shrink-0 max-w-full my-auto" />
                    <div
                        class="text-gray-700 text-center text-sm font-semibold leading-6 self-stretch grow whitespace-nowrap">
                        2
                    </div>
                </button>
                <button
                    class="items-center bg-slate-200 flex justify-between gap-1 pl-6 pr-6 py-3.5 rounded-[100px] max-md:px-5">
                    <img loading="lazy" src="/src/images/content/star.svg"
                        class="aspect-[1.06] object-contain object-center w-[18px] overflow-hidden shrink-0 max-w-full my-auto" />
                    <div
                        class="text-gray-700 text-center text-sm font-semibold leading-6 self-stretch grow whitespace-nowrap">
                        1
                    </div>
                </button>
            </div>
            <div class="w-[770px] max-w-full mt-5 self-start">
                <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                    <div class="flex flex-col items-stretch w-6/12 max-md:w-full max-md:ml-0">
                        <div
                            class="justify-center bg-white flex w-full grow flex-col mx-auto pl-5 pr-7 py-5 rounded-2xl max-md:mt-5 max-md:pr-5">
                            <div class="items-stretch self-stretch flex justify-between gap-4 pr-1">
                                <img loading="lazy" srcset="/src/images/content/hero.svg"
                                    class="aspect-square object-contain object-center w-[70px] max-w-full overflow-hidden shrink-0" />
                                <div class="items-stretch self-center flex grow basis-[0%] flex-col my-auto">
                                    <div class="text-gray-700 text-base font-semibold leading-6 whitespace-nowrap">
                                        Alaric Rasendriya A
                                    </div>
                                    <div class="text-zinc-400 text-sm font-light leading-5 whitespace-nowrap mt-1">
                                        Lifetime Learner
                                    </div>
                                </div>
                            </div>
                            <div class="text-neutral-800 text-base leading-7 self-stretch mt-7">
                                keren tapi harap diupdate lagi videonya,
                                <br />
                                karena teknologinya sudah update
                            </div>
                            <div
                                class="items-stretch flex w-[116px] max-w-full gap-1 mt-12 max-md:justify-center max-md:mt-10">
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch w-6/12 ml-5 max-md:w-full max-md:ml-0">
                        <div
                            class="justify-center bg-white flex w-full grow flex-col mx-auto pl-5 pr-7 py-5 rounded-2xl max-md:mt-5 max-md:pr-5">
                            <div class="items-stretch self-stretch flex justify-between gap-4 pr-0.5">
                                <img loading="lazy" srcset="/src/images/content/hero.svg"
                                    class="aspect-square object-contain object-center w-[70px] max-w-full overflow-hidden shrink-0" />
                                <div class="items-stretch self-center flex grow basis-[0%] flex-col my-auto">
                                    <div class="text-gray-700 text-base font-semibold leading-6 whitespace-nowrap">
                                        Muhammad Baso Adrian Ibra
                                    </div>
                                    <div class="text-zinc-400 text-sm font-light leading-5 whitespace-nowrap mt-1">
                                        Lifetime Learner
                                    </div>
                                </div>
                            </div>
                            <div class="text-neutral-800 text-base leading-7 self-stretch whitespace-nowrap mt-8">
                                nice matter
                            </div>
                            <div
                                class="items-stretch flex w-[116px] max-w-full gap-1 mt-12 max-md:justify-center max-md:mt-10">
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[770px] max-w-full mt-5 self-start">
                <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                    <div class="flex flex-col items-stretch w-6/12 max-md:w-full max-md:ml-0">
                        <div
                            class="justify-center items-stretch bg-white flex w-full grow flex-col mx-auto pl-5 pr-20 py-5 rounded-2xl max-md:mt-5 max-md:pr-5">
                            <div class="items-stretch flex justify-between gap-4 pr-0.5">
                                <img loading="lazy" srcset="/src/images/content/hero.svg"
                                    class="aspect-square object-contain object-center w-[70px] max-w-full overflow-hidden shrink-0" />
                                <div class="items-stretch self-center flex grow basis-[0%] flex-col my-auto">
                                    <div class="text-gray-700 text-base font-semibold leading-6 whitespace-nowrap">
                                        Billy Petra Gilbert Ponto
                                    </div>
                                    <div class="text-zinc-400 text-sm font-light leading-5 whitespace-nowrap mt-1">
                                        Front-End Developer
                                    </div>
                                </div>
                            </div>
                            <div class="text-neutral-800 text-base leading-7 whitespace-nowrap mt-8">
                                Mantap
                            </div>
                            <div
                                class="items-stretch flex w-[116px] max-w-full gap-1 mt-12 max-md:justify-center max-md:mt-10">
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch w-6/12 ml-5 max-md:w-full max-md:ml-0">
                        <div
                            class="justify-center bg-white flex w-full grow flex-col mx-auto pl-5 pr-8 py-5 rounded-2xl max-md:mt-5 max-md:pr-5">
                            <div class="items-stretch self-stretch flex justify-between gap-4">
                                <img loading="lazy"
                                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/edb1ff36-f240-40aa-b8d9-bc4834a5f15f?"
                                    class="aspect-square object-contain object-center w-[70px] overflow-hidden shrink-0 max-w-full" />
                                <div class="items-stretch self-center flex grow basis-[0%] flex-col my-auto">
                                    <div class="text-gray-700 text-base font-semibold leading-6 whitespace-nowrap">
                                        Spirit Learner
                                    </div>
                                    <div class="text-zinc-400 text-sm font-light leading-5 whitespace-nowrap mt-1">
                                        Full-Stack Developer
                                    </div>
                                </div>
                            </div>
                            <div class="text-neutral-800 text-base leading-7 self-stretch mt-7">
                                Kelasnya bagus bangett, makasih kakak
                                <br />
                                mentor
                            </div>
                            <div
                                class="items-stretch flex w-[116px] max-w-full gap-1 mt-12 max-md:justify-center max-md:mt-10">
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-[770px] max-w-full mt-5 self-start">
                <div class="gap-5 flex max-md:flex-col max-md:items-stretch max-md:gap-0">
                    <div class="flex flex-col items-stretch w-6/12 max-md:w-full max-md:ml-0">
                        <div
                            class="justify-center items-stretch bg-white flex w-full grow flex-col mx-auto pl-5 pr-14 py-5 rounded-2xl max-md:mt-5 max-md:pr-5">
                            <div class="items-stretch flex justify-between gap-4 pr-1">
                                <img loading="lazy" srcset="/src/images/content/hero.svg"
                                    class="aspect-square object-contain object-center w-[70px] overflow-hidden shrink-0 max-w-full" />
                                <div class="items-stretch self-center flex grow basis-[0%] flex-col my-auto">
                                    <div class="text-gray-700 text-base font-semibold leading-6 whitespace-nowrap">
                                        MASRIZAL EKA YULIANTO
                                    </div>
                                    <div class="text-zinc-400 text-sm font-light leading-5 whitespace-nowrap mt-1">
                                        Full-Stack Developer
                                    </div>
                                </div>
                            </div>
                            <div class="text-neutral-800 text-base leading-7 mt-7">
                                kelemahan cuma forum tidak pernah
                                <br />
                                dijawab aja
                            </div>
                            <div
                                class="items-stretch flex w-[116px] max-w-full gap-1 mt-12 max-md:justify-center max-md:mt-10">
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-stretch w-6/12 ml-5 max-md:w-full max-md:ml-0">
                        <div
                            class="justify-center bg-white flex w-full grow flex-col mx-auto pl-5 pr-20 py-5 rounded-2xl max-md:mt-5 max-md:pr-5">
                            <div class="items-stretch flex w-[248px] max-w-full gap-4 pr-px">
                                <img loading="lazy" srcset="/src/images/content/hero.svg"
                                    class="aspect-square object-contain object-center w-[70px] max-w-full overflow-hidden shrink-0" />
                                <div class="items-stretch self-center flex grow basis-[0%] flex-col my-auto">
                                    <div class="text-gray-700 text-base font-semibold leading-6 whitespace-nowrap">
                                        Bagus dwi prasetyo
                                    </div>
                                    <div class="text-zinc-400 text-sm font-light leading-5 whitespace-nowrap mt-1">
                                        UX Designer
                                    </div>
                                </div>
                            </div>
                            <div class="text-neutral-800 text-base leading-7 whitespace-nowrap mt-8">
                                mudah di pahami
                            </div>
                            <div
                                class="items-stretch flex w-[116px] max-w-full gap-1 mt-12 max-md:justify-center max-md:mt-10">
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                                <img loading="lazy" srcset="/src/images/content/star.svg"
                                    class="aspect-[1.11] object-contain object-center w-full overflow-hidden shrink-0 flex-1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button
                class="text-gray-700 text-center text-base font-semibold leading-6 whitespace-nowrap justify-center items-center bg-slate-200 w-[204px] max-w-full ml-72 mt-5 px-5 py-3 rounded-[100px] self-start max-md:ml-2.5">
                Load More Reviews
                </but>
                <!-- End of Details -->
        </div>

        <!-- End of Content Page -->
    @endsection
