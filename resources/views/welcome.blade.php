<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ia Academy - Student Management Dashboard</title>
  
  <!-- Google Fonts: Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  
  <!-- Lucide Icons CDN -->
  <script src="https://unpkg.com/lucide@latest"></script>
  
  <!-- Custom Tailwind Theme Configuration -->
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brand: {
              50: '#F8F5FC',
              100: '#F3E8FF',
              200: '#DDD6FE',
              300: '#C4B5FD',
              400: '#A78BFA',
              500: '#8B5CF6',
              primary: '#6D28D9',
              dark: '#5B21B6',
              deep: '#4C1D95',
            },
            bodyBg: '#F8F5FC',
            mainText: '#171717',
            secondaryText: '#737373',
            customBorder: '#E5E7EB',
          },
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          boxShadow: {
            card: '0 2px 10px rgba(109, 40, 217, 0.04), 0 1px 3px rgba(0, 0, 0, 0.02)',
            dropdown: '0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.05)',
          }
        }
      }
    }
  </script>

  <style>
    /* Custom Scrollbar Styling */
    ::-webkit-scrollbar {
      width: 6px;
      height: 6px;
    }
    ::-webkit-scrollbar-track {
      background: #F8F5FC;
    }
    ::-webkit-scrollbar-thumb {
      background: #DDD6FE;
      border-radius: 9999px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #A78BFA;
    }
    .custom-checkbox:checked {
      background-color: #6D28D9;
      border-color: #6D28D9;
    }
  </style>
