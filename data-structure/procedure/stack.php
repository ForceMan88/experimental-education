<?php
$stack = range(1, 3);
echo '<h1>Start stack  <h1 style="color:red">' . implode('--', $stack) . '</h2></h1>';

array_push($stack, 33);
echo '<h1>Add element to stack <div style="color:green; display:inline">array_push($stack, 33)</div><h1 style="color:red">' . implode('--', $stack) . ' </h2></h1>';

array_pop($stack);
echo '<h1>Remove element from stack <div style="color:green; display:inline">array_pop($stack)</div><h1 style="color:red">' . implode('--', $stack) . ' </h2></h1>';

array_push($stack, 27);
echo '<h1>Add element to stack <div style="color:green; display:inline">array_push($stack, 27)</div><h1 style="color:red">' . implode('--', $stack) . ' </h2></h1>';

array_push($stack, 144);
echo '<h1>Add element to stack <div style="color:green; display:inline">array_push($stack, 144)</div><h1 style="color:red">' . implode('--', $stack) . ' </h2></h1>';

array_pop($stack);
echo '<h1>Remove element from stack <div style="color:green; display:inline">array_pop($stack)</div><h1 style="color:red">' . implode('--', $stack) . ' </h2></h1>';

array_pop($stack);
echo '<h1>Remove element from stack <div style="color:green; display:inline">array_pop($stack)</div><h1 style="color:red">' . implode('--', $stack) . ' </h2></h1>';

array_pop($stack);
echo '<h1>Remove element from stack <div style="color:green; display:inline">array_pop($stack)</div><h1 style="color:red">' . implode('--', $stack) . ' </h2></h1>';










