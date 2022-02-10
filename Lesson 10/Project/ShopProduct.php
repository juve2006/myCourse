<?php

use ShopProduct\Info\BaseInfo;
	
abstract class ShopProduct
{
		/** @var BaseInfo */
		protected BaseInfo $info;
		
		/** @var string */
		private string $title;
		
		/** @var string */
		private string $producer;
		
		/** @var int */
		private int $price;
		
		/**
		 * @param string $title
		 * @param string $producer
		 * @param int $price
		 */
		public function __construct(
			string $title,
			string $producer,
			int    $price
		)
		{
			$this->title = $title;
			$this->producer = $producer;
			$this->price = $price;
		}
		
		/**
		 * @return string
		 */
		abstract public function getProductType(): string;
		
		/**
		 * @return BaseInfo
		 */
		public function getInfo(): BaseInfo
		{
			return $this->info;
		}
		
		/**
		 * @return string
		 */
		public function getTitle(): string
		{
			return $this->title;
		}
		
		/**
		 * @return string
		 */
		public function getProducer(): string
		{
			return $this->producer;
		}
		
		/**
		 * @return int
		 */
		public function getPrice(): int
		{
			return $this->price;
		}
}
