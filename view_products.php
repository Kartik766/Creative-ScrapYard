<?php include('header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>View Products</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Products</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Products</h5>
              

              <!-- Table with stripped rows -->
              <div class="row">
  <?php
  include("process/connection.php");
  $querry="SELECT * FROM product_info";
  $result=mysqli_query($conn,$querry);
  while($row=mysqli_fetch_assoc($result)) {
  ?>
  <div class="col-lg-4" data-aos="zoom-in" data-aos-delay="100" style="margin-bottom: 20px;">
            <div class="member d-flex align-items-start">
              <div class="pic"><img src="./assets/product/<?php echo $row['product_img']; ?>" class="img-fluid" alt="" style="height: 100px;width: 100px;"></div>
              <div class="member-info">
                <h4><?php echo $row['product_name']; ?></h4>
                <span><?php echo $row['company_name']; ?></span>
                <p>Product Price : Rs. <?php echo $row['product_price']; ?></p>
				<br>
				<a href="edit_products.php?id=<?php echo $row['id'];?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
				<a href="delete_products.php?id=<?php echo $row['id'];?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Product?')"><i class="bi bi-trash"></i> Delete</a>
              </div>
            </div>
          </div>
  <?php } ?>
    
</div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    <?php mysqli_close($conn); ?>

  </main><!-- End #main -->

 <?php include('footer.php'); ?>