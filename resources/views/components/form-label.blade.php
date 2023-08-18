@props(['required'])

<label {{ $attributes->class([ 'h6', 'form-label', ($required ? 'required' : '')])
    }}>
    {{ $slot }}
</label>
