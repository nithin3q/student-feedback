<?php

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

require_once ('connect.php');
require_once ('Spout/Autoloader/autoload.php');

if(!empty($_FILES['excelfile']['name']))
{
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES['excelfile']['name']);

    // check file has extension xlsx, xls and also check
    // file is not empty
    if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xlsx')
        && $_FILES['excelfile']['size'] > 0 )
    {
        $file = $_FILES['excelfile']['tmp_name'];

        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

        // Open file
        $reader->open($file);
        $count = 0;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet)
        {

            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row)
            {

                // It reads data after header. In the my excel sheet,
                // header is in the first row.
				

                    // Data of excel sheet
            
				
            
	$dept = $row[0];
			$co= mysqli_connect("localhost","iqac","iqaciqac","id12722236_feedback_form");
			$sq=mysqli_query($co,"select * from department");
			$coun=0;
			while($r=mysqli_fetch_array($sq))
			{
				if($dept==$r["dept"])
				{
					$coun=$coun+1;
				}
			}
					             if($coun==0){
                    //Here, You can insert data into database.
                    $qry = "INSERT INTO `department`(`dept`) VALUES ('$dept')";
                    $res = mysqli_query($con,$qry);

								 }
                $count++;
            }
        }

        if($res)
        {
            echo "Your file Uploaded Successfull";
        }
        else
        {
            echo "Your file Uploaded Failed";
        }

        // Close excel file
        $reader->close();
    }
    else
    {
        echo "Please Choose only Excel file";
    }
}
else
{
    echo "File is Empty"."<br>";
    echo "Please Choose Excel file";
}

?>
