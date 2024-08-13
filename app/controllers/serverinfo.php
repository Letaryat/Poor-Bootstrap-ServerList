<?php

    use xPaw\SourceQuery\SourceQuery;
    define('SQ_TIMEOUT', 1);
    define('SQ_ENGINE', SourceQuery::SOURCE);

    $serverid = $match['params']['id'];

    $Timer = microtime(true);
    $Query = new SourceQuery();

    try
	{
        $Query->Connect( $servers[$serverid]['host'], $servers[$serverid]['port'], SQ_TIMEOUT, SQ_ENGINE );
		$GetInfo = $Query->GetInfo( );
		$GetPlayers =$Query->GetPlayers( );
	}
	catch( Exception $e )
	{
		echo $e->getMessage( );
	}
	finally
	{
		$Query->Disconnect( );
	}

	$map = $GetInfo['Map'];
	$mapimage = "https://rank.pierdolnik.eu/storage/cache/img/maps/730/" . $map . ".jpg";

    require_once(BaseDIR . '/app/views/serverinfo.php');

?>