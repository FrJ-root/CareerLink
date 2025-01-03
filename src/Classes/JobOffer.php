<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Career Link - Login">
    <title>CareerLink - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans min-h-screen flex flex-col">

    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/CareerLink/src/Views/index.php" class="text-2xl font-bold text-blue-600">CareerLink</a>
            <ul class="flex space-x-6">
                <li><a href="/CareerLink/src/Views/index.php" class="text-gray-700 hover:text-blue-600">Home</a></li>
                <li><a href="/CareerLink/src/Classes/JobOffer.php" class="text-gray-700 hover:text-blue-600">Jobs</a></li>
            </ul>
            <div>
                <a href="/CareerLink/src/Views/auth/Login.php" class="text-gray-700 hover:text-blue-600 px-4 py-2">Login</a>
                <a href="/CareerLink/src/Views/auth/registre.php" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Sign Up</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8">

        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-6">Find Your Dream Job</h1>
            <form class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Job Title</label>
                    <input type="text" placeholder="e.g., Software Engineer" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Location</label>
                    <input type="text" placeholder="e.g., New York" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                    <select class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All Categories</option>
                        <option value="technology">Technology</option>
                        <option value="healthcare">Healthcare</option>
                        <option value="finance">Finance</option>
                        <option value="education">Education</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700">Search Jobs</button>
                </div>
            </form>
        </div>

        <!-- Filters and Results -->
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Filters Sidebar -->
            <div class="w-full md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="font-semibold text-lg mb-4">Filters</h2>
                    
                    <!-- Experience Level -->
                    <div class="mb-6">
                        <h3 class="font-medium text-gray-700 mb-2">Experience Level</h3>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">Entry Level</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">Mid Level</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">Senior Level</span>
                            </label>
                        </div>
                    </div>

                    <!-- Job Type -->
                    <div class="mb-6">
                        <h3 class="font-medium text-gray-700 mb-2">Job Type</h3>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">Full Time</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">Part Time</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">Contract</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">Remote</span>
                            </label>
                        </div>
                    </div>

                    <!-- Salary Range -->
                    <div class="mb-6">
                        <h3 class="font-medium text-gray-700 mb-2">Salary Range</h3>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">$0 - $50,000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">$50,000 - $100,000</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-blue-600">
                                <span class="ml-2 text-gray-600">$100,000+</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="Job-Listings" class="w-full md:w-3/4">

                <div class="flex justify-between items-center mb-4">
                    <p class="text-gray-600">Showing 150 jobs</p>
                    <select class="px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option>Most Recent</option>
                        <option>Most Relevant</option>
                        <option>Salary: High to Low</option>
                        <option>Salary: Low to High</option>
                    </select>
                </div>

                <div id="Job-Cards" class="space-y-4">

                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Senior Software Engineer</h3>
                                <p class="text-gray-600 mb-4">Google • New York, NY</p>
                                <div class="flex gap-2 mb-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Full Time</span>
                                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">Remote</span>
                                </div>
                            </div>
                            <span class="text-lg font-semibold text-gray-700">$120K - $150K</span>
                        </div>
                        <p class="text-gray-600 mb-4">We are seeking an experienced software engineer to join our team and help build scalable solutions...</p>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <span class="text-sm text-gray-500">Posted 2 days ago</span>
                                <span class="text-sm text-gray-500">•</span>
                                <span class="text-sm text-gray-500">45 applicants</span>
                            </div>
                            <button class="text-blue-600 hover:text-blue-700 font-medium">Apply Now</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Product Designer</h3>
                                <p class="text-gray-600 mb-4">Apple • San Francisco, CA</p>
                                <div class="flex gap-2 mb-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Full Time</span>
                                    <span class="px-3 py-1 bg-purple-100 text-purple-600 rounded-full text-sm">On-site</span>
                                </div>
                            </div>
                            <span class="text-lg font-semibold text-gray-700">$90K - $120K</span>
                        </div>
                        <p class="text-gray-600 mb-4">Join our design team to create beautiful and intuitive user experiences for millions of users...</p>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <span class="text-sm text-gray-500">Posted 5 days ago</span>
                                <span class="text-sm text-gray-500">•</span>
                                <span class="text-sm text-gray-500">28 applicants</span>
                            </div>
                            <button class="text-blue-600 hover:text-blue-700 font-medium">Apply Now</button>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Marketing Manager</h3>
                                <p class="text-gray-600 mb-4">Netflix • Los Angeles, CA</p>
                                <div class="flex gap-2 mb-4">
                                    <span class="px-3 py-1 bg-blue-100 text-blue-600 rounded-full text-sm">Full Time</span>
                                    <span class="px-3 py-1 bg-green-100 text-green-600 rounded-full text-sm">Hybrid</span>
                                </div>
                            </div>
                            <span class="text-lg font-semibold text-gray-700">$85K - $110K</span>
                        </div>
                        <p class="text-gray-600 mb-4">Looking for an experienced marketing manager to lead our digital marketing initiatives...</p>
                        <div class="flex justify-between items-center">
                            <div class="flex gap-2">
                                <span class="text-sm text-gray-500">Posted 1 week ago</span>
                                <span class="text-sm text-gray-500">•</span>
                                <span class="text-sm text-gray-500">62 applicants</span>
                            </div>
                            <button class="text-blue-600 hover:text-blue-700 font-medium">Apply Now</button>
                        </div>
                    </div>
                </div>

                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center space-x-2">
                        <button class="px-3 py-2 rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200">Previous</button>
                        <button class="px-3 py-2 rounded-md bg-blue-600 text-white">1</button>
                        <button class="px-3 py-2 rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200">2</button>
                        <button class="px-3 py-2 rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200">3</button>
                        <button class="px-3 py-2 rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200">Next</button>
                    </nav>
                </div>

            </div>
        </div>
    </main>

    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 <b class="text-xl">CareerLink</b>. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>