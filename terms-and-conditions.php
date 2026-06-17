<?php
// Terms and Conditions Page - Chhota Bheem Family Cafe
$page_title = "Terms and Conditions | Chhota Bheem Family Cafe";
$nav_links = [
    "Franchise" => "franchise",
    "Market" => "market",
    "Investment" => "investment",
    "Revenue" => "revenue",
    "Why Bheem" => "why",
    "Backing" => "backing"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($page_title) ?></title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts: Libre Caslon Text + Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['"Libre Caslon Text"', 'Georgia', 'serif'],
                        body: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            orange: '#E8742A',
                            'orange-light': '#F5924A',
                            'orange-dark': '#C85E18',
                            cream: '#FAF6F0',
                            'cream-dark': '#F2EBE0',
                            dark: '#1A1410',
                            'dark-2': '#2C2016',
                            brown: '#5C3D1E',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Libre Caslon Text', Georgia, serif;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-white text-gray-900">

    <!-- NAVIGATION -->
    <header class="sticky top-0 z-50 bg-brand-cream shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-evenly">

            <!-- Logo -->
            <div class="flex items-center gap-3">
                <a href="index.php" class="flex items-center gap-3">
                    <img src="images/bheem_logo.png" alt="Chhota Bheem Family Cafe" class="w-12 h-12 object-contain" />
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="hidden md:flex items-center gap-12">
                <?php foreach ($nav_links as $name => $id): ?>
                    <a href="index.php#<?= $id ?>"
                        class="font-body text-sm font-500 text-gray-700 hover:text-brand-orange transition-colors">
                        <?= $name ?>
                    </a>
                <?php endforeach; ?>
            </nav>

            <!-- CTA Button -->
            <a href="index.php#franchiseForm"
                class="bg-brand-orange-light text-white font-body font-semibold text-sm px-5 py-2.5 rounded-full
              hover:bg-brand-orange-dark transition-colors shadow-[0_0_20px_rgba(232,116,42,0.35)] hover:shadow-[0_0_28px_rgba(232,116,42,0.55)]
              inline-flex items-center gap-2">
                Book a Visit
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14" />
                    <path d="M13 6l6 6-6 6" />
                </svg>
            </a>
        </div>
    </header>

    <!-- HERO SECTION -->
    <section class="bg-brand-cream py-16">
        <div class="max-w-4xl mx-auto px-6">
            <h1 class="font-heading text-4xl md:text-5xl font-bold text-brand-dark mb-4">
                Terms and Conditions
            </h1>
            <p class="font-body text-gray-600 text-lg">
                Last updated: June 2026
            </p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 space-y-8">

            <!-- 1. Acceptance of Terms -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">1. Acceptance of Terms</h2>
                <p class="font-body text-gray-700 leading-relaxed mb-4">
                    By accessing and using the Chhota Bheem Family Cafe website and services, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.
                </p>
            </div>

            <!-- 2. Use License -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">2. Use License</h2>
                <p class="font-body text-gray-700 leading-relaxed mb-4">
                    Permission is granted to temporarily download one copy of the materials (information or software) on the Chhota Bheem Family Cafe website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
                </p>
                <ul class="font-body text-gray-700 leading-relaxed space-y-2 ml-6">
                    <li>• Modifying or copying the materials</li>
                    <li>• Using the materials for any commercial purpose or for any public display</li>
                    <li>• Attempting to decompile or reverse engineer any software contained on the website</li>
                    <li>• Removing any copyright or other proprietary notations from the materials</li>
                    <li>• Transferring the materials to another person or "mirroring" the materials on any other server</li>
                </ul>
            </div>

            <!-- 3. Disclaimer -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">3. Disclaimer</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    The materials on the Chhota Bheem Family Cafe website are provided on an 'as is' basis. Chhota Bheem Family Cafe makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
                </p>
            </div>

            <!-- 4. Limitations -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">4. Limitations</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    In no event shall Chhota Bheem Family Cafe or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on the website, even if we or our authorized representative has been notified orally or in writing of the possibility of such damage.
                </p>
            </div>

            <!-- 5. Accuracy of Materials -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">5. Accuracy of Materials</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    The materials appearing on the Chhota Bheem Family Cafe website could include technical, typographical, or photographic errors. Chhota Bheem Family Cafe does not warrant that any of the materials on the website are accurate, complete, or current. We may make changes to the materials contained on the website at any time without notice.
                </p>
            </div>

            <!-- 6. Links -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">6. Links</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    Chhota Bheem Family Cafe has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by us of the site. Use of any such linked website is at the user's own risk.
                </p>
            </div>

            <!-- 7. Modifications -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">7. Modifications</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    Chhota Bheem Family Cafe may revise these terms of service for the website at any time without notice. By using this website, you are agreeing to be bound by the then current version of these terms of service.
                </p>
            </div>

            <!-- 8. Governing Law -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">8. Governing Law</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    These terms and conditions are governed by and construed in accordance with the laws of India, and you irrevocably submit to the exclusive jurisdiction of the courts in that location.
                </p>
            </div>

            <!-- 9. Contact Information -->
            <div class="bg-brand-cream p-8 rounded-xl">
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">9. Contact Us</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    If you have any questions about these Terms and Conditions, please contact us at:
                </p>
                <div class="mt-4 space-y-2 font-body text-gray-700">
                    <p><strong>Email:</strong> franchise@chhotabheemcafe.com</p>
                    <p><strong>Phone:</strong> +91-XXXX-XXXX-XXX</p>
                    <p><strong>Address:</strong> Chhota Bheem Family Cafe, India</p>
                </div>
            </div>

        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-brand-dark text-white">
        <div class="max-w-7xl mx-auto px-6 py-6">
            
            <div class="border-t border-gray-700 mt-1">
                <p class="font-body text-sm text-gray-300 text-center">
                    &copy; 2026 Chhota Bheem Family Cafe. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

</body>

</html>