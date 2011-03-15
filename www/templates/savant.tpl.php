<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo $this->title; ?></title>
<link rel="icon" type="image/png" href="/images/favicon.png" />
<link rel="stylesheet" href="/css/main.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/sifr/css/sIFR-screen.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/sifr/css/sIFR-print.css" type="text/css" media="print" />
<script src="/sifr/js/sifr.js" type="text/javascript"></script>
<script src="/sifr/js/sifr-config.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
    <div class="logo">
        <a href="/"><img src="/images/savant_logo.gif" alt="Savant logo" /></a>
    </div>
    <div class="navigation">
        <ul>
            <li><a href="/download/">Download</a></li>
            <li><a href="/docs/">Documentation</a></li>
            <li><a href="https://groups.google.com/group/phpsavant">Forum</a></li>
        </ul>
    </div>
    <div class="maincontent">
        <?php
        echo $this->maincontent;
        ?>
    </div>
    <div class="footer">
        Copyright &copy; <?php echo date('Y'); ?> Brett Bieber.
    </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-5347207-1");
pageTracker._trackPageview();
</script>
</body>
</html>

