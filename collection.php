<?php

class Collection
{
    private $result = [];

    public function arrangeBiggestNumber($numbers = null)
    {
        global $result;
        
        if($numbers == null) return '';
    
        $a = $numbers;
        $n = count($numbers);
        
        $this->generate(0,$n, $a, $n);
    
        return (count($result) == 0) ? 0 : max($result);
    }
    
    private function generate($l, $r, $a, $n)
    {
        global $result;
        if ($l == $r) {
            $r = [];
            for ($i = 0; $i < $n; $i++) {
                $r[] = $a[$i];
            }
            $result[] = implode('', $r);
        } else {
            for ($i = $l; $i < $r; $i++) {
                
                $v = $a[$l];
                $a[$l] = $a[$i];
                $a[$i] = $v; //{обмен a[i],a[l]}
                $this->generate($l + 1, $r, $a, $n); //{вызов новой генерации}
                $v = $a[$l];
                $a[$l] = $a[$i];
                $a[$i] = $v; //{обмен a[i],a[l]}
            }
        }
    }

    public function summaryRanges($numbers = null)
    {
        if($numbers == null) return [];
        
        $temp_numbers = [];
        $temp_result = [];
    
        foreach ($numbers as $number) {
    
            if(count($temp_numbers) > 0) {
                if(($temp_numbers[count($temp_numbers) - 1] + 1) == $number) {
                    $temp_numbers[] = $number;
                }
                else {
                    $temp_result[] = $temp_numbers;
                    $temp_numbers = [];
                    $temp_numbers[] = $number;
                }
            }
            else {
                $temp_numbers[] = $number;
            }
        }

        if(count($temp_numbers) > 0) {
            $temp_result[] = $temp_numbers;
        }
    
        $result = [];
        
        foreach ($temp_result as $r) {
            if(count($r) > 1) {
                $result[] = array_shift($r) . '->' . array_pop($r);
            }
        }
        
        return $result;
    }
    
    public function longestLength($string = null)
    {
        if($string == null) return 0;
        
        $temp_string = str_split($string);
        
        $result = [];

        $temp = [];
        
        for ($i = 0; $i < count($temp_string); $i++) {
            
            for($j = $i; $j < count($temp_string); $j++) {

                if(!in_array($temp_string[$j], $temp)) {
                    $temp[] = $temp_string[$j];
                }
                else {
                    $result[] = count($temp);
                    $temp = [];
                }

            }
            
        }
        
        return (count($result) == 0) ? 0 : max($result);
    }
    
}