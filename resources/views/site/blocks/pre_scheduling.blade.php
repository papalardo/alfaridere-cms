<section id="newsletter">
    <div class="grid-container full" >
        <div class="grid-x"  >
            <div class="cell medium-4 newslleter__info" >
                <div class="grid-container align-middle" style="height: 100%">
                    <div class="grid-x  align-middle" style="height: 100%">
                        <div class="cell medium-4 small-1"></div>
                        <div class="cell medium-8 small-10">
                            <h2>{{ $block->input('title') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cell medium-8 newslleter__form">
                <div class="grid-container align-center">
                        <div class="grid-x align-center">
                            <div class="cell small-10 medium-11">
                                <form action="#" id="pre-agendamento" method="post">
                                    <div class="grid-container">
                                        <div class="grid-x grid-padding-x">
                                            <div class="cell medium-6">
                                                <div class="grid-x grid-margin-y grid-padding-x">
                                                    <div class="cell">
                                                        <input type="text" name="name" placeholder="Nome" id="">
                                                    </div>
                                                </div>
                                                <div class="grid-x grid-margin-y grid-padding-x">
                                                    <div class="cell">
                                                        <input type="text" name="email" placeholder="E-mail" id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell medium-6">
                                                <div class="grid-x grid-margin-y  grid-padding-x">
                                                    <div class="cell">
                                                        <input type="text" name="phone" placeholder="Telefone" id="">
                                                    </div>
                                                </div>
                                                <div class="grid-x grid-margin-y  grid-padding-x">
                                                    <div class="cell">
                                                        <input type="hidden" name="action" value="preAgendamento">
                                                        <input type="text" name="age" placeholder="Idade" id="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-container">
                                        <div class="grid-x grid-padding-y">
                                            <div class="cell text-right small-text-center">
                                                <button class="button default"><span>ENVIAR</span><span class="loading"><i class="fa fa-spinner fa-spin"></i></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="cell medium-1"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>