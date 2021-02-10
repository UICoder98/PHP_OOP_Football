<?php
    class Football
    {
        private $color;
        private $diameter;
        private $weight;

        function __construct (array $array)
        {
            setData($this, $array);
        }

        function setColor ($color)
        {
            $this->color = $color;
        }

        function getColor ()
        {
            return $this->color;
        }

        function setDiameter ($diameter)
        {
            $this->diameter = $diameter;
        }

        function getDiameter ()
        {
            return $this->diameter;
        }

        public function setWeight ($weight)
        {
            $this->weight = $weight;
        }

        public function getWeight ()
        {
            return $this->weight;
        }

        /*
        function describeFootball ()
        {
            return "Dieser Fußball ist <span>{$this->getColor()}</span> und hat einen Durchmesser von <span>{$this->getDiameter()}</span> cm. Er wiegt <span>{$this->getWeight()}</span> g.";
        }
        */

        function __toString ()
        {
            return "Dieser Fußball ist <span>{$this->getColor()}</span> und hat einen Durchmesser von <span>{$this->getDiameter()}</span> cm. Er wiegt <span>{$this->getWeight()}</span> g.";
        }
    }
?>