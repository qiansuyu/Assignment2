<?php

require_once("Template.php");
require_once ("destination.php");
$page = new Template("Welcome");
$dest = new destination();
$name = $dest->getDest();
$page->addHeadElement("");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();


print "<h1>Welcome to the UWSP Star Adventures Pages</h1>
<form action='passenger.php' method='post'>
<label>Please choose a destination</label>
<select name='planet'>";
foreach ($name as $value){
    print "<option>$value</option>";
}
print"</select>
<input type='submit' value='continue'>
 </form>";


print $page->getBottomSection();
