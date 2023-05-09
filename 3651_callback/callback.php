 <?php


 /**
  * 0
  * typical use with array_map (anonymous/arrow function)
 */
$array = [1, 2, 3];
// 0a. - anonymous function
$resultAnonymous = array_map(function ($item) {
    return '(0a) item: ' . $item + 1;
}, $array);
print_r($resultAnonymous);

// 0b. - arrow function
$resultArrow = array_map(
    fn ($item) => '(0b) item: ' . $item + 1,
    $array
);
print_r($resultArrow);

// 0c. - anonymous function amCallback()
function amCallback($item) {
    return '(0c) item: ' . $item + 1;
}
$resultArrow = array_map('amCallback', $array);
print_r($resultArrow);


/**
 * 1
*/
function addTextWithCallback(string $string) {
    return $string . " + text from callable\n";
}
function printMessage(string $string, callable $callable) {
    echo $callable($string);
}
printMessage("(1) Hello world", "addTextWithCallback");


/**
 * 2
*/
function fun(){
    echo "(2) Hello World\n";
}
echo '(2) is_callable? ' . is_callable("fun") . "\n";
call_user_func("fun");


/**
 * 3
*/
call_user_func(function(){
    echo "(3) Hello World\n";
});


/**
 * 4
*/
function callableFun()
{
    echo '(4) Hello World';
}
function runCallable(callable $cf)
{
   $cf();
}
runCallable('callableFun');


?>
