<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CareerLink - Admin Dashboard">
    <title>CareerLink - Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-gray-200 font-sans">

    <div class="flex h-screen">

        <aside class="w-64 bg-gray-800 text-gray-200">
            <div class="py-4 px-6">
                <h2 class="text-2xl font-bold">Admin Panel</h2>
            </div>
            <nav>
                <ul class="space-y-4 px-6">
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                            <span>🏠</span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                            <span>👤</span>
                            <span>Users</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                            <span>📄</span>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-2 hover:text-blue-400">
                            <span>⚙️</span>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <div class="flex-1 flex flex-col">

            <header class="bg-gray-800 shadow py-4 px-6 flex justify-between items-center">
                <h1 class="text-xl font-bold">Welcome, Admin</h1>
                <a href="/CareerLink/src/Views/index.php"><button class="bg-blue-600 px-4 py-2 rounded-md hover:bg-blue-700">Logout</button></a>
            </header>

            <main class="flex-1 p-6 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <div class="bg-gray-700 p-6 rounded-md shadow">
                        <h3 class="text-lg font-bold">Total Users</h3>
                        <p class="text-3xl font-bold mt-4">1,234</p>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-md shadow">
                        <h3 class="text-lg font-bold">New Jobs</h3>
                        <p class="text-3xl font-bold mt-4">87</p>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-md shadow">
                        <h3 class="text-lg font-bold">Pending Approvals</h3>
                        <p class="text-3xl font-bold mt-4">12</p>
                    </div>
                    <div class="bg-gray-700 p-6 rounded-md shadow">
                        <h3 class="text-lg font-bold">Revenue</h3>
                        <p class="text-3xl font-bold mt-4">$4,321</p>
                    </div>
                </div>

                <div class="bg-gray-800 p-6 rounded-md shadow">
                    <h2 class="text-2xl font-bold mb-4">Recent Activities</h2>
                    <table class="w-full text-left">
                        <thead>
                            <tr class="border-b border-gray-700">
                                <th class="py-2 px-4">User</th>
                                <th class="py-2 px-4">Action</th>
                                <th class="py-2 px-4">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-gray-700">
                                <td class="py-2 px-4">Jane Doe</td>
                                <td class="py-2 px-4">Created a job post</td>
                                <td class="py-2 px-4">2025-01-01</td>
                            </tr>
                            <tr class="border-b border-gray-700">
                                <td class="py-2 px-4">John Smith</td>
                                <td class="py-2 px-4">Approved a user</td>
                                <td class="py-2 px-4">2025-01-01</td>
                            </tr>
                            <tr>
                                <td class="py-2 px-4">Alice Brown</td>
                                <td class="py-2 px-4">Reported an issue</td>
                                <td class="py-2 px-4">2025-01-01</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>

        </div>

    </div>

</body>
</html>