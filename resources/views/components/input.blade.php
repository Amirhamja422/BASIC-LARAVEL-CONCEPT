<div class="form-group">
    <label for="">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control border border-success" id="name" name="{{ $name }}" class="form-group" value="{{old('name')}}"/>
    <span class="text-danger">
        @error('name')
          {{ $message }}
        @enderror
    </span>
</div>

