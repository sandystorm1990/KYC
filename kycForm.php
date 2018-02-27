<?php error_reporting(0); ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>KYC form</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        <?php $nations = [
            'Afghan',
            'Albanian',
            'Algerian',
            'American',
            'Andorran',
            'Angolan',
            'Antiguans',
            'Argentinean',
            'Armenian',
            'Australian',
            'Austrian',
            'Azerbaijani',
            'Bahamian',
            'Bahraini',
            'Bangladeshi',
            'Barbadian',
            'Barbudans',
            'Batswana',
            'Belarusian',
            'Belgian',
            'Belizean',
            'Beninese',
            'Bhutanese',
            'Bolivian',
            'Bosnian',
            'Brazilian',
            'British',
            'Bruneian',
            'Bulgarian',
            'Burkinabe',
            'Burmese',
            'Burundian',
            'Cambodian',
            'Cameroonian',
            'Canadian',
            'Cape Verdean',
            'Central African',
            'Chadian',
            'Chilean',
            'Chinese',
            'Colombian',
            'Comoran',
            'Congolese',
            'Costa Rican',
            'Croatian',
            'Cuban',
            'Cypriot',
            'Czech',
            'Danish',
            'Djibouti',
            'Dominican',
            'Dutch',
            'East Timorese',
            'Ecuadorean',
            'Egyptian',
            'Emirian',
            'Equatorial Guinean',
            'Eritrean',
            'Estonian',
            'Ethiopian',
            'Fijian',
            'Filipino',
            'Finnish',
            'French',
            'Gabonese',
            'Gambian',
            'Georgian',
            'German',
            'Ghanaian',
            'Greek',
            'Grenadian',
            'Guatemalan',
            'Guinea-Bissauan',
            'Guinean',
            'Guyanese',
            'Haitian',
            'Herzegovinian',
            'Honduran',
            'Hungarian',
            'I-Kiribati',
            'Icelander',
            'Indian',
            'Indonesian',
            'Iranian',
            'Iraqi',
            'Irish',
            'Israeli',
            'Italian',
            'Ivorian',
            'Jamaican',
            'Japanese',
            'Jordanian',
            'Kazakhstani',
            'Kenyan',
            'Kittian and Nevisian',
            'Kuwaiti',
            'Kyrgyz',
            'Laotian',
            'Latvian',
            'Lebanese',
            'Liberian',
            'Libyan',
            'Liechtensteiner',
            'Lithuanian',
            'Luxembourger',
            'Macedonian',
            'Malagasy',
            'Malawian',
            'Malaysian',
            'Maldivan',
            'Malian',
            'Maltese',
            'Marshallese',
            'Mauritanian',
            'Mauritian',
            'Mexican',
            'Micronesian',
            'Moldovan',
            'Monacan',
            'Mongolian',
            'Moroccan',
            'Mosotho',
            'Motswana',
            'Mozambican',
            'Namibian',
            'Nauruan',
            'Nepalese',
            'New Zealander',
            'Nicaraguan',
            'Nigerian',
            'Nigerien',
            'North Korean',
            'Northern Irish',
            'Norwegian',
            'Omani',
            'Pakistani',
            'Palauan',
            'Panamanian',
            'Papua New Guinean',
            'Paraguayan',
            'Peruvian',
            'Polish',
            'Portuguese',
            'Qatari',
            'Romanian',
            'Russian',
            'Rwandan',
            'Saint Lucian',
            'Salvadoran',
            'Samoan',
            'San Marinese',
            'Sao Tomean',
            'Saudi',
            'Scottish',
            'Senegalese',
            'Serbian',
            'Seychellois',
            'Sierra Leonean',
            'Singaporean',
            'Slovakian',
            'Slovenian',
            'Solomon Islander',
            'Somali',
            'South African',
            'South Korean',
            'Spanish',
            'Sri Lankan',
            'Sudanese',
            'Surinamer',
            'Swazi',
            'Swedish',
            'Swiss',
            'Syrian',
            'Taiwanese',
            'Tajik',
            'Tanzanian',
            'Thai',
            'Togolese',
            'Tongan',
            'Trinidadian/Tobagonian',
            'Tunisian',
            'Turkish',
            'Tuvaluan',
            'Ugandan',
            'Ukrainian',
            'Uruguayan',
            'Uzbekistani',
            'Venezuelan',
            'Vietnamese',
            'Welsh',
            'Yemenite',
            'Zambian',
            'Zimbabwean',
        ]?>
    </script>
</head>
<body>

