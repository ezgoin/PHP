<?php

class Staff
{
    public $id;
    public $name;
    public $lastname;
    public $email;
    public $bday;
    public $age;
    public $salary;

    public function __construct(array $staff)
    {
        $this->name = $staff['name'];
        $this->lastname = $staff['lastname'];
        $this->email = $staff['email'];
        $this->bday = $staff['bday'];
        $this->age = ($staff['bday'] == 'N/A') ? 'N/A' : date_diff(date_create($staff['bday']),
            date_create('today'))->y;
        $this->salary = $staff['salary'];
    }

    public function __toString()
    {
        return "<strong>$this->name</strong> email is $this->email and the age is $this->age";
//        $format = "%s %s<br>Email: %s <br>Birthday: %s <br>Age: %s <br>Salary: $%s<br><br>";
//return         printf($format, $this->name, $this->lastname, $this->email, $this->bday, $this->age, $this->salary);
    }
}
