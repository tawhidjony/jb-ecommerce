<div class="row">
    <div class="col-12 col-lg-8">

                <div class="form-group">
                    <label for="name">{{ __('Name') }}</label>
                    <div class="input-group">
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                            name="name" placeholder="Name" value="@if ($newItem->name){{ $newItem->name }}@else{{ old('name') }}@endif">

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="category">{{ __('Category') }}</label>
                    <div class="input-group">
                        <select id="category"  name="category_id" class="form-control{{ $errors->has('category_id') ? ' is-invalid' : '' }}"
                            name="category">
                            <option value="">Select a category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @if ($newItem->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('category_id'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('category_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="price">{{ __('Price') }}</label>
                    <div class="input-group">
                        <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                            name="price" placeholder="Price" value="@if ($newItem->price){{ $newItem->price }}@else{{ old('price') }}@endif">
                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="qty">{{ __('Quantity') }}</label>
                    <div class="input-group">
                        <input id="qty" type="text" class="form-control{{ $errors->has('qty') ? ' is-invalid' : '' }}"
                            name="qty" placeholder="Quantity" value="@if ($newItem->qty){{ $newItem->qty }}@else{{ old('qty') }}@endif">
                        @if ($errors->has('qty'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('qty') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="formControlRange">Variation </label>
                    <select multiple data-role="tagsinput" class="form-control" name="variation[]"></select>
                </div>
                <div class="form-group">
                    <label for="price">{{ __('Product Description') }}</label>
                    <textarea id="mytextarea" name="description">Hello, World!</textarea>

                </div>


    </div>
    <div class="col-12 col-lg-4">

                <div class="form-group">
                    <label for="image">{{ __('Upload Thumbnail') }}</label>
                    <div class="input-group">
                        <input id="image" type="file" class="form-control{{ $errors->has('thumbnail') ? ' is-invalid' : '' }}"
                            name="thumbnail" placeholder="icon" value="@if ($newItem->thumbnail){{ $newItem->thumbnail }}@else{{ old('thumbnail') }}@endif">

                        @if ($errors->has('thumbnail'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('thumbnail') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="image">{{ __('Thumbnail Image') }}</label>
                    <div class="input-group">
                        <img id="preview-image-before-upload"
                            src="{{ $newItem->thumbnail ? URL::to($newItem->thumbnail) : 'https://www.riobeauty.co.uk/images/product_image_not_found.gif' }}"
                            alt="preview image" style="width: 100%; height: 200px; object-fit: cover;">
                    </div>
                </div>

                <div class="form-group">
                    <input class="form-control" type="file" name="product_img[]" accept=".jpg, .png, image/jpeg, image/png" multiple>
                </div>

    </div>
</div>
