<?php
// //Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
echo " Cau 1: ";
function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$Number = 6;
if (isEven($Number)) {
    echo "$Number is even";
} else {
    echo "$Number is odd";
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tính tổng của các số từ 1 đến n.
echo "Cau 2: ";
function sumTong($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 10;
echo sumTong($n);
?>
<?php echo "<br>" ?>

 <?php
// Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
echo "Cau 3: ";
function multiplicationTable() {
    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j);
           //  echo "<br>";
        }
    }
}
multiplicationTable();
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
echo "Cau 4: ";
function containsWord($string, $word) {
    $position = strpos($string, $word);
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "Hello World";
$word = "World";
if (containsWord($string, $word)) {
    echo "Chuỗi có chứa từ '{$word}'.";
} else {
    echo "Chuỗi không có chứa từ '{$word}'.";
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
echo "Cau 5: ";
function timGiaTriLonNhat($arr)
{
    $max = $arr[0];
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

function timGiaTriNhoNhat($arr)
{
    $min = $arr[0];
    $length = count($arr);
    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
        }
    }
    return $min;
}

$arr = array(2, 9, 5, 7, 3, 1, 6);

$giaTriLonNhat = timGiaTriLonNhat($arr);

$giaTriNhoNhat = timGiaTriNhoNhat($arr);

echo "Giá trị lớn nhất trong mảng là: $giaTriLonNhat<br>";
echo "Giá trị nhỏ nhất trong mảng là: $giaTriNhoNhat";
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "Cau 6: ";
function sortAscending($array) {
    sort($array);
    return $array;
}
$array = array(5,8,2,3,9);
$result = sortAscending($array);
echo "Mảng sắp xếp theo thứ tự tăng dần: ";
foreach ($result as $value) {
    echo "$value ";
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "Cau 7: ";
function factorial($num) {
    $result = 1;
    for ($i = 1; $i <= $num; $i++) {
        $result *= $i;
    }
    return $result;
}
$num = 5;
echo "Giai thừa của $num là: " . factorial($num);
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "Cau 8: ";
function isPrime($n) {
    if($n == 1) {
        return false;
    }
    for($i = 2; $i <= sqrt($n); $i++) {
        if($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function getPrimes($start, $end) {
    $result = array();

    for($i = $start; $i <= $end; $i++) {
        if(isPrime($i)) {
            array_push($result, $i);
        }
    }

    return $result;
}
$start = 10;
$end = 30;
$primes = getPrimes($start, $end);
echo "Các số nguyên tố từ $start đến $end là: ";

foreach($primes as $prime) {
    echo $prime . " ";
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "Cau 9: ";
function array_sum_value($arr) {
    $sum = 0;

    foreach($arr as $value) {
        $sum += $value;
    }

    return $sum;
}

$array = array(1,3,4,6,7);
$sum = array_sum_value($array);

echo "Tổng của các số trong mảng là: " . $sum;
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước. VD:0,1,1,2,3,5,8,13,...
echo "Cau 10: ";
function fibonacci($n) {
    if($n == 0) {
        return 0;
    } elseif($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}

function print_fibonacci($start, $end) {
    for($i = $start; $i <= $end; $i++) {
        echo fibonacci($i) . " ";
    }
}

$start = 0;
$end = 10;
echo "Các số Fibonacci từ $start đến $end là: ";
print_fibonacci($start, $end);
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không. VD: 371 = (3 * 3 * 3) + (7 * 7 * 7) + (1 * 1 * 1)
echo "Cau 11: ";
function is_armstrong($num) {
    $sum = 0;
    $temp = (string)$num;
    $length = strlen($temp);

    for($i = 0; $i < $length; $i++) {
        $digit = $temp[$i];
        $sum += pow($digit, $length);
    }

    if($sum == $num) {
        return true;
    } else {
        return false;
    }
}
$num = 371;
if(is_armstrong($num)) {
    echo "$num là số Armstrong.";
} else {
    echo "$num không phải là số Armstrong.";
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "Cau 12: ";
function insert_element($arr, $elem, $pos) {
    if($pos < 0 || $pos > count($arr)) {
        return "Vị trí không hợp lệ.";
    } else {
        array_splice($arr, $pos, 0, $elem);
        return $arr;
    }
}
$Arr = array(1, 2, 3, 5);
$newArr = insert_element($Arr, 6, 3);
print_r($newArr);
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "Cau 13: ";
function remove_duplicates($arr) {
    return array_unique($arr);
}
$Arr = array(1, 2, 3, 3, 6, 5, 5);
$newArr = remove_duplicates($Arr);
print_r($newArr);
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "Cau 14: ";
function find_location($arr, $elem){
    $location = array_search($elem, $arr);
    if ($location === false){
        return "Không tìm thấy phần tử trong mảng."; 

    }
    else{
        return "Phần tử " . $elem . " được tìm thấy ở vị trí " . $location . "."; 
    }
}
$arr = array (2,4,6,7,3);
$elem = 6;
echo find_location($arr, $elem);
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để đảo ngược một chuỗi.
echo "Cau 15: ";
function reverse_string($string){
    $result = "";
    $len = strlen($string); 
    for ($i = $len - 1; $i >= 0; $i--){
        $result .= $string[$i]; 
    }
    return $result; 
}
$string = "Hello World";
echo reverse_string($string);?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "Cau 16: ";
function count_elements($arr){
    $count = count($arr); 
    return $count; 
}
$array = array(1, 2, 3, 4, 5);
echo count_elements($array);?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không. Chuỗi đối xứng VD: MADAM
echo "Cau 17: ";
function is_palindrome($str){
    $reverse_str = strrev($str); 
    if ($str === $reverse_str){
        return true; 
    }
    else{
        return false; 
    }
}
$string = "madamn";
if (is_palindrome($string)){
    echo $string . " là chuỗi Palindrome."; 
}
else{
    echo $string . " không phải chuỗi Palindrome."; 
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "Cau 18: ";
function count_occurrences($arr,$element)
{$count=0;
foreach ($arr as $value){
    if ($value === $element){
        $count ++;
    }
} 
return $count;
}
$arr = array(1,3,2,5,6,2,1,2);
$element =2;
echo count_occurrences($arr,$element);
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần. Giảm dần dùng hàm rsort, tăng dần dùng hàm sort
echo " Cau 19: ";
function sort_descending($arr){
rsort($arr);
return $arr;
}
$arr= array(2,5,7,1,9);
print_r(sort_descending($arr));
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "Cau 20: ";
function add_to_beginning($arr, $element){
    array_unshift($arr, $element); // sử dụng hàm array_unshift để thêm phần tử vào đầu mảng
    return $arr;
}
$arr =  array (1,2,3);
$element = 2;
print_r(add_to_beginning($arr, $element));
echo "<br>";
function add_to_end($arr, $element){
    array_push($arr, $element); // sử dụng hàm array_push để thêm phần tử vào cuối mảng
    return $arr;
}
$arr =  array (1,2,3);
$element = 2;
print_r(add_to_end($arr, $element));
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "Cau 21: ";
function find_second_largest($arr) {
    $largest = $arr[0];
    $secondLargest = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] > $largest) {
        $secondLargest = $largest;
        $largest = $arr[$i];
      } else if ($arr[$i] > $secondLargest && $arr[$i] !== $largest) {
        $secondLargest = $arr[$i];
    }
}
return $secondLargest;
}
$arr = array(4,8,2,0,9);
$secondLargest = find_second_largest($arr);
echo "Số lớn thứ hai trong mảng là: " . $secondLargest;
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "Cau 22: ";
function gcd($a, $b) {
  if ($b == 0) {
    return $a;
  } else {
    return gcd($b, $a % $b);
  }
}

function lcm($a, $b) {
  return ($a * $b) / gcd($a, $b);
}
$a = 9;
$b = 12;

// Tìm ước số chung lớn nhất
$gcd = gcd($a, $b);
echo "Ước số chung lớn nhất của " . $a . " và " . $b . " là: " . $gcd . "<br>";

// Tìm bội số chung nhỏ nhất
$lcm = lcm($a, $b);
echo "Bội số chung nhỏ nhất của " . $a . " và " . $b . " là: " . $lcm;
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không. Tổng các ước thực sự của a((trừ a)) bằng a thì a là số hoàn hảo
echo "Cau 23: ";
function isPerfect($num) {
    $sum = 0;
    
    for ($i = 1; $i < $num; $i++) {
      if ($num % $i == 0) {
        $sum += $i;
      }
    }
    
    if ($sum == $num) {
      return true;
    } else {
      return false;
    }
  }
  $num = 6;
if (isPerfect($num)) {
  echo $num . ' là số hoàn hảo';
} else {
  echo $num . ' không phải là số hoàn hảo';
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "Cau 24: ";
function largest_odd_number($arr) {
    $largestOdd = -1;
    
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] % 2 == 1 && $arr[$i] > $largestOdd) {
        $largestOdd = $arr[$i];
      }
    }
    
    return $largestOdd;
  }
  $arr = array(3,5,7,2,8,4);
$largestOddNumber = largest_odd_number($arr);
echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "Cau 25: ";
function is_prime($number) {
    if ($number <= 1)
        return false;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0)
            return false;
    }

    return true;
}
$number = 23;

if (is_prime($number))
    echo "$number là số nguyên tố";
else
    echo "$number không phải là số nguyên tố";
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "Cau 26: ";
function largest_positive_number($arr) {
    $largestPositive = -1;
    
    for ($i = 0; $i < count($arr); $i++) {
      if ($arr[$i] > $largestPositive && $arr[$i] > 0) {
        $largestPositive = $arr[$i];
      }
    }
    return $largestPositive;
}
$arr = array(-5,6,2,-4,9);
$largestPositiveNumber = largest_positive_number($arr);
if($largestPositiveNumber == -1) {
    echo "Không tìm thấy số dương nào trong mảng";
} else {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositiveNumber;
} 
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "Cau 27: ";
function largest_negative_number($arr) {
    $largestNegative = NULL;
    
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0 && ($largestNegative == NULL || $arr[$i] > $largestNegative)) {
            $largestNegative = $arr[$i];
        }
    }
    
    return $largestNegative;
}
$arr = array(5,-6,3,7,-3);
$largestNegativeNumber = largest_negative_number($arr);
// In số âm lớn nhất ra màn hình
if ($largestNegativeNumber != NULL) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegativeNumber;
} else {
    echo "Không có số âm nào trong mảng.";
}
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo " Cau 28: ";
function sum_odd_numbers($n) {
	$sum = 0;
	for ($i = 1; $i <= $n; $i++) {
		if ($i % 2 != 0) {
			$sum += $i;
		}
	}
	return $sum;
}
$n = 10;
$sum = sum_odd_numbers($n);
echo "Tổng các số lẻ từ 1 đến " . $n . " là: " . $sum;
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "Cau 29: ";
function find_perfect_squares($start, $end){
    $perfect_squares = array(); 
    for($i = $start; $i <= $end; $i++){
        if(floor(sqrt($i)) == sqrt($i)){ // kiểm tra nếu $i là số chính phương
            array_push($perfect_squares, $i); // thêm $i vào mảng số chính phương
        }
    }
    return $perfect_squares;
}
$start = 1;
$end = 20;
print_r(find_perfect_squares($start, $end)); 
?>
<?php echo "<br>" ?>

<?php
// Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "Cau 30: ";
function isSubstring($string, $substring) {
  	if (strpos($string, $substring) !== false) {
    	return true;
  	} else {
    	return false;
  	}
}
$string = "Hello World";
$substring = "World";
if (isSubstring($string, $substring)) {
    echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'";
} else {
    echo "Chuỗi '$substring' không phải là chuỗi con của chuỗi '$string'";
}
?>

