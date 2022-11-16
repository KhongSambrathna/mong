<?php 
  include_once 'connection.php';
  $title = "";
  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
  if($curPageName=="index.php") {
      $title = "ទំព័រដើម";
  } elseif($curPageName=="match_history.php") {
      $title = "ប្រវត្តិប្រកួត";
  } elseif($curPageName=="news.php") {
      $title = "ពត៍មាន";
  } elseif($curPageName=="next_match.php") {
      $title = "ការប្រកួតបន្ទាប់";
  } elseif($curPageName=="match_history.php") {
        $title = "Match History";
  } elseif($curPageName=="player_rank.php") {
      $title = "ចំណាត់ថ្នាក់កីឡាករ";
  } elseif($curPageName=="player.php") {
      $title = "កីឡាករ";
  } elseif($curPageName=="about.php") {
      $title = "អំពីអនុ.មោង";
  } else {
      $title = "Not Set";
  }
?>
<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--External CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awsome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <title><?php echo $title ?></title>
  </head>
  <body>
    <!-- Navigation Bar -->
    <div class="container-fuid">
        <div class="container">
            <img class="w-70" src="img/logo/Mong banner.png" alt="img/logo/Mong banner.png">
        </div>
    </div>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-white nav-shadow koulen">
        <div class="container">
            <a class="nav-link text-primary" href="index.php">ទំព័រដើម</a>
            <button class="navbar-toggler border-primary btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link text-primary" href="news.php">ពត៍មាន</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link text-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">បាល់ទាត់</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="player.php">កីឡាករ</a>
                    <a class="dropdown-item" href="player_rank.php">ចំណាត់ថ្នាក់កីឡាករ</a>
                    <a class="dropdown-item" href="match_history.php">ប្រវត្តិប្រកួត</a>
                    <a class="dropdown-item" href="next_match.php">ការប្រកួតខាងមុខ</a>
                    <!--<div class="dropdown-divider"></div>-->
                  </div>
                </li>
                <li class="nav">
                <a class="nav-link text-primary" href="about.php">អំពីអនុ.មោង</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 border-primary" type="search" placeholder="ស្វែងរក . . ." aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </div>
    </nav>
