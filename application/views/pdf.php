<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client :  <?php echo $nom; ?></h1>
    <h1>Date :  <?php echo $date; ?></h1>
<?php $a = json_decode( $_COOKIE['tab'], true );
                   //var_dump(count($a));
                   $somme = 0;
                   for($i=0;$i<count($a);$i++){
                       $somme += ($a[$i]['qte']*$a[$i]['pu']);
                   } ?>
                    <table>
                        <tr>
                            <th>Produit</th>
                            <th>Quantite</th>
                            <th>Prix(Ar)</th>
                        </tr>
                        <?php for($i=0;$i<count($a);$i++){ ?>
                        <tr>
                            <td> <?php echo $a[$i]['nomProduit']; ?></td>
                            <td> <?php echo $a[$i]['qte']; ?></td>
                            <td> <?php echo $a[$i]['pu']; ?></td>
                        </tr>
                        <?php } ?>
                        <hr>
                        <tr>
                            <td colspan="2">TOTAL(Ar)</td>
                            <td><?php echo $somme; ?></td>
                        </tr>
                </table>
</body>
<script>localStorage.clear();</script>
</html>