<?php
    include_once 'connection.php';
    include_once 'header.php';
    //Get Goalkeeper Player
    $stmt = $pdo->prepare("SELECT playerName,positionID,number,img, playerStatus FROM players WHERE positionID=2 AND playerStatus=1;");
    $stmt->execute();
    $gdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //Get Defender Player
    $stmt = $pdo->prepare("SELECT playerName,positionID,number,img, playerStatus FROM players WHERE positionID=3 AND playerStatus=1;");
    $stmt->execute();
    $ddata = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //Get Midfilder Player
    $stmt = $pdo->prepare("SELECT playerName,positionID,number,img, playerStatus FROM players WHERE positionID=4 AND playerStatus=1;");
    $stmt->execute();
    $mdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //Get Forwarder Player
    $stmt = $pdo->prepare("SELECT playerName,positionID,number,img, playerStatus FROM players WHERE positionID=5 AND playerStatus=1;");
    $stmt->execute();
    $fdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //Get Coach
    $stmt = $pdo->prepare("SELECT playerName,positionID,number,img, playerStatus FROM players WHERE positionID=1 AND playerStatus=1;");
    $stmt->execute();
    $cdata = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
    <!-- Goalkeeper -->
    <div class="row koulen mt-5 mb-4">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>អ្នកចាំទី</h3>
            </div>
        </div>
    </div>
    <div class="row battambang">
        <!-- Single Advisor-->
        <?php foreach ($gdata as $key => $value) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                    <img src= <?php echo $value['img'] ?> alt= <?php echo $value['img'] ?>/>
                    <h1 class="social-info m-0 p-0"><a style="font-size: 50px; padding:0; margin: 0;"><?php echo $value['number'] ?></a></h1>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $value['playerName'] ?></h6>
                    <p class="designation">ចាំទី</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- Defender -->
    <div class="row koulen mt-5 mb-4">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>ខ្សែរការពារ</h3>
            </div>
        </div>
    </div>
    <div class="row battambang">
        <!-- Single Advisor-->
        <?php foreach ($ddata as $key => $value) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                    <img src= <?php echo $value['img'] ?> alt= <?php echo $value['img'] ?>/>
                    <h1 class="social-info m-0 p-0"><a style="font-size: 50px; padding:0; margin: 0;"><?php echo $value['number'] ?></a></h1>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $value['playerName'] ?></h6>
                    <p class="designation">ការពារ</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- Midfielder -->
    <div class="row koulen mt-5 mb-4">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>ខ្សែរបម្រើ</h3>
            </div>
        </div>
    </div>
    <div class="row battambang">
        <!-- Single Advisor-->
        <?php foreach ($mdata as $key => $value) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                    <img src= <?php echo $value['img'] ?> alt= <?php echo $value['img'] ?>/>
                    <h1 class="social-info m-0 p-0"><a style="font-size: 50px; padding:0; margin: 0;"><?php echo $value['number'] ?></a></h1>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $value['playerName'] ?></h6>
                    <p class="designation">បម្រើ</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- Forwarder -->
    <div class="row koulen mt-5 mb-4">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>ខ្សែរប្រយុទ្ធ</h3>
            </div>
        </div>
    </div>
    <div class="row battambang">
        <!-- Single Advisor-->
        <?php foreach ($fdata as $key => $value) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                    <img src= <?php echo $value['img'] ?> alt= <?php echo $value['img'] ?>/>
                    <h1 class="social-info m-0 p-0"><a style="font-size: 50px; padding:0; margin: 0;"><?php echo $value['number'] ?></a></h1>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $value['playerName'] ?></h6>
                    <p class="designation">ប្រយុទ្ធ</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <!-- Coach -->
    <div class="row koulen mt-5 mb-4">
        <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <h3>គ្រូបង្វឹក</h3>
            </div>
        </div>
    </div>
    <div class="row battambang">
        <!-- Single Advisor-->
        <?php foreach ($cdata as $key => $value) { ?>
        <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <!-- Team Thumb-->
                <div class="advisor_thumb">
                    <img src= <?php echo $value['img'] ?> alt= <?php echo $value['img'] ?>/>
                    <h1 class="social-info m-0 p-0"><a style="font-size: 50px; padding:0; margin: 0;"><?php echo $value['number'] ?></a></h1>
                </div>
                <!-- Team Details-->
                <div class="single_advisor_details_info">
                    <h6><?php echo $value['playerName'] ?></h6>
                    <p class="designation">គ្រូបង្វឹក</p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include_once 'footer.php'?>