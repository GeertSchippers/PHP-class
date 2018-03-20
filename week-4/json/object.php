<?phps
class Kantoor{
    public $nietmachine = 'staples';
    public $printer = 'hp';
}
$eenkantoor = new Kantoor();

$hetkantoor = json_encode($eenkantoor);

echo $hetkantoor;