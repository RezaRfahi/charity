<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div dir="rtl" class="mb-4 text-sm text-gray-600">
            {{ __('از ثبت نام شما سپاسگزاریم! قبل از شروع، آیا می توانید آدرس ایمیل خود را با کلیک بر روی پیوندی که به تازگی برای شما ایمیل کرده ایم تأیید کنید؟ اگر ایمیلی را دریافت نکردید، با کمال میل یک ایمیل دیگر برای شما ارسال خواهیم کرد.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div dir="rtl" class="mb-4 font-medium text-sm text-green-600">
                {{ __('یک لینک تأیید جدید به آدرس ایمیلی که در هنگام ثبت نام ارائه کرده اید ارسال شده است.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-jet-button type="submit">
                        {{ __('ارسال مجدد ایمیل تایید ') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('خروج') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
