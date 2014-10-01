Results of test cases for testBasic.php and testQuestion.php
========================================================================================================
testBasic.php Unit Test Results
========================================================================================================

root@dsk20:/var/www/php-assessment-master# phpunit --verbose tests/testBasics.php 
PHPUnit 4.2.6 by Sebastian Bergmann.

...

Time: 42 ms, Memory: 1.75Mb

OK (3 tests, 3 assertions)
========================================================================================================
testQuestion.php Unit Test Results
========================================================================================================

root@dsk20:/var/www/php-assessment-master# phpunit --verbose tests/testQuestion.php 
PHPUnit 4.2.6 by Sebastian Bergmann.

.FFFFFF

Time: 48 ms, Memory: 2.25Mb

There were 6 failures:

1) QuestionTest::testInstantiationById
Failed asserting that a NULL is not empty.

/var/www/php-assessment-master/tests/testQuestion.php:18
phar:///usr/local/bin/phpunit/phpunit/TextUI/TestRunner.php:423
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:186
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:138

2) QuestionTest::testStaticGetNameById
Failed asserting that a NULL is not empty.

/var/www/php-assessment-master/tests/testQuestion.php:28
phar:///usr/local/bin/phpunit/phpunit/TextUI/TestRunner.php:423
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:186
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:138

3) QuestionTest::testStaticGetTextById
Failed asserting that a NULL is not empty.

/var/www/php-assessment-master/tests/testQuestion.php:35
phar:///usr/local/bin/phpunit/phpunit/TextUI/TestRunner.php:423
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:186
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:138

4) QuestionTest::testStaticGetAnswerById
Failed asserting that a NULL is not empty.

/var/www/php-assessment-master/tests/testQuestion.php:42
phar:///usr/local/bin/phpunit/phpunit/TextUI/TestRunner.php:423
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:186
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:138

5) QuestionTest::testStaticGetCreatedById
Failed asserting that a NULL is not empty.

/var/www/php-assessment-master/tests/testQuestion.php:49
phar:///usr/local/bin/phpunit/phpunit/TextUI/TestRunner.php:423
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:186
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:138

6) QuestionTest::testQuestionsAnswered
Failed asserting that a NULL is not empty.

/var/www/php-assessment-master/tests/testQuestion.php:56
phar:///usr/local/bin/phpunit/phpunit/TextUI/TestRunner.php:423
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:186
phar:///usr/local/bin/phpunit/phpunit/TextUI/Command.php:138

FAILURES!
Tests: 7, Assertions: 7, Failures: 6.

********************************************************************************************************