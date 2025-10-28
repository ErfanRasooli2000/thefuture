@extends('pages::layouts.main')

@section('title', 'صفحه اصلی')

@section('content')
    <div class="space-y-14">
        <!-- container -->
        <div class="max-w-7xl space-y-14 px-4 mx-auto">
            <!-- intro -->
            <div
                class="bg-learning bg-cover bg-center rounded-t-3xl relative overflow-hidden md:px-20 px-8 md:pt-20 pt-10 md:pb-48 pb-32">
                <div class="relative space-y-8 z-20">
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
                        <span class="font-semibold text-xs text-white">به زودی :)</span>
                    </div>
                    <h2 class="font-black sm:text-5xl text-3xl text-white">
                        داستان برنامه‌نویس شدنت <br />
                        از اینجا شروع میشه!
                    </h2>
                    <p class="sm:text-base text-sm text-white">
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
                <div class="absolute inset-0 bg-black/70"></div>
                <figure class="absolute bottom-0 right-0 left-0 w-full md:block z-10">
                    <svg class="fill-background" width="100%" height="150" viewBox="0 0 500 150"
                         preserveAspectRatio="none">
                        <path d="M0,150 L0,40 Q250,150 500,40 L580,150 Z"></path>
                    </svg>
                </figure>
            </div>
            <!-- end intro -->

            <!-- features -->
            <div>
                <!-- tabs container -->
                <div class="space-y-10" x-data="{ activeTab: 'tabOne'}">
                    <!-- tabs:list-container -->
                    <div class="flex justify-center">
                        <!-- tabs:list -->
                        <ul class="inline-flex gap-2 border-b border-border">
                            <!-- tabs:list:item -->
                            <li>
                                <button type="button"
                                        class="flex lg:flex-col items-center justify-center relative gap-3 border-b-4 py-2 px-4"
                                        x-bind:class="activeTab === 'tabOne' ? 'text-primary border-primary' : 'text-muted border-transparent'"
                                        x-on:click="activeTab = 'tabOne'">
                                    <!-- active icon -->
                                    <span x-bind:class="activeTab === 'tabOne' ? 'text-primary' : 'text-muted'">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor"
                                                     class="sm:w-9 sm:h-9 w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                                                </svg>
                                            </span><!-- end active icon -->

                                    <span class="lg:block hidden font-semibold text-sm"
                                          x-bind:class="activeTab === 'tabOne' ? 'md:block' : ''">در حال
                                                یادگیری</span>
                                </button>
                            </li><!-- end tabs:list:item -->

                            <!-- tabs:list:item -->
                            <li>
                                <button type="button"
                                        class="flex lg:flex-col items-center justify-center relative gap-3 border-b-4 py-2 px-4"
                                        x-bind:class="activeTab === 'tabTwo' ? 'text-primary border-primary' : 'text-muted border-transparent'"
                                        x-on:click="activeTab = 'tabTwo'">
                                    <!-- active icon -->
                                    <span x-bind:class="activeTab === 'tabTwo' ? 'text-primary' : 'text-muted'">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor"
                                                     class="sm:w-9 sm:h-9 w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                                                </svg>
                                            </span><!-- end active icon -->

                                    <span class="lg:block hidden font-semibold text-sm"
                                          x-bind:class="activeTab === 'tabTwo' ? 'md:block' : ''">جامعه فعال
                                                برنامه نویسان</span>
                                </button>
                            </li><!-- end tabs:list:item -->

                            <!-- tabs:list:item -->
                            <li>
                                <button type="button"
                                        class="flex lg:flex-col items-center justify-center relative gap-3 border-b-4 py-2 px-4"
                                        x-bind:class="activeTab === 'tabThree' ? 'text-primary border-primary' : 'text-muted border-transparent'"
                                        x-on:click="activeTab = 'tabThree'">
                                    <!-- active icon -->
                                    <span
                                        x-bind:class="activeTab === 'tabThree' ? 'text-primary' : 'text-muted'">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor"
                                                     class="sm:w-9 sm:h-9 w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                                                </svg>
                                            </span><!-- end active icon -->

                                    <span class="lg:block hidden font-semibold text-sm"
                                          x-bind:class="activeTab === 'tabThree' ? 'md:block' : ''">گارانتی
                                                بازگشت
                                                وجه</span>
                                </button>
                            </li><!-- end tabs:list:item -->

                            <!-- tabs:list:item -->
                            <li>
                                <button type="button"
                                        class="flex lg:flex-col items-center justify-center relative gap-3 border-b-4 py-2 px-4"
                                        x-bind:class="activeTab === 'tabFour' ? 'text-primary border-primary' : 'text-muted border-transparent'"
                                        x-on:click="activeTab = 'tabFour'">
                                    <!-- active icon -->
                                    <span
                                        x-bind:class="activeTab === 'tabFour' ? 'text-primary' : 'text-muted'">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor"
                                                     class="sm:w-9 sm:h-9 w-8 h-8">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          d="M16.5 18.75h-9m9 0a3 3 0 0 1 3 3h-15a3 3 0 0 1 3-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 0 1-.982-3.172M9.497 14.25a7.454 7.454 0 0 0 .981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 0 0 7.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 0 0 2.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 0 1 2.916.52 6.003 6.003 0 0 1-5.395 4.972m0 0a6.726 6.726 0 0 1-2.749 1.35m0 0a6.772 6.772 0 0 1-3.044 0" />
                                                </svg>
                                            </span><!-- end active icon -->

                                    <span class="lg:block hidden font-semibold text-sm"
                                          x-bind:class="activeTab === 'tabFour' ? 'md:block' : ''">استعداد
                                                سنجی و
                                                ارزیابی</span>
                                </button>
                            </li><!-- end tabs:list:item -->
                        </ul><!-- end tabs:list -->
                    </div><!-- end tabs:list-container -->

                    <!-- tabs:contents -->
                    <div class="bg-gradient-to-b from-secondary rounded-t-3xl max-w-4xl mx-auto p-10">
                        <!-- tabs:contents:tabOne -->
                        <div x-show="activeTab === 'tabOne'">
                            <div class="flex md:flex-nowrap flex-wrap items-center gap-10">
                                <div class="md:w-9/12 w-full text-justify space-y-3">
                                    <p class="font-bold text-foreground">
                                        در دنیای برنامه نویسی و نرم افزار، مهارت همیشه بر
                                        مدرک و مدرک گرایی اولویت داشته است. ما در تیم نابغه با اساتیدی که
                                        تخصص
                                        و تجربه بالا در شرکت
                                        ‌های بزرگ دارند، این مهارت و تجربه‌های ارزشمند آن‌ها را در سرفصل‌های
                                        آموزشی خود قرار داده ایم و
                                        به شما منتقل می‌کنیم.
                                    </p>
                                    <p class="font-semibold text-muted">
                                        حتی دانشجویانی که سال‌ها در دانشگاه‌های مطرح کشور در
                                        رشته‌های تخصصی علوم کامپیوتر درس خوانده اند و مدرک گرفته اند، آماده
                                        ورود
                                        به بازار کار نیستند.
                                        دوره‌های نابغه با هدف پر کردن فاصله بین دانشگاه و صنعت طراحی شده اند
                                        و
                                        حاوی محتوای کاملا منطبق بر
                                        نیاز بازار کار هستند. و مهمتر اینکه این تجربه‌ها را از مدرسینی
                                        دریافت
                                        می‌کنید که در بهترین شرکت
                                        ‌های فناوری ایران فعالیت
                                        دارند.
                                    </p>
                                    <p class="font-semibold text-muted">
                                        در جلسات مصاحبه کاری، همه آنچه نیاز دارید مهارت مورد
                                        نیاز بازار کار و پرزنت درست خودتان است. با ما در این مسیر لذت بخش و
                                        البته نه کوتاه مدت همراه
                                        باشید تا آماده ورود به بازار کار شوید.
                                    </p>
                                </div>
                                <div class="md:w-3/12 w-full">
                                    <div class="w-full md:h-60 h-96 rounded-3xl overflow-hidden">
                                        <img src="./assets/images/features/01.jpg"
                                             class="w-full h-full object-cover" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div><!-- end tabs:contents:tabOne -->

                        <!-- tabs:contents:tabTwo -->
                        <div x-show="activeTab === 'tabTwo'">
                            <div class="flex md:flex-nowrap flex-wrap items-center gap-10">
                                <div class="md:w-9/12 w-full text-justify space-y-3">
                                    <p class="font-bold text-foreground">
                                        یک جامعه فعال از منتورها و دانشجویان برای پاسخگویی به سوالات شما
                                        آماده
                                        هستند
                                    </p>
                                    <p class="font-semibold text-muted">
                                        اگر در جلسات آموزشی سوالی داشته باشید، می‌توانید سوال خود را در همان
                                        جلسه ثبت نمایید. سوال شما در جامعه مربوط به دوره ثبت می‌شود و
                                        منتور‌ها و
                                        دانشجویان هم دوره ای، پاسخگوی سوالات شما خواهند بود.
                                    </p>
                                    <p class="font-semibold text-muted">
                                        جامعه برنامه نویسان نابغه نه تنها فضایی است برای پشتیبانی و پاسخگویی
                                        به
                                        سوالات شما، بلکه به زودی از پر از تجربه‌های ارزشمند برترین برنامه
                                        نویسان
                                        ایرانی در شرکت‌های مطرح خواهد شد.
                                    </p>
                                </div>
                                <div class="md:w-3/12 w-full">
                                    <div class="w-full md:h-60 h-96 rounded-3xl overflow-hidden">
                                        <img src="./assets/images/features/02.jpg"
                                             class="w-full h-full object-cover" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div><!-- end tabs:contents:tabTwo -->

                        <!-- tabs:contents:tabThree -->
                        <div x-show="activeTab === 'tabThree'">
                            <div class="flex md:flex-nowrap flex-wrap items-center gap-10">
                                <div class="md:w-9/12 w-full text-justify space-y-3">
                                    <p class="font-bold text-foreground">
                                        ما به کیفیت و اثربخشی محصول خود اعتقاد داریم و به همین منظور گارانتی
                                        بازگشت وجه یک ماهه به شما ارائه می‌دهیم تا خریدی بدون ریسک و بدون
                                        نگرانی
                                        داشته باشید.
                                    </p>
                                    <p class="font-semibold text-muted">
                                        هزینه‌ای که بابت دوره پرداخت می‌کنید تا 1 ماه در اختیار خودِ شماست.
                                    </p>
                                    <p class="font-semibold text-muted">
                                        اگر پس از خرید دوره به‌صورت جامع، به هر دلیلی از شرکت در آن منصرف
                                        شدید
                                        تا ١ ماه پس از خريد امكان انصراف و بازگشت كامل وجه برای شما درنظر
                                        گرفته
                                        شده است.
                                    </p>
                                    <p class="font-semibold text-muted">
                                        برای انصراف از دوره لازم است در بازه زمانی تعیین شده درخواست خود را
                                        با
                                        پشتیبانی مطرح کرده و حداکثر ۲۵% از دوره را مشاهده کرده باشید. پس از
                                        انصراف همواره منتظر نظرات و پیشنهادات شما برای بهبود کیفیت دوره و
                                        نحوه
                                        ارائه آن‌ها هستیم و امیدواریم در حوزه موردنظر خود به موفقیت و
                                        فرصت‌های
                                        بزرگی دست پیدا کنید.
                                    </p>
                                </div>
                                <div class="md:w-3/12 w-full">
                                    <div class="w-full md:h-60 h-96 rounded-3xl overflow-hidden">
                                        <img src="./assets/images/features/03.jpg"
                                             class="w-full h-full object-cover" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div><!-- end tabs:contents:tabThree -->

                        <!-- tabs:contents:tabFour -->
                        <div x-show="activeTab === 'tabFour'">
                            <div class="flex md:flex-nowrap flex-wrap items-center gap-10">
                                <div class="md:w-9/12 w-full text-justify space-y-3">
                                    <p class="font-bold text-foreground">
                                        فعالیت‌های دانشجویان در طول مشاهده دوره شامل مشاهده منظم جلسات، پاسخ
                                        صحیح به سوالات آزمون‌ها و فعالیت ویژه و مستمر آن‌ها در جامعه برنامه
                                        نویسی، برای آن‌ها امتیازاتی در بر خواهد داشت و تیم نابغه دانشجویان
                                        ممتاز
                                        را با توجه به امتیازاتشان رده بندی و برای معرفی به بازار کار معرفی
                                        می‌کند.
                                    </p>
                                    <p class="font-semibold text-muted">
                                        در انتهای دوره نیز آزمون‌های جامع چند مرحله ای تدارک دیده شده است که
                                        ارزیابی مهارتی دانشجو را انجام می‌دهد. در صورت قبولی دانشجو در
                                        آزمون‌های
                                        ذکر شده در انتهای دوره، مدرک سطح بندی شده آنلاین نابغه به ایشان اهدا
                                        می‌شود.
                                    </p>
                                </div>
                                <div class="md:w-3/12 w-full">
                                    <div class="w-full md:h-60 h-96 rounded-3xl overflow-hidden">
                                        <img src="./assets/images/features/04.jpg"
                                             class="w-full h-full object-cover" alt="..." />
                                    </div>
                                </div>
                            </div>
                        </div><!-- end tabs:contents:tabFour -->
                    </div><!-- end tabs:contents -->
                </div><!-- end tabs container -->
            </div>
            <!-- end features -->
        </div>
        <!-- end container -->

        <!-- container -->
        <div class="max-w-7xl space-y-14 px-4 mx-auto">
            <!-- articles -->
            <div class="bg-gradient-to-l from-secondary to-background rounded-2xl p-5 space-y-8">
                <!-- section:title -->
                <div class="flex items-center justify-between gap-8">
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
                        <span class="font-black xs:text-2xl text-lg text-primary">آخرین مقالات</span>
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
                <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-x-5 gap-y-8">
                    <!-- article:card -->
                    <div class="relative bg-background rounded-xl p-4">
                        <div class="relative mb-3 z-20">
                            <a href="./article-detail.html" class="block">
                                <img src="./assets/images/courses/01.jpg" class="max-w-full rounded-xl"
                                     alt="..." />
                            </a>
                            <button type="button"
                                    class="absolute left-3 -bottom-3 w-9 h-9 inline-flex items-center justify-center bg-secondary rounded-full shadow-xl text-muted transition-colors hover:text-red-500 z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-5 h-5">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-5 h-5">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
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
                                <img src="./assets/images/courses/03.jpg" class="max-w-full rounded-xl"
                                     alt="..." />
                            </a>
                            <button type="button"
                                    class="absolute left-3 -bottom-3 w-9 h-9 inline-flex items-center justify-center bg-secondary rounded-full shadow-xl text-muted transition-colors hover:text-red-500 z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-5 h-5">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
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
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     class="w-5 h-5">
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
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
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
            <!-- end articles -->
        </div>
        <!-- end container -->
    </div>
@endsection
