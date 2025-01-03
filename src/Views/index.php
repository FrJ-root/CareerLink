<?php 
require_once __DIR__."/../../vendor/autoload.php";
use FrJ\Config\Database;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Career Link">
    <title>CareerLink - Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans bg-gradient-to-br from-purple-600 to-purple-400">
    
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

    <section class="bg-blue-600 text-white py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl font-bold mb-4">Connect with Professionals Around the World</h1>
            <p class="mb-6">Build your network, find jobs, and grow your career all in one place.</p>
            <a href="#" class="bg-white text-blue-600 px-6 py-3 rounded-md text-lg font-semibold hover:bg-gray-200">Get Started</a>
        </div>
    </section>

    <section class="py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">Features</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-md p-6 text-center">
                    <h3 class="text-xl font-bold mb-2">Professional Networking</h3>
                    <p>Connect with professionals in your industry and beyond.</p>
                </div>
                <div class="bg-white shadow-md rounded-md p-6 text-center">
                    <h3 class="text-xl font-bold mb-2">Job Opportunities</h3>
                    <p>Find your dream job with ease and apply directly.</p>
                </div>
                <div class="bg-white shadow-md rounded-md p-6 text-center">
                    <h3 class="text-xl font-bold mb-2">Skill Development</h3>
                    <p>Access resources to grow your knowledge and skills.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-gray-200 py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10">What Our Users Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-md p-6">
                    <p class="mb-4">"This platform has transformed my career! Highly recommend it to everyone."</p>
                    <h4 class="font-bold">- Jane Doe</h4>
                </div>
                <div class="bg-white shadow-md rounded-md p-6">
                    <p class="mb-4">"I landed my dream job within a month of joining. Amazing experience!"</p>
                    <h4 class="font-bold">- John Smith</h4>
                </div>
                <div class="bg-white shadow-md rounded-md p-6">
                    <p class="mb-4">"The best place to build your professional network and learn."</p>
                    <h4 class="font-bold">- Emily Johnson</h4>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2024 <b class="text-xl">CareerLink</b>. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>