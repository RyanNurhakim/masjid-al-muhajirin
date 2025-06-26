<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login Admin - Yayasan Masjid Al-Muhajirin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
</head>

<body class="h-full bg-gray-50" x-data="loginForm()">
    <div class="min-h-full flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Header -->
            <div class="text-center">
                <div class="flex justify-center">
                    <div class="w-16 h-16 bg-emerald-600 rounded-full flex items-center justify-center">
                        <i data-lucide="building" class="w-8 h-8 text-white"></i>
                    </div>
                </div>
                <h2 class="mt-6 text-3xl font-bold text-gray-900">
                    Admin Dashboard
                </h2>
                <p class="mt-2 text-sm text-gray-600">
                    Yayasan Masjid Al-Muhajirin
                </p>
            </div>

            <!-- Login Form -->
            <div class="bg-white py-8 px-6 shadow-lg rounded-lg">
                <form @submit.prevent="submitLogin" class="space-y-6">
                    <!-- Alert Messages -->
                    <div x-show="errorMessage" x-transition class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-md text-sm">
                        <div class="flex items-center">
                            <i data-lucide="alert-circle" class="w-4 h-4 mr-2"></i>
                            <span x-text="errorMessage"></span>
                        </div>
                    </div>

                    <div x-show="successMessage" x-transition class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-md text-sm">
                        <div class="flex items-center">
                            <i data-lucide="check-circle" class="w-4 h-4 mr-2"></i>
                            <span x-text="successMessage"></span>
                        </div>
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                            Email
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="mail" class="h-5 w-5 text-gray-400"></i>
                            </div>
                            <input
                                type="email"
                                id="email"
                                x-model="email"
                                required
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="admin@almuhajirin.org">
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                            Password
                        </label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i data-lucide="lock" class="h-5 w-5 text-gray-400"></i>
                            </div>
                            <input
                                :type="showPassword ? 'text' : 'password'"
                                id="password"
                                x-model="password"
                                required
                                class="block w-full pl-10 pr-10 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-emerald-500 focus:border-emerald-500"
                                placeholder="Masukkan password">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <button
                                    type="button"
                                    @click="showPassword = !showPassword"
                                    class="text-gray-400 hover:text-gray-600 focus:outline-none">
                                    <i :data-lucide="showPassword ? 'eye-off' : 'eye'" class="h-5 w-5"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input
                                id="remember-me"
                                type="checkbox"
                                x-model="rememberMe"
                                class="h-4 w-4 text-emerald-600 focus:ring-emerald-500 border-gray-300 rounded">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-700">
                                Ingat saya
                            </label>
                        </div>
                        <div class="text-sm">
                            <a href="#" class="font-medium text-emerald-600 hover:text-emerald-500">
                                Lupa password?
                            </a>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button
                            type="submit"
                            :disabled="isLoading"
                            :class="isLoading ? 'bg-gray-400 cursor-not-allowed' : 'bg-emerald-600 hover:bg-emerald-700'"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors cursor-pointer">
                            <span x-show="!isLoading" class="flex items-center">
                                <i data-lucide="log-in" class="w-4 h-4 mr-2"></i>
                                Masuk
                            </span>
                            <span x-show="isLoading" class="flex items-center">
                                <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Memproses...
                            </span>
                        </button>
                    </div>
                </form>

                <!-- Demo Credentials -->
                <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-md">
                    <h4 class="text-sm font-medium text-blue-800 mb-2">Demo Credentials:</h4>
                    <div class="text-sm text-blue-700 space-y-1">
                        <p><strong>Email:</strong> admin@almuhajirin.org</p>
                        <p><strong>Password:</strong> admin123</p>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center">
                <p class="text-sm text-gray-600">
                    © 2024 Yayasan Masjid Al-Muhajirin. All rights reserved.
                </p>
            </div>
        </div>
    </div>

    <script>
        function loginForm() {
            return {
                email: '',
                password: '',
                rememberMe: false,
                showPassword: false,
                isLoading: false,
                errorMessage: '',
                successMessage: '',

                submitLogin() {
                    this.isLoading = true;
                    this.errorMessage = '';
                    this.successMessage = '';

                    // Simulate API call
                    setTimeout(() => {
                        // Demo validation
                        if (this.email === 'admin@almuhajirin.org' && this.password === 'admin123') {
                            this.successMessage = 'Login berhasil! Mengalihkan ke dashboard...';

                            // Redirect to dashboard after success
                            setTimeout(() => {
                                window.location.href = '{{ route("admin.dashboard") }}';
                            }, 1500);
                        } else {
                            this.errorMessage = 'Email atau password salah. Silakan coba lagi.';
                        }

                        this.isLoading = false;
                    }, 1000);
                }
            }
        }

        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>

</html>