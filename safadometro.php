<!DOCTYPE html>
<html>
    <head>
        <title>Safadometro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="estyles.css" />
        <?php
            $d= isset($_GET["nDia"])?$_GET["nDia"]:1;
            $m= isset($_GET["nMes"])?$_GET["nMes"]:1;
            $a= isset($_GET["nAno"])?$_GET["nAno"]:1;
            function somatorio($m) {
                $r2=$m;
                for ($r=1;$r<$m;$r++){
                    $r2+=$r;
                }
                return $r2;
            }
            function safadometro($d,$m,$a) {
                $saf=somatorio($m)+($a/100)*(50-$d);
                $anj=100-$saf;
                echo "<p> Seu nível de safadeza é de:".number_format($saf,2)."%</p><p>E seu nível de anjo é de:". number_format($anj,2)."%</p>";
                If ($saf==$anj){
                    echo "<br/> <p><span id='direita'>Ual, parabens, você parece ser uma pessoa muito mais ou menos.</span></p>";
                }
                elseif ($saf>$anj) {                    
                    echo "<br/> <p><span id='direita'>Ual, parabéns você parece ser uma pessoa muito mais Safada, vai para o inferno... <br/>Ja sabe né!</span></p>";
                }
                else {
                    echo "<br/> <p><span id='direita'>Ual, parabéns você parece ser uma pessoa muito mais Anjo, vai para o céu!</span></p>";
                }
            }
        ?>
    </head>
    <body>
        <div id="content">
            <header>
                <h1>#Safadometro</h1>
            </header>
            <div id="calc">
                <h2>[RESULTADO]</h2>
                <?php
                    echo "<span class='resultado'>";
                    safadometro($d, $m, $a);
                    echo "</span>";
                ?>
                <img class="weslei-aponta" src="wesley-aponta.png"/>
                <a href="index.html" class="botao2">Voltar  </a>
            </div>
            <footer>
                <h3>Safadometro criado por Matheus Martins de Oliveira</h3><p>A partir de um exercicio de uma prova de programação na universidade federal do Ceara.</p>
            </footer>
        </div>
    </body>
</html>