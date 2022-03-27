<!---کد ابزار پرده خوش آمد گویی--->
<script src="http://up.zibatools.ir/pardeh/pardeh.js"></script><script src="http://up.zibatools.ir/120.js"></script><script src="http://up.zibatools.ir/pardeh/js.js"></script><link href="http://up.zibatools.ir/pardeh/css.css" type="text/css" rel="stylesheet">
<div id="pardecontainer"><div class="pardecopyright"><a  style="color:#FFF !important; text-align:center !important" target="_blank" href="http://zibatools.ir/post/451/کد-پرده-خوش-آمد-گویی-حرفه-ای.html"></a></div><div id="msgcontainer" class="msgcontainer"><div id="pardemsg"><b>  اساتید محترم به وبیسایت من خوش آمدید </b></div></div><div class="leftparde"><img border="0" src="http://up.zibatools.ir/pardeh/1.jpg"/></div><div class="rightparde"><img border="0" src="http://up.zibatools.ir/pardeh/1.jpg"/></div><a class="pandol" href="#"><img border="0" src="http://up.zibatools.ir/pardeh/pandol.png"/></a></div>
<!---کد ابزار پرده خوش آمد گویی--->
<?php
include "header.php" ;
include "database.php" ;
$album_id = $_GET["albums"];
$musics = $db->query(query:"SELECT * FROM musics WHERE album_id=$album_id");
 ?>
 <body class="bg-black">

    <div class= "container" >
            <div class="row mt-5">
                <hr>
                <h2 class="music-text"> موزیک ها </h2>
                
                    <?php foreach ($musics as $music):?>
                        <div class = "col-3">
                                <div class =" card mt-3">
                                    <img src="<?php echo $music["image"];?>" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $music["name"];?></h5>
                                                <div class= "card-body">
                                                <audio src="<?php echo $music["mp3"];?>" class="card-img-top"></audio>
                                                </div>
                                        </div>
                                        
                        
                                </div>
                                
                        </div>
                    <?php endforeach; ?>  
                    
            </div>                                           
    </div>
    
 <?php
include "footer.php" ;
?>

