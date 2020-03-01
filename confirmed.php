<?php
require_once("Template.php");
Session_Start();
if ((isset($_SESSION['name'])) && (isset($_SESSION['totalCost']) )){
$name =  $_SESSION['name'];
$totalCost = $_SESSION['totalCost'];
$page = new Template("My Page");
$page->addHeadElement("");
$page->finalizeTopSection();

//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<h1>Confirmed</h1>\n
<p>You have booked a trip to $name</p>
<p>Total Cost of Trip $totalCost</p>
<a href='welcome.php'>Book Another Trip</a>";
print $page->getBottomSection();
};

