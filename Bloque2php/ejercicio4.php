<?php
$url = "https://escuelaestech.es/noticias/";
$html = file_get_contents($url);
preg_match_all('/<h3 class="elementor-post__title">\s*<a\s+href="([^"]+)"/', $html, $matches);
print_r($matches[1]);

