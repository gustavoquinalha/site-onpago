<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Enviar E-mail com PHP</title>
</head>
<body>
    
      <form action="enviar.php" name="form_contato" method="post" id="contact-form" >

      <div class="container-fluid" style="color: #fff; background: #60286d">

                        <div class="container" style="margin:0; padding: 0">
                        
                        <h3>Contato para duvidas</h3><br>
                            <div class="row" style="">
                   
                        <article class="form-detached">
                                <div class="alert alert-success hidden" id="contact-alert-success">
                                    <strong>Success!</strong> Thank you for your message. Reply will be in a while!
                                </div>
                                <div class="alert alert-danger hidden" id="contact-alert-error">
                                    <strong>Error!</strong> Something went wrong sending your message.
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="name"></label>
                                    <input type="text" class="form-control" value="" placeholder="Nome" data-msg-required="Please enter your name." name="nome" id="nome">
                                </div>

                                 <div class="form-group">
                                    <label class="sr-only" for="cpfcnpj"></label>
                                    <input type="text" class="form-control" value="" placeholder="CPF ou CNPJ" data-msg-required="Please enter your name." name="cpfcnpj" id="cpfcnpj">
                                </div>
                                    
                                <div class="form-group">
                                    <label class="sr-only" for="cidade"></label>
                                    <input type="text" value="" placeholder="Cidade" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="cidade" id="cidade">
                                </div>

                                 <div class="form-group">
                                    <label class="sr-only" for="telefone"></label>
                                    <input type="tel" value="" placeholder="Telefone ou Celular" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." class="form-control" name="telefone" id="telefone">
                                </div>

                                 <div class="form-group">
                                    <label class="sr-only" for="email"></label>
                                    <input type="mail" class="form-control" value="" placeholder="E-mail" data-msg-required="Please enter your email." name="email" id="email" style="width:">
                                </div>

                                <div class="form-group">
                                  <label class="sr-only" for="name"></label>
                                  <textarea class="form-control" rows="3" placeholder="Mensagem" name="mensagem" id="mensagem" style="border-radius: 5px"></textarea>
                                </div>
                                <input type="submit" class="campo_submit" style="background:#128D88; color: #fff;border:none; ;border-radius: 5px; font-size: 28px; padding-top:10px; margin:0" value="Enviar" />
                  </form> 

                </div>
              </div>
            </div>
       
</body>
</html>