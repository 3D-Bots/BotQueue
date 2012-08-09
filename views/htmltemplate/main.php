<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$title?> - BotQueue.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Zach Hoeken / BotQueue.com">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/css/docs.css" rel="stylesheet">
    <link href="/css/botqueue.css" rel="stylesheet">

	 <script type="text/javascript">

		/*
	   var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-23019901-1']);
		  _gaq.push(['_setDomainName', "bootswatch.com"]);
  		  _gaq.push(['_setAllowLinker', true]);
		  _gaq.push(['_trackPageview']);

	   (function() {
	     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	   })();
		*/
	 </script>

  </head>
  <body class="preview" data-spy="scroll" data-target=".subnav" data-offset="50">
    <div class="container">

<!-- Navbar -->
<section id="navbar">
  <div class="navbar">
    <div class="navbar-inner">
      <div class="container" style="width: auto;">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="/">BotQueue</a>
        <div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="/">Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Actions<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/queue/create">Create Queue</a></li>
                <li><a href="/bot/register">Register Bot</a></li>
                <li><a href="/upload">Upload Job</a></li>
              </ul>
            </li>
            <li><a href="/queues">Queues</a></li>
            <li><a href="/bots">Bots</a></li>
            <li><a href="/app">Apps</a></li>
            <li><a href="/app">API</a></li>
            <li><a href="/help">Help</a></li>
          </ul>
          <ul class="nav pull-right">
            <li class="divider-vertical"></li>
            <li class="dropdown">
							<? if (User::isLoggedIn()): ?>
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hello, <?=User::$me->getName()?> <b class="caret"></b></a>
	              <ul class="dropdown-menu">
	                <li><a href="/settings">Settings</a></li>
									<? if (User::isAdmin()): ?>
	                	<li><a href="/admin">Admin</a></li>
	                <? endif ?>
									<li class="divider"></li>
	                <li><a href="/logout">Log Out</a></li>
	              </ul>
							<? else: ?>
	 							<li><a href="/login" style="padding-left: 17px; background: transparent url('/img/lock_icon.png') no-repeat 0px center;">Log in</a></li>
	              <li><a href="/register">Sign up</a></li>
							<? endif ?>
            </li>
          </ul>
          <form class="navbar-search pull-right" action="">
            <input type="text" class="search-query span2" placeholder="Search">
          </form>
        </div><!-- /.nav-collapse -->
      </div>
    </div><!-- /navbar-inner -->
  </div><!-- /navbar -->
</section>

<!-- Content -->
<section id="content">
  <div class="page-header">
    <h1><?=$title?></h1>
  </div>

  <!-- Headings & Paragraph Copy -->
	<div class="row-fluid">
	  <div class="span12">
			<?=$content?>
	  </div>
	</div>
</section>

<br><br><br><br>

<!-- Footer -->
<!--
<footer class="footer">
	<a href="/api">API</a>
	<p class="pull-right"><a href="#">Back to top</a></p>
</footer>
-->

</div><!-- /container -->

	 <!-- Le javascript -->
	 <!-- Placed at the end of the document so the pages load faster -->
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	 <script src="/js/bootstrap.min.js"></script>
	 <script src="/js/botqueue.js"></script>
	 <script src="/js/bootswatch.js"></script>
  </body>
</html>