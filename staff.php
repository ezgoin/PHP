<?php

$staff = [
  1 => ['name' => 'Oleksandr', 'lastname' => 'Maluita', 'email' => 'maluita.alexandr@pdffiller.team', 'bday' => '1990-12-05', 'salary' => '10K'],
  2 => ['name' => 'Ivan', 'lastname' => 'Zvaryka', 'email' => 'zvaryka.ivan@pdffiller.team', 'bday' => '1992-02-10', 'salary' => '10K'],
  3 => ['name' => 'Denys', 'lastname' => 'Lysenko', 'email' => 'lysenko.denys@pdffiller.team', 'bday' => '1996-01-22', 'salary' => '10K'],
  4 => ['name' => 'Oleksii', 'lastname' => 'Kolumbet', 'email' => 'kolumbet.oleksii@pdffiller.team', 'bday' => '1992-01-16', 'salary' => '10K'],
  5 => ['name' => 'Dmytro', 'lastname' => 'Sanin', 'email' => 'dmitriy.sanin@pdffiller.com', 'bday' => '1986-08-02', 'salary' => '10K'],
  6 => ['name' => 'Igor', 'lastname' => 'Leliak', 'email' => 'ihor@pdffiller.team', 'bday' => '1987-03-22', 'salary' => '10K'],
  7 => ['name' => 'Leonid', 'lastname' => 'Kornienko', 'email' => 'leo@pdffiller.com', 'bday' => '1986-05-10', 'salary' => '10K'],
  8 => ['name' => 'Lesia', 'lastname' => 'Kotyk', 'email' => 'kotyk.lesia@pdffiller.team', 'bday' => '1991-11-26', 'salary' => '10K'],
  9 => ['name' => 'Maksym', 'lastname' => 'Maksymenko', 'email' => 'maximenko.m@pdffiller.com', 'bday' => '1989-08-26', 'salary' => '10K'],
  10 => ['name' => 'Maksym', 'lastname' => 'Omelchenko', 'email' => 'omelchenko.maksym@pdffiller.team', 'bday' => 'N/A', 'salary' => '15K'],
  11 => ['name' => 'Oleh', 'lastname' => 'Pidfigurnyi', 'email' => 'pidfihurnyi.oleh@pdffiller.team', 'bday' => '1994-04-24', 'salary' => '10K'],
  12 => ['name' => 'Sofia', 'lastname' => 'Zabiiaka', 'email' => 'zabiiaka.sofiia@pdffiller.team', 'bday' => 'N/A', 'salary' => '10K'],
  13 => ['name' => 'Yevhenii', 'lastname' => 'Zhdan', 'email' => 'zhdan.yevhenii@pdffiller.team', 'bday' => '1995-06-28', 'salary' => '10K'],
  14 => ['name' => 'Yuliia', 'lastname' => 'Dzidzoieva', 'email' => 'dzidzoieva.yuliia@pdffiller.team', 'bday' => '1995-11-01', 'salary' => '10K'],
  15 => ['name' => 'Zhenya', 'lastname' => 'Bessonova', 'email' => 'zhenya_b@pdffiller.com', 'bday' => '1991-03-26', 'salary' => '10K'],
  16 => ['name' => 'Mariia', 'lastname' => 'Zvaryka', 'email' => 'zvaryka.mariia@pdffiller.team', 'bday' => '1993-03-26', 'salary' => '10K']
];

//Calculates age and records the value under $staff[$i]['age']
for ($i = 1; $i <= count($staff); $i++){
    if ($staff[$i]['bday'] == 'N/A') {
    $staff[$i]['age'] = 'N/A';
  }
    else {
    $staff[$i]['age'] = date_diff(date_create($staff[$i]['bday']), date_create('today')) ->y ;
  }
}

class Staff {
  public $id;
  public $name;
  public $lastname;
  public $email;
  public $bday;
  public $age;
  public $salary;

  public function __construct($staff) {
    $this->id = $_GET['id'] ?? null;
   if ($this->id) {
     $id = (int) $this->id;
        if ($id >= 1 && $id <= count($staff)) {
         $this->name = $staff[$this->id]['name'];
         $this->lastname = $staff[$this->id ]['lastname'];
         $this->email = $staff[$this->id ]['email'];
         $this->bday = $staff[$this->id ]['bday'];
         $this->age = $staff[$this->id ]['age'];
         $this->salary = $staff[$this->id]['salary'];
         $this->printStaff();
       } else {
         echo "Error: Incorrect ID!";
       }
   } else if (count($_GET) !== 0) {
      echo "Error: Unknown URL parameter!";
    } else {
     foreach ($staff as $employee) {
       $format ="%s %s<br>Email: %s <br>Birthday: %s <br>Age: %s <br>Salary: $%s<br><br>";
       printf($format, $employee['name'], $employee['lastname'], $employee['email'], $employee['bday'], $employee['age'], $employee['salary']);
     }
   }
  }

  public function printStaff() {
    $format ="%s %s<br>Email: %s <br>Birthday: %s <br>Age: %s <br>Salary: $%s<br><br>";
    printf($format, $this->name, $this->lastname, $this->email, $this->bday, $this->age, $this->salary);
  }
}
