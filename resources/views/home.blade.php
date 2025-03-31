@vite('resources/css/app.css')

@if (session('success'))
    <div class="bg-green-500 text-white p-3 rounded mb-4">
        {{ session('success') }}
    </div>
@endif

<h1 class="text-4xl font-bold text-gray-900">My Portfolio</h1>
@foreach($projects as $project)
    <div class="card m-5 border-b pb-3">
        <div class="m-1 flex">
            <img src="{{ $project->image1 }}" alt="image1">
            <img src="{{ $project->image2 }}" alt="image1">
            <img src="{{ $project->image3 }}" alt="image1">
        </div>
        <h3 class="text-1xl font-bold text-gray-900">{{ $project->category}}</h3>
        <h2 class="text-2xl font-bold text-gray-900">{{ $project->title }}</h2>
        <p>{{ $project->description }}</p>
        <a href="{{ $project->repository_url }}" target="_blank">See Repository</a>
    </div>
@endforeach

<a href="" class="text-blue-600">See All My Works ></a>

<h1 class="text-4xl font-bold text-gray-900">My Blog</h1>
@foreach($posts as $post)
    <div class="card m-5 border-b pb-3">
        <div class="m-1 flex">
            <img src="{{ $post->cover_image }}" alt="image Cover">
        </div>
        <p>❤️ {{ $post->likes_count }} | 💬 {{ $post->comments_count }}</p>
        <h3 class="text-1xl font-bold text-gray-900">{{ $post->category}}</h3>
        <h2 class="text-2xl font-bold text-gray-900">{{ $post->title }}</h2>
    </div>
@endforeach
<a href="" class="text-blue-600">See All My Blogs ></a>
<form action="{{ route('message') }}" method="POST">
    @csrf
    <div>
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" class="border p-2 w-full">
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="border p-2 w-full">
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="message">Pesan:</label>
        <textarea name="message" id="message" class="border p-2 w-full"></textarea>
        @error('message')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Kirim</button>
</form>
