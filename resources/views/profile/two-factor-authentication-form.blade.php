<x-jet-action-section>
    <x-slot name="title">
        {{ __('تایید دو مرحله ای') }}
    </x-slot>

    <x-slot name="description">
        {{ __('با استفاده از احراز هویت دو مرحله ای، امنیت بیشتری را به حساب خود اضافه کنید.') }}
    </x-slot>

    <x-slot name="content">
        <h3 class="text-lg font-medium text-gray-900">
            @if ($this->enabled)
                @if ($showingConfirmation)
                    {{ __('فعال کردن احراز هویت دو عاملی را به پایان برسانید.') }}
                @else
                    {{ __('شما احراز هویت دو مرحله ای را فعال کرده اید.') }}
                @endif
            @else
                {{ __('شما احراز هویت دو مرحله ای را فعال نکرده اید.') }}
            @endif
        </h3>

        <div class="mt-3 max-w-xl text-sm text-gray-600">
            <p>
                {{ __('هنگامی که احراز هویت دو مرحله ای فعال است، در حین احراز هویت از شما خواسته می شود که یک نشانه امن و تصادفی داشته باشید. می توانید این نشانه را از برنامه Google Authenticator گوشی خود بازیابی کنید.') }}
            </p>
        </div>

        @if ($this->enabled)
            @if ($showingQrCode)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        @if ($showingConfirmation)
                            {{ __('برای پایان دادن به فعال کردن احراز هویت دو مرحله ای، کد QR زیر را با استفاده از برنامه احراز هویت گوشی خود اسکن کنید یا کلید تنظیم را وارد کرده و کد OTP تولید شده را ارائه دهید.') }}
                        @else
                            {{ __('احراز هویت دو مرحله ای اکنون فعال است. کد QR زیر را با استفاده از برنامه احراز هویت گوشی خود اسکن کنید یا کلید تنظیم را وارد کنید.') }}
                        @endif
                    </p>
                </div>

                <div class="mt-4">
                    {!! $this->user->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('کلید راه اندازی') }}: {{ decrypt($this->user->two_factor_secret) }}
                    </p>
                </div>

                @if ($showingConfirmation)
                    <div class="mt-4">
                        <x-jet-label for="code" value="{{ __('کد') }}" />

                        <x-jet-input id="code" type="text" name="code" class="block mt-1 w-1/2" inputmode="numeric" autofocus autocomplete="one-time-code"
                            wire:model.defer="code"
                            wire:keydown.enter="confirmTwoFactorAuthentication" />

                        <x-jet-input-error for="code" class="mt-2" />
                    </div>
                @endif
            @endif

            @if ($showingRecoveryCodes)
                <div class="mt-4 max-w-xl text-sm text-gray-600">
                    <p class="font-semibold">
                        {{ __('این کدهای بازیابی را در یک مدیر رمز عبور امن ذخیره کنید. اگر دستگاه احراز هویت دو عاملی شما گم شود، می توان از آنها برای بازیابی دسترسی به حساب شما استفاده کرد.') }}
                    </p>
                </div>

                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt($this->user->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            @endif
        @endif

        <div class="mt-5">
            @if (! $this->enabled)
                <x-jet-confirms-password wire:then="enableTwoFactorAuthentication">
                    <x-jet-button type="button" wire:loading.attr="disabled">
                        {{ __('فعالسازی') }}
                    </x-jet-button>
                </x-jet-confirms-password>
            @else
                @if ($showingRecoveryCodes)
                    <x-jet-confirms-password wire:then="regenerateRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('بازیابی کدها') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @elseif ($showingConfirmation)
                    <x-jet-confirms-password wire:then="confirmTwoFactorAuthentication">
                        <x-jet-button type="button" class="mr-3" wire:loading.attr="disabled">
                            {{ __('تایید') }}
                        </x-jet-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="showRecoveryCodes">
                        <x-jet-secondary-button class="mr-3">
                            {{ __('نمایش کدهای بازیابی') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @endif

                @if ($showingConfirmation)
                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-jet-secondary-button wire:loading.attr="disabled">
                            {{ __('لغو') }}
                        </x-jet-secondary-button>
                    </x-jet-confirms-password>
                @else
                    <x-jet-confirms-password wire:then="disableTwoFactorAuthentication">
                        <x-jet-danger-button wire:loading.attr="disabled">
                            {{ __('غیر فعال کردن') }}
                        </x-jet-danger-button>
                    </x-jet-confirms-password>
                @endif

            @endif
        </div>
    </x-slot>
</x-jet-action-section>
