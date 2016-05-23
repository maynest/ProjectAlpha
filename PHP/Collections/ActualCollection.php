<?php
/**
 * Created by IntelliJ IDEA.
 * User: vieiraj
 * Date: 5/17/16
 * Time: 12:52 PM
 */

/* Prompt:
 *
 * Implement ActualCollection and ActualSortedCollection
 *  such that the example application below outputs the expected results
 *
 * This implementation should be general purpose, scalable and readable.
 *
 * example output:
key
stdClass Object
(
)
key8
stdClass Object
(
)

Sorting...

key8
stdClass Object
(
)
key2
stdClass Object
(
)
key
stdClass Object
(
)
 *
 */

require_once 'iCollection.php';

class ActualCollection implements Collection
{

}

class ActualSortedCollection extends ActualCollection implements SortedCollection {


}