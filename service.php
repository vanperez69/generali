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
            <span class="text-gray-600">Service</span>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
            <div class="bg-red-600 text-white p-8 md:p-16 flex flex-col justify-center">
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    The direct bank for private customers
                </h1>
            </div>
            <div class="overflow-hidden">
                <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=800&h=400&fit=crop" alt="Woman on phone" class="w-full h-64 md:h-auto object-cover">
            </div>
        </div>
    </div>
</div>

<!-- Service Line Section -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <h2 class="text-center text-3xl font-light mb-12">Service line</h2>
    
    <div class="bg-gray-100 rounded-lg p-12 text-center mb-16">
        <p class="text-4xl font-bold text-red-600 mb-4">
            📞 <?php echo $config['phone']; ?>
        </p>
        <p class="text-sm text-gray-600 mb-8">(Mon-Fri 8am-1pm)</p>
    </div>

    <!-- Services Grid -->
    <h2 class="text-center text-3xl font-light mb-12">Your Generali Bank – our service</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Blocking Hotline" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6 text-center">
                <h3 class="text-lg font-bold mb-2">Blocking hotline</h3>
                <p class="text-sm text-gray-700">Card blocking service in case of loss or theft. Domestic: 0810 500 100 – International: +43 1 260 87 0</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=300&fit=crop" alt="Branch Finder" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6 text-center">
                <h3 class="text-lg font-bold mb-2">Branch finder</h3>
                <p class="text-sm text-gray-700">Use the branch finder and find one of approximately 150 Generali branches nearby.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Download Center" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6 text-center">
                <h3 class="text-lg font-bold mb-2">Download Center</h3>
                <p class="text-sm text-gray-700">Important documents on all relevant topics concerning Generali Bank</p>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=300&fit=crop" alt="FAQ" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6 text-center">
                <h3 class="text-lg font-bold mb-2">FAQ</h3>
                <p class="text-sm text-gray-700">"Frequently asked questions" - here you will find answers to frequently asked questions</p>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Deposit Protection" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6 text-center">
                <h3 class="text-lg font-bold mb-2">Deposit protection</h3>
                <p class="text-sm text-gray-700">Generali Bank AG is a member of the Deposit Protection Austria Ltd. Your money is safe with us!</p>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=300&fit=crop" alt="Generali Austria" class="w-full h-48 object-cover">
            <div class="bg-pink-100 p-6 text-center">
                <h3 class="text-lg font-bold mb-2">Generali Austria</h3>
                <p class="text-sm text-gray-700">Generali Bank is part of Generali Austria – a being partnership!</p>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
