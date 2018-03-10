<?php error_reporting(0); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>KYC form</title>
  <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    
<!--  <link rel="stylesheet" href="./css/main.css">-->
  <style>
    body {
      background: url("./assets/bg.png");
      margin: 0;
      color : #FFFFFF;
      font-size: 14px;
      font-family: "Times New Roman";!important;
    }

    .header {
      height: 30vh;
      display: flex;
      justify-content: center;
      align-items: center;
      border-bottom: 1px solid #3F4A54;
      margin-bottom: 40px;
    }

    .header img {
      height: 10vh;
    }

    .content {
      margin: 3%;
    }

    .title h1 {
      font-size: 18px;
      color: #FFFFFF;
    }

    .title p {
      color: #758EA5;
    }

    .form-item-label {
      color: #FFFFFF;!important;
      /*width:25%;*/
      text-align: left;
    }
    .radio-label, .select-option {
      color: #FFFFFF;
      margin-right: 22px;
    }
    .form-div {
      margin-bottom: 22px;
    }
    .input-inner {
      background: #2C2D34;
      border-radius: 4px;
      border: 1px solid #3F4A54;
    }

    .no-file-tip {
      margin-left: 15px;
      font-size: 15px;
      color: #758EA5;
    }
    .radio-list {
      cursor:pointer;
    }
    .title-required {
      color: #f56c6c;
    }
    .file {
      position: relative;
      display: inline-block;
      background: #409EFF;
      border: 1px solid #99D3F5;
      border-radius: 4px;
      padding: 4px 12px;
      overflow: hidden;
      color: #FFFFFF;
      text-decoration: none;
      text-indent: 0;
      line-height: 20px;
      cursor: pointer;
    }
    .file input {
      position: absolute;
      font-size: 100px;
      right: 0;
      top: 0;
      opacity: 0;
    }
    .file:hover {
      background: #AADFFD;
      border-color: #78C3F3;
      color: #004974;
      text-decoration: none;
    }
  </style>
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
<div class="container" id="app">
  <div class="row">
    <div class="header">
      <div class="header">
        <img src="./assets/logo.png">
      </div>
    </div>
    <div class="content">
      <div class="title">
        <h1>KYC portal</h1>
        <p>Dear GTS Token Sale Participant,</p>
        <p>The KYC portal is now live.</p>
        <p>When you get to the portal. It’ll require you to review the privacy policy, and type in your information.</p>
        <p>*Important*</p>
        <p>For the ETH address and contribution amounts, please put in the ETH address you’ve sent or will be sending your
          contribution from. For the contribution amount, please put the total amount you’ve sent or intend to send.</p>
        <p>For the instant photo selfie and document photo/upload, please make sure your face and documents are clear.
          Once submitted, It may take some 30 seconds to process. You will receive an approval or rejection email once
          your KYC has been fully reviewed. Please allow up to 2-4 days.</p>
        <p>You can access the portal here, to get started.</p>
        <p>All the best,</p>
        <p>GTS TOKEN</p>
      </div>
      <!-- Edit Customer Form -->
      <form class="" role="form" action="kycForm.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <!--Email Address-->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span> Email Address
            </label>
            <input type="text" class="input-inner form-control" name="Field1" value="<?php echo $_POST['Field1'] ?>">
          </div>
          <!-- First Name -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span> First Name
            </label>
            <input type="text" class="input-inner form-control" name="Field2" value="<?php echo $_POST['Field2'] ?>">
          </div>
          <!-- Last Name -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span> Last Name
            </label>
            <input type="text" class="input-inner form-control " name="Field17" value="<?php echo $_POST['Field17'] ?>">
          </div>
          <!-- Nationality -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span> Nationality
            </label>
            <select class="input-inner form-control select-option" name="Field4">
                <?php foreach ($nations as $nation) { if($nation == $_POST['Field4']){ ?>
                  <option value="<?php echo $nation ?>" selected><?php echo $nation ?></option>
                <?php }else { ?>
                  <option value="<?php echo $nation ?>"><?php echo $nation ?></option>
                <?php }} ?>
            </select>
          </div>
          
          <!-- Certificate type -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="form-group">
              <label class="control-label form-item-label">
                <span class="title-required">*</span> Certificate type
              </label>
              <div>
                  <?php if ($_POST['Field5'] =='Passport') { ?>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Passport" checked>Passport
                    </label>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="ID">ID
                    </label>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Driving License">Driving License
                    </label>
                  <?php }elseif($_POST['Field5'] =='ID'){ ?>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Passport">Passport
                    </label>

                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="ID" checked>ID
                    </label>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Driving License">Driving License
                    </label>
                  <?php }elseif($_POST['Field5'] =='Driving License'){ ?>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Passport">Passport
                    </label>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="ID">ID
                    </label>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Driving License" checked>Driving License
                    </label>
                  <?php } else{ ?>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Passport">Passport
                    </label>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="ID">ID
                    </label>
                    <label class="radio-label">
                      <input type="radio" class="radio-list" name="Field5" value="Driving License">Driving License
                    </label>
                  <?php } ?>
              </div>
            </div>
          </div>
          <!-- Document number -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span> Document number
            </label>
            <input type="text" class="form-control input-inner" name="Field6" value="<?php echo $_POST['Field6'] ?>">
          </div>
          <!-- The front page of your ID -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span> The front page of your ID
            </label>
            <div>
              <a href="javascript:;" class="file" id="btn8">选择文件
                <input type="file" name="Field8" id="">
              </a>
              <span id="file8" class="file-name"><?php echo $_FILES['Field8']['name']?$_FILES['Field8']['name']:'未选择任何文件(jpg,jpeg,png,gif)'; ?></span>
            </div>
          </div>
          
          <!-- The back page of your ID -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span> The back page of your ID
            </label>
            <div>
              <a href="javascript:;" class="file" id="btn9">选择文件
                <input type="file" name="Field9" id="">
              </a>
              <span id="file9" class="file-name"><?php echo $_FILES['Field9']['name']?$_FILES['Field9']['name']:'未选择任何文件(jpg,jpeg,png,gif)'; ?></span>
            </div>
          </div>
          
          <!-- The photo of yourself with the front page of your ID -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label"><span class="title-required">*</span>
              The photo of yourself with the front page of your ID
            </label>
            <div>
              <a href="javascript:;" class="file" id="btn10">选择文件
                <input type="file" name="Field10" id="">
              </a>
              <span id="file10" class="file-name"><?php echo $_FILES['Field10']['name']?$_FILES['Field10']['name']:'未选择任何文件(jpg,jpeg,png,gif)'; ?></span>
            </div>
          </div>
          
          <!-- Your ETH Address -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="control-label form-item-label">
              <span class="title-required">*</span>
              Your ETH Address
            </label>
            <input type="text" class="form-control input-inner" name="Field12" value="<?php echo $_POST['Field12'] ?>">
          </div>
          
          <!-- The amount of ETH you would like to invest -->
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-div">
            <label class="conrol-label form-item-label">The amount of ETH you would like to invest</label>
            <input type="text" class="form-control input-inner" name="Field14" value="<?php echo $_POST['Field14'] ?>">
          </div>
        </div>
        <!-- Actions -->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="submit" class="btn btn-primary btn-lg" value="Submit">
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  $("#btn8").on("change","input[type='file']",function(){
    var filePath=$(this).val();console.log(filePath);
    if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1 || filePath.indexOf('jpeg') != -1 || filePath.indexOf('gif') != -1){
      $("#file8").html("").hide();
      var arr=filePath.split('\\');
      var fileName=arr[arr.length-1];console.log(fileName);
      $("#file8").html(fileName).show();
    }else{
      $("#file8").html("");
      $("#file8").html("file type error(please upload .jpeg|.png|.jpg)").show();
      return false
    }
  });
  $("#btn9").on("change","input[type='file']",function(){
    var filePath=$(this).val();console.log(filePath);
    if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1 || filePath.indexOf('jpeg') != -1 || filePath.indexOf('gif') != -1){
      $("#file9").html("").hide();
      var arr=filePath.split('\\');
      var fileName=arr[arr.length-1];console.log(fileName);
      $("#file9").html(fileName).show();
    }else{
      $("#file9").html("");
      $("#file9").html("file type error(please upload .jpeg|.png|.jpg)").show();
      return false
    }
  });
  $("#btn10").on("change","input[type='file']",function(){
    var filePath=$(this).val();console.log(filePath);
    if(filePath.indexOf("jpg")!=-1 || filePath.indexOf("png")!=-1 || filePath.indexOf('jpeg') != -1 || filePath.indexOf('gif') != -1){
      $("#file10").html("").hide();
      var arr=filePath.split('\\');
      var fileName=arr[arr.length-1];console.log(fileName);
      $("#file10").html(fileName).show();
    }else{
      $("#file10").html("");
      $("#file10").html("file type error(please upload .jpeg|.png|.jpg)").show();
      return false
    }
  });
</script>
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
#首次加载页面（get方式）
if (empty($_POST) || empty($_FILES)) {
    #页面跳转
    exit;
}

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
    unset($_FILES);
    unset($post);
    //setcookie('post_data', time()-3600);
    #删除文件
    @unlink($post_data['Field8']);
    @unlink($post_data['Field9']);
    @unlink($post_data['Field10']);
    echo 'success';
    //echo json_encode($response);
    //echo json_encode($resultStatus);
    curl_close($curl);
    #页面跳转
    echo "<script type='text/javascript'>";
    echo "window.location.href='kycForm.php'";
    echo "</script>";
    
} else {
    //echo json_encode($response);
    echo 'Call Failed ';//.json_encode($resultStatus);
    curl_close($curl);
}