<?php $thisPage = basename ($_SERVER['PHP_SELF']);?>
<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

<div id="menuWrapper">
<div id="menu">
	<ul>
		<li<?php if ($thisPage=="index.php") 
		echo " id=\"currentpage\""; ?>>
		<a href="index.php">/HOME</a></li>

		<li<?php if ($thisPage=="side2.php") 
		echo " id=\"currentpage\""; ?>>
		<a href="side2.php">/ABOUT</a></li>

		<li<?php if ($thisPage=="side3.php") 
		echo " id=\"currentpage\""; ?>>
		<a href="side3.php">/PROJECTS</a></li>

		<li<?php if ($thisPage=="side4.php") 
		echo " id=\"currentpage\""; ?>>
		<a href="side4.php">/SHOP</a></li>
        
		<li<?php if ($thisPage=="side6.php") 
		echo " id=\"currentpage\""; ?>>
		<a href="side6.php">/USER PAGE</a></li>
	</ul>
</div>
</div>