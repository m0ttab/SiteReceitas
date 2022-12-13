<?php
include 'backend/lista.class.php';
include 'backend/receita.class.php';
include 'backend/cadastro.class.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Desejos</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="style.css" rel="stylesheet">
</head>

<body>

  <?php
  include_once 'header.php';
  ?>

  <section class="ftco-section">
    <div class="container shadow p-3 mb-5 bg-body rounded cont-item">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-4">
          <h2 class="heading-section">Minha Lista de Desejos</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="table-wrap">
            <table class="table">
              <thead class="thead-primary">
                <tr>
                  <th>&nbsp;</th>
                  <th>Receita</th>
                  <th>&nbsp;</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $lista = new Lista();
                $receitas_lista = $lista->list();
                foreach ($receitas_lista as $receita_lista) {
                  $receita = new Receita();
                  $receita = $receita->get_by_id($receita_lista['receita_id'])[0];
                ?>
                  <form method="POST" action="atualizar_lista.php">
                    <tr role="alert">
                      <td>
                        <img class="img" src='<?php echo $receita['foto']; ?>' width=150 height=150>
                      </td>
                      <td>
                        <div class="produto">
                          <p>
                            <?php echo $receita['nome']; ?>
                          </p>
                          <p>
                            <?php echo $receita['autor']; ?>
                          </p>
                        </div>
                      </td>
                      <td>
                        <div class="ingredientes">
                          <?php echo $receita['ingredientes']; ?>
                        </div>
                      </td>
                      <td class="lista">
                        <div class="input-group">
                          <input type="hidden" name="id" value='<?php echo $receita_lista['id']; ?>'>
                        </div>
                      </td>
                      <td>
                        <input class="btn delete-item" type="submit" value="Deletar Item" name="delete">
                        <input class="btn salvar" type="submit" value="Atualizar Lista" name="update">
                      </td>
                    </tr>
                  </form>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <br />
  <br />
</body>

</html>