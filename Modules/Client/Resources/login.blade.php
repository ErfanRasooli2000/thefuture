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
    <title>قالب آموزشی نابغه - ورود و ثبت نام</title>
</head>

<body>

<div class="min-h-screen flex items-center justify-center bg-background p-5">
    <div class="w-full max-w-sm space-y-5">
        <div class="bg-gradient-to-b from-secondary to-background rounded-3xl space-y-5 px-5 pb-5">
            <div class="bg-background rounded-b-3xl space-y-2 p-5">
                <a href="./home.html" class="inline-flex items-center gap-2 text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
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

            <!-- auth:verification:form -->
            <form action="#" class="space-y-3" id="login-form">
                <div class="flex items-center gap-3">
                    <div class="flex items-center gap-1">
                        <div class="w-1 h-1 bg-foreground rounded-full"></div>
                        <div class="w-2 h-2 bg-foreground rounded-full"></div>
                    </div>
                    <div class="font-black text-foreground" id="form-title">ورود یا ثبت نام</div>
                </div>
                <div class="text-sm text-muted space-y-3">
                    <p id="greetings">درود 👋</p>
                    <p id="enterMessage">لطفا شماره موبایل خود را وارد کنید</p>
                </div>

                <!-- form:field:wrapper -->
                <div class="flex items-center relative">
                    <input type="text" dir="ltr" id="mobile-input"
                           class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground placeholder:text-right px-5" />
                </div>
                <!-- end form:field:wrapper -->

                <!-- form:code:wrapper -->
                <div class="flex items-center relative" id="code-wrapper" style="display: none;">
                    <input type="text" dir="ltr" id="code-input"
                           class="form-input w-full h-11 !ring-0 !ring-offset-0 bg-secondary border-border focus:border-border rounded-xl text-sm text-foreground placeholder:text-right px-5" />
                </div>
                <!-- end form:code:wrapper -->

                <!-- form:submit button -->
                <button type="submit" id="submit-button"
                        class="flex items-center justify-center gap-1 w-full h-10 bg-primary rounded-full text-primary-foreground transition-all hover:opacity-80 px-4">
                    <span class="font-semibold text-sm" id="submit-text">ارسال کد ورود</span>
                    <div class="spinner" id="spinner"></div>
                </button>
                <!-- end form:submit button -->
                <div id="response-message" class="text-center mt-3"></div>
            </form>
            <!-- end auth:verification:form -->
        </div>
        <div class="bg-secondary rounded-xl space-y-5 p-5">
            <div class="font-medium text-xs text-center text-muted">
                ورود شما به معنای پذیرش <a href="#"
                                           class="text-foreground transition-colors hover:text-primary hover:underline">شرایط</a> و
                <a href="#" class="text-foreground transition-colors hover:text-primary hover:underline">قوانین
                    حریم خصوصی</a> است.
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/dependencies/alpinejs.min.js')}}"></script>
<script src="{{asset('assets/js/dependencies/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/dependencies/plyr.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<style>
    .spinner {
        display: none;
        border: 4px solid rgba(0, 0, 0, 0.1);
        border-left-color: #000;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>


<script>
    let mobileNumber;

    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault();

        const submitButton = document.getElementById('submit-button');
        const submitText = document.getElementById('submit-text');
        const spinner = document.getElementById('spinner');
        const responseMessage = document.getElementById('response-message');
        const greetings = document.getElementById('greetings');
        const enterMessage = document.getElementById('enterMessage');
        const codeWrapper = document.getElementById('code-wrapper');
        const mobileInput = document.getElementById('mobile-input');
        const codeInput = document.getElementById('code-input');

        const toggleLoading = (isLoading) => {
            if (isLoading) {
                spinner.style.display = 'inline-block';
                submitText.style.display = 'none';
            } else {
                spinner.style.display = 'none';
                submitText.style.display = 'inline-block';
            }
        };

        if (submitText.innerText === 'ارسال کد ورود') {
            mobileNumber = mobileInput.value;
            toggleLoading(true);

            fetch('{{route('client.registerLogin')}}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ mobile: mobileNumber })
            })
                .then(response => {
                    toggleLoading(false);
                    if (response.ok) {
                        submitText.innerText = 'ورود';
                        responseMessage.innerText = 'کد با موفقیت ارسال شد';
                        responseMessage.style.color = 'green';
                        enterMessage.innerText = 'کد ارسال شده را وارد نمایید.';
                        codeWrapper.style.display = 'block';
                        mobileInput.style.display = 'none';
                        greetings.remove();
                    } else {
                        throw new Error('Network response was not ok.');
                    }
                })
                .catch(error => {
                    toggleLoading(false);
                    submitText.innerText = 'ارسال کد ورود';
                    responseMessage.innerText = 'ارسال کد با شکست مواجه شد';
                    responseMessage.style.color = 'red';
                });
        } else {
            const code = codeInput.value;
            toggleLoading(true);

            fetch('{{route('client.doLogin')}}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ mobile: mobileNumber, code: code })
            })
                .then(response => {
                    toggleLoading(false);
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Network response was not ok.');
                    }
                })
                .then(data => {
                    responseMessage.innerText = 'ورود با موفقیت انجام شد';
                    responseMessage.style.color = 'green';
                    document.cookie = `token=${data.data.token}; path=/`;
                    window.location.href = '{{route('home')}}';
                })
                .catch(error => {
                    toggleLoading(false);
                    responseMessage.innerText = 'ورود با شکست مواجه شد';
                    responseMessage.style.color = 'red';
                });
        }
    });

</script>
</body>

</html>
