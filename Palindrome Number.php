<?php
class Solution
{
    public function isPalindrome($x)
    {
        $inordernumb = strval($x);
        $revordernumb = strrev($inordernumb);
        if ($revordernumb == $inordernumb) {
            return true;
        } else {
            return false;
        }

    }
}

$obj = new Solution;
$mynums = 121;
$obj->isPalindrome($mynums);

