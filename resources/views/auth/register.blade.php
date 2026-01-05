<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }
        
        .gradient-bg {
            background: linear-gradient(-45deg, #FF6B6B 0%, #FFE66D 25%, #4ECDC4 50%, #556270 75%, #FF6B6B 100%);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        .animate-slide-in {
            animation: slideIn 0.6s ease-out;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        
        .input-focus:focus {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(78, 205, 196, 0.3);
        }
        
        .blob {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: float 8s ease-in-out infinite;
        }
        
        .blob-2 {
            animation-delay: 2s;
            animation-duration: 10s;
        }
        
        .blob-3 {
            animation-delay: 4s;
            animation-duration: 12s;
        }

        .step-indicator {
            transition: all 0.3s ease;
        }

        .step-indicator.active {
            transform: scale(1.1);
        }
    </style>
</head>
<body class="gradient-bg min-h-screen flex items-center justify-center p-4 relative overflow-hidden">
    
    <!-- Decorative Blobs -->
    <div class="absolute top-10 left-10 w-72 h-72 bg-yellow-300 opacity-20 rounded-full blur-3xl blob"></div>
    <div class="absolute bottom-10 right-10 w-96 h-96 bg-teal-300 opacity-20 rounded-full blur-3xl blob blob-2"></div>
    <div class="absolute top-1/2 right-1/4 w-64 h-64 bg-red-300 opacity-20 rounded-full blur-3xl blob blob-3"></div>
    
    <div class="w-full max-w-6xl relative z-10 animate-slide-in">
        <div class="grid md:grid-cols-5 gap-0 glass-effect rounded-3xl overflow-hidden shadow-2xl">
            
            <!-- Left Side - Branding (2 columns) -->
            <div class="md:col-span-2 bg-gradient-to-br from-teal-500 via-cyan-600 to-blue-600 p-10 text-white flex flex-col justify-between relative overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-40 h-40 bg-white opacity-10 rounded-full -mr-20 -mt-20"></div>
                <div class="absolute bottom-0 left-0 w-32 h-32 bg-white opacity-10 rounded-full -ml-16 -mb-16"></div>
                <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl"></div>
                
                <div class="relative z-10">
                    <!-- Logo -->
                    <div class="mb-8 animate-float">
                        <svg class="w-16 h-16 mb-4" viewBox="0 0 50 52" fill="white">
                            <path d="M49.626 11.564a.809.809 0 0 1 .028.209v10.972a.8.8 0 0 1-.402.694l-9.209 5.302V39.25c0 .286-.152.55-.4.694L20.42 51.01c-.044.025-.092.041-.14.058-.018.006-.035.017-.054.022a.805.805 0 0 1-.41 0c-.022-.006-.042-.018-.063-.026-.044-.016-.09-.03-.132-.054L.402 39.944A.801.801 0 0 1 0 39.25V6.334c0-.072.01-.142.028-.21.006-.023.02-.044.028-.067.015-.042.029-.085.051-.124.015-.026.037-.047.055-.071.023-.032.044-.065.071-.093.023-.023.053-.04.079-.06.029-.024.055-.05.088-.069h.001l9.61-5.533a.802.802 0 0 1 .8 0l9.61 5.533h.002c.032.02.059.045.088.068.026.02.055.038.078.06.028.029.048.062.072.094.017.024.04.045.054.071.023.04.036.082.052.124.008.023.022.044.028.068a.809.809 0 0 1 .028.209v20.559l8.008-4.611v-10.51c0-.07.01-.141.028-.208.007-.024.02-.045.028-.068.016-.042.03-.085.052-.124.015-.026.037-.047.054-.071.024-.032.044-.065.072-.093.023-.023.052-.04.078-.06.03-.024.056-.05.088-.069h.001l9.611-5.533a.801.801 0 0 1 .8 0l9.61 5.533c.034.02.06.045.09.068.025.02.054.038.077.06.028.029.048.062.072.094.018.024.04.045.054.071.023.039.036.082.052.124.009.023.022.044.028.068zm-1.574 10.718v-9.124l-3.363 1.936-4.646 2.675v9.124l8.01-4.611zm-9.61 16.505v-9.13l-4.57 2.61-13.05 7.448v9.216l17.62-10.144zM1.602 7.719v31.068L19.22 48.93v-9.214l-9.204-5.209-.003-.002-.004-.002c-.031-.018-.057-.044-.086-.066-.025-.02-.054-.036-.076-.058l-.002-.003c-.026-.025-.044-.056-.066-.084-.02-.027-.044-.05-.06-.078l-.001-.003c-.018-.03-.029-.066-.042-.1-.013-.03-.03-.058-.038-.09v-.001c-.01-.038-.012-.078-.016-.117-.004-.03-.012-.06-.012-.09v-.002-21.481L4.965 9.654 1.602 7.72zm8.81-5.994L2.405 6.334l8.005 4.609 8.006-4.61-8.006-4.608zm4.164 28.764l4.645-2.674V7.719l-3.363 1.936-4.646 2.675v20.096l3.364-1.937zM39.243 7.164l-8.006 4.609 8.006 4.609 8.005-4.61-8.005-4.608zm-.801 10.605l-4.646-2.675-3.363-1.936v9.124l4.645 2.674 3.364 1.937v-9.124zM20.02 38.33l11.743-6.704 5.87-3.35-8-4.606-9.211 5.303-8.395 4.833 7.993 4.524z"/>
                        </svg>
                        <h1 class="text-4xl font-bold mb-2">Join Us Today!</h1>
                        <p class="text-cyan-100">Create your account and start building</p>
                    </div>
                </div>
                
                <div class="relative z-10 space-y-6">
                    <h2 class="text-2xl font-semibold mb-4">Why Join Us?</h2>
                    
                    <!-- Benefits -->
                    <div class="space-y-4">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Powerful Tools</h3>
                                <p class="text-cyan-100 text-sm">Access to cutting-edge development tools and resources</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">Great Community</h3>
                                <p class="text-cyan-100 text-sm">Join thousands of developers worldwide</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-lg mb-1">24/7 Support</h3>
                                <p class="text-cyan-100 text-sm">Round-the-clock assistance when you need it</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-4 pt-6 border-t border-white/20">
                        <div class="text-center">
                            <div class="text-2xl font-bold">50K+</div>
                            <div class="text-xs text-cyan-100">Users</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold">100+</div>
                            <div class="text-xs text-cyan-100">Countries</div>
                        </div>
                        <div class="text-center">
                            <div class="text-2xl font-bold">4.9★</div>
                            <div class="text-xs text-cyan-100">Rating</div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Side - Register Form (3 columns) -->
            <div class="md:col-span-3 p-10 bg-white">
                <div class="max-w-lg mx-auto">
                    <!-- Progress Steps -->
                    

                    <h2 class="text-3xl font-bold text-gray-800 mb-2 text-center">Create Account</h2>
                    <p class="text-gray-600 mb-8 text-center">Fill in your details to get started</p>
                    
                    <form method="POST" action="{{ route('register') }}" class="space-y-5">
                        @csrf
                        
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                Full Name
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                </div>
                                <input 
                                    id="name" 
                                    type="text" 
                                    name="name" 
                                    value="{{ old('name') }}"
                                    required 
                                    autofocus 
                                    autocomplete="name"
                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-500 focus:ring-4 focus:ring-teal-100 transition-all duration-200 input-focus outline-none"
                                    placeholder="John Doe"
                                >
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        
                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                                Email Address
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"/>
                                    </svg>
                                </div>
                                <input 
                                    id="email" 
                                    type="email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                    required 
                                    autocomplete="username"
                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-500 focus:ring-4 focus:ring-teal-100 transition-all duration-200 input-focus outline-none"
                                    placeholder="john@example.com"
                                >
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        
                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                                Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                                    </svg>
                                </div>
                                <input 
                                    id="password" 
                                    type="password" 
                                    name="password" 
                                    required 
                                    autocomplete="new-password"
                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-500 focus:ring-4 focus:ring-teal-100 transition-all duration-200 input-focus outline-none"
                                    placeholder="Create a strong password"
                                >
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        
                        <!-- Confirm Password -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-semibold text-gray-700 mb-2">
                                Confirm Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <input 
                                    id="password_confirmation" 
                                    type="password" 
                                    name="password_confirmation" 
                                    required 
                                    autocomplete="new-password"
                                    class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-xl focus:border-teal-500 focus:ring-4 focus:ring-teal-100 transition-all duration-200 input-focus outline-none"
                                    placeholder="Confirm your password"
                                >
                            </div>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        
                        <!-- Terms & Conditions -->
                        <div class="flex items-start">
                            <input 
                                id="terms" 
                                type="checkbox" 
                                required
                                class="w-4 h-4 mt-1 text-teal-600 border-2 border-gray-300 rounded focus:ring-2 focus:ring-teal-500 cursor-pointer"
                            >
                            <label for="terms" class="ml-3 text-sm text-gray-600">
                                I agree to the 
                                <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold">Terms of Service</a> 
                                and 
                                <a href="#" class="text-teal-600 hover:text-teal-700 font-semibold">Privacy Policy</a>
                            </label>
                        </div>
                        
                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-teal-500 to-cyan-600 text-white py-3 rounded-xl font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200 focus:outline-none focus:ring-4 focus:ring-teal-300"
                        >
                            Create Account
                        </button>
                        
                        <!-- Divider -->
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                                <span class="px-4 bg-white text-gray-500">Or sign up with</span>
                            </div>
                        </div>
                        
                        
                        
                        
                        <!-- Login Link -->
                        <p class="text-center text-sm text-gray-600 pt-4">
                            Already have an account? 
                            <a href="{{ route('login') }}" class="font-semibold text-teal-600 hover:text-teal-700 transition-colors">
                                Sign in here
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>