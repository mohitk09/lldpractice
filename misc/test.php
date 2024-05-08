<?php

class Node
{
    public int $key;
    public string $value;
    public Node $next;
    public Node $prev;

    public function __construct(int $key, int $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}


class LRUCache
{
    public Node $head;
    public Node $tail;

    public function insertNode(Node $newNode)
    {
        $temp = $this->head->next;
        $newNode->next = $temp;
        $newNode->prev = $this->head;
        $this->head->next = $newNode;
        $temp->prev = $newNode;
    }

    public function createNode(int $key, int $val)
    {
        return new Node($key, $val);
    }

    /** @var array<int, Node> */
    public $hash;

    public function __construct()
    {
        $this->head = new Node(-1, -1);
        $this->tail = new Node(-1, -1);
    }
}
