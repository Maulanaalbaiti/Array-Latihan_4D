<?php 

//array, 
//array terdiri dari key => value
//contoh [Indonesia], key = 0, value = 'Indonesia'
$ASEAN = ['Indonesia','Singapura','Malaysia','Brunei','Thailand','Laos','Fiphina','Myanmar'];
//padanannya $ASEANS = [ 0 => 'indonesia', 1 => 'Singapura' dst ]
//mencetak ke browser, untuk keperluan user
foreach($ASEAN as $data){
    echo $data. ',';
}
//debugging untuk keperluan programmer
echo "<pre>";


//asosiative array, key ditentukan sendiri
$ASEAN = [
        'Negara' => 'Indonesia',
        'Ibukota' => 'D.K.I. Jakarta',
        'Kode Telepon' => '+62'
        
];


$ASEANS = [
    [
        'Negara' => 'Indonesia',
        'Ibukota' => 'D.K.I. Jakarta',
        'Kode_Telepon' => '+62'
        
    ],
    [
        'Negara' => 'Singapura',
        'Ibukota' => 'Singapura',
        'Kode_Telepon' => '+65'
        
    ],
    [
        'Negara' => 'Malaysia',
        'Ibukota' => 'kuala Lumpur',
        'Kode_Telepon' => '+60'
        
    ],
    [
        'Negara' => 'Brunei',
        'Ibukota' => 'Bandar Seri Begawan',
        'Kode_Telepon' => '+673'
        
    ],
    [
        'Negara' => 'Thailand',
        'Ibukota' => 'Bangkok',
        'Kode_Telepon' => '+66'
        
    ],
    [
        'Negara' => 'Laos',
        'Ibukota' => 'Vientiane',
        'Kode_Telepon' => '+856'
        
    ],
    [
        'Negara' => 'Filiphina',
        'Ibukota' => 'Manila',
        'Kode_Telepon' => '+63'
        
    ],
    [
        'Negara' => 'Myanmar',
        'Ibukota' => 'Naypyidawa',
        'Kode_Telepon' => '+95'
        
    ],
];
foreach($ASEANS as $ASEAN){
    echo "Negara: ".$ASEAN['Negara']."<br/>";
    echo "Ibukota: ".$ASEAN['Ibukota']."<br/>";
    echo "Kode_Telepon: ".$ASEAN['Kode_Telepon']."<br/>";
}
  ?> 
<table align="center" border="2" cellpadding="3">
    <tr>
        <td>Negara</td>
        <td>Ibukota</td>
        <td>Kode Telepon</td>
       </tr>
<?php

foreach($ASEANS as $ASEAN){
    echo "<tr>";
    echo "
        <td>".$ASEAN['Negara']."</td>
        <td>".$ASEAN['Ibukota']."</td>
        <td>".$ASEAN['Kode_Telepon']."</td>";
    echo "</tr>";
   
}
?>
</table>
