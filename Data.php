<?php
    function setData ($object, array $data = [])
    {
        if ($data)
        {
            foreach ($data as $key => $value)
            {
                $setterName = "set" . ucfirst($key);

                if (method_exists($object, $setterName))
                {
                    $object->$setterName($value);
                }
            }
        }
    }
?>