<?php
$list = range(10, 20);
echo '<h1>Start list <div style="color:green; display:inline"> range(10, 20), current($list)</div> element is  <div style="color:green; display:inline"> '. current($list) . '</div>  <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';


next($list);
echo '<h1>Move our pointer to next element <div style="color:green; display:inline">current($list)</div> element is  <div style="color:green; display:inline"> '. current($list) . ' </div> <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';

next($list);
echo '<h1>Move our pointer to next element <div style="color:green; display:inline">current($list)</div> element is   <div style="color:green; display:inline">'. current($list) . '</div>  <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';

next($list);
echo '<h1>Move our pointer to next element <div style="color:green; display:inline">current($list)</div> element is  <div style="color:green; display:inline">'. current($list) . '</div>  <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';

prev($list);
echo '<h1>Move our pointer to previous element <div style="color:green; display:inline">current($list)</div> element is  <div style="color:green; display:inline">'. current($list) . '</div>  <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';

prev($list);
echo '<h1>Move our pointer to previous element <div style="color:green; display:inline">current($list)</div> element is  <div style="color:green; display:inline">'. current($list) . '</div>  <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';

prev($list);
echo '<h1>Move our pointer to previous element <div style="color:green; display:inline">current($list)</div> element is  <div style="color:green; display:inline">'. current($list) . '</div>  <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';

prev($list);
echo '<h1>Move our pointer to previous element <div style="color:green; display:inline">current($list)</div> element is  <div style="color:green; display:inline">false</div> because ofour pointer is out from array length <h1 style="color:red">' . implode('--', $list) . '</h2></h1>';

