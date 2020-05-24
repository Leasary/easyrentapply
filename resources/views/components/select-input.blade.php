<label for="{{ $key }}">{{ $label }}</label>
<select name="{{ $key }}" id="{{ $key }}" class="u-full-width">
    <option value="">Select One</option>
    @foreach($options as $k => $v)
    <option @if(old($key) == $k) selected @endif value="$k">{{ $v }}</option>
    @endforeach
</select>
@error($key)
<p>{{ $message }}</p>
@enderror
