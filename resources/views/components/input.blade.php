<div class="form-group">
    <label for="">Name</label>
    <input type="text" class="form-control" placeholder="" id="name" name="name" class="form-group" value="{{old('name')}}"/>
    <span class="text-danger">
        @error('name')
          {{ $message }}
        @enderror
    </span>
</div>
