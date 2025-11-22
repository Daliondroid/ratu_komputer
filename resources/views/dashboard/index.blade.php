<!doctype html>
<html>

<head>
  <title>Dasbor</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="asset/favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

  <!-- DATATABLES -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="//cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>

<link rel="stylesheet" href="//cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">

  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: { "50": "#eff6ff", "100": "#dbeafe", "200": "#bfdbfe", "300": "#93c5fd", "400": "#60a5fa", "500": "#3b82f6", "600": "#2563eb", "700": "#1d4ed8", "800": "#1e40af", "900": "#1e3a8a" }
          }
        }
      }
    }
  </script>

  <style>
    .sidebar-transition {
      transition: transform 0.3s ease-in-out;
    }

    .content-transition {
      transition: margin-left 0.3s ease-in-out;
    }

    @media (max-width: 768px) {
      .sidebar-collapsed {
        transform: translateX(-100%);
      }
    }
  </style>
</head>

<!-- MODAL LIHAT ADMIN -->
<div id="viewModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
      <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
        <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
          <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
            Data Admin
          </h3>
          <button type="button"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
            data-modal-toggle="viewModal">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
                <!-- Profile Content -->
        <div class="p-6">
          <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Column - Photo -->
            <div class="lg:col-span-1">
              <div class="flex flex-col items-center">
                <div
                  class="w-32 h-32 rounded-lg overflow-hidden bg-gradient-to-br from-teal-400 to-teal-600 mb-4 shadow-lg">
                  <img src="https://cdn.getmerlin.in/cms/pfp1_fe1e0a17e8.jpg" alt="Profile Picture"
                    class="w-full h-full object-cover">
                </div>
              </div>
            </div>

            <!-- Right Column - Info -->
            <div class="lg:col-span-2">
              <div class="space-y-6">
                <div class="flex items-center justify-between pb-4 border-b border-gray-200 dark:border-gray-700">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-2xl font-bold text-gray-900 dark:text-white">ADM001</span>
                  </div>
                  <div>
                    <span class="text-2xl font-bold text-gray-900 dark:text-white">Status Admin</span>
                  </div>
                </div>


                <!-- Nama -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Nama</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">Bjorka Iskandar</span>
                  </div>
                </div>

                <!-- Email -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Email</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">bjork4@gmail.com</span>
                  </div>
                </div>

                <!-- Jenis Kelamin -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Jenis Kelamin</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">Laki-laki</span>
                  </div>
                </div>

                <!-- Jenis Kelamin -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Password</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">Admin123</span>
                  </div>
                </div>

                <!-- Jabatan -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Jabatan</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">Bos Besar</span>
                  </div>
                </div>

                                <!-- Cabang -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Cabang</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">Serang</span>
                  </div>
                </div>

                <!-- No Telepon -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">No Telepon</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">0888 8888 8888</span>
                  </div>
                </div>

                <!-- Alamat -->
                <div class="flex items-start">
                  <div class="w-32 flex-shrink-0">
                    <span class="text-sm font-semibold text-gray-900 dark:text-white">Alamat</span>
                  </div>
                  <div class="flex-1">
                    <span class="text-sm text-gray-700 dark:text-gray-300">Jalan Paku Bumi No 999<br>Saiju Utara,
                      Kepulauan Es, Antartika</span>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END MODAL LIHAT -->

