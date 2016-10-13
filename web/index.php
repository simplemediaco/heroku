<?php
$msg = '';
require('../vendor/autoload.php');
if(isset($_REQUEST['submit']))
{
	
$msg = "Name:".$_REQUEST['name'];
$msg .= "Name:".$_REQUEST['phone'];
$msg .= "Name:".$_REQUEST['email'];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
if(mail("hadden@simplemedia.co","Contact Email",$msg))
{
?>
<script type="text/javascript">
alert("Email Sent Successfully");

</script>
<?php } 

$msg = "Email Sent Successfully.";
}
$config = new stdClass();
$config->bucket_slug = "infinitebound"; // bucket slug
$config->object_slug = 'sbirthday-parties';
$config->object_type = 'sliders';
$config->read_key = "DurWsN72RuS5Jd2AExOdvqVDQNGv1jBY0aHexPvXCjiNhwqFUL"; // leave empty if not required
$config->write_key = "8u5THNrcyi4lWoYPsV67HkAShlyWdAEuSPS30gZiZJjTJn7BUa"; // leave empty if not required

$config->url = "https://api.cosmicjs.com/v1/" . $config->bucket_slug;
$config->objurl = "https://api.cosmicjs.com/v1/".$config->bucket_slug."/object-type/";
https://api.cosmicjs.com/v1/infinitebound/object-type/sliders?pretty=true
$config->objects_url = $config->url . "/objects";
$config->media_url = $config->url . "/media";
$config->add_object_url = $config->url . "/add-object";
$config->edit_object_url = $config->url . "/edit-object";
$config->delete_object_url = $config->url . "/delete-object";

include("cosmicjs.php");
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
$app->get('/private-cheer', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('private-cheer.twig');
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
$app->get('/contact', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('contact.twig');
});
$app->get('/privacy', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('privacy.twig');
});

$app->get('/forms', function() use($app) {
  $app['monolog']->addDebug('logging output.');
  return $app['twig']->render('forms.twig');
});



$app->run();