<?php
// Include our newly created class
ini_set('display_errors', 1);
require_once 'TemplateRenderer.php';

// // ... some code

$news = array('1' => 'foo');
$renderer = new TemplateRenderer();
// Render template passing some variables and print it
print $renderer->render('index.twig', array('news' => $news));