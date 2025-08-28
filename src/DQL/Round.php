<?php
// src/DQL/Round.php
namespace App\DQL;

use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Parser;
use Doctrine\ORM\Query\SqlWalker;
use Doctrine\ORM\Query\TokenType;

class Round extends FunctionNode
{
    public $firstExpression;
    public $secondExpression = null;

    public function getSql(SqlWalker $sqlWalker): string
    {
        $sql = 'ROUND(' . $this->firstExpression->dispatch($sqlWalker);

        if ($this->secondExpression) {
            $sql .= ', ' . $this->secondExpression->dispatch($sqlWalker);
        }

        $sql .= ')';

        return $sql;
    }

    public function parse(Parser $parser): void
    {
        $parser->match(TokenType::T_IDENTIFIER);
        $parser->match(TokenType::T_OPEN_PARENTHESIS);
        $this->firstExpression = $parser->SimpleArithmeticExpression();

        // Invierte los parámetros: primero el valor, luego el tipo
        if ($parser->getLexer()->isA(',', TokenType::T_COMMA)) {
            $parser->match(TokenType::T_COMMA);
            $this->secondExpression = $parser->SimpleArithmeticExpression();
        }

        $parser->match(TokenType::T_CLOSE_PARENTHESIS);
    }
}