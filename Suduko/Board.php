<?php

class Board
{
    private  int $size;

    /** @var array<array<Cell>> */
    public $grid;

    public function __construct(int $size)
    {
        $this->size = $size;
        $this->grid = array_fill(0, $size, array_fill(0, $size, new Cell(0)));
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getCell(int $row, int $col)
    {
        return $this->grid[$row][$col];
    }

    public function isCellEmpty(int $row, int $col)
    {
        return $this->grid[$row][$col]->getValue() === 0;
    }

    public function findEmptyCell()
    {
        for ($row = 0; $row < $this->size; $row++) {
            for ($col = 0; $col < $this->size; $col++) {
                if ($this->grid[$row][$col]->getValue() === 0) {
                    return [$row, $col];
                }
            }
        }
        return null;
    }

    public function isSafeMove(int $row, int $col, int $num)
    {

        for ($i = 0; $i < $this->size; $i++) {
            if ($this->grid[$row][$i]->getValue() == $num)   return false;
        }

        for ($i = 0; $i < $this->size; $i++) {
            if ($this->grid[$i][$col]->getValue() == $num)   return false;
        }

        $subgridSize = (int)sqrt($this->size);

        $startRow = $row - $row % $subgridSize;
        $startCol = $col - $col % $subgridSize;

        for ($i = $startRow; $i < $startRow + $subgridSize; $i++) {
            for ($j = $startCol; $i < $startCol + $subgridSize; $j++) {
                if ($this->grid[$i][$j]->getValue() == $num) return false;
            }
        }
        return true;
    }

    public function solve()
    {
        $emptyCell = $this->findEmptyCell();
        if ($emptyCell === null) {
            return true; // Board is already solved
        }

        $row = $emptyCell[0];
        $col = $emptyCell[1];

        for ($num = 1; $num <= $this->size; $num++) {
            if ($this->isSafeMove($row, $col, $num)) {
                $this->grid[$row][$col]->setValue($num);

                if ($this->solve()) {
                    return true;
                }

                // backtrack
                $this->grid[$row][$col]->setValue(0);
            }
        }

        return false;
    }
}
