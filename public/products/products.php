<!-- import initialize file -->
<?php require_once('../../private/initialize.php'); ?>
<!-- import the header -->
<?php include(SHARED_PATH . '/header.php'); ?>

<?php
    $sql = "SELECT id, name, description, image, price FROM products";
    $result = $conn->query($sql);
?>

<section>
    <ul class="search-list">
        <?php
                    while ($row = $result->fetch()) {
                    ?>
                    <li class="search-item">
                        <div class="card mb-3 search-link" >
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="../<?php echo $row['image']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['name']; ?>">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title search-link"><?php echo $row['name']; ?></h5>
                                        <p class="card-text"><?php echo $row['description']; ?></p>
                                        <div class="split">
                                            <p class="card-text"><small class="text-body-secondary">$<?php echo $row['price']; ?></small></p>
                                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#added-cart">Purchase</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
	</ul>
    <div class="modal fade" id="added-cart" tabindex="-1" aria-labelledby="added-cart" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="errorModalLabel">Added to cart</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Item successfully added to shopping cart.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</section>  
<!-- import the footer -->
<?php include(SHARED_PATH . '/footer.php'); ?>