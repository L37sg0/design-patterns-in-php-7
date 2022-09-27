<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Composite\Tests;

use L37sg0\DesignPatterns\Structural\Composite\Form;
use L37sg0\DesignPatterns\Structural\Composite\InputElement;
use L37sg0\DesignPatterns\Structural\Composite\TextElement;
use PHPUnit\Framework\TestCase;

class CompositeTest extends TestCase
{
    public function testRender() {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        // This is just an example, in a real world scenario it is important to remember that web browsers do not
        // currently supports nested forms

        var_dump($form->render());

        $this->assertSame('<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>', $form->render());
    }
}