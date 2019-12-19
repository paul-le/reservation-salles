<!DOCTYPE html>
<html>
<head>
	<title>Planning</title>
</head>
<body>
	<main>
		<style>
    section{
        padding: 20px;
    }
    td{
        border: 1px solid black;
        padding: 40px ;
        width: 20%;
    }

    th{
    	padding-bottom: 5% ;
    }
</style>
<section>
    <h1>PLANNING</h1>
    <table>
        <tr>
            
        </tr>
        <tr>
           <th> </th>
           <td>Lundi</td>
           <td>Mardi</td>
           <td>Mercredi</td>
           <td>Jeudi</td>
           <td>Vendredi</td>
        </tr>
        <?php
            for($j = 8; $j < 19; $j++){
            ?>
                <tr>
                    <th> <?php echo $j."h"; ?></th>
                    <?php
                        for($i = 1; $i < 6; $i++){
                        ?>
                            <td></td>
                        <?php               
                        }
                    ?>
                </tr>
            <?php
            }
        ?>
    </table>
</section>
	</main>

</body>
</html>