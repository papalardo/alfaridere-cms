<header class="<?php echo (isset($header_class)) ? $header_class : '';  ?>">
    <div class="header__bar">
        <div class="grid-container full">
            <div class="grid-x text-center align-middle align-center" style="height:56px">
                <div class="cell">
                    <ul>
                        <li><a href="https://www.google.com/maps/place/Alfa+Ridere+Centro+Odontol%C3%B3gico/@-15.836062,-48.0137086,17z/data=!3m1!4b1!4m5!3m4!1s0x935a32109bff34ef:0x470a63ce64f1bd93!8m2!3d-15.8360672!4d-48.0115199" target="_blank"><i class="fas fa-map-marker-alt"></i><span>Rua 4 Sul, Lt 9, Lj 2, Ed. Oscar Freire, Águas Claras-DF</span></a></li>
                        <li><a href="tel:+556134354205"><i class="fas fa-phone-volume"></i><span>(61) 3435-4205</span></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=+5561985044205&text=Olá%2C%20Alfaridere!"><i class="fab fa-whatsapp"></i><span>(61)98504-4205</span></a></li>
                        <li><a href="#" class="tab"><i class="fas fa-history"></i><span>Horário de funcionamento: Seg-Sex 8h às 18h • Sáb 8h às 12h</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header__sub">
        <div class="grid-container">
            <div class="grid-x grid-padding-x align-center align-middle">
                <div class="cell small-6 medium-2">
                    <a href="index.php">
                        <?php
                        if ($page == 'kids') {
                            ?>
                        <img src="assets/img/logo_kids.svg" class="logo_kids" alt="">
                        <?php
                        } else {
                            ?>
                        <img src="assets/img/logo_change_to_svg.png" class="logo_default" alt="">
                        <?php
                        }
                        ?>
                    </a>

                </div>
                <div class="cell small-6 medium-10 text-right">
                    <nav>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="tratamentos.php">Tratamentos Especializados</a></li>
                            <li><a href="estetica.php">Tratamentos Estéticos</a></li>
                            <li><a href="kids.php">Kids</a></li>
                            <li>
                                <a href="/assets/ebook/e-book_alfa-ridere.pdf" class="button default" target="_blank" style="margin: 0px">
                                    Baixe nosso e-book
                                </a>
                            </li>
                            
                        </ul>
                    </nav>
                    <div class="show-for-mobile">
                        <a href="#" class="openMenu"> <i class="fas fa-bars open"></i> <i class="fas fa-times close"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>