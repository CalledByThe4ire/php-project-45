### Hexlet tests and linter status:
[![Actions Status](https://github.com/CalledByThe4ire/php-project-45/actions/workflows/php-ci.yml/badge.svg)](https://github.com/CalledByThe4ire/php-project-45/actions)

[![Maintainability](https://api.codeclimate.com/v1/badges/9e3222f882d6aa794540/maintainability)](https://codeclimate.com/github/CalledByThe4ire/php-project-45/maintainability)

Brain Games
===========

«Brain Games» --- a set of five console games based on popular mobile brain training apps.

[](https://github.com/Foreachq/brain-games#description)Description
------------------------------------------------------------------

Each game asks questions that need to be answered correctly. After three correct answers, the game is considered to be completed. Wrong answers end the game and offer to play it again.

Games:

-   Calculator. Arithmetic expressions to be evaluated.
-   Progression. Search for missing numbers in a sequence of numbers.
-   Definition of an even number.
-   Determining the greatest common divisor.
-   Definition of a prime number.

[](https://github.com/Foreachq/brain-games#requirements)Requirements
--------------------------------------------------------------------

-   php 7.4
-   composer 2.*

[](https://github.com/Foreachq/brain-games#installation)Installation
--------------------------------------------------------------------

-   Download package

```source-shell
composer create-project foreachq/brain-games
```

-   Install dependencies

```
make install

```

[](https://github.com/Foreachq/brain-games#usage)Usage
------------------------------------------------------

-   Choose 1 game from list:

    -   Definition of an even number (brain-even)
    -   Calculator (brain-calc)
    -   Determining the greatest common divisor (brain-gcd)
    -   Progression (brain-progression)
    -   Definition of a prime number (brain-prime)
-   Run make command:

```
make <game-name>
```
