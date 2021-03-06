<head>
    <title>{$title}</title>
    {if isset($assets) && is_array($assets)}
        {*CSS INCLUSION*}
        {if !empty($assets['css'])}
            {foreach $assets['css'] as $css}
            <link rel="stylesheet" type="text/css" href="{$css}" media="screen">
            {/foreach}
        {/if}
        {*END - CSS INCLUSION*}

        {*BOOTSTRAP INCLUSION*}
        {if isset($bootstrap) && $bootstrap}
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        {/if}
        {*END - BOOTSTRAP INCLUSION*}

        {*JS INCLUSION*}
        {if !empty($assets['js'])}
            {foreach $assets['js'] as $js}
                <script src="{$js}"></script>
            {/foreach}
        {/if}
        {*END - JS INCLUSION*}
    {/if}
</head>
<body>
    <header id="header" class="bg-light">
        {* HEADER EXAMPLE FROM BOOSTRAP DOCUMENTATION*}
        <nav class="navbar navbar-expand-lg navbar-light container" >
            <a class="navbar-brand" href="/examen_php/"><img src="{$url}/views/img/logo.png" height="100px"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/examen_php/">Accueil <span class="sr-only">(current)</span></a>
                    </li>
{*                    <li class="nav-item">*}
{*                        <a class="nav-link" href="">Produits</a>*}
{*                    </li>*}


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categories
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/examen_php/category?id=1">Blog de Gaea</a>
                                <a class="dropdown-item" href="/examen_php/category?id=2">Noob</a>
                                <a class="dropdown-item" href="/examen_php/category?id=3">Flander's Company</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link btn" href="contact" tabindex="-1" aria-haspopup="true" name="contact">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="post" action="ncis">
                    <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Ncis" name="ncis">
                    <button class="btn btn-danger my-2 my-sm-0 btn-sm" type="submit"><img src="{$url}/views/img/recherche.png"></button>
                </form>
            </div>
        </nav>
        {* END - HEADER EXAMPLE FROM BOOSTRAP DOCUMENTATION*}
    </header>