<body class="bg-gray-100 dark:bg-gray-900 ">
  
  <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center justify-start">
          <button id="sidebar-toggle" type="button"
            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
            <span class="sr-only">Toggle sidebar</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
              </path>
            </svg>
          </button>
          <a href="admin_DASBOR.html" class="flex ml-2 md:mr-24">
            <img src="asset/RatuKom_hitam.png" alt="Ratu Komputer Logo" class="h-12 mr-2">
          </a>
        </div>
        <div class="flex items-center">

          <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
            class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
            type="button">
            <span class="sr-only">Open user menu</span>
            <img class="w-8 h-8 me-2 rounded-full"
              src="https://i.pinimg.com/1200x/9e/b3/60/9eb3605f7e3e9c6b6c73d29871bd6d52.jpg" alt="user photo">
            Kucing Pepek
            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 1 4 4 4-4" />
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownAvatarName"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
              <div class="font-medium ">Nama disini</div>
              <div class="truncate">Email disini</div>
            </div>
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
              aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
              <li>
                <a href="admin_PROFIL.html"
                  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><i class="fas fa-user-shield w-5 h-5"></i> Profil</a>
              </li>
            </ul>
            <div class="py-2">
              <!-- ISI INI UNTUK FITUR LOGOUT -->
              <a href="#"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-600 hover:text-white dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white"><i class="fa-solid fa-arrow-right-from-bracket w-5 h-5"></i> Keluar</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </nav>

  <aside id="sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-gradient-to-b from-blue-900 to-blue-950 border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700 sidebar-transition"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
        <li class="mb-4">
          <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">GENERAL</span>
        </li>
        <li>
          <a href="admin_DASBOR.html"
            class="flex items-center p-2 text-white rounded-lg bg-blue-700 hover:bg-blue-600 group">
            <i class="fas fa-th-large w-5 h-5"></i>
            <span class="ml-3">Dasbor</span>
          </a>
        </li>
        <li class="mb-4 mt-6">
          <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">MENU</span>
        </li>
        <li>
          <a href="admin_PRODUK.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fa-solid fa-computer"></i>
            <span class="ml-3">Produk</span>
          </a>
        </li>
        <li>
          <a href="admin_CABANG.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fa-solid fa-store"></i>
            <span class="ml-3">Cabang</span>
          </a>
        </li>
        <li>
          <a href="admin_HERO.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fas fa-newspaper"></i>
            <span class="ml-3">Hero</span>
          </a>
        </li>
        <!-- <li>
          <a href="admin_PENJUALAN.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fa-solid fa-money-bill-wave"></i>
            <span class="ml-3">Penjualan</span>
          </a>
        </li> -->

        <li>
          <a href="admin_GALLERY.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fa-solid fa-image"></i>
            <span class="ml-3">Gallery</span>
          </a>
        </li>
                                <li>
          <a href="admin_KATEGORI.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fa-solid fa-list"></i>
            <span class="ml-3">Kategori</span>
          </a>
        </li>
        <!-- <li>
          <a href="admin_ULASAN.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fa-solid fa-comment"></i>
            <span class="ml-3">Ulasan</span>
          </a>
        </li> -->
        <li class="mb-4 mt-6">
          <span class="text-xs font-semibold text-gray-400 uppercase tracking-wider">ADMIN</span>
        </li>
        <li>
          <a href="admin_PROFIL.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
            <i class="fas fa-user-shield w-5 h-5"></i>
            <span class="ml-3">Profil</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  <div class="p-4 md:ml-64">
    <div class="p-4 mt-14">
      <nav class="flex mb-4" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a href="#"
              class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
              Admin
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
              <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Dasbor</span>
            </div>
          </li>
        </ol>
      </nav>

      <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Halo Kucing Pepek!</h1>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-600 dark:text-gray-400 text-sm font-medium mb-1">Karyawan</p>
              <p class="text-3xl font-bold text-gray-900 dark:text-white">20</p>
            </div>
            <div class="bg-blue-100 rounded-full p-3">
              <i class="fas fa-users text-blue-600 text-2xl"></i>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-600 dark:text-gray-400 text-sm font-medium mb-1">Kategori Produk</p>
              <p class="text-3xl font-bold text-gray-900 dark:text-white">12</p>
            </div>
            <div class="bg-blue-100 rounded-full p-3">
              <i class="fa-solid fa-list text-blue-600 text-2xl"></i>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 dark:bg-gray-800">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-gray-600 dark:text-gray-400 text-sm font-medium mb-1">Cabang</p>
              <p class="text-3xl font-bold text-gray-900 dark:text-white">2</p>
            </div>
            <div class="bg-blue-100 rounded-full p-3">
              <i class="fa-solid fa-location-dot text-blue-600 text-2xl"></i>
            </div>
          </div>
        </div>
      </div>


      <div class="bg-white rounded-lg shadow dark:bg-gray-800 p-6 mb-6">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
          <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
              <i class="fas fa-desktop mr-2"></i>Simulasi Rakitan PC
            </h2>
          </div>
        </div>

        <div class="overflow-x-auto mt-4">
          <table id="simulationTable" class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display nowrap" style="width:100%">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th class="px-6 py-3">Kode</th>
                <th class="px-6 py-3">Processor</th>
                <th class="px-6 py-3">Motherboard</th>
                <th class="px-6 py-3">RAM</th>
                <th class="px-6 py-3">Casing</th>
                <th class="px-6 py-3">SSD</th>
                <th class="px-6 py-3">HDD</th>
                <th class="px-6 py-3">VGA</th>
                <th class="px-6 py-3">PSU</th>
                <th class="px-6 py-3">Mouse</th>
                <th class="px-6 py-3">Keyboard</th>
                <th class="px-6 py-3">Monitor</th>
                <th class="px-6 py-3">Cooler Fan</th>
              </tr>
            </thead>
            <tbody>
              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">RK321</td>
                <td class="px-6 py-4">Intel Core i5-13400</td>
                <td class="px-6 py-4">ASUS ROG Strix B760-F Gaming WiFi</td>
                <td class="px-6 py-4">Corsair Vengeance RGB DDR5-6000 (32GB Kit 2x16GB)</td>
                <td class="px-6 py-4">Havn HS 420</td>
                <td class="px-6 py-4">WD Black SN8100 (2TB)</td>
                <td class="px-6 py-4">Toshiba X300 16TB Internal HDD</td>
                <td class="px-6 py-4">NVIDIA GeForce RTX 5070</td>
                <td class="px-6 py-4">Corsair RM850e Gold (850W)</td>
                <td class="px-6 py-4">Razer DeathAdder V4 Pro</td>
                <td class="px-6 py-4">SteelSeries Apex Pro TKL Gen 3</td>
                <td class="px-6 py-4">Dell Alienware AW2525HM (25" 1080p 320Hz)</td>
                <td class="px-6 py-4">Noctua NF-A12x25 G2 PWM</td>
              </tr>

              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">RK423</td>
                <td class="px-6 py-4">AMD Ryzen 5 7600</td>
                <td class="px-6 py-4">Gigabyte X670 AORUS ELITE AX</td>
                <td class="px-6 py-4">G.Skill Ripjaws V DDR4-3200 (16GB Kit 2x8GB)</td>
                <td class="px-6 py-4">Phanteks Eclipse G400A</td>
                <td class="px-6 py-4">SK hynix Platinum P51 (2TB)</td>
                <td class="px-6 py-4">Seagate IronWolf Pro 24TB Internal HDD</td>
                <td class="px-6 py-4">AMD Radeon RX 9070 XT</td>
                <td class="px-6 py-4">Silverstone Hela 850R Platinum (850W)</td>
                <td class="px-6 py-4">Logitech G305 Lightspeed</td>
                <td class="px-6 py-4">Asus ROG Azoth</td>
                <td class="px-6 py-4">AOC Q27G4ZD (27" 1440p 240Hz)</td>
                <td class="px-6 py-4">Arctic P12 PWM PST</td>
              </tr>

               <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">RK987</td>
                <td class="px-6 py-4">AMD Ryzen 5 7600</td>
                <td class="px-6 py-4">MSI MAG Z790 Tomahawk WiFi</td>
                <td class="px-6 py-4">Kingston Fury Beast DDR5-5600 (16GB Kit 2x8GB)</td>
                <td class="px-6 py-4">Lian Li O11 Dynamic</td>
                <td class="px-6 py-4">Biwin Black Opal NV7400 (2TB)</td>
                <td class="px-6 py-4">Western Digital Elements 14TB External HDD</td>
                <td class="px-6 py-4">NVIDIA GeForce RTX 5060 Ti 16GB</td>
                <td class="px-6 py-4">ESGAMING EB650W</td>
                <td class="px-6 py-4">Logitech G502 X</td>
                <td class="px-6 py-4">Keychron C3 Pro</td>
                <td class="px-6 py-4">INNOCN 49" Curved Ultrawide (32:9 1440p)</td>
                <td class="px-6 py-4">Arctic P12 Pro</td>
              </tr>

              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">RK209</td>
                <td class="px-6 py-4">Intel Core i9-13900K</td>
                <td class="px-6 py-4">ASRock B650M Steel Legend WiFi</td>
                <td class="px-6 py-4">Crucial Ballistix DDR4-3600 (32GB Kit 2x16GB)</td>
                <td class="px-6 py-4">Montech King 95 Pro</td>
                <td class="px-6 py-4">Crucial MX500 (1TB)</td>
                <td class="px-6 py-4">Seagate Barracuda 8TB Internal HDD</td>
                <td class="px-6 py-4">Intel Arc B580</td>
                <td class="px-6 py-4">XPG Core Reactor II VE Gold (850W)</td>
                <td class="px-6 py-4">Corsair Sabre V2 Pro</td>
                <td class="px-6 py-4">Wooting 80HE</td>
                <td class="px-6 py-4">Samsung Odyssey G9 OLED 49" (32:9 1440p)</td>
                <td class="px-6 py-4">Havn H12</td>
              </tr>

              <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">RK438</td>
                <td class="px-6 py-4">Qualcomm Snapdragon 8 Gen 2</td>
                <td class="px-6 py-4">ASUS Prime H610M-E D4</td>
                <td class="px-6 py-4">TeamGroup T-Force Delta RGB DDR5-5200</td>
                <td class="px-6 py-4">Cougar Omni X Mid-Tower</td>
                <td class="px-6 py-4">WD Blue SN5000 (4TB)</td>
                <td class="px-6 py-4">WD Ultrastar DC HC310 6TB Enterprise</td>
                <td class="px-6 py-4">AMD Radeon RX 9060 XT 16GB</td>
                <td class="px-6 py-4">Silverstone Extreme 850R Platinum (SFX)</td>
                <td class="px-6 py-4">Corsair Scimitar Elite Wireless SE</td>
                <td class="px-6 py-4">Razer BlackWidow V4 Pro</td>
                <td class="px-6 py-4">Samsung Odyssey Neo G7 43" (4K 144Hz)</td>
                <td class="px-6 py-4">Coolify Holo Fan</td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>

      <div class="bg-white rounded-lg shadow dark:bg-gray-800 p-6">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700">
          <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
              <i class="fas fa-users mr-2"></i>Karyawan
            </h2>
            <div class="flex items-center space-x-2">
            </div>
          </div>
        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display" id="myTable" >
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">Kode</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Email</th>
                <th scope="col" class="px-6 py-3">Jenis Kelamin</th>
                <th scope="col" class="px-6 py-3">Jabatan</th>
                <th scope="col" class="px-6 py-3">Detail Informasi</th>
              </tr>
            </thead>
            <tbody>
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">ADM001</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Ricky Bonardo</td>
                <td class="px-6 py-4">rickybonardo@gmail.com</td>
                <td class="px-6 py-4">Laki-laki</td>
                <td class="px-6 py-4">Staff Senior</td>
                <td class="px-6 py-4">              <button type="button" id="viewModal" data-modal-target="viewModal"
                data-modal-toggle="viewModal"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Lihat data
              </button>
                </td>

              </tr>
              <!-- SETELAH LINE INI DATA BOLEH DIHAPUS UNTUK KEBUTUHAN BACKEND -->
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">ADM002</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Riki Ronaldo</td>
                <td class="px-6 py-4">rikironaldo@gmail.com</td>
                <td class="px-6 py-4">Laki-laki</td>
                <td class="px-6 py-4">Staff Senior</td>
                <td class="px-6 py-4">              <button type="button" id="viewModal" data-modal-target="viewModal"
                data-modal-toggle="viewModal"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Lihat data
              </button>
                </td>
              </tr>
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">ADM003</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Kiri Bonardo</td>
                <td class="px-6 py-4">kiribonardo@gmail.com</td>
                <td class="px-6 py-4">Laki-laki</td>
                <td class="px-6 py-4">Staff Senior</td>
                <td class="px-6 py-4">              <button type="button" id="viewModal" data-modal-target="viewModal"
                data-modal-toggle="viewModal"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Lihat data
              </button>
                </td>

              </tr>
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">ADM004</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Rico Bonardo</td>
                <td class="px-6 py-4">ricobonardo@gmail.com</td>
                <td class="px-6 py-4">Laki-laki</td>
                <td class="px-6 py-4">Staff Senior</td>
                <td class="px-6 py-4">              <button type="button" id="viewModal" data-modal-target="viewModal"
                data-modal-toggle="viewModal"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Lihat data
              </button>
                </td>

              </tr>
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">ADM005</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Ricky Bernardo</td>
                <td class="px-6 py-4">rickybernardo@gmail.com</td>
                <td class="px-6 py-4">Laki-laki</td>
                <td class="px-6 py-4">Staff Senior</td>
                <td class="px-6 py-4">              <button type="button" id="viewModal" data-modal-target="viewModal"
                data-modal-toggle="viewModal"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">Lihat data
              </button>
                </td>

              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
<script>
    // Sidebar toggle for mobile
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const sidebar = document.getElementById('sidebar');

    sidebarToggle.addEventListener('click', function () {
      sidebar.classList.toggle('-translate-x-full');
    });

    // --- HANYA PERLU SATU BLOK INI SAJA UNTUK DATATABLES ---
    $(document).ready( function () {
        
        // 1. Cek apakah myTable sudah jalan sebelumnya, kalau ada hancurkan dulu (opsional, tapi aman)
        if ($.fn.DataTable.isDataTable('#myTable')) {
            $('#myTable').DataTable().destroy();
        }

        // 2. Inisialisasi Tabel Karyawan (myTable)
        $('#myTable').DataTable({
            responsive: true
        });

        // 3. Inisialisasi Tabel Simulasi (simulationTable)
        $('#simulationTable').DataTable({
            scrollX: true,      // Agar bisa scroll ke samping
            responsive: false,  // Matikan responsive agar kolom tidak disembunyikan
            autoWidth: false    // Lebar kolom menyesuaikan konten
        });
    });
  </script>

</body>

</html>