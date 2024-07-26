<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="{{asset('assets/images/favicon.svg')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/dependencies/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/dependencies/plyr.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/fonts.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" />
    <title>@yield('title')</title>
</head>

<body>

<div class="flex flex-col min-h-screen bg-background">
    <!-- header -->
    <header class="bg-background/80 backdrop-blur-xl border-b border-border sticky top-0 z-30"
            x-data="{ offcanvasOpen: false, openSearchBox: false }">
        <!-- container -->
        <div class="max-w-7xl relative px-4 mx-auto">
            <div class="flex items-center gap-8 h-20">
                <div class="flex items-center gap-3">
                    <!-- offcanvas:button -->
                    <button type="button"
                            class="lg:hidden inline-flex items-center justify-center relative w-10 h-10 bg-secondary rounded-full text-foreground"
                            x-on:click="offcanvasOpen = true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                    <!-- end offcanvas:button -->
                    <a href="{{route('home')}}" class="inline-flex items-center gap-2 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-6 h-6">
                            <path
                                d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                            <path fill-rule="evenodd"
                                  d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z"
                                  clip-rule="evenodd" />
                        </svg>
                        <span class="flex flex-col items-start">
                                <span class="font-semibold text-sm text-muted">آکــــادمـــی</span>
                                <span class="font-black text-xl">نـــابــــغه</span>
                            </span>
                    </a>
                </div>
                <div class="lg:flex hidden items-center gap-5">
                    <!-- categories -->
                    <div class="relative group/categories">
                        <a href="#"
                           class="inline-flex items-center gap-1 text-muted transition-colors hover:text-foreground">
                            <span class="font-semibold text-sm">دسته بندی آمـــوزشها</span>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                        <div
                            class="absolute right-0 top-full opacity-0 invisible transition-all group-hover/categories:opacity-100 group-hover/categories:visible pt-5 z-10">
                            <ul
                                class="flex flex-col relative w-56 min-h-[300px] bg-background border border-border shadow-2xl shadow-black/5">
                                <li class="group">
                                    <a href="#"
                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">
                                        <span class="font-semibold text-sm">برنامه نویسی وب</span>
                                        <span class="absolute left-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 19.5 8.25 12l7.5-7.5" />
                                                </svg>
                                            </span>
                                    </a>
                                    <ul
                                        class="absolute -top-px -bottom-px right-full flex flex-wrap flex-col w-96 bg-background border border-border shadow-2xl shadow-black/5 space-y-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible px-3 pt-8 pb-3">
                                        <li class="absolute top-2">
                                                <span class="font-bold text-sm text-muted cursor-default">محبوب ترین
                                                    موضوعات</span>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">جاوااسکریپت</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">نود جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">ریکت جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">ویو جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">تیلویند</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">بوت استرپ</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">سی اس اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">اچ تی ام ال</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">پی اچ پی</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">لاراول</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">لایووایر</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">آلپاین جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">دات نت</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="group">
                                    <a href="#"
                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">
                                        <span class="font-semibold text-sm">دیتا ساینس</span>
                                        <span class="absolute left-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 19.5 8.25 12l7.5-7.5" />
                                                </svg>
                                            </span>
                                    </a>
                                    <ul
                                        class="absolute -top-px -bottom-px right-full flex flex-wrap flex-col w-96 bg-background border border-border shadow-2xl shadow-black/5 space-y-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible px-3 pt-8 pb-3">
                                        <li class="absolute top-2">
                                                <span class="font-bold text-sm text-muted cursor-default">محبوب ترین
                                                    موضوعات</span>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">جاوااسکریپت</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">نود جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">ریکت جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">ویو جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">پی اچ پی</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">لاراول</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">لایووایر</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">آلپاین جی اس</span>
                                            </a>
                                        </li>
                                        <li class="w-1/2">
                                            <a href="#"
                                               class="flex items-center gap-2 text-muted before:content-[''] before:inline-block before:w-1 before:h-1 before:bg-border before:rounded-full transition-colors hover:text-primary hover:before:bg-primary">
                                                <span class="font-semibold text-sm">دات نت</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">
                                        <span class="font-semibold text-sm">زبانهای برنامه نویسی</span>
                                        <span class="absolute left-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 19.5 8.25 12l7.5-7.5" />
                                                </svg>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">
                                        <span class="font-semibold text-sm">توسعه بازی</span>
                                        <span class="absolute left-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 19.5 8.25 12l7.5-7.5" />
                                                </svg>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">
                                        <span class="font-semibold text-sm">برنامه نویسی موبایل</span>
                                        <span class="absolute left-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 19.5 8.25 12l7.5-7.5" />
                                                </svg>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">
                                        <span class="font-semibold text-sm">طراحی دیتابیس</span>
                                        <span class="absolute left-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 19.5 8.25 12l7.5-7.5" />
                                                </svg>
                                            </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="flex items-center relative text-foreground transition-colors hover:text-primary p-3">
                                        <span class="font-semibold text-sm">تست نویسی</span>
                                        <span class="absolute left-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M15.75 19.5 8.25 12l7.5-7.5" />
                                                </svg>
                                            </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end categories -->

                    <!-- menu -->
                    <ul class="flex items-center gap-5">
                        <li>
                            <a href="{{route('blogPost.index')}}"
                               class="inline-flex text-muted transition-colors hover:text-foreground">
                                <span class="font-semibold text-sm">مقالات آموزشی</span>
                            </a>
                        </li>
                    </ul>
                    <!-- end menu -->
                </div>

                <div class="flex items-center md:gap-5 gap-3 mr-auto">
                    <!-- darkMode:button -->
                    <button type="button"
                            class="hidden lg:inline-flex items-center justify-center w-10 h-10 bg-secondary rounded-full text-foreground"
                            id="dark-mode-button">
                            <span class="light-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                                </svg>
                            </span>
                        <span class="dark-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                </svg>
                            </span>
                    </button>
                    <!-- end darkMode:button -->

                    <!-- openSearchBox:button -->
                    <button type="button"
                            class="hidden lg:inline-flex items-center justify-center w-10 h-10 bg-secondary rounded-full text-foreground"
                            x-on:click="openSearchBox = true">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                    <!-- end openSearchBox:button -->

                    <a href="./cart.html"
                       class="inline-flex items-center justify-center relative w-10 h-10 bg-secondary rounded-full text-foreground">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                        </svg>
                        <span class="absolute -top-1 left-0 flex h-5 w-5">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                                <span
                                    class="relative inline-flex items-center justify-center rounded-full h-5 w-5 bg-primary text-primary-foreground font-bold text-xs">2</span>
                            </span>
                    </a>
                @if(Auth::guard('client')->check())
                    <!-- user:dropdown -->
                    <div class="relative" x-data="{ isOpen: false }">
                        <button class="flex items-center sm:gap-3 gap-1" x-on:click="isOpen = !isOpen">
                                <span
                                    class="inline-flex items-center justify-center w-9 h-9 bg-secondary rounded-full text-foreground">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                    </svg>
                                </span>
                            <span class="xs:flex flex-col items-start hidden text-xs space-y-1">
                                    <span class="font-semibold text-foreground">جلال بهرامی راد</span>
                                    <span class="font-semibold text-muted">خوش آمـــدید</span>
                                </span>
                            <span class="text-foreground transition-transform"
                                  x-bind:class="isOpen ? 'rotate-180' : ''">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                        </button>
                        <div class="absolute top-full left-0 pt-3" x-show="isOpen"
                             x-on:click.outside="isOpen = false">
                            <div
                                class="w-56 bg-background border border-border rounded-xl shadow-2xl shadow-black/5 p-3">
                                <a href="{{route('client.profile.dashboard')}}"
                                   class="flex items-center gap-2 w-full text-foreground transition-colors hover:text-primary px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M9.813 15.904 9 18.75l-.813-2.846a4.5 4.5 0 0 0-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 0 0 3.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 0 0 3.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 0 0-3.09 3.09ZM18.259 8.715 18 9.75l-.259-1.035a3.375 3.375 0 0 0-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 0 0 2.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 0 0 2.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 0 0-2.456 2.456ZM16.894 20.567 16.5 21.75l-.394-1.183a2.25 2.25 0 0 0-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 0 0 1.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 0 0 1.423 1.423l1.183.394-1.183.394a2.25 2.25 0 0 0-1.423 1.423Z" />
                                    </svg>
                                    <span class="font-semibold text-xs">مشاهده پروفایل</span>
                                </a>
                                <a href="{{route('client.profile.courses')}}"
                                   class="flex items-center gap-2 w-full text-foreground transition-colors hover:text-primary px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                                    </svg>
                                    <span class="font-semibold text-xs">دوره ها</span>
                                </a>
                                <a href="{{route('client.profile.payments')}}"
                                   class="flex items-center gap-2 w-full text-foreground transition-colors hover:text-primary px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                    </svg>
                                    <span class="font-semibold text-xs">مالی</span>
                                </a>
                                <a href="{{route('client.profile.comments')}}"
                                   class="flex items-center gap-2 w-full text-foreground transition-colors hover:text-primary px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                                    </svg>
                                    <span class="font-semibold text-xs">پرسش و دیدگاه ها</span>
                                </a>
                                <a href="{{route('client.logout')}}"
                                   class="flex items-center gap-2 w-full text-red-500 transition-colors hover:text-red-700 px-3 py-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                                    </svg>
                                    <span class="font-semibold text-xs">خروج از حساب</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end user:dropdown -->
                @else
                        <!-- login-register:button -->
                        <a href="{{route('client.loginPage')}}"
                    class="inline-flex items-center justify-center gap-1 h-10 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                        <path fill-rule="evenodd"
                            d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z"
                            clip-rule="evenodd" />
                    </svg>
                    <span class="font-semibold text-sm">حساب کاربری</span>
                </a>
                        <!-- end login-register:button -->
                @endif


                </div>
            </div>

            <!-- searchBox -->
            <div class="absolute inset-x-4 hidden lg:flex flex-col h-full bg-background transition-all"
                 x-bind:class="openSearchBox ? 'top-0' : '-top-full'">
                <form action="#" class="h-full">
                    <div class="flex items-center h-full relative">
                        <input type="text"
                               class="form-input w-full !ring-0 !ring-offset-0 bg-background border-0 focus:border-0 text-foreground"
                               placeholder="نام دوره،مقاله و یا دسته بندی را وارد نمایید.." />
                        <button type="button"
                                class="absolute left-0 inline-flex items-center justify-center w-9 h-9 bg-secondary rounded-full text-muted transition-colors hover:text-red-500"
                                x-on:click="openSearchBox = false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <!-- end searchBox -->
        </div>
        <!-- end container -->

        <!-- offcanvas -->
        <div x-cloak>
            <!-- offcanvas:box -->
            <div class="fixed inset-y-0 right-0 xs:w-80 w-72 h-screen bg-background rounded-l-2xl overflow-y-auto transition-transform z-50"
                 x-bind:class="offcanvasOpen ? '!translate-x-0' : 'translate-x-full'">
                <!-- offcanvas:header -->
                <div class="flex items-center justify-between gap-x-4 sticky top-0 bg-background p-4 z-10">
                    <a href="./home.html" class="inline-flex items-center gap-2 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-6 h-6">
                            <path
                                d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                            <path fill-rule="evenodd"
                                  d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z"
                                  clip-rule="evenodd" />
                        </svg>
                        <span class="flex flex-col items-start">
                                <span class="font-semibold text-sm text-muted">آکــــادمـــی</span>
                                <span class="font-black text-xl">نـــابــــغه</span>
                            </span>
                    </a>

                    <!-- offcanvas:close-button -->
                    <button x-on:click="offcanvasOpen = false"
                            class="text-foreground focus:outline-none hover:text-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button><!-- end offcanvas:close-button -->
                </div><!-- end offcanvas header -->

                <!-- offcanvas:content -->
                <div class="space-y-5 p-4">
                    <form action="#">
                        <div class="flex items-center relative">
                            <input type="text"
                                   class="form-input w-full h-10 !ring-0 !ring-offset-0 bg-secondary border border-border focus:border-border rounded-xl text-sm text-foreground pr-10"
                                   placeholder="دنبال چی میگردی؟" />
                            <span class="absolute right-3 text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                        </div>
                    </form>
                    <div class="h-px bg-border"></div>
                    <label class="relative w-full flex items-center justify-between cursor-pointer">
                        <span class="font-bold text-sm text-foreground">تم تاریک</span>
                        <input type="checkbox" class="sr-only peer" id="dark-mode-checkbox" />
                        <div
                            class="w-11 h-5 relative bg-background border-2 border-border peer-focus:outline-none rounded-full peer peer-checked:after:left-[26px] peer-checked:after:bg-background after:content-[''] after:absolute after:left-0.5 after:top-0.5 after:bg-border after:rounded-full after:h-3 after:w-3 after:transition-all peer-checked:bg-primary peer-checked:border-primary">
                        </div>
                    </label>
                    <div class="h-px bg-border"></div>
                    <ul class="flex flex-col space-y-1">
                        <li x-data="{ open: false }">
                            <button type="button"
                                    class="w-full flex items-center gap-x-2 relative transition-all hover:text-foreground py-2"
                                    x-bind:class="open ? 'text-foreground' : 'text-muted'" x-on:click="open = !open">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                     class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                          d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="font-semibold text-xs">دسته بندی آموزشها</span>
                                <span class="absolute left-3" x-bind:class="open ? 'rotate-180' : ''">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                        </svg>
                                    </span>
                            </button>
                            <ul class="flex flex-col relative before:content-[''] before:absolute before:inset-y-3 before:right-3 before:w-px before:bg-zinc-200 dark:before:bg-zinc-900 py-3 pr-5"
                                x-show="open">
                                <li x-data="{ openChild: false }">
                                    <button type="button"
                                            class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3"
                                            x-on:click="openChild = !openChild">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                             stroke-width="1.5" stroke="currentColor" class="w-4 h-4"
                                             x-bind:class="openChild ? '-rotate-45' : ''">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M15.75 19.5 8.25 12l7.5-7.5"></path>
                                        </svg>
                                        <span class="font-medium text-xs">برنامه نویسی وب</span>
                                    </button>
                                    <ul class="flex flex-col relative before:content-[''] before:absolute before:inset-y-3 before:right-3 before:w-px before:bg-zinc-200 dark:before:bg-zinc-900 py-3 pr-5"
                                        x-show="openChild">
                                        <li>
                                            <a href="./series.html"
                                               class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                <span class="font-medium text-xs">جاوااسکریپت</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./series.html"
                                               class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                <span class="font-medium text-xs">نود جی اس</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./series.html"
                                               class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                <span class="font-medium text-xs">ریکت جی اس</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="./series.html"
                                               class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                                    <span
                                                        class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                                <span class="font-medium text-xs">...</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="./series.html"
                                       class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                        <span class="font-medium text-xs">دیتا ساینس</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./series.html"
                                       class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                        <span class="font-medium text-xs">زبانهای برنامه نویسی</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./series.html"
                                       class="w-full flex items-center gap-x-2 bg-transparent rounded-xl text-zinc-400 transition-all group/nav-item hover:text-black dark:hover:text-white py-2 px-3">
                                            <span
                                                class="inline-flex w-2 h-px bg-zinc-200 dark:bg-zinc-800 transition-all group-hover/nav-item:w-4 group-hover/nav-item:bg-black dark:group-hover/nav-item:bg-white"></span>
                                        <span class="font-medium text-xs">...</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"
                               class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z">
                                    </path>
                                </svg>
                                <span class="font-semibold text-xs">پرسش و پاسخ</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="w-full flex items-center gap-x-2 relative text-muted transition-all hover:text-foreground py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                    </path>
                                </svg>
                                <span class="font-semibold text-xs">مقالات آموزشی</span>
                            </a>
                        </li>
                    </ul>
                </div><!-- end offcanvas:content -->
            </div><!-- end offcanvas:box -->

            <!-- offcanvas:overlay -->
            <div class="fixed inset-0 h-screen bg-secondary/80 cursor-pointer transition-all duration-1000 z-40"
                 x-bind:class="offcanvasOpen ? 'opacity-100 visible' : 'opacity-0 invisible'"
                 x-on:click="offcanvasOpen = false">
            </div><!-- end offcanvas:overlay -->
        </div><!-- end offcanvas -->
    </header>
    <!-- end header -->

    <main class="flex-auto py-5">
        @yield('content')
    </main>

    <!-- footer -->
    <footer class="pt-20">
        <div class="max-w-7xl px-4 mx-auto">
            <div class="flex items-center gap-3">
                <div class="flex-grow border-t border-border border-dashed"></div>
                <button type="button"
                        class="flex-shrink-0 h-11 inline-flex items-center gap-3 bg-secondary rounded-full text-foreground transition-colors hover:text-primary px-4"
                        id="scrollToTopBtn">
                    <span class="text-xs">برگشت به بالا</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                    </svg>
                </button>
            </div>
            <div class="flex lg:flex-nowrap flex-wrap gap-8 py-10">
                <div class="md:w-5/12 w-full">
                    <a href="./home.html" class="inline-flex items-center gap-2 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                             class="w-6 h-6">
                            <path
                                d="M12 .75a8.25 8.25 0 0 0-4.135 15.39c.686.398 1.115 1.008 1.134 1.623a.75.75 0 0 0 .577.706c.352.083.71.148 1.074.195.323.041.6-.218.6-.544v-4.661a6.714 6.714 0 0 1-.937-.171.75.75 0 1 1 .374-1.453 5.261 5.261 0 0 0 2.626 0 .75.75 0 1 1 .374 1.452 6.712 6.712 0 0 1-.937.172v4.66c0 .327.277.586.6.545.364-.047.722-.112 1.074-.195a.75.75 0 0 0 .577-.706c.02-.615.448-1.225 1.134-1.623A8.25 8.25 0 0 0 12 .75Z" />
                            <path fill-rule="evenodd"
                                  d="M9.013 19.9a.75.75 0 0 1 .877-.597 11.319 11.319 0 0 0 4.22 0 .75.75 0 1 1 .28 1.473 12.819 12.819 0 0 1-4.78 0 .75.75 0 0 1-.597-.876ZM9.754 22.344a.75.75 0 0 1 .824-.668 13.682 13.682 0 0 0 2.844 0 .75.75 0 1 1 .156 1.492 15.156 15.156 0 0 1-3.156 0 .75.75 0 0 1-.668-.824Z"
                                  clip-rule="evenodd" />
                        </svg>
                        <span class="flex flex-col items-start">
                                <span class="font-semibold text-sm text-muted">آکــــادمـــی</span>
                                <span class="font-black text-xl">نـــابــــغه</span>
                            </span>
                    </a>
                </div>
                <div style="display: none" class="md:w-7/12 w-full">
                    <div class="flex flex-wrap items-center gap-10">
                        <div class="flex items-center gap-5">
                                <span
                                    class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M2 3.5A1.5 1.5 0 0 1 3.5 2h1.148a1.5 1.5 0 0 1 1.465 1.175l.716 3.223a1.5 1.5 0 0 1-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 0 0 6.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 0 1 1.767-1.052l3.223.716A1.5 1.5 0 0 1 18 15.352V16.5a1.5 1.5 0 0 1-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 0 1 2.43 8.326 13.019 13.019 0 0 1 2 5V3.5Z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            <div class="flex flex-col font-black space-y-2">
                                <span class="text-sm text-primary">شماره تلفن</span>
                                <span class="text-foreground">۰۲۱−۱۲۳۴۵۶۷</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-5">
                                <span
                                    class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-muted">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                         class="w-5 h-5">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </span>
                            <div class="flex flex-col font-black space-y-2">
                                <span class="text-sm text-primary">ساعات کاری</span>
                                <span class="text-foreground">۰۹:۰۰ - ۱۷:۰۰</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex md:flex-nowrap flex-wrap gap-8">
                <div class="md:w-5/12 w-full">
                    <div class="bg-secondary rounded-3xl space-y-5 p-8">
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                            </div>
                            <div class="font-black text-foreground">دربــــاره</div>
                        </div>
                        <p class="font-semibold text-sm text-muted">
                            نابغه یکی از پرتلاش‌ترین و بروزترین وبسایت های آموزشی در سطح ایران
                            است که همیشه تلاش کرده تا بتواند جدیدترین و بروزترین مقالات و
                            دوره‌های آموزشی را در اختیار علاقه‌مندان ایرانی قرار دهد. تبدیل کردن
                            برنامه نویسان ایرانی به بهترین برنامه نویسان جهان هدف ماست.
                        </p>
                    </div>
                </div>
                <div class="md:w-7/12 w-full">
                    <div class="grid sm:grid-cols-5 gap-8">
                        <div class="sm:col-span-2 space-y-5">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1">
                                    <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                    <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                </div>
                                <div class="font-black text-foreground">لینک های مفید</div>
                            </div>
                            <ul class="flex flex-col space-y-1">
                                <li>
                                    <a href="#"
                                       class="inline-flex font-semibold text-sm text-muted hover:text-primary">قوانین
                                        و
                                        مقررات</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="inline-flex font-semibold text-sm text-muted hover:text-primary">مدرسان</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="inline-flex font-semibold text-sm text-muted hover:text-primary">درباره
                                        نابغه</a>
                                </li>
                                <li>
                                    <a href="#"
                                       class="inline-flex font-semibold text-sm text-muted hover:text-primary">ارتباط
                                        با
                                        ما</a>
                                </li>
                            </ul>
                        </div>
                        <div class="sm:col-span-3 space-y-5">
                            <div class="space-y-5">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">خبرنامه</div>
                                </div>
                                <p class="text-sm text-muted">
                                    برای اطلاع از جدیدترین اخبار و جشنوراه‌های تخفیفی نابغه ایمیل خود
                                    را وارد کنید.
                                </p>
                                <form action="#">
                                    <div class="flex items-center gap-3 relative">
                                            <span class="absolute right-3 text-muted">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path
                                                        d="M3 4a2 2 0 0 0-2 2v1.161l8.441 4.221a1.25 1.25 0 0 0 1.118 0L19 7.162V6a2 2 0 0 0-2-2H3Z">
                                                    </path>
                                                    <path
                                                        d="m19 8.839-7.77 3.885a2.75 2.75 0 0 1-2.46 0L1 8.839V14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V8.839Z">
                                                    </path>
                                                </svg>
                                            </span>
                                        <input type="email"
                                               class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-0 focus:border-border rounded-xl text-sm text-foreground pr-10"
                                               placeholder="آدرس ایمیل" required />
                                        <button type="submit"
                                                class="h-11 inline-flex items-center justify-center gap-3 bg-primary rounded-xl whitespace-nowrap text-xs text-primary-foreground transition-all hover:opacity-80 px-4">ثبت
                                            ایمیل</button>
                                    </div>
                                </form>
                            </div>
                            <div class="space-y-5">
                                <div class="flex items-center gap-3">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">شبکه های اجتماعی</div>
                                </div>
                                <ul class="flex flex-wrap items-center gap-5">
                                    <li>
                                        <a href="#"
                                           class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-foreground transition-colors hover:text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="w-5 h-5">
                                                <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                                <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-foreground transition-colors hover:text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="w-5 h-5">
                                                <path d="m22 2-7 20-4-9-9-4Z"></path>
                                                <path d="M22 2 11 13"></path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"
                                           class="flex items-center justify-center w-12 h-12 bg-secondary rounded-full text-foreground transition-colors hover:text-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                 stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                 stroke-linejoin="round" class="w-5 h-5">
                                                <path
                                                    d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17">
                                                </path>
                                                <path d="m10 15 5-3-5-3z"></path>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-3 py-5">
                <p class="text-xs text-muted">&#169; کليه حقوق محفوظ است</p>
                <div class="flex-grow border-t border-border border-dashed"></div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</div>


<script src="{{asset('assets/js/dependencies/alpinejs.min.js')}}"></script>
<script src="{{asset('assets/js/dependencies/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/dependencies/plyr.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>

@yield('extraFooter')

</body>

</html>
