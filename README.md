## Card Casino

This is a library that provides an API for a card game. This is not
any game itself, but more of a library that developers can implement.
This library has three classes: Deck, Hand, and Card.

### Including the library in your PHP project.

In the place where you would like to implement this library, include the
following block of code:

```php
require_once '/path/to/library/cards_php/cards.php';
```

### Example of implementing the API into your project

In your code, below would be an example of creating a Deck and creating a
Hand.

```php
$deck = new Deck();
//$deck->shuffleDeck();

$hand = new Hand();

for ($i = 0; $i < 13; $i++) {
  $hand->addCard($deck->dealCard());
}
print $hand->getHandCount();
```

### Overriding custom classes or functions

If you don't like the implementation of a certain function,
each function in each class is designed to be overriden,
object-oriented style. Below is an example of how to override
the dealCard() function in the Deck class:

```php
class CustomDeck extends Deck {
  public function dealCard() {
  	// Custom code here...
  }
}
```
