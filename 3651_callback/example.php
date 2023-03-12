 <?php

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
