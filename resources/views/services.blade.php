@extends('layouts.app')

@section('title', 'Hizmetlerimiz')

@section('content')
<section class="py-16 bg-base-200">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-primary mb-12">Hizmetlerimiz</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <figure class="px-10 pt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </figure>
                <div class="card-body">
                    <h3 class="card-title text-2xl font-semibold justify-center">Siber Güvenlik</h3>
                    <p class="text-center">Ağ güvenliğinden tehdit tespitine kadar işletmeniz için kapsamlı koruma sağlıyoruz.</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <figure class="px-10 pt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                    </svg>
                </figure>
                <div class="card-body">
                    <h3 class="card-title text-2xl font-semibold justify-center">Yazılım Geliştirme</h3>
                    <p class="text-center">İşletmenizin ihtiyaçlarına ve hedeflerine uygun özel yazılımlar tasarlıyoruz.</p>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <figure class="px-10 pt-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </figure>
                <div class="card-body">
                    <h3 class="card-title text-2xl font-semibold justify-center">BT Danışmanlığı</h3>
                    <p class="text-center">BT altyapınızı ve operasyonlarınızı optimize etmek için uzman tavsiyesi alın.</p>
                </div>
            </div>
        </div>

        <div class="mt-16 text-center">
            <a href="/contact" class="btn btn-primary btn-lg">Bizimle İletişime Geçin</a>
        </div>
    </div>
</section>
@endsection