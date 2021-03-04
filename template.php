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
$T['pageTitle'] = '';

// Define as folhas de estilo desta página.
// Deixe vazio para não usar CSS adicional nesta página.
$T['pageCSS'] = '/css/template.css';

// Define o JavaScript desta página.
// Deixe vazio para não usar JavaScript adicional nesta página.
$T['pageJS'] = '/js/template.js';

/* Aqui entram todos os seus códigos PHP desta página */

/* Aqui terminam todos os seus códigos PHP desta página */

/* Carrega o header e o nav da página */
require '_header.php';

?>

            <article>

                <h2>Título da Página</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus numquam debitis quis doloremque
                    illo ab dolorem sed, ducimus reprehenderit? Culpa nulla tempora numquam quo quae explicabo harum
                    possimus cum porro?</p>
                <picture>
                    <img class="flush" src="https://picsum.photos/400/300" alt="Imagem aleatória">
                </picture>
                <p><a href="/">Link de teste</a></p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium ut ex voluptatibus, quibusdam,
                    consectetur neque enim iure aliquid cum dolore alias error facere deserunt quos itaque dolorem
                    inventore officiis fugit.</p>

            </article>

            <aside>

                <h3>Sidebar</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident necessitatibus atque.</p>

            </aside>

<?php

require '_footer.php';