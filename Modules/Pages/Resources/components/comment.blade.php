<div
    class="bg-background border border-border rounded-3xl space-y-3 p-5">
    <div class="flex sm:flex-nowrap flex-wrap sm:flex-row flex-col sm:items-center sm:justify-between gap-5 border-b border-border pb-3">
        <div class="flex items-center gap-3">
            <div
                class="flex-shrink-0 w-10 h-10 rounded-full overflow-hidden">
                <img src="https://i.pravatar.cc/150?img=14"
                     class="w-full h-full object-cover" alt="..." />
            </div>
            <div class="flex flex-col items-start space-y-1">
                <a href="#"
                   class="line-clamp-1 font-semibold text-sm text-foreground hover:text-primary">{{$comment->creator->name ?? "کابر سایت"}}</a>
                <span class="text-xs text-muted">۲ هفته
                                                                    پیش</span>
            </div>
        </div>
        <div class="flex items-center gap-3 sm:mr-0 mr-auto">
            <button onclick="replyToComment({{$comment->id}})"
               class="flex items-center h-9 gap-1 bg-secondary rounded-full text-muted transition-colors hover:text-primary px-4">
                <span class="text-xs">پاسخ</span>
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor"
                     class="w-5 h-5">
                    <path fill-rule="evenodd"
                          d="M12.207 2.232a.75.75 0 0 0 .025 1.06l4.146 3.958H6.375a5.375 5.375 0 0 0 0 10.75H9.25a.75.75 0 0 0 0-1.5H6.375a3.875 3.875 0 0 1 0-7.75h10.003l-4.146 3.957a.75.75 0 0 0 1.036 1.085l5.5-5.25a.75.75 0 0 0 0-1.085l-5.5-5.25a.75.75 0 0 0-1.06.025Z"
                          clip-rule="evenodd"></path>
                </svg>
            </button>
            <button type="button"
                    class="flex items-center justify-center relative w-9 h-9 bg-secondary rounded-full text-muted transition-colors hover:text-red-500">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 20 20" fill="currentColor"
                     class="w-5 h-5">
                    <path
                        d="m9.653 16.915-.005-.003-.019-.01a20.759 20.759 0 0 1-1.162-.682 22.045 22.045 0 0 1-2.582-1.9C4.045 12.733 2 10.352 2 7.5a4.5 4.5 0 0 1 8-2.828A4.5 4.5 0 0 1 18 7.5c0 2.852-2.044 5.233-3.885 6.82a22.049 22.049 0 0 1-3.744 2.582l-.019.01-.005.003h-.002a.739.739 0 0 1-.69.001l-.002-.001Z">
                    </path>
                </svg>
                <span
                    class="absolute -top-1 -right-1 inline-flex bg-red-500 rounded-full text-xs text-white px-1">
                                                                    ۳
                                                                </span>
            </button>
        </div>
    </div>
    <p class="text-sm text-muted">{{$comment->text}}</p>
</div>

@if(count($comment->comments)!==0)
    @foreach($comment->comments as $comment)
        <div class="relative before:content-[''] before:absolute before:-top-3 before:right-8 before:w-px before:h-[calc(100%-24px)] before:bg-border after:content-[''] after:absolute after:bottom-9 after:right-8 after:w-8 after:h-px after:bg-border space-y-3 pr-16">
            <x-pages::comment :comment="$comment"/>
        </div>
    @endforeach
@endif
