<?php

// Define o <title></title> da página.
if ($T['pageTitle'] == '') {

    // Se 'pageTitle' está vazio
    $TITLE = "{$T['siteName']} - {$T['siteSlogan']}";
} else {

    // Se 'pageTitle' tem valor
    $TITLE = "{$T['siteName']} - {$T['pageTitle']}";
}

// Define as folhas de estilo da página
if ($T['pageCSS'] == '') {
    
    // Se não definiu CSS
    $CSS = '';
} else {

    // Se definiu o CSS
    $CSS = "<link rel=\"stylesheet\" href=\"{$T['pageCSS']}\">\n";
}

// Define o JavaScript da página
if($T['pageJS'] == '') {

    // Se não usar JavaScript
    $JS = '';
} else {

    // Se usar JavaScript
    $JS = "<script src=\"{$T['pageJS']}\"></script>";
}

?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/global.css">
    <?php echo $CSS ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Grandstander&display=swap" rel="stylesheet">
    <title><?php echo $TITLE ?></title>
</head>

<body>

    <!-- Âncora para início da página -->
    <a id="top" name="top"></a>

    <!-- Enquadramento da página -->
    <div class="wrap">

        <header>
            <a href="/" title="<?php echo $T['siteName'] ?> - Página inicial">
                <img src="<?php echo $T['siteLogo'] ?>"  alt="<?php echo $T['siteName'] ?> - Intranet">
            </a>
            <h1><?php echo $T['siteName'] ?><small><?php echo $T['siteSlogan'] ?></small></h1>
        </header>

        <nav>
            <a href="/index.php" title="Página inicial"><i class="fas fa-fw fa-home"></i><span>Início</span></a>
            <a href="/news.php" title="Cardápio"><i class="fas fa-hamburger"></i></i><span>Cardápio</span></a>
            <a href="/contacts.php" title="Faça contato conosco"><i class="fas fa-fw fa-mail-bulk"></i><span>Contatos</span></a>
            <a href="/" title="Sobre o SiteName"><i class="fas fa-fw fa-info-circle"></i><span>Sobre</span></a>
        </nav>

        <main>
