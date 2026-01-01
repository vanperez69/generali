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
            <a href="#" class="text-red-600 hover:text-red-700">Securities</a>
            <span class="text-gray-600"> / </span>
            <span class="text-gray-600">Overview of securities products</span>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
            <div class="bg-red-600 text-white p-8 md:p-16 flex flex-col justify-center">
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    Overview of securities products
                </h1>
            </div>
            <div class="overflow-hidden">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=400&fit=crop" alt="Business meeting" class="w-full h-64 md:h-auto object-cover">
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-center text-3xl font-light mb-12">Overview of securities products</h2>
    
<div class="text-center mb-16">
        <p class="text-red-600 font-bold text-lg"><a href="#" class="hover:underline">Offers only for existing customers *</a></p>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <!-- Depot Card -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=300&fit=crop" alt="Depot" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6">
                <h3 class="text-xl font-bold mb-2">depot</h3>
                <p class="text-sm text-gray-700">With the Generali Bank custody account, the world of financial markets is open to you.</p>
            </div>
        </div>

        <!-- Investment Plan Card -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Investment Plan" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6">
                <h3 class="text-xl font-bold mb-2">Investment plan</h3>
                <p class="text-sm text-gray-700">Invest in the future with even small monthly contributions.</p>
            </div>
        </div>

        <!-- Tax Issues Card -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=300&fit=crop" alt="Tax Issues" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6">
                <h3 class="text-xl font-bold mb-2">Tax issues</h3>
                <p class="text-sm text-gray-700">Useful information about capital gains tax and the profit allowance.</p>
            </div>
        </div>
    </div>

    <!-- Information Section -->
    <div class="bg-gray-50 p-8 rounded-lg mb-8">
        <p class="text-center text-lg mb-4">*Offers only for existing customers – information for new customers</p>
        
        <p class="text-sm text-gray-700 mb-4">Founded in 2002, Generali Bank is part of the Generali Group, which has been successfully operating in Austria for generations and is firmly established in the international economy. Generali Austria is focusing on its core competency of insurance and, as announced in a press release in March 2017, is gradually withdrawing from the banking business.</p>
        
        <p class="text-sm text-gray-700 mb-4">As part of this ongoing process, current and securities products will be removed from Generali Bank's offerings starting in December 2018 and will therefore no longer be available to new customers.</p>
        
        <p class="text-sm text-gray-700 mb-4"><strong>Savings accounts are currently not affected by this change. New customers will continue to be accepted in this business area.</strong> Generali Bank AG is a member of the Deposit Protection Fund Austria (Einlagensicherung AUSTRIA Ges.mbH), which guarantees the payout of savings deposits and current account balances.</p>
        
        <p class="text-sm text-gray-700"><strong>Generali Bank customers will continue to receive the same high-quality service in all business areas.</strong> <a href="#" class="text-red-600 hover:underline">Back to content</a></p>
    </div>
</div>

<?php include 'footer.php'; ?>
