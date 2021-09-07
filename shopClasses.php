<?php

    class User {

        protected $label = 'User';
        protected $userSub; // premium, gold...

        public function getLabel() {
            return $this->label;
        }

        public function getUserSub() {
            return $this->userSub;
        }

    }

        class Premium extends User {

            public $reservedSalePercentage = 20;
            
            public function __construct() {
                $this->label = 'UserPlus';
                $this->userSub = 'premium';
            }

        }

        class Gold extends User {

            public $reservedSalePercentage = 40;

            public function __construct() {
                $this->label = 'UserWow';
                $this->userSub = 'gold';
            }
        }

    class Product {

        protected $generalLabel = 'Product on sale';
        protected $productType;
        protected $itemPrice;

        public function getLabel() {
            return $this->generalLabel;
        }

        public function getProductType() {
            return $this->productType;
        }

    }

        class TechProduct extends Product {

            //public $productType = 'Tech';
            public $techBrand;

            public function __construct($generalLabel, $productType, $itemLabel, $itemType, $itemPrice, $techBrand) {
                $this->itemLabel = $itemLabel;
                $this->itemType = $itemType;
                $this->techBrand = $techBrand;
            }

        }

        class CosmeticProduct extends Product {

            //$productType = 'Cosmetic';
            public $appliedBodyPart;

            public function __construct($generalLabel, $productType, $itemLabel, $itemType, $itemPrice, $appliedBodyPart) {
                $this->generalLabel = $generalLabel;
                $this->itemLabel = $itemLabel;
                $this->itemType = $itemType;
                $this->appliedBodyPart = $appliedBodyPart;
            }

        }

        class FoodProduct extends Product {

            //$productType = 'Food';
            public $foodType;

            public function __construct($generalLabel, $productType, $itemLabel, $itemType, $itemPrice, $foodType) {
                $this->generalLabel = $generalLabel;
                $this->itemLabel = $itemLabel;
                $this->itemType = $itemType;
                $this->foodType = $foodType;
            }

        }

?>