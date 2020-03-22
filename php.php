<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
</head>

<body>
    <form action="php.php" method="post">
        <h1>Počítání IP Adres (pouze s dvěmi podsítěmi)</h1>
        <p>Vložte IP adresu</p>
        <input type="number" class="input" placeholder="192" id="d1" name="o1" min="0" max="255" value="" required="">
        <input type="number" class="input" placeholder="168" id="d2" name="o2" min="0" max="255" value="" required="">
        <input type="number" class="input" placeholder="1" id="d3" name="o3" min="0" max="255" value="" required="">
        <input type="number" class="input" placeholder="0" id="d4" name="o4" min="0" max="255" value="" required="">
        /
        <input type="number" id="prefix" placeholder="24" class="input" name="prefix" min="0" max="32" value="" required="">
        <input type="submit" name="spočítej" value="Vypočítej">

    </form>
    <?php
        // ip adresa na binár //
        echo "<br>";
        
        $d1 = filter_input(INPUT_POST, "o1");
        $d2 = filter_input(INPUT_POST, "o2");
        $d3 = filter_input(INPUT_POST, "o3");
        $d4 = filter_input(INPUT_POST, "o4");
        $prefix = filter_input(INPUT_POST, "prefix");
        $bin = str_pad(decbin($d1),8,"0", STR_PAD_LEFT);
        $bin2 = str_pad(decbin($d2),8,"0", STR_PAD_LEFT);
        $bin3 = str_pad(decbin($d3),8,"0", STR_PAD_LEFT);
        $bin4 = str_pad(decbin($d4),8,"0", STR_PAD_LEFT);


        echo "<br>";
        echo "<b>decimal:</b>";
        echo $d1;
        echo ".";
        echo $d2;
        echo ".";
        echo $d3;
        echo ".";   
        echo $d4;
        echo "<br>";

        echo "<b>binár:</b>";
        echo $bin;
        echo ".";
        echo $bin2;
        echo ".";
        echo $bin3;
        echo ".";
        echo $bin4;
       

      
        $maska1;

