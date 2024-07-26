@extends('pages::layouts.main')

@section('title', 'ویرایش پروفایل')

@section('content')
    <div class="max-w-7xl space-y-14 px-4 mx-auto">
        <div class="grid md:grid-cols-12 grid-cols-1 items-start gap-5">
            @include('pages::components.clientProfileSideBar')
            <div class="lg:col-span-9 md:col-span-8">
                <div class="space-y-10">
                    <div class="space-y-5">
                        <!-- section:title -->
                        <div class="flex items-center gap-3">
                            <div class="flex items-center gap-1">
                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                            </div>
                            <div class="font-black text-foreground">دوره های من</div>
                        </div>
                        <!-- end section:title -->

                        <!-- tabs container -->
                        <div class="space-y-5" x-data="{ activeTab: 'tabOne'}">
                            <!-- tabs:list-container -->
                            <div class="relative overflow-x-auto">
                                <!-- tabs:list -->
                                <ul
                                    class="inline-flex gap-2 bg-secondary border border-border rounded-full p-1">
                                    <!-- tabs:list:item -->
                                    <li>
                                        <button type="button"
                                                class="flex items-center gap-x-2 relative rounded-full py-2 px-4"
                                                x-bind:class="activeTab === 'tabOne' ? 'text-foreground bg-background' : 'text-muted'"
                                                x-on:click="activeTab = 'tabOne'">
                                            <!-- active icon -->
                                            <span x-show="activeTab === 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M11.7 2.805a.75.75 0 0 1 .6 0A60.65 60.65 0 0 1 22.83 8.72a.75.75 0 0 1-.231 1.337 49.948 49.948 0 0 0-9.902 3.912l-.003.002c-.114.06-.227.119-.34.18a.75.75 0 0 1-.707 0A50.88 50.88 0 0 0 7.5 12.173v-.224c0-.131.067-.248.172-.311a54.615 54.615 0 0 1 4.653-2.52.75.75 0 0 0-.65-1.352 56.123 56.123 0 0 0-4.78 2.589 1.858 1.858 0 0 0-.859 1.228 49.803 49.803 0 0 0-4.634-1.527.75.75 0 0 1-.231-1.337A60.653 60.653 0 0 1 11.7 2.805Z">
                                                            </path>
                                                            <path
                                                                d="M13.06 15.473a48.45 48.45 0 0 1 7.666-3.282c.134 1.414.22 2.843.255 4.284a.75.75 0 0 1-.46.711 47.87 47.87 0 0 0-8.105 4.342.75.75 0 0 1-.832 0 47.87 47.87 0 0 0-8.104-4.342.75.75 0 0 1-.461-.71c.035-1.442.121-2.87.255-4.286.921.304 1.83.634 2.726.99v1.27a1.5 1.5 0 0 0-.14 2.508c-.09.38-.222.753-.397 1.11.452.213.901.434 1.346.66a6.727 6.727 0 0 0 .551-1.607 1.5 1.5 0 0 0 .14-2.67v-.645a48.549 48.549 0 0 1 3.44 1.667 2.25 2.25 0 0 0 2.12 0Z">
                                                            </path>
                                                            <path
                                                                d="M4.462 19.462c.42-.419.753-.89 1-1.395.453.214.902.435 1.347.662a6.742 6.742 0 0 1-1.286 1.794.75.75 0 0 1-1.06-1.06Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                            <!-- inactive icon -->
                                            <span x-show="activeTab !== 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                             class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                            <span class="font-semibold text-sm">در حال یادگیری</span>
                                        </button>
                                    </li><!-- end tabs:list:item -->

                                    <!-- tabs:list:item -->
                                    <li>
                                        <button type="button"
                                                class="flex items-center gap-x-2 relative rounded-full py-2 px-4"
                                                x-bind:class="activeTab === 'tabTwo' ? 'text-foreground bg-background' : 'text-muted'"
                                                x-on:click="activeTab = 'tabTwo'">
                                            <!-- active icon -->
                                            <span x-show="activeTab === 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path fill-rule="evenodd"
                                                                  d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0 0 16.5 9h-1.875a1.875 1.875 0 0 1-1.875-1.875V5.25A3.75 3.75 0 0 0 9 1.5H5.625ZM7.5 15a.75.75 0 0 1 .75-.75h7.5a.75.75 0 0 1 0 1.5h-7.5A.75.75 0 0 1 7.5 15Zm.75 2.25a.75.75 0 0 0 0 1.5H12a.75.75 0 0 0 0-1.5H8.25Z"
                                                                  clip-rule="evenodd"></path>
                                                            <path
                                                                d="M12.971 1.816A5.23 5.23 0 0 1 14.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 0 1 3.434 1.279 9.768 9.768 0 0 0-6.963-6.963Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                            <!-- inactive icon -->
                                            <span x-show="activeTab !== 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                             class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                  d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                            <span class="font-semibold text-sm">تکمیل شده</span>
                                        </button>
                                    </li><!-- end tabs:list:item -->
                                </ul>
                                <!-- end tabs:list -->
                            </div>
                            <!-- end tabs:list-container -->

                            <!-- tabs:contents -->
                            <div>
                                <!-- tabs:contents:tabOne -->
                                <div x-show="activeTab === 'tabOne'">
                                    <div class="swiper col3-swiper-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- course:card -->
                                                <div class="relative">
                                                    <div class="relative z-10">
                                                        <a href="./course-detail.html" class="block">
                                                            <img src="{{asset('assets/images/courses/01.jpg')}}"
                                                                 class="max-w-full rounded-3xl" alt="..." />
                                                        </a>
                                                        <a href="./course-category.html"
                                                           class="absolute left-3 top-3 h-11 inline-flex items-center justify-center gap-1 bg-black/20 rounded-full text-white transition-all hover:opacity-80 px-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 24 24" fill="currentColor"
                                                                 class="w-6 h-6">
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
                                                                        <span
                                                                            class="block w-1 h-1 bg-success rounded-full"></span>
                                                                <span
                                                                    class="font-bold text-xs text-success">تکمیل
                                                                            شده</span>
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
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20" fill="currentColor"
                                                                         class="w-5 h-5">
                                                                        <path
                                                                            d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z">
                                                                        </path>
                                                                        <path
                                                                            d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z">
                                                                        </path>
                                                                    </svg>
                                                                    <span class="font-semibold text-xs">۵
                                                                                فصل</span>
                                                                </div>
                                                                <span
                                                                    class="block w-1 h-1 bg-muted-foreground rounded-full"></span>
                                                                <div class="flex items-center gap-1 text-muted">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20" fill="currentColor"
                                                                         class="w-5 h-5">
                                                                        <path fill-rule="evenodd"
                                                                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                                                              clip-rule="evenodd"></path>
                                                                    </svg>
                                                                    <span class="font-semibold text-xs">۲۵
                                                                                ساعت</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex items-center justify-between gap-5">
                                                                <div class="flex items-center gap-3">
                                                                    <div
                                                                        class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                                        <img src="{{asset('assets/images/avatars/01.jpeg')}}"
                                                                             class="w-full h-full object-cover"
                                                                             alt="..." />
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col items-start space-y-1">
                                                                                <span
                                                                                    class="line-clamp-1 font-semibold text-xs text-muted">مدرس
                                                                                    دوره:</span>
                                                                        <a href="./lecturer.html"
                                                                           class="line-clamp-1 font-bold text-xs text-foreground hover:text-primary">جلال
                                                                            بهرامی راد</a>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="flex flex-col items-end justify-center h-14">
                                                                            <span
                                                                                class="line-through text-muted">۱,۱۹۹,۰۰۰</span>
                                                                    <div class="flex items-center gap-1">
                                                                                <span
                                                                                    class="font-black text-xl text-foreground">۱,۰۷۹,۰۰۰</span>
                                                                        <span
                                                                            class="text-xs text-muted">تومان</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space-y-3 mt-3">
                                                                <div class="flex flex-col">
                                                                            <span class="text-xs text-primary">۷۵.۵%
                                                                                مشاهده
                                                                                شده</span>
                                                                    <div
                                                                        class="relative w-full h-1.5 bg-border rounded-full overflow-hidden">
                                                                                <span
                                                                                    class="absolute right-0 h-full bg-primary"
                                                                                    style="width: 75.5%;"></span>
                                                                    </div>
                                                                </div>
                                                                <a href="./course-episodes.html"
                                                                   class="w-full h-11 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                                                                            <span class="font-semibold text-sm">ادامه
                                                                                یادگیری</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20" fill="currentColor"
                                                                         class="w-5 h-5">
                                                                        <path fill-rule="evenodd"
                                                                              d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                                              clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
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
                                                            <img src="{{asset('assets/images/courses/02.jpg')}}"
                                                                 class="max-w-full rounded-3xl" alt="..." />
                                                        </a>
                                                        <a href="./course-category.html"
                                                           class="absolute left-3 top-3 h-11 inline-flex items-center justify-center gap-1 bg-black/20 rounded-full text-white transition-all hover:opacity-80 px-4">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                 viewBox="0 0 24 24" fill="currentColor"
                                                                 class="w-6 h-6">
                                                                <path fill-rule="evenodd"
                                                                      d="M3 6a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3v2.25a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3V6ZM3 15.75a3 3 0 0 1 3-3h2.25a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3v-2.25Zm9.75 0a3 3 0 0 1 3-3H18a3 3 0 0 1 3 3V18a3 3 0 0 1-3 3h-2.25a3 3 0 0 1-3-3v-2.25Z"
                                                                      clip-rule="evenodd" />
                                                            </svg>
                                                            <span class="font-semibold text-sm">برنامه
                                                                        نویسی</span>
                                                        </a>
                                                    </div>
                                                    <div class="bg-background rounded-b-3xl -mt-12 pt-12">
                                                        <div
                                                            class="bg-gradient-to-b from-background to-secondary rounded-b-3xl space-y-2 p-5 mx-5">
                                                            <div class="flex items-center gap-2">
                                                                        <span
                                                                            class="block w-1 h-1 bg-success rounded-full"></span>
                                                                <span
                                                                    class="font-bold text-xs text-success">تکمیل
                                                                            شده</span>
                                                            </div>
                                                            <h2 class="font-bold text-sm">
                                                                <a href="./course-detail.html"
                                                                   class="line-clamp-1 text-foreground transition-colors hover:text-primary">قدم
                                                                    صفر برنامه نویسی</a>
                                                            </h2>
                                                        </div>
                                                        <div class="space-y-3 p-5">
                                                            <div class="flex flex-wrap items-center gap-3">
                                                                <div class="flex items-center gap-1 text-muted">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20" fill="currentColor"
                                                                         class="w-5 h-5">
                                                                        <path
                                                                            d="M7 3.5A1.5 1.5 0 0 1 8.5 2h3.879a1.5 1.5 0 0 1 1.06.44l3.122 3.12A1.5 1.5 0 0 1 17 6.622V12.5a1.5 1.5 0 0 1-1.5 1.5h-1v-3.379a3 3 0 0 0-.879-2.121L10.5 5.379A3 3 0 0 0 8.379 4.5H7v-1Z">
                                                                        </path>
                                                                        <path
                                                                            d="M4.5 6A1.5 1.5 0 0 0 3 7.5v9A1.5 1.5 0 0 0 4.5 18h7a1.5 1.5 0 0 0 1.5-1.5v-5.879a1.5 1.5 0 0 0-.44-1.06L9.44 6.439A1.5 1.5 0 0 0 8.378 6H4.5Z">
                                                                        </path>
                                                                    </svg>
                                                                    <span class="font-semibold text-xs">۵
                                                                                فصل</span>
                                                                </div>
                                                                <span
                                                                    class="block w-1 h-1 bg-muted-foreground rounded-full"></span>
                                                                <div class="flex items-center gap-1 text-muted">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20" fill="currentColor"
                                                                         class="w-5 h-5">
                                                                        <path fill-rule="evenodd"
                                                                              d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm.75-13a.75.75 0 0 0-1.5 0v5c0 .414.336.75.75.75h4a.75.75 0 0 0 0-1.5h-3.25V5Z"
                                                                              clip-rule="evenodd"></path>
                                                                    </svg>
                                                                    <span class="font-semibold text-xs">۲۵
                                                                                ساعت</span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="flex items-center justify-between gap-5">
                                                                <div class="flex items-center gap-3">
                                                                    <div
                                                                        class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                                        <img src="{{asset('assets/images/avatars/01.jpeg')}}"
                                                                             class="w-full h-full object-cover"
                                                                             alt="..." />
                                                                    </div>
                                                                    <div
                                                                        class="flex flex-col items-start space-y-1">
                                                                                <span
                                                                                    class="line-clamp-1 font-semibold text-xs text-muted">مدرس
                                                                                    دوره:</span>
                                                                        <a href="./lecturer.html"
                                                                           class="line-clamp-1 font-bold text-xs text-foreground hover:text-primary">جلال
                                                                            بهرامی راد</a>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="flex flex-col items-end justify-center h-14">
                                                                    <div class="flex items-center gap-1">
                                                                                <span
                                                                                    class="font-black text-xl text-success">رایگان!</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="space-y-3 mt-3">
                                                                <div class="flex flex-col">
                                                                            <span class="text-xs text-primary">۴۹%
                                                                                مشاهده
                                                                                شده</span>
                                                                    <div
                                                                        class="relative w-full h-1.5 bg-border rounded-full overflow-hidden">
                                                                                <span
                                                                                    class="absolute right-0 h-full bg-primary"
                                                                                    style="width: 49%;"></span>
                                                                    </div>
                                                                </div>
                                                                <a href="./course-episodes.html"
                                                                   class="w-full h-11 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                                                                            <span class="font-semibold text-sm">ادامه
                                                                                یادگیری</span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         viewBox="0 0 20 20" fill="currentColor"
                                                                         class="w-5 h-5">
                                                                        <path fill-rule="evenodd"
                                                                              d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                                              clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </a>
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
                                </div><!-- end tabs:contents:tabOne -->

                                <!-- tabs:contents:tabTwo -->
                                <div x-show="activeTab === 'tabTwo'">
                                    <div
                                        class="flex flex-col items-center justify-center w-full max-w-md space-y-12 mx-auto">
                                        <img src="{{asset('assets/images/theme/empty.svg')}}"
                                             class="w-full max-w-xs opacity-35" alt="..." />
                                        <div class="text-center space-y-3">
                                            <h2 class="font-bold text-xl text-foreground">
                                                موردی یافت نشد :)
                                            </h2>
                                            <p class="font-semibold text-sm text-muted">
                                                هنوز دوره ای به صورت کامل مشاهده نکرده اید،بعد از اتمام دوره
                                                هایی که در آن شرکت کرده اید می توانید از این بخش برای
                                                گرفتن مدرک اقدام کنید.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- end tabs:contents:tabTwo -->
                            </div><!-- end tabs:contents -->
                        </div><!-- end tabs container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
