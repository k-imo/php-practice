<?php
// Q1 変数と文字列
$name = "河村";

echo "私の名前は「".$name."」です。";

// Q2 四則演算
$num = 5 * 4;
echo $num."\n";
echo $num/2;


// Q3 日付操作
echo date("現在時刻は、Y年m月d日 h時m分s秒です。");

// Q4 条件分岐-1 if文
$device = "linux";
if ($device === "windows" || $device ==="mac" ){
  echo "使用OSは、".$device ."です。";
} else {
  echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 20;
$checkAge = ($age > 18) ? "成人です。" : "未成年です。";
echo $checkAge;

// Q6 配列
$eastGate = ["東京都","神奈川県","千葉県","埼玉県","茨城県","栃木県","群馬県","山梨県"];
echo $eastGate[2]."と".$eastGate[3]."は関東地方の都道府県です。";

// Q7 連想配列-1
$eastGateCapital = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市", 
    "埼玉県" => "さいたま市", 
    "栃木県" => "宇都宮市", 
    "群馬県" => "前橋市", 
    "茨城県" => "水戸市"
    ];
foreach($eastGateCapital as $value){
    echo $value."\n";
}


// Q8 連想配列-2
$Prefecture = "埼玉県";
foreach($eastGateCapital as $key => $value){
    if($key === $Prefecture){
        echo $Prefecture."の県庁所在地は、".$value."です。";
    }
}


// Q9 連想配列-3
$eastGateCapital = [
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "千葉県" => "千葉市", 
    "埼玉県" => "さいたま市", 
    "栃木県" => "宇都宮市", 
    "群馬県" => "前橋市", 
    "茨城県" => "水戸市"
    ];
$eastGateCapital ["富山県"]="富山市";
$eastGateCapital ["石川県"]="金沢市";

foreach($eastGateCapital as $key => $value){
    if($key == "富山県" || $key == "石川県"){
        echo $key."は、関東地方ではありません。\n";
    }else{
        echo $key."の県庁所在地は、".$value."です。\n";
    }
}


// Q10 関数-1
function Hello($name){
    echo $name."さん、こんにちは。\n";
}

Hello("金谷");
Hello("安藤");

// Q11 関数-2
$price = 1000;

function calcTaxInPrice($calcPrice){
    $tax = 1.10;
    return $taxInPrice = $calcPrice * $tax;
}

echo $price . "円の商品の税込価格は" . calcTaxInPrice($price) . "円です。\n";


// Q12 関数とif文
function distinguishNum($Number){
    if($Number % 2 === 1){
        echo $Number . "は奇数です。\n";
    }else{
        echo $Number . "は偶数です。\n";
    }
}

distinguishNum(11);
distinguishNum(24);

// Q13 関数とswitch文

function evaluateGrade($Grades){
    switch ($Grades) {
        case "A":
        case "B":
            return "合格です\n";
            break;
            
        case "C":
            return "合格ですが追加課題があります。\n";
            break;
            
        case "D":
            return "不合格です\n";
            break;
        
        default:
            return "判定不明です。講師に問い合わせてください。\n";
            break;
    }
}

echo evaluateGrade("A");
echo evaluateGrade("D");

?>