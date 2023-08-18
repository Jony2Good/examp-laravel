<form {{ $attributes }}>
    <input type="hidden", name="_token", value="{{csrf_token()}}"/>
    {{ $slot }}
</form>