<!--<form action="FormSubmit.php" method="post">-->
<!--名字: <input type="text" name="Field1">-->
<!--年龄: <input type="text" name="Field2">-->
<!--<input type="submit" value="提交">-->
<!--</form>-->
<div class="container">
    <div class="row">
        <div class="header">
        </div>
        <div class="">
            <!-- Edit Customer Form -->
            <form class="" role="form" action="index.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!--Email Address-->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="control-label must-fill">Email Address</label>
                            <input type="text" class="form-control" name="Field1" value="<?php echo $_POST['Field1'] ?>">
                        </div>
                    </div>
                    <!-- First Name -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="control-label">First Name</label>
                            <input type="text" class="form-control" name="Field2" value="<?php echo $_POST['Field2'] ?>">
                        </div>
                    </div>
                    <!-- Last Name -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label class="control-label">Last Name</label>
                            <input type="text" class="form-control" name="Field17" value="<?php echo $_POST['Field17'] ?>">
                        </div>
                    </div>
                    <!-- Nationality -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Nationality</label>
                            <!--<input type="text" class="form-control" name="Field4">-->
                            
                            <select class="form-control" name="Field4">
                                <?php foreach ($nations as $nation) { if($nation == $_POST['Field4']){ ?>
                                    <option value="<?php echo $nation ?>" selected><?php echo $nation ?></option>
                                    <?php }else { ?>
                                    <option value="<?php echo $nation ?>"><?php echo $nation ?></option>
                                <?php }} ?>
                            </select>
                        </div>
                    </div>
                    <!-- Certificate type -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Certificate type</label>
                            <!--<input type="text" class="form-control" name="Field5">-->
                            <?php if ($_POST['Field5'] =='Passport') { ?>
                            <label>
                                <input type="radio" name="Field5" value="Passport" checked>Passport
                            </label>
                            <label>
                                <input type="radio" name="Field5" value="ID">ID
                            </label>
                            <label>
                                <input type="radio" name="Field5" value="Driving License">Driving License
                            </label>
                            <?php }elseif($_POST['Field5'] =='ID'){ ?>
                            <label>
                                <input type="radio" name="Field5" value="Passport">Passport
                            </label>
                            
                            <label>
                                <input type="radio" name="Field5" value="ID" checked>ID
                            </label>
                            <label>
                                <input type="radio" name="Field5" value="Driving License">Driving License
                            </label>
                            <?php }elseif($_POST['Field5'] =='Driving License'){ ?>
                            <label>
                                <input type="radio" name="Field5" value="Passport">Passport
                            </label>
                            <label>
                                <input type="radio" name="Field5" value="ID">ID
                            </label>
                            <label>
                                <input type="radio" name="Field5" value="Driving License" checked>Driving License
                            </label>
                            <?php } else{ ?>
                                <label>
                                    <input type="radio" name="Field5" value="Passport">Passport
                                </label>
                                <label>
                                    <input type="radio" name="Field5" value="ID">ID
                                </label>
                                <label>
                                    <input type="radio" name="Field5" value="Driving License">Driving License
                                </label>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Document number -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="form-group">
                            <label>Document number</label>
                            <input type="text" class="form-control" name="Field6" value="<?php echo $_POST['Field6'] ?>">
                        </div>
                    </div>
                    <!-- The front page of your ID -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>The front page of your ID</label>
                            <input type="file" class="form-control" name="Field8" value="<?php echo $_FILES['Field8'] ?>">
                        </div>
                    </div>
                    <!-- The back page of your ID -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>The back page of your ID</label>
                            <input type="file" class="form-control" name="Field9" value="<?php echo $_FILES['Field9'] ?>">
                        </div>
                    </div>
                    <!-- The photo of yourself with the front page of your ID -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>The photo of yourself with the front page of your ID</label>
                            <input type="file" class="form-control" name="Field10" value="<?php echo $_FILES['Field10'] ?>">
                        </div>
                    </div>
                    <!-- Your ETH Address -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>Your ETH Address</label>
                            <input type="text" class="form-control" name="Field12" value="<?php echo $_POST['Field12'] ?>">
                        </div>
                    </div>
                    <!-- The amount of ETH you would like to invest -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-group">
                            <label>The amount of ETH you would like to invest</label>
                            <input type="text" class="form-control" name="Field14" value="<?php echo $_POST['Field14'] ?>">
                        </div>
                    </div>
                </div>
                <!-- Actions -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <input type="submit" class="btn btn-primary" value="Submit">
                </div>
            </form>
        </div>
    
    </div>
</div>
<script></script>
</body>
</html>

<?php
error_reporting(0);

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

//setcookie('post_data', json_encode($post), time()+3600);

#check all post data
foreach ($post as $key => $value) {
    #验证文件完整性
    if ($key == 'Field8'|| $key == 'Field9' || $key =='Field10') {
        if (empty($value['name'])) {
            echo $key.' can not be empty!';
            return false;
        }
    }
    #验证其他字段
    if ($key != 'Field14' && empty($value)) {
        echo $key.' can not be empty!';
        return false;
    } else {
        # 保存cookie 页面是get方式，submit是post,为了保留之前的表单信息，页面采用了$_POST变量进行获取
        //setcookie($key, $value, time()+3600);
    }
}


#组装数据
$post_data = [];

foreach ($post as $key => $value) {
    if ($key == 'Field8'|| $key == 'Field9' || $key =='Field10') {
        move_uploaded_file($value["tmp_name"], "" . $value["name"]);
        
        $post_data[$key] = curl_file_create($value['name'], mime_content_type($value['name']), $value['name']);
        //@unlink($value['name']);
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
curl_setopt($curl, CURLINFO_HEADER_OUT, true);

curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);


$response = curl_exec($curl);
$resultStatus = curl_getinfo($curl);

if($resultStatus['http_code'] == 200 || $resultStatus['http_code'] == 201) {
    # 删除表单数据
    unset($_POST);
    //setcookie('post_data', time()-3600);
    #删除文件
    @unlink($post_data['Field8']);
    @unlink($post_data['Field9']);
    @unlink($post_data['Field10']);
    echo 'success';
    //echo json_encode($response);
    //echo json_encode($resultStatus);
    curl_close($curl);
    
} else {
    //echo json_encode($response);
    echo 'Call Failed ';//.json_encode($resultStatus);
    curl_close($curl);
}