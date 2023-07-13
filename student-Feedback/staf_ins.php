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
            
				
                 $staff_name= $row[0];
					  $course = $row[1];
	$dept = $row[2];
	$term=$row[3];
		$ac_yr=$row[4];
	
			$sq=mysqli_query($conn,"select * from staff");
			$coun=0;
			while($r=mysqli_fetch_array($sq))
			{
				if($staff_name==$r["staff_name"] && $course==$r["course"] && $dept==$r["dept"] && $term==$r["term"] && $ac_yr==$r["ac_yr"])
				{
					$coun=$coun+1;
				}
			}
					             if($coun==0){
                    //Here, You can insert data into database.
                    $qry = "INSERT INTO `staff`(`staff_name`,`course`,`dept`,`term`,`ac_yr`) VALUES ('$staff_name','$course','$dept','$term','$ac_yr')";
                    $res = mysqli_query($conn,$qry);

								 }
                $count++;
            }
        }

        if($res)
        {
            echo "Your file Uploaded Successfull";
             echo "<script>location.href='im.php';</script>";
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
