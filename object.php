<?php
namespace Poo;

// Display errors
ini_set('display_errors', 1);
error_reporting(E_ALL);

/**
 *
 * This is the long description for this class,
 * which can span as many lines as needed. It is
 * not required, whereas the short description is
 * necessary.
 *
 * It can also span multiple paragraphs if the
 * description merits that much verbiage.
 *
 * @author 
 * @copyright 
 * @license
 * @var
 * @param
 * @return
 * @
**/

// Abstract parent class's
abstract class showMe {

    protected $say;
    protected $place;

    function __construct($say,$place) {

        $this->say = $say;
        $this->place = $place;
        
    }

    function __destruct() {
        unset($this->say);
        unset($this->place);
    }

    abstract function _showTxt();

}


//Using Class Inheritance
final class SubClass extends showMe {

    protected $who;

    function __construct($say,$place,$who) {
        parent::__construct($say,$place);  // Call the parent class's constructor
        $this->who = $who;
    }

    public function _showTxt(){
        return $this->say.' '.$this->who.' '.$this->place. PHP_EOL;
    }

    public function __destruct() {
        parent::__destruct(); // Call the parent class's destructor
        unset($this->who);
    }

}

$_show = new SubClass('Welcome','repository','to my');
echo $_show->_showTxt();

//var_dump($_show);

?>
