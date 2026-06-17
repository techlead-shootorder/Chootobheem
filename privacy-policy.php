<?php
// Privacy Policy Page - Chhota Bheem Family Cafe
$page_title = "Privacy Policy | Chhota Bheem Family Cafe";
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
                Privacy Policy
            </h1>
            <p class="font-body text-gray-600 text-lg">
                Last updated: June 2026
            </p>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-6 space-y-8">

            <!-- 1. Introduction -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">1. Introduction</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    Chhota Bheem Family Cafe ("Company," "we," "us," "our," or "our Company") is committed to respecting the privacy rights of our customers, franchise partners, and visitors to our website. We have created this Privacy Policy to explain how we collect, use, disclose, and otherwise handle your information.
                </p>
            </div>

            <!-- 2. Information We Collect -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">2. Information We Collect</h2>
                <div class="space-y-4">
                    <div>
                        <h3 class="font-body font-semibold text-brand-orange mb-2">Personal Information</h3>
                        <p class="font-body text-gray-700 leading-relaxed">
                            We collect information you provide directly to us, such as your name, email address, phone number, postal address, and any other information you choose to provide when contacting us or submitting a franchise inquiry.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-body font-semibold text-brand-orange mb-2">Automatic Information</h3>
                        <p class="font-body text-gray-700 leading-relaxed">
                            When you visit our website, we automatically collect certain information about your device and how you interact with the site, including IP address, browser type, pages visited, and the time spent on our site.
                        </p>
                    </div>
                </div>
            </div>

            <!-- 3. How We Use Your Information -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">3. How We Use Your Information</h2>
                <p class="font-body text-gray-700 leading-relaxed mb-4">We use the information we collect for various purposes, including:</p>
                <ul class="font-body text-gray-700 leading-relaxed space-y-2 ml-6">
                    <li>• Processing your franchise inquiries and applications</li>
                    <li>• Sending you promotional materials, newsletters, and updates</li>
                    <li>• Responding to your questions and providing customer support</li>
                    <li>• Analyzing website usage to improve our services</li>
                    <li>• Complying with legal obligations and preventing fraud</li>
                    <li>• Conducting market research and business development</li>
                </ul>
            </div>

            <!-- 4. Sharing of Information -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">4. Sharing of Information</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    We do not sell, trade, or rent your personal information to third parties. However, we may share your information with:
                </p>
                <ul class="font-body text-gray-700 leading-relaxed space-y-2 ml-6 mt-4">
                    <li>• Our service providers and partners who assist us in operating our website and conducting business</li>
                    <li>• Law enforcement and government authorities when required by law</li>
                    <li>• Trusted business partners with your explicit consent</li>
                </ul>
            </div>

            <!-- 5. Data Security -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">5. Data Security</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    We implement appropriate technical, administrative, and physical safeguards to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure, and we cannot guarantee absolute security.
                </p>
            </div>

            <!-- 6. Cookies -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">6. Cookies and Tracking Technologies</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    Our website uses cookies and similar tracking technologies to enhance your browsing experience. You can control cookie settings through your browser preferences. Some features of our website may not function properly if cookies are disabled.
                </p>
            </div>

            <!-- 7. Third-Party Links -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">7. Third-Party Links</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    Our website may contain links to third-party websites. We are not responsible for the privacy practices of these external sites. We encourage you to review the privacy policies of any third-party websites before providing your personal information.
                </p>
            </div>

            <!-- 8. Your Rights -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">8. Your Rights and Choices</h2>
                <p class="font-body text-gray-700 leading-relaxed mb-4">You have the right to:</p>
                <ul class="font-body text-gray-700 leading-relaxed space-y-2 ml-6">
                    <li>• Access your personal information</li>
                    <li>• Request correction of inaccurate data</li>
                    <li>• Request deletion of your information</li>
                    <li>• Opt-out of marketing communications</li>
                    <li>• Withdraw consent at any time</li>
                </ul>
            </div>

            <!-- 9. Retention -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">9. Data Retention</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    We retain your personal information for as long as necessary to fulfill the purposes outlined in this Privacy Policy or as required by law. When information is no longer needed, we securely delete or anonymize it.
                </p>
            </div>

            <!-- 10. Children's Privacy -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">10. Children's Privacy</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    Our website and services are not intended for children under the age of 13. We do not knowingly collect personal information from children. If we discover that we have collected information from a child under 13, we will promptly delete such information.
                </p>
            </div>

            <!-- 11. Changes to Policy -->
            <div>
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">11. Changes to This Privacy Policy</h2>
                <p class="font-body text-gray-700 leading-relaxed">
                    We may update this Privacy Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will notify you of any material changes by posting the updated policy on our website and updating the "Last updated" date.
                </p>
            </div>

            <!-- 12. Contact Information -->
            <div class="bg-brand-cream p-8 rounded-xl">
                <h2 class="font-heading text-2xl font-bold text-brand-dark mb-4">12. Contact Us</h2>
                <p class="font-body text-gray-700 leading-relaxed mb-4">
                    If you have questions about this Privacy Policy or our privacy practices, please contact us at:
                </p>
                <div class="space-y-2 font-body text-gray-700">
                    <p><strong>Email:</strong> privacy@chhotabheemcafe.com</p>
                    <p><strong>Phone:</strong> +91-XXXX-XXXX-XXX</p>
                    <p><strong>Address:</strong> Chhota Bheem Family Cafe, India</p>
                    <p><strong>Data Protection Officer:</strong> dataprotection@chhotabheemcafe.com</p>
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