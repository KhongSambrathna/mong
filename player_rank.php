<?php 
  include_once 'connection.php';
  include_once 'header.php';
  $sql = "SELECT players.playerID, players.playerName, position.positionKhmer,";
  $sql = $sql. " playerrank.playerGoal, playerrank.playerAssist,";
  $sql = $sql. " SUM(playerrank.playerGoal+playerrank.playerAssist) AS totalScore,";
  $sql = $sql. " SUM(playerrank.playerGoal) AS totalGoal,";
  $sql = $sql. " SUM(playerrank.playerAssist) AS totalAssist,";
  $sql = $sql. " RANK() OVER (ORDER BY playerGoal DESC) rank";
  $sql = $sql. " FROM players";
  $sql = $sql. " INNER JOIN position ON position.positionID = players.positionID";
  $sql = $sql. " INNER JOIN playerrank ON playerrank.playerID = players.playerID";
  if(isset($_POST['btn_search']) ){
    $sql = $sql. " WHERE players.playerName LIKE '%".$_POST['table_search']."%' ";
  }
  $sql = $sql. " GROUP BY players.playerID ORDER BY rank ASC LIMIT 25";
  //$sql = $sql . " OFFSET ".(5*($_GET['page']-1) );
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container battambang text-nowrap">
<div class="container">
  <h3 class="koulen text-center my-3">ចំណាត់ថ្នាក់កីឡាករត្រឹម២៥នាក់</h3>
</div>
<div>
  <div class="card-tools">
      <form name="myform" method="post">
          <div class="input-group input-group-sm float-right my-2" style="width: 250px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="ស្វែងរកកីឡាករ" />
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
        <th scope="col">ចំណាត់ថ្នាក់</th>
        <th scope="col">កីឡាករ</th>
        <th scope="col">តួនាទី</th>
        <th scope="col">គ្រាប់</th>
        <th scope="col">ជួយ</th>
        <th scope="col">សរុប</th>
      </tr>
    </thead>
    <tbody>

      <?php  foreach ($data as $key => $value) {  ?>
      <tr>
        <th scope="row"><?php echo $value['rank'] ?></th>
        <td><?php echo $value['playerName'] ?></td>
        <td><?php echo $value['positionKhmer']  ?></td>
        <td><?php echo $value['totalGoal'] ?></td>
        <td><?php echo $value['totalAssist'] ?></td>
        <td><?php echo $value['totalScore'] ?></td>
      </tr>
      <?php } 
      ?>
    </tbody>
  </table>
</div>
</div>
<?php include_once 'footer.php'?>