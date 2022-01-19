<div class="text-center">
    <div class="text-xl lg:text-4xl font-black text-black" id="logo">
        <span class="text-orange-600">lolita's</span> blog
    </div>

    @if (request()->routeIs('login'))
        <div class="mt-6 text-lg font-bold text-gray-600 ">
            {{__("Welcome back!")}}
        </div>
    @endif
</div>
