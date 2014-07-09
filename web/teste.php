<?php
//header('content-type:text/json; charset=UTF-8');
//$arquivo = file_get_contents('rj.txt');

//phpinfo();

$url = "http://www.cidades.ibge.gov.br/download/mapa_e_municipios.php?lang=&uf=rj";
$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($curl);

echo curl_error($curl);

die(var_dump($output));

curl_close($curl);

$DOM = new DOMDocument;
$DOM->loadHTML($output);

//get all H1
$items = $DOM->getElementsByTagName('h1');

//display all H1 text
 for ($i = 0; $i < $items->length; $i++){
     echo $items->item($i)->nodeValue . "<br/>";
 }

?>

<!--<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#teste').load("rj.html #municipios", 
        function(){
            $('tr').each(function(){
                console.log($(this).children('td.nome').text());
            });
        });
    });
</script>

<div id="teste" style="height: 500px; width: 700px"></div>-->