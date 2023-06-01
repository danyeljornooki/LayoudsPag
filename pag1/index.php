<?php
    include_once 'function/blocosite.php';

    $blocos = new blocos();
    $blocos->header(); ?>

    <div class="tudo"> <?php

        $blocos->top(); ?>

        <div class="conteudo"> <?php
                        
            $blocos->modelos(); 
            $blocos->marcas(); 
            $blocos->tenis(); 
            
            ?>
                        
        </div> <?php

        $blocos->rodape();
?>