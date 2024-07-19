@extends('pages::layouts.main')

@section('title', 'صفحه اصلی')

@section('content')
    <div class="space-y-14">
        <!-- container -->
        <div class="max-w-7xl space-y-14 px-4 mx-auto">
            <!-- intro -->
            <div class="bg-gradient-to-l from-secondary to-background rounded-2xl p-5">
                <div
                    class="flex md:flex-nowrap flex-wrap md:flex-row flex-col items-center justify-center gap-10 py-16">
                    <div class="space-y-5">
                        <div class="flex flex-wrap items-center gap-2">
                                    <span
                                        class="inline-flex items-center gap-1 bg-primary rounded-full font-semibold text-xs text-primary-foreground animate-pulse py-1 px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="m9 14.25 6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0c1.1.128 1.907 1.077 1.907 2.185ZM9.75 9h.008v.008H9.75V9Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm4.125 4.5h.008v.008h-.008V13.5Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                                        </svg>

                                        <span>جشنــــواره تخفیف !</span>
                                    </span>
                            <span class="font-semibold text-xs text-primary">به زودی :)</span>
                        </div>
                        <h2 class="font-black sm:text-5xl text-3xl text-foreground">
                            داستان برنامه‌نویس شدنت <br />
                            از اینجا شروع میشه!
                        </h2>
                        <p class="sm:text-base text-sm text-muted">
                            یادگیری برنامه‌نویسی آرزو نیست، فقط نیاز هست که تلاش و تمرین داشته
                            باشید، بقیه‌اش با نابغه
                        </p>
                        <a href="./series.html"
                           class="inline-flex items-center justify-center gap-1 h-11 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                            <span class="font-semibold text-sm">شروع یادگیری برنامه‌نویسی</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                 class="w-5 h-5">
                                <path fill-rule="evenodd"
                                      d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="flex-shrink-0 flex justify-center md:w-72 w-full md:order-2 -order-1">
                        <img src="./assets/images/theme/intro/main.png" class="max-w-full" alt="..." />
                    </div>
                </div>
            </div>
            <!-- end intro -->

            <!-- features -->
            <div class="relative bg-secondary rounded-3xl">
                <div
                    class="relative right-1/2 translate-x-1/2 -translate-y-1/2 inline-flex items-center justify-center h-12 bg-background border border-border rounded-2xl font-black text-foreground text-lg text-center px-8">
                    چرا آکــــادمــــــی نابغه؟
                </div>
                <div class="flex flex-wrap items-center justify-center gap-10 md:pb-10 pb-5 md:px-10 px-5">
                    <div
                        class="flex flex-col items-center justify-center text-center text-emerald-500 space-y-3 cursor-default animate-pulse">
                                <span class="flex items-center justify-center w-20 h-20 bg-background rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-8 h-8">
                                        <path
                                            d="M12 4.467c0-.405.262-.75.559-1.027.276-.257.441-.584.441-.94 0-.828-.895-1.5-2-1.5s-2 .672-2 1.5c0 .362.171.694.456.953.29.265.544.6.544.994a.968.968 0 0 1-1.024.974 39.655 39.655 0 0 1-3.014-.306.75.75 0 0 0-.847.847c.14.993.242 1.999.306 3.014A.968.968 0 0 1 4.447 10c-.393 0-.729-.253-.994-.544C3.194 9.17 2.862 9 2.5 9 1.672 9 1 9.895 1 11s.672 2 1.5 2c.356 0 .683-.165.94-.441.276-.297.622-.559 1.027-.559a.997.997 0 0 1 1.004 1.03 39.747 39.747 0 0 1-.319 3.734.75.75 0 0 0 .64.842c1.05.146 2.111.252 3.184.318A.97.97 0 0 0 10 16.948c0-.394-.254-.73-.545-.995C9.171 15.693 9 15.362 9 15c0-.828.895-1.5 2-1.5s2 .672 2 1.5c0 .356-.165.683-.441.94-.297.276-.559.622-.559 1.027a.998.998 0 0 0 1.03 1.005c1.337-.05 2.659-.162 3.961-.337a.75.75 0 0 0 .644-.644c.175-1.302.288-2.624.337-3.961A.998.998 0 0 0 16.967 12c-.405 0-.75.262-1.027.559-.257.276-.584.441-.94.441-.828 0-1.5-.895-1.5-2s.672-2 1.5-2c.362 0 .694.17.953.455.265.291.601.545.995.545a.97.97 0 0 0 .976-1.024 41.159 41.159 0 0 0-.318-3.184.75.75 0 0 0-.842-.64c-1.228.164-2.473.271-3.734.319A.997.997 0 0 1 12 4.467Z">
                                        </path>
                                    </svg>
                                </span>
                        <span class="font-bold text-sm line-clamp-1">چالش‌برانگیز</span>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center text-center text-yellow-500 space-y-3 cursor-default animate-pulse">
                                <span class="flex items-center justify-center w-20 h-20 bg-background rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-8 h-8">
                                        <path fill-rule="evenodd"
                                              d="M13.5 4.938a7 7 0 1 1-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 0 1 .572-2.759 6.026 6.026 0 0 1 2.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0 0 13.5 4.938ZM14 12a4 4 0 0 1-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 0 0 1.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 0 1 1.315-4.192.447.447 0 0 1 .431-.16A4.001 4.001 0 0 1 14 12Z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                        <span class="font-bold text-sm line-clamp-1">پروژه‌محور</span>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center text-center text-blue-500 space-y-3 cursor-default animate-pulse">
                                <span class="flex items-center justify-center w-20 h-20 bg-background rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-8 h-8">
                                        <path
                                            d="M10.75 16.82A7.462 7.462 0 0 1 15 15.5c.71 0 1.396.098 2.046.282A.75.75 0 0 0 18 15.06v-11a.75.75 0 0 0-.546-.721A9.006 9.006 0 0 0 15 3a8.963 8.963 0 0 0-4.25 1.065V16.82ZM9.25 4.065A8.963 8.963 0 0 0 5 3c-.85 0-1.673.118-2.454.339A.75.75 0 0 0 2 4.06v11a.75.75 0 0 0 .954.721A7.506 7.506 0 0 1 5 15.5c1.579 0 3.042.487 4.25 1.32V4.065Z">
                                        </path>
                                    </svg>
                                </span>
                        <span class="font-bold text-sm line-clamp-1">جامع</span>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center text-center text-green-500 space-y-3 cursor-default animate-pulse">
                                <span class="flex items-center justify-center w-20 h-20 bg-background rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-8 h-8">
                                        <path
                                            d="M3.288 4.818A1.5 1.5 0 0 0 1 6.095v7.81a1.5 1.5 0 0 0 2.288 1.276l6.323-3.905c.155-.096.285-.213.389-.344v2.973a1.5 1.5 0 0 0 2.288 1.276l6.323-3.905a1.5 1.5 0 0 0 0-2.552l-6.323-3.906A1.5 1.5 0 0 0 10 6.095v2.972a1.506 1.506 0 0 0-.389-.343L3.288 4.818Z">
                                        </path>
                                    </svg>
                                </span>
                        <span class="font-bold text-sm line-clamp-1">به‌روز</span>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center text-center text-rose-500 space-y-3 cursor-default animate-pulse">
                                <span class="flex items-center justify-center w-20 h-20 bg-background rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-8 h-8">
                                        <path
                                            d="M3.25 4A2.25 2.25 0 0 0 1 6.25v7.5A2.25 2.25 0 0 0 3.25 16h7.5A2.25 2.25 0 0 0 13 13.75v-7.5A2.25 2.25 0 0 0 10.75 4h-7.5ZM19 4.75a.75.75 0 0 0-1.28-.53l-3 3a.75.75 0 0 0-.22.53v4.5c0 .199.079.39.22.53l3 3a.75.75 0 0 0 1.28-.53V4.75Z">
                                        </path>
                                    </svg>
                                </span>
                        <span class="font-bold text-sm line-clamp-1">ویدیویی</span>
                    </div>
                    <div
                        class="flex flex-col items-center justify-center text-center text-cyan-500 space-y-3 cursor-default animate-pulse">
                                <span class="flex items-center justify-center w-20 h-20 bg-background rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-8 h-8">
                                        <path
                                            d="M3.505 2.365A41.369 41.369 0 0 1 9 2c1.863 0 3.697.124 5.495.365 1.247.167 2.18 1.108 2.435 2.268a4.45 4.45 0 0 0-.577-.069 43.141 43.141 0 0 0-4.706 0C9.229 4.696 7.5 6.727 7.5 8.998v2.24c0 1.413.67 2.735 1.76 3.562l-2.98 2.98A.75.75 0 0 1 5 17.25v-3.443c-.501-.048-1-.106-1.495-.172C2.033 13.438 1 12.162 1 10.72V5.28c0-1.441 1.033-2.717 2.505-2.914Z">
                                        </path>
                                        <path
                                            d="M14 6c-.762 0-1.52.02-2.271.062C10.157 6.148 9 7.472 9 8.998v2.24c0 1.519 1.147 2.839 2.71 2.935.214.013.428.024.642.034.2.009.385.09.518.224l2.35 2.35a.75.75 0 0 0 1.28-.531v-2.07c1.453-.195 2.5-1.463 2.5-2.915V8.998c0-1.526-1.157-2.85-2.729-2.936A41.645 41.645 0 0 0 14 6Z">
                                        </path>
                                    </svg>
                                </span>
                        <span class="font-bold text-sm line-clamp-1">منتورشیپ</span>
                    </div>
                </div>
            </div>
            <!-- end features -->

            <!-- section:latest-courses -->
            <div class="space-y-8">
                <!-- section:title -->
                <div
                    class="flex items-center justify-between gap-8 bg-gradient-to-l from-secondary to-background rounded-2xl p-5">
                    <div class="flex items-center gap-5">
                                <span
                                    class="flex items-center justify-center w-12 h-12 bg-primary text-primary-foreground rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M9.664 1.319a.75.75 0 0 1 .672 0 41.059 41.059 0 0 1 8.198 5.424.75.75 0 0 1-.254 1.285 31.372 31.372 0 0 0-7.86 3.83.75.75 0 0 1-.84 0 31.508 31.508 0 0 0-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 0 1 3.305-2.033.75.75 0 0 0-.714-1.319 37 37 0 0 0-3.446 2.12A2.216 2.216 0 0 0 6 9.393v.38a31.293 31.293 0 0 0-4.28-1.746.75.75 0 0 1-.254-1.285 41.059 41.059 0 0 1 8.198-5.424ZM6 11.459a29.848 29.848 0 0 0-2.455-1.158 41.029 41.029 0 0 0-.39 3.114.75.75 0 0 0 .419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 1 0 1.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 0 1 3.095 2.348.75.75 0 0 0 .992 0 26.547 26.547 0 0 1 5.93-3.95.75.75 0 0 0 .42-.739 41.053 41.053 0 0 0-.39-3.114 29.925 29.925 0 0 0-5.199 2.801 2.25 2.25 0 0 1-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 0 1-1.084 3.45 26.503 26.503 0 0 0-1.281-.78A5.487 5.487 0 0 0 6 12v-.54Z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                        <div class="flex flex-col font-black text-2xl space-y-2">
                            <span class="font-black xs:text-2xl text-lg text-primary">آخرین دوره های</span>
                            <span class="font-semibold xs:text-base text-sm text-foreground">منتشر شده</span>
                        </div>
                    </div>
                    <a href="./series.html"
                       class="sm:w-auto w-11 h-11 inline-flex items-center justify-center gap-1 bg-secondary rounded-full text-foreground transition-colors hover:text-primary sm:px-4">
                        <span class="font-semibold text-sm sm:block hidden">مشاهده همه</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             class="w-5 h-5">
                            <path fill-rule="evenodd"
                                  d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <!-- end section:title -->

                <!-- section:latest-courses:slider -->
                <div class="swiper col3-swiper-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- course:card -->
                            <div class="relative">
                                <div class="relative z-10">
                                    <a href="./course-detail.html" class="block">
                                        <img src="./assets/images/courses/01.jpg" class="max-w-full rounded-3xl"
                                             alt="..." />
                                    </a>
                                    <a href="./course-category.html"
                                       class="absolute left-3 top-3 h-11 inline-flex items-center justify-center gap-1 bg-black/20 rounded-full text-white transition-all hover:opacity-80 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                  d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                        <span class="font-semibold text-sm">فرانت اند</span>
                                    </a>
                                </div>
                                <div class="bg-background rounded-b-3xl -mt-12 pt-12">
                                    <div
                                        class="bg-gradient-to-b from-background to-secondary rounded-b-3xl space-y-2 p-5 mx-5">
                                        <div class="flex items-center gap-2">
                                            <span class="block w-1 h-1 bg-success rounded-full"></span>
                                            <span class="font-bold text-xs text-success">تکمیل شده</span>
                                        </div>
                                        <h2 class="font-bold text-sm">
                                            <a href="./course-detail.html"
                                               class="line-clamp-1 text-foreground transition-colors hover:text-primary">دوره
                                                پروژه محور React و Next</a>
                                        </h2>
                                    </div>
                                    <div class="space-y-3 p-5">
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z">
                                                    </path>
                                                    <path
                                                        d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z">
                                                    </path>
                                                </svg>
                                                <span class="font-semibold text-xs">۵ فصل</span>
                                            </div>
                                            <span class="block w-1 h-1 bg-muted-foreground rounded-full"></span>
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="font-semibold text-xs">۲۵ ساعت</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between gap-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                    <img src="./assets/images/avatars/01.jpeg"
                                                         class="w-full h-full object-cover" alt="..." />
                                                </div>
                                                <div class="flex flex-col items-start space-y-1">
                                                            <span
                                                                class="line-clamp-1 font-semibold text-xs text-muted">مدرس
                                                                دوره:</span>
                                                    <a href="./lecturer.html"
                                                       class="line-clamp-1 font-bold text-xs text-foreground hover:text-primary">جلال
                                                        بهرامی راد</a>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-end justify-center h-14">
                                                <span class="line-through text-muted">۱,۱۹۹,۰۰۰</span>
                                                <div class="flex items-center gap-1">
                                                            <span
                                                                class="font-black text-xl text-foreground">۱,۰۷۹,۰۰۰</span>
                                                    <span class="text-xs text-muted">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 mt-3">
                                            <a href="./course-detail.html"
                                               class="w-full h-11 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                                                        <span class="line-clamp-1 font-semibold text-sm">مشاهده
                                                            دوره</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <button type="button"
                                                    class="flex-shrink-0 w-11 h-11 inline-flex items-center justify-center bg-secondary rounded-full text-muted transition-colors hover:text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end course:card -->
                        </div>
                        <div class="swiper-slide">
                            <!-- course:card -->
                            <div class="relative">
                                <div class="relative z-10">
                                    <a href="./course-detail.html" class="block">
                                        <img src="./assets/images/courses/02.jpg" class="max-w-full rounded-3xl"
                                             alt="..." />
                                    </a>
                                    <a href="./course-category.html"
                                       class="absolute left-3 top-3 h-11 inline-flex items-center justify-center gap-1 bg-black/20 rounded-full text-white transition-all hover:opacity-80 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                  d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                        <span class="font-semibold text-sm">برنامه نویسی</span>
                                    </a>
                                </div>
                                <div class="bg-background rounded-b-3xl -mt-12 pt-12">
                                    <div
                                        class="bg-gradient-to-b from-background to-secondary rounded-b-3xl space-y-2 p-5 mx-5">
                                        <div class="flex items-center gap-2">
                                            <span class="block w-1 h-1 bg-success rounded-full"></span>
                                            <span class="font-bold text-xs text-success">تکمیل شده</span>
                                        </div>
                                        <h2 class="font-bold text-sm">
                                            <a href="./course-detail.html"
                                               class="line-clamp-1 text-foreground transition-colors hover:text-primary">
                                                قدم صفر برنامه نویسی
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="space-y-3 p-5">
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z">
                                                    </path>
                                                    <path
                                                        d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z">
                                                    </path>
                                                </svg>
                                                <span class="font-semibold text-xs">۵ فصل</span>
                                            </div>
                                            <span class="block w-1 h-1 bg-muted-foreground rounded-full"></span>
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="font-semibold text-xs">۲۵ ساعت</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between gap-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                    <img src="./assets/images/avatars/01.jpeg"
                                                         class="w-full h-full object-cover" alt="..." />
                                                </div>
                                                <div class="flex flex-col items-start space-y-1">
                                                            <span
                                                                class="line-clamp-1 font-semibold text-xs text-muted">مدرس
                                                                دوره:</span>
                                                    <a href="./lecturer.html"
                                                       class="line-clamp-1 font-bold text-xs text-foreground hover:text-primary">جلال
                                                        بهرامی راد</a>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-end justify-center h-14">
                                                <div class="flex items-center gap-1">
                                                    <span class="font-black text-xl text-success">رایگان!</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 mt-3">
                                            <a href="./course-detail.html"
                                               class="w-full h-11 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                                                        <span class="line-clamp-1 font-semibold text-sm">مشاهده
                                                            دوره</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <button type="button"
                                                    class="flex-shrink-0 w-11 h-11 inline-flex items-center justify-center bg-secondary rounded-full text-muted transition-colors hover:text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end course:card -->
                        </div>
                        <div class="swiper-slide">
                            <!-- course:card -->
                            <div class="relative">
                                <div class="relative z-10">
                                    <a href="./course-detail.html" class="block">
                                        <img src="./assets/images/courses/03.jpg" class="max-w-full rounded-3xl"
                                             alt="..." />
                                    </a>
                                    <a href="./course-category.html"
                                       class="absolute left-3 top-3 h-11 inline-flex items-center justify-center gap-1 bg-black/20 rounded-full text-white transition-all hover:opacity-80 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                  d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                        <span class="font-semibold text-sm">موبایل</span>
                                    </a>
                                </div>
                                <div class="bg-background rounded-b-3xl -mt-12 pt-12">
                                    <div
                                        class="bg-gradient-to-b from-background to-secondary rounded-b-3xl space-y-2 p-5 mx-5">
                                        <div class="flex items-center gap-2">
                                            <span class="block w-1 h-1 bg-success rounded-full"></span>
                                            <span class="font-bold text-xs text-success">تکمیل شده</span>
                                        </div>
                                        <h2 class="font-bold text-sm">
                                            <a href="./course-detail.html"
                                               class="line-clamp-1 text-foreground transition-colors hover:text-primary">
                                                آموزش فلاتر از صفر
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="space-y-3 p-5">
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z">
                                                    </path>
                                                    <path
                                                        d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z">
                                                    </path>
                                                </svg>
                                                <span class="font-semibold text-xs">۵ فصل</span>
                                            </div>
                                            <span class="block w-1 h-1 bg-muted-foreground rounded-full"></span>
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="font-semibold text-xs">۲۵ ساعت</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between gap-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                    <img src="./assets/images/avatars/01.jpeg"
                                                         class="w-full h-full object-cover" alt="..." />
                                                </div>
                                                <div class="flex flex-col items-start space-y-1">
                                                            <span
                                                                class="line-clamp-1 font-semibold text-xs text-muted">مدرس
                                                                دوره:</span>
                                                    <a href="./lecturer.html"
                                                       class="line-clamp-1 font-bold text-xs text-foreground hover:text-primary">جلال
                                                        بهرامی راد</a>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-end justify-center h-14">
                                                <div class="flex items-center gap-1">
                                                            <span
                                                                class="font-black text-xl text-foreground">۶۹۹,۰۰۰</span>
                                                    <span class="text-xs text-muted">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 mt-3">
                                            <a href="./course-detail.html"
                                               class="w-full h-11 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                                                        <span class="line-clamp-1 font-semibold text-sm">مشاهده
                                                            دوره</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <button type="button"
                                                    class="flex-shrink-0 w-11 h-11 inline-flex items-center justify-center bg-secondary rounded-full text-muted transition-colors hover:text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end course:card -->
                        </div>
                        <div class="swiper-slide">
                            <!-- course:card -->
                            <div class="relative">
                                <div class="relative z-10">
                                    <a href="./course-detail.html" class="block">
                                        <img src="./assets/images/courses/04.jpg" class="max-w-full rounded-3xl"
                                             alt="..." />
                                    </a>
                                    <a href="./course-category.html"
                                       class="absolute left-3 top-3 h-11 inline-flex items-center justify-center gap-1 bg-black/20 rounded-full text-white transition-all hover:opacity-80 px-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                             fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd"
                                                  d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                                  clip-rule="evenodd" />
                                        </svg>
                                        <span class="font-semibold text-sm">بک اند</span>
                                    </a>
                                </div>
                                <div class="bg-background rounded-b-3xl -mt-12 pt-12">
                                    <div
                                        class="bg-gradient-to-b from-background to-secondary rounded-b-3xl space-y-2 p-5 mx-5">
                                        <div class="flex items-center gap-2">
                                            <span class="block w-1 h-1 bg-success rounded-full"></span>
                                            <span class="font-bold text-xs text-success">تکمیل شده</span>
                                        </div>
                                        <h2 class="font-bold text-sm">
                                            <a href="./course-detail.html"
                                               class="line-clamp-1 text-foreground transition-colors hover:text-primary">
                                                آموزش Composer
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="space-y-3 p-5">
                                        <div class="flex flex-wrap items-center gap-3">
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z">
                                                    </path>
                                                    <path
                                                        d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z">
                                                    </path>
                                                </svg>
                                                <span class="font-semibold text-xs">۵ فصل</span>
                                            </div>
                                            <span class="block w-1 h-1 bg-muted-foreground rounded-full"></span>
                                            <div class="flex items-center gap-1 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="font-semibold text-xs">۲۵ ساعت</span>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between gap-5">
                                            <div class="flex items-center gap-3">
                                                <div
                                                    class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                    <img src="./assets/images/avatars/01.jpeg"
                                                         class="w-full h-full object-cover" alt="..." />
                                                </div>
                                                <div class="flex flex-col items-start space-y-1">
                                                            <span
                                                                class="line-clamp-1 font-semibold text-xs text-muted">مدرس
                                                                دوره:</span>
                                                    <a href="./lecturer.html"
                                                       class="line-clamp-1 font-bold text-xs text-foreground hover:text-primary">جلال
                                                        بهرامی راد</a>
                                                </div>
                                            </div>
                                            <div class="flex flex-col items-end justify-center h-14">
                                                <div class="flex items-center gap-1">
                                                            <span
                                                                class="font-black text-xl text-foreground">۳۲۵,۰۰۰</span>
                                                    <span class="text-xs text-muted">تومان</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 mt-3">
                                            <a href="./course-detail.html"
                                               class="w-full h-11 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                                                        <span class="line-clamp-1 font-semibold text-sm">مشاهده
                                                            دوره</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </a>
                                            <button type="button"
                                                    class="flex-shrink-0 w-11 h-11 inline-flex items-center justify-center bg-secondary rounded-full text-muted transition-colors hover:text-red-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end course:card -->
                        </div>
                    </div>

                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <!-- end section:latest-courses:slider -->
            </div>
            <!-- end section:latest-courses -->
        </div>
        <!-- end container -->

        <!-- feedback -->
        <div class="overflow-x-hidden py-20">
            <!-- container -->
            <div class="max-w-7xl px-4 mx-auto">
                <div class="md:grid md:grid-cols-12 md:gap-10 md:space-y-0 space-y-5">
                    <div class="md:col-span-4 flex items-center gap-5">
                                <span
                                    class="flex-shrink-0 flex items-center justify-center w-12 h-12 bg-primary text-primary-foreground rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M9.664 1.319a.75.75 0 0 1 .672 0 41.059 41.059 0 0 1 8.198 5.424.75.75 0 0 1-.254 1.285 31.372 31.372 0 0 0-7.86 3.83.75.75 0 0 1-.84 0 31.508 31.508 0 0 0-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 0 1 3.305-2.033.75.75 0 0 0-.714-1.319 37 37 0 0 0-3.446 2.12A2.216 2.216 0 0 0 6 9.393v.38a31.293 31.293 0 0 0-4.28-1.746.75.75 0 0 1-.254-1.285 41.059 41.059 0 0 1 8.198-5.424ZM6 11.459a29.848 29.848 0 0 0-2.455-1.158 41.029 41.029 0 0 0-.39 3.114.75.75 0 0 0 .419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 1 0 1.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 0 1 3.095 2.348.75.75 0 0 0 .992 0 26.547 26.547 0 0 1 5.93-3.95.75.75 0 0 0 .42-.739 41.053 41.053 0 0 0-.39-3.114 29.925 29.925 0 0 0-5.199 2.801 2.25 2.25 0 0 1-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 0 1-1.084 3.45 26.503 26.503 0 0 0-1.281-.78A5.487 5.487 0 0 0 6 12v-.54Z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                        <div class="flex flex-col space-y-2">
                                    <span class="font-black xs:text-2xl text-lg text-primary">در مورد نابغه چه
                                        میشنویم؟</span>
                            <span class="font-semibold xs:text-base text-sm text-muted">این‌ها، بخش خیلی کوچکی
                                        از نظراتی
                                        هستند
                                        که افراد
                                        مختلف در مورد نابغه دارند.</span>
                        </div>
                    </div>
                    <div class="md:col-span-8 w-full max-w-xl mx-auto">
                        <div class="swiper card-swiper-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide pb-8">
                                    <div
                                        class="flex flex-col items-center justify-center bg-background border border-border rounded-2xl shadow-xl shadow-black/5 space-y-8 p-8">
                                        <div class="font-semibold text-sm text-muted text-center">
                                            وبسایت شما به خوبی به نیازها و سطح دانش کاربران پاسخ می‌دهد. از
                                            مبتدیان
                                            تا
                                            حرفه‌ایان، می‌توانند از محتواهای آموزشی شما بهره‌بردند. این
                                            گسترده‌بودن
                                            پوشش
                                            محتوا بسیار قابل قدردانی است.
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                <img src="./assets/images/avatars/01.jpeg"
                                                     class="w-full h-full object-cover" alt="...">
                                            </div>
                                            <div class="flex flex-col items-start space-y-1">
                                                        <span class="line-clamp-1 font-bold text-xs text-foreground">
                                                            جلال بهرامی راد
                                                        </span>
                                                <span class="font-semibold text-xs text-muted">
                                                            دوره پروژه محور React و Next
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide pb-8">
                                    <div
                                        class="flex flex-col items-center justify-center bg-background border border-border rounded-2xl shadow-xl shadow-black/5 space-y-8 p-8">
                                        <div class="font-semibold text-sm text-muted text-center">
                                            من به تیم شما بابت پشتیبانی عالیتان از وبسایتتان تشکر می‌کنم. سوالات
                                            و
                                            مشکلات من به سرعت پاسخ داده می‌شوند و همیشه یک راه حل مناسب برای هر
                                            مشکل
                                            پیدا می‌کنید. این امر بسیار قابل ارزش است.
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                <img src="./assets/images/avatars/01.jpeg"
                                                     class="w-full h-full object-cover" alt="...">
                                            </div>
                                            <div class="flex flex-col items-start space-y-1">
                                                        <span class="line-clamp-1 font-bold text-xs text-foreground">
                                                            جلال بهرامی راد
                                                        </span>
                                                <span class="font-semibold text-xs text-muted">
                                                            دوره پروژه محور React و Next
                                                        </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end container -->
        </div>
        <!-- end feedback -->

        <!-- container -->
        <div class="max-w-7xl space-y-14 px-4 mx-auto">
            <!-- articles -->
            <div
                class="lg:flex lg:items-center lg:gap-10 bg-gradient-to-l from-secondary to-background rounded-2xl sm:p-10 p-5">
                <div class="lg:w-4/12 flex items-start gap-5 lg:mb-0 mb-8">
                            <span
                                class="flex-shrink-0 flex items-center justify-center w-12 h-12 bg-primary text-primary-foreground rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                          d="M9.664 1.319a.75.75 0 0 1 .672 0 41.059 41.059 0 0 1 8.198 5.424.75.75 0 0 1-.254 1.285 31.372 31.372 0 0 0-7.86 3.83.75.75 0 0 1-.84 0 31.508 31.508 0 0 0-2.08-1.287V9.394c0-.244.116-.463.302-.592a35.504 35.504 0 0 1 3.305-2.033.75.75 0 0 0-.714-1.319 37 37 0 0 0-3.446 2.12A2.216 2.216 0 0 0 6 9.393v.38a31.293 31.293 0 0 0-4.28-1.746.75.75 0 0 1-.254-1.285 41.059 41.059 0 0 1 8.198-5.424ZM6 11.459a29.848 29.848 0 0 0-2.455-1.158 41.029 41.029 0 0 0-.39 3.114.75.75 0 0 0 .419.74c.528.256 1.046.53 1.554.82-.21.324-.455.63-.739.914a.75.75 0 1 0 1.06 1.06c.37-.369.69-.77.96-1.193a26.61 26.61 0 0 1 3.095 2.348.75.75 0 0 0 .992 0 26.547 26.547 0 0 1 5.93-3.95.75.75 0 0 0 .42-.739 41.053 41.053 0 0 0-.39-3.114 29.925 29.925 0 0 0-5.199 2.801 2.25 2.25 0 0 1-2.514 0c-.41-.275-.826-.541-1.25-.797a6.985 6.985 0 0 1-1.084 3.45 26.503 26.503 0 0 0-1.281-.78A5.487 5.487 0 0 0 6 12v-.54Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </span>
                    <div class="flex flex-col space-y-2">
                                <span class="font-black xs:text-2xl text-lg text-primary">از گوشه و اطراف دنیای
                                    برنامه‌نویسی</span>
                        <span class="font-semibold xs:text-base text-sm text-muted">
                                    نوشتن کار جالبیه که از هزاران سال همراه ما بوده و کمک کرده تا همیشه به روز باشیم، ما
                                    در نابغه فضای رو به شکلی آماده کردیم تا شما بتونید ایده‌ها و مطالب جالب حوزه
                                    برنامه‌نویسی رو در اختیار هزاران برنامه‌نویس عضو نابغه قرار بدید.
                                </span>
                    </div>
                </div>
                <div class="lg:w-8/12 w-full lg:mx-auto">
                    <div class="grid sm:grid-cols-2 grid-cols-1 gap-x-5 gap-y-8 space-y-8">
                        <div class="space-y-5">
                            <!-- article:card -->
                            <div class="relative bg-background rounded-xl p-4">
                                <div class="relative mb-3 z-20">
                                    <a href="./article-detail.html" class="block">
                                        <img src="./assets/images/courses/01.jpg" class="max-w-full rounded-xl"
                                             alt="..." />
                                    </a>
                                    <button type="button"
                                            class="absolute left-3 -bottom-3 w-9 h-9 inline-flex items-center justify-center bg-secondary rounded-full shadow-xl text-muted transition-colors hover:text-red-500 z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" class="w-5 h-5">
                                            <path
                                                d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative space-y-3 z-10">
                                    <h2 class="font-bold text-sm">
                                        <a href="./article-detail.html"
                                           class="line-clamp-1 text-foreground transition-colors hover:text-primary">دوره
                                            پروژه محور React و Next</a>
                                    </h2>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1">
                                            <div
                                                class="flex-shrink-0 w-8 h-8 border border-white rounded-full overflow-hidden">
                                                <img src="./assets/images/avatars/01.jpeg"
                                                     class="w-full h-full object-cover" alt="...">
                                            </div>
                                            <a href="./lecturer.html"
                                               class="line-clamp-1 font-bold text-xs text-foreground transition-colors hover:text-primary">جلال
                                                بهرامی راد</a>
                                        </div>
                                        <a href="./article-category.html"
                                           class="bg-primary/10 rounded-full text-primary transition-all hover:opacity-80 py-1 px-4">
                                            <span class="font-bold text-xxs">فرانت اند</span>
                                        </a>
                                    </div>
                                    <div class="flex justify-end">
                                        <div class="flex items-center gap-1 text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                 class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <span class="font-semibold text-xs text-muted">زمان مطالعه:</span>
                                            <span class="font-semibold text-xs text-foreground">۲۰ دقیقه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end article:card -->

                            <!-- article:card -->
                            <div class="relative bg-background rounded-xl p-4">
                                <div class="relative mb-3 z-20">
                                    <a href="./article-detail.html" class="block">
                                        <img src="./assets/images/courses/02.jpg" class="max-w-full rounded-xl"
                                             alt="..." />
                                    </a>
                                    <button type="button"
                                            class="absolute left-3 -bottom-3 w-9 h-9 inline-flex items-center justify-center bg-secondary rounded-full shadow-xl text-muted transition-colors hover:text-red-500 z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" class="w-5 h-5">
                                            <path
                                                d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative space-y-3 z-10">
                                    <h2 class="font-bold text-sm">
                                        <a href="./article-detail.html"
                                           class="line-clamp-1 text-foreground transition-colors hover:text-primary">دوره
                                            پروژه محور React و Next</a>
                                    </h2>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1">
                                            <div
                                                class="flex-shrink-0 w-8 h-8 border border-white rounded-full overflow-hidden">
                                                <img src="./assets/images/avatars/01.jpeg"
                                                     class="w-full h-full object-cover" alt="...">
                                            </div>
                                            <a href="./lecturer.html"
                                               class="line-clamp-1 font-bold text-xs text-foreground transition-colors hover:text-primary">جلال
                                                بهرامی راد</a>
                                        </div>
                                        <a href="./article-category.html"
                                           class="bg-primary/10 rounded-full text-primary transition-all hover:opacity-80 py-1 px-4">
                                            <span class="font-bold text-xxs">فرانت اند</span>
                                        </a>
                                    </div>
                                    <div class="flex justify-end">
                                        <div class="flex items-center gap-1 text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                 class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <span class="font-semibold text-xs text-muted">زمان مطالعه:</span>
                                            <span class="font-semibold text-xs text-foreground">۲۰ دقیقه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end article:card -->
                        </div>
                        <div class="space-y-5">
                            <!-- article:card -->
                            <div class="relative bg-background rounded-xl p-4">
                                <div class="relative mb-3 z-20">
                                    <a href="./article-detail.html" class="block">
                                        <img src="./assets/images/courses/03.jpg" class="max-w-full rounded-xl"
                                             alt="..." />
                                    </a>
                                    <button type="button"
                                            class="absolute left-3 -bottom-3 w-9 h-9 inline-flex items-center justify-center bg-secondary rounded-full shadow-xl text-muted transition-colors hover:text-red-500 z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" class="w-5 h-5">
                                            <path
                                                d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative space-y-3 z-10">
                                    <h2 class="font-bold text-sm">
                                        <a href="./article-detail.html"
                                           class="line-clamp-1 text-foreground transition-colors hover:text-primary">دوره
                                            پروژه محور React و Next</a>
                                    </h2>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1">
                                            <div
                                                class="flex-shrink-0 w-8 h-8 border border-white rounded-full overflow-hidden">
                                                <img src="./assets/images/avatars/01.jpeg"
                                                     class="w-full h-full object-cover" alt="...">
                                            </div>
                                            <a href="./lecturer.html"
                                               class="line-clamp-1 font-bold text-xs text-foreground transition-colors hover:text-primary">جلال
                                                بهرامی راد</a>
                                        </div>
                                        <a href="./article-category.html"
                                           class="bg-primary/10 rounded-full text-primary transition-all hover:opacity-80 py-1 px-4">
                                            <span class="font-bold text-xxs">فرانت اند</span>
                                        </a>
                                    </div>
                                    <div class="flex justify-end">
                                        <div class="flex items-center gap-1 text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                 class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <span class="font-semibold text-xs text-muted">زمان مطالعه:</span>
                                            <span class="font-semibold text-xs text-foreground">۲۰ دقیقه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end article:card -->

                            <!-- article:card -->
                            <div class="relative bg-background rounded-xl p-4">
                                <div class="relative mb-3 z-20">
                                    <a href="./article-detail.html" class="block">
                                        <img src="./assets/images/courses/04.jpg" class="max-w-full rounded-xl"
                                             alt="..." />
                                    </a>
                                    <button type="button"
                                            class="absolute left-3 -bottom-3 w-9 h-9 inline-flex items-center justify-center bg-secondary rounded-full shadow-xl text-muted transition-colors hover:text-red-500 z-10">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor" class="w-5 h-5">
                                            <path
                                                d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <div class="relative space-y-3 z-10">
                                    <h2 class="font-bold text-sm">
                                        <a href="./article-detail.html"
                                           class="line-clamp-1 text-foreground transition-colors hover:text-primary">دوره
                                            پروژه محور React و Next</a>
                                    </h2>
                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center gap-1">
                                            <div
                                                class="flex-shrink-0 w-8 h-8 border border-white rounded-full overflow-hidden">
                                                <img src="./assets/images/avatars/01.jpeg"
                                                     class="w-full h-full object-cover" alt="...">
                                            </div>
                                            <a href="./lecturer.html"
                                               class="line-clamp-1 font-bold text-xs text-foreground transition-colors hover:text-primary">جلال
                                                بهرامی راد</a>
                                        </div>
                                        <a href="./article-category.html"
                                           class="bg-primary/10 rounded-full text-primary transition-all hover:opacity-80 py-1 px-4">
                                            <span class="font-bold text-xxs">فرانت اند</span>
                                        </a>
                                    </div>
                                    <div class="flex justify-end">
                                        <div class="flex items-center gap-1 text-muted">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                 class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                            </svg>
                                            <span class="font-semibold text-xs text-muted">زمان مطالعه:</span>
                                            <span class="font-semibold text-xs text-foreground">۲۰ دقیقه</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end article:card -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end articles -->
        </div>
        <!-- end container -->
    </div>
@endsection
