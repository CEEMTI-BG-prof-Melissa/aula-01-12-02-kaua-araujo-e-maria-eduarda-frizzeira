<html>
    <head>
        <title> AULA 03 -PHP </title>
    <body>
        <?php
            $nome1 = "Duda Frizzeira ";
            $nome2 = "Kauã ";

            $n1 = 10;
            $n2 = 2;

            $soma =$n1+$n2;

            echo " Meu nome é " .$nome1 . " e minha dupla é " . $nome2;
            echo "<br>Meu nome é $nome1 e minha dupla é $nome2 ";
            echo "<br><br>A soma de $n1 com $n2 é igual a $soma.";

            echo "<br><br>A subtração dos números $n1 e $n2 é igual a: " .($n1-$n2);

            echo "<br><br>A multiplicação dos números $n1 e $n2 é igual a: " .($n1*$n2);

            echo " <br><br>A divisão dos números reais $n1 e $n2 é igual a: " .($n1/$n2);

            echo "<br><br>A divisão de um módulo são $n1 e $n2 é igual a: " .($n1%$n2);
        ?>
    </body>
</html>
