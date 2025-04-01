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
        @if (session('error'))
        <div id="alert" class="fixed top-4 right-4 bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-lg shadow-lg opacity-0 transform translate-y-8 transition-all duration-500 ease-out z-50" role="alert">
            <strong class="font-bold">Error</strong>
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif
    <header>
      <nav class="navbar fixed w-full z-40 bg-slate-800 border-b border-slate-700">
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
    <main>
      <section class="relative">
        <div class="w-full h-[300px] md:h-[500px] overflow-hidden">
          <img
            src="{{ asset('storage/' . $post->cover_image) }}"
            alt="Blog Post Cover"
            class="w-full h-full object-cover"
          />
        </div>
        <div
          class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-slate-900/80 to-transparent"
        >
          <div class="container mx-auto px-4 relative z-10">
            <div class="pb-5 text-white">
              <span
                class="inline-block px-3 py-1 bg-white/20 backdrop-blur-sm text-white text-xs font-medium rounded-full mb-4"
              >
                {{ $post->category}}
              </span>
              <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4">
                {{ $post->title }}
              </h1>

              <div
                class="flex flex-col md:flex-row md:items-center justify-between gap-4"
              >
                <div class="flex items-center space-x-4">
                  <span
                    class="h-10 w-10 inline-flex justify-center items-center font-medium bg-slate-700 text-white rounded-full"
                    >D</span
                  >
                  <div>
                    <p class="font-medium">Dikri Fauzan Amrulloh</p>
                    <p class="text-sm text-slate-300">
                      Published on {{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}
                    </p>
                  </div>
                </div>
                <div class="flex items-center space-x-6 text-white">
                  <form action="{{ route('blog-like', $post->id) }}" method="POST">
                    @csrf
                    <span class="flex items-center">
                      <button class="bg-transparent text-slate-200 hover:bg-slate-200 hover:text-blue-600 cursor-pointer px-2 py-1 rounded-md transition-colors duration-300">
                        <i class="far fa-heart mr-2"></i>
                        {{ $post->likes_count }} Likes
                      </button>
                    </span>
                  </form>                  
                  <a class="bg-transparent text-slate-200 hover:bg-slate-200 hover:text-blue-600 cursor-pointer px-2 py-1 rounded-md transition-colors duration-300" href="#comment">
                    <span class="flex items-center">
                      <i class="far fa-comment mr-2"></i>{{ $post->comments_count }} Comments
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Blog Content -->
      <section class="py-8">
        <div class="container mx-auto max-w-5xl px-4">
          <article class="space-y-4 mx-auto">
            <p>
              {{ $post->content }}
            </p>

            <img
              src="{{ asset('storage/' . $post->content_image) }}"
              alt="Blog content image"
              class="w-full"
            />

            <p class="pb-5">
              {{ $post->closing }}
            </p>
            <form action="{{ route('blog-like', $post->id) }}" method="POST" class="flex items-center space-x-2">
              @csrf
              <span class="mr-4">Like this blog? klik this </span><span> -></span>
              <button type="submit" class="bg-transparent text-slate-600 hover:bg-slate-200 hover:text-blue-600 cursor-pointer px-2 py-2 rounded-md transition-colors duration-300 flex items-center justify-center">
                <i class="far fa-heart text-2xl"></i>
              </button>
            </form>
          </article>
        </div>
      </section>

      <!-- Comments Section -->
      <section id="comment" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4 max-w-5xl">
          <h2 class="text-2xl font-bold mb-8">Comments ({{ $post->comments_count }})</h2>

          <!-- Comment Form -->
          <form action="{{ route('blog-comment', $post->id) }}" method="POST" class="mb-12 bg-white p-6 rounded-lg shadow-sm">
            @csrf
            <h3 class="text-lg font-medium mb-4">Leave a comment</h3>
            <div class="mb-4">
              <label
                for="name"
                class="block text-sm font-medium text-gray-700 mb-1"
                >Name</label
              >
              <input
                type="text"
                id="name"
                name="name"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-slate-500"
                placeholder="Your name"
              />
            </div>
            <div class="mb-4">
              <label
                for="comment"
                class="block text-sm font-medium text-gray-700 mb-1"
                >Comment</label
              >
              <textarea
                id="comment"
                name="comment"
                rows="4"
                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-slate-500 focus:border-slate-500"
                placeholder="Your thoughts..."
              ></textarea>
            </div>
            <button
              type="submit"
              class="px-6 py-3 bg-slate-600 text-white font-medium rounded-lg hover:bg-slate-700 transition-colors"
            >
              Post Comment
            </button>
          </form>

          <!-- Comments List -->
          <div class="space-y-6">
            @foreach ($comments as $comment)
            <div class="flex space-x-4">
              <div class="flex-shrink-0">
                <span
                  class="h-10 w-10 inline-flex justify-center items-center font-medium bg-slate-800 text-white rounded-full"
                  >{{ strtoupper(substr($comment->name, 0, 1)) }}</span
                >
              </div>
              <div>
                <div class="flex items-center space-x-2 mb-1">
                  <h4 class="font-medium">{{ $comment->name }}</h4>
                  <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
                <p class="text-gray-700">
                  {{ $comment->comment }}
                </p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
    </main>

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
