<?php
$config = require 'f_config.php';
?>
<?php include 'header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <nav class="text-sm">
            <a href="index.php" class="text-red-600 hover:text-red-700">Home</a>
            <span class="text-gray-600"> / </span>
            <span class="text-gray-600">Save</span>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
            <div class="bg-red-600 text-white p-8 md:p-16 flex flex-col justify-center">
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    The savings account
                </h1>
            </div>
            <div class="overflow-hidden">
                <img src="save.jpg?w=800&h=400&fit=crop" alt="Family" class="w-full h-64 md:h-auto object-cover">
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-center text-3xl font-light mb-12">The investment account – money market account</h2>

    <p class="text-center text-gray-700 mb-12 max-w-3xl mx-auto">Saving becomes even easier with the Investment Account, the Generali Bank's instant access savings account. You can access your savings at any time online, mobile, and telephone banking – complete flexibility for your instant access savings is guaranteed! The Investment Account is ideal for temporarily parking spare funds.</p>

    <!-- Advantages Section -->
    <div class="bg-gray-50 rounded-lg p-8 mb-12">
        <h3 class="text-center text-2xl font-light mb-8">Advantages at a glance</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h4 class="font-bold mb-3">Interest</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <span class="text-red-600 mr-3">■</span>
                        <span>Savings account with a fixed interest rate of 0.10% p.a.</span>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-3">Available at any time</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <span class="text-red-600 mr-3">■</span>
                        <span>No fixed term - your savings are available daily.</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-red-600 mr-3">■</span>
                        <span>No minimum deposit required.</span>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-3">Maximum flexibility</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <span class="text-red-600 mr-3">■</span>
                        <span>You can easily and conveniently access your savings account via internet or telephone.</span>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-3">Additional Info</h4>
                <p class="text-sm text-gray-700">The interest rate applies to new openings from June 1st, 2021 and is fixed.</p>
            </div>
        </div>
    </div>

    <!-- Terms and Conditions Section -->
    <div class="bg-gray-50 rounded-lg p-8 mb-12">
        <h3 class="text-center text-2xl font-light mb-8">Terms and conditions</h3>
        
        <div class="space-y-4">
            <div>
                <h4 class="font-bold">Account management</h4>
                <p class="text-sm text-gray-700">is free</p>
            </div>

            <div>
                <h4 class="font-bold">Interest rate</h4>
                <p class="text-sm text-gray-700">0.10% p.a. fixed interest rate</p>
            </div>

            <div>
                <h4 class="font-bold">No minimum deposit</h4>
                <p class="text-sm text-gray-700">required</p>
            </div>

            <div>
                <h4 class="font-bold">Maximum deposit</h4>
                <p class="text-sm text-gray-700">EUR 1,000,000</p>
            </div>

            <div>
                <h4 class="font-bold">Bank statement</h4>
                <p class="text-sm text-gray-700">Electronic statement, free once a year; Postal statement, postage costs apply</p>
            </div>

            <div>
                <p class="text-xs text-gray-600 mt-4">The interest rate applies to new openings from June 1st, 2021 and is fixed.</p>
            </div>
        </div>

        <!-- PDFs -->
        <div class="space-y-3 mt-8 pt-8 border-t border-gray-300">
            <p class="flex items-start">
                <span class="text-red-600 mr-3">□</span>
                <a href="#" class="text-red-600 font-bold hover:underline">Price list for savings & deposits 01.01.2025 (pdf)</a>
            </p>
            <p class="flex items-start">
                <span class="text-red-600 mr-3">□</span>
                <a href="#" class="text-red-600 font-bold hover:underline">Price list General charges 01.01.2025 (pdf)</a>
            </p>
        </div>
    </div>

    <!-- Account Opening Process -->
    <h3 class="text-center text-2xl font-light mb-8">Account opening process</h3>

    <details class="border border-gray-300 rounded-lg mb-8">
        <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-gray-50">
            <span class="flex items-center text-lg font-medium">
                <span class="text-red-600 text-3xl mr-4">❤️</span>
                <span>How do I open an investment account?</span>
            </span>
            <span class="text-xl">▼</span>
        </summary>
        <div class="p-6 bg-gray-50 border-t border-gray-300">
            <p class="text-sm text-gray-700 mb-4">To open an investment account with Generali Bank, please follow these steps:</p>
            <ol class="list-decimal list-inside space-y-2 text-sm text-gray-700">
                <li>Contact our service team</li>
                <li>Complete the application form</li>
                <li>Verify your identity</li>
                <li>Make your first deposit</li>
            </ol>
        </div>
    </details>

    <!-- Action Button -->
    <div class="text-center mb-12">
        <button class="bg-red-600 text-white px-8 py-3 font-bold hover:bg-red-700 text-sm uppercase">
            OPEN AN INVESTMENT ACCOUNT (PDF, 179 kb)
        </button>
    </div>

    <!-- Conditions Section -->
    <h3 class="text-center text-2xl font-light mb-8">Conditions</h3>

    <div class="space-y-4">
        <p class="flex items-start">
            <span class="text-red-600 mr-3">□</span>
            <a href="#" class="text-red-600 font-bold hover:underline">Terms and conditions for savings accounts 01.01.2024 (pdf, 116 KB)</a>
        </p>
        <p class="flex items-start">
            <span class="text-red-600 mr-3">□</span>
            <a href="#" class="text-red-600 font-bold hover:underline">General Terms and Conditions of Generali Bank AG, 1 March 2024 (pdf, 236 KB)</a>
        </p>
        <p class="flex items-start">
            <span class="text-red-600 mr-3">□</span>
            <a href="#" class="text-red-600 font-bold hover:underline">Information on data processing in accordance with the Market Abuse Regulation EMIR (Laenderling Act (EMarking) and the Common Reporting Standard Act (GRSA), 01.01.2017 (pdf, 47 KB)</a>
        </p>
        <p class="flex items-start">
            <span class="text-red-600 mr-3">□</span>
            <a href="#" class="text-red-600 font-bold hover:underline">Information pursuant to Sections 5.7 and 8 of the Distance Financial Services Act 11/2014 (pdf, 165 KB)</a>
        </p>
        <p class="flex items-start">
            <span class="text-red-600 mr-3">□</span>
            <a href="#" class="text-red-600 font-bold hover:underline">Information on deposit protection and investor compensation 01.06.2021 (pdf, 115 KB)</a>
        </p>
        <p class="flex items-start">
            <span class="text-red-600 mr-3">□</span>
            <a href="#" class="text-red-600 font-bold hover:underline">Terms and conditions for Internet and telephone banking 01.11.2022 (pdf, 316 KB)</a>
        </p>
    </div>
</div>

<?php include 'footer.php'; ?>
