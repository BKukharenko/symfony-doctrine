<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Constraints;



class Post {

  /**
   * @var int
   */
  protected $id;

  /**
   * @var \DateTime
   * @Constraints\DateTime()
   */
  protected $createdAt;

  /**
   * @var \DateTime
   * @Constraints\DateTime()
   */
  protected $updatedAt;

  /**
   * @var bool
   * @Constraints\NotNull()
   */
  private $isPublished;

  /**
   * @var string
   * @Constraints\NotBlank()
   */
  private $title;

  /**
   * @var string
   * @Constraints\NotBlank()
   */
  private $body;

  private $category;

  private $tags;

  /**
   * @return bool
   */
  public function getIsPublished(): bool {
    return $this->isPublished;
  }

  /**
   * @param bool $isPublished
   */
  public function setIsPublished(bool $isPublished) {
    $this->isPublished = $isPublished;

    return $this;
  }

  /**
   * @return string
   */
  public function getTitle(): ?string {
    return $this->title;
  }

  /**
   * @param string $title
   */
  public function setTitle(string $title) {
    $this->title = $title;

    return $this;
  }

  /**
   * @return string
   */
  public function getBody(): ?string {
    return $this->body;
  }

  /**
   * @param string $body
   */
  public function setBody(string $body) {
    $this->body = $body;

    return $this;
  }
}