<div class="row serv justify-content-center">
    <?php
    $sql = "SELECT idService, serviceName FROM servicepage";
    $result = $conn->query($sql);
    $delay = 100;

    if ($result && $result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            ?>
            <div class="col-lg-4 col-md-6 mb-4 d-flex justify-content-center" 
                data-aos="fade-up" 
                data-aos-delay="<?php echo $delay; ?>">
                
                <div class="service-card-wrapper w-100">
                    <div class="card service-card shadow bg-white rounded">
                        <img src="assets/img/card<?php echo $row['idService']; ?>.jpg" class="card-img-top service-img">
                        
                        <div class="card-body service-body text-center">
                            <p class="card-text">
                                <?php echo $row['serviceName']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $delay += 100;
        }
    } else {
        echo "<p class='text-white text-center'>Data tidak ditemukan.</p>";
    }
    ?>
</div>