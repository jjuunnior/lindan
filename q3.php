<?php include "header.php"; ?>

<div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
        <section class="content">
      <div class="container-fluid">
               
            <div class="card card-red">
                <div class="card-header">
                    <h3 class="card-title">Questão 9</h3>
                </div>

        <?php

        $num1 = $_POST['numero1'];
        $num2 = $_POST['numero2'];

        $quadradoNum1 = $num1 * $num1;
        $quadradoNum2 = $num2 * $num2;

        $somaQuadrado = $quadradoNum1 + $quadradoNum2;
                
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
            <p><?php echo $somaQuadrado; ?></p>
</section>
        </div>
      </div>
  </div>

<?php include "footer.php"; ?>




    