switch($prefix){
case 1:
$maska1 = "128.0.0.0";
break;
case 2:
$maska1 = "192.0.0.0";
break;
case 3:
$maska1 = "224.0.0.0";
break;
case 4:
$maska1 = "240.0.0.0";
break;
case 5:
$maska1 = "248.0.0.0";
break;
case 6:
$maska1 = "252.0.0.0";
break;
case 7:
$maska1 = "254.0.0.0";
break;
case 8:
$maska1 = "255.0.0.0";
break;
case 9:
$maska1 = "255.128.0.0";
break;
case 10:
$maska1 = "255.192.0.0";
break;
case 11:
$maska1 = "255.224.0.0";
break;
case 12:
$maska1 = "255.240.0.0";
break;
case 13:
$maska1 = "255.248.0.0";
break;
case 14:
$maska1 = "255.252.0.0";
break;
case 15:
$maska1 = "255.254.0.0";
break;
case 16:
$maska1 = "255.255.0.0";
break;
case 17:
$maska1 = "255.255.128.0";
break;
case 18:
$maska1 = "255.255.192.0";
break;
case 19:
$maska1 = "255.255.224.0";
break;
case 20:
$maska1 = "255.255.240.0";
break;
case 21:
$maska1 = "255.255.248.0";
break;
case 22:
$maska1 = "255.255.252.0";
break;
case 23:
$maska1 = "255.255.254.0";
break;
case 24:
$maska1 = "255.255.255.0";
break;
case 25:
$maska1 = "255.255.255.128";
break;
case 26:
$maska1 = "255.255.255.192";
break;
case 27:
$maska1 = "255.255.255.224";
break;
case 28:
$maska1 = "255.255.255.240";
break;
case 29:
$maska1 = "255.255.255.252";
break;
case 30:
$maska1 = "255.255.255.254";
break;
case 31:
$maska1 = "255.255.255.255";
break;
case 32:
$maska1 = "255.255.255.11111111";
break;
}




    $maska;
        switch($prefix){
            case 1:
                $maska = "10000000.00000000.00000000.00000000";
            break;
            case 2:
                $maska = "11000000.00000000.00000000.00000000";
            break;
            case 3:
                $maska = "11100000.00000000.00000000.00000000";
            break;
            case 4:
                $maska = "11110000.00000000.00000000.00000000";
            break;
            case 5:
                $maska = "11111000.00000000.00000000.00000000";
            break;
            case 6:
                $maska = "11111100.00000000.00000000.00000000";
            break;
            case 7:
                $maska = "11111110.00000000.00000000.00000000";
            break;
            case 8:
                $maska = "11111111.00000000.00000000.00000000";
            break;
            case 9:
                $maska = "11111111.10000000.00000000.00000000";
            break;
            case 10:
                $maska = "11111111.11000000.00000000.00000000";
            break;
            case 11:
                $maska = "11111111.11100000.00000000.00000000";
            break;
            case 12:
                $maska = "11111111.11110000.00000000.00000000";
            break;
            case 13:
                $maska = "11111111.11111000.00000000.00000000";
            break;
            case 14:
                $maska = "11111111.11111100.00000000.00000000";
            break;
            case 15:
                $maska = "11111111.11111110.00000000.00000000";
            break;
            case 16:
                $maska = "11111111.11111111.00000000.00000000";
            break;
            case 17:
                $maska = "11111111.11111111.10000000.00000000";
            break;
            case 18:
                $maska = "11111111.11111111.11000000.00000000";
            break;
            case 19:
                $maska = "11111111.11111111.11100000.00000000";
            break;
            case 20:
                $maska = "11111111.11111111.11110000.00000000";
            break;
            case 21:
                $maska = "11111111.11111111.11111000.00000000";
            break;
            case 22:
                $maska = "11111111.11111111.11111100.00000000";
            break;
            case 23:
                $maska = "11111111.11111111.11111110.00000000";
            break;
            case 24:
                $maska = "11111111.11111111.11111111.00000000";
            break;
            case 25:
                $maska = "11111111.11111111.11111111.10000000";
            break;
            case 26:
                $maska = "11111111.11111111.11111111.11000000";
            break;
            case 27:
                $maska = "11111111.11111111.11111111.11100000";
            break;
            case 28:
                $maska = "11111111.11111111.11111111.11110000";
            break;
            case 29:
                $maska = "11111111.11111111.11111111.11111000";
            break;
            case 30:
                $maska = "11111111.11111111.11111111.11111100";
            break;
            case 31:
                $maska = "11111111.11111111.11111111.11111110";
            break;
            case 32:
                $maska = "11111111.11111111.11111111.11111111";
            break;
        }
        echo "<br>";
        echo "<br><big><big>maska:</big></big>";
        echo "<br>";
        echo "<b>decimal:</b>";
        echo $maska1;
        echo "<br>";
        echo "<b>binár:</b>";
        echo $maska;

        $host;
switch($prefix){
    case 24:
        $host = "254";
    break;
    case 25:
        $host = "126";
    break;
    case 26:
        $host = "62";
    break;
    case 27:
        $host = "30";
    break;
    case 28:
        $host = "14";
    break;
    case 29:
        $host = "6";
    break;
    case 30:
        $host = "2";
    break;
    case 31:
        $host = "0";
    break;
    case 32:
        $host = "0";
    break;
}



$host1;
switch($prefix){
    case 24:
        $host1 = "11111110";
    break;
    case 25:
        $host1 = "01111110";
    break;
    case 26:
        $host1 = "00111110";
    break;
    case 27:
        $host1 = "00011110";
    break;
    case 28:
        $host1 = "00001110";
    break;
    case 29:
        $host1 = "00000110";
    break;
    case 30:
        $host1 = "00000100";
    break;
    case 31:
        $host1 = "00000000";
    break;
    case 32:
        $host1 = "00000000";
    break;
}

$host3;
switch($prefix){
    case 24:
        $host3 = "11111111";
    break;
    case 25:
        $host3 = "01111111";
    break;
    case 26:
        $host3 = "00111111";
    break;
    case 27:
        $host3 = "00011110";
    break;
    case 28:
        $host3 = "00001111";
    break;
    case 29:
        $host3 = "00000111";
    break;
    case 30:
        $host3 = "00000011";
    break;
    case 31:
        $host3 = "00000010";
    break;
    case 32:
        $host3 = "00000000";
    break;
}


echo "<br>";
echo "<big><big>First host:</big></big>";

echo "<br>";
echo "<b>decimal:</b>";
echo $d1;
echo ".";
echo $d2;
echo ".";
echo $d3;
echo ".";   
echo "001";
echo "<br>";
echo "<b>binár:</b>";
    echo $bin;
    echo ".";
    echo $bin2;
    echo ".";
    echo $bin3;
    echo ".";
    echo "00000001";
    

