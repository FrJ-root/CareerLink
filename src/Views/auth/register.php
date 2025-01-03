<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Career Link - Sign Up">
    <title>CareerLink - Sign Up</title>
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

    <main class="flex-grow bg-gradient-to-br from-purple-600 to-purple-400 py-10">
        <div class="container mx-auto px-4">
            <div class="bg-white rounded-lg shadow-xl max-w-4xl mx-auto flex overflow-hidden">
                <div class="w-1/2 p-12 relative bg-gradient-to-br from-purple-600 to-blue-600">

                    <div class="relative z-10">
                        <h1 class="text-4xl font-bold text-white mb-4">Welcome to CareerLink!</h1>
                        <p class="text-white/80 mb-8">
                            Join our professional community and unlock exciting career opportunities. Connect with top employers and take the next step in your career journey.
                        </p>
                        
                        <div class="space-y-4">
                            <p class="text-white/80 text-sm">sign up with social media</p>
                            <div class="flex space-x-4">
                                <button class="bg-blue-900/30 hover:bg-blue-900/40 text-white px-4 py-2 rounded">
                                    f
                                </button>
                                <button class="bg-blue-400 hover:bg-blue-500 text-white px-4 py-2 rounded flex items-center">
                                    <span class="mr-2">Sign up with Twitter</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="absolute inset-0 z-0 overflow-hidden">
                        <div class="absolute transform -rotate-45 top-[0%] left-[0%] w-[200px] h-[40px] bg-white/10 backdrop-blur-sm"></div>
                        <div class="absolute transform -rotate-45 top-[20%] left-[20%] w-[200px] h-[40px] bg-white/10 backdrop-blur-sm"></div>
                        <div class="absolute transform -rotate-45 top-[40%] left-[40%] w-[200px] h-[40px] bg-white/10 backdrop-blur-sm"></div>
                        <div class="absolute transform -rotate-45 top-[60%] left-[60%] w-[200px] h-[40px] bg-white/10 backdrop-blur-sm"></div>
                        <div class="absolute transform -rotate-45 top-[80%] left-[80%] w-[200px] h-[40px] bg-white/10 backdrop-blur-sm"></div>
                    </div>

                </div>

                <div class="w-1/2 p-12 bg-white">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-8">Create Your Account</h2>
                    
                    <form class="space-y-6" action="#" method="POST">

                        <div class="mb-4">
                            <label for="role" class="block text-gray-700 font-bold mb-2">Choose Your Role</label>
                            <select id="role" name="role" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                                <option value="" disabled selected>Select your role</option>
                                <option value="admin">Admin</option>
                                <option value="recruiter">Recruiter</option>
                                <option value="candidate">Candidate</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-2 gap-4">

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    First Name
                                </label>
                                <input
                                    type="text"
                                    name="firstName"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                    required
                                />
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">
                                    Last Name
                                </label>
                                <input
                                    type="text"
                                    name="lastName"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                    required
                                />
                            </div>

                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Email Address
                            </label>
                            <input
                                type="email"
                                name="email"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                required
                            />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Phone Number
                            </label>
                            <input
                                type="tel"
                                name="phone"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                required
                            />
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Password
                            </label>
                            <input
                                type="password"
                                name="password"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                required
                            />
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                Confirm Password
                            </label>
                            <input
                                type="password"
                                name="confirmPassword"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                                required
                            />
                        </div>

                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                class="h-4 w-4 text-purple-500 focus:ring-purple-500 border-gray-300 rounded"
                                required
                            />
                            <label class="ml-2 block text-sm text-gray-700">
                                I agree to the <a href="#" class="text-blue-600 hover:underline">Terms of Service</a> and <a href="#" class="text-blue-600 hover:underline">Privacy Policy</a>
                            </label>
                        </div>

                        <button
                            type="submit"
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-md transition duration-200"
                        >
                            Create Account
                        </button>

                    </form>

                    <div class="mt-6 text-center text-sm text-gray-500">
                        Already have an account?
                        <a href="/CareerLink/src/Views/auth/Login.php" class="text-blue-600 hover:underline">
                            Login here
                        </a>
                    </div>

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