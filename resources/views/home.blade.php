<x-app-layout title="Homepage">

    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    @endpush

    <div class="relative w-full h-[70vh] overflow-hidden">
        <img
            src="{{ asset('images/carousell.png') }}"
            alt="HRIS Hero"
            class="absolute inset-0 w-full h-full object-cover scale-105 blur-sm"
        >

        <div class="absolute inset-0 bg-slate-900/75"></div>

        <div class="relative z-10 flex items-center justify-center h-full px-6 text-center">
            <div class="max-w-3xl reveal">

                <h1 class="text-3xl sm:text-4xl lg:text-5xl
                           font-bold font-[Quicksand]
                           text-white leading-tight reveal-delay-1">
                    Pilihan Terbaik Untuk<br>
                    Manajemen HRD Anda
                </h1>

                <p class="mt-6 text-base sm:text-lg
                          text-slate-200 font-[Quicksand] leading-relaxed
                          reveal-delay-2">
                    Kelola karyawan, absensi, dan seluruh data HR
                    dengan lebih efisien melalui satu platform
                    terintegrasi yang modern dan mudah digunakan.
                </p>

                @guest
                    <div class="mt-10 flex justify-center gap-4 reveal-delay-3">
                        <a href="{{ route('login') }}"
                           class="px-7 py-3 rounded-xl
                                  bg-blue-600 hover:bg-blue-700
                                  text-white text-sm font-semibold
                                  transition shadow-lg">
                            Sign In
                        </a>

                        <a href="{{ route('register') }}"
                           class="px-7 py-3 rounded-xl
                                  border border-white/70
                                  text-white hover:bg-white/10
                                  text-sm font-semibold
                                  transition">
                            Register
                        </a>
                    </div>
                @endguest

            </div>
        </div>
    </div>

    {{-- ================= ABOUT 1 ================= --}}
    <section class="py-24 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <div class="reveal">
                    <span class="text-sm uppercase tracking-widest
                                 text-blue-600 font-semibold">
                        About HRISPro
                    </span>

                    <h3 class="mt-3 text-2xl sm:text-3xl font-bold
                               text-slate-900 dark:text-slate-100
                               font-[Quicksand] reveal-delay-1">
                        Solusi HR Modern & Terintegrasi
                    </h3>

                    <p class="mt-5 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]
                              reveal-delay-2">
                        HRISPro hadir sebagai solusi digital untuk membantu
                        perusahaan mengelola proses sumber daya manusia
                        secara lebih terstruktur dan efisien.
                    </p>

                    <p class="mt-4 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]
                              reveal-delay-3">
                        Dengan sistem berbasis web yang fleksibel,
                        HRISPro memungkinkan akses data HR secara
                        real-time kapan saja dan di mana saja.
                    </p>
                </div>

                <div class="flex justify-center reveal reveal-delay-2">
                    <img
                        src="{{ asset('images/about-1.png') }}"
                        class="w-full max-w-md rounded-2xl shadow-xl"
                        alt="HR Management"
                    >
                </div>

            </div>
        </div>
    </section>

    {{-- ================= ABOUT 2 ================= --}}
    <section class="py-24 bg-slate-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <div class="flex justify-center md:order-1 reveal">
                    <img
                        src="{{ asset('images/about-2.png') }}"
                        class="w-full max-w-md rounded-2xl shadow-xl reveal-delay-1"
                        alt="HR Dashboard"
                    >
                </div>

                <div class="md:order-2 reveal">
                    <span class="text-sm uppercase tracking-widest
                                 text-blue-600 font-semibold">
                        Why Choose Us
                    </span>

                    <h3 class="mt-3 text-2xl sm:text-3xl font-bold
                               text-slate-900 dark:text-slate-100
                               font-[Quicksand] reveal-delay-1">
                        Efisiensi yang Mendukung Pertumbuhan
                    </h3>

                    <p class="mt-5 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]
                              reveal-delay-2">
                        Otomatisasi proses HR membantu mengurangi
                        pekerjaan manual dan meningkatkan produktivitas.
                    </p>

                    <p class="mt-4 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]
                              reveal-delay-3">
                        Keputusan bisnis menjadi lebih cepat,
                        akurat, dan berbasis data.
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- ================= MISSION ================= --}}
    <section class="py-32 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">

            <div class="max-w-3xl reveal">
                <span class="text-sm uppercase tracking-widest
                            text-blue-600 font-semibold">
                    Our Mission
                </span>

                <h3 class="mt-4 text-2xl sm:text-3xl lg:text-4xl
                        font-bold font-[Quicksand]
                        text-slate-900 dark:text-slate-100
                        leading-tight reveal-delay-1">
                    Membangun Sistem HR<br class="hidden sm:block">
                    yang Efisien & Manusiawi
                </h3>
            </div>

            <div class="mt-16 grid lg:grid-cols-3 gap-16 items-start">

                <div class="lg:col-span-2 space-y-6 reveal reveal-delay-2">
                    <p class="text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]">
                        HRISPro dikembangkan untuk membantu perusahaan
                        membangun lingkungan kerja yang lebih transparan,
                        produktif, dan berorientasi jangka panjang.
                    </p>

                    <p class="text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]">
                        Kami percaya teknologi HR harus mendukung
                        manusia, bukan menggantikannya.
                    </p>
                </div>

                <div class="flex justify-center lg:justify-end reveal reveal-delay-3">
                    <img
                        src="{{ asset('images/mission.jpg') }}"
                        class="w-full max-w-sm rounded-2xl shadow-xl"
                        alt="Mission"
                    >
                </div>

            </div>

        </div>
    </section>


</x-app-layout>
