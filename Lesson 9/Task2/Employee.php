<?php
	
	class Employee implements IEmployee
	{
        private string $name;
        private int $age;
        private string $sex;
        private float $salary;

        public function getSalary(): float
        {
            return $this->salary;
        }

        public function setSalary(float $salary)
        {
            if ($salary >= self::MIN_SALARY){
                $this->salary = $salary;
            } else {
                echo 'Неправильне значення $salary';
            }
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function setName(string $name)
        {
           if(
               preg_match(self::PATTERN_JUST_LETTERS, $name)
               && mb_strlen($name) > 0  // надіюсь 0 не треба в константи))
           ) {
               $this->name = $name;
           } else {
               echo 'Неправильне значення $name';
           }
        }

        public function getAge(): int
        {
           return $this->age;
        }

        public function setAge(int $age)
        {
            if(
                $age < self::MIN_AGE
                || $age > self::MAX_AGE
            ) {
                echo 'Неправильне значення $age';
            } else if (
                $age > self::MIN_AGE
                && $age < self::AGE_OF_MAJORITY
            ) {
                echo 'Ви не повнолітній';
            }  else {
                $this->age = $age;
            }
        }

        public function getGender(): string
        {
            return $this->sex;
        }

        public function setGender(string $sex)
        {
            if(
                $sex === self::SEX_MALE
                || $sex === self::SEX_FEMALE
            ) {
                $this->sex = $sex;
            } else {
                echo 'Неправильне значення $sex';
            }
        }
    }


