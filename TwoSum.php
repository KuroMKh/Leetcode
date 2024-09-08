<?php
class Solution
{

    public function twosum($nums, $target)
    {

        $num = count($nums);
        for ($i = 0; $i < $num; $i++) {
            for ($j = $i + 1; $j < $num; $j++) {
                if ($nums[$i] + $nums[$j] == $target) {
                    return [$i, $j];

                }
            }

        }
    }

}

$obj = new Solution;

$mynums = [2, 7, 11, 15];
$mytarget = 9;

$obj->twosum($mynums, $mytarget);
