<?php

class WhiteTesting {
    public function sumRange($start, $end) {
        $sum = 0;
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 == 0) {
                $sum += $i;
            }
        }
        return $sum;
    }
}


