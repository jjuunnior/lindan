<?php include "header.php"; ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
        <body background="dist/img/fundo.pnj">
          <p></p>
      <section>
          <div class="card card-red">
                <div class="card-header">
                    <h3 class="card-title">Quetão 1</h3>
                </div>
          <?php

            $num1           = $_POST['numero1'];
            $num2           = $_POST['numero2'];
            $resultado      = $num1 + $num2;
            $novoResultado  = $resultado * $num1;

          ?>

            <form action="" id="" name="" method="POST" class="form-group">
              <label for="">Numero 1</label>
                <input type="text" id="numero1" name="numero1" class="form-control">
              <label for="">Numero 2</label>
                <input type="text" id="numero2" name="numero2" class="form-control">
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular</button>
            </form>

            <h1>Resultado</h1>
            <p><?php echo $novoResultado; ?></p>
            </section>
        </div>
      </div>
  </div>

</body>

    

<?php include "footer.php"; ?>