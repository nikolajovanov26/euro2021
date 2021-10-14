<div class="container pad-top">
    <div class="row">
        <div class="col-12">
            <h1>Euro 2021</h1>
            <h2>Intro</h2>
            <div class="sticker-row">
            <?php
                for($i=1;$i<7;$i++) {
                    
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                                   
                }
            ?>
            </div>
            <hr>
            <h2>Italy</h2>
            <div class="sticker-row">
            <?php
                for($i=7;$i<19;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                    
                }
            ?>
            </div>
            <h2>Switzerland</h2>
            <div class="sticker-row">
            <?php
                for($i=19;$i<31;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Turkey</h2>
            <div class="sticker-row">
            <?php
                for($i=31;$i<43;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Wales</h2>
            <div class="sticker-row">
            <?php
                for($i=43;$i<55;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <hr>
            <h2>Belgium</h2>
            <div class="sticker-row">
            <?php
                for($i=55;$i<67;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Denmark</h2>
            <div class="sticker-row">
            <?php
                for($i=67;$i<79;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Finland</h2>
            <div class="sticker-row">
            <?php
                for($i=79;$i<91;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Russia</h2>
            <div class="sticker-row">
            <?php
                for($i=91;$i<103;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <hr>
            <h2>Austria</h2>
            <div class="sticker-row">
            <?php
                for($i=103;$i<115;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Netherlands</h2>
            <div class="sticker-row">
            <?php
                for($i=115;$i<127;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Macedonia</h2>
            <div class="sticker-row">
            <?php
                for($i=127;$i<139;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Ukraine</h2>
            <div class="sticker-row">
            <?php
                for($i=139;$i<151;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <hr>
            <h2>Croatia</h2>
            <div class="sticker-row">
            <?php
                for($i=151;$i<163;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Czech Republic</h2>
            <div class="sticker-row">
            <?php
                for($i=163;$i<175;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>England</h2>
            <div class="sticker-row">
            <?php
                for($i=175;$i<187;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Scotland</h2>
            <div class="sticker-row">
            <?php
                for($i=187;$i<199;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <hr>
            <h2>Poland</h2>
            <div class="sticker-row">
            <?php
                for($i=199;$i<211;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Slovakia</h2>
            <div class="sticker-row">
            <?php
                for($i=211;$i<223;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Spain</h2>
            <div class="sticker-row">
            <?php
                for($i=223;$i<235;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Sweden</h2>
            <div class="sticker-row">
            <?php
                for($i=235;$i<247;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <hr>
            <h2>France</h2>
            <div class="sticker-row">
            <?php
                for($i=247;$i<259;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Germany</h2>
            <div class="sticker-row">
            <?php
                for($i=259;$i<271;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Hungary</h2>
            <div class="sticker-row">
            <?php
                for($i=271;$i<283;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
            <h2>Portugal</h2>
            <div class="sticker-row">
            <?php
                for($i=283;$i<295;$i++) {
                    if(find_image($i)){
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/'.find_image($i).');">
                        <div class="st-num">'.$i.'</div></div></a>';    
                    } else {
                        echo '<a href="add-image?num='.$i.'"><div class="m_s admin" style="background-image: url(./images/stickers/sticker.jpg);">
                        <div class="st-num">'.$i.'</div></div></a>';
                    }                   
                }
            ?>
            </div>
        </div>
    </div>
</div>


<?php include 'view/footer.php' ?>