echo "<br>";
echo "<big><big>Last host:</big></big>";

echo "<br>";
echo "<b>decimal:</b>";
echo $d1;
echo ".";
echo $d2;
echo ".";
echo $d3;
echo ".";   
echo $host;
echo "<br>";
echo "<b>binár:</b>";
    echo $bin;
    echo ".";
    echo $bin2;
    echo ".";
    echo $bin3;
    echo ".";
    echo $host1;


echo "<br>";
echo "<big><big>Broadcast:</big></big>";
echo "<br>";
echo "<b>decimal:</b>";
echo $d1;
echo ".";
echo $d2;
echo ".";
echo $d3;
echo ".";   
echo $host+1;
echo "<br>";
echo "<b>binár:</b>";
    echo $bin;
    echo ".";
    echo $bin2;
    echo ".";
    echo $bin3;
    echo ".";
    echo $host3; 

echo "<br>";
echo "<big><big>Host:</big></big>";
echo $host;

$maska3;

switch($prefix){
case 1:
case 24:
    $maska3 = "255.255.255.128";
    break;
    case 25:
    $maska3 = "255.255.255.192";
    break;
    case 26:
    $maska3 = "255.255.255.224";
    break;
    case 27:
    $maska3 = "255.255.255.240";
    break;
    case 28:
    $maska3 = "255.255.255.248";
    break;
    case 29:
    $maska3 = "255.255.255.252";
    break;
    case 30:
    $maska3 = "255.255.255.252";
    break;
    case 31:
    $maska3 = "255.255.254.";
    break;
    case 32:
    $maska3 = "255.255.255.255";
    break;
    }

echo "<h2>1.podsíť </h2>";

echo "<b>maska </b>";
echo "<br>";
echo "$maska3";
echo "<br>";



echo "<b>first host </b>";
echo "<br>";
echo $d1;
echo ".";
echo $d2;
echo ".";
echo $d3;
echo ".";   
echo "001";
echo "<br>";


$lasthost;
switch($prefix){
    case 1:
    case 24:
        $lasthost = "$d1.$d2.$d3.126";
        break;
        case 25:
        $lasthost = "$d1.$d2.$d3.062";
        break;
        case 26:
        $lasthost = "$d1.$d2.$d3.030";
        break;
        case 27:
        $lasthost = "$d1.$d2.$d3.014";
        break;
        case 28:
        $lasthost = "$d1.$d2.$d3.006";
        break;
        case 29:
        $lasthost = "$d1.$d2.$d3.002";
        break;
        case 30:
        $lasthost = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        case 31:
        $lasthost = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        case 32:
        $lasthost = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        }
    
        echo "<b>Last host  </b>";
        echo "<br>";
        echo "$lasthost";
      
        
        $broadcast;
        switch($prefix){
            case 1:
            case 24:
                $broadcast = "$d1.$d2.$d3.127";
                break;
                case 25:
                $broadcast = "$d1.$d2.$d3.063";
                break;
                case 26:
                $broadcast = "$d1.$d2.$d3.031";
                break;
                case 27:
                $broadcast = "$d1.$d2.$d3.015";
                break;
                case 28:
                $broadcast = "$d1.$d2.$d3.007";
                break;
                case 29:
                $broadcast = "$d1.$d2.$d3.003";
                break;
                case 30:
                $broadcast = "tolik podsíti nelze v takovém rozsahu vytvořit";
                break;
                case 31:
                $broadcast = "tolik podsíti nelze v takovém rozsahu vytvořit";
                break;
                case 32:
                $broadcast = "tolik podsíti nelze v takovém rozsahu vytvořit";
                break;
                }

                echo "<br>";
                echo "<b>broadcast  </b>";
                echo "<br>";
                echo "$broadcast";
              
                $host5;
                switch($prefix){
                    case 1:
                    case 24:
                        $host5 = "126";
                        break;
                        case 25:
                            $host5 = "62";
                        break;
                        case 26:
                            $host5 = "30";
                        break;
                        case 27:
                            $host5 = "14";
                        break;
                        case 28:
                            $host5 = "6";
                        break;
                        case 29:
                            $host5 = "2";
                        break;
                        case 30:
                            $host5 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                        break;
                        case 31:
                            $host5 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                        break;
                        case 32:
                            $host5 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                        break;
                        }

                        echo "<br>";
                        echo "<b>host  </b>";
                        echo "<br>";
                        echo "$host5";












                        $maska4;

