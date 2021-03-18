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
$T['pageCSS'] = '/css/index.css';

// Define o JavaScript desta página.
// Deixe vazio para não usar JavaScript adicional nesta página.
$T['pageJS'] = '';

/* Aqui entram todos os seus códigos PHP desta página */

// Obtém todos os artigos do DB
$sql = "SELECT `art_id`, `art_image`, `art_title`, `art_intro`
        FROM articles
        WHERE `art_status` = 'ativo'
        ORDER BY `art_date` DESC'";
$res = $conn->query($sql);

/* Aqui terminam todos os seus códigos PHP desta página */

/* Carrega o header e o nav da página */
require '_header.php';

?>

            <article>

                <h2>Bem vindos ao Chapa quente</h2>
                <p>
Chapa Quente é exatamente para você que procura por mais sabor e qualidade, carne e molhos totalmente preparados por nós com carinho para te trazer a melhor experiência em seu paladar. 
Duvido não gostar !</p>
                <picture>
                    <img class="flush" src="/img/bg01.png" alt="Imagem aleatória">
                </picture>
               
            </article>

          
<?php

require '_footer.php';