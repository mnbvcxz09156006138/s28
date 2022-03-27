<!---کد ابزار پرده خوش آمد گویی--->
<script src="http://up.zibatools.ir/pardeh/pardeh.js"></script><script src="http://up.zibatools.ir/120.js"></script><script src="http://up.zibatools.ir/pardeh/js.js"></script><link href="http://up.zibatools.ir/pardeh/css.css" type="text/css" rel="stylesheet">
<div id="pardecontainer"><div class="pardecopyright"><a  style="color:#FFF !important; text-align:center !important" target="_blank" href="http://zibatools.ir/post/451/کد-پرده-خوش-آمد-گویی-حرفه-ای.html"></a></div><div id="msgcontainer" class="msgcontainer"><div id="pardemsg"><b>  اساتید محترم به وبیسایت من خوش آمدید </b></div></div><div class="leftparde"><img border="0" src="http://up.zibatools.ir/pardeh/1.jpg"/></div><div class="rightparde"><img border="0" src="http://up.zibatools.ir/pardeh/1.jpg"/></div><a class="pandol" href="#"><img border="0" src="http://up.zibatools.ir/pardeh/pandol.png"/></a></div>
<!---کد ابزار پرده خوش آمد گویی--->

<?php
include "header.php" ;
include "database.php" ;
$singer_id = $_GET["singers"];
$albums = $db->query(query:"SELECT * FROM albums WHERE singer_id=$singer_id");
 ?>
 <body class="bg-black">

    <div class= "container" >
            <div class="row mt-5">
                <hr>
                <h2 class="album-text">آلبوم ها </h2>
                <div class="font">
                <?php if($albums->num_rows == 0) :?>
                    <div class="alertalert-secondry" role="alert"> آلبوم این خوانده هنوز یافت نشده است </div>
                    <?php else: ?>
                    </div>
                    <?php foreach ($albums as $album):?>
                        <div class = "col-3">
                                <a href="musicss.php?albums=<?php echo $album["id"]?>" class ="my-card">
                                    <div class =" card mt-3">
                                        <img src="<?php echo $album["image"];?>" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo $album["name"];?></h5>
                                            </div>
                                    
                                    </div>
                                </a>    
                        </div>
                    <?php endforeach; ?>  
                    <?php endif; ?>
            </div>
        
    </div>
    
 <?php
include "footer.php" ;
?>
