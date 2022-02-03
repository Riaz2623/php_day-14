<?php


namespace App\classes;


class Student
{
    protected $text;
    protected $students;
    protected $result = [];
    public function __construct($post=null)
    {
        if(isset($post['search']))

        {
            $this->text = $post['search'];

        }
    }

    public function getAllStudent()
    {
        return [
            0=>[
                'name' => 'Riazul Islam',
                'mobile' => '01716337420',
                'email' => 'r@gmail.com',
                'address' => 'lalbagh'
            ],
            1=>[
                    'name' => 'Himel Islam',
                    'mobile' => '0171632513',
                    'email' => 'h@gmail.com',
                    'address' => 'rampura'
                ],
            2=>[
                'name' => ' url Islam',
                'mobile' => '012513',
                'email' => 'i@gmail.com',
                'address' => 'dhaka'
            ],
            3=>[
                'name' => 'Rija',
                'mobile' => '632513',
                'email' => 'u@gmail.com',
                'address' => 'savar'
            ],
            4=>[
                'name' => 'Tonmoy',
                'mobile' => '01759299431',
                'email' => 't@gmail.com',
                'address' => 'bhola'
            ],
            4=>[
                'name' => 'Rana',
                'mobile' => '299431',
                'email' => 'ra@gmail.com',
                'address' => 'barisal'
            ],
        ];
    }
    public function getStudentBySearchText()
    {
       $this->students = $this->getAllStudent();
       foreach ($this->students as $student)
       {
           if($this->text == $student['name'])
           {
               $this->result = $student;
               break;
           }
       }
       return $this->result;
    }

}