<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../login.php?redirect=pt/index.php");
	}
?>

<!doctype html>
<html lang="pt" class="no-js">
  <head>
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1">
      
      
      
      <link rel="icon" href="../assets/images/favicon.png">
      <meta name="generator" content="mkdocs-1.3.0, mkdocs-material-8.2.14">
    
    
      
        <title>Bem-vindo ao Mkdocs - Static Documentation Project</title>
      
    
    
      <link rel="stylesheet" href="../assets/stylesheets/main.3de6f41f.min.css">
      
        
        <link rel="stylesheet" href="../assets/stylesheets/palette.cc9b2e1e.min.css">
        
          
          
          <meta name="theme-color" content="#ffa724">
        
      
    
    
    
      
        
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i%7CRoboto+Mono:400,400i,700,700i&display=fallback">
        <style>:root{--md-text-font:"Roboto";--md-code-font:"Roboto Mono"}</style>
      
    
    
    <script>__md_scope=new URL("..",location),__md_get=(e,_=localStorage,t=__md_scope)=>JSON.parse(_.getItem(t.pathname+"."+e)),__md_set=(e,_,t=localStorage,a=__md_scope)=>{try{t.setItem(a.pathname+"."+e,JSON.stringify(_))}catch(e){}}</script>
    
      

    
    
  </head>
  
  
    
    
    
    
    
    <body dir="ltr" data-md-color-scheme="" data-md-color-primary="orange" data-md-color-accent="">
  
    
    
    <input class="md-toggle" data-md-toggle="drawer" type="checkbox" id="__drawer" autocomplete="off">
    <input class="md-toggle" data-md-toggle="search" type="checkbox" id="__search" autocomplete="off">
    <label class="md-overlay" for="__drawer"></label>
    <div data-md-component="skip">
      
        
        <a href="#bem-vindo-ao-mkdocs" class="md-skip">
          Ir para o conte??do
        </a>
      
    </div>
    <div data-md-component="announce">
      
    </div>
    
    
      

<header class="md-header" data-md-component="header">
  <nav class="md-header__inner md-grid" aria-label="Cabe??alho">
    <a href=".." title="Static Documentation Project" class="md-header__button md-logo" aria-label="Static Documentation Project" data-md-component="logo">
      
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 8a3 3 0 0 0 3-3 3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3m0 3.54C9.64 9.35 6.5 8 3 8v11c3.5 0 6.64 1.35 9 3.54 2.36-2.19 5.5-3.54 9-3.54V8c-3.5 0-6.64 1.35-9 3.54Z"/></svg>

    </a>
    <label class="md-header__button md-icon" for="__drawer">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 6h18v2H3V6m0 5h18v2H3v-2m0 5h18v2H3v-2Z"/></svg>
    </label>
    <div class="md-header__title" data-md-component="header-title">
      <div class="md-header__ellipsis">
        <div class="md-header__topic">
          <span class="md-ellipsis">
            Static Documentation Project
          </span>
        </div>
        <div class="md-header__topic" data-md-component="header-topic">
          <span class="md-ellipsis">
            
              Bem-vindo ao Mkdocs
            
          </span>
        </div>
      </div>
    </div>
    
    
      <div class="md-header__option">
        <div class="md-select">
          
          <button class="md-header__button md-icon" aria-label="Selecione o idioma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m12.87 15.07-2.54-2.51.03-.03A17.52 17.52 0 0 0 14.07 6H17V4h-7V2H8v2H1v2h11.17C11.5 7.92 10.44 9.75 9 11.35 8.07 10.32 7.3 9.19 6.69 8h-2c.73 1.63 1.73 3.17 2.98 4.56l-5.09 5.02L4 19l5-5 3.11 3.11.76-2.04M18.5 10h-2L12 22h2l1.12-3h4.75L21 22h2l-4.5-12m-2.62 7 1.62-4.33L19.12 17h-3.24Z"/></svg>
          </button>
          <div class="md-select__inner">
            <ul class="md-select__list">
              
                <li class="md-select__item">
                  <a href="../" hreflang="en" class="md-select__link">
                    English
                  </a>
                </li>
                
                <li class="md-select__item">
                  <a href="./" hreflang="pt" class="md-select__link">
                    Portuguese
                  </a>
                </li>
                
            </ul>
          </div>
        </div>
      </div>
    
    
      <label class="md-header__button md-icon" for="__search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16 6.5 6.5 0 0 1 3 9.5 6.5 6.5 0 0 1 9.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5Z"/></svg>
      </label>
      <div class="md-search" data-md-component="search" role="dialog">
  <label class="md-search__overlay" for="__search"></label>
  <div class="md-search__inner" role="search">
    <form class="md-search__form" name="search">
      <input type="text" class="md-search__input" name="query" aria-label="Buscar" placeholder="Buscar" autocapitalize="off" autocorrect="off" autocomplete="off" spellcheck="false" data-md-component="search-query" required>
      <label class="md-search__icon md-icon" for="__search">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9.5 3A6.5 6.5 0 0 1 16 9.5c0 1.61-.59 3.09-1.56 4.23l.27.27h.79l5 5-1.5 1.5-5-5v-.79l-.27-.27A6.516 6.516 0 0 1 9.5 16 6.5 6.5 0 0 1 3 9.5 6.5 6.5 0 0 1 9.5 3m0 2C7 5 5 7 5 9.5S7 14 9.5 14 14 12 14 9.5 12 5 9.5 5Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 11v2H8l5.5 5.5-1.42 1.42L4.16 12l7.92-7.92L13.5 5.5 8 11h12Z"/></svg>
      </label>
      <nav class="md-search__options" aria-label="Pesquisar">
        
        <button type="reset" class="md-search__icon md-icon" aria-label="Limpar" tabindex="-1">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 6.41 17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z"/></svg>
        </button>
      </nav>
      
    </form>
    <div class="md-search__output">
      <div class="md-search__scrollwrap" data-md-scrollfix>
        <div class="md-search-result" data-md-component="search-result">
          <div class="md-search-result__meta">
            Inicializando a pesquisa
          </div>
          <ol class="md-search-result__list"></ol>
        </div>
      </div>
    </div>
  </div>
