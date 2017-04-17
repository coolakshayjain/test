$query = mysql_query("select * from users");
		$rows = mysql_num_rows($query);
		$rows1 = mysql_fetch_array($query);
		$arr = array();
		$i=0;
		foreach($rows1 as $value)
		{
			$arr1 = array();
			$arr1['id']= $rows1['id'];
			$arr1['name']= $rows1['full_name'];
			$arr1['username']= $rows1['username'];
			$arr1['password']= $rows1['password'];
			$arr1['mobile']= $rows1['phone'];
			$arr1['email']= $rows1['email'];
			array_push($arr,$arr1);
		}
		jsonResult('true', 'Login Success', $arr );