<?php
// Franchise Landing Page - Chhota Bheem Family Cafe
$page_title = "Franchise Opportunity | Chhota Bheem Family Cafe";
$nav_links = ["Experience", "Menu", "Membership", "Birthdays", "Locations", "Franchise"];
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
        <a href="#" class="flex items-center gap-3">
          <img src="images/bheem_logo.png" alt="Chhota Bheem Family Cafe" class="w-12 h-12 object-contain" />

        </a>
      </div>

      <!-- Nav Links -->
      <nav class="hidden md:flex items-center gap-12">
        <?php foreach ($nav_links as $link): ?>
          <a href="#"
            class="font-body text-sm font-500 text-gray-700 hover:text-brand-orange transition-colors
                  <?= $link === 'Franchise' ? 'text-brand-orange font-semibold border-b-2 border-brand-orange pb-0.5' : '' ?>">
            <?= $link ?>
          </a>
        <?php endforeach; ?>
      </nav>

      <!-- CTA Button -->
      <a href="#"
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
    <div class="relative max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">

      <!-- Left: Headline + Stats -->
      <div class="space-y-8 text-white">
        <div>

          <h1 class="font-heading text-4xl md:text-5xl lg:text-6xl font-bold text-white !leading-[80px]">
            A Scalable<br />Family Cafe<br />
            <em class="italic-orange">Franchise Opportunity</em>
            in India
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
            <p class="font-heading font-bold text-3xl text-white">15+</p>
            <p class="font-body text-xs text-gray-200 mt-1 uppercase tracking-wide">Locations</p>
          </div>
          <div class="bg-white/10 backdrop-blur rounded-2xl px-6 py-4 shadow-sm text-center">
            <p class="font-heading font-bold text-3xl text-white">4.8 ★</p>
            <p class="font-body text-xs text-gray-200 mt-1 uppercase tracking-wide">Rating</p>
          </div>
        </div>
      </div>

      <!-- Right: Partner Form -->
      <div class="bg-white rounded-3xl shadow-xl p-8 max-w-md ml-auto w-full">
        <h2 class="font-heading text-3xl font-bold text-brand-dark mb-1">
          Partner with India's<br />
          fast-growing cafe<br />
          network
        </h2>
        <p class="font-body text-sm text-brand-brown mb-6">Share your details to receive the Investor<br /> prospectus.</p>

        <form class="space-y-4">
          <div>
            <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-1">Full Name</label>
            <input type="text" placeholder="Your Name"
              class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                        focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                        placeholder-gray-400 transition" />
          </div>
          <div>
            <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-1">Email</label>
            <input type="email" placeholder="Your Email"
              class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                        focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                        placeholder-gray-400 transition" />
          </div>
          <div>
            <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-1">Phone Number</label>
            <input type="tel" placeholder="Your Number"
              class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                        focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                        placeholder-gray-400 transition" />
          </div>
          <div>
            <label class="font-body text-sm font-semibold text-gray-600 uppercase tracking-wide block mb-1">City</label>
            <input type="text" placeholder="Your City"
              class="w-full border border-[#DBC2B1] rounded-xl px-4 py-3 font-body text-sm
                        focus:outline-none focus:ring-2 focus:ring-brand-orange focus:border-transparent
                        placeholder-gray-400 transition" />
          </div>
          <button type="submit"
            class="w-full bg-brand-orange text-brand-brown font-body font-bold text-sm py-3.5 rounded-xl
                       hover:bg-brand-orange-dark transition-colors flex items-center justify-center gap-2 mt-2">
            Next
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14" />
              <path d="M13 6l6 6-6 6" />
            </svg>
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
          </button>
        </form>
      </div>

    </div>
  </section>


  <!-- ============================================================
     FRANCHISE OPPORTUNITIES — ACROSS INDIA
============================================================ -->
  <section class="bg-brand-cream py-20" id="franchise">
    <div class="max-w-7xl mx-auto px-6">

      <!-- Section Label -->
      <p class="font-body text-xs font-semibold uppercase tracking-widest text-center text-brand-brown mb-2">
        Franchise Opportunities
      </p>
      <h2 class="font-heading text-4xl font-bold text-center text-brand-dark mb-8">
        Across India
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
          'image' => 'images/play.png',
        ],
        [
          'label' => 'Learn',
          'subtitle' => 'Creative Discovery',
          'icon' => 'images/learn-icon.png',
          'image' => 'images/learn.png',
        ],
        [
          'label' => 'Shop',
          'subtitle' => 'Retail & Merchandise',
          'icon' => 'images/shop-icon.png',
          'image' => 'images/shop.png',
        ],
        [
          'label' => 'Celebrate',
          'subtitle' => 'Birthday & Events',
          'icon' => 'images/celebrate-icon.png',
          'image' => 'images/celebrate.png',
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
            <div class="bg-white rounded-[24px] p-12 shadow-sm">
              <div class="text-center">
                <h3 class="font-heading font-bold text-5xl text-brand-dark leading-none">
                  EBG
                </h3>
                <h3 class="font-heading font-bold text-5xl text-brand-orange leading-none mt-2">
                  Group
                </h3>
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
          <a href="#" class="hover:text-white transition-colors">Terms and Conditions</a>
          <span class="text-white/40">|</span>
          <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
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

</body>

</html>