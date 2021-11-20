<?php

defined('_JEXEC') or die;
/** @var JDocumentHtml $this */
$app  = JFactory::getApplication();
$user = JFactory::getUser();
// Output as HTML5
$this->setHtml5(true);
// Getting params from template
$params = $app->getTemplate(true)->params;
// Detecting Active Variables
$color          = $this->params->get('templatecolor');
$image          = $this->params->get('headerimage');
$logo           = $this->params->get('logo');
$navposition    = $this->params->get('navposition');
$headerImage    = $this->params->get('headerImage');
$config         = JFactory::getConfig();
$bootstrap      = explode(',', $this->params->get('bootstrap'));
$option         = JFactory::getApplication()->input->getCmd('option', '');

$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
if ($task === 'edit' || $layout === 'form')
{
  $fullWidth = 1;
}
else
{
  $fullWidth = 0;
}
$this->setHtml5(true);
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
// Add template js
JHtml::_('script', 'bootstrap.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'jquery.min.js', array('version' => 'auto', 'relative' => true));
JHtml::_('bootstrap.loadCss', false, $this->direction);
// Add Stylesheets
JHtml::_('stylesheet', 'style.css', array('version' => 'auto', 'relative' => true));

if ($this->direction === 'rtl')
{
	JHtml::_('stylesheet', 'template_rtl.css', array('version' => 'auto', 'relative' => true));
	JHtml::_('stylesheet', htmlspecialchars($color, ENT_COMPAT, 'UTF-8') . '_rtl.css', array('version' => 'auto', 'relative' => true));
}

if ($color === 'image')
{
	$this->addStyleDeclaration("
	.logoheader {
		background: url('" . $this->baseurl . "/" . htmlspecialchars($headerImage) . "') no-repeat right;
	}
	body {
		background: " . $this->params->get('backgroundcolor') . ";
	}");
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bootstrap task</title>
	<link rel="stylesheet" type="text/css" href="<?php echo JURI::root();?>/templates/purvatemplate/css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	

	<div class="container">
  
  
 
 <nav class="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"> 
						<h4 id="logo">
						<?php if ($logo) : ?>
							<img src="<?php echo $this->baseurl;?>/<?php echo htmlspecialchars($logo, ENT_QUOTES); ?>"  alt="<?php echo htmlspecialchars($this->params->get('sitetitle')); ?>"/>
						<?php endif;?>
						<?php if (!$logo AND $this->params->get('sitetitle')) : ?>
							<?php echo htmlspecialchars($this->params->get('sitetitle')); ?>
						<?php elseif (!$logo AND $config->get('sitename')) : ?>
							<?php echo htmlspecialchars($config->get('sitename')); ?>
						<?php endif; ?>
						<span class="header1">
						<?php echo htmlspecialchars($this->params->get('sitedescription')); ?>
						</span></h4>
					</div></a>
    
    <ul class="nav navbar-nav">
      <li class="nav-link p-3">
    <Jdoc:include type="modules" name="position-3" style="none"class="nav-item p-3"/>
    
  </li>
      
    </ul>
  </div>
</nav>
      <div class="container">

		<div class="row">

        
		<div class="col-lg-12"><div class="content">  <Jdoc:include type="modules" name="headerimage" style="none"class="nav-item p-3"/>
       
							<img src="<?php echo $this->baseurl; ?>/<?php echo htmlspecialchars($image, ENT_QUOTES); ?>"  alt="<?php echo htmlspecialchars($this->params->get('sitetitle')); ?>" height="500px" width="100%" />
          </div></div>
          
          
          </div></div>
        
        <div class="container">
		<div class="row">

		
		
			 
          <Jdoc:include type="component" style="none"  />

      
     
		</div>
	</div></div></div>
          <div class="container">
          
          

	

</div>
</section>



<section class="detail">
<div class="container">
	<div class="col-lg-6">
	


		
		
	<div class="last"><Jdoc:include type="modules" name="footer" style="none"/><p>Copyright @copy 2021 ActiveBox All Right Reserved</p></div>
			<div>
</div>


</section>



</body>
</html>