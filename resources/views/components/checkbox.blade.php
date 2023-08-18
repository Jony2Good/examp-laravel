@php($id = Str::uuid())

<div class="form-check">
    <input id="{{ $id }}" type="checkbox"  {{ $attributes->merge([
    'value' => 1
]) }} class="form-check-input">
    <label for="{{ $id }}" class="form-check-label h6">{{ $slot }}</label>
</div>
