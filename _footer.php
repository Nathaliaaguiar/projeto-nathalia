</main>

<footer>

    <div class="info">

        <a href="/" title="Ir para a página inicial."><i class="fas fa-fw fa-home"></i></a>
        <div>
            &copy; Copyright 2021 Nathalia Aguiar
            <small>Todos os direitos reservados</small>
        </div>
        <a href="#top" title="Ir para o topo desta página."><i class="fas fa-fw fa-arrow-alt-circle-up"></i></a>

    </div>

    <div class="menu">

        <!-- Menu de redes sociais -->
        <div class="social">

        <?php

        // Lista de redes sociais $T['social']
         foreach($T['social'] as $socialKey => $socialValue) {

                // Primeira letra maiúscula
                $SocialKey = ucfirst($socialKey);

                // Gera lista de redes sociais
                echo <<<HTML
            <a href="{$socialValue}" target="_blank" title="{$T['siteName']} no {$SocialKey}."><i class="fab fa-fw fa-{$socialKey}-square"></i><span>{$SocialKey}</span></a>
HTML;
         }
        
         ?>
        </div>

        <!-- Menu de acesso rápido -->
        <div class="tools">
            <a href="/" title="Sobre este site."><i class="fas fa-fw fa-globe"></i><span>O Site</span></a>
            <a href="/" title="Sobre <?php echo lcfirst($T['fullSiteName']) ?>."><i class="fas fa-fw fa-microchip"></i><span><?php echo $T['fullSiteName'] ?></span></a>
            <a href="/" title="Faça contato com <?php echo lcfirst($T['fullSiteName']) ?>."><i class="fas fa-fw fa-mail-bulk"></i><span>Faça Contato</span></a>
            <a href="/" title="Sobre sua privacidade."><i class="fas fa-fw fa-unlock-alt"></i><span>Sua Privacidade</span></a>
        </div>

    </div>

</footer>

</div>

<!-- Carga dos JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="/js/global.js"></script>
<?php echo $JS ?>

</body>

</html>