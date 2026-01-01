<?php
$config = require 'f_config.php';
?>
<?php include 'header.php'; ?>

<!-- Breadcrumb -->
<div class="bg-gray-50 border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
        <nav class="text-sm">
            <a href="#" class="text-red-600 hover:text-red-700">Home</a>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<div class="bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
            <!-- Left side - Red background with text -->
            <div class="bg-red-600 text-white p-8 md:p-16 flex flex-col justify-center">
                <h1 class="text-4xl md:text-5xl font-light leading-tight">
                    The direct bank for private customers
                </h1>
            </div>
            <!-- Right side - Image -->
            <div class="overflow-hidden">
                <img src="generai.jpg?w=800&h=400&fit=crop" alt="Business professionals" class="w-full h-64 md:h-auto object-cover">
            </div>
        </div>
    </div>
</div>

<!-- Service Line Section -->
<div class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-2xl font-light mb-8">Service line</h2>
        <div class="bg-white rounded-lg p-8 text-center">
            <p class="text-3xl font-bold text-red-600 mb-4">
                📞 <?php echo $config['phone']; ?> <span class="text-sm text-gray-600">(Mon-Fri 8am-1pm)</span>
            </p>
        </div>
    </div>
</div>

<!-- My Generali Bank Section -->
<div class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-light mb-12">My <?php echo $config['siteName']; ?></h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Internet Banking" class="w-full h-48 object-cover">
                <div class="bg-pink-100 p-6">
                    <h3 class="text-xl font-bold mb-2">Internet Banking</h3>
                    <p class="text-sm text-gray-700">With our online banking service, you can handle your banking transactions flexibly from your computer.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1484480974693-6ca0a78fb36b?w=400&h=300&fit=crop" alt="Mobile Banking" class="w-full h-48 object-cover">
                <div class="bg-pink-100 p-6">
                    <h3 class="text-xl font-bold mb-2">Mobile Banking</h3>
                    <p class="text-sm text-gray-700">Mobile Banking is now available for free download in the iOS and Android app stores.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Telephone Banking" class="w-full h-48 object-cover">
                <div class="bg-pink-100 p-6">
                    <h3 class="text-xl font-bold mb-2">Telephone Banking</h3>
                    <p class="text-sm text-gray-700">Conduct your banking transactions conveniently, securely and easily by phone.</p>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 4 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=300&fit=crop" alt="Types of drawings" class="w-full h-48 object-cover">
                <div class="bg-pink-100 p-6">
                    <h3 class="text-xl font-bold mb-2">Types of drawings</h3>
                    <p class="text-sm text-gray-700">You can choose from various drawing methods to carry out your orders.</p>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=400&h=300&fit=crop" alt="Course information" class="w-full h-48 object-cover">
                <div class="bg-pink-100 p-6">
                    <h3 class="text-xl font-bold mb-2">Course information</h3>
                    <p class="text-sm text-gray-700">Take advantage of the opportunity to query current exchange rates.</p>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="PSD2" class="w-full h-48 object-cover">
                <div class="bg-pink-100 p-6">
                    <h3 class="text-xl font-bold mb-2">PSD2</h3>
                    <p class="text-sm text-gray-700">PSD2 is an EU directive regulating payment services and payment service providers.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Information Section -->
<div class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-center text-3xl font-light mb-12">Information in simple language</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="flex items-start space-x-4">
                <span class="text-red-600 text-3xl">✓</span>
                <div>
                    <h3 class="font-bold text-red-600 mb-2"><a href="#" class="hover:underline">Payment account and payment transactions</a></h3>
                    <p class="text-sm text-gray-700">What is a payment account? How does payment processing work? Find all the information at this link.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <span class="text-red-600 text-3xl">✓</span>
                <div>
                    <h3 class="font-bold text-red-600 mb-2"><a href="#" class="hover:underline">credit card</a></h3>
                    <p class="text-sm text-gray-700">What is a credit card? How do I use a credit card? All the information is available at this link.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <span class="text-red-600 text-3xl">✓</span>
                <div>
                    <h3 class="font-bold text-red-600 mb-2"><a href="#" class="hover:underline">Debit card</a></h3>
                    <p class="text-sm text-gray-700">What is a debit card? How can I use a debit card? All the information is available at this link.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <span class="text-red-600 text-3xl">✓</span>
                <div>
                    <h3 class="font-bold text-red-600 mb-2"><a href="#" class="hover:underline">Securities transactions</a></h3>
                    <p class="text-sm text-gray-700">What are securities transactions? How do I invest money in securities? All the information is available at this link.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <span class="text-red-600 text-3xl">✓</span>
                <div>
                    <h3 class="font-bold text-red-600 mb-2"><a href="#" class="hover:underline">Loans</a></h3>
                    <p class="text-sm text-gray-700">What is a loan? How can I get a loan? All the information is available at this link.</p>
                </div>
            </div>

            <div class="flex items-start space-x-4">
                <span class="text-red-600 text-3xl">✓</span>
                <div>
                    <h3 class="font-bold text-red-600 mb-2"><a href="#" class="hover:underline">Electronic commerce</a></h3>
                    <p class="text-sm text-gray-700">What is electronic commerce? How can I use it? All the information is available at this link.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
