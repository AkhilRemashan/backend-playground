<?php

            $isMale = true;
            $isTall = true;
            
            if($isMale && $isTall){ 
                echo "You are a tall male";
            } 
            elseif($isMale && !$isTall){
                echo "You are a short male";
            }
            elseif(!$isMale && $isTall){
                echo "You are not male but are tall";
            }
            else{
                echo "You are not male and not tall";
            }
          ?>