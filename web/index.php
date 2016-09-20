<?php

require('../vendor/autoload.php');
	

$app = new Silex\Application();
$app['debug'] = true;

// Register the monolog logging service
$app->register(new Silex\Provider\MonologServiceProvider(), array(
  'monolog.logfile' => 'php://stderr',
));

// Register view rendering
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// Our web handlers

$app->get('/', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('index.twig');
});
$app->get('/competitive-tumbling', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('competitive-tumbling.twig');
});

$app->get('/tumbling-classes', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('tumbling-classes.twig');
});

$app->get('/about', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('about.twig');
});
$app->get('/trampoline-classes', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('trampoline-classes.twig');
});
$app->get('/competitive-trampoline', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('competitive-trampoline.twig');
});

$app->get('/gymnastics-classes', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('gymnastics-classes.twig');
});

$app->get('/competitive-gymnastics', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('competitive-gymnastics.twig');
});
$app->get('/cheerleading-classes', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('cheerleading-classes.twig');
});
$app->get('/competitive-cheerleading', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('competitive-cheerleading.twig');
});
$app->get('/preschool-activities', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('preschool-activities.twig');
});
$app->get('/birthday-parties', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('birthday-parties.twig');
});
$app->get('/jump-for-fun', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('jump-for-fun.twig');
});

$app->get('/dance', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('dance.twig');
});
$app->get('/impact-america-martial-arts', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('impact-america-martial-arts.twig');
});

$app->get('/rhythmic', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('rhythmic.twig');
});
$app->get('/homeschool-programs', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('homeschool-programs.twig');
});
$app->get('/fundraisers', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('fundraisers.twig');
});

$app->get('/leasing-options', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('leasing-options.twig');
});
$app->get('/camps', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('camps.twig');
});

$app->get('/schedule', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('schedule.twig');
});
$app->get('/forms', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('forms.twig');
});
$app->get('/contact', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('contact.twig');
});

$app->run();