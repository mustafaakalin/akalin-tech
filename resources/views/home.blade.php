@extends('layouts.app')

@section('title', 'Akalan Tech - Yenilikçi Yazılım ve Siber Güvenlik Çözümleri')

@section('content')
<!-- Hero Section -->
<section class="relative bg-base-200 overflow-hidden min-h-screen flex items-center">
    <!-- Animated background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-r from-primary to-secondary opacity-20"></div>
        <div class="absolute inset-0 bg-grid-pattern opacity-10"></div>
        <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8 border-primary"></div>
        <div class="absolute -bottom-40 -right-0 w-96 h-96 border-4 rounded-full border-opacity-30 border-t-8 border-secondary"></div>
        <div class="absolute -top-40 -right-0 w-72 h-72 border-4 rounded-full border-opacity-30 border-t-8 border-primary"></div>
        <div class="absolute -top-20 -left-20 w-60 h-60 border-4 rounded-full border-opacity-30 border-t-8 border-secondary"></div>
    </div>

    <div class="container mx-auto px-4 z-10">
        <div class="flex flex-col lg:flex-row items-center">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 text-base-content">
                    <span class="text-primary">Yenilikçi</span> Çözümlerle<br>
                    <span class="text-secondary">Geleceğe</span> Güvenle
                </h1>
                <p class="text-xl mb-8 text-base-content opacity-80">
                    İşletmenizi siber tehditlere karşı koruyun, yazılımlarınızı optimize edin ve teknoloji ile büyüyün.
                </p>
                <div class="space-x-4">
                    <a href="/services" class="btn btn-primary btn-lg">Hizmetlerimiz</a>
                    <a href="/contact" class="btn btn-outline btn-lg">Bize Ulaşın</a>
                </div>
            </div>
            <div class="lg:w-1/2 mt-12 lg:mt-0">
                <div class="relative">
                    <img src="/images/hero-image.png" alt="Akalin Tech" class="w-full max-w-2xl mx-auto">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Highlighted Services -->
<section class="py-16 bg-base-200">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">Neler Sunuyoruz?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="card-body items-center text-center">
                    <div class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="card-title text-2xl mt-4">Siber Güvenlik</h3>
                    <p>En son güvenlik teknolojileriyle sistemlerinizi koruyoruz.</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="card-body items-center text-center">
                    <div class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="card-title text-2xl mt-4">Yazılım Geliştirme</h3>
                    <p>İşletmenizi verimli ve güvenli bir şekilde büyütecek özel yazılımlar.</p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="card-body items-center text-center">
                    <div class="text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <h3 class="card-title text-2xl mt-4">BT Danışmanlığı</h3>
                    <p>BT altyapınızı ve süreçlerinizi optimize etmek için uzman rehberlik.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-16 bg-base-200">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl md:text-5xl font-bold text-center text-primary mb-12">Müşteri Yorumları</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="card-body">
                    <div class="flex items-center mb-4">
                        <div class="avatar">
                            <div class="w-12 rounded-full">
                                <img src="https://i.pravatar.cc/150?img=1" alt="Ahmet Yılmaz">
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold">Ahmet Yılmaz</h3>
                            <p class="text-sm text-base-content/70">ABC Şirketi</p>
                        </div>
                    </div>
                    <p class="text-base-content/80">"Akalın Tech ile çalışmak harika bir deneyimdi. Profesyonel ve yenilikçi çözümleri ile işimizi bir üst seviyeye taşıdılar."</p>
                    <div class="mt-4 flex items-center">
                        @for($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="card-body">
                    <div class="flex items-center mb-4">
                        <div class="avatar">
                            <div class="w-12 rounded-full">
                                <img src="https://i.pravatar.cc/150?img=2" alt="Ayşe Kaya">
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold">Ayşe Kaya</h3>
                            <p class="text-sm text-base-content/70">XYZ Teknoloji</p>
                        </div>
                    </div>
                    <p class="text-base-content/80">"Siber güvenlik konusundaki uzmanlıkları gerçekten etkileyici. Şirketimizin güvenliğini sağlamada büyük katkıları oldu."</p>
                    <div class="mt-4 flex items-center">
                        @for($i = 0; $i < 4; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <div class="card bg-base-100 shadow-xl hover:shadow-2xl transition-shadow duration-300">
                <div class="card-body">
                    <div class="flex items-center mb-4">
                        <div class="avatar">
                            <div class="w-12 rounded-full">
                                <img src="https://i.pravatar.cc/150?img=3" alt="Mehmet Demir">
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="font-semibold">Mehmet Demir</h3>
                            <p class="text-sm text-base-content/70">LMN Yazılım</p>
                        </div>
                    </div>
                    <p class="text-base-content/80">"Özel yazılım geliştirme projemizde Akalın Tech ekibi ile çalışmak çok verimli oldu. Zamanında ve bütçe dahilinde mükemmel bir ürün ortaya çıkardılar."</p>
                    <div class="mt-4 flex items-center">
                        @for($i = 0; $i < 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2 .8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="bg-primary text-primary-content py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-4">İşletmenizi Güvence Altına Almaya Hazır mısınız?</h2>
        <p class="text-lg mb-8">Size en üst düzey güvenlik ve performans sağlamamıza izin verin.</p>
        <a href="/contact" class="btn btn-secondary btn-lg">Bize Ulaşın</a>
    </div>
</section>
@endsection