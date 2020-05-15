<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment_week4</title>
</head>
<body>
<h1></h1>
    <?php
        require_once(__DIR__ . '/classes/aba.php');
        require_once(__DIR__ . '/classes/pipay.php');
        require_once(__DIR__ . '/classes/wing.php');

        $paymentMethod = [
            new aba("Item 1", 1, 5),
            new wing("Item 2", 2, 3),
            new aba("Item 3", 4, 1),
            new aba("Item 4", 5, 1),
            new pipay("Item 5", 6, 1),
            new aba("Item 6", 10,1),
            new wing("Item 7", 15, 1),
            new wing("Item 8", 2, 1) 
        ];

        
        echo '<h1>1. Number of sales by ABA method</h1>';
        displayaba($paymentMethod);

        echo '<h1>2. Number of sales by PiPay and Wing method</h1>';
        displayPiPayandWing($paymentMethod);

        echo '<h1>3. Display all sales ordering by biggest total amount</h1>';
        function displayAll($paymentMethod){
            echo '<table border = "1">';
            foreach ($paymentMethod as $payment) {
                echo '<tr>';
                    echo '<td>' .$payment->getitem() . '</td>';
                    echo '<td>' . get_class($payment) . '</td>';
                    echo '<td>' . $payment->gettotal() . '</td>';
                echo '</tr>';    
            }
        
            echo '</table>';
        
        }
        $clonePaymentMethod = $paymentMethod;
        
        usort ($clonePaymentMethod, function ($item1, $item2)
        {
            return $item2->gettotal() <=> $item1 -> gettotal();
        });
        displayAll($clonePaymentMethod);

        
    ?>
    
</body>
</html>