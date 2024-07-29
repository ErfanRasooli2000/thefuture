@extends('pages::layouts.main')

@section('title', 'پست')

@section('content')
    <div class="max-w-7xl space-y-14 px-4 mx-auto">
        <div class="flex md:flex-nowrap flex-wrap items-start gap-5">
            <div class="md:w-8/12 w-full">
                <div class="relative">
                    <!-- article:thumbnail -->
                    <div class="relative z-10">
                        <img src="{{asset($post->getFirstMediaUrl('thumbnail'))}}" class="max-w-full rounded-3xl" alt="..." />
                    </div>

                    <div class="-mt-12 pt-12">
                        <div
                            class="bg-gradient-to-b from-background to-secondary rounded-b-3xl space-y-2 p-5 mx-5">
                            <!-- article:title -->
                            <h1 class="font-bold text-xl text-foreground">{{$post->title}}</h1>

                            <!-- article:excerpt -->
                            <p class="text-sm text-muted">{{$post->description}}</p>
                        </div>
                        <div class="space-y-10 py-5">
                            <!-- article:description -->
                            <div class="description" dir="auto">
                                {!! $post->content !!}
                            </div>
                            <!-- end article:description -->

                            <!-- article:comments:container -->
                            <div id="comment_box" class="space-y-5">
                                <!-- article:comments:title -->
                                <div class="flex items-center gap-3 mb-5">
                                    <div class="flex items-center gap-1">
                                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                    </div>
                                    <div class="font-black text-foreground">دیدگاه و پرسش</div>
                                </div>
                                <!-- end article:comments:container -->

                                @if($user)
                                <!-- article:comments:form:wrapper -->
                                    <div class="bg-background border border-border rounded-3xl p-5 mb-5">
                                        <div class="flex items-center gap-3 mb-5">
                                            <div class="flex items-center gap-1">
                                                <div class="w-1 h-1 bg-foreground rounded-full"></div>
                                                <div class="w-2 h-2 bg-foreground rounded-full"></div>
                                            </div>
                                            <div class="font-black text-xs text-foreground">
                                                ارسال دیدگاه یا پرسش
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap items-center gap-3 mb-5">
                                            <div class="flex items-center gap-3 sm:w-auto w-full">
                                                <div class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                                    <img src="https://i.pravatar.cc/150?img=14"
                                                         class="w-full h-full object-cover" alt="..." />
                                                </div>
                                                <div class="flex flex-col items-start space-y-1">
                                                    <a href="#"
                                                       class="line-clamp-1 font-semibold text-sm text-foreground hover:text-primary">{{$user->name ?? "کاربر سایت"}}</a>
                                                </div>
                                            </div>
                                                <span class="block w-1 h-1 bg-border rounded-full answer_element"></span>
                                                <span class="font-semibold text-xs text-muted answer_element">در پاسخ به</span>
                                                <span class="block w-1 h-1 bg-border rounded-full answer_element"></span>
                                                <a href="#"
                                                   class="line-clamp-1 font-semibold text-sm text-foreground hover:text-primary answer_element">جلال
                                                    بهرامی راد</a>
                                                <button type="button" onclick="cancelReply()"
                                                        class="line-clamp-1 font-semibold text-sm text-red-500 mr-auto answer_element">لغو
                                                    پاسخ</button>
                                        </div>
                                        <form action="{{route('client.comment.create')}}" method="post" class="flex flex-col space-y-5">
                                            @csrf
                                                    <textarea name="text" id="text" rows="10"
                                                              class="form-textarea w-full !ring-0 !ring-offset-0 bg-secondary border-0 focus:border-border border-border rounded-xl text-sm text-foreground p-5"
                                                              placeholder="متن مورد نظر خود را وارد کنید ..."></textarea>
                                            <input type="hidden" name="post_id" value="{{$post->id}}">
                                            <input type="hidden" id="answerId" name="answer_to" value="">
                                            <button type="submit"
                                                    class="h-10 inline-flex items-center justify-center gap-1 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4 mr-auto">
                                                        <span class="font-semibold text-sm">ثبت دیدگاه یا
                                                            پرسش</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                     fill="currentColor" class="w-5 h-5">
                                                    <path fill-rule="evenodd"
                                                          d="M14.78 14.78a.75.75 0 0 1-1.06 0L6.5 7.56v5.69a.75.75 0 0 1-1.5 0v-7.5A.75.75 0 0 1 5.75 5h7.5a.75.75 0 0 1 0 1.5H7.56l7.22 7.22a.75.75 0 0 1 0 1.06Z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                </div>
                                <!-- end article:comments:form:wrapper -->
                                @else
                                    <div class="bg-background border border-border rounded-3xl p-5 mb-5 flex flex-col">
                                        <h1 class="text-center mt-3">برای ثبت دیدگاه ابتدا وارد شوید</h1>

                                        <a href="{{route('client.loginPage')}}"
                                           class="inline-flex items-center justify-center gap-1 h-10 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4 mr-auto mx-auto mt-5">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd"
                                                      d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                            <span class="font-semibold text-sm">حساب کاربری</span>
                                        </a>
                                    </div>
                                @endif
                                <!-- article:comments:wrapper -->
                                <div class="space-y-3">
                                    <!-- article:comment -->
                                    <div class="space-y-3">
                                        @foreach($comments as $comment)
                                            <x-pages::comment :comment="$comment"/>
                                        @endforeach
                                    </div>
                                    <!-- end article:comment -->
                                </div>
                                <!-- end article:comments:wrapper -->
                            </div>
                            <!-- end article:comments:container -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-4/12 w-full md:sticky md:top-24 space-y-8">
                <div class="space-y-5">
                    <div class="flex items-center gap-3">
                        <div class="flex items-center gap-1">
                            <div class="w-1 h-1 bg-foreground rounded-full"></div>
                            <div class="w-2 h-2 bg-foreground rounded-full"></div>
                        </div>
                        <div class="font-black text-sm text-foreground">نویسنده:</div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3">
                            <div class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                                <img src="{{asset('assets/images/avatars/01.jpeg')}}" class="w-full h-full object-cover"
                                     alt="..." />
                            </div>
                            <div class="flex flex-col items-start space-y-1">
                                <a href="./lecturer.html"
                                   class="line-clamp-1 font-bold text-sm text-foreground hover:text-primary">جلال
                                    بهرامی راد</a>
                                <a href="#" class="line-clamp-1 font-semibold text-xs text-primary">دیدن
                                    رزومه</a>
                            </div>
                        </div>
                        <div class="bg-secondary rounded-tl-3xl rounded-b-3xl text-sm text-muted p-5">
                            اول داستان، طراح گرافیک بودم و ۲ سالی به عنوان طراح مشغول بودم،
                            بعد به برنامه‌نویسی علاقمند شدم و الان بیشتر از ۱۰ ساله که عاشق
                            کدزنی و چالش‌های پروژه‌های مختلفم. به تدریس علاقه خاصی دارم و دوست
                            دارم دانشی که در این راه بدست آوردم را در اختیار دیگران قرار بدم
                            :)
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extraFooter')
    <link rel="stylesheet" href="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/styles/default.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/highlight.min.js"></script>
    <!-- and it's easy to individually load additional languages -->
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.9.0/languages/php.min.js"></script>
    <script>
        hljs.highlightAll();

        let is_authenticated = {{$user ? "true" : "false"}};

        function replyToComment(id)
        {
            if (is_authenticated === false) {
                return; // Exit the function if not authenticated
            }

            var commentBox = document.getElementById('comment_box');

            var scrollPosition = commentBox.getBoundingClientRect().top + window.scrollY - 100;

            window.scrollTo({
                top: scrollPosition,
                behavior: 'smooth'
            });

            // Set the value of the element with id 'answerId'
            document.getElementById('answerId').value = id;

            // Get all elements with the class 'answer_element'
            var elements = document.getElementsByClassName('answer_element');

            // Loop through each element and set its display property to 'block'
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = 'block';
            }
        }

        function cancelReply()
        {
            document.getElementById('answerId').value = null;

            var elements = document.getElementsByClassName('answer_element');

            // Loop through each element and set its display property to 'block'
            for (var i = 0; i < elements.length; i++) {
                elements[i].style.display = 'none';
            }
        }

    </script>
    <style>
        .answer_element {
            display: none;
        }
    </style>
@endsection
