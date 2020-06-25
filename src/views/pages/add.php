<?php $render('header'); ?>

<div class="container">
    <div class="form-group">
    <label for="exampleFormControlInput1">Nome</label>
    <input type="text" class="form-control" name="nome">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Setor</label>
    <input type="text" class="form-control" name="setor">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Ramal</label>
    <input type="text" class="form-control" name="ramal">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Rota</label>
    <input type="text" class="form-control" name="rota">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Empresarial</label>
    <input type="text" class="form-control" name="empresarial" id="empresarial">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Celular</label>
    <input type="text" class="form-control" name="celular" id="celular">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Residencial</label>
    <input type="text" class="form-control" name="residencial" id="residencial" >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
    <input class="btn btn-primary" type="submit" value="Enviar">
    <a href="administrativo.php" class="btn btn-info" role="button">Voltar</a>

<?php $render('footer'); ?>