</head>
<body class="bg-bodyBg text-mainText font-sans antialiased min-h-screen flex flex-col overflow-x-hidden">

  <div class="flex h-screen overflow-hidden relative">

    <!-- MOBILE SIDEBAR OVERLAY -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-gray-900/50 z-40 lg:hidden hidden transition-opacity duration-300"></div>

    <!-- 1. SIDEBAR -->
    <aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-50 w-64 bg-white border-r border-customBorder flex flex-col justify-between transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out h-full select-none shrink-0">
      
      <!-- Sidebar Header / Logo -->
      <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
        <a href="#" class="flex items-center gap-3 group">
          <div class="w-10 h-10 rounded-xl bg-brand-primary flex items-center justify-center text-white shadow-md shadow-brand-primary/20 group-hover:bg-brand-dark transition-colors">
            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
          </div>
          <span class="text-xl font-bold tracking-tight text-mainText">ia <span class="text-brand-primary">Academy</span></span>
        </a>
        <button id="close-sidebar-btn" class="lg:hidden p-1.5 rounded-lg text-secondaryText hover:bg-gray-100">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <!-- Sidebar Scrollable Navigation -->
      <div class="overflow-y-auto flex-1 px-4 py-4 space-y-1">
        
        <!-- Home -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="home" class="w-5 h-5 text-secondaryText group-hover:text-brand-primary"></i>
          <span>Home</span>
        </a>

        <!-- Students Accordion (Expanded) -->
        <div class="space-y-1">
          <button id="students-menu-btn" class="w-full flex items-center justify-between px-3.5 py-2.5 rounded-xl text-sm font-medium text-brand-primary bg-brand-50 transition-all duration-150">
            <div class="flex items-center gap-3">
              <i data-lucide="users" class="w-5 h-5 text-brand-primary"></i>
              <span>Students</span>
            </div>
            <i data-lucide="chevron-down" class="w-4 h-4 text-brand-primary transform rotate-180 transition-transform duration-200" id="students-arrow"></i>
          </button>
          
          <!-- Submenu -->
          <div id="students-submenu" class="pl-4 space-y-1">
            <!-- Active Menu Item: All Students -->
            <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-semibold bg-brand-100 text-brand-primary border-l-4 border-brand-primary shadow-sm transition-all duration-150">
              <i data-lucide="circle-dot" class="w-2 h-2 text-brand-primary fill-brand-primary"></i>
              <span>All Students</span>
            </a>
            <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
              <i data-lucide="user-check" class="w-4 h-4"></i>
              <span>Student Details</span>
            </a>
          </div>
        </div>

        <!-- Teachers -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="user-square-2" class="w-5 h-5"></i>
          <span>Teachers</span>
        </a>

        <!-- Library -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="book-open" class="w-5 h-5"></i>
          <span>Library</span>
        </a>

        <!-- Account -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="wallet" class="w-5 h-5"></i>
          <span>Account</span>
        </a>

        <!-- Class -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="layout-grid" class="w-5 h-5"></i>
          <span>Class</span>
        </a>

        <!-- Subject -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="book" class="w-5 h-5"></i>
          <span>Subject</span>
        </a>

        <!-- Routine -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="calendar-clock" class="w-5 h-5"></i>
          <span>Routine</span>
        </a>

        <!-- Attendance -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="clipboard-check" class="w-5 h-5"></i>
          <span>Attendance</span>
        </a>

        <!-- Exam -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="file-text" class="w-5 h-5"></i>
          <span>Exam</span>
        </a>

        <!-- Notice -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="bell-ring" class="w-5 h-5"></i>
          <span>Notice</span>
        </a>

        <!-- Transport -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="bus" class="w-5 h-5"></i>
          <span>Transport</span>
        </a>

        <!-- Hostel -->
        <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-sm font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 transition-all duration-150">
          <i data-lucide="building-2" class="w-5 h-5"></i>
          <span>Hostel</span>
        </a>

      </div>

      <!-- Sidebar Footer User Quick Link -->
      <div class="p-4 border-t border-gray-100 bg-gray-50/50">
        <div class="flex items-center gap-3">
          <div class="w-8 h-8 rounded-full bg-brand-100 text-brand-primary flex items-center justify-center font-bold text-xs">
            IA
          </div>
          <div class="overflow-hidden">
            <p class="text-xs font-semibold text-mainText truncate">Academic Term 2026</p>
            <p class="text-[11px] text-secondaryText truncate">Spring Semester</p>
          </div>
        </div>
      </div>
    </aside>

    <!-- MAIN CONTENT AREA -->
    <div class="flex-1 flex flex-col min-w-0 overflow-y-auto">
      
      <!-- 2. TOP NAVBAR -->
      <header class="bg-white border-b border-customBorder sticky top-0 z-30 px-4 lg:px-8 py-3.5 flex items-center justify-between gap-4">
        
        <!-- Left: Mobile Toggle & Search Input -->
        <div class="flex items-center gap-3 flex-1 max-w-md">
          <button id="open-sidebar-btn" class="lg:hidden p-2 rounded-xl border border-gray-200 text-secondaryText hover:bg-gray-50 focus:outline-none">
            <i data-lucide="menu" class="w-5 h-5"></i>
          </button>
          
          <div class="relative w-full">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none text-secondaryText">
              <i data-lucide="search" class="w-4 h-4"></i>
            </span>
            <input type="text" placeholder="What do you want to find?" class="w-full pl-10 pr-4 py-2 bg-gray-50/70 border border-gray-200 rounded-xl text-sm text-mainText placeholder-secondaryText focus:outline-none focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary transition-all">
          </div>
        </div>

        <!-- Right Header Items -->
        <div class="flex items-center gap-2 lg:gap-4">
          
          <!-- Messages Icon Button -->
          <button class="relative p-2.5 rounded-xl text-secondaryText hover:bg-brand-50 hover:text-brand-primary transition-colors focus:outline-none">
            <i data-lucide="message-square" class="w-5 h-5"></i>
            <span class="absolute top-2 right-2 w-2 h-2 bg-emerald-500 rounded-full ring-2 ring-white"></span>
          </button>

          <!-- Notification Bell Icon Button -->
          <button class="relative p-2.5 rounded-xl text-secondaryText hover:bg-brand-50 hover:text-brand-primary transition-colors focus:outline-none">
            <i data-lucide="bell" class="w-5 h-5"></i>
            <span class="absolute top-2 right-2 w-2 h-2 bg-brand-primary rounded-full ring-2 ring-white"></span>
          </button>

          <div class="h-6 w-px bg-gray-200 mx-1 hidden sm:block"></div>

          <!-- Admin Profile Section -->
          <div class="relative" id="profile-dropdown-container">
            <button id="profile-menu-btn" class="flex items-center gap-3 p-1 rounded-xl hover:bg-gray-50 transition-colors focus:outline-none">
              <div class="relative">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=120" alt="Priscilla Lily" class="w-9 h-9 rounded-full object-cover ring-2 ring-brand-100">
                <span class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-emerald-500 rounded-full ring-2 ring-white"></span>
              </div>
              <div class="text-left hidden md:block">
                <h4 class="text-sm font-semibold text-mainText leading-tight">Priscilla Lily</h4>
                <p class="text-[11px] font-medium text-secondaryText">Admin</p>
              </div>
              <i data-lucide="chevron-down" class="w-4 h-4 text-secondaryText hidden sm:block"></i>
            </button>

            <!-- Profile Dropdown Menu -->
            <div id="profile-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-2xl shadow-dropdown border border-gray-100 py-1.5 z-50">
              <a href="#" class="flex items-center gap-2.5 px-4 py-2 text-xs font-medium text-mainText hover:bg-brand-50 hover:text-brand-primary">
                <i data-lucide="user" class="w-4 h-4"></i> Profile Settings
              </a>
              <a href="#" class="flex items-center gap-2.5 px-4 py-2 text-xs font-medium text-mainText hover:bg-brand-50 hover:text-brand-primary">
                <i data-lucide="sliders" class="w-4 h-4"></i> Preferences
              </a>
              <div class="my-1 border-t border-gray-100"></div>
              <a href="#" class="flex items-center gap-2.5 px-4 py-2 text-xs font-medium text-rose-600 hover:bg-rose-50">
                <i data-lucide="log-out" class="w-4 h-4"></i> Log Out
              </a>
            </div>
          </div>

        </div>
      </header>

      <!-- 3. PAGE CONTENT CONTAINER -->
      <main class="p-4 lg:p-8 flex-1 space-y-6">
        
        <!-- Header & Breadcrumbs Bar -->
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
          <div>
            <h1 class="text-2xl font-bold text-mainText tracking-tight">Students List</h1>
            <nav class="flex items-center gap-2 text-xs font-medium mt-1">
              <a href="#" class="text-secondaryText hover:text-brand-primary transition-colors">Home</a>
              <span class="text-gray-300">/</span>
              <span class="text-mainText font-semibold">Students</span>
            </nav>
          </div>

          <!-- Add Students Button -->
          <div>
            <button id="open-add-modal-btn" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-brand-primary hover:bg-brand-dark text-white font-medium text-sm rounded-xl shadow-md shadow-brand-primary/25 hover:shadow-lg hover:shadow-brand-primary/30 active:scale-[0.98] transition-all duration-150">
              <i data-lucide="plus" class="w-4 h-4"></i>
              <span>Add Students</span>
            </button>
          </div>
        </div>

        <!-- 4. STUDENTS INFORMATION CARD -->
        <div class="bg-white rounded-2xl border border-customBorder shadow-card p-4 sm:p-6 space-y-6">
          
          <!-- Card Header & Filters -->
          <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-2">
            <div>
              <h2 class="text-lg font-bold text-mainText">Students Information</h2>
              <p class="text-xs text-secondaryText mt-0.5">Manage and view all registered school students</p>
            </div>

            <!-- Search and Date Filters -->
            <div class="flex flex-col sm:flex-row items-center gap-3">
              
              <!-- Search by Name or Roll -->
              <div class="relative w-full sm:w-64">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-secondaryText">
                  <i data-lucide="search" class="w-4 h-4"></i>
                </span>
                <input id="table-search-input" type="text" placeholder="Search by name or roll" class="w-full pl-9 pr-3 py-2 text-xs bg-white border border-gray-200 rounded-xl text-mainText placeholder-secondaryText focus:outline-none focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary transition-all">
              </div>

              <!-- Date Filter Dropdown -->
              <div class="relative w-full sm:w-auto">
                <button id="date-filter-btn" class="w-full sm:w-auto inline-flex items-center justify-between gap-2.5 px-3.5 py-2 text-xs font-medium bg-white border border-gray-200 rounded-xl text-mainText hover:bg-gray-50 focus:outline-none focus:border-brand-primary transition-all">
                  <div class="flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4 text-brand-primary"></i>
                    <span>Last 30 days</span>
                  </div>
                  <i data-lucide="chevron-down" class="w-3.5 h-3.5 text-secondaryText"></i>
                </button>

                <!-- Date Filter Dropdown Menu -->
                <div id="date-filter-dropdown" class="hidden absolute right-0 mt-2 w-44 bg-white rounded-xl shadow-dropdown border border-gray-100 py-1.5 z-20 text-xs">
                  <button class="w-full text-left px-3.5 py-2 font-medium text-brand-primary bg-brand-50">Last 30 days</button>
                  <button class="w-full text-left px-3.5 py-2 font-medium text-mainText hover:bg-gray-50">Last 7 days</button>
                  <button class="w-full text-left px-3.5 py-2 font-medium text-mainText hover:bg-gray-50">This Semester</button>
                  <button class="w-full text-left px-3.5 py-2 font-medium text-mainText hover:bg-gray-50">All Academic Year</button>
                </div>
              </div>

            </div>
          </div>

          <!-- 5. STUDENT TABLE -->
          <div class="overflow-x-auto rounded-xl border border-gray-100">
            <table class="w-full text-left border-collapse min-w-[760px]" id="students-table">
              
              <!-- Table Header -->
              <thead>
                <tr class="bg-brand-100/60 text-secondaryText text-[11px] uppercase tracking-wider font-semibold border-b border-gray-100">
                  <th class="py-3.5 px-4 w-12 text-center">
                    <input type="checkbox" id="select-all-checkbox" class="w-4 h-4 text-brand-primary bg-gray-100 border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </th>
                  <th class="py-3.5 px-4">Student Name</th>
                  <th class="py-3.5 px-4">Roll</th>
                  <th class="py-3.5 px-4">Address</th>
                  <th class="py-3.5 px-4">Class</th>
                  <th class="py-3.5 px-4">Date of Birth</th>
                  <th class="py-3.5 px-4">Phone</th>
                  <th class="py-3.5 px-4 text-center">Action</th>
                </tr>
              </thead>

              <!-- Table Body -->
              <tbody class="divide-y divide-gray-100 text-xs font-normal text-mainText">
                
                <!-- Row 1: Eleanor Pena -->
                <tr class="hover:bg-brand-50/50 transition-colors group">
                  <td class="py-3.5 px-4 text-center">
                    <input type="checkbox" class="row-checkbox w-4 h-4 text-brand-primary border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </td>
                  <td class="py-3.5 px-4 font-medium">
                    <div class="flex items-center gap-3">
                      <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=100" alt="Eleanor Pena" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-200">
                      <span class="text-mainText font-semibold group-hover:text-brand-primary transition-colors">Eleanor Pena</span>
                    </div>
                  </td>
                  <td class="py-3.5 px-4 font-medium text-secondaryText">#01</td>
                  <td class="py-3.5 px-4 text-secondaryText">TA-107 Newyork</td>
                  <td class="py-3.5 px-4 font-semibold text-mainText">01</td>
                  <td class="py-3.5 px-4 text-secondaryText">02/05/2001</td>
                  <td class="py-3.5 px-4 font-medium text-mainText">+123 6988567</td>
                  <td class="py-3.5 px-4">
                    <div class="flex items-center justify-center gap-2">
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-brand-primary hover:bg-brand-100 transition-colors" title="Edit Student">
                        <i data-lucide="square-pen" class="w-4 h-4"></i>
                      </button>
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete Student">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                      </button>
                    </div>
                  </td>
                </tr>

                <!-- Row 2: Jessia Rose (SELECTED) -->
                <tr class="bg-brand-100/40 hover:bg-brand-100/60 transition-colors group">
                  <td class="py-3.5 px-4 text-center">
                    <input type="checkbox" checked class="row-checkbox w-4 h-4 text-brand-primary border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </td>
                  <td class="py-3.5 px-4 font-medium">
                    <div class="flex items-center gap-3">
                      <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&q=80&w=100" alt="Jessia Rose" class="w-8 h-8 rounded-full object-cover ring-1 ring-brand-300">
                      <span class="text-brand-primary font-bold">Jessia Rose</span>
                    </div>
                  </td>
                  <td class="py-3.5 px-4 font-medium text-secondaryText">#10</td>
                  <td class="py-3.5 px-4 text-secondaryText">TA-107 Newyork</td>
                  <td class="py-3.5 px-4 font-semibold text-mainText">02</td>
                  <td class="py-3.5 px-4 text-secondaryText">03/04/2000</td>
                  <td class="py-3.5 px-4 font-medium text-mainText">+123 8988569</td>
                  <td class="py-3.5 px-4">
                    <div class="flex items-center justify-center gap-2">
                      <button class="p-1.5 rounded-lg text-brand-primary bg-brand-100 hover:bg-brand-200 transition-colors" title="Edit Student">
                        <i data-lucide="square-pen" class="w-4 h-4"></i>
                      </button>
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete Student">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                      </button>
                    </div>
                  </td>
                </tr>

                <!-- Row 3: Jenny Wilson -->
                <tr class="hover:bg-brand-50/50 transition-colors group">
                  <td class="py-3.5 px-4 text-center">
                    <input type="checkbox" class="row-checkbox w-4 h-4 text-brand-primary border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </td>
                  <td class="py-3.5 px-4 font-medium">
                    <div class="flex items-center gap-3">
                      <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=100" alt="Jenny Wilson" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-200">
                      <span class="text-mainText font-semibold group-hover:text-brand-primary transition-colors">Jenny Wilson</span>
                    </div>
                  </td>
                  <td class="py-3.5 px-4 font-medium text-secondaryText">#04</td>
                  <td class="py-3.5 px-4 text-secondaryText">Australia, Sydney</td>
                  <td class="py-3.5 px-4 font-semibold text-mainText">01</td>
                  <td class="py-3.5 px-4 text-secondaryText">12/05/2001</td>
                  <td class="py-3.5 px-4 font-medium text-mainText">+123 7988566</td>
                  <td class="py-3.5 px-4">
                    <div class="flex items-center justify-center gap-2">
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-brand-primary hover:bg-brand-100 transition-colors" title="Edit Student">
                        <i data-lucide="square-pen" class="w-4 h-4"></i>
                      </button>
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete Student">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                      </button>
                    </div>
                  </td>
                </tr>

                <!-- Row 4: Guy Hawkins -->
                <tr class="hover:bg-brand-50/50 transition-colors group">
                  <td class="py-3.5 px-4 text-center">
                    <input type="checkbox" class="row-checkbox w-4 h-4 text-brand-primary border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </td>
                  <td class="py-3.5 px-4 font-medium">
                    <div class="flex items-center gap-3">
                      <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=100" alt="Guy Hawkins" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-200">
                      <span class="text-mainText font-semibold group-hover:text-brand-primary transition-colors">Guy Hawkins</span>
                    </div>
                  </td>
                  <td class="py-3.5 px-4 font-medium text-secondaryText">#03</td>
                  <td class="py-3.5 px-4 text-secondaryText">Australia, Sydney</td>
                  <td class="py-3.5 px-4 font-semibold text-mainText">02</td>
                  <td class="py-3.5 px-4 text-secondaryText">03/05/2001</td>
                  <td class="py-3.5 px-4 font-medium text-mainText">+123 5988565</td>
                  <td class="py-3.5 px-4">
                    <div class="flex items-center justify-center gap-2">
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-brand-primary hover:bg-brand-100 transition-colors" title="Edit Student">
                        <i data-lucide="square-pen" class="w-4 h-4"></i>
                      </button>
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete Student">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                      </button>
                    </div>
                  </td>
                </tr>

                <!-- Row 5: Jacob Jones -->
                <tr class="hover:bg-brand-50/50 transition-colors group">
                  <td class="py-3.5 px-4 text-center">
                    <input type="checkbox" class="row-checkbox w-4 h-4 text-brand-primary border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </td>
                  <td class="py-3.5 px-4 font-medium">
                    <div class="flex items-center gap-3">
                      <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=100" alt="Jacob Jones" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-200">
                      <span class="text-mainText font-semibold group-hover:text-brand-primary transition-colors">Jacob Jones</span>
                    </div>
                  </td>
                  <td class="py-3.5 px-4 font-medium text-secondaryText">#15</td>
                  <td class="py-3.5 px-4 text-secondaryText">Australia, Sydney</td>
                  <td class="py-3.5 px-4 font-semibold text-mainText">04</td>
                  <td class="py-3.5 px-4 text-secondaryText">12/05/2001</td>
                  <td class="py-3.5 px-4 font-medium text-mainText">+123 9988568</td>
                  <td class="py-3.5 px-4">
                    <div class="flex items-center justify-center gap-2">
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-brand-primary hover:bg-brand-100 transition-colors" title="Edit Student">
                        <i data-lucide="square-pen" class="w-4 h-4"></i>
                      </button>
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete Student">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                      </button>
                    </div>
                  </td>
                </tr>

                <!-- Row 6: Jane Cooper -->
                <tr class="hover:bg-brand-50/50 transition-colors group">
                  <td class="py-3.5 px-4 text-center">
                    <input type="checkbox" class="row-checkbox w-4 h-4 text-brand-primary border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </td>
                  <td class="py-3.5 px-4 font-medium">
                    <div class="flex items-center gap-3">
                      <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=100" alt="Jane Cooper" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-200">
                      <span class="text-mainText font-semibold group-hover:text-brand-primary transition-colors">Jane Cooper</span>
                    </div>
                  </td>
                  <td class="py-3.5 px-4 font-medium text-secondaryText">#01</td>
                  <td class="py-3.5 px-4 text-secondaryText">Australia, Sydney</td>
                  <td class="py-3.5 px-4 font-semibold text-mainText">04</td>
                  <td class="py-3.5 px-4 text-secondaryText">12/03/2001</td>
                  <td class="py-3.5 px-4 font-medium text-mainText">+123 6988566</td>
                  <td class="py-3.5 px-4">
                    <div class="flex items-center justify-center gap-2">
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-brand-primary hover:bg-brand-100 transition-colors" title="Edit Student">
                        <i data-lucide="square-pen" class="w-4 h-4"></i>
                      </button>
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete Student">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                      </button>
                    </div>
                  </td>
                </tr>

                <!-- Row 7: Floyd Miles -->
                <tr class="hover:bg-brand-50/50 transition-colors group">
                  <td class="py-3.5 px-4 text-center">
                    <input type="checkbox" class="row-checkbox w-4 h-4 text-brand-primary border-gray-300 rounded focus:ring-brand-primary/20 accent-brand-primary cursor-pointer">
                  </td>
                  <td class="py-3.5 px-4 font-medium">
                    <div class="flex items-center gap-3">
                      <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=100" alt="Floyd Miles" class="w-8 h-8 rounded-full object-cover ring-1 ring-gray-200">
                      <span class="text-mainText font-semibold group-hover:text-brand-primary transition-colors">Floyd Miles</span>
                    </div>
                  </td>
                  <td class="py-3.5 px-4 font-medium text-secondaryText">#11</td>
                  <td class="py-3.5 px-4 text-secondaryText">TA-107 Newyork</td>
                  <td class="py-3.5 px-4 font-semibold text-mainText">01</td>
                  <td class="py-3.5 px-4 text-secondaryText">03/05/2002</td>
                  <td class="py-3.5 px-4 font-medium text-mainText">+123 5988569</td>
                  <td class="py-3.5 px-4">
                    <div class="flex items-center justify-center gap-2">
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-brand-primary hover:bg-brand-100 transition-colors" title="Edit Student">
                        <i data-lucide="square-pen" class="w-4 h-4"></i>
                      </button>
                      <button class="p-1.5 rounded-lg text-secondaryText hover:text-rose-600 hover:bg-rose-50 transition-colors" title="Delete Student">
                        <i data-lucide="trash-2" class="w-4 h-4"></i>
                      </button>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>

          <!-- 8. PAGINATION -->
          <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-2">
            
            <!-- Left: Page Buttons -->
            <div class="flex items-center gap-1.5">
              <button class="px-3 py-1.5 text-xs font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 rounded-lg border border-gray-200 transition-all flex items-center gap-1">
                <i data-lucide="chevron-left" class="w-3.5 h-3.5"></i>
                <span>Previous</span>
              </button>
              
              <!-- Active Page 1 -->
              <button class="w-8 h-8 flex items-center justify-center text-xs font-semibold bg-brand-primary text-white rounded-lg shadow-sm">1</button>
              <button class="w-8 h-8 flex items-center justify-center text-xs font-medium text-mainText hover:bg-brand-50 hover:text-brand-primary rounded-lg transition-colors">2</button>
              <button class="w-8 h-8 flex items-center justify-center text-xs font-medium text-mainText hover:bg-brand-50 hover:text-brand-primary rounded-lg transition-colors">3</button>
              <button class="w-8 h-8 flex items-center justify-center text-xs font-medium text-mainText hover:bg-brand-50 hover:text-brand-primary rounded-lg transition-colors">4</button>
              <button class="w-8 h-8 flex items-center justify-center text-xs font-medium text-mainText hover:bg-brand-50 hover:text-brand-primary rounded-lg transition-colors">5</button>
              <span class="px-1 text-xs text-secondaryText">...</span>
              <button class="w-8 h-8 flex items-center justify-center text-xs font-medium text-mainText hover:bg-brand-50 hover:text-brand-primary rounded-lg transition-colors">100</button>
              
              <button class="px-3 py-1.5 text-xs font-medium text-secondaryText hover:text-brand-primary hover:bg-brand-50 rounded-lg border border-gray-200 transition-all flex items-center gap-1">
                <span>Next</span>
                <i data-lucide="chevron-right" class="w-3.5 h-3.5"></i>
              </button>
            </div>

            <!-- Right: Items per page Selector -->
            <div class="flex items-center gap-2">
              <span class="text-xs text-secondaryText">Showing:</span>
              <div class="relative">
                <select class="appearance-none bg-white border border-gray-200 text-xs font-medium text-mainText py-1.5 pl-3 pr-8 rounded-lg focus:outline-none focus:border-brand-primary cursor-pointer">
                  <option value="10">10 / page</option>
                  <option value="25">25 / page</option>
                  <option value="50">50 / page</option>
                </select>
                <i data-lucide="chevron-down" class="w-3.5 h-3.5 text-secondaryText absolute right-2.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
              </div>
            </div>

          </div>

        </div>

      </main>

      <!-- Dashboard Footer -->
      <footer class="mt-auto py-4 px-8 border-t border-gray-200 bg-white text-center sm:text-left flex flex-col sm:flex-row justify-between items-center text-xs text-secondaryText gap-2">
        <p>© 2026 ia Academy School Management System. All rights reserved.</p>
        <div class="flex items-center gap-4">
          <a href="#" class="hover:text-brand-primary">Privacy Policy</a>
          <a href="#" class="hover:text-brand-primary">Terms of Service</a>
          <a href="#" class="hover:text-brand-primary">Support</a>
        </div>
      </footer>

    </div>

  </div>

  <!-- ADD STUDENT MODAL -->
  <div id="add-student-modal" class="fixed inset-0 bg-gray-900/50 z-50 flex items-center justify-center p-4 hidden opacity-0 transition-opacity duration-200">
    <div class="bg-white rounded-2xl max-w-lg w-full p-6 shadow-2xl transform scale-95 transition-transform duration-200 space-y-5">
      
      <div class="flex items-center justify-between border-b border-gray-100 pb-3">
        <div class="flex items-center gap-2">
          <div class="w-8 h-8 rounded-lg bg-brand-100 text-brand-primary flex items-center justify-center font-bold">
            <i data-lucide="user-plus" class="w-4 h-4"></i>
          </div>
          <h3 class="text-base font-bold text-mainText">Add New Student</h3>
        </div>
        <button id="close-add-modal-btn" class="text-secondaryText hover:text-mainText p-1 rounded-lg hover:bg-gray-100">
          <i data-lucide="x" class="w-5 h-5"></i>
        </button>
      </div>

      <!-- Form Inputs -->
      <form id="add-student-form" class="space-y-4 text-xs">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-medium text-mainText mb-1">Full Name *</label>
            <input type="text" required placeholder="e.g. Alex Morgan" class="w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary focus:outline-none">
          </div>
          <div>
            <label class="block font-medium text-mainText mb-1">Roll Number *</label>
            <input type="text" required placeholder="e.g. #22" class="w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary focus:outline-none">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-medium text-mainText mb-1">Class *</label>
            <select class="w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary focus:outline-none">
              <option>Class 01</option>
              <option>Class 02</option>
              <option>Class 03</option>
              <option>Class 04</option>
            </select>
          </div>
          <div>
            <label class="block font-medium text-mainText mb-1">Date of Birth *</label>
            <input type="date" required class="w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary focus:outline-none">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block font-medium text-mainText mb-1">Phone Number</label>
            <input type="text" placeholder="+123 0000000" class="w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary focus:outline-none">
          </div>
          <div>
            <label class="block font-medium text-mainText mb-1">Address</label>
            <input type="text" placeholder="e.g. New York, USA" class="w-full px-3 py-2 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-primary/20 focus:border-brand-primary focus:outline-none">
          </div>
        </div>

        <div class="pt-3 border-t border-gray-100 flex items-center justify-end gap-3">
          <button type="button" id="cancel-add-modal-btn" class="px-4 py-2 text-xs font-semibold text-secondaryText hover:bg-gray-100 rounded-xl transition-colors">
            Cancel
          </button>
          <button type="submit" class="px-5 py-2 text-xs font-semibold bg-brand-primary text-white hover:bg-brand-dark rounded-xl shadow-md transition-all">
            Save Student
          </button>
        </div>
      </form>

    </div>
  </div>

  <!-- TOAST NOTIFICATION CONTAINER -->
  <div id="toast-container" class="fixed bottom-5 right-5 z-50 flex flex-col gap-2"></div>

  <!-- 11. INTERACTION SCRIPTS -->
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Initialize Lucide Icons
      lucide.createIcons();

      // Mobile Sidebar Toggle Logic
      const sidebar = document.getElementById('sidebar');
      const sidebarOverlay = document.getElementById('sidebar-overlay');
      const openSidebarBtn = document.getElementById('open-sidebar-btn');
      const closeSidebarBtn = document.getElementById('close-sidebar-btn');

      function toggleSidebar(show) {
        if (show) {
          sidebar.classList.remove('-translate-x-full');
          sidebarOverlay.classList.remove('hidden');
        } else {
          sidebar.classList.add('-translate-x-full');
          sidebarOverlay.classList.add('hidden');
        }
      }

      openSidebarBtn.addEventListener('click', () => toggleSidebar(true));
      closeSidebarBtn.addEventListener('click', () => toggleSidebar(false));
      sidebarOverlay.addEventListener('click', () => toggleSidebar(false));

      // Sidebar Accordion Toggle
      const studentsMenuBtn = document.getElementById('students-menu-btn');
      const studentsSubmenu = document.getElementById('students-submenu');
      const studentsArrow = document.getElementById('students-arrow');

      studentsMenuBtn.addEventListener('click', () => {
        studentsSubmenu.classList.toggle('hidden');
        studentsArrow.classList.toggle('rotate-180');
      });

      // Profile Dropdown Toggle
      const profileMenuBtn = document.getElementById('profile-menu-btn');
      const profileDropdown = document.getElementById('profile-dropdown');

      profileMenuBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        profileDropdown.classList.toggle('hidden');
      });

      // Date Filter Dropdown Toggle
      const dateFilterBtn = document.getElementById('date-filter-btn');
      const dateFilterDropdown = document.getElementById('date-filter-dropdown');

      dateFilterBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        dateFilterDropdown.classList.toggle('hidden');
      });

      // Close dropdowns on document click
      document.addEventListener('click', () => {
        profileDropdown.classList.add('hidden');
        dateFilterDropdown.classList.add('hidden');
      });

      // Checkbox Row Toggle & Styling
      const selectAllCheckbox = document.getElementById('select-all-checkbox');
      const rowCheckboxes = document.querySelectorAll('.row-checkbox');

      selectAllCheckbox.addEventListener('change', (e) => {
        const isChecked = e.target.checked;
        rowCheckboxes.forEach(checkbox => {
          checkbox.checked = isChecked;
          updateRowStyle(checkbox);
        });
      });

      rowCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
          updateRowStyle(checkbox);
        });
      });

      function updateRowStyle(checkbox) {
        const row = checkbox.closest('tr');
        if (checkbox.checked) {
          row.classList.add('bg-brand-100/40');
        } else {
          row.classList.remove('bg-brand-100/40');
        }
      }

      // Search Filtering in Student Table
      const searchInput = document.getElementById('table-search-input');
      const tableRows = document.querySelectorAll('#students-table tbody tr');

      searchInput.addEventListener('input', (e) => {
        const query = e.target.value.toLowerCase().trim();
        
        tableRows.forEach(row => {
          const text = row.innerText.toLowerCase();
          if (text.includes(query)) {
            row.style.display = '';
          } else {
            row.style.display = 'none';
          }
        });
      });

      // Add Student Modal Logic
      const openAddModalBtn = document.getElementById('open-add-modal-btn');
      const closeAddModalBtn = document.getElementById('close-add-modal-btn');
      const cancelAddModalBtn = document.getElementById('cancel-add-modal-btn');
      const addStudentModal = document.getElementById('add-student-modal');
      const addStudentForm = document.getElementById('add-student-form');

      function openModal() {
        addStudentModal.classList.remove('hidden');
        setTimeout(() => {
          addStudentModal.classList.remove('opacity-0');
          addStudentModal.firstElementChild.classList.remove('scale-95');
        }, 10);
      }

      function closeModal() {
        addStudentModal.classList.add('opacity-0');
        addStudentModal.firstElementChild.classList.add('scale-95');
        setTimeout(() => {
          addStudentModal.classList.add('hidden');
        }, 200);
      }

      openAddModalBtn.addEventListener('click', openModal);
      closeAddModalBtn.addEventListener('click', closeModal);
      cancelAddModalBtn.addEventListener('click', closeModal);

      // Toast Notification Helper
      function showToast(message, type = 'success') {
        const container = document.getElementById('toast-container');
        const toast = document.createElement('div');
        toast.className = `flex items-center gap-3 px-4 py-3 rounded-xl shadow-xl text-xs font-semibold text-white transition-all transform translate-y-2 ${
          type === 'success' ? 'bg-brand-primary' : 'bg-rose-600'
        }`;
        
        toast.innerHTML = `
          <i data-lucide="${type === 'success' ? 'check-circle' : 'alert-circle'}" class="w-4 h-4"></i>
          <span>${message}</span>
        `;

        container.appendChild(toast);
        lucide.createIcons();

        setTimeout(() => {
          toast.classList.remove('translate-y-2');
        }, 10);

        setTimeout(() => {
          toast.classList.add('opacity-0', 'translate-y-2');
          setTimeout(() => toast.remove(), 200);
        }, 3000);
      }

      addStudentForm.addEventListener('submit', (e) => {
        e.preventDefault();
        closeModal();
        showToast('Student created successfully!');
        addStudentForm.reset();
      });
    });
  </script>
</body>
</html>