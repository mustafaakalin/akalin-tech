@extends('layouts.app')

@section('title', 'Projelerimiz')

@section('content')
<section class="py-16 bg-base-200">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Projelerimiz</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 group">
                <figure class="relative overflow-hidden">
                    <img src="{{ $project->image }}" alt="{{ $project->name }}" class="w-full h-64 object-cover transition-transform duration-300 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <a href="{{ route('projectdetail', $project->id) }}" class="btn btn-primary">Detayları Gör</a>
                    </div>
                </figure>
                <div class="card-body">
                    <h3 class="card-title text-2xl mb-2">{{ $project->name }}</h3>
                    <p class="text-base-content opacity-70">{{ Str::limit($project->description, 100) }}</p>
                    <div class="card-actions justify-end mt-4">
                        <span class="badge badge-outline">{{ $project->status }}</span>
                        <span class="badge badge-outline">{{ $project->client }}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        
    </div>
</section>
@endsection