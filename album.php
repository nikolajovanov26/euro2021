<?php include 'view/header.php' ?>
<?php include 'view/navbar.php' ?>
<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    $progress = show_process($username);
}

if(!empty($progress)){
    $progress = show_process($username);
    $proc = $progress*100/294;
} else{
    $progress = 0;
    $proc = 0;
}

$stickers = show_stickers($username);
$progress = count($stickers);
update_process($username, $progress);



?>



<div class="container pad-top">
    <div class="row">
        <div class="col-8">
            <h1>Euro 2021</h1>
            <h2>Intro</h2>
            <div class="sticker-row">
            <?php
                for($i=1;$i<7;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <hr>
            <h2>Italy</h2>
            <div class="sticker-row">
            <?php
                for($i=7;$i<13;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=13;$i<19;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Switzerland</h2>
            <div class="sticker-row">
            <?php
                for($i=19;$i<25;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=25;$i<31;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Turkey</h2>
            <div class="sticker-row">
            <?php
                for($i=31;$i<37;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=37;$i<43;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Wales</h2>
            <div class="sticker-row">
            <?php
                for($i=43;$i<49;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=49;$i<55;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <hr>
            <h2>Belgium</h2>
            <div class="sticker-row">
            <?php
                for($i=55;$i<61;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=61;$i<67;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Denmark</h2>
            <div class="sticker-row">
            <?php
                for($i=67;$i<73;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=73;$i<79;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Finland</h2>
            <div class="sticker-row">
            <?php
                for($i=79;$i<85;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=85;$i<91;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Russia</h2>
            <div class="sticker-row">
            <?php
                for($i=91;$i<97;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=97;$i<103;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <hr>
            <h2>Austria</h2>
            <div class="sticker-row">
            <?php
                for($i=103;$i<109;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=109;$i<115;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Netherlands</h2>
            <div class="sticker-row">
            <?php
                for($i=115;$i<121;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=121;$i<127;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Macedonia</h2>
            <div class="sticker-row">
            <?php
                for($i=127;$i<133;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=133;$i<139;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Ukraine</h2>
            <div class="sticker-row">
            <?php
                for($i=139;$i<145;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=145;$i<151;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <hr>
            <h2>Croatia</h2>
            <div class="sticker-row">
            <?php
                for($i=151;$i<157;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=157;$i<163;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Czech Republic</h2>
            <div class="sticker-row">
            <?php
                for($i=163;$i<169;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=169;$i<175;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>England</h2>
            <div class="sticker-row">
            <?php
                for($i=175;$i<181;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=181;$i<187;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Scotland</h2>
            <div class="sticker-row">
            <?php
                for($i=187;$i<193;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=193;$i<199;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <hr>
            <h2>Poland</h2>
            <div class="sticker-row">
            <?php
                for($i=199;$i<205;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=205;$i<211;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Slovakia</h2>
            <div class="sticker-row">
            <?php
                for($i=211;$i<217;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=217;$i<223;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Spain</h2>
            <div class="sticker-row">
            <?php
                for($i=223;$i<229;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=229;$i<235;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Sweden</h2>
            <div class="sticker-row">
            <?php
                for($i=235;$i<241;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=241;$i<247;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <hr>
            <h2>France</h2>
            <div class="sticker-row">
            <?php
                for($i=247;$i<253;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=253;$i<259;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Germany</h2>
            <div class="sticker-row">
            <?php
                for($i=259;$i<265;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=265;$i<271;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Hungary</h2>
            <div class="sticker-row">
            <?php
                for($i=271;$i<277;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=277;$i<283;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <h2>Portugal</h2>
            <div class="sticker-row">
            <?php
                for($i=283;$i<289;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
            <div class="sticker-row">
            <?php
                for($i=289;$i<295;$i++) {
                    if(in_array($i,$stickers)){
                        echo '<div class="m_s" style="background-image: url('.find_image($i).');"></div>';
                    } else {
                        echo '<div>'.$i.'</div>';
                    }                    
                }
            ?>
            </div>
        </div>
        <div class="col-4">
            <figure class="figure">
                <img src="images/euro_logo.jpg" width="500" />
            </figure>
            <div class="progres-text">
                Your progress:
                <span style="color:#2C5364"><?php echo $progress;?></span>/294
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: <?php echo $proc;?>%" aria-valuenow="<?php echo $proc;?>" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <a href="stickers" class="cta">Add Stickers</a><br>
            <a href="exchange" class="cta">Exchange Stickers</a>
        </div>
    </div>
</div>


<?php include 'view/footer.php' ?>
