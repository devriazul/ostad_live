<!-- 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function. -->

function sortStringsByLength(array $strings): array
{
    usort($strings, function($a, $b) {
        return strlen($a) - strlen($b);
    });

    return $strings;
}

<!-- Example 01: -->

$array = array("apple", "banana", "pear", "orange");
$sortedArray = sortByStringLength($array);
print_r($sortedArray);


<!-- 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string. -->

function concatenateBackward(string $string1, string $string2): string
{
    $length1 = strlen($string1);
    $length2 = strlen($string2);

    if ($length1 >= $length2) {
        $concatenatedString = $string1 . substr($string2, 0, $length2);
    } else {
        $concatenatedString = substr($string2, $length2 - $length1) . $string1;
    }

    return $concatenatedString;
}

<!-- Example 02: -->

$string1 = "hello";
$string2 = "world";
$newString = concatenateStrings($string1, $string2);
echo $newString;


<!-- 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array. -->

function removeFirstAndLastElement(array $array): array
{
    array_shift($array); // Remove the first element
    array_pop($array); // Remove the last element
    return $array;
}

<!-- Example 03: -->

$array1 = array(1, 2, 3, 4, 5);
$array2 = array(1);
$array3 = array();
$newArray1 = removeFirstAndLastElement($array1);
$newArray2 = removeFirstAndLastElement($array2);
$newArray3 = removeFirstAndLastElement($array3);
print_r($newArray1);
print_r($newArray2); 
print_r($newArray3); 


<!-- 4.Write a PHP function to check if a string contains only letters and whitespace. -->

function containsOnlyLettersAndWhitespace(string $string): bool
{
    return preg_match('/^[a-zA-Z\s]+$/', $string) === 1;
}

<!-- Example 04: -->
$string1 = "This is a valid string";
$string2 = "This is not a valid string123";
$string3 = "This is another valid string!";
$string4 = "Thisisnotavalidstring";
echo containsOnlyLettersAndWhitespace($string1); // Output: 1
echo containsOnlyLettersAndWhitespace($string2); // Output: 
echo containsOnlyLettersAndWhitespace($string3); // Output: 1
echo containsOnlyLettersAndWhitespace($string4); // Output: 


<!-- 5.Write a PHP function to find the second largest number in an array of numbers. -->

function findSecondLargestNumber(array $numbers): ?float
{
    if (count($numbers) < 2) {
        return null; // There must be at least two numbers in the array
    }
    
    $largest = $numbers[0];
    $secondLargest = null;
    
    foreach ($numbers as $number) {
        if ($number > $largest) {
            $secondLargest = $largest;
            $largest = $number;
        } elseif ($number != $largest && ($secondLargest === null || $number > $secondLargest)) {
            $secondLargest = $number;
        }
    }
    
    return $secondLargest;
}


<!-- Example 05: -->

$numbers = [10, 2, 7, 6, 8, 1];
$secondLargest = findSecondLargestNumber($numbers);
echo $secondLargest; // Output: 8
