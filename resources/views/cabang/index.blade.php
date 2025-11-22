<!doctype html>
<html>

<head>
  <title>Cabang</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="asset/favicon.ico">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

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
<div id="defaultModal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-modal md:h-full">
  <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
      <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
          Tambah Cabang
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="defaultModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <form action="#">
        <div class="grid gap-4 mb-4 sm:grid-cols-2">
          <div>
            <label for="idAdmin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
              Cabang</label>
            <input type="text" name="KodeAdmin" id="KodeAdmin"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Masukkan Kode cabang" required="">
          </div>
          <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
              Cabang</label>
            <input type="text" name="name" id="name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Masukkan nama cabang" required="">
          </div>

          <div class="sm:col-span-2">
            <label for="Alamat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea id="Alamat" rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Tulis alamat cabang"></textarea>
          </div>
          <div class="sm:col-span-2">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="description" rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Tulis deskripsi cabang"></textarea>
          </div>
        </div>

        <button type="submit"
          class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
          <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd"></path>
          </svg>
          Kerjakan
        </button>
      </form>
    </div>
  </div>
</div>
<div id="editModal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-modal md:h-full">
  <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
      <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
          Edit Data Cabang
        </h3>
        <button type="button"
          class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
          data-modal-toggle="editModal">
          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <form action="#">

        <div class="grid gap-4 mb-4 sm:grid-cols-2">
          <div>
            <label for="idAdmin"
              class="block w-full text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode
              Cabang</label>
            <input type="text" name="KodeAdmin" id="KodeAdmin"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Masukkan Kode cabang" required="">
          </div>
          <div>
            <label for="name"
              class="block w-full text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
              Cabang</label>
            <input type="text" name="name" id="name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Masukkan nama cabang" required="">
          </div>
          <div class="sm:col-span-2">
            <label for="Alamat"
              class="block w-full text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
            <textarea id="Alamat" rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Tulis alamat cabang"></textarea>
          </div>
          <div class="sm:col-span-2">
            <label for="description"
              class="block w-full text-left mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
            <textarea id="description" rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
              placeholder="Tulis deskripsi cabang"></textarea>
          </div>
        </div>
        <button type="submit"
          class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
          <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
              clip-rule="evenodd"></path>
          </svg>
          Kerjakan
        </button>
      </form>
    </div>
  </div>
</div>
<div id="deleteModal" tabindex="-1" aria-hidden="true"
  class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-[60] justify-center items-center w-full md:inset-0 h-modal md:h-full">
  <div class="relative p-4 w-full max-w-md h-full md:h-auto">
    <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
      <button type="button"
        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
        data-modal-toggle="deleteModal">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd"
            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close modal</span>
      </button>
      <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor"
        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
          clip-rule="evenodd"></path>
      </svg>
      <p class="mb-4 text-gray-500 dark:text-gray-300">
        Apakah anda yakin menghapus data ini? <br>
        Data yang dihapus tak bisa dipulihkan kembali!</p>
      <div class="flex justify-center items-center space-x-4">
        <button data-modal-toggle="deleteModal" type="button"
          class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
          Urungkan
        </button>
        <button type="submit"
          class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
          Ya, yakin
        </button>
      </div>
    </div>
  </div>
</div>
<body class="bg-gray-100 dark:bg-gray-900">
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
          <a href="admin_DASBOR.html" class="flex items-center p-2 text-gray-300 rounded-lg hover:bg-blue-800 group">
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
          <a href="admin_CABANG.html"
            class="flex items-center p-2 text-white rounded-lg bg-blue-700 hover:bg-blue-600 group">
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
              Super Admin
            </a>
          </li>
          <li>
            <div class="flex items-center">
              <i class="fas fa-chevron-right text-gray-400 text-xs mx-2"></i>
              <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Cabang</span>
            </div>
          </li>
        </ol>
      </nav>

      <h1 class="text-3xl font-bold text-gray-900 dark:text-white mb-6">Cabang</h1>

      <div class="bg-white rounded-lg shadow dark:bg-gray-800 p-6">
        <div class=" border-b border-gray-200 dark:border-gray-700">
          <div class="p-4 flex items-center justify-between">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">
              <i class="fa-solid fa-store m-2"></i>Cabang
            </h2>
            <div class="flex items-center space-x-2">
              <button type="button" id="defaultModalButton" data-modal-target="defaultModal"
                data-modal-toggle="defaultModal"
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium">
                <i class="fas fa-plus mr-1"></i>Tambah Cabang
              </button>
            </div>

          </div>

        </div>

        <div class="overflow-x-auto">
          <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 display" id="myTable">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
              <tr>
                <th scope="col" class="px-6 py-3">Kode</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Alamat</th>
                <th scope="col" class="px-6 py-3">Deskripsi</th>
                <th scope="col" class="px-6 py-3 text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">S01</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Ratu Komputer Serang</td>
                <td class="px-6 py-4">Jalan Raya Serang, Banten</td>
                <td class="px-6 py-4">Toko utama Ratu Komputer</td>
                <td class="px-6 py-4 text-center">
                  <button type="button" id="editModalButton" data-modal-target="editModal" data-modal-toggle="editModal"
                    class="bg-yellow-400 hover:bg-yellow-500 text-white p-2 rounded">
                    <i class="fas fa-edit"></i>
                  </button>

                  <button type="button" id="deleteButton" data-modal-target="deleteModal"
                    data-modal-toggle="deleteModal" class="bg-red-500 hover:bg-red-600 text-white p-2 rounded">
                    <i class="fas fa-trash"></i>
                  </button>

                </td>
                <!-- SETELAH LINE INI DATA BOLEH DIHAPUS UNTUK KEBUTUHAN BACKEND -->
              </tr>
              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">S02</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Ratu Komputer Bogor</td>
                <td class="px-6 py-4">Jalan Raya Padjajaran, Bogor</td>
                <td class="px-6 py-4">Ratu Komputer cabang Bogor</td>
                <td class="px-6 py-4 text-center">
                  <button type="button" id="editModalButton" data-modal-target="editModal" data-modal-toggle="editModal"
                    class="bg-yellow-400 hover:bg-yellow-500 text-white p-2 rounded">
                    <i class="fas fa-edit"></i>
                  </button>

                  <button type="button" id="deleteButton" data-modal-target="deleteModal"
                    data-modal-toggle="deleteModal" class="bg-red-500 hover:bg-red-600 text-white p-2 rounded">
                    <i class="fas fa-trash"></i>
                  </button>

                </td>
              </tr>

              <tr
                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="px-6 py-4">S03</td>
                <td class="px-6 py-4 font-medium text-gray-900 dark:text-white">Ratu Komputer Depok</td>
                <td class="px-6 py-4">Jalan Raya Margonda, Depok</td>
                <td class="px-6 py-4">Ratu Komputer cabang Depok</td>
                <td class="px-6 py-4 text-center">
                  <button type="button" id="editModalButton" data-modal-target="editModal" data-modal-toggle="editModal"
                    class="bg-yellow-400 hover:bg-yellow-500 text-white p-2 rounded">
                    <i class="fas fa-edit"></i>
                  </button>

                  <button type="button" id="deleteButton" data-modal-target="deleteModal"
                    data-modal-toggle="deleteModal" class="bg-red-500 hover:bg-red-600 text-white p-2 rounded">
                    <i class="fas fa-trash"></i>
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

    // Inisialisasi DataTables
    $(document).ready(function () {
      $('#myTable').DataTable();
    });
  </script>

</body>

</html>