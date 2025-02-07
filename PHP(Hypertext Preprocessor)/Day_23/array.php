<html>
    <body>
        <?php
        //Arrays and Functions

        //Array Indexed

        $fruits = ["Apple", "Banana", "Cherry", "Orange"];
        echo "Selected Fruit :" . $fruits[1];

        foreach($fruits as $fruit){
            echo "<br>Fruit :" . $fruit;
        }

        //Associative Arrays
        echo "<br>";
        $ages = ["John" => 25, "Raj" =>20, "Alice"=>22];
        echo "<br>Selected Age :" . $ages["Alice"];
        foreach($ages as $name => $age){
            echo "<br>". $name . " is ". $age. "years old.";
        }

        //Multi-Diementional Array
        echo "<br>";
        $students =[
            ["John", 25, true],
            ["Raj", 20, true],
            ["Alice", 22, false]
        ];
        echo "<br> student 1 is present in the class :" . $students[0][2];
        
        //Array Manipulation

        $classroom = ["Staurat", "Ben", "Rick"];
        foreach($classroom as $student){
            echo "<br> Student :" . $student;
        }

        //Adding Elements

        $classroom[] = "Alen";
        array_push($classroom, "xavier");
        foreach($classroom as $student){
            echo "<br> Student :" . $student;
        }

        //Updating
        echo "<br>";
        $classroom[1] = "Alen";
        foreach($classroom as $student){
            echo "<br> Student :" . $student;
        }

        //Counting Elements
        echo "<br><br>";
        echo "Number of Elements in the array are : " . count($classroom);
        
        //Deleting Elements
        unset($classroom[1]);
        echo "<br>";
        print_r($classroom);

        //Re-indexing Elements
        $classroom = array_values($classroom);
        echo "<br>";
        print_r($classroom);
        ?>
    </body>
</html>