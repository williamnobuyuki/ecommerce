<?php if(!class_exists('Rain\Tpl')){exit;}?> <section id="home" class="d-flex"><!--home -->
      <div class="container align-self-center"><!--container -->
        <div class="row"><!--row -->
          <div class="col-md-12 capa">
            
            <div id="carousel-spotify" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner"><!--Inner -->
                
                <div class="carousel-item active">
                  <h1>As melhores ofertas</h1>
                  <a href="" class="btn btn-lg btn-custom btn-roxo">
                    Parcelamento em até 12x
                  </a>

                  <a href="" class="btn btn-lg btn-custom btn-branco">
                    Frete Gratis
                  </a>
                </div>

                <div class="carousel-item">
                  <h1>Esquenta Black Friday</h1>
                  <a href="" class="btn btn-lg btn-custom btn-branco">
                    <i class="fas fa-thumbs-up"></i> Compre agora
                  </a>
                </div>

              </div><!--/Inner -->

              <!-- Controles -->
              <a href="#carousel-spotify" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>

              <a href="#carousel-spotify" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>

            </div>

          </div>
        </div><!--/row -->
      </div><!--/container -->
    </section><!--/home -->

    <section id="servicos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="row albuns">
              <div class="col-md-6">
                <img src="/res/site/img/img1.png" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="/res/site/img/img2.jpg" class="img-fluid">
              </div>
            </div>
            <div class="row albuns">
              <div class="col-md-6">
                <img src="/res/site/img/img3.jpg" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="/res/site/img/img4.jpg" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-md-6">
            
            <h2>Confiança no mercado?</h2>

            <h3>Produtos</h3>
            <p>Zanardi informatica, trabalha somente com produtos originais, tendo 12 meses de garantia.</p>

            <h3>Qualidade</h3>
            <p>Zanardi informatica, trabalha somente com produtos novos com fornecimento diretamente da fabrica.</p>

            <h3>Entregra</h3>
            <p>Enquanto a entrega pode ficar tranquilo pois a zanardi informatica sempre entrega os produtos na data especificada pelo Web Site.</p>

          </div>
        </div>
        
      </div>
    </section>

     <section id="produtos" class="caixa">
      <div class="container align-self-center">
        <div class="row">
          <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>
          <div class="col-md-3 col-sm-6 mb-3">
               <div class="card" style="border: 2px solid white; ">
                <img class="card-img-top" src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="Imagem de capa do card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Preço R$ <?php echo formatPrice($value1["vlprice"]); ?></li>
                </ul>
                <div class="card-body">
                  <a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="btn btn-comprar">Comprar</a>
                  <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-detalhes">Detalhes</a>
                </div>
              </div>
          </div>  
           <?php } ?>
        </div>
      </div>
    </div>
    </section>

    <section id="recursos" class="caixa">
      <div class="container">
        <div class="row">
          <div class="col-md-4">

            <h2>Fácil</h2>
            <h3>Buscar</h3>
            <p>Já sabe o que quer comprar? É só procurar e comprar.
            </p>

            <h3>Navegar</h3>
            <p>Veja os novos lançamentos, as novas tendencias tecnológicas do mercado.
            </p>

            <h3>Descobrir</h3>
            <p>Descubra o que deseja comprar somente navegando no web site.
            </p>

          </div>
          <div class="col-md-8">
            <div class="row rotacionar">
              <div class="col-md-6">
                <img src="/res/site/img/iphone1.png" class="img-fluid">
              </div>
              <div class="col-md-6">
                <img src="/res/site/img/iphone2.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
