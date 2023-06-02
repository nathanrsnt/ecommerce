<body>
<li>
    <h1>Produto: {{ $produto->nome }}</h1>
    <p>Descrição: {{ $produto->descricao }}</p>
    <p>Preço: {{ $produto->preco }}</p>
    <p>Quantidade: {{ $produto->quantidade }}</p>
    <p>Imagem: {{ $produto->imagem }}</p>
    <p>Criado em: {{ $produto->created_at }}</p>
    <p>Atualizado em: {{ $produto->updated_at }}</p>
    <a href="{{ route('produtos.store') }}">Voltar</a>
</li>
</body>