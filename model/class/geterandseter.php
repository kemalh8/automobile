<?php



    class geterandseter{
        private $id;
        private $marque;
        private $model;
        private $énergie;
        private $description;
        private $picture;

        public function __construct($id,$marque,$model,$énergie,$description,$picture){
            $this->id = $id;
            $this->marque = $marque;
            $this->model = $model;
            $this->énergie = $énergie;
            $this->description = $description;
            $this->picture = $picture;

        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of marque
         */ 
        public function getMarque()
        {
                return $this->marque;
        }

        /**
         * Set the value of marque
         *
         * @return  self
         */ 
        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        /**
         * Get the value of model
         */ 
        public function getModel()
        {
                return $this->model;
        }

        /**
         * Set the value of model
         *
         * @return  self
         */ 
        public function setModel($model)
        {
                $this->model = $model;

                return $this;
        }

        /**
         * Get the value of énergie
         */ 
        public function getÉnergie()
        {
                return $this->énergie;
        }

        /**
         * Set the value of énergie
         *
         * @return  self
         */ 
        public function setÉnergie($énergie)
        {
                $this->énergie = $énergie;

                return $this;
        }

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
                return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
                $this->description = $description;

                return $this;
        }

        /**
         * Get the value of picture
         */ 
        public function getPicture()
        {
                return $this->picture;
        }

        /**
         * Set the value of picture
         *
         * @return  self
         */ 
        public function setPicture($picture)
        {
                $this->picture = $picture;

                return $this;
        }
    }
    

?>