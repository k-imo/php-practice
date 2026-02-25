<?php
// Q1 tic-tac問題
for ($i = 1; $i < 101; $i++) {
    if($i % 20 === 0){
        echo "tic-tac\n";
    }elseif ($i % 4 === 0) {
        echo "tic\n";
    }elseif($i % 5 === 0){
        echo "tac\n";
    }else{
        echo "$i" . "\n";
    }
}


// Q2 多次元連想配列
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

//問題1
echo $personalInfos[1]["name"] . "の電話番号は" .  $personalInfos[1]["tel"] . "です。";

//問題2
foreach($personalInfos as $Index => $Person){
    echo $Index + 1 . "番目の" . $Person["name"] . "のメールアドレスは" . $Person["mail"] . "で、電話番号は" . $Person["tel"] . "です。\n";
}

//問題3
$ageList = [25, 30, 18];
foreach($personalInfos as $Index => $Person){
     $personalInfos[$Index]["age"] = $ageList[$Index];
}


// Q3 オブジェクト-1
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
}

$studentReg = new Student(120, "山田"); 
echo "学籍番号" . $studentReg->studentId . "の生徒は" . $studentReg->studentName . "です。";


// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lesson)
    {
        echo $this->studentName . "は" . $lesson . "の授業に参加しました。学籍番号：" . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');


// Q5 定義済みクラス
//問題1
$MonthAgo = new DateTime('now');
echo $MonthAgo->modify('-1 month')->format('Y-m-d') . "\n";

//問題2
$Now = new DateTime("now");
$Old = new DateTime("1992-04-25");

$diff = $Now->diff($Old);
echo "あの日から" . $diff->days . "日経過しました。";

?>