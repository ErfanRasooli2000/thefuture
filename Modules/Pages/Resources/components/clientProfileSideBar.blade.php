<?php

    $selectedClass = "w-full h-11 inline-flex items-center text-right gap-3 bg-primary rounded-full text-primary-foreground px-4";
    $unSelectedClass = "w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4";

?>

<div class="lg:col-span-3 md:col-span-4 md:sticky md:top-24">
    <!-- user:info -->
    <div class="flex items-center gap-5 mb-5">
        <div class="flex items-center gap-3">
            <div class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                <img src="{{asset('assets/images/avatars/01.jpeg')}}" class="w-full h-full object-cover"
                     alt="..." />
            </div>
            <div class="flex flex-col items-start space-y-1">
                <span class="text-xs text-muted">خوش آمدید</span>
                <span class="line-clamp-1 font-semibold text-sm text-foreground cursor-default">جلال
                                        بهرامی راد</span>
            </div>
        </div>
    </div>
    <!-- end user:info -->

    <!-- user:menus -->
    <ul class="flex flex-col space-y-3 bg-secondary rounded-2xl p-5">
        <li>
            <a href="{{route('client.profile.dashboard')}}"
               class="{{Route::currentRouteName() == 'client.profile.dashboard' ? $selectedClass : $unSelectedClass}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 7.125C2.25 6.504 2.754 6 3.375 6h6c.621 0 1.125.504 1.125 1.125v3.75c0 .621-.504 1.125-1.125 1.125h-6a1.125 1.125 0 0 1-1.125-1.125v-3.75ZM14.25 8.625c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v8.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-8.25ZM3.75 16.125c0-.621.504-1.125 1.125-1.125h5.25c.621 0 1.125.504 1.125 1.125v2.25c0 .621-.504 1.125-1.125 1.125h-5.25a1.125 1.125 0 0 1-1.125-1.125v-2.25Z" />
                </svg>
                <span class="font-semibold text-xs">پیشخوان</span>
            </a>
        </li>
        <li>
            <a href="{{route('client.profile.courses')}}"
               class="{{Route::currentRouteName() == 'client.profile.courses' ? $selectedClass : $unSelectedClass}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5">
                    </path>
                </svg>
                <span class="font-semibold text-xs">دوره ها</span>
            </a>
        </li>
        <li>
            <a href="{{route('client.profile.favourites')}}"
               class="{{Route::currentRouteName() == 'client.profile.favourites' ? $selectedClass : $unSelectedClass}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z">
                    </path>
                </svg>
                <span class="font-semibold text-xs">علاقمندی ها</span>
            </a>
        </li>
        <li>
            <a href="{{route('client.profile.payments')}}"
               class="{{Route::currentRouteName() == 'client.profile.payments' ? $selectedClass : $unSelectedClass}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M21 12a2.25 2.25 0 0 0-2.25-2.25H15a3 3 0 1 1-6 0H5.25A2.25 2.25 0 0 0 3 12m18 0v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 9m18 0V6a2.25 2.25 0 0 0-2.25-2.25H5.25A2.25 2.25 0 0 0 3 6v3">
                    </path>
                </svg>
                <span class="font-semibold text-xs">مالی و اشتراک</span>
            </a>
        </li>
        <li>
            <a href="{{route('client.profile.comments')}}"
               class="{{Route::currentRouteName() == 'client.profile.comments' ? $selectedClass : $unSelectedClass}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
                <span class="font-semibold text-xs">دیدگاه و پرسشهای شما</span>
            </a>
        </li>
        <li>
            <a href="{{route('client.profile.notifications')}}"
               class="{{Route::currentRouteName() == 'client.profile.notifications' ? $selectedClass : $unSelectedClass}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0">
                    </path>
                </svg>
                <span class="font-semibold text-xs">اعلانات</span>
            </a>
        </li>
        <li>
            <a href="{{route('client.profile.edit')}}"
               class="{{Route::currentRouteName() == 'client.profile.edit' ? $selectedClass : $unSelectedClass}}">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                     class="w-5 h-5">
                    <path
                        d="M21.731 2.269a2.625 2.625 0 0 0-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 0 0 0-3.712ZM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 0 0-1.32 2.214l-.8 2.685a.75.75 0 0 0 .933.933l2.685-.8a5.25 5.25 0 0 0 2.214-1.32L19.513 8.2Z" />
                </svg>
                <span class="font-semibold text-xs">ویرایش پروفایل</span>
            </a>
        </li>
        <li>
            <button type="button"
                    class="w-full h-11 inline-flex items-center text-right gap-3 bg-background rounded-full text-muted transition-colors hover:bg-primary hover:text-primary-foreground px-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15">
                    </path>
                </svg>
                <span class="font-semibold text-xs">خروج از حساب</span>
            </button>
        </li>
    </ul>
    <!-- end user:menus -->
</div>