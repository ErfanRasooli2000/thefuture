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
                            <div class="font-black text-foreground">ویرایش پروفایل</div>
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
                                                class="flex items-center gap-x-2 w-full relative rounded-full py-2 px-4"
                                                x-bind:class="activeTab === 'tabOne' ? 'text-foreground bg-background' : 'text-muted'"
                                                x-on:click="activeTab = 'tabOne'">
                                            <!-- active icon -->
                                            <span x-show="activeTab === 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M16.7574 2.99677L9.29145 10.4627L9.29886 14.7098L13.537 14.7024L21 7.23941V19.9968C21 20.5491 20.5523 20.9968 20 20.9968H4C3.44772 20.9968 3 20.5491 3 19.9968V3.99677C3 3.44448 3.44772 2.99677 4 2.99677H16.7574ZM20.4853 2.09727L21.8995 3.51149L12.7071 12.7039L11.2954 12.7063L11.2929 11.2897L20.4853 2.09727Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                            <!-- inactive icon -->
                                            <span x-show="activeTab !== 'tabOne'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M16.7574 2.99677L14.7574 4.99677H5V18.9968H19V9.23941L21 7.23941V19.9968C21 20.5491 20.5523 20.9968 20 20.9968H4C3.44772 20.9968 3 20.5491 3 19.9968V3.99677C3 3.44448 3.44772 2.99677 4 2.99677H16.7574ZM20.4853 2.09727L21.8995 3.51149L12.7071 12.7039L11.2954 12.7063L11.2929 11.2897L20.4853 2.09727Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                            <span class="font-semibold text-sm whitespace-nowrap">اطلاعات
                                                        حساب</span>
                                        </button>
                                    </li><!-- end tabs:list:item -->

                                    <!-- tabs:list:item -->
                                    <li>
                                        <button type="button"
                                                class="flex items-center gap-x-2 w-full relative rounded-full py-2 px-4"
                                                x-bind:class="activeTab === 'tabTwo' ? 'text-foreground bg-background' : 'text-muted'"
                                                x-on:click="activeTab = 'tabTwo'">
                                            <!-- active icon -->
                                            <span x-show="activeTab === 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M6 2H18C18.5523 2 19 2.44772 19 3V21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2ZM12 17C11.4477 17 11 17.4477 11 18C11 18.5523 11.4477 19 12 19C12.5523 19 13 18.5523 13 18C13 17.4477 12.5523 17 12 17Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end active icon -->

                                            <!-- inactive icon -->
                                            <span x-show="activeTab !== 'tabTwo'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                             fill="currentColor" class="w-5 h-5">
                                                            <path
                                                                d="M7 4V20H17V4H7ZM6 2H18C18.5523 2 19 2.44772 19 3V21C19 21.5523 18.5523 22 18 22H6C5.44772 22 5 21.5523 5 21V3C5 2.44772 5.44772 2 6 2ZM12 17C12.5523 17 13 17.4477 13 18C13 18.5523 12.5523 19 12 19C11.4477 19 11 18.5523 11 18C11 17.4477 11.4477 17 12 17Z">
                                                            </path>
                                                        </svg>
                                                    </span><!-- end inactive icon -->

                                            <span class="font-semibold text-sm whitespace-nowrap">شماره
                                                        موبایل</span>
                                        </button>
                                    </li><!-- end tabs:list:item -->
                                </ul><!-- end tabs:list -->
                            </div><!-- end tabs:list-container -->
                            <!-- tabs:contents -->
                            <div class="bg-background rounded-3xl p-5">
                                <!-- tabs:contents:tabOne -->
                                <div class="space-y-5" x-show="activeTab === 'tabOne'">
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-1">
                                            <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                            <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                        </div>
                                        <div class="font-black text-foreground">اطلاعات حساب</div>
                                    </div>

                                    <form action="#" class="space-y-5">
                                        <div class="grid sm:grid-cols-2 gap-5">
                                            <div class="space-y-1">
                                                <label for="fullname" class="font-medium text-xs text-muted">نام
                                                    و
                                                    نام خانوادگی (فارسی)</label>
                                                <input type="text" id="fullname" value="{{$client->name}}"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            </div>
                                            <div class="space-y-1">
                                                <label for="email"
                                                       class="font-medium text-xs text-muted">ایمیل</label>
                                                <input type="text" id="email" dir="ltr"  value="{{$client->email}}"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                                <div class="font-medium text-xs text-muted">
                                                    در حال حاضر ایمیل قابل تغییر نمیباشد.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="flex items-center gap-1">
                                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                            </div>
                                            <div class="font-black text-foreground">اطلاعات فردی</div>
                                        </div>
                                        <div class="space-y-1">
                                            <label for="birthday" class="font-medium text-xs text-muted">تاریخ
                                                تولد</label>
                                            <div class="grid sm:grid-cols-3 gap-5"
                                                 x-data="{range: function(start, end) { return Array(end - start + 1).fill().map((_, idx) => start + idx) } }">
                                                <!-- form:select container -->
                                                <div class="flex flex-col space-y-2">
                                                    <!-- form:select -->
                                                    <div class="w-full relative"
                                                         x-data="{ open: false, selectedOption: 'انتخاب سال', selectedValue: '' }">
                                                        <!-- The selected value is stored in this input. -->
                                                        <input type="hidden" x-model="selectedValue" />

                                                        <!-- form:select:button -->
                                                        <button type="button" x-on:click="open = !open"
                                                                class="flex items-center w-full h-11 relative bg-secondary border border-border rounded-xl font-semibold text-xs text-right text-foreground px-3">
                                                                    <span class="line-clamp-1"
                                                                          x-text="selectedOption"></span>
                                                            <span
                                                                class="absolute left-3 pointer-events-none transition-transform"
                                                                x-bind:class="open ? 'rotate-180' : ''">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             fill="none" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="currentColor"
                                                                             class="w-5 h-5">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                                                        </svg>
                                                                    </span>
                                                        </button><!-- end form:select:button -->

                                                        <!-- form:select:options container -->
                                                        <div class="absolute w-full bg-secondary border border-border rounded-xl shadow-lg overflow-hidden mt-2 z-30"
                                                             x-show="open" x-on:click.away="open = false">
                                                            <ul class="max-h-48 overflow-y-auto">
                                                                <template x-for="year in range(1340, 1403)"
                                                                          :key="index">
                                                                    <!-- form:select option -->
                                                                    <li class="font-medium text-xs text-foreground cursor-pointer hover:bg-background px-4 py-3"
                                                                        x-on:click="selectedOption = year; selectedValue = year.toString(); open = false"
                                                                        x-text="year">
                                                                    </li>
                                                                    <!-- end form:select:option -->
                                                                </template>
                                                            </ul>
                                                        </div><!-- end form:select:options container -->
                                                    </div><!-- end form:select -->
                                                </div><!-- end form:select container -->

                                                <!-- form:select container -->
                                                <div class="flex flex-col space-y-2">
                                                    <!-- form:select -->
                                                    <div class="w-full relative"
                                                         x-data="{ open: false, selectedOption: 'انتخاب ماه', selectedValue: '', options: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور', 'مهر', 'آبان', 'آذر', 'دی', 'بهمن', 'اسفند'] }">
                                                        <!-- The selected value is stored in this input. -->
                                                        <input type="hidden" x-model="selectedValue" />

                                                        <!-- form:select:button -->
                                                        <button type="button" x-on:click="open = !open"
                                                                class="flex items-center w-full h-11 relative bg-secondary border border-border rounded-xl font-semibold text-xs text-right text-foreground px-3">
                                                                    <span class="line-clamp-1"
                                                                          x-text="selectedOption"></span>
                                                            <span
                                                                class="absolute left-3 pointer-events-none transition-transform"
                                                                x-bind:class="open ? 'rotate-180' : ''">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             fill="none" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="currentColor"
                                                                             class="w-5 h-5">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                                                        </svg>
                                                                    </span>
                                                        </button><!-- end form:select:button -->

                                                        <!-- form:select:options container -->
                                                        <div class="absolute w-full bg-secondary border border-border rounded-xl shadow-lg overflow-hidden mt-2 z-30"
                                                             x-show="open" x-on:click.away="open = false">
                                                            <ul class="max-h-48 overflow-y-auto">
                                                                <template x-for="(month, index) in options"
                                                                          :key="index">
                                                                    <!-- form:select option -->
                                                                    <li class="font-medium text-xs text-foreground cursor-pointer hover:bg-background px-4 py-3"
                                                                        x-on:click="selectedOption = month; selectedValue = (index + 1).toString(); open = false"
                                                                        x-text="month">
                                                                    </li>
                                                                    <!-- end form:select:option -->
                                                                </template>
                                                            </ul>
                                                        </div><!-- end form:select:options container -->
                                                    </div><!-- end form:select -->
                                                </div><!-- end form:select container -->

                                                <!-- form:select container -->
                                                <div class="flex flex-col space-y-2">
                                                    <!-- form:select -->
                                                    <div class="w-full relative"
                                                         x-data="{ open: false, selectedOption: 'انتخاب روز', selectedValue: '' }">
                                                        <!-- The selected value is stored in this input. -->
                                                        <input type="hidden" x-model="selectedValue" />

                                                        <!-- form:select:button -->
                                                        <button type="button" x-on:click="open = !open"
                                                                class="flex items-center w-full h-11 relative bg-secondary border border-border rounded-xl font-semibold text-xs text-right text-foreground px-3">
                                                                    <span class="line-clamp-1"
                                                                          x-text="selectedOption"></span>
                                                            <span
                                                                class="absolute left-3 pointer-events-none transition-transform"
                                                                x-bind:class="open ? 'rotate-180' : ''">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             fill="none" viewBox="0 0 24 24"
                                                                             stroke-width="1.5" stroke="currentColor"
                                                                             class="w-5 h-5">
                                                                            <path stroke-linecap="round"
                                                                                  stroke-linejoin="round"
                                                                                  d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
                                                                        </svg>
                                                                    </span>
                                                        </button><!-- end form:select:button -->

                                                        <!-- form:select:options container -->
                                                        <div class="absolute w-full bg-secondary border border-border rounded-xl shadow-lg overflow-hidden mt-2 z-30"
                                                             x-show="open" x-on:click.away="open = false">
                                                            <ul class="max-h-48 overflow-y-auto">
                                                                <template x-for="day in range(1, 31)"
                                                                          :key="index">
                                                                    <!-- form:select option -->
                                                                    <li class="font-medium text-xs text-foreground cursor-pointer hover:bg-background px-4 py-3"
                                                                        x-on:click="selectedOption = day; selectedValue = day.toString(); open = false"
                                                                        x-text="day">
                                                                    </li>
                                                                    <!-- end form:select:option -->
                                                                </template>
                                                            </ul>
                                                        </div><!-- end form:select:options container -->
                                                    </div><!-- end form:select -->
                                                </div><!-- end form:select container -->
                                            </div>
                                        </div>
                                        <div class="space-y-1">
                                            <label for="bio" class="font-medium text-xs text-muted">درباره
                                                من</label>
                                            <textarea rows="5" id="bio"
                                                      class="form-textarea w-full !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5">
                                                 {{$client->profile->biography}}
                                            </textarea>
                                        </div>
                                        <div class="flex items-center gap-3">
                                            <div class="flex items-center gap-1">
                                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                            </div>
                                            <div class="font-black text-foreground">راه های ارتباطی</div>
                                        </div>
                                        <div class="grid sm:grid-cols-2 gap-5">
                                            <div class="space-y-1">
                                                <label for="website"
                                                       class="font-medium text-xs text-muted">وبسایت</label>
                                                <input type="text" dir="ltr" id="website"  value="{{$client->profile->website}}"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            </div>
                                            <div class="space-y-1">
                                                <label for="github" class="font-medium text-xs text-muted">گیت
                                                    هاب</label>
                                                <input type="text" dir="ltr" id="github"  value="{{$client->profile->github}}"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            </div>
                                            <div class="space-y-1">
                                                <label for="linkedin"
                                                       class="font-medium text-xs text-muted">لینکدین</label>
                                                <input type="text" dir="ltr" id="linkedin"  value="{{$client->profile->linkedin}}"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            </div>
                                            <div class="space-y-1">
                                                <label for="telegram"
                                                       class="font-medium text-xs text-muted">تلگرام</label>
                                                <input type="text" dir="ltr" id="telegram"  value="{{$client->profile->telegram}}"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            </div>
                                        </div>
                                        <div class="flex justify-end gap-5">
                                            <button type="submit"
                                                    class="h-11 inline-flex items-center justify-center gap-3 bg-primary rounded-full text-white px-4 mr-auto">
                                                <span class="font-semibold text-sm">بروزرسانی</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div><!-- end tabs:contents:tabOne -->

                                <!-- tabs:contents:tabTwo -->
                                <div class="space-y-5" x-show="activeTab === 'tabTwo'">
                                    <div class="flex items-center gap-3">
                                        <div class="flex items-center gap-1">
                                            <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                            <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                        </div>
                                        <div class="font-black text-foreground">شماره موبایل</div>
                                    </div>
                                    <!-- alert -->
                                    <div class="flex items-start gap-3 relative bg-zinc-50 dark:bg-zinc-900 border border-border rounded-xl p-5"
                                         x-show="open" x-data="{ open: true }">
                                        <!-- alert:icon -->
                                        <span class="text-blue-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                         fill="currentColor" class="w-5 h-5">
                                                        <path fill-rule="evenodd"
                                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                              clip-rule="evenodd"></path>
                                                    </svg>
                                                </span><!-- alert:icon -->

                                        <!-- alert:content -->
                                        <div class="flex flex-col items-start">
                                            <!-- alert:title -->
                                            <div class="font-bold text-sm text-blue-500 mb-2">
                                                توجه :‌
                                            </div><!-- end alert:title -->

                                            <!-- alert:desc -->
                                            <div class="font-semibold text-xs text-zinc-400">
                                                <p class="mb-3">
                                                    شماره تلفن شما برای کارهای مختلفی در سایت مورد استفاده قرار
                                                    میگیرد با وارد کردن شماره تلفن خود و فعال کردن آن میتوانید
                                                    بخشی
                                                    از فعالیت های خود را در نابغه سریع تر انجام دهید. در زیر
                                                    لیست
                                                    کارهای که با شماره تلفن شما در سایت انجام میشود، را برایتان
                                                    آورده ایم.
                                                </p>

                                                <ul>
                                                    <li>
                                                        ۱.در آینده نزدیک ورود به سایت تماما با شماره تلفن همراه
                                                        انجام
                                                        خواهد شد. (به زودی)
                                                    </li>
                                                    <li>
                                                        ۲.در هنگام ورود به سایت پیامکی برای شما ارسال میشود تا
                                                        از
                                                        ورود‌های بدون اجازه مطلع شوید. کنید
                                                    </li>
                                                    <li>
                                                        ۳.در صورت فعال‌سازی نوتیفیکشن یک دوره، قسمت‌های جدید آن
                                                        دوره
                                                        با پیامک به شما اطلاع داده خواهد شد. (به زودی)
                                                    </li>
                                                    <li>
                                                        ۴.در صورت اضافه شدن مورد جدید در این لیست اضافه خواهد شد
                                                        ...
                                                    </li>
                                                </ul>
                                            </div><!-- end alert:desc -->

                                            <!-- alert:actions -->
                                            <div class="flex flex-wrap items-center gap-3 mt-5">
                                                <button type="button"
                                                        class="flex items-center gap-x-1 text-zinc-400 underline-offset-1 hover:underline"
                                                        x-on:click="open = false">
                                                    <span class="font-bold text-xs">فهمیدم</span>
                                                </button>
                                            </div><!-- end alert:actions -->
                                        </div><!-- end alert:content -->
                                    </div><!-- end alert -->

                                    <form action="#" class="space-y-5">
                                        <div class="flex flex-col gap-5">
                                            <div class="space-y-1 sm:w-1/2">
                                                <label for="phone_number"
                                                       class="block font-medium text-xs text-muted">شماره تماس
                                                    فعلی</label>
                                                <input type="text" dir="ltr" id="phone_number"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground disabled:text-muted px-5"
                                                       value="09123456789" disabled />
                                            </div>
                                            <div class="space-y-1 sm:w-1/2">
                                                <label for="phone_number_new"
                                                       class="block font-medium text-xs text-muted">شماره تماس
                                                    جدید</label>
                                                <input type="text" dir="ltr" id="phone_number_new"
                                                       class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground px-5" />
                                            </div>
                                        </div>
                                        <div class="flex justify-end gap-5">
                                            <button type="submit"
                                                    class="h-11 inline-flex items-center justify-center gap-3 bg-primary rounded-full text-white px-4 mr-auto">
                                                <span class="font-semibold text-sm">بروزرسانی</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M15.312 11.424a5.5 5.5 0 0 1-9.201 2.466l-.312-.311h2.433a.75.75 0 0 0 0-1.5H3.989a.75.75 0 0 0-.75.75v4.242a.75.75 0 0 0 1.5 0v-2.43l.31.31a7 7 0 0 0 11.712-3.138.75.75 0 0 0-1.449-.39Zm1.23-3.723a.75.75 0 0 0 .219-.53V2.929a.75.75 0 0 0-1.5 0V5.36l-.31-.31A7 7 0 0 0 3.239 8.188a.75.75 0 1 0 1.448.389A5.5 5.5 0 0 1 13.89 6.11l.311.31h-2.432a.75.75 0 0 0 0 1.5h4.243a.75.75 0 0 0 .53-.219Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </form>
                                </div><!-- end tabs:contents:tabTwo -->
                            </div><!-- end tabs:contents -->
                        </div><!-- end tabs container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
