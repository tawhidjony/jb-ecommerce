<div class="form-body">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="name" >{{ __('Name') }}</label>
            <div class="input-group">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="@if($user->name){{$user->name}}@else{{ old('name') }}@endif" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
                @endif
            </div>

        </div>

        <div class="form-group col-md-6">
            <label for="email" >{{ __('E-Mail Address') }}</label>

            <div class="input-group">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="@if($user->email){{$user->email}}@else{{ old('email') }}@endif" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
                @endif
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="password" >{{ __('Password') }}</label>

            <div class="input-group">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" @if(!$user->password) required @endif>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert"><strong>{{ $errors->first('password') }}</strong>
            </span>
                @endif
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

            <div class="input-group">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" @if(!$user->password) required @endif>
            </div>
        </div>

        <div class="form-group col-md-12">
            <label for="email" >User Role</label>
            <div class="input-group">
                <select name="role" class="form-control{{ $errors->has('role') ? ' is-invalid' : '' }}">
                    <option value="">Select Role</option>
                    @foreach($roles as $key => $role)
                        <option value="{{$role->name}}" @if($user->hasRole($role->name)) selected @endif >{{$role->name}}</option>
                    @endforeach
                </select>

                @if ($errors->has('role'))
                    <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('role') }}</strong>
            </span>
                @endif
            </div>
        </div>

        {{-- <div class="form-group col-md-6">
            <label for="password-confirm" >User Image</label>

            <div class="input-group">
                <input id="photo" type="file" class="form-control{{ $errors->has('photo') ? ' is-invalid' : '' }}"
                       name="photo" accept="image/*" onchange="readURL(this);" value="@if($user->photo){{$user->photo}}@else{{ old('photo') }}@endif"
                       autofocus>

                @if ($errors->has('photo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('photo') }}</strong>
                    </span>
                @endif
                <img id="image" src="{{URL::to('public/images/',$user->photo)}}" style="width: 100px; height: 100px; margin-top: 5px;" >
            </div>
        </div> --}}
    </div>
</div>

