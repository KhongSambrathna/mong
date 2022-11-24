<?php 
  include_once 'connection.php';
  include_once 'header.php';
  $sql = "SELECT time,date, `match`,field, compitition FROM `match` ORDER BY date DESC LIMIT 3";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
  <!-- Slider -->
    <div class="container">
      <div class="pt-3" id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/logo/banner/welcome-1.png" alt="img/logo/banner/welcome-1.png">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/logo/banner/gotoschool.png" alt="img/logo/banner/gotoschool.png">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/logo/banner/welcome-1.png" alt="img/logo/banner/welcome-1.png">
          </div>
        </div>
      </div>
    </div>
    <!-- Upcoming event-->
    <div class="container mt-3">
      <h4 class="koulen text-center my-5">ព្រឹត្ដិការណ៍មកដល់ឆាប់ៗ</h4>
      <div class="row battambang">

        <?php foreach($data as $key => $value){ ?>
          <div class="col-lg-4">
              <div class="card card-margin">
                  <div class="card-header no-border">
                      <h5 class="card-title mt-2">ការប្រកួត<?php echo $value['compitition'] ?>រវាង</h5>
                  </div>
                  <div class="card-body pt-0">
                      <div class="widget-49">
                          <div class="widget-49-title-wrapper">
                              <div class="widget-49-date-primary">
                                  <span class="widget-49-date-day">
                                    <?php 
                                      echo "". date("d", strtotime("". $value['date']));
                                    ?>
                                  </span>
                                  <span class="widget-49-date-month">
                                    <?php 
                                      $month_num = "".  date("y", strtotime("". $value['date']));
                                      echo "". substr(date("F", mktime(0, 0, 0, $month_num, 10)),0,3);
                                    ?>
                                  </span>
                              </div>
                              <div class="widget-49-meeting-info">
                                  <span class="widget-49-pro-title"><?php echo $value['match'] ?></span>
                                  <span class="widget-49-meeting-time">
                                    <?php 
                                      echo "ចាប់ផ្ដើមលេងនៅម៉ោង ". date("h:i A", strtotime("". $value['time']));
                                    ?>
                                  </span>
                              </div>
                          </div>
                          <ol class="widget-49-meeting-points">
                              <li class="widget-49-meeting-item"><span>ការប្រកួតនិងចាប់ផ្ដើមនៅវេលាម៉ោង <?php echo ''.date("h:i A", strtotime("". $value['time'])) ?> 
                              នេះតទៅ ដូច្នេះសូមក្រុមទាំងពីរមកអោយបានដល់ទីលាន<?php echo ''. $value['field'] ?>ឱ្យបានមុនម៉ោងដែលបានកំណត់</span></li>
                          </ol>
                      </div>
                  </div>
              </div>
          </div>
        <?php } ?>

      </div>
    </div>
    <!-- Lates News -->
    <div class="container battambang">
      <section class="home-blog pt-3">
        <div class="container">
        <!-- section title -->
        <h4 class="koulen text-center">ពត៍មានថ្មីៗ</h4>
        <!-- section title ends -->
        <div class="row ">
          <div class="col-md-6">
            <div class="media blog-media">
              <a href="blog-post-left-sidebar.html"><img class="d-flex" src="https://via.placeholder.com/350x380/6495ED/000000" alt="Generic placeholder image"></a>
              <div class="circle">
                <h5 class="day">14</h5>
                <span class="month">sep</span>
              </div>
              <div class="media-body">
                <a href=""><h5 class="mt-0">សេចក្ដីជូនដំណឹងពីការប្រលងឆមាសលើកទី១</h5></a>
                ការប្រឡងឆមាសលើកទី១ នឹងត្រូវចាប់ផ្ដើមចាប់ទីថ្ងៃទី០១ ខែមេសា ឆ្នាំ២០២៣ នេះតទៅ
                <a href="blog-post-left-sidebar.html" class="post-link">អានបន្ថែម</a>
                <ul>
                  <li>អនុ.មោង</li>
                  <li class="text-right"><a href="blog-post-left-sidebar.html">២០០ មើល</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="media blog-media">
              <a href="blog-post-left-sidebar.html"><img class="d-flex" src="https://via.placeholder.com/350x380/6495ED/000000" alt="Generic placeholder image"></a>
              <div class="circle">
                <h5 class="day">14</h5>
                <span class="month">sep</span>
              </div>
              <div class="media-body">
                <a href=""><h5 class="mt-0">សេចក្ដីជូនដំណឹងពីការប្រលងឆមាសលើកទី១</h5></a>
                ការប្រឡងឆមាសលើកទី១ នឹងត្រូវចាប់ផ្ដើមចាប់ទីថ្ងៃទី០១ ខែមេសា ឆ្នាំ២០២៣ នេះតទៅ
                <a href="blog-post-left-sidebar.html" class="post-link">អានបន្ថែម</a>
                <ul>
                  <li>អនុ.មោង</li>
                  <li class="text-right"><a href="blog-post-left-sidebar.html">២០០ មើល</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="media blog-media">
              <a href="blog-post-left-sidebar.html"><img class="d-flex" src="https://via.placeholder.com/350x380/6495ED/000000" alt="Generic placeholder image"></a>
              <div class="circle">
                <h5 class="day">14</h5>
                <span class="month">sep</span>
              </div>
              <div class="media-body">
                <a href=""><h5 class="mt-0">សេចក្ដីជូនដំណឹងពីការប្រលងឆមាសលើកទី១</h5></a>
                ការប្រឡងឆមាសលើកទី១ នឹងត្រូវចាប់ផ្ដើមចាប់ទីថ្ងៃទី០១ ខែមេសា ឆ្នាំ២០២៣ នេះតទៅ
                <a href="blog-post-left-sidebar.html" class="post-link">អានបន្ថែម</a>
                <ul>
                  <li>អនុ.មោង</li>
                  <li class="text-right"><a href="blog-post-left-sidebar.html">២០០ មើល</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="media blog-media">
              <a href="blog-post-left-sidebar.html"><img class="d-flex" src="https://via.placeholder.com/350x380/6495ED/000000" alt="Generic placeholder image"></a>
              <div class="circle">
                <h5 class="day">14</h5>
                <span class="month">sep</span>
              </div>
              <div class="media-body">
                <a href=""><h5 class="mt-0">សេចក្ដីជូនដំណឹងពីការប្រលងឆមាសលើកទី១</h5></a>
                ការប្រឡងឆមាសលើកទី១ នឹងត្រូវចាប់ផ្ដើមចាប់ទីថ្ងៃទី០១ ខែមេសា ឆ្នាំ២០២៣ នេះតទៅ
                <a href="blog-post-left-sidebar.html" class="post-link">អានបន្ថែម</a>
                <ul>
                  <li>អនុ.មោង</li>
                  <li class="text-right"><a href="blog-post-left-sidebar.html">២០០ មើល</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php include_once 'footer.php'?>
