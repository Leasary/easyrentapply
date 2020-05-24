<label for="{{ $key }}">{{ $label }}</label>
<input type="{{ $type }}" {{ $attributes }} name="{{ $key }}" id="{{ $key }}" value="{{ old($key) }}" class="u-full-width">
@error($key)
<p>{{ $message }}</p>
@enderror
