<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ia Academy | International School of Excellence & Leadership</title>
  <meta name="description" content="ia Academy is a world-class K-12 international school offering Cambridge and IB curricula, advanced STEM innovation, arts, and holistic student leadership.">

  <!-- Google Fonts: Plus Jakarta Sans & Outfit -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Tailwind Custom Configuration -->
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#EEF2FF',
              100: '#E0E7FF',
              200: '#C7D2FE',
              300: '#A5B4FC',
              400: '#818CF8',
              500: '#6366F1',
              600: '#4F46E5',
              700: '#4338CA',
              800: '#3730A3',
              900: '#312E81',
              navy: '#0F172A',
              deep: '#1E1B4B',
            },
            accent: {
              amber: '#F59E0B',
              gold: '#D97706',
              emerald: '#10B981',
              cyan: '#06B6D4',
              rose: '#F43F5E',
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'sans-serif'],
            display: ['"Outfit"', 'sans-serif'],
          },
          animation: {
            'float-slow': 'float 6s ease-in-out infinite',
            'float-delayed': 'float 7s ease-in-out 2s infinite',
            'pulse-glow': 'pulseGlow 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
          },
          keyframes: {
            float: {
              '0%, 100%': { transform: 'translateY(0px)' },
              '50%': { transform: 'translateY(-12px)' },
            },
            pulseGlow: {
              '0%, 100%': { opacity: '0.6', transform: 'scale(1)' },
              '50%': { opacity: '1', transform: 'scale(1.04)' },
            }
          }
        }
      }
    }
  </script>

  <style>
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #F8FAFC;
    }
    ::-webkit-scrollbar-thumb {
      background: #CBD5E1;
      border-radius: 9999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #94A3B8;
    }

    /* Subtle Glassmorphism and Backdrop */
    .glass-nav {
      background: rgba(255, 255, 255, 0.88);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
    }
    .glass-card {
      background: rgba(255, 255, 255, 0.85);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      border: 1px solid rgba(255, 255, 255, 0.7);
    }
    .glass-card-dark {
      background: rgba(15, 23, 42, 0.75);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      border: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Radial Gradient Background Mesh */
    .hero-glow-1 {
      background: radial-gradient(circle at center, rgba(99, 102, 241, 0.22) 0%, rgba(99, 102, 241, 0) 70%);
    }
    .hero-glow-2 {
      background: radial-gradient(circle at center, rgba(245, 158, 11, 0.16) 0%, rgba(245, 158, 11, 0) 70%);
    }

    /* Tab indicator transition */
    .program-tab.active {
      background-color: #4F46E5;
      color: #ffffff;
      box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.4);
    }

    /* Facility pill active */
    .facility-pill.active {
      background-color: #0F172A;
      color: #FFFFFF;
    }
  </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased selection:bg-brand-500 selection:text-white">

  <!-- ========================================== -->
  <!-- 1. TOP ANNOUNCEMENT / UTILITY BAR          -->
  <!-- ========================================== -->
  <aside aria-label="Announcement bar" class="bg-slate-900 text-slate-200 text-xs py-2.5 px-4 sm:px-8 border-b border-slate-800">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-2 text-center md:text-left">
      <!-- Announcement badge -->
      <div class="flex items-center gap-2 flex-wrap justify-center md:justify-start">
        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full bg-brand-500/20 text-brand-300 font-semibold border border-brand-500/30 text-[11px]">
          <span class="w-1.5 h-1.5 rounded-full bg-accent-amber animate-pulse"></span>
          Admissions 2026/27
        </span>
        <span class="text-slate-300">
          Applications for Early Years to IB Diploma are now open.
        </span>
        <a href="#admissions" class="text-accent-amber hover:text-amber-300 font-medium underline underline-offset-2 flex items-center gap-1">
          Apply Online <i data-lucide="arrow-right" class="w-3 h-3"></i>
        </a>
      </div>

      <!-- Quick contacts & Portals -->
      <div class="flex items-center gap-4 text-slate-400 text-[11px]">
        <a href="tel:+18005552345" class="hover:text-white flex items-center gap-1.5 transition-colors">
          <i data-lucide="phone" class="w-3.5 h-3.5 text-brand-400"></i>
          <span>+1 (800) 555-IA-ACADEMY</span>
        </a>
        <span class="text-slate-700 hidden sm:inline">|</span>
        <a href="mailto:admissions@ia-academy.edu" class="hover:text-white hidden sm:flex items-center gap-1.5 transition-colors">
          <i data-lucide="mail" class="w-3.5 h-3.5 text-brand-400"></i>
          <span>admissions@ia-academy.edu</span>
        </a>
        <span class="text-slate-700 hidden sm:inline">|</span>
        <div class="relative group">
          <button id="portal-dropdown-btn" class="hover:text-white flex items-center gap-1 text-slate-300 font-medium focus:outline-none">
            <i data-lucide="lock" class="w-3 h-3 text-accent-emerald"></i>
            <span>Portal Login</span>
            <i data-lucide="chevron-down" class="w-3 h-3"></i>
          </button>
          <!-- Portal Dropdown Menu -->
          <div id="portal-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-xl border border-slate-100 py-2 z-50 text-slate-800 text-xs">
            <a href="#portal" onclick="openPortalModal('student')" class="flex items-center gap-2.5 px-3.5 py-2 hover:bg-brand-50 hover:text-brand-600 transition-colors">
              <i data-lucide="graduation-cap" class="w-4 h-4 text-brand-600"></i>
              <span>Student Portal</span>
            </a>
            <a href="#portal" onclick="openPortalModal('parent')" class="flex items-center gap-2.5 px-3.5 py-2 hover:bg-brand-50 hover:text-brand-600 transition-colors">
              <i data-lucide="users" class="w-4 h-4 text-accent-amber"></i>
              <span>Parent Portal</span>
            </a>
            <a href="#portal" onclick="openPortalModal('faculty')" class="flex items-center gap-2.5 px-3.5 py-2 hover:bg-brand-50 hover:text-brand-600 transition-colors">
              <i data-lucide="briefcase" class="w-4 h-4 text-accent-emerald"></i>
              <span>Faculty & Staff</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </aside>

  <!-- ========================================== -->
  <!-- 2. MAIN NAVIGATION (STICKY GLASS)          -->
  <!-- ========================================== -->
  <header class="sticky top-0 z-40 glass-nav border-b border-slate-200/80 transition-all duration-200" id="main-header">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        
        <!-- School Brand Identity -->
        <a href="#" class="flex items-center gap-3 group">
          <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-brand-900 via-brand-700 to-brand-500 flex items-center justify-center text-white shadow-lg shadow-brand-600/25 group-hover:scale-105 transition-transform duration-300">
            <i data-lucide="graduation-cap" class="w-6 h-6 text-amber-300"></i>
          </div>
          <div>
            <div class="flex items-center gap-1.5">
              <span class="font-display font-extrabold text-2xl tracking-tight text-slate-900">ia</span>
              <span class="font-display font-bold text-2xl tracking-tight text-brand-600">Academy</span>
            </div>
            <p class="text-[10px] tracking-widest uppercase font-semibold text-slate-500">International School</p>
          </div>
        </a>

        <!-- Desktop Navigation Links -->
        <nav class="hidden lg:flex items-center gap-7 text-sm font-medium text-slate-600">
          <a href="#about" class="hover:text-brand-600 transition-colors">About Us</a>
          <a href="#academics" class="hover:text-brand-600 transition-colors">Academics</a>
          <a href="#pillars" class="hover:text-brand-600 transition-colors">Why ia Academy</a>
          <a href="#facilities" class="hover:text-brand-600 transition-colors">Campus Life</a>
          <a href="#admissions" class="hover:text-brand-600 transition-colors">Admissions</a>
          <a href="#events" class="hover:text-brand-600 transition-colors">News & Events</a>
          <a href="#contact" class="hover:text-brand-600 transition-colors">Contact</a>
        </nav>

        <!-- Right Action Buttons -->
        <div class="hidden sm:flex items-center gap-3">
          <button onclick="openTourModal()" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-xl border border-slate-300 hover:border-brand-500 text-slate-700 hover:text-brand-600 text-xs font-semibold bg-white hover:bg-brand-50/50 shadow-sm transition-all duration-200">
            <i data-lucide="calendar" class="w-4 h-4 text-brand-600"></i>
            <span>Book a Tour</span>
          </button>
          
          <a href="#admissions" class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-gradient-to-r from-brand-600 via-brand-700 to-brand-800 hover:from-brand-700 hover:to-brand-900 text-white text-xs font-bold shadow-md shadow-brand-600/30 hover:shadow-lg hover:shadow-brand-600/40 hover:-translate-y-0.5 active:translate-y-0 transition-all duration-200">
            <span>Apply Now</span>
            <i data-lucide="arrow-up-right" class="w-4 h-4 text-amber-300"></i>
          </a>
        </div>

        <!-- Mobile Menu Toggle Button -->
        <button id="mobile-toggle-btn" class="lg:hidden p-2.5 rounded-xl border border-slate-200 text-slate-700 hover:bg-slate-100 focus:outline-none" aria-label="Toggle menu">
          <i data-lucide="menu" class="w-6 h-6"></i>
        </button>

      </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-200 bg-white/95 backdrop-blur-xl px-4 pt-3 pb-6 space-y-3">
      <div class="flex flex-col space-y-2 text-sm font-semibold text-slate-700">
        <a href="#about" class="px-3 py-2 rounded-lg hover:bg-brand-50 hover:text-brand-600" onclick="toggleMobileMenu()">About Us</a>
        <a href="#academics" class="px-3 py-2 rounded-lg hover:bg-brand-50 hover:text-brand-600" onclick="toggleMobileMenu()">Academics</a>
        <a href="#pillars" class="px-3 py-2 rounded-lg hover:bg-brand-50 hover:text-brand-600" onclick="toggleMobileMenu()">Why ia Academy</a>
        <a href="#facilities" class="px-3 py-2 rounded-lg hover:bg-brand-50 hover:text-brand-600" onclick="toggleMobileMenu()">Campus Life</a>
        <a href="#admissions" class="px-3 py-2 rounded-lg hover:bg-brand-50 hover:text-brand-600" onclick="toggleMobileMenu()">Admissions</a>
        <a href="#events" class="px-3 py-2 rounded-lg hover:bg-brand-50 hover:text-brand-600" onclick="toggleMobileMenu()">News & Events</a>
        <a href="#contact" class="px-3 py-2 rounded-lg hover:bg-brand-50 hover:text-brand-600" onclick="toggleMobileMenu()">Contact</a>
      </div>

      <div class="pt-4 border-t border-slate-100 flex flex-col gap-2.5">
        <button onclick="toggleMobileMenu(); openTourModal();" class="w-full flex items-center justify-center gap-2 py-3 rounded-xl border border-slate-300 font-semibold text-xs text-slate-700">
          <i data-lucide="calendar" class="w-4 h-4 text-brand-600"></i>
          <span>Schedule Campus Visit</span>
        </button>
        <a href="#admissions" onclick="toggleMobileMenu()" class="w-full flex items-center justify-center gap-2 py-3 rounded-xl bg-brand-600 text-white font-bold text-xs shadow-md">
          <span>Apply Online 2026/27</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>
    </div>
  </header>

  <!-- ========================================== -->
  <!-- 3. HERO SECTION                            -->
  <!-- ========================================== -->
  <section class="relative overflow-hidden pt-8 pb-16 lg:pt-16 lg:pb-24">
    <!-- Background Glows -->
    <div class="absolute top-0 left-1/4 w-96 h-96 hero-glow-1 pointer-events-none rounded-full blur-3xl"></div>
    <div class="absolute top-1/3 right-10 w-96 h-96 hero-glow-2 pointer-events-none rounded-full blur-3xl"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
        
        <!-- Left Content Column (7 cols) -->
        <div class="lg:col-span-7 space-y-6 lg:pr-6">
          
          <!-- Top Badge -->
          <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-100/80 border border-brand-200 text-brand-800 text-xs font-semibold">
            <span class="flex h-2 w-2 relative">
              <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-500 opacity-75"></span>
              <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-600"></span>
            </span>
            <span class="text-slate-800">Cambridge & IB World Accredited School</span>
            <span class="text-brand-600 font-bold">•</span>
            <span class="text-brand-700">Ages 3 – 18</span>
          </div>

          <!-- Main Headline -->
          <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12]">
            Nurturing <span class="bg-gradient-to-r from-brand-600 via-indigo-600 to-brand-800 bg-clip-text text-transparent">Tomorrow's Leaders</span> with Heart, Intellect & Vision.
          </h1>

          <!-- Subtitle -->
          <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-2xl">
            Welcome to ia Academy, where curiosity meets world-class academic rigour. We combine innovative STEM laboratories, transformative creative arts, and global citizenship to empower every student to thrive.
          </p>

          <!-- CTAs -->
          <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3.5 pt-2">
            <a href="#admissions" class="inline-flex items-center justify-center gap-2 px-7 py-4 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-sm shadow-xl shadow-brand-600/30 hover:shadow-2xl hover:shadow-brand-600/40 hover:-translate-y-0.5 transition-all">
              <span>Start Application 2026</span>
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </a>

            <button onclick="openTourModal()" class="inline-flex items-center justify-center gap-2 px-6 py-4 rounded-xl bg-white hover:bg-slate-50 border border-slate-300 text-slate-800 font-bold text-sm shadow-sm hover:shadow transition-all">
              <i data-lucide="compass" class="w-4 h-4 text-brand-600"></i>
              <span>Book Campus Visit</span>
            </button>

            <button onclick="openVideoModal()" class="inline-flex items-center justify-center gap-2 px-4 py-4 rounded-xl text-slate-600 hover:text-brand-600 font-semibold text-sm transition-colors group">
              <div class="w-8 h-8 rounded-full bg-brand-100 flex items-center justify-center text-brand-600 group-hover:scale-110 transition-transform">
                <i data-lucide="play" class="w-4 h-4 fill-brand-600"></i>
              </div>
              <span>Campus Video</span>
            </button>
          </div>

          <!-- Hero Metrics & Accreditations Strip -->
          <div class="pt-6 border-t border-slate-200/80 grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-6">
            <div>
              <p class="font-display text-2xl sm:text-3xl font-extrabold text-slate-900">100%</p>
              <p class="text-xs text-slate-500 font-medium">Top Uni Placement</p>
            </div>
            <div>
              <p class="font-display text-2xl sm:text-3xl font-extrabold text-brand-600">12:1</p>
              <p class="text-xs text-slate-500 font-medium">Student-Teacher Ratio</p>
            </div>
            <div>
              <p class="font-display text-2xl sm:text-3xl font-extrabold text-slate-900">38.4</p>
              <p class="text-xs text-slate-500 font-medium">Avg IB Diploma Score</p>
            </div>
            <div>
              <p class="font-display text-2xl sm:text-3xl font-extrabold text-accent-emerald">45+</p>
              <p class="text-xs text-slate-500 font-medium">Global Nationalities</p>
            </div>
          </div>

        </div>

        <!-- Right Visual Showcase Column (5 cols) -->
        <div class="lg:col-span-5 relative">
          
          <!-- Main Visual Container -->
          <div class="relative mx-auto max-w-md lg:max-w-none">
            <!-- Decorative Accent Backdrop Ring -->
            <div class="absolute -inset-4 bg-gradient-to-tr from-brand-600/20 via-amber-400/20 to-emerald-400/20 rounded-3xl filter blur-xl opacity-70"></div>
            
            <!-- Main Hero Image Frame -->
            <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white aspect-[4/5] bg-slate-900">
              <img 
                src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1000" 
                alt="Students collaborating happily in modern laboratory" 
                class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700"
              />
              <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>
              
              <!-- Bottom caption overlay inside image -->
              <div class="absolute bottom-4 left-4 right-4 text-white p-3 rounded-2xl bg-black/40 backdrop-blur-md border border-white/10">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-amber-400/90 text-slate-950 flex items-center justify-center font-bold">
                    <i data-lucide="award" class="w-5 h-5"></i>
                  </div>
                  <div>
                    <h4 class="text-xs font-bold text-white">Innovation in Learning</h4>
                    <p class="text-[11px] text-slate-300">National STEM & Arts Champions 2026</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Glass Badge 1: Top Right (Achievement) -->
            <div class="absolute -top-6 -right-4 sm:-right-6 glass-card p-4 rounded-2xl shadow-xl border border-white/80 animate-float-slow max-w-[210px] hidden sm:block">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-600 flex items-center justify-center shrink-0">
                  <i data-lucide="check-circle-2" class="w-5 h-5"></i>
                </div>
                <div>
                  <p class="text-xs font-bold text-slate-900">IB World School</p>
                  <p class="text-[10px] text-slate-500">Continuous 10-Yr Accreditation</p>
                </div>
              </div>
            </div>

            <!-- Floating Glass Badge 2: Bottom Left (Student Satisfaction) -->
            <div class="absolute -bottom-6 -left-4 sm:-left-6 glass-card p-4 rounded-2xl shadow-xl border border-white/80 animate-float-delayed max-w-[230px] hidden sm:block">
              <div class="flex items-center gap-3">
                <div class="flex -space-x-2 shrink-0">
                  <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=120" alt="Student">
                  <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=120" alt="Student">
                  <img class="w-8 h-8 rounded-full border-2 border-white object-cover" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&q=80&w=120" alt="Student">
                </div>
                <div>
                  <div class="flex items-center text-amber-400 text-xs">
                    <i data-lucide="star" class="w-3 h-3 fill-amber-400"></i>
                    <i data-lucide="star" class="w-3 h-3 fill-amber-400"></i>
                    <i data-lucide="star" class="w-3 h-3 fill-amber-400"></i>
                    <i data-lucide="star" class="w-3 h-3 fill-amber-400"></i>
                    <i data-lucide="star" class="w-3 h-3 fill-amber-400"></i>
                  </div>
                  <p class="text-[11px] font-bold text-slate-800">99.4% Parent Praise</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ========================================== -->
  <!-- 4. TRUST & ACCREDITATION BANNER            -->
  <!-- ========================================== -->
  <section class="py-10 bg-white border-y border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <p class="text-center text-xs font-semibold tracking-wider text-slate-400 uppercase mb-6">
        Accredited by Global Educational Governing Bodies
      </p>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-6 items-center justify-items-center opacity-75 hover:opacity-100 transition-opacity">
        <div class="flex items-center gap-2 text-slate-700 font-bold text-sm">
          <i data-lucide="globe" class="w-5 h-5 text-brand-600"></i>
          <span>IB World School</span>
        </div>
        <div class="flex items-center gap-2 text-slate-700 font-bold text-sm">
          <i data-lucide="bookmark-check" class="w-5 h-5 text-brand-600"></i>
          <span>Cambridge Assessment</span>
        </div>
        <div class="flex items-center gap-2 text-slate-700 font-bold text-sm">
          <i data-lucide="shield-check" class="w-5 h-5 text-brand-600"></i>
          <span>CIS Accredited</span>
        </div>
        <div class="flex items-center gap-2 text-slate-700 font-bold text-sm">
          <i data-lucide="award" class="w-5 h-5 text-brand-600"></i>
          <span>NEASC Member</span>
        </div>
        <div class="flex items-center gap-2 text-slate-700 font-bold text-sm">
          <i data-lucide="sparkles" class="w-5 h-5 text-brand-600"></i>
          <span>CollegeBoard AP</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========================================== -->
  <!-- 5. ABOUT & FOUNDATION                      -->
  <!-- ========================================== -->
  <section id="about" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Left Image Composition (5 cols) -->
        <div class="lg:col-span-5 grid grid-cols-2 gap-4">
          <div class="space-y-4">
            <img class="rounded-2xl shadow-lg object-cover w-full h-48 sm:h-56" src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&q=80&w=600" alt="Classroom learning">
            <img class="rounded-2xl shadow-lg object-cover w-full h-36 sm:h-44" src="https://images.unsplash.com/photo-1577896851231-70ef18881754?auto=format&fit=crop&q=80&w=600" alt="Students engaged in discussion">
          </div>
          <div class="space-y-4 pt-6">
            <div class="p-6 rounded-2xl bg-brand-700 text-white shadow-xl flex flex-col justify-between h-44">
              <i data-lucide="quote" class="w-8 h-8 text-amber-300 opacity-80"></i>
              <p class="text-xs font-medium italic">"Education is not the learning of facts, but training the mind to think."</p>
              <p class="text-[10px] font-bold uppercase tracking-wider text-amber-300">ia Academy Motto</p>
            </div>
            <img class="rounded-2xl shadow-lg object-cover w-full h-44 sm:h-52" src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&q=80&w=600" alt="Library study">
          </div>
        </div>

        <!-- Right Narrative Column (7 cols) -->
        <div class="lg:col-span-7 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold">
            <i data-lucide="compass" class="w-3.5 h-3.5"></i>
            <span>Our Heritage & Philosophy</span>
          </div>

          <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Cultivating Intellect, Character & Curiosity for over 25 Years.
          </h2>

          <p class="text-slate-600 text-base leading-relaxed">
            Founded with the belief that every young mind holds limitless potential, ia Academy has stood at the vanguard of modern education. We do not merely teach curriculum; we build critical inquiry, emotional resilience, empathy, and collaborative leadership.
          </p>

          <p class="text-slate-600 text-base leading-relaxed">
            Our campus brings together students from over 45 nations in an environment designed to stimulate independent thinking. From state-of-the-art bio-robotics suites to black-box theatres and championship athletic grounds, every space inspires greatness.
          </p>

          <!-- Core Pillars Grid -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200 shadow-sm">
              <div class="p-2 rounded-lg bg-brand-50 text-brand-600 shrink-0">
                <i data-lucide="sparkles" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="text-sm font-bold text-slate-900">Personalized Mentorship</h4>
                <p class="text-xs text-slate-500 mt-0.5">Individual learning pathways adapted to student passions.</p>
              </div>
            </div>

            <div class="flex items-start gap-3 p-3.5 rounded-xl bg-white border border-slate-200 shadow-sm">
              <div class="p-2 rounded-lg bg-emerald-50 text-emerald-600 shrink-0">
                <i data-lucide="globe" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="text-sm font-bold text-slate-900">Global Perspective</h4>
                <p class="text-xs text-slate-500 mt-0.5">Trilingual language streams & UN youth leadership programs.</p>
              </div>
            </div>
          </div>

          <div class="pt-2">
            <button onclick="openTourModal()" class="inline-flex items-center gap-2 text-sm font-bold text-brand-600 hover:text-brand-800 transition-colors">
              <span>Read the Head of School's Welcome Address</span>
              <i data-lucide="arrow-right" class="w-4 h-4"></i>
            </button>
          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ========================================== -->
  <!-- 6. FOUR PILLARS / WHY CHOOSE US            -->
  <!-- ========================================== -->
  <section id="pillars" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold border border-brand-200">
          <i data-lucide="shield" class="w-3.5 h-3.5"></i>
          The ia Academy Advantage
        </span>
        <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Why Discerning Families Choose ia Academy
        </h2>
        <p class="text-slate-600 text-base">
          A balanced education engineered to produce scholars, creators, athletes, and compassionate human beings.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
        
        <!-- Card 1 -->
        <div class="p-8 rounded-3xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-brand-300 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
          <div class="w-14 h-14 rounded-2xl bg-brand-600 text-white flex items-center justify-center shadow-lg shadow-brand-600/30 group-hover:scale-110 transition-transform mb-6">
            <i data-lucide="brain-circuit" class="w-7 h-7"></i>
          </div>
          <h3 class="font-display text-xl font-bold text-slate-900 mb-2">Academic Mastery</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Consistently ranked in the top 1% globally for Cambridge IGCSE and IB Diploma outcomes with direct admissions to Harvard, Oxford, MIT, and Stanford.
          </p>
          <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700">
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-600"></i> Dual International Curricula</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-brand-600"></i> Ivy & Russell Group Advisory</li>
          </ul>
        </div>

        <!-- Card 2 -->
        <div class="p-8 rounded-3xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-accent-amber/50 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
          <div class="w-14 h-14 rounded-2xl bg-amber-500 text-white flex items-center justify-center shadow-lg shadow-amber-500/30 group-hover:scale-110 transition-transform mb-6">
            <i data-lucide="cpu" class="w-7 h-7"></i>
          </div>
          <h3 class="font-display text-xl font-bold text-slate-900 mb-2">STEM & Innovation</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            Pioneering makerspaces, AI coding labs, competitive robotics teams, and collegiate-grade bioscience research suites from Grade 6 upwards.
          </p>
          <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700">
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-amber-500"></i> VEX & FIRST Robotics Teams</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-amber-500"></i> Dedicated 3D Fabrication Studio</li>
          </ul>
        </div>

        <!-- Card 3 -->
        <div class="p-8 rounded-3xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-accent-emerald/50 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
          <div class="w-14 h-14 rounded-2xl bg-emerald-600 text-white flex items-center justify-center shadow-lg shadow-emerald-600/30 group-hover:scale-110 transition-transform mb-6">
            <i data-lucide="palette" class="w-7 h-7"></i>
          </div>
          <h3 class="font-display text-xl font-bold text-slate-900 mb-2">Arts & Athletics</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            A 600-seat acoustic theatre, orchestral ensembles, digital arts suites, Olympic 50m heated pool, FIFA-grade turf pitch, and indoor basketball arena.
          </p>
          <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700">
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> 30+ Competitive Sports Teams</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600"></i> Juilliard-Partnered Music Program</li>
          </ul>
        </div>

        <!-- Card 4 -->
        <div class="p-8 rounded-3xl bg-slate-50 hover:bg-white border border-slate-200/80 hover:border-brand-500/50 hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
          <div class="w-14 h-14 rounded-2xl bg-indigo-700 text-white flex items-center justify-center shadow-lg shadow-indigo-700/30 group-hover:scale-110 transition-transform mb-6">
            <i data-lucide="heart-handshake" class="w-7 h-7"></i>
          </div>
          <h3 class="font-display text-xl font-bold text-slate-900 mb-2">Character & Community</h3>
          <p class="text-sm text-slate-600 leading-relaxed">
            A safe, inclusive, values-driven environment with dedicated pastoral counselors, student wellness lounges, and social impact outreach projects.
          </p>
          <ul class="mt-4 space-y-2 text-xs font-semibold text-slate-700">
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-indigo-700"></i> 24/7 Gated Security & Medical Center</li>
            <li class="flex items-center gap-2"><i data-lucide="check" class="w-3.5 h-3.5 text-indigo-700"></i> Duke of Edinburgh Award Center</li>
          </ul>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 7. ACADEMIC PROGRAMS (INTERACTIVE TABS)   -->
  <!-- ========================================== -->
  <section id="academics" class="py-20 bg-slate-900 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#818cf8_1px,transparent_1px)] [background-size:16px_16px]"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
      
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-12">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-500/20 text-brand-300 text-xs font-bold border border-brand-500/30">
          <i data-lucide="book-open" class="w-3.5 h-3.5"></i>
          Educational Journey
        </span>
        <h2 class="font-display text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight">
          Curricula Crafted for Every Milestone
        </h2>
        <p class="text-slate-400 text-base">
          From the foundational wonder of early years to the intellectual rigor of university preparatory graduation.
        </p>
      </div>

      <!-- Tab Buttons -->
      <div class="flex flex-wrap justify-center gap-2 sm:gap-3 mb-12">
        <button onclick="switchProgramTab('early')" id="tab-btn-early" class="program-tab active px-5 py-3 rounded-2xl text-xs sm:text-sm font-bold bg-slate-800 text-slate-300 hover:text-white transition-all duration-200 flex items-center gap-2">
          <i data-lucide="baby" class="w-4 h-4"></i>
          <span>Early Learning (Ages 3–5)</span>
        </button>
        
        <button onclick="switchProgramTab('primary')" id="tab-btn-primary" class="program-tab px-5 py-3 rounded-2xl text-xs sm:text-sm font-bold bg-slate-800 text-slate-300 hover:text-white transition-all duration-200 flex items-center gap-2">
          <i data-lucide="pencil" class="w-4 h-4"></i>
          <span>Primary School (Grades 1–5)</span>
        </button>

        <button onclick="switchProgramTab('middle')" id="tab-btn-middle" class="program-tab px-5 py-3 rounded-2xl text-xs sm:text-sm font-bold bg-slate-800 text-slate-300 hover:text-white transition-all duration-200 flex items-center gap-2">
          <i data-lucide="compass" class="w-4 h-4"></i>
          <span>Middle School (Grades 6–8)</span>
        </button>

        <button onclick="switchProgramTab('high')" id="tab-btn-high" class="program-tab px-5 py-3 rounded-2xl text-xs sm:text-sm font-bold bg-slate-800 text-slate-300 hover:text-white transition-all duration-200 flex items-center gap-2">
          <i data-lucide="graduation-cap" class="w-4 h-4"></i>
          <span>High School & IB DP (Grades 9–12)</span>
        </button>
      </div>

      <!-- Tab 1: Early Learning -->
      <div id="tab-content-early" class="program-content grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-800/80 border border-slate-700/80 rounded-3xl p-6 sm:p-10 backdrop-blur-md">
        <div class="lg:col-span-6 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-400/10 text-amber-300 text-xs font-semibold">
            <span>Reggio Emilia & IB Primary Years Inception</span>
          </div>
          <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white">
            Sparking Joy, Curiosity & Early Language Mastery
          </h3>
          <p class="text-slate-300 text-sm leading-relaxed">
            Our kindergarten is a wonder-filled sanctuary where children learn through purposeful play, sensory discovery, and natural exploration. Expert early-childhood educators nurture foundational literacy, bilingual phonics, and emotional resilience.
          </p>

          <div class="grid grid-cols-2 gap-4 pt-2">
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Class Size Ratio</p>
              <p class="text-lg font-bold text-white mt-1">1:6 Teacher Ratio</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Language Immersion</p>
              <p class="text-lg font-bold text-white mt-1">English + Mandarin</p>
            </div>
          </div>

          <div class="pt-2 flex items-center gap-4">
            <button onclick="openTourModal()" class="px-5 py-3 rounded-xl bg-brand-600 hover:bg-brand-500 text-white font-bold text-xs transition-colors">
              Schedule Early Years Visit
            </button>
            <a href="#admissions" class="text-xs font-semibold text-slate-300 hover:text-white underline underline-offset-4">Download Curriculum Guide (PDF)</a>
          </div>
        </div>

        <div class="lg:col-span-6">
          <img class="rounded-2xl shadow-2xl object-cover w-full h-80 lg:h-96" src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?auto=format&fit=crop&q=80&w=800" alt="Early learning discovery">
        </div>
      </div>

      <!-- Tab 2: Primary School (Hidden by default) -->
      <div id="tab-content-primary" class="program-content hidden grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-800/80 border border-slate-700/80 rounded-3xl p-6 sm:p-10 backdrop-blur-md">
        <div class="lg:col-span-6 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-400/10 text-emerald-300 text-xs font-semibold">
            <span>Cambridge Primary & IB PYP Framework</span>
          </div>
          <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white">
            Building Conceptual Depth, Mathematical Fluency & Empathy
          </h3>
          <p class="text-slate-300 text-sm leading-relaxed">
            Primary students engage in inquiry-driven thematic units. They develop strong foundational skills in mathematics, creative writing, scientific observation, and digital literacy while discovering sports, visual arts, and musical performance.
          </p>

          <div class="grid grid-cols-2 gap-4 pt-2">
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Class Size Ratio</p>
              <p class="text-lg font-bold text-white mt-1">1:12 Ratio</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Hands-on STEM</p>
              <p class="text-lg font-bold text-white mt-1">Weekly Maker Lab</p>
            </div>
          </div>

          <div class="pt-2 flex items-center gap-4">
            <button onclick="openTourModal()" class="px-5 py-3 rounded-xl bg-brand-600 hover:bg-brand-500 text-white font-bold text-xs transition-colors">
              Schedule Primary Visit
            </button>
            <a href="#admissions" class="text-xs font-semibold text-slate-300 hover:text-white underline underline-offset-4">Download Curriculum Guide (PDF)</a>
          </div>
        </div>

        <div class="lg:col-span-6">
          <img class="rounded-2xl shadow-2xl object-cover w-full h-80 lg:h-96" src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&q=80&w=800" alt="Primary classroom education">
        </div>
      </div>

      <!-- Tab 3: Middle School (Hidden by default) -->
      <div id="tab-content-middle" class="program-content hidden grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-800/80 border border-slate-700/80 rounded-3xl p-6 sm:p-10 backdrop-blur-md">
        <div class="lg:col-span-6 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyan-400/10 text-cyan-300 text-xs font-semibold">
            <span>Cambridge Lower Secondary & IB MYP</span>
          </div>
          <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white">
            Developing Critical Inquiry, Ethical Reasoning & Autonomy
          </h3>
          <p class="text-slate-300 text-sm leading-relaxed">
            Middle schoolers transition into subject-specialist learning with rigorous laboratories, debate societies, Model UN delegations, coding marathons, and inter-school sports championships.
          </p>

          <div class="grid grid-cols-2 gap-4 pt-2">
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Clubs & Societies</p>
              <p class="text-lg font-bold text-white mt-1">40+ Student Led</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Leadership</p>
              <p class="text-lg font-bold text-white mt-1">Community Action</p>
            </div>
          </div>

          <div class="pt-2 flex items-center gap-4">
            <button onclick="openTourModal()" class="px-5 py-3 rounded-xl bg-brand-600 hover:bg-brand-500 text-white font-bold text-xs transition-colors">
              Schedule Middle School Visit
            </button>
            <a href="#admissions" class="text-xs font-semibold text-slate-300 hover:text-white underline underline-offset-4">Download Curriculum Guide (PDF)</a>
          </div>
        </div>

        <div class="lg:col-span-6">
          <img class="rounded-2xl shadow-2xl object-cover w-full h-80 lg:h-96" src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?auto=format&fit=crop&q=80&w=800" alt="Middle school science project">
        </div>
      </div>

      <!-- Tab 4: High School & IB DP (Hidden by default) -->
      <div id="tab-content-high" class="program-content hidden grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-slate-800/80 border border-slate-700/80 rounded-3xl p-6 sm:p-10 backdrop-blur-md">
        <div class="lg:col-span-6 space-y-6">
          <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-400/10 text-brand-300 text-xs font-semibold">
            <span>IGCSE & International Baccalaureate (IB) Diploma</span>
          </div>
          <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white">
            Pre-University Excellence & Global University Pathways
          </h3>
          <p class="text-slate-300 text-sm leading-relaxed">
            Recognized as the gold standard in college admissions worldwide. Our high school scholars complete university-level research (Extended Essay), Theory of Knowledge, and community projects while receiving bespoke college counseling.
          </p>

          <div class="grid grid-cols-2 gap-4 pt-2">
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Avg Scholarship Value</p>
              <p class="text-lg font-bold text-amber-300 mt-1">$45K / Student</p>
            </div>
            <div class="p-4 rounded-xl bg-slate-900/60 border border-slate-700">
              <p class="text-xs text-slate-400">Counselor Ratio</p>
              <p class="text-lg font-bold text-white mt-1">1:25 University Guidance</p>
            </div>
          </div>

          <div class="pt-2 flex items-center gap-4">
            <button onclick="openTourModal()" class="px-5 py-3 rounded-xl bg-brand-600 hover:bg-brand-500 text-white font-bold text-xs transition-colors">
              Schedule High School Visit
            </button>
            <a href="#admissions" class="text-xs font-semibold text-slate-300 hover:text-white underline underline-offset-4">Download Curriculum Guide (PDF)</a>
          </div>
        </div>

        <div class="lg:col-span-6">
          <img class="rounded-2xl shadow-2xl object-cover w-full h-80 lg:h-96" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=800" alt="High school graduation and research">
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 8. CAMPUS LIFE & FACILITIES SHOWCASE       -->
  <!-- ========================================== -->
  <section id="facilities" class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
        <div class="max-w-2xl space-y-3">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold">
            <i data-lucide="building-2" class="w-3.5 h-3.5"></i>
            World-Class Campus
          </span>
          <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Designed to Fuel Boundless Imagination
          </h2>
          <p class="text-slate-600 text-base">
            Spanning 35 green acres of purpose-built architectural facilities engineered for innovation, physical vitality, and artistic expression.
          </p>
        </div>

        <!-- Filter Pills -->
        <div class="flex flex-wrap gap-2">
          <button onclick="filterFacilities('all')" class="facility-pill active px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-slate-400 transition-colors">
            All Facilities
          </button>
          <button onclick="filterFacilities('stem')" class="facility-pill px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-slate-400 transition-colors">
            STEM & Robotics
          </button>
          <button onclick="filterFacilities('sports')" class="facility-pill px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-slate-400 transition-colors">
            Sports & Aquatics
          </button>
          <button onclick="filterFacilities('arts')" class="facility-pill px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-slate-400 transition-colors">
            Theatre & Arts
          </button>
        </div>
      </div>

      <!-- Facilities Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="facilities-grid">
        
        <!-- Facility 1: Robotics Lab -->
        <div class="facility-card stem bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-card hover:shadow-xl transition-all duration-300 group">
          <div class="relative h-60 overflow-hidden bg-slate-900">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&q=80&w=600" alt="Advanced Robotics Suite">
            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-amber-300 text-xs font-semibold border border-white/10">
              STEM & Maker
            </span>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-display text-lg font-bold text-slate-900">Da Vinci Robotics & AI Center</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Equipped with industrial 3D printers, laser cutters, CNC machines, and VEX robotics test arenas for competitive engineering.
            </p>
          </div>
        </div>

        <!-- Facility 2: Olympic Aquatics & Athletics -->
        <div class="facility-card sports bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-card hover:shadow-xl transition-all duration-300 group">
          <div class="relative h-60 overflow-hidden bg-slate-900">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1576610616656-d3aa5d1f4534?auto=format&fit=crop&q=80&w=600" alt="Olympic Heated Pool">
            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-cyan-300 text-xs font-semibold border border-white/10">
              Aquatics & Athletics
            </span>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-display text-lg font-bold text-slate-900">Olympic 50m Aquatics Complex</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Temperature-controlled indoor 8-lane competition swimming pool with professional timing touchpads and viewing gallery.
            </p>
          </div>
        </div>

        <!-- Facility 3: Performing Arts Auditorium -->
        <div class="facility-card arts bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-card hover:shadow-xl transition-all duration-300 group">
          <div class="relative h-60 overflow-hidden bg-slate-900">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1507676184212-d03ab07a01bf?auto=format&fit=crop&q=80&w=600" alt="Performing Arts Theatre">
            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-rose-300 text-xs font-semibold border border-white/10">
              Performing Arts
            </span>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-display text-lg font-bold text-slate-900">600-Seat Symphony Auditorium</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Acoustically engineered concert hall with motorized stage rigging, professional lighting rigs, and Dolby Atmos audio suite.
            </p>
          </div>
        </div>

        <!-- Facility 4: Modern Media Library -->
        <div class="facility-card stem bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-card hover:shadow-xl transition-all duration-300 group">
          <div class="relative h-60 overflow-hidden bg-slate-900">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&q=80&w=600" alt="Digital Media Library">
            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-brand-300 text-xs font-semibold border border-white/10">
              Digital Learning
            </span>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-display text-lg font-bold text-slate-900">Athena Knowledge Commons & ThinkTank</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Over 50,000 physical volumes, subscriptions to JSTOR and Oxford Academic, and silent sound-dampened study pods.
            </p>
          </div>
        </div>

        <!-- Facility 5: Football & Track Complex -->
        <div class="facility-card sports bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-card hover:shadow-xl transition-all duration-300 group">
          <div class="relative h-60 overflow-hidden bg-slate-900">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1459865264687-595d652de67e?auto=format&fit=crop&q=80&w=600" alt="Athletic Track & Stadium">
            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-emerald-300 text-xs font-semibold border border-white/10">
              Athletics
            </span>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-display text-lg font-bold text-slate-900">FIFA-Certified AstroTurf & Running Track</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Full-size floodlit football pitch surrounded by an all-weather 400m synthetic running track and tennis courts.
            </p>
          </div>
        </div>

        <!-- Facility 6: Fine Arts & Ceramics Studio -->
        <div class="facility-card arts bg-white rounded-3xl overflow-hidden border border-slate-200/90 shadow-card hover:shadow-xl transition-all duration-300 group">
          <div class="relative h-60 overflow-hidden bg-slate-900">
            <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1513364776144-60967b0f800f?auto=format&fit=crop&q=80&w=600" alt="Fine Arts Atelier">
            <span class="absolute top-4 left-4 px-3 py-1 rounded-full bg-slate-950/80 backdrop-blur-md text-amber-300 text-xs font-semibold border border-white/10">
              Visual Arts
            </span>
          </div>
          <div class="p-6 space-y-2">
            <h3 class="font-display text-lg font-bold text-slate-900">Monet Fine Arts & Pottery Ateliers</h3>
            <p class="text-xs text-slate-600 leading-relaxed">
              Natural north-facing skylit studios featuring pottery throwing wheels, high-temp kilns, and digital graphic tablets.
            </p>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 9. ADMISSIONS PROCESS (4 STEPS)            -->
  <!-- ========================================== -->
  <section id="admissions" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold border border-brand-200">
          <i data-lucide="check-circle" class="w-3.5 h-3.5"></i>
          Enrollment Guide
        </span>
        <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Your Simple 4-Step Pathway to Enrollment
        </h2>
        <p class="text-slate-600 text-base">
          Our dedicated admissions team guides your family warmly at every juncture.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
        
        <!-- Step 1 -->
        <div class="relative p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-brand-500 hover:shadow-lg transition-all text-center">
          <div class="w-12 h-12 rounded-2xl bg-brand-600 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md shadow-brand-600/30">
            01
          </div>
          <h3 class="font-display text-base font-bold text-slate-900 mb-2">Submit Online Inquiry</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Fill out our quick prospective student form with past academic transcripts and family background.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="relative p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-brand-500 hover:shadow-lg transition-all text-center">
          <div class="w-12 h-12 rounded-2xl bg-brand-700 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md shadow-brand-700/30">
            02
          </div>
          <h3 class="font-display text-base font-bold text-slate-900 mb-2">Campus Tour & Assessment</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Experience our vibrant classes in person while your child completes an age-appropriate cognitive diagnostic.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="relative p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-brand-500 hover:shadow-lg transition-all text-center">
          <div class="w-12 h-12 rounded-2xl bg-brand-800 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md shadow-brand-800/30">
            03
          </div>
          <h3 class="font-display text-base font-bold text-slate-900 mb-2">Family Conversation</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            An informal conversation with the Division Principal to align on values, aspirational goals, and learning support.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="relative p-6 rounded-3xl bg-slate-50 border border-slate-200 hover:border-brand-500 hover:shadow-lg transition-all text-center">
          <div class="w-12 h-12 rounded-2xl bg-emerald-600 text-white font-extrabold text-lg flex items-center justify-center mx-auto mb-4 shadow-md shadow-emerald-600/30">
            04
          </div>
          <h3 class="font-display text-base font-bold text-slate-900 mb-2">Offer & Welcome Pack</h3>
          <p class="text-xs text-slate-600 leading-relaxed">
            Receive formal admission offer, meet your family mentor, and get ready for New Student Orientation Week!
          </p>
        </div>

      </div>

      <!-- Admissions Action Box -->
      <div class="mt-14 p-8 sm:p-10 rounded-3xl bg-gradient-to-r from-brand-900 via-brand-800 to-indigo-900 text-white shadow-2xl relative overflow-hidden flex flex-col lg:flex-row items-center justify-between gap-8">
        <div class="space-y-3 max-w-xl text-center lg:text-left">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-400/20 text-amber-300 text-xs font-semibold">
            <i data-lucide="clock" class="w-3.5 h-3.5"></i>
            Rolling Admissions Now Open
          </span>
          <h3 class="font-display text-2xl sm:text-3xl font-extrabold text-white">
            Ready to give your child an extraordinary education?
          </h3>
          <p class="text-slate-300 text-sm">
            Places are capped to maintain our intimate 12:1 student-teacher ratio. Scholarships available for academic and artistic merit.
          </p>
        </div>

        <div class="flex flex-col sm:flex-row gap-3.5 shrink-0">
          <button onclick="openTourModal()" class="px-6 py-3.5 rounded-xl bg-white text-slate-900 hover:bg-slate-100 font-bold text-xs transition-colors shadow-lg">
            Book Personalized Tour
          </button>
          <button onclick="openInquiryModal()" class="px-6 py-3.5 rounded-xl bg-amber-400 hover:bg-amber-300 text-slate-950 font-bold text-xs transition-colors shadow-lg shadow-amber-400/20">
            Request Prospectus 2026/27
          </button>
        </div>
      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 10. TESTIMONIALS & VOICES                  -->
  <!-- ========================================== -->
  <section class="py-20 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center max-w-3xl mx-auto space-y-3 mb-16">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold border border-brand-200">
          <i data-lucide="message-square" class="w-3.5 h-3.5"></i>
          Community Reflections
        </span>
        <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
          Trusted by Parents, Celebrated by Students
        </h2>
        <p class="text-slate-600 text-base">
          Read what families say about their transformative experience at ia Academy.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Review 1 -->
        <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-card flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="flex items-center text-amber-400 gap-1">
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
            </div>
            <p class="text-slate-700 text-sm leading-relaxed italic">
              "The transformation in our daughter Maya since joining Grade 7 has been breathtaking. She went from hesitant in math to captain of the school's robotics championship team. The teachers genuinely care."
            </p>
          </div>
          <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
            <img class="w-11 h-11 rounded-full object-cover ring-2 ring-brand-100" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=120" alt="Parent">
            <div>
              <h4 class="text-sm font-bold text-slate-900">Dr. Sarah Montgomery</h4>
              <p class="text-xs text-slate-500">Parent of Grade 7 & 10 Students</p>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-card flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="flex items-center text-amber-400 gap-1">
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
            </div>
            <p class="text-slate-700 text-sm leading-relaxed italic">
              "ia Academy's IB Diploma counseling program is second to none. My mentor helped me prepare my Cambridge and MIT applications step-by-step. I never felt overwhelmed, only inspired."
            </p>
          </div>
          <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
            <img class="w-11 h-11 rounded-full object-cover ring-2 ring-brand-100" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=120" alt="Alumni">
            <div>
              <h4 class="text-sm font-bold text-slate-900">David O'Connor</h4>
              <p class="text-xs text-slate-500">Class of '25, MIT Engineering Scholar</p>
            </div>
          </div>
        </div>

        <!-- Review 3 -->
        <div class="p-8 rounded-3xl bg-white border border-slate-200/80 shadow-card flex flex-col justify-between space-y-6">
          <div class="space-y-4">
            <div class="flex items-center text-amber-400 gap-1">
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
              <i data-lucide="star" class="w-4 h-4 fill-amber-400"></i>
            </div>
            <p class="text-slate-700 text-sm leading-relaxed italic">
              "Moving internationally can be scary for children. The welcome committee and bilingual learning staff embraced our boys from day one. In two weeks they felt like they'd been here for years."
            </p>
          </div>
          <div class="flex items-center gap-3 pt-4 border-t border-slate-100">
            <img class="w-11 h-11 rounded-full object-cover ring-2 ring-brand-100" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=120" alt="Parent">
            <div>
              <h4 class="text-sm font-bold text-slate-900">Alejandro & Elena Ortiz</h4>
              <p class="text-xs text-slate-500">Expatriate Parents (Kindergarten & Grade 3)</p>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 11. UPCOMING EVENTS & NEWS                 -->
  <!-- ========================================== -->
  <section id="events" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
        <div class="max-w-xl space-y-3">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold">
            <i data-lucide="calendar" class="w-3.5 h-3.5"></i>
            Campus Life in Motion
          </span>
          <h2 class="font-display text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight">
            Upcoming Events & Open Days
          </h2>
          <p class="text-slate-600 text-base">
            Join us on campus to experience the community spirit first-hand.
          </p>
        </div>

        <a href="#contact" class="inline-flex items-center gap-2 text-sm font-bold text-brand-600 hover:text-brand-800 transition-colors">
          <span>View Full Academic Calendar</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Event 1 -->
        <div class="rounded-3xl border border-slate-200 overflow-hidden hover:shadow-lg transition-all group flex flex-col">
          <div class="p-6 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-xl bg-brand-600 text-white flex flex-col items-center justify-center font-bold">
                <span class="text-xs uppercase tracking-wider">NOV</span>
                <span class="text-base leading-none">15</span>
              </div>
              <div>
                <span class="text-[11px] font-semibold text-brand-600 uppercase">Open Campus Day</span>
                <p class="text-xs text-slate-500">10:00 AM – 2:00 PM</p>
              </div>
            </div>
            <span class="px-2.5 py-1 rounded-full bg-emerald-100 text-emerald-800 text-[10px] font-bold">In-Person</span>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
            <div>
              <h3 class="font-display text-base font-bold text-slate-900 group-hover:text-brand-600 transition-colors">
                Fall 2026 Grand Open House & STEM Showcase
              </h3>
              <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                Tour all 35 acres, meet department heads, and watch live robotics and chemistry demonstrations.
              </p>
            </div>
            <button onclick="rsvpEvent('Fall 2026 Open House')" class="w-full py-2.5 rounded-xl border border-slate-300 hover:border-brand-600 hover:bg-brand-50 text-slate-700 hover:text-brand-600 text-xs font-bold transition-all">
              Reserve Guest Pass
            </button>
          </div>
        </div>

        <!-- Event 2 -->
        <div class="rounded-3xl border border-slate-200 overflow-hidden hover:shadow-lg transition-all group flex flex-col">
          <div class="p-6 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-xl bg-amber-500 text-white flex flex-col items-center justify-center font-bold">
                <span class="text-xs uppercase tracking-wider">NOV</span>
                <span class="text-base leading-none">28</span>
              </div>
              <div>
                <span class="text-[11px] font-semibold text-amber-600 uppercase">Information Evening</span>
                <p class="text-xs text-slate-500">6:30 PM – 8:00 PM</p>
              </div>
            </div>
            <span class="px-2.5 py-1 rounded-full bg-brand-100 text-brand-800 text-[10px] font-bold">Hybrid</span>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
            <div>
              <h3 class="font-display text-base font-bold text-slate-900 group-hover:text-amber-600 transition-colors">
                Cambridge IGCSE & IB Diploma Guidance Night
              </h3>
              <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                An essential seminar for Grade 8–10 parents examining subject selections, university tariffs, and AP credits.
              </p>
            </div>
            <button onclick="rsvpEvent('IB Diploma Guidance Night')" class="w-full py-2.5 rounded-xl border border-slate-300 hover:border-amber-500 hover:bg-amber-50 text-slate-700 hover:text-amber-600 text-xs font-bold transition-all">
              Reserve Guest Pass
            </button>
          </div>
        </div>

        <!-- Event 3 -->
        <div class="rounded-3xl border border-slate-200 overflow-hidden hover:shadow-lg transition-all group flex flex-col">
          <div class="p-6 bg-slate-50 border-b border-slate-100 flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-xl bg-indigo-700 text-white flex flex-col items-center justify-center font-bold">
                <span class="text-xs uppercase tracking-wider">DEC</span>
                <span class="text-base leading-none">12</span>
              </div>
              <div>
                <span class="text-[11px] font-semibold text-indigo-600 uppercase">Performing Arts</span>
                <p class="text-xs text-slate-500">7:00 PM – 9:30 PM</p>
              </div>
            </div>
            <span class="px-2.5 py-1 rounded-full bg-rose-100 text-rose-800 text-[10px] font-bold">Auditorium</span>
          </div>
          <div class="p-6 flex-1 flex flex-col justify-between space-y-4">
            <div>
              <h3 class="font-display text-base font-bold text-slate-900 group-hover:text-indigo-600 transition-colors">
                Annual Winter Gala Symphony & Choir Concert
              </h3>
              <p class="text-xs text-slate-600 mt-2 leading-relaxed">
                A magical evening featuring ia Academy's 80-piece philharmonic orchestra and student choir.
              </p>
            </div>
            <button onclick="rsvpEvent('Winter Gala Symphony')" class="w-full py-2.5 rounded-xl border border-slate-300 hover:border-indigo-600 hover:bg-indigo-50 text-slate-700 hover:text-indigo-600 text-xs font-bold transition-all">
              Reserve Guest Pass
            </button>
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 12. FREQUENTLY ASKED QUESTIONS (FAQ)       -->
  <!-- ========================================== -->
  <section class="py-20 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="text-center space-y-3 mb-12">
        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold border border-brand-200">
          <i data-lucide="help-circle" class="w-3.5 h-3.5"></i>
          Parent Inquiries
        </span>
        <h2 class="font-display text-3xl font-extrabold text-slate-900 tracking-tight">
          Frequently Asked Questions
        </h2>
        <p class="text-slate-600 text-sm">
          Everything you need to know about admissions, student life, and scholarships.
        </p>
      </div>

      <div class="space-y-4" id="faq-accordion">
        
        <!-- FAQ 1 -->
        <div class="rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-sm">
          <button onclick="toggleFaq(1)" class="w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-bold text-sm text-slate-900 hover:text-brand-600 transition-colors">
            <span>What are the primary admission application deadlines for 2026/2027?</span>
            <i data-lucide="chevron-down" id="faq-icon-1" class="w-4 h-4 text-slate-400 transform transition-transform duration-200"></i>
          </button>
          <div id="faq-body-1" class="hidden px-6 pb-4 pt-1 text-xs text-slate-600 leading-relaxed border-t border-slate-100">
            We operate rolling admissions throughout the academic year depending on seat availability. However, priority admissions for September intake close on December 15 for Round 1, and February 28 for Round 2. We recommend applying early to secure placement.
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-sm">
          <button onclick="toggleFaq(2)" class="w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-bold text-sm text-slate-900 hover:text-brand-600 transition-colors">
            <span>Do you offer English as an Additional Language (EAL) support?</span>
            <i data-lucide="chevron-down" id="faq-icon-2" class="w-4 h-4 text-slate-400 transform transition-transform duration-200"></i>
          </button>
          <div id="faq-body-2" class="hidden px-6 pb-4 pt-1 text-xs text-slate-600 leading-relaxed border-t border-slate-100">
            Yes. ia Academy provides intensive, accredited English language immersion for non-native speakers from Kindergarten through Grade 9. Our specialized EAL coaches support students in both small group pull-out sessions and co-teaching mainstream classrooms.
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-sm">
          <button onclick="toggleFaq(3)" class="w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-bold text-sm text-slate-900 hover:text-brand-600 transition-colors">
            <span>What bus transport and campus dining services are provided?</span>
            <i data-lucide="chevron-down" id="faq-icon-3" class="w-4 h-4 text-slate-400 transform transition-transform duration-200"></i>
          </button>
          <div id="faq-body-3" class="hidden px-6 pb-4 pt-1 text-xs text-slate-600 leading-relaxed border-t border-slate-100">
            Our private, GPS-tracked, air-conditioned bus fleet covers over 25 express routes with licensed chaperones on every route. Our campus dining hall serves fresh, organic, nutritionist-curated meals daily with Halal, vegetarian, and allergy-safe menus.
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="rounded-2xl bg-white border border-slate-200 overflow-hidden shadow-sm">
          <button onclick="toggleFaq(4)" class="w-full px-6 py-4 text-left flex items-center justify-between gap-4 font-bold text-sm text-slate-900 hover:text-brand-600 transition-colors">
            <span>Are academic, arts, or sports scholarships available?</span>
            <i data-lucide="chevron-down" id="faq-icon-4" class="w-4 h-4 text-slate-400 transform transition-transform duration-200"></i>
          </button>
          <div id="faq-body-4" class="hidden px-6 pb-4 pt-1 text-xs text-slate-600 leading-relaxed border-t border-slate-100">
            Yes. We offer merit-based scholarships covering up to 50% of tuition fees for students entering Grades 6 through 11 demonstrating outstanding achievement in STEM, academic examinations, performing arts, or national-level athletics.
          </div>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 13. CONTACT & CAMPUS MAP SECTION           -->
  <!-- ========================================== -->
  <section id="contact" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
        
        <!-- Contact Info (5 cols) -->
        <div class="lg:col-span-5 space-y-6">
          <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-brand-50 text-brand-700 text-xs font-bold border border-brand-200">
            <i data-lucide="map-pin" class="w-3.5 h-3.5"></i>
            Visit Us
          </span>
          <h2 class="font-display text-3xl font-extrabold text-slate-900 tracking-tight">
            We Would Love to Welcome Your Family
          </h2>
          <p class="text-slate-600 text-sm leading-relaxed">
            Our welcoming campus is located in a tranquil, green educational enclave with convenient transit connections and ample visitor parking.
          </p>

          <div class="space-y-4 pt-2">
            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-brand-50 text-brand-600 flex items-center justify-center shrink-0">
                <i data-lucide="map-pin" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="text-xs font-bold text-slate-900">Campus Address</h4>
                <p class="text-xs text-slate-600">742 Academy Boulevard, Innovation Park, Metropolis, NY 10024</p>
              </div>
            </div>

            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                <i data-lucide="phone" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="text-xs font-bold text-slate-900">Direct Inquiries</h4>
                <p class="text-xs text-slate-600">+1 (800) 555-IA-ACADEMY / +1 (212) 555-0199</p>
              </div>
            </div>

            <div class="flex items-start gap-3.5">
              <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                <i data-lucide="clock" class="w-5 h-5"></i>
              </div>
              <div>
                <h4 class="text-xs font-bold text-slate-900">Admissions Office Hours</h4>
                <p class="text-xs text-slate-600">Monday – Friday: 8:00 AM – 5:00 PM | Saturday: 9:00 AM – 1:00 PM</p>
              </div>
            </div>
          </div>

          <div class="pt-2 flex gap-3">
            <button onclick="openTourModal()" class="px-5 py-3 rounded-xl bg-brand-600 text-white font-bold text-xs hover:bg-brand-700 shadow-md transition-colors">
              Schedule In-Person Tour
            </button>
            <a href="mailto:admissions@ia-academy.edu" class="px-5 py-3 rounded-xl border border-slate-300 text-slate-700 font-bold text-xs hover:bg-slate-50 transition-colors">
              Email Admissions
            </a>
          </div>
        </div>

        <!-- Interactive Quick Contact Form (7 cols) -->
        <div class="lg:col-span-7 bg-slate-50 p-8 sm:p-10 rounded-3xl border border-slate-200/90 shadow-card">
          <div class="space-y-2 mb-6">
            <h3 class="font-display text-xl font-bold text-slate-900">Send an Admissions Inquiry</h3>
            <p class="text-xs text-slate-500">Fill out this quick form and our admissions advisor will contact you within 24 hours.</p>
          </div>

          <form id="quick-inquiry-form" class="space-y-4">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Parent / Guardian Name *</label>
                <input type="text" required placeholder="e.g. Robert Vance" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs bg-white focus:outline-none focus:ring-2 focus:ring-brand-500">
              </div>
              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Email Address *</label>
                <input type="email" required placeholder="name@example.com" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs bg-white focus:outline-none focus:ring-2 focus:ring-brand-500">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
                <input type="tel" required placeholder="+1 (555) 000-0000" class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs bg-white focus:outline-none focus:ring-2 focus:ring-brand-500">
              </div>
              <div>
                <label class="block text-xs font-bold text-slate-700 mb-1">Applying Grade Level *</label>
                <select required class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs bg-white focus:outline-none focus:ring-2 focus:ring-brand-500">
                  <option value="">Select Grade Level</option>
                  <option>Early Years / Kindergarten (Ages 3–5)</option>
                  <option>Primary School (Grades 1–5)</option>
                  <option>Middle School (Grades 6–8)</option>
                  <option>High School / IB Diploma (Grades 9–12)</option>
                </select>
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-slate-700 mb-1">How can we assist you?</label>
              <textarea rows="3" placeholder="Tell us about your child's interests, previous curriculum, or any questions..." class="w-full px-4 py-2.5 rounded-xl border border-slate-200 text-xs bg-white focus:outline-none focus:ring-2 focus:ring-brand-500"></textarea>
            </div>

            <button type="submit" class="w-full py-3.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold text-xs shadow-md shadow-brand-600/30 transition-all flex items-center justify-center gap-2">
              <span>Submit Inquiry</span>
              <i data-lucide="send" class="w-4 h-4"></i>
            </button>
          </form>
        </div>

      </div>

    </div>
  </section>

  <!-- ========================================== -->
  <!-- 14. FOOTER                                 -->
  <!-- ========================================== -->
  <footer class="bg-slate-950 text-slate-400 text-xs pt-16 pb-12 border-t border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800/80">
        
        <!-- School Info (2 cols) -->
        <div class="lg:col-span-2 space-y-4">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-2xl bg-brand-600 flex items-center justify-center text-white shadow-md">
              <i data-lucide="graduation-cap" class="w-5 h-5 text-amber-300"></i>
            </div>
            <div>
              <span class="font-display font-extrabold text-xl tracking-tight text-white">ia <span class="text-brand-400">Academy</span></span>
              <p class="text-[10px] tracking-wider uppercase font-semibold text-slate-500">Excellence in Global Education</p>
            </div>
          </div>
          <p class="text-xs text-slate-400 max-w-sm leading-relaxed">
            Empowering students to think boldly, act empathetically, and lead globally through world-class Cambridge and International Baccalaureate programs.
          </p>
          <div class="flex items-center gap-3 pt-2">
            <a href="#" class="w-8 h-8 rounded-lg bg-slate-900 hover:bg-brand-600 hover:text-white flex items-center justify-center transition-colors">
              <i data-lucide="facebook" class="w-4 h-4"></i>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-slate-900 hover:bg-brand-600 hover:text-white flex items-center justify-center transition-colors">
              <i data-lucide="instagram" class="w-4 h-4"></i>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-slate-900 hover:bg-brand-600 hover:text-white flex items-center justify-center transition-colors">
              <i data-lucide="linkedin" class="w-4 h-4"></i>
            </a>
            <a href="#" class="w-8 h-8 rounded-lg bg-slate-900 hover:bg-brand-600 hover:text-white flex items-center justify-center transition-colors">
              <i data-lucide="youtube" class="w-4 h-4"></i>
            </a>
          </div>
        </div>

        <!-- Quick Links: Academics -->
        <div class="space-y-3">
          <h4 class="font-display font-bold text-white text-xs uppercase tracking-wider">Academics</h4>
          <ul class="space-y-2">
            <li><a href="#academics" class="hover:text-white transition-colors">Early Childhood (Ages 3–5)</a></li>
            <li><a href="#academics" class="hover:text-white transition-colors">Primary School (Grades 1–5)</a></li>
            <li><a href="#academics" class="hover:text-white transition-colors">Middle School (Grades 6–8)</a></li>
            <li><a href="#academics" class="hover:text-white transition-colors">Cambridge IGCSE</a></li>
            <li><a href="#academics" class="hover:text-white transition-colors">IB Diploma Programme</a></li>
            <li><a href="#academics" class="hover:text-white transition-colors">University Guidance</a></li>
          </ul>
        </div>

        <!-- Quick Links: Admissions -->
        <div class="space-y-3">
          <h4 class="font-display font-bold text-white text-xs uppercase tracking-wider">Admissions</h4>
          <ul class="space-y-2">
            <li><a href="#admissions" class="hover:text-white transition-colors">Admission Criteria</a></li>
            <li><a href="#admissions" class="hover:text-white transition-colors">Tuition & Fee Schedule</a></li>
            <li><a href="#admissions" class="hover:text-white transition-colors">Merit Scholarships</a></li>
            <li><a href="#" onclick="openTourModal()" class="hover:text-white transition-colors">Book a Campus Tour</a></li>
            <li><a href="#admissions" class="hover:text-white transition-colors">Download Prospectus</a></li>
            <li><a href="#contact" class="hover:text-white transition-colors">Admissions FAQs</a></li>
          </ul>
        </div>

        <!-- Portals & Campus Life -->
        <div class="space-y-3">
          <h4 class="font-display font-bold text-white text-xs uppercase tracking-wider">Community Portals</h4>
          <ul class="space-y-2">
            <li><a href="#portal" onclick="openPortalModal('student')" class="hover:text-brand-400 transition-colors flex items-center gap-1.5"><i data-lucide="graduation-cap" class="w-3.5 h-3.5"></i> Student Portal</a></li>
            <li><a href="#portal" onclick="openPortalModal('parent')" class="hover:text-amber-400 transition-colors flex items-center gap-1.5"><i data-lucide="users" class="w-3.5 h-3.5"></i> Parent Portal</a></li>
            <li><a href="#portal" onclick="openPortalModal('faculty')" class="hover:text-emerald-400 transition-colors flex items-center gap-1.5"><i data-lucide="briefcase" class="w-3.5 h-3.5"></i> Faculty & Staff Hub</a></li>
            <li><a href="#facilities" class="hover:text-white transition-colors">Campus Athletics</a></li>
            <li><a href="#facilities" class="hover:text-white transition-colors">Music & Performing Arts</a></li>
            <li><a href="#contact" class="hover:text-white transition-colors">Health & Safeguarding</a></li>
          </ul>
        </div>

      </div>

      <!-- Bottom Legal bar -->
      <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-[11px] text-slate-500">
        <p>© {{ date('Y') }} ia Academy International School. All rights reserved.</p>
        <div class="flex items-center gap-6">
          <a href="#" class="hover:text-slate-300 transition-colors">Privacy Policy</a>
          <a href="#" class="hover:text-slate-300 transition-colors">Safeguarding & Child Protection</a>
          <a href="#" class="hover:text-slate-300 transition-colors">Cookie Policy</a>
          <a href="#" class="hover:text-slate-300 transition-colors">Terms of Enrollment</a>
        </div>
      </div>

    </div>
  </footer>

  <!-- ========================================== -->
  <!-- 15. INTERACTIVE MODALS                     -->
  <!-- ========================================== -->

  <!-- A. SCHEDULE CAMPUS TOUR MODAL -->
  <div id="tour-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-sm hidden opacity-0 transition-opacity duration-200">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-200 space-y-6">
      
      <div class="flex items-center justify-between border-b border-slate-100 pb-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center">
            <i data-lucide="compass" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="font-display text-lg font-bold text-slate-900">Book a Campus Tour</h3>
            <p class="text-xs text-slate-500">Experience ia Academy in action</p>
          </div>
        </div>
        <button onclick="closeTourModal()" class="p-1.5 rounded-lg text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <form id="tour-form" class="space-y-4 text-xs">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Parent Full Name *</label>
            <input type="text" required placeholder="Jane Doe" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Email Address *</label>
            <input type="email" required placeholder="jane@example.com" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Phone Number *</label>
            <input type="tel" required placeholder="+1 555-0100" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Interested Grade *</label>
            <select required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
              <option>Kindergarten (Ages 3–5)</option>
              <option>Primary School (Grades 1–5)</option>
              <option>Middle School (Grades 6–8)</option>
              <option>High School / IB DP (Grades 9–12)</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-bold text-slate-700 mb-1">Preferred Date *</label>
            <input type="date" required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
          </div>
          <div>
            <label class="block font-bold text-slate-700 mb-1">Tour Slot *</label>
            <select required class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
              <option>Morning (09:30 AM – 11:00 AM)</option>
              <option>Afternoon (01:30 PM – 03:00 PM)</option>
              <option>Saturday Special (10:00 AM – 11:30 AM)</option>
            </select>
          </div>
        </div>

        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
          <button type="button" onclick="closeTourModal()" class="px-4 py-2.5 rounded-xl font-bold text-slate-500 hover:bg-slate-100">
            Cancel
          </button>
          <button type="submit" class="px-6 py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold shadow-md shadow-brand-600/30">
            Confirm Campus Tour
          </button>
        </div>
      </form>

    </div>
  </div>

  <!-- B. REQUEST PROSPECTUS MODAL -->
  <div id="inquiry-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-sm hidden opacity-0 transition-opacity duration-200">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 sm:p-8 shadow-2xl transform scale-95 transition-transform duration-200 space-y-6">
      
      <div class="flex items-center justify-between border-b border-slate-100 pb-4">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-amber-100 text-amber-700 flex items-center justify-center">
            <i data-lucide="book-open" class="w-5 h-5"></i>
          </div>
          <div>
            <h3 class="font-display text-lg font-bold text-slate-900">Download 2026 Prospectus</h3>
            <p class="text-xs text-slate-500">Instant Digital Brochure & Fee Guide</p>
          </div>
        </div>
        <button onclick="closeInquiryModal()" class="p-1.5 rounded-lg text-slate-400 hover:text-slate-700 hover:bg-slate-100 transition-colors">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <form id="prospectus-form" class="space-y-4 text-xs">
        <div>
          <label class="block font-bold text-slate-700 mb-1">Your Full Name *</label>
          <input type="text" required placeholder="Parent or Student Name" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
        </div>
        <div>
          <label class="block font-bold text-slate-700 mb-1">Email Address *</label>
          <input type="email" required placeholder="Where should we send the PDF?" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
        </div>
        <div>
          <label class="block font-bold text-slate-700 mb-1">Academic Year</label>
          <select class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
            <option>2026 / 2027 Academic Year (Immediate)</option>
            <option>2027 / 2028 Future Enrolment</option>
          </select>
        </div>

        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
          <button type="button" onclick="closeInquiryModal()" class="px-4 py-2.5 rounded-xl font-bold text-slate-500 hover:bg-slate-100">
            Cancel
          </button>
          <button type="submit" class="px-6 py-2.5 rounded-xl bg-amber-500 hover:bg-amber-600 text-white font-bold shadow-md shadow-amber-500/30">
            Send Prospectus Now
          </button>
        </div>
      </form>

    </div>
  </div>

  <!-- C. VIDEO TOUR MODAL -->
  <div id="video-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/85 backdrop-blur-md hidden opacity-0 transition-opacity duration-200">
    <div class="bg-slate-900 rounded-3xl max-w-3xl w-full p-4 shadow-2xl transform scale-95 transition-transform duration-200 space-y-4 border border-slate-800">
      <div class="flex items-center justify-between px-2 pt-2">
        <div class="flex items-center gap-2 text-white font-bold text-sm">
          <i data-lucide="video" class="w-4 h-4 text-amber-400"></i>
          <span>ia Academy Campus Life Showcase</span>
        </div>
        <button onclick="closeVideoModal()" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-slate-800">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <!-- Video Container Frame -->
      <div class="relative aspect-video rounded-2xl overflow-hidden bg-black flex items-center justify-center">
        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&q=80&w=1200" alt="Video preview thumbnail" class="w-full h-full object-cover opacity-60">
        <div class="absolute inset-0 flex flex-col items-center justify-center gap-4 text-center px-4">
          <div class="w-16 h-16 rounded-full bg-brand-600/90 text-white flex items-center justify-center shadow-2xl cursor-pointer hover:scale-110 transition-transform">
            <i data-lucide="play" class="w-8 h-8 fill-white ml-1"></i>
          </div>
          <div>
            <h4 class="text-white font-bold text-base">Watch: A Day in the Life at ia Academy</h4>
            <p class="text-xs text-slate-300 mt-1">Explore our classrooms, science parks, sports arenas, and boarding suites.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- D. PORTAL QUICK ACCESS MODAL -->
  <div id="portal-modal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/70 backdrop-blur-sm hidden opacity-0 transition-opacity duration-200">
    <div class="bg-white rounded-3xl max-w-sm w-full p-6 shadow-2xl transform scale-95 transition-transform duration-200 space-y-5">
      <div class="flex items-center justify-between border-b border-slate-100 pb-3">
        <div class="flex items-center gap-2">
          <div class="w-9 h-9 rounded-xl bg-brand-100 text-brand-600 flex items-center justify-center">
            <i data-lucide="lock" class="w-4 h-4"></i>
          </div>
          <div>
            <h3 class="font-display text-base font-bold text-slate-900" id="portal-modal-title">Student Portal Login</h3>
            <p class="text-[11px] text-slate-500">Enter your school credentials</p>
          </div>
        </div>
        <button onclick="closePortalModal()" class="text-slate-400 hover:text-slate-700 p-1 rounded-lg hover:bg-slate-100">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <form id="portal-login-form" class="space-y-3.5 text-xs">
        <div>
          <label class="block font-bold text-slate-700 mb-1">Student / Parent ID or Email</label>
          <input type="text" required placeholder="e.g. 2026-STU-8821" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
        </div>
        <div>
          <label class="block font-bold text-slate-700 mb-1">Password</label>
          <input type="password" required placeholder="••••••••" class="w-full px-3.5 py-2.5 rounded-xl border border-slate-200 focus:outline-none focus:ring-2 focus:ring-brand-500">
        </div>
        <div class="flex items-center justify-between text-[11px]">
          <label class="flex items-center gap-1.5 text-slate-600 cursor-pointer">
            <input type="checkbox" class="rounded text-brand-600">
            <span>Remember me</span>
          </label>
          <a href="#" class="text-brand-600 hover:underline">Forgot password?</a>
        </div>
        <button type="submit" class="w-full py-2.5 rounded-xl bg-brand-600 hover:bg-brand-700 text-white font-bold transition-colors shadow-md shadow-brand-600/30">
          Sign In to Portal
        </button>
      </form>
    </div>
  </div>

  <!-- ========================================== -->
  <!-- 16. TOAST NOTIFICATIONS CONTAINER          -->
  <!-- ========================================== -->
  <div id="toast-container" class="fixed bottom-5 right-5 z-50 flex flex-col gap-2 pointer-events-none"></div>

  <!-- Back to top button -->
  <button id="back-to-top" onclick="window.scrollTo({top:0, behavior:'smooth'})" class="fixed bottom-6 left-6 z-30 p-3 rounded-full bg-slate-900/90 text-white shadow-xl hover:bg-brand-600 transition-all opacity-0 pointer-events-none translate-y-3 duration-300" aria-label="Back to top">
    <i data-lucide="arrow-up" class="w-5 h-5"></i>
  </button>

  <!-- ========================================== -->
  <!-- 17. SCRIPT INTERACTIONS                    -->
  <!-- ========================================== -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // 1. Initialize Lucide icons
      lucide.createIcons();

      // 2. Mobile Menu Toggle
      const mobileToggleBtn = document.getElementById('mobile-toggle-btn');
      const mobileMenu = document.getElementById('mobile-menu');

      mobileToggleBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
      });

      // 3. Portal Dropdown Toggle
      const portalBtn = document.getElementById('portal-dropdown-btn');
      const portalMenu = document.getElementById('portal-menu');
      if (portalBtn && portalMenu) {
        portalBtn.addEventListener('click', (e) => {
          e.stopPropagation();
          portalMenu.classList.toggle('hidden');
        });
        document.addEventListener('click', () => {
          portalMenu.classList.add('hidden');
        });
      }

      // 4. Back to top visibility listener
      const backToTopBtn = document.getElementById('back-to-top');
      window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
          backToTopBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-3');
          backToTopBtn.classList.add('opacity-100', 'translate-y-0');
        } else {
          backToTopBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-3');
          backToTopBtn.classList.remove('opacity-100', 'translate-y-0');
        }
      });

      // 5. Form Submission Interceptions
      const quickForm = document.getElementById('quick-inquiry-form');
      if (quickForm) {
        quickForm.addEventListener('submit', (e) => {
          e.preventDefault();
          showToast('Thank you! Your inquiry has been received. Our admissions team will contact you shortly.', 'success');
          quickForm.reset();
        });
      }

      const tourForm = document.getElementById('tour-form');
      if (tourForm) {
        tourForm.addEventListener('submit', (e) => {
          e.preventDefault();
          closeTourModal();
          showToast('Campus Tour booked successfully! Check your inbox for confirmation details.', 'success');
          tourForm.reset();
        });
      }

      const prospectusForm = document.getElementById('prospectus-form');
      if (prospectusForm) {
        prospectusForm.addEventListener('submit', (e) => {
          e.preventDefault();
          closeInquiryModal();
          showToast('2026/27 School Prospectus sent to your email address!', 'success');
          prospectusForm.reset();
        });
      }

      const portalForm = document.getElementById('portal-login-form');
      if (portalForm) {
        portalForm.addEventListener('submit', (e) => {
          e.preventDefault();
          closePortalModal();
          showToast('Redirecting to your secure portal dashboard...', 'success');
          portalForm.reset();
        });
      }
    });

    // Mobile menu helper
    function toggleMobileMenu() {
      const menu = document.getElementById('mobile-menu');
      if (menu) menu.classList.add('hidden');
    }

    // Program Tabs Switcher
    function switchProgramTab(tabKey) {
      const tabs = ['early', 'primary', 'middle', 'high'];
      tabs.forEach(key => {
        const btn = document.getElementById(`tab-btn-${key}`);
        const content = document.getElementById(`tab-content-${key}`);
        if (key === tabKey) {
          btn.classList.add('active');
          content.classList.remove('hidden');
        } else {
          btn.classList.remove('active');
          content.classList.add('hidden');
        }
      });
      lucide.createIcons();
    }

    // Facilities Filter
    function filterFacilities(category) {
      const pills = document.querySelectorAll('.facility-pill');
      pills.forEach(p => p.classList.remove('active'));
      event.currentTarget.classList.add('active');

      const cards = document.querySelectorAll('.facility-card');
      cards.forEach(card => {
        if (category === 'all' || card.classList.contains(category)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    // FAQ Accordion
    function toggleFaq(id) {
      const body = document.getElementById(`faq-body-${id}`);
      const icon = document.getElementById(`faq-icon-${id}`);
      const isHidden = body.classList.contains('hidden');

      // Close all others
      for (let i = 1; i <= 4; i++) {
        const otherBody = document.getElementById(`faq-body-${i}`);
        const otherIcon = document.getElementById(`faq-icon-${i}`);
        if (otherBody && otherIcon) {
          otherBody.classList.add('hidden');
          otherIcon.classList.remove('rotate-180');
        }
      }

      if (isHidden) {
        body.classList.remove('hidden');
        icon.classList.add('rotate-180');
      }
    }

    // Modal Generic Controls
    function openModalElement(modalId) {
      const modal = document.getElementById(modalId);
      if (!modal) return;
      modal.classList.remove('hidden');
      setTimeout(() => {
        modal.classList.remove('opacity-0');
        modal.firstElementChild.classList.remove('scale-95');
      }, 10);
    }

    function closeModalElement(modalId) {
      const modal = document.getElementById(modalId);
      if (!modal) return;
      modal.classList.add('opacity-0');
      modal.firstElementChild.classList.add('scale-95');
      setTimeout(() => {
        modal.classList.add('hidden');
      }, 200);
    }

    function openTourModal() { openModalElement('tour-modal'); }
    function closeTourModal() { closeModalElement('tour-modal'); }

    function openInquiryModal() { openModalElement('inquiry-modal'); }
    function closeInquiryModal() { closeModalElement('inquiry-modal'); }

    function openVideoModal() { openModalElement('video-modal'); }
    function closeVideoModal() { closeModalElement('video-modal'); }

    function openPortalModal(type = 'student') {
      const title = document.getElementById('portal-modal-title');
      if (title) {
        if (type === 'parent') title.textContent = 'Parent Portal Login';
        else if (type === 'faculty') title.textContent = 'Faculty & Staff Portal';
        else title.textContent = 'Student Portal Login';
      }
      openModalElement('portal-modal');
    }
    function closePortalModal() { closeModalElement('portal-modal'); }

    function rsvpEvent(eventName) {
      showToast(`Reserved guest pass for "${eventName}". We look forward to seeing you!`, 'success');
    }

    // Toast Notification Display Helper
    function showToast(message, type = 'success') {
      const container = document.getElementById('toast-container');
      const toast = document.createElement('div');
      toast.className = `pointer-events-auto flex items-center gap-3 px-5 py-3.5 rounded-2xl shadow-2xl text-xs font-bold text-white transition-all transform translate-y-2 ${
        type === 'success' ? 'bg-slate-900 border border-slate-700' : 'bg-rose-600'
      }`;

      toast.innerHTML = `
        <div class="w-6 h-6 rounded-lg ${type === 'success' ? 'bg-brand-500/20 text-brand-400' : 'bg-white/20 text-white'} flex items-center justify-center shrink-0">
          <i data-lucide="${type === 'success' ? 'check' : 'alert-circle'}" class="w-4 h-4"></i>
        </div>
        <span class="leading-snug">${message}</span>
      `;

      container.appendChild(toast);
      lucide.createIcons();

      setTimeout(() => {
        toast.classList.remove('translate-y-2');
      }, 10);

      setTimeout(() => {
        toast.classList.add('opacity-0', 'translate-y-2');
        setTimeout(() => toast.remove(), 250);
      }, 4000);
    }
  </script>
</body>
</html>