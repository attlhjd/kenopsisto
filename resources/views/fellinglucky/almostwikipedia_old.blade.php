<body>
<style>
    body, html {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background: white;
    }

    header {
        background: white;
        padding: 10px;
        display: flex;
        align-items: center;
    }

    .logo {
        height: 50px;
        margin-right: 20px;
    }

    .search-bar {
        flex-grow: 1;
        padding: 5px;
    }

    .search-button {
        padding: 5px 10px;
        background: #ddd;
        border: none;
        cursor: pointer;
    }

    .top-nav {
        background: white;
        padding: 10px;
        text-align: center;
    }

    .top-nav a {
        margin-right: 15px;
        text-decoration: none;
        color: black;
    }

    main {
        padding: 20px;
        background: white;
        margin: 20px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .grid {
        display: grid;
        grid-template-columns: 1fr 2fr 1fr; /* Example: Three columns */
        gap: 10px;
    }

    .page-container {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    h1 {
        color: #333;
    }

    footer {
        background: white;
        padding: 20px;
        text-align: center;
        font-size: 14px;
        color: #666;
    }
</style>
<div class="page-container">
    <header>
        <img src="wikipedia-logo.png" alt="Wikipedia logo" class="logo">
        <input type="search" placeholder="Rechercher sur Wikipedia" class="search-bar">
        <button class="search-button">Rechercher</button>
    </header>
    <main>
    <div class="grid grid-cols-3">
        <div></div>
            <div>
            <h1>Kenopsis</h1>
            <hr>
            <nav class="top-nav">
                <a href="#">Lire</a>
                <a href="#">Modifier</a>
                <a href="#">Modifier le code</a>
                <a href="#">Voir l'historique</a>
            </nav>
            <hr>

            <p>Do you really think it's going to be so easy to find about Kenopsis?</p>
            <p>Keep searching.</p>
            </div>
    </div>
    </main>
    <footer>
        <p>Droit d'auteur: les textes sont disponibles sous licence Creative Commons attribution, partage dans les mêmes conditions; d'autres conditions peuvent s'appliquer. Voyez les conditions d'utilisation pour plus de détails, ainsi que les crédits graphiques. En cas de réutilisation des textes de cette page, voyez comment citer les auteurs et mentionner la licence.</p>
        <p>Wikipedia® est une marque déposée de la Wikimedia Foundation, Inc., organisation de bienfaisance régie par le paragraphe 501(c)(3) du code fiscal des États-Unis.</p>
    </footer>
</div>
</body>
