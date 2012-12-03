<?php
	session_start();
require_once ('config.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/css/style.css" />
	</head>
	<body>
		<div id="pagewrap">
			<div class="col_12">
				<header class="col_12">
					<h1>Title</h1>
				</header>
				<div id="sidebar" class="col_3">
					<aside class="col_12">
						<nav>
							<div id="login">
								
								<?php
								if (isset($_SESSION['firstname']) && !empty($_SESSION['firstname'])) {
									echo "Hello, " . $_SESSION['firstname'];
								} else {
								?>
								<form action="login/index.php" method="post">
									<label for="username">Username:</label>
									<br />
									<input type="text" id="username" name="username" />
									<label for="password">Password:</label>
									<br />
									<input type="password" id="password" name="password" />
									<input type="submit" name="login" value="Login" />
								</form>
								<?php
								}
								?>
							</div>
							<ul>
								<li>
									<a href="#"> <span class="menu_button">Link</span class> </a>
								</li>
								<li>
									<a href="#"> MenuLink </a>
								</li>
								<li>
									<a href="#"> MenuLink </a>
								</li>
								<li>
									<a href="#"> MenuLink </a>
								</li>
							</ul>
						</nav>
					</aside>
				</div>
				<div id="content" class="col_9">
					<article class="col_12">
						<h2>Title</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis cursus sapien. Proin porta viverra turpis. Nullam quis vestibulum metus. Nulla euismod orci eu nunc suscipit molestie. Donec sit amet sem nulla. Vestibulum et enim ac libero semper facilisis. Donec elementum nunc eu sem placerat aliquam. Praesent hendrerit justo id nisi facilisis imperdiet. Integer ullamcorper neque et neque pharetra ac dictum ipsum ornare. Sed sagittis, erat eu mollis sagittis, magna arcu porta lacus, quis feugiat augue turpis id nunc. Duis sit amet ipsum magna. Nunc facilisis congue congue. Cras pulvinar fringilla nisi non lacinia.
						</p>
					</article>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
session_destroy();
?>