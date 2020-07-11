<?php
require_once('header/header.php');

if (isset($_POST['calcular'])) {
    $valorObraInstalacao = $_POST['maoObraInstalacao']; 
    $quantidadeLicenca = $_POST['quantidadeLicenca'];
    $formaPagamento = $_POST['formaPagamento'];
    $plano = $_POST['plano'];
    $tv32polegadas = (int)$_POST['quantidadeTv32'] * (float)$_POST['valorTv32'];
    $tv40polegadas = (int)$_POST['quantidadeTv40'] * (float)$_POST['valorTv40'];
    $tv43polegadas = (int)$_POST['quantidadeTv43'] * (float)$_POST['valorTv43'];
    $tv49polegadas = (int)$_POST['quantidadeTv49'] * (float)$_POST['valorTv49'];
    $tv50polegadas = (int)$_POST['quantidadeTv50'] * (float)$_POST['valorTv50'];
    $tv55polegadas = (int)$_POST['quantidadeTv55'] * (float)$_POST['valorTv55'];
    $tv58polegadas = (int)$_POST['quantidadeTv58'] * (float)$_POST['valorTv58'];
    $tv65polegadas = (int)$_POST['quantidadeTv65'] * (float)$_POST['valorTv65'];
    $tv75polegadas = (int)$_POST['quantidadeTv75'] * (float)$_POST['valorTv75'];
    $monitorLFD = (int)$_POST['quantidadeMonitorLFD'] * (float)$_POST['valorTvMonitorLFD'];
    $monitorVideoWall = (int)$_POST['quantidadeMonitorVideoWall'] * (float)$_POST['valorTvMonitorVideoWall'];
    $playerAlphasignage = (int)$_POST['quantidadePlayerAlphasignage'] * (float)$_POST['valorPlayerAlphasignage'];
    $playerAlphasignageSecundario = (int)$_POST['quantidadePlayerAlphasignageSecundario'] * (float)$_POST['valorPlayerAlphasignageSecundario'];
    $tvBox = (int)$_POST['quantidadeTvBox'] * (float)$_POST['valorTvBox'];
    
    if ($quantidadeLicenca == "zero" && $formaPagamento == "anual" || $formaPagamento == "mensal") {
        $mensalidade = 0.0;
        $mensalidade;
    }
    if ($plano == "bronze" && $formaPagamento == "anual" && $quantidadeLicenca != "zero") {
        $planoBronze = 15.90;
        $mensalidade = $planoBronze;
        } else if ($plano == "prata" && $formaPagamento == "anual" && $quantidadeLicenca != "zero") {
            $planoPrata = 19.60;
            $mensalidade = $planoPrata;
        } else if ($plano == "ouro" && $formaPagamento == "anual" && $quantidadeLicenca != "zero") {
            $planoOuro = 23.01;
            $mensalidade = $planoOuro;
        } else if ($plano == "diamante" && $formaPagamento == "anual" && $quantidadeLicenca != "zero") {
            
            switch ($quantidadeLicenca) {
                case "um":
                    $planoDiamante = 26.91;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
                case "dez":
                    $planoDiamante = 26.67;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
                case "quinze":
                    $planoDiamante = 26.50;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
                case "vinte":
                    $planoDiamante = 26.17;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
                case "trinta":
                    $planoDiamante = 25.83;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
                case "quarenta":
                    $planoDiamante = 25.50;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
                case "sessenta":
                    $planoDiamante = 24.90;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
                case "cem":
                    $planoDiamante = 24.50;
                    $mensalidade   = $planoDiamante;
                    $mensalidade;
                    break;
            }
        }
  
    if ($quantidadeLicenca == "zero" && $formaPagamento == "anual" || $formaPagamento == "mensal") {
        $mensalidade = 0.0;
        $mensalidade;
    }
    if ($plano == "bronze" && $formaPagamento == "mensal" && $quantidadeLicenca != "zero") {
        $planoBronze = 39.00;
        $mensalidade = $planoBronze;
    } else if ($plano == "prata" && $formaPagamento == "mensal" && $quantidadeLicenca != "zero") {
        $planoPrata = 49.00;
        $mensalidade = $planoPrata;
    } else if ($plano == "ouro" && $formaPagamento == "mensal" && $quantidadeLicenca != "zero") {
        $planoOuro = 59.00;
        $mensalidade = $planoOuro;
    } else if ($plano == "diamante" && $formaPagamento == "mensal" && $quantidadeLicenca != "zero") {
        
        switch ($quantidadeLicenca) {
            case "um":
                $planoDiamante = 69.00;
                $mensalidade   = $planoDiamante;
                break;
            case "dez":
                $planoDiamante = 59.00;
                $mensalidade   = $planoDiamante;
                break;
            case "quinze":
                $planoDiamante = 57.00;
                $mensalidade   = $planoDiamante;
                break;
            case "vinte":
                $planoDiamante = 55.00;
                $mensalidade   = $planoDiamante;
                break;
            case "trinta":
                $planoDiamante = 53.00;
                $mensalidade   = $planoDiamante;
                break;
            case "quarenta":
                $planoDiamante = 51.00;
                $mensalidade   = $planoDiamante;
                break;
            case "sessenta":
                $planoDiamante = 45.00;
                $mensalidade   = $planoDiamante;
                break;
            case "cem":
                $planoDiamante = 39.00;
                $mensalidade   = $planoDiamante;
                break;
        }
    }
?>
  <blockquote>
      <h1><?php echo "Investimento Inicial: " . "R$ " . $investimentoInicial = (int)$valorObraInstalacao+$mensalidade+$tv32polegadas+$tv40polegadas+$tv43polegadas+$tv49polegadas+
$tv50polegadas+$tv55polegadas+$tv58polegadas+$tv65polegadas+$tv75polegadas+$monitorLFD+$monitorVideoWall+$playerAlphasignage+$playerAlphasignageSecundario+$tvBox;?></h1>
    </blockquote>
    <blockquote>
      <h1><?php echo "Mensalidade: " . "R$ " . $mensalidade; ?></h1>
    </blockquote>
<?php
}
require_once('footer/footer.php');
?>