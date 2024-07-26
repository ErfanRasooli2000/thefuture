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
                            <div class="font-black text-foreground">تاریخچه تراکنشها</div>
                        </div>
                        <!-- end section:title -->

                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-right">
                                <thead
                                    class="text-xs text-muted uppercase bg-background border-b border-border">
                                <tr>
                                    <th class="whitespace-nowrap p-5">شماره پیگیری</th>
                                    <th class="whitespace-nowrap p-5">وضعیت</th>
                                    <th class="whitespace-nowrap p-5">شرح تراکنش</th>
                                    <th class="whitespace-nowrap p-5">مبلغ</th>
                                    <th class="whitespace-nowrap p-5">تاریخ ایجاد</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd:bg-secondary even:bg-background">
                                    <td class="p-5">
                                        <div class="font-black text-sm text-foreground">۱۰۷۹</div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex items-center gap-2">
                                            <div class="flex-shrink-0 rounded-full bg-green-500/20 p-1">
                                                <div class="h-1.5 w-1.5 rounded-full bg-green-500"></div>
                                            </div>
                                            <span class="font-bold text-green-500">موفق</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex flex-col items-start gap-1 w-36">
                                                        <span class="font-bold text-xs text-muted">خرید عضویت
                                                            ویژه</span>
                                            <span class="font-black text-sm text-foreground line-clamp-1">سه
                                                            ماهه</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex items-center gap-1">
                                                        <span
                                                            class="font-black text-sm text-foreground">۱,۰۷۹,۰۰۰</span>
                                            <span class="text-xs text-muted">تومان</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="text-xs text-muted whitespace-nowrap">
                                            ۲۰ اردیبهشت ۱۴۰۲
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd:bg-secondary even:bg-background">
                                    <td class="p-5">
                                        <div class="font-black text-sm text-foreground">۱۰۷۹</div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex items-center gap-2">
                                            <div class="flex-shrink-0 rounded-full bg-green-500/20 p-1">
                                                <div class="h-1.5 w-1.5 rounded-full bg-green-500"></div>
                                            </div>
                                            <span class="font-bold text-green-500">موفق</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex flex-col items-start gap-1 w-36">
                                            <span class="font-bold text-xs text-muted">خرید دوره</span>
                                            <span
                                                class="font-black text-sm text-foreground line-clamp-1">دوره
                                                            پروژه محور
                                                            React و
                                                            Next</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex items-center gap-1">
                                                        <span
                                                            class="font-black text-sm text-foreground">۱,۰۷۹,۰۰۰</span>
                                            <span class="text-xs text-muted">تومان</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="text-xs text-muted whitespace-nowrap">
                                            ۲۰ اردیبهشت ۱۴۰۲
                                        </div>
                                    </td>
                                </tr>
                                <tr class="odd:bg-secondary even:bg-background">
                                    <td class="p-5">
                                        <div class="font-black text-sm text-foreground">۱۰۷۹</div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex items-center gap-2">
                                            <div class="flex-shrink-0 rounded-full bg-green-500/20 p-1">
                                                <div class="h-1.5 w-1.5 rounded-full bg-green-500"></div>
                                            </div>
                                            <span class="font-bold text-green-500">موفق</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex flex-col items-start gap-1 w-36">
                                                        <span class="font-bold text-xs text-muted">خرید عضویت
                                                            ویژه</span>
                                            <span class="font-black text-sm text-foreground line-clamp-1">شش
                                                            ماهه</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="flex items-center gap-1">
                                                        <span
                                                            class="font-black text-sm text-foreground">۱,۰۷۹,۰۰۰</span>
                                            <span class="text-xs text-muted">تومان</span>
                                        </div>
                                    </td>
                                    <td class="p-5">
                                        <div class="text-xs text-muted whitespace-nowrap">
                                            ۲۰ اردیبهشت ۱۴۰۲
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
