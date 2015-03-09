<?php 
				require 'connect.php';
				
					$mail="SELECT username FROM korisnici WHERE id_korisnik=1";
					if($mail_result=mysqli_query($rangiraj,$mail)){
						if(mysqli_num_rows($mail_result)){
							$rows=mysqli_fetch_all($mail_result,MYSQL_ASSOC);
							foreach($rows as $row){
								$substr=substr($row['username'],-19);
								echo $substr;
							}
						}
						
					}
										
					?>