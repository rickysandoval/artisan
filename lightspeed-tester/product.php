<?php
// Include our newly created class
ini_set('display_errors', 1);
require_once 'TemplateRenderer.php';
require_once 'MockData.php';

// // ... some code

$data = getMockData('product');
$renderer = new TemplateRenderer(array('pathToRoot' => '..'));
// Render template passing some variables and print it
print $renderer->render('index.twig', $data);