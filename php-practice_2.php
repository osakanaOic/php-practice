<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 == 0 && $i % 5 == 0) {
  echo 'tic';
}  else if ($i % 4 == 0) {
  echo 'tac';
}  else if ($i % 5 == 0) {
  echo 'tic-tac ';
} else {
}
}

// Q2 多次元連想配列
// 問題１
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
// var_dump ($personalInfos[1]);
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// 問題２
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

foreach ($personalInfos as $index => $info) {

  $index = $index+1;
  echo "$index 番目の{$info['name']}のメールアドレスは{$info['mail']}で、電話番号は{$info['tel']}です。\n";

}

// 問題３
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

$ageList = [25, 30, 18];


foreach ($personalInfos as $index => $info) {

  $personalInfos[$index]['age'] = $ageList[$index];
  
}

var_dump($personalInfos);

// Q3 オブジェクト-1
<?php
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }

    public function displayInfo()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}

$yamada = new Student(120, '山田');

$yamada->displayInfo();

?>
// Q4 オブジェクト-2
<?php
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo  $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号:' . $this->studentId;
    }

    public function displayInfo()
    {
        echo '学籍番号' . $this->studentId . '番の生徒は' . $this->studentName . 'です。';
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス問題1
?>
$month = new DateTime('1 month ago');

echo $month->format('Y-m-d');

// Q5 定義済みクラス問題２
$now_data = new  DateTime();

$target_data = new DateTime('1992-04-25');

$subtraction = $now_data->diff($target_data);

$result = $subtraction->days;

echo "あの日から" . $result . "日経過しました。";