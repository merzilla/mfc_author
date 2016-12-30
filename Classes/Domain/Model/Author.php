<?php
namespace WE\Weauthor\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/


/**
 * Author
 */
class Author extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * firstname
	 *
	 * @var string
	 */
	protected $firstname = '';

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * email
	 *
	 * @var string
	 */
	protected $email;

	/**
	 * profile link
	 *
	 * @var string
	 */
	protected $profilLink;

	/**
	 * author image
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 */
	protected $weAuthorImage = null;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * twitter
	 *
	 * @var string
	 */
	protected $twitter;

	/**
	 * xing
	 *
	 * @var string
	 */
	protected $xing;

	/**
	 * facebook
	 *
	 * @var string
	 */
	protected $facebook;



	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getFullName() {
		return $this->firstname . " " . $this->name;
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	public function getFirstname() {
		return $this->firstname;
	}

	/**
	 * @param string $firstname
	 * @return void
	 */
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}

	/**
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
	 */
	public function getImage() {
		return $this->weAuthorImage;
	}

	/**
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
	 * @return void
	 */
	public function setImage($image) {
		$this->weAuthorImage = $image;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getTwitter() {
		return $this->twitter;
	}

	/**
	 * @param string $twitter
	 * @return void
	 */
	public function setTwitter($twitter) {
		$this->twitter = $twitter;
	}

	/**
	 * @return string
	 */
	public function getXing() {
		return $this->xing;
	}

	/**
	 * @param string $xing
	 * @return void
	 */
	public function setXing($xing) {
		$this->xing = $xing;
	}

	/**
	 * @return string
	 */
	public function getFacebook() {
		return $this->facebook;
	}

	/**
	 * @param string $facebook
	 * @return void
	 */
	public function setFacebook($facebook) {
		$this->facebook = $facebook;
	}

	/**
	 * @return string
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * @return string
	 */
	public function getProfilLink() {
		return $this->profilLink;
	}

	/**
	 * @param string $profilLink
	 * @return void
	 */
	public function setProfilLink($profilLink) {
		$this->profilLink = $profilLink;
	}

	/**
	 * @return array
	 */
	public function toArray(){
		$returnArray['author'] = $this->_getProperties();
		$returnArray['author']['fullName'] = $this->getFullName();
		return $returnArray;
	}

}
