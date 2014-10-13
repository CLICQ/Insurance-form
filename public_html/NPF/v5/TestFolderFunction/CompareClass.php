<?php
class compare{
    /**
     * @assert (0, 0) == 0
     * @assert (0, 1) == 1
     * @assert (1, 0) == 1
     * @assert (1, 1) == 2
     * @assert (1, 2) == 4
     */
function compare ($v1, $v2) {
if ($v1[2] == $v2[2]) return 0;
return ($v1[2] < $v2[2])? -1: 1;
}

}
?>
