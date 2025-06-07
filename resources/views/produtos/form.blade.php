<div class="mb-3">
    <label for="nome" class="form-label">Nome do Produto</label>
    <input type="text" name="nome" class="form-control @error('nome') is-invalid @enderror"
           value="{{ old('nome', $produto->nome ?? '') }}">
    @error('nome')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="preco" class="form-label">Preço</label>
    <input type="number" step="0.01" name="preco" class="form-control @error('preco') is-invalid @enderror"
           value="{{ old('preco', $produto->preco ?? '') }}">
    @error('preco')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="categoria_produto_id" class="form-label">Categoria do Produto</label>
    <select name="categoria_produto_id" class="form-select @error('categoria_produto_id') is-invalid @enderror">
        <option value="">Selecione</option>
        @foreach($categorias as $categoria)
            <option value="{{ $categoria->id }}"
                {{ old('categoria_produto_id', $produto->categoria_produto_id ?? '') == $categoria->id ? 'selected' : '' }}>
                {{ $categoria->nome }}
            </option>
        @endforeach
    </select>
    @error('categoria_produto_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="fornecedor_id" class="form-label">Fornecedor</label>
    <select name="fornecedor_id" class="form-select @error('fornecedor_id') is-invalid @enderror">
        <option value="">Selecione</option>
        @foreach($fornecedores as $fornecedor)
            <option value="{{ $fornecedor->id }}"
                {{ old('fornecedor_id', $produto->fornecedor_id ?? '') == $fornecedor->id ? 'selected' : '' }}>
                {{ $fornecedor->nome }}
            </option>
        @endforeach
    </select>
    @error('fornecedor_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<button type="submit" class="btn btn-success">Salvar</button>
<a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
