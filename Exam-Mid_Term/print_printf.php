<?php
/*
 * The difference between printf and print is the format argument.
 * This is an expression whose value is taken as a string;
 * it specifies how to output each of the other arguments.
 * The printf statement does not automatically append a newline to its output.
 *  It outputs only what the format string specifies.
  */

$name = "Joe";
print "Hello $name";
echo "Hello $name";
printf('Hello %s', $name);
?>
