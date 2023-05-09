<?php
    function getStreamName($id){
        $values = array(
            "1"=>"Languages",
            "2"=>"Islamic Education",
            "3"=>"Humanities and Special Literature",
            "4"=>"STEM (Pure Science and Additional Mathematics)",
            "5"=>"STEM (Applied Science and Technology)",
            "6"=>"STEM (Vocational)"
        );
        return $values[$id];
    }
?>
