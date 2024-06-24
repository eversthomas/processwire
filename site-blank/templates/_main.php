<?php namespace ProcessWire;

// Optional main output file, called after rendering page’s template file. 
// This is defined by $config->appendTemplateFile in /site/config.php, and
// is typically used to define and output markup common among most pages.
// 	
// When the Markup Regions feature is used, template files can prepend, append,
// replace or delete any element defined here that has an "id" attribute. 
// https://processwire.com/docs/front-end/output/markup-regions/
	
/** @var Page $page */
/** @var Pages $pages */
/** @var Config $config */
	
$home = $pages->get('/'); /** @var HomePage $home */

?>
<!doctype html>
<html class="no-js" lang="de">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $page->title; ?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates; ?>styles/main.css" />
  <meta name="description" content="">
  <?php
    // Bestimmen Sie das Protokoll (http oder https)
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    // Bestimmen Sie den Host, wobei www entfernt wird, falls vorhanden
    $host = preg_replace('/^www\./', '', $_SERVER['HTTP_HOST']);
    // Bestimmen Sie die aktuelle URI
    $request_uri = $_SERVER['REQUEST_URI'];
    // Kombinieren Sie alles zu einer vollständigen URL ohne www
    $canonical_url = $protocol . $host . $request_uri;
  ?>
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <meta property="og:image:alt" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
  <link rel="icon" href="/icon.svg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
</head>

<body id="html-body">
    <header class="kopfzeile" aria-label="Hauptkopfzeile">
	<div class="header-inner">
		<h1><?php echo $page->title; ?></h1>
	</div>
        <nav class="hauptnavigation" aria-label="Hauptnavigation">
		
        </nav>
    </header>

    <main id="content" class="hauptbereich" aria-label="Hauptinhalt">
        
    </main>

	<aside id="sidebar">
		
	</aside>

    <footer id="footer" class="webseitenfuss" aria-label="Fußzeile">
        <p class="impressum">© 2024 Sozialdienstleister-Webseite. Alle Rechte vorbehalten.</p>
    </footer>

  <script src="<?php echo $config->urls->templates; ?>scripts/main.js"></script>
</body>
</html>
