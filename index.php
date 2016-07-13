<table><thead>

          <tr>
		  <th>Id</th>
              <th>Name</th>
              <th>Email</th>
          </tr>
      </thead>
	  <?php
include_once('conn.php');
$verb=$_SERVER['REQUEST_METHOD'];
if($verb == 'GET')
{
	$file_content=file_get_contents('data.json');
	 $data =  json_decode($file_content, true);


      foreach($data as $item) 
      {
              echo '<tr>';
                  echo '<td>'.$item['0'].'</td>';
                  echo '<td>'.$item['1'].'</td>';
				   echo '<td>'.$item['2'].'</td>';
              echo '</tr>';
      }

	//echo $file_content;
}


?>
</table>
<a href="user_registration.php">Click</a>;