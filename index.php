<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CV–WEB developing LW2 CSS|Lipatova Liza</title>
    <link rel="stylesheet" href=index.css>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body onload="dynamicMenuWasActivatedWith(main)">
    <div class="grid-container">
        <div class="logo" onclick="activateLogoLink()">
            <img src="./Images/logo.png" name="logo" width="800"
            onmouseover="window.document.images['logo'].src='./Images/logoActive.png';"
            onmouseout="window.document.images['logo'].src='./Images/logo.png';"/>
        </div>
        <div class="contacts">
            <section>
                <table>
                    <tr>
                        <th colspan="2">
                            Контакти
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <article>
                                <h4><img src="./Images/phone.png" alt="Phone" width="30" align="middle" />Call-центр:
                                </h4>
                                <ul>
                                    <li>+38(044)364-22-00</li>
                                    <li>+38(073)364-22-00</li>
                                    <li>+38(050)364-22-00</li>
                                </ul>
                            </article>
                        </td>
                        <td>
                            <article>
                                <h4><img src="./Images/post.png" alt="Post" width="30" align="middle" />Email:</h4>
                                <ul>
                                    <li><a href="mailto:lipatovaliza13@gmail.com"
                                            target="_blank">lipatovaliza13@gmail.com</a></li>
                                    <li><a href="mailto:lizalipatova13@gmail.com"
                                            target="_blank">lizalipatova13@gmail.com</a></li>
                                </ul>
                                <h4><img src="./Images/map.png" alt="Location" width="30" align="middle" />Наша адреса:
                                </h4>
                                <ul>
                                    <li>г. Киев, ул. Энтузиастов, 5, левое крыло</li>
                                </ul>
                            </article>
                        </td>
                    </tr>
                </table>
                </selection>
        </div>
        <div class="menu">
            <br><button id="main" onclick="dynamicMenuWasActivatedWith(main)">Головна</button>
            <br><button id="aboutUs" onclick="dynamicMenuWasActivatedWith(aboutUs)">Про нас</button>
            <br><button id="guarantee" onclick="dynamicMenuWasActivatedWith(guarantee)">Гарантія якості</button>
            <br><button id="returnBack" onclick="dynamicMenuWasActivatedWith(returnBack)">Обмін і повернення</button>
            <br><div class="dropdown">
                <button class="dropbtn">Акції</button>
                <div class="dropdown-content">
                    <br><button id="mainSale" onclick="dynamicMenuWasActivatedWith(mainSale)">MainSale</button>
                    <br><button id="saleForWholesale" onclick="dynamicMenuWasActivatedWith(saleForWholesale)">For Wholesale</button>
                    <br><button id="saleForRetail" onclick="dynamicMenuWasActivatedWith(saleForRetail)">For Retail</button>
                </div>
            </div>
            
            <div class="lichilnik">
                <h3 id="lichilnik">Сьогодні нашу сторінку переглядали 230 чарівних жінок</h3>
                <button onclick="update_lichilnik()"> Оновити данні </button>
            </div>
        </div>

        <div id="mainBlock" class="main" >
            <h2>Духи - это невидимый, но зато незабываемый, непревзойдённый модный аксессуар. Он оповещает о появлении
                женщины и продолжает напоминать о ней, когда она yшла.</h2>
            <em>
                (Коко Шанель)
            </em>
        </div>

        <div id="aboutUsBlock" class="main">
            <p>Ювелірний завод "Perfume" був створений в 1999 році людьми, закоханими в аромати. Сьогодні - це один з
              найкращіх виробників парфюмів в Україні, що створює аромати високої якості.
              <br>Ми є лауреатом рейтингу "Кращі підприємства України". Якість виробів, що випускаються на нашому
              підприемстві, підтверджена Міжнародним призом "Європейська якість".
              <br>Вся парфумерія створюється на безспиртовій основі, з натуральними ефірами, які ми закуповуємо в 10 країнах
              світу у провідних виробників.
              <br>Це забезпечує високу якість всієї парфумерії Parfume
            </p>
        </div>

        <div id="returnBackBlock" class="main">
            <section>
              <article>
                <h2>Повернення продукції можливий в разі, якщо:</h2>
                <ul>
                  <li>пройшло не більше 5-х календарних днів після отримання продукції;</li>
                  <li>товар не був у вживанні, а значить збережені його споживчі властивості, товарний вигляд, ярлики,
                    оригінальна фабрична упаковка не була розкрита;</li>
                  <li>наявність документів, що підтверджують факт покупки;</li>
                  <li>помилка магазину (Вам привезли не той парфум, що Ви замовляли).</li>
                </ul>
              </article>
            </section>
        </div>

        <div id="guaranteeBlock" class="main">
            <img src="./Images/guarantee.jpg" alt="Post" width="130"/>
            <h2>«10 років гарантії»!</h2>
      
            <p>
              Ми дорожимо своєю репутацією.
              <br>Всі товари, представлені в нашому магазині, оригінальні. Купуючи у нас,
              <br>Ви захищаєте себе від неякісного або простроченого товару і гарантовано отримуєте оригінальний,
              високоякісний і безпечний товар.
            </p>
        </div>

        <div id="mainSaleBlock" class="main">
            <img src="./Images/halloween.jpg" alt="Post" width="435"/>
        </div>

        <div id="saleForWholesaleBlock" class="main">
            <p>
                При покупке товара на сумму более 6000,00 грн все оптовые клиенты получают скидку 30%
                <br>а при покупке товара на сумму более 10000,00 грн. - 50%
              </p>
        </div>

        <div id="saleForRetailBlock" class="main">
            <p>
                При покупке любого товара все  клиенты получают скидку 20%
                <br>При покупке любого товара с крастным ценником все  клиенты получают скидку 40%
            </p>
        </div>

        <div class="advertising">
            <hr>
            <br>
            <a href="https://greenforest.com.ua/" target="_blank">
                Курсы английского языка в сети школ Green Forest</a>
            <p>Школа английского языка Green Forest. 7 офисов в Киеве. Дистанционное онлайн обучение. Oнлайн учебник,
                дополнительные спецкурсы и ...</p>
            <hr>
            <br>
            <a href="https://jasmine.ua/" target="_blank">
                Jasmine - Интернет-магазин</a>
            <p>Новые осенние коллекции дизайнерского нижнего белья с приятными ценами. Доставка 0 грн. Европейское
                качество. Лучшая цена. Бесплатная доставка...</p>
            <hr>
            <br>
            <a href="https://gepur.com/" target="_blank">
                Gepur - Женская одежда - Магазин Женской Одежды</a>
            <p>Gepur - Новинки каждую неделю! Бесплатная доставка. Размерная сетка от XS до 6XL. Дизайнерская одежда на
                любой сезон: верхняя одежда, платья, костюмы, обувь и аксессуары...</p>
            <hr>
            <br>
        </div>
        <div class="footer">
            <h4>© <span id="time" onmouseover="activeClock()" onmouseout="justDate()"></span></h4>
        </div>
    </div>

    <script type="text/javascript">
        $('#time').text(new Date().toLocaleDateString());
        var lichilnik = 0;
        function activeClock() {
          currentTime = new Date().toLocaleTimeString();
          $('#time').text(currentTime);

          time_id=setInterval(function() {
            $('#time').text(new Date().toLocaleTimeString());
          }, 1000);
        }

        function justDate() {
          clearInterval(time_id);
          currentTime = new Date().toLocaleDateString();
          $('#time').text(currentTime);
        }

        function activateLogoLink() {
          return window.open('http://javascript.ru', 'width=800,height=600');
        }

        function dynamicMenuWasActivatedWith(id) {
            var mainBlock = $('#mainBlock');
            var aboutUsBlock = $('#aboutUsBlock');
            var guaranteeBlock = $('#guaranteeBlock');
            var returnBackBlock = $('#returnBackBlock');
            var mainSaleBlock = $('#mainSaleBlock');
            var saleForWholesaleBlock = $('#saleForWholesaleBlock');
            var saleForRetailBlock = $('#saleForRetailBlock');
            mainBlock.hide();
            aboutUsBlock.hide();
            guaranteeBlock.hide();
            returnBackBlock.hide();
            mainSaleBlock.hide();
            saleForWholesaleBlock.hide();
            saleForRetailBlock.hide();

            if (id == main) {
                mainBlock.show();
            } if (id == aboutUs) {
                aboutUsBlock.show();
            } if (id == guarantee) {
                guaranteeBlock.show();
            } if (id == returnBack) {
                returnBackBlock.show();
            } if (id == mainSale) {
                mainSaleBlock.show();
            } if (id == saleForWholesale) {
                saleForWholesaleBlock.show();
            } if (id == saleForRetail) {
                saleForRetailBlock.show();
            }
        }

        function update_lichilnik(){
          
          $.ajax({
            url: '/updateLichilnik.php',
            method: 'post',
            dataType: 'html',
            data: {'lichilnik': lichilnik},
            success: function(data){
              $('#lichilnik').html(data);
            }
          });
          lichilnik++;
        }
    </script>
</body>
</html>