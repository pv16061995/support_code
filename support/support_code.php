	<?php

	define('MYSQLDB_HOST' , 'localhost');
	define('MYSQLDB_USER' , 'root');
	define('MYSQLDB_PASS' , '');
	define('MYSQLDB_DATABASE', 'pashu');
	define('MYSQLDB_PORT' , 3306);
	define('SUBFOLDER','PashupatiImpexCRM/');
	define('BASEPATH','http://localhost'.SUBFOLDER);
	define('SYSADMINPATH',BASEPATH.'PashupatiImpexCRM/');




	 public function AddProductCategory($Name,$Details)
 		{ 
     
			try {
				$conn = new PDO('mysql:host='.MYSQLDB_HOST.';dbname='.MYSQLDB_DATABASE.'', MYSQLDB_USER, MYSQLDB_PASS);
   				$query = $conn->prepare("insert into product_category set category_name=:cateName, category_details=:cateDetails");
                $query->bindParam(":cateName", $Name);
				$query->bindParam(":cateDetails", $Details);                                
				$query->execute();
			}
            catch (Exception $e) {
				die ('Error : ' . $e->getMessage());
			}
			
			return $query;
                    } 


     <script>
        function productcatfilter() {
           var pro_catname=$('#catname').val();
           // alert(pro_catname);
            $.post("../ajax/ajax_component.php",{
			
			pro_catname:pro_catname,
			q:"componentlowstockQtyproductcatfilter"
			},
			function(data){
			 $('#details').html(data);
            $('#data-table1').dataTable({
                "sPaginationType": "full_numbers"
            });

			}
		); 
            
        }
        </script>


         if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name']))
		{	
$randString = md5(time()); //encode the timestamp - returns a 32 chars long string
  $fileName = $_FILES["image"]["name"]; //the original file name
  $splitName = explode(".", $fileName); //split the file name by the dot
  $fileExt = end($splitName); //get the file extension
  $newFileName  = strtolower($randString.'.'.$fileExt); //join file name and ext.
   move_uploaded_file( $_FILES['image']['tmp_name'],"uplaod/".$newFileName);
    $image = "uplaod/".$newFileName;
		}
                  