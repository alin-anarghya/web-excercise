<div class="row justify-content-center">
    <div class="col-lg-10">
        <ul class="list-unstyled product-list">
            <?php
            $sql = "SELECT * FROM productspage";
            $result = $conn->query($sql);
            $no = 1; 
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $isEven = ($no % 2 == 0);
                    $aosAnim = $isEven ? 'fade-left' : 'fade-right';
                    $ext = ($row['idproducts'] == 3) ? 'jpg' : 'png';

                    $productName = $row['productsName'];
                    $waText = "Halo Sadhana Computer, saya ingin melihat katalog untuk produk $productName dengan budget Rp[0000] apakah ada?";
                    $waLink = "https://wa.me/6285725272990?text=" . rawurlencode($waText);
                    ?>
                    <li class="media product-item mb-5" data-aos="<?php echo $aosAnim; ?>">
                        <?php if (!$isEven): ?>
                            <img src="assets/img/pd<?php echo $row['idproducts']; ?>.<?php echo $ext; ?>" class="mr-3 pro-img align-self-center">
                            <div class="media-body">
                                <h4 class="mt-0 mb-2 product-title"><?php echo $productName; ?></h4>
                                <p class="product-desc"><?php echo $row['productsDesc']; ?></p>
                                <a href="<?php echo $waLink; ?>" target="_blank" class="btn btn-sm btn-outline-success mt-2">
                                    See More <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="media-body order-lg-1">
                                <h4 class="mt-0 mb-2 product-title"><?php echo $productName; ?></h4>
                                <p class="product-desc"><?php echo $row['productsDesc']; ?></p>
                                <a href="<?php echo $waLink; ?>" target="_blank" class="btn btn-sm btn-outline-success mt-2">
                                    See More <i class="fab fa-whatsapp"></i>
                                </a>
                            </div>
                            <img src="assets/img/pd<?php echo $row['idproducts']; ?>.<?php echo $ext; ?>" class="ml-3 pro-img order-lg-2 align-self-center">
                        <?php endif; ?>
                    </li>
                    <?php
                    $no++;
                }
            } else {
                echo "<p class='text-center'>Belum ada data produk di database.</p>";
            }
            ?>
        </ul>
    </div>
</div>