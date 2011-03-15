<?php
require_once __DIR__ . '/../../config.sample.php';

//Load the Savant3 class, and create an object.
$savant = new Savant3();
$savant->addPath('template', dirname(__DIR__));

//Assign content to the template.
$savant->title = 'Savant | Download';
$savant->maincontent = <<<MC
    <ul class="tabs">
        <li><a href="/download/">Version 3</a></li>
    </ul>
    <h1>Download and Installation</h1>
    <h2>PEAR Installation (Recommended)</h2>
    <pre><code>
        $ pear channel-discover phpsavant.com
        $ pear install savant/Savant3
    </code></pre>
    <h2>Download</h2>
    <h3><a href="http://phpsavant.com/get/Savant3-3.0.1.tgz">Savant3-3.0.1</a> <a href="http://phpsavant.com/get/Savant3-3.0.1.tgz" style="border:none;"><img src="/images/download.png" align="top" alt="Download icon" /> (20kb .tgz)</a></h3>
    <p>Changelog:</p>
    <ul>
        <li>Modify __toString method signature for compatibility with PHP 5.3.<br />
        No parameters should be sent. If you need to send a template parameter, use fetch(\$tpl) or setTemplate(\$tpl) then echo \$savant. Thanks, Dan Bettles.</li>
        <li>Add public method getOutput(\$tpl = null) which will return the output including error_text if an error occurs.</li>
    </ul>
    <h3>Archived Versions</h3>
    <ul>
        <li><a href="http://phpsavant.com/Savant2-2.4.3.tgz">Savant2-2.4.3</a> (45kb .tgz)</li>
    </ul>
    
MC;

//Display this object in our view.
$savant->display('templates/savant.tpl.php');
