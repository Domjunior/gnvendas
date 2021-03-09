<html>
<?php

include ("conexao.php");
require __DIR__ . '/../api/vendor/autoload.php';

use Gerencianet\Exception\GerencianetException;
use Gerencianet\Gerencianet;

$clientId = 'Client_Id_4e4327e045ceb277ed5f62db8c46c399c309e0bf'; // informe seu Client_Id
$clientSecret = 'Client_Secret_bb1ad596c70e1c17089cd27ec860816670412681'; // informe seu Client_Secret

$options = [
    'client_id' => $clientId,
    'client_secret' => $clientSecret,
    'sandbox' => true // altere conforme o ambiente (true = desenvolvimento e false = produção)
];

if (isset($_POST)) {
    
    $item_1 = [
        'name' => $_POST["nome"],
        'amount' => (int) "1",
        'value' => (int) preg_replace("/[^0-9]/", "", (string) $_POST["valor"]) 
        ];

    $items = [
        $item_1
    ];

    $body = ['items' => $items];

    try {
        $api = new Gerencianet($options);
        $charge = $api->createCharge([], $body);
        
        if ($charge["code"] == 200) {

            $params = ['id' => $charge["data"]["charge_id"]];
            $customer = [
                'name' => $_POST["nome_cliente"],
                'cpf' => $_POST["cpf"],
                'phone_number' => $_POST["telefone"]
            ];

            // Formatando a data, convertendo do estino brasileiro para americano.
           // $data_brasil = DateTime::createFromFormat('d/m/Y', $_POST["vencimento"]);
		   // 'expire_at' => $data_brasil->format('Y-m-d'),
           $vencimento = date('Y-m-d', strtotime('+2 days'));
          
            $bankingBillet = [
                'expire_at' => $vencimento,
                'customer' => $customer
            ];

            $payment = ['banking_billet' => $bankingBillet];
            $body = ['payment' => $payment];

            $api = new Gerencianet($options);
            $pay_charge = $api->payCharge($params, $body);
            $linkboleto = $pay_charge["data"]["link"];                        
            $idboleto = $params["id"];
            $sql = "INSERT INTO compras (idboleto, linkboleto) VALUES ('$idboleto','$linkboleto')";
            $confere = mysqli_query($conn, $sql);
            
        } else {

        }
    } catch (GerencianetException $e) {
        print_r($e->code);
        print_r($e->error);
        print_r($e->errorDescription);
    } catch (Exception $e) {
        print_r($e->getMessage());
    }

}

?>

<a href = "<?php echo $linkboleto; ?>"> CLIQUE AQUI PARA ABRIR O BOLETO</a>

</html>
