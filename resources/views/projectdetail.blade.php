@extends('layouts.app')

@section('title', $project->name)

@section('content')
<section class="py-16 ">
    <div class="container mx-auto">
        <h2 class="text-4xl font-bold text-center  mb-8">{{ $project->title }}</h2>
        
        <div class="flex justify-center mb-8">
            <img src="{{ $project->image }}" alt="{{ $project->name }}" class="w-full h-96 object-cover rounded-lg shadow-2xl transition-transform duration-300 transform hover:scale-105">
        </div>
        
        <div class=" p-8 rounded-lg shadow-2xl transition-shadow duration-300 hover:shadow-2xl">
            <h3 class="text-3xl font-semibold mb-4">Proje Detayları</h3>
            <p class="text-lg  mb-4"><strong>Açıklama:</strong> {!! nl2br(e($project->description)) !!}</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class=" p-4 rounded-lg shadow transition-shadow duration-300 hover:shadow-2xl hover:backdrop-blur-sm">
                    <p class="font-semibold ">Başlangıç Tarihi:</p>
                    <p class="text-lg ">{{ \Carbon\Carbon::parse($project->start_date)->format('d M, Y') }}</p>
                </div>
                <div class=" p-4 rounded-lg shadow transition-shadow duration-300 hover:shadow-2xl hover:backdrop-blur-sm">
                    <p class="font-semibold ">Bitiş Tarihi:</p>
                    <p class="text-lg ">{{ \Carbon\Carbon::parse($project->end_date)->format('d M, Y') }}</p>
                </div>
                <div class=" p-4 rounded-lg shadow transition-shadow duration-300 hover:shadow-2xl hover:backdrop-blur-sm">
                    <p class="font-semibold ">Durum:</p>
                    <p class="text-lg ">{{ ucfirst($project->status) }}</p>
                </div>
                <div class=" p-4 rounded-lg shadow transition-shadow duration-300 hover:shadow-2xl hover:backdrop-blur-sm">
                    <p class="font-semibold ">Müşteri:</p>
                    <p class="text-lg ">{{ $project->client }}</p>
                </div>
            </div>
            
            <div class="mt-6">
                <p class="font-semibold ">Proje Linki:</p>
                <a href="{{ $project->link }}" class="text-blue-500 hover:underline" target="_blank">İncele</a>
            </div>
        </div>

        <div class="mt-12 text-center">
            <a href="/projects" class="btn btn-secondary hover:shadow-lg transition duration-300">Projeler Listesine Dön</a>
        </div>
    </div>
</section>
@endsection