<?php
    require_once(__DIR__ . '/paymentMethod.php');
    class pipay
    {
        protected $item;
        protected $price;
        protected $quantity;
        
        public function __construct($item, $price, $quantity)
        {
            $this->item = $item;
            $this->price = $price;
            $this->qty = $quantity;
        }

        public function getitem()
        {
            return $this->item;
        }

        public function gettotal()
        {
            return $this->price * $this->qty;
        }
    }


?>