<?php
	
	class Employee implements IEmployee
	{
        protected string $name;
		protected int $age;
		protected string $sex;
		private float $salary;
		protected string $surname;

        public function getSalary(): float
        {
            return $this->salary;
        }

        public function setSalary(float $salary)
        {
            if ($salary >= self::MIN_SALARY){
                $this->salary = $salary;
            } else {
                echo 'Неправильне значення $salary, менше за мінімальну';
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
                echo 'Ви не повнолітній і не можете працювати у нас';
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
		public function getSurname(): string
		{
			return $this->surname;
		}
		
		public function setSurname(string $surname)
		{
			if(
				preg_match(self::PATTERN_JUST_LETTERS, $surname)
				&& mb_strlen($surname) > 0
			) {
				$this->surname = $surname;
			} else {
				echo 'Неправильне значення $surname';
			}
		}
		
		public function __construct(string $name, string $surname, $age, float $salary, string $sex)
		{
			$this->setName($name);
			$this->setSurname($surname);
			$this->setAge($age);
			$this->setSalary($salary);
			$this->setGender($sex);
		}
		
		public function toArray(): array
		{
			return [
				'name' => $this->name,
				'surname' => $this->surname,
				'age' => $this->age,
				'salary' => $this->salary,
				'sex' => $this->sex,
			];
		}
	}


