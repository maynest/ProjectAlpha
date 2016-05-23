<?php

require_once 'ActualCollection.php';

//Prompt:
//

$collection = new ActualCollection();

$collection->addItem(new stdClass(), "key");
$collection->addItem(new stdClass(), "key8");
$collection->addItem(new stdClass(), "key2");

$collection->delItem("key2");

foreach ($collection as $key => $item) {
	print $key."\n";
	print_r($item);
}

$sortedCollection = ActualSortedCollection::fromUnsorted($collection, SortedCollection::SORT_DESC);
print "\nSorting...\n\n";

$sortedCollection->addItem(new stdClass(), "key2");

foreach ($sortedCollection as $key => $item) {
	print $key."\n";
	print_r($item);
}

//should output
/*

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
  
*/