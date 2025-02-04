# PHP Foreach Loop Bug

This repository demonstrates an uncommon bug in PHP related to using foreach loops to iterate and modify arrays concurrently.

The bug arises from unsetting array elements while iterating through them using a `foreach` loop.  This can lead to elements being unexpectedly skipped because the internal array pointer of the `foreach` loop is not updated properly when elements are removed.  The `bug.php` file illustrates this issue, and `bugSolution.php` provides a corrected approach.

## Bug Description

The core problem is that modifying the array's structure (by unsetting elements) during iteration using `foreach` causes the internal pointer to behave unpredictably.  This often results in some elements being missed or processed incorrectly.

## Solution

The most robust solution is to iterate over a copy of the array or use a different looping mechanism, like a `for` loop, that provides more precise control over indexing.