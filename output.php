<?php
    require_once 'data_karyawan.php';
    $karyawan = array(
        array("Nurul Carolina S", "Batam, 14-Jan-2001", "Perempuan",  "Senior", "Fulltime"),
        array("Rahayu Angkasa", "Cikarang, 17-Jul-1998", "Perempuan", "Junior", "Partime"),
        array("Adinda Puteri", "Solo, 3-Jul-2000", "Perempuan", "Amateur", "Fulltime"),
        array("Rifky Fathur", "Jakarta, 21-Jan-1998", "Laki-laki", "Senior", "Parttime"),
        array("Anisa Putri", "Banten, 18-Mei-1997", "Perempuan", "Senior", "Fulltime")
    );
    $data_karyawan = array();
    $arrayNama = ["Nurul Carolina S", "Rahayu Angkasa", "Adinda Puteri", "Rifky Fathur","Anisa Putri"];
    $arrayTTL = ["Batam, 14-Jan-2001", "Cikarang, 17-Jul-1998",  "Solo, 3-Jul-2000","Jakarta, 21-Jan-1998", "Banten, 18-Mei-1997"];
    $arrayJenisKelamin = ["Perempuan", "Perempuan","Perempuan","Laki-laki","Perempuan"];
    $arrayLevel = ["Senior", "Junior", "Amateur", "Senior","Senior"];
    $arrayStatus = ["Fulltime", "Parttime", "Fulltime", "Parttime", "Fulltime"];
    
    for ($i =0; $i<5; $i++){
        if($arrayStatus[$i] == "Fulltime"){
            $data_karyawan[$i] = new Fulltime ($arrayNama[$i], $arrayJenisKelamin[$i], $arrayTTL[$i]);
        }
        else if($arrayStatus[$i] == "Parttime"){
            $data_karyawan[$i] = new Parttime ($arrayNama[$i], $arrayJenisKelamin[$i], $arrayTTL[$i]);
        }
    $data_karyawan[$i]->setStatus($arrayStatus[$i]);
    $data_karyawan[$i]->setLevel($arrayLevel[$i]);
    $data_karyawan[$i]->hitungGaji();
    }


   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>Data Karyawan</h1>
    <form action="./" method="POST">
    <p>Filter By : 
        <select name="option"  id = "filter">
            <option value="all">All</option>
            <option value="fulltime">Fulltime</option>
            <option value="parttime">Parttime</option>
        </select>
    </form>
    </p>
    <table >
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin </th>
                <th>Level</th>
                <th>Status</th>
                <th>Gaji</th>
            </tr>
        </thead>
        
        <?php
        
            for ($i = 0; $i<5; $i++){ 
                    
                    $j=$i+1;
                    echo "<tr>
                            <td>$j</td>";
                    echo "<td>".$data_karyawan[$i]->getNama()."</td>";
                    echo "<td>".$data_karyawan[$i]->getTTL()."</td>";
                    echo "<td>".$data_karyawan[$i]->getJenisKelamin()."</td>";
                    echo "<td>".$data_karyawan[$i]->getLevel()."</td>";
                    echo "<td>".$data_karyawan[$i]->getStatus()."</td>";
                    echo "<td>".$data_karyawan[$i]->getGaji()."</td>";
                    echo "</tr>";
                    
            }                
                
        

        
                
        ?>  
    </table>
</body>
</html>