<?php
declare(strict_types=1);

include 'solve.php';

function testExercise(int $startX, int $startY)
{
    $labyrinth = [
        ["A", "B", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A"],
        ["A", "C", "A", "D", "D", "E", "A", "C", "C", "C", "D", "A"],
        ["A", "C", "C", "D", "A", "E", "A", "D", "A", "D", "A", "A"],
        ["A", "A", "A", "A", "A", "E", "D", "D", "A", "D", "E", "A"],
        ["A", "C", "C", "D", "D", "D", "A", "A", "A", "A", "E", "A"],
        ["A", "C", "A", "A", "A", "A", "A", "D", "D", "D", "E", "A"],
        ["A", "D", "D", "D", "E", "E", "A", "C", "A", "A", "A", "A"],
        ["A", "A", "A", "E", "A", "E", "A", "C", "C", "D", "D", "A"],
        ["A", "D", "E", "E", "A", "D", "A", "A", "A", "A", "A", "A"],
        ["A", "A", "D", "A", "A", "D", "A", "C", "D", "D", "A", "A"],
        ["A", "D", "D", "D", "A", "D", "C", "C", "A", "D", "E", "B"],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A"],
    ];

    $solver = new Solve($labyrinth);
    $solver->solve($startX, $startY);
}

function testSmallLabyrinth(int $startX, int $startY)
{
    $labyrinth = [
        ["A", "B", "A", "A", "A", "A",],
        ["A", "C", "A", "A", "A", "A",],
        ["A", "C", "A", "A", "E", "E",],
        ["A", "C", "D", "D", "D", "A",],
        ["A", "C", "A", "A", "E", "A",],
        ["A", "A", "A", "A", "E", "A",],
        ["A", "A", "A", "A", "E", "A",],
        ["A", "A", "A", "A", "D", "A",],
        ["A", "A", "A", "A", "D", "A",],
        ["A", "A", "A", "A", "D", "A",],
        ["A", "A", "A", "A", "B", "A",],
    ];

    $solver = new Solve($labyrinth);
    $solver->solve($startX, $startY);
}

function testLargeLabyrinth(int $startX, int $startY)
{
    $labyrinth = [
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "B", "C", "C", "C", "D", "D", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "C", "A", "A", "A", "A", "D", "C", "C", "C", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "D", "A", "A", "D", "A", "A", "A", "A", "A",],
        ["A", "A", "C", "A", "A", "E", "A", "A", "A", "E", "E", "E", "D", "D", "C", "A", "A", "A", "A", "A", "A", "A", "D", "D", "E", "E", "E", "D", "A", "A", "D", "D", "A", "A", "A", "A",],
        ["A", "A", "C", "A", "A", "E", "A", "A", "A", "D", "A", "A", "A", "D", "C", "A", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A",],
        ["A", "A", "C", "D", "D", "D", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A", "D", "D", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "E", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A",],
        ["A", "D", "A", "A", "A", "A", "A", "A", "D", "C", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "C", "A", "E", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A",],
        ["A", "D", "A", "A", "A", "A", "A", "A", "D", "A", "D", "A", "A", "A", "A", "A", "A", "E", "E", "A", "D", "C", "C", "E", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A",],
        ["A", "D", "A", "A", "A", "A", "A", "A", "D", "A", "D", "A", "A", "A", "A", "A", "C", "D", "E", "A", "D", "A", "A", "D", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "E", "A", "D", "A", "A", "A", "A", "A", "C", "A", "E", "C", "D", "A", "A", "D", "A", "A", "A", "A", "A", "D", "D", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "E", "A", "E", "A", "A", "A", "A", "A", "C", "A", "A", "C", "D", "A", "A", "D", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "D", "E", "A", "E", "A", "A", "A", "A", "A", "D", "A", "A", "A", "E", "A", "A", "C", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "E", "A", "A", "A", "A", "A", "D", "A", "A", "A", "E", "A", "A", "C", "A", "A", "A", "A", "E", "E", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "D", "A", "A", "A", "A", "A", "D", "A", "A", "A", "E", "A", "A", "C", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "D", "A", "A", "A", "A", "A", "E", "A", "A", "A", "D", "A", "A", "C", "A", "A", "A", "D", "D", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "D", "A", "A", "A", "A", "A", "E", "A", "A", "A", "D", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "D", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "D", "D", "E", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "D", "E", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "C", "C", "E", "E", "D", "D", "E", "D", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "E", "C", "C", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "C", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "E", "E", "E", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "D", "A", "A", "A", "C", "C", "C", "D", "D", "D", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "D", "A", "A", "A", "E", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "D", "A", "A", "A", "E", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "C", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "C", "A", "A", "A", "A", "A", "A", "A", "D", "D", "C", "C", "C", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "D", "A",],
        ["A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "D", "E", "A", "A", "A", "A", "A", "A", "A", "D", "A", "D", "A",],
        ["A", "A", "A", "E", "A", "C", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "E", "A", "A", "A", "A", "A", "A", "A", "D", "E", "D", "C",],
        ["A", "A", "A", "E", "A", "C", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "E", "D", "A", "A", "A", "A", "A", "A", "A", "E", "A", "C",],
        ["A", "A", "A", "E", "A", "C", "D", "E", "E", "E", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "E", "A", "C",],
        ["A", "A", "A", "D", "D", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "D", "A", "A", "A", "A", "A", "A", "A", "A", "A", "B",],
    ];

    $solver = new Solve($labyrinth);
    $solver->solve($startX, $startY);
}


function testVerySmallLabyrinth(int $startX, int $startY)
{
    $labyrinth = [
        ["A", "B", "A"],
        ["A", "C", "A"],
        ["B", "C", "A"],
    ];

    $solver = new Solve($labyrinth);
    $solver->solve($startX, $startY);
}

// Happy path
testExercise(0, 1);// entrance 1
sleep(2);
testExercise(10, 11);// entrance 2
sleep(2);
testSmallLabyrinth(0, 1); // entrance 1
sleep(2);
testSmallLabyrinth(10, 4);// entrance 2
sleep(2);
testLargeLabyrinth(0, 20); // entrance 1
sleep(2);
testLargeLabyrinth(39, 35); // entrance 2
sleep(2);

// Edge cases
testExercise(0, 0);// Wrong entrance
sleep(2);
testVerySmallLabyrinth(0, 1); // Very small but still with a solution
