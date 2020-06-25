<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Olá, mundo!</title>
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
   <nav class="navbar navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href=administrativo.php>Pormade</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="btn btn-primary" href="<?=$base;?>/">Administrativo <span class="sr-only">(current)</span></a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-success" href="index_vendedores.php">Vendedores</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-danger" href="index_representante.php">Representantes</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-warning" href="index_tecnico.php">Técnicos</a>
        </li>&nbsp;
        <li class="nav-item">
          <a class="btn btn-info" href="index_loja.php">Lojas</a>
        </li>&nbsp;
          <li class="nav-item">
          <a class="btn btn-warning" href="index_motorista.php">Motoristas</a>
        </li>&nbsp;
        <li class="nav-item">
          <div class="dropdown">
            <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
               Imprimir Relatórios
             </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="../pdf/pdf.administrativo.php" target="_blank">Administrativo</a>
                <a class="dropdown-item" href="../pdf/pdf.vendedores.php" target="_blank">Vendedores</a>
                <a class="dropdown-item" href="../pdf/pdf.representante.php" target="_blank">Representantes</a>
                <a class="dropdown-item" href="../pdf/pdf.tecnico.php" target="_blank">Técnicos</a>
                <a class="dropdown-item" href="../pdf/pdf.loja.php" target="_blank">Lojas</a>
                  <a class="dropdown-item" href="../pdf/pdf.motorista.php" target="_blank">Motorista</a>


              </div>
          </div>
         </li>&nbsp;
         <li class="nav-item">
                    <div class="dropdown">
            <button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
               Adicionar
             </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?=$base;?>/novo">Administrativo</a>
                <a class="dropdown-item" href="../admin/adicionar_vendedor.php">Vendedores</a>
                <a class="dropdown-item" href="../admin/adicionar_representante.php">Representantes</a>
                <a class="dropdown-item" href="../admin/adicionar_tecnico.php">Técnicos</a>
                <a class="dropdown-item" href="../admin/adicionar_loja.php">Lojas</a>
                <a class="dropdown-item" href="../admin/adicionar_motorista.php">Motoristas</a>  

              </div>
          </div>
         </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-4" name="consulta" id="txt_consulta" type="text" placeholder="Pesquisar..." aria-label="Search">
        <a class="btn btn-outline-success my-2 my-sm-0" href="sair.php">Sair</a>
      </form>
    </div>
  </nav><br/>