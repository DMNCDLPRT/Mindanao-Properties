<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-slate-800">
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-slate-700 shadow-md overflow-hidden sm:rounded-lg">
        <div class="flex justify-center">
            <div>
                {{ $logo }}
                {{ $name }}
            </div>
        </div>
            {{ $slot }}
    </div>
</div>
