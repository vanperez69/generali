<?php
$config = require 'f_config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $config['description']; ?>">
    <title><?php echo $config['siteName']; ?></title>
    <link rel="icon" type="image/png" href="favicon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }
        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: #000;
            margin: 5px 0;
            transition: 0.3s;
        }
        
        @media (max-width: 768px) {
            .hamburger {
                display: flex;
            }
        }

        /* Mobile menu overlay */
        .mobile-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            z-index: 40;
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-nav {
            position: fixed;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100vh;
            background-color: white;
            transition: left 0.3s ease-in-out;
            z-index: 50;
            overflow-y: auto;
        }

        .mobile-nav.active {
            left: 0;
        }

        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 28px;
            cursor: pointer;
        }
    </style>
</head>
<body class="font-sans bg-white text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="./" class="flex items-center">
                        <img src="logo.png" alt="<?php echo $config['siteName']; ?>" class="h-10 w-auto">
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="save" class="text-sm font-medium text-gray-700 hover:text-red-600">SAVE</a>
                    <a href="securities" class="text-sm font-medium text-gray-700 hover:text-red-600">SECURITIES</a>
                    <a href="account" class="text-sm font-medium text-gray-700 hover:text-red-600">ACCOUNT</a>
                    <a href="generali" class="text-sm font-medium text-gray-700 hover:text-red-600">GENERALI BANK</a>
                    <a href="service" class="text-sm font-medium text-gray-700 hover:text-red-600">SERVICE</a>
                </div>

                <!-- Search and Login -->
                <div class="hidden md:flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Search" class="px-3 py-2 border border-gray-300 rounded">
                        <button class="absolute right-3 top-2.5 text-gray-400">🔍</button>
                    </div>
                    <a href="_default" class="bg-red-600 text-white px-4 py-2 text-sm font-medium hover:bg-red-700">
    Internet Banking Login
</a>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="md:hidden flex items-center space-x-4">
                    <a href="_default" class="bg-red-600 text-white px-4 py-2 text-sm font-medium hover:bg-red-700">
    Login
</a>
                    <div class="hamburger" id="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu"></div>

    <!-- Mobile Navigation -->
    <div class="mobile-nav" id="mobileNav">
        <span class="close-btn" id="closeBtn">&times;</span>
        <div class="pt-20 px-6 space-y-4">
            <a href="save" class="block text-lg font-medium text-gray-700 hover:text-red-600 py-2">SAVE</a>
            <a href="securities" class="block text-lg font-medium text-gray-700 hover:text-red-600 py-2">SECURITIES</a>
            <a href="account" class="block text-lg font-medium text-gray-700 hover:text-red-600 py-2">ACCOUNT</a>
            <a href="generali" class="block text-lg font-medium text-gray-700 hover:text-red-600 py-2">GENERALI BANK</a>
            <a href="service" class="block text-lg font-medium text-gray-700 hover:text-red-600 py-2">SERVICE</a>
        </div>
    </div>

    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileNav = document.getElementById('mobileNav');
        const closeBtn = document.getElementById('closeBtn');

        hamburger.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            mobileNav.classList.add('active');
        });

        closeBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileNav.classList.remove('active');
        });

        mobileMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileNav.classList.remove('active');
        });

        // Close menu when clicking on a link
        const mobileNavLinks = mobileNav.querySelectorAll('a');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                mobileNav.classList.remove('active');
            });
        });
    </script>
