<?php

require_once 'antlr.php';
require_once 'generated/t031emptyAltLexer.php';
require_once 'generated/t031emptyAltParser.php';

class Parser031Test extends PHPUnit_Framework_TestCase
{
    public function testValid1()
    {
        $p = $this->createParser('foo');
        $events = $p->r();
    }

    /**
     *
     * @param <type> $input
     * @return t030specialStatesParser
     */
    public function createParser($input)
    {
        $ass = new ANTLRStringStream($input);
        $lexer = new t031emptyAltLexer($ass);
        $ts = new CommonTokenStream($lexer);
        $parser = new t031emptyAltParser($ts);
        return $parser;
    }
}