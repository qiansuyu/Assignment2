<?php
Session_Start();
require_once("Template.php");
require_once ("passenger.php");
if ((isset($_POST['number']) )&&(!empty($_POST['number']) )){
    if(filter_var($_POST['number'], FILTER_VALIDATE_INT, array("options" => array("min_range" => 0,"max_range" => 50)))){

$page = new Template("My Page");
$page->addHeadElement("");
$page->finalizeTopSection();
$number =(filter_var($_POST['number'], FILTER_SANITIZE_NUMBER_INT));
$name = $_POST['name'];
$cost = (filter_var($_POST['cost'], FILTER_SANITIZE_NUMBER_INT));
$totalCost  = number_format($cost*$number,2);
//Some libraries require things to be added before the closing body tag.
//Pretty much the same thing as addHeadElement
//Use addBottomElement() for that.  See the method in the Template class.

$page->finalizeBottomSection();

print $page->getTopSection();
print "<p>Trip to $name</p>
<p>Cost per passenger:$cost</p>
<p>Total Cost of Trip $totalCost with $number passengers.</p>
<a href='confirmed.php'>Confirm and Reserve.</a>
<a href='welcome.php'>Cancel and Start Over.</a>
";
print $page->getBottomSection();
$_SESSION['name'] = $name;
$_SESSION['totalCost'] = $totalCost;

}
else{
    header("location:javascript://history.go(-1)");

}}
else{
    header("location:javascript://history.go(-1)");
}


