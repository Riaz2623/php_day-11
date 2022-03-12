<?php


namespace App\classes;


class Example
{
    public $student =[];

    public function index()
    {
        $this->student =[
            0=>[
                'name'  =>'jahed',
                'email' =>'re@gmail.com',
                'mobile'=>[
                    'mobile' =>'2567',
                    'mobile' =>'2167'
                ]
            ],
            1=>[
                'name'  =>'Fahed',
                'email' =>'fe@gmail.com',
                'mobile'=>[
                    'mobile'=>'987',
                    'mobile'=>'98725'
                ]
            ],
            2 => 'BITM',
            3=>[
                'name' =>'Riaz',
                'email' =>'r@gmail.com',
                'mobile'=>[
                    'mobile' =>'2567',
                    'mobile' =>'2167'
                ]
            ]
        ];
        echo '<pre>';
       // print_r($this->student);
        var_dump($this->student);
//        foreach ($this ->student as $key => $item)
//        {
//            if(is_array($item))
//            {
//                foreach ($item as $value)
////                {
//        if (is_array($value)){
//            foreach ($value as $v_value){
//                echo $value.' ';
//            }
//
//        }
//                    echo $value.' ';
//
//            }
//            else
//            {
//                echo $item;
//            }
//
//            echo'<br/>';
//        }
//            if($key==0)
//            {
//                echo $item ['name'].' '.$item['email'].' '.$item['mobile'] .'<br/>';
//                break;
//
//            }




//        $this->student =[
//            0=>[
//                'name'  =>'jahed',
//                'email' =>'re@gmail.com',
//                'mobile'=>'12345789',
//            ],
//            1=>[
//                'name'  =>'Fahed',
//                'email' =>'fe@gmail.com',
//                'mobile'=>'123456789',
//            ]
//        ];
//        foreach ($this ->student as$key => $item)
//        {
//            echo $item ['name'].' '.$item['email'].' '.$item['mobile'] .'<br/>';
//        }


//        echo $this->student[0]['mobile'];



//        $this ->student =[10,20, 'BITm', 10.20,true,false];
//        //echo $this->student;
//        foreach ($this->student as $index=> $student)
//        {
//            echo 'index no'.$index.'value-' . $student.'<br/>';
//        }
    }

}