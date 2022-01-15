<a href="dbDelete.php">Database</a>
<h1>Get file</h1>
<form method='POST'> 
<input type="text" name='file_name' placeholder="File or Folder location" />
<input type="submit" name='getfilefolder' value="Delete Files And Folder" />
</form>


<h1>Delete file</h1>
<form method='POST'> 
<input type="text" name='file_name' placeholder="File or Folder location" />
<input type="submit" name='deletefilefolder' value="Delete Files And Folder" />
</form>









<?php




 if(isset($_POST['getfilefolder'])){
	 $file_name = $_POST['file_name'];
	 


$path    = $file_name;
$files = scandir($path);
$files = array_diff(scandir($path), array('.', '..'));
foreach($files as $file){
  echo "$file <br />";
}




 }




/*      
$status=unlink('../hello');    
if($status){  
echo "File deleted successfully";    
}else{  
echo "Sorry!";    
}  
 */
 if(isset($_POST['deletefilefolder'])){
	 $file_name = $_POST['file_name'];
	 




function Delete($path)
{
    if (is_dir($path) === true)
    {
        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::CHILD_FIRST);

        foreach ($files as $file)
        {
            if (in_array($file->getBasename(), array('.', '..')) !== true)
            {
                if ($file->isDir() === true)
                {
                    rmdir($file->getPathName());
                }

                else if (($file->isFile() === true) || ($file->isLink() === true))
                {
                    unlink($file->getPathname());
                }
            }
        }

        return rmdir($path);
    }

    else if ((is_file($path) === true) || (is_link($path) === true))
    {
        return unlink($path);
    }

    return false;
}

delete("$file_name");

 }