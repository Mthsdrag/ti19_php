<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modelo</title>
    <!-- Link CSS do Bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Link para CSS Específico -->
    <link rel="stylesheet" href="../css/meu_estilo.css">
</head>
<body>
<main class="container">
    <div> <!-- abre row -->
        <div> <!-- abre dimensionamento -->
            <h2 class="breadcrumb text-danger">
                <a href="produtos_lista.php">
                    <button class="btn btn-danger">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </button>
                </a>
                Inserindo Produtos
            </h2>
            <div class="thumbnail"> <!-- thumbnail -->
                <div class="alert alert-danger" role="alert"> <!-- alert -->
                    <form 
                        action="produtos_insere.php"
                        enctype="multipart/form-data"
                        method="post"
                        id="form_produto_insere"
                        name="form_produto_insere"
                    >
                        <!-- Select id_tipo_produto -->
                        <label for="id_tipo_produto">Tipo:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-tasks"></span>
                            </span>
                            <!-- select>option*2 -->
                            <select 
                                name="id_tipo_produto" 
                                id="id_tipo_produto"
                                class="form-control"
                                required
                            >
                                <option value="1">Churrasco</option>
                                <option value="2">Sobremesa</option>
                            </select>
                        </div> <!-- fecha input-group -->
                        <!-- fecha Select id_tipo_produto -->
                        <br>

                        <!-- radio destaque_produto -->
                        <label for="destaque_produto">Destaque?</label>
                        <div class="input-group">
                            <label 
                                for="destaque_produto_s"
                                class="radio-inline"
                            >
                                <input 
                                    type="radio"
                                    name="destaque_produto"
                                    id="destaque_produto"
                                    value="Sim"
                                >
                                Sim
                            </label>
                            <label 
                                for="destaque_produto_n"
                                class="radio-inline"
                            >
                                <input 
                                    type="radio"
                                    name="destaque_produto"
                                    id="destaque_produto"
                                    value="Não"
                                    checked
                                >
                                Não
                            </label>
                        </div> <!-- fecha input-group -->
                        <!-- fecha radio destaque_produto -->
                        <br>

                        <!-- text descri_produto -->
                        <label for="descri_produto">Descrição:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-cutlery"></span>
                            </span>
                            <input 
                                type="text" 
                                name="descri_produto" 
                                id="descri_produto"
                                class="form-control"
                                placeholder="Digite o título do produto."
                                maxlength="100"
                                required
                            >
                        </div> <!-- fecha input-group -->
                        <!-- fecha text descri_produto -->
                        <br>

                        <!-- textarea resumo_produto -->
                        <label for="resumo_produto">Resumo:</label>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-list-alt"></span>
                            </span>
                            <textarea 
                                name="resumo_produto" 
                                id="resumo_produto"
                                class="form-control"
                                placeholder="Digite os detalhes do produto."
                                cols="30"
                                rows="8"
                            ></textarea>
                        </div> <!-- fecha input-group -->
                        <!-- fecha textarea resumo_produto -->
                        <br>

                    </form>

                </div> <!-- fecha alert -->
            </div> <!-- fecha thumbnail -->
        </div> <!-- fecha dimensionamento -->
    </div> <!-- fecha row -->
</main>


<!-- Link arquivos Bootstrap js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>    
</body>
</html>