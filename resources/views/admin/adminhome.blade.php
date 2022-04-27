<x-app-layout>
  <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Exambee Admin Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
   
    <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
    <!-- Main CSS File -->
    <link href="admin/assets/css/style.css" rel="stylesheet">
  
   
  </head>
  
  <body>
  
    
  
    <main id="main" class="main">
  
      <div class="pagetitle">
        <h1>Dashboard</h1>
        
      </div><!-- End Page Title -->
  
      <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
  
              <!-- Sales Card -->

              <a href="{{url('quizmanagess')}}">
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">
  
                 
                   
                  <div class="card-body">
                    <h5 class="card-title"> </h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-journal-text"></i>
                      </div>
                      <div class="ps-3">
                        <h6>Quiz Manager</h6>
                        
  
                      </div>
                    </div>
                  </div>
  
                </div>
              </a>
              </div><!-- End Sales Card -->
           
                <!-- Sales Card -->

                <a href="{{url('quizmanagess')}}">
                  <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
      
                     
                       
                      <div class="card-body">
                        <h5 class="card-title"> </h5>
      
                        <div class="d-flex align-items-center">
                          <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-person-plus"></i>
                          </div>
                          <div class="ps-3">
                            <h6>Registered User</h6>
                            
      
                          </div>
                        </div>
                      </div>
      
                    </div>
                  </a>
                  </div><!-- End Sales Card -->
  
        </div>
      </section>
  
    </main><!-- End #main -->
  
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span>EXAMBEE</span></strong>. All Rights Reserved
      </div>
      
    </footer><!-- End Footer -->
  
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
    <!-- Vendor JS Files -->
    <script src="admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin/assets/vendor/chart.js/chart.min.js"></script>
    <script src="admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="admin/assets/vendor/quill/quill.min.js"></script>
    <script src="admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="admin/assets/vendor/php-email-form/validate.js"></script>
  
    <!-- Template Main JS File -->
    <script src="admin/assets/js/main.js"></script>
  
  </body>
  
  </html>

</x-app-layout>