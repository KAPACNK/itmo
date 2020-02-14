<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookRepository")
 */
class Book
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $book_year;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $book_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $book_isbn;

    /**
     * @ORM\Column(type="integer")
     */
    private $pages_number;

    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $book_cover;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBookYear(): ?int
    {
        return $this->book_year;
    }

    public function setBookYear(int $book_year): self
    {
        $this->book_year = $book_year;

        return $this;
    }

    public function getBookName(): ?string
    {
        return $this->book_name;
    }

    public function setBookName(string $book_name): self
    {
        $this->book_name = $book_name;

        return $this;
    }

    public function getBookIsbn(): ?string
    {
        return $this->book_isbn;
    }

    public function setBookIsbn(string $book_isbn): self
    {
        $this->book_isbn = $book_isbn;

        return $this;
    }

    public function getPagesNumber(): ?int
    {
        return $this->pages_number;
    }

    public function setPagesNumber(int $pages_number): self
    {
        $this->pages_number = $pages_number;

        return $this;
    }

    public function getBookCover(): ?string
    {
        return $this->book_cover;
    }

    public function setBookCover(?string $book_cover): self
    {
        $this->book_cover = $book_cover;

        return $this;
    }
}
