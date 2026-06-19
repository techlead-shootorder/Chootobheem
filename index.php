<?php
// Franchise Landing Page - Chhota Bheem Family Cafe
$page_title = "Franchise Opportunity | Chhota Bheem Family Cafe";
$nav_links = [
  "Franchise" => "franchise",
  "Market" => "market",
  "Investment" => "investment",
  "Revenue" => "revenue",
  "Why Bheem" => "why",
  "EBG" => "backing"
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

    .italic-orange {
      font-style: italic;
      color: #E8742A;
    }

    /* Smooth scroll */
    html {
      scroll-behavior: smooth;
    }

    /* Toggle active */
    .tab-btn.active {
      background-color: #E8742A;
      color: white;
    }

    /* Card hover */
    .location-card:hover .card-overlay {
      opacity: 1;
    }

    .card-overlay {
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    /* Custom select dropdown styling */
    select {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23E8742A' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 12px center;
      padding-right: 36px;
    }

    /* Step form animation */
    .step-form {
      animation: fadeIn 0.3s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body class="bg-white text-gray-900">

  <!-- ============================================================
     NAVIGATION
============================================================ -->
  <header class="sticky top-0 z-50 bg-brand-cream shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-evenly">

      <!-- Logo -->
      <div class="flex items-center gap-3">
        <a href="/" class="flex items-center gap-3">
          <img src="images/bheem_logo.png" alt="Chhota Bheem Family Cafe" class="w-12 h-12 object-contain" />

        </a>
      </div>

      <!-- Nav Links -->
      <nav class="hidden md:flex items-center gap-12">
        <?php foreach ($nav_links as $name => $id): ?>
          <a href="#<?= $id ?>"
            class="font-body text-sm font-500 text-gray-700 hover:text-brand-orange transition-colors
                  <?= $name === 'Franchise' ? 'text-brand-orange font-semibold border-b-2 border-brand-orange pb-0.5' : '' ?>">
            <?= $name ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <!-- CTA Button -->
      <a href="/"
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


  <!-- ============================================================
     HERO SECTION
============================================================ -->
  <section class="relative bg-brand-cream min-h-screen flex items-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('images/Hero Section.png');"></div>
    <!-- <div class="absolute inset-0 bg-brand-dark/65"></div> -->
    <div class="relative max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">

      <!-- Left: Headline + Stats -->
      <div class="space-y-8 text-white lg:col-span-2">
        <div>

          <h1 class="font-heading text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight">
            A Scalable Family Cafe <span class="text-brand-orange">Franchise Opportunity</span><br />in India
          </h1>
          <p class="font-body text-gray-100 mt-5 text-base leading-relaxed max-w-md">
            One integrated dining, play, and celebration experience.
            High-growth, repeat-visit model backed by a mega brand.
            Join and run master opportunities across nationwide.
          </p>
        </div>

        <!-- Stats -->
        <div class="flex items-center gap-6">
          <div class="bg-white/10 backdrop-blur rounded-2xl px-6 py-4 shadow-sm text-center">
            <p class="font-heading font-bold text-3xl text-white">15<span class="text-2xl">+</span></p>
            <p class="font-body text-xs text-gray-200 mt-1 uppercase tracking-wide">Locations</p>
          </div>
          <div class="bg-white/10 backdrop-blur rounded-2xl px-6 py-4 shadow-sm text-center">
            <p class="font-heading font-bold text-3xl text-white">4.8 <span class="text-2xl">★</span></p>
            <p class="font-body text-xs text-gray-200 mt-1 uppercase tracking-wide">Rating</p>
          </div>
        </div>
      </div>

      <!-- Right: Multi-Step Partner Form -->
      <div class="bg-white rounded-3xl shadow-xl p-8 max-w-lg ml-auto w-full">
        <form id="franchiseForm" class="space-y-6">

          <!-- Step Indicator -->
          <div class="mb-8">
            <div class="flex items-center justify-between gap-1 mb-3">
              <div class="flex-1 h-2 rounded-full bg-brand-orange"></div>
              <div class="flex-1 h-2 rounded-full bg-gray-300"></div>
            </div>
            <div class="text-right text-sm font-body font-semibold text-brand-orange">
              <span id="currentStep">1</span>/2
            </div>
          </div>

          <!-- Step 1: Full Name & Mobile Number -->
          <div id="step1" class="step-form space-y-4">
            <h2 class="font-heading text-2xl font-bold text-brand-dark mb-6">Start Your Franchise Journey</h2>

            <div>
              <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-2">
                <svg class="w-4 h-4 inline mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" />
                  <circle cx="12" cy="7" r="4" />
                </svg>
                Full Name
              </label>
              <input type="text" id="fullName" placeholder="Webmasters ShootOrder" required
                class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                          focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                          placeholder-gray-400 transition" />
            </div>

            <div>
              <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-2">
                <svg class="w-4 h-4 inline mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                Mobile Number
              </label>
              <div class="flex gap-2">
                <select id="countryCode" class="w-20 border border-[#DBC2B1] rounded-xl px-3 py-3 font-body text-sm
                            focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent appearance-none bg-white">
                  <option value="+91" selected>🇮🇳 +91</option>
                </select>
                <input type="tel" id="mobileNumber" placeholder="1321231231123" required
                  class="flex-1 border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                            focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                            placeholder-gray-400 transition" />
              </div>
            </div>
          </div>

          <!-- Step 2: Email, City & FOCO Acknowledgment -->
          <div id="step2" class="step-form space-y-4 hidden">
            <h2 class="font-heading text-2xl font-bold text-brand-dark mb-6">Tell Us More</h2>

            <div>
              <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-2">
                <svg class="w-4 h-4 inline mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                  <polyline points="22,6 12,13 2,6" />
                </svg>
                Email Address
              </label>
              <input type="email" id="email" placeholder="webmasters@shootorder.in" required
                class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                          focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                          placeholder-gray-400 transition" />
            </div>

            <div>
              <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-2">
                <svg class="w-4 h-4 inline mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                Preferred City
              </label>
              <select id="city" required
                class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                          focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                          placeholder-gray-400 transition appearance-none bg-white">
                <option value="">Select a city</option>
                <option value="Bhubaneswar">Bhubaneswar</option>
                <option value="Delhi">Delhi</option>
                <option value="Mumbai">Mumbai</option>
                <option value="Bangalore">Bangalore</option>
                <option value="Hyderabad">Hyderabad</option>
                <option value="Chennai">Chennai</option>
                <option value="Kolkata">Kolkata</option>
                <option value="Pune">Pune</option>
                <option value="Ahmedabad">Ahmedabad</option>
                <option value="Jaipur">Jaipur</option>
              </select>
            </div>

            <div>
              <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-2">
                <svg class="w-4 h-4 inline mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M12 2v20M2 12h20" />
                </svg>
                Investment Budget
              </label>
              <select id="investmentBudget" required
                class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                          focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                          placeholder-gray-400 transition appearance-none bg-white">
                <option value="">Select investment range</option>
                <option value="1-1.25">₹1 Cr – ₹1.25 Cr</option>
                <option value="1.25-1.5">₹1.25 Cr – ₹1.5 Cr</option>
                <option value="1.5-2">₹1.5 Cr – ₹2 Cr</option>
                <option value="2+">₹2 Cr+</option>
              </select>
            </div>

            <div>
              <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-2">
                <svg class="w-4 h-4 inline mr-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                  <path d="M9 12h6M9 16h6M9 8h6" />
                  <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2z" />
                </svg>
                Interested In
              </label>
              <select id="interestedIn" required
                class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                          focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                          placeholder-gray-400 transition appearance-none bg-white">
                <option value="">Select franchise type</option>
                <option value="compact">Compact Family Café</option>
                <option value="flagship">Flagship Family Café</option>
                <option value="consultation">Need Consultation</option>
              </select>
            </div>

            <div class="bg-gray-50 border border-gray-200 rounded-2xl p-4 mt-4">
              <label class="flex items-start gap-3 cursor-pointer">
                <input type="checkbox" id="focoAcknowledgment" required
                  class="w-5 h-5 mt-0.5 rounded border-gray-300 text-brand-orange focus:ring-brand-orange cursor-pointer" />
                <span class="font-body text-sm text-gray-700">
                  I acknowledge that this is a <span class="font-bold text-brand-orange">FOCO (Franchise Owned, Company Operated)</span> opportunity
                </span>
              </label>
            </div>
          </div>

          <!-- Navigation Buttons -->
          <div class="flex gap-3 mt-8">
            <button type="button" id="backBtn" class="hidden w-24 bg-white border-2 border-gray-300 text-brand-dark font-body font-semibold text-sm py-3 rounded-3xl
                              hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
              <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M19 12H5M12 19l-7-7 7-7" />
              </svg>
              Back
            </button>
            <button type="button" id="nextBtn" class="flex-1 bg-gradient-to-r from-brand-orange to-brand-orange-light text-white font-body font-bold text-sm py-3.5 rounded-3xl
                              hover:from-brand-orange-dark hover:to-brand-orange transition-colors flex items-center justify-center gap-2 shadow-lg">
              Next Step
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </button>
            <button type="submit" id="submitBtn" class="hidden flex-1 bg-gradient-to-r from-brand-orange to-brand-orange-light text-white font-body font-bold text-sm py-3.5 rounded-3xl
                              hover:from-brand-orange-dark hover:to-brand-orange transition-colors flex items-center justify-center gap-2 shadow-lg">
              Submit Application
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M5 12h14M12 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </form>
      </div>

    </div>
  </section>


  <!-- ============================================================
     FRANCHISE OPPORTUNITIES — ACROSS INDIA
============================================================ -->
  <section class="bg-brand-cream py-20" id="franchise">
    <div class="max-w-7xl mx-auto px-6">


      <h2 class="font-heading text-4xl font-bold text-center text-brand-dark mb-8">
        Franchise Opportunities<br /> Across India
      </h2>

      <!-- Toggle Tabs -->
      <div class="flex items-center justify-center gap-2 mb-10">
        <button class="tab-btn font-body text-sm font-semibold px-5 py-2 inline-flex items-center gap-2">
          <img src="images/tick-mark.png" alt="Selected" class="w-4 h-4" />
          <span>Unit Franchise</span>
        </button>
        <button class="tab-btn font-body text-sm font-semibold px-5 py-2 inline-flex items-center gap-2">
          <img src="images/tick-mark.png" alt="Selected" class="w-4 h-4" />
          <span>Dine master Franchise</span>
        </button>
      </div>

      <!-- Location Cards -->
      <?php
      $locations = [
        [
          'label' => 'Eat',
          'subtitle' => 'Family Dining',
          'icon' => 'images/dining-icon.png',
          'image' => 'images/eat.png',
        ],
        [
          'label' => 'Play',
          'subtitle' => 'Entertainment',
          'icon' => 'images/play-icon.png',
          'image' => 'images/play-new.png',
        ],
        [
          'label' => 'Learn',
          'subtitle' => 'Creative Discovery',
          'icon' => 'images/learn-icon.png',
          'image' => 'images/learn-new.png',
        ],
        [
          'label' => 'Shop',
          'subtitle' => 'Retail & Merchandise',
          'icon' => 'images/shop-icon.png',
          'image' => 'images/shop-new.png',
        ],
        [
          'label' => 'Celebrate',
          'subtitle' => 'Birthday & Events',
          'icon' => 'images/celebrate-icon.png',
          'image' => 'images/celebrate-new.png',
        ],
      ];
      ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-5 gap-6">
        <?php foreach ($locations as $loc): ?>
          <div class="rounded-[1rem] bg-white border border-gray-200 p-5 shadow-sm hover:shadow-xl transition">
            <div class="flex flex-col items-center text-center gap-3 mb-4">
              <div class="w-12 h-12 rounded-2xl bg-brand-orange/10 text-brand-orange flex items-center justify-center text-xl overflow-hidden">
                <?php if (is_string($loc['icon']) && str_starts_with($loc['icon'], 'images/')): ?>
                  <img src="<?= htmlspecialchars($loc['icon']) ?>" alt="<?= htmlspecialchars($loc['label']) ?> icon" class="w-4 h-4 object-contain" />
                <?php else: ?>
                  <?= htmlspecialchars($loc['icon']) ?>
                <?php endif; ?>
              </div>
              <div>
                <p class="font-heading text-lg font-bold text-brand-dark"><?= $loc['label'] ?></p>
                <p class="font-body text-xs text-gray-500 mt-1"><?= $loc['subtitle'] ?></p>
              </div>
            </div>
            <img src="<?= htmlspecialchars($loc['image']) ?>"
              alt="<?= htmlspecialchars($loc['label']) ?>"
              class="w-full h-44 object-cover rounded-[1.5rem]" />
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- ============================================================
     MARKET OPPORTUNITY
============================================================ -->
  <section class="bg-white py-20" id="market">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

      <!-- Left: Image with badge -->
      <div class="relative">
        <div class="rounded-3xl overflow-hidden bg-gradient-to-br from-amber-200 to-orange-200 h-80 flex items-center justify-center">
          <img
            src="images/Background.png"
            alt="Children"
            class="w-full h-full object-cover">
        </div>
        <!-- 15% YoY Badge -->
        <div class="absolute bottom-6 right-14 bg-white rounded-2xl shadow-lg px-5 py-3 flex items-center gap-3">

          <div>
            <p class="font-body text-xs text-brand-brown">Market Growth</p>
            <p class="font-heading font-bold text-2xl text-black">15% YoY</p>
          </div>
          <div class=" rounded-full p-2">
            <svg class="w-8 h-8 text-brand-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
            </svg>
          </div>
        </div>
      </div>

      <!-- Right: Text -->
      <div class="space-y-6">
        <p class="font-body text-xs font-semibold uppercase tracking-widest text-brand-brown">
          Market Opportunity
        </p>
        <h2 class="font-heading text-4xl md:text-5xl font-bold text-brand-dark leading-tight">
          India's Family<br />Experience<br />Economy Is<br />
          <em class="italic-black">Expanding Rapidly</em>
        </h2>
        <p class="font-body text-gray-600 text-base leading-relaxed">
          India's family entertainment sector is witnessing strong growth, driven by rising disposable incomes, changing lifestyles, and increasing preference for experiential outing.
        </p>

        <?php
        $bullets = [
          [
            'icon' => 'images/children-icon.png',
            'text' => 'Children are meaningfully engaged',
          ],
          [
            'icon' => 'images/parents-icon.png',
            'text' => 'Parents can spend quality leisure time',
          ],
          [
            'icon' => 'images/visit-icon.png',
            'text' => 'Visits become repeatable lifestyle experiences',
          ],
        ];
        ?>
        <ul class="space-y-3 mt-2">
          <?php foreach ($bullets as $b): ?>
            <li class="flex items-start gap-3 bg-[#F1EEE5] rounded-xl px-4 py-3">
              <span class="mt-1 w-5 h-5 rounded-full bg-brand-orange flex-shrink-0 flex items-center justify-center overflow-hidden p-1">
                <img src="<?= htmlspecialchars($b['icon']) ?>" alt="Bullet icon" class="w-3 h-3 object-contain" />
              </span>
              <span class="font-body text-black-700 text-lg font-bold leading-relaxed"><?= htmlspecialchars($b['text']) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </section>


  <!-- ============================================================
     INVESTMENT MODELS
============================================================ -->
  <section class="bg-brand-cream py-20" id="investment">
    <div class="max-w-7xl mx-auto px-6">
      <h2 class="font-heading text-4xl font-bold text-center text-brand-dark mb-14">
        Investment Models
      </h2>

      <?php
      $models = [
        [
          'title'    => 'Unit Franchise',
          'subtitle' => 'Operate Full-Scale Family Experience Cafe In Your City',
          'price'    => '1 Cr – 2 Cr+',
          'currency' => 'Investment (approx.)',
          'features' => [
            'ACCO:AFAID Structure (Format Dependent)',
            'Designed for Individual Entrepreneurs',
            'Strong Local Market Ownership',
          ],
          'cta'      => 'Apply Unit Franchise →',
          'accent'   => false,
        ],
        [
          'title'    => 'State Master Franchise',
          'subtitle' => 'Lead Regional Expansion And Develop Multiple Locations Within Assigned Territory.',
          'price'    => 'Starting 2 Cr+',
          'currency' => '',
          'features' => [
            '15+ Territory Nodes (Subject to Availability)',
            'Multi-Unit Expansion Model',
            'Long-Term Profitability',
          ],
          'cta'      => 'Apply State Master Franchise →',
          'accent'   => true,
        ],
      ];
      ?>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
        <?php foreach ($models as $model): ?>
          <div class="rounded-3xl border <?= $model['accent'] ? 'border-brand-orange bg-[#FFDCC433]' : 'border-gray-100 bg-gray-50' ?> p-8 space-y-5 hover:shadow-xl transition-shadow">
            <div>
              <h3 class="font-heading text-2xl font-bold text-brand-brown"><?= $model['title'] ?></h3>
              <p class="font-body text-sm text-gray-500 mt-1"><?= $model['subtitle'] ?></p>
            </div>
            <div>
              <p class="font-heading text-4xl font-bold text-brand-dark"><?= $model['price'] ?></p>
              <?php if ($model['currency']): ?>
                <p class="font-body text-xs text-gray-400 mt-0.5"><?= $model['currency'] ?></p>
              <?php endif; ?>
            </div>
            <ul class="space-y-2.5">
              <?php foreach ($model['features'] as $f): ?>
                <li class="flex items-start gap-2.5">
                  <svg class="w-4 h-4 bg-brand-brown rounded-full text-white mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                  </svg>
                  <span class="font-body text-sm text-gray-700"><?= $f ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
            <button class="w-full bg-brand-orange text-brand-brown font-body font-bold text-sm py-3.5 rounded-3xl
                       hover:bg-brand-orange-dark transition-colors">
              <?= $model['cta'] ?>
            </button>
          </div>
        <?php endforeach; ?>
      </div>

    </div>
  </section>


  <!-- ============================================================
     REVENUE MODEL
============================================================ -->
  <section class="bg-[#F1EEE5] py-20" id="revenue">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <h2 class="font-heading text-4xl font-bold text-brand-dark mb-2">Revenue Model</h2>
      <p class="font-body text-brand-brown text-sm mb-14">Multi-Stream Family Experience Business</p>

      <?php
      $streams = [
        ['icon' => 'images/food-icon.png', 'title' => 'Dining &amp; Food Sales',        'desc' => 'Full-service family dining with themed menus and beverages.'],
        ['icon' => 'images/birthday-icon.png', 'title' => 'Birthday &amp; Events',       'desc' => 'Branded birthday packages, private events and corporate bookings.'],
        ['icon' => 'images/kids-play-icon.png', 'title' => 'Kids Play Engagement',          'desc' => 'Paid access to activity zones, rides and interactive experiences.'],
        ['icon' => 'images/school-icon.png', 'title' => 'Group &amp; School Bookings',   'desc' => 'Curated group visits, school trips and educational programmes.'],
        ['icon' => 'images/merchandise-icon.png', 'title' => 'Merchandise &amp; Add-ons',       'desc' => 'Branded merchandise, photo ops and digital content upgrades.'],
      ];
      ?>

      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <?php foreach ($streams as $s): ?>
          <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col items-center text-center space-y-3">
            <div class="w-14 h-14 bg-brand-orange/10 rounded-2xl flex items-center justify-center overflow-hidden">
              <?php if (is_string($s['icon']) && str_starts_with($s['icon'], 'images/')): ?>
                <img src="<?= htmlspecialchars($s['icon']) ?>" alt="<?= htmlspecialchars($s['title']) ?> icon" class="w-5 h-5 object-contain" />
              <?php else: ?>
                <span class="text-3xl"><?= htmlspecialchars($s['icon']) ?></span>
              <?php endif; ?>
            </div>
            <h3 class="font-heading text-base font-bold text-brand-dark leading-tight"><?= $s['title'] ?></h3>
            <p class="font-body text-xs text-gray-500 leading-relaxed"><?= $s['desc'] ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


  <!-- ============================================================
     WHY INVESTORS ARE CONSIDERING THIS
============================================================ -->
  <section class="bg-brand-dark py-20" id="why">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

      <!-- Left: Text -->
      <div class="space-y-7">
        <div>
          <h2 class="font-heading text-4xl md:text-5xl font-bold text-white leading-tight">

            <em class="italic text-white"> Why Investors Are<br /> Considering This?</em>
          </h2>
          <p class="font-body text-gray-400 text-sm mt-3">
            A Strong Combination of Brand Strength + Category
          </p>
        </div>

        <?php
        $reasons = [
          'Built Around A Widely Recognised Children\'s Entertainment Brand Chhota Bheem',
          'Early Entry Into Organised Family Cafe Entertainment Format',
          'High-Repeat Visitation Business Structure',
          'Strong Demand Potential In Underserved Markets',
          'Scalable Multi-City Franchise Rollout Model',
        ];
        ?>
        <ul class="space-y-4">
          <?php foreach ($reasons as $r): ?>
            <li class="flex items-start gap-3">
              <span class="w-5 h-5 rounded-full bg-brand-orange flex-shrink-0 mt-0.5 flex items-center justify-center">
                <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
              </span>
              <span class="font-body text-gray-300 text-sm leading-relaxed"><?= $r ?></span>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <!-- Right: ROI Card -->
      <div class="relative">
        <div class="rounded-3xl overflow-hidden bg-gradient-to-br from-amber-800 to-orange-700 h-80 flex items-center justify-center">
          <img
            src="images/Family.png"
            alt="Children"
            class="w-full h-full object-cover">
        </div>
        <!-- ROI Badge -->
        <div class="absolute top-[17rem] left-[-1.75rem] bg-brand-orange text-brand-brown font-heading font-bold text-3xl
                  w-[7rem] h-20 rounded-2xl flex flex-col items-center justify-center shadow-xl">
          <h4>ROI</h4>
          <p class="text-xs text-center text-brand-brown mt-0.5">proven model</p>
        </div>
      </div>

    </div>
  </section>


  <!-- ============================================================
     STRATEGIC BACKING — EBG GROUP
============================================================ -->
  <section class="bg-white py-20" id="backing">
    <div class="max-w-5xl mx-auto px-6 rounded-2xl border border-gray-200 shadow-sm  bg-[#F7F3EA]">
      <div class="bg-[#f5f2eb] rounded-[40px] p-8 lg:p-14">
        <div class="flex flex-col lg:flex-row items-center gap-12">

          <!-- Left -->
          <div class="w-full lg:w-[35%] flex justify-center">
            <div class="bg-white rounded-[24px]">
              <div class="flex items-center justify-center h-full">
                <img src="images/ebg-footer-logo.png" alt="EBG Group Logo" class="w-full h-auto object-contain" />
              </div>
            </div>
          </div>

          <!-- Right -->
          <div class="w-full lg:w-[65%]">
            <h2 class="font-heading text-5xl lg:text-6xl font-bold text-brand-dark leading-[0.9] mb-6">
              Strategic<br>
              Backing
            </h2>

            <p class="font-body text-brand-brown text-lg leading-relaxed max-w-xl mb-8">
              Developed in collaboration with EBG Group, combining expertise
              across entertainment, hospitality, and franchise development to
              build scalable family destination formats across India.
            </p>

            <a
              href="#"
              class="inline-flex items-center bg-brand-dark text-white px-8 py-4 rounded-full text-sm font-medium hover:opacity-90 transition">
              About EBG Group
            </a>
          </div>

        </div>
      </div>
    </div>
    </div>
  </section>


  <!-- ============================================================
     FOOTER
============================================================ -->
  <footer class="bg-brand-dark text-gray-400">
    <div class="max-w-7xl mx-auto px-6 py-8 border-t border-white/10">
      <div class="flex flex-col md:flex-row items-center justify-between gap-3 text-xs text-gray-400">
        <div class="flex flex-wrap items-center gap-3 text-left">
          <a href="terms-and-conditions.php" class="hover:text-white transition-colors">Terms and Conditions</a>
          <span class="text-white/40">|</span>
          <a href="privacy-policy.php" class="hover:text-white transition-colors">Privacy Policy</a>
        </div>
        <div class="text-center w-full md:w-auto text-gray-500">
          © 2026 Chhota Bheem Family Cafe. All rights reserved.
        </div>
      </div>
    </div>
  </footer>


  <!-- Tab toggle script -->
  <script>
    document.querySelectorAll('.tab-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      });
    });
  </script>

  <!-- Multi-step form script -->
  <script>
    const form = document.getElementById('franchiseForm');
    const steps = document.querySelectorAll('.step-form');
    const nextBtn = document.getElementById('nextBtn');
    const backBtn = document.getElementById('backBtn');
    const submitBtn = document.getElementById('submitBtn');
    const currentStepSpan = document.getElementById('currentStep');
    const progressBars = document.querySelectorAll('.flex-1.h-2');

    let currentStep = 1;
    const totalSteps = 2;

    function showStep(stepNum) {
      steps.forEach((step, index) => {
        step.classList.toggle('hidden', index + 1 !== stepNum);
      });

      // Update progress indicator
      progressBars.forEach((bar, index) => {
        if (index < stepNum) {
          bar.classList.remove('bg-gray-300');
          bar.classList.add('bg-brand-orange');
        } else {
          bar.classList.remove('bg-brand-orange');
          bar.classList.add('bg-gray-300');
        }
      });

      currentStepSpan.textContent = stepNum;

      // Toggle buttons
      backBtn.classList.toggle('hidden', stepNum === 1);
      nextBtn.classList.toggle('hidden', stepNum === totalSteps);
      submitBtn.classList.toggle('hidden', stepNum !== totalSteps);
    }

    function validateStep(stepNum) {
      switch (stepNum) {
        case 1:
          const fullName = document.getElementById('fullName').value.trim();
          const mobileNumber = document.getElementById('mobileNumber').value.trim();

          if (!fullName) {
            alert('Please enter your full name');
            return false;
          }
          if (!mobileNumber || mobileNumber.length < 10) {
            alert('Please enter a valid mobile number');
            return false;
          }
          return true;

        case 2:
          const email = document.getElementById('email').value.trim();
          const city = document.getElementById('city').value;
          const investmentBudget = document.getElementById('investmentBudget').value;
          const interestedIn = document.getElementById('interestedIn').value;
          const focoCheckbox = document.getElementById('focoAcknowledgment').checked;
          const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

          if (!email || !emailRegex.test(email)) {
            alert('Please enter a valid email address');
            return false;
          }
          if (!city) {
            alert('Please select a preferred city');
            return false;
          }
          if (!investmentBudget) {
            alert('Please select your investment budget');
            return false;
          }
          if (!interestedIn) {
            alert('Please select which franchise type interests you');
            return false;
          }
          if (!focoCheckbox) {
            alert('Please acknowledge the FOCO terms to proceed');
            return false;
          }
          return true;

        default:
          return true;
      }
    }

    nextBtn.addEventListener('click', (e) => {
      e.preventDefault();

      if (validateStep(currentStep)) {
        if (currentStep < totalSteps) {
          currentStep++;
          showStep(currentStep);
          window.scrollTo({
            top: 0,
            behavior: 'smooth'
          });
        }
      }
    });

    backBtn.addEventListener('click', (e) => {
      e.preventDefault();
      if (currentStep > 1) {
        currentStep--;
        showStep(currentStep);
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      }
    });

    form.addEventListener('submit', (e) => {
      e.preventDefault();

      if (validateStep(currentStep)) {
        // Collect form data
        const formData = {
          fullName: document.getElementById('fullName').value,
          mobileNumber: document.getElementById('countryCode').value + document.getElementById('mobileNumber').value,
          email: document.getElementById('email').value,
          city: document.getElementById('city').value,
          investmentBudget: document.getElementById('investmentBudget').value,
          interestedIn: document.getElementById('interestedIn').value,
          focoAcknowledged: document.getElementById('focoAcknowledgment').checked
        };

        console.log('Form submitted:', formData);
        alert('Thank you for your interest! We will contact you soon at ' + formData.email);

        // Reset form
        form.reset();
        currentStep = 1;
        showStep(currentStep);
      }
    });

    // Initialize
    showStep(1);
  </script>

</body>

</html>