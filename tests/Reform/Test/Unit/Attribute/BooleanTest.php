<?php

namespace Reform\Test\Unit\Attribute;

use Reform\Attribute;

require_once 'AttributeTestCase.php';

/**
 * Attribute test case
 * 
 * @package   Reform
 * @copyright Copyright (c) 2012 Andrew Lawson <http://adlawson.com>
 * @license   New BSD License <LICENSE>
 * 
 * @covers Reform\Attribute\Boolean
 */
class BooleanTest extends AttributeTestCase
{
    /**
     * Value data provider
     * @return array
     */
    public function valueDataProvider()
    {
        return array_merge( parent::valueDataProvider(), array(

            array( new \stdClass )

        ));
    }

    /**
     * Invalid value data provider
     * @return array
     */
    public function invalidValueDataProvider()
    {
        return array();
    }

    /**
     * Setup the test case
     */
    public function setUp()
    {
        $this->setAttributeClass( 'Reform\Attribute\Boolean' );
    }

    /**
     * @covers Reform\Attribute\Boolean::getValue
     * @covers Reform\Attribute\Boolean::setValue
     * @dataProvider valueDataProvider
     * @param mixed $value
     */
    public function testValue( $value )
    {
        $attribute = new Attribute\Boolean( 'attribute_name', $value );

        $this->assertSame( (boolean) $value, $attribute->getValue() );
    }

    /**
     * @covers Reform\Attribute\Boolean::__toString
     */
    public function testToString_CaseTrue()
    {
        $name = 'attribute_name';
        $value = true;

        $attribute = new Attribute\Boolean( $name, $value );

        $this->assertTrue( false !== strpos( (string) $attribute, $name ), 'String doesn\'t contain the attribute name.' );
        $this->assertTrue( false === strpos( (string) $attribute, $value ), 'String contains the attribute value.' );
    }

    /**
     * @covers Reform\Attribute\Boolean::__toString
     */
    public function testToString_CaseFalse()
    {
        $name = 'attribute_name';
        $value = false;

        $attribute = new Attribute\Boolean( $name, $value );

        $this->assertTrue( false === strpos( (string) $attribute, $name ), 'String contains the attribute name.' );
        $this->assertTrue( false === strpos( (string) $attribute, $value ), 'String contains the attribute value.' );
    }
}