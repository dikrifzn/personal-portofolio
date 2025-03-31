@vite('resources/css/app.css')
<h1 class="text-4xl font-bold text-gray-900">My Blog</h1>
@foreach($posts as $post)
    <div class="card m-5 border-b pb-3">
        <a href="{{ route('blog-detile', $post->id) }}">
            <div class="m-1 flex">
                <img src="{{ $post->cover_image }}" alt="image Cover">
            </div>
            <div class="m-3 flex">
                <p class="mr-1">❤️ {{ $post->likes_count }} | 💬 {{ $post->comments_count }}</p>
                <span>- {{ $post->created_at->diffForHumans() }}</span>
            </div>
            <h3 class="text-1xl font-bold text-gray-900">{{ $post->category}}</h3>
            <h2 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
            <p>{{ $post->description}}</p>
        </a>
    </div>
@endforeach