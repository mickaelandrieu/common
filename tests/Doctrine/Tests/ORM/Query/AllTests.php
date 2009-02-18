<?php

namespace Doctrine\Tests\ORM\Query;

if (!defined('PHPUnit_MAIN_METHOD')) {
    define('PHPUnit_MAIN_METHOD', 'Orm_Query_AllTests::main');
}

require_once __DIR__ . '/../../TestInit.php';

class AllTests
{
    public static function main()
    {
        \PHPUnit_TextUI_TestRunner::run(self::suite());
    }

    public static function suite()
    {
        $suite = new \Doctrine\Tests\DoctrineTestSuite('Doctrine Orm Query');

        $suite->addTestSuite('Doctrine\Tests\ORM\Query\IdentifierRecognitionTest');
        $suite->addTestSuite('Doctrine\Tests\ORM\Query\SelectSqlGenerationTest');
        
        /*
        $suite->addTestSuite('Doctrine\Tests\ORM\Query\LanguageRecognitionTest');
        $suite->addTestSuite('Orm_Query_ScannerTest');
        $suite->addTestSuite('Orm_Query_DqlGenerationTest');
        $suite->addTestSuite('Orm_Query_DeleteSqlGenerationTest');
        $suite->addTestSuite('Orm_Query_UpdateSqlGenerationTest');*/

        return $suite;
    }
}

if (PHPUnit_MAIN_METHOD == 'Orm_Query_AllTests::main') {
    AllTests::main();
}