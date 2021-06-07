<div class="form-group mb-3">
    <label for="">Name:</label>
    <input type="text" name="name" value="{{old('name', $category->name) }}" class="form-control @error('name')is-invalid @enderror">
    @error('name')
        <p class="invalid-feedback">{{$message}}</p> 
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Parent:</label>
    <select name="parent_id" class="form-control">
        <option value="">No Parent</option>
        @foreach ($parents as $parent)
        <option value="{{ $parent->id }}" @if($parent->id == old('parent_id',$category->parent_id)) selected @endif>{{ $parent->name }}</option>
        @error('parent_id')
        <p class="invalid-feedback">{{$message}}</p> 
        @enderror
        @endforeach

    </select>
</div>
<div class="form-group mb-3">
    <label for="">Description:</label>
    <textarea name="description" class="form-control">{{ old('description',$category->description) }}</textarea>
    @error('description')
    <p class="invalid-feedback">{{$message}}</p> 
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Image:</label>
    <input type="file" name="image" class="form-control">
    @error('image')
    <p class="invalid-feedback">{{$message}}</p> 
    @enderror
</div>
<div class="form-group mb-3">
    <label for="">Status:</label>
    <div>
        <label><input type="radio" name="status" value="active" @if (old('status',$category->status)) checked @endif>
            Active</label>
        <label><input type="radio" name="status" value="inactive" @if (old('status',$category->status)) checked @endif>
            Inactive</label>
        @error('status')
        <p class="invalid-feedback">{{$message}}</p> 
        @enderror
    </div>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ $button_label ?? 'Save' }}</button>
</div>