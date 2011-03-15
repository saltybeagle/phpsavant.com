<?php
require_once __DIR__ . '/../config.sample.php';

$savant = new Savant3();
$savant->title = 'Savant';
$savant->maincontent = <<<MC
<p>Savant is a powerful but lightweight object-oriented template system for PHP.</p>
<p>Unlike other template systems, Savant by default does not compile your templates into PHP; instead, it uses PHP itself as its template language so you don't need to learn a new markup system.</p>

<p>Why Use Savant for Templates?</p>
<ul>
    <li>You don't need to learn a new language or markup to create a template.  The template language is PHP, and the template file is a regular PHP file.</li>
    <li>You don't have to worry about separate directories (or permissions on those directories) for compiled template sources, because Savant is not a compiling engine (the template scripts are already written in PHP).</li>
    <li>Even though Savant is not itself a compiling system, you can write your own compiler and plug it into Savant; this means you can use any template markup system you like.</li>
    <li>The Savant source code is easy to read, understand, and extend, because it is exceptionally well-commented.</li>

    <li>The object-oriented plugin, filter, error, and compiler classes for Savant are easy to use, understand, and extend.</li>
    <li>Because your template script is a regular PHP script, you can sprinkle it with comments and use <a href="http://phpdocu.sourceforge.net/" onclick="window.open(this.href, '_blank'); return false;">phpDocumentor</a> to document it.</li>
</ul>

MC;
$savant->display('templates/savant.tpl.php');
?>