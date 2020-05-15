<?php
//FOR ABA
    function displayaba($paymentMethod)
    {
        echo '<table border = "1">';
        foreach($paymentMethod as $payment){
            if(get_class($payment) == 'aba'){
                echo '<tr>';
                    echo '<td>' . $payment->getitem() . '<td>';
                    echo '<td>' . get_class($payment) . '<td>';
                    echo '<td>' . $payment->gettotal() . '<td>';
                echo '<tr>';
            } 
        }
        echo '</table>';
    }

    function displayPiPayandWing($paymentMethod)
    {
        echo '<table border = "1">';

        foreach($paymentMethod as $payment){
            if(get_class($payment) == 'pipay' || get_class($payment) == 'wing'){
                echo '<tr>';
                    echo '<td>' . $payment->getitem() . '<td>';
                    echo '<td>' . get_class($payment) . '<td>';
                    echo '<td>' . $payment->gettotal() . '<td>';
                echo '<tr>';
            } 
        }
        echo '</table>';   
    }
?>