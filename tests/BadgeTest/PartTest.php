<?php

namespace PHP\BadgeTest;

use PHP\Badge\Font\Font;
use PHP\Badge\Part;
use PHPUnit_Framework_TestCase;

class PartTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Font
     */
    private $font;

    /**
     * @var Part
     */
    private $part;

    public function setUp()
    {
        $this->font = new Font(12, 'name', 'path');
        $this->part = new Part('text', 'backcolor', 'forecolor', $this->font, 'width');
    }

    public function testGetText()
    {
        // Arrange
        // ...

        // Act
        $value = $this->part->getText();

        // Assert
        $this->assertEquals('text', $value);
    }

    public function testGetBackColor()
    {
        // Arrange
        // ...

        // Act
        $value = $this->part->getBackColor();

        // Assert
        $this->assertEquals('backcolor', $value);
    }

    public function testGetForeColor()
    {
        // Arrange
        // ...

        // Act
        $value = $this->part->getForeColor();

        // Assert
        $this->assertEquals('forecolor', $value);
    }

    public function testGetFont()
    {
        // Arrange
        // ...

        // Act
        $value = $this->part->getFont();

        // Assert
        $this->assertInstanceOf('PHP\\Badge\\Font\\Font', $this->font);
        $this->assertEquals($this->font, $value);
    }

    public function testGetWidth()
    {
        // Arrange
        // ...

        // Act
        $value = $this->part->getWidth();

        // Assert
        $this->assertEquals('width', $value);
    }

    public function testSetWidth()
    {
        // Arrange
        // ...

        // Act
        $this->part->setWidth('anotherWidth');

        // Assert
        $this->assertEquals('anotherWidth', $this->part->getWidth());
    }
}
