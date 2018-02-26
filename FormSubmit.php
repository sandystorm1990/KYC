<?php
# 获取传输数据
$post['Field1']  = $_POST['Field1'];    # Your Email Address
$post['Field2']  = $_POST['Field2'];    # First name
$post['Field17'] = $_POST['Field17'];   # Last Name
$post['Field4']  = $_POST['Field4'];    # Nationality
$post['Field5']  = $_POST['Field5'];    # Certificate type
$post['Field6']  = $_POST['Field6'];    # Document Number
$post['Field8']  = $_FILES['Field8'];   # The front page of your ID
$post['Field9']  = $_FILES['Field9'];   # The back page of your ID
$post['Field10'] = $_FILES['Field10'];  # The photo of yourself with the front page of your ID
$post['Field12'] = $_POST['Field12'];   # Your ETH Address
$post['Field14'] = $_POST['Field14'];   # The amount of ETH you would like to invest

#check all post data
foreach ($post as $key => $value) {
    if ($key != 'Field14' && empty($value)) {
        return $key.' can not be empty!';
    }
}

# 保存cookie
setcookie('post_data', json_encode($post), time()+3600);

#组装数据
$post_data = [];

foreach ($post as $key => $value) {
    if ($key == 'Field8'|| $key == 'Field9' || $key =='Field10') {
        move_uploaded_file($value["tmp_name"], "" . $value["name"]);
    
        $post_data[$key] = curl_file_create($value['name'], mime_content_type($value['name']),
            $value['name']);
        @unlink($value['name']);
    } else {
        $post_data[$key] =$value;
    }
}


# Submit entry
$subdomain = 'gtstoken';
$identifier = 'z1m9uiyg1a56hct'; #hash key
$format = 'json';
$api_key = '2JW2-OUO6-Z07X-SLDJ';
$post_key = 'h445dIh96pYIXKXbYVzA+UVNK+ZjC4XzpI4Wu4hFw5Y=';
$curl = curl_init('https://'.$subdomain.'.wufoo.com/api/v3/forms/'.$identifier.'/entries.'.$format); #hash key
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: multipart/form-data'));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_USERPWD, $api_key.':footastic'); # API Key

curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);


$response = curl_exec($curl);
$resultStatus = curl_getinfo($curl);

if($resultStatus['http_code'] == 200) {
    # 删除cookie
    setcookie('post_data', time()-3600);
    echo json_encode($response);
    echo json_encode($resultStatus);
    curl_close($curl);
    
} else {
    echo json_encode($response);
    echo 'Call Failed '.json_encode($resultStatus);
    curl_close($curl);
}