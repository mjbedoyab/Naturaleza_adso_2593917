<?php
   $dataHeader['titulo']= "Admin";
   $this->load->view('layoutsCliente/header', $dataHeader);
?>

<?php
   $dataSidebar['session']= $session;
   $this->load->view('layoutsCliente/sidebar', $dataSidebar);
?>


  
  

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url();?>/assets/distCliente/img/categories/cat-1.jpg">
                            <h5><a href="#">Frutas</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url();?>/assets/distCliente/img/categories/cat-2.jpg">
                            <h5><a href="#">Granos</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url();?>/assets/distCliente/img/categories/cat-3.jpg">
                            <h5><a href="#">Vegetales</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url();?>/assets/distCliente/img/categories/cat-4.jpg">
                            <h5><a href="#">Lacteos</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?php echo base_url();?>/assets/distCliente/img/categories/cat-5.jpg">
                            <h5><a href="#">Salsas</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Productos recientes</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Todo</li>
                            <li data-filter=".Verdura">Verdura</li>
                            <li data-filter=".Fruta">Frutas</li>
                            <li data-filter=".Salsa">Salsas</li>
                            <li data-filter=".Lacteos">Lacteos</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                <?php  
                        $totalProductos = count($productos);
                        $nombre = array();
                        $precio = array();
                        $tipo = array();
                        $img = array();
                        
                    for ($i = 0; $i < $totalProductos; $i++) {
                            $nombre[] = $productos[$i]->nombre_producto;
                            $precio[] = $productos[$i]->precio_venta;
                            $tipo[] = $productos[$i]->tipo;
                            $img[] = $productos[$i]->img;
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 mix <?php echo $tipo[$i]  ?> fastfood">
                                <div class="featured__item">
                                    <div class="featured__item__pic set-bg" data-setbg="<?php echo base_url();?><?php echo $img[$i]  ?>">
                                        <ul class="featured__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="featured__item__text">
                                        <h6><a href="#"><?php  echo $nombre[$i] ?></a></h6>
                                        <h5> <?php echo "$",$precio[$i] ?></h5>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    ?>

                
                
                
            </div>
        </div>
    </section>

<?php
   $dataSidebar['session']= $session;
   $this->load->view('layoutsCliente/footer', $dataSidebar);
?>

