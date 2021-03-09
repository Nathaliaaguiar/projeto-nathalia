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
$T['pageTitle'] = 'Artigo Completo';

// Define as folhas de estilo desta página.
// Deixe vazio para não usar CSS adicional nesta página.
$T['pageCSS'] = '/css/article.css';

// Define o JavaScript desta página.
// Deixe vazio para não usar JavaScript adicional nesta página.
$T['pageJS'] = '';

/* Aqui entram todos os seus códigos PHP desta página */

// Obtém o id do artigo
$id = (isset($_SERVER['QUERY_STRING'])) ? intval($_SERVER['QUERY_STRING']) : 0;
if ($id == 0) {
    header('Location: /index.php');
}

// Obtém o artigo do database
$sql = "SELECT *, DATE_FORMAT(art_date, '%d/%m/%Y às %H:%i') AS dateBr FROM `articles`
INNER JOIN authors ON art_author = aut_id
WHERE `art_id` = '{$id}'
	AND art_status = 'ativo'
    AND art_date <= NOW()";
$res = $conn->query($sql);

// Se não achou o artigo no database vai para a index
if ($res->num_rows != 1) {
    header("Location: /index.php");
}

// Se achou o artigo, coloca na view
$art = $res->fetch_assoc();

$article = <<<HTML

<h2>{$art['art_title']}</h2>
<small class="authorDate">
    Por <a href="{$art['aut_site']}" target="_blank">{$art['aut_name']}</a> em {$art['dateBr']}.
</small>
{$art['art_text']}
<hr class="separator">
    <p class="allLink"><a href="/index.php">Todos os artigos</a></p>

HTML;

// Altera o título da página
$T['pageTitle'] = "Artigo: {$art['art_title']}";

/* Aqui terminam todos os seus códigos PHP desta página */

/* Carrega o header e o nav da página */
require '_header.php';

?>

            <article>
                <?php echo $article ?>
            </article>

            <aside>

                <h3>Sidebar</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident necessitatibus atque.</p>

            </aside>

<?php

require '_footer.php';