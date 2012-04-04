<?php
error_reporting(E_ALL ^ E_NOTICE);

require_once 'abstract.php';
require_once 'php-excel-reader-2.21/excel_reader2.php';

class Molychem_Uploader extends Mage_Shell_Abstract
{
	
	public function run()
    {
		$data = new Spreadsheet_Excel_Reader("molychem-pricelist-2011-2012.xls");
		
		echo "Rows: ".$data->rowcount($sheet_index=0)."\n";
		echo "Columns".$data->colcount($sheet_index=0)."\n";
		
		for($i = 2; $i<= $data->rowcount($sheet_index=0) ; $i++)
		{
			echo $data->val($i, 1)."\t".$data->val($i, 2)."\t".$data->val($i, 3)."\n";
		}
	}
}

$shell = new Molychem_Uploader();
$shell->run();
?>