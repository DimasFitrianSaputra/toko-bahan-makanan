<nav x-data="{ mobileSidebar: false }" x-init="$watch('mobileSidebar', value => { if(value) document.body.style.overflow = 'hidden'; else document.body.style.overflow = ''; })" class="relative z-50">
    <aside class="hidden lg:flex fixed inset-y-0 left-0 w-72 flex-col bg-slate-900 text-slate-100 border-r border-slate-800">
        <!-- Header Branding -->
        <div class="px-6 py-6 border-b border-slate-800">
            <div class="flex items-center gap-3 mb-2">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-emerald-400 to-emerald-600 shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-sm font-bold tracking-tight text-white">Toko Bahan</p>
                    <p class="text-xs text-emerald-400 font-medium">Makanan</p>
                </div>
            </div>
            <p class="text-xs text-slate-400 mt-2 px-1">Modern POS System</p>
        </div>

        <!-- Menu -->
        <div class="flex-1 overflow-y-auto px-4 py-5">
            <div class="space-y-2">
                <!-- MENU ADMIN -->
                @if(auth()->user()->role === 'admin')
                    <div class="mb-3">
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-500 px-3 mb-2">Menu Admin</p>
                    </div>

                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('dashboard') || request()->routeIs('dashboard.admin') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 16l-7-4m0 0V5m7 4l7-4"></path>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- Produk -->
                    <a href="{{ route('products.index') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('products.*') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m0 0l8-4m0 0l8 4M4 7v10a1 1 0 001 1h14a1 1 0 001-1V7m-8-4v4"></path>
                        </svg>
                        <span>Produk</span>
                    </a>

                    <!-- Kelola Stok -->
                    <a href="{{ route('stok.index') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('stok.*') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                        <span>Kelola Stok</span>
                    </a>

                    <!-- Laporan -->
                    <a href="{{ route('laporan.index') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('laporan.*') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span>Laporan</span>
                    </a>

                    <!-- Riwayat Transaksi -->
                    <a href="{{ route('transaksi.history') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('transaksi.history') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Riwayat</span>
                    </a>

                <!-- MENU KASIR -->
                @elseif(auth()->user()->role === 'kasir')
                    <div class="mb-3">
                        <p class="text-xs font-bold uppercase tracking-wider text-slate-500 px-3 mb-2">Menu Kasir</p>
                    </div>

                    <!-- Dashboard -->
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('dashboard') || request()->routeIs('dashboard.kasir') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 16l-7-4m0 0V5m7 4l7-4"></path>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <!-- Transaksi POS -->
                    <a href="{{ route('transaksi.index') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('transaksi.index', 'transaksi.show', 'transaksi.checkout') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 8m10 0l2-8m0 0h2"></path>
                        </svg>
                        <span>Transaksi POS</span>
                    </a>

                    <!-- Riwayat Saya -->
                    <a href="{{ route('transaksi.history') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('transaksi.history') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>Riwayat Saya</span>
                    </a>
                @endif

                <!-- Profil (untuk semua role) -->
                <div class="mt-6 border-t border-slate-700 pt-4">
                    <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 rounded-lg px-4 py-2.5 text-sm font-medium transition {{ request()->routeIs('profile.*') ? 'bg-emerald-600 text-white shadow-md shadow-emerald-600/20' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        <span>Profil</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Footer User Info -->
        <div class="border-t border-slate-800 px-4 py-4">
            <div class="mb-3 rounded-lg bg-slate-800/50 px-4 py-3">
                <p class="font-semibold text-slate-100 truncate text-sm">{{ Auth::user()->name }}</p>
                <p class="mt-2 inline-block rounded-full bg-emerald-500/20 px-2.5 py-1 text-xs font-medium text-emerald-300 capitalize">
                    {{ Auth::user()->role === 'admin' ? 'Administrator' : 'Kasir' }}
                </p>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-lg bg-slate-800 px-3 py-2.5 text-sm font-medium text-slate-200 transition hover:bg-slate-700 hover:text-white">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                    <span>Logout</span>
                </button>
            </form>
        </div>
    </aside>

    <!-- Mobile Header -->
    <div class="lg:hidden fixed top-0 left-0 right-0 z-40 flex h-14 items-center justify-between bg-white px-4 py-2 border-b border-slate-200 shadow-sm">
        <button @click="mobileSidebar = true; document.body.classList.add('mobile-sidebar-open')" class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-slate-100 text-slate-700 hover:bg-slate-200 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <div class="flex items-center gap-2 font-bold text-slate-900">
            <div class="flex h-7 w-7 items-center justify-center rounded-md bg-emerald-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
            <span class="text-sm">Toko Bahan</span>
        </div>
        <div class="w-9"></div> <!-- Spacer -->
    </div>

    <!-- Mobile Sidebar -->
    <div x-show="mobileSidebar" x-cloak class="lg:hidden relative z-50">
        <div x-show="mobileSidebar" x-transition.opacity class="fixed inset-0 bg-black/50" @click="mobileSidebar = false; document.body.classList.remove('mobile-sidebar-open')"></div>
        <div x-show="mobileSidebar" 
             x-transition:enter="transform transition-transform duration-300 ease-in-out" 
             x-transition:enter-start="-translate-x-full" 
             x-transition:enter-end="translate-x-0" 
             x-transition:leave="transform transition-transform duration-300 ease-in-out" 
             x-transition:leave-start="translate-x-0" 
             x-transition:leave-end="-translate-x-full" 
             class="fixed inset-y-0 left-0 w-64 max-w-[260px] overflow-y-auto bg-slate-900 border-r border-slate-800 flex flex-col shadow-2xl">
            <!-- Header -->
            <div class="flex items-center justify-between h-16 px-4 border-b border-slate-800">
                <div class="flex items-center gap-2">
                    <x-application-logo class="h-7 w-7 text-emerald-500" />
                    <div>
                        <p class="text-xs font-bold text-white">Toko Bahan</p>
                        <p class="text-xs text-slate-400">Makanan</p>
                    </div>
                </div>
                <button @click="mobileSidebar = false; document.body.classList.remove('mobile-sidebar-open')" class="inline-flex h-10 w-10 items-center justify-center rounded-lg bg-slate-800 text-slate-200 hover:bg-slate-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Menu -->
            <div class="flex-1 overflow-y-auto px-2 py-3">
                <div class="space-y-1">
                    <!-- MENU ADMIN -->
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('dashboard') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 16l-7-4m0 0V5m7 4l7-4"></path></svg>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('products.index') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('products.*') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m0 0l8-4m0 0l8 4M4 7v10a1 1 0 001 1h14a1 1 0 001-1V7m-8-4v4"></path></svg>
                            <span>Produk</span>
                        </a>
                        <a href="{{ route('stok.index') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('stok.*') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M7 11h10M9 15h6M6 5v14a2 2 0 002 2h8a2 2 0 002-2V5M6 5h12"></path></svg>
                            <span>Kelola Stok</span>
                        </a>
                        <a href="{{ route('laporan.index') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('laporan.*') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                            <span>Laporan</span>
                        </a>
                        <a href="{{ route('transaksi.history') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('transaksi.history') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Riwayat</span>
                        </a>

                    <!-- MENU KASIR -->
                    @elseif(auth()->user()->role === 'kasir')
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('dashboard') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-3m0 0l7-4 7 4M5 9v10a1 1 0 001 1h12a1 1 0 001-1V9m-9 16l-7-4m0 0V5m7 4l7-4"></path></svg>
                            <span>Dashboard</span>
                        </a>
                        <a href="{{ route('transaksi.index') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('transaksi.index') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 8m10 0l2-8m0 0h2"></path></svg>
                            <span>Transaksi POS</span>
                        </a>
                        <a href="{{ route('transaksi.history') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('transaksi.history') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Riwayat Saya</span>
                        </a>
                    @endif

                    <!-- Profil -->
                    <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 rounded-lg px-3 py-2 text-sm font-medium transition {{ request()->routeIs('profile.*') ? 'bg-emerald-600 text-white' : 'text-slate-300 hover:bg-slate-800' }}">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        <span>Profil</span>
                    </a>
                </div>
            </div>

            <!-- Footer -->
            <div class="border-t border-slate-800 px-2 py-3">
                <div class="mb-2 rounded-lg bg-slate-800/50 px-3 py-2 text-sm">
                    <p class="font-semibold text-slate-100 text-xs truncate">{{ Auth::user()->name }}</p>
                    <p class="mt-1 inline-block rounded-full bg-emerald-500/20 px-2 py-0.5 text-xs font-medium text-emerald-300 capitalize">{{ Auth::user()->role }}</p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex w-full items-center justify-center gap-2 rounded-lg bg-slate-800 px-3 py-2 text-xs font-medium text-slate-200 transition hover:bg-slate-700">
                        <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

</nav>
