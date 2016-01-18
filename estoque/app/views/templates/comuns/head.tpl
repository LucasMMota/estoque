<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/files/images/logo.ico">

    {section name=i loop=$css}
        <link href="{$css[i]}" rel="stylesheet" type="text/css"/>
    {/section}
</head>

<body>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/">Controle de estoque</a>

            <div class="nav-collapse">
                <ul class="nav pull-right menu">
                    <li><a href="/produtos">Produtos</a></li>
                    <li><a href="/clientes">Clientes</a></li>
                    <li><a href="/pedidos">Pedidos</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>