<?php

namespace App\Entity;


class Post {

  /**
   * @var int
   */
  protected $id;

  /**
   * @var \DateTime
   */
  protected $createdAt;

  /**
   * @var \DateTime
   */
  protected $updatedAt;

  /**
   * @var bool
   */
  private $isPublished;

  /**
   * @var string
   */
  private $title;

  /**
   * @var string
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