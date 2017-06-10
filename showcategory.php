<?php
$value=$_GET["value"];
 ?>
<?php
require("config/config.php");
require("lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
    ?>
    <?php
    $useragent=$_SERVER['HTTP_USER_AGENT'];
    if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))){
      $margin='10px';
    } else {
      $margin='100px';
    }
    ?>
<html style="padding-right: <?php echo $margin?>; padding-left: <?php echo $margin?>;">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

<style type="text/css">
a:link {text-decoration: none; color: #333333;}
a:visited {text-decoration: none; color: #333333;}
a:active {text-decoration: none; color: #333333;}
a:hover {text-decoration: underline; color: red;}
html { font-size: 62.5%; }
body { font-size: 1em;}


</style>
    <title>
      Dongguk Cosmetic
    </title>

    <link href="http://jjssoolee.cafe24.com/jkjs/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
          .nav>li>a:focus,.nav>li>a:hover{text-decoration:none;background-color:#FFC6C3;}
          .nav .open>a,.nav .open>a:focus,.nav .open>a:hover{background-color:#FFC6C3;border-color:#337ab7}
          .dropdown-menu>li>a:focus,.dropdown-menu>li>a:hover{color:#262626;text-decoration:none;background-color:#FFC6C3;}
        </style>
      </head>
      <header class="jumbotron text-center" style="background-color: #FFC6B3; padding-bottom:10px;">
        <a href="index.php"><h1>Dongguk Cosmetic</h1></a>

          <div class"col-xs-6 col-sm-3"></div>
            <div class"col-xs-6 col-sm-6">
              <form action="search.php" method="post">
                <div class="input-group" style="text-align:center; margin-bottom:50px; margin-top:50px">
                  <input type="text" name="value" placeholder="Search for..." class="form-control" style="vertical-align:middle " >
                  <span class="input-group-btn">
              <button type="submit" class="btn btn-danger">SEARCH</button>
            </span>
            </div>
            </form>
          </div>
          <div class"col-xs-6 col-sm-3"></div>
      </header>
      <?php include("nav.php");?>
      <body class="container-fluid" style="margin-bottom: 20px;margin-left: 5px;margin-right: 5px; border:1px solid red; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; border-top-left-radius: 10px; border-top-right-radius: 10px; padding-left: 0;padding-right:0">
            <article style="text-align:center;">


              <?php
              $sql2 = "SELECT*FROM bigdatacategory WHERE `cate` = '".$value."'";
              $result2 = mysqli_query($conn, $sql2);
              $row2= mysqli_fetch_assoc($result2);

              echo "<img src=\"img/cor/".$row2['no'].".png\" style=\"width: 500px; margin: 0 auto\" class=\"img-responsive\">";

              echo "<table class=\"table table-striped\" style=\"font-size:12px;\">";
              echo "<tr><th style=\"font-weight:normal; width: 50px; text-align:center;\">";
              echo "순위";
              echo "</th><th style=\"font-weight:normal; width: 100px; text-align:center;\">";
              echo "제품 사진";
              echo "</th><th style=\"font-weight:normal; width: 300px; text-align:center;\">";
              echo "제품명";
              echo "</th><th style=\"font-weight:normal; width: 20px; text-align:center;\">";
              echo "점수";
              echo "</th></tr>";
              $sql = "SELECT*FROM bigdata WHERE `category` = '".$value."' ORDER BY score DESC";

              $result = mysqli_query($conn, $sql);
              $i = 1;
              while ($row= mysqli_fetch_assoc($result)){

                if($row['reviewnum']>10){

                  echo "<tr OnClick=\"location.href='showproduct.php?value=".$row['product']."'\" style=\"cursor:pointer;\"><th style=\"font-size:16px; font-weight:normal; width: 50px; text-align:center; vertical-align:middle;\">";
                  echo $i;
                  echo "</th><th style=\"font-size:16px; font-weight:normal; width: 100px; text-align:center; vertical-align:middle;\">";
                  echo "<img src=".$row['img']." style=\"width:80px\">";
                  echo "</th><th style=\"font-size:16px; font-weight:normal; width: 300px; text-align:center; vertical-align:middle;\">";
                  echo "<a href=\"showproduct.php?value=".$row['product']."\">";
                  echo htmlspecialchars($row['product']);
                  echo "</a>";
                  echo "</th><th style=\"font-size:16px; font-weight:normal; width: 20px; text-align:center; vertical-align:middle;\">";
                  echo nl2br(strip_tags($row['score'], '<a><h1><h2><h3><h4><h5><ul><ol><li>'));
                  echo "</th></tr>";

                  $i += 1;
                }
              }
              ?>
              </table>


            </article>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="http://jjssoolee.cafe24.com/jkjs/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
          </body>
        </html>
