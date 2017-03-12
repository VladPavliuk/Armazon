{include file="partials/totalInfo.tpl"}
{include file="partials/discountList.tpl"}

<div class="row" id="about-page">
    <div class="col-lg-10 col-lg-offset-1">
        <div class="row">
            <div class="page-header">
                <h2>Наші контактні дані</h2>
            </div>
            <p class="lead">
                <i class="fa fa-phone" aria-hidden="true"></i>
                (067)-450-80-80
                - мобільний
            </p>
            <p class="lead">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                sale@armazon.com
                - електронна пошта
            </p>
        </div>

        <div class="row">
            <div class="page-header">
                <h2>Конструкція фоторамки</h2>
            </div>
            <img src="/src/images/frame_construction.jpg" title="Конструкція фоторамки" alt="Конструкція фоторамки">
        </div>

        <div class="row">
            <div class="page-header">
                <h2>Про нас</h2>
            </div>
            <p class="lead">
                <b>Фірма «Армазон»</b> почала свою діяльність в 2005 році.<br>
                Зараз в нашому арсеналі є 2 серії букових фоторамок: <br>
                серія LEONARDO - профіль 20х14 мм,<br>
                серія FRODO - профіль 14х14 мм.;<br><br>
                Ми виготовляємо фоторамки наступних розмірів:<br>
                10х15, 13х18, 15х21, 18х24, 21х30, 25х38, 30х40.<br><br>
                Термін від замовлення до відправки товару становить 1-3 дні.<br>
                Доставка здійснюється транспортними компаніями:<br>
                <a target="_blank" href="http://www.meest-express.com.ua/ua"> «Міст Експрес»</a>,
                <a target="_blank" href="http://www.novaposhta.ua">«Нова пошта»</a>,
                <a target="_blank" href="http://www.intime.ua/"> «Інтайм»</a>;<br>
                Можливість зручної оплати за поставлений товар - банківський переказ, поповнення кредитної картки,
                післяплата;<br>
            </p>
        </div>

        <div class="row">
            <div class="page-header">
                <h2>Наше виробництво</h2>
            </div>
            {for $i=1 to 8}
                <img src="src/images/about_{$i}.png" width="400" title="Наше виробництво" alt="Наше виробництво">
            {/for}

        </div>
    </div>
</div>