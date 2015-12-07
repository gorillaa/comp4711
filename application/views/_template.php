<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * view/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{title}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    </head>
    <body>
        <div class="container">
			<div id="logo">
				<img src="/assets/images/PackersLogo.png">
			</div>
            <nav class="navbar navbar-default">
				<div>
					<ul class="nav navbar-nav">
						{menubar}
						{additionalMenuBar}
					</ul>
				</div>
            </nav>
			<div class="panel panel-default">
				<div class="panel-body">
					<div id="content">
						<h1>{title}</h1>
						{content}
					</div>
				</div>
			</div>
            <div id="footer" class="span12">
                Copyright &copy; 2015,  <a href="mailto:someone@somewhere.com">Gorilla Software</a>.
            </div>
        </div>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        {additionalJs}
    </body>
</html>
