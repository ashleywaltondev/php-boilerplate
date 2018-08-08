<?php
//Set database connection
function db_open() {
	try
	{
		$db = new PDO(
			$GLOBALS['DB_PATH'],
			$GLOBALS['DB_USER'],
			$GLOBALS['DB_PASSWORD']
		);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
		return $db;
	}
	catch(PDOException $e)
	{
		echo "<script>console.log('PDO Exception');</script>";
		echo "<script>console.log('".$e->getMessage()."');</script>";
	}
}

function query_db($sql)
{
	$db = db_open();
	return $db->query($sql);
}
function execute_query($sql)
{
	$db = db_open();
	try
	{
		$db->exec($sql);
	}
	catch (Exception $e)
	{
		echo "<script>console.log('Can\'t execute query');</script>";
		echo "<script>console.log('".$e->getMessage()."');</script>";
	}
}
