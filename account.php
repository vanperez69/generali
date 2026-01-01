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
            <span class="text-gray-600">Account</span>
            <span class="text-gray-600"> / </span>
            <span class="text-gray-600">Current accounts at a glance</span>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
            <div class="bg-red-600 text-white p-8 md:p-16 flex flex-col justify-center">
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    Current accounts at a glance
                </h1>
            </div>
            <div class="overflow-hidden">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=800&h=400&fit=crop" alt="Family with laptop" class="w-full h-64 md:h-auto object-cover">
            </div>
        </div>
    </div>
</div>

<!-- Page Title -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-center text-3xl font-light mb-12">Current accounts at a glance</h2>
    
    <!-- Economy Account -->
    <div class="bg-pink-100 rounded-lg p-8 mb-8">
        <h3 class="text-2xl font-light mb-6">Economy Account</h3>
        <ul class="space-y-2 text-sm mb-6">
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Account including debit card</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Credit cards available for purchase</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Limited number of free booking lines</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Account management fee: EUR 19.76 per quarter.</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Booking lines: 30 per quarter included, each additional EUR 0.13</span>
            </li>
        </ul>
        <a href="#" class="text-red-600 font-bold hover:underline">More information about the Economy Account</a>
    </div>

    <!-- All Inclusive Account -->
    <div class="bg-pink-100 rounded-lg p-8 mb-12">
        <h3 class="text-2xl font-light mb-6">All Inclusive Account</h3>
        <ul class="space-y-2 text-sm mb-6">
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Account package with debit card and credit card (flat-rate billing)</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Additional credit cards available for purchase</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>All booking lines included</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Account management fee: EUR 32.97 per quarter.</span>
            </li>
            <li class="flex items-start">
                <span class="text-red-600 mr-3">■</span>
                <span>Booking lines: All included</span>
            </li>
        </ul>
        <a href="#" class="text-red-600 font-bold hover:underline">More information about the All Inclusive Account</a>
    </div>

    <!-- FAQ Section -->
    <h2 class="text-center text-2xl font-light mb-8">Questions about accounts & cards</h2>
    
    <div class="space-y-4">
        <details class="border border-gray-300 rounded-lg">
            <summary class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="flex items-center">
                    <span class="text-red-600 text-2xl mr-3">?</span>
                    <span class="font-medium">What conditions must be met to be granted an exemption?</span>
                </span>
                <span>▼</span>
            </summary>
            <div class="p-4 bg-gray-50 border-t border-gray-300">
                <p>Details about the conditions for exemption would be displayed here.</p>
            </div>
        </details>

        <details class="border border-gray-300 rounded-lg">
            <summary class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="flex items-center">
                    <span class="text-red-600 text-2xl mr-3">?</span>
                    <span class="font-medium">What is meant by a booking line?</span>
                </span>
                <span>▼</span>
            </summary>
            <div class="p-4 bg-gray-50 border-t border-gray-300">
                <p>A booking line is a transaction on your account.</p>
            </div>
        </details>

        <details class="border border-gray-300 rounded-lg">
            <summary class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="flex items-center">
                    <span class="text-red-600 text-2xl mr-3">?</span>
                    <span class="font-medium">What should you do if your debit card (Maestro card) or credit card is stolen?</span>
                </span>
                <span>▼</span>
            </summary>
            <div class="p-4 bg-gray-50 border-t border-gray-300">
                <p>You should immediately contact our service line or visit your nearest branch.</p>
            </div>
        </details>

        <details class="border border-gray-300 rounded-lg">
            <summary class="flex items-center justify-between p-4 cursor-pointer hover:bg-gray-50">
                <span class="flex items-center">
                    <span class="text-red-600 text-2xl mr-3">?</span>
                    <span class="font-medium">Where can I find more answers?</span>
                </span>
                <span>▼</span>
            </summary>
            <div class="p-4 bg-gray-50 border-t border-gray-300">
                <p>More answers can be found in our FAQ section or by contacting our service team.</p>
            </div>
        </details>
    </div>
</div>

<?php include 'footer.php'; ?>