switch($prefix){
case 1:
case 24:
    $maska4 = "255.255.255.128";
    break;
    case 25:
    $maska4 = "255.255.255.192";
    break;
    case 26:
    $maska4 = "255.255.255.224";
    break;
    case 27:
    $maska4 = "255.255.255.240";
    break;
    case 28:
    $maska4 = "255.255.255.248";
    break;
    case 29:
    $maska4 = "255.255.255.252";
    break;
    case 30:
    $maska4 = "tolik podsíti nelze v takovém rozsahu vytvořit";
    break;
    case 31:
    $maska4 = "tolik podsíti nelze v takovém rozsahu vytvořit";
    break;
    case 32:
    $maska4 = "tolik podsíti nelze v takovém rozsahu vytvořit";
    break;
    }

echo "<h2>2.podsíť </h2>";

echo "<b>maska </b>";
echo "<br>";
echo "$maska4";
echo "<br>";


$firsthost1;
switch($prefix){
    case 1:
    case 24:
        $firsthost1 = "$d1.$d2.$d3.129";
        break;
        case 25:
            $firsthost1 = "$d1.$d2.$d3.065";
        break;
        case 26:
            $firsthost1 = "$d1.$d2.$d3.033";
        break;
        case 27:
            $firsthost1 = "$d1.$d2.$d3.017";
        break;
        case 28:
            $firsthost1 = "$d1.$d2.$d3.009";
        break;
        case 29:
            $firsthost1 = "$d1.$d2.$d3.005";
        break;
        case 30:
            $firsthost1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        case 31:
            $firsthost1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        case 32:
            $firsthost1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        }

        echo "<b>first host </b>";
        echo "<br>";
        echo "$firsthost1";
        echo "<br>";

$lasthost1;
switch($prefix){
    case 1:
    case 24:
        $lasthost1 = "$d1.$d2.$d3.254";
        break;
        case 25:
        $lasthost1 = "$d1.$d2.$d3.126";
        break;
        case 26:
        $lasthost1 = "$d1.$d2.$d3.062";
        break;
        case 27:
        $lasthost1 = "$d1.$d2.$d3.030";
        break;
        case 28:
        $lasthost1 = "$d1.$d2.$d3.014";
        break;
        case 29:
        $lasthost1 = "$d1.$d2.$d3.006";
        break;
        case 30:
        $lasthost1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        case 31:
        $lasthost1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        case 32:
        $lasthost1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
        break;
        }
    
        echo "<b>Last host  </b>";
        echo "<br>";
        echo "$lasthost1";
      
        
        $broadcast1;
        switch($prefix){
            case 1:
            case 24:
                $broadcast1 = "$d1.$d2.$d3.255";
                break;
                case 25:
                $broadcast1 = "$d1.$d2.$d3.127";
                break;
                case 26:
                $broadcast1 = "$d1.$d2.$d3.063";
                break;
                case 27:
                $broadcast1 = "$d1.$d2.$d3.031";
                break;
                case 28:
                $broadcast1 = "$d1.$d2.$d3.015";
                break;
                case 29:
                $broadcast1 = "$d1.$d2.$d3.007";
                break;
                case 30:
                $broadcast1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                break;
                case 31:
                $broadcast1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                break;
                case 32:
                $broadcast1 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                break;
                }

                echo "<br>";
                echo "<b>broadcast  </b>";
                echo "<br>";
                echo "$broadcast1";
              
                $host5;
                switch($prefix){
                    case 1:
                    case 24:
                        $host5 = "126";
                        break;
                        case 25:
                            $host5 = "62";
                        break;
                        case 26:
                            $host5 = "30";
                        break;
                        case 27:
                            $host5 = "14";
                        break;
                        case 28:
                            $host5 = "6";
                        break;
                        case 29:
                            $host5 = "2";
                        break;
                        case 30:
                            $host5 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                        break;
                        case 31:
                            $host5 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                        break;
                        case 32:
                            $host5 = "tolik podsíti nelze v takovém rozsahu vytvořit";
                        break;
                        }

                        echo "<br>";
                        echo "<b>host  </b>";
                        echo "<br>";
                        echo "$host5";





    ?>





</body>
</html>