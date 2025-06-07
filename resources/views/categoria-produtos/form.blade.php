<div class="mb-3">
    <label for="nome" class="form-label">Nome da Categoria</label>
    <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror"
           value="{{ old('nome', $categoria_produto->nome ?? '') }}">
    @error('nome')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('categoria-produtos.index') }}" class="btn btn-secondary">Cancelar</a>
