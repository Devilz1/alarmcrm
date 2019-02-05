<?php

class Zodiak{
    protected $arrayZodiak = [
        ["from" => "21.03", "to" => "20.04", "name" => "Овен"],
        ["from" => "21.04", "to" => "21.05", "name" => "Телец"],
        ["from" => "22.05", "to" => "22.06", "name" => "Близнецы"],
        ["from" => "22.06", "to" => "22.07", "name" => "Рак"],
        ["from" => "23.07", "to" => "23.08", "name" => "Лев"],
        ["from" => "24.08", "to" => "22.09", "name" => "Дева"],
        ["from" => "23.09", "to" => "22.10", "name" => "Весы"],
        ["from" => "23.10", "to" => "22.11", "name" => "Скорпион"],
        ["from" => "23.11", "to" => "21.12", "name" => "Стрелец"],
        ["from" => "22.12", "to" => "20.01", "name" => "Козерог"],
        ["from" => "21.01", "to" => "19.02", "name" => "Водолей"],
        ["from" => "20.02", "to" => "20.03", "name" => "Рыбы"],
    ];

    // Объект с датой пользователя
    protected $first;
        // Объект с годом пользователя (чтобы была возможность вычислять разницу дат)
    protected $year;
    public $cnt = 0;

    public function countingZodiak($userZodiak)
    {
        $this->first = date_create(date("d.m.Y", strtotime($userZodiak)));
        $this->year = date("Y", strtotime($userZodiak));

        foreach ($this->arrayZodiak as $arDate){
            $two = date_create($arDate["from"].".".$this->year);
            $three = date_create($arDate["to"].".".$this->year);
            $diff_two = date_diff($this->first, $two);
            $diff_three = date_diff($this->first, $three);

            if($diff_two->format("%R") == "-" && $diff_three->format("%R") == "+" || $diff_two->format("%R%a") == "+0" || $diff_three->format("%R%a") == "-0") {
                echo $arDate["name"]."&#98".str_pad($this->cnt, 2, '0', STR_PAD_LEFT).";";
            }
            $this->cnt++;
        }
    }
}

$objZodiak = new Zodiak();
$objZodiak->countingZodiak($_POST['zodiak']);