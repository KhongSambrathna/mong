<?php
  include_once 'connection.php';
  include_once 'header.php';
  //Count Match history
  $sql = "SELECT COUNT(`match`.matchID) AS totalMatch FROM `match`;";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $countmatch = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //Get match history
  $sql = "SELECT * FROM `match` WHERE score <> '' AND result <> ''";
  //On search
  if(isset($_POST['btn_search']) ){
    $sql = $sql . " AND date LIKE '%".$_POST['table_search']."%'";
  }
  $sql = $sql . " ORDER BY date DESC";
  $sql = $sql . " LIMIT 10";
  // pagination
  if(isset($_GET['page']) && $_GET['page']>1){
    $sql = $sql . " OFFSET ".(10*($_GET['page']-1) );
  }
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container battambang text-nowrap">
<div class="container">
  <h3 class="koulen text-center mt-3">ប្រវត្តិប្រកួត</h3>
</div>
<div>
  <div class="card-tools">
      <form name="myform" method="post">
          <div class="input-group input-group-sm float-right my-2" style="width: 250px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="សូមបញ្ជូលឆ្នាំ ឧ. 2023" />
              <div class="input-group-append">
                  <button type="submit" name="btn_search" class="btn btn-default">
                      <i class="fas fa-search"></i>
                  </button>
              </div>
          </div>
      </form>
  </div>
</div>
<div class="table-responsive-md table-responsive-sm">
  <table class="table table-striped">
    <thead class="bg-primary text-white">
      <tr>
        <th scope="col">ល.រ</th>
        <th scope="col">កាលបរិច្ឆេទ</th>
        <th scope="col">ការប្រកួត</th>
        <th scope="col">លទ្ធផល</th>
        <th scope="col">ពិន្ទុ</th>
        <th scope="col">ការប្រកួតប្រជែង</th>
        <th scope="col">ទីលាន</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($data as $key => $value) { ?>
      <tr>
        <th scope="row"><?php echo $key+1 ?></th>
        <td><?php echo $value['date'] ?></td>
        <td><?php echo $value['match'] ?></td>
        <td><?php echo $value['result']  ?></td>
        <td><?php echo $value['score'] ?></td>
        <td><?php echo $value['compitition'] ?></td>
        <td><?php echo $value['field'] ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
 </div>
 <div class="card-footer clearfix">
    <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href=
          <?php 
            if($_GET['page'] <= 1) {
              echo "match_history.php?". 'page='. ceil($countmatch[0]['totalMatch']/10);
            } elseif($_GET['page'] > 1){
              echo "match_history.php?". 'page='. $_GET['page'] - 1;
            }
          ?>
        >«</a></li>
        <li class="page-item"><a class="page-link" href="match_history.php?page=1">1</a></li>
        <li class="page-item"><a class="page-link" href="match_history.php?page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="match_history.php?page=3">3</a></li>
        <li class="page-item"><a class="page-link" href=
          <?php 
            if($_GET['page'] >=ceil($countmatch[0]['totalMatch']/10)) {
              echo "match_history.php?". 'page='. '1'; 
            } elseif($_GET['page'] <=ceil($countmatch[0]['totalMatch']/10)){
              echo "match_history.php?". 'page='. $_GET['page'] + 1;
            }
          ?>
        >»</a></li>
    </ul>
</div>
</div>
</div>
<?php include_once 'footer.php'?>