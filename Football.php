<?php
    class Football
    {
        private $color;
        private $diameter;

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

        function describeFootball ()
        {
            return "Dieser Fußball ist {$this->getColor()} und hat einen Durchmesser von {$this->getDiameter()} cm.";
        }
    }
?>