<!DOCTYPE html>
<head>
    <title>Contoh Loop</title>
</head>
<body>
    <h2>SIMPLE FOR LOOP</h2>
    <?php for($i=0;$i<10;$i++){echo $i+1 . " ";} ?>
    <br>
    
    <h2>FORM FOR LOOP</h2>
    <form action="">
        tanggal
        <select>
        <?php for($tgl=1;$tgl<32;$tgl++): ?>
            <option value="<?= $tgl ?>"><?= $tgl ?></option>
        <?php endfor ?>
        </select>
    </form>
    <br>

    <h2>WHILE LOOP</h2>
    <?php $i=1;
    while($i<=5){ // check then execute
        echo "$i ";
        $i++;
    }
    ?>
    <br>

    <h2>DO WHILE LOOP</h2>
    <?php $i=1;
    do { // execute then check
        echo "$i ";
        $i++;
    } while ($i<=5);
    ?>
    <br>

    <h2>FOREACH</h2>
    <select><?php
        $hari=["senin","selasa","rabu","kamis","jumat","sabtu","minggu"];
        foreach ($hari as $key => $value):?>
            <option value="<?= $key+1 ?>"><?= $value ?></option>
        <?php endforeach ?>
    </select>
</body>
</html>