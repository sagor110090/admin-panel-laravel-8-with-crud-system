<div class="form-group {{ $errors->has('website_name') ? 'has-error' : ''}}">
    <label for="website_name" class="control-label">{{ __('Website name') }}</label>
    <input class="form-control" name="website_name" type="text" id="website_name"
        value="{{ isset($sitesetting->website_name) ? $sitesetting->website_name : old('website_name')}}" required>
    {!! $errors->first('website_name', '<p class="text-danger">:message</p>') !!}
    <div class="invalid-feedback"> What's your website name?</div>
</div>



<div class="col-4">
    <div class="form-group {{ $errors->has('logo') ? 'has-error' : ''}}">
        <label for="logo" class="control-label">{{ __('logo') }}</label><br>
        <input type='file' name="logo" accept=".png, .jpg, .jpeg" onchange="showMyImage(this,'logo')"
            value="{{ isset($sitesetting->logo) ? $sitesetting->logo : old('image')}}">
        <input type='text' name="oldlogo" value="{{ isset($sitesetting->logo) ? $sitesetting->logo : ''}}" hidden>
        <div class="avatar-upload">
            <div class="avatar-preview">
                <img id="logo" class="avatar-preview"
                    src="{{ isset($sitesetting->logo) ? Storage::url($sitesetting->logo) : asset('upload.png')}}"
                    alt="image" />
            </div>
        </div>
        {!! $errors->first('logo', '<p class="text-danger">:message</p>') !!}
        <div class="invalid-feedback"> What's your logo?</div>
    </div>
</div>
<div class="col-4">
    <div class="form-group {{ $errors->has('favicon') ? 'has-error' : ''}}">
        <label for="favicon" class="control-label">{{ __('favicon') }}</label><br>
        <input type='file' name="favicon" accept=".ico" onchange="showMyImage(this,'favicon')"
            value="{{ isset($sitesetting->favicon) ? $sitesetting->favicon : old('image')}}">
        <input type='text' name="oldfavicon" value="{{ isset($sitesetting->favicon) ? $sitesetting->favicon : ''}}"
            hidden>
        <div class="avatar-upload">
            <div class="avatar-preview">
                <img id="favicon" class="avatar-preview"
                    src="{{ isset($sitesetting->favicon) ? Storage::url($sitesetting->favicon) : asset('upload.png')}}"
                    alt="image" />
            </div>
        </div>
        {!! $errors->first('favicon', '<p class="text-danger">:message</p>') !!}
        <div class="invalid-feedback"> What's your favicon?</div>
    </div>
</div>

<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ __('Address') }}</label>
    <input class="form-control" name="address" type="text" id="address"
        value="{{ isset($sitesetting->address) ? $sitesetting->address : old('address')}}" required>
    {!! $errors->first('address', '<p class="text-danger">:message</p>') !!}
    <div class="invalid-feedback"> What's your address?</div>
</div>

<div class="form-group {{ $errors->has('language') ? 'has-error' : ''}}">
    <label for="language" class="control-label">{{ __('Language') }}</label>
    <select name="language" id="language" class="form-control">

        @foreach($languages as $language => $name)
        <option value=" {{ $name }}"
            {{ isset($sitesetting->language) ? $sitesetting->language == $name ? 'selected': '' : '' }}> {{ $name }}
        </option>

        @endforeach

    </select>

    {!! $errors->first('language', '<p class="text-danger">:message</p>') !!}
    <div class="invalid-feedback"> What's your language?</div>
</div>

<a href="/languages" target="_blank" rel="noopener noreferrer" class="btn btn-primary mb-4">Add translations</a>



<div class="form-group">
    <input class="btn btn-primary btn-sm oneTimeSubmit" type="submit"
        value="{{ $formMode === 'edit' ? __('Update') : __('Save') }}">
</div>
