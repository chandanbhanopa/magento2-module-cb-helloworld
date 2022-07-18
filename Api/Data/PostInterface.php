<?php declare(strict_types=1);

namespace CB\Helloworld\Api\Data;

/**
 * Blog post interface
 * @api
 * @since 1.0.0
 * 
 */
interface PostInterface {

	const ID = 'id';
	const TITLE = 'title';
	const CONTENT='content';
	const CREATED_AT ='created_at';

	/**
	 * getId description
	 * @return id 
	 */
	public function getId();

	/**
	 * setId set post id
	 * @param int $id
	 */
	public function setId($id);

	/**
	 * getTitle return the title
	 * @return $this
	 */
	public function getTitle();

	/**
	 * setTitle set the title
	 * @param string $title
	 */
	public function setTitle($title);

	/**
	 * getContent get post content
	 * @return $this
	 */
	public function getContent();

	/**
	 * setContent set post content
	 * @param string $content
	 */
	public function setContent($content);

	/**
	 * getCreatedAt
	 * @return $this
	 */
	public function getCreatedAt();
}
