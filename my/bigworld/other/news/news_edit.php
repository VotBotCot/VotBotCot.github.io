<?php

$login = $_GET['login'];
$password = $_GET['password'];
$text = $_GET['text'];
$d = $_GET['d']

$on = file_exists("adm/$login");

$news = file_get_contents("news.txt");

$password3 = file_get_contents("adm_pas/$login/password.txt");
    
$passwordto = md5($password);
$passwordto = md5($passwordto);

if ( $on == true) {
    
    if ( $passwordto == $password3) {
       if ($text != '' ) {
       		if ($d != "+") {
       			if ($d == "t") {
       				$o = $text;
                		file_put_contents("news.txt", $o);
                       		echo $o;
       			} else {
                		file_put_contents("news.txt", "");
                        	echo $o;
       			}
       			}
       		} else {
       		        $o = $news + "\n" + $text;
                	file_put_contents("news.txt", $o);
                        echo $o;
       		}

            }
        }
    } else {
        echo "ERROR";
    }
}
?>