</div>
    
    
  </nav>
  
</header>
    
    <div class="md-container" data-md-component="container">
      
      
        
          
        
      
      <main class="md-main" data-md-component="main">
        <div class="md-main__inner md-grid">
          
            
              
              <div class="md-sidebar md-sidebar--primary" data-md-component="sidebar" data-md-type="navigation" >
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    


<nav class="md-nav md-nav--primary" aria-label="Navega????o" data-md-level="0">
  <label class="md-nav__title" for="__drawer">
    <a href=".." title="Static Documentation Project" class="md-nav__button md-logo" aria-label="Static Documentation Project" data-md-component="logo">
      
  
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 8a3 3 0 0 0 3-3 3 3 0 0 0-3-3 3 3 0 0 0-3 3 3 3 0 0 0 3 3m0 3.54C9.64 9.35 6.5 8 3 8v11c3.5 0 6.64 1.35 9 3.54 2.36-2.19 5.5-3.54 9-3.54V8c-3.5 0-6.64 1.35-9 3.54Z"/></svg>

    </a>
    Static Documentation Project
  </label>
  
  <ul class="md-nav__list" data-md-scrollfix>
    
      
      
      

  
  
    
  
  
    <li class="md-nav__item md-nav__item--active">
      
      <input class="md-nav__toggle md-toggle" data-md-toggle="toc" type="checkbox" id="__toc">
      
      
        
      
      
        <label class="md-nav__link md-nav__link--active" for="__toc">
          Bem-vindo ao Mkdocs
          <span class="md-nav__icon md-icon"></span>
        </label>
      
      <a href="./" class="md-nav__link md-nav__link--active">
        Bem-vindo ao Mkdocs
      </a>
      
        

<nav class="md-nav md-nav--secondary" aria-label="??ndice">
  
  
  
    
  
  
    <label class="md-nav__title" for="__toc">
      <span class="md-nav__icon md-icon"></span>
      ??ndice
    </label>
    <ul class="md-nav__list" data-md-component="toc" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#comandos" class="md-nav__link">
    Comandos
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#layout-do-projeto" class="md-nav__link">
    Layout do Projeto
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#trabalhando-com-imagens" class="md-nav__link">
    Trabalhando com imagens
  </a>
  
