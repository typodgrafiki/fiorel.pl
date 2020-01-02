<?php

include("header.php");

?>
<div><script type="text/javascript">
$(function(){
    
    $("#gallery").preloader();
    
    });
</script>
<div id="about_content" class="right_column">
    <div class="content">
        <h2 class="title">O nas</h2>
        
        <div id="gallery" class="clearfix">
                <a><img src="_img/baner1.png" /></a>
        </div>
        <div class="box">    
            <h3 class="head">Droga klientko!</h3>
            <ul class="list_question">
                <li>Jeśli szukasz nietypowego rozmiaru lub fasonu.</li>
                <li>Jeśli nie możesz znaleźć w sklepie ubrania, w którym czujesz się dobrze.</li>
                <li>Jeśli masz ważne spotkanie i chcesz podkreślić swój charakter.</li>
                <li>Jeśli chcesz zabłysnąć w towarzystwie kreacją, której nie ma nikt.</li>
                <li>Jeśli masz pomysł na swoją wymarzoną suknię ślubną.</li>
            </ul>
            <p>
                <span class="toolbox_adress">Odwiedź nas<span>ul. Palacza 75, 60-273 Poznań</span></span> lub <span class="toolbox_phone">zadzwoń i zapytaj<span>502 480 149</span></span>.<br />
                Wszystkie ubrania wychodzące z naszej pracowni cechuje najwyższa jakość oraz dbałość o szczegóły. <br />
                Z nami poczujesz się lepiej, znajdziesz swój styl i będziesz podążać za trendami. 
            </p>
        </div>
        <div class="box"> 
            <div class="left half">   
                <h3 class="head small">Oferta</h3>
                <p>
                    Dla naszych klientów oferujemy szeroki wachlarz usług z zakresu krawiectwa damskiego. <br />
                    Specjalizujemy się w krawiectwie lekkim szytym na miarę, proponujemy również każdego rodzaju przeróbki: zwężanie, skracanie, drobne naprawy odzieży oraz wszelkiego rodzaju usługi krawieckie.
                </p>
            </div>
            <div class="right half">   
                <h3 class="head small">Uszyjemy dla Ciebie</h3>
                <ul class="offer_list">
                    <li>suknie dzienne i wieczorowe</li>
                    <li>suknie ślubne</li>
                    <li>garsonki</li>
                    <li>bluzki</li>
                    <li>spodnie</li>
                    <li>spódnice</li>
                    <li>koszule</li>
                    <li>żakiety</li>
                    <li>i wiele innych...</li>
                </ul>
            </div>
        </div>
        <div class="box">    
            <h3 class="head">O nas</h3>
            <div class="cytat"><span class="big">&rdquo;</span>Moda przemija, styl pozostaje<span class="big">&bdquo;</span> <span class="sign">Coco Chanel</span></div>
            <p>
                Do dyspozycji naszych klientów zawsze są wykwalifikowane krawcowe, które profesjonalnie pomogą w doborze odpowiednich materiałów i dodatków.<br />
                Zawsze podążamy za najnowszymi trendami, zarówno jeżeli chodzi o tkaniny jak i wzornictwo.<br />
                Naszą wizytówką jest nienaganny krój i perfekcyjne wykończenie ubioru. Współpracujemy z klientami na terenie całego kraju oraz za granicą.
            </p>
            <p>Zapraszamy.</p>
        </div>
    </div>
</div>

<script type="text/javascript">
          $(function(){
            var newHeight = $("body").height();
            $(".right_column").css("min-height", newHeight);
        });
  </script>
               
</div>
<?php

include("foot.php");

?>