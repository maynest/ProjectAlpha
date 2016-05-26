# 52 Printout

In this problem you will create an application that prints all of the cards in a standard 52 card deck.

In Card.php you will notice a few things are already defined for you.

```
abstract class CardData
{
	abstract function getCard();
	abstract function getCardCount();
	abstract function printCardInfo();
}

abstract class Card extends CardData {}

abstract class Deck extends CardData {}
```
 
- Use these three abstract classes that are defined to create a solution to the problem. **Do not modify the abstract classes to satisfy class requirements.**

- The format you print your card data in is up to you, but it should end up looking something like this:


```
This card is the Two of Diamond.
This card is the Three of Diamond.
This card is the Four of Diamond.
This card is the Five of Diamond.
...

```
