<?php
// Q1 変数と文字列
$name = '三瓶';
echo $name;

// Q2 四則演算
$num = 5 * 4;
echo "$num";
echo $num / 2;

// Q3 日付操作
echo date("Y/m/d H:i:s");
echo '現在時刻は、2024年05月08日 11時15分16秒です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device ==='mac') {
    echo '使用OSは、'.$device.'です。';

  } else {
    echo 'どちらでもありません';
  }

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age < 18) ? '未成年です' '成人です';

echo $message;

// Q6 配列
$prefectures = ['東京都', '千葉県', '栃木県','茨城県','埼玉県','群馬県','神奈川県'];
// var_dump($prefectures);

echo $prefectures[2] . 'と' . $prefectures[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
  ];

foreach ($prefectures as $prefecture => $capital){
echo $capital . "\n";
}

// Q8 連想配列-2
foreach ($prefectures as $prefecture => $capital) {
  if($capital == 'さいたま市') {
    echo $prefecture . 'の県庁所在地は' . $capital . 'です'."\n";
  };
}

// Q9 連想配列-3
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '埼玉県' => 'さいたま市',
  '千葉県' => '千葉市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
  ];
  $prefectures ['福島県'] = '郡山市';
  $prefectures ['岩手県'] = '盛岡市';
  
foreach ($prefectures as $prefecture => $capital) {
    if($capital == '新宿区' || $capital =='横浜市' || $capital == 'さいたま市' || $capital == '千葉市' || $capital == '宇都宮市' || $capital == '前橋市' || $capital == '水戸市' ) {
      echo $capital . 'の県庁所在地は、' . $prefecture . 'です';
    
}   else {
      echo $prefecture . 'は関東地方ではありません。';
}
}

// Q10 関数-1
function hello($name)
{
    echo $name . 'さんこんにちは';
}

 hello('三瓶');
 hello('伊勢村');

// Q11 関数-2
function calcTaxInPrice($price = 1000) 
{
    $price * 1.1;
    return  $price * 1.1;
}
  $price =  1000;
  $taxInPrice = calcTaxInPrice($price);
  
   echo $price . 'の商品の税込価格は' . $taxInPrice . 'です。';
   

// Q12 関数とif文
function distinguishNum($a)
{
	if ($a % 2 == 0) {
		return $a . 'は偶数です';
	} else {
		return $a . 'は奇数です';
	}
}
echo distinguishNum($a = 24);
echo distinguishNum($a = 11);

// Q13 関数とswitch文
function evaluateGrade($grade)
{ 
    switch($grade) {
        case 'A': 
        case 'B': 
            return '合格です。';
        case 'C': 
            return '合格ですが追加課題があります。';
         case 'D': 
            return '不合格です。';
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}
echo evaluateGrade('A');
echo evaluateGrade('D');

?>