
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form  method="post" action="index.php">

    <div>

    Nome: <input type="text" name="nome" id="nome">
    Valor: <input type="text" name="valor" id="valor" >

    </div>
    

    <div>
    Visa<input type="radio" value="visa" name="credit_card" id="">
    Mastercard<input type="radio" value="mastercard" name="credit_card" id="">
    Nubank<input type="radio" value="nubank" name="credit_card" id="">
    BTG Pactual<input type="radio" value="btg" name="credit_card" id="">
    </div>
    
    <input type="submit" value="Confirm" name="Confirm"/>


    </form>


    <?php 
    

    if (isset($_POST["Confirm"])) {
        
        
        $nome = $_POST['nome'] ?? null;
        $valor = $_POST['valor'] ?? null;

        if (!$nome || !$valor) {
            echo "Nome do produto e valor são obrigatórios!";
            
        } else {

            switch ($_POST["credit_card"]) {
                case 'visa':
                    echo "<p> Nome do produto = $nome - Valor = $valor <br> Forma de pagamento: Visa  </p>";
                    break;

                case 'mastercard':

                    echo "<p> Nome do produto = $nome - Valor = $valor <br> Forma de pagamento: Mastercard  </p>";
                    break;

                case 'nubank': 
                    echo "<p> Nome do produto = $nome - Valor = $valor <br> Forma de pagamento: Nubank  </p>";
                    break;
                
                case 'btg':
                    echo "<p> Nome do produto = $nome - Valor = $valor <br> Forma de pagamento: BTG Pactual  </p>";
                    break;

                default:
                    # code...
                    break;
            }


        }
        
        


        

    }
    

     
    
    ?>

</body>

</html>