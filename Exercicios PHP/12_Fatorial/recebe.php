<?php
$nmr=$_POST["numero"];
$rsp=1;
for($nmr;$nmr>=1;$nmr--){
    $rsp*=$nmr;
    echo $nmr,"*";
}
echo "= ",$rsp," ";
?>