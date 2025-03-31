@vite('resources/css/app.css')

@if (session('success'))
    <div class="bg-green-500 text-white p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-500 text-white p-3 rounded mb-4">
        {{ session('error') }}
    </div>
@endif

<h1 class="text-4xl font-bold text-gray-900">My Blog</h1>
    <div class="card m-5 border-b pb-3">
        <div class="m-1 flex">
            <img src="{{ $post->cover_image }}" alt="image Cover">
        </div>
        <p class="mr-1">❤️ {{ $post->likes_count }} | 💬 {{ $post->comments_count }}<span> - {{ $post->created_at->diffForHumans() }}</span></p>
        <h2 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
        <p>{{ $post->description}}</p>
        <h3 class="text-1xl font-bold text-gray-900">{{ $post->category}}</h3>
    </div>
    <div class="m-5 border-b pb-3">
        <p>{{ $post->content}}</p>
        <img src="{{ $post->content_image }}" alt="image Content">
        <p>{{ $post->closing}}</p>

        <form action="{{ route('blog-like', $post->id) }}" method="POST">
            @csrf
            Like this blog? klik this ->  <button type="submit" class="text-red-500">❤️</button>
        </form>
    </div>
    <div class="m-5">
        <div class="flex">
            <h2 class="text-2xl font-bold text-gray-900">Comment <span>{{ $post->comments_count }}</span></h2>
        </div>
        <form action="{{ route('blog-comment', $post->id) }}" method="POST">
            @csrf
            <div>
                <input type="text" name="name" id="name" class="border p-2 w-full" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
            
            <div>
                <textarea name="comment" id="comment" class="border p-2 w-full" placeholder="Add comment...">{{ old('comment') }}</textarea>
                @error('comment')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
                @enderror
            </div>
        
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim</button>
        </form>
        

        @foreach ($comments as $comment)
            <div class="comment flex m-3">
                <div class="mr-3 w-10 h-10 flex items-center justify-center rounded-full bg-blue-500 text-white font-bold text-lg">
                    {{ strtoupper(substr($comment->name, 0, 1)) }}
                </div>
                <div class="">
                    <h4 class="text-2xl font-bold text-gray-900">{{ $comment->name }} <span class="text-sm font-normal">- {{ $comment->created_at->diffForHumans() }}</span></h4>
                    <p>{{ $comment->comment }}</p>
                </div>
            </div>
        @endforeach
    </div>