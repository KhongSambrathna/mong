<?php 
  include_once 'connection.php';
  include_once 'header.php';
  $stmt = $pdo->prepare("SELECT * FROM `match` WHERE score = '' OR result = '' ORDER BY date DESC;");
  $stmt->execute();
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container battambang text-nowrap">
<div class="container">
  <h3 class="koulen text-center my-3">ការប្រកួតខាងមុខ</h3>
</div>
<div class="table-responsive-md table-responsive-sm">
  <table class="table table-striped">
    <thead class="bg-primary text-white">
      <tr>
        <th scope="col">ល.រ</th>
        <th scope="col">កាលបរិច្ឆេទ</th>
        <th scope="col">ការប្រកួត</th>
        <th scope="col">ការប្រកួតប្រជែង</th>
        <th scope="col">ទីលាន</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php 
          $index = 1;
          foreach ($data as $key => $value) {
        ?>
        <th scope="row"><?php echo $index ?></th>
        <td><?php echo $value['date'] ?></td>
        <td><?php echo $value['match'] ?></td>
        <td><?php echo $value['compitition'] ?></td>
        <td><?php echo $value['field'] ?></td>
      </tr>
      <?php $index++; }?>
    </tbody>
  </table>
</div>
</div>
<?php include_once 'footer.php'?>