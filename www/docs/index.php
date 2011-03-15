<?php
chdir(dirname(dirname(__FILE__)));

//Load the Savant3 class, and create an object.
require_once 'Savant3.php';
$savant = new Savant3();

$source = highlight_file('books.php', true);
$template = highlight_file('books.tpl.php', true);

//Assign content to the template.
$savant->title = 'Savant | Documentation';
$savant->maincontent = <<<MC
    <ul class="tabs">
        <li><a href="/docs/">Quickstart</a></li>
        <li><a href="/api/Savant3/">API Docs</a></li>
    </ul>
    <h1>Quickstart</h1>
    <p>Throughout this tutorial, the term "controller logic" will refer to the part
    of your PHP application that instantiates Savant and assigns variables to it,
    and the term "view logic" will refer to the template that takes the variables
    and displays them to the user.</p>

    <p>When using Savant, you will always have two separate files, generally a
    ".php" script (the controller logic that manipulates data) and a ".tpl.php"
    script of the same base name (the view logic that formats the data for display).</p>
    
    <h2>Controller Logic: books.php</h2>
    
    <p>This is the business logic script; it creates or accesses data, manipulates
    the data, and then sends the data to the template. You could call it "books.php".</p>
    
    <div class="file">
        $source
    </div>
    
    <h2>View Logic: books.tpl.php</h2>
    
    <p>
    This is the template script; it takes the data passed to it by the controller
    logic and formats it for display. The following code is the "books.tpl.php"
    file called by \$tpl->display() above.
    </p>
    
    <div class="file">
        $template
    </div>
    
    <p>Notes:</p>
    <ol>
        <li>We use normal PHP as the template language, and use the \$this->eprint()
        method to display variable values whenever possible. The \$this->eprint() method
        automatically escapes output, which helps to avoid cross-site scripting
        attacks. You may use echo and print as well, if you wish.</li>
        <li>Variables assigned by the controller logic are referred to with
        "\$this->varname" notation, while variables created within the template are
        referred to as "\$varname" -- this helps to keep track of what came from the
        controller and what is being used specifically for the view logic.</li>
        <li>We use the alternative syntax for control structures; that is, "if ():
        ... endif;" instead of "if () {...}". While not required, it can be easier
        to read in many cases.</li>
    </ol>
MC;

//Display this object in our view.
$savant->display('templates/savant.tpl.php');
