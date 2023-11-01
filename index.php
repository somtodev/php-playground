<?php
class Todo{

  private $id;
  private $content;

  static $todos = [
    'id' => '01',
    'content' => 'Todo 1'
  ];

  public function __construct()
  {
    echo "Creating Todo";
  }

}

$todo = new Todo();
var_dump($todo::$todos);

$odd = [1,3,5];
$even = [2,4,6];

print implode('-', [...$odd, ...$even]);

function sendMessage(): string {
  return 'Wassup';
}

echo sendMessage();

echo '</br>';
$a = 'hello';
$$a = 'world';
$$$a = 'smile';

print $a;
print $hello;
print $world;

?>
