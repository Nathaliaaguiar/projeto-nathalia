<?php

/**
 * Modelo de página do site.
 * Copie este modelo para gerar novas páginas para o site.
 */

/* Carrega as configurações da página */
require '_config.php';

/* Configura esta página */

// Define o <title></title> desta página.
// Deixe vazio para a 'index'.
$T['pageTitle'] = 'Notícias';

// Define as folhas de estilo desta página.
// Deixe vazio para não usar CSS adicional nesta página.
$T['pageCSS'] = '/css/news.css';

// Define o JavaScript desta página.
// Deixe vazio para não usar JavaScript adicional nesta página.
$T['pageJS'] = '/js/jquery.rss.min.js';

/* Aqui entram todos os seus códigos PHP desta página */

/* Aqui terminam todos os seus códigos PHP desta página */

/* Carrega o header e o nav da página */
require '_header.php';

?>

            <article>
    
                <h2>Notícias Atualizadas</h2>
                <div id="news"></div>

            </article>

            <aside>

                <h3>Sidebar</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident necessitatibus atque.</p>

            </aside>

<?php

require '_footer.php';