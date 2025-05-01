<?php
// Check if the session is already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['logout']) && $_GET['logout'] == '1') {
    unset($_SESSION['username']);
    header("Location: /public/index.php");
    exit();
}

if (isset($_POST['search'])) {
    $search_query = isset($_POST['search_query']) ? urlencode($_POST['search_query']) : '';
    header("Location:/public/products/products.php?search=$search_query");
    exit();
}

$search_query = isset($_GET['search']) ? htmlspecialchars($_GET['search']) : 'No query';
ob_end_flush();


require_once("Assessment_Y13_pdo.php");

$loginError = false;

// Input validation
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
     // Check if the username and password mach with database
    $stmt = $conn->prepare("SELECT * FROM login WHERE username = ?");
    $stmt->execute([$username]);
    $login = $stmt->fetch();
    
    if ($login && $login["password"] === $password) {
        $_SESSION['username'] = $username;

    } else {
		$loginError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Link to CSS file -->
    <link href='/public/stylesheet/stylesheet.css' rel="stylesheet">
    <meta charset="UTF-8">
    <title>Water cleaner</title>
	<!-- Make the website usable on diffrent devices -->
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<!-- link bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
	<!-- link bootstrap -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
	<!-- link Javascript-->
	<script src="/public/script/script.js"></script>

	<!-- Navbar -->
	<nav class="navbar sticky-top">
	  <div class="container-fluid">
		<div>
			<a class="navbar-brand whitetext" href="/public/index.php">
				<img src="/public/images/wavelogo.svg" alt="Logo" class="d-inline-block align-text-top logo">
				ClearFlow
			</a>
		</div>
		  
		<div class="hidden-thin inline">

			<!-- Modal -->
			<form action='#' method='POST'>
				<div class="modal fade" id="exampleModalLabel" data-bs-backdrop="active" data-bs-keyboard="true" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog login">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="staticBackdropLabel">Login</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<div class="ialign">
									<div class='label'>Username:</div>
									<input type='text' name='username' placeholder='Enter Username Here' class='field'>
									<div class='label'>Password:</div>
									<input type='password' name='password' placeholder='Enter Password Here' class='field'>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<input type='submit' value='Login' class="btn btn-primary modal-button" data-backdrop="static">
							</div>
						</div>
					</div>
				</div>
			</form>
			<ul class="navbar-nav me-auto mb-2 mb-lg-0 links">
				<li class="nav-item">
					<button type="button" class="nav-link whitetext" data-bs-toggle="modal" data-bs-target="#exampleModalLabel" <?php echo (empty($_SESSION['username']) ? '' : 'hidden'); ?>>Login</button>
					<a class="nav-link whitetext" href="/public/index.php?logout=1" <?php echo (empty($_SESSION['username']) ? 'hidden' : ''); ?>>Logout</a>
				</li>
				<li class="nav-item">
					  <a class="nav-link whitetext" href="/public/products/products.php">Products</a>
				</li>
				<li class="nav-item">
					  <a class="nav-link whitetext" href="/public/contacts/contacts.php">Contacts</a>
				</li>
				<li class="nav-item">
					  <a class="nav-link whitetext" href="/public/FAQ/FAQ.php">FAQ</a>
				</li>
			</ul>
		</div>
		<div class="hidden-thin row1">
			<form class="d-flex split" method="POST" role="search" action="/public/products/products.php">
				<button class="btn btn-outline-success search" type="submit" name="search">Search</button>
				<input class="form-control me-2 search-input" name="search_query" onkeyup="myFunction()" placeholder="Search items..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
			</form>
			<a href="/public/cart/cart.php"><img src="/public/images/cart.png" alt="cart" height="30" class="cart-logo"></a>
			<div <?php echo (empty($_SESSION['username']) ? 'hidden' : ''); ?> class="profile">
				<img src="/public/images/user.jpg" alt="cart" height="30" class="cart-logo">
				<div class="username">
					<p class="profile-name whitetext"><?php echo empty($_SESSION['username']) ? '' : $_SESSION['username'] ?></p>
				</div>
			</div>
		  </div>
		<button class="navbar-toggler hidden-wide" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse hidden-wide" id="navbarNav">
		<form class="d-flex split" method="POST" role="search" action="/public/products/products.php">
			<button class="btn btn-outline-success search" type="submit" name="search">Search</button>
			<input class="form-control me-2 search-input" name="search_query" onkeyup="myFunction()" placeholder="Search items..." value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
			<a href="/public/cart/cart.php"><img src="/public/images/cart.png" alt="cart" height="30" class="cart-logo"></a>
		</form>
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link whitetext" aria-current="page" href="/public/index.php">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link whitetext" href="#">Login</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link whitetext" href="/public/products/product.php">Products</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link whitetext" href="/public/contacts/contacts.php">Contact</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link whitetext" href="/public/FAQ/FAQ.php">FAQ</a>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
	<!-- Error Modal -->
	<div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Login Failed</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Invalid username or password.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary modal-button" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModalLabel">Try Again</button>
				</div>
			</div>
		</div>
	</div>
	<script>
		<?php if ($loginError) { ?>
		// When Login fail, the variable will change causing the modal to show
		var errorModal = new bootstrap.Modal(document.getElementById('errorModal'), {
			keyboard: true
		});
		errorModal.show();
		<?php } ?>

	</script>
