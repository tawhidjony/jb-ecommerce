<div class="form-body">
    <div class="form-row">

        <div class="form-group col-md-6">
            <label for="name" >{{ __('Name') }}</label>
            <div class="input-group">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Name" value="@if($newItem->name){{$newItem->name}}@else{{ old('name') }}@endif" >

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
                @endif
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="icon" >{{ __('Link') }}</label>
            <div class="input-group">
                <input id="icon" type="text" class="form-control{{ $errors->has('link') ? ' is-invalid' : '' }}" name="link" placeholder="Link" value="@if($newItem->link){{$newItem->link}}@else{{ old('link') }}@endif" >

                @if ($errors->has('link'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('link') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="image" >{{ __('Upload Image') }}</label>
            <div class="input-group">
                <input id="image" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}" name="photo" placeholder="icon" value="@if($newItem->photo){{$newItem->photo}}@else{{ old('photo') }}@endif" >

                @if ($errors->has('photo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="image" >{{ __('Preview Image') }}</label>
            <div class="input-group">
                <img id="preview-image-before-upload" src="{{ $newItem->photo ? URL::to($newItem->photo) : "https://www.riobeauty.co.uk/images/product_image_not_found.gif" }}"
                alt="preview image" style="width: 80px; height: 80px">
            </div>
        </div>

    </div>
</div>

