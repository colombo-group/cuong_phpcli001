<?php
    require_once('vendor/autoload.php');
    $climate = new League\CLImate\CLImate;
   $climate->arguments->add([
    'num' => [
        'longPrefix'  => 'num'
    ]
]);
$climate->arguments->parse();
$num = $climate->arguments->get('num');
    $defaults = [39, 30, 31, 32, 33, 34, 35, 36, 37, 90, 91, 92, 93, 94, 95, 96, 97];
    if($num) {
        for($i = 1; $i <= $num; $i ++) {
            $str = '';
            for($j = 1; $j <= $num; $j ++) {
                if($j <= $i) {
                    $str .= $j;
                }

            }
            $climate->style->addColor('rage', $defaults[array_rand($defaults, 1)]);
            $climate->rage($str);
        }
        return 'c';
    } else {
        $climate->out('Digic Triangle PHP Program');
        $input = $climate->input('Input one integer [5]: ');
        $input->accept(function($response) {
            for($i = 1; $i <= $response; $i ++) {
                $str = '';
                for($j = 1; $j <= $response; $j ++) {
                    if($j <= $i) {
                        $str .= $j;
                    }

                }
                $climate = new League\CLImate\CLImate;
                $defaults = [39, 30, 31, 32, 33, 34, 35, 36, 37, 90, 91, 92, 93, 94, 95, 96, 97];
                $climate->style->addColor('rage', $defaults[array_rand($defaults, 1)]);
                $climate->rage($str);
            }
            return 'c';
        });

        $response = $input->prompt();
    }

