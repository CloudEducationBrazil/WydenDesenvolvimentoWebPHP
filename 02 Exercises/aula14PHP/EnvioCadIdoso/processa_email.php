    <?php
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $emissor = $_POST['emissor'];
    $dtnasc = $_POST['dtnasc'];
    $telefone = $_POST['telefone'];
    $emailuser = $_POST['email'];
    $nomemae = $_POST['nomemae'];
    $rgmae = $_POST['rgmae'];
    $cep = $_POST['cep'];
    $endereco = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    require 'PHPMailer/PHPMailerAutoload.php';

    $Mailer = new PHPMailer();

    //Define que ser� usado SMTP
    $Mailer->IsSMTP();

    //Enviar e-mail em HTML
    $Mailer->isHTML(true);

    //Aceitar carasteres especiais
    $Mailer->Charset = 'UTF-8';

    //Configura��es
    $Mailer->SMTPAuth = true;
    $Mailer->SMTPSecure = 'ssl';

    //nome do servidor
    $Mailer->Host = 'smtp.gmail.com';
    //Porta de saida de e-mail 
    $Mailer->Port = 465;

    //Dados do e-mail de saida - autentica��o
    $Mailer->Username = 'email da pessoa';
    $Mailer->Password = 'senha';

    //E-mail remetente (deve ser o mesmo de quem fez a autentica��o)
    $Mailer->From = 'email da pessoa';

    //Nome do Remetente
    $Mailer->FromName = $nome;

    //Assunto da mensagem
    $Mailer->Subject = 'Cadastro de Gratuidade para Idosos';

    //Corpo da Mensagem
    $Mailer->Body = '<h2>Dados para Cadastro:</h2>
                     <h4>
                     <br />Nome: ' . $nome . '
                     <br />Sexo: ' . $sexo . '
                     <br />CPF: ' . $cpf . '
                     <br />RG: ' . $rg . '
                     <br />Emissor: ' . $emissor . '
                     <br />Data Nascimento: ' . $dtnasc . '
                     <br />Telefone: ' . $telefone . '
                     <br />e-Mail: ' . $emailuser . '
                     <br />Nome Mae: ' . $nomemae . '
                     <br />RG Mae: ' . $rgmae . '
                     <br />CEP: ' . $cep . '
                     <br />Endereco: ' . $endereco . '
                     <br />Bairro: ' . $bairro . '
                     <br />Cidade: ' . $cidade . '
                     <br />UF: ' . $estado . '</h4>';

    //Corpo da mensagem em texto
    $Mailer->AltBody = ' ';

    //Destinatario 
    $Mailer->AddAddress('email destino');

    if ($Mailer->Send()) {
        // echo "e-Mail enviado com sucesso !";
        echo "<script>alert('Email enviado com Sucesso!');</script>";
    ?>
        <html>

        <head>
            <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/enviemail/envia_cad.php">
        </head>

        <body>
        </body>

        </html>
    <?php
    } else {
        // echo "Erro no envio do e-Mail: " . $Mailer->ErrorInfo;
        echo  "<script>alert('e-Mail nao foi enviado ! Ocorreu um ERRO ...');</script>";
    ?>
        <html>

        <head>
            <META HTTP-EQUIV="REFRESH" CONTENT="5;URL=http://localhost/enviemail/envia_cad.php">
        </head>

        <body>
        </body>

        </html>
    <?php
    }

    ?>