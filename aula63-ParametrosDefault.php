<?php

function login($user="root",$key="123"){
    echo "O usuario e: ", $user,"<br>";
    echo "A senha e: ", $key,"<br>";
}

login();
echo "<br>";;
login("Ola","1234");