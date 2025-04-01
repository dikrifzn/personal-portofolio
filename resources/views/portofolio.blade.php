<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Dikri Fauzan Amrulloh</title>
    {{-- <link href="./style/output.css" rel="stylesheet" /> --}}
    @vite('resources/css/app.css')
    <!-- Icons -->
    <script
      src="https://kit.fontawesome.com/80e4319211.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="bg-slate-800">
    <header>
      <nav class="navbar fixed w-full z-50 bg-slate-800 border-b border-slate-700">
        <div class="container mx-auto px-4 py-3">
          <div class="flex justify-between items-center">
            <!-- Logo -->
            <a
              href="/"
              class="text-2xl font-bold text-slate-800 dark:text-white"
              >DIKRI</a
            >

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
              <a
                href="/#home"
                class="text-white font-medium hover:text-slate-400 transition"
                >Home</a
              >
              <a
                href="/#about"
                class="text-white font-medium hover:text-slate-400 transition"
                >About</a
              >
              <a
                href="/wokrs"
                class="text-white font-medium hover:text-slate-400 transition"
                >Portfolio</a
              >
              <a
                href="/blogs"
                class="text-white font-medium hover:text-slate-400 transition"
                >Blog</a
              >
              <a
                href="/contact"
                class="text-white font-medium hover:text-slate-400 transition"
                >Contact</a
              >
            </div>

            <a
              href="#"
              class="hidden md:flex bg-white text-slate-800 text-sm font-medium px-6 py-3 rounded-lg hover:bg-slate-200 transition items-center"
            >
              Download CV <i class="fas fa-download ml-2"></i>
            </a>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center space-x-4">
              <button
                id="mobile-menu-btn"
                class="text-slate-800 dark:text-white focus:outline-none"
              >
                <i class="fas fa-bars text-xl"></i>
              </button>
            </div>
          </div>

          <!-- Mobile Menu -->
          <div id="mobile-menu" class="md:hidden hidden py-4">
            <div class="flex flex-col space-y-4">
              <a
                href="/#home"
                class="text-white font-medium hover:text-slate-400 transition"
                >Home</a
              >
              <a
                href="/#about"
                class="text-white font-medium hover:text-slate-400 transition"
                >About</a
              >
              <a
                href="/#wokrs"
                class="text-white font-medium hover:text-slate-400 transition"
                >Portfolio</a
              >
              <a
                href="/#blogs"
                class="text-white font-medium hover:text-slate-400 transition"
                >Blog</a
              >
              <a
                href="/#contact"
                class="text-white font-medium hover:text-slate-400 transition"
                >Contact</a
              >
              <a
                href="#"
                class="bg-slate-600 text-white px-4 py-2 rounded-lg hover:bg-slate-700 transition flex items-center justify-center"
              >
                Download CV <i class="fas fa-download ml-2"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section class="bg-slate-800 py-16 px-4" id="works">
      <div class="container mx-auto mt-10">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-white">
            My Portfolio
          </h2>
          <div class="w-20 h-1 bg-slate-500 mx-auto mt-4"></div>
        </div>

        <div class="flex flex-col gap-12">
            @foreach ($projects as $index => $project)
                <div class="bg-white p-6 md:p-10 rounded-lg flex flex-col lg:flex-row gap-8 max-w-6xl mx-auto hover:shadow-xl transition-shadow">
                    @if ($index % 2 == 0)
                        <div class="w-full lg:w-1/2 flex flex-col justify-between order-2 lg:order-1">
                            <div>
                                <span class="inline-block px-3 py-1 bg-slate-500 text-white text-sm font-medium rounded-full mb-4">
                                {{ $project->category}}
                                </span>
                                <h1 class="text-2xl md:text-3xl font-bold text-slate-800 mb-4">
                                {{ $project->title }}
                                </h1>
                                <p class="text-slate-700 mb-6 leading-relaxed">
                                {{ $project->description }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ $project->repository_url }}" class="inline-flex items-center font-medium text-slate-600 hover:text-slate-800 transition-colors" target="_blank">
                                Lihat repository
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <div class="w-full lg:w-1/2 order-1 lg:order-2">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="Pijar Nusantara - Platform Relawan dan Donasi" class="w-full h-auto rounded-lg shadow-lg object-cover hover:scale-[1.02] transition-transform"/>
                        </div>
                    @else
                        <div class="w-full lg:w-1/2">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="Project Kedua - Deskripsi Singkat" class="w-full h-auto rounded-lg shadow-lg object-cover hover:scale-[1.02] transition-transform"/>
                        </div>
    
                        <div class="w-full lg:w-1/2 flex flex-col justify-between">
                            <div>
                                <span class="inline-block px-3 py-1 bg-slate-500 text-white text-sm font-medium rounded-full mb-4">
                                {{ $project->category}}
                                </span>
                                <h1 class="text-2xl md:text-3xl font-bold text-slate-800 mb-4">
                                {{ $project->title }}
                                </h1>
                                <p class="text-slate-700 mb-6 leading-relaxed">
                                {{ $project->description }}
                                </p>
                            </div>
                            <div>
                                <a href="{{ $project->repository_url }}" class="inline-flex items-center font-medium text-slate-600 hover:text-slate-800 transition-colors" target="_blank">
                                Lihat repository
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
      </div>
    </section>
    <footer class="bg-slate-800 py-6 border-t border-slate-700">
      <div class="container mx-auto px-4 text-center">
        <p class="text-slate-300">
          Made with <span class="text-red-500">❤️</span> by Dikri Fauzan
          Amrulloh
          <span class="block md:inline mt-1 md:mt-0"
            >© <span id="year"></span> All rights reserved</span
          >
        </p>
      </div>
    </footer>

    <script>
      // Navbar
      document.addEventListener("DOMContentLoaded", function () {
        const mobileMenuBtn = document.getElementById("mobile-menu-btn");
        const mobileMenu = document.getElementById("mobile-menu");
        const icon = mobileMenuBtn.querySelector("i");

        // Toggle mobile menu
        mobileMenuBtn.addEventListener("click", function () {
          mobileMenu.classList.toggle("hidden");
          icon.classList.toggle("fa-bars");
          icon.classList.toggle("fa-times");
        });

        // Close menu when clicking a link
        document.querySelectorAll("#mobile-menu a").forEach((link) => {
          link.addEventListener("click", function () {
            mobileMenu.classList.add("hidden");
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
          });
        });
      });
    </script>
  </body>
</html>
