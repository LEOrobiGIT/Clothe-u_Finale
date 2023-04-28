<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<?php 
    $id = trim($_GET['id']);
    $pm = new ProductManager();
    $product = $pm->get($id);
    if (!(property_exists($product,'id'))){
        echo "<script>location.href = '".ROOT_URL."';</script>";
        exit;
    }
    
?>
<link rel="stylesheet" href="../Clothe-u_Finale/css/stylePaginaProd.css">
<section class="sproduct">
    <div class = "sinistra">
        <div class="immagine">
            <img src="<?php echo $product->foto?>" id="MainImg" alt="">
        </div>
        <div class="small-img-group">
            <div class="small-img">
                <img src="../images/nike1.webp" onclick="showImg(this.src)" class = "small-img" alt="">
            </div>
            <div class="small-img">
                <img src="../images/nike2.webp" onclick="showImg(this.src)" class = "small-img" alt="">
            </div>
            <div class="small-img">
                <img src="../images/nike3.webp" onclick="showImg(this.src)" class = "small-img" alt="">
            </div>
        </div>
    </div>
    <div class = "right">
        <div class="indirizzo" >Home > Prodotti > <?php echo $product->categoria?></div>
        <div class = "nomep"> <?php echo $product->nome?> </div> 
        <div class = "marca"> <?php echo $product->marca?> </div>  
        <div class="rating">
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
        </div> 
        <div class="dettagli">Dettagli prodotto:</div>
        <div class="descrizione"> <d><?php echo $product->descrizione?></d></div>
        <div class="prezzo"> $ <?php echo $product->prezzo?> </div>  
        <div class="container">
            <n>Taglia:</n>
            <div class = "taglia" >   
                <button id = "38" value = "38" class = "numero"  > 38" </button>
                <button id = "39" value = "39" class = "numero"  > 39" </button>
                <button id = "40" value = "40" class = "numero" > 40" </button>
                <button id = "41" value = "41" class = "numero" > 41" </button>
                <button id = "42" value = "42" class = "numero" > 42" </button>
                <button id = "43" value = "43" class = "numero" > 43" </button>
                <button id = "44" value = "44" class = "numero" > 44" </button>
            </div>
        </div>
        <div class = "quantita">
            <n> Quantità:</n>
            <input type="number" value = "1">
        </div>
        <div class="btnshopping">
            <button class = "btncarrello">Aggiungi al carrello</button>
            <button class = "btnwish">Aggiungi a whishlist</button>
        </div>
    </div>
                
</section>


<section>
        <h1 class="heading">Prodotti simili</h1>
        <div class="box-container"> <!-- box container delle nostre scarpe-->
                <!-- inserisco il primo modello di scarpe-->
            <div class="row">
                <div class="image">
                    <img src="../images/nike1.webp">
                </div>
                <div class="content">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="cart-btn">Aggiungi al carrello</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                    Nike Dunk 
                    <div class="rating"> 
                        <i class="fa fa-star fa-2xs" ></i>
                        <i class="fa fa-star fa-2xs" ></i>
                        <i class="fa fa-star fa-2xs" ></i>
                        <i class="fa fa-star fa-2xs" ></i>
                        <i class="fa fa-star fa-2xs" ></i>
                    </div>
                <div class="price"> $12.99 / $15.99</div>
            </div>
        </div>
        <div class="row">
            <div class="image">
                <img src="../images/nike1.webp">
            </div>
                    <div class="content">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Aggiungi al carrello</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                        Nike Dunk 
                        <div class="rating"> 
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                        </div>
                        <div class="price"> $12.99 / $15.99</div>
                    </div>
                </div>
                <div class="row">
                    <div class="image">
                        <img src="../images/nike1.webp">
                    </div>
                    <div class="content">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Aggiungi al carrello</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                        Nike Dunk 
                        <div class="rating"> 
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                            <i class="fa fa-star fa-2xs" ></i>
                        </div>
                        <div class="price"> $12.99 / $15.99</div>
                    </div>
                </div>
                
            </div>
            

        </section>

<!----------inizio script---------------------------->

        <script>
            let immagine = document.querySelector('.immagine img');
            function showImg(pic){
                immagine.src = pic;
            }
        </script>
        <script>
                $(document).ready(function(){
                    $('#38,#39,#40,#41,#42,#43,#44').click(function(){
                        $('#38,#39,#40,#41,#42,#43,#44').removeClass('numeroattivo');
                        $('#38,#39,#40,#41,#42,#43,#44').addClass('numero');
                        $(this).removeClass('numero');
                        $(this).addClass('numeroattivo');
                    });
                });      
        </script>
    
    