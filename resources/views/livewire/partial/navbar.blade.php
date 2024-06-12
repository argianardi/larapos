<div class="border-b-2 navbar bg-base-100 border-base-300">
    <div class="navbar-start">
        <label for='drawer' class="btn btn-ghost btn-circle">
            <x-tabler-menu class="size-5" />
        </label>
    </div>
    <div class="navbar-center">
        <a href="{{ route('home') }}" class="text-xl btn btn-ghost">{{ config('app.name') }}</a>
    </div>
    <div class="navbar-end">
        <a class="btn btn-ghost btn-circle">
            <x-tabler-plus class="size-5" />
        </a>
    </div>
</div>
