<?php
$queue = range(3, 7);
echo '<h1>Start queue  <h1 style="color:red">' . implode('--', $queue) . '</h2></h1>';

array_unshift($queue, 33);
echo '<h1>Add element to queue <div style="color:green; display:inline">array_unshift($queue, 33)</div><h1 style="color:red">' . implode('--', $queue) . ' </h2></h1>';

array_shift($queue);
echo '<h1>Remove element from queue <div style="color:green; display:inline">array_shift($queue)</div><h1 style="color:red">' . implode('--', $queue) . ' </h2></h1>';

array_unshift($queue, 27);
echo '<h1>Add element to queue <div style="color:green; display:inline">array_unshift($queue, 27)</div><h1 style="color:red">' . implode('--', $queue) . ' </h2></h1>';

array_unshift($queue, 144);
echo '<h1>Add element to queue <div style="color:green; display:inline">array_unshift($queue, 144)</div><h1 style="color:red">' . implode('--', $queue) . ' </h2></h1>';

array_shift($queue);
echo '<h1>Remove element from queue <div style="color:green; display:inline">array_shift($queue)</div><h1 style="color:red">' . implode('--', $queue) . ' </h2></h1>';

array_shift($queue);
echo '<h1>Remove element from queue <div style="color:green; display:inline">array_shift($queue)</div><h1 style="color:red">' . implode('--', $queue) . ' </h2></h1>';

array_shift($queue);
echo '<h1>Remove element from queue <div style="color:green; display:inline">array_shift($queue)</div><h1 style="color:red">' . implode('--', $queue) . ' </h2></h1>';










