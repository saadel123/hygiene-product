<div class="col-md-6">
    <label for="nom" class="form-label">Nom*</label>
    <input type="text" name="nom" id="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}"
        value="{{ old('nom') }}" required />
    @error('nom')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-md-6">
    <label for="prenom" class="form-label">Prénom*</label>
    <input type="text" name="prenom" id="prenom"
        class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" value="{{ old('prenom') }}" required />
    @error('prenom')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-md-6">
    <label for="number" class="form-label">Tél*</label>
    <input type="number" id="number" class="form-control {{ $errors->has('tele') ? 'is-invalid' : '' }}"
        name="tele" value="{{ old('tele') }}" required />
    @error('tele')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-md-6">
    <label for="email" class="form-label">Email*</label>
    <input type="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
        name="email" value="{{ old('email') }}" required />
    @error('email')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="col-md-12">
    <label for="adresse" class="form-label">Adresse*</label>
    <input type="text" id="adresse" class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}"
        name="adresse" value="{{ old('adresse') }}" required />
    @error('adresse')
        <span>{{ $message }}</span>
    @enderror
</div>
<div class="col-md-12">
    <label for="adresse" class="form-label">Adresse*</label>
    <input type="text" id="adresse" class="form-control {{ $errors->has('adresse') ? 'is-invalid' : '' }}"
        name="adresse" value="{{ old('adresse') }}" required />
    @error('adresse')
        <span>{{ $message }}</span>
    @enderror
</div>
