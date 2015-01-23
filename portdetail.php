<?php
    if(!isset($_GET['title']) || $_GET['title']=='')
    {
        include "404.php";
    }
    else
    {
       // echo urldecode($_GET['title']);
        include "dbcon.php";
        $judul = urldecode($_GET['title']);
        $qrSingleProject="SELECT
                            id_port,
                            deskripsi,
                            status,
                            date_status,
                            link
                            FROM portfolio
                            WHERE judul = '".$judul."'
                            ";
         //                  echo $qrSingleProject;exit();
        $getSingleProject = mysql_query($qrSingleProject);
        $resultSingleProject = mysql_fetch_array($getSingleProject);
        if (!empty($resultSingleProject)) {
           
        ?>
              <!-- Start Page Banner -->
        <div class="page-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2><?php echo  $judul;?></h2>
                        <p>Single Project Subtitle</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="breadcrumbs">
                            <li><a href="?nav=home">Home</a></li>
                            <li><a href="?nav=portfolio">Portfolio</a></li>
                            <li><?php echo  $judul;?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
      
        
      

        <!-- Start Content -->
        <div id="content">
            <div class="container">
                <div class="project-page row">
                    <?php
                         $qrFoto ="SELECT
                                    file
                                    from foto
                                    where id_port_foto = ".$resultSingleProject['id_port']."
                                    ORDER BY  id_foto DESC
                                    ";
                                   //     echo $qrFoto;exit();
                                $getFoto = mysql_query($qrFoto);
                                
                                   
                               
                    ?>
                    <!-- Start Single Project Slider -->
                    <div class="project-media col-md-8">

                        <div class="touch-slider project-slider">
                            <?php
                                while($resultFoto=mysql_fetch_assoc($getFoto)) {
                                    $foto1 =  "images/foto/".$resultFoto['file'];/*(750x340)*/
                                    $foto2 =  "images/foto/".$resultFoto['file'];/*(1024x620)*/
                                    ?>
                                        <div class="item">
                                            <a class="lightbox" title="<?php echo $judul;?>" href="<?php echo $foto2;?>" data-lightbox-gallery="gallery2">
                                                <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                                <img alt="" src="<?php echo $foto1;?>">
                                            </a>
                                        </div>
                                    <?php
                                }
                            ?>
                           
                            <!--div class="item">
                                <a class="lightbox" title="This is an image title" href="http://placehold.it/1024x620/eee" data-lightbox-gallery="gallery2">
                                    <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                    <img alt="" src="http://placehold.it/750x340/333">
                                </a>
                            </div>
                            <div class="item">
                                <a class="lightbox" title="This is an image title" href="http://placehold.it/1024x620/eee" data-lightbox-gallery="gallery2">
                                    <div class="thumb-overlay"><i class="icon-resize-full"></i></div>
                                    <img alt="" src="http://placehold.it/750x340/333">
                                </a>
                            </div-->
                        </div>
                    </div>
                    <!-- End Single Project Slider -->
                          
                    <!-- Start Project Content -->
                    <?php
                        $date = date("d",strtotime($resultSingleProject['date_status']));
                        $month = date("M",strtotime($resultSingleProject['date_status']));
                        $year = date("Y",strtotime($resultSingleProject['date_status']));
                        $qrMember = "SELECT
                                        m.nama
                                        FROM member m, port_have_member t
                                        WHERE m.id_member = t.fk_memberh_id and t.fk_porth_id = ".$resultSingleProject['id_port']."
                                        ";
                                       // echo $qrMember;exit();
                        $getMember = mysql_query($qrMember);
                        $qrSingleKat = "SELECT
                                    k.nama_kategori
                                    FROM port_have_kat h, kategori k
                                    WHERE h.fk_id_port = ".$resultSingleProject['id_port']." AND k.id_kategori = h.fk_id_kat
                                    ";
                        $getSingleKat = mysql_query($qrSingleKat);
                                while($resultSingleKat=mysql_fetch_assoc($getSingleKat)) {
                                     $singleKatss[] = $resultSingleKat['nama_kategori'];
                                }
                    ?>
                    <div class="project-content col-md-4">
                        <h4><span>Project Description</span></h4>
                        <p><?php echo $resultSingleProject['deskripsi'];?></p>
                        <h4><span>Project Details</span></h4>
                        <ul>
                            <li><strong>Member: </strong><?php while ($resultMember=mysql_fetch_assoc($getMember)) {
                                   $members[] = $resultMember['nama'];
                                }
                                    echo $members[0];
                                    for ($i=1; $i < count($members) ; $i++) { 
                                        echo ", ".$members[$i];
                                    }
                                ?>
                            </li>                            
                            <li><strong>Kategori: </strong>
                                <?php 
                                    echo $singleKatss[0];
                                    for ($k=1; $k < count($singleKatss) ; $k++) { 
                                        echo ", ".$singleKatss[$k];
                                    }
                                    ?>
                            </li>
                            <li><strong>Status: </strong> <?php echo $resultSingleProject['status']." on ".$date." $month, ".$year;?></li>
                            <li><strong>Link: </strong>
                                <?php if ($resultSingleProject['link'] == '') {
                                   echo "-";
                                } else {
                                    echo $resultSingleProject['link'];
                                }
                                ?>
                            </li>
                        </ul>
                        <div class="post-share">
                            <span>Share This:</span>
                            <a class="facebook" href="#"><i class="icon-facebook"></i></a>
                            <a class="twitter" href="#"><i class="icon-twitter"></i></a>
                            <a class="gplus" href="#"><i class="icon-gplus"></i></a>
                            <a class="linkedin" href="#"><i class="icon-linkedin-1"></i></a>
                            <a class="mail" href="#"><i class="icon-mail-4"></i></a>
                        </div>
                    </div>
                    <!-- End Project Content -->
                    
                </div>
                
                <!-- Start Recent Projects Carousel -->
                <div class="recent-projects">
                    <h4 class="title"><span>Recent Projects</span></h4>
                    <div class="projects-carousel touch-carousel">
                    
                         <?php
                            //include 'dbcon.php';
                            $qrPorts = "SELECT 
                                        id_port,
                                        judul
                                        FROM portfolio
                                        WHERE id_port NOT IN (".$resultSingleProject['id_port'].")
                                        ORDER BY  date_status DESC
                                        LIMIT 0,8
                                        "; 
                                       // echo $qrPorts;exit();
                            $getPorts = mysql_query($qrPorts);
                            $katss = array();
                            while($resultPorts=mysql_fetch_assoc($getPorts)) {
                                $qrKat = "SELECT
                                            k.nama_kategori
                                            FROM port_have_kat h, kategori k
                                            WHERE h.fk_id_port = ".$resultPorts['id_port']." AND k.id_kategori = h.fk_id_kat
                                            ";
                                $getKat = mysql_query($qrKat);
                                while($resultKat=mysql_fetch_assoc($getKat)) {
                                     $katss[] = $resultKat['nama_kategori'];
                                }
                                $qrSingleFoto ="SELECT
                                            file
                                            from foto
                                            where id_port_foto = ".$resultPorts['id_port']."
                                            ORDER BY  id_foto DESC
                                            LIMIT 0,1
                                        ";
                                   //     echo $qrFoto;exit();
                                $getSingleFoto = mysql_query($qrSingleFoto);
                                $resultSingleFoto = mysql_fetch_array($getSingleFoto);
                                if (!empty($resultSingleFoto)) { 
                                    $singleFoto =  "images/foto/".$resultSingleFoto['file'];
                                }
                                else
                                {
                                    $singleFoto =  "http://placehold.it/550x400/444";
                                }  
                                ?>
                                    
                                     <!-- Start Project Item -->
                                        <div class="portfolio-item item">
                                            <div class="portfolio-border">
                                                <div class="portfolio-thumb">
                                                    <a href="?nav=portdetail&title=<?php echo $resultPorts['judul']?>">
                                                        <div class="thumb-overlay"><i class="icon-link-1"></i></div>
                                                        <img alt="" src="<?php echo $singleFoto;?>" />
                                                    </a>
                                                </div>
                                                <!-- End Project Thumb -->
                                                <!-- Start Project Details -->
                                                <div class="portfolio-details">
                                                    <a href="?nav=portdetail&title=<?php echo $resultPorts['judul']?>">
                                                        <h4><?php echo $resultPorts['judul']?></h4>
                                                        <span><?php 
                                                                echo $katss[0].", ";
                                                                for ($i=1; $i < count($katss) ; $i++) { 
                                                                    echo $katss[$i];
                                                                }
                                                                ?></span>
                                                    </a>
                                                   
                                                </div>
                                                <!-- End Project Details -->
                                            </div>
                                        </div>
                                        <!-- End Project Item -->
                                <?php
                               
                            }
                        ?>
                    </div>
                </div>
                <!-- End Recent Projects Carousel -->
                
            </div>
        </div>
        <!-- End Content -->
      
        <?php
    }
    else
    {
        include "404.php";
    }
}

?>
      
      
      