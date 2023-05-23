<?php
$title ='NewsGallery';
include("includes/header.php")?>
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>NewsGallery</li>
          </ol>
        </div>

      </div>
    </section>
    <!-- End Breadcrumbs Section -->
 <!-- start NewsGallery section -->
 <section id="newsgallery" class="gallery">
  

    <div class="container-fluid">
      <div class="row g-0">
      <?php
        $sql  = 'SELECT * FROM `news_gallery` order by date_added desc';
        $data = mysqli_query($db, $sql);
        $num = mysqli_num_rows($data);
        if ($num > 0) {
            for ($i = 1; $i <= $num; $i++) {
                $row = mysqli_fetch_assoc($data);
                extract($row);
        ?>
        <div class="col-lg-3 col-md-4">
          <div class="container">
          <div class="gallery-item">
          <a href="<?php echo ($base_path);?>gallery_images/<?= $gallery_image ?>" 
          class="galelry-lightbox">
                  <img src="<?php echo ($base_path);?>gallery_images/<?= $gallery_image ?>" alt="" class="img-fluid">
            </a>
          </div>
          <small><?= $row['date_added']?></small>
          </div>
          
        </div>
        <?php
            }
        }
        ?>
       
      </div>

    </div>
  </section>
    

           <!-- End Gallery Section -->
      


     

  </main><!-- End #main -->















<?php include("includes/footer.php")?>
