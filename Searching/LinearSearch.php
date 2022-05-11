<?php

/**
 * Class to compute linear search
 */
class LinearSearch
{
    /**
     * Function for Searching the Element in the array
     * Passing array and element to search as parameter
     * returns the index of element, if present
     * else returns -1
     */
    function search($linearSearchArray, $searchElement)
    {
        for ($i = 0; $i < count($linearSearchArray); $i++) {
            if ($linearSearchArray[$i] == $searchElement)
                return $i;
        }
        return -1;
    }
}
$linearSearch = new LinearSearch();

$linearSearchArray = array(99, 1, 85, 10, 100, 2, 3, 20, 5, 4);
$searchElement = 10;
$result = $linearSearch->search($linearSearchArray, $searchElement);
if ($result == -1) {
    echo "Element is not present in array";
} else {
    echo "Element is present at index " . $result;
}

?>