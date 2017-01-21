<?php
	// KH Cleaning
	print "<a href = '../hosting_index.html' style='text-decoration:none'>KH Cleaning</a>";
	echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	
	// TAFE
	// 18012017 Only admin and tafe user can use.
	if($_SESSION['login_user'] == 'tafe' || $_SESSION['login_user'] == 'admin'){
		// 19012017 Check menu.
		if($check_menu == 'tafe') {
			echo "<b><font size='5' color='#666699'>TAFE</font></b>";
		}
		else {
			echo "<a href='./../tafe/tafe_index.php' style='text-decoration:none'>TAFE</a>";
		}
	}
	else {
		echo "TAFE";
	}
	echo "&nbsp;&nbsp;&nbsp;";
	
	// Free
	// 19012017 Check menu.
	if($check_menu == 'free') {
		echo "<b><font size='5' color='#666699'>Free</font></b>";
	}
	else {
		// 21012017 Changed free_index.php to select_tbl_free.php
// 		echo "<a href='./../free/free_index.php' style='text-decoration:none'>Free</a>";
		echo "<a href='./../free/select_tbl_free.php' style='text-decoration:none'>Free</a>";
	}
	
	// Right
	// User and logout
	echo "<div style='float:right;'>";
	echo $_SESSION['login_user'];
	echo "&nbsp;&nbsp;&nbsp;</div><br>";

	if(!isset($_SESSION['login_user'])){
		echo "<div style='float:right;'><a href='./../login.php'>login</a></div>";
	} else {
		echo "<div style='float:right;'><a href='./../logout.php'>logout</a></div>";
	}
	print "<hr>";
?>
