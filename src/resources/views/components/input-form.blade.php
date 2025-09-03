@props(['type', 'name'])

<div class="input-form">
    <label for="{{ $name }}" class="label-title">{{ $slot }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" class="input-field" autocomplete="{{ $name }}" value="{{ old($name) }}">
</div>