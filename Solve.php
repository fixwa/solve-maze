<?php
declare(strict_types=1);

class Solve
{
    private const WALL = 'A';
    private const EXIT = 'B';
    private const VISITED = '✅';
    private const START = '🏁';
    private const FINISH = '🎉';
    private const PATH = ['X', 'Y', 'C', 'D', 'D', 'D', 'E', 'E', 'E', 'D', 'D', 'D',];
    private array $maze;
    private array $pathSequence;

    public function __construct(array $maze)
    {
        $this->pathSequence = self::PATH;
        $this->maze = $maze;
    }

    public function solve(int $x, int $y)
    {
        if (isset($this->maze[$x][$y]) && $this->maze[$x][$y] === "B") {
            $this->maze[$x][$y] = self::START;
        } else {
            system('clear');
            echo "😰 There is no entrance.";
            return;
        }

        if ($this->walk($x, $y) === true) {
            $this->printMaze();
            echo "💪 Maze resolved.";
        } else {
            $this->printMaze();
            echo "😰 Could not resolve this maze.";
        }
    }

    private function walk(int $x, int $y): ?bool
    {
        $this->printMaze();
        if (!isset($this->maze[$x][$y])) {
            return false;
        }

        if ($this->maze[$x][$y] === self::EXIT) {
            $this->maze[$x][$y] = self::FINISH;
            return true;
        }

        if ($this->maze[$x][$y] === self::VISITED) {
            return false;
        }

        if ($this->maze[$x][$y] === self::WALL) {
            return false;
        }

        $cur = current($this->pathSequence);

        if ($this->maze[$x][$y] === $cur) {
            next($this->pathSequence);
            return false;
        }

        if ($this->maze[$x][$y] !== self::START) {
            $this->maze[$x][$y] = self::VISITED;
        }

        $found = $this->walk($x - 1, $y) ||
            $this->walk($x, $y + 1) ||
            $this->walk($x, $y - 1) ||
            $this->walk($x + 1, $y);

        if ($found) {
            if ($this->maze[$x][$y] !== self::START) {
                $this->maze[$x][$y] = self::VISITED;
            }
        } else {
            $this->maze[$x][$y] = "❌";
        }

        return $found;
    }

    private function printMaze()
    {
        system('clear');
        for ($row = 0; $row < count($this->maze); $row++) {
            for ($col = 0; $col < count($this->maze[$row]); $col++) {
                echo $this->maze[$row][$col] . " ";
            }
            echo PHP_EOL;
        }
        echo PHP_EOL;
        usleep(8000);
    }
}
