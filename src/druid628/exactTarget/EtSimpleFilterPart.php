<?PHP

namespace druid628\exactTarget;

use druid628\exactTarget\EtBaseClass;

class EtSimpleFilterPart extends EtBaseClass
{
    public $Property; // String
    public $SimpleOperator; // EtSimpleOperators
    public $Value; // String
    public $DateValue; // dateTime
}

