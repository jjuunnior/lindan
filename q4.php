<?php include "header.php"; ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
        <section class="content">
      <div class="container-fluid">
               
            <div class="card card-red">
                <div class="card-header">
                    <h3 class="card-title">Questão 4
                </div>
        <?php

          $ms = $_POST['velocidade'];
          $km = 3.6;

          $resultado = $ms * $km;
                
        ?>

            <form action="" id="" name="" method="POST" class="form-group">
              <label for="">Velocidade</label>
                <input type="text" id="velocidade" name="velocidade" class="form-control">

  
              
              <br>
              <button type="submit" class="btn btn-primary">Calcular</button>
            </form>

            <h1>Resultado</h1>
            <p><?php echo $resultado; ?></p>
            </section>
        </div>
      </div>
  </div>

<?php include "footer.php"; ?>




    