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
  <body>
    @if (session('success'))
        <div id="alert" class="fixed top-4 right-4 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-lg opacity-0 transform translate-y-8 transition-all duration-500 ease-out z-50" role="alert">
            <strong class="font-bold">Success</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Navbar -->
    <header>
      <nav class="navbar fixed w-full z-40 bg-slate-800 border-b border-slate-700">
        <div class="container mx-auto px-4 py-3">
          <div class="flex justify-between items-center">
            <!-- Logo -->
            <a
              href="#"
              class="text-2xl font-bold text-slate-800 dark:text-white"
              >DIKRI</a
            >

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-6">
              <a
                href="#home"
                class="text-white font-medium hover:text-slate-400 transition"
                >Home</a
              >
              <a
                href="#about"
                class="text-white font-medium hover:text-slate-400 transition"
                >About</a
              >
              <a
                href="#works"
                class="text-white font-medium hover:text-slate-400 transition"
                >Portfolio</a
              >
              <a
                href="#blogs"
                class="text-white font-medium hover:text-slate-400 transition"
                >Blog</a
              >
              <a
                href="#contact"
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
                href="#home"
                class="text-white font-medium hover:text-slate-400 transition"
                >Home</a
              >
              <a
                href="#about"
                class="text-white font-medium hover:text-slate-400 transition"
                >About</a
              >
              <a
                href="#works"
                class="text-white font-medium hover:text-slate-400 transition"
                >Portfolio</a
              >
              <a
                href="#blogs"
                class="text-white font-medium hover:text-slate-400 transition"
                >Blog</a
              >
              <a
                href="#contact"
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

    <!-- Home Section -->
    <section class="bg-slate-800 min-h-screen" id="home">
      <div class="container mx-auto px-4">
        <div
          class="flex flex-col md:flex-row justify-center md:justify-between items-center min-h-screen py-20"
        >
          <!-- Text Content -->
          <div
            class="text-white order-2 md:order-1 text-center md:text-left mb-8 md:mb-0 md:w-1/2"
          >
            <h1 class="text-4xl md:text-6xl mb-3">
              Hello I'm <br /><span class="font-bold block"
                >Dikri Fauzan Amrulloh</span
              >
            </h1>
            <p class="text-lg mb-5">Junior Web Developer</p>
            <div class="flex flex-wrap justify-center md:justify-start gap-4">
              <a
                href="#works"
                class="px-6 py-3 rounded-lg font-medium text-sm bg-white text-slate-800 hover:bg-slate-200 transition-colors"
                >All my works</a
              >
              <a
                href="#contact"
                class="px-6 py-3 rounded-lg font-medium text-sm border border-white text-white hover:bg-white hover:text-slate-800 transition-colors"
                >Contact me</a
              >
            </div>
          </div>

          <!-- Image Container -->
          <div
            class="flex justify-center md:justify-end items-center order-1 md:order-2 mb-8 md:mb-0 md:w-1/2"
          >
            <img
              src="/images/hero-image.png"
              alt="Dikri Fauzan Amrulloh"
              class="w-full h-64 max-w-xs md:max-w-md lg:max-w-lg md:h-auto object-contain"
            />
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="py-16" id="about">
      <div class="container mx-auto px-4">
        <div
          class="flex flex-col lg:flex-row justify-between items-center gap-12 md:min-h-screen"
        >
          <div class="w-full lg:w-1/2 order-2 lg:order-1">
            <img
              src="/images/image-about.png"
              alt="Dikri Fauzan Amrulloh - Web Developer"
              class="w-full max-w-lg mx-auto"
            />
          </div>

          <div class="w-full lg:w-1/2 order-1 lg:order-2">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-6">
              About Me
            </h2>

            <div class="space-y-4 text-slate-700">
              <p class="text-lg leading-relaxed">
                Saya adalah Web Developer dan mahasiswa Universitas Kuningan di
                bidang Sistem Informasi, dengan keahlian dalam VueJS,
                TailwindCSS, dan Laravel. Saya fokus pada pengembangan aplikasi
                web yang modern, responsif, dan memiliki performa tinggi.
              </p>

              <p class="text-lg leading-relaxed">
                Selama kuliah, saya aktif dalam berbagai proyek dan terus
                mengembangkan keterampilan melalui pelatihan serta kolaborasi.
                Dengan semangat belajar dan inovasi, saya siap berkontribusi
                dalam proyek digital yang menantang.
              </p>
            </div>

            <div class="mt-8">
              <p class="text-lg font-medium text-slate-800 mb-4">
                Let's connect
              </p>
              <a
                href="https://www.linkedin.com/in/dikri/"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center px-6 py-3 rounded-lg font-medium text-sm bg-slate-800 text-white hover:bg-slate-700 transition-colors"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 mr-2"
                  fill="currentColor"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                  />
                </svg>
                LinkedIn
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Section -->
    <section class="bg-slate-800 py-16 px-4" id="works">
      <div class="container mx-auto">
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
            <div class="text-center mt-6">
              <a
                href="/portofolio"
                class="inline-flex items-center px-6 py-3 bg-slate-600 text-white font-medium rounded-lg hover:bg-slate-700 transition-colors"
              >
                Lihat Semua Project
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 ml-2"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                  />
                </svg>
              </a>
            </div>
        </div>
      </div>
    </section>

    <!-- Blog Section -->
    <section class="py-16 bg-white" id="blogs">
      <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
            Latest Blog Posts
          </h2>
          <div class="w-20 h-1 bg-slate-500 mx-auto mt-4"></div>
          <p class="text-slate-600 mt-4 max-w-2xl mx-auto">
            Discover insights and tutorials on web development and technology
          </p>
        </div>

        <!-- Blog Posts Grid -->
        <div class="flex flex-col lg:flex-row gap-8">
          @foreach($posts as $index => $post)
              @if ($index == 0)
                  <!-- Featured Post -->
                  <div class="lg:w-full">
                      <article class="group h-full rounded-xl overflow-hidden border border-gray-100 hover:shadow-[0_8px_24px_rgba(0,0,0,0.15)] shadow-[0_8px_24px_rgba(0,0,0,0.10)] transition-shadow duration-300">
                          <a href="{{ 'blog/' . $post->id }}">
                              <div class="aspect-w-16 aspect-h-9 overflow-hidden">
                                  <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Featured Blog Post" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
                              </div>
                              <div class="p-6">
                                  <span class="inline-block px-3 py-1 bg-slate-100 text-slate-600 text-sm font-medium rounded-full mb-3">
                                      {{ $post->category }}
                                  </span>
                                  <h3 class="text-2xl font-bold text-slate-800 mb-3 group-hover:text-slate-600 transition-colors">
                                      {{ $post->title }}
                                  </h3>
                                  <p class="text-slate-600 mb-4 leading-relaxed">
                                      {{ $post->description }}
                                  </p>
                                  <div class="flex items-center justify-between">
                                      <div class="flex gap-4 text-slate-500">
                                          <span class="flex items-center">
                                              <i class="fa-regular fa-heart mr-2"></i>
                                              {{ $post->likes_count }}
                                          </span>
                                          <span class="flex items-center">
                                              <i class="fa-regular fa-comment mr-2"></i>
                                              {{ $post->comments_count }}
                                          </span>
                                      </div>
                                      <span class="inline-flex items-center text-slate-600 font-medium">
                                          Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                                      </span>
                                  </div>
                              </a>
                          </article>
                      </div>
              @endif
          @endforeach
          <div class="lg:w-full flex flex-col gap-6 justify-between">
          @foreach($posts as $index => $post)
                  <!-- Secondary Posts -->
                    @if ($index > 0)
                      <article class="group flex gap-4 rounded-lg p-6 hover:shadow-[0_8px_24px_rgba(0,0,0,0.15)] shadow-[0_8px_24px_rgba(0,0,0,0.10)] transition-shadow duration-300">
                          <a href="{{ 'blog/' . $post->id }}" class="flex gap-4 w-full">
                              <div class="flex-shrink-0 w-24 h-24 overflow-hidden rounded-lg">
                                  <img src="{{ asset('storage/' . $post->cover_image) }}" alt="Blog Post 1" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"/>
                              </div>
                              <div class="flex-1">
                                  <span class="inline-block px-2 py-0.5 bg-slate-100 text-slate-600 text-xs font-medium rounded-full mb-1">
                                      {{ $post->category }}
                                  </span>
                                  <h3 class="text-lg font-bold text-slate-800 mb-1 group-hover:text-slate-600 transition-colors">
                                      {{ $post->title }}
                                  </h3>
                                  <p class="text-sm text-slate-600 mb-2 line-clamp-2">
                                      {{ $post->description }}
                                  </p>
                                  <div class="flex items-center justify-between">
                                    <div class="flex gap-4 text-slate-500">
                                        <span class="flex items-center">
                                            <i class="fa-regular fa-heart mr-2"></i>
                                            {{ $post->likes_count }}
                                        </span>
                                        <span class="flex items-center">
                                            <i class="fa-regular fa-comment mr-2"></i>
                                            {{ $post->comments_count }}
                                        </span>
                                    </div>
                                    <span class="inline-flex items-center text-slate-600 font-medium">
                                        Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                                    </span>
                                </div>
                              </div>
                          </a>
                      </article>
                    @endif
                    @endforeach
                  </div>
      </div>
        <!-- View All Button -->
        <div class="text-center mt-12">
          <a
            href="/blog"
            class="inline-flex items-center px-6 py-3 bg-slate-600 text-white font-medium rounded-lg hover:bg-slate-700 transition-colors"
          >
            Lihat Semua Blog
            <i class="fas fa-arrow-right ml-2"></i>
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-slate-800 py-16 px-4" id="contact">
      <div class="container mx-auto max-w-4xl">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
            Get In Touch
          </h2>
          <p class="text-slate-300 max-w-lg mx-auto">
            Feel free to reach out for collaborations or just to say hello!
          </p>
        </div>

        <div class="flex justify-center mb-16">
          <form action="{{ route('message') }}" method="POST" class="w-full max-w-lg">
            @csrf
            <div class="flex flex-col gap-6">
              <div>
                <input
                  type="text"
                  name="name"
                  placeholder="Your Name"
                  required
                  class="w-full px-6 py-3 bg-slate-700/50 text-white placeholder-slate-400 font-medium rounded-lg border border-slate-600 focus:border-slate-500 focus:ring-2 focus:ring-slate-500/30 focus:outline-none transition-all"
                />
              </div>
              <div>
                <input
                  type="email"
                  name="email"
                  placeholder="Your Email"
                  required
                  class="w-full px-6 py-3 bg-slate-700/50 text-white placeholder-slate-400 font-medium rounded-lg border border-slate-600 focus:border-slate-500 focus:ring-2 focus:ring-slate-500/30 focus:outline-none transition-all"
                />
              </div>
              <div>
                <textarea
                  name="message"
                  placeholder="Your Message"
                  rows="5"
                  required
                  class="w-full px-6 py-3 bg-slate-700/50 text-white placeholder-slate-400 font-medium rounded-lg border border-slate-600 focus:border-slate-500 focus:ring-2 focus:ring-slate-500/30 focus:outline-none transition-all"
                ></textarea>
              </div>
              <button
                type="submit"
                class="w-fit px-8 py-3 bg-slate-600 text-white font-medium rounded-lg hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-slate-500 focus:ring-offset-2 focus:ring-offset-slate-800 transition-colors"
              >
                Send Message
                <i class="fas fa-paper-plane ml-2"></i>
              </button>
            </div>
          </form>
        </div>

        <!-- Social Links -->
        <div class="flex justify-center gap-6">
          <a
            href="#"
            class="text-white inline-flex justify-center items-center h-14 w-14 bg-slate-700 hover:bg-slate-600 rounded-full transition-colors"
            aria-label="Instagram"
          >
            <i class="fa-brands fa-instagram text-xl"></i>
          </a>
          <a
            href="mailto:example@email.com"
            class="text-white inline-flex justify-center items-center h-14 w-14 bg-slate-700 hover:bg-slate-600 rounded-full transition-colors"
            aria-label="Email"
          >
            <i class="fa-solid fa-envelope text-xl"></i>
          </a>
          <a
            href="#"
            class="text-white inline-flex justify-center items-center h-14 w-14 bg-slate-700 hover:bg-slate-600 rounded-full transition-colors"
            aria-label="LinkedIn"
          >
            <i class="fa-brands fa-linkedin-in text-xl"></i>
          </a>
          <a
            href="#"
            class="text-white inline-flex justify-center items-center h-14 w-14 bg-slate-700 hover:bg-slate-600 rounded-full transition-colors"
            aria-label="GitHub"
          >
            <i class="fa-brands fa-github text-xl"></i>
          </a>
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
      // Menampilkan alert jika ada session('success')
      window.addEventListener('DOMContentLoaded', (event) => {
          const alert = document.getElementById('alert');
          
          if (alert) {
              // Tampilkan alert dengan transisi
              alert.classList.remove('opacity-0', 'translate-y-8');
              alert.classList.add('opacity-100', 'translate-y-0');
              
              // Menghilangkan alert setelah beberapa detik (5 detik)
              setTimeout(() => {
                  alert.classList.remove('opacity-100', 'translate-y-0');
                  alert.classList.add('opacity-0', 'translate-y-8');
              }, 5000); // 5000ms = 5 detik
          }
      });
      // Auto update copyright year
      document.getElementById("year").textContent = new Date().getFullYear();

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
