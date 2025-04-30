<!-- import initialize file -->
<?php require_once('../private/initialize.php'); ?>
<!-- import the header -->
<?php include(SHARED_PATH . '/header.php'); ?>
<!-- query database-->
<?php
$sql = "SELECT id, name, description, image, price FROM products";
$result = $conn->query($sql);
?>
<section class="home">
    <!-- carousel -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="color-gradiant"><img src="images/background1.jpg" class="d-block w-100" alt="5 Rosmini boy standing in a row walking towards you"></div>
                <div class="carousel-caption d-none d-md-block ">
                    <h1 class="company-title">Flow</h1>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Shaping well-rounded young men</h5>
                    <p>Rosmini College is a learning community that encourages each student to pursue his fullest potential in academic, social, cultural, spiritual and sporting activities</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="color-gradiant"><img src="images/background2.jpg" class="d-block w-100" alt="Rosmini boys doing expariment with in the science lab"></div>
                <div class="carousel-caption d-none d-md-block ">
                    <h1 class="company-title">Pure</h1>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>A focus on boys learning</h5>
                    <p>Rosmini has a proud history of academic and sporting prowess. We aim to deliver boys a wide range of learning opportunities while maintaining a commitment to enhancing leadership and community service.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="color-gradiant">
                    <img src="images/background3.jpg" class="d-block w-100" alt="Rosmini sport team celebrating">
                </div>
                <div class="carousel-caption d-none d-md-block ">
                    <h1 class="company-title">Clear</h1>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Sport is an integral element of holistic education</h5>
                    <p>Rosmini College has a strong sporting culture and values performance at both the elite and participation levels, offering competitive opportunities in various codes. </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="color_gradiant"><img src="images/background4.jpg" class="d-block w-100" alt="Image of thge airplaine club"></div>
                <div class="carousel-caption d-none d-md-block ">
                    <h1 class="company-title" style="font-size:20vw;">Tranquil</h1>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Special Programs at Rosmini College</h5>
                    <p>Our special programs are designed to inspire, challenge, and empower students to become compassionate leaders of change.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="color-gradiant"><img src="images/background5.jpg" class="d-block w-100" alt="Image of Rosmini Orchestra playing"></div>
                <div class="carousel-caption d-none d-md-block ">
                    <h1 class="company-title" style="font-size:20vw;">Innovate</h1>
                </div>
                <div class="carousel-caption d-none d-md-block">
                    <h5>Encourage and foster the creative mind</h5>
                    <p>>Music, Drama and Art flourish at Rosmini, and we aim to deliver boys a wide range of learning opportunities while maintaining a commitment to enhancing leadership and community service.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="content">
        <div class="text">
            <div class="fluid">
                <img src="images/cleanwater.png" class="image" alt="A cup of clean dinking water">
            </div>
            <div class="fluid">
                <h2>Welcome To ClearFlow</h2>
                <p>Clearflow dedicated to providing clean, safe, and refreshing drinking water for all.<br> With a passion for health and sustainability, we design innovative filtration solutions to remove contaminants<br> and deliver pure water to homes, businesses, and communities.<br> Our mission is to ensure every drop you drink supports your well-being, while our commitment <br>to quality and environmental responsibility sets us apart. <br>Trust us to protect what matters most—your health and the planet.</p>
            </div>
        </div>
        <span class="title" id="bg-color1"></span>
    </div>

    <div class=" content">
        <div class="text">
            <div class="fluid">
                <h2>The Importance of Clean Drinking Water</h2>
                <p class=" text2">Clean drinking water is essential for human health and well-being. <br>It supports vital bodily functions, including digestion, temperature regulation, and nutrient absorption. <br>Contaminated water can harbor harmful pathogens and pollutants, leading to serious illnesses like diarrhea,<br> cholera, or long-term health issues from exposure to toxins.<br> Access to safe water also promotes hygiene, reducing the spread of diseases. <br>Beyond health, clean water is critical for communities, enabling economic productivity and quality of life. <br>Ensuring every sip is safe is not just a necessity—it's a foundation for thriving societies.</p>
            </div>
            <div class="fluid">
                <img src="images/water.jpg" class="image" alt="A cup of clean dinking water">
            </div>
        </div>
        <span class="title" id="bg-color2"></span>
    </div>

    <div class="content">
        <div class="text">
            <div>
                <div class="product-title">
                    <h2>Our Products</h2>
                    <button type="button" class="btn btn-outline-dark product-button" onclick="window.location.href='/public/products/products.php'">More product >></button>
                </div>
                <div class="flex-cards">
                    <?php
                    while ($row = $result->fetch()) {
                    ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?php echo $row['image']; ?>" class="img-fluid rounded-start" alt="<?php echo $row['name']; ?>">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                        <p class="card-text"><?php echo $row['description']; ?></p>
                                        <div class="split">
                                            <p class="card-text"><small class="text-body-secondary">$<?php echo $row['price']; ?></small></p>
                                            <button type="button" class="btn btn-outline-dark" onclick="window.location.href='/public/products/products.php?search=<?php echo $row['name']; ?>'">Purchase</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <span class="title" id="bg-color3"></span>
    </div>
    <div class="content" id="about">
        <div class="text" style="border:none !important;">
            <div class="fluid">
                <img src="images/certificates.png" class="image" alt="WQA/NSF certificates">
            </div>
            <div class="fluid">
                <h2>About Us</h2>
                <p>We are driven by a vision to make crystal-clear, pristine drinking water accessible to everyone.<br> Our cutting-edge filtration systems are engineered to remove impurities <br>while preserving essential minerals, delivering fresh, vital water that tastes as good as it feels.<br> We prioritize sustainability, using eco-friendly materials and <br>energy-efficient technologies to minimize our environmental footprint.<br> From household units to large-scale community solutions, <br>our products are designed for reliability and ease of use , certifyed by WQA/NSF.<br> Backed by rigorous testing and a commitment to excellence, <br>we ensure every drop flows clean and serene, <br>empowering healthier lives and a thriving planet.<br>
                </p>
            </div>
        </div>
        <span class="title" id="bg-color4"></span>
    </div>
</section>



<!-- import the footer -->
<?php include(SHARED_PATH . '/footer.php'); ?>