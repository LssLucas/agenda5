<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <title>8º A</title>
</head>
<body>
    <?php
        $alunos = array(
            array("nome"=> "Aline","1º Semestre"=> 10, "2º Semestre"=> 9.5),
            array("nome"=> "Alfredo","1º Semestre"=> 8, "2º Semestre"=> 5),
            array("nome"=> "Carla","1º Semestre"=> 5, "2º Semestre"=> 6.5),
            array("nome"=> "César","1º Semestre"=> 9, "2º Semestre"=> 9),
            array("nome"=> "Daniel","1º Semestre"=> 10, "2º Semestre"=> 7),
            array("nome"=> "Esnar","1º Semestre"=> 8, "2º Semestre"=> 6),
            array("nome"=> "Henzo","1º Semestre"=> 6, "2º Semestre"=> 8),
            array("nome"=> "Pablo","1º Semestre"=> 7, "2º Semestre"=> 5),
            array("nome"=> "Wallace","1º Semestre"=> 8, "2º Semestre"=> 7),
            array("nome"=> "Zulmira","1º Semestre"=> 10, "2º Semestre"=> 6)
            );
        echo '<h2 class="w3-center">8º ANO - A</h2>';
        echo '<table class="w3-center w3-table-all">';
        echo '<tr class="w3-grey">';
        echo '<th class="w3-center">Nome do Aluno</th>';
        echo '<th class="w3-center">1º Semestre</th>';
        echo '<th class="w3-center">2º Semestre</th>';
        echo '<th class="w3-center">Menção Final</th>';
        echo "</tr>";
        foreach($alunos as $aluno){
            echo '<tr><td class="w3-center">'.$aluno['nome'].'</th>';
            if($aluno['1º Semestre']>=6){
                echo '<th class="w3-center w3-border w3-border-green">'.$aluno['1º Semestre']."</th>";
            }else{
                echo '<th class="w3-center w3-panel w3-border w3-border-red">'.$aluno['1º Semestre']."</th>";
            }
            if($aluno['2º Semestre']>=6){
                echo '<th class="w3-center w3-border w3-border-green">'.$aluno['2º Semestre']."</th>";
            }else{
                echo '<th class="w3-center w3-panel w3-border w3-border-red">'.$aluno['2º Semestre']."</th>";
            }
            $media=($aluno['1º Semestre']+$aluno['2º Semestre'])/2;
            if($media>=6){
                echo '<th class="w3-center w3-panel w3-border w3-border-green">'.$media.'<br><a href="rematricula.php"><button>Solicitar Rematrícula</button></a></th></tr>';
            }else{
                echo '<th class="w3-center w3-panel w3-border w3-border-red">'.$media.'<br><a href="recuperacao.php"><button>Enviar Recuperação</button></a></th></tr>';
            }            
        }
        echo "</table>";
    ?>
</body>
</html>