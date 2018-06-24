<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
abstract class Human {
    private $age;
    private $name;
}
final class Teacher extends Human {
    private $subject;
}
final class Student extends Human {
    private $grade;
}
interface Example {
    public function wakeUp();
    public function goSleep();
}
class Human implements Example {
    public function wakeUp() {

    };
    public function goSleep() {

    };
}
var_dump(new Student());
?>
</body>
</html>
