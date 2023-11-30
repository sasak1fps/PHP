<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Notícias</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em;
}

.news-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 20px;
}

article {
    border: 1px solid #ddd;
    border-radius: 8px;
    margin: 10px;
    padding: 10px;
    max-width: 300px;
}

article img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
}

h2 {
    color: #333;
}

p {
    color: #666;
}

a {
    color: #007BFF;
    text-decoration: none;
    display: block;
    margin-top: 10px;
}

a:hover {
    text-decoration: underline;
}

footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 1em;
    position: fixed;
    bottom: 0;
    width: 100%;
}

    </style>
</head>
<body>
    <header>
        <h1>Notícias Diárias</h1>
    </header>

    <section class="news-container">
        <article>
            <img src="www.google.com" alt="Imagem da notícia" wordwrap>
            <h2>Título da Notícia 1</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod...</p>
            <a href=#>Leia mais</a>
        </article>

        <article>
            <img src="placeholder.jpg" alt="Imagem da notícia">
            <h2>Título da Notícia 2</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod...</p>
            <a href=#>Leia mais</a>
        </article>

        <!-- Adicione mais artigos conforme necessário -->
    </section>

    <footer>
        <p>&copy; 2023 Notícias Diárias. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
