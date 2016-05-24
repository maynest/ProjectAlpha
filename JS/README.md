Problem statements
=================
- Assume that features of the most recent language standard are available.
- We expect good performance.
- If missing more requirements details, just make reasonable assumptions of
your own.
- Solution must be simple and compact. No defensive coding, no comments, no
unrequested features.

## CSV
Implement compile_csv_search() that parses text in the CSV format.

- Assume field values do not contain quotes or other special characters.
- Assume that all values in the key field are unique.
- Only one file 10-15 lines of code.

    Sample usage:
 ```js
 var csv_by_name = compile_csv_search(
        "ip,name,desc\n"+
        "10.49.1.4,server1,Main Server\n"+
        "10.52.5.1,server2,Backup Server\n",
        "name");
console.log(csv_by_name("server2"));
console.log(csv_by_name("server9"));
```
will print:
```
{ip: "10.52.5.1", name: "server2", desc: "Backup Server"}
undefined
```

## PrioritizedQueue

Implement a Priority Queue. This should function like a normal queue, but allowing for retrieving the top priority item, rather than the first in.

 - Assume that features of the most recent language standard are available.
 - We expect good performance.
 - If missing more requirements details, just make reasonable assumptions of
 your own.


Example Usage:
```js
    queue = new PriorityQueue();
    var dataObjectOne = {thing: "value"};
    var priorityOne = 1;
    var dataObjectTwo = {thing: "value2"};
    var priorityTwo = 2;
    queue.enq(dataObjectOne,priorityOne);
    queue.enq(dataObjectTwo,priorityTwo);

    var data = queue.deq();
    console.log(data);
````
Example output:
```js
    {thing: "value2"}
```
