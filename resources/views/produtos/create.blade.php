<html>
<head>
    <title>Produtos</title>
</head>

<body>
    <h1>Novo Produto</h1>
    <form action="" method="post">
        @csrf
        <label for="">Nome do Produto</label>
        <input type="text" name="nome" id="nome">
        <label for="">Descrição</label>
        <input type="text" name="descricao" id="descricao">
        <label for="">Preço</label>
        <input type="text" name="preco" id="preco">
        <label for="">Quantidade</label>
        <input type="text" name="quantidade" id="quantidade">
        <label for="">Imagem</label>
        <input type="text" name="imagem" id="imagem">
        <input type="submit" value="Salvar">
    </form>
</body>

</html>