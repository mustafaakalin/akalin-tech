@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<section class="py-16 bg-white">
    <div class="container mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">About Akalan Tech</h2>
        <p class="text-lg md:text-xl text-center mb-8">We are a leading software and cybersecurity company, committed to delivering high-quality solutions to our clients. With years of experience in the field, we help businesses safeguard their operations and drive innovation through technology.</p>
        <div class="flex justify-center">
            <img src="/images/team.jpg" alt="Our Team" class="rounded-lg shadow-lg w-full md:w-1/2">
        </div>
    </div>
</section>
@endsection
