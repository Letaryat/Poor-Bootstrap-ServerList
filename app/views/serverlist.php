<?php 
use xPaw\SourceQuery\SourceQuery;
define('SQ_TIMEOUT', 1);
define('SQ_ENGINE', SourceQuery::SOURCE);

    for($i = 0; $i < count($servers); $i++){
        $ip = $servers[$i]['host'];
        $port = $servers[$i]['port'];
        try{
            $Timer = microtime(true);
            $Query = new SourceQuery();
            $Query->Connect($ip, $port, SQ_TIMEOUT, SQ_ENGINE);
            if(empty($Query->GetInfo())){
                echo "Pusto";
            }
            else{ 
                /*
                echo "<pre>";
                print_r($Query->Getinfo());
                echo "</pre>";
                */
                ?>

                <li class="row bg-dark-subtle rounded-3">
                    <span class="col-md-auto d-flex align-items-center">
                        <div class="status-online"></div>
                        <div style="margin-left:5px;">Online</div>
                    </span>
                    <span class="col-md-4">
                        <?php echo $Query->GetInfo()['HostName']?>
                    </span>
                    <span class="col">
                        <img src="">
                        <?php echo $Query->GetInfo()['Map']?>
                    </span>
                    <span class="col">
                        <?php echo $Query->GetInfo()['Players'] ."/". $Query->GetInfo()['MaxPlayers']?>
                    </span>
                    <span class="col-md-auto">
                        <ul class="server-more">
                            <li><a href="steam://connect/<?php echo $ip . ":" . $port; ?>">Dolacz</a></li>
                            <li><a href="">Gametracker</a></li>
                            <li><a href="<?php echo BaseURL . "server/" . $i?>">Info</a></li>
                        </ul>
                    </span>
                </li>

            <?php }
        }
        catch(Exception $e){
            "Jeblo";
            $Exception = $e;
        }
        finally{
            $Query->Disconnect();
        }
        $Timer = number_format(microtime(true) - $Timer, 4, '.', '');
    }


?>