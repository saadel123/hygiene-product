<div class="col-md-6">
    <label for="nom" class="form-label">{{ __('partials.forms.contact.l_name') }}*</label>
    <input type="text" name="nom" id="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
        value="{{ old('nom') }}"  />
    @error('nom')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-md-6">
    <label for="prenom" class="form-label">{{ __('partials.forms.contact.f_name') }}*</label>
    <input type="text" name="prenom" id="prenom"
        class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" value="{{ old('prenom') }}"  />
    @error('prenom')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-md-6">
    <label for="number" class="form-label">{{ __('partials.forms.contact.phone') }}*</label>
    <input type="number" id="number" class="form-control {{ $errors->has('tele') ? 'is-invalid' : '' }}"
        name="tele" value="{{ old('tele') }}"  />
    @error('tele')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-md-6">
    <label for="email" class="form-label">{{ __('partials.forms.contact.email') }}*</label>
    <input type="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
        name="email" value="{{ old('email') }}"  />
    @error('email')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="col-md-12">
    <label for="adresse" class="form-label">{{ __('partials.forms.contact.address') }}*</label>
    <input type="text" id="adresse" class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}"
        name="adresse" value="{{ old('adresse') }}"  />
    @error('adresse')
        <span>{{ $message }}</span>
    @enderror
</div>