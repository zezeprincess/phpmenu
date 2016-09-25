
<?php 
// PHP_SELF viser hvilken sti vi er på
// basename viser kun det sidste i URL'en
$curpage = basename ($_SERVER['PHP_SELF']);
?>

<ul>
	<li><a href="p1.php"<?php 
	// hvis den aktive side $curpage er = med p1.php skal den echo klassen active - klassen active er stylet i style.css så  brugeren kan se hvilken side brugeren er på i menuen 
	if ($curpage == 'p1.php') {echo 'class="active"';}?>>Page 1</a></li>
    <li><a href="p2.php"<?php if ($curpage == 'p2.php') {echo 'class="active"';}?>>Page 2</a></li>
    <li><a href="p3.php"<?php if ($curpage == 'p3.php') {echo 'class="active"';}?>>Page 3</a></li>
    <li><a href="p4.php"<?php if ($curpage == 'p4.php') {echo 'class="active"';}?>>Page 4</a></li>
</ul>

