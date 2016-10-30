<!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Solicita un presupuesto.</h2>
                <br>
       
                <div class="col-md-6" id="col-form-contactright">
                   <form action="cotiz" method="POST" class="form-horizontal" role="form" name="form">

                            <div class="form-group">
                                <input placeholder="Tu Nombre" type="text" name="nom" class="form-control" onkeypress="nom();">
                            </div>
                            <p></p>
                            <div class="form-group">
                                <input placeholder="Tu Email" type="text" name="co" class="form-control">
                            </div>
                            <p></p>
                            <div class="form-group">
                                <input placeholder="Tu Numero de Telefono" type="text" name="numer" class="form-control">
                            </div>
                            <p></p>
                            <div class="form-group">
                                <textarea rows="5" placeholder="Comentanos que deseas" name="coment" class="form-control" ></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <button type="button" title="Enviar" onclick="validar_campo();" id="btn-submit" class="btn btn-default">Enviar</button>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div id="valor"></div>
                                </div>
                            </div>
                    </form>
                </div>
                <br>
                <div class="col-md-6" id="col-form-contact">
                    <h4>Tambien puedes hacerlo llamando a los siguientes números:</h4>
                    <div class="div-numbers">
                        <p> 
                            <i id="icon_phone" class="fa fa-mobile fa-lg " aria-hidden="true"></i>&nbsp; 0212-3114851 &nbsp;|
                            <i id="icon_phone" class="fa fa-mobile fa-lg " aria-hidden="true"></i>&nbsp; 0416-8389572 &nbsp;|
                            <i id="icon_phone" class="fa fa-mobile fa-lg " aria-hidden="true"></i>&nbsp; 0414-2042819
                            <p>Nuestro correo electronico: <a href="mailto:feedback@startbootstrap.com">devcodicem@gmail.com</a></p>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>