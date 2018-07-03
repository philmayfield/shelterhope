<span class="logged-in-as float-right margin-top-20">Logged in as: <?php echo $_SESSION['user']; ?> | <a id="logout-btn" href="logout.php">Log Out</a></span>

<h1>Shelter Hope Pet Shop</h1>

<nav>
	<ul>
		<li<?php if(strpos($_SERVER['PHP_SELF'],'main') > 0){echo ' class="active"';}?>>
		<a href="main.php">Main Page</a>
		</li><li<?php if(strpos($_SERVER['PHP_SELF'],'event') > 0){echo ' class="active"';}?>>
		<a href="events.php">Events</a>
		</li><?php 
		if($user_access == 0 || $user_access == 1){
			echo '<li';
			if(strpos($_SERVER['PHP_SELF'],'press') > 0){echo ' class="active"';}
			echo '><a href="press.php">Press</a></li>';
			echo '<li';
			if(strpos($_SERVER['PHP_SELF'],'employee') > 0){echo ' class="active"';}
			echo '><a href="employees.php">Employees</a></li>';
		}
		if($user_access == 0){
			echo '<li';
			if(strpos($_SERVER['PHP_SELF'],'location') > 0){echo ' class="active"';}
			echo '><a href="locations.php">Locations</a></li>';
			echo '<li';
			if(strpos($_SERVER['PHP_SELF'],'user') > 0){echo ' class="active"';}
			echo '><a href="users.php">Users</a></li>';
		}
		?>
	</ul>
</nav>