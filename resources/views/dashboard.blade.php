<x-app-layout title="Dashboard">

    <div class="max-w-7xl mx-auto px-6 py-10">

        
        <div class="mb-8">
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 font-[Quicksand]">
                Halo, {{ $user->name }} 
            </h1>
            <p class="mt-2 text-slate-500">
                Semoga harimu menyenangkan dan produktif.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 sm:p-8 max-w-xl">

            <h2 class="text-lg font-semibold text-slate-800 mb-6">
                Informasi Karyawan
            </h2>

            <div class="space-y-4 text-sm">

                <div class="flex justify-between">
                    <span class="text-slate-500">Employee Code</span>
                    <span class="font-medium text-slate-800">
                        {{ $user->employee->employee_code }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-slate-500">Position</span>
                    <span class="font-medium text-slate-800">
                        {{ $user->employee->position->position }}
                    </span>
                </div>

                <div class="flex justify-between">
                    <span class="text-slate-500">Department</span>
                    <span class="font-medium text-slate-800">
                        {{ $user->employee->departement->departement }}
                    </span>
                </div>

            </div>

        </div>

    </div>

</x-app-layout>
