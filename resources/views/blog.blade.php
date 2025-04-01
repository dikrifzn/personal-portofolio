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
    <header>
      <nav
        class="navbar fixed w-full z-50 bg-slate-800 border-b border-slate-700"
      >
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
                href="/#works"
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
                href="/#works"
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

    <section class="py-16 bg-white" id="blogs">
      <div class="container mx-auto px-4 mt-10">
        <div class="text-center mb-12">
          <h2 class="text-3xl md:text-4xl font-bold text-slate-800 mb-4">
            Latest Blog Posts
          </h2>
          <p class="text-slate-600 max-w-2xl mx-auto">
            Discover my thoughts and insights on web development and technology
          </p>
        </div>

        <div class="flex flex-col lg:flex-row justify-center gap-8">
          <div class="max-w-5xl flex flex-col gap-4">
            @foreach($posts as $post)
                <a href="{{ route('blog-detile', $post->id) }}">
                <article class="flex flex-col md:flex-row items-center gap-4 rounded-lg p-4 hover:shadow-[0_8px_24px_rgba(0,0,0,0.15)] shadow-[0_8px_24px_rgba(0,0,0,0.10)] transition-shadow">
                    <div class="aspect-[4/3] md:h-40 rounded-lg overflow-hidden">
                    <img
                        src="{{ asset('storage/' . $post->cover_image) }}"
                        alt="Blog Post 1"
                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
                    />
                    </div>
                    <div>
                    <span
                        class="inline-block px-2 py-0.5 bg-slate-100 text-slate-600 text-xs font-medium rounded-full mb-1"
                    >
                    {{ $post->category}}
                    </span>
                    <span class="text-sm text-gray-500 before:content-['•'] before:mr-1">{{ $post->created_at->diffForHumans() }}</span>
                    <h3 class="text-lg font-bold text-slate-800 mb-1">
                        {{ $post->title }}
                    </h3>
                    <p class="text-sm text-slate-600 mb-2">
                        {{ $post->description}}
                    </p>
                    <div class="flex items-center justify-between">
                        <div class="flex gap-4 text-slate-500">
                        <span class="flex items-center"
                            ><i class="fa-regular fa-heart mr-2"></i>{{ $post->likes_count }}</span
                        >
                        <span class="flex items-center"
                            ><i class="fa-regular fa-comment mr-2"></i>{{ $post->comments_count }}</span
                        >
                        </div>
                        <span
                        class="inline-flex items-center text-slate-600 font-medium"
                        >
                        Baca selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                        </span>
                    </div>
                    </div>
                </article>
                </a>
            @endforeach
          </div>
        </div>
      </div>
    </section>

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
