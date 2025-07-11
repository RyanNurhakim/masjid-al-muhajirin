@extends('layouts.app')

@section('title', 'Galeri Kegiatan - Masjid Al-Muhajirin')
@section('description',
    'Dokumentasi berbagai kegiatan dan momen berharga di Masjid Al-Muhajirin. Lihat foto-foto
    kegiatan keagamaan, sosial, pendidikan, dan pembangunan.')

    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

@section('content')
    <div class="min-h-screen bg-gray-50" x-data="galeriPage()">

        <!-- Hero Section -->
        <section class="bg-gradient-to-r from-emerald-800 to-emerald-600 py-16">
            <div class="container mx-auto px-4">
                <div class="text-center text-white">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Galeri Kegiatan</h1>
                    <p class="text-xl md:text-2xl opacity-90 mb-8">
                        Dokumentasi berbagai kegiatan dan momen berharga di Masjid Al-Muhajirin
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-2xl mx-auto">
                        <div class="relative flex-1">
                            <i data-lucide="search"
                                class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400 w-5 h-5"></i>
                            <input type="text" placeholder="Cari foto atau kegiatan..." x-model="searchQuery"
                                class="w-full pl-10 pr-4 py-2 rounded-md bg-white/90 border-white/20 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-white/50" />
                        </div>
                        <select x-model="selectedCategory"
                            class="px-4 py-2 rounded-md bg-white/90 border-white/20 text-gray-800 focus:outline-none focus:ring-2 focus:ring-white/50">
                            <option value="semua">Semua Kategori</option>
                            <option value="ibadah_dakwah">Ibadah & Dakwah</option>
                            <option value="pendidikan_agama">Pendidikan Agama</option>
                            <option value="kegiatan_sosial">Kegiatan Sosial</option>
                            <option value="kegiatan_remaja">Kegiatan Remaja</option>
                            <option value="pemakaman">Pemakaman</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Controls -->
        <section class="py-6 bg-white border-b">
            <div class="container mx-auto px-4">
                <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                    <div class="flex items-center space-x-4">
                        <span class="text-gray-600"
                            x-text="`Menampilkan ${filteredItems.length} dari ${galleryItems.length} foto`">
                            Menampilkan foto
                        </span>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-600">Tampilan:</span>
                            <div class="flex border rounded-lg overflow-hidden">
                                <button @click="viewMode = 'grid'"
                                    :class="viewMode === 'grid' ? 'bg-emerald-600 text-white' :
                                        'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                                    class="p-2 transition-colors">
                                    <i data-lucide="grid-3x3" class="w-4 h-4"></i>
                                </button>
                                <button @click="viewMode = 'list'"
                                    :class="viewMode === 'list' ? 'bg-emerald-600 text-white' :
                                        'bg-gray-100 text-gray-600 hover:bg-gray-200'"
                                    class="p-2 transition-colors">
                                    <i data-lucide="list" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Content -->
        <section class="py-8">
            <div class="container mx-auto px-4">
                <!-- No Results -->
                <div x-show="filteredItems.length === 0" class="text-center py-16">
                    <div class="w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="search" class="w-12 h-12 text-gray-400"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">Tidak ada foto ditemukan</h3>
                    <p class="text-gray-600">Coba ubah kata kunci pencarian atau kategori</p>
                </div>

                <!-- Grid View -->
                <div x-show="viewMode === 'grid' && filteredItems.length > 0"
                    class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <template x-for="item in filteredItems" :key="item.id">
                        <div class="relative bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300 group cursor-pointer"
                            @click="selectedImage = item">
                            <div class="relative overflow-hidden">
                                <img :src="item.image" :alt="item.title"
                                    class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300" />
                                <div
                                    class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                                    <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <i data-lucide="eye" class="w-8 h-8 text-white"></i>
                                    </div>
                                </div>
                                <div class="absolute top-3 left-3">
                                    <span class="px-2 py-1 rounded-full text-xs font-medium"
                                        :class="getCategoryColor(item.category)"
                                        x-text="getCategoryLabel(item.category)"></span>
                                </div>
                            </div>
                            <div class="p-4 pb-10">
                                <h3 class="font-semibold text-gray-800 mb-2 line-clamp-2" x-text="item.title"></h3>
                                <p class="text-sm text-gray-600 mb-3 line-clamp-2" x-text="item.description"></p>
                                <div class="absolute bottom-4 left-4 flex items-center space-x-1 text-xs text-gray-500">
                                    <i data-lucide="calendar-days" class="w-3 h-3"></i>
                                    <span x-text="formatDate(item.date)"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- List View -->
                <div x-show="viewMode === 'list' && filteredItems.length > 0" class="space-y-4">
                    <template x-for="item in filteredItems" :key="item.id">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 cursor-pointer"
                            @click="selectedImage = item">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-64 flex-shrink-0">
                                    <img :src="item.image" :alt="item.title"
                                        class="w-full h-48 md:h-full object-cover" />
                                </div>
                                <div class="flex-1 p-6">
                                    <div class="flex items-start justify-between mb-3">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-2 mb-2">
                                                <span class="px-2 py-1 rounded-full text-xs font-medium"
                                                    :class="getCategoryColor(item.category)"
                                                    x-text="getCategoryLabel(item.category)"></span>
                                                <span class="text-sm text-gray-500" x-text="formatDate(item.date)"></span>
                                            </div>
                                            <h3 class="text-xl font-semibold text-gray-800 mb-2" x-text="item.title"></h3>
                                            <p class="text-gray-600 mb-4" x-text="item.description"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

            </div>
        </section>

        <!-- Image Modal -->
        <div x-show="selectedImage" class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 p-2 sm:p-4"
            x-cloak>
            <div
                class="bg-white rounded-lg w-full max-w-xs sm:max-w-md md:max-w-2xl lg:max-w-4xl max-h-[95vh] sm:max-h-[90vh] overflow-hidden">
                <div class="p-3 sm:p-4 border-b">
                    <!-- Mobile Layout -->
                    <div class="block sm:hidden">
                        <div class="flex items-start justify-between mb-3">
                            <h3 class="text-base font-semibold text-gray-800 pr-2 flex-1 leading-tight"
                                x-text="selectedImage?.title"></h3>
                            <button @click="selectedImage = null"
                                class="inline-flex items-center px-2 py-1 border border-gray-300 rounded-md text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 flex-shrink-0 ml-2">
                                <i data-lucide="x" class="w-3 h-3"></i>
                            </button>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button
                                class="inline-flex items-center px-3 py-1 border border-gray-300 rounded-md text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                <i data-lucide="download" class="w-3 h-3 mr-2"></i>
                                <span>Download</span>
                            </button>
                            <button
                                class="inline-flex items-center px-3 py-1 border border-gray-300 rounded-md text-xs font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                <i data-lucide="share-2" class="w-3 h-3 mr-2"></i>
                                <span>Share</span>
                            </button>
                        </div>
                    </div>

                    <!-- Desktop Layout -->
                    <div class="hidden sm:block">
                        <div class="flex items-start justify-between mb-2">
                            <h3 class="text-lg font-semibold text-gray-800 pr-4 flex-1 leading-tight"
                                x-text="selectedImage?.title"></h3>
                            <div class="flex items-center space-x-2 flex-shrink-0">
                                <button
                                    class="inline-flex items-center px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                    <i data-lucide="download" class="w-4 h-4 mr-2"></i>
                                    Download
                                </button>
                                <button
                                    class="inline-flex items-center px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                    <i data-lucide="share-2" class="w-4 h-4 mr-2"></i>
                                    Share
                                </button>
                                <button @click="selectedImage = null"
                                    class="inline-flex items-center px-3 py-1 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500">
                                    <i data-lucide="x" class="w-4 h-4"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-3 sm:p-4 overflow-y-auto max-h-[calc(95vh-4rem)] sm:max-h-[calc(90vh-4rem)]">
                    <div class="relative mb-3 sm:mb-4">
                        <img :src="selectedImage?.image" :alt="selectedImage?.title"
                            class="w-full h-auto max-h-[40vh] sm:max-h-[50vh] md:max-h-[60vh] object-contain rounded-lg" />
                    </div>
                    <div class="space-y-2 sm:space-y-3">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="px-2 py-1 rounded-full text-xs font-medium"
                                :class="getCategoryColor(selectedImage?.category)"
                                x-text="getCategoryLabel(selectedImage?.category)"></span>
                            <span class="text-xs sm:text-sm text-gray-500"
                                x-text="formatDate(selectedImage?.date)"></span>
                        </div>
                        <p class="text-sm sm:text-base text-gray-600" x-text="selectedImage?.description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function galeriPage() {
            return {
                isMenuOpen: false,
                viewMode: 'grid',
                selectedCategory: 'semua',
                searchQuery: '',
                selectedImage: null,

                galleryItems: [{
                        id: 1,
                        title: "Qurban 1446 H / 2025 M",
                        category: "ibadah_dakwah",
                        date: "2024-12-15",
                        image: "/images/qurban2.jpg",
                        description: "Pelaksanaan pemotongan hewan qurban oleh ketua yayasan.",
                    },
                    {
                        id: 2,
                        title: "Kajian Kamis Pagi",
                        category: "ibadah_dakwah",
                        date: "2024-04-10",
                        image: "/images/kajian-kamis-pagi-1.jpg",
                        description: "Kegiatan kajian kamis pagi",
                    },
                    {
                        id: 3,
                        title: "TPA Sore - Pembelajaran Al-Quran",
                        category: "pendidikan_agama",
                        date: "2024-11-20",
                        image: "/images/tpa-1.jpg",
                        description: "Kegiatan pembelajaran Al-Quran untuk anak-anak di TPA sore",
                    },
                    {
                        id: 4,
                        title: "Layanan Ambulance Gratis",
                        category: "kegiatan_sosial",
                        date: "2024-10-25",
                        image: "/images/layanan-ambulance-1.jpg",
                        description: "Layanan ambulance gratis 24 jam",
                    },
                    {
                        id: 5,
                        title: "Pemakaman Al-Muhajirin",
                        category: "pemakaman",
                        date: "2024-12-08",
                        image: "/images/pemakaman-1.jpg",
                        description: "Lokasi Pemakaman Al-Muhajirin",
                    },
                ],

                get filteredItems() {
                    return this.galleryItems.filter(item => {
                        const matchesCategory = this.selectedCategory === 'semua' || item.category === this
                            .selectedCategory;
                        const matchesSearch = item.title.toLowerCase().includes(this.searchQuery
                                .toLowerCase()) ||
                            item.description.toLowerCase().includes(this.searchQuery.toLowerCase());
                        return matchesCategory && matchesSearch;
                    });
                },

                formatDate(dateString) {
                    const date = new Date(dateString);
                    return date.toLocaleDateString('id-ID', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric',
                    });
                },

                getCategoryColor(category) {
                    const colors = {
                        ibadah_dakwah: 'bg-emerald-100 text-emerald-800',
                        pendidikan_agama: 'bg-purple-100 text-purple-800',
                        kegiatan_sosial: 'bg-yellow-100 text-yellow-800',
                        kegiatan_remaja: 'bg-blue-100 text-blue-800',
                        pemakaman: 'bg-gray-100 text-gray-800',
                    };
                    return colors[category] || 'bg-gray-100 text-gray-800';
                },

                getCategoryLabel(category) {
                    const labels = {
                        ibadah_dakwah: 'Ibadah & Dakwah',
                        pendidikan_agama: 'Pendidikan Agama',
                        kegiatan_sosial: 'Kegiatan Sosial',
                        kegiatan_remaja: 'Kegiatan Remaja',
                        pemakaman: 'Pemulasaraan Jenazah & Pemakaman',
                    };
                    return labels[category] || category;
                }
            }
        }
    </script>
@endsection
