<x-app-layout title="Homepage">

    <!-- HERO SECTION -->
    <div class="relative w-full h-[70vh] overflow-hidden">

        <img
            src="{{ asset('images/carousell.png') }}"
            alt="HRIS Hero"
            class="absolute inset-0 w-full h-full object-cover scale-105 blur-sm"
        >

        <div class="absolute inset-0 bg-slate-900/75"></div>

        <div class="relative z-10 flex items-center justify-center h-full px-6 text-center">
            <div class="max-w-3xl">

                <h1 class="text-3xl sm:text-4xl lg:text-5xl
                           font-bold font-[Quicksand]
                           text-white leading-tight">
                    Pilihan Terbaik Untuk<br>
                    Manajemen HRD Anda
                </h1>

                <p class="mt-6 text-base sm:text-lg
                          text-slate-200 font-[Quicksand] leading-relaxed">
                    Kelola karyawan, absensi, dan seluruh data HR
                    dengan lebih efisien melalui satu platform
                    terintegrasi yang modern dan mudah digunakan.
                </p>

                @guest
                    <div class="mt-10 flex justify-center gap-4">
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

    <!-- ABOUT SECTION 1 -->
    <section class="py-24 bg-white dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <!-- Text -->
                <div>
                    <span class="text-sm uppercase tracking-widest
                                 text-blue-600 font-semibold">
                        About HRISPro
                    </span>

                    <h3 class="mt-3 text-2xl sm:text-3xl font-bold
                               text-slate-900 dark:text-slate-100
                               font-[Quicksand]">
                        Solusi HR Modern & Terintegrasi
                    </h3>

                    <p class="mt-5 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]">
                        HRISPro hadir sebagai solusi digital untuk membantu
                        perusahaan dalam mengelola seluruh proses
                        sumber daya manusia secara lebih terstruktur dan efisien.
                        Mulai dari pendataan karyawan, absensi,
                        hingga administrasi HR, semuanya terintegrasi
                        dalam satu sistem yang aman dan mudah digunakan.
                    </p>

                    <p class="mt-4 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]">
                        Dengan sistem berbasis web yang fleksibel,
                        HRISPro memungkinkan tim HR dan manajemen
                        mengakses informasi secara real-time,
                        kapan saja dan di mana saja, tanpa hambatan.
                    </p>
                </div>

                <!-- Image -->
                <div class="flex justify-center">
                    <img
                        src="{{ asset('images/about-1.png') }}"
                        alt="HR Management"
                        class="w-full max-w-md rounded-2xl shadow-xl"
                    >
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT SECTION 2 -->
    <section class="py-24 bg-slate-50 dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-16 items-center">

                <!-- Image -->
                <div class="flex justify-center md:order-1">
                    <img
                        src="{{ asset('images/about-2.png') }}"
                        alt="HR Dashboard"
                        class="w-full max-w-md rounded-2xl shadow-xl"
                    >
                </div>

                <!-- Text -->
                <div class="md:order-2">
                    <span class="text-sm uppercase tracking-widest
                                 text-blue-600 font-semibold">
                        Why Choose Us
                    </span>

                    <h3 class="mt-3 text-2xl sm:text-3xl font-bold
                               text-slate-900 dark:text-slate-100
                               font-[Quicksand]">
                        Efisiensi yang Mendukung Pertumbuhan
                    </h3>

                    <p class="mt-5 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]">
                        HRISPro membantu mengurangi pekerjaan manual
                        melalui otomatisasi proses HR yang cerdas.
                        Hal ini memungkinkan tim HR untuk lebih fokus
                        pada strategi pengembangan karyawan dan
                        peningkatan produktivitas perusahaan.
                    </p>

                    <p class="mt-4 text-slate-600 dark:text-slate-300
                              leading-relaxed font-[Quicksand]">
                        Dengan dashboard yang informatif dan mudah dipahami,
                        pengambilan keputusan menjadi lebih cepat,
                        akurat, dan berbasis data,
                        sehingga perusahaan dapat tumbuh secara
                        berkelanjutan.
                    </p>
                </div>

            </div>
        </div>
    </section>

</x-app-layout>
