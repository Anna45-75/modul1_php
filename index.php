<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <title>Document</title>
</head>

<body>
  <!-- Таблица истинности PHP!-->
  <H2 align="center">Таблица истинности PHP</H2> 
    <table>
        <tr>
            <td class="l1">А</td>
            <td class="l1">B</td>
            <td class="l1">!А</td>
            <td class="l1">А||B</td>
            <td class="l1">А&B</td>
            <td class="l1">А xor B</td>
        </tr>
        <tr>
            <td>0</td>
            <td>0</td>
            <td>
           <?php
            $x=!0;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=0;
            $b=0;
            $x=$a || $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=0;
            $b=0;
            $x=$a & $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=0;
            $b=0;
            $x=$a xor $b;
            echo $x;
           ?>
           </td>
        </tr>
        <tr>
            <td>0</td>
            <td>1</td>
            <td>
           <?php
            $x=!0;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=0;
            $b=1;
            $x=$a || $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=0;
            $b=1;
            $x=$a & $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=0;
            $b=1;
            $x=$a xor $b;
            echo $x;
           ?>
           </td>
        </tr>
        <tr>
            <td>1</td>
            <td>0</td>
            <td>
           <?php
            $x=!1;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=1;
            $b=0;
            $x=$a || $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=1;
            $b=0;
            $x=$a & $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=1;
            $b=0;
            $x=$a xor $b;
            echo $x;
           ?>
           </td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>
           <?php
            $x=!1;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=1;
            $b=1;
            $x=$a || $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=1;
            $b=1;
            $x=$a & $b;
            echo $x;
           ?>
            </td>
            <td>
           <?php
            $a=1;
            $b=1;
            $x=$a xor $b;
            echo $x;
           ?>
           </td>
        </tr>
</table>

  <!-- Таблица сравнения!-->
  <H2 align="center">Гибкое сравнение в PHP</H2> 
    <table>
        <tr>
            <td class="l1"></td>
            <td class="l1">true</td>
            <td class="l1">false</td>
            <td class="l1">1</td>
            <td class="l1">0</td>
            <td class="l1">-1</td>
            <td class="l1">"1"</td>
            <td class="l1">null</td>
            <td class="l1">"php"</td>
        </tr>
        <tr>
            <td class="l1">true</td>
            <td>
            <?php
            $a=true;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">false</td>
            <td>
            <?php
            $a=false;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">1</td>
            <td>
            <?php
            $a=1;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">0</td>
            <td>
            <?php
            $a=0;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">-1</td>
            <td>
            <?php
            $a=-1;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">"1"</td>
            <td>
            <?php
            $a="1";
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">null</td>
            <td>
            <?php
            $a=null;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">"php"</td>
            <td>
            <?php
            $a="php";
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
</table>

<H2 align="center">Жёсткое сравнение в PHP</H2> 
    <table>
        <tr>
            <td class="l1"></td>
            <td class="l1">true</td>
            <td class="l1">false</td>
            <td class="l1">1</td>
            <td class="l1">0</td>
            <td class="l1">-1</td>
            <td class="l1">"1"</td>
            <td class="l1">null</td>
            <td class="l1">"php"</td>
        </tr>
        <tr>
            <td class="l1">true</td>
            <td>
            <?php
            $a=true;
            $b=true;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=false;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=0;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=-1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b="1";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b=null;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=true;
            $b="php";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">false</td>
            <td>
            <?php
            $a=false;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=false;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">1</td>
            <td>
            <?php
            $a=1;
            $b=true;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=false;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=0;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b="1";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b=null;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=1;
            $b="php";
            $x=$a==$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">0</td>
            <td>
            <?php
            $a=0;
            $b=true;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=false;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=0;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=-1;
            $x=$a==$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b="1";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b=null;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=0;
            $b="php";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">-1</td>
            <td>
            <?php
            $a=-1;
            $b=true;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=false;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=0;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=-1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b="1";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b=null;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=-1;
            $b="php";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">"1"</td>
            <td>
            <?php
            $a="1";
            $b=true;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=false;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=0;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=-1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b="1";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b=null;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="1";
            $b="php";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">null</td>
            <td>
            <?php
            $a=null;
            $b=true;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=false;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=0;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=-1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b="1";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b=null;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a=null;
            $b="php";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
        </tr>
        <tr>
            <td class="l1">"php"</td>
            <td>
            <?php
            $a="php";
            $b=true;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=false;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=0;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=-1;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b="1";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b=null;
            $x=$a===$b;
            echo $x;
           ?>
            </td>
            <td>
            <?php
            $a="php";
            $b="php";
            $x=$a===$b;
            echo $x;
           ?>
            </td>
        </tr>
</table>
</body>
</html>