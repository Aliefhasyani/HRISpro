<x-app-layout>

    <p>Halo {{ $user->name }} Apa Kabar</p>
    <p>{{ $user->employee->employee_code}}
    <p>{{ $user->employee->position->position }}

</x-app-layout>
