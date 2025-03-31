@vite('resources/css/app.css')
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