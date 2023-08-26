<div class="card-header text-center">
    {{ $slot }}

    @isset($right)
        {{ $right }}
    @endisset
</div>

