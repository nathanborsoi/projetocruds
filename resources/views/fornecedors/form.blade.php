<div class="mb-3"> 
    <label for="nome" class="form-label">Nome</label>
    <input id="nome" type="text" name="nome" class="form-control @error('nome') is-invalid @enderror"
           value="{{ old('nome', $fornecedor->nome ?? '') }}">
    @error('nome')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="cnpj" class="form-label">CNPJ</label>
    <input id="cnpj" type="text" name="cnpj" class="form-control @error('cnpj') is-invalid @enderror"
           value="{{ old('cnpj', $fornecedor->cnpj ?? '') }}">
    @error('cnpj')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror"
           value="{{ old('email', $fornecedor->email ?? '') }}">
    @error('email')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('fornecedors.index') }}" class="btn btn-secondary">Cancelar</a>
