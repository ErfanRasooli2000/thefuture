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
                            <div class="font-black text-foreground">اعلانات</div>
                        </div>
                        <!-- end section:title -->

                        <!-- section:notifications:wrapper -->
                        <div class="space-y-5">
                            <!-- notification-item -->
                            <div
                                class="flex md:items-center items-start gap-5 bg-background border border-border rounded-xl p-5">
                                <div class="flex items-center gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-warning">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                    </svg>
                                    <div class="w-px h-4 bg-border"></div>
                                </div>
                                <div class="flex flex-col items-start space-y-1">
                                    <div class="font-bold text-xs text-foreground">
                                        ورود به سیستم
                                    </div>
                                    <div class="font-medium text-xs text-muted">
                                        در صورتی که فکر میکنید این کار توسط شما انجام نشده هر چه سریع تر به
                                        بخش
                                        مدیریت نشست‌ها در بخش پنل کاربری خود در نابغه مراجعه بفرمایید و نشست
                                        مورد
                                        نظر را حذف کنید.
                                    </div>
                                    <div class="flex items-center gap-1 font-medium text-xs text-muted">
                                        ۶ روز پیش
                                    </div>
                                </div>
                            </div>
                            <!-- end notification-item -->

                            <!-- notification-item -->
                            <div
                                class="flex md:items-center items-start gap-5 bg-background border border-border rounded-xl p-5">
                                <div class="flex items-center gap-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-warning">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                    </svg>
                                    <div class="w-px h-4 bg-border"></div>
                                </div>
                                <div class="flex flex-col items-start space-y-1">
                                    <div class="font-bold text-xs text-foreground">
                                        ورود به سیستم
                                    </div>
                                    <div class="font-medium text-xs text-muted">
                                        در صورتی که فکر میکنید این کار توسط شما انجام نشده هر چه سریع تر به
                                        بخش
                                        مدیریت نشست‌ها در بخش پنل کاربری خود در نابغه مراجعه بفرمایید و نشست
                                        مورد
                                        نظر را حذف کنید.
                                    </div>
                                    <div class="flex items-center gap-1 font-medium text-xs text-muted">
                                        ۶ روز پیش
                                    </div>
                                </div>
                            </div>
                            <!-- end notification-item -->
                        </div>
                        <!-- end section:notifications:wrapper -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
