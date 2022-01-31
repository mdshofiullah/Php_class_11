<?php
namespace App\classes;


class Student
{
    public $student = [];

// array practice
    public function index()
    {
        $this->student = [
            0 => [
                'name'      => 'shofi',
                'email'     => 'shofi@gmail.com',
                'mobile'    => [
                    'mobile1' => '13456478',
                    'mobile2' => '356465987',
                ],
            ],
            1 => [
                'name'    => 'rafiq',
                'email'   => 'rafiq@gmail.com',
                'mobile'  => [
                    'mobile1' => '564567974',
                    'mobile2' => '145646781',
                ],
            ],
            2 => 'BITM',
            3 => [
                'name'    => 'nunu mia',
                'email'   => 'nunumia@gmai.com',
                'mobile'  => [
                    'mobile1' => '15645646',
                    'mobile2' => '6987314',
                ],
            ],
        ];



////   ---------------     another array checker with specification --------------------
//
//        echo '<pre>';
//        var_dump($this->student);

////   -------------- array check with out foreach loop
//        echo '<pre>';
//        print_r($this->student);



//      ---------------  multidata check with array  -----------------
//        foreach ($this->student as $key => $item)
//        {
//
////            is_array() ------> array checker that built in function of php
//            if (is_array($item))
//            {
//                foreach ($item as $value)
//                {
//                    if (is_array($value))
//                    {
//                        foreach ($value as $v_value)
//                        {
//                            echo $v_value.' ';
//                        }
//                    }
//                    else
//                    {
//                        echo $value.' ';
//                    }
//                }
//            }
//            else
//            {
//                echo $item;
//            }
//            echo '<br/>';
//        }

////        ---------------nested foreach for unknown array---------------
//        foreach ($this->student as $key => $item)
//        {
//            foreach ($item as $value)
//            {
//                echo $value.' ';
//            }
//            echo '<br/>';
//        }



//        echo $this->student[0]['email'];
//        foreach ($this->student as $key => $item)
//        {
//            echo $item['name'].' '.$item['email'].' '.$item['mobile'].' '.'<br/>';
//
//          //  specific index search
////            if ($key == 0)
////            {
////                echo $item['name'].' '.$item['email'].' '.$item['mobile'].' '.'<br/>';
////                break;
////            }
//           // echo $item['name'].' '.$item['email'].' '.$item['mobile'].' '.'<br/>';
//          //  echo $this->student[$key]
//        }

//---------------------------------single student------------------------------------
//        public function index()
//    {
//        $this->student = [
//            'name'      => 'shofi',
//            'email'     => 'shofi@gmail.com',
//            'mobile'    => '123456789'
//        ];
//
//        echo $this->student['email'];

//        $this->student = [18,10,'BITM',10.20,true,false];
////        echo $this->student[6];
//        foreach ($this->student as $roll=>$student)
//        {
//            echo 'index No -'.$roll.' value ='.$student.'<br/>';
//
    }
}