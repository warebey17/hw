<?php
        $hours = 45;
        $rate = 10;
        $total_pay = 475;


        function calculate_payroll($total_pay, $hours, $rate){

                $overtime = 1.5;


                if($hours > 40){
                        echo "$hours > 40\n";

                        $OT_pay = ($hours - 40) * ($rate * $overtime);  // using 40 to calculate the reg pay
                        $reg_pay = (40 * $rate);


                        $total_pay = ($OT_pay + $reg_pay);
                }
                else{
                        $total_pay = ($hours * $rate);

                }
                return $total_pay;
        }
                $final_pay = calculate_payroll($total_pay, $hours, $rate);
                        echo "$final_pay\n";

?>
