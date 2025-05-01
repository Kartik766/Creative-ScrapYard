<?php
include('C:\xampp\htdocs\E-shop\process\connection.php');
echo include('header.php'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
			<?php 
//Total tests
$query=mysqli_query($conn,"select id from users");
$enquiry=mysqli_num_rows($query);

?>

                        <div class="col-xl-6 col-md-6 mb-6" style="margin-bottom: 150px;">
                            <div class="card border-left-info shadow h-100 py-2 rounded">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-start">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-info text-uppercase mb-1">
                                             <h3 style="color: #36b9cc;">All Users</h3></div>
                                            <div class="mb-0 font-weight-bold text-gray-800" style="margin-top: 25px;"><h4><?php echo $enquiry;?></h4></div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						</div>
          </div>
        </div><!-- End Left side columns -->

        

      </div>
    </section>

  </main><!-- End #main --><br><br><br><br><br><br><br>
<?php echo include('footer.php') ?>