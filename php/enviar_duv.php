<?php
//Variaveis

$nome 		= $_POST['nome'];
$cpfcnpj 	= $_POST['cpfcnpj'];
$cidade		= $_POST['cidade'];
$telefone 	= $_POST['telefone'];
$email 		= $_POST['email'];
$mensagem 	= $_POST['mensagem'];

$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
$emaildestino = 'gustavohquinalha@gmail.com';

// -------------

// Compo E-mail

	
	$arquivo = "
	<html>
        <table width='100%' border='0' cellpadding='1' cellspacing='1'>
            <tr>
              <td>
			    <tr>
                 <td width='500'>Nome: <b>$nome</b></td>
                </tr>
                <tr>
                  <td width='320'>CPF ou CNPJ: <b>$cpfcnpj</b></td>
	            </tr>
	            <tr>
                  <td width='320'>Cidade: <b>$cidade</b></td>
	            </tr>
                <tr>
                  <td width='320'>E-mail: <b>$email</b></td>
	            </tr>
				<tr>
                  <td width='320'>Telefone: <b>$telefone</b></td>
                </tr>
				<tr>
                  <td width='320'>Mensagem: $mensagem</td>
                </tr>
            </td>
          </tr>  
          <tr>
            <td>Este e-mail foi enviado em <b>$data_envio</b> &agrave;s <b>$hora_envio</b></td>
          </tr>
        </table>
    </html>
	";

// -------------------------

//enviar
	
	// emails para quem será enviado o formulário
	$destino = 'gustavohquinalha@gmail.com';
	$assunto = "Contato OnPago 1";

	// É necessário indicar que o formato do e-mail é html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From:' . $nome;
	//$headers .= "Bcc: $EmailPadrao\r\n";
	
	$enviaremail = mail($destino, $assunto, $arquivo, $headers);
	if($enviaremail){
	$mgm = "E-MAIL ENVIADO COM SUCESSO! <br>";
	echo " <meta http-equiv='refresh' content='3;URL=../contato1.html'>";
	echo $mgm;
	} else {
	$mgm = "ERRO AO ENVIAR E-MAIL!";
	echo "";
	echo $mgm;
	}
?>