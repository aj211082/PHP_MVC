<?php
/**
 * Created by PhpStorm.
 * User: Vaio-T
 * Date: 11-08-2015
 * Time: 00:38
 */

require_once ('../../config/database.php');

class DatabaseTest extends \PHPUnit_Framework_TestCase
{
    public  $db;

    function setUp() {
        $this->db = new Database();
    }

    /**
     * @covers Database::getConnection
     * @group getConnection
     * @group specification
     */
    function testGetConnection() {
        $this->assertNull(null,$this->db->getConnection());
    }

    /**
     * @covers Database::selectData
     * @group selectData
     * @depends testGetConnection
     */
    function testSelectData() {
        $data = json_decode($this->db->selectData());
        $this->assertEquals(9, $data->total,"10 records should be returned");
    }

    /**
     * @covers Database::selectData
     * @group selectData
     * @group specification
     */
    function testInsertData() {
        $data = array();
        $this->assertNotFalse($this->db->insertData($data), "Data should be inserted");
    }

    /**
     * @expectedException        InvalidArgumentException
     * @expectedExceptionMessage Bad data
     * @internal param $data
     */
    function testDeleteData() {
        if($this->db->deleteData("")) {
            throw new \Doctrine\Instantiator\Exception\InvalidArgumentException('Bad data');
        }
    }

    /**
     * @expectedException InvalidArgumentException
     */
    function testException() {

    }


}
