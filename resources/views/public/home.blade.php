<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FakeOpenData - Open Government Data</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        border: 'hsl(220, 13%, 91%)',
                        input: 'hsl(220, 13%, 91%)',
                        ring: 'hsl(217, 91%, 60%)',
                        background: 'hsl(0, 0%, 100%)',
                        foreground: 'hsl(220, 13%, 20%)',
                        primary: {
                            DEFAULT: 'hsl(217, 91%, 60%)',
                            foreground: 'hsl(0, 0%, 100%)',
                        },
                        secondary: {
                            DEFAULT: 'hsl(280, 85%, 65%)',
                            foreground: 'hsl(0, 0%, 100%)',
                        },
                        muted: {
                            DEFAULT: 'hsl(220, 14%, 96%)',
                            foreground: 'hsl(220, 9%, 46%)',
                        },
                        accent: {
                            DEFAULT: 'hsl(280, 85%, 65%)',
                            foreground: 'hsl(0, 0%, 100%)',
                        },
                        card: {
                            DEFAULT: 'hsl(0, 0%, 100%)',
                            foreground: 'hsl(220, 13%, 20%)',
                        },
                    },
                    borderRadius: {
                        lg: '0.625rem',
                        md: 'calc(0.625rem - 2px)',
                        sm: 'calc(0.625rem - 4px)',
                    },
                }
            }
        }
    </script>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-background text-foreground">
    <!-- Header -->
    <header class="sticky top-0 z-50 w-full border-b bg-white/95 backdrop-blur">
        <div class="container px-4 mx-auto">
            <div class="flex items-center justify-between h-16">
                <a href="/" class="flex items-center space-x-2">
                    <div class="flex items-center justify-center w-10 h-10 text-white rounded-lg bg-primary">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                        </svg>
                    </div>
                    <div class="hidden md:block">
                        <h1 class="text-xl font-bold">FakeOpenData Portal</h1>
                        <p class="text-xs text-muted-foreground">Open Government Data</p>
                    </div>
                </a>

                <!-- Navbar -->
            <button id="mobile-menu-button" class="p-2 md:hidden">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>

            <nav class="items-center hidden space-x-6 md:flex">
                <a href="/" class="text-sm font-medium transition-colors hover:text-primary">Home</a>
                <a href="/datasets" class="text-sm font-medium transition-colors hover:text-primary">Datasets</a>
                <a href="/visualizations" class="text-sm font-medium transition-colors hover:text-primary">Visualizations</a>
                <a href="apidocs" class="text-sm font-medium transition-colors hover:text-primary">API Docs</a>
                <a href="about" class="text-sm font-medium transition-colors hover:text-primary">About</a>
            </nav>

            <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-md">
                <nav class="flex flex-col p-4 space-y-2">
                    <a href="/" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">Home</a>
                    <a href="/datasets" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">Datasets</a>
                    <a href="/visualizations" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">Visualizations</a>
                    <a href="apidocs" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">API Docs</a>
                    <a href="about" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-gray-100">About</a>
                </nav>
            </div>

            <div class="items-center hidden space-x-2 lg:flex"></div>
            </div>
        </div>
    </header>

    <div class="flex flex-col min-h-screen">
        <!-- Hero Section -->
        <section class="relative py-20 bg-gradient-to-br from-primary/10 via-secondary/5 to-background md:py-32">
            <div class="container px-4 mx-auto">
                <div class="max-w-3xl mx-auto text-center">
                    <div class="inline-flex items-center px-4 py-2 mb-6 text-sm border rounded-full bg-background">
                        <svg class="w-4 h-4 mr-2 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                        <span>Open Government Data Initiative</span>
                    </div>
                    <h1 class="mb-6 text-4xl font-bold tracking-tight sm:text-5xl md:text-6xl">
                        Discover & Access
                        <span class="block text-transparent bg-gradient-to-r from-primary to-secondary bg-clip-text">Public Open Data</span>
                    </h1>
                    <p class="mb-8 text-lg text-muted-foreground md:text-xl">
                        Empowering citizens, researchers, and developers with transparent access to government data.
                        Explore hundreds of datasets across various sectors.
                    </p>
                    <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
                        <div class="relative flex-1 sm:max-w-md">
                            <svg class="absolute w-5 h-5 -translate-y-1/2 left-3 top-1/2 text-muted-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <input type="search" placeholder="Search datasets..." class="w-full h-12 pl-10 pr-3 text-base border rounded-md border-input focus:outline-none focus:ring-2 focus:ring-ring"/>
                        </div>
                        <a href="/datasets" class="inline-flex items-center justify-center h-12 px-6 text-base font-medium transition-colors rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                            Browse All Datasets
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Dashboard -->
        <section class="py-12 border-b bg-muted/40">
            <div class="container px-4 mx-auto">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-4">
                    <!-- Stat Card 1 -->
                    <div class="transition-all border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-md hover:border-primary/30">
                        <div class="p-6 pb-2">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-muted-foreground">Total Datasets</p>
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold">342</div>
                        </div>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="transition-all border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-md hover:border-secondary/30">
                        <div class="p-6 pb-2">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-muted-foreground">API Endpoints</p>
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold">156</div>
                        </div>
                    </div>

                    <!-- Stat Card 3 -->
                    <div class="transition-all border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-md hover:border-primary/30">
                        <div class="p-6 pb-2">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-muted-foreground">Total Downloads</p>
                                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold">2.4M</div>
                        </div>
                    </div>

                    <!-- Stat Card 4 -->
                    <div class="transition-all border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-md hover:border-secondary/30">
                        <div class="p-6 pb-2">
                            <div class="flex items-center justify-between">
                                <p class="text-sm text-muted-foreground">Active Users</p>
                                <svg class="w-4 h-4 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold">18.5K</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Datasets -->
        <section class="py-16">
            <div class="container px-4 mx-auto">
                <div class="flex flex-col items-center justify-between gap-4 mb-12 md:flex-row">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight">Featured Datasets</h2>
                        <p class="mt-2 text-muted-foreground">Most popular and recently updated datasets</p>
                    </div>
                    <a href="/datasets" class="inline-flex items-center justify-center px-4 py-2 text-sm font-medium transition-colors border rounded-md border-primary text-primary bg-background hover:bg-primary/10">
                        View All Datasets
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Dataset Card 1 -->
                    <div class="flex flex-col transition-shadow border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-lg hover:border-primary/50">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <span class="inline-flex items-center rounded-md bg-primary/10 px-2.5 py-0.5 text-xs font-semibold text-primary mb-2">Demographics</span>
                                <div class="flex gap-1">
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">CSV</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">JSON</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">XML</span>
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl font-semibold">Population Demographics 2024</h3>
                            <p class="mb-4 text-sm text-muted-foreground">Comprehensive demographic data including age distribution, gender ratios, and population density across all districts.</p>
                        </div>
                        <div class="flex-1 p-6 pt-0">
                            <div class="space-y-2 text-sm text-muted-foreground">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Size: 2.4 MB</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    <span>15,420 downloads</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Updated: 2024-01-15</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 p-6 pt-0">
                            <a href="/datasets/population-demographics-2024" class="inline-flex items-center justify-center flex-1 px-4 py-2 text-sm font-medium transition-colors rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                View Details
                            </a>
                            <button class="inline-flex items-center justify-center w-10 h-10 transition-colors border rounded-md border-input bg-background hover:bg-secondary/10 hover:text-secondary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Dataset Card 2 -->
                    <div class="flex flex-col transition-shadow border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-lg hover:border-secondary/50">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <span class="inline-flex items-center rounded-md bg-secondary/10 px-2.5 py-0.5 text-xs font-semibold text-secondary mb-2">Transportation</span>
                                <div class="flex gap-1">
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">JSON</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">GeoJSON</span>
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl font-semibold">Public Transportation Routes & Schedules</h3>
                            <p class="mb-4 text-sm text-muted-foreground">Complete dataset of bus routes, stops, schedules, and real-time transit information for the metropolitan area.</p>
                        </div>
                        <div class="flex-1 p-6 pt-0">
                            <div class="space-y-2 text-sm text-muted-foreground">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Size: 8.7 MB</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    <span>9,830 downloads</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Updated: 2024-01-10</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 p-6 pt-0">
                            <a href="/datasets/public-transportation-routes" class="inline-flex items-center justify-center flex-1 px-4 py-2 text-sm font-medium transition-colors rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/90">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                View Details
                            </a>
                            <button class="inline-flex items-center justify-center w-10 h-10 transition-colors border rounded-md border-input bg-background hover:bg-primary/10 hover:text-primary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Dataset Card 3 -->
                    <div class="flex flex-col transition-shadow border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-lg hover:border-primary/50">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <span class="inline-flex items-center rounded-md bg-primary/10 px-2.5 py-0.5 text-xs font-semibold text-primary mb-2">Education</span>
                                <div class="flex gap-1">
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">CSV</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">XLSX</span>
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl font-semibold">Education Statistics & School Data</h3>
                            <p class="mb-4 text-sm text-muted-foreground">Educational institutions database with enrollment numbers, performance metrics, and facility information.</p>
                        </div>
                        <div class="flex-1 p-6 pt-0">
                            <div class="space-y-2 text-sm text-muted-foreground">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Size: 5.1 MB</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    <span>12,340 downloads</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Updated: 2024-01-08</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 p-6 pt-0">
                            <a href="/datasets/education-statistics" class="inline-flex items-center justify-center flex-1 px-4 py-2 text-sm font-medium transition-colors rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                View Details
                            </a>
                            <button class="inline-flex items-center justify-center w-10 h-10 transition-colors border rounded-md border-input bg-background hover:bg-secondary/10 hover:text-secondary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Dataset Card 4 -->
                    <div class="flex flex-col transition-shadow border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-lg hover:border-secondary/50">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <span class="inline-flex items-center rounded-md bg-secondary/10 px-2.5 py-0.5 text-xs font-semibold text-secondary mb-2">Environment</span>
                                <div class="flex gap-1">
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">CSV</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">JSON</span>
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl font-semibold">Environmental Air Quality Index</h3>
                            <p class="mb-4 text-sm text-muted-foreground">Real-time and historical air quality measurements from monitoring stations throughout the city.</p>
                        </div>
                        <div class="flex-1 p-6 pt-0">
                            <div class="space-y-2 text-sm text-muted-foreground">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Size: 15.3 MB</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    <span>7,650 downloads</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Updated: 2024-01-20</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 p-6 pt-0">
                            <a href="/datasets/environmental-air-quality" class="inline-flex items-center justify-center flex-1 px-4 py-2 text-sm font-medium transition-colors rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/90">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                View Details
                            </a>
                            <button class="inline-flex items-center justify-center w-10 h-10 transition-colors border rounded-md border-input bg-background hover:bg-primary/10 hover:text-primary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Dataset Card 5 -->
                    <div class="flex flex-col transition-shadow border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-lg hover:border-primary/50">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <span class="inline-flex items-center rounded-md bg-primary/10 px-2.5 py-0.5 text-xs font-semibold text-primary mb-2">Healthcare</span>
                                <div class="flex gap-1">
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">CSV</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">JSON</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">PDF</span>
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl font-semibold">Healthcare Facilities Directory</h3>
                            <p class="mb-4 text-sm text-muted-foreground">Comprehensive list of hospitals, clinics, and healthcare centers with location, services, and capacity data.</p>
                        </div>
                        <div class="flex-1 p-6 pt-0">
                            <div class="space-y-2 text-sm text-muted-foreground">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Size: 3.2 MB</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    <span>11,200 downloads</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Updated: 2024-01-12</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 p-6 pt-0">
                            <a href="/datasets/healthcare-facilities" class="inline-flex items-center justify-center flex-1 px-4 py-2 text-sm font-medium transition-colors rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                View Details
                            </a>
                            <button class="inline-flex items-center justify-center w-10 h-10 transition-colors border rounded-md border-input bg-background hover:bg-secondary/10 hover:text-secondary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Dataset Card 6 -->
                    <div class="flex flex-col transition-shadow border rounded-lg shadow-sm bg-card text-card-foreground hover:shadow-lg hover:border-secondary/50">
                        <div class="p-6">
                            <div class="flex items-start justify-between">
                                <span class="inline-flex items-center rounded-md bg-secondary/10 px-2.5 py-0.5 text-xs font-semibold text-secondary mb-2">Economy</span>
                                <div class="flex gap-1">
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">CSV</span>
                                    <span class="inline-flex items-center rounded-md border border-input px-2 py-0.5 text-xs">XLSX</span>
                                </div>
                            </div>
                            <h3 class="mb-2 text-xl font-semibold">Business Licenses & Economic Activity</h3>
                            <p class="mb-4 text-sm text-muted-foreground">Database of registered businesses, licenses issued, and economic sector classifications.</p>
                        </div>
                        <div class="flex-1 p-6 pt-0">
                            <div class="space-y-2 text-sm text-muted-foreground">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Size: 6.8 MB</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                    </svg>
                                    <span>8,900 downloads</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                    </svg>
                                    <span>Updated: 2024-01-18</span>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 p-6 pt-0">
                            <a href="/datasets/economic-business-licenses" class="inline-flex items-center justify-center flex-1 px-4 py-2 text-sm font-medium transition-colors rounded-md bg-secondary text-secondary-foreground hover:bg-secondary/90">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                View Details
                            </a>
                            <button class="inline-flex items-center justify-center w-10 h-10 transition-colors border rounded-md border-input bg-background hover:bg-primary/10 hover:text-primary">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action -->
        <section class="py-16 border-t bg-gradient-to-r from-primary/5 to-secondary/5">
            <div class="container px-4 mx-auto">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="mb-4 text-3xl font-bold tracking-tight">Ready to Explore Data?</h2>
                    <p class="mb-8 text-lg text-muted-foreground">
                        Access our comprehensive API documentation and start building with open data today.
                    </p>
                    <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
                        <a href="/datasets" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium transition-colors rounded-md bg-primary text-primary-foreground hover:bg-primary/90">
                            Browse Datasets
                        </a>
                        <a href="/visualizations" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium transition-colors border rounded-md border-secondary text-secondary bg-background hover:bg-secondary/10">
                            View Visualizations
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="border-t bg-muted/40">
            <div class="container px-4 py-12 mx-auto">
                <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                    <!-- Brand Section -->
                    <div class="space-y-4">
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center justify-center w-10 h-10 text-white rounded-lg bg-primary">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold">FakeOpenData Portal</h3>
                                <p class="text-xs text-muted-foreground">Open Government Data</p>
                            </div>
                        </div>
                        <p class="text-sm text-muted-foreground">
                            Providing transparent and accessible government data to empower citizens and drive innovation.
                        </p>
                        <div class="space-y-2 text-sm text-muted-foreground">
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span>City Government Complex</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span>+62 123 4567 8900</span>
                            </div>
                            <div class="flex items-center space-x-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>opendata@city.gov</span>
                            </div>
                        </div>
                    </div>

                    <!-- About Links -->
                    <div>
                        <h4 class="mb-4 text-sm font-semibold">About</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">About Us</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">Contact</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">Privacy Policy</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">Terms of Service</a></li>
                        </ul>
                    </div>

                    <!-- Data Links -->
                    <div>
                        <h4 class="mb-4 text-sm font-semibold">Data</h4>
                        <ul class="space-y-2">
                            <li><a href="/datasets" class="text-sm transition-colors text-muted-foreground hover:text-primary">Browse Datasets</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">API Documentation</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">Data Request</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">Submit Data</a></li>
                        </ul>
                    </div>

                    <!-- Resources Links -->
                    <div>
                        <h4 class="mb-4 text-sm font-semibold">Resources</h4>
                        <ul class="space-y-2">
                            <li><a href="/visualizations" class="text-sm transition-colors text-muted-foreground hover:text-primary">Visualizations</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">Developer Guide</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">Data Standards</a></li>
                            <li><a href="#" class="text-sm transition-colors text-muted-foreground hover:text-primary">FAQ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="pt-8 mt-12 text-sm text-center border-t text-muted-foreground">
                    <p>&copy; 2025 FakeOpenData. All rights reserved. Licensed under Open Data Commons.</p>
                </div>
            </div>
        </footer>
    </div>
        <script>
        const menuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
