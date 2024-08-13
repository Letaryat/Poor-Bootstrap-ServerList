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


    require_once(BaseDIR . '/app/views/serverinfo.php');

?>