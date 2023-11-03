install:
	composer install

console:
	composer exec --verbose psysh

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

lint-fix:
	composer exec --verbose phpcbf -- --standard=PSR12 src bin

validate:
	composer validate

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-prime:
	./bin/brain-prime

brain-calc:
	./bin/brain-calc

brain-gcd:
	./bin/brain-gcd

brain-progression:
	./bin/brain-progression
