<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto" />
    </div>

    <div class="mt-8 text-2xl">
        سامانه خیریه شهید شمسی پور
    </div>

    <div class="mt-6 text-gray-500">
        برای پرداخت مبلغ دلخواه خود را باعنوان وارد کرده و روی پرداخت کلیک کنید
    </div>
</div>
<form action="" method="POST">
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <div class="flex items-center">
            <object data="{{asset('svg/title.svg')}}" class="w-8 h-8 text-gray-500"></object>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">عنوان</div>
        </div>
        <input type="text" name="" id="">
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">

            </div>
                <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                        <div>اختیاری</div>
                </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <div class="flex items-center">
            <object data="{{asset('svg/money.svg')}}" class="w-8 h-8 text-gray-500"></object>
            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">مبلغ دلخواه</div>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                <input type="number" name="" id="">
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
                <button type="submit" class="btn btn-secondary btn-lg btn-block">
                ادامه پرداخت
                </button>
    </div>
</div>
</form>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <div class="flex items-center">

            <object data="{{asset('svg/list.svg')}}" class="w-8 h-8 text-gray-500"></object>
            <a href="#"><div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">لیست پرداختی</div></a>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                برای مشاهده لیست پرداخت های اخیر خود کلیک کنید
            </div>
        </div>
    </div>
</div>
</form>
