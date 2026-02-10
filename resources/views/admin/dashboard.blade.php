<x-app-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold mb-4">Admin Dashboard</h1>

        <div class="grid grid-cols-2 gap-4">
            <div class="bg-white p-4 shadow rounded">
                <h2>Total Employees</h2>
                <p class="text-xl font-bold">{{ $data['employees'] }}</p>
            </div>

            <div class="bg-white p-4 shadow rounded">
                <h2>Total Departments</h2>
                <p class="text-xl font-bold">{{ $data['departments'] }}</p>
            </div>

            <div class="bg-white p-4 shadow rounded">
                <h2>Total Projects</h2>
                <p class="text-xl font-bold">{{ $data['projects'] }}</p>
            </div>

            <div class="bg-white p-4 shadow rounded">
                <h2>Pending Leaves</h2>
                <p class="text-xl font-bold">{{ $data['pendingLeaves'] }}</p>
            </div>
        </div>
    </div>
</x-app-layout>
