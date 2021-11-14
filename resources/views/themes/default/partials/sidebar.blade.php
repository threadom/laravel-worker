<!-- This example requires Tailwind CSS v2.0+ -->
<nav class="bg-blue-800">
    <div class="w-32 mx-auto px-0">
        <div class="relative flex items-center justify-between h-12">
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start h-12">
                <div class="flex-shrink-0 flex items-center">
                    <a href="#" class="bg-blue-900 text-white px-2 py-2 text-base font-medium whitespace-nowrap"
                        aria-current="page">
                        <img class="lg:inline h-8 w-auto" src="./app.png">
                    </a>
                    <a href="#" class="bg-blue-800 text-white px-3 py-3 text-base font-medium whitespace-nowrap"
                        aria-current="page">
                        {{ $app_company }}
                    </a>
                    <a href="#" class="bg-blue-700 text-white px-3 py-3 text-base font-medium whitespace-nowrap"
                        aria-current="page">
                        {{ $app_name }}
                    </a>
                    <a href="#" class="bg-blue-600 text-white px-3 py-3 text-base font-medium whitespace-nowrap"
                        aria-current="page">
                        {{ $app_title }}
                    </a>
                </div>
                <div class="w-full block">
                    <div class="inline-flex float-left">

                    </div>

                    <div class="inline-flex float-right mr-1">

                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
