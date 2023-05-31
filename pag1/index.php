<?php
    include_once 'function/blocosite.php';

    $blocos = new blocos();
    $blocos->header(); ?>

    <div class="tudo"> <?php

        $blocos->topo(); ?>

        <div class="conteudo"> <?php
                        
            $blocos->conhecamais(); 
            
            ?>
                        
        </div> <?php

        $blocos->rodape();
?>