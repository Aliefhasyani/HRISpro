<x-app-layout title="Dashboard">

    <div class="max-w-7xl mx-auto px-6 py-10">

        <!-- Greeting -->
        <div class="mb-10">
            <h1 class="text-2xl sm:text-3xl font-bold text-slate-900 font-[Quicksand]">
                Halo, {{ $user->name }}
            </h1>
            <p class="mt-2 text-slate-500">
                Semoga harimu menyenangkan dan produktif.
            </p>
        </div>

        <!-- GRID -->
        <div class="grid lg:grid-cols-2 gap-8">

            <!-- EMPLOYEE INFO -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 sm:p-8">

                <h2 class="text-lg font-semibold text-slate-800 mb-6">
                    Informasi Karyawan
                </h2>

                <div class="space-y-4 text-sm">

                    <div class="flex justify-between">
                        <span class="text-slate-500">Employee Name</span>
                        <span class="font-medium text-slate-800">
                            {{ $user->employee->employee_name }}
                        </span>
                    </div>

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

            <!-- LEAVE INFO -->
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-6 sm:p-8">

                <h2 class="text-lg font-semibold text-slate-800 mb-6">
                    Informasi Leave
                </h2>

                <div class="space-y-4 text-sm">

                    <div class="flex justify-between">
                        <span class="text-slate-500">Leave Type</span>
                        <span class="font-medium text-slate-800">
                            {{ $user->employee->leaveBalance->leaveType->name }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-slate-500">Reason</span>
                        <span class="font-medium text-slate-800 text-right max-w-xs">
                            {{ $user->employee->leaveBalance->reason }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-slate-500">Start Date</span>
                        <span class="font-medium text-slate-800">
                            {{ $user->employee->leaveBalance->start_date }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-slate-500">End Date</span>
                        <span class="font-medium text-slate-800">
                            {{ $user->employee->leaveBalance->end_date }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-slate-500">Total Days</span>
                        <span class="font-medium text-slate-800">
                            {{ $user->employee->leaveBalance->total_days }}
                        </span>
                    </div>

                    <div class="flex justify-between items-center">
                        <span class="text-slate-500">Status</span>
                        <span class="rounded-full text-xs font-semibold
                                    text-blue-500">
                            {{ ucfirst($user->employee->leaveBalance->status) }}
                        </span>
                    </div>

                    <div class="flex justify-between">
                        <span class="text-slate-500">Approved By</span>
                        <span class="font-medium text-slate-800">
                            {{ $user->employee->leaveBalance->approvedBy->roles }}
                        </span>
                    </div>

                </div>
            </div>

        </div>

    </div>

</x-app-layout>
