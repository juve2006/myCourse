<?php
//Створити інтерфейс IUser з методами getName, setName, getAge, setAge, getGender, setGender.
	interface IUser
    {
        public const AGE_OF_MAJORITY = 18;

        public const MAX_AGE = 150;

        public const MIN_AGE = 0;

        public const SEX_MALE = 'male';

        public const SEX_FEMALE = 'female';

        public const PATTERN_JUST_LETTERS = "/^\D+$/";

	    public function getName(): string;

        public function setName(string $name);

        public function getAge(): int;

        public function setAge(int $age);

        public function getGender(): string;

        public function setGender(string $sex);
    }