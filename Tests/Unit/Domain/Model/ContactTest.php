<?php

namespace VFVC\VfvcAnnuairevfvc\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Valentin Faugier <valentinfaugier@gmail.com>, dawin-alt
 *           Vincent Cousin <vincent.cousin3@gmail.com>, dawin-alt
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \VFVC\VfvcAnnuairevfvc\Domain\Model\Contact.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Valentin Faugier <valentinfaugier@gmail.com>
 * @author Vincent Cousin <vincent.cousin3@gmail.com>
 */
class ContactTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \VFVC\VfvcAnnuairevfvc\Domain\Model\Contact
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \VFVC\VfvcAnnuairevfvc\Domain\Model\Contact();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNomReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getNom()
		);
	}

	/**
	 * @test
	 */
	public function setNomForStringSetsNom()
	{
		$this->subject->setNom('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nom',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPrenomReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPrenom()
		);
	}

	/**
	 * @test
	 */
	public function setPrenomForStringSetsPrenom()
	{
		$this->subject->setPrenom('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'prenom',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTelephone()
		);
	}

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone()
	{
		$this->subject->setTelephone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telephone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail()
	{
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAdresseReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getAdresse()
		);
	}

	/**
	 * @test
	 */
	public function setAdresseForStringSetsAdresse()
	{
		$this->subject->setAdresse('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'adresse',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCodePostalReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCodePostal()
		);
	}

	/**
	 * @test
	 */
	public function setCodePostalForStringSetsCodePostal()
	{
		$this->subject->setCodePostal('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'codePostal',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVilleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getVille()
		);
	}

	/**
	 * @test
	 */
	public function setVilleForStringSetsVille()
	{
		$this->subject->setVille('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ville',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhotoReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPhoto()
		);
	}

	/**
	 * @test
	 */
	public function setPhotoForFileReferenceSetsPhoto()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setPhoto($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'photo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPresentationReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPresentation()
		);
	}

	/**
	 * @test
	 */
	public function setPresentationForStringSetsPresentation()
	{
		$this->subject->setPresentation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'presentation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFonctionReturnsInitialValueForFonction()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getFonction()
		);
	}

	/**
	 * @test
	 */
	public function setFonctionForFonctionSetsFonction()
	{
		$fonctionFixture = new \VFVC\VfvcAnnuairevfvc\Domain\Model\Fonction();
		$this->subject->setFonction($fonctionFixture);

		$this->assertAttributeEquals(
			$fonctionFixture,
			'fonction',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getServiceReturnsInitialValueForService()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getService()
		);
	}

	/**
	 * @test
	 */
	public function setServiceForServiceSetsService()
	{
		$serviceFixture = new \VFVC\VfvcAnnuairevfvc\Domain\Model\Service();
		$this->subject->setService($serviceFixture);

		$this->assertAttributeEquals(
			$serviceFixture,
			'service',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrganismeReturnsInitialValueForOrganisme()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getOrganisme()
		);
	}

	/**
	 * @test
	 */
	public function setOrganismeForOrganismeSetsOrganisme()
	{
		$organismeFixture = new \VFVC\VfvcAnnuairevfvc\Domain\Model\Organisme();
		$this->subject->setOrganisme($organismeFixture);

		$this->assertAttributeEquals(
			$organismeFixture,
			'organisme',
			$this->subject
		);
	}
}
