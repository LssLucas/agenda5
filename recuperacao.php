<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <title>Rematricula</title>
    <style>
    .button {
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
}
    </style>
</head>
<body>
    <div class="w3-container w3-teal">
        <h3 class="w3-center">Recuperação</h3>
        <form class="w3-container">
            <label class="w3-text-white">
                <b>
                    Nome dx Alunmx
                </b>
            </label>
            <input  class="w3-input w3-border w3-light-green" placeholder="Nome dx Alunmx" name="nome" type="text">
            <label class="w3-text-white">
                <b>
                    Nome dx Responsável
                </b>
            </label>
            <input  class="w3-input w3-border w3-light-green" placeholder="Nome dx Responsável" name="nome" type="text">
            <label class="w3-text-white">
                <b>
                    Endereço
                </b>
            </label>
            <input  class="w3-input w3-border w3-light-green" placeholder="Endereço" name="nome" type="text">
            <label class="w3-text-white">
                <b>
                    Telefone
                </b>
            </label>
            <input  class="w3-input w3-border w3-light-green" placeholder="(xx)xxxxx-xxxx" name="nome" type="text">
            <label class="w3-text-white">
                <b>
                    Email
                </b>
            </label>
            <?php
                echo '<input  class="w3-input w3-border w3-light-green" placeholder="email@email.com" name="nome" type="text">';
                $email=['nome'];
            ?>
        </form>
        <a href="lucassantos_AG5_TI2.php" onclick="alert('Encaminhada com sucesso para o email <?php echo $email['nome'];?>')">
            <img src="https://img.icons8.com/fluent/48/000000/send.png"/>
        </a>
    </div>
</body>
</html>