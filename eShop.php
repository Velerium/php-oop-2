<?php

    require_once('shopClasses.php');

    class EShop {

        public $siteName;
        public $URL;
        private $products = [];

        public function __construct(string $eShopName, string $URL) {
            $this->siteName = $eShopName;
            $this->URL = $URL;
        }

        public function addTechProduct($itemLabel, $itemPrice, $itemType, $techBrand) {

            $techProduct = [];

            array_push($techProduct, (object)[

                'generalLabel' => 'Product on sale',
                'productType' => 'Tech',
                'itemlabel' => $itemLabel,
                'itemPrice' => $itemPrice,
                'itemType' => $itemType,
                'techBrand' => $techBrand,
            ]);

            $this->products[] = $techProduct;

        }

        public function addCosmeticProduct($itemLabel, $itemPrice, $itemType, $appliedBodyPart) {

            $cosmeticProduct = [];

            array_push($cosmeticProduct, (object)[

                'generalLabel' => 'Product on sale',
                'productType' => 'Cosmetic',
                'itemlabel' => $itemLabel,
                'itemPrice' => $itemPrice,
                'itemType' => $itemType,
                'appliedBodyPart' => $appliedBodyPart,
            ]);

            $this->products[] = $cosmeticProduct;

        }

        public function addFoodProduct($itemLabel, $itemPrice, $itemType, $foodType) {
            
            $foodProduct = [];

            array_push($foodProduct, (object)[

               'generalLabel' => 'Product on sale',
               'productType' => 'Food',
               'itemlabel' => $itemLabel,
               'itemPrice' => $itemPrice,
               'itemType' => $itemType,
               'techBrand' => $foodType,
            ]);

            $this->products[] = $foodProduct;

        }

        public function getProducts() {
            return $this->products;
        }

        public function buyItem() {
            //...
        }
    }

    $myEShop = new EShop ('Amazon', 'https://www.amazon.com');

    $myEShop->addTechProduct('Lorem','899€', 'Smartphone', 'Samsung');
    $myEShop->addTechProduct('Ipsum', '1999€', 'PC', 'Corsair');
    $myEShop->addCosmeticProduct('Eyeliner', '29€', 'Makeup', 'Eyes');
    $myEShop->addFoodProduct('Kinder™', '2.99€', 'Junk', 'Sweets');
    $myEShop->addFoodProduct('Carrots', '0.99€', 'Healthy', 'Veggie');

    var_dump($myEShop->getProducts());

?>