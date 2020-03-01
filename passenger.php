<?php

require_once("Template.php");
require_once ("destination.php");
if (isset($_POST['planet'])){
$page = new Template("Passenger");
$dest = new destination();
$name = $_POST['planet'];
$distance = $dest->getDistance($name);
$day = $dest->getDay($name);
$speed =$dest->getSpeed($name);
$cost = $dest->getCost($name);
$page->addHeadElement("");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "
<form action='confirm.php' method='post'>
<p>You choose $name</p>\n
<p>$name is $distance miles away from Earth. </p>\n
<p>It will take $day to travel the $distance miles to $name at a rate of $speed miles per hour.</p>
<p>Cost per passenger: $cost</p>
<label for= 'number'>Enter number of  passengers.(0 to 50)</label>
<input type='text' id='number' name='number'><br><br>
<input type='hidden' name='name' value='$name'>
<input type='hidden' name='distance' value='$distance'>
<input type='hidden' name='cost' value='$cost'>


<input type='submit' value='continue'>
</form>";

print $page->getBottomSection();}