</li>
      
    </ul>
  
</nav>
      
    </li>
  

    
  </ul>
</nav>
                  </div>
                </div>
              </div>
            
            
              
              <div class="md-sidebar md-sidebar--secondary" data-md-component="sidebar" data-md-type="toc" >
                <div class="md-sidebar__scrollwrap">
                  <div class="md-sidebar__inner">
                    

<nav class="md-nav md-nav--secondary" aria-label="??ndice">
  
  
  
    
  
  
    <label class="md-nav__title" for="__toc">
      <span class="md-nav__icon md-icon"></span>
      ??ndice
    </label>
    <ul class="md-nav__list" data-md-component="toc" data-md-scrollfix>
      
        <li class="md-nav__item">
  <a href="#comandos" class="md-nav__link">
    Comandos
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#layout-do-projeto" class="md-nav__link">
    Layout do Projeto
  </a>
  
</li>
      
        <li class="md-nav__item">
  <a href="#trabalhando-com-imagens" class="md-nav__link">
    Trabalhando com imagens
  </a>
  
</li>
      
    </ul>
  
</nav>
                  </div>
                </div>
              </div>
            
          
          <div class="md-content" data-md-component="content">
            <article class="md-content__inner md-typeset">
              
                


<h1 id="bem-vindo-ao-mkdocs">Bem-vindo ao Mkdocs</h1>
<p>For full documentation visit <a href="https://www.mkdocs.org">mkdocs.org</a>.</p>
<h2 id="comandos">Comandos</h2>
<ul>
<li><code>mkdocs new [dir-name]</code> - Create a new project.</li>
<li><code>mkdocs serve</code> - Start the live-reloading docs server.</li>
<li><code>mkdocs build</code> - Build the documentation site.</li>
<li><code>mkdocs -h</code> - Print help message and exit.</li>
</ul>
<h2 id="layout-do-projeto">Layout do Projeto</h2>
<pre><code>mkdocs.yml    # The configuration file.
docs/
    index.md  # The documentation homepage.
    ...       # Other markdown pages, images and other files.
</code></pre>
<h2 id="trabalhando-com-imagens">Trabalhando com imagens</h2>
<ul>
<li>Save the image at ./docs/assets/</li>
</ul>
<h1 id="image-descriptionassetsimagejpg"><code>![Image Description](assets/image.jpg)</code></h1>

              
            </article>
          </div>
        </div>
        
      </main>
      
        <footer class="md-footer">
  
  <div class="md-footer-meta md-typeset">
    <div class="md-footer-meta__inner md-grid">
      <div class="md-copyright">
  
  
    Made with
    <a href="https://squidfunk.github.io/mkdocs-material/" target="_blank" rel="noopener">
      Material for MkDocs
    </a>
  
</div>
      
    </div>
  </div>
</footer>
      
    </div>
    <div class="md-dialog" data-md-component="dialog">
      <div class="md-dialog__inner md-typeset"></div>
    </div>
    <script id="__config" type="application/json">{"base": "..", "features": [], "search": "../assets/javascripts/workers/search.2a1c317c.min.js", "translations": {"clipboard.copied": "Copiado para \u00e1rea de transfer\u00eancia", "clipboard.copy": "Copiar para \u00e1rea de transfer\u00eancia", "search.config.lang": "pt", "search.config.pipeline": "trimmer, stopWordFilter", "search.config.separator": "[\\s\\-]+", "search.placeholder": "Buscar", "search.result.more.one": "Mais 1 nesta p\u00e1gina", "search.result.more.other": "Mais # nesta p\u00e1gina", "search.result.none": "Nenhum resultado encontrado", "search.result.one": "1 resultado encontrado", "search.result.other": "# resultados encontrados", "search.result.placeholder": "Digite para iniciar a busca", "search.result.term.missing": "Ausente", "select.version.title": "Selecione a vers\u00e3o"}}</script>
    
    
      <script src="../assets/javascripts/bundle.c2e1ee47.min.js"></script>
      
    
  </body>
</html>