<?php

namespace App\PHPStan\Rules;

use PhpParser\Node;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Name;
use PHPStan\Analyser\Scope;
use PHPStan\Rules\RuleErrorBuilder;

class Rules implements \PHPStan\Rules\Rule
{
    public function getNodeType(): string
    {
        return FuncCall::class;
    }

    public function processNode(Node $node, Scope $scope): array
    {
        if ($node instanceof FuncCall && $node->name instanceof Name && $node->name->toLowerString() === 'dd') {
            return [
                RuleErrorBuilder::message('dd détecté')
                    ->identifier('noDd.rule')
                    ->build()
            ];
        }

        return [];
    }
}
