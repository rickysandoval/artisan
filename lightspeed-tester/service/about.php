<?php
// Include our newly created class
ini_set('display_errors', 1);
require_once '../TemplateRenderer.php';
require_once '../MockData.php';

// // ... some code

$data = getMockData('about');
$renderer = new TemplateRenderer();
// Render template passing some variables and print it
print $renderer->render('index.twig', $data);