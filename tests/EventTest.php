<?php
/**
 * EventTest class
 *
 * PHP version 5
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 */
require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/EM_EventsMock.php';
require_once __DIR__.'/../lib/Event.php';
use Quai10\Event;
/**
 * Unit tests for Event class
 *
 * PHP version 5
 *
 * @category Template
 * @package  Quai10
 * @author   Pierre Rudloff <contact@rudloff.pro>
 * @author   Damien Senger <hi@hiwelo.co>
 * @license  GPL http://www.gnu.org/licenses/gpl.html
 * @link     https://quai10.org/
 */
class EventTest extends PHPUnit_Framework_TestCase
{
    /**
     * Unit tests for events functions
     * @return void
     */
    public function testGetEvents()
    {
        $this->assertStringStartsWith('<ul><li>', Event::getFutureEvents());
        $this->assertStringStartsWith('<ul><li>', Event::getPastEvents());
    }
}
