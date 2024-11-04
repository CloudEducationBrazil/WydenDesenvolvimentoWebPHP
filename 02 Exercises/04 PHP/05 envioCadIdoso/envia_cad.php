
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="funcoes.js"></script> 

<!DOCTYPE html> 
<head>

<style>
  h11 {
    color:red;
    }

    #logo {
        width:50%;
        height:50%;
    }

    .panel{
        height: 78%;
        border: none;
        box-shadow: none;    
    }

    .panel-heading{
        font-size:150%;
    }

    .footer,
    .push {
        height: 145px;
        background-color: #B0C4DE;
    }
</style>  
  
</head>
<body>
<script type="text/javascript">
      $(document).ready(function () {
       $('input').keypress(function (e) {
            var code = null;
            code = (e.keyCode ? e.keyCode : e.which);                
            return (code == 13) ? false : true;
       });
    });
</script>

<form class="form-horizontal" method="POST" action="processa_email.php">
<fieldset>

<div class="panel panel-primary">

<div class="panel-heading">Pré-Cadastro de Gratuidade para Idosos
</div>
    
<div class="panel-body">

<!-- Text input-->
<div class="form-group" >
<br /> 
    <label class="col-md-2 control-label" for="nome">Nome <h11>*</h11></label>  
    <div class="col-md-5">
      <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
    </div>

    <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
    <div class="col-md-2"> 
      <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="M" type="radio">
      Masculino
      </label>
      <label required="" class="radio-inline" for="radios-0">
      <input name="sexo" id="sexo" value="F" type="radio" required>
      Feminino
      </label> 
   </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-2 control-label" for="cpf">CPF <h11>*</h11></label>  
    <div class="col-md-2">
      <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$" onBlur="valida_cpf(this.value)">
    </div>
  
    <label class="col-md-1 control-label" for="rg">RG <h11>*</h11></label>
    <div class="col-md-2">
      <div class="input-group">
         <input id="rg" name="rg" type="text" placeholder="" class="  form-control input-md" required="">
      </div>
    </div>

    <label class="col-md-1 control-label" for="emissor">Emissor <h11>*</h11></label>
    <div class="col-md-2">
      <div class="input-group">
         <input id="emissor" name="emissor" type="text" placeholder="" class="  form-control input-md" required="">
      </div>
    </div>
<!-- Multiple Radios (inline) -->
</div>

<!-- Prepended text-->
<div class="form-group">
    <label class="col-md-2 control-label" for="dtnasc">Nascimento <h11>*</h11></label>  
    <div class="col-md-2">
        <input id="dtnasc" name="dtnasc" placeholder="dd/mm/aaaa" class="form-control input-md" required="" type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="idadeidoso()" onkeydown="idadeidoso()"> <!-- setaFoco(this) -->
    </div>

    <label class="col-md-1 control-label" for="telefone">Telefone<!--  <h11>*</h11> --></label>
    <div class="col-md-2">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input id="telefone" name="telefone" class="form-control" placeholder="99 99999-9999" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('## #####-####', this)">
        </div>
    </div>
 
    <label class="col-md-1 control-label" for="email">e-Mail</label>
    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input id="email" name="email" class="form-control" placeholder="xxxxx@xxxxx.com" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
      </div>
    </div>
</div> 

<div class="form-group">
    <label class="col-md-2 control-label" for="nomemae">Nome da Mãe</label>  
    <div class="col-md-5">
      <input id="nomemae" name="nomemae" placeholder="" class="form-control input-md" type="text">
    </div>

    <label class="col-md-1 control-label" for="rgmae">RG da Mãe</label>
    <div class="col-md-2">
       <div class="input-group">
         <input id="rgmae" name="rgmae" type="text" placeholder="" class="  form-control input-md">
       </div>
    </div>
</div>

<!-- Search input-->
<div class="form-group">
    <label class="col-md-2 control-label" for="CEP">CEP<!--  <h11>*</h11> --></label>
    <div class="col-md-2">
      <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" value="" type="search" maxlength="8"> 
      <!-- pattern="[0-9]+$" -->
    </div>
    <div class="col-md-2">
        <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
    </div>
</div>

<!-- Prepended text-->
<div class="form-group">
    <label class="col-md-2 control-label" for="rua">Endereço</label>
    <div class="col-md-6">
   <!--  <div class="input-group"> -->
      <!-- <span class="input-group-addon">Rua</span> -->
      <input id="rua" name="rua" class="form-control input-md" placeholder="" type="text">
   <!--  </div> -->
    </div>

    <div class="col-md-3">
      <div class="input-group">
        <span class="input-group-addon">Bairro:</span>
        <input id="bairro" name="bairro" class="form-control" placeholder="" readonly="readonly" type="text">
      </div>
    </div>
</div>

<div class="form-group">
   <label class="col-md-2 control-label" for="cidade"></label>
   <div class="col-md-4">
      <div class="input-group">
        <span class="input-group-addon">Cidade:</span>
        <input id="cidade" name="cidade" class="form-control" placeholder="" readonly="readonly" type="text">
      </div>
   </div>
  
   <div class="col-md-2">
      <div class="input-group">
        <span class="input-group-addon">Estado:</span>
        <input id="estado" name="estado" class="form-control" placeholder="" readonly="readonly" type="text">
      </div>
   </div>
</div>

<div class="form-group">
   <label class="col-md-2 control-label" for="enviar"></label>
   <div class="col-md-7">
        <br />
        <button id="enviar" name="enviar" class="btn btn-success" type="Submit" onclick="processa_email.php">Enviar...</button>
        <button id="cancelar" name="cancelar" class="btn btn-danger" type=  "Reset">Cancelar</button>
        <br /><br /><br />
        <p><b><h11>Notas de Orientação:</h11></b></p>
        <p><h11>*</h11> Campo Obrigatório</p>
        <p>65 anos é a Idade mínima admitida</p>
        <p class="help-block">Pressione tecla [ TAB ] para passar de um Campo para Outro </p>
   </div>
   <!--
   <div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
   </div>
   -->
</div>

</div>
</div>

<footer class="footer navbar-fixed-bottom">
    <div class="col-md-4" style="font-size: 12">
<br /> 
  <b style="color:red">ATENÇÃO !</b> <br />
Enviando este formulário, você estará fazendo um <b>Pré-Cadastro</b>.<br /><br />
Para o Cadastro Definitivo você deverá comparecer em um dos endereços apresentados ao lado, levando seu documento de Identidade.
    </div>
    <div class="col-md-4" style="font-size: 12">
<br /> 
<b style="color:red">CENTRO DE CONVENÇÕES</b> <br />
Avenida Senador Darci Ribeiro, s/n - Maria Auxiliadora - Petrolina-PE<br /> 
Telefone: (87) 3864-2750 <br /> 
<br /> 
Horário Funcionamento: <br /> 
Segunda a Sexta das 08:00 às 18:00 <br /> 
Sábado das 08:00 às 12:00 <br /> 
    </div>
    <div class="col-md-4" style="font-size: 12">
<br /> 
<b style="color:red">RIVER SHOPPING (EXPRESSO CIDADÃO)</b> <br />
Av. Monsenhor Ângelo Sampaio, 100 - Centro - Petrolina-PE<br />
Telefone: (87) 3864-2750 <br /> 
<br /> 
Horário Funcionamento: <br /> 
Segunda a Sexta das 08:00 às 20:00 <br />
Sábado das 08:00 às 14:00 <br /> 

    </div>
</footer>

</fieldset>
</form>

</body>
</html>