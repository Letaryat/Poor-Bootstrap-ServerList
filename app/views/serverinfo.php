<div class="container mt-4">
    <div class="row">
        <div class="col-md-8">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td>Player name</td>
                    <td>Time on server</td>
                </tr>
                <?php
                for($x = 0; $x < count($GetPlayers); $x++){ ?>
                    <tr>
                        <td>
                            <?= $GetPlayers[$x]['Name'] ?>
                        </td>
                        <td>
                            <?= $GetPlayers[$x]['TimeF']?>
                        </td>
                    </tr>

                <?php }
                ?>

            </tbody>
        </table>

        </div>
        <div class="col-md-4">
        <img class=" mb-2" style="max-width:100%; border-radius:10px;" src="<?php 
	if(@getimagesize($mapimage)){
		echo $mapimage;
	}else{
		echo "https://rank.pierdolnik.eu/storage/cache/img/maps/730/-.jpg";
	}
        ?>">

        <table class="table table-striped text-center">
            <tbody>
                <tr>
                    <td><?php echo $GetInfo['HostName']?></td>
                </tr>
                <tr>
                    <td><?php echo $GetInfo['Map']?></td>
                </tr>
                <tr>
                    <td><?php echo $GetInfo['ModDesc']?></td>
                </tr>
                <tr>
                    <td><?php echo $GetInfo['Players'] . " / " . $GetInfo['MaxPlayers']?></td>
                </tr>
                <tr>
                    <td><?php echo $GetInfo['GameTags']?></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
