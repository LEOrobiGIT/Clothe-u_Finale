
<?php include './init.php'?>

<?php include ROOT_PATH . 'template-parts/header.php'?>
<?php 
    $id = trim($_GET['id']);
    $pm = new ProductManager();
    $product = $pm->get($id);
    var_dump($product);
?>
<section class="sproduct">
    <div class = "left">
        <div class="immagine">
            <img src="../images/nike1.webp" id="MainImg" alt="">
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
    <div class = "right">
        <div class="indirizzo" >Home > Prodotti</div>
        <div class = "nomep"> Nike Dunk </div>  
        <div class="rating">
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
            <i class="fa fa-star fa-2xs" ></i>
        </div> 
        <div class="dettagli">Dettagli prodotto:</div>
        <div class="descrizione"> Aalslefcseivosvienoidnvsoinvsoienvodnfvdonvosdnesbonsoibnfoinoi.aiosndovi.</div>
        <div class="prezzo"> $25.00 / $30.00 </div>  
        <div class="container">
            <div class = "taglia" >
                <n>Taglia:</n>
                <div class = "numeroattivo"> 38" </div>
                <div class = "numero"> 39" </div>
                <div class = "numero"> 40" </div>
                <div class = "numero"> 41" </div>
                <div class = "numero"> 42" </div>
                <div class = "numero"> 43" </div>
                <div class = "numero"> 44" </div>
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
            function assegnaEventHandlers(){
                var class1=document.getElementsByClassName("numero");
                for (i=0;i<class1.length;i++){
                    class1[i].addEventListener("click",coloraRosso);
                }
            }

            function coloraRosso(e){
                document.getElementById(e).className = "numeroattivo";
            }
        </script>
    
    